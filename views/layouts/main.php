<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/styles.css">
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav>
        <div class="navigation">
            <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
            <a href="<?= app()->route->getUrl('/doctors') ?>">Врачи</a>
            <a href="<?= app()->route->getUrl('/patients') ?>">Пациенты</a>
            <a href="<?= app()->route->getUrl('/appointments') ?>">Запись на приём</a>
        </div>
        <div class="entrance">
            <?php
            if (!app()->auth::check()):
                ?>
                <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
                <span>/</span>
                <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
            <?php
            else:
                ?>
                <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
            <?php
            endif;
            ?>
        </div>
    </nav>
</header>
<main>
    <div>
        <?= $content ?? ''; ?>
    </div>
</main>

</body>
</html>