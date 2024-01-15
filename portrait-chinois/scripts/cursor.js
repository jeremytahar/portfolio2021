document.addEventListener("DOMContentLoaded", function () {

var cursor = document.querySelector('.cursor');
var cursorinner = document.querySelector('.cursor2');
var a = document.querySelectorAll('a');

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursorinner.style.left = x + 'px';
  cursorinner.style.top = y + 'px';
});

document.addEventListener('mousedown', function(){
  cursor.classList.add('click');
  cursorinner.classList.add('cursorinnerhover')
});

document.addEventListener('mouseup', function(){
  cursor.classList.remove('click')
  cursorinner.classList.remove('cursorinnerhover')
});

a.forEach(item => {
  item.addEventListener('mouseover', () => {
    cursor.classList.add('hover');
    cursorinner.classList.add('cursorinnerhover');
  });
  item.addEventListener('mouseleave', () => {
    cursor.classList.remove('hover');
    cursorinner.classList.remove('cursorinnerhover');
  });
})



let theme = document.querySelector('.theme');

theme.addEventListener('click', () => {
    theme.classList.toggle('iconoir-half-moon');
    theme.classList.toggle('iconoir-sun-light');
    document.querySelectorAll('.light-mode').forEach(function(e){
      e.classList.toggle("dark-mode");
    })
    
});

document.querySelectorAll('.info-btn, .info-modal .iconoir-xmark').forEach(function(e){
  e.addEventListener('click', function () {
    let modal = document.querySelector('.info-modal');
    modal.classList.toggle('modal-visible');
  });
})


});