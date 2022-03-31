<?php

function msg($mensagem){
    echo /*"<h1>".*/$mensagem/*."</h1>"*/;
   }

        function mais(){
            return $_POST['n1'] + $_POST['n2'];
        }

        function menos(){
            return $_POST['n1'] - $_POST['n2'];
        }

        function vezes(){
            return $_POST['n1'] * $_POST['n2'];
        }

        function divisao(){
            return $_POST['n1'] / $_POST['n2'];
        }


   if(isset($_POST['ope']) && $_POST['ope'] == "*" ){
        $resul = vezes();
        echo "O resultado de: ".$_POST['n1'] ." ". $_POST['ope']. " ". $_POST['n2']." é: ".$resul;        
   }elseif(isset($_POST['ope']) && $_POST['ope'] == "/" ){
        $resul = divisao();
        echo "O resultado de: ".$_POST['n1'] ." ". $_POST['ope']. " ". $_POST['n2']." é: ".$resul;
        if($_POST['n2'] == 0){
            echo "Não existe resultado";
        }
   }elseif(isset($_POST['ope']) && $_POST['ope'] == "+" ){
        $resul = mais();
        echo "O resultado de: ".$_POST['n1'] ." ". $_POST['ope']. " ". $_POST['n2']." é: ".$resul;
   }elseif(isset($_POST['ope']) && $_POST['ope'] == "-" ){
        $resul = menos();
        echo "O resultado de: ".$_POST['n1'] ." ". $_POST['ope']. " ". $_POST['n2']." é: ".$resul;
   }



?>