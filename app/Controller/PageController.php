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
		echo "test";
	// 	$artikel_terakhir = ArtikelModel::get_latest();
	// 	echo $this->loadView('meta');
	// 	echo $this->loadView('header');
	// 	echo $this->loadView('sidebar', array('artikel_terakhir' => $artikel_terakhir));
	// 	echo $this->loadView('about');
	// 	echo $this->loadView('footer');
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