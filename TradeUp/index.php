<?php
    /*$controller = null;
    $controller_missao = null;
    $controller = $_GET['controller'];

    session_start();

    switch($controller){  
        // Caso o funcionário queira sair.
        case 'novo':
            require_once('controller/cadastro.php');
            // Instanciando a classe da controller.
            $controller_missao = new controllerCadReembolso();
            // Chama o metodo "Novo()" da controller.
            $controller_missao->Novo();
            break;
    }*/
    require_once("view/cadRembolso.php");
?>