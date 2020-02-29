$(document).ready(function(){
		
	getData();
	
	$('#search').on('keyup', function(){
		var keyword = $(this).val();
		if(keyword === ""){
			getData();
		}else{
			search(keyword);
		}
	});
	
});


function getData(){
	$.ajax({
		url: 'update_location_data.php',
		type: 'POST',
		data: {res: 1},
		success: function(data){
			$('#result').html(data);
		}
	});
}

function search(searchText){
	$.ajax({
		url: 'update_location_search.php',
		type: 'POST',
		data: {keyword: searchText},
		success: function(data){
			$('#result').html(data);
		}
	});
}