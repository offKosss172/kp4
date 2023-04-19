<?php

$options = shopall_get_theme_options();
get_header(); 
?>


<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>


<div class="line-under-banner-kosss"></div>
<section class="last-line-brand-photo">
	<div class="last-line-brand-photo-first"></div>
	<div class="last-line-brand-photo-second"></div>
</section>


	<div class="block-recommendantion-kosss">
		<span> FRESH PICKS: OUR TOP RECOMMENDATIONS OF THE WEEK</span>
		<div class="block-recommendantion-kosss-owerflow">
			 
		<?php require get_template_directory() . '/template-parts/recommendantion-product.php'; ?>
			 
		
			<!-- <div class="block-recommendantion-kosss-wrapper">
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
  			</div> -->
		
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
  			<a href="/shop/?orderby=price-desc&order=asc">Shop now</a>
		</div>
		<div class="last-section-contant-block-kosss-card ">
			<div class="last-section-contant-block-kosss-img last-block-kosss-card-second"></div>
  			<h3>PLANET-KIND ARRANGEMENTS</h3>
			<p>Our florals and foliage always put the Earth first with a cut-to-order, zero-waste model, and carbon-neutral flower delivery. Our packaging is made from recycled materials and is compostable, and we’re forever innovating to improve all areas of our product and supply chain.</p>
  			<a href="#">Discover our mission</a>
		</div>
	</div>
</div>
<section class="our-mission-section-kosss">
	
	<div class="our-mission-section-kosss-secondfoto"></div>
  	
</section>



<!-- 

<a href="/subscriptions/"><section class="flower-Subscriptions-first-block"></section></a>
<section class="flower-Subscriptions-second-block">
	<div  class="flower-Subscriptions-second-block-text">
		<h3><b>best subscription for those who want to behold the beauty of theeir favourite bloom.</b><br> ___ <br> <i>vogue</i> <br><br><br><b>for £40 You will receive...</b></h3>
	</div>
	<div class="flower-Subscriptions-second-block-card">
		<div class="flower-Subscriptions-second-block-carden">
			<div class="second-block-carden-foto second-block-carden-foto-first"></div>
			<p class="second-block-carden-text">Georgeous, long-lasting, seasonal flovers, valued at £65+.</p>
		</div>
		<div class="flower-Subscriptions-second-block-carden">
			<div class="second-block-carden-foto second-block-carden-foto-second"></div>
			<p class="second-block-carden-text">Our simple & elegant Royal Windsor Vase, our gift to you on first order.</p>
		</div>
		<div class="flower-Subscriptions-second-block-carden">
			<div class="second-block-carden-foto  second-block-carden-foto-thres"></div>
			<p class="second-block-carden-text">Complimentary & convenient delivery. Pause or cancel any time.</p>
		</div>
	</div>
	<a href="/subscriptions/">SEND ME FLOWER</a>
</section>
<section class="flower-Subscriptions-threth-block">
	<div class="flower-Subscriptions-threth-block-foto">
		<div class="flower-Subscriptions-threth-block-foto-one"></div>
		<div class="flower-Subscriptions-threth-block-foto-two"></div>
		<div class="flower-Subscriptions-threth-block-foto-thre"></div>
	</div>
	<div class="flower-Subscriptions-threth-block-text">
		<H2>OUR FLOWER</H2>
		<p>Each delivery will always feature one type of flower. No filler, no fuss. Just gorgeous, fresh flowers.</p>
		<p>Your subscription kicks off with our best-selling Pink Sweet Avalanche Roses.</p>
	</div>

</section>
<section class="flower-Subscriptions-for-block">
	<div class="flower-Subscriptions-for-block-foto">
		
	</div>
	<div class="flower-Subscriptions-for-block-text">
		<H2>FLEXIBLE<br>DELIVERY OPTIONS</H2>
		<p>Schedule your flowers when you want them - delivery is always complimentary with your subscriptions. if you need to reschedule, pause, or cancel, were here to help.</p>
		
	</div>
