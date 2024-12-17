
<html> 
    <head>
        <title> New </title>
    </head>
    <body>           

<div class="card">
    <div class="card-header">
     <p style=" text-align: center;  font-family: cursive; font-weight:  bold; font-size: 20px;">   Alter Equipments details 
     </p>  </div>


    <div class="card-body ">
        <?php if ($this->session->flashdata('errors')) {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
        <form action="<?php echo base_url('aprove/update/' . $project->id);?>" method="POST">
            <input type="hidden" name="_method" value="PUT">
           
     <BR> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="2" face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#FF0000">  Fill the *  mandatory fields</font>
<div class="form-row">
    <div class="form-group col-md-12">
 <h5 style="font-family:'Book Antiqua'; font-size:18px;  background-color:#3399CC; color:#FFFFFF; height:30px;  vertical-align:middle">Personal Details </h5> </div>
 </div>        
            
            <div class="form-row">
    <div class="form-group col-md-3 autocomplete">
     <label for="icno">IC No:*</label>
     
     <input type="text"  required="required" class="form-control " id="icno"  
            name="icno" placeholder="IC.No" value="<?php echo $project->icno;?>" onKeyUp="GetDetail(this.value)" >
    </div>
    <div class="form-group col-md-3">
      <label for="tit">Title</label>
      <input type="text" class="form-control" id="tit" name="tit" value="<?php echo $project->tit;?>">
    </div>
	<div class="form-group col-md-3">
      <label for="uname">Name</label>
      <input type="text" class="form-control" id="uname" name="uname"  value="<?php echo $project->uname;?>" placeholder="">
    </div>
             
             
	<div class="form-group col-md-3">
      <label for="grp">Group</label>
      <input type="text" class="form-control" id="grp" name="grp" value="<?php echo $project->grp;?>">
    </div>
  </div>
     
      <div class="form-row">
    <div class="form-group col-md-3">
      <label for="sgrp">Sub_group:</label>
      <input type="text" class="form-control" id="sgrp" name="sgrp" value="<?php echo $project->sgrp;?>">
    </div>
    <div class="form-group col-md-3">
      <label for="divs">Division:</label>
      <input type="text" class="form-control" id="divs"  name="divs" value="<?php echo $project->divs;?>">
    </div>
	<div class="form-group col-md-3">
      <label for="sec">Section:</label>
      <input type="text" class="form-control" id="sec" name="sec"  value="<?php echo $project->sec;?>">
    </div>
	<div class="form-group col-md-3">
      <label for="email">E-mail:</label>
      <input type="text" class="form-control" id="email"  name="email" value="<?php echo $project->email;?>">
    </div>
  </div> 
     
     <div class="form-row">
    <div class="form-group col-md-12">
 <h5 style="font-family:'Book Antiqua'; font-size:18px;  background-color:#3399CC; color:#FFFFFF; height:30px; vertical-align:bottom; vertical-align:middle">Equipment Details (Non - Technical) </h5> </div>
 </div>

 	 <div class="form-row">
    <div class="form-group col-md-3">
     <label for="uid">Unique ID of the system :*<br/><i style="font-size:10px">IGCAR/Group/Sub Group/Division/Section/Eqp/(SI.No)</i></label>
      <input type="text"  required="required" class="form-control" id="uid"
             name="uid" value="<?php echo $project->uid;?>">
    </div>
    <div class="form-group col-md-3">
      <label for="tyre"> <br/>Type of Resource :* </label>
      <select id="tyre" name="tyre" class="form-control" required="required">
          <?php $sel1 =  $project->tyre;
          if ($sel1=='Hardware'){?>
          <option value="">Choose...</option>
          <option value="Hardware" selected="">Hardware</option>
         <option value="Software">Software</option>
          <?php } else {?>
            <option value="">Choose...</option>
          <option value="Hardware" >Hardware</option>
          <option value="Software" selected="">Software</option> 
         
         <?php }?>
      </select>
    </div>
	<div class="form-group col-md-4">
      <label for="ename"><br/>Name of the equipment / system : *</label>
      <input type="text"  required="required" class="form-control" id="ename" name="ename"
             placeholder="" value="<?php echo $project->ename;?>">
    </div>
	<div class="form-group col-md-2">
      <label for="po"><br/>PO No: *</label>
      <input type="text" required="required"  class="form-control" id="po" name="po" 
             placeholder="" value="<?php echo $project->po;?>">
    </div>
  </div>
  
  
   <div class="form-row">
    <div class="form-group col-md-2">
      <label for="edate"> <br>Date :</label>
	  
      <input type="date" class="form-control" id="edate" name="edate"  value="<?php echo  $project->edate;?>">
    </div>
    <div class="form-group col-md-2">
      <label for="val"><br>Value:*</label>
      <input type="text" class="form-control" id="val" 
             name="val" value="<?php echo $project->val;?>" required="required" >
    </div>
	<div class="form-group col-md-4">
      <label for="capno"><br>IGCAR Stores Capital equipment No if any :</label>
      <input type="text" class="form-control" id="capno" name="capno" value="<?php echo $project->capno;?>">
    </div>
	<div class="form-group col-md-4">
      <label for="tval">Total value of the equipment / system including<br/> Retrofitting Cost, if any. :</label>
      <input type="text" class="form-control" id="tval"  name="tval"  value="<?php echo $project->tval;?>" placeholder="in Lakhs">
    </div>
       </div>
  
  
  
   <div class="form-row">
		<div class="form-group col-md-3">
      <label for="ework"><br/>Is the equipment in working condition?:* </label>
      <select id="ework" name="ework" class="form-control" required="required">
          
          <?php $sel =  $project->ework;
          if ($sel=='Yes'){?>
          <option value="">Choose...</option>
          <option value="Yes" selected="">Yes</option>
         <option value="No">No</option>
          <?php } else {?>
            <option value="">Choose...</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="">No</option>  
         
         <?php }?>
      </select>
    </div>
	
    <div class="form-group col-md-5">
      <label for="eworkno">If no, how long the equipment/system is non-functional and what measures are taken to repair/replace/discard the equipment/system?</label>
	  
      <input type="text" class="form-control" id="eworkno" value="<?php echo $project->eworkno;?>"  name="eworkno" placeholder="">
    </div>
       
   
	<div class="form-group col-md-4">
      <label for="eloc">Location of the equipment/system: <br/> Room No & Building Name/No. :*</label>
      <input type="text" required="required" class="form-control" id="eloc" name="eloc" 
             value="<?php echo $project->eloc;?>"  placeholder="Room No: 419, HBB">
    </div>
	
        </div>
             <div class="form-row">
                  <div class="form-group col-md-3">
      <label for="amc">Is the equipment under AMC?:*</label>
      <select id="amc" name="amc1" class="form-control" required="required">
          <?php $sea =  $project->amc1;
          if ($sea=='Yes'){?>
          <option value="">Choose...</option>
          <option value="Yes" selected="">Yes</option>
         <option value="No">No</option>
          <?php } else {?>
            <option value="">Choose...</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="">No</option>  
         
         <?php }?>
      </select>
    </div>
             <div class="form-group col-md-2">
      <label  for="inicno">Officer-in-charge IC NO:*</label>
      <input type="text" required="required" class="form-control" id="inicno" 
             value="<?php echo $project->inicno;?>" name="inicno" placeholder="">
    </div>
	<div class="form-group col-md-3">
      <label for="inname">Officer-in-charge Name: </label>
      <input type="text"  required="required" class="form-control"
             value="<?php echo $project->inname;?>" id="inname" readonly="readonly"  name="inname" placeholder="">
    </div>
	<div class="form-group col-md-2">
      <label for="icemail"> Officer-in-charge Email: </label>
      <input type="text"  required="required" class="form-control" id="icemail" 
             value="<?php echo $project->icemail;?>" name="icemail" readonly="readonly" placeholder="">
    </div>
	
                 <div class="form-group col-md-2">
      <label for="icintercom">Officer-in-charge Intercom*: </label>
      <input type="text"  required="required" class="form-control"  value="<?php echo $project->icintercom;?>" id="icintercom"  name="icintercom" placeholder="">
    </div>
      		
	</div>
  <div class="form-row">
    <div class="form-group col-md-12">
 <h5 style="font-family:'Book Antiqua'; font-size:18px;  background-color:#3399CC; color:#FFFFFF; height:30px; vertical-align:bottom; vertical-align:middle">Equipment Details (Technical) </h5> </div>
 </div>
  
  
 	 <div class="form-row">
    <div class="form-group col-md-6">
     <label for="efea">Salient features of the equipment/ system:(200 words) (in bullets)*</label>
     <textarea class="form-control" id="efea" name="efea"  maxlength="1500" 
               rows="4" required="required" > <?php echo $project->efea;?>   </textarea>
    </div>
	<div class="form-group col-md-6">
     <label for="searchkey">Purpose of the equipment/system :(500 Characters)(in Keywords)*</label>
     <textarea class="form-control" id="searchkey" name="searchkey" maxlength="500" rows="4" required="required" placeholder="carbon analysis , temperature meseruments">
         <?php echo $project->searchkey;?>
     </textarea>
   
     

    </div>
              </div>
  
   <div class="form-row">
             
    <div class="form-group col-md-6">
     <label for="resh">Research Themes around the equipment/system :(200 words) (in bullets)*</label>
     <textarea class="form-control" id="resh" name="resh" maxlength="1500" rows="4" required="required">
         <?php echo $project->resh;?>
     </textarea>
    </div>
  
    <div class="form-group col-md-6">
     <label for="man">Qualification/Expertise of manpower required to run the equipment/system:(200 words)*</label>
     <textarea class="form-control" id="man" name="man"  maxlength="1500" rows="4" required="required" >
         <?php echo $project->man;?>
     </textarea>
    </div>
	</div>
  
   <div class="form-row">
    <div class="form-group col-md-4">
     <label for="etime">Typical time for carrying out one experiment including preparation/and data acquisition: *</label>
     <input type="text" required="required" class="form-control" id="etime" name="etime"
            value="<?php echo $project->etime;?>" placeholder="in Hrs" size="1">
    </div>
	 <div class="form-group col-md-3">
     <label for="comp">Is data analysis also done in the computer attached to the equipment/ system?*</label>
     <select id="comp" name="comp" class="form-control" required="required">
          <?php $comp =  $project->comp;
          if ($comp=='Yes'){?>
          <option value="">Choose...</option>
          <option value="Yes" selected="">Yes</option>
         <option value="No">No</option>
          <?php } else {?>
            <option value="">Choose...</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="">No</option>  
         
         <?php }?>
      </select>
    </div>
		 <div class="form-group col-md-5">
     <label for="compot">If yes, can the data analysis be deployed in other computers and how? </label>
     <textarea class="form-control" id="compot"  name="compot" maxlength="500" rows="2"  >
         <?php echo $project->compot;?>
     </textarea>
    </div>
  </div>
  
    <div class="form-row">
    <div class="form-group col-md-12">
 <h5 style="font-family:'Book Antiqua'; font-size:18px;  background-color:#3399CC; color:#FFFFFF; height:30px; vertical-align:bottom; vertical-align:middle">Utilization of the equipment /system  </h5> </div>
 </div>

 
 	 <div class="form-row">
    <div class="form-group col-md-3">
     <label for="ndays">Number of days the equipment/system is used in a month. : *</label>
     <input type="text"  required="required" class="form-control" id="ndays" name="ndays"
            value="<?php echo $project->ndays;?>" placeholder="days per month">
    </div>
    <div class="form-group col-md-2">
      <label for="nexp"> Number of experiments carried out per month. : *</label>
      <input type="text" required="required" class="form-control" id="nexp" name="nexp" 
             value="<?php echo $project->nexp;?>" placeholder="10">
    </div>
	<div class="form-group col-md-4">
      <label for="nnexp">If the equipment / system is not used for more than half of the month, please mention the reasons thereof.*</label>
      <input type="text" class="form-control" id="nnexp" name="nnexp" value=" <?php echo $project->nnexp;?>" placeholder="">
    </div>
	<div class="form-group col-md-3">
      <label for="secuse">Is the equipment / system used exclusively for your Section only? * </label>
      <select id="secuse" name="secuse" class="form-control" required="required">
           <?php $secuse =  $project->secuse;
          if ($secuse=='Yes'){?>
          <option value="">Choose...</option>
          <option value="Yes" selected="">Yes</option>
         <option value="No">No</option>
          <?php } else {?>
            <option value="">Choose...</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="">No</option>  
         
         <?php }?>
      </select>
    </div>
	
  </div>
  
  <div class="form-row" >
      
      <div class="form-group col-md-3">
      <label for="secusey"><br/>If yes, please give the limiting factors.:</label>
      <textarea class="form-control" id="secusey"  name="secusey" maxlength="500" rows="2"> <?php echo $project->secusey;?></textarea>
      
    </div>
      
      
   <div class="form-group col-md-4">
     <label for="secusen">If no, please mention the name of outside user Section / Division / Group: </label>
     <textarea class="form-control" id="secusen"  name="secusen" maxlength="500" rows="2"> <?php echo $project->secusen;?></textarea>
    </div>
	<div class="form-group col-md-5">
     <label for="useage">If the equipment / system can be shared with outside user Section/ Division/ Group, please indicate how much time can be allotted for such usage.: </label>
     <textarea class="form-control" required="required" id="useage" name="useage"  maxlength="500" rows="2">
         <?php echo $project->useage;?>
     </textarea>
    </div>
       <input type="hidden" class="form-control" id="grp_user"  name="grp_user" value="<?php echo $project->grp_user;?>"  >
  </div>
  
  
  
  <div class="form-row">
    <div class="form-group col-md-12">
 <h5 style="font-family:'Book Antiqua'; font-size:18px;  background-color:#3399CC; color:#FFFFFF; height:30px; vertical-align:bottom; vertical-align:middle">Utilization of the equipment /system  </h5> </div>
 </div>
  
  
 	 <div class="form-row">
    <div class="form-group col-md-3">
     <label for="testr">Is there any job/test request methods followed for the equipment/system? *</label>
     <select id="testr"  name="testr" class="form-control" required="required">
          <?php $sea =  $project->testr;
          if ($sea=='Yes'){?>
          <option value="">Choose...</option>
          <option value="Yes" selected="">Yes</option>
         <option value="No">No</option>
          <?php } else {?>
            <option value="">Choose...</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="">No</option>  
         
         <?php }?>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="testrn"> If no, please give the limiting factors:</label>
      <textarea class="form-control" id="testrn"  name="testrn" maxlength="500" rows="2">
          <?php echo $project->testrn;?>
      </textarea>
    </div>
<div class="form-group col-md-3">
     <label for="testa">Is there any job/test allocation method followed for the equipment/system?*</label>
     <select id="testa" name="testa" class="form-control" required="required">
          <?php $sea =  $project->testa;
          if ($sea=='Yes'){?>
          <option value="">Choose...</option>
          <option value="Yes" selected="">Yes</option>
         <option value="No">No</option>
          <?php } else {?>
            <option value="">Choose...</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="">No</option>  
         
         <?php }?>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="testan"> If no, please give the limiting factors. </label>
      <textarea class="form-control" id="testan" name="testan"  maxlength="500" rows="2">
          <?php echo $project->testan;?>
      </textarea>
    </div>
	
  </div>
  
  
 	 <div class="form-row">
    <div class="form-group col-md-3">
     <label for="log">Is there any log book and record of tests and maintenance of the equipment/ system?*</label>
     <select id="log"  name="log" class="form-control" required="required">
         <?php $sea =  $project->log;
          if ($sea=='Yes'){?>
          <option value="">Choose...</option>
          <option value="Yes" selected="">Yes</option>
         <option value="No">No</option>
          <?php } else {?>
            <option value="">Choose...</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="">No</option>  
         
         <?php }?>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="logn"> If no, please give the limiting factors.</label>
      <textarea class="form-control" id="logn" name="logn"  maxlength="500" rows="2">
          <?php echo $project->logn;?>
      </textarea>
    </div>
<div class="form-group col-md-3">
     <label for="rreplace">Does the equipment / system need replacement / upgradation / augmentation? *</label>
     <select id="rreplace" name="rreplace" class="form-control" required="required">
          <?php $sea =  $project->rreplace;
          if ($sea=='Yes'){?>
          <option value="">Choose...</option>
          <option value="Yes" selected="">Yes</option>
         <option value="No">No</option>
          <?php } else {?>
            <option value="">Choose...</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="">No</option>  
         
         <?php }?>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="replacey"> <br/>If yes, please state the reasons  </label>
      <select id="replacey"  name="replacey" class="form-control" >
          <option value="">Choose...</option>
         <option value="Obsolescence">Obsolescence </option>
           <option value="End of Life">End of Life </option>
		  <option value="Beyond Repair">Beyond Repair  </option>
           <option value="End of Life ">Availability of Better Equipment </option>
      </select>
    </div>
	</div>
  <div class="form-row">
   <div class="form-group col-md-12 offset-md-12">
    <label for="replacer"> Please give the Explanation for the selected reasons.  </label>
    <textarea class="form-control" id="replacer"  name="replacer" maxlength="500" rows="2">
        <?php echo $project->replacer;?>
    </textarea>
    </div>
	 </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-12">
 <h5 style="font-family:'Book Antiqua'; font-size:18px;  background-color:#3399CC; color:#FFFFFF; height:30px; vertical-align:bottom; vertical-align:middle">Contribution of the equipment / system to the Department  </h5> </div>
 </div>
     

  <div class="form-row">
      
      <div class="form-group col-md-6">
    <label for="contri"> Contribution of the equipment/system to the mission of IGCAR/DAE. ( 300 words, in bullets) </label>
    <textarea class="form-control" id="contri" name="contri" maxlength="1800" rows="4" required="required">
        <?php echo $project->contri;?>
    </textarea>
    </div>
  
  
  
    <div class="form-group col-md-6">
     <label for="sugg">Please give suggestions for maximizing the utilization of the equipment/ system.*</label>
     <textarea class="form-control" id="sugg" name="sugg"  maxlength="1500" rows="4" required="required">
         <?php echo $project->sugg;?>
     </textarea>
    </div>
    </div>
      
      <div class="from-row">
   <div class="form-group col-md-3">
      <label for="aigcar"> If there is any such equipment/ system available anywhere else in IGCAR *</label>
      <select id="aigcar" name="aigcar" class="form-control" required="required">
           <?php $sea =  $project->aigcar;
          if ($sea=='Yes'){?>
          <option value="">Choose...</option>
          <option value="Yes" selected="">Yes</option>
         <option value="No">No</option>
          <?php } else {?>
            <option value="">Choose...</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="selected">No</option>  
         
         <?php }?>
      </select>
    </div>
	<div class="form-group col-md-3">
    <label for="aigcarr"> If so give the details:  </label>
    <textarea class="form-control" id="aigcarr" name="aigcarr"  maxlength="500" rows="2">
        <?php echo $project->aigcarr;?>
    </textarea>
    </div>
	  
	 <div class="form-group col-md-2"></div>
       <div class="form-group col-md-2">
           <br><br><br>
           <button type="submit" class="btn btn-success  " style=" border-color:  #000000">Save Details</button>
       </div>
	</div>

       
    
     
    

<script>
 $(document).ready(function () {  
    
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

var maxLength = 800;
$('textarea').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  $('#rchars').text(textlen);
});

      $('#icno').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');});
 
 
   $('#icno').change(function(){
    var icno = $(this).val();
      if((icno.length < 4) || (icno.length>5)){
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
         
		  
 	 $('#tit').val(tit);
         $('#uname').val(name);
         $('#email').text(name);
         $('#email').val(email);
        $('#grp').val(grp);
      
         $('#sec').val(sec);
         $('#sgrp').val(sgrp);
          $('#divs').val(divs);
         
 
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
</script><!-- comment -->
        </form>
    </div></div>
    </body>
</html>
 