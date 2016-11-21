<?php

namespace FileManager\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController {

	public function initialize() {
		parent::initialize();

		$this->loadComponent('FileManager.FileSystem');
		$this->viewBuilder()->layout('FileManager.default');
	}
}
