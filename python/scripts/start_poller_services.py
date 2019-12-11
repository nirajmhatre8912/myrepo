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


serviceApache = 'Apache2'
serviceTomcat = 'Tomcat'
rmiServiceVSServiceManager = 'VSServiceManager'
rmiServiceVSPkgMgmtServiceManager = 'VSPkgMgmtServiceManager'
rmiServiceVSQSServiceManager = 'VSQSServiceManager'
rmiServiceVNAServiceManager = 'VNAServiceManager'
rmiServiceVNPServiceManager = 'VNPServiceManager'
rmiServiceSFLOWServiceManager = 'SFLOWServiceManager'
rmiServiceVFRServiceManager = 'VFRServiceManager'
rmiServiceVFServiceManager = 'VFServiceManager'
rmiServiceVSServerAgent = 'VSServerAgent'
rmiServiceSQLServerAgent = 'SQLSERVERAGENT'
servicesMSSql = 'MSSQLSERVER'
serviceRmiRegistry = 'RMIRegSvc'
servicesRPCSS = 'RpcSs'

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
            
        
        
startMSService(serviceApache,3)
startMSService(serviceTomcat,3)
startMSService(rmiServiceVSServiceManager,3)
startMSService(rmiServiceVSPkgMgmtServiceManager,3)
startMSService(rmiServiceVSQSServiceManager,3)
startMSService(rmiServiceVNAServiceManager,3)
startMSService(rmiServiceVNPServiceManager,3)
startMSService(rmiServiceSFLOWServiceManager,3)
startMSService(rmiServiceVFRServiceManager,3)
startMSService(rmiServiceVFServiceManager,3)
startMSService(rmiServiceVSServerAgent,3)
startMSService(rmiServiceSQLServerAgent,60)
startMSService(servicesMSSql,3)
startMSService(serviceRmiRegistry,3)        
        
print("\n\n\n\n\n################### RESULT #####################")
print("Print error :- " + dict['Error'])
print("Error out services : ", error_array)
print("started services : ", success_array)
print("already running : ", service_all_array)
print("################### ###### #####################")

