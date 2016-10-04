<html>
	<head><title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#send").click(function(){
        var txt = $("#msg").val();
        $.post("message.php", {message: txt}, function(response){
            $("#chat").html(response);
        });
    });
});
</script>

	</head>
	
<body>
	<div id="chat"> </div>
	<input type="text" name="msg" id="msg" placeholder="Type a Message....." />
	<input type="submit" name="send" id="send" value="Send" />
	</body>
	</html>
