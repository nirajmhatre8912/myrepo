<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2019-11-13 12:05:12 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:05:12 --> No URI present. Default controller set.
DEBUG - 2019-11-13 12:05:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:05:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:05:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:05:12 --> Total execution time: 0.2260
DEBUG - 2019-11-13 12:05:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:05:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:05:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:05:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:05:14 --> index method Login
DEBUG - 2019-11-13 12:05:14 --> checking request type form or redirect
DEBUG - 2019-11-13 12:05:14 --> admin login view loaded...
DEBUG - 2019-11-13 12:05:14 --> Total execution time: 0.0910
DEBUG - 2019-11-13 12:05:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:05:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:05:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:05:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:05:25 --> index method Login
DEBUG - 2019-11-13 12:05:25 --> checking request type form or redirect
DEBUG - 2019-11-13 12:05:25 --> form post method
DEBUG - 2019-11-13 12:05:25 --> loading model Admin_Login_Model
DEBUG - 2019-11-13 12:05:25 --> calling validatelogin()
DEBUG - 2019-11-13 12:05:25 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-13 12:05:25 --> Accounts details =1
DEBUG - 2019-11-13 12:05:25 --> account id found
DEBUG - 2019-11-13 12:05:25 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-13 12:05:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:05:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:05:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:05:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:05:25 --> calling constructor page Dashboard
DEBUG - 2019-11-13 12:05:25 --> validating session page Dashboard
DEBUG - 2019-11-13 12:05:25 --> index page Dashboard
DEBUG - 2019-11-13 12:05:25 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-13 12:05:25 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 12:05:25 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-13 12:05:25 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 12:05:25 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-13 12:05:25 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 12:05:25 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-13 12:05:25 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:05:25 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:05:25 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:05:25 --> Array
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

DEBUG - 2019-11-13 12:05:25 --> calling view admin/dashboard
DEBUG - 2019-11-13 12:05:25 --> Total execution time: 0.1250
DEBUG - 2019-11-13 12:05:44 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:05:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:05:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:05:44 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:05:44 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:05:44 --> index page Manage_Users
DEBUG - 2019-11-13 12:05:44 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:05:44 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:05:44 --> calling getusersdetails()
DEBUG - 2019-11-13 12:05:44 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:05:44 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:05:44 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:05:44 --> Array
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

DEBUG - 2019-11-13 12:05:44 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:05:44 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:05:44 --> Total execution time: 0.3860
DEBUG - 2019-11-13 12:09:32 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:09:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:09:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:09:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:09:32 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:09:32 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:09:32 --> index page Manage_Users
DEBUG - 2019-11-13 12:09:32 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:09:32 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:09:32 --> calling getusersdetails()
DEBUG - 2019-11-13 12:09:32 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:09:32 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:09:32 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:09:32 --> Array
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

DEBUG - 2019-11-13 12:09:32 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:09:32 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:09:32 --> Total execution time: 0.0760
DEBUG - 2019-11-13 12:11:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:11:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:11:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:11:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:11:59 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:11:59 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:11:59 --> index page Manage_Users
DEBUG - 2019-11-13 12:11:59 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:11:59 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:11:59 --> calling getusersdetails()
DEBUG - 2019-11-13 12:11:59 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:11:59 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:11:59 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:11:59 --> Array
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

DEBUG - 2019-11-13 12:11:59 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:11:59 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:11:59 --> Total execution time: 0.0790
DEBUG - 2019-11-13 12:12:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:12:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:12:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:12:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:12:00 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:12:00 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:12:00 --> index page Manage_Users
DEBUG - 2019-11-13 12:12:00 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:12:00 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:12:00 --> calling getusersdetails()
DEBUG - 2019-11-13 12:12:00 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:12:00 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:12:00 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:12:00 --> Array
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

DEBUG - 2019-11-13 12:12:00 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:12:00 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:12:00 --> Total execution time: 0.0590
DEBUG - 2019-11-13 12:12:02 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:12:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:12:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:12:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:12:02 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:12:02 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:12:02 --> index page Manage_Users
DEBUG - 2019-11-13 12:12:02 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:12:02 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:12:02 --> calling getusersdetails()
DEBUG - 2019-11-13 12:12:02 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:12:02 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:12:02 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:12:02 --> Array
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

