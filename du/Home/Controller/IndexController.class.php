<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    		echo "dsadfadad<br>";
    		echo "dsadfadad<br>";
    		echo "dsadfadad<br>";
    		echo "dsadfadad<br>";
    		
    }

    //可以查询出数据
    public function data1(){

 
    	//连接数据库
    		$model = M('users');//表
    		//查询数据
    		$data = $model->select();
    		//分配数据
    		$this->assign('data',$data);
    		//展示数据
    		$this->display();
    		  //var_dump($data);
    }

    // 验证码
    public function yzm(){
    	$Verify = new \Think\Verify();
    	$Verify->entry();
    }

    // 读取配置
    public function read(){
    	echo C('DUXINER');
    }
}