<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\AdminModel;
use App\Models\CategoriesModel;
use App\Models\SubcategoriesModel;
use App\Models\OrderModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\ApiuserModel;
use App\Models\FashionModel;
use App\Models\CartModel;
use App\Models\WalletModel;
use App\Models\UserloginModel;
use App\Models\ApitokenModel;

class Home extends BaseController
{
    public function index(): string
    {
        //return view('welcome_message');
        return view('land');

    }
    public function default(): string
    {
        return view('welcome_message');
        
    }
    public function Login(){
		return view('aplogin');
	}

    public function Chart(){
		return view('chart');
		
	}

	public function More(){
		return view('more');
	}

	public function AnalyticsChart(){
		return view('chart1');
	}

	public function Ajax(){
		return view('ajaax');
	}
	public function ProcessLogin(){
		$db = \Config\Database::connect();
        
			$email=$this->request->getPost('Email');
			$password=$this->request->getPost('Password');
			
		
			$query   = $db->query("SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'");

			if($query->getNumRows() == 1){  
				echo "<h1><center> Login successful </center></h1>"; 
				echo "<br>";
				
				$session=session();
				
		        $session->set('user_details',$email);
			
				return redirect()->to('/cloth/men');
				
			}  
			else{  
				echo "<h1> Login failed. Invalid username or category.</h1>"; 
				return redirect()->to('/cloth/login');
			} 

	}
	
	public function AdminLogin(){
		return view('admin_login');
		
	}
	public function ProcessAdminLogin(){
		$db = \Config\Database::connect();

		$email=$this->request->getPost('Email');
		$password=$this->request->getPost('Password');
		
		$query   = $db->query("SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'");
		
		 $query1   = $db->query("SELECT `admin_id` FROM `admin` WHERE `email` ='$email' AND `password` = '$password' ");
		 $admin_id = $query1->getRowArray();
			if($query->getNumRows() == 1){  
				echo "<h1><center> Login successful </center></h1>"; 
				echo "<br>";
				
				$session=session();
		        $session->set('admin_details',$email,$admin_id);
				return redirect()->to('/cloth/main');
			
			}  
			else{  
				echo "<h1> Login failed. Invalid username or category.</h1>";
				return redirect()->to('cloth/adminLogin'); 
			} 

	}
	
