/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Fonction qui gère les popups
function popup() {
//Lorsque vous cliquez sur un lien de la classe poplight
    $('a.poplight').on('click', function () {
        var popID = $(this).data('rel'); //Trouver la pop-up correspondante
        var popWidth = $(this).data('width'); //Trouver la largeur

        //Faire apparaitre la pop-up et ajouter le bouton de fermeture
        $('#' + popID).fadeIn().css({'width': popWidth}).prepend('<a href="#" class="close"><img src="./res/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
        //Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
        var popMargTop = ($('#' + popID).height() + 80) / 2;
        var popMargLeft = ($('#' + popID).width() + 80) / 2;
        //Apply Margin to Popup
        $('#' + popID).css({
            'margin-top': -popMargTop,
            'margin-left': -popMargLeft
        });
        //Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues d'anciennes versions de IE
        $('body').append('<section id="fade"></section>');
        $('#fade').css({'filter': 'alpha(opacity=80)'}).fadeIn();
        return false;
    });
    //Close Popups and Fade Layer
    $('body').on('click', 'a.close, #fade, button.annuler', function () { //Au clic sur le body...
        $('#fade , .popup-block').fadeOut(function () {
            $('#fade, a.close').remove();
        }); //...ils disparaissent ensemble

        return false;
    });
}

jQuery(function ($) {
    popup();

    $("#envoyer").click(function () {
        valid = true;

        if ($('#nom').val() == "") {
            $('#nom').css("border-color", "red");
            valid = false;
        }
        return valid;
    });
});