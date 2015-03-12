<?php
namespace Platform\Controller;
use Think\Controller;

class PlatformController extends Controller {

    public function index(){
        $this->display();
    }

    public function add(){
        if(IS_POST){
            $User = D('User');
            $data = $User->create();
            if($data){
                $id = $User->add();
                if($id){
                    $this->success('新增成功', Cookie('__forward__'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($Menu->getError());
            }
        }
        $this->display("edit");
    }

    public function edit(){
        $this->display();
    }
}