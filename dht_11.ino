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

  // con respecto a la luz percibida por el LDR
  valorLDR= analogRead(pinLDR);
  Serial.println("Humedad: "); 
  Serial.println(h); 
  Serial.println("Temperatura :"); 
  Serial.println(t); 
  Serial.println("Luminosidad: "); 
  Serial.println(valorLDR);
  // se imprime las variables de temperatura y humedad
  delay(5000); 
  //con un retraso de 500 milisegundos
}


