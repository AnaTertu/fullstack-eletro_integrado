<?php
    abstract class conexaoEletro {
        #conexão com banco de dados
        protected function conectaDB()
        {
            try{
                $Con=new PDO("mysql: host=localhost; dbname=react". "root", "");
                return $Con;
            }catch (PDOException $Erro){
                return $Error->getMessage();
            }
        }
    }

    ?>

    <!--
        < ?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "fullstackeletro";

            // Criando conexão com o BD!
            $conn = mysqli_connect($servername, $username, $password, $database);

            // Verificando a conexão
            if (!$conn){
                die("A conexão com o Banco de Dados falhou: " . mysqli_connect_error());
            }
        ?>
       