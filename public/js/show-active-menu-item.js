/**
 * Created by Risto on 2/26/2016.
 */
jQuery(document).ready(function(){
    jQuery("div.nav-menu ul li").click(function(){
        jQuery("div.nav-menu ul li").removeClass("active-link");
        jQuery(this).addClass("active-link");
    });
});