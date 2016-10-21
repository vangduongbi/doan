#!/usr/bin/python
# -*- coding: utf-8 -*-

import MySQLdb as mdb
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)
GPIO.setup(18, GPIO.OUT)
state = GPIO.input(18)
print state
con = mdb.connect('localhost', 'root', 'raspberry', 'led');

with con:
    
    cur = con.cursor()
   

cur.execute(""" INSERT INTO oper (stt) 
	VALUES(%s)
    """, (state))
	

    

con.commit()
 
  