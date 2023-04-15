<?php

namespace App;

use App\View;

class FormController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View;
    }
    public function show()
    {
        $this->view->render('form', ['postData' => $_POST]);
    }
    public function store()
    {
        $data = [
            "name" => '',
            "lastname" => '',
            "email" => '',
            "phone" => '',
            "theme" => '',
            "money" => '',
            "mailing" => '',
            "processing" => '',
        ];

        $errors = [];

        if (!empty($_POST["name"])) {
            $data["name"] = strip_tags($_POST["name"]);
        } else {
            $errors[] = "Не указано имя!";
        };

        if (!empty($_POST["lastname"])) {
            $data["lastname"] = strip_tags($_POST["lastname"]);
        } else {
            $errors[] = "Не указана фамилия!";
        };

        if (!empty($_POST["email"])) {
            $data["email"] = strip_tags($_POST["email"]);
        } else {
            $errors[] = "Не указан e-mail!";
        };

        if (!empty($_POST["phone"])) {
            $data["phone"] = strip_tags($_POST["phone"]);
        } else {
            $errors[] = "Не указан телефон!";
        };

        if (!empty($_POST["theme"])) {
            $data["theme"] = strip_tags($_POST["theme"]);
        } else {
            $errors[] = "Не указана тема конференции!";
        };
        if (!empty($_POST["money"])) {
            $data["money"] = strip_tags($_POST["money"]);
        } else {
            $errors[] = "Не указан способ оплаты";
        };
        if (!empty($_POST["mailing"])) {
            $data["mailing"] = strip_tags($_POST["mailing"]);
        } else {
            $errors[] = "Разрешите отправку вам уведомлений о конференции!";
        };

        if (!empty($_POST["processing"])) {
            $data["processing"] = strip_tags($_POST["processing"]);
        } else {
            $errors[] = "Разрешите обрабатывать ваши данные";
        };

        if (!empty($errors)) {
            $this->view->render('form', [
                'postData' => $_POST,
                'errors' => $errors
            ]);
        } else {
            $dataDir = 'data';
            if (!is_dir($dataDir)) {
                mkdir($dataDir, 0777, true);
            };
            $filename = date("Ymd-His") . "-" . rand(100, 999) . '.json';
            while (is_file($dataDir . "/" . $filename)) {
                $filename = date("Ymd-His") . "-" . rand(100, 999) . '.json';
            };
            $data = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents($dataDir . "/" . $filename,  $data);

            $this->view->render('form', [
                'postData' => $_POST,
                'succses' => true,
            ]);
        };
    }
}
