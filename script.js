var windowDiv = $("#window");
$.ajax({url: "http://localhost/firespeak/getMessages.php", success: function(result){
	var data = $.parseJSON(result);	
		for(var i = 0; i < data.length; i++) {
			windowDiv.append($('<div class="time">' + data[i][2] + '</div>'));
			windowDiv.append($('<div class="message">' + data[i][1] + '</div>'));
		}
}});

$("#send").click(function(){
	var message = $("#message")[0].value;
	if(message.length > 0) {
	var userId = $("#hidden")[0].value;
	$.ajax({url: "http://localhost/firespeak/saveMessages.php?message=" + message + "&userId=" + userId, success: function(result){
	}});
  
	$("#message")[0].value = "";
	}
});

setInterval(function(){ 
	$.ajax({url: "http://localhost/firespeak/getMessages.php", success: function(result){
	var data = $.parseJSON(result);	
	var dataLength = data.length - 1;
	var messageLength = $(".message").length;
	if($(".message")[messageLength - 1].innerHTML != data[dataLength][1]) {
		windowDiv.append($('<div class="time">' + data[dataLength][2] + '</div>'));
		windowDiv.append($('<div class="message">' + data[dataLength][1] + '</div>'));
	}
	}});
}, 500);
