<?php
include ("conexaoEletro.php");

    class produtos extends conexaoEletro{
        #Exibição dos produtos em um json
        public function exigeProdutos() {
            $BFetch=$this->conectaDB()->prepare("select * from produtos");
            $BFetch->execute();

            $J=[];
            $I=0;

            while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                $J[$I]=[
                    "idprodutos"$Fetch['idprodutos'],
                    "nomeimagem"$Fetch['nomeimagem'],
                    "descricao"$Fetch['descricao'],
                    "preco"$Fetch['preco'],
                    "precofinal"$Fetch['precofinal'],
                    "imagem"$Fetch['imagem']
                ];
                $I++;
        }
        header("Access-Control-Allow-Origin:*");
        header("Content-type: application/json");
        echo json_encode($J);
    }
        
?>