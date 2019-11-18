<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2019-11-18 10:36:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:36:59 --> No URI present. Default controller set.
DEBUG - 2019-11-18 10:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:36:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:36:59 --> Total execution time: 0.0970
DEBUG - 2019-11-18 10:36:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:36:59 --> No URI present. Default controller set.
DEBUG - 2019-11-18 10:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:37:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:37:00 --> Total execution time: 0.0710
DEBUG - 2019-11-18 10:37:02 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:37:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:37:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:37:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:37:02 --> index method Login
DEBUG - 2019-11-18 10:37:02 --> checking request type form or redirect
DEBUG - 2019-11-18 10:37:02 --> admin login view loaded...
DEBUG - 2019-11-18 10:37:02 --> Total execution time: 0.0670
DEBUG - 2019-11-18 10:37:13 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:37:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:37:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:37:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:37:13 --> index method Login
DEBUG - 2019-11-18 10:37:13 --> checking request type form or redirect
DEBUG - 2019-11-18 10:37:13 --> form post method
DEBUG - 2019-11-18 10:37:13 --> loading model Admin_Login_Model
DEBUG - 2019-11-18 10:37:13 --> calling validatelogin()
DEBUG - 2019-11-18 10:37:13 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-18 10:37:14 --> Accounts details =1
DEBUG - 2019-11-18 10:37:14 --> account id found
DEBUG - 2019-11-18 10:37:14 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-18 10:37:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:37:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:37:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:37:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:37:14 --> calling constructor page Dashboard
DEBUG - 2019-11-18 10:37:14 --> validating session page Dashboard
DEBUG - 2019-11-18 10:37:14 --> index page Dashboard
DEBUG - 2019-11-18 10:37:14 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-18 10:37:14 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 10:37:14 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-18 10:37:14 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 10:37:14 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-18 10:37:14 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 10:37:14 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-18 10:37:14 --> finding total numbers of active users...
DEBUG - 2019-11-18 10:37:14 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-18 10:37:14 --> finding total numbers of duplicate users...
DEBUG - 2019-11-18 10:37:14 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-18 10:37:14 --> loading Configarable_Login model...
DEBUG - 2019-11-18 10:37:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 10:37:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 10:37:14 --> Array
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

DEBUG - 2019-11-18 10:37:14 --> calling view admin/dashboard
DEBUG - 2019-11-18 10:37:14 --> Total execution time: 0.1020
DEBUG - 2019-11-18 10:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:37:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:37:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:37:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:37:21 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 10:37:21 --> validating session page Manage_Users
DEBUG - 2019-11-18 10:37:21 --> index page Manage_Users
DEBUG - 2019-11-18 10:37:21 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 10:37:21 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 10:37:21 --> calling getusersdetails()
DEBUG - 2019-11-18 10:37:21 --> loading Configarable_Login model...
DEBUG - 2019-11-18 10:37:21 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 10:37:21 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 10:37:21 --> Array
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

DEBUG - 2019-11-18 10:37:21 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 10:37:21 --> calling view admin/manage_users
DEBUG - 2019-11-18 10:37:21 --> Total execution time: 0.0640
DEBUG - 2019-11-18 10:37:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:37:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:37:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:37:25 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 10:37:25 --> validating session page Manage_Users
DEBUG - 2019-11-18 10:37:25 --> loading Configarable_Login model...
DEBUG - 2019-11-18 10:37:25 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 10:37:25 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 10:37:25 --> Array
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

DEBUG - 2019-11-18 10:37:25 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 10:37:25 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 10:37:25 --> calling getuserdetail()
DEBUG - 2019-11-18 10:37:25 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 10:37:25 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 10:37:25 --> Total execution time: 0.0550
DEBUG - 2019-11-18 10:55:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:55:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:55:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:55:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:55:10 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 10:55:10 --> validating session page Manage_Users
DEBUG - 2019-11-18 10:55:10 --> Total execution time: 0.1260
DEBUG - 2019-11-18 10:55:39 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:55:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-18 10:55:39 --> 404 Page Not Found: Upload-image/index
DEBUG - 2019-11-18 10:55:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:55:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:55:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:55:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:55:45 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 10:55:45 --> validating session page Manage_Users
DEBUG - 2019-11-18 10:55:45 --> loading Configarable_Login model...
DEBUG - 2019-11-18 10:55:45 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 10:55:45 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 10:55:45 --> Array
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

DEBUG - 2019-11-18 10:55:45 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 10:55:45 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 10:55:45 --> calling getuserdetail()
DEBUG - 2019-11-18 10:55:45 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 10:55:45 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 10:55:45 --> Total execution time: 0.1030
DEBUG - 2019-11-18 10:56:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:56:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:56:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:56:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:56:07 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 10:56:07 --> validating session page Manage_Users
DEBUG - 2019-11-18 10:56:07 --> index page Manage_Users
DEBUG - 2019-11-18 10:56:07 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 10:56:07 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 10:56:07 --> calling getusersdetails()
DEBUG - 2019-11-18 10:56:07 --> loading Configarable_Login model...
DEBUG - 2019-11-18 10:56:07 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 10:56:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 10:56:07 --> Array
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

DEBUG - 2019-11-18 10:56:07 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 10:56:07 --> calling view admin/manage_users
DEBUG - 2019-11-18 10:56:07 --> Total execution time: 0.0640
DEBUG - 2019-11-18 10:56:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:56:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:56:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:56:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:56:40 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 10:56:40 --> validating session page Manage_Users
DEBUG - 2019-11-18 10:56:40 --> index page Manage_Users
DEBUG - 2019-11-18 10:56:40 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 10:56:40 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 10:56:40 --> calling getusersdetails()
DEBUG - 2019-11-18 10:56:40 --> loading Configarable_Login model...
DEBUG - 2019-11-18 10:56:40 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 10:56:40 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 10:56:40 --> Array
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

DEBUG - 2019-11-18 10:56:40 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 10:56:40 --> calling view admin/manage_users
DEBUG - 2019-11-18 10:56:40 --> Total execution time: 0.0610
DEBUG - 2019-11-18 10:56:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 10:56:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 10:56:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 10:56:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 10:56:41 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 10:56:41 --> validating session page Manage_Users
DEBUG - 2019-11-18 10:56:41 --> index page Manage_Users
DEBUG - 2019-11-18 10:56:41 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 10:56:41 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 10:56:41 --> calling getusersdetails()
DEBUG - 2019-11-18 10:56:41 --> loading Configarable_Login model...
DEBUG - 2019-11-18 10:56:41 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 10:56:41 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 10:56:41 --> Array
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

DEBUG - 2019-11-18 10:56:41 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 10:56:41 --> calling view admin/manage_users
DEBUG - 2019-11-18 10:56:41 --> Total execution time: 0.0700
DEBUG - 2019-11-18 11:44:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:44:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:44:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:44:58 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:44:58 --> validating session page Manage_Users
DEBUG - 2019-11-18 11:44:58 --> index page Manage_Users
DEBUG - 2019-11-18 11:44:58 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 11:44:58 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 11:44:58 --> calling getusersdetails()
DEBUG - 2019-11-18 11:44:58 --> loading Configarable_Login model...
DEBUG - 2019-11-18 11:44:58 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 11:44:58 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 11:44:58 --> Array
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

