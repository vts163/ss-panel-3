<?php
require_once '../lib/config.php';
$email = $_POST['email'];
$email = strtolower($email);
$passwd = $_POST['passwd'];
$name = $_POST['name'];
$repasswd = $_POST['repasswd'];
$verCode = $_POST['verCode'];


$c = new \Ss\User\UserCheck();

function VCodeIndb($vcode)
{
    global $db;
    $ret=True;
    if(!$db->has('vcode',["vcode"=>$vcode])){
        $ret=False;
    }else{
        $db->delete('vcode',["vcode"=>$vcode]);
    }
    return $ret;
}
$a['msg']='';
if(!$c->IsEmailLegal($email)){
    $a['msg'] = "邮箱无效";
}elseif($c->IsEmailUsed($email)){
    $a['msg'] = "邮箱已被使用";
}elseif($repasswd != $passwd){
    $a['msg'] = "两次密码输入不符";
}elseif(strlen($passwd)<8){
    $a['msg'] = "密码太短";
}elseif(strlen($name)<7){
    $a['msg'] = "用户名太短";
}elseif($c->IsUsernameUsed($name)){
    $a['msg'] = "用户名已经被使用";
}elseif(!VCodeIndb($verCode))
{
    $a['msg']='验证码不正确';
}else{
    // get value
    $ref_by = 0;
    $passwd = \Ss\User\Comm::SsPW($passwd);
    $plan = "A";
    $transfer = $a_transfer;
    $invite_num = rand($user_invite_min,$user_invite_max);
    $reg = new \Ss\User\Reg();
    $reg->Reg($name,$email,$passwd,$plan,$transfer,$invite_num,$ref_by);
    $a['ok'] = '1';
    $a['msg'] = "注册成功";
}
echo json_encode($a);