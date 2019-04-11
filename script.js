$(document).ready(function()
{
	//dummy variable for now
	var proportion = 80;
	var inverse = 100 - proportion;

	//pulling the countQuery from prepop.php
	$.ajax({
		type: "GET",
		url: ""
	});

	$('div#leftDiv').width(proportion + '%');
	$('div#rightDiv').width(inverse + '%');

});

function proportion(amount, total)
{
		return (amount/total)*100;
}