DEBUG - 2019-11-13 12:12:02 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:12:02 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:12:02 --> Total execution time: 0.0670
DEBUG - 2019-11-13 12:12:34 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:12:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:12:34 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:12:34 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:12:34 --> index page Manage_Users
DEBUG - 2019-11-13 12:12:34 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:12:34 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:12:34 --> calling getusersdetails()
DEBUG - 2019-11-13 12:12:34 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:12:34 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:12:34 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:12:34 --> Array
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

DEBUG - 2019-11-13 12:12:34 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:12:34 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:12:34 --> Total execution time: 0.0680
DEBUG - 2019-11-13 12:12:35 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:12:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:12:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:12:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:12:35 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:12:35 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:12:35 --> index page Manage_Users
DEBUG - 2019-11-13 12:12:35 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:12:35 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:12:35 --> calling getusersdetails()
DEBUG - 2019-11-13 12:12:35 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:12:35 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:12:35 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:12:35 --> Array
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

DEBUG - 2019-11-13 12:12:35 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:12:35 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:12:35 --> Total execution time: 0.0640
DEBUG - 2019-11-13 12:15:01 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:15:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:15:01 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:15:01 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:15:01 --> index page Manage_Users
DEBUG - 2019-11-13 12:15:01 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:15:01 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:15:01 --> calling getusersdetails()
DEBUG - 2019-11-13 12:15:01 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:15:01 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:15:01 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:15:01 --> Array
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

DEBUG - 2019-11-13 12:15:01 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:15:01 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:15:01 --> Total execution time: 0.0730
DEBUG - 2019-11-13 12:15:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:15:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:15:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:15:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:15:14 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:15:14 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:15:14 --> index page Manage_Users
DEBUG - 2019-11-13 12:15:14 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:15:14 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:15:14 --> calling getusersdetails()
DEBUG - 2019-11-13 12:15:14 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:15:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:15:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:15:14 --> Array
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

DEBUG - 2019-11-13 12:15:14 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:15:14 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:15:14 --> Total execution time: 0.0770
DEBUG - 2019-11-13 12:15:15 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:15:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:15:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:15:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:15:15 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:15:15 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:15:15 --> index page Manage_Users
DEBUG - 2019-11-13 12:15:15 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:15:15 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:15:15 --> calling getusersdetails()
DEBUG - 2019-11-13 12:15:15 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:15:15 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:15:15 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:15:15 --> Array
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

DEBUG - 2019-11-13 12:15:15 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:15:15 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:15:15 --> Total execution time: 0.1040
DEBUG - 2019-11-13 12:15:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:15:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:15:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:15:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:15:54 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:15:54 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:15:54 --> index page Manage_Users
DEBUG - 2019-11-13 12:15:54 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:15:54 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:15:54 --> calling getusersdetails()
DEBUG - 2019-11-13 12:15:54 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:15:54 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:15:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:15:54 --> Array
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

DEBUG - 2019-11-13 12:15:54 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:15:54 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:15:54 --> Total execution time: 0.0790
DEBUG - 2019-11-13 12:17:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:17:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:17:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:17:25 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:17:25 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:17:25 --> index page Manage_Users
DEBUG - 2019-11-13 12:17:25 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:17:25 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:17:25 --> calling getusersdetails()
DEBUG - 2019-11-13 12:17:25 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:17:25 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:17:25 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:17:25 --> Array
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

DEBUG - 2019-11-13 12:17:25 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:17:25 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:17:25 --> Total execution time: 0.0830
DEBUG - 2019-11-13 12:17:27 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:17:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:17:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:17:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:17:27 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-13 12:17:27 --> Total execution time: 0.1070
DEBUG - 2019-11-13 12:17:29 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:17:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:17:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:17:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:17:29 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:17:29 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:17:29 --> index page Manage_Users
DEBUG - 2019-11-13 12:17:29 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:17:29 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:17:29 --> calling getusersdetails()
DEBUG - 2019-11-13 12:17:29 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:17:29 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:17:29 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:17:29 --> Array
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

DEBUG - 2019-11-13 12:17:29 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:17:29 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:17:29 --> Total execution time: 0.0650
DEBUG - 2019-11-13 12:32:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:32:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:32:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:32:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:32:40 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:32:40 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:32:40 --> index page Manage_Users
DEBUG - 2019-11-13 12:32:40 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:32:40 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:32:40 --> calling getusersdetails()
DEBUG - 2019-11-13 12:32:40 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:32:40 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:32:40 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:32:40 --> Array
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

