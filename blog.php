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
   <div class="reference-head">
       <h1> Vores referencer</h1>
   </div>
    <div class="reference-container">
        <h4> Alle referencer kommer her:</h4>
        <div class="reference-post">
            <div class="picture">
						<?php

        $a = new Area('Insert-pic');

        $a->display($c);

        ?>

       
            </div>
            <h3><?php

        $a = new Area('reference-head');

        $a->display($c);

        ?></h3>
            <p><?php

        $a = new Area('referenece-paragraph');

        $a->display($c);

        ?></p>
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
</div>
</footer>
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