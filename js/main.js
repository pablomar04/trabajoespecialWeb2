$(document).ready(function(){
	$("#abm").on('click',function(evt){
		evt.preventDefault();
		$.get("templates/abm.tpl",function(data){

			$("#principal").empty();
			$("#principal").html(data);
		});
	});

	$("#dashboard").on('click',function(evt){
		evt.preventDefault();		
		$.get("index.php?action=home");

	});
});