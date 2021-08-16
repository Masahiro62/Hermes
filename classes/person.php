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
        session_start();
        $sql="SELECT * FROM users INNER JOIN accounts ON users.account_id=accounts.account_id WHERE accounts.username='$username' AND accounts.password='$password'";
        $result=$this->conn->query($sql);

        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            $_SESSION['user_id']=$row['user_id'];
            $_SESSION['password']=$row['password'];
            $_SESSION['username']=$row['username'];
            if($row['status']=='U'){
                header('Location:userDashboard.php');
            }else{
                header('Location:adminDashboard.php');
            }
        }
    }

    // add category into db
    public function addCategory($category_name){

        $check_sql="SELECT * FROM categories WHERE category_name='$category_name'";
        $result_check=$this->conn->query($check_sql);

        if($result_check->num_rows>0){
            echo "<div class='alert alert-danger text-center'>The Category name is already in the table.</div>";
        }elseif(!empty($category_name)){
            $sql="INSERT INTO categories (`category_name`)VALUES('$category_name')";
            $result=$this->conn->query($sql);

            if($result==TRUE){
                header('location:adminDashboard.php');
            }else{
                echo "<div class='alert alert-danger text-center'>Error occurd.Try it again. </div>";
            }
        }
    }
        // fetch the categorty info and display
    public function displayCateTable(){
        $sql="SELECT * FROM categories";
        $result=$this->conn->query($sql);
        $rows=array();
        
        if($result->num_rows>0){
            while($displayCate=$result->fetch_assoc()){
                $rows[]=$displayCate;
            }
            return $rows;
        }else{
            return false;
        }
    }
    public function updateCate($u_category_name,$category_id){
        $check_sql="SELECT * FROM categories WHERE category_name='$u_category_name'";
        $result_check=$this->conn->query($check_sql);
        // check if there is the name already or not 
        if($result_check->num_rows>0){
            echo "<div class='alert alert-danger text-center'>The item is already in the table.</div>";

        }else{
            $sql="UPDATE categories SET `category_name`='$u_category_name' WHERE `category_id`='$category_id' ";
            $result_sql=$this->conn->query($sql);

            if($result_sql==TRUE){
                header('location:adminDashboard.php');

            }else{
                echo "<div class='alert alert-danger text-center'>Error occurd.Try it again. </div>";

            }
        }

    }

    // delete categpry
    public function deleteCate($category_id){
        $sql="DELETE FROM categories WHERE category_id='$category_id'";

        if($this->conn->query($sql)){
            header('location:adminDashboard.php');
        }else{
            echo "<div class='alert alert-danger text-center'>Error occurd.Try it again. </div>";

        }
    }


        // add item into db
    public function addItem($item_name,$item_description,$item_stocks,$item_price,$arrival_date,$category_id){
        $check_sql="SELECT * FROM items WHERE item_name='$item_name'";
        $result_check=$this->conn->query($check_sql);

        if($result_check->num_rows>0){
            echo "<div class='alert alert-danger text-center'>The item is already in the table.</div>";

        }else{
            $sql="INSERT INTO `items`(`item_name`, `item_description`, `item_stocks`, `item_price`, `arrival_date`,`category_id`) VALUES ('$item_name','$item_description','$item_stocks','$item_price','$arrival_date','$category_id')";
            $result=$this->conn->query($sql);

            if($result==TRUE){
                header('location:adminDashboard.php');

            }else{
                echo "<div class='alert alert-danger text-center'>Error occurd.Try it again. </div>";

            }

        }
    }


}


?>