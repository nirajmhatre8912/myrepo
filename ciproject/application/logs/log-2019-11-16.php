<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2019-11-16 13:33:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 13:33:45 --> No URI present. Default controller set.
DEBUG - 2019-11-16 13:33:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 13:33:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 13:33:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 13:33:46 --> Total execution time: 0.5400
DEBUG - 2019-11-16 13:34:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 13:34:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 13:34:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 13:34:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 13:34:45 --> index method Login
DEBUG - 2019-11-16 13:34:45 --> checking request type form or redirect
DEBUG - 2019-11-16 13:34:45 --> admin login view loaded...
DEBUG - 2019-11-16 13:34:45 --> Total execution time: 0.1050
DEBUG - 2019-11-16 13:34:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 13:34:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 13:34:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 13:34:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 13:34:57 --> index method Login
DEBUG - 2019-11-16 13:34:57 --> checking request type form or redirect
DEBUG - 2019-11-16 13:34:58 --> form post method
DEBUG - 2019-11-16 13:34:58 --> loading model Admin_Login_Model
DEBUG - 2019-11-16 13:34:58 --> calling validatelogin()
DEBUG - 2019-11-16 13:34:58 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-16 13:34:58 --> Accounts details =1
DEBUG - 2019-11-16 13:34:58 --> account id found
DEBUG - 2019-11-16 13:34:58 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-16 13:34:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 13:34:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 13:34:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 13:34:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 13:34:58 --> calling constructor page Dashboard
DEBUG - 2019-11-16 13:34:58 --> validating session page Dashboard
DEBUG - 2019-11-16 13:34:58 --> index page Dashboard
DEBUG - 2019-11-16 13:34:58 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-16 13:34:58 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 13:34:58 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-16 13:34:58 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 13:34:58 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-16 13:34:58 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 13:34:58 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-16 13:34:58 --> loading Configarable_Login model...
DEBUG - 2019-11-16 13:34:58 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 13:34:58 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 13:34:58 --> Array
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

DEBUG - 2019-11-16 13:34:58 --> calling view admin/dashboard
DEBUG - 2019-11-16 13:34:58 --> Total execution time: 0.2900
DEBUG - 2019-11-16 13:35:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 13:35:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 13:35:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 13:35:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 13:35:05 --> calling constructor page Manage_Users
DEBUG - 2019-11-16 13:35:05 --> validating session page Manage_Users
DEBUG - 2019-11-16 13:35:05 --> index page Manage_Users
DEBUG - 2019-11-16 13:35:05 --> loading model ManageUsers_Model
DEBUG - 2019-11-16 13:35:05 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-16 13:35:05 --> calling getusersdetails()
DEBUG - 2019-11-16 13:35:05 --> loading Configarable_Login model...
DEBUG - 2019-11-16 13:35:05 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 13:35:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 13:35:05 --> Array
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

DEBUG - 2019-11-16 13:35:05 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 13:35:05 --> calling view admin/manage_users
DEBUG - 2019-11-16 13:35:05 --> Total execution time: 0.0931
DEBUG - 2019-11-16 13:35:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 13:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 13:35:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 13:35:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 13:35:10 --> Upload_users constructer got called..
DEBUG - 2019-11-16 13:35:10 --> calling view upload_users
DEBUG - 2019-11-16 13:35:10 --> loading Configarable_Login model...
DEBUG - 2019-11-16 13:35:10 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 13:35:10 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 13:35:10 --> Array
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

DEBUG - 2019-11-16 13:35:10 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 13:35:10 --> Total execution time: 0.1325
ERROR - 2019-11-16 15:59:37 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 15:59:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 15:59:38 --> No URI present. Default controller set.
DEBUG - 2019-11-16 15:59:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 15:59:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 15:59:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 15:59:38 --> Total execution time: 0.5610
ERROR - 2019-11-16 15:59:41 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 15:59:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 15:59:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 15:59:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 15:59:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 15:59:41 --> index method Login
DEBUG - 2019-11-16 15:59:41 --> checking request type form or redirect
DEBUG - 2019-11-16 15:59:41 --> admin login view loaded...
DEBUG - 2019-11-16 15:59:41 --> Total execution time: 0.0950
ERROR - 2019-11-16 15:59:49 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 15:59:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 15:59:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 15:59:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 15:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 15:59:49 --> index method Login
DEBUG - 2019-11-16 15:59:49 --> checking request type form or redirect
DEBUG - 2019-11-16 15:59:49 --> form post method
DEBUG - 2019-11-16 15:59:49 --> loading model Admin_Login_Model
DEBUG - 2019-11-16 15:59:49 --> calling validatelogin()
DEBUG - 2019-11-16 15:59:49 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-16 15:59:49 --> Accounts details =1
DEBUG - 2019-11-16 15:59:49 --> account id found
DEBUG - 2019-11-16 15:59:49 --> validate login successfully.... loading admin/dashboard
ERROR - 2019-11-16 15:59:49 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 15:59:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 15:59:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 15:59:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 15:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 15:59:49 --> calling constructor page Dashboard
DEBUG - 2019-11-16 15:59:49 --> validating session page Dashboard
DEBUG - 2019-11-16 15:59:49 --> index page Dashboard
DEBUG - 2019-11-16 15:59:49 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-16 15:59:49 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 15:59:49 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-16 15:59:49 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 15:59:49 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-16 15:59:49 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 15:59:49 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-16 15:59:49 --> loading Configarable_Login model...
DEBUG - 2019-11-16 15:59:49 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 15:59:49 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 15:59:49 --> Array
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

