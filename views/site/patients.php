<section class="list">
    <h2>Список пациентов</h2>
    <div class="list-info">
        <div class="list-bg">
            <ol>
                <?php
                foreach ($patients as $patient) {
                    echo '<li>' .$patient->surname,' ', $patient->name, ' ', $patient->patronymic, ', ', $patient->birthdate . '</li>';
                }
                ?>
            </ol>
        </div>
        <div class="add">
            <a href="<?= app()->route->getUrl('/add_patient') ?>">Добавить пациента</a>
        </div>
    </div>
</section>