	public function Register(){
		return view('register');

	}
	public function ProcessRegister(){
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new UserModel();
     		$model->save($_POST);
		
		}
		return redirect()->to('cloth/');
	}
	public function AdminRegister(){
		return view('admin_register');
	}

	public function ProcessAdminRegister(){

		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new AdminModel();
			$model->save($_POST);
		
		}
		return redirect()->to('cloth/');
		
	}
	public function UserEdit(){
		$db=db_connect();
		$model=new UserModel();
		$email=$this->request->getPost('email');
	    $password=$this->request->getPost('password');
		$user_id=$this->request->getPost('user_id');
	    $firstname=$this->request->getPost('firstname');
		$lastname=$this->request->getPost('lastname');
	    $category=$this->request->getPost('category');
		$subcategory=$this->request->getPost('subcategory');
		$gender=$this->request->getPost('gender');
		
		$sql="UPDATE `user` SET `email`='$email',`lastname`='$firstname',`lastname`='$lastname',`password`='$password',`category`='$category',`gender`='$gender',`category`='$category',`subcategory`='$subcategory' WHERE `user_id`='$user_id'";
		$query  = $db->query($sql);
		
		if($db->query($sql)==TRUE){
			echo "<br>";
			echo "Edited successfully";
			
		}else{
			echo "Error in update".$db->error();
		}
		$db->close();
		return redirect()->to('cloth/clientEdit');
	}

	public function UserDeleter(){
		$db=db_connect();
		$model=new UserModel();
		$user_id=$this->request->getPost('user_id');
		$sql="DELETE FROM `user` WHERE `user_id`='$user_id'";
		$query  = $db->query($sql);
		
		if($db->query($sql)==TRUE){
			echo "<br>";
			echo "Deleted successfully";
			
		}else{
			echo "Error in deletion".$db->error();
		}
		$db->close();
		return redirect()->to('cloth/clientEdit');
	}

	public function AdminEditer(){
		$db=db_connect();
		$model=new AdminModel();
		$email=$this->request->getPost('email');
	    $password=$this->request->getPost('password');
		$admin_id=$this->request->getPost('admin_id');
	    $firstname=$this->request->getPost('firstname');
		$lastname=$this->request->getPost('lastname');
	    
		$role=$this->request->getPost('role');
		$gender=$this->request->getPost('gender');
		
		$sql="UPDATE `admin` SET `email`='$email',`firstname`='$firstname',`lastname`='$lastname',`password`='$password',`gender`='$gender',`role`='$role' WHERE `admin_id`='$admin_id'";
		$query  = $db->query($sql);
		
		if($db->query($sql)==TRUE){
			echo "<br>";
			echo "Edited successfully";
			
		}else{
			echo "Error in update".$db->error();
		}
		$db->close();
		return redirect()->to('cloth/adminEdit');
	}

	public function AdminDeleter(){
		$db=db_connect();
		$model=new AdminModel();
		$admin_id=$this->request->getPost('admin_id');
		$sql="DELETE FROM `admin` WHERE `admin_id`='$admin_id'";
		$query  = $db->query($sql);
		
		if($db->query($sql)==TRUE){
			echo "<br>";
			echo "Deleted successfully";
			
		}else{
			echo "Error in deletion".$db->error();
		}
		$db->close();
		return redirect()->to('cloth/adminEdit');
	}

	public function AdminEdit(){
		echo view('editheader');
		echo view('apadminedit');
	}

	public function ClientEdit(){
		echo view('editheader');
		echo view('apclientedit');
	}

	public function Main(){
		return view('editheader');
	}

	public function FashionInsertion(){
		echo view('editheader');
		echo view('FashInsertion');
	}

	public function FashionInserter(){
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new FashionModel();
           
			$model->save($_POST);
		
		}
		return redirect()->to('cloth/fashionInsertion');

	}


	public function FashionEdit(){
		echo view('editheader');
		echo view('FashEdit');
	}

	public function FashionEditer(){
		$db=db_connect();
		$model=new FashionModel();
		$fashion_item=$this->request->getPost('fashion_item');
	    $category=$this->request->getPost('category');
		$subcategory=$this->request->getPost('subcategory');
	    $unit_price=$this->request->getPost('unit_price');
		$fashion_image=$this->request->getPost('fashion_image');
	    $fashion_id=$this->request->getPost('fashion_id');
		
		$sql="UPDATE `fashion` SET `fashion_item`='$fashion_item',`unit_price`='$unit_price',`fashion_image`='$fashion_image',`category`='$category' WHERE `fashion_id`='$fashion_id'";
		$query  = $db->query($sql);
		
		if($db->query($sql)==TRUE){
			echo "<br>";
			echo "Edited successfully";
			
		}else{
			echo "Error in update".$db->error();
		}
		$db->close();
		return redirect()->to('cloth/fashionEdit');

	}

	public function EditHeader(){
		return view('editheader');
	}
	public function Men(){
		return view('men');
	}

	public function Women(){
		return view('women');
	}

	public function Pets(){
		return view('pets');
	}

	public function Children(){
		return view('children');
	}

	public function Product(){
		echo view('editheader');

		echo view('product');
	}

	public function ProductInsert(){
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new ProductModel();
          
			$model->save($_POST);
			
		}
		return view('product');

	}
	
	public function Cart1(){
		return view('cart1');
	}

	public function ProcessCart1(){
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new CartModel();
           
			$model->save($_POST);
			
		}
		
		return redirect()->to('cloth/cart1');
	}

	public function Profile(){
		return view('profile');
	}
	public function Profile1(){
		return view('profile1');
	}



	public function ClientProfile(){
		echo view('userheader');
		echo view('client_profile');
	}

	public function AdminProfile(){
		echo view('editheader');
		echo view('admin_profile');
	}

	public function Logout(){
		$session=session();
        $session->get('user_details');
		
		$db = db_connect();
		$model= new UserloginModel();
		$email =$session->get('user_details');
		$query1   = $db->query("SELECT `user_id` FROM user WHERE `email` = '$email' ");
		$results = $query1->getResult();
		foreach($results as $row){
		
		}
		$user_id= $row->user_id;
		$sql="UPDATE `userlogins` SET `logout_time`= CURRENT_TIMESTAMP() WHERE `user_id`='$user_id'";
		$query=$db->query($sql);
		if($db->query($sql)==TRUE){
			echo "<br>";
			echo "Edited successfully";
			
		}else{
			echo "Error in update".$db->error();
		}
		$db->close();
        echo "<script>";
		echo "alert('You have been logged out')"; 
		echo "</script>";


		$session->destroy();
	    return redirect()->to('/cloth');
	
	}

	public function Logout1(){
		$session=session();
        $session->get('admin_details');
		echo "<script>";
		echo "alert('You have been logged out')";
		echo "</script>";
		$session->destroy();
	    return redirect()->to('/cloth');
	}

	public function Category(){
		echo view('more');
		echo view('category');

	}
	public function CategoryInsert(){
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new CategoriesModel();
            
			$model->save($_POST);
			
		}
		return redirect()->to('cloth/category');

	}

	public function CategoryEdit(){
		echo view('more');
		echo view('categoryedit');
	}

	public function CategoryEditer(){
		$db=db_connect();
		$model=new CategoriesModel();
		
	    $category_id=$this->request->getPost('category_id');
		$category_name=$this->request->getPost('category_name');
	   
		$sql="UPDATE `categories` SET `category_name`='$category_name' WHERE `category_id`='$category_id'";
		$query  = $db->query($sql);
		
		if($db->query($sql)==TRUE){
			echo "<br>";
			echo "Edited successfully";
			
		}else{
			echo "Error in update".$db->error();
		}
		$db->close();
		return redirect()->to('cloth/categoryEdit');
	}
	public function Subcategory(){
		echo view('more');
		echo view('subcategory');

	}
	public function SubcategoryInsert(){
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new SubcategoriesModel();
            print_r($_POST);
			$model->save($_POST);
			
		}
		return redirect()->to('cloth/subcategory');
	
	}

	public function Payment(){
		return view('payment');
	}

	public function Order(){
		return view('orderform');
	}
	public function Orderer(){
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new OrderModel();
            print_r($_POST);
			$model->save($_POST);
			
		}
		return view('orderform');
	}

	public function Apiform(){
		echo view('more');
		echo view('apiform');
	}

    use ResponseTrait;
	public function ViewApi(){
		$db=db_connect();
		$sql="SELECT * FROM `apiusers`";
		$query=$db->query($sql);
		$result=$query->getResultArray();
		header('Content-Type:application/json');
		return json_encode($result);

        // Respond with 201 status code
        return $this->respondCreated();
		return $this->setResponseFormat('json')->respond(['error' => false]);
		printf( $this->setResponseFormat('json')->respond(['error' => false]));
	}

	public function ViewUserApi(){
		$db=db_connect();
		$sql="SELECT * FROM user";
		$query=$db->query($sql);
		$result=$query->getResultArray();
		header('Content-Type:application/json');
		return json_encode($result);
	}

    public function createAPIUser()
    {
		
		if($this->request->getMethod()=='post'){
			$db=db_connect();
			$model = new ApiuserModel();
			
            $user  = $model->save($_POST);

		}
		
		return redirect()->to('cloth/apiform');
    }

	public function ProcessPayment(){
		$db=db_connect();
		
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new OrderModel();
            print_r($_POST);
			$model->save($_POST);
			
		}
		return redirect()->to('cloth/payment');
	}

	public function Print(){
		return view("print");
	}

	public function Wallet(){
		return view('wallet');
	}

	public function ProcessWallet(){
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new WalletModel();
            print_r($_POST);
			$model->save($_POST);
			
		}
		return redirect()->to('cloth/wallet');
	}

	public function UserLogtime(){
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new UserloginModel();
        	$model->save($_POST);
			
		}
		return redirect()->to('cloth/men');
	}

	public function Dropdown(){
		return view('dropdown');
	}
	public function Userheader(){
		return view('userheader');
	}
	public function Dropmenu(){
		return view('dropmenu');
	}

	public function Catpage(){
		return view('catpage');
	}
	public function Cart2(){
		return view('cart2');
	}
	public function Cart3(){
		return view('cart3');
	}
	public function Cart4(){
		return view('cart4');
	}
	public function Subcatpage(){
		return view('subcatpage');
	}
	public function Cart5(){
		return view('cart5');
	}
	public function Cart6(){
		return view('cart6');
	}
	public function Cart7(){
		return view('cart7');
	}
	public function Cart8(){
		return view('cart8');
	}
	public function ApiRequest(){
		return view('API/request');
	}
	public function Apipage(){
		return view('apipage');
	}
	public function ProductApi(){
		$db=db_connect();
		$sql="SELECT * FROM fashion";
		$query=$db->query($sql);
		$result=$query->getResultArray();
		header('Content-Type:application/json');
		return json_encode($result);
	}
	public function TransactionApi(){
		$db=db_connect();
		$sql="SELECT * FROM `order`";
		$query=$db->query($sql);
		$result=$query->getResultArray();
		header('Content-Type:application/json');
		return json_encode($result);
	}
	public function PurchaseApi(){
	   $db=db_connect();
       $builder=$db->table('order');
	   $builder->join('cart','order.customer_id=cart.user_id');
	   $results=$builder->get()->getResultArray();
	   header('Content-Type:application/json');
	   return json_encode($results);
	}
	public function EmailApi(){
		$db=db_connect();
		$sql="SELECT `user_id`, `email` FROM user ";
		$query=$db->query($sql);
		$result=$query->getResultArray();
		header('Content-Type:application/json');
		return json_encode($result);
	 }
	 public function GenderApi(){
		$db=db_connect();
		$sql="SELECT * FROM user GROUP BY `gender`";
		$query=$db->query($sql);
		$result=$query->getResultArray();
		header('Content-Type:application/json');
		return json_encode($result);
	 }


	public function CreateToken(){
		$token = bin2hex(random_bytes(64));
		printf($token);
	}
	public function ApiToken(){
		return view('token');

	}
	public function ProcessTokens(){
		if($this->request->getMethod()=='post'){
			$db = db_connect();
			$model= new ApitokenModel();
        	$model->save($_POST);
			
		}
		return redirect()->to('cloth/apiToken');
	}

	public function ApiAccess(){
		return view('apiaccess');
	}


}
