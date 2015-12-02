$(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container        
    });

    $("input[name=whoIs]").on("click", function(){
    	var value = this.val();
    	$("input[name=who]").val(value);
    });
});