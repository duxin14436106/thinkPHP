<?php
namespace Home\Controller;
use Think\Controller;
class DataController extends Controller {
    //可以查询出数据
    public function index(){

    //实例化数据库
        $model = M('users');

        //查询所有数据
        $data = $model->select();

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";   
        $this->assign('data',$data);
        //包含页面
        $this->display();
    }

    //删除数据
    public function del(){
        // echo "<pre>";
        // print_r($_GET);
        // echo "</pre>";
        $model=M('users');

        echo $model->delete($_GET['id']);
    }

    //ajax删除  
    public function ajax_del(){
        $model=M('users');
    if($model->delete($_POST['id'])){
        $arr = array(
            "indo"=>"删除成功",
            "code"=>"200",
            );
      }else{
        $arr = array(
            "indo"=>"删除失败",
            "code"=>"400",
            );
      }
     $this->ajaxReturn($arr);//直接把数组转换成json
     // echo json_encode($arr);//吧数组转换成json
    }
}