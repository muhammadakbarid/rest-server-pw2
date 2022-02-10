<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keys extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Keys_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'keys/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'keys/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'keys/index.html';
            $config['first_url'] = base_url() . 'keys/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Keys_model->total_rows($q);
        $keys = $this->Keys_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'keys_data' => $keys,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('keys/keys_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Keys_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'user_id' => $row->user_id,
		'key' => $row->key,
		'level' => $row->level,
		'ignore_limits' => $row->ignore_limits,
		'is_private_key' => $row->is_private_key,
		'ip_addresses' => $row->ip_addresses,
		'date_created' => $row->date_created,
	    );
            $this->load->view('keys/keys_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keys'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('keys/create_action'),
	    'id' => set_value('id'),
	    'user_id' => set_value('user_id'),
	    'key' => set_value('key'),
	    'level' => set_value('level'),
	    'ignore_limits' => set_value('ignore_limits'),
	    'is_private_key' => set_value('is_private_key'),
	    'ip_addresses' => set_value('ip_addresses'),
	    'date_created' => set_value('date_created'),
	);
        $this->load->view('keys/keys_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'user_id' => $this->input->post('user_id',TRUE),
		'key' => $this->input->post('key',TRUE),
		'level' => $this->input->post('level',TRUE),
		'ignore_limits' => $this->input->post('ignore_limits',TRUE),
		'is_private_key' => $this->input->post('is_private_key',TRUE),
		'ip_addresses' => $this->input->post('ip_addresses',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
	    );

            $this->Keys_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('keys'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Keys_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('keys/update_action'),
		'id' => set_value('id', $row->id),
		'user_id' => set_value('user_id', $row->user_id),
		'key' => set_value('key', $row->key),
		'level' => set_value('level', $row->level),
		'ignore_limits' => set_value('ignore_limits', $row->ignore_limits),
		'is_private_key' => set_value('is_private_key', $row->is_private_key),
		'ip_addresses' => set_value('ip_addresses', $row->ip_addresses),
		'date_created' => set_value('date_created', $row->date_created),
	    );
            $this->load->view('keys/keys_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keys'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'user_id' => $this->input->post('user_id',TRUE),
		'key' => $this->input->post('key',TRUE),
		'level' => $this->input->post('level',TRUE),
		'ignore_limits' => $this->input->post('ignore_limits',TRUE),
		'is_private_key' => $this->input->post('is_private_key',TRUE),
		'ip_addresses' => $this->input->post('ip_addresses',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
	    );

            $this->Keys_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keys'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Keys_model->get_by_id($id);

        if ($row) {
            $this->Keys_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('keys'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keys'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('user_id', 'user id', 'trim|required');
	$this->form_validation->set_rules('key', 'key', 'trim|required');
	$this->form_validation->set_rules('level', 'level', 'trim|required');
	$this->form_validation->set_rules('ignore_limits', 'ignore limits', 'trim|required');
	$this->form_validation->set_rules('is_private_key', 'is private key', 'trim|required');
	$this->form_validation->set_rules('ip_addresses', 'ip addresses', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Keys.php */
/* Location: ./application/controllers/Keys.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-02-10 05:18:43 */
/* http://harviacode.com */