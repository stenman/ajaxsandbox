function postdata(data){
	$.post("inc/responsivetextexampleprocess.php", {input:data}, function(callback){
		$('#ajaxinfo').html(callback);
	});
}