import os
import time
import sys
import win32serviceutil
import logging

#create and configure logger
logging.basicConfig(filename='service_art_shutdown.log',format='%(asctime)s %(message)s',filemode='a')

#create object
logger = logging.getLogger()

#setting the threshold of logger to Debug

logger.setLevel(logging.DEBUG)

#test message
logger.debug('Script execution started....')

serviceApache = 'Apache2'
serviceTomcat = 'Tomcat'
rmiServiceVSPkgMgmtServiceManager = 'VSPkgMgmtServiceManager' #
rmiServiceVSServiceManager = 'VSServiceManager' #
rmiServiceVSQSServiceManager = 'VSQSServiceManager' #
rmiServiceSQLServerAgent = 'SQLSERVERAGENT'
servicesMSSql = 'MSSQLSERVER'
serviceRmiRegistry = 'RMIRegSvc'

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

        

stopMSService(serviceApache,5)
stopMSService(serviceTomcat,5)
stopMSService(rmiServiceVSPkgMgmtServiceManager,5)
stopMSService(rmiServiceVSServiceManager,5)
stopMSService(rmiServiceVSQSServiceManager,5)
stopMSService(rmiServiceSQLServerAgent,5)
stopMSService(servicesMSSql,5)
stopMSService(serviceRmiRegistry,5)   


print("\n\n\n\n\n################### RESULT #####################")
print("Print error :- " + dict['Error'])
print("FAILED to stop : ", error_array)
print("Successfully STOPPED : ", success_array)
print("Already Stopped : ",service_all_array)
print("################### ###### #####################")