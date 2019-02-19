## Web App to display local weather based off DHT11 sensor connected to ESP12E


#### Prerequisites:

1. Any Microcontroller with ESP8266 MicroChip <br>

Recommended : NodeMCU ESP12E 1.0 <br>

2. DHT11 Humidity & Temperature Sensor. <br>

3. Server/Local Machine with running SQL and Apache server
Recommended: <br>

For Local Machine - XAMMP/WAMP & <br>

For Server - Nginx,Apache


#### Installation Tutorial:

1. Create a table in your SQL Database :<br>

![alt text](https://github.com/MohitMourya/MiniWeatherStation/blob/master/Screenshots/table.png) <br>

2. Connect DHT11 sensor to ESP12E DATA PIN - D1. <br> 

3. Change WIFI SSID,PASSWORD,HOST URL in arduino code. Change board settings according to your ESP and flash it.<br>

4. Check if the data is being written on your SQL Database. <br>

5. Now make changes in .php files according to your SQL credentials and directory to .php files located in Web_Files folder: <br>

6. Also make changes in directories of .php files in index.html <br>


#### Preview Screenshots : <br><br>
###### Index.html
![alt text](https://github.com/MohitMourya/MiniWeatherStation/blob/master/Screenshots/index.png) <br>
###### Weather Logs
![alt text](https://github.com/MohitMourya/MiniWeatherStation/blob/master/Screenshots/logs.png) <br>
###### Export as .CSV
![alt text](https://github.com/MohitMourya/MiniWeatherStation/blob/master/Screenshots/export.png) <br>
