<?php
/**
 * @Author: anchen
 * @Date:   2019-07-30 11:41:27
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-07-30 14:52:10
 */
namespace Zeng\Unitfor\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index(){
        echo 'this  is testcontroller';
    }
}