DEBUG - 2019-11-16 15:59:49 --> calling view admin/dashboard
DEBUG - 2019-11-16 15:59:49 --> Total execution time: 0.0830
ERROR - 2019-11-16 15:59:52 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 15:59:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 15:59:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 15:59:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 15:59:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 15:59:52 --> calling constructor page Manage_Users
DEBUG - 2019-11-16 15:59:52 --> validating session page Manage_Users
DEBUG - 2019-11-16 15:59:52 --> index page Manage_Users
DEBUG - 2019-11-16 15:59:52 --> loading model ManageUsers_Model
DEBUG - 2019-11-16 15:59:52 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-16 15:59:52 --> calling getusersdetails()
DEBUG - 2019-11-16 15:59:52 --> loading Configarable_Login model...
DEBUG - 2019-11-16 15:59:52 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 15:59:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 15:59:52 --> Array
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

DEBUG - 2019-11-16 15:59:52 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 15:59:52 --> calling view admin/manage_users
DEBUG - 2019-11-16 15:59:52 --> Total execution time: 0.0670
ERROR - 2019-11-16 15:59:54 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 15:59:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 15:59:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 15:59:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 15:59:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 15:59:54 --> Upload_users constructer got called..
DEBUG - 2019-11-16 15:59:54 --> calling view upload_users
DEBUG - 2019-11-16 15:59:54 --> loading Configarable_Login model...
DEBUG - 2019-11-16 15:59:54 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 15:59:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 15:59:54 --> Array
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

DEBUG - 2019-11-16 15:59:54 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 15:59:54 --> Total execution time: 0.0600
ERROR - 2019-11-16 16:09:01 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:09:01 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:09:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:09:01 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:09:01 --> calling view upload_users
DEBUG - 2019-11-16 16:09:01 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:09:01 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:09:01 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:09:01 --> Array
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

DEBUG - 2019-11-16 16:09:01 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:09:01 --> Total execution time: 0.0610
ERROR - 2019-11-16 16:09:22 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:09:22 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:09:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:09:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:09:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:09:22 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:09:22 --> calling view upload_users
DEBUG - 2019-11-16 16:09:22 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:09:22 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:09:22 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:09:22 --> Array
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

DEBUG - 2019-11-16 16:09:22 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:09:22 --> Total execution time: 0.0520
ERROR - 2019-11-16 16:17:56 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:17:56 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:17:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:17:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:17:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:17:56 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:17:56 --> calling view upload_users
DEBUG - 2019-11-16 16:17:56 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:17:56 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:17:56 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:17:56 --> Array
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

DEBUG - 2019-11-16 16:17:56 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:17:56 --> Total execution time: 0.0570
ERROR - 2019-11-16 16:17:57 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:17:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:17:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:17:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:17:57 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:17:57 --> calling view upload_users
DEBUG - 2019-11-16 16:17:57 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:17:57 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:17:57 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:17:57 --> Array
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

DEBUG - 2019-11-16 16:17:57 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:17:57 --> Total execution time: 0.0660
ERROR - 2019-11-16 16:18:29 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:18:29 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:18:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:18:29 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:18:29 --> calling view upload_users
DEBUG - 2019-11-16 16:18:29 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:18:29 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:18:29 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:18:29 --> Array
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

DEBUG - 2019-11-16 16:18:29 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:18:29 --> Total execution time: 0.0500
ERROR - 2019-11-16 16:18:29 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:18:29 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:18:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:18:29 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:18:29 --> calling view upload_users
DEBUG - 2019-11-16 16:18:29 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:18:29 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:18:29 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:18:29 --> Array
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

DEBUG - 2019-11-16 16:18:29 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:18:29 --> Total execution time: 0.0570
ERROR - 2019-11-16 16:18:30 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:18:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:18:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:18:30 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:18:30 --> calling view upload_users
DEBUG - 2019-11-16 16:18:30 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:18:30 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:18:30 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:18:30 --> Array
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

DEBUG - 2019-11-16 16:18:30 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:18:30 --> Total execution time: 0.0490
ERROR - 2019-11-16 16:18:30 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:18:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:18:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:18:30 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:18:30 --> calling view upload_users
DEBUG - 2019-11-16 16:18:30 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:18:30 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:18:30 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:18:30 --> Array
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

DEBUG - 2019-11-16 16:18:30 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:18:30 --> Total execution time: 0.0490
ERROR - 2019-11-16 16:18:30 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:18:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:18:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:18:30 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:18:30 --> calling view upload_users
DEBUG - 2019-11-16 16:18:30 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:18:30 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:18:30 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:18:30 --> Array
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

