<?php

include "init.php";

use App\FormController;

$form_controller = new FormController;

switch (getenv('REQUEST_METHOD')) {

	case "GET":
		$form_controller->show();
		break;
	case "POST":
		$form_controller->store();
		break;
}
