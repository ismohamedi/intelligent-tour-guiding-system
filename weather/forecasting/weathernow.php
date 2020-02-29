
<?php


///////////////////////code for selecting location_id from the database for displaying weather condition of the particular areas/////////////////////////////////

$id = $_GET['id'];
$select = "SELECT * FROM location,attractions where attractions.location_id = location.location_id AND  attractions.attraction_id = '$id'";
$pass = mysqli_query($connection,$select);
$data1 = mysqli_fetch_array($pass);
$apiKey = "2450ed23ae42f71591b8f2ec6840b3ee";
$cityId = $data1['weather_id'];
$_SESSION['attraction_name'] = $data1['attraction_name'];

///////////// bellow is gooogle weather API///////////////

$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

/////////////// bellow is executions of weather API //////////////////////////////////

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>
    <div class="report-container">
        <h2 align="center">Weather Status</h2>
        <div class="time">

           <!-- ============= display of current time=========== -->
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">

            <!--================================= display of weather image================================ -->
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 

<!--======================== bellow is code for displaying weather condition of the current time of the particular area ==========================================-->
                <?php echo $data->main->temp_max; ?>&deg;C
                <span class="min-temperature">
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
            <div><?php
                $data1= $data->main->temp_max;

                //////////////////////////////////// bello is code for displaying suggesstions according to the weather condition of the particular area during a day//////////////////////////////////////////////////////
              if ($data1 >= 25) {
                 echo'<p style=" color:blue;background:white;floar:left;font-weight:bold"> Hello,  there is hot condition at <b style="color:black;"> '.$_SESSION['attraction_name'].'</b> right now so you can go with summer clothes without forgeting water</p>';
              }
              else if($data1 <25 && $data1 >=20 ){
                echo'<p style="color:green;background:white; float:left">Hello there is moderate weather condition at <b style="color:black;"> '.$_SESSION['attraction_name'].'</b> right now so you can go with  clothes which are suitable for moderate weather condition for  today</p>';
              }
              else if($data1 < 19){
                echo'<p style="color:green;background:white; float:left">Hello there is cold condition at <b style="color:black;"> '.$_SESSION['attraction_name'].'</b>  so you can go with winter clothes such as huge coats  and blankets 🧥,🧣</p>';
              }
             ?></div>
        </div>
    </div>

