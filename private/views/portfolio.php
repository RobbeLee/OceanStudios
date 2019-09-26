<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-09-11
 * Time: 15:10
 */
?>
<?php $this->layout('standard_layout') ?>

<?php $this->start('css') ?>
<link rel="stylesheet" href="<?php echo url('OceanStudios/public/css/portfolio.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('page_title') ?>
Portfolio | Ocean Studios
<?php $this->stop('page_title') ?>

<!-- Hier komt de html code -->
<!-- Dit komt in .main te staan -->
<header class="header">
    <div class="header__body">
        <h1 class="header__title">Onze <span class="header__title--bold">Projecten</span></h1>
    </div>
</header>


<div class="main__blauw">
    <div class="main__blauw--img">
        <!--   Place a screenshot of your website in the portfolio.css    -->
        <img src="/OceanStudios/public/img/imageviewer.jpg" alt=" ">
    </div>
    <div class="main__blauw--content">
        <!--    Your name    -->
        <h2>Bjørn Emmaneel - Imageviewer</h2>

        <!--    Link to your website    -->
        <a href="http://bjornemmaneel.nl/imageviewer/" target="_blank">http://bjornemmaneel.nl/imageviewer/</a>
        <br>
        <br>

        <!--    Here you explain or give a small introduction of your project    -->
        <p>Deze Imageviewer werkt met 4 knoppen. Links, rechts, omhoog en omlaag. Link die gaat terug in de gallerij, rechts gaat verder in de gallerij,
         omhoog verplaatst 4 terug in de gallerij, omlaag gaat 4 verder in de lijst. Deze opdracht was voor het MediaCollege Amsterdam.</p>
    </div>
</div>

<div class="main__wit">
    <div class="main__wit--img">
        <!--   Place here a screenshot of your website    -->
        <img src="/img/OceanMobile.jpg" alt="">
    </div>
    <div class="main__wit--content">
        <!--    Your name    -->
        <h2>Example Examples</h2>

        <!--  Link to your website  -->
        <a href="example.nl">example</a>
        <br>
        <br>

        <!--    Here you explain or give a small introduction of your project    -->
        <p>example of a example of a text</p>
    </div>
</div>

<div class="main__blauw">
    <div class="main__blauw--img">
        <!--   Place here a screenshot of your website    -->
        <img src="../../public/img/OceanMobile.jpg" alt="">
    </div>
    <div class="main__blauw--content">
        <!--    Your name    -->
        <h2>Example Examples</h2>

        <!--  Link to your website  -->
        <a href="example.nl">example</a>
        <br>
        <br>

        <!--    Here you explain or give a small introduction of your project    -->
        <p>example of a example of a text</p>
    </div>
</div>

<div class="main__wit">
    <div class="main__wit--img">
        <!--   Place here a screenshot of your website    -->
        <img src="../../public/img/OceanMobile.jpg" alt="">
    </div>
    <div class="main__wit--content">
        <!--    Your name    -->
        <h2>Example Examples</h2>

        <!--  Link to your website  -->
        <a href="example.nl">example</a>
        <br>
        <br>

        <!--    Here you explain or give a small introduction of your project    -->
        <p>example of a example of a text</p>
    </div>
</div>
