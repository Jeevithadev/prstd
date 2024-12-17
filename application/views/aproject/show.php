<div class="card">
    <div class="card-header">
     <p style=" text-align: center;  font-family: cursive; color: #a61717; font-weight:  bold; font-size: 20px;">   Equipments details Submitted Pending for Approval 
     </p>  </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
 
        <table    class="table table-bordered"  >
            <tr>
                <th>Name</th>
                <th>Type of Resource</th>
                 <th>Unique ID</th>
                <th>Value</th>
                <th>Division</th>
                <th> User Name</th>
                <th>Office -in-Charge</th>
                <th colspan="2" style=" text-align:  center">Action</th>
            </tr>
 
            <?php foreach ($users as $project) { ?>      
            <tr>
                <td><?php echo $project->ename; ?></td>
                <td><?php echo $project->tyre; ?></td> 
                <td><?php echo $project->uid; ?></td> 
                <td><?php echo $project->val; ?></td>
                <td><?php echo $project->divs; ?></td>
                <td><?php echo $project->uname; ?></td>
                  <td><?php echo $project->inname; ?></td>
                <td>
                  
                    <a
                        class="btn  badge-danger" 
                        href="<?php echo base_url('aprove/edit/'.$project->id) ?>"> 
                        Edit
                    </a>
                    
                </td>  
                <td>
                  
                    <a
                        class="btn btn-success" 
                        href="<?php echo base_url('aprove/eqaprove/'.$project->id) ?>"> 
                        Approve
                    </a>
                    
                </td>  
                <td>
                  
                    <a
                        class="btn badge-danger" 
                        href="<?php echo base_url('aprove/eqaprove/'.$project->id) ?>"> 
                        Delete
                    </a>
                    
                </td> 
            </tr>
            <?php } ?>
        </table>
    </div>
</div>