/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $(window).scroll(function() {
      $(".imagen-animacion-botton-to-top").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("anim-botton-to-top");
        }
      });
    });
    
    $(window).scroll(function() {
      $(".imagen-animacion-left-to-right").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("anim-left-to-right");
        }
      });
    });
