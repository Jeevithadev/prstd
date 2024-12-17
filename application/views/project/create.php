<html> 
    <head>
        <title> New </title>
<style>
.scolor
{
    font-family:  cursive;
    color:  #a61717;
    font-style:  italic;
}


</style>

    </head>  
    <body>

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
    

<div class="card">
    <div class="card-header" style=" background-color: #bce8f1;">
        <p style=" text-align: center;  font-family: cursive; font-weight:  bold; font-size: 20px;">  New Project Request</p>
        
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('errors')) {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); $this->session->unset_flashdata('errors'); ?>
            </div>
        <?php } ?>
        <form action="<?php echo base_url('project/store');?>" method="POST" enctype="multipart/form-data">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="2" face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#FF0000">  Fill the *  mandatory fields</font>
<div class="form-row">
    <div class="form-group col-md-12">
<p style="font-family:'Book Antiqua'; font-size:18px; vertical-align: bottom; background-color: #bce8f1; color: #000000; font-weight: bold; height:35px; vertical-align:bottom;">Student Details </p> </div>
 </div>
             
             
     	 <div class="form-row">
    <div class="form-group col-md-3">
     <label for="tit">Title*</label>
      <select id="tit" name="tit" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="Ms.">Ms.</option>
	<option value="Mr.">Mr.</option>
      </select>
    </div>
        
      <div class="form-group col-md-3">
      <label for="name">Name of the Student</label>
      <input type="text" class="form-control" id="name"  name="name"   >
    </div>       
             
    
    <div class="form-group col-md-3">
     <label for="ptit">Title for Parents/Guardian *</label>
      <select id="ptit" name="ptit" class="form-control" required="required">
          <option value="">Choose...</option>
       <option value="Dr. ">Dr.</option>
       <option value="Smt. ">Smt.</option>
   <option value="Ms. ">Ms.</option>
<option value="Shri ">Shri</option>
      </select>
    </div>         
    
             <div class="form-group col-md-3">
      <label for="wardname">Name of the Parents/Guardian *</label>
      <input type="text" class="form-control" id="wardname"  name="wardname"   >
    </div>   
             
    </div>       
        
    <div class="form-row">
             
    <div class="form-group col-md-3">
     <label for="gradution">Graduation: *</label>
      <select id="gradution" name="gradution" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="1">U.G</option>
            <option value="2">P.G</option>
      </select>
    </div>
         
           
       <div class="form-group col-md-3">
     <label for="degree">Degree *</label>
      <select id="degree" name="degree" class="form-control" required="required">
         <option value=" ">Select Graduation First</option>
      </select>
    </div>       
    
         <div class="form-group col-md-3">
     <label for="branch">Branch *</label>
      <select id="branch" name="branch" class="form-control" required="required">
          <option value="">Choose...</option>
       <option value="Mechanical">Mechanical</option>
       <option value="Electronics, Electrical, Instrumentation">Electronics, Electrical, Instrumentation</option>
   <option value="Physics">Physics</option>
<option value="Chemistry">Chemistry</option>
<option value="Nuclear Engineering">Nuclear Engineering</option>
<option value="Chemical Engineering">Chemical Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>

      </select>
    </div> 
        
	<div class="form-group col-md-3">
      <label for="displine">Specific Discipline:</label>
      <input type="text" class="form-control" id="displine"   name="displine"   >
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
    <option value="">Select College</option>
  </select>