DEBUG - 2019-11-16 16:18:30 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:18:30 --> Total execution time: 0.0500
ERROR - 2019-11-16 16:18:30 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:18:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:18:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:18:30 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:18:30 --> calling view upload_users
DEBUG - 2019-11-16 16:18:30 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:18:30 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:18:30 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:18:30 --> Array
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

DEBUG - 2019-11-16 16:18:30 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:18:30 --> Total execution time: 0.0510
ERROR - 2019-11-16 16:18:30 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:18:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:18:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:18:30 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:18:30 --> calling view upload_users
DEBUG - 2019-11-16 16:18:30 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:18:30 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:18:30 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:18:30 --> Array
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

DEBUG - 2019-11-16 16:18:30 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:18:30 --> Total execution time: 0.0510
ERROR - 2019-11-16 16:21:22 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:21:22 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:21:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:21:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:21:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:21:22 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:21:22 --> calling view upload_users
DEBUG - 2019-11-16 16:21:22 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:21:22 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:21:22 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:21:22 --> Array
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

DEBUG - 2019-11-16 16:21:22 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:21:22 --> Total execution time: 0.0560
ERROR - 2019-11-16 16:21:23 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:21:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:21:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:21:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:21:23 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:21:23 --> calling view upload_users
DEBUG - 2019-11-16 16:21:23 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:21:23 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:21:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:21:23 --> Array
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

DEBUG - 2019-11-16 16:21:23 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:21:23 --> Total execution time: 0.0540
ERROR - 2019-11-16 16:21:23 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:21:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:21:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:21:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:21:23 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:21:23 --> calling view upload_users
DEBUG - 2019-11-16 16:21:23 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:21:23 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:21:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:21:23 --> Array
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

DEBUG - 2019-11-16 16:21:23 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:21:23 --> Total execution time: 0.0560
ERROR - 2019-11-16 16:21:23 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:21:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:21:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:21:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:21:23 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:21:23 --> calling view upload_users
DEBUG - 2019-11-16 16:21:23 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:21:23 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:21:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:21:23 --> Array
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

DEBUG - 2019-11-16 16:21:23 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:21:23 --> Total execution time: 0.0520
ERROR - 2019-11-16 16:21:23 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 16:21:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 16:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 16:21:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 16:21:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 16:21:23 --> Upload_users constructer got called..
DEBUG - 2019-11-16 16:21:23 --> calling view upload_users
DEBUG - 2019-11-16 16:21:23 --> loading Configarable_Login model...
DEBUG - 2019-11-16 16:21:23 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 16:21:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 16:21:23 --> Array
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

DEBUG - 2019-11-16 16:21:23 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 16:21:23 --> Total execution time: 0.0530
ERROR - 2019-11-16 17:57:04 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:57:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:57:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:57:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:57:04 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:57:04 --> calling view upload_users
DEBUG - 2019-11-16 17:57:04 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:57:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:57:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:57:04 --> Array
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

DEBUG - 2019-11-16 17:57:04 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:57:04 --> Total execution time: 0.0560
ERROR - 2019-11-16 17:57:04 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:57:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:57:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:57:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:57:04 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:57:04 --> calling view upload_users
DEBUG - 2019-11-16 17:57:04 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:57:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:57:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:57:04 --> Array
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

DEBUG - 2019-11-16 17:57:04 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:57:04 --> Total execution time: 0.0430
ERROR - 2019-11-16 17:57:04 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:57:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:57:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:57:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:57:04 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:57:04 --> calling view upload_users
DEBUG - 2019-11-16 17:57:04 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:57:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:57:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:57:04 --> Array
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

DEBUG - 2019-11-16 17:57:04 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:57:04 --> Total execution time: 0.0500
ERROR - 2019-11-16 17:57:05 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:57:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:57:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:57:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:57:05 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:57:05 --> calling view upload_users
DEBUG - 2019-11-16 17:57:05 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:57:05 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:57:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:57:05 --> Array
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

DEBUG - 2019-11-16 17:57:05 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:57:05 --> Total execution time: 0.0530
ERROR - 2019-11-16 17:57:05 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:57:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:57:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:57:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:57:05 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:57:05 --> calling view upload_users
DEBUG - 2019-11-16 17:57:05 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:57:05 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:57:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:57:05 --> Array
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

DEBUG - 2019-11-16 17:57:05 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:57:05 --> Total execution time: 0.0460
ERROR - 2019-11-16 17:57:06 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:57:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:57:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:57:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:57:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:57:06 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:57:06 --> calling view upload_users
DEBUG - 2019-11-16 17:57:06 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:57:06 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:57:06 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:57:06 --> Array
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

DEBUG - 2019-11-16 17:57:06 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:57:06 --> Total execution time: 0.0440
ERROR - 2019-11-16 17:57:07 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:57:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:57:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:57:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:57:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:57:07 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:57:07 --> calling view upload_users
DEBUG - 2019-11-16 17:57:07 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:57:07 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:57:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:57:07 --> Array
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

