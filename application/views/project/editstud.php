
<html> 
    <head>
        <title> New </title>
    </head>
    <body>  
        

<div class="card">
    <div class="card-header">
     <p style=" text-align: center;  font-family: cursive; font-weight:  bold; font-size: 20px;">   Alter Students details 
     </p>  </div>


    <div class="card-body ">

         
        <form action="<?php echo base_url('project/updatestud/' . $project->id);?>" method="POST">
            <input type="hidden" name="_method" value="PUT">
           
     <BR> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="2" face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#FF0000">  Fill the *  mandatory fields</font>
     <div class="form-row">
    <div class="form-group col-md-12">
<p style="font-family:'Book Antiqua'; font-size:18px; vertical-align: bottom; background-color: #bce8f1; color: #000000; font-weight: bold; height:35px; vertical-align:bottom;">Student Details </p> </div>
 </div>
             
             
     	 <div class="form-row">
    <div class="form-group col-md-3">
     <label for="tit">Title*</label>
      <select id="tit" name="tit" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="Ms." <?php echo ($project->tit == 'Ms.') ? 'selected' : ''; ?>>Ms.</option>
	<option value="Mr." <?php echo ($project->tit == 'Mr.') ? 'selected' : ''; ?>>Mr.</option>
      </select>
    </div>
        
      <div class="form-group col-md-3">
      <label for="name">Name of the Student</label>
      <input type="text" class="form-control" id="name"  name="name" value="<?php echo $project->name; ?>"  >
    </div>       
             
    
    <div class="form-group col-md-3">
     <label for="ptit">Title for Parents/Guardian *</label>
      <select id="ptit" name="ptit" class="form-control" required="required">
          <option value="">Choose...</option>
       <option value="Dr. " <?php echo ($project->ptit == 'Dr. ') ? 'selected' : ''; ?>>Dr.</option>
       <option value="Smt. " <?php echo ($project->ptit == 'Smt. ') ? 'selected' : ''; ?>>Smt.</option>
   <option value="Ms. " <?php echo ($project->ptit == 'Ms. ') ? 'selected' : ''; ?>>Ms.</option>
<option value="Shri " <?php echo ($project->ptit == 'Shri ') ? 'selected' : ''; ?>>Shri</option>
      </select>
    </div>         
    
             <div class="form-group col-md-3">
      <label for="wardname">Name of the Parents/Guardian *</label>
      <input type="text" class="form-control" id="wardname"  name="wardname" value="<?php echo $project->pname; ?>"   >
    </div>   
             
    </div>       
        
    <div class="form-row">
             
    <div class="form-group col-md-3">
     <label for="gradution">Graduation: *</label>
      <select id="gradution" name="gradution" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="1" <?php echo ($project->graduation == '1') ? 'selected' : ''; ?>>U.G</option>
            <option value="2" <?php echo ($project->graduation == '2') ? 'selected' : ''; ?>>P.G</option>
      </select>
    </div>
         
           
       <div class="form-group col-md-3">
     <label for="degree">Degree *</label>
      <select id="degree" name="degree" class="form-control" required="required">
         <option value="<?php echo $project->degree; ?>"><?php echo $project->degree; ?></option>
      </select>
    </div>       
    
         <div class="form-group col-md-3">
     <label for="branch">Branch *</label>
      <select id="branch" name="branch" class="form-control" required="required">
          <option value="">Choose...</option>
       <option value="Mechanical" <?php echo ($project->branch == 'Mechanical') ? 'selected' : ''; ?>>Mechanical</option>
       <option value="Electronics, Electrical, Instrumentation" <?php echo ($project->branch == 'Electronics, Electrical, Instrumentation') ? 'selected' : ''; ?>>Electronics, Electrical, Instrumentation</option>
   <option value="Physics" <?php echo ($project->branch == 'Physics') ? 'selected' : ''; ?>>Physics</option>
