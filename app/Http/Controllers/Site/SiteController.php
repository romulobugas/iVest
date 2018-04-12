<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
	public function __construct(){
		//$this->middleware('auth');
		/*$this->middleware('auth')
			->only([
				'contato',
				'categoria'

			]);*/

			/*$this->middleware('auth')
				->except([
					'index',
					'categoria'
				]);*/

	}


	public function index(){

		$title = 'Teste Home';
		$xss = '<script>alert("Ataque XSS")</script>';
		return view('Site.index', compact('title', 'xss'));
	}

	public function contato(){

		return view('contact.index');
	}

	public function categoria($id = 1){
		return "Listagem dos post da categoria: {$id}";
	}
}
