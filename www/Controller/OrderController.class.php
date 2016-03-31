<?php

class OrderController
{
    public $message = "Order";

    public function run()
    {
        $_SESSION["breadcrumbTrial"]->disable();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!Empty($_GET["action"])) {
                switch (strtolower($_GET["action"])) {
                    case "submit":
                        $this->saveorder();
                        break;
                }
            }

            $cart = new Cart();
            $cartArray = $cart->cartObject();
            $i = 0;
            foreach ($_POST as $key => $value) {

                if($value < 1)
                {
                    for($j = 0; $j < count($cartArray); $j++)
                    {
                        if($key == $cartArray[$j]->Product)
                        {
                            unset($cartArray[$j]);
                            $cartArray = array_values($cartArray);
                        }
                    }
                }
                else
                {
                    $cartArray[$i]->Quantity = $value;
                    $i++;
                }
            }
            $cart->setObject($cartArray);

            header("HTTP/1.1 303 See Other");
            header("Location: http://" . $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI]);
            exit(0);
        }

        if (Empty($_GET["action"])) {
            $this->showCart();
        } else {
            switch (strtolower($_GET["action"])) {
                case "order":
                    $this->order();
                    break;
                default:
                    $this->showCart();
                    break;
            }
        }

    }

    public function saveorder()
    {
        // SAVE ORDER
        if(isset($_POST["delivery"]) && isset($_POST["payment"]))
        {
            $cart = new Cart();
            if($cart->save($_POST["delivery"], $_POST["payment"]))
            {
                render("orderconfirmation.tpl", []);
                exit(0);
            }
            apologize("Error saving cart.");

        }

    }
    public function showCart()
    {
        render("cart.tpl", ["title" => "My Cart",
            "message" => $this->message]);
    }

    public function order()
    {

        guaranteeLogin("/Order/action=order");
        $cart = new Cart();
        if($cart->ItemCount() != 0)
        {
            render("order.tpl", ["title" => "My Cart",
                "user" => $_SESSION["user"]]);
            exit(0);
        }
        $this->showCart();

    }

}
