<?php

namespace App\Mvc;

class Controller
{
	public static function index()
	{
		View::render(Model::getText());
	}
}