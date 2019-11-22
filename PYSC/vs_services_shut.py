import os
import sys
import logging
import win32serviceutil

#Create and configure logger 
logging.basicConfig(filename="service_startup.log", 
                    format='%(asctime)s %(message)s', 
                    filemode='a')
                    
#Creating an object 
logger=logging.getLogger()

#Setting the threshold of logger to DEBUG 
logger.setLevel(logging.DEBUG)

#Test messages 
logger.debug("debug Message") 

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



serviceApache = 'Apache2'
serviceTomcat = 'Tomcat'
servicesMSSql = 'MSSQLSERVER'
serviceRmiRegistry = 'RMIRegSvc'
servicesRPCSS = 'RpcSs'
rmiServiceVNMServiceManager = 'rmiServiceVNMServiceManager'
rmiServiceVSPkgMgmtServiceManager = 'VSPkgMgmtServiceManager'
rmiServiceVSServiceManager = 'VSServiceManager'
rmiServiceVSQSServiceManager = 'VSQSServiceManager'

''' Service ONE '''
print("stoping Service " + serviceApache)
try:
    win32serviceutil.StopService(serviceApache)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + serviceApache)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()





''' Service TWO '''
print("stoping Service " + serviceTomcat)
try:
    win32serviceutil.StopService(serviceTomcat)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + serviceTomcat)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()

''' Service THREE '''

print("stoping Service " + servicesMSSql)
try:
    win32serviceutil.StopService(servicesMSSql)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + servicesMSSql)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()



''' Service FOUR '''

print("stoping Service " + rmiServiceVNMServiceManager)
try:
    win32serviceutil.StopService(rmiServiceVNMServiceManager)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + rmiServiceVNMServiceManager)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()


''' Service FIVE '''

print("stoping Service " + rmiServiceVSServiceManager)
try:
    win32serviceutil.StopService(rmiServiceVSServiceManager)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + rmiServiceVSServiceManager)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()


''' Service SIX '''

print("stoping Service " + rmiServiceVSPkgMgmtServiceManager)
try:
    win32serviceutil.StopService(rmiServiceVSPkgMgmtServiceManager)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + rmiServiceVSPkgMgmtServiceManager)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()

''' Service SEVEN '''

print("stoping Service " + rmiServiceVSQSServiceManager)
try:
    win32serviceutil.StopService(rmiServiceVSQSServiceManager)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + rmiServiceVSQSServiceManager)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()


''' Service EIGHT '''

print("stoping Service " + serviceRmiRegistry)
try:
    win32serviceutil.StopService(serviceRmiRegistry)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + serviceRmiRegistry)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()

   
   

''' Service NINE '''

print("stoping Service " + servicesRPCSS)
try:
    win32serviceutil.StopService(servicesRPCSS)
    print("service stoped...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while stoping service = " + servicesRPCSS)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()    
finally:
    print("SUCCESS=01")
   