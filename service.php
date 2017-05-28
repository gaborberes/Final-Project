<!DOCTYPE html>
<html lang="en">
<head>
     <?php echo Loader::element("header_required"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link href="<?php echo $view->getThemePath();?>/css/style.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="<?php echo $view->getThemePath();?>/js/java.js"></script>
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


    <div id="placeholder-services">

        <h1><?php

        $a = new Area('Welcome text');

        $a->display($c);

        ?></h1>

        <div class="service-icons" style="margin-left:2%;">
            <i class="fa fa-windows fa-4x" aria-hidden="true"></i>
            <h5>Formatering af
                styresystem
                350,-</h5>
            <a href="/index.php/kontakt"><p>At geninstallere styresystemet kan få selv din gamle computer op og køre.</p></a>

        </div>

            <div class="service-icons">
                <i class="fa fa-desktop fa-4x" aria-hidden="true"></i>
                <h5>Opsætning af
                    drivere
                    100,-  </h5>
                 <a href="/index.php/kontakt"><p>En nyformatteret computer kræver diverse drivere for at yde optimalt</p></a>
        </div>

            <div class="service-icons">
                <i class="fa fa-shield fa-4x" aria-hidden="true"></i>
                <h5>Fjernelse af
                    virus og spyware
                    250,-</h5>
                <a href="/index.php/kontakt"> <p>Surf sikkert uden fare for at nogen kigger dig over skulderen.</p></a>
            </div>
            <div class="service-icons">
                <i class="fa fa-wrench fa-4x" aria-hidden="true"></i>
                <h5>Udskiftning af
                    hardware
                    150,-</h5>
                 <a href="/index.php/kontakt"><p>Gælder harddiske, grafikkort, blæsere, CPU, PSU og RAM. Pris pr enhed.</p> </a>

            </div>

            <div class="service-icons">
                <i class="fa fa-check-square-o fa-4x" aria-hidden="true"></i>
                <h5>Rensning af bærbare og stationære
                    200,-</h5>
                <a href="/index.php/kontakt"> <p>Ofte en hurtigt løsning hvis din computer bliver for varm</p></a>
            </div>
        
        <div class="service-icons" style="margin-left:2%;">
            <i class="fa fa-inbox fa-4x" aria-hidden="true"></i>
            <h5>Backup
                af
                data
                300,-</h5>


             <a href="/index.php/kontakt"><p>  Hvis du vil have filerne fra din ødelagte computer</p></a>
        </div>
            <div class="service-icons">
                <i class="fa fa-cogs fa-4x" aria-hidden="true"></i>
                <h5>Montering af
                    kølepasta
                    200,-</h5>
				<a href="/index.php/kontakt"><p>Merpris på bærbare computere, +100,-</p></a>
            </div>
            <div class="service-icons">
                <i class="fa fa-envelope fa-4x" aria-hidden="true"></i>
                <h5>Opsætning af mail og diverse
                    200,-</h5>
                <a href="/index.php/kontakt"> <p>Undgå bøvl med mail programmerne samt hvis andre problemer måtte forekomme</p> </a>

            </div>
        <div class="service-icons">
            <i class="fa fa-laptop fa-4x" aria-hidden="true"></i>
            <h5>Udskiftning af
                skærm
                BILLIGT</h5>
            <a href="/index.php/kontakt"> <p>Priser afhænger af model/
				størrelse, ring for yderligere information</p></a>

        </div>
        <div class="service-icons">
            <i class="fa fa-truck fa-4x" aria-hidden="true"></i>
            <h5>Levering i hele
                Esbjerg, 50,-</h5>
            <a href="/index.php/kontakt"> <p>Afhængeligt af distancen fra Esbjerg, kan der forekomme yderligere merpris</p></a>

        </div>   
	</div>     
           
           <div id="contact-holder">
            <h1><?php

        $a = new Area('contact-head');

        $a->display($c);

        ?></h1>
            <h5><?php

        $a = new Area('contact-p');

        $a->display($c);

        ?></h5>
            <div class="contact-icon">
                <i class="fa fa-phone-square fa-4x" aria-hidden="true"></i>
                <p>+45 42 77 67 70</p>
            </div>
            <div class="contact-icon">
                <i class="fa fa-envelope fa-4x" aria-hidden="true"></i>
                <p>Kontakt@supporten.tech</p>
            </div>
            <div class="contact-icon">
                <i class="fa fa-home fa-4x" aria-hidden="true"></i>
                <p>
                    Spangsbjerg Møllevej 62 C, st. 7. &nbsp; Esbjerg</p>
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