DEBUG - 2019-11-16 17:57:07 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:57:07 --> Total execution time: 0.0430
ERROR - 2019-11-16 17:57:08 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:57:08 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:57:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:57:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:57:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:57:08 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:57:08 --> calling view upload_users
DEBUG - 2019-11-16 17:57:08 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:57:08 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:57:08 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:57:08 --> Array
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

DEBUG - 2019-11-16 17:57:08 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:57:08 --> Total execution time: 0.0520
ERROR - 2019-11-16 17:57:08 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:57:08 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:57:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:57:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:57:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:57:08 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:57:08 --> calling view upload_users
DEBUG - 2019-11-16 17:57:08 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:57:08 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:57:08 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:57:08 --> Array
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

DEBUG - 2019-11-16 17:57:08 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:57:08 --> Total execution time: 0.0540
ERROR - 2019-11-16 17:59:14 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:59:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:59:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:59:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:59:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:59:14 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:59:14 --> calling view upload_users
DEBUG - 2019-11-16 17:59:14 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:59:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:59:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:59:14 --> Array
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

DEBUG - 2019-11-16 17:59:14 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:59:14 --> Total execution time: 0.0510
ERROR - 2019-11-16 17:59:15 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:59:15 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:59:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:59:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:59:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:59:15 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:59:15 --> calling view upload_users
DEBUG - 2019-11-16 17:59:15 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:59:15 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:59:15 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:59:15 --> Array
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

DEBUG - 2019-11-16 17:59:15 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:59:15 --> Total execution time: 0.0540
ERROR - 2019-11-16 17:59:15 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:59:15 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:59:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:59:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:59:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:59:15 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:59:15 --> calling view upload_users
DEBUG - 2019-11-16 17:59:15 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:59:15 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:59:15 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:59:15 --> Array
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

DEBUG - 2019-11-16 17:59:15 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:59:15 --> Total execution time: 0.0430
ERROR - 2019-11-16 17:59:16 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:59:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:59:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:59:16 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:59:16 --> calling view upload_users
DEBUG - 2019-11-16 17:59:16 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:59:16 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:59:16 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:59:16 --> Array
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

DEBUG - 2019-11-16 17:59:16 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:59:16 --> Total execution time: 0.0510
ERROR - 2019-11-16 17:59:16 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:59:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:59:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:59:16 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:59:16 --> calling view upload_users
DEBUG - 2019-11-16 17:59:16 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:59:16 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:59:16 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:59:16 --> Array
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

DEBUG - 2019-11-16 17:59:16 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:59:16 --> Total execution time: 0.0510
ERROR - 2019-11-16 17:59:16 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:59:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:59:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:59:16 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:59:16 --> calling view upload_users
DEBUG - 2019-11-16 17:59:16 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:59:16 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:59:16 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:59:16 --> Array
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

DEBUG - 2019-11-16 17:59:16 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:59:16 --> Total execution time: 0.0410
ERROR - 2019-11-16 17:59:16 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:59:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 17:59:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 17:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 17:59:16 --> Upload_users constructer got called..
DEBUG - 2019-11-16 17:59:16 --> calling view upload_users
DEBUG - 2019-11-16 17:59:16 --> loading Configarable_Login model...
DEBUG - 2019-11-16 17:59:16 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 17:59:16 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 17:59:16 --> Array
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

DEBUG - 2019-11-16 17:59:16 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 17:59:16 --> Total execution time: 0.0520
ERROR - 2019-11-16 17:59:21 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 17:59:21 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 17:59:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 17:59:21 --> 404 Page Not Found: Upload_users/upload
ERROR - 2019-11-16 18:00:52 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:00:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:00:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:00:52 --> 404 Page Not Found: Upload_users/upload
ERROR - 2019-11-16 18:10:18 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:10:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:10:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:10:18 --> 404 Page Not Found: Upload_users/index
ERROR - 2019-11-16 18:10:35 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:10:35 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:10:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:10:35 --> 404 Page Not Found: Upload_users/index
ERROR - 2019-11-16 18:10:56 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:10:56 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:10:56 --> No URI present. Default controller set.
DEBUG - 2019-11-16 18:10:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:10:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:10:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:10:56 --> Total execution time: 0.0440
ERROR - 2019-11-16 18:10:58 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:10:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:10:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:10:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:10:58 --> index method Login
DEBUG - 2019-11-16 18:10:58 --> checking request type form or redirect
DEBUG - 2019-11-16 18:10:58 --> admin login view loaded...
DEBUG - 2019-11-16 18:10:58 --> Total execution time: 0.0550
ERROR - 2019-11-16 18:11:07 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:11:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:11:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:11:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:11:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:11:07 --> index method Login
DEBUG - 2019-11-16 18:11:07 --> checking request type form or redirect
DEBUG - 2019-11-16 18:11:07 --> form post method
DEBUG - 2019-11-16 18:11:07 --> loading model Admin_Login_Model
DEBUG - 2019-11-16 18:11:07 --> calling validatelogin()
DEBUG - 2019-11-16 18:11:07 --> validatelogin() got called form Admin_Login_Model
ERROR - 2019-11-16 18:11:07 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\ciproject\application\models\Admin_Login_Model.php 11
DEBUG - 2019-11-16 18:11:07 --> Accounts details =
DEBUG - 2019-11-16 18:11:07 --> account id is NULL
DEBUG - 2019-11-16 18:11:07 --> invalidate login.... loading admin/login
ERROR - 2019-11-16 18:11:07 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:11:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:11:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:11:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:11:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:11:07 --> index method Login
DEBUG - 2019-11-16 18:11:07 --> checking request type form or redirect
DEBUG - 2019-11-16 18:11:07 --> admin login view loaded...
DEBUG - 2019-11-16 18:11:07 --> Total execution time: 0.0540
ERROR - 2019-11-16 18:11:16 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:11:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:11:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:11:16 --> index method Login
DEBUG - 2019-11-16 18:11:16 --> checking request type form or redirect
DEBUG - 2019-11-16 18:11:16 --> form post method
DEBUG - 2019-11-16 18:11:16 --> loading model Admin_Login_Model
DEBUG - 2019-11-16 18:11:16 --> calling validatelogin()
DEBUG - 2019-11-16 18:11:16 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-16 18:11:16 --> Accounts details =1
DEBUG - 2019-11-16 18:11:16 --> account id found
DEBUG - 2019-11-16 18:11:16 --> validate login successfully.... loading admin/dashboard
ERROR - 2019-11-16 18:11:16 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:11:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:11:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:11:16 --> calling constructor page Dashboard
DEBUG - 2019-11-16 18:11:16 --> validating session page Dashboard
DEBUG - 2019-11-16 18:11:16 --> index page Dashboard
DEBUG - 2019-11-16 18:11:16 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-16 18:11:16 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 18:11:16 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-16 18:11:16 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 18:11:16 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-16 18:11:16 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 18:11:16 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-16 18:11:16 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:11:16 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:11:16 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:11:16 --> Array
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

