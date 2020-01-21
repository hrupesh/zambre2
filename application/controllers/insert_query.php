<?php

    class insert_query extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }

    function index() {
        //Including validation library
        // $this->load->library('form_validation');

        // $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        // //Validating Name Field
        // $this->form_validation->set_rules('name', 'Name', 'required|min_length[4]|max_length[50]');

        // //Validating Email Field
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        // //Validating Mobile no. Field
        // $this->form_validation->set_rules('contactno', 'Contact No', 'required|regex_match[/^[0-9]{10}$/]');

        //Validating Address Field
        // $this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');

        // if ($this->form_validation->run() == FALSE) {

        //     $this->load->view('index');
        // } else {
            //Setting values for table columns
            
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $Contact_No = $this->input->post('contactno');
        $product = $this->input->post('product');
        $message = $this->input->post('message');
        if($name && $email && $Contact_No && $product && $message){

        //Email Code
        $to_email = 'info@zcpl.co.in'; 

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://mail.zcpl.co.in',
            'smtp_port' => 465,
            'smtp_user' => 'info@zcpl.co.in',
            'smtp_pass' => '*Pune12345#',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => True
        );
        
        $msg = "<h3>Hello,</h3><h2><strong> ".strval($name)." <strong></h2> <h3> We have recieved your query regarding ".strval($product).
        ". <br> We will get in contact with you ASAP. </h3> <h3> Thank You <h3> <h3><strong> Zambre Construction Pvt. Ltd. </strong></h3>";

         //Load email library 
        $this->load->library('email',$config); 
   
        $this->email->from('info@zcpl.co.in', 'Zhambre Contruction Pvt. Ltd. '); 
        $this->email->to($to_email);
        $this->email->subject('Your Query is Submitted'); 
        $this->email->message(strval($msg)); 
        $this->email->set_newline("\r\n");
   
        if($this->email->send()){
        $this->email->print_debugger(); 
        }
        //Send mail 
        // if($this->email->send()){
        //     echo "<script>alert('Insertion Successfull');</script>";
        // } 
        // else{
        //     echo "<script>alert('Insertion not Successfull');</script>"; 
        // }

        //Transfering data to Model
        $this->insert_model->form_insert($name,$email,$Contact_No,$product,$message);
        //$data['message'] = 'Your Query is Submitted, we will reply ASAP.';
        //Loading View
        //echo "<script>alert('hello');</script>";
        }
        redirect('/');
        //$this->load->view('index');

        }
    }   

?>