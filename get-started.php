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
            <h3 class="text-center eventTitle">Get Started</h3>
        </div>
        <div class="col-lg-3">
			<h4>Take a Self-Guided Tour</h4>  
<p class="force">Find out what's available at the Richardson Library:</p>
            <img src="images/tourJTR.png">
		</div>        
		<div class="col-lg-3">
			<h4>Connect to the Internet</h4>  
<p class="force">Get access to library resources using the Eduroam service:</p>
            <img src="images/wifi.png">
		</div>
        <div class="col-lg-3">
			<h4 class="">Print</h4>  	
            <p class="force">Print from one of our computers, or from your own:</p>
            <img src="images/print.png">
		</div>

        <div class="col-lg-3">
			<h4 class="">Need Help?</h4> 
            <p>Visit a <span class="highlight">Genius Squad</span> location. They can assist with things like:</p>

            <ul>
                <li>Wireless setup</li>
                <li>Virus and malware removal</li>
                <li>Hardware repair</li>
                <li>RAM upgrades</li>
                <li>Phone configuration for access to e-mail</li>
                <li>and more!</li>
                </ul>            

            <p>The closest one is in <span class="highlight">room 205 </span> in the Schmitt Academic Center.</p> 	
            <!-- <p class="update">Last updated: May 4, 10am</p> -->
		</div>
	</div>

</div>



<!-- JavaScript plugins (requires jQuery) -->
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
	$().ready(function() {
		var $scrollingDiv = $("#navDiv");
 
		$(window).scroll(function(){			
			$scrollingDiv
				.stop()
				.animate({"marginTop": ($(window).scrollTop() + 30) + "px"}, "slow" );			
		});
	});
</script>
    
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0011/1884.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<script>
    $(document).ready(function(){
        $("#navBar a").each(function(){
            $( this ).removeClass("activated");
            $( this ).addClass("nonactive");
        });

        $("#navBar .start").removeClass("nonactive").addClass("activated");

    });

</script>   
</body>
</html>