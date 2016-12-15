/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slides");
        }
      });
    });
