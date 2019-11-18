<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2019-11-14 06:12:37 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:12:37 --> No URI present. Default controller set.
DEBUG - 2019-11-14 06:12:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:12:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:12:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:12:37 --> Total execution time: 0.3320
DEBUG - 2019-11-14 06:12:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:12:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:12:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:12:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:12:40 --> index method Login
DEBUG - 2019-11-14 06:12:40 --> checking request type form or redirect
DEBUG - 2019-11-14 06:12:40 --> admin login view loaded...
DEBUG - 2019-11-14 06:12:40 --> Total execution time: 0.1240
DEBUG - 2019-11-14 06:12:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:12:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:12:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:12:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:12:50 --> index method Login
DEBUG - 2019-11-14 06:12:50 --> checking request type form or redirect
DEBUG - 2019-11-14 06:12:50 --> form post method
DEBUG - 2019-11-14 06:12:50 --> loading model Admin_Login_Model
DEBUG - 2019-11-14 06:12:50 --> calling validatelogin()
DEBUG - 2019-11-14 06:12:50 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-14 06:12:50 --> Accounts details =1
DEBUG - 2019-11-14 06:12:50 --> account id found
DEBUG - 2019-11-14 06:12:50 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-14 06:12:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:12:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:12:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:12:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:12:50 --> calling constructor page Dashboard
DEBUG - 2019-11-14 06:12:50 --> validating session page Dashboard
DEBUG - 2019-11-14 06:12:50 --> index page Dashboard
DEBUG - 2019-11-14 06:12:50 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-14 06:12:50 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:12:50 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-14 06:12:50 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:12:50 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-14 06:12:50 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:12:50 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-14 06:12:50 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:12:50 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 06:12:50 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:12:50 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:12:50 --> calling view admin/dashboard
DEBUG - 2019-11-14 06:12:50 --> Total execution time: 0.1280
DEBUG - 2019-11-14 06:12:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:12:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:12:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:12:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:12:59 --> calling constructor page Dashboard
DEBUG - 2019-11-14 06:12:59 --> validating session page Dashboard
DEBUG - 2019-11-14 06:12:59 --> index page Dashboard
DEBUG - 2019-11-14 06:12:59 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-14 06:12:59 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:12:59 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-14 06:12:59 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:12:59 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-14 06:12:59 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:12:59 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-14 06:12:59 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:12:59 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 06:12:59 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:12:59 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:12:59 --> calling view admin/dashboard
DEBUG - 2019-11-14 06:12:59 --> Total execution time: 0.0690
DEBUG - 2019-11-14 06:13:01 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:01 --> calling constructor page Manage_Users
DEBUG - 2019-11-14 06:13:01 --> validating session page Manage_Users
DEBUG - 2019-11-14 06:13:01 --> index page Manage_Users
DEBUG - 2019-11-14 06:13:01 --> loading model ManageUsers_Model
DEBUG - 2019-11-14 06:13:01 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-14 06:13:01 --> calling getusersdetails()
DEBUG - 2019-11-14 06:13:01 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:13:01 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 06:13:01 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:13:01 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:13:01 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:13:01 --> calling view admin/manage_users
DEBUG - 2019-11-14 06:13:01 --> Total execution time: 0.0800
DEBUG - 2019-11-14 06:13:02 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:02 --> Active user constructer called..
DEBUG - 2019-11-14 06:13:02 --> Active_Users index method called...
DEBUG - 2019-11-14 06:13:02 --> Active_Sessions Modem loaded..
DEBUG - 2019-11-14 06:13:02 --> calling get_user_active()
DEBUG - 2019-11-14 06:13:02 --> get_user_active() got called form Active_Session
DEBUG - 2019-11-14 06:13:02 --> number of rows get returned...
DEBUG - 2019-11-14 06:13:02 --> loading configurable model
DEBUG - 2019-11-14 06:13:02 --> calling configurable login for role admin
DEBUG - 2019-11-14 06:13:02 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:13:02 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:13:02 --> result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:13:02 --> calling admin/activeusers
DEBUG - 2019-11-14 06:13:02 --> Total execution time: 0.1280
DEBUG - 2019-11-14 06:13:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:03 --> calling constructor page Audit_Users
DEBUG - 2019-11-14 06:13:03 --> validating session page Audit_Users
DEBUG - 2019-11-14 06:13:03 --> index page Audit_Users
DEBUG - 2019-11-14 06:13:03 --> loading Audit_Trail model...
DEBUG - 2019-11-14 06:13:03 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-14 06:13:03 --> loading getAuditTrail()...
DEBUG - 2019-11-14 06:13:03 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:13:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 06:13:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:13:03 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:13:03 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:13:03 --> calling view admin/auditusers
DEBUG - 2019-11-14 06:13:03 --> Total execution time: 0.0900
DEBUG - 2019-11-14 06:13:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:04 --> Customer_model constructer got called..
DEBUG - 2019-11-14 06:13:04 --> Active_Sessions constructer got called..
DEBUG - 2019-11-14 06:13:04 --> index method active session controller
DEBUG - 2019-11-14 06:13:04 --> navigation to active session view
DEBUG - 2019-11-14 06:13:04 --> Total execution time: 0.0630
DEBUG - 2019-11-14 06:13:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:05 --> Customer_model constructer got called..
DEBUG - 2019-11-14 06:13:05 --> Active_Sessions constructer got called..
DEBUG - 2019-11-14 06:13:05 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-14 06:13:05 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:05 --> fetched data from get_datatables model
DEBUG - 2019-11-14 06:13:05 --> $_POST['start'] value = 0
DEBUG - 2019-11-14 06:13:05 --> ajax_list for loop started...
DEBUG - 2019-11-14 06:13:05 --> for loop started to get active sessions...
DEBUG - 2019-11-14 06:13:05 --> initial count =0
DEBUG - 2019-11-14 06:13:05 --> last count=10
DEBUG - 2019-11-14 06:13:05 -->  $_POST['draw']=1
DEBUG - 2019-11-14 06:13:05 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:05 -->  recordsTotal=30
DEBUG - 2019-11-14 06:13:05 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:05 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:05 -->  recordsFiltered=30
DEBUG - 2019-11-14 06:13:05 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:05 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:05 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:05 --> Total execution time: 0.0920
DEBUG - 2019-11-14 06:13:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:11 --> calling constructor page Dashboard
DEBUG - 2019-11-14 06:13:11 --> validating session page Dashboard
DEBUG - 2019-11-14 06:13:11 --> index page Dashboard
DEBUG - 2019-11-14 06:13:11 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-14 06:13:11 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:13:11 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-14 06:13:11 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:13:11 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-14 06:13:11 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:13:11 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-14 06:13:11 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:13:11 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 06:13:11 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:13:11 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:13:11 --> calling view admin/dashboard
DEBUG - 2019-11-14 06:13:11 --> Total execution time: 0.0730
DEBUG - 2019-11-14 06:13:15 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:15 --> Customer_model constructer got called..
DEBUG - 2019-11-14 06:13:15 --> Active_Sessions constructer got called..
DEBUG - 2019-11-14 06:13:15 --> index method active session controller
DEBUG - 2019-11-14 06:13:15 --> navigation to active session view
DEBUG - 2019-11-14 06:13:15 --> Total execution time: 0.0470
DEBUG - 2019-11-14 06:13:15 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:15 --> Customer_model constructer got called..
DEBUG - 2019-11-14 06:13:15 --> Active_Sessions constructer got called..
DEBUG - 2019-11-14 06:13:15 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-14 06:13:15 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:15 --> fetched data from get_datatables model
DEBUG - 2019-11-14 06:13:15 --> $_POST['start'] value = 0
DEBUG - 2019-11-14 06:13:15 --> ajax_list for loop started...
DEBUG - 2019-11-14 06:13:15 --> for loop started to get active sessions...
DEBUG - 2019-11-14 06:13:15 --> initial count =0
DEBUG - 2019-11-14 06:13:15 --> last count=10
DEBUG - 2019-11-14 06:13:15 -->  $_POST['draw']=1
DEBUG - 2019-11-14 06:13:15 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:15 -->  recordsTotal=30
DEBUG - 2019-11-14 06:13:15 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:15 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:15 -->  recordsFiltered=30
DEBUG - 2019-11-14 06:13:15 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:15 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:15 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:15 --> Total execution time: 0.0870
DEBUG - 2019-11-14 06:13:26 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:27 --> Customer_model constructer got called..
DEBUG - 2019-11-14 06:13:27 --> Active_Sessions constructer got called..
DEBUG - 2019-11-14 06:13:27 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-14 06:13:27 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:27 --> fetched data from get_datatables model
DEBUG - 2019-11-14 06:13:27 --> $_POST['start'] value = 20
DEBUG - 2019-11-14 06:13:27 --> ajax_list for loop started...
DEBUG - 2019-11-14 06:13:27 --> for loop started to get active sessions...
DEBUG - 2019-11-14 06:13:27 --> initial count =20
DEBUG - 2019-11-14 06:13:27 --> last count=30
DEBUG - 2019-11-14 06:13:27 -->  $_POST['draw']=2
DEBUG - 2019-11-14 06:13:27 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:27 -->  recordsTotal=30
DEBUG - 2019-11-14 06:13:27 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:27 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:27 -->  recordsFiltered=30
DEBUG - 2019-11-14 06:13:27 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:27 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:27 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:27 --> Total execution time: 0.0550
DEBUG - 2019-11-14 06:13:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:33 --> Customer_model constructer got called..
DEBUG - 2019-11-14 06:13:33 --> Active_Sessions constructer got called..
DEBUG - 2019-11-14 06:13:33 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-14 06:13:33 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:33 --> fetched data from get_datatables model
DEBUG - 2019-11-14 06:13:33 --> $_POST['start'] value = 10
DEBUG - 2019-11-14 06:13:33 --> ajax_list for loop started...
DEBUG - 2019-11-14 06:13:33 --> for loop started to get active sessions...
DEBUG - 2019-11-14 06:13:33 --> initial count =10
DEBUG - 2019-11-14 06:13:33 --> last count=20
DEBUG - 2019-11-14 06:13:33 -->  $_POST['draw']=3
DEBUG - 2019-11-14 06:13:33 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:33 -->  recordsTotal=30
DEBUG - 2019-11-14 06:13:33 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:33 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:33 -->  recordsFiltered=30
DEBUG - 2019-11-14 06:13:33 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:33 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:33 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:33 --> Total execution time: 0.0770
DEBUG - 2019-11-14 06:13:34 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:34 --> Customer_model constructer got called..
DEBUG - 2019-11-14 06:13:34 --> Active_Sessions constructer got called..
DEBUG - 2019-11-14 06:13:34 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-14 06:13:34 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:34 --> fetched data from get_datatables model
DEBUG - 2019-11-14 06:13:34 --> $_POST['start'] value = 0
DEBUG - 2019-11-14 06:13:34 --> ajax_list for loop started...
DEBUG - 2019-11-14 06:13:34 --> for loop started to get active sessions...
DEBUG - 2019-11-14 06:13:34 --> initial count =0
DEBUG - 2019-11-14 06:13:34 --> last count=10
DEBUG - 2019-11-14 06:13:34 -->  $_POST['draw']=4
DEBUG - 2019-11-14 06:13:34 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:34 -->  recordsTotal=30
DEBUG - 2019-11-14 06:13:34 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:34 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:34 -->  recordsFiltered=30
DEBUG - 2019-11-14 06:13:34 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:34 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:34 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:34 --> Total execution time: 0.0570
DEBUG - 2019-11-14 06:13:35 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:35 --> Customer_model constructer got called..
DEBUG - 2019-11-14 06:13:35 --> Active_Sessions constructer got called..
DEBUG - 2019-11-14 06:13:35 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-14 06:13:35 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:35 --> fetched data from get_datatables model
DEBUG - 2019-11-14 06:13:35 --> $_POST['start'] value = 10
DEBUG - 2019-11-14 06:13:35 --> ajax_list for loop started...
DEBUG - 2019-11-14 06:13:35 --> for loop started to get active sessions...
DEBUG - 2019-11-14 06:13:35 --> initial count =10
DEBUG - 2019-11-14 06:13:35 --> last count=20
DEBUG - 2019-11-14 06:13:35 -->  $_POST['draw']=5
DEBUG - 2019-11-14 06:13:35 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:35 -->  recordsTotal=30
DEBUG - 2019-11-14 06:13:35 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:35 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:35 -->  recordsFiltered=30
DEBUG - 2019-11-14 06:13:35 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:35 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:35 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:35 --> Total execution time: 0.0690
DEBUG - 2019-11-14 06:13:37 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:37 --> Customer_model constructer got called..
DEBUG - 2019-11-14 06:13:37 --> Active_Sessions constructer got called..
DEBUG - 2019-11-14 06:13:37 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-14 06:13:37 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:37 --> fetched data from get_datatables model
DEBUG - 2019-11-14 06:13:37 --> $_POST['start'] value = 20
DEBUG - 2019-11-14 06:13:37 --> ajax_list for loop started...
DEBUG - 2019-11-14 06:13:37 --> for loop started to get active sessions...
DEBUG - 2019-11-14 06:13:37 --> initial count =20
DEBUG - 2019-11-14 06:13:37 --> last count=30
DEBUG - 2019-11-14 06:13:37 -->  $_POST['draw']=6
DEBUG - 2019-11-14 06:13:37 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:37 -->  recordsTotal=30
DEBUG - 2019-11-14 06:13:37 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:37 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:37 -->  recordsFiltered=30
DEBUG - 2019-11-14 06:13:37 --> count_all() got called form Customers_model
DEBUG - 2019-11-14 06:13:37 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-14 06:13:37 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-14 06:13:37 --> Total execution time: 0.0890
DEBUG - 2019-11-14 06:13:46 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:46 --> calling constructor page Dashboard
DEBUG - 2019-11-14 06:13:46 --> validating session page Dashboard
DEBUG - 2019-11-14 06:13:46 --> index page Dashboard
DEBUG - 2019-11-14 06:13:46 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-14 06:13:46 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:13:46 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-14 06:13:46 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:13:46 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-14 06:13:46 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:13:46 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-14 06:13:46 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:13:46 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 06:13:46 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:13:46 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:13:46 --> calling view admin/dashboard
DEBUG - 2019-11-14 06:13:46 --> Total execution time: 0.0560
DEBUG - 2019-11-14 06:13:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:52 --> logout() called form login controller.... loading admin/login
DEBUG - 2019-11-14 06:13:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:13:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:13:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:13:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:13:52 --> index method Login
DEBUG - 2019-11-14 06:13:52 --> checking request type form or redirect
DEBUG - 2019-11-14 06:13:52 --> admin login view loaded...
DEBUG - 2019-11-14 06:13:52 --> Total execution time: 0.0530
DEBUG - 2019-11-14 06:14:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:14:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:14:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:14:14 --> index method Login
DEBUG - 2019-11-14 06:14:14 --> checking request type form or redirect
DEBUG - 2019-11-14 06:14:14 --> form post method
DEBUG - 2019-11-14 06:14:14 --> loading model Admin_Login_Model
DEBUG - 2019-11-14 06:14:14 --> calling validatelogin()
DEBUG - 2019-11-14 06:14:14 --> validatelogin() got called form Admin_Login_Model
ERROR - 2019-11-14 06:14:14 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\ciproject\application\models\Admin_Login_Model.php 11
DEBUG - 2019-11-14 06:14:14 --> Accounts details =
DEBUG - 2019-11-14 06:14:14 --> account id is NULL
DEBUG - 2019-11-14 06:14:14 --> invalidate login.... loading admin/login
DEBUG - 2019-11-14 06:14:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:14:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:14:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:14:14 --> index method Login
DEBUG - 2019-11-14 06:14:14 --> checking request type form or redirect
DEBUG - 2019-11-14 06:14:14 --> admin login view loaded...
DEBUG - 2019-11-14 06:14:14 --> Total execution time: 0.0450
DEBUG - 2019-11-14 06:14:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:14:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:14:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:14:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:14:25 --> index method Login
DEBUG - 2019-11-14 06:14:25 --> checking request type form or redirect
DEBUG - 2019-11-14 06:14:25 --> form post method
DEBUG - 2019-11-14 06:14:25 --> loading model Admin_Login_Model
DEBUG - 2019-11-14 06:14:25 --> calling validatelogin()
DEBUG - 2019-11-14 06:14:25 --> validatelogin() got called form Admin_Login_Model
ERROR - 2019-11-14 06:14:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\ciproject\application\models\Admin_Login_Model.php 11
DEBUG - 2019-11-14 06:14:25 --> Accounts details =
DEBUG - 2019-11-14 06:14:25 --> account id is NULL
DEBUG - 2019-11-14 06:14:25 --> invalidate login.... loading admin/login
DEBUG - 2019-11-14 06:14:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:14:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:14:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:14:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:14:25 --> index method Login
DEBUG - 2019-11-14 06:14:25 --> checking request type form or redirect
DEBUG - 2019-11-14 06:14:25 --> admin login view loaded...
DEBUG - 2019-11-14 06:14:25 --> Total execution time: 0.0410
DEBUG - 2019-11-14 06:14:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:14:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:14:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:14:38 --> index method Login
DEBUG - 2019-11-14 06:14:38 --> checking request type form or redirect
DEBUG - 2019-11-14 06:14:38 --> form post method
DEBUG - 2019-11-14 06:14:38 --> loading model Admin_Login_Model
DEBUG - 2019-11-14 06:14:38 --> calling validatelogin()
DEBUG - 2019-11-14 06:14:38 --> validatelogin() got called form Admin_Login_Model
ERROR - 2019-11-14 06:14:38 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\ciproject\application\models\Admin_Login_Model.php 11
DEBUG - 2019-11-14 06:14:38 --> Accounts details =
DEBUG - 2019-11-14 06:14:38 --> account id is NULL
DEBUG - 2019-11-14 06:14:38 --> invalidate login.... loading admin/login
DEBUG - 2019-11-14 06:14:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:14:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:14:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:14:38 --> index method Login
DEBUG - 2019-11-14 06:14:38 --> checking request type form or redirect
DEBUG - 2019-11-14 06:14:38 --> admin login view loaded...
DEBUG - 2019-11-14 06:14:38 --> Total execution time: 0.0540
DEBUG - 2019-11-14 06:15:39 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:15:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:15:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:15:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:15:39 --> Total execution time: 0.0600
DEBUG - 2019-11-14 06:15:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:15:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:15:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:15:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:15:40 --> index method called... Login 
DEBUG - 2019-11-14 06:15:40 --> validation for User login completed...
DEBUG - 2019-11-14 06:15:40 --> Some variable did not contain a value.
DEBUG - 2019-11-14 06:15:40 --> Total execution time: 0.1890
DEBUG - 2019-11-14 06:15:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:15:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:15:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:15:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:15:51 --> index method called... Login 
DEBUG - 2019-11-14 06:15:51 --> validation for User login completed...
DEBUG - 2019-11-14 06:15:51 --> Login form submited...
DEBUG - 2019-11-14 06:15:51 --> User_Login_Model model loaded..
DEBUG - 2019-11-14 06:15:51 --> calling validatelogin() 
DEBUG - 2019-11-14 06:15:51 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-11-14 06:15:51 --> validation result=5
DEBUG - 2019-11-14 06:15:51 --> validation success
DEBUG - 2019-11-14 06:15:51 --> get_role() got called form User_Login_Model
DEBUG - 2019-11-14 06:15:51 --> Role Retrive from DB
ERROR - 2019-11-14 06:15:51 --> Severity: Notice --> Trying to get property 'role_name' of non-object C:\xampp\htdocs\ciproject\application\controllers\user\Login.php 27
DEBUG - 2019-11-14 06:15:51 --> loading model Active_Session
DEBUG - 2019-11-14 06:15:51 --> calling insert_active_session()
DEBUG - 2019-11-14 06:15:51 --> insert_active_session() got called form Active_Session
ERROR - 2019-11-14 06:15:51 --> Severity: Warning --> Use of undefined constant sql_query - assumed 'sql_query' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\ciproject\application\models\Active_Session.php 21
DEBUG - 2019-11-14 06:15:51 --> insert success
DEBUG - 2019-11-14 06:15:51 --> loading view user/dashboard
DEBUG - 2019-11-14 06:15:51 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:15:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:15:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:15:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:15:51 --> calling constructor page Dashboard
DEBUG - 2019-11-14 06:15:51 --> validating session page Dashboard
DEBUG - 2019-11-14 06:15:51 --> index page Dashboard
DEBUG - 2019-11-14 06:15:51 --> loading User_Profile_Model model...
DEBUG - 2019-11-14 06:15:51 --> getprofile() got called form User_Profile_Model
DEBUG - 2019-11-14 06:15:51 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:15:51 --> calling countlastsevendays() method for role=USER
DEBUG - 2019-11-14 06:15:51 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:15:51 --> Array
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