DEBUG - 2019-11-18 11:44:58 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 11:44:58 --> calling view admin/manage_users
DEBUG - 2019-11-18 11:44:58 --> Total execution time: 0.0710
DEBUG - 2019-11-18 11:44:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:44:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:44:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:44:58 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:44:58 --> validating session page Manage_Users
DEBUG - 2019-11-18 11:44:58 --> index page Manage_Users
DEBUG - 2019-11-18 11:44:58 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 11:44:58 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 11:44:58 --> calling getusersdetails()
DEBUG - 2019-11-18 11:44:58 --> loading Configarable_Login model...
DEBUG - 2019-11-18 11:44:58 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 11:44:58 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 11:44:58 --> Array
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

DEBUG - 2019-11-18 11:44:58 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 11:44:58 --> calling view admin/manage_users
DEBUG - 2019-11-18 11:44:58 --> Total execution time: 0.0660
DEBUG - 2019-11-18 11:44:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:44:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:44:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:44:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:44:59 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:44:59 --> validating session page Manage_Users
DEBUG - 2019-11-18 11:44:59 --> index page Manage_Users
DEBUG - 2019-11-18 11:44:59 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 11:44:59 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 11:44:59 --> calling getusersdetails()
DEBUG - 2019-11-18 11:44:59 --> loading Configarable_Login model...
DEBUG - 2019-11-18 11:44:59 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 11:44:59 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 11:44:59 --> Array
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

DEBUG - 2019-11-18 11:44:59 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 11:44:59 --> calling view admin/manage_users
DEBUG - 2019-11-18 11:44:59 --> Total execution time: 0.0720
DEBUG - 2019-11-18 11:45:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:45:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:45:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:45:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:45:00 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:45:00 --> validating session page Manage_Users
DEBUG - 2019-11-18 11:45:00 --> index page Manage_Users
DEBUG - 2019-11-18 11:45:00 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 11:45:00 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 11:45:00 --> calling getusersdetails()
DEBUG - 2019-11-18 11:45:00 --> loading Configarable_Login model...
DEBUG - 2019-11-18 11:45:00 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 11:45:00 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 11:45:00 --> Array
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

DEBUG - 2019-11-18 11:45:00 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 11:45:00 --> calling view admin/manage_users
DEBUG - 2019-11-18 11:45:00 --> Total execution time: 0.0630
DEBUG - 2019-11-18 11:45:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:45:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:45:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:45:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:45:03 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:45:03 --> validating session page Manage_Users
DEBUG - 2019-11-18 11:45:03 --> index page Manage_Users
DEBUG - 2019-11-18 11:45:03 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 11:45:03 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 11:45:03 --> calling getusersdetails()
DEBUG - 2019-11-18 11:45:03 --> loading Configarable_Login model...
DEBUG - 2019-11-18 11:45:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 11:45:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 11:45:03 --> Array
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

DEBUG - 2019-11-18 11:45:03 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 11:45:03 --> calling view admin/manage_users
DEBUG - 2019-11-18 11:45:03 --> Total execution time: 0.0630
DEBUG - 2019-11-18 11:45:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:45:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:45:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:45:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:45:09 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:45:09 --> validating session page Manage_Users
DEBUG - 2019-11-18 11:45:09 --> loading Configarable_Login model...
DEBUG - 2019-11-18 11:45:09 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 11:45:09 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 11:45:09 --> Array
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

DEBUG - 2019-11-18 11:45:09 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 11:45:09 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 11:45:09 --> calling getuserdetail()
DEBUG - 2019-11-18 11:45:09 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 11:45:09 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 11:45:09 --> Total execution time: 0.0570
DEBUG - 2019-11-18 11:45:20 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:45:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:45:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:45:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:45:20 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:45:20 --> validating session page Manage_Users
ERROR - 2019-11-18 11:45:20 --> Severity: Notice --> Undefined index: file C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 75
ERROR - 2019-11-18 11:45:20 --> Severity: Notice --> Undefined index: file C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 88
DEBUG - 2019-11-18 11:45:20 --> Total execution time: 0.0730
DEBUG - 2019-11-18 11:47:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:47:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:47:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:47:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:47:52 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:47:52 --> validating session page Manage_Users
DEBUG - 2019-11-18 11:47:52 --> loading Configarable_Login model...
DEBUG - 2019-11-18 11:47:52 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 11:47:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 11:47:52 --> Array
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

DEBUG - 2019-11-18 11:47:52 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 11:47:52 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 11:47:52 --> calling getuserdetail()
DEBUG - 2019-11-18 11:47:52 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 11:47:52 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 11:47:52 --> Total execution time: 0.0680
DEBUG - 2019-11-18 11:56:01 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:56:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:56:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:56:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:56:01 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:56:01 --> validating session page Manage_Users
DEBUG - 2019-11-18 11:56:01 --> loading Configarable_Login model...
DEBUG - 2019-11-18 11:56:01 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 11:56:01 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 11:56:01 --> Array
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

DEBUG - 2019-11-18 11:56:01 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 11:56:01 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 11:56:01 --> calling getuserdetail()
DEBUG - 2019-11-18 11:56:01 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 11:56:01 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 11:56:01 --> Total execution time: 0.0620
DEBUG - 2019-11-18 11:56:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:56:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:56:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:56:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:56:14 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:56:14 --> validating session page Manage_Users
DEBUG - 2019-11-18 11:56:14 --> You did not select a file to upload.
DEBUG - 2019-11-18 11:56:14 --> loading Configarable_Login model...
DEBUG - 2019-11-18 11:56:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 11:56:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 11:56:14 --> Array
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

DEBUG - 2019-11-18 11:56:14 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 11:56:14 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 11:56:14 --> calling getuserdetail()
DEBUG - 2019-11-18 11:56:14 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 11:56:14 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 11:56:14 --> Total execution time: 0.0720
DEBUG - 2019-11-18 11:56:26 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 11:56:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 11:56:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 11:56:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 11:56:26 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 11:56:26 --> validating session page Manage_Users
DEBUG - 2019-11-18 11:56:26 --> You did not select a file to upload.
DEBUG - 2019-11-18 11:56:26 --> loading Configarable_Login model...
DEBUG - 2019-11-18 11:56:26 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 11:56:26 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 11:56:26 --> Array
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

