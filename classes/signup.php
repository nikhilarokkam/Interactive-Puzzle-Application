<?php
class Signup{
    private $error="";
    public function evaluate($data)
    {
        foreach ($data as $key => $value) {
            #code...
            if(empty($value)){
                $this->error=$this->error.$key." is empty!<br>";
            }
            if($key=="email")
            {
                if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)){
                    $this->error=$this->error."invalid email address!<br>";
                }
            }
            if($key=="username")
            {
                if(is_numeric($value) ){
                    $this->error=$this->error."username can't be a number<br>";
                }
            }
        }
        if($this->error=="")
        {
            //no error
            $this->create_user($data);
        }
        else{
            return $this->error;
        }
    }
    public function create_user($data)
    {
        $username=ucfirst($data['username']);
        $email=$data['email'];
        $contact=$data['contact'];
        $password=$data['password'];
        $userid=$data['userid'];
        $query="insert into users (username,email,contact,password,userid) values ('$username','$email','$contact','$password','$userid')";
        $DB=new DataBase();
        $DB->save($query);
    }
}
?>