# IoT enabled Odometer 

## Introduction 

An Odometer is a device that measures the mileage of a vehicle. To measure the mileage of a car or bicycle, one very efficient way is to multiply the number of revolutions and the circumference of the vehicle's tire (easily done with a magnet and a hall effect sensor). But this would mean you'd have to measure the circumference of every vehicle and update the firmware of the MCU in use.

This project is a test to measure the mileage of a vehicle by taking frequent points (longitude and latitude) every few seconds using a GPS and then calculate the distances adding them all up to give you the total distance.

The haversine distance formula played well in this project

## To Build
+ Edit the .ino file, replacing ssid and password with your credentials.
+ Edit the API variable in the .ino with your Google Geolocation Api
 - To learn about getting your Google Geolocation API, check this https://www.youtube.com/watch?v=9CmGMYnHR-U
+ Upload the .ino file to your Esp8266 MCU
+ You should begin to see the logitude and latitude of your exact location

## To read Mileage
+ You should be familiar with PHP, SQL and any WEBHOSTING platform
+ Upload the public_html into the webhosting platform
+ Create your database in the webhosting platform and import the .sql file
+ Setup your PHP connections in
 
  - public_html/backend/connections/connections.php

+ Edit the following variables in the .ino file

  - servername with the direct link of sensor.php in your webhosting platform
  - api_key with your own api_key defined in public_html/backend/sensor_post.php

+ Reupload to your ESP8266 MCU
+ You should see the mileage covered on the deployed website in your webhosting platform