DEBUG - 2019-11-18 11:56:26 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 11:56:26 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 11:56:26 --> calling getuserdetail()
DEBUG - 2019-11-18 11:56:26 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 11:56:26 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 11:56:26 --> Total execution time: 0.0620
DEBUG - 2019-11-18 12:05:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:05:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:05:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:05:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:05:54 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:05:54 --> validating session page Manage_Users
ERROR - 2019-11-18 12:05:54 --> Severity: Notice --> Undefined index: image C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 74
ERROR - 2019-11-18 12:05:54 --> Severity: Notice --> Undefined index: file C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 90
ERROR - 2019-11-18 12:05:54 --> Severity: Notice --> Undefined variable: newfilename C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 90
DEBUG - 2019-11-18 12:05:54 --> Total execution time: 0.1020
DEBUG - 2019-11-18 12:16:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:16:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-18 12:16:59 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 96
DEBUG - 2019-11-18 12:17:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:17:05 --> No URI present. Default controller set.
DEBUG - 2019-11-18 12:17:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:17:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:17:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:17:05 --> Total execution time: 0.0760
DEBUG - 2019-11-18 12:17:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:17:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:17:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:17:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:17:07 --> index method Login
DEBUG - 2019-11-18 12:17:07 --> checking request type form or redirect
DEBUG - 2019-11-18 12:17:07 --> admin login view loaded...
DEBUG - 2019-11-18 12:17:07 --> Total execution time: 0.0600
DEBUG - 2019-11-18 12:17:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:17:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:17:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:17:14 --> index method Login
DEBUG - 2019-11-18 12:17:14 --> checking request type form or redirect
DEBUG - 2019-11-18 12:17:14 --> form post method
DEBUG - 2019-11-18 12:17:14 --> loading model Admin_Login_Model
DEBUG - 2019-11-18 12:17:14 --> calling validatelogin()
DEBUG - 2019-11-18 12:17:14 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-18 12:17:14 --> Accounts details =1
DEBUG - 2019-11-18 12:17:14 --> account id found
DEBUG - 2019-11-18 12:17:14 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-18 12:17:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:17:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:17:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:17:14 --> calling constructor page Dashboard
DEBUG - 2019-11-18 12:17:14 --> validating session page Dashboard
DEBUG - 2019-11-18 12:17:14 --> index page Dashboard
DEBUG - 2019-11-18 12:17:14 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-18 12:17:14 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 12:17:14 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-18 12:17:14 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 12:17:14 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-18 12:17:14 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 12:17:14 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-18 12:17:14 --> finding total numbers of active users...
DEBUG - 2019-11-18 12:17:14 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-18 12:17:14 --> finding total numbers of duplicate users...
DEBUG - 2019-11-18 12:17:14 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-18 12:17:14 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:17:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:17:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:17:14 --> Array
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

DEBUG - 2019-11-18 12:17:14 --> calling view admin/dashboard
DEBUG - 2019-11-18 12:17:14 --> Total execution time: 0.0650
DEBUG - 2019-11-18 12:17:17 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:17:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-18 12:17:17 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 96
DEBUG - 2019-11-18 12:18:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:18:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:18:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:18:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:18:07 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:18:07 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:18:07 --> index page Manage_Users
DEBUG - 2019-11-18 12:18:07 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 12:18:07 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:18:07 --> calling getusersdetails()
DEBUG - 2019-11-18 12:18:07 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:18:07 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:18:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:18:07 --> Array
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

DEBUG - 2019-11-18 12:18:07 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:18:07 --> calling view admin/manage_users
DEBUG - 2019-11-18 12:18:07 --> Total execution time: 0.0650
DEBUG - 2019-11-18 12:18:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:18:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:18:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:18:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:18:10 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:18:10 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:18:10 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:18:10 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:18:10 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:18:10 --> Array
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

DEBUG - 2019-11-18 12:18:10 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:18:10 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:18:10 --> calling getuserdetail()
DEBUG - 2019-11-18 12:18:10 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:18:10 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:18:10 --> Total execution time: 0.0640
DEBUG - 2019-11-18 12:18:17 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:18:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:18:18 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:18:18 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:18:18 --> Total execution time: 0.0540
DEBUG - 2019-11-18 12:19:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:19:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:19:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:19:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:19:45 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:19:45 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:19:45 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:19:45 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:19:45 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:19:45 --> Array
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

DEBUG - 2019-11-18 12:19:45 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:19:45 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:19:45 --> calling getuserdetail()
DEBUG - 2019-11-18 12:19:45 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:19:45 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:19:45 --> Total execution time: 0.0620
DEBUG - 2019-11-18 12:19:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:19:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:19:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:19:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:19:47 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:19:47 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:19:47 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:19:47 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:19:47 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:19:47 --> Array
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

DEBUG - 2019-11-18 12:19:47 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:19:47 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:19:47 --> calling getuserdetail()
DEBUG - 2019-11-18 12:19:47 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:19:47 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:19:47 --> Total execution time: 0.0600
DEBUG - 2019-11-18 12:19:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:19:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:19:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:19:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:19:53 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:19:53 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:19:53 --> Total execution time: 0.0690
DEBUG - 2019-11-18 12:20:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:20:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:20:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:20:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:20:05 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:20:05 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:20:05 --> index page Manage_Users
DEBUG - 2019-11-18 12:20:05 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 12:20:05 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:20:05 --> calling getusersdetails()
DEBUG - 2019-11-18 12:20:05 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:20:05 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:20:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:20:05 --> Array
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

DEBUG - 2019-11-18 12:20:05 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:20:05 --> calling view admin/manage_users
DEBUG - 2019-11-18 12:20:05 --> Total execution time: 0.0580
DEBUG - 2019-11-18 12:32:17 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:32:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:32:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:32:17 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:32:17 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:32:17 --> index page Manage_Users
DEBUG - 2019-11-18 12:32:17 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 12:32:17 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:32:17 --> calling getusersdetails()
DEBUG - 2019-11-18 12:32:17 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:32:17 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:32:17 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:32:17 --> Array
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

DEBUG - 2019-11-18 12:32:17 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:32:17 --> calling view admin/manage_users
DEBUG - 2019-11-18 12:32:17 --> Total execution time: 0.0700
DEBUG - 2019-11-18 12:32:21 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:32:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:32:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:32:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:32:22 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:32:22 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:32:22 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:32:22 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:32:22 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:32:22 --> Array
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

DEBUG - 2019-11-18 12:32:22 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:32:22 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:32:22 --> calling getuserdetail()
DEBUG - 2019-11-18 12:32:22 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:32:22 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:32:22 --> Total execution time: 0.0550
DEBUG - 2019-11-18 12:32:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:32:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:32:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:32:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:32:28 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:32:28 --> validating session page Manage_Users
ERROR - 2019-11-18 12:32:28 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\views\admin\upload_result.php 12
DEBUG - 2019-11-18 12:32:28 --> Total execution time: 0.0750
DEBUG - 2019-11-18 12:35:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:35:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:35:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:35:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:35:52 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:35:52 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:35:52 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:35:52 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:35:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:35:52 --> Array
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

DEBUG - 2019-11-18 12:35:52 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:35:52 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:35:52 --> calling getuserdetail()
DEBUG - 2019-11-18 12:35:52 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:35:52 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:35:52 --> Total execution time: 0.0680
DEBUG - 2019-11-18 12:35:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:35:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:35:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:35:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:35:53 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:35:53 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:35:53 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:35:53 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:35:53 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:35:53 --> Array
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

