<?php
class Login{
    private $error="";
    public function evaluate($data)
    {
        $email=$data['email']
        $userid=$data['userid'];
        $password=addslashes($data['password']);
        $query="select * from users where userid='$userid' limit 1";
        $DB=new DataBase();
        $result=$DB->read($query);

        if($result)
        {
            $row=$result[0];
            if($password==$row['password']){
                //create session data
                $_SESSION['escroom_userid']=$row['userid'];
            }else{
                $this->error .= "wrong password<br>";
            }
        }
            else{
                $this->error .= "No such userid was found<br>";
            }
        
        return $this->error;
    }
    public function check_login($userid)
    {
        
        $query="select * from users where userid='$userid' limit 1";
        $DB=new DataBase();
        $result=$DB->read($query);

        if($result)
        {
            $user_data=$result[0];
            return $user_data;
        }
        else{
            header("Location:index.php");
            die;
            }
        }

}
?>