</div>
    
    <div class="form-group col-md-3">
      <label for="city">City*</label>
      <input type="text" class="form-control" id="city"   name="city"   >
    </div>
    
            
    
         <div class="form-group col-md-3">
     <label for="state">State *</label>
      <select id="state" name="state" class="form-control" required="required">    
        <option value="">Select a state</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Haryana">Haryana</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
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
        <option value="summer">Summer</option>
         <option value="winter">Winter</option>
      </select>
    </div>
        
             
    <div class="form-group col-md-2">
     <label for="prjtype">Type of Request*</label>
      <select id="prjtype" name="prjtype" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="Project Work">Project Work</option>
         <option value="In-Plant Training">In-Plant Training</option>
         <option value="Mini Project">Mini Project</option>
         <option value="Project Discussion">Project Discussion</option>
      </select>
    </div>
         
           
    <div class="form-group col-md-2">
      <label for="reqstDate"> Request Date :</label>
	  
      <input type="date" class="form-control" id="reqstDate" name="reqstDate" >
    </div>        
    
	<div class="form-group col-md-2">
      <label for="txtFromDate"> Start Date :</label>
	  
      <input type="date" class="form-control" id="txtFromDate" name="txtFromDate" >
    </div>
           
             
      <div class="form-group col-md-2">
      <label for="txtTodate">End Date :</label>
	  
      <input type="date" class="form-control" id="txtTodate" name="txtTodate" >
    </div>
     
             
              <div class="form-group col-md-2">
     <label for="accom">Accommodation required: *</label>
      <select id="accom" name="accom" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="Yes">Yes</option>
            <option value="No">No</option>
      </select>
    </div>
  </div>         
             
    <div class="form-row">
    <div class="form-group col-md-3">
     <label for="bonafide">Bonafide Submitted: *</label>
      <select id="bonafide" name="bonafide" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="Yes">Yes</option>
            <option value="No">No</option>
      </select>
    </div>  
        
        <div class="form-group col-md-3">
     <label for="hod">Letter from HOD Submitted: *</label>
      <select id="hod" name="hod" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="Yes">Yes</option>
            <option value="No">No</option>
      </select>
    </div>
            <div class="form-group col-md-3">
     <label for="mark">Mark Statement Submitted: *</label>
      <select id="mark" name="mark" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="Yes">Yes</option>
            <option value="No">No</option>
      </select>
    </div>
    
                    <div class="form-group col-md-3">
     <label for="resume">Resume along with SoP Submitted: *</label>
      <select id="resume" name="resume" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="Yes">Yes</option>
            <option value="No">No</option>
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
        <option value="Yes">Yes</option>
            <option value="No">No</option>
      </select>
    </div>
     
            <div class="form-group col-md-3">
      <label for="ename">Name of the Employee*</label>
      <input type="text" class="form-control" id="ename"   name="ename"   >
    </div>
      <div class="form-group col-md-3">
     <label for="designward">Designation : *</label>
       <input type="text" class="form-control" id="designward"   name="designward"   >
    </div>
             <div class="form-group col-md-3">
     <label for="unit">Unit : *</label>
       <select id="unit" name="unit" class="form-control" required="required">
          <option value="">Choose...</option>
        <option value="IGCAR">IGCAR</option>
            <option value="BARCF">BARCF</option>
            <option value="GSO">GSO</option>
             <option value="NRB">NRB</option>
      </select>
    </div>
    </div>
	
 
 <div class="form-row">
  <div class="form-group col-md-3">
     <label for="unitplace">Place of the Unit *</label>
      
          <input type="text" class="form-control" id="unitplace"   name="unitplace"   >
    </div> 
     
   <div class="form-group col-md-3">
     <label for="email">Email id *</label>
      
          <input type="text" class="form-control" id="email"   name="email"   >
    </div>   
     
     
     <div class="form-group col-md-3">
     <label for="inter">Intercom *</label>
      
          <input type="text" class="form-control" id="inter"   name="inter"   >
    </div>  
     
     <div class="form-group col-md-3">
     <label for="mobile">Mobile Number *</label>
      
          <input type="text" class="form-control" id="mobile"   name="mobile"   >
    </div> 
             
 </div>
 
 <div class="form-row">
    <div class="form-group col-md-12">
 <p style="font-family:'Book Antiqua'; font-size:18px; vertical-align: bottom; background-color: #bce8f1; color: #000000; font-weight: bold; height:35px; vertical-align:bottom;">Documents Upload </p> </div>
 </div>

 <div class="form-row">
  <div class="form-group col-md-3">
    <label for="uploadmark">Upload mark *</label>
    <input type="file" class="form-control" id="uploadmark" name="uploadmark">
  </div>
  <div class="form-group col-md-3">
    <label for="uploadhod">Upload hod *</label>
    <input type="file" class="form-control" id="uploadhod" name="uploadhod">
  </div>
  <div class="form-group col-md-3">
    <label for="uploadsop">Upload sop *</label>
    <input type="file" class="form-control" id="uploadsop" name="uploadsop">
  </div>
  </div>
             
   
    

  
             <div class="form-group col-md-2"></div>
       <div class="form-group col-md-2">
           <br><br>
           <button type="submit" class="btn btn-success  " style=" border-color:  #000000">Save Details</button>
       </div>
	

    
	            
            
            
            
            
            
            
            
            
            
            
            
            
           
          
           
        </form>
       
    </div>