DEBUG - 2019-11-16 18:11:16 --> calling view admin/dashboard
DEBUG - 2019-11-16 18:11:16 --> Total execution time: 0.0570
ERROR - 2019-11-16 18:12:28 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:12:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:12:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:12:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:12:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:12:28 --> calling constructor page Manage_Users
DEBUG - 2019-11-16 18:12:28 --> validating session page Manage_Users
DEBUG - 2019-11-16 18:12:28 --> index page Manage_Users
DEBUG - 2019-11-16 18:12:28 --> loading model ManageUsers_Model
DEBUG - 2019-11-16 18:12:28 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-16 18:12:28 --> calling getusersdetails()
DEBUG - 2019-11-16 18:12:28 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:12:28 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:12:28 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:12:28 --> Array
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

DEBUG - 2019-11-16 18:12:28 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:12:28 --> calling view admin/manage_users
DEBUG - 2019-11-16 18:12:28 --> Total execution time: 0.0610
ERROR - 2019-11-16 18:12:33 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:12:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:12:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:12:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:12:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:12:33 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:12:33 --> calling view upload_users
DEBUG - 2019-11-16 18:12:33 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:12:33 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:12:33 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:12:33 --> Array
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

DEBUG - 2019-11-16 18:12:33 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:12:33 --> Total execution time: 0.0570
ERROR - 2019-11-16 18:13:03 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:13:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:13:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:13:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:13:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:13:03 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:13:03 --> calling view upload_users
DEBUG - 2019-11-16 18:13:03 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:13:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:13:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:13:03 --> Array
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

DEBUG - 2019-11-16 18:13:03 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:13:03 --> Total execution time: 0.0500
ERROR - 2019-11-16 18:13:09 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:13:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:13:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:13:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:13:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:13:09 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:13:09 --> Form_validation class already loaded. Second attempt ignored.
ERROR - 2019-11-16 18:13:09 --> Severity: error --> Exception: Class 'PhpOffice\PhpSpreadsheet\Reader\Xlsx' not found C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 53
ERROR - 2019-11-16 18:13:45 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:13:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:13:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:13:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:13:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:13:45 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:13:45 --> calling view upload_users
DEBUG - 2019-11-16 18:13:45 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:13:45 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:13:45 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:13:45 --> Array
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

DEBUG - 2019-11-16 18:13:45 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:13:45 --> Total execution time: 0.0500
ERROR - 2019-11-16 18:13:48 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:13:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:13:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:13:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:13:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:13:49 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:13:49 --> Form_validation class already loaded. Second attempt ignored.
ERROR - 2019-11-16 18:13:49 --> Severity: error --> Exception: Class 'PhpOffice\PhpSpreadsheet\Reader\Xlsx' not found C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 53
ERROR - 2019-11-16 18:15:21 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:15:21 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:15:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:15:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:15:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:15:21 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:15:21 --> Form_validation class already loaded. Second attempt ignored.
ERROR - 2019-11-16 18:15:21 --> Severity: error --> Exception: Class 'PhpOffice\PhpSpreadsheet\Reader\Xlsx' not found C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 54
ERROR - 2019-11-16 18:18:17 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:18:17 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:18:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:18:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:18:17 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:18:17 --> calling view upload_users
DEBUG - 2019-11-16 18:18:17 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:18:17 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:18:17 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:18:17 --> Array
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

