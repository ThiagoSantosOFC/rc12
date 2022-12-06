'use strict';

//function arrow to get alunos json
const getAlunos = async () => {
    const response = await fetch('http://localhost/fichas/rc12/ficha5/listar.php');
    const data = await response.json();
    console.log(data);
    return data;

}

//get alunos json when page loads
window.onload = function() {
    getAlunos();

    //show alunos in table
    let table = document.getElementById("table");
    let data = getAlunos();
    data.then(function (data) {
        
        for (let i = 0; i < data.length; i++) {
            let row = table.insertRow(i + 1);
            row.insertCell(0).innerHTML = data[i].nome;
            row.insertCell(1).innerHTML = data[i].email;
            row.insertCell(2).innerHTML = data[i].curso;
            row.insertCell(3).innerHTML = data[i].ano;
        });

}