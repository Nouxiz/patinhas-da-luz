const imgs = document.getElementById("img"); 

const img = document.querySelectorAll("#img img"); 

let idx = 0;

function carrossel(){
    idx++;

    
    if(idx > img.length - 1){
        idx = 0;
    }

    
    const larguraCarrossel = imgs.clientWidth; 
    

    imgs.style.transform = `translateX(${-idx * larguraCarrossel}px)`;
}

setInterval(carrossel, 4000);