DEBUG - 2019-11-16 18:18:17 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:18:17 --> Total execution time: 0.0530
ERROR - 2019-11-16 18:18:50 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:18:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:18:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:18:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:18:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:18:50 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:18:50 --> Form_validation class already loaded. Second attempt ignored.
ERROR - 2019-11-16 18:18:50 --> Severity: error --> Exception: Class 'PhpOffice\PhpSpreadsheet\Reader\Xlsx' not found C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 54
ERROR - 2019-11-16 18:28:30 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:28:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:28:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:28:30 --> 404 Page Not Found: Upload_users/upload
ERROR - 2019-11-16 18:28:32 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:28:32 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:28:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:28:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:28:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:28:32 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:28:32 --> calling view upload_users
DEBUG - 2019-11-16 18:28:32 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:28:32 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:28:32 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:28:32 --> Array
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

DEBUG - 2019-11-16 18:28:32 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:28:32 --> Total execution time: 0.0640
ERROR - 2019-11-16 18:28:38 --> $config['composer_autoload'] is set to TRUE but C:\xampp\htdocs\ciproject\application\vendor/autoload.php was not found.
DEBUG - 2019-11-16 18:28:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:28:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:28:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:28:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:28:38 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:28:38 --> Form_validation class already loaded. Second attempt ignored.
ERROR - 2019-11-16 18:28:38 --> Severity: error --> Exception: Class 'PhpOffice\PhpSpreadsheet\Reader\Xlsx' not found C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 54
DEBUG - 2019-11-16 18:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:26 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:37:26 --> calling view upload_users
DEBUG - 2019-11-16 18:37:26 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:37:26 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:37:26 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:37:26 --> Array
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

DEBUG - 2019-11-16 18:37:26 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:37:26 --> Total execution time: 0.0760
DEBUG - 2019-11-16 18:37:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:28 --> No URI present. Default controller set.
DEBUG - 2019-11-16 18:37:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:28 --> Total execution time: 0.0790
DEBUG - 2019-11-16 18:37:29 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:29 --> No URI present. Default controller set.
DEBUG - 2019-11-16 18:37:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:29 --> Total execution time: 0.0650
DEBUG - 2019-11-16 18:37:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:30 --> index method Login
DEBUG - 2019-11-16 18:37:30 --> checking request type form or redirect
DEBUG - 2019-11-16 18:37:30 --> admin login view loaded...
DEBUG - 2019-11-16 18:37:30 --> Total execution time: 0.0750
DEBUG - 2019-11-16 18:37:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:38 --> index method Login
DEBUG - 2019-11-16 18:37:38 --> checking request type form or redirect
DEBUG - 2019-11-16 18:37:38 --> form post method
DEBUG - 2019-11-16 18:37:38 --> loading model Admin_Login_Model
DEBUG - 2019-11-16 18:37:38 --> calling validatelogin()
DEBUG - 2019-11-16 18:37:38 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-16 18:37:38 --> Accounts details =1
DEBUG - 2019-11-16 18:37:38 --> account id found
DEBUG - 2019-11-16 18:37:38 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-16 18:37:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:38 --> calling constructor page Dashboard
DEBUG - 2019-11-16 18:37:38 --> validating session page Dashboard
DEBUG - 2019-11-16 18:37:38 --> index page Dashboard
DEBUG - 2019-11-16 18:37:38 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-16 18:37:38 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 18:37:38 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-16 18:37:38 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 18:37:38 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-16 18:37:38 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 18:37:38 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-16 18:37:38 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:37:38 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:37:38 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:37:38 --> Array
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

DEBUG - 2019-11-16 18:37:38 --> calling view admin/dashboard
DEBUG - 2019-11-16 18:37:38 --> Total execution time: 0.0620
DEBUG - 2019-11-16 18:37:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:40 --> Customer_model constructer got called..
DEBUG - 2019-11-16 18:37:40 --> Active_Sessions constructer got called..
DEBUG - 2019-11-16 18:37:40 --> index method active session controller
DEBUG - 2019-11-16 18:37:40 --> navigation to active session view
DEBUG - 2019-11-16 18:37:40 --> Total execution time: 0.1040
DEBUG - 2019-11-16 18:37:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:40 --> Customer_model constructer got called..
DEBUG - 2019-11-16 18:37:40 --> Active_Sessions constructer got called..
DEBUG - 2019-11-16 18:37:40 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-16 18:37:40 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-16 18:37:40 --> fetched data from get_datatables model
DEBUG - 2019-11-16 18:37:40 --> $_POST['start'] value = 0
DEBUG - 2019-11-16 18:37:40 --> ajax_list for loop started...
DEBUG - 2019-11-16 18:37:40 --> for loop started to get active sessions...
DEBUG - 2019-11-16 18:37:40 --> initial count =0
DEBUG - 2019-11-16 18:37:40 --> last count=10
DEBUG - 2019-11-16 18:37:40 -->  $_POST['draw']=1
DEBUG - 2019-11-16 18:37:40 --> count_all() got called form Customers_model
DEBUG - 2019-11-16 18:37:40 -->  recordsTotal=31
DEBUG - 2019-11-16 18:37:40 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-16 18:37:40 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-16 18:37:40 -->  recordsFiltered=31
DEBUG - 2019-11-16 18:37:40 --> count_all() got called form Customers_model
DEBUG - 2019-11-16 18:37:40 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-16 18:37:40 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-16 18:37:40 --> Total execution time: 0.0840
DEBUG - 2019-11-16 18:37:42 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:42 --> calling constructor page Dashboard
DEBUG - 2019-11-16 18:37:42 --> validating session page Dashboard
DEBUG - 2019-11-16 18:37:42 --> index page Dashboard
DEBUG - 2019-11-16 18:37:42 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-16 18:37:42 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 18:37:42 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-16 18:37:42 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 18:37:42 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-16 18:37:42 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-16 18:37:42 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-16 18:37:42 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:37:42 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:37:42 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:37:42 --> Array
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

