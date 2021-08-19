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
                header("location:userDashboard.php");
            }else{
                header("location:adminDashboard.php");
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
                header("location:categories.php?message=the category was successfuly created");
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
                array_push($rows,$displayCate);
            }
            return $rows;
        }else{
            return false;
        }
    }

        // choose specific category_id
    public function chooseCate($category_id){
        $sql="SELECT * FROM categories WHERE category_id= '$category_id'";
        $result=$this->conn->query($sql);

        if($result==TRUE){
            return $result->fetch_assoc();
            
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
                header("location:categories.php?message=the category successfully updated");

            }else{
                echo "<div class='alert alert-danger text-center'>Error occurd.Try it again. </div>";

            }
        }

    }

    // delete categpry
    public function deleteCate($category_id){
        $sql="DELETE FROM categories WHERE category_id='$category_id'";

        if($this->conn->query($sql)){
            header("location:adminDashboard.php");
        }else{
            echo "<div class='alert alert-danger text-center'>Error occurd.Try it again. </div>";

        }
    }


    // add item into db
    public function addItem($item_name,$item_description,$item_stocks,$item_price,$publish_date,$category_id,$file){
        // check the data 
        $check_sql="SELECT * FROM items WHERE item_name='$item_name'";
        $result_check=$this->conn->query($check_sql);

        if($result_check->num_rows>0){
            echo "<div class='alert alert-danger text-center'>The item is already in the table.</div>";

        }else{
            //check the pic type /size...etc
            $error=0;
            $error_message="";

            $fileType=strtolower(pathinfo($file['item_image']['name'],PATHINFO_EXTENSION));
            $fileName=date('m-d-y h:i:s a',time()).".".$fileType;
            $target_directory="uploads/item_pictures/";
            $target_file=$target_directory.$fileName;
        
            //var_dump($file['name']);//null when i use ['name']

            //check if the file is an actual image
            $imageSize=getimagesize($file['item_image']['name']);
            //Warning: getimagesize() expects parameter 1 to be string, array given in

            if($imageSize==false){
                $error=1;
                $error_message="The File is not image";

            }elseif($error==0){

                //check file size (e.g No images will accepted avobe 500kb)
                if($file["item_image"]["size"]>50000000){
                    $error=1;
                    $error_message="Image is too big";

                }else{
                    //upload and move to the our uploads/
                    move_uploaded_file($file['item_image']['name'],$target_file);

                    //update db pic and item info
                    $sql="INSERT INTO `items`(`item_name`, `item_description`, `item_stocks`, `item_price`, `publish_date`,`category_id`,`item_image`) VALUES ('$item_name','$item_description','$item_stocks','$item_price','$publish_date','$category_id','$fileName')";
                    $result=$this->conn->query($sql);

                    //display message success oe error 
                    if($result==TRUE){
                        header("location:items.php?message=the item was successfully created");

                    }else{
                        echo "<div class='alert alert-danger text-center'>Error occurd.Try it again. </div>";
                    }
                }
            }else{
                // have to ask this part to fix the message
                header("location:items.php?success=0&message=$error_message");
            }
        }
    }

    // EVENT
    // add event into db
    public function addEvent($event_title,$event_detail,$event_date){

        // check the name of the event on db
        $check_sql="SELECT*FROM `events` WHERE event_title='$event_title'";
        $result_check=$this->conn->query($check_sql);

        if($result_check->num_rows>0){
            echo "<div class='alert alert-danger text-center'>The event is already in the table.</div>";

        }else{
            // insert into db
            $sql="INSERT INTO `events`(`event_title`,`event_detail`,`event_date`) VALUES('$event_title','$event_detail','$event_date')";
            $result=$this->conn->query($sql);

            if($result==TRUE){
            header('location:events.php?message=the event was successfully created');
            }else{
            echo "<div class='alert alert-danger text-center'>Error occurd.Try it again. </div>";
            }   
        }
    }


    // fetch the events info and display
    public function dispalyEventsTable(){
        $sql="SELECT * FROM `events`";
        $result=$this->conn->query($sql);
        $rows=array();

        if($result->num_rows>0){
            while($displayEvent=$result->fetch_assoc()){
                $rows[]=$displayEvent;
            }
            return $rows;
        }else{
            return false;
        }

    }


    // fetch the deliveries info 
    public function displayDeliveryTable(){
        $sql="SELECT * FROM `deliveries`";
        $result=$this->conn->query($sql);
        $rows=array();

        if($result->num_rows>0){
            while($displayDeli=$result->fetch_assoc()){
                $rows[]=$displayDeli;
            }
            return $rows;
        }else{
            return false;
        }
    }


}


?>