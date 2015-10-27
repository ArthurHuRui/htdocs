<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
	public function insert(){
		//实例化对象Form
		$Form = D ('Form');
		//使用create方法创建数据
		if($Form->create()){
			$result = $Form->add();
			if($result){
				$this->success('数据添加成功');
			}else{
				$this->error('数据添加失败');
			}
		}else{
			$this->error($Form->getError());
		}
	}
}