DEBUG - 2019-11-16 18:37:42 --> calling view admin/dashboard
DEBUG - 2019-11-16 18:37:42 --> Total execution time: 0.0740
DEBUG - 2019-11-16 18:37:43 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:43 --> calling constructor page Manage_Users
DEBUG - 2019-11-16 18:37:43 --> validating session page Manage_Users
DEBUG - 2019-11-16 18:37:43 --> index page Manage_Users
DEBUG - 2019-11-16 18:37:43 --> loading model ManageUsers_Model
DEBUG - 2019-11-16 18:37:43 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-16 18:37:43 --> calling getusersdetails()
DEBUG - 2019-11-16 18:37:43 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:37:43 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:37:43 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:37:43 --> Array
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

DEBUG - 2019-11-16 18:37:43 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:37:43 --> calling view admin/manage_users
DEBUG - 2019-11-16 18:37:43 --> Total execution time: 0.0660
DEBUG - 2019-11-16 18:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:46 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:37:46 --> calling view upload_users
DEBUG - 2019-11-16 18:37:46 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:37:46 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:37:46 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:37:46 --> Array
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

DEBUG - 2019-11-16 18:37:46 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:37:46 --> Total execution time: 0.0580
DEBUG - 2019-11-16 18:37:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:37:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:37:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:37:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:37:52 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:37:52 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2019-11-16 18:39:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:39:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:39:14 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:39:14 --> Form_validation class already loaded. Second attempt ignored.
ERROR - 2019-11-16 18:39:14 --> Query error: Duplicate entry '10' for key 'PRIMARY' - Invalid query: INSERT INTO `tblusers` (`emailId`, `firstName`, `id`, `isActive`, `lastName`, `lastUpdationDate`, `mobileNumber`, `regDate`, `userPassword`) VALUES ('nirajmhatre89','Niraj','10','','Mhatre','','9699675725','','Test@12345')
DEBUG - 2019-11-16 18:42:21 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:42:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:42:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:42:21 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:42:21 --> Form_validation class already loaded. Second attempt ignored.
ERROR - 2019-11-16 18:42:22 --> Severity: Notice --> Undefined index: first_name C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 29
ERROR - 2019-11-16 18:42:22 --> Severity: Notice --> Undefined index: last_name C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 30
ERROR - 2019-11-16 18:42:22 --> Severity: Notice --> Undefined index: email C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
ERROR - 2019-11-16 18:42:22 --> Severity: Notice --> Undefined index: dob C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 32
ERROR - 2019-11-16 18:42:22 --> Severity: Notice --> Undefined index: contact_no C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 33
DEBUG - 2019-11-16 18:42:22 --> Total execution time: 0.2280
DEBUG - 2019-11-16 18:46:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:46:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:46:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:46:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:46:53 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:46:53 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2019-11-16 18:46:53 --> Total execution time: 0.2480
DEBUG - 2019-11-16 18:48:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:48:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:48:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:48:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:48:00 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:48:00 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2019-11-16 18:48:00 --> Total execution time: 0.2140
DEBUG - 2019-11-16 18:48:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:48:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:48:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:48:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:48:04 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:48:04 --> calling view upload_users
DEBUG - 2019-11-16 18:48:04 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:48:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:48:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:48:04 --> Array
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

DEBUG - 2019-11-16 18:48:04 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:48:04 --> Total execution time: 0.0570
DEBUG - 2019-11-16 18:50:29 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:50:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:50:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:50:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:50:29 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:50:29 --> calling view upload_users
DEBUG - 2019-11-16 18:50:29 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:50:29 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:50:29 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:50:29 --> Array
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

DEBUG - 2019-11-16 18:50:29 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:50:29 --> Total execution time: 0.0690
DEBUG - 2019-11-16 18:50:29 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:50:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:50:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:50:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:50:30 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:50:30 --> calling view upload_users
DEBUG - 2019-11-16 18:50:30 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:50:30 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:50:30 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:50:30 --> Array
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

DEBUG - 2019-11-16 18:50:30 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:50:30 --> Total execution time: 0.0680
DEBUG - 2019-11-16 18:50:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:50:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:50:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:50:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:50:30 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:50:30 --> calling view upload_users
DEBUG - 2019-11-16 18:50:30 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:50:30 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:50:30 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:50:30 --> Array
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

