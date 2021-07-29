<?php
    class reembolsoClass{

        public $conn;

        public function __construct(){
            require_once("bd_class.php");
            $bd = new bd_class ();
            $this->conn = $bd->Conectar(); /* Variavel chamando as informações do banco de dados para conexão */
        } 

        public function Insert($dados){
            echo ('to aqui 2'); //comentario teste


             $sql = "INSERT INTO reembolso (nome, identificacao, funcao, tipoSolicitacao, descricao, valor, data) values
                         ('".$dados["nome"]."','".$dados["identificacao"]."' ,'".$dados["funcao"]."','".$dados["solicitacao"]."','".$dados["descricao"]."','".$dados["valor"]."', '".$dados["dataSolicitacao"]."')";
                
                echo ($sql);
                if (mysqli_query($this->conn, $sql)) {
                    // Resultado caso os campos sejam preenchidos corretamente
                    echo "New record created successfully";
                   return true;
             } else {
                   echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
                   // Em caso de não preenchimento de campos
                   return false;
             }
             mysqli_close($this->conn);
        

    }

    public function Mostrar(){

        $sql = sprintf("SELECT nome, identificacao, funcao, tipoSolicitacao, descricao, valor, data FROM reembolso");
        
        if ($dados = mysqli_query($this -> conn, $sql)) {
            // Resultado caso os campos sejam preenchidos corretamente
            
           
        } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($this -> conn);
           // Em caso de não preenchimento de campos
          
        }

        mysqli_close($this ->conn);

        return $dados;

    }

    public function Editar(){
        
    }
}
?>
