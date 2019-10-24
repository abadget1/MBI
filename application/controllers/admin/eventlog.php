<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventlog extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('eventlog_model');
  }
	public function index()
	{
    $this->load->view('headers/adminHeader');
    $this->load->view('footers/footer');
	}

  public function create(){
    $this->eventlog_model->createData();
    redirect("admin/eventlog");
  }

 public function edit($ID){
 $data['row'] = $this->eventlog_model-> getData($ID);
 $this->load->view('headers/adminHeader');
 $this->load->view('admin/event_log', $data);
 $this->load->view('footers/footer');
 }

  public function update($ID) {
    $this->eventlog_model->updateData($ID);
    redirect("admin/eventlog");
  }
  
}


