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
	
	public function getSandalias()
	{
		$this->_clase = 'home';
		return View::make('sandalias.index')->with('clase', $this->_clase);
	}
	
	public function getSandaliasNuevaTemporada()
	{
		return View::make('sandalias.index')->with('clase', $this->_clase);
	}
	
	public function getSandaliasNinos()
	{
		return View::make('sandalias.index')->with('clase', $this->_clase);
	}
	
	public function getSandaliasAccesorios()
	{
		return View::make('sandalias.accesorios')->with('clase', $this->_clase);
	}
	
	public function getSandaliasPorMenos()
	{
		return View::make('sandalias.pormenos')->with('clase', $this->_clase);
	}

}
