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
		return View::make('index')
			->with('titulo', 'Ripley - Alto Verano')
			->with('descripcion', 'Yo Elijo Verano - Sarah Jessica Parker. Entra a www.modaripley.com/veranoripley')
			->with('clase', $this->_clase);
	}
	
	public function getTop5()
	{
		// lista
		$listaMaxidress = Top5::select(array('codigo', 'marca'))->where('categoria', '=', 'maxi-dress')->orderBy('codigo')->groupBy('codigo')->get();
		$listaPalazzos = Top5::select(array('codigo', 'marca'))->where('categoria', '=', 'palazzos')->orderBy('codigo')->groupBy('codigo')->get();
		$listaSexytop = Top5::select(array('codigo', 'marca'))->where('categoria', '=', 'sexy-top')->orderBy('codigo')->groupBy('codigo')->get();
		$listaEnteritos = Top5::select(array('codigo', 'marca'))->where('categoria', '=', 'enteritos')->orderBy('codigo')->groupBy('codigo')->get();
		$listaShorts = Top5::select(array('codigo', 'marca'))->where('categoria', '=', 'shorts')->orderBy('codigo')->groupBy('codigo')->get();
		
		// detalle
		$detalleMaxidress = Top5::where('categoria', '=', 'maxi-dress')->orderBy('codigo')->get();
		$detallePalazzos = Top5::where('categoria', '=', 'palazzos')->orderBy('codigo')->get();
		$detalleSexytop = Top5::where('categoria', '=', 'sexy-top')->orderBy('codigo')->get();
		$detalleEnteritos = Top5::where('categoria', '=', 'enteritos')->orderBy('codigo')->get();
		$detalleShorts = Top5::where('categoria', '=', 'shorts')->orderBy('codigo')->get();
		
		return View::make('nuevas-formas')
			->with('titulo', 'Ripley - Top 5')
			->with('descripcion', 'Elije los TOP 5 del verano en Ripley entrando a www.modaripley.com/veranoripley/top-5-del-verano')
			->with('clase', $this->_clase)
			->with('listaMaxidress', $listaMaxidress)
			->with('listaPalazzos', $listaPalazzos)
			->with('listaSexytop', $listaSexytop)
			->with('listaEnteritos', $listaEnteritos)
			->with('listaShorts', $listaShorts)
			->with('detalleMaxidress', $detalleMaxidress)
			->with('detallePalazzos', $detallePalazzos)
			->with('detalleSexytop', $detalleSexytop)
			->with('detalleEnteritos', $detalleEnteritos)
			->with('detalleShorts', $detalleShorts);
	}
	
	public function getTuLook()
	{
		$looks = Look::orderBy('id')->get();
		
		return View::make('tu-look')
			->with('titulo', 'Ripley - Tu look por menos')
			->with('descripcion', '¡TU LOOK POR MENOS! Elige tu look del verano a precios increíbles solo en Ripley www.modaripley.com/veranoripley/tu-look-por-menos')
			->with('clase', $this->_clase)
			->with('looks', $looks);
	}
	
	public function getSandalias()
	{
		$this->_clase = 'home';
		return View::make('sandalias.index')->with('clase', $this->_clase);
	}
	
	public function getSandaliasNuevaTemporada()
	{
		return View::make('sandalias.nueva')->with('clase', $this->_clase);
	}
	
	public function getSandaliasNinos()
	{
		return View::make('sandalias.ninos')->with('clase', $this->_clase);
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
