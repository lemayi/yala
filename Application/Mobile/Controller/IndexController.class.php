<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('mobile','utf-8');
    }
}