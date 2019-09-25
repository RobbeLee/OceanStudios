<?php $this->layout('standard_layout') ?>

<?php $this->start('css') ?>
<link rel="stylesheet" href="<?php echo url('css/contact.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('page_title') ?>
Contact | Ocean Studios
<?php $this->stop('page_title') ?>

<header class="header">
    <div class="header__body">
        <h1 class="header__title">Neem <span class="header__title--bold">contact</span> op</h1>
    </div>
</header>
<div class="form">
    <div class="input-container">
        <input type="text" class="input" id="name">
        <label for="name" class="input-label">naam</label>
        <div class="input-underline"></div>
    </div>
    <div class="input-container">
        <input type="email" class="input" id="email">
        <label for="email" class="input-label">email</label>
        <div class="input-underline"></div>
    </div>
    <div class="input-container">
        <input type="text" class="input" id="subject">
        <label for="subject" class="input-label">onderwerp</label>
        <div class="input-underline"></div>
    </div>
    <div class="input-container textarea-container">
        <textarea id="msg" class="input textarea"></textarea>
        <label for="msg" class="input-label">bericht</label>
        <div class="input-underline"></div>
    </div>
    <button class="btn"> <img src="../img/witte-swoosh.png" alt="Swoosh"> send email</button>
</div>

<script>
    document.querySelectorAll('.input').forEach(input => {
        input.addEventListener('blur', () => (input.value == '') ? input.classList.remove('has-value') : input.classList.add('has-value'))
    })
    document.querySelectorAll('textarea').forEach(input => {
        input.addEventListener('blur', () => (input.value == '') ? input.classList.remove('has-value') : input.classList.add('has-value'))
    })
</script>