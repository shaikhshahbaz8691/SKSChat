	
  $(document).on("ready",function(){

  	$(document).bind('keypress', function(e) {
            if(e.keyCode==13){
                 $('#send').trigger('click');
             }
        });
	insertMessages();
	setInterval("loadOldMessages()",500);
	});
  
 function insertMessages()
  {		
		
	  $("#send").on("click",function(e){
	  var txt=$("#msg").val();
	  if(txt=='')
	  {
	  	
	  	return false;
	  }
	  else{
	  e.preventDefault();
	  $.post("message.php",{ message : txt },function(response){
				$("#msg").val("");
			   var last1=$("#chat").prop("scrollHeight");
			   $("#chat").scrollTop(last1);
			   console.log(response);
			      	    $( "#msg" ).focus();

			
	  });
	}
	  });
  }
   function loadOldMessages(){
   	    $( "#msg" ).focus();
	  $.post("messageOnload.php",{},function(response){
		  
		 $("#chat").html(response);
		 $("#chat p:last-child").css({"background-color":"lightgreen"});
		 
		 var last1=$("#chat").prop("scrollHeight");
		 $("#chat").scrollTop(last1);

	  });
  }
