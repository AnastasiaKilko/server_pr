<section class="list">
<h2>Список врачей</h2>
    <div class="list-info">
        <div class="list-bg">
            <ol>
                <?php
                foreach ($doctors as $doctor) {
                    echo '<li>' .$doctor->surname,' ', $doctor->name, ' ', $doctor->patronymic, ', ', $doctor->birthdate . '</li>';
                }
                ?>
            </ol>
        </div>
        <div class="add">
            <a href="<?= app()->route->getUrl('/add_doctor') ?>">Добавить врача</a>
        </div>
    </div>
</section>