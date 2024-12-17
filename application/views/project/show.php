<div class="card">
    <div class="card-header">
     <p style=" text-align: center;  font-family: cursive; color: #a61717; font-weight:  bold; font-size: 20px;">   Equipments details Submitted 
     </p>  </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); $this->session->set_flashdata(''); ?>
            </div>
        <?php } ?>
 
        <table    class="table table-bordered"  >
            <tr>
                <th>Name</th>
                 <th>Degree</th>
                <th>Discipline</th>
                
                <th>Name of the Institution</th>
                <th> From Date</th>
                <th>To Date</th>
                <th>Group</th>
                
                <th>Action</th>
            </tr>
 
            <?php foreach ($users as $project) { ?>      
            <tr>
               <td><?php echo $project->name; ?></td>
               <td><?php echo $project->degree; ?></td> 
                <td><?php echo $project->displine; ?></td> 
                
                <td><?php echo $project->college; ?></td>
                
                <td><?php echo $project->txtFromDate;  ?></td>
                  <td><?php echo $project->txtTodate; ?></td>
                <td><?php echo $project->group1; ?></td>
                   
                <td>
                    <!-- comment  <a
                        class="btn btn-outline-info"
                        href="<?php echo base_url('project/show/'. $project->id) ?>"> 
                        Show
                    </a>-->
                    <a
                        class="btn btn-success" 
                        href="<?php echo base_url('project/edit/'.$project->id) ?>"> 
                        Edit
                    </a>
                    
                </td>     
            </tr>
            <?php } ?>
        </table>
    </div>
</div>