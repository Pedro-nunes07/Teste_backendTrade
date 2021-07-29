<?php
      // $servername = "localhost";
      // $database = "cadastro_reembolso";
      // $username = "root";
      // $password = "";
      // // Create connection
      // $conn = mysqli_connect($servername, $username, $password, $database);
      // // Check connection
      // if (!$conn) {
      //       die("Connection failed: " . mysqli_connect_error());
      // }


      //  if (mysqli_query($conn, $sql)) {
      //        echo "New record created successfully";
      //  } else {
      //        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      //  }
      //  mysqli_close($conn);

       class bd_class {
            private $servername;
            private $username;
            private $password;
            private $database;

            public $conn;

            public function Conectar(){
                  
                  $servername = "localhost";
                  $database = "cadastro_reembolso";
                  $username = "root";
                  $password = "";
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $database);
                  // Check connection
                  if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                  } else {
                        return $conn;
                  }
            
            
            }
       }
?>