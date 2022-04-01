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


//remove element
  
