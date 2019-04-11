<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		Project Name:<input type="text" name="project" id="P1"><br>
		<br>
		Scrum Master:<input type="text" name="Scrum" id="s1"><br>
		<br>
		<input type="button" id="b1" value="ADD" onclick="add()">
		<input type="button" id="b2" value="REMOVE"><br>
		<br>
		Create New Scrum Master:<br>
		<br>
		Scrum Master Name:<input type="text" id="sm1" disabled><br>
		<br>
		Userid:<input type="email" id="u1" disabled><br>
		<br>
		Password:<input type="Password" id="pwd1" disabled><br>
		<br>
		Confirm Password:<input type="Password" id="pwd2" disabled><br>
		<br>
		<input type="button" id="b3" value="submit details" disabled>
	</form>
	<script>
		function add()
		{
			document.getElementById("sm1").disabled=false;
			document.getElementById("u1").disabled=false;
			document.getElementById("pwd1").disabled=false;
			document.getElementById("pwd2").disabled=false;
			document.getElementById("b3").disabled=false;
			}
	</script>

</body>
</html>