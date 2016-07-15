#include "DHT.h" 
#define DHTPIN 2 
#define DHTTYPE DHT11 
DHT dht(DHTPIN, DHTTYPE);
int pinLDR = A0;
int valorLDR = 0; 

//librerias del DHT 11
void setup() {
Serial.begin(9600); //Se inicia la comunicación serial 
dht.begin(); //Se inicia el sensor
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

