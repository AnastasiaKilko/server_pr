<section class="forms">
    <div class="form-input">
        <h2>Добавить врача в систему</h2>
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
            <div class="input-part">
                <div class="line"></div>
                <label>Должность <select name="position">
                        <option value="1">-</option>
                        <option value="2">Участковый врач</option>
                        <option value="3">Заведующий отделением</option>
                        <option value="4">Главный врач</option>
                    </select></label>
                <div class="line"></div>
            </div>
            <div class="input-part">
                <div class="line"></div>
                <label>Специализация <select name="specialty">
                        <option value="1">-</option>
                        <option value="2">Терапевт</option>
                        <option value="3">Хирург</option>
                        <option value="4">Невролог</option>
                        <option value="5">Эндокринолог</option>
                        <option value="6">Оториноларинголог</option>
                    </select></label>
                <div class="line"></div>
            </div>
            <button>Добавить врача</button>
        </form>
    </div>
</section>