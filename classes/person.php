<?php

include 'config.php';

class  person extends config{

    // registeration part
    public function register($username,$password,$fullname,$address,$contact_number,$email, $status){
        $sql_accounts ="INSERT INTO `accounts`( `username`, `password`) VALUES ('$username','$password')";
        $result_accouts=$this->conn->query($sql_accounts);

        if($result_accouts==TRUE){
            $account_id = $this->conn->insert_id;

            $sql_users="INSERT INTO `users`(`fullname`, `address`, `contact_number`, `email`, `status`, `account_id` ) VALUES ('$fullname','$address','$contact_number','$email', '$status', '$account_id')";
            $result_users=$this->conn->query($sql_users);

            if($result_users==TRUE){
               header("Location: login.php");
            }else{
                die('ERROR:'.$this->conn->error);
            }
        }else{
            die('ERROR:'.$this->conn->error);
        }      
    }

    // login part
    public function login($username,$password){
        $sql="SELECT * FROM users INNER JOIN accounts ON users.account_id=accounts.account_id WHERE accounts.username='$username' AND accounts.password='$password'";
        $result=$this->conn->query($sql);

        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            $_SESSION['user_id']==$row['user_id'];
            $_SESSION['password']==$row['password'];
            $_SESSION['username']==$row['username'];

            if($row['status']=='U'){
                header('Location:userDashboard.php');
            }else{
                header('Location:adminDashboard.php');
            }
        }
    }

    // add category to the category table
    public function addCategory($category_name){
        $sql="INSERT INTO categories (`category_name`)VALUES('$category_name')";
        $result=$this->conn->query($sql);

        if($result==TRUE){
            return TRUE;
            
        }else{
            die('ERROR:'.$this->conn->error);
        }
    }


}


?>