<?php $this->layout('standard_layout') ?>

<?php $this->start('css') ?>
<link rel="stylesheet" href="<?php echo url('css/cart.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('page_title') ?>
Cart | Ocean Studios 
<?php $this->stop('page_title') ?>

<header class="header">
    <div class="header__body">
        <h1 class="header__title">Mijn <span class="header__title--bold">winkelwagentje</span></h1>
    </div>
</header>
<div class="wrapper">
    <div class="items">
        <h2 class="items__swoosh" class="title title__img"> <img src="./img/swoosh.png" alt="loes"> Winkelwagentje</h2>
    </div>
    <div class="price">
        <h2 class="price__swoosh" class="title title__img"> <img src="./img/swoosh.png" alt="loes"> Totaal prijs</h2>
        <h3></h3>
        <button class="price__btn">Betalen</button>
    </div>
    <div class="pay">
        <h2 class="pay__swoosh" class="title title__img"> <img src="./img/swoosh.png" alt="loes"> Betaalwijze</h2>
        <h3 class="pay__h3">Wij accepteren</h3>
        <p>Helaas is dit tijdelijk niet mogenlijk</p>
    </div>
</div>