<?php

/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 3-2-2016
 * Time: 18:49
 */
class AccountController
{
    public function run()
    {
        if (Empty($_GET["action"])) {
            $this->pagepicker();
        } else {
            $_SESSION["Redirect"] = null;
            switch (strtolower($_GET["action"])) {
                case "register":
                    $this->register();
                    break;
                case "logout":
                    $this->logout();
                    break;
                case "recover":
                    $this->recover();
                    break;
                case "activate":
                    $this->activate();
                    break;
                default:
                    $this->pagepicker();
                    break;
            }
        }
    }

    public function guaranteeLogin($s)
    {
        if (!Empty($_SESSION["user"])) {

            return true;
        } else {
            $_SESSION["Redirect"] = $s;
            $this->pagepicker();
            exit(1);
        }

    }

    private function pagepicker()
    {
        if (!Empty($_SESSION["user"]) && (empty($_GET["token"]) || (strtolower($_GET["action"])) != "activate")) {
            $this->manage();
        } else if (empty($_GET["token"]) || (strtolower($_GET["action"])) != "activate") {
            $this->login();
        } else
            $this->activate();
    }

    private function activate()
    {
        if (empty($_GET["token"])) {
            redirect("/Account");
            exit(1);
        }
        $this->checkActivateToken($_GET["token"]);
        redirect("/Account");
    }

