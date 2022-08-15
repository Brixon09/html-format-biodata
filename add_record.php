<?php
	
	if(isset($_POST["name"])){
		
		$name = $_POST["name"];
		$Present_Address = $_POST["Present_Address"];
		$Permanent_Address = $_POST["Permanent_Address"];
		$Date_of_Birth = $_POST["Date_of_Birth"];
		$Religion = $_POST["Religion"];
		$Age = $_POST["Age"];
		$Weight = $_POST["Weight"];
		$Height = $_POST["Height"];
		$Civil_Status = $_POST["Civil_Status"];
		$Citizenship = $_POST["Citizenship"];
		$Place_of_Birth = $_POST["Place_of_Birth"];
		$Name_of_Father = $_POST["Name_of_Father"];
		$Name_of_Mother = $_POST["Name_of_Mother"];
		$Address = $_POST["Address"];
		$Languages_of_Dialects_Spoken = $_POST["Languages_of_Dialects_Spoken"];
		$Person_to_be_notified_In_Case_of_Emergency = $_POST["Person_to_be_notified_In_Case_of_Emergency"];
		$Elementary = $_POST["Elementary"];
		$High_School = $_POST["High_School"];
		$College_1 = $_POST["College_1"];
		$College_2 = $_POST["College_2"];
		$Special_Skills = $_POST["Special_Skills"];
		$Year_Graduated1 = $_POST["Year_Graduated1"];
		$Year_Graduated2 = $_POST["Year_Graduated2"];
		$Year_Graduated3 = $_POST["Year_Graduated3"];
		$COMPANY = $_POST["COMPANY"];
		$POSITION_of_employ = $_POST["POSITION_of_employ"];
		$YEAR_END = $_POST["YEAR_END"];
		$one_of_employ = $_POST["one_of_employ"];
		$two_of_employ = $_POST["two_of_employ"];
		$NAME_of_char = $_POST["NAME_of_char"];
		$POSITION_of_char = $_POST["POSITION_of_char"];
		$CONTACT_NO = $_POST["CONTACT_NO"];
		$one_of_char = $_POST["one_of_char"];
		$two_of_char = $_POST["two_of_char"];
		$Applicant = $_POST["Applicant"];


		
		$sql = "INSERT INTO tblsurvey(
										name,
										Present_Address,
										Permanent_Address,
										Date_of_Birth,
										Religion,
										Age,
										Weight,
										Height,
										Civil_Status,
										Citizenship,
										Place_of_Birth,
										Name_of_Father,
										Name_of_Mother,
										Address,
										Languages_of_Dialects_Spoken,
										Person_to_be_notified_In_Case_of_Emergency,
										Elementary,
										High_School,
										College_1,
										College_2,
										Special_Skills,
										Year_Graduated1,
										Year_Graduated2,
										Year_Graduated3,
										COMPANY,
										POSITION_of_employ,
										YEAR_END,
										one_of_employ,
										two_of_employ,
										NAME_of_char,
										POSITION_of_char,
										CONTACT_NO,
										one_of_char,
										two_of_char,
										Applicant
									) VALUES(
										:name,
										:Present_Address,
										:Permanent_Address,
										:Date_of_Birth,
										:Religion,
										:Age,
										:Weight,
										:Height,
										:Civil_Status,
										:Citizenship,
										:Place_of_Birth,
										:Name_of_Father,
										:Name_of_Mother,
										:Address,
										:Languages_of_Dialects_Spoken,
										:Person_to_be_notified_In_Case_of_Emergency,
										:Elementary,
										:High_School,
										:College_1,
										:College_2,
										:Special_Skills,
										:Year_Graduated1,
										:Year_Graduated2,
										:Year_Graduated3,
										:COMPANY,
										:POSITION_of_employ,
										:YEAR_END,
										:one_of_employ,
										:two_of_employ,
										:NAME_of_char,
										:POSITION_of_char,
										:CONTACT_NO,
										:one_of_char,
										:two_of_char,
										:Applicant
									)";
		$values = array(
					":name" => $name,
					":Present_Address" => $Present_Address,
					":Permanent_Address" => $Permanent_Address,
					":Date_of_Birth" => $Date_of_Birth,
					":Religion"=> $Religion,
					":Age" => $Age,
					":Weight" => $Weight,
					":Height" => $Height,
					":Civil_Status" => $Civil_Status,
					":Citizenship" => $Citizenship,
					":Place_of_Birth" => $Place_of_Birth,
					":Name_of_Father" =>$Name_of_Father,
					":Name_of_Mother" => $Name_of_Mother,
					":Address" => $Address,
					":Languages_of_Dialects_Spoken" => $Languages_of_Dialects_Spoken,
					":Person_to_be_notified_In_Case_of_Emergency" => $Person_to_be_notified_In_Case_of_Emergency,
					":Elementary" => $Elementary,
					":High_School" => $High_School,
					":College_1" =>$College_1,
					":College_2" =>$College_2,
					":Special_Skills" =>$Special_Skills,
					":Year_Graduated1" =>$Year_Graduated1,
					":Year_Graduated2" =>$Year_Graduated2,
					":Year_Graduated3" =>$Year_Graduated3,
					":COMPANY" =>$COMPANY,
					":POSITION_of_employ" =>$POSITION_of_employ,
					":YEAR_END" =>$YEAR_END,
					":one_of_employ" =>$one_of_employ,
					":two_of_employ" =>$two_of_employ,
					":NAME_of_char" =>$NAME_of_char,
					":POSITION_of_char" =>$POSITION_of_char,
					":CONTACT_NO" =>$CONTACT_NO,
					":one_of_char" =>$one_of_char,
					":two_of_char" =>$two_of_char,
					":Applicant" =>$Applicant,
		);
		
		include("db_connect.php");
		
		$result = $conn->prepare($sql);
		$result->execute($values);
		
		if($result->rowCount()>0){
			echo "<h3 style= 'display: flex; justify-content: center; align-items: center; font-size: 25px;'>Record has been saved!</h3>";
		} else {
			echo "No record has been saved!";
		}
		
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Fresher Resume</title>
    <style>
  
    </style>
