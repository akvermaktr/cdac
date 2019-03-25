<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?>  <!DOCTYPE html>
<html lang="en">



<head>
  
  <title><?php print $head_title; ?></title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
      <title>Cyber Forensics - India</title>
<META name="description" content="Cyber Forensics is the scientific processes of identification, seizure, acquisition, authentication, analysis, documentation and preservation of digital evidence involved in cyber crimes committed using computer systems, computer network, mobile devices and other peripheral devices and reporting the evidence to a court of law.">
<META name="keywords" content="JCyber Forensics is the scientific processes of identification, seizure, acquisition, authentication, analysis, documentation and preservation of digital evidence involved in cyber crimes committed using computer systems, computer network, mobile devices and other peripheral devices and reporting the evidence to a court of law.">
        <!-- Bootstrap Core CSS -->
    <link href="<?php echo  $base_path . $directory ?>/css/bootstrap.css" rel="stylesheet">
	
	<!-- Fonts CSS -->
    <link href="<?php echo  $base_path . $directory ?>/css/fonts.css" rel="stylesheet">

    <!-- Custom CSS  -->
    <link href="<?php echo  $base_path . $directory ?>/css/style.css" rel="stylesheet">
  
    <!-- Color Theme CSS -->
	<link rel="alternate stylesheet" href="<?php echo  $base_path . $directory ?>//css/change.css" media="screen" title="change" />
    <link rel="alternate stylesheet" href="<?php echo  $base_path . $directory ?>//css/green.css" media="screen" title="green" />
    <link rel="alternate stylesheet" href="<?php echo  $base_path . $directory ?>//css/orange.css" media="screen" title="orange" />
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo  $base_path . $directory ?>//css/responsive.css" />
    <link rel="stylesheet" href="<?php echo  $base_path . $directory ?>//css/meanmenu.css" />
      
    <!-- Custom Fonts -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

        <!-- jQuery -->
	<script src="<?php echo  $base_path . $directory ?>//js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo  $base_path . $directory ?>//js/bootstrap.js"></script>
	
	    <!-- Proper JS File -->
    <script src="<?php echo  $base_path . $directory ?>//js/popper.js"></script>
    
    <!-- Menu Access for Tab Key -->
	<script src="<?php echo  $base_path . $directory ?>//js/superfish.js"></script>
    
    <!-- font Size Increase Decrease -->
    <script src="<?php echo  $base_path . $directory ?>//js/font-size.js"></script>
    
    <script src="<?php echo  $base_path . $directory ?>//js/swithcer.js"></script>
    
    <script>

        // initialise plugins
     if(getCookie("mysheet") == "change" ) {
        setStylesheet("change") ;
    }else if(getCookie("mysheet") == "style" ) {
        setStylesheet("style") ;
    }else if(getCookie("mysheet") == "green" ) {
        setStylesheet("green") ;
    } else if(getCookie("mysheet") == "orange" ) {
        setStylesheet("orange") ;
    }else   {
        setStylesheet("") ;
    }
	</script>


	<script>
    
    (function($){ //create closure so we can safely use $ as alias for jQuery
    
    $(document).ready(function(){
    
    // initialise plugin
    var example = $('#example').superfish({
    //add options here if required
    });
    
    // buttons to demonstrate Superfish's public methods
    $('.destroy').on('click', function(){
    example.superfish('destroy');
    });
    
    $('.init').on('click', function(){
    example.superfish();
    });
    
    $('.open').on('click', function(){
    example.children('li:first').superfish('show');
    });
    
    $('.close').on('click', function(){
    example.children('li:first').superfish('hide');
    });
    });
    
    })(jQuery);
    </script>

	<script>
    
    (function($){ //create closure so we can safely use $ as alias for jQuery
    
    $(document).ready(function(){
    
    // initialise plugin
    var example = $('#example1').superfish({
    //add options here if required
    });
    
    // buttons to demonstrate Superfish's public methods
    $('.destroy').on('click', function(){
    example.superfish('destroy');
    });
    
    $('.init').on('click', function(){
    example.superfish();
    });
    
    $('.open').on('click', function(){
    example.children('li:first').superfish('show');
    });
    
    $('.close').on('click', function(){
    example.children('li:first').superfish('hide');
    });
    });
    
    })(jQuery);
    </script>

	 <script src="<?php echo  $base_path . $directory ?>/js/jquery.meanmenu.js"></script>   
     <script type="text/jscript">
    jQuery(document).ready(function () {
        jQuery('#main-nav nav').meanmenu()
    });
    </script>   

	<script type='text/javascript'>//<![CDATA[ 
    $('.carousel').carousel({
      interval: 5000,
      pause: false
    }) 
    </script>
     
    <link href="<?php echo  $base_path . $directory ?>/css/modern-ticker.css" type="text/css" rel="stylesheet">
    <script src="<?php echo  $base_path . $directory ?>/js/jquery.js" type="text/javascript"> </script>
    <script type="text/javascript">
                $(function () {
                    $(".ticker1").modernTicker({
                        effect: "scroll",
                        scrollInterval: 20,
                        transitionTime: 500,
                        autoplay: true
                    });
                    });
    </script>
    
    <script type="text/javascript">
                $(function () {
                    $(".ticker").modernTicker({
                        effect: "scroll",
                        scrollInterval: 20,
                        transitionTime: 500,
                        autoplay: true
                    });
                    });
    </script>
    
 
       <link rel="stylesheet" href="<?php echo  $base_path . $directory ?>/css/animate.css">
      <script src="<?php echo  $base_path . $directory ?>/js/wow.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>    
  
</head>
<body id="fontSize" class="<?php print $classes; ?>" <?php print $attributes;?>>
  
  
  <?php print $page; ?>
  
</body>
</html>
