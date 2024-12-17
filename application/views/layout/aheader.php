<?php if (isset($_SESSION['currently_logged_in'])<>1) {
    redirect(base_url('Main/'));
} ?>
<!DOCTYPE html>
<html>
<head>
 
    <title>High Value</title>
   
    <link href="<?php echo base_url('asset/css/menu.css'); ?>" rel="stylesheet">
   <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
 <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('css/sweetalert.css'); ?>" rel="stylesheet">
   
 
   <script src="<?php echo base_url('css/jquery.min.js'); ?>"></script>
  <script src ="<?php echo base_url('css/bootstrap.min.js'); ?>"> </script>

  <script src = "<?php echo base_url('css/sweetalert.min.js'); ?>"></script>
  <script src="<?php echo base_url('css/js/jquery.min.js'); ?>"></script>
   <script src="<?php echo base_url('css/html5shiv.js'); ?>"></script>
   



  
  <style>
    
   
    
</style>
</head>

<body>
    <?php 
        
       $name = $this->session->all_userdata();
        $id1 = $name['role'];
    
       
        ?>
        
     
    
        
           
    <table width = 98%  align="center"  style=" background-color: #3399CC ">
     <tr><td>&nbsp; </td></tr>
     
     <tr style="font-family: sans-serif; color: #ffffff; font-weight:  bold;  text-align: center; font-size:30px;">
      <td colspan="3"> High Value Equipment/Systems </td> </tr> 
     <tr  style=" font-family: monospace; color:   #ccffff ;  font-style: italic; font-weight:  bold;  font-size: larger"><td>Welcome <?php echo $name['username'].'!';?></td>
             
         <td width = 80%>&nbsp;</td>
            <td align="right"><a class="btn btn-danger align-left" href="<?=base_url().'Project/logout';?>">Logout</a></td> 
     </tr>
          
    </table> <table width = 98%  align="center" >
     <tr><td >      
    
             <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;" >
    
         <div class="navbar-nav" style=" font-family: sans-serif;">
            
         <a class="btn btn-outline-info float-right" style=" font-size: 16px; font-weight:  bold"
             href="<?php echo base_url('aprove/');?>">Home 
              </a> 
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
            <a class="btn btn-outline-info float-right" style=" font-size: 16px; font-weight:  bold"
             href="<?php echo base_url('aprove/show');?>">Pending for Approval
              </a> 
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             
              <a class="btn btn-outline-info float-right" style=" font-size: 16px; font-weight:  bold"
             href="<?php echo base_url('aprove/index1');?>">Approved  
              </a> 
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
      <a class="btn btn-outline-info float-right"  style=" font-size: 16px; font-weight:  bold" href="<?php echo base_url('aprove/search');?>"> 
            Search
      </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      
       
      <a class="btn btn-outline-info float-right"  style=" font-size: 16px; font-weight:  bold" href="<?php echo base_url('auser/home');?>"> 
            Change Password
      </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </div>
  
     </nav>
         </td></tr>
     </table>
    <div class="container-fluid">
    