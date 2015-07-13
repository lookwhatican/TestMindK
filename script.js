$(document).ready(function() {

	// show popup
	$("#add-button").on("click", function() {
		var popup = $(".popup");
		$(popup).fadeIn(400);
		var popMargTop = ($(popup).height() + 24) / 2;
		var popMargLeft = ($(popup).width() + 24) / 2;
		$(popup).css({
			"margin-top": -popMargTop,
			"marggin-left": -popMargLeft
		});
		$("body").append("<div id='mask'>");
		$("#mask").fadeIn(400);
		return false;
	});


	// close popup
	$(".btn-close").on("click", function() {
		$(".popup, #mask").fadeOut(400);
	});


	// output last row
	$(".btn-submit").on("click", function() {
		var nameField = $("#name").val(),
			lastnameField = $("#lastname").val(),
			genderField = $("#gender").val(),
			ageField = $("#age").val(),
			groupField = $("#group").val(),
			depField = $("#dep").val();

		$.post("http://localhost/test-mindk/index.php",
				{ nameField: nameField,
				lastnameField: lastnameField,
				genderField: genderField,
				ageField: ageField,
				groupField: groupField,
				depField: depField },
				function(data) {
					$("#block-table").html(data);
				}
		);
	});


	// delete one row
	$(".delete-icon").on("click", function() {
		var row = $(this).closest(".table-row"),
			id = row.find(".hidden").text();
			//console.log(id);

		$.post("http://localhost/test-mindk/index.php",
				{idToDel: id},
				function(data) {
					row.remove();
				});
	});


	// double click on the cell
	$("td.edit").dblclick(function() {
		$(".ajax").html($(".ajax input").val());
		$(".ajax").removeClass("ajax");

		$(this).addClass("ajax");
		$(this).html('<input id="editbox" size="'+ $(this).text().length+'" value="'+ $(this).text() +'" type="text">');
		$("#editbox").focus();
	});

	// keyboard button click
	$("td.edit").keydown(function(event) {
		var arr = $(this).attr("class").split( " " );
		if(event.which == 13) {
			var tableCell = $(".ajax input").val(),
				tableColumn = arr[1],
				tableRow = arr[2];
				//console.log(tableColumn);

			$.post("http://localhost/test-mindk/index.php",
				{tableCell: tableCell,
				tableColumn: tableColumn,
				tableRow: tableRow},
				function(data) {
					$(".ajax").html($(".ajax input").val());
					$(".ajax").removeClass("ajax");
				}
			);
		}
	});
	
	// delete input
	$(document).on("blur", "#editbox", function() {
		$(".ajax").html($(".ajax input").val());
		$(".ajax").removeClass("ajax");
	});
});