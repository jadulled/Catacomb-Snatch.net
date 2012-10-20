<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_Model extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->load->database();
	}

	/**
	 * Returns the latest news
	 * Use the $sludId parameter to get a news entry by ID or slug
	 *
	 * @param $slugId mixed Id or slug string of news entry
	 */
	public function get_news($slugId = FALSE) {
		if ($slugId === FALSE) {
			$query = $this->db->get('news');
			return $query->result_array();
		}
		
		if(is_int($slugId))
			$query = $this->db->get_where('news', array('id' => $slugId));
		else
			$query = $this->db->get_where('news', array('slug' => $slugId));

		return $query->row_array();
	}

}

/* End of file news.php */
/* Location: ./application/models/news.php */