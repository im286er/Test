<?php
function checkorderstatus($ordid){
	$Ord=M('Orderlist');
	$ordstatus=$Ord->where('ordid='.$ordid)->getField('ordstatus');
	if($ordstatus==1){
		return true;
	}else{
		return false;
	}
}

//����������
//���¶���״̬��д�붩��֧���󷵻ص�����
function orderhandle($parameter){
	$ordid=$parameter['out_trade_no'];
	$data['payment_trade_no']      =$parameter['trade_no'];
	$data['payment_trade_status']  =$parameter['trade_status'];
	$data['payment_notify_id']     =$parameter['notify_id'];
	$data['payment_notify_time']   =$parameter['notify_time'];
	$data['payment_buyer_email']   =$parameter['buyer_email'];
	$data['ordstatus']             =1;
	$Ord=M('Orderlist');
	$Ord->where('ordid='.$ordid)->save($data);
}



/*-----------------------------------
2013.8.13����
���������������ʵ����Ҫ����ҿ��԰���ɾ����
���忴��������������䲿�ֵ�˵��
------------------------------------*/

//��ȡһ�������Ψһ�Ķ����ţ�
function getordcode(){
	$Ord=M('Orderlist');
	$numbers = range (10,99);
	shuffle ($numbers);
	$code=array_slice($numbers,0,4);
	$ordcode=$code[0].$code[1].$code[2].$code[3];
	$oldcode=$Ord->where("ordcode='".$ordcode."'")->getField('ordcode');
	if($oldcode){
		getordcode();
	}else{
		return $ordcode;
	}
}