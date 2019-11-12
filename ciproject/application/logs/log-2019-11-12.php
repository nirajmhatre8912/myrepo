<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2019-11-12 10:34:36 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:34:36 --> No URI present. Default controller set.
DEBUG - 2019-11-12 10:34:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-12 10:34:36 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'ciproject' C:\xampp\htdocs\ciproject\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2019-11-12 10:34:36 --> Unable to connect to the database
DEBUG - 2019-11-12 10:38:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:38:00 --> No URI present. Default controller set.
DEBUG - 2019-11-12 10:38:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:38:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:38:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:38:00 --> Total execution time: 0.4620
DEBUG - 2019-11-12 10:38:02 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:38:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:38:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:38:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:38:02 --> index method called... Login 
DEBUG - 2019-11-12 10:38:02 --> validation for User login completed...
DEBUG - 2019-11-12 10:38:02 --> Some variable did not contain a value.
DEBUG - 2019-11-12 10:38:02 --> Total execution time: 0.1700
DEBUG - 2019-11-12 10:38:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:38:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:38:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:38:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:38:23 --> index method called... Login 
DEBUG - 2019-11-12 10:38:23 --> validation for User login completed...
DEBUG - 2019-11-12 10:38:23 --> Login form submited...
DEBUG - 2019-11-12 10:38:23 --> User_Login_Model model loaded..
DEBUG - 2019-11-12 10:38:24 --> calling validatelogin() 
DEBUG - 2019-11-12 10:38:24 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-11-12 10:38:24 --> validation result=5
DEBUG - 2019-11-12 10:38:24 --> validation success
DEBUG - 2019-11-12 10:38:24 --> get_role() got called form User_Login_Model
DEBUG - 2019-11-12 10:38:24 --> Role Retrive from DB
ERROR - 2019-11-12 10:38:24 --> Severity: Notice --> Trying to get property 'role_name' of non-object C:\xampp\htdocs\ciproject\application\controllers\user\Login.php 27
DEBUG - 2019-11-12 10:38:24 --> loading model Active_Session
DEBUG - 2019-11-12 10:38:24 --> calling insert_active_session()
DEBUG - 2019-11-12 10:38:24 --> insert_active_session() got called form Active_Session
ERROR - 2019-11-12 10:38:24 --> Severity: Warning --> Use of undefined constant sql_query - assumed 'sql_query' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\ciproject\application\models\Active_Session.php 21
DEBUG - 2019-11-12 10:38:24 --> insert success
DEBUG - 2019-11-12 10:38:24 --> loading view user/dashboard
DEBUG - 2019-11-12 10:38:24 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:38:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:38:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:38:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:38:24 --> calling constructor page Dashboard
DEBUG - 2019-11-12 10:38:24 --> validating session page Dashboard
DEBUG - 2019-11-12 10:38:24 --> index page Dashboard
DEBUG - 2019-11-12 10:38:24 --> loading User_Profile_Model model...
DEBUG - 2019-11-12 10:38:24 --> getprofile() got called form User_Profile_Model
DEBUG - 2019-11-12 10:38:24 --> loading Configarable_Login model...
DEBUG - 2019-11-12 10:38:24 --> calling countlastsevendays() method for role=USER
DEBUG - 2019-11-12 10:38:24 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 10:38:24 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => USER
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 2
            [page_name] => Profile
            [page_link] => user/User_profile
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => USER
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 3
            [page_name] => Change password
            [page_link] => user/Change_password
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 4
            [page_name] => Logout
            [page_link] => user/Login/logout
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

)

DEBUG - 2019-11-12 10:38:24 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => USER
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 2
            [page_name] => Profile
            [page_link] => user/User_profile
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => USER
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 3
            [page_name] => Change password
            [page_link] => user/Change_password
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 4
            [page_name] => Logout
            [page_link] => user/Login/logout
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

)

DEBUG - 2019-11-12 10:38:24 --> calling view user/dashboard
DEBUG - 2019-11-12 10:38:24 --> Total execution time: 0.0950
DEBUG - 2019-11-12 10:38:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:38:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:38:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:38:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:38:45 --> logout() called
DEBUG - 2019-11-12 10:38:45 --> loading model Active_Session
DEBUG - 2019-11-12 10:38:45 --> calling remove_active_session()
DEBUG - 2019-11-12 10:38:45 --> remove_active_session() got called form Active_Session
DEBUG - 2019-11-12 10:38:46 --> loading user/login
DEBUG - 2019-11-12 10:38:46 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:38:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:38:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:38:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:38:46 --> index method called... Login 
DEBUG - 2019-11-12 10:38:46 --> validation for User login completed...
DEBUG - 2019-11-12 10:38:46 --> Some variable did not contain a value.
DEBUG - 2019-11-12 10:38:46 --> Total execution time: 0.0375
DEBUG - 2019-11-12 10:38:48 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:38:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:38:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:38:48 --> Total execution time: 0.0400
DEBUG - 2019-11-12 10:38:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:38:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:38:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:38:50 --> index method Login
DEBUG - 2019-11-12 10:38:50 --> checking request type form or redirect
DEBUG - 2019-11-12 10:38:50 --> admin login view loaded...
DEBUG - 2019-11-12 10:38:50 --> Total execution time: 0.0710
DEBUG - 2019-11-12 10:39:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:39:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:39:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:39:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:39:00 --> index method Login
DEBUG - 2019-11-12 10:39:00 --> checking request type form or redirect
DEBUG - 2019-11-12 10:39:00 --> form post method
DEBUG - 2019-11-12 10:39:00 --> loading model Admin_Login_Model
DEBUG - 2019-11-12 10:39:00 --> calling validatelogin()
DEBUG - 2019-11-12 10:39:00 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-12 10:39:00 --> Accounts details =1
DEBUG - 2019-11-12 10:39:00 --> account id found
DEBUG - 2019-11-12 10:39:00 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-12 10:39:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:39:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:39:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:39:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:39:01 --> calling constructor page Dashboard
DEBUG - 2019-11-12 10:39:01 --> validating session page Dashboard
DEBUG - 2019-11-12 10:39:01 --> index page Dashboard
DEBUG - 2019-11-12 10:39:01 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 10:39:01 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 10:39:01 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 10:39:01 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 10:39:01 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 10:39:01 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 10:39:01 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 10:39:01 --> loading Configarable_Login model...
DEBUG - 2019-11-12 10:39:01 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 10:39:01 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 10:39:01 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-12 10:39:01 --> calling view admin/dashboard
DEBUG - 2019-11-12 10:39:01 --> Total execution time: 0.1800
DEBUG - 2019-11-12 10:41:26 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:41:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:41:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:41:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:41:26 --> logout() called form login controller.... loading admin/login
DEBUG - 2019-11-12 10:41:26 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 10:41:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 10:41:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 10:41:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 10:41:26 --> index method Login
DEBUG - 2019-11-12 10:41:26 --> checking request type form or redirect
DEBUG - 2019-11-12 10:41:26 --> admin login view loaded...
DEBUG - 2019-11-12 10:41:26 --> Total execution time: 0.0370
