<html>

<head>
    <meta charset="utf-8">
    <link href="static/index.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="form-conference">
        <!-- TITLE -->
        <div class="form-conference--inner">
            <span class="title">
                <h1>Форма участника конференции</h1>
                <p>
                    Это форма необходимая для участия в данной конференции
                </p>
            </span>
            <?php

            use App\View;

            $view = new View;
            if (!empty($errors)) {
                $view->render('partials/unsuccsesful', ['errors' => $errors]);
            }
            if (!empty($succses)) {
                $view->render('partials/succsesful');
            }
            ?>
            <form action="" method="POST">
                <!-- HEAD ID -->
                <fieldset class="form" id="1">
                    <table>
                        <tr>
                            <td>
                                <div class="td"><label for="name">Имя:<br></label><input type="txt" name="name" id="name" value="<?= htmlspecialchars($postData["name"] ?? "") ?>" required placeholder="Краткий ответ">
                                    <hr>
                                </div>
                            </td>
                        <tr>
                            <td>
                                <div class="td"><label for="lastname">Фамилия:<br></label><input type="txt" name="lastname" id="SurName" value="<?= htmlspecialchars($postData["lastname"] ?? "") ?>" required placeholder="Краткий ответ">
                                    <hr>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><label for="email">E-mail:<br></label><input type="email" name="email" id="E-mail" value="<?= htmlspecialchars($postData["email"] ?? "") ?>" placeholder="example@gmail.com">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><label for="phone">Телефон<br></label><input type="txt" name="phone" id="ID" value="<?= htmlspecialchars($postData["phone"] ?? "") ?>" placeholder="79501001003" required>
                                <hr>
                            </td>
                        </tr>
                    </table>
                </fieldset>

                <fieldset class="form" id="4">
                    <table>

                        <tr>
                            <td>
                                <label for="theme">Выберите интересующую тематику:</label>
                                <select name="theme">
                                    <option value="business" <?php echo ((htmlspecialchars($postData["theme"] ?? "") == 'business') ? "selected" : ''); ?>>Бизнес</option>
                                    <option value="tech" <?php echo ((htmlspecialchars($postData["theme"] ?? "") == 'tech') ? "selected" : ''); ?>>Технологии</option>
                                    <option value="advert" <?php echo ((htmlspecialchars($postData["theme"] ?? "") == 'advert') ? "selected" : ''); ?>>Реклама и Маркетинг</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="money">Выберите способ оплаты:</label>
                                <select name="money">
                                    <option value="WebMoney" <?php echo ((htmlspecialchars($postData["money"] ?? "") == 'WebMoney') ? "selected" : ''); ?>>WebMoney</option>
                                    <option value="Iandex" <?php echo ((htmlspecialchars($postData["money"] ?? "") == 'Iandex') ? "selected" : ''); ?>>Яндекс.Деньги</option>
                                    <option value="PayPal" <?php echo ((htmlspecialchars($postData["money"] ?? "") == 'PayPal') ? "selected" : ''); ?>>PayPal</option>
                                    <option value="Credit" <?php echo ((htmlspecialchars($postData["money"] ?? "") == 'Credit') ? "selected" : ''); ?>>Кредитная карта</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="offer">
                                <label for="mailing">
                                    Согласшаюсь на рассылку о конференции
                                </label><input name='mailing' type="checkbox" id="Sure" checked required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="offer">
                                <label for="processing">Подтверждаю обработку
                                    данных</label>
                                <input name='processing' type="checkbox" id="Sure2">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit"></td>
                        </tr>
                    </table>
                </fieldset>


            </form>
        </div>
    </div>
</body>

</html>