    private function recover()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!Empty($_POST["token"])) {
                // newpassword-form is filled in
                $username = $this->checkRecoveryToken($_POST["token"]);
                $userModel = new User();
                if ((Empty($_POST["username"]) || !$userModel->validateUsername($_POST["username"]))) {
                    apologize("Invalid form.");
                }
                if ($username != $_POST["username"]) {
                    apologize("Invalid form.");
                }
                // check passwords
                if (Empty($_POST["password1"]) || Empty($_POST["password2"])) {
                    render("newPassword.tpl", ["error" => "Niet alles ingevuld", "title" => "nieuw wachtwoord", "username" => $username, "token" => $_POST["token"]]);
                    exit(1);
                }
                if ($_POST["password1"] != $_POST["password2"]) {
                    render("newPassword.tpl", ["error" => "Wachtwoorden komen niet overeen.", "title" => "nieuw wachtwoord", "username" => $username, "token" => $_POST["token"]]);
                    exit(1);
                }

                // save password
                if (!$userModel->newPassword($_POST["username"], $_POST["password1"])) {
                    render("newPassword.tpl", ["error" => "Wachtwoord moet minimaal 8 tekens lang, een hoofdletter, een kleine letter, een nummer en een speciaal teken bevatten.", "title" => "nieuw wachtwoord", "username" => $username, "token" => $_POST["token"]]);
                    exit(1);
                }
                // reset hash & date
                $userModel->resetHash($_POST["username"]);
                redirect("/");


                exit(1);
            } else if (!Empty($_POST["username"])) {
                // new recovery creation
                $userModel = new User();
                if (!$userModel->validateUsername($_POST["username"])) {
                    $this->recoverError("Invalid username");
                }
                if ($userModel->newHash($_POST["username"])) {
                    $mailer = new Email();
                    if ($userModel->setRecoveryMail($mailer, $_POST["username"])) {
                        $mailer->sendMail();
                        $this->recoverError("Email send.");

                    } else {
                        $this->recoverError("Email send error.");
                    }

                }
                $this->recoverError("deze gebruiker heeft afgelopen 24 uur al een recovery aangevraagd.");
            }
        } else if (!Empty($_GET["token"])) {

            $username = $this->checkRecoveryToken($_GET["token"]);
            render("newPassword.tpl", ["title" => "nieuw wachtwoord", "username" => $username, "token" => $_GET["token"]]);
            exit(1);

        }
        // new recovery
        render("recover.tpl", ["title" => "Log in", "username" => ""]);

    }

    private function checkRecoveryToken($token)
    {
        $userModel = new User();
        $this->canRecover($userModel);
        // validate email-link
        $username = $userModel->validateToken($token);
        if ($username === false) {
            $userModel->logRecovery();
            apologize("niet geldige token.");
        }
        return $username;
    }

    private function checkActivateToken($token)
    {
        $userModel = new User();
        $this->canRecover($userModel);
        // validate email-link
        $username = $userModel->validateActivateToken($token);
        if ($username === false) {
            apologize("niet geldige token.");

        }
        return $username;
    }

    private function canRecover($userModel)
    {
        if (!$userModel->CanRecover()) {
            apologize("Er is afgelopen 24 uur te veel (verkeerde) activiteit van dit IP adress gekomen. Wacht 24 uur voordat u opnieuw een recovery probeert.");
        }
    }

    private function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!Empty($_POST["username"]) && !Empty($_POST["password"])) {
                // htmlspecialchar
                $userModel = new User();
                if ($userModel->validate(htmlspecialchars($_POST["username"]), htmlspecialchars($_POST["password"]))) {
                    if (!empty($_SESSION["Redirect"])) {
                        redirect($_SESSION["Redirect"]);
                        $_SESSION["Redirect"] = null;
                        exit(0);
                    }
                    redirect("/");
                    exit();
                }
                $this->loginError("gebruikersnaam/wachtwoord combinatie is niet geldig");

            }
            $this->loginError("Niet alle gegevens zijn ingevuld");
        } else {
            render("login.tpl", ["title" => "Log in", "username" => ""]);
        }
    }

    private function loginError($mess)
    {
        render("login.tpl", ["title" => "Log in", "error" => $mess, "username" => htmlspecialchars($_POST["username"])]);
        exit();
    }

    private function recoverError($mess)
    {
        render("recover.tpl", ["title" => "Log in", "error" => $mess, "username" => htmlspecialchars($_POST["username"])]);
        exit();
    }

    private function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (Empty($_POST["username"])
                || Empty($_POST["password1"])
                || Empty($_POST["password2"])
                || Empty($_POST["name"])
                || Empty($_POST["surname"])
                || Empty($_POST["address"])
                || Empty($_POST["postalcode"])
                || Empty($_POST["country"])
                || Empty($_POST["province"])
                || Empty($_POST["city"])
            ) {
                render("register.tpl", ["title" => "register", "error" => "Vul AUB alles in"]);
                exit(1);
            }

            // Validate stuff
            if ($_POST["password1"] != $_POST["password2"]) {
                render("register.tpl", ["title" => "register", "error" => "wachtwoorden komen niet overeen."]);
                exit(1);
            }

            $arr = [];
            $arr["username"] = strtolower(filter_var($_POST["username"], FILTER_SANITIZE_EMAIL));
            $arr["password"] = $_POST["password1"];
            $arr["name"] = $_POST["name"];
            $arr["surname"] = $_POST["surname"];
            $arr["address"] = $_POST["address"];
            $arr["postalcode"] = $_POST["postalcode"];
            $arr["country"] = $_POST["country"];
            $arr["province"] = $_POST["province"];
            $arr["city"] = $_POST["city"];

            $userModel = new User();
            $res = $userModel->tryRegister($arr);
            if ($res === true) {
                $mailer = new Email();
                if ($userModel->setActivateMail($mailer, $arr["username"])) {
                    $mailer->sendMail();
                    render("register.tpl", ["title" => "register", "error" => "Mail send."]);
                    exit(1);

                } else {
                    render("register.tpl", ["title" => "register", "error" => "Mail send error"]);
                    exit(1);
                }
            }
            render("register.tpl", ["title" => "register", "error" => $res]);
            exit(1);
            // usermodel register
            // send email with register token.


        } else {
            render("register.tpl", ["title" => "register"]);
            exit();
        }
    }

    private function manage()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (Empty($_POST["zipcode"])
                || Empty($_POST["address"])
                || Empty($_POST["city"])
                || Empty($_POST["country"])
                || Empty($_POST["state"])
                || Empty($_POST["country"])
            ) {
            } else {
                $_SESSION["user"]->addNewAddress($_POST["zipcode"], $_POST["address"], $_POST["city"], $_POST["country"], $_POST["state"], $_POST["country"]);
                render("addressmanagement.tpl", ["user" => $_SESSION["user"]]);
                exit(0);
            }
        }

        if (Empty($_GET['tab'])) {
            render("profile.tpl", ["user" => $_SESSION["user"]]);
        } else
            if ($_GET['tab'] == "addresses") {
                render("addressmanagement.tpl", ["user" => $_SESSION["user"]]);
            } else if ($_GET['tab'] == "orders") {
                $orders = (new User())->getAllOrders($_SESSION["user"]->email);
                render("orderlist.tpl", ["orders" => $orders, "user" => $_SESSION["user"]]);
            } else if ($_GET['tab'] == "wishlist") {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (Empty($_POST["productId"])) {
                        render("wishlist.tpl", ["error" => "Vul AUB alles in", "user" => $_SESSION["user"]]);
                        exit(1);
                    } else {
                        $_SESSION["user"]->removeFromWishlist($_SESSION["user"]->email, $_POST["productId"]);
                        $products = (new User())->getAllWishlistProducts($_SESSION["user"]->email);
                        render("wishlist.tpl", ["user" => $_SESSION["user"], "products" => $products]);
                        exit(0);
                    }
                }
                $products = (new User())->getAllWishlistProducts($_SESSION["user"]->email);
                render("wishlist.tpl", ["user" => $_SESSION["user"], "products" => $products]);
            } else {
                apologize("Could not find page " . $_GET['tab']);
            }

    }


    /**
     * Logs out current user, if any.  Based on Example #1 at
     * http://us.php.net/manual/en/function.session-destroy.php.
     */

    private
    function logout()
    {

        $cart = new Cart();
        $cartArray = $cart->cartObject();

        $cart = new Cart();
        $val = $cart->cartObject();

        $_SESSION = [];
        $cart->setObject($val);
        // expire cookie
        if (!empty($_COOKIE[session_name()])) {
            setcookie(session_name(), "", time() - 42000);
        }

        // destroy session
        session_destroy();
        session_start();
        $cart->setObject($cartArray);
        // redirect to main page
        redirect("/");
    }
}