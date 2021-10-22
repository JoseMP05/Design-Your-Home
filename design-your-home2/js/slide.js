//creacion de variables
const btn_right = document.querySelector('.btn-right')
const btn_left = document.querySelector('.btn-left');
const article = document.querySelectorAll('.section-nosotros article');
const img = document.querySelectorAll('.perfil span');
const flechas = document.querySelectorAll('.flecha');
let index = 0; //variable con la q llevaremos un conteo del indice del arreglo article
let indexImg = 0;

const siguienteArticle = function (){
    if(index < article.length-1) {//funcion para que cada que se precione el boton derecho el arreglo el indice avance una posicion
        
        article[index].classList.add('desabled');
        article[++index].classList.remove('desabled');
        article[index].classList.add('target--active');
    }
    
    else{
        article[index].classList.remove('target--active');
        article[index].classList.add('desabled')
        index = 0;
        article[index].classList.remove('desabled');
        article[index].classList.add('target--active');
        
    }
}

const anteriorArticle = function (){
    if(index > 0) {
        article[index].classList.add('desabled');
        article[--index].classList.remove('desabled');
        article[index].classList.add('target--active');
    }
    else if (index == 0) {
        article[index].classList.remove('target--active');
        article[index].classList.add('desabled')
        index = article.length-1;
        article[index].classList.remove('desabled');
        article[index].classList.add('target--active');
    }
}

const siguienteImg = function (){      
    if(indexImg < article.length-1) {  
        img[indexImg].classList.add('perfil--desabled');
        img[++indexImg].classList.remove('perfil--desabled');
        img[indexImg].classList.add('perfil--active');
    }
    else{
        img[indexImg].classList.remove('perfil--active');
        img[indexImg].classList.add('perfil--desabled')
        indexImg = 0;
        img[indexImg].classList.remove('perfil--desabled');
        img[indexImg].classList.add('perfil--active');
    }
}

const anteriorImg = function (){
    if(indexImg > 0) {
        console.log(img);
        img[indexImg].classList.add('perfil--desabled');
        img[--indexImg].classList.remove('perfil--desabled');
        img[indexImg].classList.add('target--active');
    }
    else if (indexImg == 0) {
        img[indexImg].classList.remove('target--active');
        img[indexImg].classList.add('perfil--desabled')
        indexImg = img.length-1;
        img[indexImg].classList.remove('perfil--desabled');
        img[indexImg].classList.add('target--active');
    }
}

let intervaloText = setInterval(siguienteArticle, 1500);
let intervaloImg = setInterval(siguienteImg, 1500);

btn_right.addEventListener('click', (e) => { 
    e.stopPropagation();
    siguienteArticle();
    siguienteImg();
    clearInterval(intervaloText);
    clearInterval(intervaloImg);
})

btn_left.addEventListener('click', (e) => {
    e.stopPropagation();
    anteriorArticle();
    anteriorImg();
    clearInterval(intervaloText);
    clearInterval(intervaloImg);
})


btn_left.addEventListener('mouseover', function () {
    flechas[0].classList.add("flecha--activeHover");
})

btn_left.addEventListener('mouseout', function () {
    flechas[0].classList.remove("flecha--activeHover");
    
})
btn_right.addEventListener('mouseover', function () {
    flechas[1].classList.add("flecha--activeHover");
})

btn_right.addEventListener('mouseout', function () {
    flechas[1].classList.remove("flecha--activeHover");
    flechas[1].classList.remove("flecha--activeClick");
})



btn_right.addEventListener('mousedown', () => {
    flechas[1].classList.add("flecha--activeClick");
    console.log("hola")
})
btn_right.addEventListener('mouseup', () => {
    flechas[1].classList.remove("flecha--activeClick");
    console.log("hola")
})

btn_left.addEventListener('mousedown', () => {
    flechas[0].classList.add("flecha--activeClick");
    console.log("hola")
})
btn_left.addEventListener('mouseup', () => {
    flechas[0].classList.remove("flecha--activeClick");
    console.log("hola")
})