DEBUG - 2019-11-13 12:32:40 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:32:40 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:32:40 --> Total execution time: 0.0645
DEBUG - 2019-11-13 12:33:12 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 12:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 12:33:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 12:33:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 12:33:12 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 12:33:12 --> validating session page Manage_Users
DEBUG - 2019-11-13 12:33:12 --> index page Manage_Users
DEBUG - 2019-11-13 12:33:12 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 12:33:12 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 12:33:12 --> calling getusersdetails()
DEBUG - 2019-11-13 12:33:12 --> loading Configarable_Login model...
DEBUG - 2019-11-13 12:33:12 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 12:33:12 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 12:33:12 --> Array
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

DEBUG - 2019-11-13 12:33:12 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 12:33:12 --> calling view admin/manage_users
DEBUG - 2019-11-13 12:33:12 --> Total execution time: 0.0650
DEBUG - 2019-11-13 17:34:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:34:54 --> No URI present. Default controller set.
DEBUG - 2019-11-13 17:34:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:34:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:34:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:34:54 --> Total execution time: 0.2250
DEBUG - 2019-11-13 17:34:56 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:34:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:34:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:34:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:34:56 --> index method Login
DEBUG - 2019-11-13 17:34:56 --> checking request type form or redirect
DEBUG - 2019-11-13 17:34:56 --> admin login view loaded...
DEBUG - 2019-11-13 17:34:56 --> Total execution time: 0.1490
DEBUG - 2019-11-13 17:35:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:35:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:35:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:35:10 --> index method Login
DEBUG - 2019-11-13 17:35:10 --> checking request type form or redirect
DEBUG - 2019-11-13 17:35:10 --> form post method
DEBUG - 2019-11-13 17:35:10 --> loading model Admin_Login_Model
DEBUG - 2019-11-13 17:35:10 --> calling validatelogin()
DEBUG - 2019-11-13 17:35:10 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-13 17:35:10 --> Accounts details =1
DEBUG - 2019-11-13 17:35:10 --> account id found
DEBUG - 2019-11-13 17:35:10 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-13 17:35:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:35:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:35:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:35:10 --> calling constructor page Dashboard
DEBUG - 2019-11-13 17:35:10 --> validating session page Dashboard
DEBUG - 2019-11-13 17:35:10 --> index page Dashboard
DEBUG - 2019-11-13 17:35:10 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-13 17:35:10 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:35:10 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-13 17:35:10 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:35:10 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-13 17:35:10 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:35:10 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-13 17:35:10 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:35:10 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:35:10 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:35:10 --> Array
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

DEBUG - 2019-11-13 17:35:10 --> calling view admin/dashboard
DEBUG - 2019-11-13 17:35:10 --> Total execution time: 0.1190
DEBUG - 2019-11-13 17:35:15 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:35:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:35:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:35:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:35:15 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:35:15 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:35:15 --> index page Manage_Users
DEBUG - 2019-11-13 17:35:15 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:35:15 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:35:15 --> calling getusersdetails()
DEBUG - 2019-11-13 17:35:15 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:35:15 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:35:15 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:35:15 --> Array
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

DEBUG - 2019-11-13 17:35:15 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:35:15 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:35:15 --> Total execution time: 0.0820
DEBUG - 2019-11-13 17:35:17 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:35:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:35:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:35:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:35:17 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-13 17:35:17 --> Total execution time: 0.1070
DEBUG - 2019-11-13 17:35:35 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:35:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:35:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:35:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:35:35 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:35:35 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:35:35 --> index page Manage_Users
DEBUG - 2019-11-13 17:35:35 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:35:35 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:35:35 --> calling getusersdetails()
DEBUG - 2019-11-13 17:35:35 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:35:35 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:35:35 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:35:35 --> Array
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

DEBUG - 2019-11-13 17:35:35 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:35:35 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:35:35 --> Total execution time: 0.1340
DEBUG - 2019-11-13 17:35:37 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:35:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:35:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:35:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:35:37 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-13 17:35:37 --> Total execution time: 0.0670
DEBUG - 2019-11-13 17:38:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:04 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:38:04 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:38:04 --> index page Manage_Users
DEBUG - 2019-11-13 17:38:04 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:38:04 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:38:04 --> calling getusersdetails()
DEBUG - 2019-11-13 17:38:04 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:38:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:38:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:38:04 --> Array
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

