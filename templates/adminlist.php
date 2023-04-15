<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="static/admin.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="main-container">

        <div class="todo-list">
            <form class="search_form" action="" method="GET">
                Поиск по имени:
                <input type="text" name="search" value="<?= htmlspecialchars($_GET["search"] ?? "") ?>">
            </form>

            <form action="" method="POST">
                <div class="todo-list__header">
                    Список пользователей
                    <button class="bl-btn task__button-del" type="submit"></button>
                </div>
                <ul class="todo-list__list">
                    <?php

                    use App\View;

                    $view = new View;
                    foreach ($data as $item) {
                        $view->render("partials/admintask", ['data' => $item]);
                    }

                    ?>
                </ul>
            </form>
        </div>
    </div>
    <script src="static/admin.js"></script>
</body>

</html>