$('document').ready(function(){

	$("#reviewBox").hide();

	$("#btnRight").click(function(){
		var checkboxes = $("#format-item-list1 div input:checked");
		checkboxes.prop("checked",false);
		checkboxes.each(function(){
			var item = '<div class="border border-secondary format-item">'
				+ '<input type="checkbox" class="mx-2 format-item-content"' + 'name="' + $(this).attr('name') + '">'
				 + $(this).attr('name') + '</input></div>'
			$(item).appendTo("#format-item-list2");
			$(this).parent().remove();
		});
	});

	$("#btnLeft").click(function(){
		var checkboxes = $("#format-item-list2 div input:checked");
		checkboxes.prop("checked",false);
		checkboxes.each(function(){
			var item = '<div class="border border-secondary format-item">'
				+ '<input type="checkbox" class="mx-2 format-item-content"' + 'name="' + $(this).attr('name') + '">'
				 + $(this).attr('name') + '</input></div>'
			$(item).appendTo("#format-item-list1");
			$(this).parent().remove();
		});

	});

	$("#btnReview").click(function(){
		$("#thead").empty();
		$("#trow").empty();
		$("#reviewBox").show();
		var theadList = $("#format-item-list2 div input");
		theadList.each(function(){
			console.log($(this).attr('name'));
			var item = '<th>' + $(this).attr('name') + '</th>';
			$(item).appendTo("#thead");
			var td = '<td>........</td>';
			$(td).appendTo('#trow');
			
		});
	
	});
	
	
	// $("#btnLeft").click(function(){
	// 	var checkboxes = $("#format-item-list2 div input:checked");
	// 	checkboxes.parent().hide();
	// 	checkboxes.prop("checked",false);
	// 	checkboxes.each(function(){
	// 		var name =  $(this).attr('name');
	// 		$("#format-item-list1 div input[name=" + name+ "]").parent().show();
	// 	});

	// });
});