</section>
<section class="block-reviews-and-photos sections-subscriptions-five">
	<div class="block-reviews-and-photos-contant">
		<h2>what our community <br> is saying about us</h2>
		<div class="block-reviews-and-photos-contant-rev">
			<div>
				<div class="foto-stars-rewius"></div>
  				<span>
					<p> i ordered for my mum. beutiful colour, easy ordering, easy delivery. always chic</p>
				</span>
				<b><i><h4>EMELY</h4></i></b>
			</div>
			<div>
				<div class="foto-stars-rewius"></div>
  				<span>
					<p>The colour and quality is amazing! my girl was so happy. cant recommend enough!</p>
				</span>
				<b><i><h4>SAM</h4></i></b>
			</div>

		</div>
	</div>
	<div class="sections-subscriptions-five-img"></div>
</section>
<section class="sections-foto-and-many-contant">
	<div class="sections-foto-and-many-contant-foto"></div>
  	<div class="sections-foto-and-many-contant-text">
		<h4><b>FLOWER SUBSCRIPTION</b></h4>
		<p><b>How does a flower subscription work?</b></p>
		<p>Choose from our range of flower subscriptions. Simply select the type of subscription you want and choose your duration for 3, 6, or 12 months of flowers. Opt for weekly, bi-weekly, or monthly flower deliveries, and pick your first delivery date. We promise to only ever send you flower stems at their very best, every month of the year.</p>
  		<p><b>How often will I recieve my flowers?</b></p>
		<p>Once you have chosen your start date you'll recieve your flowers weekly, bi-weekly or monthly depending on the subscription plan you have chosen. Complimentary delivery is included on all subscriptions.</p>
		<p><b>What flowers will I receive with my subscription?</b></p>
		<p>Your subscription will include signature FLOWERBX flowers. These will include customer favourite single stem bouquets such as roses, tulips, peonies, hydrangeas, and more - dependant on seasonality. </p>
		<p><b>Do the flowers come with a vase?</b></p>
		<p>Your flowers come with a vase as part of your subscription. A vase will be delivered alongside your first order and will be suited to a variety of stems throughout the season so you can enjoy it all year round.</p>
		<p><b>What do I receive in my subscription?</b></p>
		<p>With your subscription, you will receive seasonal fresh flowers, every time. Each subscription delivery will come with curated care tips and a sachet of FLOWERBX Flower Food to keep your stems looking their best. You will also receive a complimentary vase with your first order, plus perks along the way.</p>
		<p><b>Can I change the address or date on my subscription?</b></p>
		<p>If you need to make any changes to your subscription, whether its the date, address or frequency please contact our customer service team who will be happy to help make any changes for you.</p>
		<p><b>Can I buy a flower subscription as a gift for someone else?</b></p>
		<p>Yes! You can buy a subscription for yourself or for someone else. Our Subscription Gift Card allows you to send flowers to a loved one on repeat, with a complimentary vase alongside their first delivery.</p>
	</div>
</section>
<section class="last-line-brand-photo">
	<div class="last-line-brand-photo-first"></div>
	<div class="last-line-brand-photo-second"></div>
</section>
<div class="line-under-banner-kosss"></div>






<section class="only-foto-subscription-gifting"></section>
<section>
	<div></div>
</section>
<section class="subscription-gifting-kosss">
	<h3><b>SEND THEM EXTRAORDINARY FLORALS WITH A MONTHLY FLOWER SUBSCRIPTION</b></h3>
	<h4><b>FLOWERS FOR EVERY OCCASION</b></h4>
	<p>From birthdays to new beginnings, sending a flower subscription is the perfect way to help them celebrate. Gift high-quality, seasonal florals on repeat for just £40 a month, with a signature vase alongside their first delivery.</p>
  	<div class="last-section-contant-block-kosss">
		<div class="last-section-contant-block-kosss-card">
			<div class="only-foto-subscription-gifting-img only-foto-subscription-gifting-one"></div>
  			<h3>GIFT A FLOWER SUBSCRIPTION GIFT CARD</h3>
			<p>For a polished present that keeps on giving and feels like pure luxury, nothing beats sending them a subscription gift card. Presented in our signature gift box and finished with a ribbon, it's the perfect go-to for flower lovers everywhere.</p>
  			<a href="#">GIFT INSTANTLY</a>
		</div>
		<div class="last-section-contant-block-kosss-card ">
			<div class="only-foto-subscription-gifting-img only-foto-subscription-gifting-second"></div>
  			<h3>SUBSCRIBE YOURSELF TO MONTHLY FLOWERS</h3>
			<p>Ideal for those that love a little floral boost, a flower subscription isn't just for gifting. Embrace new varieties and find moments of calm to arrange and admire, as your regular FLOWERRBX delivery becomes the highlight of your month.</p>
  			<a href="/flower-subscriptions/">START YOUR SUBSCRIPTION</a>
		</div>
		<div class="last-section-contant-block-kosss-card ">
			<div class="only-foto-subscription-gifting-img only-foto-subscription-gifting-threth"></div>
  			<h3>SEND THEM A DIGITAL SUBSCRIPTION</h3>
			<p>Whether it's a last-minute birthday gift or a surprise for a friend from afar, a digital flower subscription suits those unexpected present-giving moments. Shop on-site, and we'll send their subscription straight to their inbox, for an instant floral gift they'll love. </p>
  			<a href="#">GIFT INSTANTLY</a>
		</div>

	</div>
