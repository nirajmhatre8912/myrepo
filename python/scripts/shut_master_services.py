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
logger.debug("script execution started...") 


serviceApache = 'Apache2'
serviceTomcat = 'Tomcat'
rmiServiceVNMServiceManager = 'VNMServiceManager'
rmiServiceVSPkgMgmtServiceManager = 'VSPkgMgmtServiceManager'
rmiServiceVSServiceManager = 'VSServiceManager'
rmiServiceVSQSServiceManager = 'VSQSServiceManager'
rmiServiceSQLServerAgent = 'SQLSERVERAGENT'
servicesMSSql = 'MSSQLSERVER'
serviceRmiRegistry = 'RMIRegSvc'
servicesRPCSS = 'RpcSs'

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
stopMSService(rmiServiceVNMServiceManager,5)
stopMSService(rmiServiceVSServiceManager,5)
stopMSService(rmiServiceVSPkgMgmtServiceManager,5)
stopMSService(rmiServiceVSQSServiceManager,5)
stopMSService(rmiServiceSQLServerAgent,5)
stopMSService(servicesMSSql,5)
stopMSService(serviceRmiRegistry,5)
#stopMSService(servicesRPCSS,3)


print("\n\n\n\n\n################### RESULT #####################")
print("Print error :- " + dict['Error'])
print("FAILED to stop : ", error_array)
print("Successfully STOPPED : ", success_array)
print("Already Stopped : ",service_all_array)
print("################### ###### #####################")