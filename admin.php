<?php
include "init.php";

use App\AdminController;

$admin_controller = new AdminController;

switch (getenv('REQUEST_METHOD')) {

    case "GET":
        $admin_controller->show();
        break;
    case "POST":
        $admin_controller->store();
        break;
}