DEBUG - 2019-11-13 17:38:04 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:38:04 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:38:04 --> Total execution time: 0.0950
DEBUG - 2019-11-13 17:38:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:04 --> calling constructor page Dashboard
DEBUG - 2019-11-13 17:38:04 --> validating session page Dashboard
DEBUG - 2019-11-13 17:38:04 --> index page Dashboard
DEBUG - 2019-11-13 17:38:04 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-13 17:38:04 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:38:04 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-13 17:38:04 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:38:04 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-13 17:38:04 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:38:04 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-13 17:38:04 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:38:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:38:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:38:04 --> Array
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

DEBUG - 2019-11-13 17:38:04 --> calling view admin/dashboard
DEBUG - 2019-11-13 17:38:04 --> Total execution time: 0.0840
DEBUG - 2019-11-13 17:38:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:05 --> calling constructor page Dashboard
DEBUG - 2019-11-13 17:38:05 --> validating session page Dashboard
DEBUG - 2019-11-13 17:38:05 --> index page Dashboard
DEBUG - 2019-11-13 17:38:05 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-13 17:38:05 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:38:05 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-13 17:38:05 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:38:05 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-13 17:38:05 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:38:05 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-13 17:38:05 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:38:05 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:38:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:38:05 --> Array
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

DEBUG - 2019-11-13 17:38:05 --> calling view admin/dashboard
DEBUG - 2019-11-13 17:38:05 --> Total execution time: 0.0930
DEBUG - 2019-11-13 17:38:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:06 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:38:06 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:38:06 --> index page Manage_Users
DEBUG - 2019-11-13 17:38:06 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:38:06 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:38:06 --> calling getusersdetails()
DEBUG - 2019-11-13 17:38:06 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:38:06 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:38:06 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:38:07 --> Array
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

DEBUG - 2019-11-13 17:38:07 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:38:07 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:38:07 --> Total execution time: 0.0900
DEBUG - 2019-11-13 17:38:08 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:08 --> Active user constructer called..
DEBUG - 2019-11-13 17:38:08 --> Active_Users index method called...
DEBUG - 2019-11-13 17:38:08 --> Active_Sessions Modem loaded..
DEBUG - 2019-11-13 17:38:08 --> calling get_user_active()
DEBUG - 2019-11-13 17:38:08 --> get_user_active() got called form Active_Session
DEBUG - 2019-11-13 17:38:08 --> number of rows get returned...
DEBUG - 2019-11-13 17:38:08 --> loading configurable model
DEBUG - 2019-11-13 17:38:08 --> calling configurable login for role admin
DEBUG - 2019-11-13 17:38:08 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:38:08 --> Array
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

DEBUG - 2019-11-13 17:38:08 --> result=Array
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

DEBUG - 2019-11-13 17:38:08 --> calling admin/activeusers
DEBUG - 2019-11-13 17:38:08 --> Total execution time: 0.1180
DEBUG - 2019-11-13 17:38:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:09 --> calling constructor page Audit_Users
DEBUG - 2019-11-13 17:38:09 --> validating session page Audit_Users
DEBUG - 2019-11-13 17:38:09 --> index page Audit_Users
DEBUG - 2019-11-13 17:38:09 --> loading Audit_Trail model...
DEBUG - 2019-11-13 17:38:09 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-13 17:38:09 --> loading getAuditTrail()...
DEBUG - 2019-11-13 17:38:09 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:38:09 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:38:09 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:38:09 --> Array
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

