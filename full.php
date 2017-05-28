<!DOCTYPE html>
<html lang="en">
<head>
   <?php echo Loader::element("header_required"); ?>
    <meta charset="UTF-8">
    <title>Supporten I/S</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo $view->getThemePath();?>/js/java.js"></script>
    <link href="<?php echo $view->getThemePath();?>/css/style.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<div class="<?php echo $c->getPageWrapperClass()?>"> <!-- Makes the web site scroll when we edit (avoid cutting) -->

<div id="header">
    <img id="logo"src="<?php echo $view->getThemePath();?>/img/logo.png">
    <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
   <div class="nav">
    <nav>
        <?php

        $a = new GlobalArea('menu');

        $a->display($c);

        ?>
    </nav>
</div>
	</div>

	   
<div id="wrapper">
     <img id="supporten" src="<?php echo $view->getThemePath();?>/img/bg-logo.png"> 
    <span id="straight-line">

    </span>
    <span id="straight-line-top2-service">

    </span>
    <span id="down-line">

    </span>
    <span id="down-line-left">

    </span>
    <span id="straight-line-bot">

    </span>
    <span id="straight-line-bot2">

    </span>
  
    <div id="placeholder">
        <h1>
            Esbjergs bedste it-support
        </h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2kL9b83WUQY" frameborder="0" allowfullscreen></iframe>
      
        <div id="iconholder">
            <div class="icons">
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="flipper">
						<div class="front">
							<p> <i class="fa fa-laptop fa-4x" aria-hidden="true"></i></p>
						</div>
					<div class="back">
						<p>Vi fixer alt inden for IT</p>
					</div>
					</div>
				</div>
          		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="flipper">
						<div class="front">
							<p><i class="fa fa-home fa-4x" aria-hidden="true"></i></p>
						</div>
					<div class="back">
						<p>Vi er jeres nye lokale It-support</p>
					</div>
					</div>
				</div>
          		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="flipper">
						<div class="front">
							<p><i class="fa fa-usd fa-4x" aria-hidden="true"></i></p>
						</div>
					<div class="back">
						<p>Byens bedste priser!</p>
					</div>
					</div>
				</div>
           	
            </div>
        </div>
    </div>
</div>

</div>
<footer>
    <div id="column1">
        <h1><?php

        $a = new GlobalArea('column-1-head');

        $a->display($c);

        ?></h1>
        <p><?php

        $a = new GlobalArea('column-1-text');

        $a->display($c);

        ?></p>
        
    </div>
    <div id="column2">
        <h1><?php

        $a = new GlobalArea('column-2-head');

        $a->display($c);

        ?></h1>
        <p><?php

        $a = new GlobalArea('column-2-text');

        $a->display($c);

        ?></p>
        
    </div>
    <div id="column3">
        <h1><?php

        $a = new GlobalArea('column-3-head');

        $a->display($c);

        ?></h1>
        <a href="https://www.facebook.com/" target="_blank"> <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
        <a href="https://www.google.dk/?gws_rd=ssl" target="_blank"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
        <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>


    </div>

</footer>
<?=Loader::element("footer_required"); ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5929e4274374a471e7c5014e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>