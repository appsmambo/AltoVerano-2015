<?php

class HomeController extends BaseController {

	private $_clase;
	
	public function __construct()
	{
		$this->_clase = 'interna';
	}
	
	public function getIndex()
	{
		$this->_clase = 'home';
		return View::make('index')->with('clase', $this->_clase);
	}
	
	public function getNuevasFormas()
	{
		return View::make('nuevas-formas')->with('clase', $this->_clase);
	}
	
	public function getTuLook()
	{
		return View::make('tu-look')->with('clase', $this->_clase);
	}

}
