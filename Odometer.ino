//#include <TinyGPS.h>



/*********************************************************************
  This is the code for Fetching your location from Google Geolocation API

  This code is provided by
  techiesms
*********************************************************************/

#include <ArduinoJson.h>
#include <ESP8266WiFi.h>
#include <WiFiClient.h>

WiFiClient wifiClient;

#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

char myssid[] = "rpi";         // your network SSID (name)
char mypass[] = "ellen123";          // your network password

// REPLACE with your Domain name and URL path or IP address with path
const char* serverName = "http://fleettrans.000webhostapp.com/backend/sensor_post.php";

String apiKeyValue = "tPmAT5Ab3j7F9";

//Credentials for Google GeoLocation API...
const char* Host = "www.googleapis.com";
String thisPage = "/geolocation/v1/geolocate?key=";
String key = "AIzaSyArU1DD-86Nj2pLoWJN3bGYAUYt347VyXY";

int status = WL_IDLE_STATUS;
String jsonString = "{\n";

double latitude    = 0.0;
double longitude   = 0.0;

double distance = 0.0;
double value = 0.0;

double change_in_latitude = 0.0;
double change_in_longitude = 0.0;

double past_latitude = 0.0;
double past_longitude = 0.0;

double latitude1 = 0.0;
double latitude2 = 0.0;

double accuracy    = 0.0;
int more_text = 1; // set to 1 for more debug output




void setup()   {
  Serial.begin(9600);


  Serial.println("Start");
  // Set WiFi to station mode and disconnect from an AP if it was previously connected
  WiFi.mode(WIFI_STA);
  WiFi.disconnect();
  delay(100);
  Serial.println("Setup done");
  // We start by connecting to a WiFi network
  Serial.print("Connecting to ");
  Serial.println(myssid);
  WiFi.begin(myssid, mypass);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println(".");


}


