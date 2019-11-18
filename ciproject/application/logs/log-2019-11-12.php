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
DEBUG - 2019-11-12 11:49:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 11:49:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 11:49:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 11:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 11:49:00 --> index method Login
DEBUG - 2019-11-12 11:49:00 --> checking request type form or redirect
DEBUG - 2019-11-12 11:49:00 --> form post method
DEBUG - 2019-11-12 11:49:00 --> loading model Admin_Login_Model
DEBUG - 2019-11-12 11:49:00 --> calling validatelogin()
DEBUG - 2019-11-12 11:49:00 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-12 11:49:00 --> Accounts details =1
DEBUG - 2019-11-12 11:49:00 --> account id found
DEBUG - 2019-11-12 11:49:00 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-12 11:49:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 11:49:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 11:49:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 11:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 11:49:00 --> calling constructor page Dashboard
DEBUG - 2019-11-12 11:49:00 --> validating session page Dashboard
DEBUG - 2019-11-12 11:49:00 --> index page Dashboard
DEBUG - 2019-11-12 11:49:00 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 11:49:00 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:49:00 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 11:49:00 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:49:00 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 11:49:00 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:49:00 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 11:49:00 --> loading Configarable_Login model...
DEBUG - 2019-11-12 11:49:00 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 11:49:00 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 11:49:00 --> Array
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

DEBUG - 2019-11-12 11:49:00 --> calling view admin/dashboard
DEBUG - 2019-11-12 11:49:00 --> Total execution time: 0.0630
DEBUG - 2019-11-12 11:50:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 11:50:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 11:50:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 11:50:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 11:50:23 --> calling constructor page Dashboard
DEBUG - 2019-11-12 11:50:23 --> validating session page Dashboard
DEBUG - 2019-11-12 11:50:23 --> index page Dashboard
DEBUG - 2019-11-12 11:50:23 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 11:50:23 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:50:23 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 11:50:23 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:50:23 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 11:50:23 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:50:23 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 11:50:23 --> loading Configarable_Login model...
DEBUG - 2019-11-12 11:50:23 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 11:50:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 11:50:23 --> Array
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

DEBUG - 2019-11-12 11:50:23 --> calling view admin/dashboard
DEBUG - 2019-11-12 11:50:23 --> Total execution time: 0.0400
DEBUG - 2019-11-12 11:51:08 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 11:51:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 11:51:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 11:51:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 11:51:08 --> calling constructor page Dashboard
DEBUG - 2019-11-12 11:51:08 --> validating session page Dashboard
DEBUG - 2019-11-12 11:51:08 --> index page Dashboard
DEBUG - 2019-11-12 11:51:08 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 11:51:08 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:08 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 11:51:08 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:08 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 11:51:08 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:08 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 11:51:08 --> loading Configarable_Login model...
DEBUG - 2019-11-12 11:51:08 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 11:51:08 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 11:51:08 --> Array
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

DEBUG - 2019-11-12 11:51:08 --> calling view admin/dashboard
DEBUG - 2019-11-12 11:51:08 --> Total execution time: 0.0510
DEBUG - 2019-11-12 11:51:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 11:51:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 11:51:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 11:51:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 11:51:09 --> calling constructor page Dashboard
DEBUG - 2019-11-12 11:51:09 --> validating session page Dashboard
DEBUG - 2019-11-12 11:51:09 --> index page Dashboard
DEBUG - 2019-11-12 11:51:09 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 11:51:09 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:09 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 11:51:09 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:09 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 11:51:09 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:09 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 11:51:09 --> loading Configarable_Login model...
DEBUG - 2019-11-12 11:51:09 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 11:51:09 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 11:51:09 --> Array
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

DEBUG - 2019-11-12 11:51:09 --> calling view admin/dashboard
DEBUG - 2019-11-12 11:51:09 --> Total execution time: 0.0570
DEBUG - 2019-11-12 11:51:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 11:51:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 11:51:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 11:51:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 11:51:14 --> calling constructor page Dashboard
DEBUG - 2019-11-12 11:51:14 --> validating session page Dashboard
DEBUG - 2019-11-12 11:51:14 --> index page Dashboard
DEBUG - 2019-11-12 11:51:14 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 11:51:14 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:14 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 11:51:14 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:14 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 11:51:14 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:14 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 11:51:14 --> loading Configarable_Login model...
DEBUG - 2019-11-12 11:51:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 11:51:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 11:51:14 --> Array
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

DEBUG - 2019-11-12 11:51:14 --> calling view admin/dashboard
DEBUG - 2019-11-12 11:51:14 --> Total execution time: 0.0410
DEBUG - 2019-11-12 11:51:35 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 11:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 11:51:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 11:51:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 11:51:35 --> calling constructor page Dashboard
DEBUG - 2019-11-12 11:51:35 --> validating session page Dashboard
DEBUG - 2019-11-12 11:51:35 --> index page Dashboard
DEBUG - 2019-11-12 11:51:35 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 11:51:35 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:35 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 11:51:35 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:35 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 11:51:35 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:35 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 11:51:35 --> loading Configarable_Login model...
DEBUG - 2019-11-12 11:51:35 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 11:51:35 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 11:51:35 --> Array
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

