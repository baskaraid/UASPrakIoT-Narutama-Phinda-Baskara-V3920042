import serial
import time
import requests
import json
arduino = serial.Serial('COM2', 9600)

def ledControl(cmd):
    arduino.write(cmd.encode())
    
while True:
    rawArd = arduino.readline()
    data = rawArd[0:len(rawArd)-2].decode("utf-8")
    payload = {'username': data, 'password': 'ON'}
    resp = requests.get("http://localhost/IoTUAS/", params=payload)
    print(resp.text)
  

   
