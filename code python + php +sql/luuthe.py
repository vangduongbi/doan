import MFRC522
import signal
import time
import MySQLdb as mdb
from time import strftime,localtime
continue_reading = True
MIFAREReader = MFRC522.MFRC522()


#def end_read(signal, frame):
 # global continue_reading
  #continue_reading = True
  #print "Ctrl+C captured, ending read."
  #MIFAREReader.GPIO_CLEEN()

#signal.signal(signal.SIGINT, end_read)

def identity():
    reading = True
    while True:
        MIFAREReader = MFRC522.MFRC522()

        (status,TagType) = MIFAREReader.MFRC522_Request(MIFAREReader.PICC_REQIDL)

        if status == MIFAREReader.MI_OK:
            print("Card detected. Identifying...")

        (status,backData) = MIFAREReader.MFRC522_Anticoll()
        if status == MIFAREReader.MI_OK:
            print ("Card ID: "+str(backData[0])+""+str(backData[1])+""+str(backData[2])+""+str(backData[3])+""+str(backData[4]))
            MIFAREReader.AntennaOff()
            # reading=False
            return str(backData[0])+str(backData[1])+str(backData[2])+str(backData[3])+str(backData[4])


def read():
    cardId=identity()
    return cardId

def main():
   
   currentTime=strftime("%d-%m-%Y %H:%M:%S", localtime())
   con = mdb.connect('localhost', 'root', 'raspberry', 'doan');
   cur = con.cursor()
   cur.execute("select luuthe from onoff")
   row = cur.fetchone()
       

   if row[0] == 1:

  	 cardid=read()
  	 print cardid
    
 	 
   	

  	 cur.execute(""" INSERT INTO oper (stt,time) 
   	 VALUES(%s,%s)
  	  """, (cardid,currentTime))
  

    

  	 con.commit()
   else:
	 return

if __name__ == '__main__':
       while True:
    	 main()
	 time.sleep(0.5)
  




