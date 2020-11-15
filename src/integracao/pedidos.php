<?php
include ("conexaoEletro.php");

    class pedidos extends conexaoEletro{
        #Exibição dos pedidos em um json
        public function exigePedidos() {
            $BFetch=$this->conectaDB()->prepare("select * from pedidos");
            $BFetch->execute();

            $J=[];
            $I=0;

            while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                $J[$I]=[
                    "idpedidos"$Fetch['idpedidos'],
                    "nomecliente"$Fetch['nomecliente'],
                    "endereco"$Fetch['endereco'],
                    "fonecliente"$Fetch['fonecliente'],
                    "nomeproduto"$Fetch['nomeproduto'],
                    "valorunitario"$Fetch['valorunitario'],
                    "quantidade"$Fetch['quantidade'],
                    "valortotal"$Fetch['valortotal']
                ];
                $I++;
        }
        header("Access-Control-Allow-Origin:*");
        header("Content-type: application/json");
        echo json_encode($J);
    }
        
?>
       

<!--
    

     $sql = "select * from comentarios";
     $result = $Con->query($sql);
 
     if ($result->num_rows > 0) {
         while($rows = $result->fetch_assoc()) {
             echo "Data: ", $rows['dia']; 
             echo "<br>";
             echo "Nome: ", $rows['nome']; 
             echo "<br>";
             echo "Mensagem: ", $rows['msg']; 
             echo "<br>";
             echo "<hr>";
         }
     }
     else {
         echo "Nenhum comentário ainda!";
     }
 
     ?>
 }
}
     -->