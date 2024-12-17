<div class="card">
    <div class="card-header">
     <p style=" text-align: center;  font-family: cursive; color: #a61717; font-weight:  bold; font-size: 20px;">   Students details Submitted 
     </p>  </div>
    <div class="card-body">
    <script>
    <?php if ($this->session->flashdata('success')): ?>
        alert('<?= $this->session->flashdata('success'); ?>');
        <?php $this->session->set_flashdata('success', null); ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        alert('<?= $this->session->flashdata('error'); ?>');
        <?php $this->session->set_flashdata('error', null); ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('errors')): ?>
        alert('<?= $this->session->flashdata('errors'); ?>');
        <?php $this->session->set_flashdata('errors', null); ?>
    <?php endif; ?>
</script>
     
        <table    class="table table-bordered"  >
            <tr>
                <th>ID</th>
                <th>Name</th>
                 <th>Degree</th>
                <th>Discipline</th>
                
                <th>Name of the Institution</th>
                <th> From Date</th>
                <th>To Date</th>
                <th>Accom</th>
                
                <th>Action</th>
            </tr>
 
            <?php foreach ($users as $project) { ?>      
            <tr>
                <th><?php echo $project->id; ?> </td>
               <td><?php echo $project->name; ?></td>
               <td><?php echo $project->degree; ?></td> 
                <td><?php echo $project->discipline; ?></td> 
                
                <td><?php echo $project->college; ?></td>
                
                <td><?php echo $project->sdate;  ?></td>
                  <td><?php echo $project->edate; ?></td>
                <td><?php echo $project->accom; ?></td>
                   
                <td>
                    <!-- comment  <a
                        class="btn btn-outline-info"
                        href="<?php echo base_url('project/showstud/'. $project->id) ?>"> 
                        Show
                    </a>-->
                    <a
                        class="btn btn-success" 
                        href="<?php echo base_url('project/editstud/'.$project->id) ?>"> 
                        Edit
                    </a>
                    
                </td>     
            </tr>
            <?php } ?>
        </table>
    </div>
</div>