
$(document).ready(function()
{
	//Search Order
	var searchorder=$("#searchorder");
	searchorder.submit(function(e)
	{
		e.preventDefault();
		$("#result").hide();
		$("#loading").show();
		$.ajax(
		{
			type:"post",
			url:"getstateorder.php",
			data:searchorder.serialize(),
			dataType:"json",
			success:function(data)
			{
				$("#loading").fadeOut(500,function()
				{
					$("#result").html(data).slideDown(500);
				});
			},
			error:function(data)
			{
				$("#loading").fadeOut(500,function()
				{
					$("#result").text("Search Order Error").slideDown(500);
				});
			},
		});
	});

});