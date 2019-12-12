window.addEventListener('click', function(e){   
    if (document.getElementById('menu').contains(e.target) || document.getElementById('ham_menu').contains(e.target)){
        menu.style.right = "0%";
    } else{
        menu.style.right = "-50%";
    }
    if (document.getElementById('toggle').contains(e.target)){
        toggle.style.marginRight = "100px";
        setTimeout(function (){
            toggle.style.paddingTop = "0px";
          }, 300);
        
    } else{
        toggle.style.marginRight = "0px";
        
        setTimeout(function (){
            toggle.style.paddingTop = "30px";
          }, 300);
        
    }
  });
