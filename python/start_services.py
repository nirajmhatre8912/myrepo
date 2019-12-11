import os
import sys
import win32serviceutil
import logging
import time
#Create and configure logger 
logging.basicConfig(filename="windows_service_strat.log", 
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
strcmp = "instance of the service is already running"


def startMSService (serviceName,timeout):
    OP = ''
    print("--------------------------------------------\nStarting service "+serviceName)
    try:
        win32serviceutil.StartService(serviceName)
        time.sleep(timeout)
        success_array.append(serviceName)
        print("service started...")
    except Exception as e:
        print("Error to start service = " + serviceName)    
        OP = str(e)
        dict['Error'] = 'Error'
        error_array.append(serviceName)
        logger.debug("Exception" + str(e))
        #sys.exit()
    finally:
        if ( strcmp in OP ):
            service_all_array.append(serviceName)        
            print(serviceName + " <= Already Running")
            
        
        
        
        



startMSService(serviceWindowsSearch,1)
startMSService(serviceWindowsUpdate,1)
startMSService(serviceWindowsTime,1)
print("\n\n\n\n\n################### RESULT #####################")
print("Print error :- " + dict['Error'])
print("Error out services : ", error_array)
print("started services : ", success_array)
print("already running : ", service_all_array)
print("################### ###### #####################")

'''
OP = ''
print("strating Service " + serviceWindowsSearch)
try:
    win32serviceutil.StartService(serviceWindowsSearch)
    success_array.append(serviceWindowsSearch)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceWindowsSearch)
    print("ERROR=01")
    OP=str(e)
    dict['Error'] = 'Error'
    error_array.append(serviceWindowsSearch)
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
        if ( strcmp in OP ):
            service_all_array.append(serviceWindowsSearch)
            error_array.remove(serviceWindowsSearch)            
            print(serviceWindowsSearch + "Already Running")
            
        

OP = ''    
print("strating Service " + serviceWindowsUpdate)
try:
    win32serviceutil.StartService(serviceWindowsUpdate)
    success_array.append(serviceWindowsUpdate)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceWindowsUpdate)
    print("ERROR=01")
    OP=str(e)
    dict['Error'] = 'Error'
    error_array.append(serviceWindowsUpdate)
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
        if ( strcmp in OP ):
            service_all_array.append(serviceWindowsUpdate)
            error_array.remove(serviceWindowsUpdate)            
            print(serviceWindowsUpdate + "Already Running")
            
        
    
OP = ''
print("strating Service " + serviceWindowsTime)
try:
    win32serviceutil.StartService(serviceWindowsTime)
    success_array.append(serviceWindowsTime)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceWindowsTime)
    print("ERROR=01")
    OP=str(e)
    dict['Error'] = 'Error'
    error_array.append(serviceWindowsTime)
    logger.debug("Exception" + str(e))
    #sys.exit()    
finally:
    if ( strcmp in OP ):
            service_all_array.append(serviceWindowsTime)
            error_array.remove(serviceWindowsTime)            
            print(serviceWindowsTime + "Already Running")
    
    print("SUCCESS=01")
   
'''