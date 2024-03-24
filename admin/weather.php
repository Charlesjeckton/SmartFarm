<?php
$cache_file = 'data.json';
$city_id = 184745; // Nairobi city ID
$api_key = '71d836cdeb96c91bfbb45f2f67efa277';
$api_url = "http://api.openweathermap.org/data/2.5/forecast?id=$city_id&appid=$api_key";

// Fetch data from the OpenWeatherMap API
$data = file_get_contents($api_url);
file_put_contents($cache_file, $data);
$data = json_decode($data);

// Extract current weather and forecast data
$current = $data->list[0]->main;
$forecast = $data->list;

// Function to convert temperature from Kelvin to Celsius
function convertToCelsius($value) {
    return round($value - 273.15, 2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    
<style>
        

.aqi-value{
  font-family : "Noto Serif","Palatino Linotype","Book Antiqua","URW Palladio L";
  font-size:30px;
  font-weight:bold;
}
h1{
  text-align: center;
  font-size:3em;
}
.forecast-block{
  background-color: #fff!important;
  width:20% !important;
}
.title{
  background-color:#1b262c;
  width: 100%;
  color:#fff;
  margin-bottom:0px;
  padding-top:10px;
  padding-bottom: 10px;
}
.bordered{
  border:1px solid #000;
}
.weather-icon{
  width:40%;
  font-weight: bold;
  background-color: #1b262c;
  padding:10px;
  border: 1px solid #000;
}
</style>
    
</head>
<body>
    <div class="row mt-4">
        <h3 class="title text-center bordered">Weather Report for Nairobi</h3>
        <div class="col-md-12" style="padding-left:0px;padding-right:0px;">
            <div class="single bordered" style="padding-bottom:25px;background:url('back.jpg') no-repeat ;border-top:0px;background-size: cover;">
                <div class="row">
                    <div class="col-sm-9" style="font-size:20px;text-align:left;padding-left:70px;">
                        <p class="aqi-value"><?php echo convertToCelsius($current->temp); ?> °C</p>
                        <p class="weather-icon">
                            <!-- Update image source with appropriate weather icon URL -->
                            <img style="margin-left:-10px;" src="http://openweathermap.org/img/wn/<?php echo $forecast[0]->weather[0]->icon; ?>.png" alt="Weather Icon">
                            <?php echo $forecast[0]->weather[0]->description; ?>
                        </p>
                        <div class="weather-icon">
                            <p><strong>Wind Speed: </strong><?php echo $forecast[0]->wind->speed; ?> m/s</p>
                            <p><strong>Pressure: </strong><?php echo $forecast[0]->main->pressure; ?> hPa</p>
                            <p><strong>Visibility: </strong><?php echo $forecast[0]->visibility; ?> m</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <h3 class="title text-center bordered">5 Days Weather Forecast for Nairobi</h3>
        <?php foreach ($forecast as $f) : ?>
            <div class="single forecast-block bordered">
                <h3><?php echo date('Y-m-d H:i', $f->dt); ?></h3>
                <p style="font-size:1em;" class="aqi-value"><?php echo convertToCelsius($f->main->temp_min); ?> °C - <?php echo convertToCelsius($f->main->temp_max); ?> °C</p>
                <hr style="border-bottom:1px solid #fff;">
                <!-- Update image source with appropriate weather icon URL -->
                <img style="margin-left:-10px;" src="http://openweathermap.org/img/wn/<?php echo $forecast[0]->weather[0]->icon; ?>.png" alt="Weather Icon">
                <?php echo $forecast[0]->weather[0]->description; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
