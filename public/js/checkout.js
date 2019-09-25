const btn1 = document.querySelector(),
      btn2 = document.querySelector(),
      div1 = document.querySelector(),
      div2 = document.querySelector(),
      div3 = document.querySelector(),
      block2 = document.querySelector('#block2'),
      block3 = document.querySelector('#block3')


btn1.addEventListener('click', () => {
    div1.style.display = "none";
    div3.style.display = "none";
    div2.style.display = "block";
    block2.classList.add('active');
})
btn2.addEventListener('click', () => {
    div1.style.display = "none";
    div2.style.display = "none";
    div3.style.display = "block";
    block3.classList.add('active');
})