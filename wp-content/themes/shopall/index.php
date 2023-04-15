<?php

$options = shopall_get_theme_options();
get_header(); 
?>
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>


<div class="line-under-banner-kosss">
	
	</div>
	<div class="block-recommendantion-kosss">
		<span> FRESH PICKS: OUR TOP RECOMMENDATIONS OF THE WEEK</span>
		<div class="block-recommendantion-kosss-owerflow">
			<div class="block-recommendantion-kosss-wrapper">
				<div class="block-recommendantion-kosss-test">Блок 1</div>
			</div>
			<div class="block-recommendantion-kosss-wrapper">
				<div class="block-recommendantion-kosss-test">Блок 2</div>
			</div>
			<div class="block-recommendantion-kosss-wrapper">
				<div class="block-recommendantion-kosss-test">Блок 3</div>
			</div>
			<div class="block-recommendantion-kosss-wrapper">
				<div class="block-recommendantion-kosss-test">Блок 4</div>
  			</div>
			  <div class="block-recommendantion-kosss-wrapper">
				<div class="block-recommendantion-kosss-test">Блок 2</div>
			</div>
			<div class="block-recommendantion-kosss-wrapper">
				<div class="block-recommendantion-kosss-test">Блок 3</div>
			</div>
			<div class="block-recommendantion-kosss-wrapper">
				<div class="block-recommendantion-kosss-test">Блок 4</div>
  			</div>
		</div>
		
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(function() {
    var container = $('.block-recommendantion-kosss-owerflow');
    var wrapper = $('.block-recommendantion-kosss-wrapper');
    var xStart, scrollLeft, down;

    container
      .on('mousedown', function(event) {
        down = true;
        xStart = event.pageX;
        scrollLeft = container.scrollLeft();
      })
      .on('mouseleave', function() {
        down = false;
      })
      .on('mouseup', function() {
        down = false;
      })
      .on('mousemove', function(event) {
        if (!down) return;
        var x = event.pageX - xStart;
        container.scrollLeft(scrollLeft - x);
      });

    wrapper.on('mousedown', function(event) {
      event.stopPropagation();
    });
  });
</script>


<div class="extraordinary-flowers-kosss">
	<div class="extraordinary-flowers-kosss-text">
		<h2>EXTRAORDINARY FLOWERS. DELIVERED.</h2>
		<p>Shop luxury flowers direct to your door for special occasions or daily life. <br>Explore seasonal stems and elevated gifts, always hand-picked with flower-lovers in mind.</p>
	</div>
	<div class="extraordinary-flowers-kosss-img"></div>
</div>

<div class="three-img-blog">
	<div class="three-img-blog-container">
		<div class="three-img-blog-card">
			<div class="three-img-blog-card-img blog-card-img-first"></div>
			<a class="pagebuilder-button-kosss">SHOP SUMMERILL & BISHOP</a>
		</div>
		<div class="three-img-blog-card">
			<div class="three-img-blog-card-img blog-card-img-second"></div>
			<a class="pagebuilder-button-kosss">SHOP TULIPS</a>
		</div>
		<div class="three-img-blog-card">
			<div class="three-img-blog-card-img blog-card-img-threet"></div>
			<a class="pagebuilder-button-kosss">SHOP PLANTS</a>
		</div>
	</div>
</div>
<div class="block-reviews-and-photos">
	<div class="block-reviews-and-photos-contant">
		<h2>what our community <br> is saying about us</h2>
		<div class="block-reviews-and-photos-contant-rev">
			<div>
				<div class="foto-stars-rewius"></div>
  				<span>
					<p> i ordered for my mum. beutiful colour, easy ordering, easy delivery. always chic</p>
				</span>
				<b><i><h4>SOPHIE</h4></i></b>
			</div>
			<div>
				<div class="foto-stars-rewius"></div>
  				<span>
					<p>The colour and quality is amazing! my girl was so happy. cant recommend enough!</p>
				</span>
				<b><i><h4>HARRY</h4></i></b>
			</div>

		</div>
	</div>
	<div class="block-reviews-and-photos-img"></div>

</div>

<div class="only-foto-delivery"></div>
<div class="last-section-contant-kosss">
	<h3><b>luxery flower delivery: about flowerbx</b></h3>
	<p>At FLOWERBX, we deliver fresh, seasonal, high-quality flowers to your doorstep, with reliable flower delivery options 7 days a week, including UK nationwide next-day and same-day delivery in London. Order flowers online with us, and you will always receive exquisite flowers, whether they are for your home or sent as a gift.</p>
  	<div class="last-section-contant-block-kosss">
		<div class="last-section-contant-block-kosss-card">
			<div class="last-section-contant-block-kosss-img"></div>
  			<h3>LUXURY FLOWERS</h3>
			<p>At FLOWERBX, we are experts in exclusive, hard-to-find flower varieties. Our bouquets always feature one type of flower, with no filler and no fuss. We source flowers straight from their growers, which means our quality is second to none and ensures flowers last as long as possible.</p>
  			<a href="#">Shop now</a>
		</div>
		<div class="last-section-contant-block-kosss-card ">
			<div class="last-section-contant-block-kosss-img last-block-kosss-card-second"></div>
  			<h3>PLANET-KIND ARRANGEMENTS</h3>
			<p>Our florals and foliage always put the Earth first with a cut-to-order, zero-waste model, and carbon-neutral flower delivery. Our packaging is made from recycled materials and is compostable, and we’re forever innovating to improve all areas of our product and supply chain.</p>
  			<a href="#">Discover our mission</a>
		</div>
	</div>
</div>




<?php
get_footer();
?>
