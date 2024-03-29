<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Transaksi_sewa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get transaksi_sewa by ID_TRAKSAKSI
     */
    function get_transaksi_sewa($ID_TRAKSAKSI)
    {
        return $this->db->get_where('TRANSAKSI_SEWA',array('ID_TRAKSAKSI'=>$ID_TRAKSAKSI))->row_array();
    }
        
    /*
     * Get all transaksi_sewa
     */
    function get_all_transaksi_sewa()
    {
        $this->db->order_by('ID_TRAKSAKSI', 'desc');
        return $this->db->get('TRANSAKSI_SEWA')->result_array();
    }
        
    /*
     * function to add new transaksi_sewa
     */
    function add_transaksi_sewa($params)
    {
        $this->db->insert('TRANSAKSI_SEWA',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update transaksi_sewa
     */
    function update_transaksi_sewa($ID_TRAKSAKSI,$params)
    {
        $this->db->where('ID_TRAKSAKSI',$ID_TRAKSAKSI);
        return $this->db->update('TRANSAKSI_SEWA',$params);
    }
    
    /*
     * function to delete transaksi_sewa
     */
    function delete_transaksi_sewa($ID_TRAKSAKSI)
    {
        return $this->db->delete('TRANSAKSI_SEWA',array('ID_TRAKSAKSI'=>$ID_TRAKSAKSI));
    }
}
