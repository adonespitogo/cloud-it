<?php

class HomeController extends BaseController {

	public function index()
	{
		$posts = Post::with('tags','user')->where('active','=',true)->orderBy('created_at','DESC')->get();
		return View::make('public.index',array('posts'=>$posts));
	}

}