<?php namespace Modules\Admin\Controllers;

use Modules\Admin\Models\ContentModel;

class Content extends \CodeIgniter\Controller
{
	public function index($view = '',$slug = '')
	{
		$data['template'] = 'AdminLte';
		$data['view'] = 'content/'.$view;
		$model = new ContentModel();
		$data['content'] = $model->getContents($slug);
		return view('Modules\Admin\Views\dashboard',$data);
	}
}