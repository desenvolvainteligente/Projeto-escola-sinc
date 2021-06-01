<?php
    $url = explode('/', $_GET['url'] ?? 'home');
    if (isset($url) && file_exists('view/'.$url[0].'.phtml')) {
        $pagina = count($url);
        if ($pagina == 1) {
            require_once 'view/'.$url[0].'.phtml';
        } else {
            switch ($pagina) {
                case 2:
                    if (file_exists('view/'.$url[0].'/'.$url[1].'.phtml')) {
                        require_once 'view/'.$url[0].'/'.$url[1].'.phtml';
                    } else {
                        require_once 'view/404.phtml';
                    }
                    break;
                case 3:
                    if (file_exists('view/'.$url[0].'/'.$url[1].'/'.$url[2].'.phtml')) {
                        require_once 'view/'.$url[0].'/'.$url[1].'/'.$url[2].'.phtml';
                    } else {
                        require_once 'view/404.phtml';
                    }
                    break;
            }
        }
    } else {
        require_once 'view/404.phtml';
    }
?>