<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() { 
        parent::__construct();
        $this->load->library('template'); 
	}
	public function index()
	{
		$data = array( 
                    'title' => 'The Diaries', 
                    'bestsellers'=>$this->Fetch_model->get_bestsellers(),
                );
		$this->template->load('default', 'index', $data);
	}

	public function upload_content(){
		$data = array( 
                    'title' => 'Upload Content', 
                );
		$this->template->load('default', 'upload_content', $data); 
	}

	public function add_new_book(){
		print_r($_POST);
		$book_title=$this->input->post('book_title');
		$isbn=$this->input->post('isbn');
		$book_preview=$this->input->post('book_preview');
		$book_attachment=$this->input->post('book_attachment');
		$publisher=$this->input->post('publisher');
		$date_released=$this->input->post('date_released');
		$genre=$this->input->post('genre'); 
		$author=$this->input->post('authro');
		$email_address=$this->input->post('email_address');
		$phone=$this->input->post('phone');

		//Set Attachment
		  //image entry
        $target_path = "assets/resource_images/";
        $validextensions = array('pdf', 'doc');
        $ext = explode('.', basename($_FILES['book_attachment']['name']));
        $file_extension = end($ext);
        $image_name = md5(uniqid()) . "." . $ext[count($ext) - 1];
        $target_path2 = $target_path . $image_name;

        if (($_FILES["book_attachment"]["size"] < 1000000000000000000000000000000) && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['book_attachment']['tmp_name'], $target_path2)) {
                $path = $image_name;
                $config['source_image'] = $target_path2; //$fileTmpLoc;
                $config['wm_text'] = '';
                $config['quality'] = 150;
                $config['wm_font_path'] = './system/fonts/texb.ttf';
                $config['wm_font_size'] = '15';
                $config['wm_font_color'] = 'ffffff';
                $config['wm_vrt_alignment'] = 'top';
                $config['wm_hor_alignment'] = 'center'; 
                $config['wm_padding'] = '50';
                $config['wm_shadow_color'] = '27AE60';
                $config['wm_shadow_distance'] = 5;
                $config['width'] = 75;
                $config['height'] = 50;
                // $this->image_lib->initialize($config);
                //$this->image_lib->watermark();

                $book_cover = $image_name;
            }
        }


        //Book Image

          //image entry
        $target_path = "assets/book_covers/";
        $validextensions = array('jpg', 'png','jpeg','gif');
        $ext = explode('.', basename($_FILES['book_image']['name']));
        $file_extension = end($ext);
        $image_name = md5(uniqid()) . "." . $ext[count($ext) - 1];
        $target_path2 = $target_path . $image_name;

        if (($_FILES["book_image"]["size"] < 1000000000000000000000000000000) && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['book_image']['tmp_name'], $target_path2)) {
                $path = $image_name;
                $config['source_image'] = $target_path2; //$fileTmpLoc;
                $config['wm_text'] = '';
                $config['quality'] = 150;
                $config['wm_font_path'] = './system/fonts/texb.ttf';
                $config['wm_font_size'] = '15';
                $config['wm_font_color'] = 'ffffff';
                $config['wm_vrt_alignment'] = 'top';
                $config['wm_hor_alignment'] = 'center'; 
                $config['wm_padding'] = '50';
                $config['wm_shadow_color'] = '27AE60';
                $config['wm_shadow_distance'] = 5;
                $config['width'] = 75;
                $config['height'] = 50;
                // $this->image_lib->initialize($config);
                //$this->image_lib->watermark();

                $book_cover = $image_name;
            }
        }

		$data=array(
			'book_title'=>$book_title,
			'isbn'=>$isbn,
			'preview'=>$book_preview,
			'publisher'=>$publisher,
			'date_released'=>$date_released,
			'genre'=>$genre,
			'book_cover'=>$book_cover,
			'author'=>$author,
			'email_address'=>$email_address,
			'phone'=>$phone
		);
		$this->Input_model->insert_data('tbl_books',$data);
	}
}
