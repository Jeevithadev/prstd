<div class="card">
    <div class="card-header">
     <p style=" text-align: center;  font-family: cursive; color: #a61717; font-weight:  bold; font-size: 20px;">   Screened Students details 
     </p>  </div>
    <div class="card-body">
        
        
        <table    class="table table-bordered"  >
            <tr>
                <th>ID </th>
                <th>Name</th>
                <th>Name of the Institution</th>
                <th>Branch</th>
                <th>Discipline</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Place</th>
                <th>Status</th>
                <th>Reason</th>
            </tr>
 
            <?php foreach ($stud as $project) { ?>      
            <tr>
               
                <td><?php echo $project->id; ?></td>
               <td><?php echo $project->name; ?></td>
               <td><?php echo $project->college; ?></td> 
               <td><?php echo $project->branch; ?></td> 
                <td><?php echo $project->discipline; ?></td> 
                <td><?php echo $project->sdate; ?></td> 
                <td><?php echo $project->edate; ?></td> 
                <td><?php echo $project->city;  ?></td>
                  <td><?php echo $project->status;?> </td>
                <td><?php echo $project->reason;  ?></td>
                   
                    
            </tr>
            <?php } ?>
        </table>
    </div>
</div>