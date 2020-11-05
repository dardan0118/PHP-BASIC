<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
    
}

function intputType()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);
}

function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;

    $producten = array (" appel", " peren");
    $productenprijzen = array (0.25, 0.30);

    echo $producten[$productnummer];
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function korting()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch($leeftijd)
    {
        case $leeftijd <=15:
            echo "€ 0.10";
    break;
        case 18:
            echo "€ 0.20"; 
    break;
    default:
    echo "voer eerst je leeftijd in";

    }

}

function totaal()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    
    $producten = array (" appel", " peren");
    $productenprijzen = array (0.25, 0.30);
   
    echo $aantalProd * $productenprijzen [$productnummer];

}


?>