DEBUG - 2019-11-14 06:15:51 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-14 06:15:51 --> calling view user/dashboard
DEBUG - 2019-11-14 06:15:51 --> Total execution time: 0.0970
DEBUG - 2019-11-14 06:15:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:15:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:15:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:15:53 --> calling constructor page Dashboard
DEBUG - 2019-11-14 06:15:53 --> validating session page Dashboard
DEBUG - 2019-11-14 06:15:53 --> index page Dashboard
DEBUG - 2019-11-14 06:15:53 --> loading User_Profile_Model model...
DEBUG - 2019-11-14 06:15:53 --> getprofile() got called form User_Profile_Model
DEBUG - 2019-11-14 06:15:53 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:15:53 --> calling countlastsevendays() method for role=USER
DEBUG - 2019-11-14 06:15:53 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:15:53 --> Array
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

DEBUG - 2019-11-14 06:15:53 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-14 06:15:53 --> calling view user/dashboard
DEBUG - 2019-11-14 06:15:53 --> Total execution time: 0.0560
DEBUG - 2019-11-14 06:15:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:15:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:15:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:15:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:15:54 --> getprofile() got called form User_Profile_Model
DEBUG - 2019-11-14 06:15:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:15:54 --> Array
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

DEBUG - 2019-11-14 06:15:54 --> Total execution time: 0.0850
DEBUG - 2019-11-14 06:15:56 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:15:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:15:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:15:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:15:56 --> calling constructor page Change_password
DEBUG - 2019-11-14 06:15:56 --> validating session page Change_password
DEBUG - 2019-11-14 06:15:56 --> index page Change_password
DEBUG - 2019-11-14 06:15:56 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:15:56 --> calling countlastsevendays() method for role=USER
DEBUG - 2019-11-14 06:15:56 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:15:56 --> Array
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

