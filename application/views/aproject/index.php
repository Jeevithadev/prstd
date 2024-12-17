
<div class="card">
    <div class="card-header ">
     <p style=" text-align: center; color:  #00F;  font-family: cursive; font-weight:  bold; font-size: 20px;">   Equipments  / Systems  details
     </p>  </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
 
        <table    class="table table-bordered"  >
            <tr style="   color:   #993300 ; font-size:  15px;">
                <th>Name</th>
                <th>Type of Resource</th>
                 <th>Unique ID</th>
                <th>Value (in Lakhs)</th>
               
                <th> Group Coordinator</th>
                <th>Officer -in-Charge</th>
                <th>Division</th>
                <th>Group</th>
            </tr>
 
            <?php foreach ($projects as $project) { ?>      
            <tr>
                <td><?php echo $project->ename; ?></td>
                <td><?php echo $project->tyre; ?></td> 
                <td><?php echo $project->uid; ?></td> 
                <td  align="center"><?php echo $project->val; ?></td>
                
                <td><?php echo $project->tit .' '. $project->uname;  ?></td>
                  <td><?php echo $project->inname; ?></td>
                <td><?php echo $project->divs; ?></td>
                   <td><?php echo $project->grp; ?></td>
                    
                   
            </tr>
            <?php } ?>
        </table>
    </div>
</div>