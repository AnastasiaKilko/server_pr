<section class="forms">
    <div class="form-input">
        <h2>Регистрация нового пользователя</h2>
        <h3><?= $message ?? ''; ?></h3>
        <form method="post">
            <div class="input-part">
                <div class="line"></div>
                <label>Фамилия <input type="text" name="surname"><span style="color: red;"><?= isset($errors['surname']) ? $errors['surname'] : '' ?></span></label>
                <div class="line"></div>
            </div>
            <div class="input-part">
                <div class="line"></div>
                <label>Имя <input type="text" name="name"><span style="color: red;"><?= isset($errors['name']) ? $errors['name'] : '' ?></span></label>
                <div class="line"></div>
            </div>
            <div class="input-part">
                <div class="line"></div>
                <label>Отчество <input type="text" name="patronymic"></label>
                <div class="line"></div>
            </div>
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
            <button>Зарегистрироваться</button>
        </form>
    </div>
</section>