<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Twenty_Nineteen

 * @since Twenty Nineteen 1.0

 */



?>

<footer>
		    		<div class="footerLinkSection">
		    			<div class="footerLink">
		    				<div class="ftrCol">
		    					<div class="logoBox">
		    					<p data-aos="fade-right" data-aos-delay="100"><img src="<?php bloginfo('template_url'); ?>/img/ftrLogo.png"> 
		    						<strong>Asian Indian <br> Christian Church 
		    						  <small>That they all may be one </small>
		    					    </strong>
		    					</p>
		    				</div>
		    				<div class="ftrColBox">
		    					<p>
		    						<i class="fas fa-map-marker-alt"></i> 
		    						<strong>172 Springfield Avenue Berkeley<br> Heights, NJ 07922</strong>
		    					</p>
		    				</div>
		    				 <div class="ftrColBox">
		    					<p>
		    						<i class="fas fa-phone"></i> 
		    						<strong>908) 464-9777</strong>
		    					</p>
		    				   </div>
			    				   <div class="ftrColBox">
			    					<p>
			    						<i class="fas fa-envelope"></i>
			    						<strong>pastoraiccnj@gmail.com</strong>
			    					</p>
			    				  </div>
		    				</div>
		    				
		    				<div class="ftrCol width50Sec">
		    				  <div class="ftrColBox">
		    					<h2>Quick Links</h2>
		    					<ul>
		    						<li><a href="javascript:;">Watch</a></li>
		    						<li><a href="javascript:;">Explore</a></li>
		    						<li><a href="javascript:;">I’m In</a></li>
		    						<li><a href="javascript:;">Visit Us</a></li>
		    					</ul>
		    				  </div>
		    				</div>

		    				<div class="ftrCol width50Sec">
		    				  <div class="ftrColBox">
		    					<h2>Programs Offered</h2>
		    					<ul>
									<li><a href="javascript:;">Care Group</a></li>
									<li><a href="javascript:;">Mens Group</a></li>
									<li><a href="javascript:;">Womans Group</a></li>
									<li><a href="javascript:;">Choir Group</a></li>
									<li><a href="javascript:;">Team Group</a></li>
									<li><a href="javascript:;">Sunday School</a></li>
		    					</ul>
		    				  </div>
		    				</div>

		    			</div>
		    			<div class="footerMap" data-aos="fade-left" data-aos-delay="500"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.241529086033!2d-74.43265368459572!3d40.69067797933428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3bac838c2aa35%3A0xba10ae3be4cce781!2sAsian%20Indian%20Christian%20Church!5e0!3m2!1sen!2sin!4v1625638910734!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
		    		</div>
		    		<div class="copyrighSection" id="<?php echo $post->ID;?>">
		    			<p>2021 © Asian Indian Christian Church. All rights reserved</p>
		    			<ul>
		    				<li><a href="javascript:;">Privacy Policy</a></li>
		    				<li><a href="javascript:;">Terms and Conditions</a></li>
		    				<li><a href="javascript:;">Disclaimer</a></li>
		    			</ul>
		    		</div>
		    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/aos.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery-modal-video.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.jgroup').click(function() {
		$('.jgroup').removeClass('active')
		$(this).addClass('active');
		var hid = $(this).attr('id');
		hid = hid.replace('-',' ');
		$('#join-a-group-hd').val(hid);
	});
});
</script>
<script type="text/javascript">
$(function(){
  AOS.init({
    duration: 1500,
    disable: 'mobile'
  });
		

         var a = 0;
         var delay = 0;      
         console.log($('.counterSection').offset().top)
         $(window).scroll(function(){
         	if(a == 0 && $(window).scrollTop()> $('.upcommingSection').offset().top+100){
         		$('.counterSection .counter-value').each(function (index) {
		        $(this).prop('Counter',0).delay(delay).animate({
		            Counter: $(this).text()
			        }, {
			            duration: 2000,
			            easing: 'swing',
			            step: function (now) {
			                $(this).text(Math.ceil(now));
			            }
			        })
			        delay +=100;
			    });
			    console.log(a)
	         	a=1;
         	}

         	if($(window).scrollTop() <  $('.upcommingSection').offset().top+100){
                   a=0;
         	}
         })



   })
   
   
</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("May 25, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("watchIn").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("watchIn").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>
