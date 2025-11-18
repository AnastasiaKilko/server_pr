<section class="forms">
    <div class="form-input">
        <h2>Авторизация</h2>
        <h3><?= $message ?? ''; ?></h3>

        <h3><?= app()->auth->user()->name ?? ''; ?></h3>
        <?php
        if (!app()->auth::check()):
        ?>
        <form method="post">
            <div class="input-part">
                <div class="line"></div>
                <label>Логин <input type="text" name="login"><span style="color: red;"><?= isset($errors['login']) ? $errors['login'] : '' ?></span></label>
                <div class="line"></div>
            </div>
            <div class="input-part">
                <div class="line"></div>
                <label>Пароль <input type="password" name="password"><span style="color: red;"><?= isset($errors['password']) ? $errors['password'] : '' ?></span></label>
                <div class="line"></div>
            </div>
            <button>Войти</button>
        </form>
    </div>
</section>
<?php endif;