DEBUG - 2019-11-12 11:51:35 --> calling view admin/dashboard
DEBUG - 2019-11-12 11:51:35 --> Total execution time: 0.0370
DEBUG - 2019-11-12 11:51:35 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 11:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 11:51:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 11:51:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 11:51:35 --> calling constructor page Dashboard
DEBUG - 2019-11-12 11:51:35 --> validating session page Dashboard
DEBUG - 2019-11-12 11:51:35 --> index page Dashboard
DEBUG - 2019-11-12 11:51:35 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 11:51:35 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:35 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 11:51:35 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:35 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 11:51:35 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 11:51:35 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 11:51:35 --> loading Configarable_Login model...
DEBUG - 2019-11-12 11:51:35 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 11:51:35 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 11:51:35 --> Array
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

DEBUG - 2019-11-12 11:51:35 --> calling view admin/dashboard
DEBUG - 2019-11-12 11:51:35 --> Total execution time: 0.0460
DEBUG - 2019-11-12 12:06:01 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:06:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:06:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:06:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:06:01 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:06:01 --> validating session page Dashboard
DEBUG - 2019-11-12 12:06:01 --> index page Dashboard
DEBUG - 2019-11-12 12:06:01 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:06:01 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:01 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:06:01 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:01 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:06:01 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:01 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:06:01 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:06:01 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:06:01 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:06:01 --> Array
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

DEBUG - 2019-11-12 12:06:01 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:06:01 --> Total execution time: 0.0650
DEBUG - 2019-11-12 12:06:02 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:06:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:06:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:06:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:06:02 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:06:02 --> validating session page Dashboard
DEBUG - 2019-11-12 12:06:02 --> index page Dashboard
DEBUG - 2019-11-12 12:06:02 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:06:02 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:02 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:06:02 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:02 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:06:02 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:02 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:06:02 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:06:02 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:06:02 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:06:02 --> Array
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

DEBUG - 2019-11-12 12:06:02 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:06:02 --> Total execution time: 0.0590
DEBUG - 2019-11-12 12:06:51 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:06:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:06:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:06:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:06:51 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:06:51 --> validating session page Dashboard
DEBUG - 2019-11-12 12:06:51 --> index page Dashboard
DEBUG - 2019-11-12 12:06:51 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:06:51 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:51 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:06:51 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:51 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:06:51 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:51 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:06:51 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:06:51 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:06:51 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:06:51 --> Array
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

DEBUG - 2019-11-12 12:06:51 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:06:51 --> Total execution time: 0.0550
DEBUG - 2019-11-12 12:06:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:06:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:06:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:06:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:06:53 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:06:53 --> validating session page Dashboard
DEBUG - 2019-11-12 12:06:53 --> index page Dashboard
DEBUG - 2019-11-12 12:06:53 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:06:53 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:53 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:06:53 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:53 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:06:53 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:53 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:06:53 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:06:53 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:06:53 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:06:53 --> Array
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

DEBUG - 2019-11-12 12:06:53 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:06:53 --> Total execution time: 0.0500
DEBUG - 2019-11-12 12:06:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:06:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:06:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:06:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:06:54 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:06:54 --> validating session page Dashboard
DEBUG - 2019-11-12 12:06:54 --> index page Dashboard
DEBUG - 2019-11-12 12:06:54 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:06:54 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:54 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:06:54 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:54 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:06:54 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:06:54 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:06:54 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:06:54 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:06:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:06:54 --> Array
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

DEBUG - 2019-11-12 12:06:54 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:06:54 --> Total execution time: 0.0900
DEBUG - 2019-11-12 12:06:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:06:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:06:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:06:57 --> logout() called form login controller.... loading admin/login
DEBUG - 2019-11-12 12:06:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:06:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:06:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:06:57 --> index method Login
DEBUG - 2019-11-12 12:06:57 --> checking request type form or redirect
DEBUG - 2019-11-12 12:06:57 --> admin login view loaded...
DEBUG - 2019-11-12 12:06:57 --> Total execution time: 0.1230
DEBUG - 2019-11-12 12:07:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:07:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:07:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:07:05 --> index method Login
DEBUG - 2019-11-12 12:07:05 --> checking request type form or redirect
DEBUG - 2019-11-12 12:07:05 --> form post method
DEBUG - 2019-11-12 12:07:05 --> loading model Admin_Login_Model
DEBUG - 2019-11-12 12:07:05 --> calling validatelogin()
DEBUG - 2019-11-12 12:07:05 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-12 12:07:05 --> Accounts details =1
DEBUG - 2019-11-12 12:07:05 --> account id found
DEBUG - 2019-11-12 12:07:05 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-12 12:07:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:07:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:07:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:07:05 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:07:05 --> validating session page Dashboard
DEBUG - 2019-11-12 12:07:05 --> index page Dashboard
DEBUG - 2019-11-12 12:07:05 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:07:05 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:07:05 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:07:05 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:07:05 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:07:05 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:07:05 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:07:05 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:07:05 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:07:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:07:05 --> Array
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

