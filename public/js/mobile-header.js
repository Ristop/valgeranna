/**
 * Created by Risto on 2/25/2016.
 */

jQuery(document).ready(function(){
    jQuery(".menu-trigger").click(function(){
        jQuery(".nav-menu").slideToggle(400, function(){
            jQuery(this).toggleClass("nav-expanded").css('display', '');
        });
    })
});

jQuery(document).ready(function(){
    jQuery(".menu-trigger-admin").click(function(){
        jQuery(".nav-menu-admin").slideToggle(400, function(){
            jQuery(this).toggleClass("nav-expanded").css('display', '');
        });
    })
});


