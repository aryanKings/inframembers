<html>
<head>
<title>My Profile Infra Members</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
 	<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	    <img class="logo" src="images/logo.png"></img>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
  <ul class="nav navbar-nav navbar-right">
   <li style="margin-top:10px;"><a href="Home.php" class="navbar-btn btn-default btn pull-right"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li style="margin-right:20px;margin-top:12px;" class="navbar-btn  btn pull-right dropdown headerlinks">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span  class="glyphicon glyphicon-user"></span> My Account<span class="caret"></span></a>
      <ul class="dropdown-menu">
        
        <li class="headerlinks_drops"><a  href="ResetPassword.php" >Reset Password</a></li>
        <li class="headerlinks_drops"><a  href="MyProfile.php" >My Profile</a></li>
           <li class="headerlinks_drops"><a  href="Logout.php" >Logout</a></li>                         
      </ul>
    </li>
		
      </ul>
    </div>
  </div>
</nav>
<nav style="margin-top:95px;"  class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="my">
      <ul class="nav nav-pills nav-justified">

	 <li class="dropdown headerlinks">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Works for Sub-contract<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a  href="WorksSubContractView.php" >View Works for Sub-contract</a></li>
        <li class="headerlinks_drops"><a  href="WorksSubContractPost.php" >Post Works for Sub-contract</a></li>                       
      </ul>
    </li>
 <li class="headerlinks"  ><a style=""  href="SubContractors.php" >Sub-Contractors</a></li>
    <li class="headerlinks" ><a style=""  href="MachinerySuppliers.php" >Machinery Suppliers</a></li>
    <li class="headerlinks" ><a style=""  href="MaterialSupplier.php" >Material Supplier</a></li>
    <li class="headerlinks" ><a style=""  href="ManpowerSupplier.php">Manpower Supplier</a></li>
	<li class="headerlinks" ><a style=""  href="OurClients.php">Our Clients</a></li>
	<li class="headerlinks" ><a style=""  href="UserContactus.php">Contact Us</a></li>
  </ul>
    </div>
  </div>
</nav>
  <div class="container" style="">
<div class="col-md-3">
</div>


<div class="col-md-6 ">
    <div class="panel panel-default">
  <center>  <div style="background-color: #EAE9E9;" class="panel-heading"><h3 class="panel-title"><strong>Details</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body">
   <form id="Login-form" action="email3.php" method="post" role="form" >
 <center></center>
		 <center></center>
	<label for="Name">Name*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
     <input type="text" name="Name" id="Name" required="required" class="form-control" placeholder="Enter Name"></input>

  </div>
 
   <label for="Location">Location*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
     <input type="text" name="Location" id="Location" required="required" placeholder="Enter Location" class="form-control" ></input>

  </div>

		<label for="Contactnumber">Contact Number*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
             <input type="text" name="Contactnumber" id="Contactnumber" tabindex="1" oninvalid="InvalidMsg(this);" maxlength="10" oninput="InvalidMsg(this);" required="required" class="form-control" pattern="[0-9]{10}" placeholder="Enter Mobile number" value="">                                       
  </div>
<label for="email">Email address</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input  name= "email1" id="email1" maxlength="50"  class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  type="text" class="form-control"  value="" placeholder="Enter Email Address">                                     
  </div>
  <label for="Access">Access*</label>
   <div style="margin-bottom: 12px" class="input-group">
   <div class="col-md-12">
   <div class="col-md-6">
    <label class="checkbox-inline" for="Access-0">
      <input type="checkbox" name="AccessSubContractors" id="AccessSubContractors" onclick="validateSubContractors()" value="1">
      Sub Contractors
    </label>
    </div>
    <div class="col-md-6">
    <label class="checkbox-inline" for="Access-1">
      <input type="checkbox" name="AccessMachinerySuppliers" id="AccessMachinerySuppliers" onclick="validateMachinerySuppliers()" value="1">
      Machinery Suppliers
    </label>
    </div>
    </div>
     <div class="col-md-12">
     <div class="col-md-6">
    <label class="checkbox-inline" for="Access-2">
      <input type="checkbox" name="AccessMaterialSuppliers" id="AccessMaterialSuppliers" onclick="validateMaterialSuppliers()" value="1">
      Material Supplier
    </label>
    </div>
    <div class="col-md-6">
    <label class="checkbox-inline" for="Access-3">
      <input type="checkbox" name="AccessManpowerSupplier" id="AccessManpowerSupplier" onclick="validateManpowerSupplier()" value="1">
      Manpower Supplier
    </label>
    </div>
  </div>
  </div>

