<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            color: blueviolet;
            background-color: whitesmoke;
        }
        ::placeholder{
            color: black;
            opacity: 35%;
        }
    </style>
</head>
<body>
<?php
$idade = $_GET['idade'] ?? 0;
$sobrenome = $_GET['sobrenome'] ?? 0;
$nome = $_GET['nome'] ?? 0;
$altura = $_GET['altura'] ?? 0;
$peso = $_GET['peso'] ?? 0;
$sexo = $_GET['sexo'] ?? 1;
$nacion = $_GET['nacionalidad'] ?? 0;
    ?>
    <h1>Classe: Pessoa</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
<label for="nome">Digite seu Nome:</label>
<input type="text" name="nome" id="idnome" placeholder="Digite seu sobrenome">
<br><br>
<label for="sobrenome">Digite seu sobrenome:</label>
<input type="text" name="sobrenome" id="idsobrenome" placeholder="Digite seu Sobrenome">
<br><br>
<label for="idade">Diga a Sua idade:</label>
<input type="number" name="idade" id="ididade" placeholder="Digite Sua Idade">
<br><br>
<label for="altura">Qual a sua altura:</label>

<input type="text" name="altura" id="idaltura" placeholder="Digite sua Altura">
<br><br>
<label for="peso">Qual o seu Peso:</label>
<input type="text" name="peso" id="idpeso" placeholder="Digite seu Peso">
<br><br>
<label for="nacion">Sua Nacionalidade:</label>
<input type="text" name="nacionalidade" id="idnacion" placeholder="Digite sua Nacionalidade">
<br><br>
<label for="sexo">Sexo</label>
<br>
<label for="sexo">Masculino</label>
<input type="radio" name="sexo" id="idsexo" value="1">
<br>
<label for="sexo">Feminino</label>
<input type="radio" name="sexo" id="idsexo" value="2">
<br>
<label for="sexo">Não Faço</label>
<input type="radio" name="sexo" id="idsexo" value="3">
<br><br>

<input type="submit" value="Enviar">
<br>

<?php

switch($sexo){
    case 1:
        echo "$nome $sobrenome, $idade Anos , $altura cm de Altura, Kg$peso, Brasileiro, Sexo Masculino";
        break;
    case 2:
        echo "$nome $sobrenome, $idade Anos, $altura cm de Altura, Kg$peso, Brasileiro, Sexo Feminino";
        break;
    case 3:
        echo "$nome $sobrenome, $altura Anos, $idade cm de Altura, Kg$peso, Brasileiro, Você não faz sexo 😥";
}
?>
</body>
</html>