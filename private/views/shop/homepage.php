<?php $this->layout('standard_layout') ?>

<?php $this->start('css') ?>
<link rel="stylesheet" href="<?php echo url('OceanStudios/public/css/shop.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('page_title') ?>
Shop | Ocean Studios
<?php $this->stop('page_title') ?>

<header class="header">
    <div class="header__body">
        <h1 class="header__title">Check onze <span class="header__title--bold">collectie</span></h1>
    </div>
</header>

<div class="statusPopup success">
    <span class="statusPopup__title">Success</span>
    <p class="statusPoppup__text">Added to cart.</p>
</div>
<div class="statusPopup failed">
    <span class="statusPopup__title">Error</span>
    <p class="statusPoppup__text">Something went wrong.</p>
</div>

<h2 class="item__swoosh title"> <img src="./img/swoosh.png" alt="loes" class="title__img"> T-shirts</h2>
<div class="items shirts">
    <div class="item">
        <div class="item__img--container"> 
            <img class="item__img" src="https://via.placeholder.com/200x400?text=wide%20boy" alt="weg, gone, loesoe">
        </div>
        <div class="item__body">
            <div class="item__info">
                <h3 class="item__title">Ocean T-shirt</h3>
                <span class="item__price">€35,00</span>
                <div class="select-container">
                    <select class="item__amount" id="amount-1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                </div>
                <div class="select-container">
                    <select class="item__size" id="size-1">
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                    </select>
                    <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                </div>
                <button data-item="1" class="item__btn"><img src="./img/witte-swoosh.png" alt="loes" class="item__btn--img"> Bestel nu</button>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="item__img--container">
            <img class="item__img" src="https://via.placeholder.com/200x400?text=wide%20boy" alt="weg, gone, loesoe">
        </div>
        <div class="item__body">
            <div class="item__info">
                <h3 class="item__title">Ocean T-shirt</h3>
                <span class="item__price">€35,00</span>
                <div class="select-container">
                    <select class="item__amount" id="amount-2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                </div>
                <div class="select-container">
                    <select class="item__size" id="size-2">
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                    </select>
                    <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                </div>
                <button data-item="2" class="item__btn"><img src="./img/witte-swoosh.png" alt="loes" class="item__btn--img"> Bestel nu</button>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="item__img--container">
            <img class="item__img" src="https://via.placeholder.com/200x400?text=wide%20boy" alt="weg, gone, loesoe">
        </div>        
        <div class="item__body">
            <div class="item__info">
                <h3 class="item__title">Ocean T-shirt</h3>
                <span class="item__price">€35,00</span>
                <div class="select-container">
                    <select class="item__amount" id="amount-3">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                </div>
                <div class="select-container">
                    <select class="item__size" id="size-3">
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                    </select>
                    <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                </div>
                <button data-item="3" class="item__btn"><img src="./img/witte-swoosh.png" alt="loes" class="item__btn--img"> Bestel nu</button>
            </div>
        </div>
    </div>
</div>
<h2 class="item__swoosh title"><img src="./img/swoosh.png" alt="loes" class="title__img">Sokken</h2>
<div class="items sokken">
    <div class="item">
        <div class="item__img--container">
            <img class="item__img" src="https://via.placeholder.com/200x400?text=wide%20boy" alt="weg, gone, loesoe">
        </div>
        <div class="item__body">
            <div class="item__info">
                <h3 class="item__title">Ocean sokken</h3>
                <span class="item__price">€35,00</span>
                <div class="select-container">
                    <select class="item__amount" id="amount-4">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                </div>
                <button data-item="4" class="item__btn"><img src="./img/witte-swoosh.png" alt="loes" class="item__btn--img"> Bestel nu</button>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="item__img--container">
            <img class="item__img" src="https://via.placeholder.com/200x400?text=wide%20boy" alt="weg, gone, loesoe">
        </div>
        <div class="item__body">
            <div class="item__info">
                <h3 class="item__title">Ocean sokken</h3>
                <span class="item__price">€35,00</span>
                <div class="select-container">
                    <select class="item__amount" id="amount-5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                </div>
                <button data-item="5" class="item__btn"><img src="./img/witte-swoosh.png" alt="loes" class="item__btn--img"> Bestel nu</button>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="item__img--container">
            <img class="item__img" src="https://via.placeholder.com/200x400?text=wide%20boy" alt="weg, gone, loesoe">
        </div>
        <div class="item__body">
            <div class="item__info">
                <h3 class="item__title">Ocean sokken</h3>
                <span class="item__price">€35,00</span>
                <div class="select-container">
                    <select class="item__amount" id="amount-6">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                </div>
                <button data-item="6" class="item__btn"><img src="./img/witte-swoosh.png" alt="loes" class="item__btn--img"> Bestel nu</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo url('OceanStudios/public/js/shop.js') ?>"></script>

<!--https://via.placeholder.com/200x400 -->