$(document).ready(function(){
    // Add scrollspy to <body>
    $('body').scrollspy({target: ".navbar", offset: 50});   
  
    // Add smooth scrolling on all links inside the navbar
    $("#navbarNav a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
        // Prevent default anchor click behavior
        // event.preventDefault();
        
        // Store hash
        var hash = this.hash;
        
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 160
        }, 800, function(){
        
        // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
        }// End if
    });
  });

// const formulario = document.getElementById('formularioContacto');
// formulario.addEventListener('submit', (e) => {
//     e.preventDefault();
    
//     var datos = new FormData(formulario);
    
//     let array = {
//         "eal_name" : datos.get('name'),
//         "eal_email" : datos.get('email'),
//         "eal_phone" : datos.get('phone'),
//         "eal_message" : datos.get('message'),
//         "eal_presence" : datos.get('switch-one')
//     }

//     console.log(array);

//     fetch('/Api/public/Api/Contact/Post',{
//         method: 'POST',
//         body: JSON.stringify(array),
//         headers: {
//             'Content-Type':'aplication/json'
//         }
//     })
//     .then(res => res.json())
//     .then(data => {
//         array = {}
//         console.log('Enviado Correctamente');
//     })
// })