DEBUG - 2019-11-13 17:38:09 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:38:09 --> calling view admin/auditusers
DEBUG - 2019-11-13 17:38:09 --> Total execution time: 0.0760
DEBUG - 2019-11-13 17:38:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:10 --> Customer_model constructer got called..
DEBUG - 2019-11-13 17:38:10 --> Active_Sessions constructer got called..
DEBUG - 2019-11-13 17:38:10 --> index method active session controller
DEBUG - 2019-11-13 17:38:10 --> navigation to active session view
DEBUG - 2019-11-13 17:38:10 --> Total execution time: 0.0990
DEBUG - 2019-11-13 17:38:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:11 --> Customer_model constructer got called..
DEBUG - 2019-11-13 17:38:11 --> Active_Sessions constructer got called..
DEBUG - 2019-11-13 17:38:11 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-13 17:38:11 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-13 17:38:11 --> fetched data from get_datatables model
DEBUG - 2019-11-13 17:38:11 --> $_POST['start'] value = 0
DEBUG - 2019-11-13 17:38:11 --> ajax_list for loop started...
DEBUG - 2019-11-13 17:38:11 --> for loop started to get active sessions...
DEBUG - 2019-11-13 17:38:11 --> initial count =0
DEBUG - 2019-11-13 17:38:11 --> last count=10
DEBUG - 2019-11-13 17:38:11 -->  $_POST['draw']=1
DEBUG - 2019-11-13 17:38:11 --> count_all() got called form Customers_model
DEBUG - 2019-11-13 17:38:11 -->  recordsTotal=30
DEBUG - 2019-11-13 17:38:11 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-13 17:38:11 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-13 17:38:11 -->  recordsFiltered=30
DEBUG - 2019-11-13 17:38:11 --> count_all() got called form Customers_model
DEBUG - 2019-11-13 17:38:11 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-13 17:38:11 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-13 17:38:11 --> Total execution time: 0.0860
DEBUG - 2019-11-13 17:38:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:14 --> calling constructor page Dashboard
DEBUG - 2019-11-13 17:38:14 --> validating session page Dashboard
DEBUG - 2019-11-13 17:38:14 --> index page Dashboard
DEBUG - 2019-11-13 17:38:14 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-13 17:38:14 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:38:14 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-13 17:38:14 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:38:14 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-13 17:38:14 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 17:38:14 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-13 17:38:14 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:38:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:38:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:38:14 --> Array
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

DEBUG - 2019-11-13 17:38:14 --> calling view admin/dashboard
DEBUG - 2019-11-13 17:38:14 --> Total execution time: 0.0780
DEBUG - 2019-11-13 17:38:15 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:15 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:38:15 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:38:15 --> index page Manage_Users
DEBUG - 2019-11-13 17:38:15 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:38:15 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:38:15 --> calling getusersdetails()
DEBUG - 2019-11-13 17:38:15 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:38:15 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:38:15 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:38:15 --> Array
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

DEBUG - 2019-11-13 17:38:15 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:38:15 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:38:15 --> Total execution time: 0.0720
DEBUG - 2019-11-13 17:38:20 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:20 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-13 17:38:20 --> Total execution time: 0.0660
DEBUG - 2019-11-13 17:38:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:30 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:38:30 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:38:30 --> index page Manage_Users
DEBUG - 2019-11-13 17:38:30 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:38:30 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:38:30 --> calling getusersdetails()
DEBUG - 2019-11-13 17:38:30 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:38:30 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:38:30 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:38:30 --> Array
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

DEBUG - 2019-11-13 17:38:30 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:38:30 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:38:30 --> Total execution time: 0.0770
DEBUG - 2019-11-13 17:38:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:38:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:38:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:38:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:38:33 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:38:33 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:38:33 --> index page Manage_Users
DEBUG - 2019-11-13 17:38:33 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:38:33 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:38:33 --> calling getusersdetails()
DEBUG - 2019-11-13 17:38:33 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:38:33 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:38:33 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:38:33 --> Array
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

DEBUG - 2019-11-13 17:38:33 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:38:33 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:38:33 --> Total execution time: 0.0700
DEBUG - 2019-11-13 17:39:39 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:39:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:39:39 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:39:39 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:39:39 --> index page Manage_Users
DEBUG - 2019-11-13 17:39:39 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:39:39 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:39:39 --> calling getusersdetails()
DEBUG - 2019-11-13 17:39:39 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:39:39 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:39:39 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:39:39 --> Array
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

DEBUG - 2019-11-13 17:39:39 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:39:39 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:39:39 --> Total execution time: 0.0750
DEBUG - 2019-11-13 17:39:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:39:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-13 17:39:41 --> 404 Page Not Found: Upload_users/index
DEBUG - 2019-11-13 17:39:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:39:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:39:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:39:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:39:45 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:39:45 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:39:45 --> index page Manage_Users
DEBUG - 2019-11-13 17:39:45 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:39:45 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:39:45 --> calling getusersdetails()
DEBUG - 2019-11-13 17:39:45 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:39:45 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:39:45 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:39:45 --> Array
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

