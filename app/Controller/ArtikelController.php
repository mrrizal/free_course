<?php

namespace Mvc\Controller;

use \Mvc\Model\ArtikelModel;

class ArtikelController extends \Mvc\Core\App
{
	public function indexAction()
	{
		// echo "test";
		// $artikel = ArtikelModel::all();

		// $isi_halaman = $this->loadView('artikel', array(
		// 	'data_artikel' => $artikel
		// ));

		// echo $this->loadView('layout', array(
		// 	'content' => $isi_halaman
		// ));
	}

	public function detailAction()
	{
		$id = $this->uri_segment(2);

		$artikel = ArtikelModel::one($id);

		$isi_halaman = $this->loadView('detail_artikel', array(
			'row' => $artikel
		));

		echo $this->loadView('layout', array(
			'content' => $isi_halaman
		));
	}
}