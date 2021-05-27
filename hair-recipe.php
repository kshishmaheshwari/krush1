<?php include('head.php'); ?>
<section id="main" class="site-main page-hair-recipe-landing">
            <div class="panel panel--dark" id="intro">
    <div class="site-wrap recipe-welcome" :class="{ 'is-show': existingUrl || !existingUrl }">
       
        <div class="recipe-intro" v-else>
            <h2 class="title-medium margin-bot-sml">
                Build your hair recipe
            </h2>
            <p class="body-large margin-bot-med">
                Answer a few questions and tell us a bit about your hair and scalp, and we will recommend the right products for you.
            </p>
            <div class="margin-bot-sml">
                

            <a class="button js-ga-button button--border button--has-icon button--wider button--has-icon"
     href="hair-recipe-builder.php"  
    data-gaData="Recipe Welcome"  data-text=""  >
    <span class="button__text">
        Start a new recipe
        
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
            <div>
                
            </div>
        </div>
    </div>
</div>

        </section>

        <?php include('footer.php'); ?>