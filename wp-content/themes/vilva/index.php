<?php


get_header(); ?>
       
    

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





<?php

get_footer();
