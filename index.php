<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
$var_country_code = $geoplugin->countryCode;
// redirect based on country code:
if ($var_country_code == "en") {
header('Location: https://kms3898.github.io/instagramenter/');
}
else if ($var_country_code == "ko") {
header('Location: https://kms3898.github.io/instagramenter/ko');
}
else {
header('Location: https://kms3898.github.io/instagramenter/');
}
?>
