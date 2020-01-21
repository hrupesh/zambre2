<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		if(isset($_SESSION['mp_admins'])){
            $data['details'] = $this->db->query('select * from branches ')->result();	
            $this->load->view('admin/index',$data);
        }
        else{
            redirect(base_url().'admin_login','location', 301);
        }
    }
    
	public function login()
	{
		if(isset($_POST['submit'])){
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            $details = $this->db->query("select * from admin where username='".$user."' ")->result();
            // $details = $this->query_model->select_where('admin',array('username'=>$user))->result();
            if(empty($details)){
                    echo "<script>alert('Please enter valid username');</script>";
                }else{
                    $chk = $details[0]->password;
                    $_SESSION['mp_admins']['username']	= $username;
                    if($pass != $chk){
                       echo "<script>alert('Please enter valid password');</script>";
                    }else{
                    $_SESSION['mp_admins']['username']	= $username;
    
                    $_SESSION['mp_admins']['password']	= $password;

                    redirect('admin');
                    }
                }
            }
            $this->load->view('admin/login');    
    }
    
	public function logout()
	{
		if(isset($_SESSION['mp_admins'])){

			unset($_SESSION['mp_admins']);

			redirect(base_url().'admin_login' , 'location', 301);

		}
    }
    
    public function add_branch(){
        if(isset($_POST['submit'])){
     		
            try{
                
                $name = $this->input->post('name');
                $office_type = $this->input->post('office_type');
                $location = $this->input->post('location');

                $this->db->query("insert into branches(`name`, `office_type`, `location`) values('".$name."','".$office_type."','".$location."' ) ");
                echo "<script>alert('Branch Created!');</script>";
            }
            catch(Exception $e){
                echo "<script>alert('Error :'"+$e->getMessage()+");</script>";
            }
        //$return_array['filename']  = $image["filename"]; 
        // }
    }
    $this->load->view('admin/add_branch');
    }

    public function edit_branch($id){
    $branch['branch'] = $this->db->select('*')->from('branches')->where('id', $id)->limit(1)->get()->row();
    if(isset($_POST['submit'])){
        
        try{
            
            $name = $this->input->post('name');
            $office_type = $this->input->post('office_type');
            $location = $this->input->post('location');

            $this->db->query("UPDATE `branches` SET `name` = '".$name."', `office_type` = '".$office_type."', `location` = '".$location."' WHERE `branches`.`id` =".$id." ");
            echo "<script>alert('Branch Edited!');</script>";
            redirect('admin');
        }
        catch(Exception $e){
            echo "<script>alert('Error :'"+$e->getMessage()+");</script>";
        }
        //$return_array['filename']  = $image["filename"]; 
        // }
    }
    $this->load->view('admin/edit_branch',$branch);
    }

    public function delete_branch($id){
        if($this->db->query("delete from branches WHERE id=".$id." ")){
            echo "<script>alert('Branch Deleted!');</script>";
        }
        redirect('admin');
    }
}
