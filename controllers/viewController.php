<?php
require_once "./models/viewModels.php";

class ViewController extends ViewModels {
    
    public function getTemplateController() {
        return require_once "./views/plantilla.php";
    }
    public function getViewController() {
        if (isset($_GET["views"])) {
            $view = explode("/", $_GET["views"]);
            $response = ViewModels::getView($view[0]);
        } else {
            $response = "login";
        }
        
            return $response;
    }
}    





?>
