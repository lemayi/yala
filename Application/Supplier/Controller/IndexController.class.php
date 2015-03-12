<?php
namespace Supplier\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('supplier','utf-8');
    }
}