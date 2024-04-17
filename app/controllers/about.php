<?php
/**
* 
*/
class about extends controller
{

	public function index()
	{
		$this->views('about/about');
	}

	public function learnmore()
	{
		$this->views('about/learnmore');
	}
}