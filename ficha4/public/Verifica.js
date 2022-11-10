"use strict";

let form = document.getElementById("formAdd");
let password = document.getElementById("password");
let password2 = document.getElementById("confirmarPassword");


form.addEventListener("submit", function (e) {
  if (password.value != password2.value) {
    e.preventDefault();
    alert("As senhas não conferem");
  } else {
    //não faz nada
  }
});
