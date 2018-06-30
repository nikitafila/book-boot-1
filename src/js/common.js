$(document).ready(function() {
	$("#newsletter").submit(function() {
		$.ajax({
			type: "POST",
			url: "/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Thanks");
			$("#newsletter").trigger("reset");
		});
		return false;
	});

});