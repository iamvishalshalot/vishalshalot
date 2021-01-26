<?php

  $user_ip = getenv('REMOTE_ADDR');
  $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
  $country = $geo["geoplugin_countryName"];

  switch ($country) {
    case "India":
        header('Location:https://vishalshaot.site');
        break;
    case "United States":
        header('Location:https://studentdeveloper.in');
        break;
    default:   
        header('Location:https://google.in');  
  }

?>