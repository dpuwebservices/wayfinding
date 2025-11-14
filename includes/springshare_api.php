<?php
require_once 'includes/functions.php';

function springshare_auth($client_id, $client_secret) {
  $token = '';

  $ch = curl_init();
  $auth_url = "https://libcal.depaul.edu/api/1.1/oauth/token";
  $data = array('client_id' => $client_id, 'client_secret' => $client_secret, 'grant_type' => 'client_credentials');
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

  return $token;
}

function springshare_get_classes($token, $calendar, $campus, $days) {
    $classes_data = '';
    $class_ch = curl_init();
    $class_url = "https://libcal.depaul.edu/api/1.1/events?cal_id=".$calendar."&campus=".$campus."&category=50862&days=".$days;
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

    return $classes_data;
}

function springshare_display_classes($classes_data) {
    $classes = $classes_data["events"];
    
    echo '<table style="margin-left: 20px; margin-top: 20px;">'."\n";
    echo " <tbody>\n";

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

    echo "  </tbody>\n";
    echo "</table>\n";
  
}
?>