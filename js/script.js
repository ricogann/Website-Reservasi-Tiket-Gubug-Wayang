const stripe = Stripe('pk_test_51L6vV1DN5mknzFoWBWxSD8JcAw0XeCyEmmYnvW7RRBpzcVMjQvLPtcZTeXsvxtTdWpe7LYx3pjNqJqElqUbE49Os00LYoP1rmN');
const btn = document.querySelector('#btn')
btn.addEventListener('click', ()=>{
    fetch('checkoutProses.php',{
        method:"POST",
        headers:{
            'Content-Type' : 'application/json',
        },
        body: JSON.stringify({})
    }).then(res=> res.json())
    .then(payload => {
        stripe.redirectToCheckout({sessionId: payload.id})
    })
})