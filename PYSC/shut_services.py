import os
import sys
import win32serviceutil
import logging

#Create and configure logger 
logging.basicConfig(filename="file_move.log", 
                    format='%(asctime)s %(message)s', 
                    filemode='a')
                    
#Creating an object 
logger=logging.getLogger()

#Setting the threshold of logger to DEBUG 
logger.setLevel(logging.DEBUG)

#Test messages 
logger.debug("debug Message") 


serviceWindowsSearch = "Windows Search"
serviceWindowsUpdate = "Windows Update"
serviceWindowsTime = "Windows Time"


def stopMSService (serviceName):
    print("Stoping service "+serviceName)
    try:
        win32serviceutil.StopService(serviceName)
        print("service stoped...");
    except Exception as e:
        print("Exception while stop service = " + serviceName)    
        print("ERROR=01")
        logger.debug("Exception" + str(e))
        sys.exit()
        


'''
stopMSService(serviceWindowsSearch)
stopMSService(serviceWindowsUpdate)
stopMSService(serviceWindowsTime)
'''

print("stoping Service " + serviceWindowsSearch)
try:
    win32serviceutil.StopService(serviceWindowsSearch)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + serviceWindowsSearch)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()
print("stoping Service " + serviceWindowsUpdate)
try:
    win32serviceutil.StopService(serviceWindowsUpdate)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + serviceWindowsUpdate)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()

print("stoping Service " + serviceWindowsTime)
try:
    win32serviceutil.StopService(serviceWindowsTime)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + serviceWindowsTime)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()    
finally:
    print("SUCCESS=01")