DEBUG - 2019-11-18 12:35:53 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:35:53 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:35:53 --> calling getuserdetail()
DEBUG - 2019-11-18 12:35:53 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:35:53 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:35:53 --> Total execution time: 0.0610
DEBUG - 2019-11-18 12:35:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:35:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:35:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:35:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:35:54 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:35:54 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:35:54 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:35:54 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:35:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:35:54 --> Array
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

DEBUG - 2019-11-18 12:35:54 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:35:54 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:35:54 --> calling getuserdetail()
DEBUG - 2019-11-18 12:35:54 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:35:54 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:35:54 --> Total execution time: 0.0540
DEBUG - 2019-11-18 12:36:01 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:36:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:36:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:36:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:36:01 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:36:01 --> validating session page Manage_Users
ERROR - 2019-11-18 12:36:01 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 92
ERROR - 2019-11-18 12:36:01 --> Severity: Notice --> Undefined variable: image_metadata C:\xampp\htdocs\ciproject\application\views\admin\upload_result.php 17
DEBUG - 2019-11-18 12:36:01 --> Total execution time: 0.1120
DEBUG - 2019-11-18 12:36:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:36:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:36:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:36:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:36:41 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:36:41 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:36:41 --> Total execution time: 0.0770
DEBUG - 2019-11-18 12:39:36 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:39:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:39:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:39:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:39:36 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:39:36 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:39:36 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:39:36 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:39:36 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:39:36 --> Array
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

DEBUG - 2019-11-18 12:39:36 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:39:36 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:39:36 --> calling getuserdetail()
DEBUG - 2019-11-18 12:39:36 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:39:36 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:39:36 --> Total execution time: 0.0790
DEBUG - 2019-11-18 12:39:39 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:39:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:39:39 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:39:39 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:39:39 --> Total execution time: 0.0710
DEBUG - 2019-11-18 12:39:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:39:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:39:54 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:39:54 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:39:54 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:39:54 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:39:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:39:54 --> Array
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

DEBUG - 2019-11-18 12:39:54 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:39:54 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:39:54 --> calling getuserdetail()
DEBUG - 2019-11-18 12:39:54 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:39:54 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:39:54 --> Total execution time: 0.0740
DEBUG - 2019-11-18 12:39:55 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:39:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:39:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:39:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:39:55 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:39:55 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:39:55 --> Total execution time: 0.0760
DEBUG - 2019-11-18 12:43:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:43:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:43:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:43:03 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:43:03 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:43:03 --> Total execution time: 0.0950
DEBUG - 2019-11-18 12:43:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:43:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:43:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:43:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:43:33 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:43:33 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:43:33 --> Total execution time: 0.0780
DEBUG - 2019-11-18 12:47:51 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:47:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:47:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:47:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:47:51 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:47:51 --> validating session page Manage_Users
ERROR - 2019-11-18 12:47:51 --> Severity: Notice --> Undefined variable: pagelist C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
ERROR - 2019-11-18 12:47:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
DEBUG - 2019-11-18 12:47:51 --> Total execution time: 0.1040
DEBUG - 2019-11-18 12:51:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:51:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:51:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:51:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:51:11 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:51:11 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:51:11 --> Total execution time: 0.0680
DEBUG - 2019-11-18 12:53:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:53:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:53:04 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:53:04 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:53:04 --> Total execution time: 0.0820
DEBUG - 2019-11-18 12:53:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:53:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:53:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:53:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:53:06 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:53:06 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:53:06 --> index page Manage_Users
DEBUG - 2019-11-18 12:53:06 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 12:53:06 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:53:06 --> calling getusersdetails()
DEBUG - 2019-11-18 12:53:06 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:53:06 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:53:06 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:53:06 --> Array
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

DEBUG - 2019-11-18 12:53:06 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:53:06 --> calling view admin/manage_users
DEBUG - 2019-11-18 12:53:06 --> Total execution time: 0.0580
DEBUG - 2019-11-18 12:53:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:53:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:53:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:53:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:53:10 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:53:10 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:53:10 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:53:10 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:53:10 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:53:10 --> Array
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

DEBUG - 2019-11-18 12:53:10 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:53:10 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:53:10 --> calling getuserdetail()
DEBUG - 2019-11-18 12:53:10 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:53:10 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:53:10 --> Total execution time: 0.0660
DEBUG - 2019-11-18 12:53:31 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:53:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:53:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:53:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:53:31 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:53:31 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:53:31 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:53:31 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:53:31 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:53:31 --> Array
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

DEBUG - 2019-11-18 12:53:31 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:53:31 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:53:31 --> calling getuserdetail()
DEBUG - 2019-11-18 12:53:31 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:53:31 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:53:31 --> Total execution time: 0.0680
DEBUG - 2019-11-18 12:53:32 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:53:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:53:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:53:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:53:32 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:53:32 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:53:32 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:53:32 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:53:32 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:53:32 --> Array
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

DEBUG - 2019-11-18 12:53:32 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:53:32 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:53:32 --> calling getuserdetail()
DEBUG - 2019-11-18 12:53:32 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:53:32 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:53:32 --> Total execution time: 0.0640
DEBUG - 2019-11-18 12:53:32 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:53:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:53:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:53:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:53:32 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:53:32 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:53:32 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:53:32 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:53:32 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:53:32 --> Array
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

DEBUG - 2019-11-18 12:53:32 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:53:32 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 12:53:32 --> calling getuserdetail()
DEBUG - 2019-11-18 12:53:32 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:53:32 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 12:53:32 --> Total execution time: 0.0670
DEBUG - 2019-11-18 12:53:43 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:53:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:53:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:53:43 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:53:43 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:53:43 --> Total execution time: 0.0850
DEBUG - 2019-11-18 12:53:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:53:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:53:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:53:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:53:52 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:53:52 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:53:52 --> index page Manage_Users
DEBUG - 2019-11-18 12:53:52 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 12:53:52 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:53:52 --> calling getusersdetails()
DEBUG - 2019-11-18 12:53:52 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:53:52 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:53:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:53:52 --> Array
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

DEBUG - 2019-11-18 12:53:52 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:53:52 --> calling view admin/manage_users
DEBUG - 2019-11-18 12:53:52 --> Total execution time: 0.0580
DEBUG - 2019-11-18 12:53:55 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:53:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:53:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:53:55 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 12:53:55 --> validating session page Manage_Users
DEBUG - 2019-11-18 12:53:55 --> index page Manage_Users
DEBUG - 2019-11-18 12:53:55 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 12:53:55 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 12:53:55 --> calling getusersdetails()
DEBUG - 2019-11-18 12:53:55 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:53:55 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:53:55 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:53:55 --> Array
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

DEBUG - 2019-11-18 12:53:55 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 12:53:55 --> calling view admin/manage_users
DEBUG - 2019-11-18 12:53:55 --> Total execution time: 0.0580
DEBUG - 2019-11-18 12:53:56 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:53:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:53:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:53:56 --> calling constructor page Dashboard
DEBUG - 2019-11-18 12:53:56 --> validating session page Dashboard
DEBUG - 2019-11-18 12:53:56 --> index page Dashboard
DEBUG - 2019-11-18 12:53:56 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-18 12:53:56 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 12:53:56 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-18 12:53:56 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 12:53:56 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-18 12:53:56 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 12:53:56 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-18 12:53:56 --> finding total numbers of active users...
DEBUG - 2019-11-18 12:53:56 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-18 12:53:56 --> finding total numbers of duplicate users...
DEBUG - 2019-11-18 12:53:56 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-18 12:53:56 --> loading Configarable_Login model...
DEBUG - 2019-11-18 12:53:56 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 12:53:56 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 12:53:56 --> Array
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

