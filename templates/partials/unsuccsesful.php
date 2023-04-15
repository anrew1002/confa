<div class="notification unsuccsesful">
    <span> Форма заполнена неправильно!</span>
    <ul>
        <?php
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }

        ?>
    </ul>
</div>