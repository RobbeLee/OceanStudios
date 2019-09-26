<?php $this->layout('standard_layout') ?>

<?php $this->start('css') ?>
<link rel="stylesheet" href="<?php echo url('css/shop.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('page_title') ?>
Shop | Ocean Studios
<?php $this->stop('page_title') ?>

<div class="shop-nav">
    <a class="shop-nav__link" href="<?php echo url('public/shop/cart') ?>"><svg id="Group_17" data-name="Group 17" xmlns="http://www.w3.org/2000/svg" width="30.869" height="36.978" viewBox="0 0 30.869 36.978"><path id="Path_34" data-name="Path 34" d="M-103.339-184.24c0-1.44-.012-2.834.006-4.228a8.3,8.3,0,0,1,.139-1.469,6.276,6.276,0,0,1,6.454-4.983,6.273,6.273,0,0,1,5.9,5.5,15.933,15.933,0,0,1,.059,1.621c.008,1.167,0,2.333,0,3.554h.4c1.276,0,2.552,0,3.828,0a2.324,2.324,0,0,1,2.439,2.13c.324,2.651.617,5.306.923,7.959q.529,4.59,1.056,9.179c.172,1.494.355,2.987.508,4.483a2.371,2.371,0,0,1-2.23,2.534c-.1.006-.193.006-.289.006q-12.911,0-25.823,0a2.326,2.326,0,0,1-2.355-1.508,2.707,2.707,0,0,1-.149-1.162c.378-3.493.784-6.982,1.185-10.472.424-3.693.844-7.387,1.283-11.079a2.318,2.318,0,0,1,2.348-2.068C-106.233-184.246-104.814-184.24-103.339-184.24Zm0,1.4c-.142-.007-.248-.017-.353-.017q-1.914,0-3.828,0a.989.989,0,0,0-1.117.971c-.216,1.792-.418,3.585-.624,5.378q-.5,4.3-.989,8.606-.424,3.712-.841,7.424a.977.977,0,0,0,1,1.142c.06,0,.12,0,.181,0H-84.2c.06,0,.12,0,.181,0a.978.978,0,0,0,.992-1.151q-.269-2.458-.554-4.914-.524-4.572-1.051-9.143c-.276-2.4-.544-4.806-.826-7.208-.1-.834-.422-1.106-1.256-1.107H-90.76c-.008.149-.017.255-.017.361,0,.385-.013.771.01,1.155.005.093.11.2.2.266a1.574,1.574,0,0,1,.579,1.795,1.563,1.563,0,0,1-1.493,1.05,1.544,1.544,0,0,1-1.474-1.07,1.562,1.562,0,0,1,.568-1.766c.088-.068.211-.167.215-.255.021-.5.01-1,.01-1.516h-9.786c0,.472-.015.927.009,1.38a.572.572,0,0,0,.2.371,1.581,1.581,0,0,1,.585,1.794,1.544,1.544,0,0,1-1.48,1.062,1.561,1.561,0,0,1-1.486-1.058,1.569,1.569,0,0,1,.589-1.79c.079-.061.185-.153.188-.234C-103.333-181.816-103.342-182.319-103.342-182.841Zm11.153-1.419a1.5,1.5,0,0,0,.022-.168c0-1.456.009-2.911,0-4.367a4.662,4.662,0,0,0-.129-.963,4.915,4.915,0,0,0-4.946-3.779,4.822,4.822,0,0,0-4.649,4.363c-.112,1.52-.045,3.053-.057,4.58,0,.105.012.211.019.335Z" transform="translate(112.481 194.926)"/></svg></a>
</div>

<header class="header">
    <div class="header__body">
        <h1 class="header__title">Check onze <span class="header__title--bold">collectie</span></h1>
    </div>
</header>

<div class="statusPopup success">
    <span class="statusPopup__title">Success</span>
    <p class="statusPoppup__text">Toegevoegt aan winkelwagen.</p>
</div>
<div class="statusPopup failed">
    <span class="statusPopup__title">Error</span>
    <p class="statusPoppup__text">Er is iets fout gegaan.</p>
</div>

<h2 class="item__swoosh title"> <img src="/../img/swoosh.png" alt="loes" class="title__img"> T-shirts</h2>
<div class="items shirts">
    <?php foreach ($products as $item): ?>
        <?php if ($item->type == 'sock') continue; ?>
        <?php $price = number_format($item->price, 2) ?>
        <?php $price = str_replace(".", ",", $price) ?>
        <div class="item">
            <div class="item__img--container"> 
                <img class="item__img" src="<?=htmlspecialchars($item->image_url)?>" alt="weg, gone, loesoe">
            </div>
            <div class="item__body">
                <div class="item__info">
                    <h3 class="item__title"><?=htmlspecialchars($item->title)?></h3>
                    <span class="item__price">€<?=htmlspecialchars($price)?></span>
                    <div class="select-container">
                        <select class="item__amount" id="amount-<?=htmlspecialchars($item->code)?>">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                    </div>
                    <div class="select-container">
                        <select class="item__size" id="size-<?=htmlspecialchars($item->code)?>">
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                        </select>
                        <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                    </div>
                    <button data-item="<?=htmlspecialchars($item->code)?>" class="item__btn"><img src="/../img/witte-swoosh.png" alt="loes" class="item__btn--img"> Bestel nu</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<h2 class="item__swoosh title"><img src="/../img/swoosh.png" alt="loes" class="title__img">Sokken</h2>
<div class="items sokken">
    <?php foreach ($products as $item): ?>
        <?php if ($item->type == 'shirt') continue; ?>
        <?php $price = number_format($item->price, 2) ?>
        <?php $price = str_replace(".", ",", $price) ?>
        <div class="item">
            <div class="item__img--container"> 
                <img class="item__img" src="<?=htmlspecialchars($item->image_url)?>" alt="weg, gone, loesoe">
            </div>
            <div class="item__body">
                <div class="item__info">
                    <h3 class="item__title"><?=htmlspecialchars($item->title)?></h3>
                    <span class="item__price">€<?=htmlspecialchars($price)?></span>
                    <div class="select-container">
                        <select class="item__amount" id="amount-<?=htmlspecialchars($item->code)?>">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <svg viewBox="0 0 20 10"><path d="M0,2 10,10 20,2 18,0 10,6 2,0"/></svg>
                    </div>
                    <button data-item="<?=htmlspecialchars($item->code)?>" class="item__btn"><img src="/../img/witte-swoosh.png" alt="loes" class="item__btn--img"> Bestel nu</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script src="<?php echo url('js/shop.js') ?>"></script>

<!--https://via.placeholder.com/200x400 -->