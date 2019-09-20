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
        <img src="../../public/img/OceanMobile.jpg" alt="">
    </div>
    <div class="main__blauw--content">
        <p>DIT IS CONTENT</p>
    </div>
</div>
<div class="main__wit">
    <div class="main__wit--img">
        <img src="../../public/img/OceanMobile.jpg" alt="">
    </div>
    <div class="main__wit--content">

    </div>
</div>
