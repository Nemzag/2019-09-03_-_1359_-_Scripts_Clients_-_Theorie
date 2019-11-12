"use strict";
//--------------------------------------
//  Code appelé automatiquement 
//--------------------------------------

const $txtNb01 = document.getElementById("txtNb01")
const $txtNb02 = document.getElementById("txtNb02")
const $txtResult = document.getElementById("txtResult")
// const $optOpPlus = document.getElementById("optOp+")
// const $optOpMoins = document.getElementById("optOp-")
// const $optOpDiv = document.getElementById("optOp/")
// const $optOpMult = document.getElementById("optOp*")

const $grpOp = document.getElementById("grpOp")

//--------------------------------------
//  
//--------------------------------------

$txtNb01.addEventListener("keyup", calculer);
$txtNb02.addEventListener("keyup", calculer);
// $optOpPlus.addEventListener("click", calculer);
// $optOpMoins.addEventListener("click", calculer);
// $optOpDiv.addEventListener("click", calculer);
// $optOpMult.addEventListener("click", calculer);
document.getElementById("btnEffacer").addEventListener("click", effacer);

$grpOp.addEventListener("click", calculer);


//--------------------------------------
// Fonction calculer
//--------------------------------------

function calculer(){
    let nb01 = parseInt($txtNb01.value);
    let nb02 = parseInt($txtNb02.value);
    let result;

    
    switch(valeurBoutonsRadio("operateur")){

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

//--------------------------------------
// Fonction pour obtenir la valeur des boutons radio
//--------------------------------------

function valeurBoutonsRadio(grpBoutonsRadio) {

let tabBoutonsRadio = document.getElementsByName(grpBoutonsRadio);

for (let i = 0; i < tabBoutonsRadio.length; i++) {
    if (tabBoutonsRadio[i].checked) {
        return tabBoutonsRadio[i].value;
        }
    }

    return null;

}