void loop() {

  char bssid[6];
  DynamicJsonBuffer jsonBuffer;
  Serial.println("scan start");
  // WiFi.scanNetworks will return the number of networks found
  int n = WiFi.scanNetworks();
  Serial.println("scan done");
  if (n == 0)
    Serial.println("no networks found");
  else
  {
    Serial.print(n);
    Serial.println(" networks found...");

    if (more_text) {
      // Print out the formatted json...
      Serial.println("{");
      Serial.println("\"homeMobileCountryCode\": 234,");  // this is a real UK MCC
      Serial.println("\"homeMobileNetworkCode\": 27,");   // and a real UK MNC
      Serial.println("\"radioType\": \"gsm\",");          // for gsm
      Serial.println("\"carrier\": \"Vodafone\",");       // associated with Vodafone
      //Serial.println("\"cellTowers\": [");                // I'm not reporting any cell towers
      //Serial.println("],");
      Serial.println("\"wifiAccessPoints\": [");
      for (int i = 0; i < n; ++i)
      {
        Serial.println("{");
        Serial.print("\"macAddress\" : \"");
        Serial.print(WiFi.BSSIDstr(i));
        Serial.println("\",");
        Serial.print("\"signalStrength\": ");
        Serial.println(WiFi.RSSI(i));
        if (i < n - 1)
        {
          Serial.println("},");
        }
        else
        {
          Serial.println("}");
        }
      }
      Serial.println("]");
      Serial.println("}");
    }
    Serial.println(" ");
  }
  // now build the jsonString...
  jsonString = "{\n";
  jsonString += "\"homeMobileCountryCode\": 234,\n"; // this is a real UK MCC
  jsonString += "\"homeMobileNetworkCode\": 27,\n";  // and a real UK MNC
  jsonString += "\"radioType\": \"gsm\",\n";         // for gsm
  jsonString += "\"carrier\": \"Vodafone\",\n";      // associated with Vodafone
  jsonString += "\"wifiAccessPoints\": [\n";
  for (int j = 0; j < n; ++j)
  {
    jsonString += "{\n";
    jsonString += "\"macAddress\" : \"";
    jsonString += (WiFi.BSSIDstr(j));
    jsonString += "\",\n";
    jsonString += "\"signalStrength\": ";
    jsonString += WiFi.RSSI(j);
    jsonString += "\n";
    if (j < n - 1)
    {
      jsonString += "},\n";
    }
    else
    {
      jsonString += "}\n";
    }
  }
  jsonString += ("]\n");
  jsonString += ("}\n");
  //--------------------------------------------------------------------

  Serial.println("");

  WiFiClientSecure client;
  client.setInsecure();

  //Connect to the client and make the api call
  Serial.print("Requesting URL: ");
  Serial.println("https://" + (String)Host + thisPage + "AIzaSyArU1DD-86Nj2pLoWJN3bGYAUYt347VyXY");
  Serial.println(" ");
  if (client.connect(Host, 443)) {
    Serial.println("Connected");
    client.println("POST " + thisPage + key + " HTTP/1.1");
    client.println("Host: " + (String)Host);
    client.println("Connection: close");
    client.println("Content-Type: application/json");
    client.println("User-Agent: Arduino/1.0");
    client.print("Content-Length: ");
    client.println(jsonString.length());
    client.println();
    client.print(jsonString);
    delay(500);
  }

  //Read and parse all the lines of the reply from server
  while (client.available()) {
    String line = client.readStringUntil('\r');
    if (more_text) {
      Serial.print(line);
    }
    JsonObject& root = jsonBuffer.parseObject(line);
    if (root.success()) {
      latitude    = root["location"]["lat"];
      longitude   = root["location"]["lng"];
      accuracy   = root["accuracy"];
    }
  }

  Serial.println("closing connection");
  Serial.println();
  client.stop();

  Serial.print("Latitude = ");
  Serial.println(latitude, 6);
  Serial.print("Longitude = ");
  Serial.println(longitude, 6);
  Serial.print("Accuracy = ");
  Serial.println(accuracy);

  delay(2000);

 //Wait for calibration, let the geolocation api be fully connected
  if(millis() > 60000){
  value = calculate_distance();
  distance += value;

  send_to_fleetdb();

  }


  past_longitude = longitude;
  past_latitude = latitude; 

  //distance = TinyGPS::distance_between(latitude, longitude, past_latitude, past_longitude);
}

void send_to_fleetdb() {

  if (WiFi.status() == WL_CONNECTED) {

    HTTPClient http;

    // Your Domain name with URL path or IP address with path
    http.begin(wifiClient, serverName);

    // Specify content-type header
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");

    // Prepare your HTTP POST request data
    String httpRequestData = "api_key=" + apiKeyValue + "&distance=" + String(distance)
                             + "";
    Serial.print("httpRequestData: ");
    Serial.println(httpRequestData);

    // Send HTTP POST request
    int httpResponseCode = http.POST(httpRequestData);

    if (httpResponseCode > 0) {
      Serial.print("HTTP Response code: ");
      Serial.println(httpResponseCode);
    }
    else {
      Serial.print("Error code: ");
      Serial.println(httpResponseCode);
    }
    // Free resources
    http.end();
  }
  else {
    Serial.println("WiFi Disconnected");
  }
  delay(3000);

}

double calculate_distance() {

  double earth_radius = 6371; // KM

  latitude1 = past_latitude * PI / 180; // φ, λ in radians
  latitude2 = latitude * PI / 180;

  change_in_latitude = (latitude - past_latitude) * PI / 180;
  change_in_longitude = (longitude - past_longitude) * PI / 180;

  double a = (pow(sin(change_in_latitude / 2), 2) +
              (cos(latitude1) * cos(latitude2) *
               pow(sin(change_in_longitude / 2), 2)));

  double c = 2 * atan2(sqrt(a), sqrt(1 - a));

  double d = earth_radius * c; // in KM
  return d;
}
