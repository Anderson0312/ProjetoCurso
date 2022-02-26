//menu section

var show = true;

const menuSection = document.querySelector ('.container')
const menubtn = menuSection.querySelector ('.btn-menu')


menubtn.addEventListener('click', () => {

    document.body.style.overflow = show ? 'hidden' : 'initial'
    
    menuSection.classList.toggle('on', show)
    show = !show;

})



