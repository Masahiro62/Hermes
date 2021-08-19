<!-- write all if(isset) -->


<?php 

include 'classes/person.php';
$personObj= new person;

if(isset($_POST['register'])){
    //registeration
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $contact_number=$_POST['contact_number'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $con_password=$_POST['con-password'];
    $staffPassword=$_POST['staffPassword'];

    if($password == $con_password){
        if($staffPassword === "123456"){
            $validateRegister=$personObj->register($username,$password,$fullname,$address,$contact_number,$email, 'A');
        }elseif(empty($staffPassword)){
            $validateRegister=$personObj->register($username,$password,$fullname,$address,$contact_number,$email, 'U');
        }
    }else{
        echo"<div class='alert alert-danger' role='alert'><strong>PASSWORD and CONFIRM PASSWORD are not the same.<br>Try it again</strong></div>";
    }

}elseif(isset($_POST['login'])){
    //login
    $username=$_POST['username'];
    $password=$_POST['password'];

    $personObj->login($username,$password);

}elseif(isset($_POST['add_category'])){
    //add category
    $category_name=$_POST['category_name'];
    $personObj->addCategory($category_name);

}elseif(isset($_POST['update_category'])){
    //update category
    $u_category_name=$_POST['u_category_name'];
    $category_id=$_GET['category_id'];

    $personObj->updateCate($u_category_name,$category_id);

}elseif(isset($_GET['operation_category'])){
    //delete category
    $category_id=$_GET['category_id'];
    $personObj->deleteCate($category_id);


}elseif(isset($_POST['add_event'])){
    //add event into db
    $event_title=$_POST['event_title'];
    $event_detail=$_POST['event_detail'];
    $event_date=$_POST['event_date'];
    
    $personObj->addEvent($event_title,$event_detail,$event_date);

}elseif(isset($_GET['operation_event'])){
    // delete event 
    $event_id=$_GET['event_id'];
    $personObj->deleteEve($event_id);


}elseif(isset($_POST['add_item'])){
    //add item
    $item_name=$_POST['item_name'];
    $item_price=$_POST['item_price'];
    $item_stocks=$_POST['item_stocks'];
    $item_description=$_POST['item_description'];
    $publish_date=$_POST['publish_date'];
    $category_id=$_POST['category'];
    $item_image=$_FILES;

    $personObj->addItem($item_name,$item_description,$item_stocks,$item_price,$publish_date,$category_id,$item_image);

}
?>