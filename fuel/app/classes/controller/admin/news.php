<?php

class Controller_Admin_News extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index' => 'active');
		$data['models'] = Model_Admin_News::find('all');

		$this->template->title = 'Admin news &raquo; Index';
		$this->template->content = View::forge('admin/news/index', $data);
	}
}