DEBUG - 2019-11-12 12:07:05 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:07:05 --> Total execution time: 0.0520
DEBUG - 2019-11-12 12:11:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:11:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:11:16 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:11:16 --> validating session page Dashboard
DEBUG - 2019-11-12 12:11:16 --> index page Dashboard
DEBUG - 2019-11-12 12:11:16 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:11:16 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:16 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:11:16 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:16 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:11:16 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:16 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:11:16 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:11:16 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:11:16 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:11:16 --> Array
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

DEBUG - 2019-11-12 12:11:16 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:11:16 --> Total execution time: 0.0550
DEBUG - 2019-11-12 12:11:17 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:11:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:11:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:11:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:11:17 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:11:17 --> validating session page Dashboard
DEBUG - 2019-11-12 12:11:17 --> index page Dashboard
DEBUG - 2019-11-12 12:11:17 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:11:17 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:17 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:11:17 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:17 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:11:17 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:17 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:11:17 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:11:17 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:11:17 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:11:17 --> Array
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

DEBUG - 2019-11-12 12:11:17 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:11:17 --> Total execution time: 0.0540
DEBUG - 2019-11-12 12:11:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:11:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:11:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:11:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:11:54 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:11:54 --> validating session page Dashboard
DEBUG - 2019-11-12 12:11:54 --> index page Dashboard
DEBUG - 2019-11-12 12:11:54 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:11:54 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:54 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:11:54 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:54 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:11:54 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:54 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:11:54 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:11:54 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:11:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:11:54 --> Array
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

DEBUG - 2019-11-12 12:11:54 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:11:54 --> Total execution time: 0.0960
DEBUG - 2019-11-12 12:11:55 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:11:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:11:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:11:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:11:55 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:11:55 --> validating session page Dashboard
DEBUG - 2019-11-12 12:11:55 --> index page Dashboard
DEBUG - 2019-11-12 12:11:55 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:11:55 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:55 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:11:55 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:55 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:11:55 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:55 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:11:55 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:11:55 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:11:55 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:11:55 --> Array
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

DEBUG - 2019-11-12 12:11:55 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:11:55 --> Total execution time: 0.0820
DEBUG - 2019-11-12 12:11:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:11:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:11:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:11:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:11:57 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:11:57 --> validating session page Dashboard
DEBUG - 2019-11-12 12:11:57 --> index page Dashboard
DEBUG - 2019-11-12 12:11:57 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:11:57 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:57 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:11:57 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:57 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:11:57 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:11:57 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:11:57 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:11:57 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:11:57 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:11:57 --> Array
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

DEBUG - 2019-11-12 12:11:57 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:11:57 --> Total execution time: 0.0830
DEBUG - 2019-11-12 12:31:24 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 12:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 12:31:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 12:31:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 12:31:24 --> calling constructor page Dashboard
DEBUG - 2019-11-12 12:31:24 --> validating session page Dashboard
DEBUG - 2019-11-12 12:31:24 --> index page Dashboard
DEBUG - 2019-11-12 12:31:24 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 12:31:24 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:31:24 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 12:31:24 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:31:24 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 12:31:24 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 12:31:24 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 12:31:24 --> loading Configarable_Login model...
DEBUG - 2019-11-12 12:31:24 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 12:31:24 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 12:31:24 --> Array
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

DEBUG - 2019-11-12 12:31:24 --> calling view admin/dashboard
DEBUG - 2019-11-12 12:31:24 --> Total execution time: 0.4860
DEBUG - 2019-11-12 13:44:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 13:44:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 13:44:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 13:44:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 13:44:54 --> calling constructor page Dashboard
DEBUG - 2019-11-12 13:44:54 --> validating session page Dashboard
DEBUG - 2019-11-12 13:44:54 --> index page Dashboard
DEBUG - 2019-11-12 13:44:54 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 13:44:54 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 13:44:55 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 13:44:55 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 13:44:55 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 13:44:55 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 13:44:55 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 13:44:55 --> loading Configarable_Login model...
DEBUG - 2019-11-12 13:44:55 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 13:44:55 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 13:44:55 --> Array
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

DEBUG - 2019-11-12 13:44:55 --> calling view admin/dashboard
DEBUG - 2019-11-12 13:44:55 --> Total execution time: 2.7493
DEBUG - 2019-11-12 13:44:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-12 13:44:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-12 13:44:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-12 13:44:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-12 13:44:59 --> calling constructor page Dashboard
DEBUG - 2019-11-12 13:44:59 --> validating session page Dashboard
DEBUG - 2019-11-12 13:44:59 --> index page Dashboard
DEBUG - 2019-11-12 13:44:59 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-12 13:44:59 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 13:44:59 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-12 13:44:59 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 13:44:59 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-12 13:44:59 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-12 13:44:59 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-12 13:44:59 --> loading Configarable_Login model...
DEBUG - 2019-11-12 13:44:59 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-12 13:44:59 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-12 13:44:59 --> Array
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

DEBUG - 2019-11-12 13:44:59 --> calling view admin/dashboard
DEBUG - 2019-11-12 13:44:59 --> Total execution time: 0.0795