DEBUG - 2019-11-18 12:53:56 --> calling view admin/dashboard
DEBUG - 2019-11-18 12:53:56 --> Total execution time: 0.0580
DEBUG - 2019-11-18 12:54:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:54:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:54:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:54:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:54:18 --> logout() called form login controller.... loading admin/login
DEBUG - 2019-11-18 12:54:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:54:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:54:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:54:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:54:18 --> index method Login
DEBUG - 2019-11-18 12:54:18 --> checking request type form or redirect
DEBUG - 2019-11-18 12:54:18 --> admin login view loaded...
DEBUG - 2019-11-18 12:54:18 --> Total execution time: 0.0570
DEBUG - 2019-11-18 12:55:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:55:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:55:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:55:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:55:10 --> index method Login
DEBUG - 2019-11-18 12:55:10 --> checking request type form or redirect
DEBUG - 2019-11-18 12:55:10 --> admin login view loaded...
DEBUG - 2019-11-18 12:55:10 --> Total execution time: 0.0650
DEBUG - 2019-11-18 12:55:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 12:55:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 12:55:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 12:55:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 12:55:11 --> index method Login
DEBUG - 2019-11-18 12:55:11 --> checking request type form or redirect
DEBUG - 2019-11-18 12:55:11 --> admin login view loaded...
DEBUG - 2019-11-18 12:55:11 --> Total execution time: 0.0540
DEBUG - 2019-11-18 13:23:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:23:45 --> No URI present. Default controller set.
DEBUG - 2019-11-18 13:23:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:23:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:23:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:23:45 --> Total execution time: 0.0890
DEBUG - 2019-11-18 13:23:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:23:47 --> No URI present. Default controller set.
DEBUG - 2019-11-18 13:23:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:23:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:23:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:23:47 --> Total execution time: 0.0840
DEBUG - 2019-11-18 13:23:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:23:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:23:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:23:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:23:49 --> index method Login
DEBUG - 2019-11-18 13:23:49 --> checking request type form or redirect
DEBUG - 2019-11-18 13:23:49 --> admin login view loaded...
DEBUG - 2019-11-18 13:23:49 --> Total execution time: 0.0510
DEBUG - 2019-11-18 13:23:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:23:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:23:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:23:57 --> index method Login
DEBUG - 2019-11-18 13:23:57 --> checking request type form or redirect
DEBUG - 2019-11-18 13:23:57 --> form post method
DEBUG - 2019-11-18 13:23:57 --> loading model Admin_Login_Model
DEBUG - 2019-11-18 13:23:57 --> calling validatelogin()
DEBUG - 2019-11-18 13:23:57 --> validatelogin() got called form Admin_Login_Model
ERROR - 2019-11-18 13:23:57 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\ciproject\application\models\Admin_Login_Model.php 11
DEBUG - 2019-11-18 13:23:57 --> Accounts details =
DEBUG - 2019-11-18 13:23:57 --> account id is NULL
DEBUG - 2019-11-18 13:23:57 --> invalidate login.... loading admin/login
DEBUG - 2019-11-18 13:23:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:23:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:23:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:23:57 --> index method Login
DEBUG - 2019-11-18 13:23:57 --> checking request type form or redirect
DEBUG - 2019-11-18 13:23:57 --> admin login view loaded...
DEBUG - 2019-11-18 13:23:57 --> Total execution time: 0.0520
DEBUG - 2019-11-18 13:24:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:24:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:24:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:24:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:24:06 --> index method Login
DEBUG - 2019-11-18 13:24:06 --> checking request type form or redirect
DEBUG - 2019-11-18 13:24:06 --> form post method
DEBUG - 2019-11-18 13:24:06 --> loading model Admin_Login_Model
DEBUG - 2019-11-18 13:24:06 --> calling validatelogin()
DEBUG - 2019-11-18 13:24:06 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-18 13:24:06 --> Accounts details =1
DEBUG - 2019-11-18 13:24:06 --> account id found
DEBUG - 2019-11-18 13:24:06 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-18 13:24:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:24:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:24:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:24:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:24:06 --> calling constructor page Dashboard
DEBUG - 2019-11-18 13:24:06 --> validating session page Dashboard
DEBUG - 2019-11-18 13:24:06 --> index page Dashboard
DEBUG - 2019-11-18 13:24:06 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-18 13:24:06 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 13:24:06 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-18 13:24:06 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 13:24:06 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-18 13:24:06 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 13:24:06 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-18 13:24:06 --> finding total numbers of active users...
DEBUG - 2019-11-18 13:24:06 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-18 13:24:06 --> finding total numbers of duplicate users...
DEBUG - 2019-11-18 13:24:06 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-18 13:24:06 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:24:06 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:24:06 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:24:06 --> Array
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

DEBUG - 2019-11-18 13:24:06 --> calling view admin/dashboard
DEBUG - 2019-11-18 13:24:06 --> Total execution time: 0.0640
DEBUG - 2019-11-18 13:24:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:24:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-18 13:24:09 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 80
DEBUG - 2019-11-18 13:24:31 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:24:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:24:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:24:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:24:31 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:24:31 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:24:31 --> index page Manage_Users
DEBUG - 2019-11-18 13:24:31 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:24:31 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:24:31 --> calling getusersdetails()
DEBUG - 2019-11-18 13:24:31 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:24:31 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:24:31 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:24:31 --> Array
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

DEBUG - 2019-11-18 13:24:31 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:24:31 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:24:31 --> Total execution time: 0.0630
DEBUG - 2019-11-18 13:24:44 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:24:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:24:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:24:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:24:44 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:24:44 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:24:44 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:24:44 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:24:44 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:24:44 --> Array
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

