<?php
namespace Home\Controller;
use Admin\Model\ProModel;

class ProController extends HomeController{
    public
    function add()
    {
        $this->login();
        $Pro = new ProModel();
        // var_dump(uniqid());exit;
        if (IS_POST) {


            $data = $Pro->create();
            if ($data) {
                $Pro->sn=md5(uniqid());
                $id = $Pro->add();
                if ($id) {
                    $this->success('新增成功', U('index'));
                    //记录行为
                    action_log('update_pro', 'pro', $id, UID);
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($Pro->getError());
            }
        } else {
            $this->meta_title = '新增导航';
            $this->display('edit');
        }
    }
    public function myrepair(){
       $list=M('pro')->select();
       $this->assign('list',$list);

       $this->display('index');
    }
}