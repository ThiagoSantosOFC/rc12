'use strict';


//go to listar.php when page loads
window.onload = function() {
    window.location.href = "../controllers/listar.php";
    //fecth json data from listar.php
    fetch("../controllers/listar.php")
        .then(response => response.json(Alunos))
        .then(data => {
            console.log(data);
        }
    );

    
}