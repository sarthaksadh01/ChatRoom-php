<?php
session_start();

function connect_to_database(){
  $link = mysqli_connect("localhost","root","","chatroom");

  return $link;



}
if(isset($_POST['name_submit'])){
$_SESSION['name']=$_POST['name'];
//$_SESSION['time']=time();
echo "success";


}

if(isset($_POST['msg_submit'])){
  $msg_text = $_POST['msg_text'];
  $sender = $_SESSION['name'];
  $link = connect_to_database();
  $query = "INSERT INTO `msgs` (msg_text,sender)
  VALUES ('$msg_text','$sender')";
  if(mysqli_query($link,$query)){
    echo "done";
  }


}

if(isset($_POST['get_msg'])){


  $link = connect_to_database();
  $tmn =$_SESSION['time'];
  $query = "SELECT * FROM `msgs`";
  $result = mysqli_query($link,$query);
  if($result){
  while( $row =mysqli_fetch_assoc($result)){
    echo '  <div class="first">
        <span><strong class="text-primary">'.$row['sender'].'</Strong></span>
        <span class="float-right">'.$row['timem'].'</span>
      <div class="d-inline">
      <p class="">'.$row['msg_text'].'</p>

      </div>

      </div>';
  }

  }


}




 ?>
