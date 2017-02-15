<?php
/**
 * Created by PhpStorm.
 * User: cal
 * Date: 2/14/17
 * Time: 7:02 PM
 */

namespace App\Repositories;

use App\Post;

class Posts
{
    public function all(){
        return Post::all();
    }

    public function  find(){

    }

}