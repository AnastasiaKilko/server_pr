<h1>Список врачей</h1>
<ol>
    <?php
    foreach ($doctors as $doctor) {
        echo '<li>' . $doctor->surname->name->patronymic->birthdate . '</li>';
    }
    ?>
</ol>