<?php $this->layout('standard_layout') ?>

<?php $this->start('css') ?>
<link rel="stylesheet" href="<?php echo url('css/index.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('page_title') ?>
Checkout| Ocean Studios
<?php $this->stop('page_title') ?>

<header class="header">
    <div class="header__body">
        <h1 class="header__title"><span class="header__title--bold">Checkout</span></h1>
    </div>
</header>
<div class="wrapper">
    <script src="./js/checkout.js"></script>
    <div class="blocks">
        <div class="block">
            <div class="block__number" id="block1">1</div>
            <span class="block__span">Gegevens</span>
        </div>
        <div class="block">
            <div class="block__number" id="block2">2</div>
            <span class="block__span">betaalwijze</span>
        </div>
        <div class="block">
            <div class="block__number" id="block3">3</div>
            <span class="block__span">bevestigen</span>
        </div>
    </div>
    <div class="div1">
        <h2 class="div1__title">Mijn <span class="div1__title--bold">gegevens</span></h2>
        <div class="blue">
            <form class="blueform">
                
            </form>
        </div>
    </div>

</div>