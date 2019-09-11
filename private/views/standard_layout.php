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
        </nav>
        <main class="main">
            <?=$this->section('content')?>
        </main>
        <footer class="footer"></footer>
    </body>
</html>