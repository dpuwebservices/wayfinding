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
	<div id="mapArea"class="col-lg-12">
			<!--Image map tutorial. http://jquer.in/responsive/rwdimagemaps/
			Tool for image mapping. https://imagemap.org/-->
		<div class="row maps-center">
      <h1 style="margin-left: 20px;">Library Classes</h1>
      <h2 style="margin-left: 20px; font-size: 24px;">Next 7 Days</h2>
<!--
      <script src="js/springshare-api.js"></script>
-->
<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
  $token = '';
  $classes_data = '';

  $ch = curl_init();
  $auth_url = "https://libcal.depaul.edu/api/1.1/oauth/token";
  $data = array('client_id' => '137', 'client_secret' => '46c67a254ed49cb5332c12b6f4a6d2a5', 'grant_type' => 'client_credentials');
  curl_setopt($ch, CURLOPT_URL, $auth_url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);

  if (curl_errno($ch)) {
    console_log('CURL Error: ' . curl_error($ch));
  } else {
    $token_data = json_decode($response, true);
    $token = $token_data['access_token'];
  }
  curl_close($ch);

  if ($token != '') {
    $class_ch = curl_init();
    $class_url = "https://libcal.depaul.edu/api/1.1/events?cal_id=2894&campus=1651&category=50862&days=7";
    $class_headers = array('Authorization: Bearer ' . $token);
    curl_setopt($class_ch, CURLOPT_URL, $class_url);
    curl_setopt($class_ch, CURLOPT_HTTPHEADER, $class_headers);
    curl_setopt($class_ch, CURLOPT_RETURNTRANSFER, true);
 
    $response = curl_exec($class_ch);

    if (curl_errno($class_ch)) {
      console_log('CURL Error: ' . curl_error($class_ch));
    } else {
      console_log('Response: '. $response);
      $classes_data = json_decode($response, true);
    }
    curl_close($class_ch);
  }
  
  if ($classes_data != '') {
    $classes = $classes_data["events"];
?>
    <table style="margin-left: 20px; margin-top: 20px;">
      <tbody>
<?php
    foreach ($classes as $class) {
      $start = $class["start"];
      $format_start = date("D, M d: g:ia", strtotime($start));
      $end = $class["end"];
      $format_end = date("g:ia", strtotime($end));

      echo "<tr><th>" . $class["title"] . "</th></tr>\n";
      echo "<tr><td>presented by " . $class["presenter"] . "</td></tr>\n";
      echo "<tr><td>" . $class["location"]["name"] . "</td></tr>\n";
      echo "<tr><td>" . $format_start . " - " . $format_end . "</td></tr>\n";
      echo "<tr><td><hr></td></tr>\n";
    }
?>
      </tbody>
    </table>
<?php
  }
?>
		</div>
	</div> <!--End of maps-->
</div> <!--/close container-->
<script src="js/wayfinding.js"></script>
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
