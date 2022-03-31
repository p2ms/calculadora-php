<?php 
 
function msgH1($mensagem){
 echo "<h1>".$mensagem."</h1>";
}
 
function msgH2($mensagem){
    echo "<h2>".$mensagem."</h2>";
   }
 
   function acrescimo($mont,$acres){
       $resultado = $mont*(1+($acres/100));
       msgH1($resultado);
       return $resultado;
   }
 
function desconto($mont, $desc){
 
    $resultado =$mont*(1-($desc/100));
    msgH1($resultado);
}
 
function mensagem(){
   $mensagem = "funcao sem parametro";
    return $mensagem;
}
 
msgH1("Boa noite");
msgH2("Boa noite");
 
$total = acrescimo(1000,10);
$total = acrescimo(acrescimo(1000,10),10);
 
msgH1(mensagem());
