<?php

class ErrorController
{

    public function render() {
        render("error_view.tpl" , ["title" => "Oops!",
            "link" => $this->message ]);
        exit(2);
    }

}