DEBUG - 2019-11-18 13:24:44 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:24:44 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:24:44 --> calling getuserdetail()
DEBUG - 2019-11-18 13:24:44 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:24:44 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:24:44 --> Total execution time: 0.0710
DEBUG - 2019-11-18 13:24:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:24:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:24:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:24:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:24:54 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:24:54 --> validating session page Manage_Users
ERROR - 2019-11-18 13:24:54 --> Severity: Notice --> Undefined property: Manage_Users::$ManageUsers_Model C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 96
ERROR - 2019-11-18 13:24:54 --> Severity: error --> Exception: Call to a member function store_image_name() on null C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 96
DEBUG - 2019-11-18 13:26:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:26:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:26:16 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:26:16 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:26:16 --> store_image_name() got called form ManageUsers_Model
ERROR - 2019-11-18 13:26:16 --> Severity: Notice --> Undefined variable: user C:\xampp\htdocs\ciproject\application\models\ManageUsers_Model.php 31
ERROR - 2019-11-18 13:26:16 --> Severity: Notice --> Undefined variable: tid C:\xampp\htdocs\ciproject\application\models\ManageUsers_Model.php 32
ERROR - 2019-11-18 13:26:17 --> Severity: Warning --> Use of undefined constant sql_query - assumed 'sql_query' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\ciproject\application\models\ManageUsers_Model.php 37
DEBUG - 2019-11-18 13:26:17 --> insert success
DEBUG - 2019-11-18 13:26:17 --> Total execution time: 0.1800
DEBUG - 2019-11-18 13:27:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:27:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:27:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:27:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:27:30 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:27:30 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:27:30 --> store_image_name() got called form ManageUsers_Model
ERROR - 2019-11-18 13:27:30 --> Severity: Warning --> Use of undefined constant sql_query - assumed 'sql_query' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\ciproject\application\models\ManageUsers_Model.php 37
DEBUG - 2019-11-18 13:27:30 --> insert success
DEBUG - 2019-11-18 13:27:30 --> Total execution time: 0.2790
DEBUG - 2019-11-18 13:28:26 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:28:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:28:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:28:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:28:26 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:28:26 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:28:26 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:28:26 --> insert success
DEBUG - 2019-11-18 13:28:26 --> Total execution time: 0.1500
DEBUG - 2019-11-18 13:29:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:29:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:29:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:29:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:29:45 --> calling constructor page Dashboard
DEBUG - 2019-11-18 13:29:45 --> validating session page Dashboard
DEBUG - 2019-11-18 13:29:45 --> index page Dashboard
DEBUG - 2019-11-18 13:29:45 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-18 13:29:45 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 13:29:45 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-18 13:29:45 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 13:29:45 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-18 13:29:45 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 13:29:45 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-18 13:29:45 --> finding total numbers of active users...
DEBUG - 2019-11-18 13:29:45 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-18 13:29:45 --> finding total numbers of duplicate users...
DEBUG - 2019-11-18 13:29:45 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-18 13:29:45 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:29:45 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:29:45 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:29:45 --> Array
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

DEBUG - 2019-11-18 13:29:45 --> calling view admin/dashboard
DEBUG - 2019-11-18 13:29:45 --> Total execution time: 0.0740
DEBUG - 2019-11-18 13:29:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:29:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:29:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:29:47 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:29:47 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:29:47 --> index page Manage_Users
DEBUG - 2019-11-18 13:29:47 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:29:47 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:29:47 --> calling getusersdetails()
DEBUG - 2019-11-18 13:29:47 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:29:47 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:29:47 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:29:47 --> Array
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

DEBUG - 2019-11-18 13:29:47 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:29:47 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:29:47 --> Total execution time: 0.0580
DEBUG - 2019-11-18 13:29:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:29:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:29:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:29:49 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:29:49 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:29:49 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:29:49 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:29:49 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:29:49 --> Array
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

DEBUG - 2019-11-18 13:29:49 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:29:49 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:29:49 --> calling getuserdetail()
DEBUG - 2019-11-18 13:29:49 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:29:49 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:29:49 --> Total execution time: 0.0640
DEBUG - 2019-11-18 13:29:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:29:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:29:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:29:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:29:58 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:29:58 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:29:58 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:29:58 --> insert success
DEBUG - 2019-11-18 13:29:58 --> Total execution time: 0.1410
DEBUG - 2019-11-18 13:30:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:30:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:30:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:30:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:30:25 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:30:25 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:30:25 --> index page Manage_Users
DEBUG - 2019-11-18 13:30:25 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:30:25 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:30:25 --> calling getusersdetails()
DEBUG - 2019-11-18 13:30:25 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:30:25 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:30:25 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:30:25 --> Array
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

DEBUG - 2019-11-18 13:30:25 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:30:25 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:30:25 --> Total execution time: 0.0590
DEBUG - 2019-11-18 13:30:29 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:30:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:30:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:30:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:30:29 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:30:29 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:30:29 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:30:29 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:30:29 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:30:29 --> Array
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

DEBUG - 2019-11-18 13:30:29 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:30:29 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:30:29 --> calling getuserdetail()
DEBUG - 2019-11-18 13:30:29 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:30:29 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:30:29 --> Total execution time: 0.0610
DEBUG - 2019-11-18 13:30:36 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:30:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:30:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:30:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:30:36 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:30:36 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:30:36 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:30:36 --> insert success
DEBUG - 2019-11-18 13:30:36 --> Total execution time: 0.1260
DEBUG - 2019-11-18 13:31:01 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:31:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:31:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:31:01 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:31:01 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:31:01 --> index page Manage_Users
DEBUG - 2019-11-18 13:31:01 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:31:01 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:31:01 --> calling getusersdetails()
DEBUG - 2019-11-18 13:31:01 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:31:01 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:31:01 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:31:01 --> Array
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

DEBUG - 2019-11-18 13:31:01 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:31:01 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:31:01 --> Total execution time: 0.0710
DEBUG - 2019-11-18 13:31:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:31:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:31:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:31:14 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:31:14 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:31:14 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:31:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:31:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:31:14 --> Array
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

DEBUG - 2019-11-18 13:31:14 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:31:14 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:31:14 --> calling getuserdetail()
DEBUG - 2019-11-18 13:31:14 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:31:14 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:31:14 --> Total execution time: 0.0600
DEBUG - 2019-11-18 13:31:20 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:31:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:31:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:31:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:31:20 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:31:20 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:31:20 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:31:20 --> insert success
DEBUG - 2019-11-18 13:31:20 --> Total execution time: 0.1700
DEBUG - 2019-11-18 13:31:22 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:31:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:31:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:31:22 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:31:22 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:31:22 --> index page Manage_Users
DEBUG - 2019-11-18 13:31:22 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:31:22 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:31:22 --> calling getusersdetails()
DEBUG - 2019-11-18 13:31:22 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:31:22 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:31:22 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:31:22 --> Array
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

DEBUG - 2019-11-18 13:31:22 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:31:22 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:31:22 --> Total execution time: 0.0810
DEBUG - 2019-11-18 13:31:43 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:31:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:31:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:31:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:31:43 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:31:43 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:31:43 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:31:43 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:31:43 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:31:43 --> Array
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

DEBUG - 2019-11-18 13:31:43 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:31:43 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:31:43 --> calling getuserdetail()
DEBUG - 2019-11-18 13:31:43 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:31:43 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:31:43 --> Total execution time: 0.0680
DEBUG - 2019-11-18 13:31:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:31:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:31:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:31:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:31:49 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:31:49 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:31:49 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:31:49 --> insert success
DEBUG - 2019-11-18 13:31:49 --> Total execution time: 0.1550
DEBUG - 2019-11-18 13:31:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:31:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:31:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:31:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:31:58 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:31:58 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:31:58 --> index page Manage_Users
DEBUG - 2019-11-18 13:31:58 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:31:58 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:31:58 --> calling getusersdetails()
DEBUG - 2019-11-18 13:31:58 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:31:58 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:31:58 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:31:58 --> Array
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

