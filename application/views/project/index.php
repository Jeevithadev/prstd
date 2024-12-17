
<div class="card">
    <div class="card-header ">
     <p style=" text-align: center; color:  #00F;  font-family: cursive; font-weight:  bold; font-size: 20px;">   Project Students  details
     </p>  </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); $this->session->set_flashdata('');  
                ?>
            </div>
        <?php }else{echo "";} ?>
 
        <table    class="table table-bordered"  >
            <tr style="   color:   #993300 ; font-size:  15px;">
                <th>Name</th>
                <th>Discipline</th>
                 <th>Degree</th>
                <th>Name of the Institution</th>
               
                <th> From Date</th>
                <th>To Date</th>
                <th>Group</th>
                <th>Guide Name</th>
            </tr>
 
            <?php foreach ($projects as $project) { ?>      
            <tr>
                <td><?php echo $project->name; ?></td>
                <td><?php echo $project->displine; ?></td> 
                <td><?php echo $project->degree; ?></td> 
                <td><?php echo $project->college; ?></td>
                
                <td><?php echo $project->txtFromDate;  ?></td>
                  <td><?php echo $project->txtTodate; ?></td>
                <td><?php echo $project->group1; ?></td>
                   <td><?php echo $project->gudide; ?></td>
                    
                   
            </tr>
            <?php } ?>
        </table>
    </div>
</div>