<?php
class Login
{
    public function denglu()
    {
        $arr=[];
        $arr[]=$_POST['username'];
        $arr[]=$_POST['passward'];
        $arr[]=$_POST['repsd'];
        $arr[]=$_POST['captcha'];
    }
}


?>