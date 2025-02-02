<?php

require_once "funcoesCalculo.php";

$resultado = "";
session_start(); //Iniciando a session! Permintindo uso de varáveis de session!

if(!empty($_GET['inputNum1']) && !empty($_GET['inputNum2'])){

    $numeros1 = $_GET['inputNum1'];
    $numeros2 = $_GET['inputNum2'];

    if($_GET['selectOperacoes'] == "adicao"){
        $resultado = $numeros1 . " + " . $numeros2 . " = " . adicao($numeros1,$numeros2);
    }
    else if($_GET['selectOperacoes'] == "subtracao"){
        $resultado = $numeros1 . " - " . $numeros2 . " = " . subtracao($numeros1,$numeros2);
    }
    else if($_GET['selectOperacoes'] == "multiplicacao"){
        $resultado = $numeros1 . " x " . $numeros2 . " = " . multiplicacao($numeros1,$numeros2);
    }
    else{
        $resultado = $numeros1 . " / " . $numeros2 . " = " . divisao($numeros1,$numeros2);
    }

    //echo $resultado;
    //Guarda o resultado na variável de session
    $_SESSION['resultado'] = $resultado;

    //Comando HEADER (PHP) redireciona para uma página especificada
    header('location:../index.php');
    die();
}


if(!empty($_GET['inputNum1'])){
    $temp = $_GET['inputNum1'];

    if($_GET['selectOperacoes'] == "fahren"){
        $resultado = "Temperatura em Fahrenheit:" . CelciusParaFahrenheit($temp);
    }else{
        $resultado = "Temperatura em Celcius: " . FahrenheitParaCelcius($temp);
    }

    $_SESSION['resultado'] = $resultado;

    header('location:../temperatura.php');
    die();
}

if(!empty($_POST['inputNum1'])){
    $compri = $_POST['inputNum1'];

    if($_POST['selectOperacoes'] == "metros"){
        $resultado = "Comprimento convertido em Metros é: " . CentimetrosEmMetros($compri);
        
    }else{
        $resultado = "Comprimento convertido em Centimetros é: " . MetrosEmCentimetros($compri);
    }

    $_SESSION['resultado'] = $resultado;

    header('location:../conversor.php');
    die();
}


?>