<?php namespace Modules\Admin\Models;

class ContentModel extends \CodeIgniter\Model
{
	protected $table = 'content';

	public function getContents($slug = false)
	{
		if($slug == false)
		{
			return $this->findAll();
		}
		return $this->asArray()
								->where(['slug'=>$slug])
								->first();
	}
}