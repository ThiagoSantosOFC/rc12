'use strict';

let tabela = document.getElementById('tabela');



//function arrow to get alunos json
const getAlunos = async () => {

    
    const response = await fetch('http://localhost:80/listar.php');
    const data = await response.json();
    console.log(data);
    return data;
}

//get alunos json when page loads
window.onload = function() {
    getAlunos();


}