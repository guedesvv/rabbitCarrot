var href;

function myfunction() {
    $('form').on('submit', function (e) {
        e.preventDefault();
        href = $('datalist option[value="' + $('input[list="receitas"]').val() + '"]').find('a').prop('href');
        if (typeof href !== 'undefined')
            window.location.href = href;
    });
}

const btn = document.querySelectorAll('button');

                        const funcao = function() {

                            alert("Seu feedback positivo foi enviado com sucesso, obrigado!")
                            document.getElementById("botao").disabled = true;
                            document.getElementById("botao2").disabled = true;


                        }
                        btn[4].addEventListener("click", funcao)

