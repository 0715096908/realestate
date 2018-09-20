<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">
<?php
include '../includes/config.php';
?>		
<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>								
								<th>Student_id</th>								
								<th>Name</th>
								<th>Email</th>
								<th>IDNo</th>								
								<th>PhoneNo</th>
								<th>Gender</th>
								
								
								
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT user_id,fname,email,id_no,phone,gender 
										FROM user";
								$result = mysqli_query($conn,$select) or die(mysqli_error($conn));
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								
								<td><h3><a href="#"><?php echo $row['user_id'] ?></a></h3></td>								
								<td><a href="#"><?php echo $row['fname'] ?></a></td>
								<td><a href="#"><?php echo $row['email'] ?></a></td>
								<td><a href="#"><?php echo $row['id_no'] ?></a></td>	
								<td><a href="#"><?php echo $row['phone'] ?></a></td>
								<td><a href="#"><?php echo $row['gender'] ?></a></td>	
								
									
                   								
								</tr>
							<?php
								}
							?>
						</table>
</div>