<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HIGH SCHOOL DXD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <style >
  	tr{
    border-bottom: 1px solid #d6d6d6;
		}
  </style>
</head>
<body>
 <?php
 $conn =mysql_connect("localhost","root","root") or die(mysql_error());
 mysql_select_db("student_mysql");
 mysql_query("SET NAMES tis620;");
 ?>
     <div data-role="page"id="index">
			    <!--Panel-->
			   <div data-role="panel" id="mypanel" data-display="reveal" >
					 		<ul data-role="listview">
					 		 <li><a href="#mainop">หน้าหลัก</a></li>
							 <li><a href="#pageAcitivity">คะเเนนความประพฤติ</a></li>
							 <li><a href="#pageGpa">ผลการเรียน</a></li>
							 <li><a href="#phoneNum">เบอร์โทรติดคุณครู</a></li>
					 		</ul>
			   </div>

         <div data-role="header">
					 <h1>INFORMATION</h1>
          <a href="#mypanel" class="ui-bit-left" data-icon="grid">Menu</a>
				 </div>

     	<div data-role="main" class="ui-content">

	    </div>
         <div data-role="footer"></div>
	  </div>

		<!--page2-->
	  <div data-role="page" id="pageAcitivity">

			<!--Panel-->
		 <div data-role="panel" id="mypanel" data-display="reveal" >
					<ul data-role="listview">
					 <li><a href="#index">หน้าหลัก</a></li>
					 <li><a href="#pageAcitivity">คะเเนนความประพฤติ</a></li>
					 <li><a href="#pageGpa">ผลการเรียน</a></li>
					 <li><a href="#phoneNum">เบอร์โทรติดคุณครู</a></li>
					</ul>
		 </div>

         <div data-role="header">
					 <h3>คะเเนนความประพฤติ</h3>
          <a href="#mypanel" class="ui-bit-left" data-icon="grid">Menu</a>
				 </div>
     	<div data-role="content">
				<div class="ui-field-contain">
					<label for="select-native-fc">ปีการศึกษาที่</label>
					<select class="select-native-fc" id="select-native-fc">
						<option value="one">ปีการศึกษาที่ 1</option>
						<option value="two">ปีการศึกษาที่ 2</option>
					</select>
				</div>
				<table data-role="table" class="ui-responsive" >
							<thead>
							 <tr>
								 <th>ลำดับที่</th>
								 <th>รายการทำผิดระเบียบ</th>
								 <th>คะเเนนที่ถูกหัก</th>
								 <th>คะเเนนรวม</th>
							 </tr>
							</thead>
							<tbody>
							  <?php 
							   
		$result = mysql_query("SELECT *FROM activity_table;");
							  
       while(list($cont,$list,$edit,$total)=mysql_fetch_row($result)){
								 
							 echo"<tr>" ; 
							echo "<td>$cont</b</td> 
								 <td>$list</br></td>
								 <td>$edit</br></td>
								 <td>$total</br></td>
								 ";
								 
							echo "</tr>";
							  }
							  mysql_free_result($result);
								 ?>
							</tbody>
						 </table>
         <div data-role="footer"></div>
	  </div>

		<!--page ผลการเรียน-->
		<div data-role="page" id="pageGpa">

			<!--Panel-->
		 <div data-role="panel" id="mypanel" data-display="reveal" >
					<ul data-role="listview">
					 <li><a href="#index">หน้าหลัก</a></li>
					 <li><a href="#pageAcitivity">คะเเนนความประพฤติ</a></li>
					 <li><a href="#pageGpa">ผลการเรียน</a></li>
					 <li><a href="#phoneNum">เบอร์โทรติดคุณครู</a></li>
					</ul>
		 </div>
				 <div data-role="header">
					  <h3>ผลการเรียน</h3>
					 	<a href="#mypanel" class="ui-bit-left" data-icon="grid">Menu</a>
				 </div>
			<div data-role="content">
					<div class="ui-field-contain">
						<label for="select-native-fc">ปีการศึกษาที่</label>
						<select class="select-native-fc" id="select-native-fc">
							<option value="one">ปีการศึกษาที่ 1</option>
							<option value="two">ปีการศึกษาที่ 2</option>
						</select>
					</div>

<table data-role="table" class="ui-responsive">
	     <thead>
	     	<tr>
	     		<th>รหัสวิชา</th>
					<th>ชื่อร่ายวิชา</th>
					<th>หน่วยกิต</th>
					<th>เกรด</th>
	     	</tr>
	     </thead>
			 <tbody>
			 	 <?php 
							   
	$result = mysql_query("SELECT * FROM gpa_table;");
	while(list($cont,$list,$edit,$total)=mysql_fetch_row($result)){
								 
							echo"<tr>" ; 
							echo "<td>$cont</b</td> 
								 <td>$list</br></td>
								 <td>$edit</br></td>
								 <td>$total</br></td>
								 ";
								 
							echo "</tr>";
							  }
							    mysql_free_result($result);
					?>
			 </tbody>
	    </table>
			</div>
				 <div data-role="footer"></div>
		</div>


		<!--page PhoneNumber-->
		<div data-role="page" id="phoneNum">

			<!--Panel-->
		 <div data-role="panel" id="mypanel" data-display="reveal" >
					<ul data-role="listview">
					 <li><a href="#index">หน้าหลัก</a></li>
					 <li><a href="#pageAcitivity">คะเเนนความประพฤติ</a></li>
					 <li><a href="#pageGpa">ผลการเรียน</a></li>
					 <li><a href="#phoneNum">เบอร์โทรติดคุณครู</a></li>
					</ul>
		 </div>

				 <div data-role="header">
					  <h3>เบอร์โทรคุณครู</h3>
					 	<a href="#mypanel" class="ui-bit-left" data-icon="grid">Menu</a>
				 </div>
			<div data-role="content">
			   <div data-role="collapsible">
			   	<h4>กลุ่มสาระคณิตศาสตร์</h4>
					<p>เบอร์โทรคุณครู</p>
			   </div>
				 <div data-role="collapsible">
			   	<h4>กลุ่มสาระภาษาไทย</h4>
					<p>เบอร์โทรคุณครู</p>
			   </div>
				 <div data-role="collapsible">
			   	<h4>กลุ่มสาระภาษาต่างประเทศ</h4>
					<p>เบอร์โทรคุณครู</p>
			   </div>
				 <div data-role="collapsible">
			   	<h4>กลุ่มสาระสังคมศึกษาศาสนาเเละวัฒนธรรม</h4>
					<p>เบอร์โทรคุณครู</p>
			   </div>
				 <div data-role="collapsible">
			   	<h4>กลุ่มสาระศิลปะ ดนตรี</h4>
					<p>เบอร์โทรคุณครู</p>
			   </div>
				 <div data-role="collapsible">
			   	<h4>กลุ่มสาระการงานอาชีพเเละเทคโนโลยี</h4>
					<p>เบอร์โทรคุณครู</p>
			   </div>
			</div>
				 <div data-role="footer"></div>
		</div>

</body>
</html>