<option value="Chemistry" <?php echo ($project->branch == 'Chemistry') ? 'selected' : ''; ?>>Chemistry</option>
<option value="Nuclear Engineering" <?php echo ($project->branch == 'Nuclear Engineering') ? 'selected' : ''; ?>>Nuclear Engineering</option>
<option value="Chemical Engineering" <?php echo ($project->branch == 'Chemical Engineering') ? 'selected' : ''; ?>>Chemical Engineering</option>
<option value="Civil Engineering" <?php echo ($project->branch == 'Civil Engineering') ? 'selected' : ''; ?>>Civil Engineering</option>

      </select>
    </div> 
        
	<div class="form-group col-md-3">
      <label for="displine">Specific Discipline:</label>
      <input type="text" class="form-control" id="displine"   name="displine" value="<?php echo $project->discipline; ?>"  >
    </div>
             
     
  </div>
           
             
             
             

<div class="form-row">
    
<div class="form-group col-md-3">
  <label for="searchclg">Search College</label>
  <input type="text" class="form-control" id="searchclg" name="searchclg" autocomplete="off">
</div>

<div class="form-group col-md-3">
  <label for="college">College Name*</label>
  <select class="form-control" id="college" name="college">
    <option value="<?php echo $project->college; ?>"><?php echo $project->college; ?></option>
  </select>
