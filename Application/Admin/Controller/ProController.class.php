<?php

namespace Admin\Controller;


class ProController extends AdminController
{

    public
    function index()
    {

        /* 获取频道列表 */

        $list = M('Pro')->select();
        //var_dump($list);exit;
        $this->assign('list', $list);
        $this->meta_title = '报修管理';
        $this->display();
    }

    /**
     * 添加频道
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public
    function add()
    {
       // var_dump(uniqid());exit;
        if (IS_POST) {
            $Pro = D('Pro');
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

    /**
     * 删除频道
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public
    function del()
    {
        $id = array_unique((array)I('id', 0));

        if (empty($id)) {
            $this->error('请选择要操作的数据!');
        }
        $map = array('id' => array('in', $id));
        if (M('Pro')->where($map)->delete()) {
            //记录行为
            action_log('update_channel', 'channel', $id, UID);
            $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }

    //查看详情
    public function detail(){
        $id = array_unique((array)I('id', 0));

        if (empty($id)) {
            $this->error('请选择要操作的数据!');
        }
        $map = array('id' => array('in', $id));
        $list=M('Pro')->where($map)->select();
 //     var_dump($list);exit;
        $this->assign('list', $list);
        $this->display();

    }

    public function change(){
        $id=I('id',0);

        if(M('Pro')->where(['id'=>$id,'status'=>0])->setField('status',1))
        {
            $this->redirect('index');
        }else{
            M('Pro')->where(['id'=>$id,'status'=>1])->setField('status',2);
            $this->redirect('index');
        }

    }



}
