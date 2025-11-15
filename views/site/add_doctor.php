<h2>Добавить врача в систему</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>Фамилия <input type="text" name="surname"></label>
    <label>Имя <input type="text" name="name"></label>
    <label>Отчество <input type="text" name="patronymic"></label>
    <label>Дата рождения <input type="date" name="birthdate"></label>
    <label>Должность <select name="position">
            <option value="1">Выберите должность врача</option>
            <option value="2">Участковый врач</option>
            <option value="3">Заведующий отделением</option>
            <option value="4">Главный врач</option>
        </select></label>
    <label>Специализация <select name="specialty">
            <option value="1">Выберите специализацию врача</option>
            <option value="2">Терапевт</option>
            <option value="3">Хирург</option>
            <option value="4">Невролог</option>
            <option value="5">Эндокринолог</option>
        </select></label>
    <button>Добавить врача</button>
</form>