<?php
namespace core;

class View
{

	
	static function generate($content_view, $data = null)
	{
		include __DIR__.'/../views/'.$content_view;
	}
}
