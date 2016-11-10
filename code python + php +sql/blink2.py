import RPi.GPIO as GPIO  
import time  
import sys
import MySQLdb as mdb
GPIO.setwarnings(False)


# blinking function  
def blink(pin): 
	con = mdb.connect('localhost', 'root', 'raspberry', 'doan');
	cur = con.cursor()
	cur.execute("select blink from onoff")
	
	
 	#for i in range(cur.rowcount):
        
        row = cur.fetchone()
       	if row[0] == 1: 
            GPIO.output(pin,GPIO.HIGH)  
            time.sleep(1)  
            GPIO.output(pin,GPIO.LOW)  
            time.sleep(1)  
        else:

       	    return  
# to use Raspberry Pi board pin numbers  
GPIO.setmode(GPIO.BCM) 
# set up GPIO output channel  
GPIO.setup(20, GPIO.OUT)  
# blink GPIO17 50 times  

while True:  
 
  blink(20)  
	
	     
