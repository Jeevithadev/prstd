<?php if (isset($_SESSION['currently_logged_in'])<>1) {
    redirect(base_url('Main/'));
} ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Project Student</title>

        <link href="<?php echo base_url('asset/css/menu.css'); ?>" rel="stylesheet">
   <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
 <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('css/sweetalert.css'); ?>" rel="stylesheet">
   
 
   <script src="<?php echo base_url('css/jquery.min.js'); ?>"></script>
  <script src ="<?php echo base_url('css/bootstrap.min.js'); ?>"> </script>

  <script src = "<?php echo base_url('css/sweetalert.min.js'); ?>"></script>
  <script src="<?php echo base_url('css/js/jquery.min.js'); ?>"></script>
        
        
<style>

.header {
  width: 100%;
  height: 75px;
  background: #17141d;
  opacity: 0.95;
  overflow: hidden;
  -webkit-box-shadow: #333 1px 3px 4px;
  -moz-box-shadow: #333 1px 3px 4px;
  box-shadow: #333 1px 3px 4px;
}

.content {
  width: 100%;
  height: calc(100% - 75px);
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #9387ab;
}
svg.line-top {
  width: 100%;
  background-color: #17141d;
}
svg.line-bottom {
  width: 100%;
}
.menu {
  margin: 0 auto;
}
ul {
  padding: 0;
  margin: 0;
}

ul li{
  margin: 10px;
  padding: 10px 0 10px 0;
  height: 10px;
  text-align: center;
  text-decoration: none;
  color: white;
  cursor: pointer;
  display: inline-block;
  letter-spacing: 3.5px;
  transition: all 0.5s ease-out;
}

li.active {
  color: orange;
  transform: scale(1.1);
}

polygon {
  stroke-width: 2px;
  stroke: orange;
  fill: orange;
}
        </style>
    </head>
    <body>
    <?php 
        
        $name = $this->session->all_userdata();
         $id1 = $name['role'];
     
        
         ?>

<table width = 100%  align="center"  style=" background: rgb(152,45,204);
background: linear-gradient(90deg, rgba(152,45,204,1) 0%, rgba(0,185,255,1) 100%); ">
     <tr><td>&nbsp; </td></tr>
     
     <tr style="font-family: sans-serif; color: #ffffff; font-weight:  bold;  text-align: center; font-size:30px;">
      <td colspan="3"> Project Students  Application Screening and Processing System </td> </tr> 
     <tr  style=" font-family: monospace; color:#ddffdd;  font-style: italic; font-weight:  bold;  font-size: larger"><td><br>Welcome <?php echo $name['username'].'!';?></td>
             
         <td width = 80%>&nbsp;</td>
            <td align="right"><a class="btn btn-danger align-left" href="<?=base_url().'Project/logout';?>">Logout</a></td> 
     </tr>
          
    </table>
<div class="header">
 <div class="menu" style=" font-family: sans-serif;">
  <svg class="line-top" width="750" viewbox="0,0 1000,20">
   <line
    class="line-dash"
    x1="0"
    y1="15"
    x2="100"
    y2="15"
    style="stroke: orange; stroke-width:2; stroke-linecap:round; stroke-dasharray: 180,1200; stroke-dashoffset: -35;"
   />
  </svg>
  <ul>
   <li><a style=" font-size: 16px; font-weight:  bold"
             href="<?php echo base_url('project/');?>">Home 
              </a></li>
   <li><a style=" font-size: 16px; font-weight:  bold"
                 href="<?php echo base_url('project/create');?>">  New Request 
              </a></li>
   <li><a  style=" font-size: 16px; font-weight: 
         bold" href="<?php echo base_url('project/showstud') ?>"> 
            Alter   details
        </a></li>
   <li><a  style=" font-size: 16px; font-weight: 
         bold" href="<?php echo base_url('project/screen') ?>"> 
            Screening   details
        </a></li>
    <li><?php 
      if($id1=='ADMIN')
      {?>
      <a style=" font-size: 16px; font-weight:  bold" href="<?php echo base_url('project/report');?>"> 
            Report
      </a> 
     <?php }?></li>
  </ul>
  <svg class="line-bottom" width="750" height="30" viewbox="0,0 1000,40">
   <polygon class="lb" points="35,53 115,53 125,43 135,53 215,53" />
   <polygon class="lb" points="285,53 365,53 375,43 385,53 465,53" />

   <polygon class="lb" points="535,53 615,53 625,43 635,53 715,53" />

   <polygon class="lb" points="785,53 865,53 875,43 885,53 965,53" />
  </svg>
 </div>
</div>
<div class="container-fluid">

<script>
    const lis = document.querySelectorAll("li");
const lbs = document.querySelectorAll(".lb");
const ul = document.querySelector("ul");
const lineDash = document.querySelector(".line-dash");


var dashOrigin = -35; //pixels
var selectedLi = -35; //pixels
var speed = 500; //move this many pixels in one second.
var distance = 0;
var time = 0;

// initial animation and class for HOME
TweenLite.to(lbs[0], 0.6, {
          y: -43,
          ease: Bounce.easeOut,
          delay: 1
        });

lis[0].classList.add("active");

//push all the bottom lines down.
function pushDownLb() {
  for(let k = 0; k < lbs.length; ++k)
    TweenLite.to(lbs[k], 0.5, {
          y: 0,
          ease:  Power3.easeOut
        });
}

ul.addEventListener(
  "mouseleave",
  function(e) {
    // to avoid a bug in chrome that sometimes triggers mouseleave on click
    // and the relatedTarget comes up null
    if (e.relatedTarget) {
      distance = Math.abs(dashOrigin - selectedLi);
      time = distance / speed;
      dashOrigin = selectedLi;
      if (time) {
        // overlaping tweens would give a zero time
        TweenLite.to(lineDash, time, {
          strokeDashoffset: selectedLi,
          ease: Bounce.easeOut
        });
      } //if
    } //if
  },
  false
);

for (let i = 0; i < 4; ++i) {
  lis[i].addEventListener("mouseover", function() {
    distance = Math.abs(-250 * i - 35 - dashOrigin);
    time = distance / speed;
    dashOrigin = -250 * i - 35;
    if (time) {
      TweenLite.to(lineDash, time, {
        strokeDashoffset: -250 * i - 35,
        ease: Bounce.easeOut
      });
    } //if
  });

  lis[i].addEventListener("click", function() {
    selectedLi = -250 * i - 35;
    pushDownLb();
    let current = document.getElementsByClassName("active");
    current[0].classList.remove("active");
    lis[i].classList.add("active");
    TweenLite.to(lbs[i], 0.5, {
          y: -43,
          ease: Bounce.easeOut
        });
  });
}
</script>
</body>
</html>