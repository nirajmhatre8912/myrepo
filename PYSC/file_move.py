import shutil
import datetime
import logging
import configparser

#Create and configure logger 
logging.basicConfig(filename="file_move.log", 
                    format='%(asctime)s %(message)s', 
                    filemode='a')
                    
#Creating an object 
logger=logging.getLogger()

def userDefFunction (i,x,dst):

    fileName = i + "" +x+ ".txt" 
    src = "C:\\Program Files (x86)\\VSCommon\\webroot\\logs\\" + fileName
    logger.debug("file to be moved" + fileName) 
    logger.debug("Source = " + src)
    logger.debug("Destination = " + dst)
    try:
         shutil.move(src, dst)
         logger.debug("Moved Successfully..")
    except Exception as e:
         print("An exception occurred = " + str(e))
         logger.debug("Exception" + str(e))
    return;

#Setting the threshold of logger to DEBUG 
logger.setLevel(logging.DEBUG)

#Test messages 
logger.debug("debug Message") 


config = configparser.ConfigParser()
config.read('ConfigFile.properties')
config.sections()

prevDay = datetime.datetime.now()-datetime.timedelta(1)
x = prevDay.strftime('%Y%m%d')
print(x)

filePrefix = config['FILENAME']['log.filename']
dst = "D:\\02_tmp\\"

list = filePrefix.split (",")

#filePrefix = config.get('FILENAME', 'log.filename');
#filePrefix = "saa"
length = len(list)

for i in range(length):
    print(list[i])
    userDefFunction(list[i],x,dst)
