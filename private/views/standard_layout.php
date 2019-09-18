<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <?=$this->section('css')?>

        <title><?=$this->section('page_title', 'Ocean Studios')?></title>
    </head>
    <body>
        <nav class="nav">
            <a href="<?php echo url('public/portfolio') ?>" class="nav__link">portfolio</a>
            <a href="<?php echo url('public/') ?>" class="nav__logo-container">
                <svg class="nav__logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.16 94.73"><defs><style>.cls-1{fill:#1f9b95;}.cls-2{fill:#181716;}</style></defs><path class="cls-1" d="M26.64,135.44A24.87,24.87,0,0,1,25.8,117a22.94,22.94,0,0,1,4.14-7.3,23.17,23.17,0,0,1,7.74-6.22A23.86,23.86,0,0,1,47,101h.13a1.19,1.19,0,0,1,.91.41,1.7,1.7,0,0,1,.44,1v5.86q0,1.27-1.41,1.41a15.19,15.19,0,0,0-5.79,1.72,13.92,13.92,0,0,0-4.64,3.87,15.58,15.58,0,0,0-2.22,16.51,14.94,14.94,0,0,0,4,5.35,15.43,15.43,0,0,0,16.42,2.22,14.26,14.26,0,0,0,5.25-4.1,15,15,0,0,0,2.72-4.74,15.78,15.78,0,0,0,.91-5.29,15.5,15.5,0,0,0-1.68-7.13,3,3,0,0,1-.34-1.34,2,2,0,0,1,.81-1.55c.36-.23,1-.7,2.09-1.41l2-1.35a2,2,0,0,1,1-.34,1.74,1.74,0,0,1,1.61,1,24.09,24.09,0,0,1,3.23,12.18,24.57,24.57,0,0,1-1.41,8.24,23.3,23.3,0,0,1-4.17,7.3,21.77,21.77,0,0,1-8.24,6.5,24.71,24.71,0,0,1-10.33,2.25,23.63,23.63,0,0,1-8.21-1.45A21.61,21.61,0,0,1,33,144,24.1,24.1,0,0,1,26.64,135.44Z" transform="translate(-24.42 -101.02)"/><path class="cls-1" d="M94.87,146.24a24.35,24.35,0,0,1,0-41.82,22.7,22.7,0,0,1,11.91-3.26,23,23,0,0,1,9.72,2.08,24,24,0,0,1,7.84,5.72.92.92,0,0,1,.27.67.89.89,0,0,1-.34.74l-4.84,4.18a1,1,0,0,1-.74.33.85.85,0,0,1-.68-.33,15.08,15.08,0,0,0-5.08-3.67,15.08,15.08,0,0,0-13.86.81,15.74,15.74,0,0,0-5.62,5.75,15.93,15.93,0,0,0,0,15.74,15.76,15.76,0,0,0,5.62,5.76,15.08,15.08,0,0,0,13.56.94,15.58,15.58,0,0,0,4.91-3.33,1.91,1.91,0,0,1,1.28-.54,1.25,1.25,0,0,1,.94.34l1.28,1.07,2.69,2.42a1.5,1.5,0,0,1,.68,1.28,1.11,1.11,0,0,1-.34.81,23.44,23.44,0,0,1-17.29,7.54A23,23,0,0,1,94.87,146.24Z" transform="translate(-24.42 -101.02)"/><path class="cls-1" d="M137.56,109.67a1.23,1.23,0,0,1-.37-.91V103a1.1,1.1,0,0,1,.37-.87,1.2,1.2,0,0,1,.84-.34h31.22a1.27,1.27,0,0,1,.91.37,1.16,1.16,0,0,1,.37.84v5.79a1.24,1.24,0,0,1-.37.87,1.19,1.19,0,0,1-.91.41H138.4A1.2,1.2,0,0,1,137.56,109.67Zm0,38.82a1.14,1.14,0,0,1-.37-.84V116.56a1.11,1.11,0,0,1,.37-.87,1.25,1.25,0,0,1,.84-.34h5.72a1.18,1.18,0,0,1,.87.34,1.16,1.16,0,0,1,.34.87v4.85c0,.85.58,1.28,1.75,1.28h17a1.15,1.15,0,0,1,.8.3,1,1,0,0,1,.34.77v5.79a1,1,0,0,1-.34.77,1.12,1.12,0,0,1-.8.31H146.88c-1,0-1.55.47-1.55,1.41v7.33a1.26,1.26,0,0,0,.4.88,1.23,1.23,0,0,0,.88.4h23.15a1.18,1.18,0,0,1,.87.34,1.2,1.2,0,0,1,.34.87v5.79a1.23,1.23,0,0,1-.34.84,1.13,1.13,0,0,1-.87.37H138.4A1.16,1.16,0,0,1,137.56,148.49Z" transform="translate(-24.42 -101.02)"/><path class="cls-1" d="M208.31,148.56a1.46,1.46,0,0,1-.54-.71l-3.36-12.51a2.06,2.06,0,0,0-.74-1,1.88,1.88,0,0,0-1.15-.41H192.36a1,1,0,0,1-.77-.3,1,1,0,0,1-.3-.71v-5.18a1.1,1.1,0,0,1,.3-.74,1,1,0,0,1,.77-.33h8.08a1.22,1.22,0,0,0,1-.44,1,1,0,0,0,.17-1l-3.77-13.73a1.68,1.68,0,0,0-.67-.94,1.86,1.86,0,0,0-1.14-.4h-.48a1.78,1.78,0,0,0-1.07.4,1.7,1.7,0,0,0-.68.94l-2.48,9a1,1,0,0,1-.51.6,1.05,1.05,0,0,1-.84.07l-6.32-1.55a.87.87,0,0,1-.64-.47.91.91,0,0,1-.1-.81l4.23-15.54a1.58,1.58,0,0,1,.58-.74,1.42,1.42,0,0,1,.84-.34H203a1.71,1.71,0,0,1,.88.31,1.37,1.37,0,0,1,.6.7l12.38,45.22v.13a.71.71,0,0,1-.8.81h-6.87A1.43,1.43,0,0,1,208.31,148.56Z" transform="translate(-24.42 -101.02)"/><path class="cls-1" d="M252.51,148.73l-.53-.68q-2.62-4.1-8.58-13.32t-9-14.06c-.26-.31-.44-.47-.53-.47s-.15.09-.17.27a2.51,2.51,0,0,0,0,.4l.14,7.94a1.19,1.19,0,0,1-.34.84,1.1,1.1,0,0,1-.87.37h-6.53a1.32,1.32,0,0,1-.91-.33,1.17,1.17,0,0,1-.37-.88v-25.7a1.27,1.27,0,0,1,.37-.91,1.23,1.23,0,0,1,.91-.37h6.59a1,1,0,0,1,.81.4l16.29,27.12c.4.76.74,1.14,1,1.14s.34-.38.34-1.14L251,103.11a1.27,1.27,0,0,1,.37-.91,1.16,1.16,0,0,1,.84-.37h7.14a1.23,1.23,0,0,1,.91.37,1.27,1.27,0,0,1,.37.91v44.41a1.15,1.15,0,0,1-.37.87,1.29,1.29,0,0,1-.91.34h-6.87Z" transform="translate(-24.42 -101.02)"/><path class="cls-2" d="M67.73,194.41v-28a1.11,1.11,0,0,0-.36-.85,1.23,1.23,0,0,0-.88-.34h-3a.66.66,0,0,1-.47-.21.7.7,0,0,1-.21-.52v-4.82a.7.7,0,0,1,.21-.52.66.66,0,0,1,.47-.21H86.2a.66.66,0,0,1,.47.21.73.73,0,0,1,.2.52v4.82a.73.73,0,0,1-.2.52.66.66,0,0,1-.47.21H76.5a1.19,1.19,0,0,0-.88.36,1.12,1.12,0,0,0-.37.83v28a.65.65,0,0,1-.2.49.71.71,0,0,1-.47.18H68.41A.6.6,0,0,1,67.73,194.41Z" transform="translate(-24.42 -101.02)"/><path class="cls-2" d="M103.19,193.83a12.8,12.8,0,0,1-4.67-4.66,12.5,12.5,0,0,1-1.74-6.44V172.67a.89.89,0,0,1,.29-.68.93.93,0,0,1,.65-.25h4.87a.88.88,0,0,1,.94.93v10.06a6,6,0,0,0,1.76,4.39,5.83,5.83,0,0,0,4.31,1.79,8.07,8.07,0,0,0,3.63-.83,6.94,6.94,0,0,0,2.64-2.26,5.31,5.31,0,0,0,1-3.09v-23a.9.9,0,0,1,.28-.65,1,1,0,0,1,.7-.28h4.78a1,1,0,0,1,.7.28.9.9,0,0,1,.28.65v23a12.07,12.07,0,0,1-1.79,6.46,12.68,12.68,0,0,1-5,4.64,14.94,14.94,0,0,1-7.23,1.72A12.39,12.39,0,0,1,103.19,193.83Zm-6.12-29a.89.89,0,0,1-.29-.65V159.7a.86.86,0,0,1,.29-.67.9.9,0,0,1,.65-.26h4.87a.89.89,0,0,1,.94.93v4.51a.94.94,0,0,1-.26.65.89.89,0,0,1-.68.29H97.72A.89.89,0,0,1,97.07,164.86Z" transform="translate(-24.42 -101.02)"/><path class="cls-2" d="M140.75,194.77a1,1,0,0,1-.34-.78v-4.51a1,1,0,0,1,.34-.83,1.12,1.12,0,0,1,.8-.31h4.2a11,11,0,0,0,5.71-1.53,11.49,11.49,0,0,0,4.12-4.13,11.4,11.4,0,0,0,0-11.41,11.49,11.49,0,0,0-4.12-4.13,11,11,0,0,0-5.71-1.53h-4.2a.58.58,0,0,0-.44.19.59.59,0,0,0-.18.44v3.16a1,1,0,0,1-.34.78,1.12,1.12,0,0,1-.8.31h-4.52a1.17,1.17,0,0,1-1.09-1.09V160a1.1,1.1,0,0,1,.34-.8,1,1,0,0,1,.75-.34h10.48a17.56,17.56,0,0,1,9.08,2.44,18.18,18.18,0,0,1,6.59,6.59,18.1,18.1,0,0,1,0,18.15,18.18,18.18,0,0,1-6.59,6.59,17.56,17.56,0,0,1-9.08,2.44h-4.2A1.12,1.12,0,0,1,140.75,194.77Z" transform="translate(-24.42 -101.02)"/><path class="cls-2" d="M174.42,194.9a.87.87,0,0,1-.29-.65V159.8a.91.91,0,0,1,.31-.7,1,1,0,0,1,.68-.28h5.18a.9.9,0,0,1,.65.28,1,1,0,0,1,.29.7v34.45a1,1,0,0,1-.26.65.88.88,0,0,1-.68.28h-5.18A.93.93,0,0,1,174.42,194.9Z" transform="translate(-24.42 -101.02)"/><path class="cls-2" d="M193.43,184.83a19.19,19.19,0,0,1-.65-14.21,18.8,18.8,0,0,1,9.16-10.43,18.5,18.5,0,0,1,7.21-1.89h.1a.9.9,0,0,1,.7.31,1.39,1.39,0,0,1,.34.78v4.51c0,.66-.37,1-1.09,1.09a11.79,11.79,0,0,0-4.46,1.32,10.91,10.91,0,0,0-3.58,3A12,12,0,0,0,199.45,182a11.48,11.48,0,0,0,3.11,4.13,11.93,11.93,0,0,0,12.66,1.71,10.85,10.85,0,0,0,4-3.17,11.24,11.24,0,0,0,2.1-3.65,12.16,12.16,0,0,0,.7-4.08,11.93,11.93,0,0,0-1.29-5.49,2.25,2.25,0,0,1-.26-1,1.52,1.52,0,0,1,.62-1.19l1.61-1.09c.79-.56,1.3-.9,1.5-1a1.53,1.53,0,0,1,.78-.26,1.35,1.35,0,0,1,1.25.78,18.59,18.59,0,0,1,2.49,9.39,19.09,19.09,0,0,1-1.09,6.35,18.06,18.06,0,0,1-3.22,5.63,16.68,16.68,0,0,1-6.35,5,19,19,0,0,1-8,1.73,18.42,18.42,0,0,1-6.33-1.11,16.56,16.56,0,0,1-5.44-3.24A18.46,18.46,0,0,1,193.43,184.83Z" transform="translate(-24.42 -101.02)"/><path class="cls-2" d="M241.34,188a.52.52,0,0,1,0,.37l-1.24,3.47a.62.62,0,0,1-.37.37.66.66,0,0,1-.57-.06,11,11,0,0,1-2.38-1.29.66.66,0,0,1-.26-.42,3.19,3.19,0,0,1,.46-1.16c.31-.58.75-1.33,1.3-2.26a.5.5,0,0,1,.73-.1l2.07.83A.71.71,0,0,1,241.34,188Zm17-10.6a8.14,8.14,0,0,1,3.08,2.8,9.7,9.7,0,0,1-.41,9.93,10.44,10.44,0,0,1-4.49,3.5,16.53,16.53,0,0,1-6.69,1.27,13,13,0,0,1-2.13-.2,1.1,1.1,0,0,1-.73-.29.78.78,0,0,1-.1-.7l.21-1.5c0-.28.07-.6.1-1a8.93,8.93,0,0,1,.16-1,.86.86,0,0,1,1-.83l2.18,0a7,7,0,0,0,4.23-1.2,3.54,3.54,0,0,0,1.63-2.95,4.32,4.32,0,0,0-.88-2.54,5.43,5.43,0,0,0-2.07-1.41,43.46,43.46,0,0,0-4.1-1.5,62.47,62.47,0,0,1-6.41-2.52,9,9,0,0,1-3.66-2.88,8.5,8.5,0,0,1,0-9.54,12,12,0,0,1,4.12-3.81,15.35,15.35,0,0,1,6.07-1.9,23.25,23.25,0,0,1,4.88.31,16.51,16.51,0,0,1,4.15,1.25,15.85,15.85,0,0,1,3,2,1.8,1.8,0,0,1,.41.47c.11.17.14.29.11.36a25.4,25.4,0,0,1-1.77,2.7l-.62.88a.6.6,0,0,1-.46.16.93.93,0,0,1-.52-.16,17,17,0,0,0-3.69-1.61,13.36,13.36,0,0,0-3.63-.51,11,11,0,0,0-4,.72,6.51,6.51,0,0,0-2.21,1.64,3,3,0,0,0-.8,1.94,3.22,3.22,0,0,0,1.81,2.7,29.81,29.81,0,0,0,2.88,1.45c1.44.66,2.66,1.16,3.66,1.51A46.75,46.75,0,0,1,258.33,177.42Zm1.29-10.2a0,0,0,0,1,.05-.05Z" transform="translate(-24.42 -101.02)"/><path class="cls-2" d="M32.58,188a.51.51,0,0,1,0,.37l-1.24,3.47a.62.62,0,0,1-.37.37.66.66,0,0,1-.57-.06,11,11,0,0,1-2.38-1.29.66.66,0,0,1-.26-.42,3.19,3.19,0,0,1,.46-1.16c.31-.58.75-1.33,1.3-2.26.17-.24.41-.28.73-.1l2.07.83A.68.68,0,0,1,32.58,188Zm17-10.6a8.09,8.09,0,0,1,3.09,2.8,9.7,9.7,0,0,1-.41,9.93,10.5,10.5,0,0,1-4.49,3.5,16.53,16.53,0,0,1-6.69,1.27,13,13,0,0,1-2.13-.2,1.1,1.1,0,0,1-.73-.29.75.75,0,0,1-.1-.7l.21-1.5c0-.28.07-.6.1-1a7.13,7.13,0,0,1,.16-1,.86.86,0,0,1,1-.83l2.18,0a7,7,0,0,0,4.23-1.2,3.54,3.54,0,0,0,1.63-2.95,4.32,4.32,0,0,0-.88-2.54,5.43,5.43,0,0,0-2.07-1.41,43.46,43.46,0,0,0-4.1-1.5,62.47,62.47,0,0,1-6.41-2.52,9,9,0,0,1-3.66-2.88,8.5,8.5,0,0,1,0-9.54,12,12,0,0,1,4.12-3.81,15.35,15.35,0,0,1,6.07-1.9,23.25,23.25,0,0,1,4.88.31,16.64,16.64,0,0,1,4.15,1.25,16.17,16.17,0,0,1,3,2,1.8,1.8,0,0,1,.41.47c.11.17.14.29.11.36a25.4,25.4,0,0,1-1.77,2.7l-.62.88a.61.61,0,0,1-.47.16.93.93,0,0,1-.51-.16,17,17,0,0,0-3.69-1.61,13.36,13.36,0,0,0-3.63-.51,11,11,0,0,0-4,.72,6.51,6.51,0,0,0-2.21,1.64,3,3,0,0,0-.8,1.94,3.22,3.22,0,0,0,1.81,2.7,29.81,29.81,0,0,0,2.88,1.45c1.44.66,2.66,1.16,3.66,1.51A46.48,46.48,0,0,1,49.57,177.42Zm1.3-10.2a0,0,0,0,1,.05-.05Z" transform="translate(-24.42 -101.02)"/></svg>
            </a>
            <a href="<?php echo url('public/shop') ?>" class="nav__link">shop</a>
            <input type="checkbox" id="hamburger" style="display:none;visibility:hidden;">
            <label class="hamburger" for="hamburger">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </label>
            <div class="mobile-nav">
                <a class="mobile-nav__link" href="<?php echo url('public/') ?>">home</a>
                <a class="mobile-nav__link" href="<?php echo url('public/portfolio') ?>">portfolio</a>
                <a class="mobile-nav__link" href="<?php echo url('public/shop') ?>">shop</a>
            </div>
        </nav>
        <main class="main">
            <?=$this->section('content')?>
        </main>
        <footer class="footer"></footer>
        <script src="<?php echo url('OceanStudios/public/js/nav.js') ?>"></script>
    </body>
</html>