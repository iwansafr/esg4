<?php namespace Modules\Admin\Controllers;

class Admin extends \CodeIgniter\Controller
{
	public function index()
	{
		$data['template'] = 'AdminLte';
		 return view('Modules\Admin\Views\dashboard',$data);
	}
}