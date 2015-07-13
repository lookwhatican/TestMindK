<?php
class Page {

	public function view_all_rows() {
		$db = new Database(HOST, USER, PASS, DB);
		$result = $db->get_all_rows();

		while ($studentInfo = mysql_fetch_array($result)) {
			$nameCell = $studentInfo["name"];
			$lastnameCell = $studentInfo["lastname"];
			$genderCell = $studentInfo["gender"];
			$ageCell = $studentInfo["age"];
			$groupCell = $studentInfo["group"];
			$departmentCell = $studentInfo["department"];
			$studentidCell = $studentInfo["student_id"];

			echo "<tr class='table-row'>";
			echo	"<td class='edit name ".$studentidCell."'>".$nameCell."</td>";
			echo	"<td class='edit lastname ".$studentidCell."'>".$lastnameCell."</td>";
			echo	"<td class='edit gender ".$studentidCell."'>".$genderCell."</td>";
			echo	"<td class='edit age ".$studentidCell."'>".$ageCell."</td>";
			echo	"<td class='edit group ".$studentidCell."'>".$groupCell."</td>";
			echo	"<td class='edit department ".$studentidCell."'>".$departmentCell."</td>";
			echo	"<td><i class='delete-icon'></i></td>";
			echo	"<td class='hidden'>".$studentidCell."</td>";
			echo "</tr>";
		}
	}

	public function view_last_row() {
		$db = new Database(HOST, USER, PASS, DB);
		$result = $db->get_last_row();

		$studentInfo = mysql_fetch_array($result);

		$nameCell = $studentInfo["name"];
		$lastnameCell = $studentInfo["lastname"];
		$genderCell = $studentInfo["gender"];
		$ageCell = $studentInfo["age"];
		$groupCell = $studentInfo["group"];
		$departmentCell = $studentInfo["department"];
		$studentidCell = $studentInfo["student_id"];

		echo "<tr class='table-row'>";
		echo	"<td class='edit name ".$studentidCell."'>".$nameCell."</td>";
		echo	"<td class='edit lastname ".$studentidCell."'>".$lastnameCell."</td>";
		echo	"<td class='edit gender ".$studentidCell."'>".$genderCell."</td>";
		echo	"<td class='edit age ".$studentidCell."'>".$ageCell."</td>";
		echo	"<td class='edit group ".$studentidCell."'>".$groupCell."</td>";
		echo	"<td class='edit department ".$studentidCell."'>".$departmentCell."</td>";
		echo	"<td><i class='delete-icon'></i></td>";
		echo	"<td class='hidden'>".$studentidCell."</td>";
		echo "</tr>";
	}
}
?>