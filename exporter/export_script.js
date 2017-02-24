var countyName = "";
$( "#selectCounty" )
		.click(function () {
			$( "select option:selected" ).each(function() {
				$( "#selectCounty")
				countyName = "";
				countyName += $( this ).val();
		});
		$.ajax({
			url: '/BOE_Filter-2017/exporter/pages/countyData.php',
			type: "POST",
			data:({county: countyName}),
			success:function(result){
					$("#selectFields").html(result);
				}
		});
	});
// pass county name and fields selected to the checkboxes function.
$( "#selectFields" )
	.on("click", "#confirm", function(){
		var selectedFields = new Array();
		$("input:checked").each(function(){
			selectedFields.push($(this).val());
		});
		$.ajax({
			url: '/BOE_Filter-2017/exporter/pages/checkboxes.php',
			type: "POST",
			data:({fields: selectedFields}),
			success:function(result){
				alert("success!");
				$("#selectFields").append(result);
			}
		});
});