DEBUG - 2019-11-18 13:31:58 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:31:58 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:31:58 --> Total execution time: 0.0570
DEBUG - 2019-11-18 13:32:01 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:32:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:32:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:32:01 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:32:01 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:32:01 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:32:01 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:32:01 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:32:01 --> Array
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

DEBUG - 2019-11-18 13:32:01 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:32:01 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:32:01 --> calling getuserdetail()
DEBUG - 2019-11-18 13:32:01 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:32:01 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:32:01 --> Total execution time: 0.0640
DEBUG - 2019-11-18 13:32:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:32:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:32:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:32:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:32:07 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:32:07 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:32:07 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:32:07 --> insert success
DEBUG - 2019-11-18 13:32:07 --> Total execution time: 0.1270
DEBUG - 2019-11-18 13:32:20 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:32:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:32:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:32:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:32:20 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:32:20 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:32:20 --> index page Manage_Users
DEBUG - 2019-11-18 13:32:20 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:32:20 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:32:20 --> calling getusersdetails()
DEBUG - 2019-11-18 13:32:20 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:32:20 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:32:20 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:32:20 --> Array
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

DEBUG - 2019-11-18 13:32:20 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:32:20 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:32:20 --> Total execution time: 0.0710
DEBUG - 2019-11-18 13:33:44 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:33:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:33:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:33:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:33:44 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:33:44 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:33:44 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:33:44 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:33:44 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:33:44 --> Array
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

DEBUG - 2019-11-18 13:33:44 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:33:44 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:33:44 --> calling getuserdetail()
DEBUG - 2019-11-18 13:33:44 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:33:44 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:33:44 --> Total execution time: 0.0570
DEBUG - 2019-11-18 13:33:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:33:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:33:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:33:52 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:33:52 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:33:52 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:33:52 --> insert success
DEBUG - 2019-11-18 13:33:52 --> Total execution time: 0.1480
DEBUG - 2019-11-18 13:34:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:34:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:34:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:34:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:34:04 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:34:04 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:34:04 --> index page Manage_Users
DEBUG - 2019-11-18 13:34:04 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:34:04 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:34:04 --> calling getusersdetails()
DEBUG - 2019-11-18 13:34:04 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:34:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:34:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:34:04 --> Array
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

DEBUG - 2019-11-18 13:34:04 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:34:04 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:34:04 --> Total execution time: 0.0600
DEBUG - 2019-11-18 13:34:17 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:34:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:34:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:34:17 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:34:17 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:34:17 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:34:17 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:34:17 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:34:17 --> Array
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

DEBUG - 2019-11-18 13:34:17 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:34:17 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:34:17 --> calling getuserdetail()
DEBUG - 2019-11-18 13:34:17 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:34:17 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:34:17 --> Total execution time: 0.0730
DEBUG - 2019-11-18 13:34:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:34:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:34:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:34:25 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:34:25 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:34:25 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:34:25 --> insert success
DEBUG - 2019-11-18 13:34:25 --> Total execution time: 0.2240
DEBUG - 2019-11-18 13:34:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:34:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:34:28 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:34:28 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:34:28 --> index page Manage_Users
DEBUG - 2019-11-18 13:34:28 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:34:28 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:34:28 --> calling getusersdetails()
DEBUG - 2019-11-18 13:34:28 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:34:28 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:34:28 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:34:28 --> Array
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

DEBUG - 2019-11-18 13:34:28 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:34:28 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:34:28 --> Total execution time: 0.0730
DEBUG - 2019-11-18 13:34:56 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:34:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:34:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:34:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:34:56 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:34:56 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:34:56 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:34:56 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:34:56 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:34:56 --> Array
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

DEBUG - 2019-11-18 13:34:56 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:34:56 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:34:56 --> calling getuserdetail()
DEBUG - 2019-11-18 13:34:56 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:34:56 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:34:56 --> Total execution time: 0.0600
DEBUG - 2019-11-18 13:35:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:35:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:35:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:35:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:35:01 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:35:01 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:35:01 --> index page Manage_Users
DEBUG - 2019-11-18 13:35:01 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:35:01 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:35:01 --> calling getusersdetails()
DEBUG - 2019-11-18 13:35:01 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:35:01 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:35:01 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:35:01 --> Array
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

DEBUG - 2019-11-18 13:35:01 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:35:01 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:35:01 --> Total execution time: 0.0700
DEBUG - 2019-11-18 13:35:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:35:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:35:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:35:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:35:06 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:35:06 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:35:06 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:35:06 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:35:06 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:35:06 --> Array
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

DEBUG - 2019-11-18 13:35:06 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:35:06 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:35:06 --> calling getuserdetail()
DEBUG - 2019-11-18 13:35:06 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:35:06 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:35:06 --> Total execution time: 0.0600
DEBUG - 2019-11-18 13:35:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:35:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:35:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:35:09 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:35:09 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:35:09 --> index page Manage_Users
DEBUG - 2019-11-18 13:35:09 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:35:09 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:35:09 --> calling getusersdetails()
DEBUG - 2019-11-18 13:35:09 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:35:09 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:35:09 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:35:09 --> Array
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

DEBUG - 2019-11-18 13:35:09 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:35:09 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:35:09 --> Total execution time: 0.0680
DEBUG - 2019-11-18 13:35:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:35:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:35:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:35:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:35:11 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:35:11 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:35:11 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:35:11 --> deleteuser() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:35:11 --> calling deleteuser()
DEBUG - 2019-11-18 13:35:12 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:35:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:35:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:35:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:35:12 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:35:12 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:35:12 --> index page Manage_Users
DEBUG - 2019-11-18 13:35:12 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:35:12 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:35:12 --> calling getusersdetails()
DEBUG - 2019-11-18 13:35:12 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:35:12 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:35:12 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:35:12 --> Array
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

DEBUG - 2019-11-18 13:35:12 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:35:12 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:35:12 --> Total execution time: 0.0550
DEBUG - 2019-11-18 13:35:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:35:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:35:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:35:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:35:16 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:35:16 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:35:16 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:35:16 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:35:16 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:35:16 --> Array
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

DEBUG - 2019-11-18 13:35:16 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:35:16 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:35:16 --> calling getuserdetail()
DEBUG - 2019-11-18 13:35:16 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:35:16 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:35:16 --> Total execution time: 0.0560
DEBUG - 2019-11-18 13:35:22 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:35:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:35:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:35:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:35:22 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:35:22 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:35:22 --> index page Manage_Users
DEBUG - 2019-11-18 13:35:22 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:35:22 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:35:22 --> calling getusersdetails()
DEBUG - 2019-11-18 13:35:22 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:35:22 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:35:22 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:35:22 --> Array
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

DEBUG - 2019-11-18 13:35:22 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:35:22 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:35:22 --> Total execution time: 0.0640
DEBUG - 2019-11-18 13:35:36 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:35:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:35:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:35:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:35:36 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:35:36 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:35:36 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:35:36 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:35:36 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:35:36 --> Array
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

