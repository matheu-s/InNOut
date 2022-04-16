(function (){
  const menuToggle = document.querySelector('.menu-toggle');
  menuToggle.addEventListener('click', function (){
     const bodyElement = document.querySelector("body");
     bodyElement.classList.toggle('hide-sidebar');
   })
})()
