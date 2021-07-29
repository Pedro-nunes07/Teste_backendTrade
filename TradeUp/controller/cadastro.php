<?php

    require_once('./models/reembolsoClass.php');

    
        

     if ($_SERVER["REQUEST_METHOD"] == "POST"){
         $reembolson = new reembolsoController();
        $reembolson -> criarReembolso();

     }
    // Controller que chama as informações contidas na model 'reembolsoClass'

    
    class reembolsoController{


        public function criarReembolso(){

            $reembolso["nome"] = $_POST["nome"]; //atribuição do campo "nome" vindo do formulário para variavel
            $reembolso["identificacao"]= $_POST["identificacao"]; // atribuição do campo "identificacao" vindo do formulário para variavel
            $reembolso["dataSolicitacao"]= $_POST["dataSolicitacao"]; //atribuição do campo "data" vindo do formulário para variavel
            $reembolso["funcao"] = $_POST["funcao"]; //atribuição do campo "funcao" vindo do formulário para variavel
            $reembolso["solicitacao"] = $_POST["solicitacao"]; //atribuição do campo "tipo" vindo do formulário para variavel
            $reembolso["descricao"] = $_POST["descricao"]; //atribuição do campo "descricao" vindo do formulário para variavel
            $reembolso["valor"] = $_POST["valor"];  //atribuição do campo "valor" vindo do formulário para variavel



    
            // Requisição da model reembolsoClass
            $rembolsoClass = new reembolsoClass();
            $result = $rembolsoClass->Insert($reembolso);
    
            // Caso todas as infos sejam preenchida, se manterá na mesma pagina
            // Para um novo cadastro
            if($result){
                header("Location: ../index.php");
            // Tratamento de exceção 
            }else {
                echo "ocorreu um problema na base de dados";
            }
    
        }
        public function listar (){

             // Requisição da model reembolsoClass
             $rembolsoClass = new reembolsoClass();
             $result = $rembolsoClass->Mostrar();


            $linha = mysqli_fetch_all($result);

            

            return $linha;
        }
    }


?>