DEBUG - 2019-11-16 18:50:30 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:50:30 --> Total execution time: 0.0730
DEBUG - 2019-11-16 18:50:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:50:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:50:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:50:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:50:30 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:50:30 --> calling view upload_users
DEBUG - 2019-11-16 18:50:30 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:50:30 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:50:30 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:50:30 --> Array
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

DEBUG - 2019-11-16 18:50:30 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:50:30 --> Total execution time: 0.0720
DEBUG - 2019-11-16 18:50:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:50:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:50:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:50:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:50:50 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:50:50 --> calling view upload_users
DEBUG - 2019-11-16 18:50:50 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:50:50 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:50:50 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:50:50 --> Array
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

DEBUG - 2019-11-16 18:50:50 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:50:50 --> Total execution time: 0.0590
DEBUG - 2019-11-16 18:50:51 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:50:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:50:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:50:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:50:51 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:50:51 --> calling view upload_users
DEBUG - 2019-11-16 18:50:51 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:50:51 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:50:51 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:50:51 --> Array
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

DEBUG - 2019-11-16 18:50:51 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:50:51 --> Total execution time: 0.0560
DEBUG - 2019-11-16 18:50:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:50:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:50:53 --> 404 Page Not Found: Assets/uploads
DEBUG - 2019-11-16 18:51:31 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:51:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:51:31 --> 404 Page Not Found: Assets/uploads
DEBUG - 2019-11-16 18:51:31 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:51:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:51:32 --> 404 Page Not Found: Assets/uploads
DEBUG - 2019-11-16 18:52:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:52:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:52:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:52:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:52:07 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:52:07 --> calling view upload_users
DEBUG - 2019-11-16 18:52:07 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:52:07 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:52:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:52:07 --> Array
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

DEBUG - 2019-11-16 18:52:07 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:52:07 --> Total execution time: 0.0790
DEBUG - 2019-11-16 18:52:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:52:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:52:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:52:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:52:09 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:52:09 --> calling view upload_users
DEBUG - 2019-11-16 18:52:09 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:52:09 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:52:09 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:52:09 --> Array
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

DEBUG - 2019-11-16 18:52:09 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:52:09 --> Total execution time: 0.0670
DEBUG - 2019-11-16 18:52:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:52:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:52:10 --> 404 Page Not Found: Assets/uploads
DEBUG - 2019-11-16 18:52:12 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:52:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:52:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:52:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:52:12 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:52:12 --> calling view upload_users
DEBUG - 2019-11-16 18:52:12 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:52:12 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:52:12 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:52:12 --> Array
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

DEBUG - 2019-11-16 18:52:12 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:52:12 --> Total execution time: 0.0590
DEBUG - 2019-11-16 18:52:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:52:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:52:16 --> 404 Page Not Found: Assets/uploads
DEBUG - 2019-11-16 18:52:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:52:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:52:28 --> 404 Page Not Found: Assets/index
DEBUG - 2019-11-16 18:54:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:54:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:54:40 --> 404 Page Not Found: Assests/uploads
DEBUG - 2019-11-16 18:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:54:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:54:45 --> 404 Page Not Found: Assests/uploads
DEBUG - 2019-11-16 18:54:46 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:54:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:54:46 --> 404 Page Not Found: Assests/uploads
DEBUG - 2019-11-16 18:55:15 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:55:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:55:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:55:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:55:15 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:55:15 --> calling view upload_users
DEBUG - 2019-11-16 18:55:15 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:55:15 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:55:15 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:55:15 --> Array
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

DEBUG - 2019-11-16 18:55:15 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:55:15 --> Total execution time: 0.0690
DEBUG - 2019-11-16 18:55:17 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:55:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:55:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:55:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:55:18 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:55:18 --> calling view upload_users
DEBUG - 2019-11-16 18:55:18 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:55:18 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:55:18 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:55:18 --> Array
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

DEBUG - 2019-11-16 18:55:18 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:55:18 --> Total execution time: 0.0700
DEBUG - 2019-11-16 18:55:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:55:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:55:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:55:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:55:18 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:55:18 --> calling view upload_users
DEBUG - 2019-11-16 18:55:18 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:55:18 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:55:18 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:55:18 --> Array
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

DEBUG - 2019-11-16 18:55:18 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:55:18 --> Total execution time: 0.0630
DEBUG - 2019-11-16 18:55:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:55:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-16 18:55:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-16 18:55:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-16 18:55:18 --> Upload_users constructer got called..
DEBUG - 2019-11-16 18:55:18 --> calling view upload_users
DEBUG - 2019-11-16 18:55:18 --> loading Configarable_Login model...
DEBUG - 2019-11-16 18:55:18 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-16 18:55:18 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-16 18:55:18 --> Array
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

DEBUG - 2019-11-16 18:55:18 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-16 18:55:18 --> Total execution time: 0.0700
DEBUG - 2019-11-16 18:55:19 --> UTF-8 Support Enabled
DEBUG - 2019-11-16 18:55:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-16 18:55:19 --> 404 Page Not Found: Assests/uploads
