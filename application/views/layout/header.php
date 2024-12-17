<?php if (isset($_SESSION['currently_logged_in'])<>1) {
    redirect(base_url('Main/'));
} ?>
<!DOCTYPE html>
<html>
<head>
 
    <title>Project Student</title>
   
    <link href="<?php echo base_url('asset/css/menu.css'); ?>" rel="stylesheet">
   <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
 <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('css/sweetalert.css'); ?>" rel="stylesheet">
   
 
   <script src="<?php echo base_url('css/jquery.min.js'); ?>"></script>
  <script src ="<?php echo base_url('css/bootstrap.min.js'); ?>"> </script>

  <script src = "<?php echo base_url('css/sweetalert.min.js'); ?>"></script>
  <script src="<?php echo base_url('css/js/jquery.min.js'); ?>"></script>
 


  
  <style>
    .btn-outline-info{color:#17a2b8;}
    .btn-outline-info:hover{color:#fff;background-color:#0296cf;}
    
    .navbar-nav a {
        color:white;
    margin-left: 10px;
    text-decoration: none;
    position: relative; /* For positioning the underline */
    transition: color 0.3s ease; /* Transition for color change */
}

.navbar-nav a::after {
    content: '';
    display: block;
    height: 2px; /* Height of the underline */
    background: transparent; /* Initial color of the underline */
    position: absolute;
    left: 0;
    right: 0;
    bottom: -5px; /* Adjust as needed for spacing */
    transition: background-color 0.3s ease; /* Transition for underline color */
}

.navbar-nav a:hover {
    color: #04b8dd; /* Change color on hover */
}

.navbar-nav a:hover::after {
    background: #fcba03; /* Change underline color on hover */
}
   
    
</style>
</head>

<body>
    <?php 
        
       $name = $this->session->all_userdata();
        $id1 = $name['role'];
    
       
        ?>
        
    <table width = 98%  align="center"  style=" background: rgb(152,45,204);
background: linear-gradient(90deg, rgba(152,45,204,1) 0%, rgba(0,185,255,1) 100%); ">
     <tr><td>&nbsp; </td></tr>
     
     <tr style="font-family: sans-serif; color: #ffffff; font-weight:  bold;  text-align: center; font-size:30px;">
      <td colspan="3"> Project Students  Application Screening and Processing System </td> </tr> 
     <tr  style=" font-family: monospace; color:#ddffdd;  font-style: italic; font-weight:  bold;  font-size: larger"><td><br>Welcome <?php echo $name['username'].'!';?></td>
             
         <td width = 80%>&nbsp;</td>
            <td align="right"><a class="btn btn-danger align-left" href="<?=base_url().'Project/logout';?>">Logout</a></td> 
     </tr>
          
    </table> <table width = 98%  align="center" >
     <tr><td >      
    
             <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;" >
    
         <div class="navbar-nav" style=" font-family: sans-serif;">
            
         <a class=" float-right" style=" font-size: 16px; font-weight:  bold"
             href="<?php echo base_url('project/');?>">Home 
              </a> 
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a class=" float-right" style=" font-size: 16px; font-weight:  bold"
                 href="<?php echo base_url('project/create');?>">  New Request 
              </a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a class=" float-right"  style=" font-size: 16px; font-weight: 
         bold" href="<?php echo base_url('project/showstud') ?>"> 
            Alter   details
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class=" float-right"  style=" font-size: 16px; font-weight: 
         bold" href="<?php echo base_url('project/screenstud') ?>"> 
            Screening   details
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class=" float-right"  style=" font-size: 16px; font-weight: 
         bold" href="<?php echo base_url('project/showstatus') ?>"> 
            Status Monitor
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a class=" float-right"  style=" font-size: 16px; font-weight:  bold" href="<?php echo base_url('project/search');?>"> 
            Search
      </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <?php 
      if($id1=='ADMIN')
      {?>
      <a class=" float-right" style=" font-size: 16px; font-weight:  bold" href="<?php echo base_url('project/report');?>"> 
            Report
      </a> 
     <?php }?>
      <a class=" float-right"  style=" font-size: 16px; font-weight:  bold" href="<?php echo base_url('User1/home');?>"> 
            Update Status
      </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </div>
  
     </nav>
         </td></tr>
     </table>
    <div class="container-fluid">
    