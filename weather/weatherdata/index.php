<HTML>
<HEAD>
<TITLE>Read Display JSON Data using jQuery AJAX</TITLE>
<style>
body{width:610;}
.demo-table {width: 100%;border-spacing: initial;margin: 20px 0px;word-break: break-word;table-layout: auto;line-height:1.8em;color:#333;}
.demo-table th {background: #999;padding: 5px;text-align: left;color:#FFF;}
.demo-table td {border-bottom: #f0f0f0 1px solid;background-color: #ffffff;padding: 5px;}
.demo-table td div.feed_title{text-decoration: none;color:#00d4ff;font-weight:bold;}
.demo-table ul{margin:0;padding:0;}
.demo-table li{cursor:pointer;list-style-type: none;display: inline-block;color: #F0F0F0;text-shadow: 0 0 1px #666666;font-size:20px;}
.demo-table .highlight, .demo-table .selected {color:#F4B30A;text-shadow: 0 0 1px #F48F0A;}
.demo-table{display:none;}
.btnRead{padding:10px;background-color:#09F;border:0;color:#FFF;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function readJSONData() {
	$.getJSON("read_tutorial.php",function(data){	
		if(data) {
		var json_data;
		$('#read-data').hide();
		$('.demo-table').show();
		$.each(data, function(i,tutorial){
		json_data = '<tr>'+
			'<td valign="top">'+
			'<div class="feed_title">'+tutorial.title+'</div>'+
			'<div>'+tutorial.description+'</div>'+
			'</td>'+
			'</tr>';
		$(json_data).appendTo('#demo-table-content');
		});
		} else {
		json_data += '<tr>'+
			'<td valign="top">No Tutorials Found</td>'+
			'</tr>';
		$(json_data).appendTo('#demo-table-content');
		}		
	});	

}
</script>

</HEAD>
<BODY>
<div id="read-data"><button class="btnRead" onClick="readJSONData();">Read JSON Data</button></div>
<table class="demo-table">
<tbody id="demo-table-content">
<tr>
<th><strong>Tutorials</strong></th>
</tr>
</tbody>
</table>
</BODY>
</HTML>