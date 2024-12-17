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
             
             <th >Name</th>
                <th>Discipline</th>
                 <th>Degree</th>
                <th style=" width: 30%">Name of the Institution</th>
               
                <th> From Date</th>
                <th>To Date</th>
                <th>Group</th>
                <th>Guide Name</th>
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
             { data: 'name' },
             { data: 'displine' },
             { data: 'degree' },
             { data: 'college' },
             { data: 'txtFromDate' },
             { data: 'txtTodate' },
             { data: 'group1' },
             { data: 'gudide' }
          ]
                   
          
        });
        

     });
   
     </script>
  </body>
</html>