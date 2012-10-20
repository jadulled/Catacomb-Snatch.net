<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('news_model');
	}

	public function index(){
		$data['news'] = $this->news_model->get_news();

		$this->template->write_view('content', 'news/index', $data);
		$this->template->render();
	}

	public function view($slugId) {
		$data['entry'] = $this->news_model->get_news($slugId);

		if($data['entry'] != NULL) {
			$this->template->write_view('content', 'news/view', $data);
			$this->template->write('title', $data['entry']['title']);
		} else {
			$this->template->write_view('content', 'news/not_found', $data);
			$this->template->write('title', "Not found");
		}

		$this->template->render();
	}
}

/* End of file news.php */
/* Location: ./application/controllers/news.php */