<section class="forms">
    <div class="form-input">
        <h2>Добавить пациента в систему</h2>
        <h3><?= $message ?? ''; ?></h3>
        <form method="post">
            <div class="input-part">
            <div class="line"></div>
            <label>Фамилия <input type="text" name="surname"></label>
            <div class="line"></div>
            </div>
            <div class="input-part">
            <div class="line"></div>
            <label>Имя <input type="text" name="name"></label>
            <div class="line"></div>
            </div>
            <div class="input-part">
            <div class="line"></div>
            <label>Отчество <input type="text" name="patronymic"></label>
            <div class="line"></div>
            </div>
            <div class="input-part">
            <div class="line"></div>
            <label>Дата рождения <input type="date" name="birthdate"></label>
            <div class="line"></div>
            </div>
            <button>Добавить пациента</button>
        </form>
    </div>
</section>