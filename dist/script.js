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