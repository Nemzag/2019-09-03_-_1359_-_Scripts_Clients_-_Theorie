"use strict";
//--------------------------------------
//  Code appelé automatiquement 
//--------------------------------------

const $txtNb01 = document.getElementById("txtNb01")
const $txtNb02 = document.getElementById("txtNb02")
const $txtSigne = document.getElementById("txtSigne")
const $txtResult = document.getElementById("txtResult")

//--------------------------------------
//  
//--------------------------------------

$txtNb01.addEventListener("keyup", calculer);
$txtNb02.addEventListener("keyup", calculer);
$txtSigne.addEventListener("change", calculer);
document.getElementById("btnEffacer").addEventListener("click", effacer);

//--------------------------------------
// Fonction calculer
//--------------------------------------

function calculer(){
    let nb01 = parseInt($txtNb01.value);
    let nb02 = parseInt($txtNb02.value);
    let result;
    
    switch($txtSigne.value){

        case "+":
            result = nb01 + nb02;
            break;

        case "-":
            result = nb01 - nb02;
            break;

        case "/":
            result = nb01 / nb02;
            break;

        case "*":
            result = nb01 * nb02;
            break;
        default:
            break;
    }
    $txtResult.value = result;
}

//--------------------------------------
// Fonction effacer
//--------------------------------------

function effacer(){
    let nb01 = $txtNb01.value = " " ;
    let nb02 = $txtNb02.value = " " ;
    let result = $txtResult.value = " ";
}