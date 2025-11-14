<?php 
  $floor = "all";
  if (isset($_GET["floor"]) && ($_GET["floor"] == "first" || $_GET["floor"] == "second" || $_GET["floor"] == "third" || $_GET["floor"] == "fourth")) {
    $floor = htmlspecialchars($_GET["floor"]);
  }
  include ("./includes/head.html");
?>

<body>

<?php 
  include ("./includes/mainnav.html");
?>

<div class="container col-lg-12 container-margin">
  			<ul class="nav nav-tabs">
				<li <?php if ($floor == "all") { ?> class="active" <?php } ?>><a href="./maps.php?floor=all">All Floors</a></li>
        <li <?php if ($floor == "first") { ?> class="active" <?php } ?>><a href="./maps.php?floor=first">1st Floor</a></li>
        <li <?php if ($floor == "second") { ?> class="active" <?php } ?>><a href="./maps.php?floor=second">2nd Floor</a></li>
        <li <?php if ($floor == "third") { ?> class="active" <?php } ?>><a href="./maps.php?floor=third">3rd Floor</a></li>
        <li <?php if ($floor == "fourth") { ?> class="active" <?php } ?>><a href="./maps.php?floor=fourth">4th Floor</a></li>
			</ul>

	<div id="mapArea"class="col-lg-8">
			<!--Image map tutorial. http://jquer.in/responsive/rwdimagemaps/
			Tool for image mapping. https://imagemap.org/-->
		<div class="row maps-center">
<?php if ($floor == "all") { ?>
			<div class="col-lg-6 nopadding max-maps" id="one">

<?php
  header('Content-Type: image/svg+xml');
  echo file_get_contents('./maps/jtr_1.svg');
?>
        <script type="text/javascript">
          const firstFloorLink = document.querySelector('#one svg');
          firstFloorLink.addEventListener('click', function(event) {
            window.open('https://libservices.org/wayfinding/maps.php?floor=first');
          });
        </script>
			</div>

			<div class="col-lg-6 nopadding max-maps" id="two">
<?php
  header('Content-Type: image/svg+xml');
  echo file_get_contents('./maps/jtr_2.svg');
?>
        <script type="text/javascript">
          const secondFloorLink = document.querySelector('#two svg');
          secondFloorLink.addEventListener('click', function(event) {
            window.open('https://libservices.org/wayfinding/maps.php?floor=second');
          });
        </script>
			</div>
		</div>

		<div class="row maps-center">
			<div class="col-lg-6 nopadding max-maps" id="three">
<?php
  header('Content-Type: image/svg+xml');
  echo file_get_contents('./maps/jtr_3.svg');
?>
        <script type="text/javascript">
          const thirdFloorLink = document.querySelector('#three svg');
          thirdFloorLink.addEventListener('click', function(event) {
            window.open('https://libservices.org/wayfinding/maps.php?floor=third');
          });
        </script>
			</div>

			<div class="col-lg-6 nopadding max-maps" id="four">
<?php
  header('Content-Type: image/svg+xml');
  echo file_get_contents('./maps/jtr_4.svg');
?>
        <script type="text/javascript">
          const fourthFloorLink = document.querySelector('#four svg');
          fourthFloorLink.addEventListener('click', function(event) {
            window.open('https://libservices.org/wayfinding/maps.php?floor=fourth');
          });
        </script>
			</div>
<?php  } else { 
  if ($floor == "first") {
    header('Content-Type: image/svg+xml');
    echo file_get_contents('./maps/jtr_1.svg');
  } elseif ($floor == "second") {
    header('Content-Type: image/svg+xml');
    echo file_get_contents('./maps/jtr_2.svg');
  } elseif ($floor == "third") {
    header('Content-Type: image/svg+xml');
    echo file_get_contents('./maps/jtr_3.svg');
  } else {
    header('Content-Type: image/svg+xml');
    echo file_get_contents('./maps/jtr_4.svg');
  }
} ?>
		</div>
	</div> <!--End of maps-->
	<div class="col-lg-4" id="mapLinks">

		<div id="directory-container">


			<div class="tab-content">

      
