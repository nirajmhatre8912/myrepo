import os
import logging
import sys
import win32serviceutil
import time

#Create and configure logger 
logging.basicConfig(filename="service_startup.log", 
                    format='%(asctime)s %(message)s', 
                    filemode='a')

#creating Object
logger=logging.getLogger()

#Setting the threshold of logger to DEBUG
logger.setLevel(logging.DEBUG)

#Test messages 
logger.debug("debug Message")

dict = {'Error': 'NOERROR'}
error_array = list()
success_array = list()
service_all_array = list()
strcmp = "instance of the service is already running"

'''
This function will start Services from windows services
argument 1 - service name
call - startMSService(serviceWindowsSearch)
'''
OP=''

def startMSService (serviceName):
    print("Strating service "+serviceName)
    try:
        win32serviceutil.StartService(serviceName)
        success_array.append(serviceName)
        time.sleep(5)
        print("service started...");
    except Exception as e:
        print("Exception while starting service = " + serviceName)    
        #print("ERROR=01")
        dict['Error'] = 'Error'
        OP = str(e)
        error_array.append(serviceName)
        logger.debug("Exception" + str(e))
        #sys.exit()
    finally:
        if ( strcmp in OP ):
            service_all_array.append(serviceName)        
            print(serviceName + "Already Running")
            
        
            

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

''' SERVICE ONE  '''
OP=''
print("--------------------------------------------\nstrating Service " + serviceApache)
try:
    win32serviceutil.StartService(serviceApache)
    time.sleep(5)
    success_array.append(serviceApache)    
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceApache)
    #print("ERROR=01")
    error_array.append(serviceApache)
    OP = str(e)
    dict['Error'] = 'Error'
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
    if ( strcmp in OP ):
        service_all_array.append(serviceApache)
        error_array.remove(serviceApache)            
        print(serviceApache + "Already Running")
            
        

''' SERVICE TWO  '''
OP=''
print("--------------------------------------------\nstrating Service " + serviceTomcat)
try:
    win32serviceutil.StartService(serviceTomcat)
    time.sleep(5)
    success_array.append(serviceTomcat)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceTomcat)
    #print("ERROR=01")
    error_array.append(serviceTomcat)
    OP = str(e)
    dict['Error'] = 'Error'
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
    if ( strcmp in OP ):
        service_all_array.append(serviceTomcat)
        error_array.remove(serviceTomcat)            
        print(serviceTomcat + "Already Running")
            
        

''' SERVICE FOUR  '''
OP=''
print("--------------------------------------------\nstrating Service " + rmiServiceVNMServiceManager)
try:
    win32serviceutil.StartService(rmiServiceVNMServiceManager)
    time.sleep(5)
    success_array.append(rmiServiceVNMServiceManager)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + rmiServiceVNMServiceManager)
    #print("ERROR=01")
    dict['Error'] = 'Error'
    OP = str(e)
    error_array.append(rmiServiceVNMServiceManager)
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
    if ( strcmp in OP ):
        service_all_array.append(rmiServiceVNMServiceManager)
        error_array.remove(rmiServiceVNMServiceManager)            
        print(rmiServiceVNMServiceManager + "Already Running")

            
        

''' SERVICE FIVE  '''
OP=''
print("--------------------------------------------\nstrating Service " + rmiServiceVSPkgMgmtServiceManager)
try:
    win32serviceutil.StartService(rmiServiceVSPkgMgmtServiceManager)
    time.sleep(5)
    success_array.append(rmiServiceVSPkgMgmtServiceManager)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + rmiServiceVSPkgMgmtServiceManager)
    #print("ERROR=01")
    dict['Error'] = 'Error'
    OP = str(e)
    error_array.append(rmiServiceVSPkgMgmtServiceManager)
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
    if ( strcmp in OP ):
        service_all_array.append(rmiServiceVSPkgMgmtServiceManager)
        error_array.remove(rmiServiceVSPkgMgmtServiceManager)            
        print(rmiServiceVSPkgMgmtServiceManager + "Already Running")
            
        

''' SERVICE SIX  '''