DEBUG - 2019-11-13 17:39:45 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:39:45 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:39:45 --> Total execution time: 0.0560
DEBUG - 2019-11-13 17:40:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:40:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:40:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:40:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:40:00 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:40:00 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:40:00 --> index page Manage_Users
DEBUG - 2019-11-13 17:40:00 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:40:00 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:40:00 --> calling getusersdetails()
DEBUG - 2019-11-13 17:40:00 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:40:00 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:40:00 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:40:00 --> Array
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

DEBUG - 2019-11-13 17:40:00 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:40:00 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:40:00 --> Total execution time: 0.0560
DEBUG - 2019-11-13 17:40:01 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:40:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:40:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:40:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:40:01 --> Upload_users constructer got called..
DEBUG - 2019-11-13 17:40:01 --> Total execution time: 0.0600
DEBUG - 2019-11-13 17:40:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:40:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:40:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:40:03 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:40:03 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:40:03 --> index page Manage_Users
DEBUG - 2019-11-13 17:40:03 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:40:03 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:40:03 --> calling getusersdetails()
DEBUG - 2019-11-13 17:40:03 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:40:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:40:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:40:03 --> Array
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

DEBUG - 2019-11-13 17:40:03 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:40:03 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:40:03 --> Total execution time: 0.0630
DEBUG - 2019-11-13 17:42:42 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:42:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:42:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:42:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:42:42 --> Upload_users constructer got called..
DEBUG - 2019-11-13 17:42:42 --> calling view upload_users
ERROR - 2019-11-13 17:42:42 --> Severity: Notice --> Undefined variable: pagelist C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
ERROR - 2019-11-13 17:42:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
ERROR - 2019-11-13 17:42:42 --> Severity: Notice --> Undefined variable: userdetails C:\xampp\htdocs\ciproject\application\views\admin\upload_users.php 87
ERROR - 2019-11-13 17:42:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\upload_users.php 87
DEBUG - 2019-11-13 17:42:42 --> Total execution time: 0.0810
DEBUG - 2019-11-13 17:43:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:43:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:43:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:43:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:43:33 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 17:43:33 --> validating session page Manage_Users
DEBUG - 2019-11-13 17:43:33 --> index page Manage_Users
DEBUG - 2019-11-13 17:43:33 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 17:43:33 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 17:43:33 --> calling getusersdetails()
DEBUG - 2019-11-13 17:43:33 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:43:33 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:43:33 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:43:33 --> Array
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

DEBUG - 2019-11-13 17:43:33 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:43:33 --> calling view admin/manage_users
DEBUG - 2019-11-13 17:43:33 --> Total execution time: 0.0660
DEBUG - 2019-11-13 17:43:36 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:43:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:43:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:43:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:43:36 --> Upload_users constructer got called..
DEBUG - 2019-11-13 17:43:36 --> calling view upload_users
ERROR - 2019-11-13 17:43:36 --> Severity: Notice --> Undefined variable: pagelist C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
ERROR - 2019-11-13 17:43:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
ERROR - 2019-11-13 17:43:36 --> Severity: Notice --> Undefined variable: userdetails C:\xampp\htdocs\ciproject\application\views\admin\upload_users.php 87
ERROR - 2019-11-13 17:43:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\upload_users.php 87
DEBUG - 2019-11-13 17:43:36 --> Total execution time: 0.0510
DEBUG - 2019-11-13 17:44:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:44:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:44:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:44:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:44:40 --> Upload_users constructer got called..
DEBUG - 2019-11-13 17:44:40 --> calling view upload_users
ERROR - 2019-11-13 17:44:40 --> Severity: Notice --> Undefined variable: result C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 15
ERROR - 2019-11-13 17:44:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
ERROR - 2019-11-13 17:44:40 --> Severity: Notice --> Undefined variable: userdetails C:\xampp\htdocs\ciproject\application\views\admin\upload_users.php 87
ERROR - 2019-11-13 17:44:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\upload_users.php 87
DEBUG - 2019-11-13 17:44:40 --> Total execution time: 0.0640
DEBUG - 2019-11-13 17:44:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:44:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:44:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:44:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:44:41 --> Upload_users constructer got called..
DEBUG - 2019-11-13 17:44:41 --> calling view upload_users
ERROR - 2019-11-13 17:44:41 --> Severity: Notice --> Undefined variable: result C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 15
ERROR - 2019-11-13 17:44:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
ERROR - 2019-11-13 17:44:41 --> Severity: Notice --> Undefined variable: userdetails C:\xampp\htdocs\ciproject\application\views\admin\upload_users.php 87
ERROR - 2019-11-13 17:44:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\upload_users.php 87
DEBUG - 2019-11-13 17:44:41 --> Total execution time: 0.0550
DEBUG - 2019-11-13 17:46:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:46:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:46:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:46:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:46:04 --> Upload_users constructer got called..
DEBUG - 2019-11-13 17:46:04 --> calling view upload_users
ERROR - 2019-11-13 17:46:04 --> Severity: Notice --> Undefined variable: result C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 15
ERROR - 2019-11-13 17:46:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
DEBUG - 2019-11-13 17:46:04 --> Total execution time: 0.0540
DEBUG - 2019-11-13 17:46:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:46:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:46:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:46:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:46:05 --> Upload_users constructer got called..
DEBUG - 2019-11-13 17:46:05 --> calling view upload_users
ERROR - 2019-11-13 17:46:05 --> Severity: Notice --> Undefined variable: result C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 15
ERROR - 2019-11-13 17:46:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
DEBUG - 2019-11-13 17:46:05 --> Total execution time: 0.0540
DEBUG - 2019-11-13 17:49:37 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 17:49:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 17:49:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 17:49:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 17:49:37 --> Upload_users constructer got called..
DEBUG - 2019-11-13 17:49:37 --> calling view upload_users
DEBUG - 2019-11-13 17:49:37 --> loading Configarable_Login model...
DEBUG - 2019-11-13 17:49:37 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 17:49:37 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 17:49:37 --> Array
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