DEBUG - 2019-11-14 06:15:56 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-14 06:15:56 --> calling view user/change_password
DEBUG - 2019-11-14 06:15:56 --> Total execution time: 0.1040
DEBUG - 2019-11-14 06:15:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:15:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:15:58 --> getprofile() got called form User_Profile_Model
DEBUG - 2019-11-14 06:15:58 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:15:58 --> Array
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

DEBUG - 2019-11-14 06:15:58 --> Total execution time: 0.0680
DEBUG - 2019-11-14 06:15:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:15:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:15:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:15:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:15:59 --> calling constructor page Dashboard
DEBUG - 2019-11-14 06:15:59 --> validating session page Dashboard
DEBUG - 2019-11-14 06:15:59 --> index page Dashboard
DEBUG - 2019-11-14 06:15:59 --> loading User_Profile_Model model...
DEBUG - 2019-11-14 06:15:59 --> getprofile() got called form User_Profile_Model
DEBUG - 2019-11-14 06:15:59 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:15:59 --> calling countlastsevendays() method for role=USER
DEBUG - 2019-11-14 06:15:59 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:15:59 --> Array
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

DEBUG - 2019-11-14 06:15:59 --> loading configurable menu with result=Array
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

DEBUG - 2019-11-14 06:15:59 --> calling view user/dashboard
DEBUG - 2019-11-14 06:15:59 --> Total execution time: 0.0720
DEBUG - 2019-11-14 06:16:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:16:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:16:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:16:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:16:04 --> logout() called
DEBUG - 2019-11-14 06:16:04 --> loading model Active_Session
DEBUG - 2019-11-14 06:16:04 --> calling remove_active_session()
DEBUG - 2019-11-14 06:16:04 --> remove_active_session() got called form Active_Session
DEBUG - 2019-11-14 06:16:04 --> loading user/login
DEBUG - 2019-11-14 06:16:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:16:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:16:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:16:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:16:04 --> index method called... Login 
DEBUG - 2019-11-14 06:16:04 --> validation for User login completed...
DEBUG - 2019-11-14 06:16:04 --> Some variable did not contain a value.
DEBUG - 2019-11-14 06:16:04 --> Total execution time: 0.0460
DEBUG - 2019-11-14 06:16:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:16:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:16:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:16:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:16:10 --> Total execution time: 0.0540
DEBUG - 2019-11-14 06:16:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:16:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:16:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:16:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:16:14 --> index method Login
DEBUG - 2019-11-14 06:16:14 --> checking request type form or redirect
DEBUG - 2019-11-14 06:16:14 --> admin login view loaded...
DEBUG - 2019-11-14 06:16:14 --> Total execution time: 0.0440
DEBUG - 2019-11-14 06:16:34 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:16:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:16:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:16:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:16:34 --> index method Login
DEBUG - 2019-11-14 06:16:34 --> checking request type form or redirect
DEBUG - 2019-11-14 06:16:34 --> form post method
DEBUG - 2019-11-14 06:16:34 --> loading model Admin_Login_Model
DEBUG - 2019-11-14 06:16:34 --> calling validatelogin()
DEBUG - 2019-11-14 06:16:34 --> validatelogin() got called form Admin_Login_Model
ERROR - 2019-11-14 06:16:34 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\ciproject\application\models\Admin_Login_Model.php 11
DEBUG - 2019-11-14 06:16:34 --> Accounts details =
DEBUG - 2019-11-14 06:16:34 --> account id is NULL
DEBUG - 2019-11-14 06:16:34 --> invalidate login.... loading admin/login
DEBUG - 2019-11-14 06:16:34 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:16:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:16:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:16:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:16:34 --> index method Login
DEBUG - 2019-11-14 06:16:34 --> checking request type form or redirect
DEBUG - 2019-11-14 06:16:34 --> admin login view loaded...
DEBUG - 2019-11-14 06:16:34 --> Total execution time: 0.0430
DEBUG - 2019-11-14 06:16:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:16:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:16:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:16:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:16:41 --> index method Login
DEBUG - 2019-11-14 06:16:41 --> checking request type form or redirect
DEBUG - 2019-11-14 06:16:41 --> form post method
DEBUG - 2019-11-14 06:16:41 --> loading model Admin_Login_Model
DEBUG - 2019-11-14 06:16:41 --> calling validatelogin()
DEBUG - 2019-11-14 06:16:41 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-14 06:16:41 --> Accounts details =1
DEBUG - 2019-11-14 06:16:41 --> account id found
DEBUG - 2019-11-14 06:16:41 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-14 06:16:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 06:16:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 06:16:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 06:16:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 06:16:41 --> calling constructor page Dashboard
DEBUG - 2019-11-14 06:16:41 --> validating session page Dashboard
DEBUG - 2019-11-14 06:16:41 --> index page Dashboard
DEBUG - 2019-11-14 06:16:41 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-14 06:16:41 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:16:41 --> Admin_Dashboard_Model totalcount=5
DEBUG - 2019-11-14 06:16:41 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:16:41 --> Admin_Dashboard_Model sevendayscount=0
DEBUG - 2019-11-14 06:16:41 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-14 06:16:41 --> Admin_Dashboard_Model thirtydayscount=0
DEBUG - 2019-11-14 06:16:41 --> loading Configarable_Login model...
DEBUG - 2019-11-14 06:16:41 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 06:16:41 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 06:16:41 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 06:16:41 --> calling view admin/dashboard
DEBUG - 2019-11-14 06:16:41 --> Total execution time: 0.0670
DEBUG - 2019-11-14 07:01:36 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 07:01:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 07:01:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 07:01:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 07:01:36 --> calling constructor page Manage_Users
DEBUG - 2019-11-14 07:01:36 --> validating session page Manage_Users
DEBUG - 2019-11-14 07:01:36 --> index page Manage_Users
DEBUG - 2019-11-14 07:01:36 --> loading model ManageUsers_Model
DEBUG - 2019-11-14 07:01:36 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-14 07:01:36 --> calling getusersdetails()
DEBUG - 2019-11-14 07:01:36 --> loading Configarable_Login model...
DEBUG - 2019-11-14 07:01:36 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 07:01:36 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 07:01:36 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:01:36 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:01:36 --> calling view admin/manage_users
DEBUG - 2019-11-14 07:01:36 --> Total execution time: 0.0575
DEBUG - 2019-11-14 07:02:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 07:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 07:02:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 07:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 07:02:09 --> calling constructor page Manage_Users
DEBUG - 2019-11-14 07:02:09 --> validating session page Manage_Users
DEBUG - 2019-11-14 07:02:09 --> index page Manage_Users
DEBUG - 2019-11-14 07:02:09 --> loading model ManageUsers_Model
DEBUG - 2019-11-14 07:02:09 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-14 07:02:09 --> calling getusersdetails()
DEBUG - 2019-11-14 07:02:09 --> loading Configarable_Login model...
DEBUG - 2019-11-14 07:02:09 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 07:02:09 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 07:02:09 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:02:09 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:02:09 --> calling view admin/manage_users
DEBUG - 2019-11-14 07:02:09 --> Total execution time: 0.0525
DEBUG - 2019-11-14 07:02:17 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 07:02:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 07:02:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 07:02:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 07:02:17 --> Upload_users constructer got called..
DEBUG - 2019-11-14 07:02:17 --> calling view upload_users
DEBUG - 2019-11-14 07:02:17 --> loading Configarable_Login model...
DEBUG - 2019-11-14 07:02:17 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 07:02:17 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 07:02:17 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:02:17 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:02:17 --> Total execution time: 0.0850
DEBUG - 2019-11-14 07:08:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 07:08:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 07:08:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 07:08:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 07:08:06 --> Upload_users constructer got called..
DEBUG - 2019-11-14 07:08:06 --> calling view upload_users
DEBUG - 2019-11-14 07:08:06 --> loading Configarable_Login model...
DEBUG - 2019-11-14 07:08:06 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 07:08:06 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 07:08:06 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:08:06 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:08:06 --> Total execution time: 0.0700
DEBUG - 2019-11-14 07:08:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 07:08:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 07:08:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 07:08:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 07:08:07 --> Upload_users constructer got called..
DEBUG - 2019-11-14 07:08:07 --> calling view upload_users
DEBUG - 2019-11-14 07:08:07 --> loading Configarable_Login model...
DEBUG - 2019-11-14 07:08:07 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 07:08:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 07:08:07 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:08:07 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:08:07 --> Total execution time: 0.0525
DEBUG - 2019-11-14 07:08:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 07:08:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 07:08:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 07:08:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 07:08:08 --> Upload_users constructer got called..
DEBUG - 2019-11-14 07:08:08 --> calling view upload_users
DEBUG - 2019-11-14 07:08:08 --> loading Configarable_Login model...
DEBUG - 2019-11-14 07:08:08 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 07:08:08 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 07:08:08 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:08:08 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:08:08 --> Total execution time: 0.0525
DEBUG - 2019-11-14 07:09:42 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 07:09:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 07:09:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 07:09:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 07:09:42 --> Upload_users constructer got called..
DEBUG - 2019-11-14 07:09:42 --> calling view upload_users
DEBUG - 2019-11-14 07:09:42 --> loading Configarable_Login model...
DEBUG - 2019-11-14 07:09:42 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-14 07:09:42 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-14 07:09:42 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:09:42 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-14 07:09:42 --> Total execution time: 0.0575
DEBUG - 2019-11-14 07:32:42 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 07:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 07:32:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 07:32:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 07:32:42 --> logout() called form login controller.... loading admin/login
DEBUG - 2019-11-14 07:32:42 --> UTF-8 Support Enabled
DEBUG - 2019-11-14 07:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-14 07:32:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-14 07:32:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-14 07:32:42 --> index method Login
DEBUG - 2019-11-14 07:32:42 --> checking request type form or redirect
DEBUG - 2019-11-14 07:32:42 --> admin login view loaded...
DEBUG - 2019-11-14 07:32:42 --> Total execution time: 0.0525
