jQuery(window).load(function() {

    jQuery("#page_wait").fadeOut("slow");
});

jQuery(document).ready(function() {

    /*jQuery("#management-menu ul li.expanded ul").hide();
  	jQuery("#management-menu ul li.expanded a").click(function() {
  		 jQuery(this).parent().toggleClass("menu-open");
  		 jQuery(this).parent().find("ul").slideToggle( "slow" );

    });*/


  if (jQuery(".submenu-active").length > 0) {

          jQuery(".submenu-active").parent().addClass("parent-active");
          jQuery(".submenu-active").parent().toggleClass("menu-open");
         // jQuery(".submenu-active").parent().show();
          jQuery(".submenu-active").parent().parent().addClass("active menu-open");


  }

});