DEBUG - 2019-11-13 17:49:37 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 17:49:37 --> Total execution time: 0.0600
DEBUG - 2019-11-13 18:09:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 18:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 18:09:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 18:09:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 18:09:03 --> Upload_users constructer got called..
DEBUG - 2019-11-13 18:09:03 --> calling view upload_users
DEBUG - 2019-11-13 18:09:03 --> loading Configarable_Login model...
DEBUG - 2019-11-13 18:09:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 18:09:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 18:09:03 --> Array
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

DEBUG - 2019-11-13 18:09:03 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 18:09:03 --> Total execution time: 0.0640
DEBUG - 2019-11-13 18:10:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 18:10:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 18:10:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 18:10:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 18:10:49 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 18:10:49 --> validating session page Manage_Users
DEBUG - 2019-11-13 18:10:49 --> index page Manage_Users
DEBUG - 2019-11-13 18:10:49 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 18:10:49 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 18:10:49 --> calling getusersdetails()
DEBUG - 2019-11-13 18:10:49 --> loading Configarable_Login model...
DEBUG - 2019-11-13 18:10:49 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 18:10:49 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 18:10:49 --> Array
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

DEBUG - 2019-11-13 18:10:49 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 18:10:49 --> calling view admin/manage_users
DEBUG - 2019-11-13 18:10:49 --> Total execution time: 0.0670
DEBUG - 2019-11-13 18:10:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 18:10:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 18:10:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 18:10:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 18:10:53 --> calling constructor page Dashboard
DEBUG - 2019-11-13 18:10:53 --> validating session page Dashboard
DEBUG - 2019-11-13 18:10:53 --> index page Dashboard
DEBUG - 2019-11-13 18:10:53 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-13 18:10:53 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 18:10:53 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-13 18:10:53 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 18:10:53 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-13 18:10:53 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-13 18:10:53 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-13 18:10:53 --> loading Configarable_Login model...
DEBUG - 2019-11-13 18:10:53 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 18:10:53 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 18:10:53 --> Array
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

DEBUG - 2019-11-13 18:10:53 --> calling view admin/dashboard
DEBUG - 2019-11-13 18:10:53 --> Total execution time: 0.0570
DEBUG - 2019-11-13 18:10:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 18:10:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 18:10:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 18:10:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 18:10:55 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 18:10:55 --> validating session page Manage_Users
DEBUG - 2019-11-13 18:10:55 --> index page Manage_Users
DEBUG - 2019-11-13 18:10:55 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 18:10:55 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 18:10:55 --> calling getusersdetails()
DEBUG - 2019-11-13 18:10:55 --> loading Configarable_Login model...
DEBUG - 2019-11-13 18:10:55 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 18:10:55 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 18:10:55 --> Array
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

