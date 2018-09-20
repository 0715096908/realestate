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
								
								<th>Property id</th>
								<th>Property type</th>							
								<th>Property price</th>
								<th>Property Location</th>
								
								
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM houses";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								
								<td><h3><a href="#"><?php echo $row['house_id'] ?></a></h3></td>
								<td><h3><a href="#"><?php echo $row['house_type'] ?></a></h3></td>
								
								<td><a href="#"><?php echo $row['rent_cost'] ?></a></td>
								<td><a href="#"><?php echo $row['location'] ?></a></td>
								
								
							</tr>
							<?php
								}
							?>
						</table>
</div>