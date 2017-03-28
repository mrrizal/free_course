<?php

namespace Mvc\Controller;

use \Mvc\Model\ArtikelModel;

class PageController extends \Mvc\Core\App
{
	public function indexAction()
	{
		$artikel = ArtikelModel::all();
		$data['artikel'] = $artikel;

		$artikel_terakhir = ArtikelModel::get_latest();

		echo $this->loadView('meta');
		echo $this->loadView('header');
		echo $this->loadView('sidebar', array('artikel_terakhir' => $artikel_terakhir));
		echo $this->loadView('index', $data);
		echo $this->loadView('footer');
	}

	public function aboutAction()
	{
		$artikel_terakhir = ArtikelModel::get_latest();
		echo $this->loadView('meta');
		echo $this->loadView('header');
		echo $this->loadView('sidebar', array('artikel_terakhir' => $artikel_terakhir));
		echo $this->loadView('about');
		echo $this->loadView('footer');
	}

	public function contact_usAction() {
		$artikel_terakhir = ArtikelModel::get_latest();
		echo $this->loadView('meta');
		echo $this->loadView('header');
		echo $this->loadView('sidebar', array('artikel_terakhir' => $artikel_terakhir));
		echo $this->loadView('contact_us');
		echo $this->loadView('footer');

	}

	public function artikelAction() {
		$title = $_SERVER['REQUEST_URI'];
		$title = explode('/', $title);
		if(isset($title[6])) {
			$title =  str_replace('-', ' ', $title[6]);
			$artikel = ArtikelModel::one($title);
			$artikel_terakhir = ArtikelModel::get_latest();
			if(count($artikel['id']) == 1) {
				echo $this->loadView('meta');
				echo $this->loadView('header');
				echo $this->loadView('sidebar', array('artikel_terakhir' => $artikel_terakhir));
				echo $this->loadView('content', $artikel);
				echo $this->loadView('footer');
			}
			else {
				header('Location: '.BASE_URL.'index.php/page');	
			}
		}	
		else {
			header('Location: '.BASE_URL.'index.php/page');
		}
	}

	public function alternatifAction()
	{
		echo $this->loadView('layout', array(
			'content' => $this->loadView('home', array(
				'nama_lengkap' => 'Wisnu Hafid',
				'alamat' => 'Margahayu Raya',
		))));
	}
}