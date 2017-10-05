<?php
/**
 * Created by PhpStorm.
 * User: me
 * Date: 10/5/2017
 * Time: 2:25 PM
 */

namespace App\Http\Controllers;


use Kris\LaravelFormBuilder\FormBuilder;

class UserController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
    }

    public function create(){

        return view("users/add");
    }
}