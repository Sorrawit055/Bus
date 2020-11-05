<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <?php
$this->load->view('header');
?>
  <div class="container">

  <table class="table">
  <thead class="thead-dark">
	 <center><h2>ตารางขบวนรถ</h2></center>
		<tr>
		
			<th >
			<div class="event_location" align="center">ขบวน</div>
			</th>

			<th >
			<div class="event_location" align="center">สถานี</div>
			</th>

			<th >
			<div class="event_location"  align="center">เวลาออก</div>
			</th>
      
	  <th >
			<div class="event_location"  align="center">ถึง</div>
			</th>
			
			<th >
			<div class="event_location"  align="center">ออก</div>
			</th>
			
			<th >
			<div class="event_location"  align="center">สถานี</div>
			</th>
		
		<th >
			<div class="event_location"  align="center">ถึงเวลา</div>
			</th>

				<th >
			<div class="event_location"  align="center">หมายเหตุ</div>
			</th>
		</tr>
		        <a class="btn btn-primary" href="../Buscontroller/insert" role="button">เพิ่ม</a>

        <?php
	foreach($register->result_array() as $r){
?>
	
    <tr>
				<td><div class="event_location"  align="center"><?php echo $r["bus_id"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["Departurestation"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["Timeout"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["Toaddress"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["Busexit"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["Terminal"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["Totime"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["Notebus"]; ?></td>




           </tr>

    <?php
    }
    ?>
</table>
<?
$conn = null;
?>

</body>


</html>
  </div>
</form>

</div>
<br><br><br><br>