OP=''
print("--------------------------------------------\nstrating Service " + rmiServiceVSServiceManager)
try:
    win32serviceutil.StartService(rmiServiceVSServiceManager)
    time.sleep(5)
    success_array.append(rmiServiceVSServiceManager)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + rmiServiceVSServiceManager)
    #print("ERROR=01")
    dict['Error'] = 'Error'
    OP = str(e)
    error_array.append(rmiServiceVSServiceManager)
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
    if ( strcmp in OP ):
        service_all_array.append(rmiServiceVSServiceManager)
        error_array.remove(rmiServiceVSServiceManager)            
        print(rmiServiceVSServiceManager + "Already Running")
    
       
        

''' SERVICE SEVEN  '''
OP=''
print("--------------------------------------------\nstrating Service " + rmiServiceVSQSServiceManager)
try:
    win32serviceutil.StartService(rmiServiceVSQSServiceManager)
    time.sleep(5)
    success_array.append(rmiServiceVSQSServiceManager)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + rmiServiceVSQSServiceManager)
    #print("ERROR=01")
    dict['Error'] = 'Error'
    OP = str(e)
    error_array.append(rmiServiceVSQSServiceManager)
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
    if ( strcmp in OP ):
        service_all_array.append(rmiServiceVSQSServiceManager)
        error_array.remove(rmiServiceVSQSServiceManager)            
        print(rmiServiceVSQSServiceManager + "Already Running")
    
       
        


''' SERVICE THREE  '''

OP=''
print("--------------------------------------------\nstrating Service " + rmiServiceSQLServerAgent)
try:
    win32serviceutil.StartService(rmiServiceSQLServerAgent)
    time.sleep(5)
    success_array.append(rmiServiceSQLServerAgent)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + rmiServiceSQLServerAgent)
    #print("ERROR=01")
    dict['Error'] = 'Error'
    OP = str(e)
    error_array.append(rmiServiceSQLServerAgent)
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
    if ( strcmp in OP ):
        service_all_array.append(rmiServiceSQLServerAgent)
        error_array.remove(rmiServiceSQLServerAgent)            
        print(rmiServiceSQLServerAgent + "Already Running")
            
        

OP=''
print("--------------------------------------------\nstrating Service " + servicesMSSql)
try:
    win32serviceutil.StartService(servicesMSSql)
    time.sleep(5)
    success_array.append(servicesMSSql)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + servicesMSSql)
    #print("ERROR=01")
    dict['Error'] = 'Error'
    OP = str(e)
    error_array.append(servicesMSSql)
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
    if ( strcmp in OP ):
        service_all_array.append(servicesMSSql)
        error_array.remove(servicesMSSql)            
        print(servicesMSSql + "Already Running")
    
       
        


''' SERVICE EIGHT  '''
OP=''
print("--------------------------------------------\nstrating Service " + serviceRmiRegistry)
try:
    win32serviceutil.StartService(serviceRmiRegistry)
    time.sleep(5)
    success_array.append(serviceRmiRegistry)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + serviceRmiRegistry)
    #print("ERROR=01")
    OP = str(e)
    dict['Error'] = 'Error'
    error_array.append(serviceRmiRegistry)
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
    if ( strcmp in OP ):
        service_all_array.append(serviceRmiRegistry)
        error_array.remove(serviceRmiRegistry)            
        print(serviceRmiRegistry + "Already Running")
    #print("SUCCESS=01")
    print("################### RESULT #####################")
    print("Print error :- " + dict['Error'])
    print("Error out services : ", error_array)
    print("Successfully started : ", success_array)
    print("Already running : ",service_all_array)
    print("################### ###### #####################")




''' SERVICE NINE '''
'''
OP=''
print("strating Service " + servicesRPCSS)
try:
    win32serviceutil.StartService(servicesRPCSS)
    time.sleep(5)
    success_array.append(servicesRPCSS)
    print("service started...");
except Exception as e:
    #print("An exception occurred = " + str(e))
    print("Exception while starting service = " + servicesRPCSS)
    print("ERROR=01")
    OP = str(e)
    dict['Error'] = 'Error'
    error_array.append(servicesRPCSS)
    logger.debug("Exception" + str(e))
    #sys.exit()
finally:
        if ( strcmp in OP ):
            service_all_array.append(servicesRPCSS)
            error_array.remove(servicesRPCSS)            
            print(servicesRPCSS + "Already Running")

'''