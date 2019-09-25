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
                <input type="text" name="firstname" placeholder="Voornaam" id="firstname" required>
                <input type="text" name="lastname" placeholder="Achternaam" id="firstname" required>
                <input type="email" name="email" placeholder="Email" id="email" required>
                <input type="text" name="place" placeholder="Plaatsnaam" id="place" required>
                <input type="text" name="street" placeholder="Straatnaam" id="street" required>
                <input type="text" name="zip" placeholder="Postcode" id="zip" required>
                <input type="text" name="number" placeholder="Huisnummer" id="number" required>
                <input type="text" name="country" placeholder="Land" id="country" required>
                <input type="checkbox" name="AV" id="av"><span> Algemene voorwaarden </span>
            </form>
        </div>
    </div>
    <div class="div2">
        <h2 class="div2__title">Hoe wil ik <span class="div2__title--bold">betalen</span></h2>
        <div class="blue">

        </div>
    </div>
    <div class="div3">
        <h2 class="div2__title"><span class="div2__title--bold">Bevestigen</span></h2>
        <div class="blue">
            <h3 class="item__swoosh" class="title"> <img src="./img/witte-swoosh.png" alt="loes" class="title__img"> Dankjewel voor je bestelling </h3>
        </div>

    </div>

</div>