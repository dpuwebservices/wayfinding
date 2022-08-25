<?php 
   include ("./includes/head.html");
   ?>
<body>
   <?php 
      include ("./includes/mainnav.html");
      ?>
   <div class="container col-lg-12 container-margin">
      <div class="col-lg-9">
         <div class="col-lg-9 maps-center">
            <h3 class="eventTitle">Library Classes</h3>
            <div id="api_upc_cid2894_iid123"></div>
            <script type="text/javascript" src="https://api3.libcal.com/api_events.php?iid=123&m=upc&cid=2894&c=1651&d=23632&l=5&context=object&format=js"> </script>      
         </div>
      </div>
      <div class="col-lg-3">
         <div class="hours-content classes-page">
            <div id="hours" class="tab-pane active">
               <div id="api_hours_today_iid123_lid2437"></div>
               <script src="https://api3.libcal.com/api_hours_today.php?iid=123&lid=2437&format=js&context=object"> </script> 	
            </div>
         </div>
      </div>
   </div>
   <!-- JavaScript plugins (requires jQuery) -->
   <script src="js/bootstrap.min.js" type="text/javascript"></script>
   <script type="text/javascript"> 
      $(document).ready(function() {
      
          $('.tevent a').click(function(e) {
      
              e.preventDefault();
      
          });
      
      }) 
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
      
          $("#navBar .classes").removeClass("nonactive").addClass("activated");
      
      });
      
   </script>
</body>
</html>
