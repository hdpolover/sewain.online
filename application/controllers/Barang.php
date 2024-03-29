<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Barang extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    } 

    /*
     * Listing of barang
     */
    function index()
    {
        $data['barang'] = $this->Barang_model->get_all_barang();
        
        $data['_view'] = 'barang/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new barang
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'NAMABARANG' => $this->input->post('NAMABARANG'),
				'JENIS' => $this->input->post('JENIS'),
				'DESKRIPSI' => $this->input->post('DESKRIPSI'),
				'STATUS' => $this->input->post('STATUS'),
				'HARGA' => $this->input->post('HARGA'),
            );
            
            $barang_id = $this->Barang_model->add_barang($params);
            redirect('barang/index');
        }
        else
        {            
            $data['_view'] = 'barang/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a barang
     */
    function edit($ID_BARANG)
    {   
        // check if the barang exists before trying to edit it
        $data['barang'] = $this->Barang_model->get_barang($ID_BARANG);
        
        if(isset($data['barang']['ID_BARANG']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'NAMABARANG' => $this->input->post('NAMABARANG'),
					'JENIS' => $this->input->post('JENIS'),
					'DESKRIPSI' => $this->input->post('DESKRIPSI'),
					'STATUS' => $this->input->post('STATUS'),
					'HARGA' => $this->input->post('HARGA'),
                );

                $this->Barang_model->update_barang($ID_BARANG,$params);            
                redirect('barang/index');
            }
            else
            {
                $data['_view'] = 'barang/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The barang you are trying to edit does not exist.');
    } 

    /*
     * Deleting barang
     */
    function remove($ID_BARANG)
    {
        $barang = $this->Barang_model->get_barang($ID_BARANG);

        // check if the barang exists before trying to delete it
        if(isset($barang['ID_BARANG']))
        {
            $this->Barang_model->delete_barang($ID_BARANG);
            redirect('barang/index');
        }
        else
            show_error('The barang you are trying to delete does not exist.');
    }
    
}
