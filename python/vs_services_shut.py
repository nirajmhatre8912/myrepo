import os
import sys
import logging
import win32serviceutil
import time

#Create and configure logger 
logging.basicConfig(filename="service_shutdown.log", 
                    format='%(asctime)s %(message)s', 
                    filemode='a')
                    
#Creating an object 
logger=logging.getLogger()

#Setting the threshold of logger to DEBUG 
logger.setLevel(logging.DEBUG)

#Test messages 
logger.debug("debug Message") 

dict = {'Error': 'NOERROR'}
error_array = list()
success_array = list()

def stopMSService (serviceName):
    print("--------------------------------------------\nStoping service "+serviceName)
    try:
        win32serviceutil.StopService(serviceName)
        success_array.append(serviceName)
        time.sleep(5) 
        print("service stoped...");
    except Exception as e:
        print("Exception while stop service = " + serviceName)    
        print("ERROR=01")
        dict['Error'] = 'Error'
        error_array.append(serviceName)
        logger.debug("Exception" + str(e))
        #sys.exit()

''' All services need to be stop '''

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



''' Service ONE '''
print("--------------------------------------------\nstoping Service " + serviceApache)
try:
    win32serviceutil.StopService(serviceApache)
    time.sleep(5)
    success_array.append(serviceApache)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + serviceApache)
    print("ERROR=01")
    dict['Error'] = 'Error'
    error_array.append(serviceApache)
    logger.debug("Exception" + str(e))
    #sys.exit()

''' Service TWO '''
print("--------------------------------------------\nstoping Service " + serviceTomcat)
try:
    win32serviceutil.StopService(serviceTomcat)
    time.sleep(5)
    success_array.append(serviceTomcat)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + serviceTomcat)
    print("ERROR=01")
    dict['Error'] = 'Error'
    error_array.append(serviceTomcat)
    logger.debug("Exception" + str(e))
    #sys.exit()


''' Service FOUR '''

print("--------------------------------------------\nstoping Service " + rmiServiceVNMServiceManager)
try:
    win32serviceutil.StopService(rmiServiceVNMServiceManager)
    time.sleep(5)
    success_array.append(rmiServiceVNMServiceManager)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + rmiServiceVNMServiceManager)
    print("ERROR=01")
    dict['Error'] = 'Error'
    error_array.append(rmiServiceVNMServiceManager)
    logger.debug("Exception" + str(e))
    #sys.exit()


''' Service FIVE '''

print("--------------------------------------------\nstoping Service " + rmiServiceVSServiceManager)
try:
    win32serviceutil.StopService(rmiServiceVSServiceManager)
    time.sleep(5)
    success_array.append(rmiServiceVSServiceManager)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + rmiServiceVSServiceManager)
    print("ERROR=01")
    dict['Error'] = 'Error'
    error_array.append(rmiServiceVSServiceManager)
    logger.debug("Exception" + str(e))
    #sys.exit()

''' Service SIX '''

print("--------------------------------------------\nstoping Service " + rmiServiceVSPkgMgmtServiceManager)
try:
    win32serviceutil.StopService(rmiServiceVSPkgMgmtServiceManager)
    time.sleep(5)
    success_array.append(rmiServiceVSPkgMgmtServiceManager)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + rmiServiceVSPkgMgmtServiceManager)
    print("ERROR=01")
    dict['Error'] = 'Error'
    error_array.append(rmiServiceVSPkgMgmtServiceManager)
    logger.debug("Exception" + str(e))
    #sys.exit()

''' Service SEVEN '''

print("--------------------------------------------\nstoping Service " + rmiServiceVSQSServiceManager)
try:
    win32serviceutil.StopService(rmiServiceVSQSServiceManager)
    time.sleep(5)
    success_array.append(rmiServiceVSQSServiceManager)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + rmiServiceVSQSServiceManager)
    print("ERROR=01")
    dict['Error'] = 'Error'
    error_array.append(rmiServiceVSQSServiceManager)
    logger.debug("Exception" + str(e))
    #sys.exit()


''' Service THREE '''

print("--------------------------------------------\nstoping Service " + rmiServiceSQLServerAgent )
try:
    win32serviceutil.StopService(rmiServiceSQLServerAgent)
    time.sleep(5)
    success_array.append(rmiServiceSQLServerAgent)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + rmiServiceSQLServerAgent)
    print("ERROR=01")
    dict['Error'] = 'Error'
    error_array.append(rmiServiceSQLServerAgent)
    logger.debug("Exception" + str(e))
    #sys.exit()


print("--------------------------------------------\nstoping Service " + servicesMSSql)
try:
    win32serviceutil.StopService(servicesMSSql)
    time.sleep(5)
    success_array.append(servicesMSSql)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + servicesMSSql)
    print("ERROR=01")
    dict['Error'] = 'Error'
    error_array.append(servicesMSSql)
    logger.debug("Exception" + str(e))
    #sys.exit()

''' Service EIGHT '''

print("--------------------------------------------\nstoping Service " + serviceRmiRegistry)
try:
    win32serviceutil.StopService(serviceRmiRegistry)
    time.sleep(5)
    success_array.append(serviceRmiRegistry)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + serviceRmiRegistry)
    print("ERROR=01")
    dict['Error'] = 'Error'
    error_array.append(serviceRmiRegistry)
    logger.debug("Exception" + str(e))
    #sys.exit()    
finally:
    #print("SUCCESS=01")
    print("################### RESULT #####################")
    print("Print error :- " + dict['Error'])
    print("Updated Error List : ", error_array)
    print("Updated Success List : ", success_array)
    print("################### ###### #####################")



''' Service NINE '''

'''


print("--------------------------------------------\nstoping Service " + servicesRPCSS)
try:
    win32serviceutil.StopService(servicesRPCSS)
    time.sleep(5)
    success_array.append(servicesRPCSS)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + servicesRPCSS)
    print("ERROR=01")
    dict['Error'] = 'Error'
    error_array.append(servicesRPCSS)
    logger.debug("Exception" + str(e))
    #sys.exit()

'''