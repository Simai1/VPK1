const checkbox = document.querySelector('.form__checkbox');
const toggle = document.querySelector('.nav-toggle');
const header = document.querySelector('.header__inner');
checkbox.addEventListener('click', (event) => {
    event.preventDefault();
    if(!checkbox.classList.contains("active")) { 
        checkbox.classList.add('active'); 
    }
    else{
        checkbox.classList.remove('active'); 
    }
})
toggle.addEventListener('click', (event) => {
    event.preventDefault();
    if(!header.classList.contains("active")) { 
        header.classList.add('active'); 
    }
    else{
        header.classList.remove('active'); 
    }
})



