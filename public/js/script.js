document.addEventListener('DOMContentLoaded', function () {
    const imagemExibidaTop = document.getElementById('imagemExibidaTop');
    const darkModeToggle = document.getElementById('darkModeToggle');



        function applyDarkMode() {
            const isDarkMode = localStorage.getItem('darkMode') === 'true';


            document.body.classList.toggle('dark-mode', isDarkMode);

            if(isDarkMode){
                imagemExibidaTop.src = 'assets/img/bg/sec-shape2-top-escuro.png';
            }
            else{
                imagemExibidaTop.src = 'assets/img/bg/sec-shape2-top.png';
            }


            if (darkModeToggle) {
                darkModeToggle.checked = isDarkMode;
            }
        }


        applyDarkMode();



        if (darkModeToggle) {
            darkModeToggle.addEventListener('change', function () {
                const isDarkMode = darkModeToggle.checked;
                localStorage.setItem('darkMode', isDarkMode);
                applyDarkMode();
            });
        }
});



function showAlert(mensagem, targetElementId, timeout = 3000) {
    var messageDiv = document.getElementById(targetElementId);
    messageDiv.innerHTML = mensagem;
    messageDiv.classList.remove('msgContato');

    setTimeout(function() {
        messageDiv.classList.add('msgContato');
    }, timeout);
}

function displayError(erros){
    let todosOsErros = "";

    for(const[key,value] of Object.entries(erros)){
        todosOsErros += `<div class="alert alert-danger">${value.join(
            ", "
        )}</div>`;
    }
    if(todosOsErros){
        showAlert(todosOsErros,"contatoMensagem");
    }
}



document.getElementById('formContato').addEventListener('submit', function(e){
    e.preventDefault();

    var data = {
        nomeContato: document.getElementById('nomeContato').value,
        emailContato: document.getElementById('emailContato').value,
        foneContato: document.getElementById('foneContato').value,
        assuntoContato: document.getElementById('assuntoContato').value,
        mensContato: document.getElementById('mensContato').value
    };


    fetch('/equipe/enviar', {
        method: 'POST',
        headers: {
            'content-type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if(response.ok){
           return response.json().then(errorData =>{
            throw errorData
           });
        }
        return response.json();
    })
    .then(data => {
       if(data.success){
        showAlert(
            `<div class="alert alert-sucess">${data.success}</div>`,"contatoMensagem"
        );
        document.getElementById('formContato').reset();
       }
       else{
        showAlert(`<div class="alert alert-danger">Erro ao enviar email.</div>`,"contatoMensagem");
       }
    })
    .catch(error => {
        if (error.errors) {
            displayError(error.errors);
        }
        else{
            console.log("Erro desconhecido",error);
        }
    });
});

// Novo Email de Contato - Footer

function newsLetter(e){
    e.preventDefault();
    e.stopPropagation();

    var data = {
       emailDeContato : document.getElementById('emailDeContato').value,
    };


    fetch('/equipe/enviarNew', {
        method: 'POST',
        headers: {
            'content-type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if(response.ok){
           return response.json().then(errorData =>{
            throw errorData
           });
        }
        return response.json();
    })
    .then(data => {
       if(data.success){
        showAlert(
            `<div class="alert alert-sucess">${data.success}</div>`,"contatoMensagem"
        );
        document.getElementById('formContatoNew').reset();
       }
       else{
        showAlert(`<div class="alert alert-danger">Erro ao enviar email.</div>`,"contatoMensagem");
       }
    })
    .catch(error => {
        if (error.errors) {
            displayError(error.errors);
        }
        else{
            console.log("Erro desconhecido",error);
        }
    });
};


