<?php
	include("db_connect.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Student List</title>
		<style>
	:root{
  --white-color: #fff;
  --dark-color: #222;
  --body-bg-color: #fff;
  --section-bg-color: black;
  --navigation-item-hover-color: #3b5378;

  --text-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
  --box-shadow: 0 5px 25px rgb(0 0 0 / 20%);

  --scroll-bar-color: #fff;
  --scroll-thumb-color: rgba(0, 0, 0, 0.678);
  --scroll-thumb-hover-color: #454f6b;
}

/*======= Scroll bar =======*/
::-webkit-scrollbar{
  width: 11px;
  background: var(--scroll-bar-color);
}

::-webkit-scrollbar-thumb{
  width: 100%;
  background: var(--scroll-thumb-color);
  border-radius: 2em;
}

::-webkit-scrollbar-thumb:hover{
  background: var(--scroll-thumb-hover-color);
}
* {
  font-family: sans-serif;
}
body{
	margin: 150px 0;
	background: #F7ECDE;
	font-family: arial, sans-serif;
	width: 100%;
}
			
/*======= Header =======*/
header{
  z-index: 999;
  position: fixed;
  width: 100%;
  height: calc(5rem + 1rem);
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  transition: 0.5s ease;
  background: #CFE8A9;
  transition-property: height, background;
}
header.sticky{
  height: calc(2.5rem + 1rem);
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

header .nav-bar{
  position: relative;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 100px;
  transition: 0.3s ease;
}


.nav-bar .logo{
  color: black;
  font-size: 2.2em;
  font-weight: 800;
  letter-spacing: 2px;
  text-decoration: none;
  text-shadow: var(--text-shadow);
  background: none;
}

.navigation .nav-items a{
  color: black;
  font-size: 1.2em;
  text-decoration: none;
  text-shadow: var(--text-shadow);
  padding: 10px;
  background: #7DCE13;
  backdrop-filter: blur(10px);
  border-radius: 3px;
  font-weight: 700;
}
.nav-items a:hover{
  background: #5BB318;
  backdrop-filter: blur(10px);
  transition: .3s;
  color: crimson;
}

.navigation .nav-items a span{
  padding: 7px;

}
.navigation .nav-items a i{
  display: none;
}

.navigation .nav-items a:not(:last-child){
  margin-right: 45px;
}
			a{
				margin: -300px 0;
				text-decoration: none;
				color: black;
				background: #59CE8F;
				padding: 10px;
				border-radius: 2px;
				transition: 0.3s;
				
			}
			a:hover{
				text-decoration: underline;
				transition: 0.3s;
				background: #7DCE13;
			}


			/* brow */

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;

  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}
.content-table th,
.content-table td {
  padding: 12px 15px;
  border: .3px solid;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
.addrec{
	opacity: 1;
}
span{
	opacity: 0;
}
		</style>
	</head>
	<body>
	<header>
    <div class="nav-bar">
      <a href="#" class="logo">List of Students</a>
      <div class="navigation">
        <div class="nav-items">
          <i class="uil uil-times nav-close-btn"></i>
          <a href="add_record.php"><i class="uil uil-home"></i> <span class="addrec">Add Records</span> </a>
        </div>
      </div>
    </div>
  </header>
		<table class="content-table">
			<thead>
				<tr>
					
					<th>ID</th>
					<th><span>_____________</span>Name<span>_____________</span></th>
					<th><span>_____________</span>Present<span>_</span>Address<span>_____________</span></th>
					<th><span>_____________</span>Permanent<span>_</span>Address<span>_____________</span></th>
					<th>Date<span>_</span>of<span>_</span>Birth </th>
					<th><span>______</span>Religion<span>_______</span></th>
					<th>Age </th>
					<th>Weight</th>
					<th>Height</th>
					<th>Civil<span>_</span>Status </th>
					<th>Citizenship</th>
					<th>Place<span>_</span>of<span>_</span>Birth </th>
					<th><span>_________</span>Name<span>_</span>of<span>_</span>Father<span>_________</span></th>
					<th><span>_________</span>Name<span>_</span>of<span>_</span>Mother<span>_________</span></th>
					<th><span>________________</span>Address<span>________________</span> </th>
					<th>Languages<span>_</span>of<span>_</span>Dialects_Spoken </th>
					<th>Person<span>_</span>to<span>_</span>be<span>_</span>notified<span>_</span>In<span>_</span>Case<span>_</span>of<span>_</span>Emergency </th>
					<th><span>_____________</span>Elementary<span>_____________</span></th>
					<th><span>_________</span>High<span>_</span>School<span>_________</span></th>
					<th><span>_____________</span>College<span>_____________</span> </th>
					<th><span>_____________</span>College<span>_____________</span> </th>
					<th><span>_______</span>Special<span>_</span>Skills<span>_______</span></th>
					<th>Year<span>_</span>Graduated<span>_</span>Elementary</th>
					<th>Year<span>_</span>Graduated<span>_</span>High<span>_</span>School</th>
					<th>Year<span>_</span>Graduated<span>_</span>College</th>
					<th>COMPANY</th>
					<th>POSITION</th>
					<th>YEAR<span>_</span>END</th>
					<th><span>_____________</span>1.<span>_____________</span></th>
					<th><span>_____________</span>2.<span>_____________</span></th>
					<th><span>______</span>NAME<span>______</span></th>
					<th>POSITION</th>
					<th>CONTACT<span>_</span>NO</th>
					<th><span>_____________</span>1.<span>_____________</span></th>
					<th><span>_____________</span>2.<span>_____________</span></th>
					<th><span>_____________</span>Applicant<span>_____________</span></th>
				</tr>
		</thead>
			<tbody>
				
				<?php
					
					$sql = "SELECT * FROM tblsurvey";
					
					try {
						
						$result = $conn->prepare($sql);
						$result->execute();
						
						if($result->rowCount()>0){
							$i = 1;
							while($row = $result->fetch(PDO::FETCH_ASSOC)){
								echo "<tr>
									<td style='text-align: center;'>" . $i . "</td>
									<td style='text-align: center;'>" . $row["name"] . "</td>
									<td style='text-align: center;'>" . $row["Present_Address"] . "</td>
									<td style='text-align: center;'>" . $row["Permanent_Address"] . "</td>
									<td style='text-align: center;'>" . $row["Date_of_Birth"] . "</td>
									<td style='text-align: center;'>" . $row["Religion"] . "</td>
									<td style='text-align: center;'>" . $row["Age"] . "</td>
									<td style='text-align: center;'>" . $row["Weight"] . "</td>
									<td style='text-align: center;'>" . $row["Height"] . "</td>
									<td style='text-align: center;'>" . $row["Civil_Status"] . "</td>
									<td style='text-align: center;'>" . $row["Citizenship"] . "</td>
									<td style='text-align: center;'>" . $row["Place_of_Birth"] . "</td>
									<td style='text-align: center;'>" . $row["Name_of_Father"] . "</td>
									<td style='text-align: center;'>" . $row["Name_of_Mother"] . "</td>
									<td style='text-align: center;'>" . $row["Address"] . "</td>
									<td style='text-align: center;'>" . $row["Languages_of_Dialects_Spoken"] . "</td>
									<td style='text-align: center;'>" . $row["Person_to_be_notified_In_Case_of_Emergency"] . "</td>
									<td style='text-align: center;'>" . $row["Elementary"] . "</td>
									<td style='text-align: center;'>" . $row["High_School"] . "</td>
									<td style='text-align: center;'>" . $row["College_1"] . "</td>
									<td style='text-align: center;'>" . $row["College_2"] . "</td>
									<td style='text-align: center;'>" . $row["Special_Skills"] . "</td>
									<td style='text-align: center;'>" . $row["Year_Graduated1"] . "</td>
									<td style='text-align: center;'>" . $row["Year_Graduated2"] . "</td>
									<td style='text-align: center;'>" . $row["Year_Graduated3"] . "</td>
									<td style='text-align: center;'>" . $row["COMPANY"] . "</td>
									<td style='text-align: center;'>" . $row["POSITION_of_employ"] . "</td>
									<td style='text-align: center;'>" . $row["YEAR_END"] . "</td>
									<td style='text-align: center;'>" . $row["one_of_employ"] . "</td>
									<td style='text-align: center;'>" . $row["two_of_employ"] . "</td>
									<td style='text-align: center;'>" . $row["NAME_of_char"] . "</td>
									<td style='text-align: center;'>" . $row["POSITION_of_char"] . "</td>
									<td style='text-align: center;'>" . $row["CONTACT_NO"] . "</td>
									<td style='text-align: center;'>" . $row["one_of_char"] . "</td>
									<td style='text-align: center;'>" . $row["two_of_char"] . "</td>
									<td style='text-align: center;'>" . $row["Applicant"] . "</td>
								</tr>";
								$i++;
							}
							echo "<tr>
									<td colspan = '36'>Nothing Follows.</td>
								</tr>";
							
						} else {
							echo "<tr>
									<td colspan = '36'>No records found.</td>
								</tr>";
						}
					
					} catch(Exception $e){
						echo "Unexpected error has been occurred!" . $e->getMessage();
					}
				?>
				
			</tbody>
		</table>
	</body>
</html>