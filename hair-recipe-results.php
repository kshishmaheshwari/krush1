<?php include('head.php'); ?>
	<section id="main" class="site-main page-recipe-landing">

		<div class="panel panel--padded" style="margin-bottom: 60px;">
			<div class="site-wrap">
			<h2 class="title-medium margin-bot-sml">
                    Thank you for contacting us. .
            </h2>
				<div class="panel__grid" style="margin-bottom: 30px;">
					<div class="panel__half">
						<h2 class="responsive-title">
									Your Recipe
								</h2>
					</div>
					<div class="panel__half panel__half--narrow">
						<h2 class="panel__half-title title-small">
									Personalized for you
								</h2>
						<div class="margin-bot-med">
							<p class="panel__half-copy body-medium">
							Say hello to your new hair and scalp care recipe. Built for your hair and scalp to have the right ingredients to tackle those hair and scalp concerns.
									</p>
						</div>
						<ul class="build-results-tick-list cf">
							<li class="build-results-tick-list__item">
								<span class="build-results-tick-list__icon"></span>
								WHAT IS YOUR HAIR TYPE? :<strong><?php echo $_GET['a']; ?></strong>
									
							</li>
							<li class="build-results-tick-list__item">
								<span class="build-results-tick-list__icon"></span>
								WHAT IS YOUR SCALP CONCERN? :<strong><?php echo $_GET['b']; ?></strong>
									
							</li>
							<li class="build-results-tick-list__item">
								<span class="build-results-tick-list__icon"></span>
								WHAT IS YOUR HAIR CONCERN? :<strong><?php echo $_GET['c']; ?></strong>
									
							</li>
							<li class="build-results-tick-list__item">
								<span class="build-results-tick-list__icon"></span>
								WHAT IS YOUR HAIR GOAL? :<strong><?php echo $_GET['d']; ?></strong>	
							</li>
							
						</ul>
					</div>
				</div>
				<a class="button js-ga-button button--solid margin-bot-sml button--has-icon" href="/skin-care" data-gadata="Video Sign off" data-text="">
    <span class="button__text">
        Go To Home
        
            <span class="button__icon">
                
    <svg width="10px" height="19px" viewBox="0 0 10 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill-rule="evenodd">
            <path d="M9.71444133,8.61384138 L1.71440533,0.305562914 C1.34135865,-0.0724344332 0.735900927,-0.116341241 0.300348967,0.267383931 C-0.088322782,0.609108311 -0.098092826,1.27727961 0.261288791,1.64953447 L7.53835617,9.28581006 L6.68331269,10.2632644 L0.261288791,16.9221052 C-0.098087826,17.2943747 -0.0726977117,17.9453967 0.300348967,18.3042606 C0.694880742,18.682258 1.34725368,18.6498019 1.71440533,18.2660816 L9.71444133,9.95780317 C9.94881739,9.73253153 9.99178758,9.51489862 9.9956926,9.28581006 C9.9956926,9.06056285 9.85506696,8.75894302 9.71444133,8.61384138 Z"></path>
        </g>
    </svg>


            </span>
        
    </span>
</a>
			</div>
		</div>


		<div class="panel panel--dark" id="intro">
			<div class="site-wrap recipe-welcome" :class="{ 'is-show': existingUrl || !existingUrl }">
			<img src="//cdn.shopify.com/s/files/1/0428/8498/9091/t/21/assets/results-hair-quote-1400.jpg?v=7462442559098595299" srcset="//cdn.shopify.com/s/files/1/0428/8498/9091/t/21/assets/results-hair-quote-2800.jpg?v=8605183641679766066 2x" class="media__item" alt="">
					
					<div> 
					</div>
				</div>
			</div>
		</div>
	</section>
    <?php include('footer.php'); ?>