    <div class="footer">
        <p>&copy 2015 | H&G</p>
    </div>

<script src="/H-G/js/jquery.min.js"></script>
<script src="/H-G/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
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
</script>
</body>
</html>