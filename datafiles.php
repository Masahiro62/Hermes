<!-- write all if(isset) -->


<?php 

include 'classes/person.php';
$personObj= new person;

    //registeration
if(isset($_POST['register'])){
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

    //login 
}elseif(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $personObj->login($username,$password);

    //add category
}elseif(isset($_POST['add_category'])){
    $category_name=$_POST['category_name'];
    $personObj->addCategory($category_name);

    //add item
}elseif(isset($_POST['add_item'])){
    $item_name=$_POST['item_name'];
    $item_price=$_POST['item_price'];
    $item_stocks=$_POST['item_stocks'];
    $item_description=$_POST['item_description'];
    $arrival_date=$_POST['arrival_date'];
    $category_id=$_POST['category'];

    $personObj->addItem($item_name,$item_description,$item_stocks,$item_price,$arrival_date,$category_id);

}elseif(isset($_POST['update_category'])){
    $u_category_name=$_POST['u_category_name'];
    $category_id=$_POST['category_id'];

    $personObj->updateCate($u_category_name,$category_id);
}

?>