<?php
    class ViewModels {
        protected static function getView($vista) {
            $listaBlanca=["home", "client-list","client-new","client-search","client-update","company","item-list","item-new","item-search","item-update","reservation-list","reservation-new","reservation-pending","reservation-reservation","reservation-search","reservation-update","user-list","user-new","user-search","user-update"];
            

            if (in_array($vista, $listaBlanca) ) {
            
            
                if (is_file("./views/container/" . $vista . "-view.php")) {
                    
                    $ruta = "./views/container/" . $vista . "-view.php";
                } else {
                    $ruta = "login";
                }
            }else if ($vista == "index" || $vista == "login") {
                $ruta = "login";
            } else {
                $ruta = "404";
            }
            return $ruta;
        }
    }










?>