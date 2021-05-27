<?php include( 'head.php'); ?>
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
						<p class="panel__half-copy body-medium">Say hello to your new skincare recipe. Built for your skin only to have the right ingredients morning and evening to tackle those skin concerns.</p>
					</div>
					<ul class="build-results-tick-list cf">
						<li class="build-results-tick-list__item">	<span class="build-results-tick-list__icon"></span>
							WHAT IS YOUR MAIN SKIN CARE GOAL? : <strong><?php echo $_GET['a']; ?></strong>
						</li>
						<li class="build-results-tick-list__item">	<span class="build-results-tick-list__icon"></span>
							IS THERE ANYTHING YOU WOULD LIKE TO TARGET AROUND THE EYE AREA? : <strong><?php echo $_GET['b']; ?></strong>
						</li>
						<li class="build-results-tick-list__item">	<span class="build-results-tick-list__icon"></span>
							WHAT IS YOUR SKIN TYPE? : <strong><?php echo $_GET['c']; ?></strong>
						</li>
						<li class="build-results-tick-list__item">	<span class="build-results-tick-list__icon"></span>
							DO YOU HAVE SENSITIVE SKIN? : <strong><?php echo $_GET['d']; ?></strong>
						</li>
					</ul>
				</div>
			</div>
			<a class="button js-ga-button button--solid margin-bot-sml button--has-icon" href="/skin-care" data-gadata="Video Sign off" data-text=""> <span class="button__text">
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
	<div class="results-split-colours panel panel--margin is-am">
		<div class="site-wrap">
			<div class="results-split-colours__inner">
				<div class="results-split-colours__right">
					<div class="results-sidebar">
						 
						<ul aria-label="Accordion Control Group Buttons" class="accordion accordion--dark">
							<li class="accordion__item">
							
								<div aria-hidden="false" id="accordion-1" class="" style="">
									<div class="accordion__content">
										<div class="results-sidebar__media margin-bot-med">
											<div class="media">
												<button type="button" class="button-reset">
													
													<img src="skin-care-images/step-head.jpg" class="media__item">
													<img src="skin-care-images/image_1075x_crop_center.png" class="media__item">
													
												</button>
											</div>
										</div>
										<div class="results-sidebar__text">
											<h3 class="subheading-medium">
                                                    Watch our quick video for some extra tips and tricks on how to layer. Remember if you want to know more, you can always #askINKEY
                                                </h3>
										</div>
									</div>
								</div>
							</li>
						</ul>
						
					</div>
				</div>
				<div class="results-split-colours__left cf">
					<div class="results-title-block">
						<h2 class="title-small results-title-block__title">
                                Your personalized recipe
                            </h2> 
						
					</div>
					<div>
						<div class="results-card">
							<p class="title-intro">Step 1 </p>
							<h2 class="title-medium margin-bot-med">
							TREATMENT
                                </h2> 
							<!---->
							
							<?php if (strpos($_GET['a'], "redness") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t1.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										The Ordinary Niacinamide
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>

							<?php if (strpos($_GET['a'], "fine-lines") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t3.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										L'oreal Paris 10% Pure Glycolic Acid Serum
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>

							<?php if (strpos($_GET['a'], "plumping") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t4.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										Bio-Oil Multiuse Skincare Minimizer Oil
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>


							<?php if (strpos($_GET['a'], "breakouts") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t2.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										Differin Gel Acne Treatment
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>


							<?php if (strpos($_GET['a'], "texture") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t5.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										The Ordinary Hyaluronic Acid
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>


							<?php if (strpos($_GET['a'], "oiliness") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t6.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										Witch Hazel Mattifying Toner
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>


							<?php if (strpos($_GET['a'], "dryness") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t7.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										The Ordinary Hyaluronic Acid
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>


							<?php if (strpos($_GET['a'], "acne-scars") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t8.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										The Ordinary Azelaic Acid Suspension 10% (
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>

							<?php if (strpos($_GET['a'], "hyperpigmentation") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t9.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										The Ordinary Alpha Arbutin
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>

							<?php if (strpos($_GET['a'], "brighten") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t10.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										CeraVe Hyaluronic Acid Face Serum
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>

							<?php if (strpos($_GET['a'], "blackheads") !== false) {?>
							
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t11.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										a. Differin Adapalene Gel 0.1% Acne Treatment
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/t12.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
b. Biore Charcoal Pore Minimizer
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>

							

						</div>
						<div class="results-card">
							<p class="title-intro">Step 2</p>
							
							<!---->
							<?php if (strpos($_GET['b'], "circles") !== false) {?>
								<h2 class="title-medium margin-bot-med">
								EYE TREATMENT
                                </h2> 
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/e1.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										Neutrogena Rapid Dark Circle Repair Eye Cream
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>

							<?php if (strpos($_GET['b'], "puffiness") !== false) {?>
								<h2 class="title-medium margin-bot-med">
								EYE TREATMENT
                                </h2> 
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/e2.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										SkinActive Clearly Brighten Anti Puff Eye Roller
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>

							<?php if (strpos($_GET['b'], "eye-fine-lines") !== false) {?>
								<h2 class="title-medium margin-bot-med">
								EYE TREATMENT
                                </h2> 
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/e3.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										Neutrogena Hydro Boost Eye Gel-Cream
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>

							<?php if (strpos($_GET['b'], "none") !== false) {?>
								<h2 class="title-medium margin-bot-med">
								EYE TREATMENT
                                </h2> 
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/e4.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										Cerave Eye Cream
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>
					


						</div>
						<div class="results-card">
							<p class="title-intro">Step 3</p>
							
							<!---->
							<?php if (strpos($_GET['c'], "oily") !== false) {?>
								<h2 class="title-medium margin-bot-med">
							CLEAN
                                </h2> 
							<div class="results-product" style="display: flex;">
							
									<div class="results-product__image">
										<img src="skin-care-images/c1.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										CeraVe Renewing SA Cleanser
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<h2 class="title-medium margin-bot-med">
							MOISTURIZE
                                </h2> 
							<div class="results-product" style="display: flex;">
							
									<div class="results-product__image">
										<img src="skin-care-images/m1.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										Versed Dew Point Moisturizing Gel Cream
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<h2 class="title-medium margin-bot-med">
							SPF
                                </h2> 
							<div class="results-product" style="display: flex;">
							
									<div class="results-product__image">
										<img src="skin-care-images/s1.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										Neutrogena Ultra Sheer Dry-Touch Sunscreen Lotion
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>
							<?php if (strpos($_GET['c'], "dry") !== false) {?>
								<h2 class="title-medium margin-bot-med">
								CLEAN
                                </h2> 
								<div class="results-product" style="display: flex;">
								
										<div class="results-product__image">
											<img src="skin-care-images/c2.jpg"  class="media__item">
										</div>
										<div class="results-product__title">
											<h3 class="margin-bot-sml text-capitalize">
											La Roche-Posay Toleriane Hydrating Cleanser
												</h3> 
											<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
											<button type="button" class="button-reset link">Learn more</button> -->
										</div>
								
									<!---->
								</div>
								<h2 class="title-medium margin-bot-med">
								MOISTURIZE
                                </h2> 
								<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/m2.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										CeraVe Moisturizing Cream
											</h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<h2 class="title-medium margin-bot-med">
							SPF
                                </h2> 
							<div class="results-product" style="display: flex;">
							
									<div class="results-product__image">
										<img src="skin-care-images/s2.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										CeraVe Hydrating Sunscreen Sheer Tint
											</h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>
							<?php if (strpos($_GET['c'], "normal") !== false) {?>
								<h2 class="title-medium margin-bot-med">
								CLEAN
                                </h2> 
								<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/c3.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										Cetaphil Gentle Skin Cleanser
											</h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<h2 class="title-medium margin-bot-med">
							MOISTURIZE
                                </h2> 
							<div class="results-product" style="display: flex;">
							
								<div class="results-product__image">
									<img src="skin-care-images/m3.jpg"  class="media__item">
								</div>
								<div class="results-product__title">
									<h3 class="margin-bot-sml text-capitalize">
									Neutrogena Hydro Boost Water Gel
										</h3> 
									<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
									<button type="button" class="button-reset link">Learn more</button> -->
								</div>
						
							<!---->
						</div>
						<h2 class="title-medium margin-bot-med">
						SPF
                                </h2> 
						<div class="results-product" style="display: flex;">
						
								<div class="results-product__image">
									<img src="skin-care-images/s3.jpg"  class="media__item">
								</div>
								<div class="results-product__title">
									<h3 class="margin-bot-sml text-capitalize">
									Neutrogena Hydro Boost Sunscreen SPF 50
										</h3> 
									<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
									<button type="button" class="button-reset link">Learn more</button> -->
								</div>
						
							<!---->
						</div>
							<?php } ?>
							<?php if (strpos($_GET['c'], "combination") !== false) {?>
								<h2 class="title-medium margin-bot-med">
								CLEAN
                                </h2> 
								<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/c4.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										Simple Micellar Gel Wash
											</h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<h2 class="title-medium margin-bot-med">
							MOISTURIZE
                                </h2>
							<div class="results-product" style="display: flex;">
							 
								<div class="results-product__image">
									<img src="skin-care-images/m4.jpg"  class="media__item">
								</div>
								<div class="results-product__title">
									<h3 class="margin-bot-sml text-capitalize">
									CeraVe Moisturizing Lotion
										</h3> 
									<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
									<button type="button" class="button-reset link">Learn more</button> -->
								</div>
						
							<!---->
						</div>
						<h2 class="title-medium margin-bot-med">
						SPF
                                </h2> 
						<div class="results-product" style="display: flex;">
						
								<div class="results-product__image">
									<img src="skin-care-images/s4.jpg"  class="media__item">
								</div>
								<div class="results-product__title">
									<h3 class="margin-bot-sml text-capitalize">
									CeraVe Hydrating Sunscreen Sheer Tint
										</h3> 
									<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
									<button type="button" class="button-reset link">Learn more</button> -->
								</div>
						
							<!---->
						</div>
							<?php } ?>
						</div>
						<div class="results-card">
							<p class="title-intro">Step 4</p>
							
							<!---->
							<?php if (strpos($_GET['d'], "yes") !== false) {?>
								<h2 class="title-medium margin-bot-med">
								EXFOLIATE
                                </h2> 
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/y1.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										The Ordinary Lactic Acid 10%
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>
							<?php if (strpos($_GET['d'], "little") !== false) {?>
								<h2 class="title-medium margin-bot-med">
								EXFOLIATE
                                </h2> 
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/y2.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										The Ordinary Glycolic Acid 7% Toning Solution
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>
							<?php if (strpos($_GET['d'], "no") !== false) {?>
								<h2 class="title-medium margin-bot-med">
								EXFOLIATE
                                </h2> 
							<div class="results-product" style="display: flex;">
								
									<div class="results-product__image">
										<img src="skin-care-images/y3.jpg"  class="media__item">
									</div>
									<div class="results-product__title">
										<h3 class="margin-bot-sml text-capitalize">
										The Ordinary AHA 30% + BHA 2% Peeling Solution
                                            </h3> 
										<!-- <div class="results-product__info">A luxurious cleansing balm that gently dissolves makeup and excess oil without stripping sensitive, irritated skin of the moisture it needs.</div>
										<button type="button" class="button-reset link">Learn more</button> -->
									</div>
							
								<!---->
							</div>
							<?php } ?>
						</div>
						
						<!---->
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel--dark" id="intro">
		<div class="site-wrap recipe-welcome" :class="{ 'is-show': existingUrl || !existingUrl }">
			<img src="//cdn.shopify.com/s/files/1/0428/8498/9091/t/21/assets/results-quote-1400.jpg?v=763960660981897700" srcset="//cdn.shopify.com/s/files/1/0428/8498/9091/t/21/assets/results-quote-2800.jpg?v=7250025914711433150 2x" class="media__item" alt="">
			<div></div>
		</div>
	</div>
	</div>
</section>
<?php include( 'footer.php'); ?>