<?php 
  include ("./includes/head.html");
?>

<body>  
    
<?php 
  include ("./includes/mainnav.html");
?>

<div class="container col-lg-12 container-margin" id="started">
 
	<div class="col-lg-12">
        <div class="col-lg-12">
            &nbsp;
        </div>
		<div class="col-lg-4">
&nbsp;
		</div>
        <div class="col-lg-4">
            <h3 class="text-center eventTitle">Today's Hours</h3>
            <div class="hours-content">
                <div id="hours" class="tab-pane active">
                    <div id="api_hours_today_iid123_lid12626"></div>
                    <div id="api_hours_today_iid123_lid6256"></div>
                    <script src="https://libcal.depaul.edu/api_hours_today.php?iid=123&lid=6256&format=js&systemTime=0&context=object"> </script>    
                    <script src="https://libcal.depaul.edu/api_hours_today.php?iid=123&lid=12626&format=js&systemTime=0&context=object"> </script>
                </div>
            </div>
		</div>
        <div class="col-lg-4">	
            &nbsp;
		</div>
	</div>

</div>


<!-- JavaScript plugins (requires jQuery) -->
<script src="js/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/jscript"> 
	$(document).ready(function() {

    $('#lw a').click(function(e) {
		e.preventDefault();
	});

}) 
</script>

<script>
    $(document).ready(function(){
        $(".hours-col-loc a").each(function(){
            $( this ).replaceWith( "<p>" + $( this ).text() + "</p>" );
        });

    });

</script>


<script>
    $(document).ready(function(){
        $("#navBar a").each(function(){
            $( this ).removeClass("activated");
            $( this ).addClass("nonactive");
        });

    });

</script>


    
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0011/1884.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
   


</body>
</html>