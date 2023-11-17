// scroll_to_top
let btn = document.querySelector(".top");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    btn.style.display = 'block';
  } else{
    btn.style.display = 'none'
  }

}

function scrollToTop(){
  window,scrollTo(0,0)
}


document.querySelector('.hamburger-button').addEventListener('click', function() {
  document.querySelector('.nav-links').style.display = 
  (document.querySelector('.nav-links').style.display == 'none') ? 'block' : 'none';
});
