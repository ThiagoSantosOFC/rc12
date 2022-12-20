"use strict";

let formlogin = document.getElementById("formReg");


console.log(formlogin);
let email = document.getElementById("email");
let password = document.getElementById("password");
let password2 = document.getElementById("password2");


try {
    formlogin.addEventListener("submit", function (e) {
        if (password.value != password2.value) {
            e.preventDefault();
            alert("Passwords não coincidem");
        } else {
          //faz nada
        }
    });
} catch (error) {
    console.log(error);
}



