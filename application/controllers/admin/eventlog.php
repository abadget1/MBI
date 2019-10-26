<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventlog extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('eventlog_model');
    return;
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
  
  public function write_log($level = 'error', $msg, $php_error = FALSE)
    {
        if ($this->_enabled === FALSE)
        {
            return FALSE;
        }

        $level = strtoupper($level);

        if ( ! isset($this->_levels[$level]))
        {
            return FALSE;
        }
        if (($this->_levels[$level] > $this->_threshold) OR (is_array($this->_threshold) && !in_array($this->_levels[$level], $this->_threshold)))
        {
            return FALSE;
        }



        $filepath = $this->_log_path.'log-'.date('Y-m-d').'.php';
        $message  = '';

        if ( ! file_exists($filepath))
        {
            $message .= "<"."?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?".">\n\n";
        }

        if ( ! $fp = @fopen($filepath, FOPEN_WRITE_CREATE))
        {
            return FALSE;
        }

        $message .= $level.' '.(($level == 'INFO') ? ' -' : '-').' '.date($this->_date_fmt). ' --> '.$msg."\n";

        flock($fp, LOCK_EX);
        fwrite($fp, $message);
        flock($fp, LOCK_UN);
        fclose($fp);

        @chmod($filepath, FILE_WRITE_MODE);
        return TRUE;
    }
}


