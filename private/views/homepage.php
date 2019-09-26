<?php $this->layout('standard_layout') ?>

<?php $this->start('css') ?>
<link rel="stylesheet" href="<?php echo url('OceanStudios/public/css/index.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('page_title') ?>
Ocean Studios
<?php $this->stop('page_title') ?>

<div class="wrapper">
    <header class="header">
        <div class="header__body">
            <h1 class="header__title">The <span class="header__title--bold">new</span> wave</h1>
        </div>
    </header>

    <!-- About us -->
    <div class="aboutus__main">
        <div class="aboutus__main--content">
            <h2 class="aboutus__main--h2">Wie zijn wij</h2>
            <div class="aboutus__main--section-left">
                <img src="img/us.png" alt="free realestate" class="aboutus__main--img-left">
            </div>
            <div class="aboutus__main--section-right">
                <p class="aboutus__main--p">
                    <img src="img/swoosh-2.png" alt="swoosh" class="aboutus__main--img-right">
                    Ocean studios staat voor een combinatie van duurzaamheid en creativiteit.
                    Aan de hand van deze 2 kernwaarden willen wij mooie en goede producten leveren.
                    Daarnaast willen wij met onze producten de wereld een stukje mooier maken.
            </div>
        </div>
    </div>

    <!-- Intermission part with Portfolio and Shop -->
    <div class="intermission__main">
        <div class="intermission__main--content">
            <a href="<?php echo url('public/portfolio') ?>"><div class="intermission__main--content-button-1">Portfolio</div></a>
            <a href="<?php echo url('public/shop') ?>"><div class="intermission__main--content-button-2">Shop</div></a>
        </div>
    </div>

    <!-- Onze Missie -->
    <div class="ourmission__main">
        <div class="ourmission__main--content">
            <h2 class="ourmission__main--h2">Onze missie</h2>
            <div class="ourmission__main--section-left">
                <p class="ourmission__main--p">
                    <img src="img/swoosh-2.png" alt="swoosh" class="aboutus__main--img-right">
                    “Samen de wereld een stukje mooier maken”. Ocean studios wil met mooie designs en verantwoorde producten de wereld een stukje mooier maken.
                    Dit doen wij door design en duurzaamheid te combineren. Wij maken namelijk niet alleen super toffe webshops maar wij zijn ook een webshop.
                    In onze webshop verkopen we shirts en sokken van gerecycled katoen.
                </p>
            </div>
            <div class="ourmission__main--section-right">
                <img src="img/deep-sea.png" alt="" class="ourmission__main--img-right">
            </div>
        </div>
    </div>

    <!-- Intermission part with Portfolio and Shop -->
    <div class="intermission__main-2">
        <div class="intermission__main--content-2">
            <a href="#" class="intermission__main--content-2-button-3">
                <img src="img/globe-hand.png" alt="" class="intermission__main--content-2-img">
                <hr>
                <h3 class="intermission__main--content-2-p">
                    Duurzaamheid
                </h3>
            </a>
            <a href="#" class="intermission__main--content-2-button-4">
                <img src="img/pen-ruler.png" alt="" class="intermission__main--content-2-img">
                <hr>
                <h3 class="intermission__main--content-2-p">
                    Creativiteit
                </h3>
            </a>
            <a href="#" class="intermission__main--content-2-button-5">
                <img src="img/pc.png" alt="" class="intermission__main--content-2-img">
                <hr>
                <h3 class="intermission__main--content-2-p">
                    Fashion / webdesign
                </h3>
            </a>
        </div>
    </div>

    <!-- Webshop and Fashion -->
    <div class="websshop__main">
        <div class="webshop__main--content">
            <h2 class="webshop__main--h2">Webshop & fashion</h2>
            <div class="webshop__main--content-left">
                <img src="img/deep-sea.png" alt="" class="ourmission__main--img-right">
            </div>
            <div class="webshop__main--content-right">
                <p class="webshop__main--p">
                    <img src="img/swoosh-2.png" alt="swoosh" class="aboutus__main--img-right">
                    Heb je een tof product en ben je op zoek naar een webshop? Bij Ocean Studios ben je aan het juiste adres!
                    Ocean Studios werkt met een klein team van jonge creatieve professionals aan een mooie en duurzame toekomst.
                    Dus ben jij op zoek naar een goede webshop met een mooi design wat bij jou past? Neem dan vrijblijvend contact met ons op.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer? -->

</div>