</head>
<body>
<form action = "add_record.php" method = "post">
    <table>
        <tr>
            <td>
                    <!-----  image upload  ----->
                <div class="img">id picture
                    <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">
                </div>
                    <!----- BOIDATA title   -----> 
                <h1>BIODATA</h1>
                Name <span class="name">:</span> <input class="nameput" type="text" name="name" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td>
                Present Address <span>:</span> <input type="text" name="Present_Address" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td>
                Permanent Address <span class="perma">:</span> <input name="Permanent_Address" class="permaput" type="text" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td>
                Date of Birth  <span class="date">:</span> <input name="Date_of_Birth" class="dateput" type="text" placeholder="YYYY-MM-DD">
            </td>
        </tr>
        <tr>
            <td>
                Civil Status <span class="stat">:</span> <input name="Civil_Status" class="statput" type="text" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td>
                Citizenship <span class="citi">:</span> <input name="Citizenship" class="citiput" type="text" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td>
                Place of Birth <span class="place">:</span> <input name="Place_of_Birth" class="placeput" type="text" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td>
                Name of Father <span class="noffather">:</span> <input name="Name_of_Father" class="fatherput" type="text" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td>
                Name of Mother <span class="nofmother">:</span> <input name="Name_of_Mother" class="motherput" type="text" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td>
                Address <span class="address">:</span> <input name="Address" class="addressput" type="text" placeholder=".........................................................................................................................">
            </td>
        </tr>
        <tr>
            <td>
                Languages of Dialects Spoken <span class="Dialects">:</span> <input name="Languages_of_Dialects_Spoken" class="Dialectsput" type="text" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td>
                Person to be notified In Case of Emergency <span class="notified">:</span> <input name="Person_to_be_notified_In_Case_of_Emergency" class="notifiedput" type="text" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td class="reliq">
                Religion <span class="reli">:</span> <input name="Religion" type="text" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td class="ages">
                Age <span class="taon">:</span> <input class="taonput" name="Age" type="text" placeholder=".....................................................................">
            </td>
        </tr>
        <tr>
            <td class="weight">
                Weight <span class="timbang">:</span> <input class="timbangput" name="Weight" type="text" placeholder="kg">
            </td>
        </tr>
        <tr>
            <td class="height">
                Height <span class="tangkad">:</span> <input class="tangkadput" name="Height" type="text" placeholder="Centimeter">
            </td>
        </tr>
        <tr>

        <!-----  Educational Background  ----->
            <td class="educ">
                Educational Background
            </td>
        </tr>
        <tr>
            <td class="elem">
                Elementary <span class="eleme">:</span> <input name="Elementary" class="elemput" type="text" placeholder=".........................................................................................................">
            </td>
        </tr>
        <tr>
            <td class="hschool">
                High School <span class="hsch">:</span> <input name="High_School" class="hschput" type="text" placeholder=".........................................................................................................">
            </td>
        </tr>
        <tr>
            <td class="college1">
                College <span class="college11">:</span> <input name="College_1" class="college111" type="text" placeholder=".........................................................................................................">
            </td>
        </tr>
        <tr>
            <td class="college2">
                College <span class="college22">:</span> <input name="College_2" class="college222" type="text" placeholder=".........................................................................................................">
            </td>
        </tr>
        <tr>
            <td class="special1">
                Special Skills <span class="special2">:</span> <input name="Special_Skills" class="special" type="text" placeholder=".........................................................................................................">
            </td>
        </tr>
        <tr>
            <td class="Graduated">
                Year Graduated <span class="Graduated1">:</span> <input name="Year_Graduated1" class="Graduatedput" type="text" placeholder="...................................................">
            </td>
        </tr>
        <tr>
            <td class="Graduated2">
                Year Graduated <span class="Graduated22">:</span> <input name="Year_Graduated2" class="Graduatedput2" type="text" placeholder="...................................................">
            </td>
        </tr>
        <tr>
            <td class="Graduated3">
                Year Graduated <span class="Graduated33">:</span> <input name="Year_Graduated3" class="Graduatedput3" type="text" placeholder="...................................................">
            </td>
        </tr>
        <tr>
            <!-- Record -->
            <td class="Record">
                Employment Record:
            </td>
        </tr>
        <tr>
            <td class="Company">
                Company: <input name="COMPANY" class="Companyput" type="text" placeholder=".............................................................................................">
            </td>
        </tr>
        <tr>
            <td class="Position">
                Position: <input name="POSITION_of_employ" class="Positionput" type="text" placeholder="...............................................................................">
            </td>
        </tr>
        <tr>
            <td class="year">
                Year End: <input name="YEAR_END" class="yearput" type="text" placeholder=".............................................................">
            </td>
        </tr>
        <tr>
            <td class="number1">
                1.<input class="numb1" name="one_of_employ" type="text" placeholder="....................................................................">
            </td>
        </tr>
        <tr>
            <td class="number2">
                2.<input class="numb2" name="two_of_employ" type="text" placeholder="....................................................................">
            </td>
        </tr>
            <!-- Character references -->
            <td class="References">
                Character References:
            </td>
        </tr>
        <tr>
            <td class="refename">
                Name: <input class="refenameput" name="NAME_of_char" type="text" placeholder=".............................................................................................">
            </td>
        </tr>
        <tr>
            <td class="refetion">
                Position: <input class="repositionput" name="POSITION_of_char" type="text" placeholder="...............................................................................">
            </td>
        </tr>
        <tr>
            <td class="cantact">
                Contact NO: <input class="contput" name="CONTACT_NO" type="text" placeholder="...............................................................................">
            </td>
        </tr>
        <td class="number1">
            1.<input class="numb1" type="text" name="one_of_char" placeholder="....................................................................">
        </td>
    </tr>
    <tr>
        <td class="number2">
            2.<input class="numb2" type="text" name="two_of_char" placeholder="....................................................................">
        </td>
    </tr>
    <tr>
        <td class="signature"><h3> Applicant</h3> 
            <input style="text-align: center;" class="signa" type="text" name="Applicant" placeholder="___________________________">
        </td>
    </tr>
    <tr>
		<td colspan = "2" align = "left">
			<input class="submit"  name= "submit" type = "submit" value = "Save">
		</td>
	</tr>
    </table>
</form>
</body>
</html>