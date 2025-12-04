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

document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('read-more-btn');
        const hiddenContent = document.getElementById('hidden-pets');

       
        if (btn && hiddenContent) {
            btn.addEventListener('click', function() {
                
                if (hiddenContent.classList.contains('hidden-content')) {
                    
                   
                    hiddenContent.classList.remove('hidden-content');
                    btn.textContent = 'VER MENOS BICHINHOS';
                    
                } else {
                    
                    
                    hiddenContent.classList.add('hidden-content');
                    btn.textContent = 'VER MAIS BICHINHOS';
                    
                }
            });
        }
    });