</div>

 
  <script>

$(document).ready(function () {  
    

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

  
    
            var options = {
                '1': [
                    { value: 'B.E', text: 'B.E' },
                    { value: 'B.Sc', text: 'B.Sc' },
                    { value: 'B.Com', text: 'B.Com' }
                ],
                '2': [
                    { value: 'M.E', text: 'M.E' },
                    { value: 'M.Tech', text: 'M.Tech' },
                    { value: 'Integrated M.SC', text: 'Integrated M.SC' },
                    { value: 'Integrated M.Tech', text: 'Integrated M.Tech' },
                    { value: 'M.SC', text: 'M.SC' }
                ]
            };

            // Function to populate dropdown2 based on selection in dropdown1
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
    
    
    
    
   $('#gradution').change(function () {
            if ($('#comp').val() === 'Yes') {
                $('#compot').prop('readonly', false);
                 $('#compot').prop('required', true);
            }
            else {
                $('#compot').prop('readonly', true);
            }
        }); 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
$('#val').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');});

 $('#val').change(function(){
    var val1 = $(this).val();
    if((val1.length < 2) || (val1.length>4)){
       
        swal ( "Invalid" ,  "Enter Value in Lakhs (2 to 4 digits numbers)!" ,  "error" )
	
        $('#val').val('');
        }
       
        if(val1 < 25) {
         swal ( "Invalid" ,  "Value Should be 25 Lakhs or Greater!" ,  "error" )
	
         $('#val').val('');
         document.getElementById("val").focus();
        }
    });
    
      $('#inicno').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');});
 
      $('#ndays').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');});

      $('#nexp').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');});
    
         $('#etime').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');});

         $('#tval').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');});

//working condition
            $('#ework').change(function () {
            if ($('#ework').val() === 'Yes') {
                $('#eworkno').prop('readonly', true);
               
            }
            else {
                $('#eworkno').prop('readonly', false);
                 $('#eworkno').prop('required', true);
            }
        });
//computer
              $('#comp').change(function () {
            if ($('#comp').val() === 'Yes') {
                $('#compot').prop('readonly', false);
                 $('#compot').prop('required', true);
            }
            else {
                $('#compot').prop('readonly', true);
            }
        });
//section
             $('#secuse').change(function () {
            if ($('#secuse').val() === 'No') {
                $('#secusey').prop('readonly', true);
                 $('#secusen').prop('readonly', false);
                  $('#secusen').prop('required', true);
                
            }
            else {
                $('#secusey').prop('readonly', false);
                 $('#secusey').prop('required', true);
                  $('#secusen').prop('readonly', true);
            }
        });

//test
 $('#testr').change(function () {
            if ($('#testr').val() === 'No') {
                $('#testrn').prop('readonly', false);
                 $('#testrn').prop('required', true);
            }
            else {
                $('#testrn').prop('readonly', true);
            }
        });
 $('#testa').change(function () {
            if ($('#testa').val() === 'No') {
                $('#testan').prop('readonly', false);
                 $('#testan').prop('required', true);
            }
            else {
                $('#testan').prop('readonly', true);
            }
        });

 $('#log').change(function () {
            if ($('#log').val() === 'No') {
                $('#logn').prop('readonly', false);
                 $('#logn').prop('required', true);
            }
            else {
                $('#logn').prop('readonly', true);
            }
        });
        
 $('#aigcar').change(function () {
            if ($('#aigcar').val() === 'Yes') {
                $('#aigcarr').prop('readonly', false);
                 $('#aigcarr').prop('required', true);
            }
            else {
                $('#aigcarr').prop('readonly', true);
            }
        });
  $('#rreplace').change(function () {
            if ($('#rreplace').val() === 'Yes') {
                $('#replacey').prop('disabled', false);
                 $('#replacey').prop('required', true);
                  $('#replacer').prop('readonly', false);
                   $('#replacer').prop('required', true);
              }
            else {
                $('#replacey').prop('disabled', true);
                
                  $('#replacer').prop('readonly', true);
            }
        });

var maxLength = 1500;
$('#efea').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  $('#rchars').text(textlen);
});
var maxLength = 1500;
$('#resh').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  $('#rchars1').text(textlen);
});
var maxLength = 1500;
$('#man').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  $('#rchars2').text(textlen);
});
var maxLength = 300;
$('#searchkey').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  $('#rchars12').text(textlen);
});


      $('#icno').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');});
 
 
   $('#icno').change(function(){
    var icno = $(this).val();
      if((icno.length < 4) || (icno.length>5))
      {
	swal ( "Invalid" ,  "Enter Valid IC No!" ,  "error" );
       $('#icno').val('');
        $('#tit').val(' ');
         $('#email').val(' ');
          $('#uname').val(' ');
           $('#grp').val(''); 
           $('#sec').val('');
           $('#sgrp').val('');
          $('#divs').val('');
           document.getElementById("icno").focus();
    }
    else{
    $.ajax({
     url:'<?=base_url()?>User/userDetails',
     type: 'post',
     data: {icno: icno},
     dataType: 'json',
     success: function(response){
       var len = response.length;
       if(len > 0){
         // Read values
         var tit = response[0].Title;
         var name = response[0].Employee_Name;
         var email = response[0].Official_Email_ID;
         var grp = response[0].Exist_Group;
         var sec = response[0].Exist_Section;
          var sgrp = response[0].Exist_Subgroup;
          var divs = response[0].Exist_Division;
         
	  var uid = 'IGCAR'+ '/'+grp +'/'+sgrp+'/'+divs+'/'+sec+'/';	  
 	 $('#tit').val(tit);
         $('#uname').val(name);
         $('#email').text(name);
         $('#email').val(email);
        $('#grp').val(grp);
      
         $('#sec').val(sec);
         $('#sgrp').val(sgrp);
          $('#divs').val(divs);
          $('#uid').val(uid);
         
 
       }
       
       else{
           
        swal ( "Invalid" ,  "Enter Valid IC No!" ,  "error" );
        $('#icno').val('');
        $('#tit').val('');
         $('#email').val('');
          $('#uname').val('');
           $('#grp').val(''); $('#sec').val('');
           $('#sgrp').val('');
          $('#divs').val('');
           document.getElementById("icno").focus();
       }
 
     }
   });
   }
  });
  
   $('#uid').change(function(){
    var uid = $(this).val();
 
    $.ajax({
     url:'<?=base_url()?>User/userid',
     method: 'post',
     data: {uid: uid},
     dataType: 'json',
     success: function(response){
       var len = response.length;
              if(len > 0){
         // Read values
         swal ( "Invalid" ,  "ID Must be Unique!" ,  "error" );
         $('#uid').val('');
         $('#uid').prop('focus', true);
 
       }
       

       
 
     }
   });
  });

 $('#inicno').change(function(){
    var inicno = $(this).val();
    if((inicno.length < 4) || (inicno.length>5))
      {
	swal ( "Invalid" ,  "Enter Valid IC No!" ,  "error" );
       $('#inname').val('');
        $('#icemail').val(' ');
         $('#icintercom').val(' ');
         
    }
    else{
    $.ajax({
     url:'<?=base_url()?>User/getusername1',
     method: 'post',
     data: {inicno: inicno},
     dataType: 'json',
     success: function(response){
       var len = response.length;
              if(len > 0){
         var tit = response[0].Title;
         var name = response[0].Employee_Name;
         var icemail = response[0].Official_Email_ID;
         var icintercom = response[0].Official_Contact_No;
        var inname = tit +' '+name;
          $('#inname').val(inname);
           $('#icemail').val(icemail);
            $('#icintercom').val(icintercom);
             $('#uid').prop('focus', true);
 
       }
       

       
 
     }
   });
   }
  });
 
 
 });
 </script>
 </body>
</html>