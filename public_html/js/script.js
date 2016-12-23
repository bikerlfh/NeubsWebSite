/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function showMessaginfo(title,menssage)
{
    toastr.info(menssage, title); 
}
function showMessageWarning(title,menssage)
{
    toastr.warning(menssage, title);
}
function showMessageError(title,menssage)
{
    toastr.error(menssage, title);
}
function showMessageSuccess(title,menssage)
{
    toastr.success(menssage, title);
}

(function($) {  
    $.get = function(key)   {  
        key = key.replace(/[\[]/, '\\[');  
        key = key.replace(/[\]]/, '\\]');  
        var pattern = "[\\?&]" + key + "=([^&#]*)";  
        var regex = new RegExp(pattern);  
        var url = unescape(window.location.href);  
        var results = regex.exec(url);  
        if (results === null) {  
            return null;  
        } else {  
            return results[1];  
        }  
    }  
})(jQuery);