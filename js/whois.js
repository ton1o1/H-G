$(document).ready(function () {
    $("input[name=whoIs]").on("click", function(){
    	var value = this.val();
    	$("input[name=who]").val(value);
    });
});