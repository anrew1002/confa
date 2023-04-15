<li class="task">
    <input type="checkbox" class="bl-btn task__done" name=<?= $data["filename"] ?>>
    <span class="task__discription"><?= $data["name"]  . " " . $data["lastname"] ?></span>
    <span class="task__desc">
        <?= "<p>" . "Имя: " . $data["name"] . "</p>" ?>
        <?= "<p>" . "Фамилия: " . $data["lastname"] . "</p>" ?>
        <?= "<p>" . "Почта: " . $data["email"] . "</p>" ?>
        <?= "<p>" . "Телефон: " . $data["phone"] . "</p>" ?>
        <?= "<p>" . "Тема: " . $data["theme"] . "</p>" ?>
        <?= "<p>" . "Оплата: " . $data["money"] . "</p>" ?>
        <?= "<p>" . "Уведомления: " . $data["mailing"] . "</p>" ?>
        <?= "<p>" . "Обработка: " . $data["processing"] . "</p>" ?>
        <?= "<p>" . "Название файла: " . $data["filename"] . "</p>" ?>
    </span>
</li>