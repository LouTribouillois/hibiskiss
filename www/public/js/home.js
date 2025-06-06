let next = document.querySelector('.next-slide')
let prev = document.querySelector('.prev-slide')

next.addEventListener('click', function(){
    let items = document.querySelectorAll('.slide')
    document.querySelector('.slider-container').appendChild(items[0])
})

prev.addEventListener('click', function(){
    let items = document.querySelectorAll('.slide')
    document.querySelector('.slider-container').prepend(items[items.length - 1]) 
})


