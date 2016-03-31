<?php

require_once("constants.inc.php");

/**
 * return error message
 */
function apologize($message)
{
    $err = new ErrorController();
    $err->message = $message;
    $err->render();
    exit;
}


/**
 * Redirects user to destination, which can be
 * a URL or a relative path on the local host.
 *
 * Because this function outputs an HTTP header, it
 * must be called before caller outputs any HTML.
 */
function redirect($destination)
{
    // handle URL
    if (preg_match("/^https?:\/\//", $destination)) {
        header("Location: " . $destination);
    } // handle absolute path
    else if (preg_match("/^\//", $destination)) {
        $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
        $host = $_SERVER["HTTP_HOST"];
        header("Location: $protocol://$host$destination");
    } // handle relative path
    else {
        // adapted from http://www.php.net/header
        $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
        $host = $_SERVER["HTTP_HOST"];
        $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
        header("Location: $protocol://$host$path/$destination");
    }

    // exit immediately since we're redirecting anyway
    exit;
}

function guaranteeLogin($page)
{
    $controller = new AccountController();
    $controller->guaranteeLogin($page);
}

/**
 * Renders template, passing in values.
 */
function render($template, $values = [])
{
    // if template exists, render it
    if (file_exists("View/$template")) {
        // extract variables into local scope
        $smarty = new Smarty();
        $smarty->assign($values);
        $smarty->escape_html = true;
        if (!empty($_SESSION["user"]))
            $smarty->assign("user", $_SESSION["user"]);

        if (!empty($_SESSION["admin"]))
            $smarty->assign("admin", $_SESSION["admin"]);

        // Breadcrumb generation
        $smarty->assign("breadcrumbTrial", $_SESSION["breadcrumbTrial"]->toArray());
        //


        if (!Empty($_SESSION["user"]))
            $smarty->assign("user", $_SESSION["user"]);


        $chart = new ComparisonChart();
        $smarty->assign("comparisonLink", $chart->getHref());
        $smarty->assign("compareCount", count($_SESSION["comparison"]));

        $cart = new Cart();
        $cart->ItemCount();
        $smarty->assign("cartSize", $cart->ItemCount());
        $smarty->assign("cart", $cart->getCart());
        $smarty->assign("totalPrice", $cart->getTotal());

        $c = new Catalogue();
        $smarty->assign("categories", $c->getCategories());


        // render header
        $smarty->display("View/header.tpl");

        // render template
        $smarty->display("View/$template");

        // render footer
        $smarty->display("View/footer.tpl");
    } // else err
    else {
        trigger_error("Invalid template: $template", E_USER_ERROR);
    }
}

?>
