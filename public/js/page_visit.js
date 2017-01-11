$(document).ready(function(){

	window.onload = function(){
		var url = window.location.href;
		var item_type = $('head title').data('type');

		var arr = url.split("/");
		var item_id = arr[arr.length-1];
		var client_ip = '';
		$.getJSON("http://jsonip.com/?callback=?", function (data) {
			client_ip = data.ip;

			console.log(client_ip);
			var formData = "url="+url+"&ip="+client_ip+"&item_type="+item_type+"&item_id="+item_id;
			$.ajax({
			    url : "saveRecord",
			    type: "POST",
			    headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
			    dataType: "json",
			    data : formData,
			    success: function(data, textStatus, jqXHR)
			    {
				//data - response from server
				console.log("POST Successful");
			    },
			    error: function (jqXHR, textStatus, errorThrown)
			    {
				console.log("POST Error");
			    }
			});

		});

		


	}


});
