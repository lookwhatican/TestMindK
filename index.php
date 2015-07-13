<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Students</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Table "Students"</h2>
				<div id="block-table">
					<table class="table table-striped">
						<tr>
							<th>Name</th>
							<th>Lastname</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Group</th>
							<th>Department</th>
							<th>Delete</th>
							<th class="hidden">ID</th>
						</tr>
						<?php
						include "config.php";
						include "class-database.php";
						include "class-page.php";

						$page = new Page();
						$db = new Database(HOST, USER, PASS, DB);

						$page->view_all_rows();

						if(isset($_POST["nameField"]) && isset($_POST["lastnameField"]) && isset($_POST["genderField"]) && isset($_POST["ageField"]) && isset($_POST["groupField"]) && isset($_POST["depField"])) {

							$name = $_POST["nameField"];
							$lastname = $_POST["lastnameField"];
							$gender = $_POST["genderField"];
							$age = $_POST["ageField"];
							$group = $_POST["groupField"];
							$department = $_POST["depField"];
							
							$db->add_one_row($name, $lastname, $gender, $age, $group, $department);
							$page->view_last_row();
						}

						if(isset($_POST["idToDel"])) {
							$idToDel = $_POST["idToDel"];

							$db->delete_one_row($idToDel);
						}

						if(isset($_POST["tableCell"]) && isset($_POST["tableColumn"]) && isset($_POST["tableRow"])) {
							$data = $_POST["tableCell"];
							$column = $_POST["tableColumn"];
							$row = $_POST["tableRow"];

							$db->update_one_cell($column, $data, $row);
						}
						?>
					</table>
				</div>
				<button class="btn" id="add-button">Add new student</button>
				<p>*Double click on the table cell to edit</p>
			</div>
		</div>
	</div>

<div class="popup">
	<button class="btn-close"></button>
	<form method="post">
		<div class="form-group">
			<label for="name">Имя: </label>
			<input class="form-control" id="name" type="text" name="name">
		</div>
		<div class="form-group">
			<label for="surname">Фамилия:</label>
			<input class="form-control" id="lastname" type="text" name="lastname">
		</div>
		<div class="form-group">
			<label for="gender">Пол:</label>
			<input class="form-control" id="gender" type="text" name="gender">
		</div>
		<div class="form-group">
			<label for="age">Возраст:</label>
			<input class="form-control" id="age" type="text" name="age">
		</div>
		<div class="form-group">
			<label for="group">Группа:</label>
			<input class="form-control" id="group" type="text" name="group">
		</div>
		<div class="form-group">
			<label for="dep">Факультет:</label>
			<input class="form-control" id="dep" type="text" name="department">
		</div>
		<button class="btn btn-submit" type="submit">Добавить запись</button>
	</form>
</div>

<!-- JS Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>