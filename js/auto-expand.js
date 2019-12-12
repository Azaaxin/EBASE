var textarea = document.querySelector('textarea');

textarea.addEventListener('keydown', autosize);
             
function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el.style.cssText = '-moz-box-sizing:content-box';
    if(el.scrollHeight == 100){
    el.removeAttribute("style");
    }else{
      el.style.cssText = 'height:' + el.scrollHeight + 'px';
    }
  },0);
}