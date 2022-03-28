//menu section

var show = true;

const menuSection = document.querySelector ('.container');
const menubtn = document.querySelector ('.btn-menu');


 menubtn.addEventListener('click', () => {

    document.body.style.overflow = show ? 'hidden' : 'initial'
    
    menuSection.classList.toggle('on', show)
    show = !show;

})


function el(elId) {
    return document.getElementById(elId);
}
//mais ou menos produtos


var result = parseInt(el('quantity').value);
let less1 = document.querySelector('.button-less');
let more1 = document.querySelector('.button-more');


function less() {

    less1.addEventListener('click', () => {
        let lessResult = parseInt( result - 1);
        el('quantity').value = lessResult
        console.log(lessResult);
    })
    }

function more() {
    
        more1.addEventListener('click', () => {
            let moreResult = parseInt( result + 1);
            el('quantity').value = moreResult
            console.log(moreResult);
        }
    })
    }
