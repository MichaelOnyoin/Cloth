<?php namespace App\Models;

use CodeIgniter\Model;
class ClothModel extends Model{
    
    protected $table='user';
    //protected $table2='admin';
    protected $primaryKey='user_id';
    protected $returnType='array';
    protected $useSoftDeletes= true;
    protected $allowedFields=['email','password'];
    protected $useTimestamps= false;
    protected $createdField='created_at';
    protected $updatedField='updated_at';
    protected $deletedField='deleted_at';
    protected $validationRules=[];
    protected $validationMessages=[];
    protected $skipvalidation= false;
    public function userDetails(){
        return $userDetails;
    }
}