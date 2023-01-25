// export default function manageForm() {
//     const form = document.getElementById('contact-form');

//     form.addEventListener('submit', function(e){
//         e.preventDefault();
//         console.log(e);

//         let ajaxurl = $(this).attr('action');

//         let name = document.querySelector('#name').value;

//         $.ajax({
//             url : ajaxurl,
//             data : {
//                 action : 'send_message',
//                 name : name
//             },
//             method : 'POST', //Post method
//             success : function( response ){ console.log(response) },
//             error : function(error){ console.log(error) }
//         })
//     })
// }

// import * as $ from 'jquery';

const form = document.getElementById('contact-form');

form.addEventListener('submit', function(e){
    e.preventDefault();
    console.log(e);

    let ajaxurl = form.getAttribute('action');

    let data = {
        action: document.querySelector('#action').value, 
        nonce:  document.querySelector('#nonce').value,
        surname: document.querySelector('#surname').value,
        name: document.querySelector('#name').value,
        mail: document.querySelector('#mail').value,
        phone: document.querySelector('#phone').value,
        subject: document.querySelector('#subject').value,
        message: document.querySelector('#message').value,

    }

    fetch(ajaxurl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Cache-Control': 'no-cache',
        },
        body: new URLSearchParams(data),
    })
    .then(response => response.json())
    .then(response => {
        console.log(response);

        if (!response.success) {
            alert(response.data);
            return;
        }

        let toast = document.querySelector('#toast')
        toast.classList.add('-launch')

        toast.addEventListener("animationend", function() {
            toast.classList.remove("-launch");
        });

        form.reset();
        data = {};
    });
})