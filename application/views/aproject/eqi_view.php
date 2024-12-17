<!DOCTYPE html>
<html>
  <head>
     <title> Search Equipments</title>
    
     
     <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/datatabel/datatables.css"> 
    <script src = "<?php echo base_url(); ?>css/datatabel/jquery.dataTables.min.js"></script>

    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button {
    border-radius: 0;
    
   
}
        
    </style>
  </head>
  <body>
      <div class="card" >
    <div class="card-header" >
     <p style=" text-align: center;  color:  #a61717;  font-family: cursive; font-weight:  bold; font-size: 20px; " >   Search Equipments
     </p>  </div>
          <br>
     <!-- Table -->
     <table id='empTable'   class="table table-hover" 
         style="width: 98%;">

       <thead>
         <tr>
             <th style=" width: 30%">Equipment name</th>
            <th>Type of Resource</th>
            <th>Value</th>
            <th> Officer -in-Charge</th>
            <th> Email</th>
            <th> Intercom</th>
           <th>Group</th>
            </tr>
       </thead>

     </table>
      </div>
     <!-- Script -->
     <script>
         
         
           

         
     $(document).ready(function(){
         
        $('#empTable').DataTable({
          'processing': true,
          'serverSide': true,
           'autoWidth': false,
          'serverMethod': 'post',
          'pageLength' : 10,
          'sDom': '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
          'pagingType' : 'numbers',
          'ajax': {
             'url':'<?=base_url()?>project/empList'
          },
                 
                
                
          'columns': [
             { data: 'ename' },
             { data: 'tyre' },
             { data: 'val' },
             { data: 'inname' },
             { data: 'icemail' },
             { data: 'icintercom' },
             { data: 'grp' }
          ]
                   
          
        });
        

     });
   
     </script>
  </body>
</html>