DEBUG - 2019-11-18 13:35:36 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:35:36 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:35:36 --> calling getuserdetail()
DEBUG - 2019-11-18 13:35:36 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:35:36 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:35:36 --> Total execution time: 0.0630
DEBUG - 2019-11-18 13:35:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:35:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:35:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:35:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:35:40 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:35:40 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:35:40 --> index page Manage_Users
DEBUG - 2019-11-18 13:35:40 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:35:40 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:35:40 --> calling getusersdetails()
DEBUG - 2019-11-18 13:35:40 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:35:40 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:35:40 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:35:40 --> Array
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

DEBUG - 2019-11-18 13:35:40 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:35:40 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:35:40 --> Total execution time: 0.0820
DEBUG - 2019-11-18 13:35:43 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:35:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:35:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:35:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:35:43 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:35:43 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:35:43 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:35:43 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:35:43 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:35:43 --> Array
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

DEBUG - 2019-11-18 13:35:43 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:35:43 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:35:43 --> calling getuserdetail()
DEBUG - 2019-11-18 13:35:43 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:35:43 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:35:43 --> Total execution time: 0.0560
DEBUG - 2019-11-18 13:36:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:36:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:36:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:36:03 --> calling constructor page Change_password
DEBUG - 2019-11-18 13:36:03 --> validating session page Change_password
DEBUG - 2019-11-18 13:36:03 --> updatebyadminprofile() got called..
DEBUG - 2019-11-18 13:36:03 --> loading modem User_Profile_Model
DEBUG - 2019-11-18 13:36:03 --> update_profile() got called form User_Profile_Model
DEBUG - 2019-11-18 13:36:03 --> update_profile got called successfully...
DEBUG - 2019-11-18 13:36:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:36:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:36:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:36:03 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:36:03 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:36:03 --> index page Manage_Users
DEBUG - 2019-11-18 13:36:03 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:36:03 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:36:03 --> calling getusersdetails()
DEBUG - 2019-11-18 13:36:03 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:36:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:36:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:36:03 --> Array
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

DEBUG - 2019-11-18 13:36:03 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:36:03 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:36:03 --> Total execution time: 0.0640
DEBUG - 2019-11-18 13:36:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:36:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:36:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:36:11 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:36:11 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:36:11 --> index page Manage_Users
DEBUG - 2019-11-18 13:36:11 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:36:11 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:36:11 --> calling getusersdetails()
DEBUG - 2019-11-18 13:36:11 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:36:11 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:36:11 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:36:11 --> Array
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

DEBUG - 2019-11-18 13:36:11 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:36:11 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:36:11 --> Total execution time: 0.0610
DEBUG - 2019-11-18 13:36:27 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:36:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:36:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:36:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:36:27 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:36:27 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:36:27 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:36:27 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:36:27 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:36:27 --> Array
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

DEBUG - 2019-11-18 13:36:27 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:36:27 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:36:27 --> calling getuserdetail()
DEBUG - 2019-11-18 13:36:27 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:36:27 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:36:27 --> Total execution time: 0.0740
DEBUG - 2019-11-18 13:36:46 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:36:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:36:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:36:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:36:47 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:36:47 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:36:47 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:36:47 --> insert success
DEBUG - 2019-11-18 13:36:47 --> Total execution time: 0.1580
DEBUG - 2019-11-18 13:36:56 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:36:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:36:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:36:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:36:56 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:36:56 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:36:56 --> index page Manage_Users
DEBUG - 2019-11-18 13:36:56 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:36:56 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:36:56 --> calling getusersdetails()
DEBUG - 2019-11-18 13:36:56 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:36:56 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:36:56 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:36:56 --> Array
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

DEBUG - 2019-11-18 13:36:56 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:36:56 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:36:56 --> Total execution time: 0.0620
DEBUG - 2019-11-18 13:37:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:37:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:37:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:37:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:37:03 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:37:03 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:37:03 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:37:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:37:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:37:03 --> Array
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

DEBUG - 2019-11-18 13:37:03 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:37:03 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:37:03 --> calling getuserdetail()
DEBUG - 2019-11-18 13:37:03 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:37:03 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:37:03 --> Total execution time: 0.0700
DEBUG - 2019-11-18 13:37:19 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:37:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:37:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:37:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:37:19 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:37:19 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:37:19 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:37:19 --> insert success
DEBUG - 2019-11-18 13:37:19 --> Total execution time: 0.1750
DEBUG - 2019-11-18 13:37:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:37:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:37:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:37:23 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:37:23 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:37:23 --> index page Manage_Users
DEBUG - 2019-11-18 13:37:23 --> loading model ManageUsers_Model
DEBUG - 2019-11-18 13:37:23 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:37:23 --> calling getusersdetails()
DEBUG - 2019-11-18 13:37:23 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:37:23 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:37:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:37:23 --> Array
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

DEBUG - 2019-11-18 13:37:23 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:37:23 --> calling view admin/manage_users
DEBUG - 2019-11-18 13:37:23 --> Total execution time: 0.0580
DEBUG - 2019-11-18 13:37:27 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:37:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:37:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:37:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:37:27 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:37:27 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:37:27 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:37:27 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:37:27 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:37:27 --> Array
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

DEBUG - 2019-11-18 13:37:27 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-18 13:37:27 --> loading ManageUsers_Model model...
DEBUG - 2019-11-18 13:37:27 --> calling getuserdetail()
DEBUG - 2019-11-18 13:37:27 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:37:27 --> calling view admin/getuserdetails
DEBUG - 2019-11-18 13:37:27 --> Total execution time: 0.0690
DEBUG - 2019-11-18 13:37:42 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:37:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:37:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:37:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:37:42 --> calling constructor page Manage_Users
DEBUG - 2019-11-18 13:37:42 --> validating session page Manage_Users
DEBUG - 2019-11-18 13:37:42 --> store_image_name() got called form ManageUsers_Model
DEBUG - 2019-11-18 13:37:42 --> insert success
DEBUG - 2019-11-18 13:37:42 --> Total execution time: 0.1360
DEBUG - 2019-11-18 13:37:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-18 13:37:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-18 13:37:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-18 13:37:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-18 13:37:47 --> calling constructor page Dashboard
DEBUG - 2019-11-18 13:37:47 --> validating session page Dashboard
DEBUG - 2019-11-18 13:37:47 --> index page Dashboard
DEBUG - 2019-11-18 13:37:47 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-18 13:37:47 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 13:37:47 --> Admin_Dashboard_Model totalcount=9
DEBUG - 2019-11-18 13:37:47 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 13:37:47 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-18 13:37:47 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-18 13:37:47 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-18 13:37:47 --> finding total numbers of active users...
DEBUG - 2019-11-18 13:37:47 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-18 13:37:47 --> finding total numbers of duplicate users...
DEBUG - 2019-11-18 13:37:47 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-18 13:37:47 --> loading Configarable_Login model...
DEBUG - 2019-11-18 13:37:47 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-18 13:37:47 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-18 13:37:47 --> Array
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

DEBUG - 2019-11-18 13:37:47 --> calling view admin/dashboard
DEBUG - 2019-11-18 13:37:47 --> Total execution time: 0.0660
