<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Loader::element("header_required"); ?>
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
	<div id="about-head">
		<h1>
		Hvem er vi?
		</h1>
		<h5>
			<?php

        $a = new Area('about-us-underline');

        $a->display($c);

        ?>
		</h5>
		
	</div>
    <div id="sune">

        <img src="<?php echo $view->getThemePath();?>/img/Sune.png">
        <div class="p-experince">
            <h1>Sune</h1>
            <p> <?php

        $a = new Area('Sune-text');

        $a->display($c);

        ?></p>
        </div>
    </div>
    <div id="kristian">

        <img src="<?php echo $view->getThemePath();?>/img/Kristian.png">
        <div class="p-experince1">
            <h1>Kristján</h1>
            <p>
            <?php

        $a = new Area('Kristjan-text');

        $a->display($c);

        ?>
            </p>
        </div>
    </div>






    <div id="container-about">
		<h1>Find os lige her</h1>
    <div id="map"></div>
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
</div>
</footer>
<script>
      function initMap() {
        var uluru = {lat:55.494203, lng: 8.453542};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbiDtPhyoWL8G0aijGY4PFpInKKHMDh3A&callback=initMap">
    </script>
    <?=Loader::element("footer_required"); ?>
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