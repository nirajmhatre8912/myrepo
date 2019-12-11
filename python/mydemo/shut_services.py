import os
import sys
import win32serviceutil
import logging
import time

#Create and configure logger 
logging.basicConfig(filename="windows_service_stop.log", 
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

dict = {'Error': 'NOERROR'}
error_array = list()
success_array = list()
service_all_array = list()
strcmp = "The service has not been started"


def stopMSService (serviceName,timeout):
    OP=''
    print("--------------------------------------------\nStoping service "+serviceName)
    try:
        win32serviceutil.StopService(serviceName)
        time.sleep(timeout)
        print("service stoped...")
        success_array.append(serviceName)
    except Exception as e:
        print("*******Failed stop service = " + serviceName + "*******")    
        dict['Error'] = 'Error'
        error_array.append(serviceName)
        logger.debug("Exception" + str(e))
        OP=str(e)
        #sys.exit()
    finally:
        if ( strcmp in OP ):
            service_all_array.append(serviceName)        
            print(serviceName + " Already Stopped...")

        


stopMSService(serviceWindowsSearch,3)
stopMSService(serviceWindowsUpdate,3)
stopMSService(serviceWindowsTime,3)

print("\n\n\n\n\n################### RESULT #####################")
print("Print error :- " + dict['Error'])
print("FAILED to stop : ", error_array)
print("Successfully STOPPED : ", success_array)
print("Already Stopped : ",service_all_array)
print("################### ###### #####################")




restart = input("Do you wish to restart your computer ? (yes / no): ") 
  
if restart == 'no': 
    sys.exit() 
else: 
    os.system("shutdown /r /t 60 /c \"Unplanned : Application maintainance - to cancel execute shutdown /a \" /d u:4:1")