<div id="SubContractors" style="display:none;">
<center><h4>SubContractors</h4></center>
  <label for="SubContractorsSpecialization">Specialization*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
     <input type="text" name="SubContractorsSpecialization" id="SubContractorsSpecialization" placeholder="Enter Specialization"  class="form-control" ></input>

  </div>
<label for="SubContractorsDescription">Description*</label>
  <div style="margin-bottom:6px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <textarea type="text" name="SubContractorsDescription" id="SubContractorsDescription"  placeholder="Enter Work description" class="form-control" ></textarea>

  </div>
  <label for="SubContractorsProfile">Profile*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="file" name="SubContractorsProfile" id="SubContractorsProfile" class="form-control" ></input>

  </div>
</div>
<div id="MachinerySuppliers" style="display:none;">
<center><h4>Machinery Suppliers</h4></center>
  <label for="MachinerySuppliersAvailable">Available Machinery*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
     <input type="text" name="MachinerySuppliersAvailable" id="MachinerySuppliersAvailable"  Placeholder="Enter Available Machinery" class="form-control" ></input>

  </div>
<label for="MachinerySuppliersDescription">Description*</label>
  <div style="margin-bottom:6px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <textarea type="text" name="MachinerySuppliersDescription" id="MachinerySuppliersDescription"  placeholder="Enter Work description" class="form-control" ></textarea>

  </div>
  <label for="MachinerySuppliersProfile">Profile*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="file" name="MachinerySuppliersProfile" id="MachinerySuppliersProfile"  class="form-control" ></input>

  </div>
</div>
<div id="MaterialSuppliers" style="display:none;">
<center><h4>Material Suppliers</h4></center>
  <label for="MaterialSuppliersAvailable">Available Material*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
     <input type="text" name="MaterialSuppliersAvailable" id="MaterialSuppliersAvailable" placeholder="Enter Available Material" class="form-control" ></input>

  </div>
<label for="MaterialSuppliersDescription">Description*</label>
  <div style="margin-bottom:6px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <textarea type="text" name="MaterialSuppliersDescription" id="MaterialSuppliersDescription"  placeholder="Enter Work description" class="form-control" ></textarea>

  </div>
  <label for="MaterialSuppliersProfile">Profile*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="file" name="MaterialSuppliersProfile" id="MaterialSuppliersProfile"  class="form-control" ></input>

  </div>
</div>
<div id="ManpowerSupplier" style="display:none;">
<center><h4>Manpower Suppliers</h4></center>
  <label for="ManpowerSupplierSpecialization">Specialization*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
     <input type="text" name="ManpowerSupplierSpecialization" id="ManpowerSupplierSpecialization" placeholder="Specialization"  class="form-control" ></input>

  </div>
<label for="ManpowerSupplierDescription">Description*</label>
  <div style="margin-bottom:6px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <textarea type="text" name="ManpowerSupplierDescription" id="ManpowerSupplierDescription"  placeholder="Enter Work description" class="form-control" ></textarea>

  </div>
  <label for="ManpowerSupplierProfile">Profile*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="file" name="ManpowerSupplierProfile" id="ManpowerSupplierProfile"  class="form-control" ></input>

  </div>
</div>
 
 <center><button style="margin-bottom: 12px;width:115px;" type="submit" class="btn btn-default">Submit</button></center>
 </div>
</form>
  </div>
</div>
</div>

<footer style="margin-bottom:0px" class="navbar  footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Infra Members</a></p></center>
		</div>
   </footer>
   <script>
   
 function validateSubContractors(){
    var remember = document.getElementById('AccessSubContractors');
    if (remember.checked){
        document.getElementById('SubContractors').style.display='inline';
         document.getElementById("").setAttribute("required","required");
 document.getElementById("").setAttribute("required","required");
    }else{
       document.getElementById('SubContractors').style.display='none';
    }
}
 function validateMachinerySuppliers(){
    var remember = document.getElementById('AccessMachinerySuppliers');
    if (remember.checked){
        document.getElementById('MachinerySuppliers').style.display='inline';
    }else{
       document.getElementById('MachinerySuppliers').style.display='none';
    }
}
 function validateMaterialSuppliers(){
    var remember = document.getElementById('AccessMaterialSuppliers');
    if (remember.checked){
        document.getElementById('MaterialSuppliers').style.display='inline';
    }else{
       document.getElementById('MaterialSuppliers').style.display='none';
    }
}
 function validateManpowerSupplier(){
    var remember = document.getElementById('AccessManpowerSupplier');
    if (remember.checked){
        document.getElementById('ManpowerSupplier').style.display='inline';
    }else{
       document.getElementById('ManpowerSupplier').style.display='none';
    }
}
   </script>
</body>
</html>