<?php include( 'includes/header.html' );?>
<?php include( 'includes/nav_bar.html' );?>


<div class="col-md-12" style="margin-top:60px;">
		
	<div class="container">
      <div class="row">
       
					<div class="col-sm-6">
                  <table class="table table-striped table-hovered table-bordered">
                    <tbody>
                       <thead><tr class="info"><td colspan="2" ><center><big><b>Personal Details</b></big></center></td></tr></thead>


	 <tr>
	 	<td rowspan="3" style="width: 30%;text-align: center;">
	 	<img style="width: 80%;" src="resources/rguktlogo.png"></td>
	 	<td style="width: 70%;">N150945</td>
	 </tr>
	 <tr>
	 	<td style="width: 70%;">Mutyala Durga Venkata Sai Maneeswar</td>
	 </tr>
	 <tr><td style='width: 70%;'>Male</td>	 			
	 		</tr>
	 
	 <tr>
	 	<td style="width: 30%;"><b>Email</b></td>
	 	<td style="width: 70%;">N150945@rguktn.ac.in</td>
	 </tr>

	 <tr>
	 	<td style="width: 30%;"><b>Phone No</b></td><td style='width: 70%;'>8790042337</td>	 </tr>

	 					</tbody>
	 				</table>
	 			</div>
	 			<div class="col-sm-6">
	 				<table class="table table-striped table-hovered table-bordered">
	 					<tbody>
	 <thead>
	 	<tr class="info">
	 		<td colspan="2" ><center><big><b>Academic Details</b></big></center></td>
	 	</tr>
	 </thead>
	 <tr>
	 	<td><b>Year</b></td><td>E3</td>
	 </tr>
	 <tr>
	 	<td><b>Branch</b></td><td>CSE</td>
	 </tr>
	<tr><td><b>SSC</b></td><td>10</td>	 </tr>
	 <tr>
	 	<td><b>PUC</b></td><td>6.68</td>
	 </tr>
	 <tr>
	 	<td><b>B.Tech</b>(Upto Last SEM)<b></b></td>
	 	<td>4.71</td>
	 </tr>
	 <tr>
	 	<td><b>Active Backlogs</b></td>
	 	<td>11</td>
	 </tr>
                    </tbody>
                  </table>
                  </div>


              </div>
              <div class="col-md-6">
               <div class="card">
                  	<div class="card-body">
                  	<form action="?" method="post" onsubmit="return validatePass()">
		<label for="passwd1">New Password: </label>
		<input type="password" required name="passwd1" id="passwd1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" class="form-control">
		<label for="passwd2">Retype Password: </label>
		<input type="password" required name="passwd2" id="passwd2" class="form-control" >
		<br>
		<center><button type="submit" name="change_passwd" id="change_passwd" value="Change Password" class="btn btn-success text-center">Change Password</button></center>
				</form>
			</div>
		</div>            
	</div>
</div>
							
</div>
<br><br>

<?php include( 'includes/footer.html' );
?>
