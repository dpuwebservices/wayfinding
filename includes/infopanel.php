
	<div class="col-lg-4" id="mapLinks">
		<div id="info-panel">
			<img id="close-img" class="close-image" src="images/maps/close-icon.png"/>
			<p id="info-text"></p>
		</div>

		<div id="directory-container">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#directory" data-toggle="tab">Directory</a></li>
                <li><a href="#info-by-floor" data-toggle="tab">Information By Floor</a></li>
			</ul>

			<div class="tab-content">

      
<?php 
  include ("./includes/info-directory.html");
?>

      
<?php 
  include ("./includes/info-floor.html");
?>

			</div>
		</div>

	</div> <!--End of panel-->
