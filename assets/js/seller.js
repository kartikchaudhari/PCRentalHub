function resendEmail(email){
	$.ajax({
		url: '',
		type: 'POST',
		dataType: 'text',
		data: {seller_id: 'value1'},
		cache:false;
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}