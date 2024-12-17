<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
     <title> Export Equipments</title>
    
     
     <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/datatabel/datatables.css"> 
    <script src = "<?php echo base_url(); ?>css/datatabel/jquery.dataTables.min.js"></script>

    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button {
    border-radius: 0;
    
   
}
        
    </style>
    
     <script  src="<?php echo base_url(); ?>css/Datatables/datatables.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Datatables/datatables.min.css"/>
    <link rel="stylesheet"  href="<?php echo base_url(); ?>css/DataTables/buttons.datatables.min.css">    
    <script src="<?php echo base_url(); ?>css/DataTables/dataTables.buttons.min.js" ></script> 
    <script src="<?php echo base_url(); ?>css/DataTables/jszip.min.js" ></script> 
    <script src="<?php echo base_url(); ?>css/DataTables/pdfmake.min.js" ></script> 
    <script src="<?php echo base_url(); ?>css/DataTables/vfs_fonts.js" ></script>
    <script src="<?php echo base_url(); ?>css/DataTables/buttons.html5.min.js" ></script> 
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/main.css">
    
<script>
    $(document).ready( function () {
      $('#empTable').DataTable( {
        
            dom: 'Bfrtip',
        pagingType : 'numbers',
       buttons: [{
      extend: 'excel',
      className: 'btn btn-sm btn-success',
      titleAttr: 'Excel export.',
      text: 'Excel',
      filename: 'Highvalue excel-export',
      extension: '.xlsx'
    },{
      extend: 'pdf',
      className: 'btn btn-sm btn-warning',
      titleAttr: 'Excel export.',
      text: 'PDF',
      filename: 'Highvalue pdf-export',
      extension: '.pdf'
    }, {
      extend: 'copy',
      className: 'btn btn-sm btn-primary',
      titleAttr: 'Copy table data.',
      text: 'Copy'
    }]
    } );
    $('.dt-button').removeClass("dt-button");  
    $('.dt-button').prop("class","btn-success");
  } );</script>
  </head>
  <body>
      <div class="card " >
          <div class="card-header" style=" color:  #990000" >
     <p style=" text-align: center;  font-family: cursive; font-weight:  bold; font-size: 20px; " >   Export Equipments Details
     </p>  </div>
          <br>
     <!-- Table -->
     <table id='empTable'  class="cell-border compact stripe " 
         style="width: 98%;">

       <thead>
         <tr >
             <th  width='1%' style=" padding: 0px; margin: 0px;">S.No</th>
           <th >Equipment name</th>
            <th> Type of the Resource</th>
            <th>Value</th>
            <th> Officer -in-Charge</th>
             <th> Email</th>
              <th> Intercom</th>
           <th>Group</th>
            </tr>
       </thead>
<tbody>
       <?php
$si=1;
foreach($data as $row)
{
    $pid=$row->icno;
?>
    <tr>
        <td style=" align-items:  center"><?php echo htmlentities($si);?></td>
   
  
   
    <td align=''> <?php echo htmlentities($row->ename);?></td>
    <td align=''> <?php echo htmlentities($row->tyre);?></td>
    <td align=''> <?php echo htmlentities($row->val);?></td>
    <td align=''><?php echo htmlentities($row->inname);?></td>
       <td align=''><?php echo htmlentities($row->icemail);?></td>
          <td align=''><?php echo htmlentities($row->icintercom);?></td>
    <td><?php echo htmlentities($row->grp);?></td>
    
</tr>
<?php
// for serial number increment
$si++;
} ?>
       
     </table>
      </div>
     <!-- Script -->
     
  </body>
</html>