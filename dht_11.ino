#include <Dhcp.h>
#include <Dns.h>
#include <Ethernet.h>
#include <EthernetClient.h>
#include <EthernetServer.h>
#include <EthernetUdp.h>
#include <stdlib.h>
#include <SPI.h>
#include "DHT.h" 
#define DHTPIN 2 
#define DHTTYPE DHT11 
DHT dht(DHTPIN, DHTTYPE);
int pinLDR = A0;
int valorLDR = 0; 

byte mac[] = { 
0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
byte ip[] = { 10,2,50,59 };
byte server[] = { 31,170,165,240 };
IPAddress dnServer(8,8,8,8);
// the router's gateway address:
IPAddress gateway(10, 2, 50,1);

IPAddress subnet(255, 255, 255, 0);
EthernetClient client; 
String readString=String(30); 
//librerias del DHT 11
void setup() {
Ethernet.begin(mac, ip, dnServer, gateway, subnet);
dht.begin(); //Se inicia el sensor
delay(1000);
Serial.begin(9600); //Se inicia la comunicación serial 
}

void loop(){

  float h = dht.readHumidity(); //se lee la humedad
  float t= dht.readTemperature(); // se lee la temperatura
  valorLDR= analogRead(pinLDR);
  if (client.connect(server, 80)>0) {
  Serial.println("connected"); 
   client.print("GET http://www.climaunajma.esy.es/conexion.php?valor="); 
  // con respecto a la luz percibida por el LDR
 
  client.print(t); 
  client.print("&valor1=");
  client.print(h);
  client.print("&valor2=");
  client.print(valorLDR);
  client.println(" HTTP/1.0");
  client.println("User-Agent: Arduino 1.0");
  client.println();
  
  }
 client.stop();
  client.flush();
  delay(60000); 

}