</div>
    
    <div class="form-group col-md-3">
      <label for="city">City*</label>
      <input type="text" class="form-control" id="city"   name="city"  value="<?php echo $project->city; ?>" >
    </div>
    
            
    
         <div class="form-group col-md-3">
     <label for="state">State *</label>
      <select id="state" name="state" class="form-control" required="required">    
        <option value="">Select a state</option>
        <option value="Andhra Pradesh" <?php echo ($project->state == 'Andhra Pradesh') ? 'selected' : ''; ?>>Andhra Pradesh</option>
        <option value="Arunachal Pradesh" <?php echo ($project->state == 'Arunachal Pradesh') ? 'selected' : ''; ?>>Arunachal Pradesh</option>
        <option value="Assam" <?php echo ($project->state == 'Assam') ? 'selected' : ''; ?>>Assam</option>
        <option value="Bihar" <?php echo ($project->state == 'Bihar') ? 'selected' : ''; ?>>Bihar</option>
        <option value="Chhattisgarh" <?php echo ($project->state == 'Chhattisgarh') ? 'selected' : ''; ?>>Chhattisgarh</option>
        <option value="Goa" <?php echo ($project->state == 'Goa') ? 'selected' : ''; ?>>Goa</option>
        <option value="Gujarat" <?php echo ($project->state == 'Gujarat') ? 'selected' : ''; ?>>Gujarat</option>
        <option value="Himachal Pradesh" <?php echo ($project->state == 'Himachal Pradesh') ? 'selected' : ''; ?>>Himachal Pradesh</option>
        <option value="Haryana" <?php echo ($project->state == 'Haryana') ? 'selected' : ''; ?>>Haryana</option>
        <option value="Jharkhand" <?php echo ($project->state == 'Jharkhand') ? 'selected' : ''; ?>>Jharkhand</option>
        <option value="Karnataka" <?php echo ($project->state == 'Karnataka') ? 'selected' : ''; ?>>Karnataka</option>
        <option value="Kerala" <?php echo ($project->state == 'Kerala') ? 'selected' : ''; ?>>Kerala</option>
        <option value="Madhya Pradesh" <?php echo ($project->state == 'Madhya Pradesh') ? 'selected' : ''; ?>>Madhya Pradesh</option>
        <option value="Maharashtra" <?php echo ($project->state == 'Maharashtra') ? 'selected' : ''; ?>>Maharashtra</option>
        <option value="Manipur" <?php echo ($project->state == 'Manipur') ? 'selected' : ''; ?>>Manipur</option>
        <option value="Meghalaya" <?php echo ($project->state == 'Meghalaya') ? 'selected' : ''; ?>>Meghalaya</option>
        <option value="Mizoram" <?php echo ($project->state == 'Mizoram') ? 'selected' : ''; ?>>Mizoram</option>
        <option value="Nagaland" <?php echo ($project->state == 'Nagaland') ? 'selected' : ''; ?>>Nagaland</option>
        <option value="Odisha" <?php echo ($project->state == 'Odisha') ? 'selected' : ''; ?>>Odisha</option>
        <option value="Punjab" <?php echo ($project->state == 'Punjab') ? 'selected' : ''; ?>>Punjab</option>
        <option value="Rajasthan" <?php echo ($project->state == 'Rajasthan') ? 'selected' : ''; ?>>Rajasthan</option>
        <option value="Sikkim" <?php echo ($project->state == 'Sikkim') ? 'selected' : ''; ?>>Sikkim</option>
        <option value="Tamil Nadu" <?php echo ($project->state == 'Tamil Nadu') ? 'selected' : ''; ?>>Tamil Nadu</option>
        <option value="Telangana" <?php echo ($project->state == 'Telangana') ? 'selected' : ''; ?>>Telangana</option>
        <option value="Tripura" <?php echo ($project->state == 'Tripura') ? 'selected' : ''; ?>>Tripura</option>
        <option value="Uttar Pradesh" <?php echo ($project->state == 'Uttar Pradesh') ? 'selected' : ''; ?>>Uttar Pradesh</option>
        <option value="Uttarakhand" <?php echo ($project->state == 'Uttarakhand') ? 'selected' : ''; ?>>Uttarakhand</option>
        <option value="West Bengal" <?php echo ($project->state == 'West Bengal') ? 'selected' : ''; ?>>West Bengal</option>
    </select>
        </div> 
        
	  
     
  </div>
             
  
  
  <div class="form-row">
    <div class="form-group col-md-12">
 <p style="font-family:'Book Antiqua'; font-size:18px; vertical-align: bottom; background-color: #bce8f1; color: #000000; font-weight: bold; height:35px; vertical-align:bottom;">Project Details (Duration) </p> </div>
 </div>
             
               
     	 <div class="form-row">
    <div class="form-group col-md-2">
     <label for="window">Requested Window*</label>
      <select id="window" name="window" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="summer" <?php echo ($project->window == 'summer') ? 'selected' : ''; ?>>Summer</option>
         <option value="winter" <?php echo ($project->window == 'winter') ? 'selected' : ''; ?>>Winter</option>
      </select>
    </div>
        
             
    <div class="form-group col-md-2">
     <label for="prjtype">Type of Request*</label>
      <select id="prjtype" name="prjtype" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="Project Work" <?php echo ($project->prjtype == 'Project Work') ? 'selected' : ''; ?>>Project Work</option>
         <option value="In-Plant Training" <?php echo ($project->prjtype == 'In-Plant Training') ? 'selected' : ''; ?>>In-Plant Training</option>
         <option value="Mini Project" <?php echo ($project->prjtype == 'Mini Project') ? 'selected' : ''; ?>>Mini Project</option>
         <option value="Project Discussion" <?php echo ($project->prjtype == 'Project Discussion') ? 'selected' : ''; ?>>Project Discussion</option>
      </select>
    </div>
         
           
    <div class="form-group col-md-2">
      <label for="reqstDate"> Request Date :</label>
	  
      <input type="date" class="form-control" id="reqstDate" name="reqstDate" value ="<?php echo $project->reqstdate; ?>" >
    </div>         
    
	<div class="form-group col-md-2">
      <label for="txtFromDate"> Start Date :</label>
	  
      <input type="date" class="form-control" id="txtFromDate" name="txtFromDate" value ="<?php echo $project->sdate; ?>" >
    </div>
           
             
      <div class="form-group col-md-2">
      <label for="txtTodate">End Date :</label>
	  
      <input type="date" class="form-control" id="txtTodate" name="txtTodate" value ="<?php echo $project->edate; ?>" >
    </div>
     
             
              <div class="form-group col-md-2">
     <label for="accom">Accommodation required: *</label>
      <select id="accom" name="accom" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="Yes" <?php echo ($project->accom == 'Yes') ? 'selected' : ''; ?>>Yes</option>
            <option value="No" <?php echo ($project->accom == 'No') ? 'selected' : ''; ?>>No</option>
      </select>
    </div>
  </div>         
             
    <div class="form-row">
    <div class="form-group col-md-3">
     <label for="bonafide">Bonafide Submitted: *</label>
      <select id="bonafide" name="bonafide" class="form-control" required="required">
          <option value="">Choose...</option>
          <option value="Yes" <?php echo ($project->bonafide == 'Yes') ? 'selected' : ''; ?>>Yes</option>
          <option value="No" <?php echo ($project->bonafide == 'No') ? 'selected' : ''; ?>>No</option>
      </select>
    </div>  
        
        <div class="form-group col-md-3">
     <label for="hod">Letter from HOD Submitted: *</label>
      <select id="hod" name="hod" class="form-control" required="required">
          <option value="">Choose...</option>
          <option value="Yes" <?php echo ($project->hod == 'Yes') ? 'selected' : ''; ?>>Yes</option>
          <option value="No" <?php echo ($project->hod == 'No') ? 'selected' : ''; ?>>No</option>
      </select>
    </div>
            <div class="form-group col-md-3">
     <label for="mark">Mark Statement Submitted: *</label>
      <select id="mark" name="mark" class="form-control" required="required">
          <option value="">Choose...</option>
          <option value="Yes" <?php echo ($project->mark == 'Yes') ? 'selected' : ''; ?>>Yes</option>
          <option value="No" <?php echo ($project->mark == 'No') ? 'selected' : ''; ?>>No</option>
      </select>
    </div>
    
                    <div class="form-group col-md-3">
     <label for="resume">Resume along with SoP Submitted: *</label>
      <select id="resume" name="resume" class="form-control" required="required">
          <option value="">Choose...</option>
          <option value="Yes" <?php echo ($project->resume == 'Yes') ? 'selected' : ''; ?>>Yes</option>
          <option value="No" <?php echo ($project->resume == 'No') ? 'selected' : ''; ?>>No</option>
      </select>
    </div>
    </div>
             
             


             
             
             
  <div class="form-row">
    <div class="form-group col-md-12">
 <p style="font-family:'Book Antiqua'; font-size:18px; vertical-align: bottom; background-color: #bce8f1; color: #000000; font-weight: bold; height:35px; vertical-align:bottom;">Parents Details (Department Employees) </p> </div>
 </div>
  
  
 	 <div class="form-row">
  <div class="form-group col-md-3">
     <label for="request">Ward of DAE Employee *</label>
      <select id="request" name="request" class="form-control" required="required">
          <option value="">Choose...</option>
          <option value="Yes" <?php echo ($project->wardemp == 'Yes') ? 'selected' : ''; ?>>Yes</option>
          <option value="No" <?php echo ($project->wardemp == 'No') ? 'selected' : ''; ?>>No</option>
      </select>
    </div>
     
            <div class="form-group col-md-3">
      <label for="ename">Name of the Employee*</label>
      <input type="text" class="form-control" id="ename"   name="ename" value="<?php echo $project->ename; ?>"  >
    </div>
      <div class="form-group col-md-3">
     <label for="designward">Designation : *</label>
       <input type="text" class="form-control" id="designward"   name="designward"  value="<?php echo $project->design; ?>" >
    </div>
             <div class="form-group col-md-3">
     <label for="unit">Unit : *</label>
       <select id="unit" name="unit" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="IGCAR" <?php echo ($project->unit == 'IGCAR') ? 'selected' : ''; ?>>IGCAR</option>
            <option value="BARCF" <?php echo ($project->unit == 'BARCF') ? 'selected' : ''; ?>>BARCF</option>
            <option value="GSO" <?php echo ($project->unit == 'GSO') ? 'selected' : ''; ?>>GSO</option>
             <option value="NRB" <?php echo ($project->unit == 'NRB') ? 'selected' : ''; ?>>NRB</option>
      </select>
    </div>
    </div>
	
 
 <div class="form-row">
  <div class="form-group col-md-3">
     <label for="unitplace">Place of the Unit *</label>
      
          <input type="text" class="form-control" id="unitplace"   name="unitplace" value="<?php echo $project->unitplace; ?>"  >
    </div> 
     
   <div class="form-group col-md-3">
     <label for="email">Email id *</label>
      
          <input type="text" class="form-control" id="email"   name="email" value="<?php echo $project->email; ?>"  >
    </div>   
     
     
     <div class="form-group col-md-3">
     <label for="inter">Intercom *</label>
      
          <input type="text" class="form-control" id="inter"   name="inter" value="<?php echo $project->intercom; ?>"  >
    </div>  
     
     <div class="form-group col-md-3">
     <label for="mobile">Mobile Number *</label>
      
          <input type="text" class="form-control" id="mobile"   name="mobile" value="<?php echo $project->mobile; ?>"  >
    </div> 
             
 </div>
 
 <div class="form-row">
    <div class="form-group col-md-12">
 <p style="font-family:'Book Antiqua'; font-size:18px; vertical-align: bottom; background-color: #bce8f1; color: #000000; font-weight: bold; height:35px; vertical-align:bottom;">Documents Upload </p> </div>
 </div>

 <div class="form-row">
  <div class="form-group col-md-3">
    <label for="uploadmark">Upload mark *</label>
    <?php
      $mark_filename = pathinfo($project->upload_mark, PATHINFO_BASENAME);
    ?>
    <input type="file" class="form-control" id="uploadmark" name="uploadmark">
    <?php if (!empty($mark_filename)): ?>
      <small>Current file: <?php echo $mark_filename; ?></small>
    <?php endif; ?>
  </div>

  <div class="form-group col-md-3">
    <label for="uploadhod">Upload hod *</label>
    <?php
      $hod_filename = pathinfo($project->upload_hod, PATHINFO_BASENAME);
    ?>
    <input type="file" class="form-control" id="uploadhod" name="uploadhod">
    <?php if (!empty($hod_filename)): ?>
      <small>Current file: <?php echo $hod_filename; ?></small>
    <?php endif; ?>
  </div>

  <div class="form-group col-md-3">
    <label for="uploadsop">Upload sop *</label>
    <?php
      $sop_filename = pathinfo($project->upload_sop, PATHINFO_BASENAME);
    ?>
    <input type="file" class="form-control" id="uploadsop" name="uploadsop">
    <?php if (!empty($sop_filename)): ?>
      <small>Current file: <?php echo $sop_filename; ?></small>
    <?php endif; ?>
  </div>
  </div>
	  
	 <div class="form-group col-md-2"></div>
       <div class="form-group col-md-2">
           <br><br><br>
           <button type="submit" class="btn btn-success  " style=" border-color:  #000000">Update Details</button>
       </div>
	</div>

       
    
     
    

    <script>
        $(document).ready(function () {
    // Define the degree options for each graduation type
    var options = {
        '1': [ // U.G degrees
            { value: 'B.E', text: 'B.E' },
            { value: 'B.Sc', text: 'B.Sc' },
            { value: 'B.Com', text: 'B.Com' }
        ],
        '2': [ // P.G degrees
            { value: 'M.E', text: 'M.E' },
            { value: 'M.Tech', text: 'M.Tech' },
            { value: 'Integrated M.SC', text: 'Integrated M.SC' },
            { value: 'Integrated M.Tech', text: 'Integrated M.Tech' },
            { value: 'M.SC', text: 'M.SC' }
        ]
    };


    // Trigger population of the degree dropdown when graduation changes
    $('#gradution').change(function() {
                var selectedCategory = $(this).val();
                var $degree = $('#degree');

                // Clear existing options
                $degree.empty();

                // Add a default "Select an option" option
                $degree.append('<option value="">Select an option</option>');

                // Check if the selectedCategory exists in the options object
                if (options[selectedCategory]) {
                    // Populate dropdown2 with the corresponding options
                    $.each(options[selectedCategory], function(index, item) {
                        $degree.append(new Option(item.text, item.value));
                    });
                }
            });

    $('#searchclg').keyup(function() { 
    var query = $(this).val();
    if (query != '') {
      $.ajax({
        url: '<?php echo base_url(); ?>Autocomplete/fetchCollege',
        method: "POST",
        data: {query: query},
        success: function(data) {
          $('#college').html(data); 
        }
      });
    } else {
      $('#college').html('<option value="">Select College</option>');
    }
  });

});
</script>
<!-- comment -->
        </form>
    </div></div>
    </body>
</html>
 