</section>

<section class="subst-gifting-block-cartgift">
	<div class="subst-gifting-block-cartgift-foto">
		<div class="subst-gifting-block-cartgift-foto-1"></div>
		<div class="subst-gifting-block-cartgift-foto-2"></div>
		<div class="subst-gifting-block-cartgift-foto-3"></div>
	</div>
	<a href="/flower-subscriptions/">start your subscription</a>
</section>
<section class="block-reviews-and-photos sections-subscriptions-five">
	<div class="block-reviews-and-photos-contant">
		<h2>what our community <br> is saying about us</h2>
		<div class="block-reviews-and-photos-contant-rev">
			<div>
				<div class="foto-stars-rewius"></div>
  				<span>
					<p> i ordered for my mum. beutiful colour, easy ordering, easy delivery. always chic</p>
				</span>
				<b><i><h4>EMELY</h4></i></b>
			</div>
			<div>
				<div class="foto-stars-rewius"></div>
  				<span>
					<p>The colour and quality is amazing! my girl was so happy. cant recommend enough!</p>
				</span>
				<b><i><h4>SAM</h4></i></b>
			</div>

		</div>
	</div>
	<div class="sections-subscriptions-six-img"></div>
</section>

<section class="sections-foto-and-many-contant subsgift-antipapping">
	<div class="sections-foto-subsgift-foto "></div>
  	<div class="sections-foto-and-many-contant-text">
		
		<p><b>How does your subscription gift card work?</b></p>
		<p>A FLOWERBX Subscription Gift Card works by helping you gift flowers to a loved one via digital or physical formats. Simply select your duration from 3, 6, or 12 months of our Classic flower subscription, and we'll deliver a physical gift card to your - or their - home, or a virtual voucher direct to their inbox.</p>
  		<p><b>Can my recipient select their start date?</b></p>
		<p>Yes! Your recipient can choose their start date. Once you have gifted them a Subscription Gift Card, they can use it to start a Classic subscription at a time to suit their schedule.</p>
		<p><b>What flowers will I receive with my subscription?</b></p>
		<p>Your subscription will include signature FLOWERBX flowers. These will include customer favourite single stem bouquets such as roses, tulips, peonies, hydrangeas, and more - dependant on seasonality. </p>
		<p><b>How does payment work?</b></p>
		<p>When you purchase a Subscription Gift Card, you will make payment for the duration you would like to gift. This may be 3, 6 or 12 months. Should your recipient like to extend their subscription, they can renew it at the end of their gifted duration.</p>
		<p><b>Can I select my flowers?</b></p>
		<p>Yes, you can select your flowers. Your online FLOWERBX flower account allows you to take your pick from the seasonal choices available.</p>
		<p><b>Can I change the address or date on my subscription?</b></p>
		<p>If you need to make any changes to your subscription, whether its the date, address or frequency please contact our customer service team who will be happy to help make any changes for you.</p>
		<p><b>Can I buy a flower subscription as a gift for someone else?</b></p>
		<p>Yes! You can buy a subscription for yourself or for someone else. Our Subscription Gift Card allows you to send flowers to a loved one on repeat, with a complimentary vase alongside their first delivery.</p>
	</div>
</section>
 -->






 

<?php
get_footer();
?>




