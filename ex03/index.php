<!-- Variavel:
 $nome = "Nome";
 Const:
 conts PAIS ="Brasil"; -->

 <?php 
 $nome= "iza";
 $sobrenome = "Ferrari"; //o valor esta armazenado no server-side.
 const PAIS = "brasil";
 echo "Muito prazer, $nome $sobrenome voce mora no ". PAIS;
 ?>
 <!-- Regras para nomes identificadores:
    1- variaveis começam com $
    2- o segundo pode ser letra ou numero
    3- caractere a-z. A-Z, 0-9, _
    4- aceita ascii a partir de 128
    5- aceita caracteres pontuados
    6- a linguiagem é case sensive
    7- nomes especiais nao podem ser usados
    Dicas:
    1- minusculas para variaveis
    2- maiusculas para const
    3- camelCase para metodos e atributos
    4- SNAKE_CASE para const
    -->