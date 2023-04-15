<?php

namespace App;

use App\View;

class AdminController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View;
    }
    public function show()
    {


        $list_of_files = scandir("data");
        $list_of_json = array();
        if (!empty($_GET)) {
            $search_string = strip_tags($_GET["search"]);
        }
        foreach ($list_of_files as $filename) {
            // echo is_writable("data/" . $filename);
            if (is_file("data/" . $filename)) {
                if (!empty($search_string)) {
                    $fileinfo = json_decode(file_get_contents("data\\" . $filename), true);
                    $fileinfo["filename"] = $filename;
                    if (mb_stripos($fileinfo["name"] . $fileinfo["lastname"], $search_string) !== false) {
                        $list_of_json[] = $fileinfo;
                    }
                } else {
                    $fileinfo = json_decode(file_get_contents("data\\" . $filename), true);
                    $fileinfo["filename"] = $filename;
                    $list_of_json[] = $fileinfo;
                }
                // var_dump(json_decode(file_get_contents("data\\" . $filename), true));
            }
        }


        $this->view->render('adminlist', ["data" => $list_of_json]);
    }
    public function store()
    {
        var_dump($_POST);
        foreach ($_POST as $filename => $bool) {
            unlink("data/" . rtrim($filename, "_json") . ".json");
        }
        header('Location: admin.php');
    }
}
