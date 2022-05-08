
//menu section

var show = true;

const menuSection = document.querySelector ('.container');
const menubtn = document.querySelector ('.btn-menu');


 menubtn.addEventListener('click', () => {

    document.body.style.overflow = show ? 'hidden' : 'initial'
    
    menuSection.classList.toggle('on', show)
    show = !show;

})



//more or less product
var numero = 0;

function less() {
  numero--;
  setValue(numero);
}

function more() {
  numero++;
  setValue(numero);
}

function setValue(value) {
    if(value >=1 && value <= 10) {
        document.getElementById('quantity').value = value;
    }
}

setValue(numero);





// view image changer

var m_image = document.getElementById('m_image');
var s_image = document.getElementById('s_image').getElementsByTagName('img');

for(var i = 0; i < s_image.length; i++){
    s_image[i].addEventListener('click', full_image);
}

function full_image(){
    var ImageSRC = this.getAttribute('src');
    m_image.innerHTML = "<img src=" + ImageSRC + "  height='350' width='400' > ";
}



// remove item do carrinho

// var x = document.getElementById('x');

//     btnx.addEventListener('click', () => {
//         <?php
//         session_start();
//         debug($_SESSION['carrinho']);
        
//         ?>
//     })




    function tamanhoP() {
    document.getElementById("demo").innerHTML = "P";
    var tamanhop = 'P'
    // window.location.href = window.location.pathname +'?tamanho=' + tamanhop;
    }

    function tamanhoM() {
    document.getElementById("demo").innerHTML = "M";
    let tamanhom = 'M'
    }

    function tamanhoG() {
    document.getElementById("demo").innerHTML = "G";
    let tamanhog = 'G'
    }

    function tamanhoGG() {
    document.getElementById("demo").innerHTML = "GG";
    let tamanhogg = 'GG'
    }

    
    $('#calcular').click(function() {
    let formSerialized = $('#formDestino').serialize();
    $.post('/lib/calcular_cep.php', formSerialized, function(resultado) {
        console.log(resultado);
    return;
        resultado = JSON.parse(resultado);
        let valorFrete = resultado.preco;
        let prazoEntrega = resultado.prazo;
        $('#resultado').html(`O valor do frete é <b>R$ ${valorFrete}</b> e o prazo de entrega é <b>${prazoEntrega} dias úteis</b>.`);
    });
});
