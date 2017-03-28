<?php
namespace Mvc\Controller;

use \Mvc\Model\ArtikelModel;

class AdminController extends \Mvc\Core\App
{

	public function indexAction() {
		$this->loadFlashMessages();
		if (!session_id()) @session_start();
        $msg = new \Plasticbrain\FlashMessages\FlashMessages();

		$artikel = ArtikelModel::all();
		$data['artikel'] = $artikel;
		
		echo $this->loadView('admin/meta');
		echo $this->loadView('admin/sidebar');
		echo $this->loadView('admin/index', $data);
		echo $this->loadView('admin/footer');
	}

	public function artikelAction() {
		$this->loadFlashMessages();
		if (!session_id()) @session_start();
        $msg = new \Plasticbrain\FlashMessages\FlashMessages();
        
		echo $this->loadView('admin/meta');
		echo $this->loadView('admin/sidebar');
		echo $this->loadView('admin/form_artikel');
		echo $this->loadView('admin/footer');
	}

	public function add_artikelAction() {
		if (!session_id()) @session_start();
		$this->loadFlashMessages();
		$msg = new \Plasticbrain\FlashMessages\FlashMessages();

		if(isset($_POST['title']) and isset($_POST['content']) and $_POST['title'] != '' and $_POST['content'] != '') {
			$data = ArtikelModel::one($_POST['title']);
			if(count($data['id']) != 0) {
				$msg->error('Judul artikel sudah ada!', BASE_URL.'index.php/admin/artikel');
				// $msg->error('Data tidak lengkap!', '../form_article.php');
			} 
			else {
				if(ArtikelModel::add_artikel($_POST)) {
					$msg->success('Tambah artikel berhasil!', BASE_URL.'index.php/admin');
				}
				else {
					$msg->error('Gagal tambah artikel!', BASE_URL.'index.php/admin/artikel');
				}
			}
		}
		else {
			$msg->error('Data tidak lengkap!', BASE_URL.'index.php/admin/artikel');
		}
	}

	public function delete_artikelAction() {
		$this->loadFlashMessages();
		if (!session_id()) @session_start();
        $msg = new \Plasticbrain\FlashMessages\FlashMessages();
        
		$title = $_SERVER['REQUEST_URI'];
		$title = explode('/', $title);
		
		if(isset($title[6])) {
			$data = ArtikelModel::one(str_replace('-', ' ', $title[6]));
			print_r($data);
			if(count($data['id']) == 1) {
				if(ArtikelModel::delete_artikel($data['id'])) {
					$msg->success('Hapus artikel berhasil!', BASE_URL.'index.php/admin');
				}
				else {
					$msg->error('Hapus artikel gagal!', BASE_URL.'index.php/admin');
				}
			}
			else {
				$msg->error('Hapus artikel gagal!', BASE_URL.'index.php/admin');
			}
		}
		else {
			$msg->error('Hapus artikel gagal!', BASE_URL.'index.php/admin');
		}
	}

	public function update_artikelAction() {
		$this->loadFlashMessages();
		if (!session_id()) @session_start();
        $msg = new \Plasticbrain\FlashMessages\FlashMessages();
        
		if(isset($_POST['id']) and isset($_POST['title']) and isset($_POST['content'])){
			if(ArtikelModel::update_artikel($_POST)) {
				$msg->success('Update artikel berhasil!', BASE_URL.'index.php/admin');
			}
			else {
				$msg->error('Update artikel gagal!', BASE_URL.'index.php/admin');
			}
		}
		else {
			
			$title = $_SERVER['REQUEST_URI'];
			$title = explode('/', $title);
			
			if(isset($title[6])) {
				$data = ArtikelModel::one(str_replace('-', ' ', $title[6]));
				if(count($data['id']) == 1) {
					echo $this->loadView('admin/meta');
					echo $this->loadView('admin/sidebar');
					echo $this->loadView('admin/form_artikel', $data);
					echo $this->loadView('admin/footer');
				}
			}
			else {
				$msg->error('Artikel tidak ditemukan!', BASE_URL.'index.php/admin');
			}
		}
	}
}