$(function(){
//aqui vai todo o codigo de JAVA Script
$('nav.mobile').click(function(){
    // o que vai acontecer quando clicarmos na  nav.mobile!
    var listaMenu = $('nav.mobile ul');
    /*abrir menu atravez do fadein
    if(listaMenu.is(':hidden')== true){
    listaMenu.fadeIn();
    
    
    }
    //fechando menu atrazes do fadeout
    else{
    listaMenu.fadeOut();
    
    }
    // movimento de abertura
    listaMenu.slideToggle();
   
    //abrir ou fechar sem efeitor
    /* if(listaMenu.is(':hidden')== true){
       //listaMenu.show();
       //op2 listaMenu.css('display','block');
        
        
        }
        
        else{
        //listaMenu.hide();
        //op2 listaMenu.css('display','none');        
        }*/
        if(listaMenu.is(':hidden')== true){
            
            //op2 var icone $('.botao-menu-mobile 1');
          var icone = $('.botao-menu-mobile').find('i');
          icone.removeClass('fa-duotone fa-bars');
          icone.addClass('fa-light fa-xmark');
        listaMenu.slideToggle();
        
        }
        else{
          var icone = $('.botao-menu-mobile').find('i');
          icone.removeClass('fa-light fa-xmark');
          icone.addClass('fa-duotone fa-bars');
          
          
            listaMenu.slideToggle();
        }


        //material-symbols-outlined
        //material-icons
        
        
})
})