<div id="directory" class="tab-pane active">
  <div class="panel-group" id="accordion-dir">
     <div class="panel panel-default">
        <div class="panel-heading">
           <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion-dir" href="#collapseDirectory">Directory</a>
           </h4>
        </div>
        <div id="collapseDirectory" class="panel-collapse collapse in">
           <ul>
<?php 
$filePath = './includes/directory_list.txt';
$directoryArray = [];
if(file_exists($filePath) && is_readable($filePath)) {
  $fh = fopen($filePath, 'r');
  if ($fh !== false) {
    while (($row = fgetcsv($fh, 0, ';')) !== false) {
      $item_arr = explode(",", $row[2]);
      if ($floor == "first") {
        if ($row[0] == "First Floor") {
          $directoryArray[$row[1]] = $item_arr;            
        }
      } elseif ($floor == "second") {
        if ($row[0] == "Second Floor") {
          $directoryArray[$row[1]] = $item_arr;            
        }
      } elseif ($floor == "third") {
        if ($row[0] == "Third Floor") {
          $directoryArray[$row[1]] = $item_arr;            
        }
      } elseif ($floor == "fourth") {
        if ($row[0] == "Fourth Floor") {
          $directoryArray[$row[1]] = $item_arr;            
        }
      } else {
        if(array_key_exists($row[1], $directoryArray)) {
          foreach($item_arr as $item) {
            array_push($directoryArray[$row[1]], $item);
          }
        } else {
          $directoryArray[$row[1]] = $item_arr;            
        }
      }
    }
    fclose($fh);
  }
}

ksort($directoryArray);

foreach ($directoryArray as $label => $id_list) {
  $id_string = "[";
  foreach ($id_list as $item) {
    $id_string .= $item . ",";
  }
  $id_string = substr($id_string, 0, -1);
  $id_string .= "]";
  echo "<li class=\"li\"><a href=\"#/\" onClick=\"light_up(". $id_string . ");\">". $label ."</a></li>\n";
}
?>
           </ul>
        </div>
      </div>
  </div>

</div>

      

			</div>
		</div>

	</div> <!--End of panel-->
<?php if ($floor == "all") { ?>
<div id="legend-all" class="col-lg-12">
    <ul>
      <li>AED <img src="images/icons/aed.svg" /></li>
      <li>All Gender Restroom <img src="images/icons/restroom-accessible.svg" /></li>
      <li>Bookdrop <img src="images/icons/bookdrop.svg" /></li>
      <li>Charging Station <img src="images/icons/charger.svg" /></li>
      <li>Church Model <img src="images/icons/church.svg" /></li>
      <li>Collaboration Area <img src="images/icons/collab.svg" /></li>
      <li>Computers <img src="images/icons/computer.svg" /></li>
      <li>Copier <img src="images/icons/copier.svg" /></li>
      <li>Display <img src="images/icons/display.svg" /></li>
      <li>Elevator <img src="images/icons/elevator.svg" /></li>
      <li>Fire Exit <img src="images/icons/exit.svg" /></li>
      <li>Guest Computers <img src="images/icons/kiosk.svg" /></li>
      <li>ID Required <img src="images/icons/id.svg" /></li>
      <li>Information <img src="images/icons/info.svg" /></li>
      <li>Meditation/Prayer <img src="images/icons/meditation.svg" /></li>
      <li>Microform Reader <img src="images/icons/film.svg" /></li>
      <li>Printer <img src="images/icons/printer.svg" /></li>
      <li>Quiet Study <img src="images/icons/quiet.svg" /></li>
      <li>Restrooms <img src="images/icons/restroom-w.svg" /><img src="images/icons/restroom-m.svg" /></li>
      <li>Scanner <img src="images/icons/scanner.svg" /></li>
      <li>Self Checkout <img src="images/icons/selfcheck.svg" /></li>
      <li>Water Fountain <img src="images/icons/fountain.svg" /></li>
    </ul>
</div>
<?php } ?>
</div> <!--/close container-->
<script src="js/wayfinding.js"></script>
<script>
    $(document).ready(function(){
        $("#navBar a").each(function(){
            $( this ).removeClass("activated");
            $( this ).addClass("nonactive");
        });

        $("#navBar .maps").removeClass("nonactive").addClass("activated");

    });

</script>
</body>
</html>
