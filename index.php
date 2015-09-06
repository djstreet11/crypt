test new1 branch

<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>
	<body>
		<h1>Шифрование</h1>
		<form id="crypt">
			<input type="text" name="text_c">
			<select name="type_c">
				<option value="sdvig">Сдвиг</option>
				<option value="zamena">Замена</option>
			</select>
			<input type="submit" >
		</form>
		<br>
		<div id="result_crypt">
		</div>
		<br>
		<h1>Дешифрование</h1>
		<form id="decrypt">
			<input type="text" name="text_d">
			<select name="type_d">
				<option value="sdvig">Сдвиг</option>
				<option value="zamena">Замена</option>
			</select>
			<input type="submit" >
		</form>
		<br>
		<div id="result_decrypt">
		</div>
		<script type="text/javascript">
			$( "#crypt" ).submit(function( event )
				{
				event.preventDefault();
				$text = ($( "input[name='text_c']" ).val());
				$type = ($( "[name='type_c'] option:selected" ).val());
				$.ajax({
						url : 'crypt.php' ,
						method : 'POST' ,
						data : {
								action : $type,
								text : $text
								},
						success : function(data)
							{
							$('#result_crypt').text(data);
							}
						});
				});
			$( "#decrypt" ).submit(function( event )
				{
				event.preventDefault();
				$text = ($( "input[name='text_d']" ).val());
				$type = ($( "[name='type_d'] option:selected" ).val());
				$.ajax({
						url : 'decrypt.php' ,
						method : 'POST' ,
						data : {
								action : $type,
								text : $text
								},
						success : function(data)
							{
							$('#result_decrypt').text(data);
							}
						});
				});
		</script>
	</body>
</html>