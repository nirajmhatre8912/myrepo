import os
import logging
import sys

#create and configure logger
logging.basicConfig(filenane='service_shutdown.log',format='%(asctime)s %(message)s',filemode='a')

#creating Object
logger=logging.getLogger()

#Setting the threshold of logger to DEBUG 
logger.setLevel(logging.DEBUG)

#Test messages 
logger.debug("debug Message")

'''
This function will start Services from windows services
argument 1 - service name
call - startMSService(serviceWindowsSearch)
'''

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
        

serviceApache = 'Apache2'
serviceTomcat = 'Tomcat'
servicesMSSql = 'MSSQLSERVER'
serviceRmiRegistry = 'RMIRegSvc'
servicesRPCSS = 'RpcSs'
rmiServiceVNMServiceManager = 'rmiServiceVNMServiceManager'
rmiServiceVSPkgMgmtServiceManager = 'VSPkgMgmtServiceManager'
rmiServiceVSServiceManager = 'VSServiceManager'
rmiServiceVSQSServiceManager = 'VSQSServiceManager'

''' SERVICE ONE  '''

print("strating Service " + serviceApache)
try:
    win32serviceutil.StartService(serviceApache)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceApache)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()

''' SERVICE TWO  '''

print("strating Service " + serviceTomcat)
try:
    win32serviceutil.StartService(serviceTomcat)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceTomcat)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()


''' SERVICE THREE  '''

print("strating Service " + servicesMSSql)
try:
    win32serviceutil.StartService(servicesMSSql)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + servicesMSSql)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()

''' SERVICE FOUR  '''

print("strating Service " + rmiServiceVNMServiceManager)
try:
    win32serviceutil.StartService(rmiServiceVNMServiceManager)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + rmiServiceVNMServiceManager)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()

''' SERVICE FIVE  '''

print("strating Service " + rmiServiceVSPkgMgmtServiceManager)
try:
    win32serviceutil.StartService(rmiServiceVSPkgMgmtServiceManager)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + rmiServiceVSPkgMgmtServiceManager)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()

''' SERVICE SIX  '''


print("strating Service " + rmiServiceVSServiceManager)
try:
    win32serviceutil.StartService(rmiServiceVSServiceManager)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + rmiServiceVSServiceManager)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()

''' SERVICE SEVEN  '''

print("strating Service " + rmiServiceVSQSServiceManager)
try:
    win32serviceutil.StartService(rmiServiceVSQSServiceManager)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + rmiServiceVSQSServiceManager)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()

''' SERVICE EIGHT  '''

print("strating Service " + serviceRmiRegistry)
try:
    win32serviceutil.StartService(serviceRmiRegistry)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceRmiRegistry)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()


''' SERVICE NINE '''

print("strating Service " + servicesRPCSS)
try:
    win32serviceutil.StartService(servicesRPCSS)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + servicesRPCSS)
    print("ERROR=01")
    logger.debug("Exception" + str(e))
    sys.exit()
finally:
    print("SUCCESS=01")
