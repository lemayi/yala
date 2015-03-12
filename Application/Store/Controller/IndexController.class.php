<?php
namespace Store\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('store','utf-8');
    }
}