"use strict";

//function arrow to get alunos json
const getAlunos = async () => {
  const response = await fetch(
    "http://localhost/fichas/rc12/ficha5/ordenar.php?ordenar=turma"
  );
  const data = await response.json();
  console.log(data);
  return data;
};


const MostrarAlunos = () => {
    try {
        getAlunos().then((data) => {
          data.forEach((aluno) => {
            let tr = document.createElement("tr");
            let td = document.createElement("td");
        
            td.innerHTML = aluno.nome;
            tr.appendChild(td);
            td = document.createElement("td");
            td.innerHTML = aluno.idade;
            tr.appendChild(td);
            td = document.createElement("td");
            td.innerHTML = aluno.email;
            tr.appendChild(td);
            td = document.createElement("td");
            td.innerHTML = aluno.ano;
            tr.appendChild(td);
            td = document.createElement("td");
            td.innerHTML = aluno.username;
            tr.appendChild(td);
            td = document.createElement("td");
            td.innerHTML = aluno.id;
            tr.appendChild(td);
            
            let buttonremover = document.createElement("button");
            buttonremover.innerHTML = "Remover";
            buttonremover.addEventListener("click", () => {
              fetch(
                "http://localhost/fichas/rc12/ficha5/remover.php?id=" + aluno.id
              )
                .then((response) => response.json())
                .then((data) => {
                  console.log(data);
                  if (data.status == "ok") {
                    tr.remove();
                    alert("Aluno removido com sucesso!");
                    window.location.reload();
                    
                  } else {
                    alert("Erro ao remover aluno!");
                  }
                });
            });
            td = document.createElement("td");
            td.appendChild(buttonremover);
            tr.appendChild(td);
    
            document.getElementById("tabela").appendChild(tr);
          });
        });
      } catch (error) {
        console.log(error);
        return error;

      }

};
//get alunos json when page loads
window.onload = function () {
    if (document.getElementById("tabela") != null) {
      MostrarAlunos();
    }
    else {
        console.log("não existe tabela");

    }

};
