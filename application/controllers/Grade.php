<?php if ( !defined('BASEPATH')) exit ('No direct Script allowed');

class Grade extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// jika belum login redirect ke login
		if ($this->session->userdata('logged')<>1){
			redirect(site_url(auth));

		}
	}



	public function index()
	{
		
		
		$rows = $this->Grade_model->getAll()->result();

		$data = array(
			'title' => 'Grade',
			'content' => 'Data List',
			'rows' => $rows,
			'sidebar' => 'sidebar-tad'
			);

			//ini adalah controller user
               $this->load->view('/headfoot/header',$data);
				$this->load->view('/TAD/Grade/index',$data);
               $this->load->view('/headfoot/footer');
	}

	public function add()
	{
		$allData = $this->Grade_model->getById(1)->row();

		$data = array(
			'title' => 'Add New Book',
			'judul' => 'User Add',
			'sidebar' => 'sidebar-tad'
			);

		 $this->load->view('/headfoot/header',$data	);
		$this->load->view('/TAD/Grade/add',$data);
		$this->load->view('/headfoot/footer');

	}


	public function insert()
	{
		$data = array(
			'id' => $this->input->post('id'),
			'title' => $this->input->post('title'),
			'author' => $this->input->post('author'),
			'publisher' => $this->input->post('publisher'),
			'year_publisher' => $this->input->post('year_publisher'),
			'price' => $this->input->post('price')
		);

		$this->Grade_model->input_data($data,'grade');


		$this->alert->set('alert-success', 'Berhasil Tambah Buku!');
		redirect(site_url('Dashboard'));
	}

	 
	public function edit($id){
		$data_grade = $this->Grade_model->getById($id)->row();
		$data = array(
			'title' => 'Book',
			'judul' => 'Update Book',
			'id' => $id,
			'data_grade' => $data_grade,
			'sidebar' => 'sidebar-tad'
		);
		

		$this->load->view('/headfoot/header',$data	);
		$this->load->view('/TAD/Grade/edit',$data);
		$this->load->view('/headfoot/footer');


	}

	public function update($id) {
		 // Ambil data dari formulir edit
		 $id = $this->input->post('id');
		 $data = array(
			'id' => $this->input->post('id'),
			'title' => $this->input->post('title'),
			'author' => $this->input->post('author'),
			'publisher' => $this->input->post('publisher'),
			'year_publisher' => $this->input->post('year_publisher'),
			'price' => $this->input->post('price')
		);
 
		 // Update data ke database menggunakan model
		 $this->Grade_model->ubah($id, $data);
 
		 // Tampilkan pesan konfirmasi
		 $this->alert->set('alert-success', 'Berhasil Update Buku!');
		 redirect(site_url('Dashboard'));
	 }


	public function delete($id)
	{
		$this->Grade_model->hapus($id);
		$this->alert->set('alert-success', 'Berhasil Hapus Buku!');
		redirect(site_url('TAD/Grade'));
	}

	public function indexAPI()
    {
        $buku = $this->Grade_model->getAll();

        $response = array();

        foreach($book->result() as $hasil) {

            $response[] = array(
                'id' => $hasil->id,
                'title' => $hasil->title,
				'author' => $hasil->author,
				'publisher' => $hasil->id,
				'year_publisher' => $hasil->year_publisher,
				'price' => $hasil->price      
            );

        }
        
        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Buku',
                'data'    => $response  
            )
        );

    }

	public function simpanAPI()
    {
            $data = array(
                'id' => $this->input->post("id"),
                'title'     => $this->input->post("title"),
				'author' => $this->input->post("author"),
				'publisher' => $this->input->post("publisher"),
				'year_publisher' => $this->input->post("year_publisher"),
				'price' => $this->input->post("price")
            );

            $simpan = $this->Grade_model->input_data($data);

            if($simpan) {

                header('Content-Type: application/json');
                echo json_encode(
                    array(
                        'success' => true,
                        'message' => 'Data Berhasil Disimpan!'
                    )
                );

            } else {

                header('Content-Type: application/json');
                echo json_encode(
                    array(
                        'success' => false,
                        'message' => 'Data Gagal Disimpan!'
                    )
                );
            }

    }

}