DEBUG - 2019-11-13 18:10:55 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 18:10:55 --> calling view admin/manage_users
DEBUG - 2019-11-13 18:10:55 --> Total execution time: 0.0580
DEBUG - 2019-11-13 18:11:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 18:11:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 18:11:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 18:11:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 18:11:18 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 18:11:18 --> validating session page Manage_Users
DEBUG - 2019-11-13 18:11:18 --> loading Configarable_Login model...
DEBUG - 2019-11-13 18:11:18 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 18:11:18 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 18:11:18 --> Array
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

ERROR - 2019-11-13 18:11:18 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 47
DEBUG - 2019-11-13 18:11:18 --> loading configurable menu with result=Array
DEBUG - 2019-11-13 18:11:18 --> loading ManageUsers_Model model...
DEBUG - 2019-11-13 18:11:18 --> calling getuserdetail()
DEBUG - 2019-11-13 18:11:18 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-13 18:11:18 --> calling view admin/getuserdetails
DEBUG - 2019-11-13 18:11:18 --> Total execution time: 0.1150
DEBUG - 2019-11-13 18:11:35 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 18:11:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 18:11:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 18:11:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 18:11:35 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 18:11:35 --> validating session page Manage_Users
DEBUG - 2019-11-13 18:11:35 --> index page Manage_Users
DEBUG - 2019-11-13 18:11:35 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 18:11:35 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 18:11:35 --> calling getusersdetails()
DEBUG - 2019-11-13 18:11:35 --> loading Configarable_Login model...
DEBUG - 2019-11-13 18:11:35 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 18:11:35 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 18:11:35 --> Array
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

DEBUG - 2019-11-13 18:11:35 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 18:11:35 --> calling view admin/manage_users
DEBUG - 2019-11-13 18:11:35 --> Total execution time: 0.0530
DEBUG - 2019-11-13 18:11:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 18:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 18:11:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 18:11:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 18:11:38 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 18:11:38 --> validating session page Manage_Users
DEBUG - 2019-11-13 18:11:38 --> loading Configarable_Login model...
DEBUG - 2019-11-13 18:11:38 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 18:11:38 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 18:11:38 --> Array
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

ERROR - 2019-11-13 18:11:38 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 47
DEBUG - 2019-11-13 18:11:38 --> loading configurable menu with result=Array
DEBUG - 2019-11-13 18:11:38 --> loading ManageUsers_Model model...
DEBUG - 2019-11-13 18:11:38 --> calling getuserdetail()
DEBUG - 2019-11-13 18:11:38 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-13 18:11:38 --> calling view admin/getuserdetails
DEBUG - 2019-11-13 18:11:38 --> Total execution time: 0.0640
DEBUG - 2019-11-13 18:11:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 18:11:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 18:11:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 18:11:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 18:11:50 --> calling constructor page Manage_Users
DEBUG - 2019-11-13 18:11:50 --> validating session page Manage_Users
DEBUG - 2019-11-13 18:11:50 --> index page Manage_Users
DEBUG - 2019-11-13 18:11:50 --> loading model ManageUsers_Model
DEBUG - 2019-11-13 18:11:50 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-13 18:11:50 --> calling getusersdetails()
DEBUG - 2019-11-13 18:11:50 --> loading Configarable_Login model...
DEBUG - 2019-11-13 18:11:50 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-13 18:11:50 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-13 18:11:50 --> Array
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

DEBUG - 2019-11-13 18:11:50 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-13 18:11:50 --> calling view admin/manage_users
DEBUG - 2019-11-13 18:11:50 --> Total execution time: 0.0580
DEBUG - 2019-11-13 18:11:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 18:11:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 18:11:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 18:11:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 18:11:59 --> logout() called form login controller.... loading admin/login
DEBUG - 2019-11-13 18:12:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-13 18:12:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-13 18:12:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-13 18:12:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-13 18:12:00 --> index method Login
DEBUG - 2019-11-13 18:12:00 --> checking request type form or redirect
DEBUG - 2019-11-13 18:12:00 --> admin login view loaded...
DEBUG - 2019-11-13 18:12:00 --> Total execution time: 0.0460
