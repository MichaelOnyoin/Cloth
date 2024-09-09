<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SearchController extends BaseController
{
	public function __construct()
	{
		$this->db = db_connect();
	}

	public function index()
	{
		return view('search');
	}

	public function getNames()
	{
		$request = service('request');
		$postData = $request->getPost();

		$response = array();

		$data = array();

		$builder = $this->db->table("user");

		$names = [];

		if (isset($postData['query'])) {

			$query = $postData['query'];

			// Fetch record
			$builder->select('*');
			$builder->like('firstname', $query, 'both');
			$query = $builder->get();
			$data = $query->getResult();
		} else {

			// Fetch record
			$builder->select('*');
			$query = $builder->get();
			$data = $query->getResult();
		}

		foreach ($data as $users) {
			$names[] = array(
				"id" => $users->user_id,
				"text" => $users->firstname,
			);
		}

		$response['data'] = $names;

		return $this->response->setJSON($response);
	}

	public function Logina(){
		return view('logina');
	}
	public function ProcessLogina(){
		$request = service('request');
		$postData = $request->getPost();

		$response = array();

		$data = array();

		$builder = $this->db->table("user");

		$names = [];

		if (isset($postData['query'])) {

			$query = $postData['query'];

			// Fetch record
			$builder->select('*');
			$builder->like('firstname', $query, 'both');
			$query = $builder->get();
			$data = $query->getResult();
		} else {

			// Fetch record
			$builder->select('*');
			$query = $builder->get();
			$data = $query->getResult();
		}

		foreach ($data as $users) {
			$names[] = array(
				"id" => $users->user_id,
				"text" => $users->firstname,
			);
		}

		$response['data'] = $names;

		//return $this->response->setJSON($response);
            $db=db_connect();
		    $email=$this->request->getPost('Email');
			$password=$this->request->getPost('Password');
			
		
			$query   = $db->query("SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'");

			if($query->getNumRows() == 1){  
				echo "<h1><center> Login successful </center></h1>"; 
				echo "<br>";
				//session_start();
				$session=session();
				
		        $session->set('user_details',$email);
			
				return redirect()->to('/cloth/men');
				
			}  
			else{  
				echo "<h1> Login failed. Invalid username or category.</h1>"; 
				return redirect()->to('/cloth/login');
			} 
	}


	public function ApiLogin(){
		return view('apilogin');
	}
	public function ProcessApiLogin(){
		$request = service('request');
		$postData = $request->getPost();

		$response = array();

		$data = array();

		$builder = $this->db->table("apiusers");

		$names = [];

		if (isset($postData['query'])) {

			$query = $postData['query'];

			// Fetch record
			$builder->select('*');
			$builder->like('username', $query, 'both');
			$query = $builder->get();
			$data = $query->getResult();
		} else {

			// Fetch record
			$builder->select('*');
			$query = $builder->get();
			$data = $query->getResult();
		}

		foreach ($data as $users) {
			$usernames[] = array(
				"id" => $users->apiuser_id,
				"text" => $users->username,
			);
		}

		$response['data'] = $names;

		
            $db=db_connect();
		    $username=$this->request->getPost('username');
			$key=$this->request->getPost('key');
			
		
			$query   = $db->query("SELECT * FROM `apiusers` WHERE `username`='$username' AND `key`='$key'");

			if($query->getNumRows() == 1){  
				echo "<h1><center> Login successful </center></h1>"; 
				echo "<br>";
				
				$session=session();
				
		        $session->set('user_details',$username);
			
				return redirect()->to('/cloth/more');
				
			}  
			else{  
				echo "<h1> Login failed. Invalid username or category.</h1>"; 
				return redirect()->to('/cloth/apiLogin');
			} 

	}
}
