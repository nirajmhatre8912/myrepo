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


def startMSService (serviceName):
    print("Strating service "+serviceName)
    try:
        win32serviceutil.StartService(serviceName)
        print("service started...");
    except Exception as e:
        print("Exception while starting service = " + serviceName)    
        print("ERROR=01")
        logger.debug("Exception" + str(e))
        sys.exit()
        


'''
startMSService(serviceWindowsSearch)
startMSService(serviceWindowsUpdate)
startMSService(serviceWindowsTime)
'''

print("strating Service " + serviceWindowsSearch)
try:
    win32serviceutil.StartService(serviceWindowsSearch)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceWindowsSearch)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()
print("strating Service " + serviceWindowsUpdate)
try:
    win32serviceutil.StartService(serviceWindowsUpdate)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceWindowsUpdate)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()


print("strating Service " + serviceWindowsTime)
try:
    win32serviceutil.StartService(serviceWindowsTime)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceWindowsTime)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()    
finally:
    print("SUCCESS=01")

