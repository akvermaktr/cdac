
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
                    <li class="screen-reader-m-h" title="Screen Reader Access"><a href="/screenReaderAcess.aspx" title="Screen Reader Access">Screen Reader Access</a></li>
                    <li class="screen-reader-m-h"><a href="javascript:void(0);" title="Increase font size" onClick="set_font_size('increase')">A<sup>+</sup><span class="hidethis">Increase font size</span></a></li>
                    <li class="screen-reader-m-h"><a href="javascript:void(0);" title="Reset font size" onClick="set_font_size('')">A <span class="hidethis">Reset font size</span></a></li>
                    <li class="screen-reader-m-h"><a href="javascript:void(0);" title="Decrease font size" onClick="set_font_size('decrease')" >A<sup>-</sup> <span class="hidethis">Decrease font size</span></a></li>
                    <li class="hight-contrast screen-reader-m-h"><a href="javascript:void(0);" title="High Contrast" class="hc" onclick="chooseStyle('change', 60);">A <span class="hidethis">High Contrast</span></a></li>
                    <li class="normal screen-reader-m-h"><a href="javascript:void(0);" title="Normal" class="normal"  onclick="chooseStyle('style', 60);">A <span class="hidethis">Normal</span></a></li>  
                    <li class="blue-theme screen-reader-m-h"><a href="javascript:void(0);" title="blue" onclick="chooseStyle('style', 60);"><img src="<?php echo  $base_path . $directory ?>/images/blue-theme.png"></a></li>
                    <li class="green-theme screen-reader-m-h"><a href="javascript:void(0);" title="Green" onclick="chooseStyle('green', 60);"><img src="<?php echo  $base_path . $directory ?>/images/green.png"></a></li>
                    <li class="orange-theme screen-reader-m-h"><a href="javascript:void(0);" title="Orange" onclick="chooseStyle('orange', 60);"><img src="<?php echo  $base_path . $directory ?>/images/orange.png"></a></li>
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
					<img src="<?php echo  $base_path . $directory ?>/images/cyber-forensic-logo.png" title="Cyber Forensic" alt="cyber-forensic" class="img-responsive logo-img">
						<p class="logo-sub-heading">Resource Centre for</p>
						<h1><a href="#">Cyber Forensics - India</a></h1> 
					</div>
	</div>

    <div class="col-md-7 navigation-bg wow fadeInDown" data-wow-duration="2s">
				<nav>
                   <?php

 print render($page['navigation']); 
 
 ?>
				</nav>
				<div id="navigation">
   
<img src="<?php echo  $base_path . $directory ?>/images/cdac-logo.png" alt="CDAC" class="cdac-lo">
	</div>
	
	
</div>
</div>
				
                </div>
			</div>
<!-- Logo Part End -->


	
	
<!-- Start Slider -->      

  <?php print render($page['slideshow']); ?>


<div class="clearfix"> </div>
<!-- End Slider -->
<!-- Strart Menu Part -->    
 	<div class="container tt">
		<div class="row">
        <div class="col-md-12">
			<div class="ticker1 modern-ticker mt-round mt-scroll">
				<div class="latest-update"> <i class="fa fa-bell"></i> Announcement</div>
					<div class="mt-news">
					    <?php print render($page['newsticker']); ?>
						
					</div>
          			<div class="mt-controls">
                    <a href="#mt-pause" class="mt-play mt-pause" title="Pause"><span class="hidethis">Pause</span></a>
              </div>
            </div>
    	</div>
        </div>
    </div>
	
<div id="MainDiv"> 
<?php print render($page['content']); ?>
</div>

<!-- End Our Programs Section -->

<!-- Start Our Project Section -->


    </div>
<!-- End Our Project Section -->

    </section>
          
   

	<!-- Footer part --> 
 <div class="container-fluid wow slideInRight footer-slider-bg">
 <div class="container">
 <div class="row">
 <div class=" col-md-12">
 <div class="our-users">Our Users</div>
				<div class=" ticker modern-ticker modern-ticker1 mt-round mt-scroll">
					<div class="mt-news">
					    <?php print render($page['imageticker']); ?>
					    
						

	  </div>

                    <div class="mt-controls mt-controls1">

						<a title="prev" class="mt-prev" href="#modern-ticker"></a>

						<a title="next" class="mt-next mt-next1" href="#modern-ticker"></a>

				      </div>

				</div>

    </div> 
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
    /*
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }*/
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
