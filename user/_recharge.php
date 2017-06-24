<?php
require_once '../lib/config.php';
require_once '_check.php';
$payCode=$_POST['payCode'];
$a['msg']='666';
if(!$db->has('recharge',['code'=>$payCode])){
	$a['msg']="充值码无效";
}else{
	$data=$db->select('recharge',[
		'id','value'
		],[
		'code'=>$payCode
		],[
		'limit'=>1
		])[0];
	$db->delete('recharge',[
			'id'=>$data['id']
		]);

	$oo->add_transfer($data['value']*1024*$tomb);
	$a['msg']="充值成功，获得".$data['value']."GB流量";
}
echo json_encode($a);