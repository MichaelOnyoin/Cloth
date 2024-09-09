<?php namespace App\Libraries ;
class Blogging{
    public function postItem($params){
        return view("components/post_item",$params);
    }
}