"use strict";

const $txtNb01 = document.getElementById("txtNb01")
const $txtNb02 = document.getElementById("txtNb02")
const $txtResult = document.getElementById("txtResult")

document.getElementById("btnResult").addEventListener("click", calculer);

function calculer(){
    let nb01 = parseInt($txtNb01.value);
    let nb02 = parseInt($txtNb02.value);
    let result = nb01 + nb02;
    $txtResult.value = result;
}