<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<!-- For this when javascript Not working Showing Message -->
    <noscript>
    <div class="nos">
    <p>JavaScript must be enabled in order for you to use the Site in standard view. However, it seems JavaScript is either disabled or not supported by your browser. To use standard view, enable JavaScript by changing your browser options.</p>
    </div>
    </noscript>

<!-- End For this when javascript Not working Showing Message -->

<!-- Top Menu for GIGW -->

	<div class="container-fluid  top-menu-bg wow fadeInDown">
		<div class="container">
			<div class="time"><?php print render($page['clock']); ?></div>
                <ul class="top-menu" id="example1">
                    <li class="skip-to-m-h"><a href="#MainDiv" title="Skip to Main Content" tabindex="1">Skip to Main Content</a></li>
                    <li class="screen-reader-m-h" title="Screen Reader Access"><a href="/content/screen-reader-access" title="Screen Reader Access">Screen Reader Access</a></li>
                    <li class="screen-reader-m-h"><a href="javascript:void(0);" title="Increase font size" onClick="set_font_size('increase')">A<sup>+</sup><span class="hidethis">Increase font size</span></a></li>
                    <li class="screen-reader-m-h"><a href="javascript:void(0);" title="Reset font size" onClick="set_font_size('')">A <span class="hidethis">Reset font size</span></a></li>
                    <li class="screen-reader-m-h"><a href="javascript:void(0);" title="Decrease font size" onClick="set_font_size('decrease')" >A<sup>-</sup> <span class="hidethis">Decrease font size</span></a></li>
                    <li class="hight-contrast screen-reader-m-h"><a href="javascript:void(0);" title="High Contrast" class="hc" onclick="chooseStyle('change', 60);">A <span class="hidethis">High Contrast</span></a></li>
                    <li class="normal screen-reader-m-h"><a href="javascript:void(0);" title="Normal" class="normal"  onclick="chooseStyle('style', 60);">A <span class="hidethis">Normal</span></a></li>  
                    <li class="blue-theme screen-reader-m-h"><a href="javascript:void(0);" title="blue" onclick="chooseStyle('style', 60);"><img src="http://niltd.in/cyber_forensics//images/blue-theme.png"></a></li>
                    <li class="green-theme screen-reader-m-h"><a href="javascript:void(0);" title="Green" onclick="chooseStyle('green', 60);"><img src="http://niltd.in/cyber_forensics//images/green.png"></a></li>
                    <li class="orange-theme screen-reader-m-h"><a href="javascript:void(0);" title="Orange" onclick="chooseStyle('orange', 60);"><img src="http://niltd.in/cyber_forensics//images/orange.png"></a></li>
                    <li><a href="#" title="हिंदी">हिंदी <span class="hidethis">Hindi Link:This will open in new window.</span></a></li> 
                </ul> 
		</div>
    </div>	
<!-- End Top Menu for GIGW -->

<!-- Start Logo Part -->
<div class="container-fluid" id="main-nav">
<div class="row">    
        <div class="container wow fadeInDown" data-wow-duration="1s" >
        	<div class="row">
	<div class="col-md-5">
						
					<div class=" logo">
					<img src="http://niltd.in/cyber_forensics//images/cyber-forensic-logo.png" title="Cyber Forensic" alt="cyber-forensic" class="img-responsive logo-img">
						<p class="logo-sub-heading">Resource Centre for</p>
						<h1><a href="#">Cyber Forensics - India</a></h1> 
					</div>
	</div>

    <div class="col-md-7 navigation-bg wow fadeInDown" data-wow-duration="2s">
	<?php
                                // id, direction, depth should have the values you want them to have.
                                $menu = theme('nice_menus', array('id' => 0, 'direction' => 'down', 'depth' => 4, 'menu_name' => 'main-menu', 'menu' => NULL));
                                print $menu['content'];
                                ?>
				
				
<img src="http://niltd.in/cyber_forensics//images/cdac-logo.png" alt="CDAC" class="cdac-lo">
	</div>
</div>
</div>
				
                </div>
			</div>
<!-- Logo Part End -->



  <div class="container-fluid about-us-inner-page">
	<div class="row">
  <div class="container">
	<div class="row">
    <div class="col-md-12">
    <h2 class="heading"><?php print $title ?> </h2>
		</div>
    </div>
 </div>
    </div>   
    

    </div>
<div class="container">
<div class="row">
  <div class="col-md-12">
   <?php print render($breadcrumb); ?> 
 <a class="print" onclick="javascript: window.print()" title="Print" href="javascript: void(0)"> <img src="http://niltd.in/cyber_forensics/images/print-icon.png"  alt="print"  title="Print"> </a>
  </div>
 </div>
</div>
<!-- About Us Part --> 
  <div class="container content-area">
	<div class="row">
    <div class="col-md-12">
    
     <?php if ($title): ?>
        <h2><?php print $title; ?></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
 
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
         <div align="right"><br />Last Modified on : 2019-02-02</div>
		</div>
    </div>
</div>
<!-- Footer part --> 
<footer>

<div class="footer wow fadeInUp">
<div class="container">
<div class="row">
<div class="col-md-3">
        <?php print render($page['footer1']); ?>   
        </div>
        
        <div class="col-md-3">
         <?php print render($page['footer2']); ?>   
        </div>  
        
        <div class="col-md-3">
         <?php print render($page['footer3']); ?> 
           
        </div>
        
        <div class="col-md-3">
         <?php print render($page['footer4']); ?>
           
        </div>
		</div>
</div>
</div>
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
<section class="copy-right">
<div class="container">
    
    
<div class="row">
<div class="col-md-3">
<div class="last-update"><?php 
  $blockObject = block_load('views', 'site_last_updated-block');
    $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
    $output = drupal_render($block);
    print $output;
    

?> </div>
</div>

<div class="col-md-6 text-center">
    
    <?php 
  $blockObject = block_load('block', '1');
    $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
    $output = drupal_render($block);
    print $output;
    

?>

</div>
<div class="col-md-3 text-right">
<div class="visitor-count">Visitor Counter: 37945</div>
</div>
</div>

</div>
</section>
 </footer>



<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("main-nav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
	<!-- Footer part -->  
    

  <script>
  /*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
  
  </script>