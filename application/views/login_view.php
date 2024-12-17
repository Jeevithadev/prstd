<!DOCTYPE html>
<html>
<head>
    <title> IGCAR </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; width: 50%; margin-left: 25%; margin-top: 3%;}

input[type=text], input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
   
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}


.container {
margin-left: 30%;
width: 40%;
margin-right: 30%;
    
align-items:center;    
padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

    <br>
     <h1 style="font-family: sans-serif; color:  #009926"><center> Project Students  Application Screening and Processing System </center> </h1>   
   <div class="container" style="background-color:"#FFCCCC">  
</div> 
     <?php $str = "admin";
      //  echo md5($str);?>
<form method="post" action="<?= base_url() ?>Main/login_action">
  <?php  
  
    
  
    ?>
  
  <div class="container">
     
      <label  style=" align-items:center;"><b>Username</b></label>
      
      <input type="text"  name="username" id="username" required placeholder="Enter Username"> 
          
          
     <?php /*
     foreach($users as $user){
	echo "<option value='".$user['username']."' >".$user['username']."</option>";
     }
         
   */  ?>
  
      
    <br>
    <label><b>Password</b></label>
    <input type="password"  placeholder="Enter Password" name="password" required >
    <br>
  
    <button type="submit" style="font-size:  large">Login</button>
    <label style=" color:  #f44336; font-style:  italic; "> <?php echo validation_errors(); ?></label>
  </div>

    <p style=" text-align:  center; font-size:12px"> <i>Best Viewed in Chrome & Firefox</i>
	

</form>
<br><br>
     <div class="container">
    <div class="table-responsive">
        <table class="table mx-auto">
            <tr><td> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Developed and Maintained by PHRMD </td></tr>
        </table>
    </div>
</div>       

</html>
