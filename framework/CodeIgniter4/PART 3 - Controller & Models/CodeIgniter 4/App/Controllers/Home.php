<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController {

    // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- // - Index
	
		public function index() {

			return view('welcome_message');

		}

    // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- //

}