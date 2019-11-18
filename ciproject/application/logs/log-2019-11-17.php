<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2019-11-17 05:34:39 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:34:39 --> No URI present. Default controller set.
DEBUG - 2019-11-17 05:34:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:34:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:34:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:34:39 --> Total execution time: 0.8925
DEBUG - 2019-11-17 05:34:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:34:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:34:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:34:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:34:48 --> index method Login
DEBUG - 2019-11-17 05:34:48 --> checking request type form or redirect
DEBUG - 2019-11-17 05:34:48 --> admin login view loaded...
DEBUG - 2019-11-17 05:34:48 --> Total execution time: 0.6475
DEBUG - 2019-11-17 05:34:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:34:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:34:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:34:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:34:59 --> index method Login
DEBUG - 2019-11-17 05:34:59 --> checking request type form or redirect
DEBUG - 2019-11-17 05:34:59 --> form post method
DEBUG - 2019-11-17 05:34:59 --> loading model Admin_Login_Model
DEBUG - 2019-11-17 05:34:59 --> calling validatelogin()
DEBUG - 2019-11-17 05:34:59 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-17 05:35:00 --> Accounts details =1
DEBUG - 2019-11-17 05:35:00 --> account id found
DEBUG - 2019-11-17 05:35:00 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-17 05:35:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:35:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:35:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:35:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:35:00 --> calling constructor page Dashboard
DEBUG - 2019-11-17 05:35:00 --> validating session page Dashboard
DEBUG - 2019-11-17 05:35:00 --> index page Dashboard
DEBUG - 2019-11-17 05:35:00 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 05:35:00 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 05:35:00 --> Admin_Dashboard_Model totalcount=9
DEBUG - 2019-11-17 05:35:00 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 05:35:00 --> Admin_Dashboard_Model sevendayscount=3
DEBUG - 2019-11-17 05:35:00 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 05:35:00 --> Admin_Dashboard_Model thirtydayscount=3
DEBUG - 2019-11-17 05:35:00 --> loading Configarable_Login model...
DEBUG - 2019-11-17 05:35:00 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 05:35:00 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 05:35:00 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:35:00 --> calling view admin/dashboard
DEBUG - 2019-11-17 05:35:01 --> Total execution time: 0.5050
DEBUG - 2019-11-17 05:35:08 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:35:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:35:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:35:08 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 05:35:08 --> validating session page Manage_Users
DEBUG - 2019-11-17 05:35:08 --> index page Manage_Users
DEBUG - 2019-11-17 05:35:08 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 05:35:08 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 05:35:08 --> calling getusersdetails()
DEBUG - 2019-11-17 05:35:08 --> loading Configarable_Login model...
DEBUG - 2019-11-17 05:35:08 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 05:35:08 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 05:35:08 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:35:08 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:35:08 --> calling view admin/manage_users
DEBUG - 2019-11-17 05:35:08 --> Total execution time: 0.1650
DEBUG - 2019-11-17 05:35:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:35:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:35:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:35:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:35:14 --> Upload_users constructer got called..
DEBUG - 2019-11-17 05:35:14 --> calling view upload_users
DEBUG - 2019-11-17 05:35:14 --> loading Configarable_Login model...
DEBUG - 2019-11-17 05:35:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 05:35:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 05:35:14 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:35:14 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

ERROR - 2019-11-17 05:35:14 --> Severity: Notice --> Undefined variable: newdata C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 29
DEBUG - 2019-11-17 05:35:14 --> Total execution time: 0.2350
DEBUG - 2019-11-17 05:42:37 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:42:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:42:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:42:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:42:37 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 05:42:37 --> validating session page Manage_Users
DEBUG - 2019-11-17 05:42:37 --> index page Manage_Users
DEBUG - 2019-11-17 05:42:37 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 05:42:37 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 05:42:37 --> calling getusersdetails()
DEBUG - 2019-11-17 05:42:37 --> loading Configarable_Login model...
DEBUG - 2019-11-17 05:42:37 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 05:42:37 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 05:42:37 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:42:37 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:42:37 --> calling view admin/manage_users
DEBUG - 2019-11-17 05:42:37 --> Total execution time: 0.0600
DEBUG - 2019-11-17 05:42:48 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:42:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:42:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:42:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:42:48 --> logout() called form login controller.... loading admin/login
DEBUG - 2019-11-17 05:42:48 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:42:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:42:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:42:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:42:48 --> index method Login
DEBUG - 2019-11-17 05:42:48 --> checking request type form or redirect
DEBUG - 2019-11-17 05:42:48 --> admin login view loaded...
DEBUG - 2019-11-17 05:42:48 --> Total execution time: 0.0450
DEBUG - 2019-11-17 05:42:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:42:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:42:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:42:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:42:58 --> index method Login
DEBUG - 2019-11-17 05:42:58 --> checking request type form or redirect
DEBUG - 2019-11-17 05:42:58 --> form post method
DEBUG - 2019-11-17 05:42:58 --> loading model Admin_Login_Model
DEBUG - 2019-11-17 05:42:58 --> calling validatelogin()
DEBUG - 2019-11-17 05:42:58 --> validatelogin() got called form Admin_Login_Model
ERROR - 2019-11-17 05:42:58 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\ciproject\application\models\Admin_Login_Model.php 11
DEBUG - 2019-11-17 05:42:58 --> Accounts details =
DEBUG - 2019-11-17 05:42:58 --> account id is NULL
DEBUG - 2019-11-17 05:42:58 --> invalidate login.... loading admin/login
DEBUG - 2019-11-17 05:42:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:42:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:42:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:42:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:42:58 --> index method Login
DEBUG - 2019-11-17 05:42:58 --> checking request type form or redirect
DEBUG - 2019-11-17 05:42:58 --> admin login view loaded...
DEBUG - 2019-11-17 05:42:58 --> Total execution time: 0.0575
DEBUG - 2019-11-17 05:43:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:43:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:43:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:43:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:43:06 --> index method Login
DEBUG - 2019-11-17 05:43:06 --> checking request type form or redirect
DEBUG - 2019-11-17 05:43:06 --> form post method
DEBUG - 2019-11-17 05:43:06 --> loading model Admin_Login_Model
DEBUG - 2019-11-17 05:43:06 --> calling validatelogin()
DEBUG - 2019-11-17 05:43:06 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-17 05:43:06 --> Accounts details =1
DEBUG - 2019-11-17 05:43:06 --> account id found
DEBUG - 2019-11-17 05:43:06 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-17 05:43:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:43:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:43:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:43:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:43:07 --> calling constructor page Dashboard
DEBUG - 2019-11-17 05:43:07 --> validating session page Dashboard
DEBUG - 2019-11-17 05:43:07 --> index page Dashboard
DEBUG - 2019-11-17 05:43:07 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 05:43:07 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 05:43:07 --> Admin_Dashboard_Model totalcount=9
DEBUG - 2019-11-17 05:43:07 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 05:43:07 --> Admin_Dashboard_Model sevendayscount=3
DEBUG - 2019-11-17 05:43:07 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 05:43:07 --> Admin_Dashboard_Model thirtydayscount=3
DEBUG - 2019-11-17 05:43:07 --> loading Configarable_Login model...
DEBUG - 2019-11-17 05:43:07 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 05:43:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 05:43:07 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:43:07 --> calling view admin/dashboard
DEBUG - 2019-11-17 05:43:07 --> Total execution time: 0.0575
DEBUG - 2019-11-17 05:43:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:43:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:43:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:43:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:43:11 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 05:43:11 --> validating session page Manage_Users
DEBUG - 2019-11-17 05:43:11 --> index page Manage_Users
DEBUG - 2019-11-17 05:43:11 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 05:43:11 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 05:43:11 --> calling getusersdetails()
DEBUG - 2019-11-17 05:43:11 --> loading Configarable_Login model...
DEBUG - 2019-11-17 05:43:11 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 05:43:11 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 05:43:11 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:43:11 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:43:11 --> calling view admin/manage_users
DEBUG - 2019-11-17 05:43:11 --> Total execution time: 0.0525
DEBUG - 2019-11-17 05:43:13 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:43:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:43:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:43:13 --> Upload_users constructer got called..
DEBUG - 2019-11-17 05:43:13 --> calling view upload_users
DEBUG - 2019-11-17 05:43:13 --> loading Configarable_Login model...
DEBUG - 2019-11-17 05:43:13 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 05:43:13 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 05:43:13 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:43:13 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:43:13 --> Total execution time: 0.0550
DEBUG - 2019-11-17 05:43:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:43:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:43:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:43:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:43:40 --> Upload_users constructer got called..
DEBUG - 2019-11-17 05:43:40 --> calling view upload_users
DEBUG - 2019-11-17 05:43:40 --> loading Configarable_Login model...
DEBUG - 2019-11-17 05:43:40 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 05:43:40 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 05:43:40 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:43:40 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:43:40 --> Total execution time: 0.0600
DEBUG - 2019-11-17 05:43:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:43:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:43:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:43:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:43:41 --> Upload_users constructer got called..
DEBUG - 2019-11-17 05:43:41 --> calling view upload_users
DEBUG - 2019-11-17 05:43:41 --> loading Configarable_Login model...
DEBUG - 2019-11-17 05:43:41 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 05:43:41 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 05:43:41 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:43:41 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:43:41 --> Total execution time: 0.0525
DEBUG - 2019-11-17 05:58:15 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 05:58:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 05:58:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 05:58:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 05:58:15 --> Upload_users constructer got called..
DEBUG - 2019-11-17 05:58:15 --> calling view upload_users
DEBUG - 2019-11-17 05:58:15 --> loading Configarable_Login model...
DEBUG - 2019-11-17 05:58:15 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 05:58:15 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 05:58:15 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:58:15 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 05:58:15 --> Total execution time: 0.0575
DEBUG - 2019-11-17 06:01:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:01:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:01:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:01:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:01:06 --> Upload_users constructer got called..
DEBUG - 2019-11-17 06:01:06 --> calling view upload_users
ERROR - 2019-11-17 06:01:06 --> Severity: Notice --> Undefined variable: result C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 18
ERROR - 2019-11-17 06:01:06 --> Severity: Notice --> Undefined variable: config_menu C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 21
ERROR - 2019-11-17 06:01:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
DEBUG - 2019-11-17 06:01:06 --> Total execution time: 0.0575
DEBUG - 2019-11-17 06:02:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:02:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:02:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:02:53 --> Upload_users constructer got called..
DEBUG - 2019-11-17 06:02:53 --> calling view upload_users
ERROR - 2019-11-17 06:02:53 --> Severity: Notice --> Undefined variable: result C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 18
ERROR - 2019-11-17 06:02:53 --> Severity: Notice --> Undefined variable: config_menu C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 21
ERROR - 2019-11-17 06:02:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
DEBUG - 2019-11-17 06:02:53 --> Total execution time: 0.0550
DEBUG - 2019-11-17 06:02:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:02:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:02:54 --> Upload_users constructer got called..
DEBUG - 2019-11-17 06:02:54 --> calling view upload_users
ERROR - 2019-11-17 06:02:54 --> Severity: Notice --> Undefined variable: result C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 18
ERROR - 2019-11-17 06:02:54 --> Severity: Notice --> Undefined variable: config_menu C:\xampp\htdocs\ciproject\application\controllers\admin\Upload_users.php 21
ERROR - 2019-11-17 06:02:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
DEBUG - 2019-11-17 06:02:54 --> Total execution time: 0.0625
DEBUG - 2019-11-17 06:08:37 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:08:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:08:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:08:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:08:37 --> Upload_users constructer got called..
DEBUG - 2019-11-17 06:08:37 --> calling view upload_users
ERROR - 2019-11-17 06:08:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
DEBUG - 2019-11-17 06:08:37 --> Total execution time: 0.0550
DEBUG - 2019-11-17 06:09:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:09:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:09:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:09:00 --> logout() called form login controller.... loading admin/login
DEBUG - 2019-11-17 06:09:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:09:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:09:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:09:00 --> index method Login
DEBUG - 2019-11-17 06:09:00 --> checking request type form or redirect
DEBUG - 2019-11-17 06:09:00 --> admin login view loaded...
DEBUG - 2019-11-17 06:09:00 --> Total execution time: 0.0475
DEBUG - 2019-11-17 06:09:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:09:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:09:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:09:10 --> index method Login
DEBUG - 2019-11-17 06:09:10 --> checking request type form or redirect
DEBUG - 2019-11-17 06:09:10 --> form post method
DEBUG - 2019-11-17 06:09:10 --> loading model Admin_Login_Model
DEBUG - 2019-11-17 06:09:10 --> calling validatelogin()
DEBUG - 2019-11-17 06:09:10 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-17 06:09:10 --> Accounts details =1
DEBUG - 2019-11-17 06:09:10 --> account id found
DEBUG - 2019-11-17 06:09:10 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-17 06:09:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:09:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:09:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:09:10 --> calling constructor page Dashboard
DEBUG - 2019-11-17 06:09:10 --> validating session page Dashboard
DEBUG - 2019-11-17 06:09:10 --> index page Dashboard
DEBUG - 2019-11-17 06:09:10 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 06:09:10 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:09:10 --> Admin_Dashboard_Model totalcount=9
DEBUG - 2019-11-17 06:09:10 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:09:10 --> Admin_Dashboard_Model sevendayscount=3
DEBUG - 2019-11-17 06:09:10 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:09:10 --> Admin_Dashboard_Model thirtydayscount=3
DEBUG - 2019-11-17 06:09:10 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:09:10 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:09:10 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:09:10 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:09:10 --> calling view admin/dashboard
DEBUG - 2019-11-17 06:09:10 --> Total execution time: 0.0835
DEBUG - 2019-11-17 06:09:13 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:09:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:09:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:09:13 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 06:09:13 --> validating session page Manage_Users
DEBUG - 2019-11-17 06:09:13 --> index page Manage_Users
DEBUG - 2019-11-17 06:09:13 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 06:09:13 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 06:09:13 --> calling getusersdetails()
DEBUG - 2019-11-17 06:09:13 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:09:13 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:09:13 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:09:13 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:09:13 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:09:13 --> calling view admin/manage_users
DEBUG - 2019-11-17 06:09:13 --> Total execution time: 0.0590
DEBUG - 2019-11-17 06:09:20 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:09:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:09:20 --> Upload_users constructer got called..
DEBUG - 2019-11-17 06:09:20 --> calling view upload_users
DEBUG - 2019-11-17 06:09:20 --> Total execution time: 0.0550
DEBUG - 2019-11-17 06:23:39 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:23:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-17 06:23:39 --> 404 Page Not Found: admin/Display_user/index
DEBUG - 2019-11-17 06:25:42 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:25:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:25:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:25:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-11-17 06:25:42 --> Severity: Notice --> Undefined variable: dataInfo C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
ERROR - 2019-11-17 06:25:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
DEBUG - 2019-11-17 06:25:42 --> Total execution time: 0.0525
DEBUG - 2019-11-17 06:26:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:26:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:26:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:26:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-11-17 06:26:57 --> Severity: Notice --> Undefined variable: dataInfo C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
ERROR - 2019-11-17 06:26:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
DEBUG - 2019-11-17 06:26:57 --> Total execution time: 0.0550
DEBUG - 2019-11-17 06:26:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:26:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:26:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-11-17 06:26:58 --> Severity: Notice --> Undefined variable: dataInfo C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
ERROR - 2019-11-17 06:26:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
DEBUG - 2019-11-17 06:26:58 --> Total execution time: 0.0580
DEBUG - 2019-11-17 06:26:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:26:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:26:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:26:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-11-17 06:26:59 --> Severity: Notice --> Undefined variable: dataInfo C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
ERROR - 2019-11-17 06:26:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
DEBUG - 2019-11-17 06:26:59 --> Total execution time: 0.0550
DEBUG - 2019-11-17 06:27:01 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:27:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:27:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:27:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-11-17 06:27:01 --> Severity: Notice --> Undefined variable: dataInfo C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
ERROR - 2019-11-17 06:27:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
DEBUG - 2019-11-17 06:27:01 --> Total execution time: 0.0500
DEBUG - 2019-11-17 06:28:02 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:28:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:28:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:28:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-11-17 06:28:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
ERROR - 2019-11-17 06:28:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 33
DEBUG - 2019-11-17 06:28:02 --> Total execution time: 0.0500
DEBUG - 2019-11-17 06:28:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:28:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:28:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:28:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-11-17 06:28:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
ERROR - 2019-11-17 06:28:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 33
DEBUG - 2019-11-17 06:28:03 --> Total execution time: 0.0550
DEBUG - 2019-11-17 06:28:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:28:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:28:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:28:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-11-17 06:28:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
ERROR - 2019-11-17 06:28:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 33
DEBUG - 2019-11-17 06:28:04 --> Total execution time: 0.0525
DEBUG - 2019-11-17 06:28:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:28:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:28:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:28:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-11-17 06:28:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 31
ERROR - 2019-11-17 06:28:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\display_user.php 33
DEBUG - 2019-11-17 06:28:05 --> Total execution time: 0.0500
DEBUG - 2019-11-17 06:28:31 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:28:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:28:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:28:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:28:31 --> Total execution time: 0.0500
DEBUG - 2019-11-17 06:29:44 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:29:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:29:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:29:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:29:44 --> Total execution time: 0.0525
DEBUG - 2019-11-17 06:30:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:30:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:30:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:30:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:30:25 --> Total execution time: 0.0600
DEBUG - 2019-11-17 06:31:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:31:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:31:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:31:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:31:38 --> Total execution time: 0.0550
DEBUG - 2019-11-17 06:31:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:31:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:31:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:31:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:31:50 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 06:31:50 --> validating session page Manage_Users
DEBUG - 2019-11-17 06:31:50 --> index page Manage_Users
DEBUG - 2019-11-17 06:31:50 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 06:31:50 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 06:31:50 --> calling getusersdetails()
DEBUG - 2019-11-17 06:31:50 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:31:50 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:31:50 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:31:50 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:31:50 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:31:50 --> calling view admin/manage_users
DEBUG - 2019-11-17 06:31:50 --> Total execution time: 0.0650
DEBUG - 2019-11-17 06:33:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:33:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:33:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:33:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:33:06 --> Total execution time: 0.0525
DEBUG - 2019-11-17 06:35:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:35:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:35:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:35:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:35:04 --> calling constructor page Dashboard
DEBUG - 2019-11-17 06:35:04 --> validating session page Dashboard
DEBUG - 2019-11-17 06:35:04 --> index page Dashboard
DEBUG - 2019-11-17 06:35:04 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 06:35:04 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:35:04 --> Admin_Dashboard_Model totalcount=9
DEBUG - 2019-11-17 06:35:04 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:35:04 --> Admin_Dashboard_Model sevendayscount=3
DEBUG - 2019-11-17 06:35:04 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:35:04 --> Admin_Dashboard_Model thirtydayscount=3
DEBUG - 2019-11-17 06:35:04 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:35:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:35:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:35:04 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:35:04 --> calling view admin/dashboard
DEBUG - 2019-11-17 06:35:04 --> Total execution time: 0.0575
DEBUG - 2019-11-17 06:35:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:35:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:35:07 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 06:35:07 --> validating session page Manage_Users
DEBUG - 2019-11-17 06:35:07 --> index page Manage_Users
DEBUG - 2019-11-17 06:35:07 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 06:35:07 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 06:35:07 --> calling getusersdetails()
DEBUG - 2019-11-17 06:35:07 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:35:07 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:35:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:35:07 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:35:07 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:35:07 --> calling view admin/manage_users
DEBUG - 2019-11-17 06:35:07 --> Total execution time: 0.0550
DEBUG - 2019-11-17 06:35:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:35:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:35:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:35:10 --> Upload_users constructer got called..
DEBUG - 2019-11-17 06:35:10 --> calling view upload_users
DEBUG - 2019-11-17 06:35:10 --> Total execution time: 0.0475
DEBUG - 2019-11-17 06:35:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:35:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-17 06:35:11 --> 404 Page Not Found: Assests/uploads
DEBUG - 2019-11-17 06:38:31 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:38:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:38:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:38:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:38:31 --> Upload_users constructer got called..
DEBUG - 2019-11-17 06:38:31 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2019-11-17 06:38:32 --> Total execution time: 0.7210
DEBUG - 2019-11-17 06:39:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:39:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:39:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:39:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:39:59 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 06:39:59 --> validating session page Manage_Users
DEBUG - 2019-11-17 06:39:59 --> index page Manage_Users
DEBUG - 2019-11-17 06:39:59 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 06:39:59 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 06:39:59 --> calling getusersdetails()
DEBUG - 2019-11-17 06:39:59 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:39:59 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:39:59 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:39:59 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:39:59 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:39:59 --> calling view admin/manage_users
DEBUG - 2019-11-17 06:39:59 --> Total execution time: 0.0670
DEBUG - 2019-11-17 06:40:02 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:40:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:40:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:40:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:40:02 --> Active user constructer called..
DEBUG - 2019-11-17 06:40:02 --> Active_Users index method called...
DEBUG - 2019-11-17 06:40:02 --> Active_Sessions Modem loaded..
DEBUG - 2019-11-17 06:40:02 --> calling get_user_active()
DEBUG - 2019-11-17 06:40:02 --> get_user_active() got called form Active_Session
DEBUG - 2019-11-17 06:40:02 --> number of rows get returned...
DEBUG - 2019-11-17 06:40:02 --> loading configurable model
DEBUG - 2019-11-17 06:40:02 --> calling configurable login for role admin
DEBUG - 2019-11-17 06:40:02 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:40:02 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:40:02 --> result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:40:02 --> calling admin/activeusers
DEBUG - 2019-11-17 06:40:02 --> Total execution time: 0.0640
DEBUG - 2019-11-17 06:40:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:40:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:40:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:40:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:40:09 --> calling constructor page Audit_Users
DEBUG - 2019-11-17 06:40:09 --> validating session page Audit_Users
DEBUG - 2019-11-17 06:40:09 --> index page Audit_Users
DEBUG - 2019-11-17 06:40:09 --> loading Audit_Trail model...
DEBUG - 2019-11-17 06:40:09 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-17 06:40:09 --> loading getAuditTrail()...
DEBUG - 2019-11-17 06:40:09 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:40:09 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:40:09 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:40:09 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:40:09 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:40:09 --> calling view admin/auditusers
DEBUG - 2019-11-17 06:40:09 --> Total execution time: 0.1075
DEBUG - 2019-11-17 06:40:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:40:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:40:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:40:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:40:11 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:40:11 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:40:11 --> index method active session controller
DEBUG - 2019-11-17 06:40:11 --> navigation to active session view
DEBUG - 2019-11-17 06:40:11 --> Total execution time: 0.0800
DEBUG - 2019-11-17 06:40:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:40:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:40:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:40:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:40:11 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:40:11 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:40:11 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:40:11 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:40:11 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:40:11 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 06:40:11 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:40:11 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:40:11 --> initial count =0
DEBUG - 2019-11-17 06:40:11 --> last count=10
DEBUG - 2019-11-17 06:40:11 -->  $_POST['draw']=1
DEBUG - 2019-11-17 06:40:11 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:40:11 -->  recordsTotal=31
DEBUG - 2019-11-17 06:40:11 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:40:11 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:40:11 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:40:11 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:40:11 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:40:11 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:40:11 --> Total execution time: 0.0860
DEBUG - 2019-11-17 06:41:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:41:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:41:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:41:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:41:53 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:41:53 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:41:53 --> index method active session controller
ERROR - 2019-11-17 06:41:53 --> Severity: Notice --> Undefined variable: pagelist C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
ERROR - 2019-11-17 06:41:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ciproject\application\views\admin\includes\sidebar.php 4
DEBUG - 2019-11-17 06:41:53 --> navigation to active session view
DEBUG - 2019-11-17 06:41:53 --> Total execution time: 0.0525
DEBUG - 2019-11-17 06:41:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:41:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:41:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:41:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:41:53 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:41:53 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:41:53 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:41:53 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:41:53 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:41:53 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 06:41:53 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:41:53 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:41:53 --> initial count =0
DEBUG - 2019-11-17 06:41:53 --> last count=10
DEBUG - 2019-11-17 06:41:53 -->  $_POST['draw']=1
DEBUG - 2019-11-17 06:41:53 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:41:53 -->  recordsTotal=31
DEBUG - 2019-11-17 06:41:53 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:41:53 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:41:53 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:41:53 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:41:53 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:41:53 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:41:53 --> Total execution time: 0.0810
DEBUG - 2019-11-17 06:44:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:44:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:44:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:44:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:44:52 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:44:52 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:44:52 --> index method active session controller
DEBUG - 2019-11-17 06:44:52 --> navigation to active session view
DEBUG - 2019-11-17 06:44:52 --> Total execution time: 0.0665
DEBUG - 2019-11-17 06:44:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:44:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:44:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:44:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:44:52 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:44:52 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:44:52 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:44:52 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:44:52 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:44:52 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 06:44:52 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:44:52 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:44:52 --> initial count =0
DEBUG - 2019-11-17 06:44:52 --> last count=10
DEBUG - 2019-11-17 06:44:52 -->  $_POST['draw']=1
DEBUG - 2019-11-17 06:44:52 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:44:52 -->  recordsTotal=31
DEBUG - 2019-11-17 06:44:52 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:44:52 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:44:52 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:44:52 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:44:52 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:44:52 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:44:52 --> Total execution time: 0.0815
DEBUG - 2019-11-17 06:51:20 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:51:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:51:20 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:51:20 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:51:20 --> index method active session controller
DEBUG - 2019-11-17 06:51:20 --> navigation to active session view
DEBUG - 2019-11-17 06:51:20 --> Total execution time: 0.0830
DEBUG - 2019-11-17 06:51:20 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:51:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:51:20 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:51:20 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:51:20 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:51:20 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:51:20 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:51:20 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 06:51:20 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:51:20 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:51:20 --> initial count =0
DEBUG - 2019-11-17 06:51:20 --> last count=10
DEBUG - 2019-11-17 06:51:20 -->  $_POST['draw']=1
DEBUG - 2019-11-17 06:51:20 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:51:20 -->  recordsTotal=31
DEBUG - 2019-11-17 06:51:20 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:51:20 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:51:20 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:51:20 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:51:20 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:51:20 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:51:20 --> Total execution time: 0.0960
DEBUG - 2019-11-17 06:54:42 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:54:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:54:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:54:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:54:42 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:54:42 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:54:42 --> index method active session controller
DEBUG - 2019-11-17 06:54:42 --> navigation to active session view
DEBUG - 2019-11-17 06:54:42 --> Total execution time: 0.0640
DEBUG - 2019-11-17 06:54:43 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:54:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:54:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:54:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:54:43 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:54:43 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:54:43 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:54:43 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:54:43 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:54:43 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 06:54:43 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:54:43 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:54:43 --> initial count =0
DEBUG - 2019-11-17 06:54:43 --> last count=10
DEBUG - 2019-11-17 06:54:43 -->  $_POST['draw']=1
DEBUG - 2019-11-17 06:54:43 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:54:43 -->  recordsTotal=31
DEBUG - 2019-11-17 06:54:43 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:54:43 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:54:43 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:54:43 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:54:43 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:54:43 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:54:43 --> Total execution time: 0.0840
DEBUG - 2019-11-17 06:55:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:55:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:55:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:55:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:55:11 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:55:11 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:55:11 --> index method active session controller
DEBUG - 2019-11-17 06:55:11 --> navigation to active session view
DEBUG - 2019-11-17 06:55:11 --> Total execution time: 0.0510
DEBUG - 2019-11-17 06:55:12 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:55:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:55:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:55:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:55:12 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:55:12 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:55:12 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:55:12 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:12 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:55:12 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 06:55:12 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:55:12 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:55:12 --> initial count =0
DEBUG - 2019-11-17 06:55:12 --> last count=10
DEBUG - 2019-11-17 06:55:12 -->  $_POST['draw']=1
DEBUG - 2019-11-17 06:55:12 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:55:12 -->  recordsTotal=31
DEBUG - 2019-11-17 06:55:12 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:55:12 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:12 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:55:12 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:55:12 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:55:12 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:12 --> Total execution time: 0.1100
DEBUG - 2019-11-17 06:55:55 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:55:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:55:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:55:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:55:55 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:55:55 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:55:55 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:55:55 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:55 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:55:55 --> $_POST['start'] value = 10
DEBUG - 2019-11-17 06:55:55 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:55:55 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:55:55 --> initial count =10
DEBUG - 2019-11-17 06:55:55 --> last count=20
DEBUG - 2019-11-17 06:55:55 -->  $_POST['draw']=2
DEBUG - 2019-11-17 06:55:55 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:55:55 -->  recordsTotal=31
DEBUG - 2019-11-17 06:55:55 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:55:55 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:55 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:55:56 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:55:56 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:55:56 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:56 --> Total execution time: 0.0680
DEBUG - 2019-11-17 06:55:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:55:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:55:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:55:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:55:57 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:55:57 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:55:57 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:55:57 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:57 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:55:57 --> $_POST['start'] value = 20
DEBUG - 2019-11-17 06:55:57 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:55:57 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:55:57 --> initial count =20
DEBUG - 2019-11-17 06:55:57 --> last count=30
DEBUG - 2019-11-17 06:55:57 -->  $_POST['draw']=3
DEBUG - 2019-11-17 06:55:57 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:55:57 -->  recordsTotal=31
DEBUG - 2019-11-17 06:55:57 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:55:57 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:57 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:55:57 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:55:57 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:55:57 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:57 --> Total execution time: 0.0640
DEBUG - 2019-11-17 06:55:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:55:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:55:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:55:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:55:58 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:55:58 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:55:58 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:55:58 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:58 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:55:58 --> $_POST['start'] value = 30
DEBUG - 2019-11-17 06:55:58 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:55:58 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:55:58 --> initial count =30
DEBUG - 2019-11-17 06:55:58 --> last count=31
DEBUG - 2019-11-17 06:55:58 -->  $_POST['draw']=4
DEBUG - 2019-11-17 06:55:58 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:55:58 -->  recordsTotal=31
DEBUG - 2019-11-17 06:55:58 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:55:58 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:58 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:55:58 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:55:58 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:55:58 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:55:58 --> Total execution time: 0.0440
DEBUG - 2019-11-17 06:59:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:18 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:59:18 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:59:18 --> index method active session controller
DEBUG - 2019-11-17 06:59:18 --> navigation to active session view
DEBUG - 2019-11-17 06:59:18 --> Total execution time: 0.0560
DEBUG - 2019-11-17 06:59:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:18 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:59:18 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:59:18 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:59:18 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:59:18 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:59:18 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 06:59:18 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:59:18 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:59:18 --> initial count =0
DEBUG - 2019-11-17 06:59:18 --> last count=10
DEBUG - 2019-11-17 06:59:18 -->  $_POST['draw']=1
DEBUG - 2019-11-17 06:59:18 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:59:18 -->  recordsTotal=31
DEBUG - 2019-11-17 06:59:18 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:59:18 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:59:18 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:59:18 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:59:18 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:59:18 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:59:18 --> Total execution time: 0.0700
DEBUG - 2019-11-17 06:59:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:47 --> calling constructor page Dashboard
DEBUG - 2019-11-17 06:59:47 --> validating session page Dashboard
DEBUG - 2019-11-17 06:59:47 --> index page Dashboard
DEBUG - 2019-11-17 06:59:47 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 06:59:47 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:59:47 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 06:59:47 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:59:47 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 06:59:47 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:59:47 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 06:59:47 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:59:47 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:59:47 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:59:47 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:59:47 --> calling view admin/dashboard
DEBUG - 2019-11-17 06:59:47 --> Total execution time: 0.0570
DEBUG - 2019-11-17 06:59:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:49 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:59:49 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:59:49 --> index method active session controller
DEBUG - 2019-11-17 06:59:49 --> navigation to active session view
DEBUG - 2019-11-17 06:59:49 --> Total execution time: 0.0530
DEBUG - 2019-11-17 06:59:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:49 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:59:49 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:59:49 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:59:49 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:59:49 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:59:49 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 06:59:49 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:59:49 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:59:49 --> initial count =0
DEBUG - 2019-11-17 06:59:49 --> last count=10
DEBUG - 2019-11-17 06:59:49 -->  $_POST['draw']=1
DEBUG - 2019-11-17 06:59:49 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:59:49 -->  recordsTotal=31
DEBUG - 2019-11-17 06:59:49 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:59:49 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:59:49 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:59:49 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:59:49 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:59:49 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:59:49 --> Total execution time: 0.1000
DEBUG - 2019-11-17 06:59:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:50 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:59:50 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:59:50 --> index method active session controller
DEBUG - 2019-11-17 06:59:50 --> navigation to active session view
DEBUG - 2019-11-17 06:59:50 --> Total execution time: 0.0680
DEBUG - 2019-11-17 06:59:51 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:51 --> Customer_model constructer got called..
DEBUG - 2019-11-17 06:59:51 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 06:59:51 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 06:59:51 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:59:51 --> fetched data from get_datatables model
DEBUG - 2019-11-17 06:59:51 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 06:59:51 --> ajax_list for loop started...
DEBUG - 2019-11-17 06:59:51 --> for loop started to get active sessions...
DEBUG - 2019-11-17 06:59:51 --> initial count =0
DEBUG - 2019-11-17 06:59:51 --> last count=10
DEBUG - 2019-11-17 06:59:51 -->  $_POST['draw']=1
DEBUG - 2019-11-17 06:59:51 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:59:51 -->  recordsTotal=31
DEBUG - 2019-11-17 06:59:51 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:59:51 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:59:51 -->  recordsFiltered=31
DEBUG - 2019-11-17 06:59:51 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 06:59:51 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 06:59:51 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 06:59:51 --> Total execution time: 0.0930
DEBUG - 2019-11-17 06:59:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:53 --> calling constructor page Dashboard
DEBUG - 2019-11-17 06:59:53 --> validating session page Dashboard
DEBUG - 2019-11-17 06:59:53 --> index page Dashboard
DEBUG - 2019-11-17 06:59:53 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 06:59:53 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:59:53 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 06:59:53 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:59:53 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 06:59:53 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:59:53 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 06:59:53 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:59:53 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:59:53 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:59:53 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:59:53 --> calling view admin/dashboard
DEBUG - 2019-11-17 06:59:53 --> Total execution time: 0.0570
DEBUG - 2019-11-17 06:59:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:54 --> calling constructor page Audit_Users
DEBUG - 2019-11-17 06:59:54 --> validating session page Audit_Users
DEBUG - 2019-11-17 06:59:54 --> index page Audit_Users
DEBUG - 2019-11-17 06:59:54 --> loading Audit_Trail model...
DEBUG - 2019-11-17 06:59:54 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-17 06:59:54 --> loading getAuditTrail()...
DEBUG - 2019-11-17 06:59:54 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:59:54 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:59:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:59:54 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:59:54 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:59:54 --> calling view admin/auditusers
DEBUG - 2019-11-17 06:59:54 --> Total execution time: 0.0530
DEBUG - 2019-11-17 06:59:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:55 --> Active user constructer called..
DEBUG - 2019-11-17 06:59:55 --> Active_Users index method called...
DEBUG - 2019-11-17 06:59:55 --> Active_Sessions Modem loaded..
DEBUG - 2019-11-17 06:59:55 --> calling get_user_active()
DEBUG - 2019-11-17 06:59:55 --> get_user_active() got called form Active_Session
DEBUG - 2019-11-17 06:59:55 --> number of rows get returned...
DEBUG - 2019-11-17 06:59:55 --> loading configurable model
DEBUG - 2019-11-17 06:59:55 --> calling configurable login for role admin
DEBUG - 2019-11-17 06:59:55 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:59:55 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:59:55 --> result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:59:55 --> calling admin/activeusers
DEBUG - 2019-11-17 06:59:55 --> Total execution time: 0.0640
DEBUG - 2019-11-17 06:59:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 06:59:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 06:59:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 06:59:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 06:59:58 --> calling constructor page Dashboard
DEBUG - 2019-11-17 06:59:58 --> validating session page Dashboard
DEBUG - 2019-11-17 06:59:58 --> index page Dashboard
DEBUG - 2019-11-17 06:59:58 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 06:59:58 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:59:58 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 06:59:58 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:59:58 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 06:59:58 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 06:59:58 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 06:59:58 --> loading Configarable_Login model...
DEBUG - 2019-11-17 06:59:58 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 06:59:58 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 06:59:58 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 06:59:58 --> calling view admin/dashboard
DEBUG - 2019-11-17 06:59:58 --> Total execution time: 0.0580
DEBUG - 2019-11-17 07:00:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:00:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:00:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:00:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:00:00 --> calling constructor page Dashboard
DEBUG - 2019-11-17 07:00:00 --> validating session page Dashboard
DEBUG - 2019-11-17 07:00:00 --> index page Dashboard
DEBUG - 2019-11-17 07:00:00 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 07:00:00 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:00:00 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 07:00:00 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:00:00 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 07:00:00 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:00:00 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 07:00:00 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:00:00 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:00:00 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:00:00 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:00:00 --> calling view admin/dashboard
DEBUG - 2019-11-17 07:00:00 --> Total execution time: 0.0670
DEBUG - 2019-11-17 07:00:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:00:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:00:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:00:05 --> calling constructor page Audit_Users
DEBUG - 2019-11-17 07:00:05 --> validating session page Audit_Users
DEBUG - 2019-11-17 07:00:05 --> index page Audit_Users
DEBUG - 2019-11-17 07:00:05 --> loading Audit_Trail model...
DEBUG - 2019-11-17 07:00:05 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-17 07:00:05 --> loading getAuditTrail()...
DEBUG - 2019-11-17 07:00:05 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:00:05 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:00:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:00:05 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:00:05 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:00:05 --> calling view admin/auditusers
DEBUG - 2019-11-17 07:00:05 --> Total execution time: 0.0670
DEBUG - 2019-11-17 07:00:08 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:00:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:00:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:00:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:00:08 --> Active user constructer called..
DEBUG - 2019-11-17 07:00:08 --> Active_Users index method called...
DEBUG - 2019-11-17 07:00:08 --> Active_Sessions Modem loaded..
DEBUG - 2019-11-17 07:00:08 --> calling get_user_active()
DEBUG - 2019-11-17 07:00:08 --> get_user_active() got called form Active_Session
DEBUG - 2019-11-17 07:00:08 --> number of rows get returned...
DEBUG - 2019-11-17 07:00:08 --> loading configurable model
DEBUG - 2019-11-17 07:00:08 --> calling configurable login for role admin
DEBUG - 2019-11-17 07:00:08 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:00:08 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:00:08 --> result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:00:08 --> calling admin/activeusers
DEBUG - 2019-11-17 07:00:08 --> Total execution time: 0.0620
DEBUG - 2019-11-17 07:00:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:00:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:00:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:00:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:00:11 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 07:00:11 --> validating session page Manage_Users
DEBUG - 2019-11-17 07:00:11 --> index page Manage_Users
DEBUG - 2019-11-17 07:00:11 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 07:00:11 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 07:00:11 --> calling getusersdetails()
DEBUG - 2019-11-17 07:00:11 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:00:11 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:00:11 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:00:11 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:00:11 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:00:11 --> calling view admin/manage_users
DEBUG - 2019-11-17 07:00:11 --> Total execution time: 0.0590
DEBUG - 2019-11-17 07:00:13 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:00:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:00:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:00:14 --> calling constructor page Dashboard
DEBUG - 2019-11-17 07:00:14 --> validating session page Dashboard
DEBUG - 2019-11-17 07:00:14 --> index page Dashboard
DEBUG - 2019-11-17 07:00:14 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 07:00:14 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:00:14 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 07:00:14 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:00:14 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 07:00:14 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:00:14 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 07:00:14 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:00:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:00:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:00:14 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:00:14 --> calling view admin/dashboard
DEBUG - 2019-11-17 07:00:14 --> Total execution time: 0.0580
DEBUG - 2019-11-17 07:01:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:01:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:01:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:01:38 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:01:38 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:01:38 --> index method active session controller
DEBUG - 2019-11-17 07:01:38 --> navigation to active session view
DEBUG - 2019-11-17 07:01:38 --> Total execution time: 0.0630
DEBUG - 2019-11-17 07:01:39 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:01:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:01:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:01:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:01:39 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:01:39 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:01:39 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 07:01:39 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:01:39 --> fetched data from get_datatables model
DEBUG - 2019-11-17 07:01:39 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 07:01:39 --> ajax_list for loop started...
DEBUG - 2019-11-17 07:01:39 --> for loop started to get active sessions...
DEBUG - 2019-11-17 07:01:39 --> initial count =0
DEBUG - 2019-11-17 07:01:39 --> last count=10
DEBUG - 2019-11-17 07:01:39 -->  $_POST['draw']=1
DEBUG - 2019-11-17 07:01:39 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:01:39 -->  recordsTotal=31
DEBUG - 2019-11-17 07:01:39 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:01:39 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:01:39 -->  recordsFiltered=31
DEBUG - 2019-11-17 07:01:39 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:01:39 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:01:39 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:01:39 --> Total execution time: 0.0770
DEBUG - 2019-11-17 07:01:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:01:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:01:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:01:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:01:49 --> calling constructor page Dashboard
DEBUG - 2019-11-17 07:01:49 --> validating session page Dashboard
DEBUG - 2019-11-17 07:01:49 --> index page Dashboard
DEBUG - 2019-11-17 07:01:49 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 07:01:49 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:01:49 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 07:01:49 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:01:49 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 07:01:49 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:01:49 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 07:01:49 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:01:49 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:01:49 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:01:49 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:01:49 --> calling view admin/dashboard
DEBUG - 2019-11-17 07:01:49 --> Total execution time: 0.0590
DEBUG - 2019-11-17 07:01:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:01:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-17 07:01:54 --> 404 Page Not Found: admin/Indexhtml/index
DEBUG - 2019-11-17 07:01:55 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:01:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:01:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:01:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:01:55 --> calling constructor page Dashboard
DEBUG - 2019-11-17 07:01:55 --> validating session page Dashboard
DEBUG - 2019-11-17 07:01:55 --> index page Dashboard
DEBUG - 2019-11-17 07:01:55 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 07:01:55 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:01:55 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 07:01:55 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:01:55 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 07:01:55 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:01:55 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 07:01:55 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:01:55 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:01:55 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:01:55 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:01:55 --> calling view admin/dashboard
DEBUG - 2019-11-17 07:01:55 --> Total execution time: 0.0790
DEBUG - 2019-11-17 07:02:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:02:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:02:09 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:02:09 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:02:09 --> index method active session controller
DEBUG - 2019-11-17 07:02:09 --> navigation to active session view
DEBUG - 2019-11-17 07:02:09 --> Total execution time: 0.0550
DEBUG - 2019-11-17 07:02:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:02:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:02:09 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:02:09 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:02:09 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 07:02:09 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:02:09 --> fetched data from get_datatables model
DEBUG - 2019-11-17 07:02:09 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 07:02:09 --> ajax_list for loop started...
DEBUG - 2019-11-17 07:02:09 --> for loop started to get active sessions...
DEBUG - 2019-11-17 07:02:09 --> initial count =0
DEBUG - 2019-11-17 07:02:09 --> last count=10
DEBUG - 2019-11-17 07:02:09 -->  $_POST['draw']=1
DEBUG - 2019-11-17 07:02:09 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:02:09 -->  recordsTotal=31
DEBUG - 2019-11-17 07:02:09 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:02:09 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:02:09 -->  recordsFiltered=31
DEBUG - 2019-11-17 07:02:09 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:02:09 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:02:09 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:02:09 --> Total execution time: 0.0610
DEBUG - 2019-11-17 07:02:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:02:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:02:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:02:23 --> calling constructor page Audit_Users
DEBUG - 2019-11-17 07:02:23 --> validating session page Audit_Users
DEBUG - 2019-11-17 07:02:23 --> index page Audit_Users
DEBUG - 2019-11-17 07:02:23 --> loading Audit_Trail model...
DEBUG - 2019-11-17 07:02:23 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-17 07:02:23 --> loading getAuditTrail()...
DEBUG - 2019-11-17 07:02:23 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:02:23 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:02:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:02:23 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:02:23 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:02:23 --> calling view admin/auditusers
DEBUG - 2019-11-17 07:02:23 --> Total execution time: 0.0710
DEBUG - 2019-11-17 07:02:24 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:02:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:02:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:02:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:02:24 --> Active user constructer called..
DEBUG - 2019-11-17 07:02:24 --> Active_Users index method called...
DEBUG - 2019-11-17 07:02:24 --> Active_Sessions Modem loaded..
DEBUG - 2019-11-17 07:02:24 --> calling get_user_active()
DEBUG - 2019-11-17 07:02:24 --> get_user_active() got called form Active_Session
DEBUG - 2019-11-17 07:02:24 --> number of rows get returned...
DEBUG - 2019-11-17 07:02:24 --> loading configurable model
DEBUG - 2019-11-17 07:02:24 --> calling configurable login for role admin
DEBUG - 2019-11-17 07:02:24 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:02:24 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:02:24 --> result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:02:24 --> calling admin/activeusers
DEBUG - 2019-11-17 07:02:24 --> Total execution time: 0.0580
DEBUG - 2019-11-17 07:02:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:02:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:02:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:02:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:02:25 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 07:02:25 --> validating session page Manage_Users
DEBUG - 2019-11-17 07:02:25 --> index page Manage_Users
DEBUG - 2019-11-17 07:02:25 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 07:02:25 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 07:02:25 --> calling getusersdetails()
DEBUG - 2019-11-17 07:02:25 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:02:25 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:02:25 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:02:25 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:02:25 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:02:25 --> calling view admin/manage_users
DEBUG - 2019-11-17 07:02:25 --> Total execution time: 0.0700
DEBUG - 2019-11-17 07:02:26 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:02:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:02:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:02:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:02:26 --> calling constructor page Dashboard
DEBUG - 2019-11-17 07:02:26 --> validating session page Dashboard
DEBUG - 2019-11-17 07:02:26 --> index page Dashboard
DEBUG - 2019-11-17 07:02:26 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 07:02:26 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:02:26 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 07:02:26 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:02:26 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 07:02:26 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:02:26 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 07:02:26 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:02:26 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:02:26 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:02:26 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:02:26 --> calling view admin/dashboard
DEBUG - 2019-11-17 07:02:26 --> Total execution time: 0.0580
DEBUG - 2019-11-17 07:03:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:03:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:03:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:03:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:03:45 --> calling constructor page Dashboard
DEBUG - 2019-11-17 07:03:45 --> validating session page Dashboard
DEBUG - 2019-11-17 07:03:45 --> index page Dashboard
DEBUG - 2019-11-17 07:03:45 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 07:03:45 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:03:45 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 07:03:45 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:03:45 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 07:03:45 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:03:45 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 07:03:45 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:03:45 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:03:45 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:03:45 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:03:45 --> calling view admin/dashboard
DEBUG - 2019-11-17 07:03:45 --> Total execution time: 0.0630
DEBUG - 2019-11-17 07:03:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:03:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:03:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:03:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:03:47 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 07:03:47 --> validating session page Manage_Users
DEBUG - 2019-11-17 07:03:47 --> index page Manage_Users
DEBUG - 2019-11-17 07:03:47 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 07:03:47 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 07:03:47 --> calling getusersdetails()
DEBUG - 2019-11-17 07:03:47 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:03:47 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:03:47 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:03:47 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:03:47 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:03:47 --> calling view admin/manage_users
DEBUG - 2019-11-17 07:03:47 --> Total execution time: 0.0690
DEBUG - 2019-11-17 07:03:48 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:03:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:03:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:03:48 --> Active user constructer called..
DEBUG - 2019-11-17 07:03:48 --> Active_Users index method called...
DEBUG - 2019-11-17 07:03:48 --> Active_Sessions Modem loaded..
DEBUG - 2019-11-17 07:03:48 --> calling get_user_active()
DEBUG - 2019-11-17 07:03:48 --> get_user_active() got called form Active_Session
DEBUG - 2019-11-17 07:03:48 --> number of rows get returned...
DEBUG - 2019-11-17 07:03:48 --> loading configurable model
DEBUG - 2019-11-17 07:03:48 --> calling configurable login for role admin
DEBUG - 2019-11-17 07:03:48 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:03:49 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:03:49 --> result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:03:49 --> calling admin/activeusers
DEBUG - 2019-11-17 07:03:49 --> Total execution time: 0.0650
DEBUG - 2019-11-17 07:03:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:03:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:03:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:03:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:03:50 --> calling constructor page Audit_Users
DEBUG - 2019-11-17 07:03:50 --> validating session page Audit_Users
DEBUG - 2019-11-17 07:03:50 --> index page Audit_Users
DEBUG - 2019-11-17 07:03:50 --> loading Audit_Trail model...
DEBUG - 2019-11-17 07:03:50 --> getAuditTrail() got called form Audit_Trail
DEBUG - 2019-11-17 07:03:50 --> loading getAuditTrail()...
DEBUG - 2019-11-17 07:03:50 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:03:50 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:03:50 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:03:50 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:03:50 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:03:50 --> calling view admin/auditusers
DEBUG - 2019-11-17 07:03:50 --> Total execution time: 0.0670
DEBUG - 2019-11-17 07:03:51 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:03:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:03:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:03:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:03:51 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:03:51 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:03:51 --> index method active session controller
DEBUG - 2019-11-17 07:03:51 --> navigation to active session view
DEBUG - 2019-11-17 07:03:51 --> Total execution time: 0.0600
DEBUG - 2019-11-17 07:03:51 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:03:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:03:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:03:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:03:51 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:03:51 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:03:51 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 07:03:51 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:03:51 --> fetched data from get_datatables model
DEBUG - 2019-11-17 07:03:51 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 07:03:51 --> ajax_list for loop started...
DEBUG - 2019-11-17 07:03:51 --> for loop started to get active sessions...
DEBUG - 2019-11-17 07:03:51 --> initial count =0
DEBUG - 2019-11-17 07:03:51 --> last count=10
DEBUG - 2019-11-17 07:03:51 -->  $_POST['draw']=1
DEBUG - 2019-11-17 07:03:51 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:03:51 -->  recordsTotal=31
DEBUG - 2019-11-17 07:03:51 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:03:51 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:03:51 -->  recordsFiltered=31
DEBUG - 2019-11-17 07:03:51 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:03:51 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:03:51 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:03:51 --> Total execution time: 0.0720
DEBUG - 2019-11-17 07:05:26 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:05:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:05:26 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:05:26 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:05:26 --> index method active session controller
DEBUG - 2019-11-17 07:05:26 --> navigation to active session view
DEBUG - 2019-11-17 07:05:26 --> Total execution time: 0.0530
DEBUG - 2019-11-17 07:05:27 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:05:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:05:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:05:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:05:27 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:05:27 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:05:27 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 07:05:27 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:27 --> fetched data from get_datatables model
DEBUG - 2019-11-17 07:05:27 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 07:05:27 --> ajax_list for loop started...
DEBUG - 2019-11-17 07:05:27 --> for loop started to get active sessions...
DEBUG - 2019-11-17 07:05:27 --> initial count =0
DEBUG - 2019-11-17 07:05:27 --> last count=10
DEBUG - 2019-11-17 07:05:27 -->  $_POST['draw']=1
DEBUG - 2019-11-17 07:05:27 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:05:27 -->  recordsTotal=31
DEBUG - 2019-11-17 07:05:27 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:05:27 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:27 -->  recordsFiltered=31
DEBUG - 2019-11-17 07:05:27 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:05:27 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:05:27 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:27 --> Total execution time: 0.0780
DEBUG - 2019-11-17 07:05:46 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:05:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:05:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:05:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:05:46 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:05:46 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:05:46 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 07:05:46 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:46 --> fetched data from get_datatables model
DEBUG - 2019-11-17 07:05:46 --> $_POST['start'] value = 10
DEBUG - 2019-11-17 07:05:46 --> ajax_list for loop started...
DEBUG - 2019-11-17 07:05:46 --> for loop started to get active sessions...
DEBUG - 2019-11-17 07:05:46 --> initial count =10
DEBUG - 2019-11-17 07:05:46 --> last count=20
DEBUG - 2019-11-17 07:05:46 -->  $_POST['draw']=2
DEBUG - 2019-11-17 07:05:46 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:05:46 -->  recordsTotal=31
DEBUG - 2019-11-17 07:05:46 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:05:46 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:46 -->  recordsFiltered=31
DEBUG - 2019-11-17 07:05:46 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:05:46 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:05:46 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:46 --> Total execution time: 0.0630
DEBUG - 2019-11-17 07:05:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:05:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:05:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:05:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:05:47 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:05:47 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:05:47 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 07:05:47 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:47 --> fetched data from get_datatables model
DEBUG - 2019-11-17 07:05:47 --> $_POST['start'] value = 20
DEBUG - 2019-11-17 07:05:47 --> ajax_list for loop started...
DEBUG - 2019-11-17 07:05:47 --> for loop started to get active sessions...
DEBUG - 2019-11-17 07:05:47 --> initial count =20
DEBUG - 2019-11-17 07:05:47 --> last count=30
DEBUG - 2019-11-17 07:05:47 -->  $_POST['draw']=3
DEBUG - 2019-11-17 07:05:47 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:05:47 -->  recordsTotal=31
DEBUG - 2019-11-17 07:05:47 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:05:47 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:47 -->  recordsFiltered=31
DEBUG - 2019-11-17 07:05:47 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:05:47 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:05:47 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:47 --> Total execution time: 0.0630
DEBUG - 2019-11-17 07:05:48 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:05:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:05:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:05:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:05:48 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:05:48 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:05:48 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 07:05:48 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:48 --> fetched data from get_datatables model
DEBUG - 2019-11-17 07:05:48 --> $_POST['start'] value = 30
DEBUG - 2019-11-17 07:05:48 --> ajax_list for loop started...
DEBUG - 2019-11-17 07:05:48 --> for loop started to get active sessions...
DEBUG - 2019-11-17 07:05:48 --> initial count =30
DEBUG - 2019-11-17 07:05:48 --> last count=31
DEBUG - 2019-11-17 07:05:48 -->  $_POST['draw']=4
DEBUG - 2019-11-17 07:05:48 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:05:48 -->  recordsTotal=31
DEBUG - 2019-11-17 07:05:48 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:05:48 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:48 -->  recordsFiltered=31
DEBUG - 2019-11-17 07:05:48 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:05:48 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:05:48 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:05:48 --> Total execution time: 0.0430
DEBUG - 2019-11-17 07:05:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:05:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:05:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:05:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:05:52 --> calling constructor page Dashboard
DEBUG - 2019-11-17 07:05:52 --> validating session page Dashboard
DEBUG - 2019-11-17 07:05:52 --> index page Dashboard
DEBUG - 2019-11-17 07:05:52 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 07:05:52 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:05:52 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 07:05:52 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:05:52 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 07:05:52 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:05:52 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 07:05:52 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:05:52 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:05:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:05:52 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:05:52 --> calling view admin/dashboard
DEBUG - 2019-11-17 07:05:52 --> Total execution time: 0.0630
DEBUG - 2019-11-17 07:08:21 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:08:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:08:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:08:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:08:21 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 07:08:21 --> validating session page Manage_Users
DEBUG - 2019-11-17 07:08:21 --> index page Manage_Users
DEBUG - 2019-11-17 07:08:21 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 07:08:21 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 07:08:21 --> calling getusersdetails()
DEBUG - 2019-11-17 07:08:21 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:08:21 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:08:21 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:08:21 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:08:21 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:08:21 --> calling view admin/manage_users
DEBUG - 2019-11-17 07:08:21 --> Total execution time: 0.0620
DEBUG - 2019-11-17 07:11:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:11:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:11:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:11:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:11:47 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:11:47 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:11:47 --> index method active session controller
DEBUG - 2019-11-17 07:11:47 --> navigation to active session view
DEBUG - 2019-11-17 07:11:47 --> Total execution time: 0.0680
DEBUG - 2019-11-17 07:11:48 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:11:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:11:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:11:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:11:48 --> Customer_model constructer got called..
DEBUG - 2019-11-17 07:11:48 --> Active_Sessions constructer got called..
DEBUG - 2019-11-17 07:11:48 --> get_datatables() got called form Customers_model
DEBUG - 2019-11-17 07:11:48 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:11:48 --> fetched data from get_datatables model
DEBUG - 2019-11-17 07:11:48 --> $_POST['start'] value = 0
DEBUG - 2019-11-17 07:11:48 --> ajax_list for loop started...
DEBUG - 2019-11-17 07:11:48 --> for loop started to get active sessions...
DEBUG - 2019-11-17 07:11:48 --> initial count =0
DEBUG - 2019-11-17 07:11:48 --> last count=10
DEBUG - 2019-11-17 07:11:48 -->  $_POST['draw']=1
DEBUG - 2019-11-17 07:11:48 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:11:48 -->  recordsTotal=31
DEBUG - 2019-11-17 07:11:48 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:11:48 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:11:48 -->  recordsFiltered=31
DEBUG - 2019-11-17 07:11:48 --> count_all() got called form Customers_model
DEBUG - 2019-11-17 07:11:48 --> count_filtered() got called form Customers_model
DEBUG - 2019-11-17 07:11:48 --> _get_datatables_query() got called form Customers_model
DEBUG - 2019-11-17 07:11:48 --> Total execution time: 0.0720
DEBUG - 2019-11-17 07:13:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:13:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:13:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:13:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:13:10 --> calling constructor page Dashboard
DEBUG - 2019-11-17 07:13:10 --> validating session page Dashboard
DEBUG - 2019-11-17 07:13:10 --> index page Dashboard
DEBUG - 2019-11-17 07:13:10 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 07:13:10 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:13:10 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 07:13:10 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:13:10 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 07:13:10 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 07:13:10 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 07:13:10 --> loading Configarable_Login model...
DEBUG - 2019-11-17 07:13:10 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 07:13:10 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 07:13:10 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 07:13:10 --> calling view admin/dashboard
DEBUG - 2019-11-17 07:13:10 --> Total execution time: 0.0690
DEBUG - 2019-11-17 07:42:16 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:42:16 --> No URI present. Default controller set.
DEBUG - 2019-11-17 07:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:42:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:42:16 --> Total execution time: 0.0800
DEBUG - 2019-11-17 07:53:37 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:53:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:53:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:53:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-11-17 07:53:37 --> Severity: error --> Exception: Unable to locate the model you have specified: Total_duplicates_username C:\xampp\htdocs\ciproject\system\core\Loader.php 348
DEBUG - 2019-11-17 07:54:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:54:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:54:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:54:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:54:18 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 07:54:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'COUNT(user_id) as total
FROM `tblusers`
GROUP BY `emailId`
HAVING `total` > 1' at line 1 - Invalid query: SELECT `firstName`, `lastName`, emailId COUNT(user_id) as total
FROM `tblusers`
GROUP BY `emailId`
HAVING `total` > 1
DEBUG - 2019-11-17 07:54:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:54:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:54:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:54:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:54:49 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 07:54:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'COUNT(id) as total
FROM `tblusers`
GROUP BY `emailId`
HAVING `total` > 1' at line 1 - Invalid query: SELECT `firstName`, `lastName`, emailId COUNT(id) as total
FROM `tblusers`
GROUP BY `emailId`
HAVING `total` > 1
DEBUG - 2019-11-17 07:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:54:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:54:50 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 07:54:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'COUNT(id) as total
FROM `tblusers`
GROUP BY `emailId`
HAVING `total` > 1' at line 1 - Invalid query: SELECT `firstName`, `lastName`, emailId COUNT(id) as total
FROM `tblusers`
GROUP BY `emailId`
HAVING `total` > 1
DEBUG - 2019-11-17 07:54:51 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:54:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:54:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:54:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:54:51 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 07:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'COUNT(id) as total
FROM `tblusers`
GROUP BY `emailId`
HAVING `total` > 1' at line 1 - Invalid query: SELECT `firstName`, `lastName`, emailId COUNT(id) as total
FROM `tblusers`
GROUP BY `emailId`
HAVING `total` > 1
DEBUG - 2019-11-17 07:55:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:55:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:55:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:55:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:55:05 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 07:55:05 --> Total execution time: 0.0820
DEBUG - 2019-11-17 07:55:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:55:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:55:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:55:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:55:45 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 07:55:45 --> Total execution time: 0.0580
DEBUG - 2019-11-17 07:56:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 07:56:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 07:56:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 07:56:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 07:56:25 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 07:56:25 --> Total execution time: 0.0490
DEBUG - 2019-11-17 08:08:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:08:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:08:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:08:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:08:33 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:08:33 --> Total execution time: 0.0570
DEBUG - 2019-11-17 08:17:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:17:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:17:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:17:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:17:59 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:17:59 --> Total execution time: 0.0640
DEBUG - 2019-11-17 08:17:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:17:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:17:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:17:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:17:59 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:17:59 --> Total execution time: 0.0500
DEBUG - 2019-11-17 08:18:29 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:18:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:18:29 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:18:29 --> Total execution time: 0.0680
DEBUG - 2019-11-17 08:20:44 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:20:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:20:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:20:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:20:44 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:20:44 --> validating session page Dashboard
DEBUG - 2019-11-17 08:20:44 --> index page Dashboard
DEBUG - 2019-11-17 08:20:44 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:20:44 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:20:44 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:20:44 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:20:44 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:20:44 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:20:44 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:20:44 --> finding total numbers of active users...
ERROR - 2019-11-17 08:20:44 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 28
DEBUG - 2019-11-17 08:20:44 --> Admin_Dashboard_Model total_active_sessions=
DEBUG - 2019-11-17 08:20:44 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 08:20:44 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 30
DEBUG - 2019-11-17 08:20:44 --> Admin_Dashboard_Model total_dups=Array
DEBUG - 2019-11-17 08:20:44 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:20:44 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:20:44 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:20:44 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:20:44 --> calling view admin/dashboard
ERROR - 2019-11-17 08:20:44 --> Severity: Warning --> htmlentities() expects parameter 1 to be string, array given C:\xampp\htdocs\ciproject\application\views\admin\dashboard.php 97
DEBUG - 2019-11-17 08:20:44 --> Total execution time: 0.1080
DEBUG - 2019-11-17 08:22:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:22:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:22:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:22:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:22:40 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:22:40 --> validating session page Dashboard
DEBUG - 2019-11-17 08:22:40 --> index page Dashboard
DEBUG - 2019-11-17 08:22:40 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:22:40 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:40 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:22:40 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:40 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:22:40 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:40 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:22:40 --> finding total numbers of active users...
ERROR - 2019-11-17 08:22:40 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 28
DEBUG - 2019-11-17 08:22:40 --> Admin_Dashboard_Model total_active_sessions=
DEBUG - 2019-11-17 08:22:40 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 08:22:40 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 32
DEBUG - 2019-11-17 08:22:40 --> Admin_Dashboard_Model total_dups=Array
DEBUG - 2019-11-17 08:22:40 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:22:40 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:22:40 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:22:40 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:22:40 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:22:40 --> Total execution time: 0.0700
DEBUG - 2019-11-17 08:22:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:22:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:22:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:22:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:22:41 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:22:41 --> validating session page Dashboard
DEBUG - 2019-11-17 08:22:41 --> index page Dashboard
DEBUG - 2019-11-17 08:22:41 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:22:41 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:41 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:22:41 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:41 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:22:41 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:41 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:22:41 --> finding total numbers of active users...
ERROR - 2019-11-17 08:22:41 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 28
DEBUG - 2019-11-17 08:22:41 --> Admin_Dashboard_Model total_active_sessions=
DEBUG - 2019-11-17 08:22:41 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 08:22:41 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 32
DEBUG - 2019-11-17 08:22:41 --> Admin_Dashboard_Model total_dups=Array
DEBUG - 2019-11-17 08:22:41 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:22:41 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:22:41 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:22:41 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:22:41 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:22:41 --> Total execution time: 0.0750
DEBUG - 2019-11-17 08:22:42 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:22:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:22:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:22:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:22:42 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:22:42 --> validating session page Dashboard
DEBUG - 2019-11-17 08:22:42 --> index page Dashboard
DEBUG - 2019-11-17 08:22:42 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:22:42 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:42 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:22:42 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:42 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:22:42 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:42 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:22:42 --> finding total numbers of active users...
ERROR - 2019-11-17 08:22:42 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 28
DEBUG - 2019-11-17 08:22:42 --> Admin_Dashboard_Model total_active_sessions=
DEBUG - 2019-11-17 08:22:42 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 08:22:42 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 32
DEBUG - 2019-11-17 08:22:42 --> Admin_Dashboard_Model total_dups=Array
DEBUG - 2019-11-17 08:22:42 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:22:42 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:22:42 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:22:42 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:22:42 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:22:42 --> Total execution time: 0.0650
DEBUG - 2019-11-17 08:22:42 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:22:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:22:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:22:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:22:42 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:22:42 --> validating session page Dashboard
DEBUG - 2019-11-17 08:22:42 --> index page Dashboard
DEBUG - 2019-11-17 08:22:42 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:22:42 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:42 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:22:42 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:42 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:22:42 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:42 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:22:42 --> finding total numbers of active users...
ERROR - 2019-11-17 08:22:42 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 28
DEBUG - 2019-11-17 08:22:42 --> Admin_Dashboard_Model total_active_sessions=
DEBUG - 2019-11-17 08:22:42 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 08:22:42 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 32
DEBUG - 2019-11-17 08:22:42 --> Admin_Dashboard_Model total_dups=Array
DEBUG - 2019-11-17 08:22:42 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:22:42 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:22:42 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:22:42 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:22:42 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:22:42 --> Total execution time: 0.0670
DEBUG - 2019-11-17 08:22:43 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:22:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:22:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:22:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:22:43 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:22:43 --> validating session page Dashboard
DEBUG - 2019-11-17 08:22:43 --> index page Dashboard
DEBUG - 2019-11-17 08:22:43 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:22:43 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:43 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:22:43 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:43 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:22:43 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:43 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:22:43 --> finding total numbers of active users...
ERROR - 2019-11-17 08:22:43 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 28
DEBUG - 2019-11-17 08:22:43 --> Admin_Dashboard_Model total_active_sessions=
DEBUG - 2019-11-17 08:22:43 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 08:22:43 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 32
DEBUG - 2019-11-17 08:22:43 --> Admin_Dashboard_Model total_dups=Array
DEBUG - 2019-11-17 08:22:43 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:22:43 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:22:43 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:22:43 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:22:43 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:22:43 --> Total execution time: 0.0780
DEBUG - 2019-11-17 08:22:51 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:22:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:22:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:22:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:22:51 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:22:51 --> validating session page Dashboard
DEBUG - 2019-11-17 08:22:51 --> index page Dashboard
DEBUG - 2019-11-17 08:22:51 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:22:51 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:51 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:22:51 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:51 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:22:51 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:51 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:22:51 --> finding total numbers of active users...
ERROR - 2019-11-17 08:22:51 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 28
DEBUG - 2019-11-17 08:22:51 --> Admin_Dashboard_Model total_active_sessions=
DEBUG - 2019-11-17 08:22:51 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 08:22:51 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 32
DEBUG - 2019-11-17 08:22:51 --> Admin_Dashboard_Model total_dups=Array
DEBUG - 2019-11-17 08:22:51 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:22:51 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:22:51 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:22:51 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:22:51 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:22:51 --> Total execution time: 0.0900
DEBUG - 2019-11-17 08:22:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:22:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:22:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:22:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:22:52 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:22:52 --> validating session page Dashboard
DEBUG - 2019-11-17 08:22:52 --> index page Dashboard
DEBUG - 2019-11-17 08:22:52 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:22:52 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:52 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:22:52 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:52 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:22:52 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:22:52 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:22:52 --> finding total numbers of active users...
ERROR - 2019-11-17 08:22:52 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 28
DEBUG - 2019-11-17 08:22:52 --> Admin_Dashboard_Model total_active_sessions=
DEBUG - 2019-11-17 08:22:52 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 08:22:52 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 32
DEBUG - 2019-11-17 08:22:52 --> Admin_Dashboard_Model total_dups=Array
DEBUG - 2019-11-17 08:22:52 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:22:52 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:22:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:22:52 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:22:52 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:22:52 --> Total execution time: 0.0640
DEBUG - 2019-11-17 08:23:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:23:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:23:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:23:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:23:54 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:23:54 --> validating session page Dashboard
DEBUG - 2019-11-17 08:23:54 --> index page Dashboard
DEBUG - 2019-11-17 08:23:54 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:23:54 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:23:54 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:23:54 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:23:54 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:23:54 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:23:54 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:23:54 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:23:54 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:23:54 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:23:54 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:23:54 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:23:54 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:23:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:23:54 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:23:54 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:23:54 --> Total execution time: 0.0740
DEBUG - 2019-11-17 08:25:12 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:25:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:25:12 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:25:12 --> validating session page Dashboard
DEBUG - 2019-11-17 08:25:12 --> index page Dashboard
DEBUG - 2019-11-17 08:25:12 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:25:12 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:25:12 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:25:12 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:25:12 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:25:12 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:25:12 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:25:12 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:25:12 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:25:12 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:25:12 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:25:12 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:25:12 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:25:12 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:25:12 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:25:12 --> calling view admin/dashboard
ERROR - 2019-11-17 08:25:12 --> Severity: Notice --> Trying to get property 'total' of non-object C:\xampp\htdocs\ciproject\application\views\admin\dashboard.php 97
DEBUG - 2019-11-17 08:25:12 --> Total execution time: 0.0650
DEBUG - 2019-11-17 08:25:29 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:25:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:25:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:25:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:25:29 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:25:29 --> validating session page Dashboard
DEBUG - 2019-11-17 08:25:29 --> index page Dashboard
DEBUG - 2019-11-17 08:25:29 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:25:29 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:25:29 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:25:29 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:25:29 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:25:29 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:25:29 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:25:29 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:25:29 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:25:29 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:25:29 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:25:29 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:25:29 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:25:29 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:25:29 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:25:29 --> calling view admin/dashboard
ERROR - 2019-11-17 08:25:29 --> Severity: Warning --> Illegal string offset 'total' C:\xampp\htdocs\ciproject\application\views\admin\dashboard.php 97
DEBUG - 2019-11-17 08:25:29 --> Total execution time: 0.0610
DEBUG - 2019-11-17 08:25:31 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:25:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:25:31 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:25:31 --> validating session page Dashboard
DEBUG - 2019-11-17 08:25:31 --> index page Dashboard
DEBUG - 2019-11-17 08:25:31 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:25:31 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:25:31 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:25:31 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:25:31 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:25:31 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:25:31 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:25:31 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:25:31 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:25:31 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:25:31 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:25:31 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:25:31 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:25:31 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:25:31 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:25:31 --> calling view admin/dashboard
ERROR - 2019-11-17 08:25:31 --> Severity: Warning --> Illegal string offset 'total' C:\xampp\htdocs\ciproject\application\views\admin\dashboard.php 97
DEBUG - 2019-11-17 08:25:31 --> Total execution time: 0.0620
DEBUG - 2019-11-17 08:25:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:25:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:25:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:25:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:25:57 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:25:57 --> Total execution time: 0.0700
DEBUG - 2019-11-17 08:26:12 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:26:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:26:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:26:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:26:12 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:26:12 --> Total execution time: 0.0570
DEBUG - 2019-11-17 08:26:34 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:26:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:26:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:26:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:26:34 --> Total execution time: 0.0620
DEBUG - 2019-11-17 08:26:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:26:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:26:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:26:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:26:45 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:26:45 --> Total execution time: 0.0660
DEBUG - 2019-11-17 08:27:36 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:27:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:27:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:27:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:27:37 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:27:37 --> validating session page Dashboard
DEBUG - 2019-11-17 08:27:37 --> index page Dashboard
DEBUG - 2019-11-17 08:27:37 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:27:37 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:27:37 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:27:37 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:27:37 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:27:37 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:27:37 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:27:37 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:27:37 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:27:37 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:27:37 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:27:37 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:27:37 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:27:37 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:27:37 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:27:37 --> calling view admin/dashboard
ERROR - 2019-11-17 08:27:37 --> Severity: Warning --> Illegal string offset 'total' C:\xampp\htdocs\ciproject\application\views\admin\dashboard.php 97
DEBUG - 2019-11-17 08:27:37 --> Total execution time: 0.0770
DEBUG - 2019-11-17 08:27:37 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:27:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:27:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:27:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:27:37 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:27:37 --> validating session page Dashboard
DEBUG - 2019-11-17 08:27:37 --> index page Dashboard
DEBUG - 2019-11-17 08:27:37 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:27:37 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:27:37 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:27:37 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:27:37 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:27:37 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:27:37 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:27:37 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:27:37 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:27:37 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:27:37 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:27:37 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:27:37 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:27:37 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:27:37 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:27:37 --> calling view admin/dashboard
ERROR - 2019-11-17 08:27:37 --> Severity: Warning --> Illegal string offset 'total' C:\xampp\htdocs\ciproject\application\views\admin\dashboard.php 97
DEBUG - 2019-11-17 08:27:37 --> Total execution time: 0.0730
DEBUG - 2019-11-17 08:28:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:28:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:28:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:28:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:28:05 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:28:05 --> validating session page Dashboard
DEBUG - 2019-11-17 08:28:05 --> index page Dashboard
DEBUG - 2019-11-17 08:28:05 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:28:05 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:28:05 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:28:05 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:28:05 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:28:05 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:28:05 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:28:05 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:28:05 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:28:05 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:28:05 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:28:05 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:28:05 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:28:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:28:05 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:28:05 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:28:05 --> Total execution time: 0.0580
DEBUG - 2019-11-17 08:29:02 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:29:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:29:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:29:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:29:03 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:29:03 --> validating session page Dashboard
DEBUG - 2019-11-17 08:29:03 --> index page Dashboard
DEBUG - 2019-11-17 08:29:03 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:29:03 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:29:03 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:29:03 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:29:03 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:29:03 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:29:03 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:29:03 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:29:03 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:29:03 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:29:03 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:29:03 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:29:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:29:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:29:03 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:29:03 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:29:03 --> Total execution time: 0.0630
DEBUG - 2019-11-17 08:30:39 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:30:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:30:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:30:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:30:39 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:30:39 --> validating session page Dashboard
DEBUG - 2019-11-17 08:30:39 --> index page Dashboard
DEBUG - 2019-11-17 08:30:39 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:30:39 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:30:39 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:30:39 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:30:39 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:30:39 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:30:39 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:30:39 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:30:39 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:30:39 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:30:39 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:30:39 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:30:39 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:30:39 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:30:39 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:30:39 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:30:39 --> Total execution time: 0.0620
DEBUG - 2019-11-17 08:31:15 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:31:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:31:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:31:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:31:15 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:31:15 --> validating session page Dashboard
DEBUG - 2019-11-17 08:31:15 --> index page Dashboard
DEBUG - 2019-11-17 08:31:15 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:31:15 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:31:15 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:31:15 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:31:15 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:31:15 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:31:15 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:31:15 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:31:15 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:31:15 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:31:15 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:31:15 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:31:15 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:31:15 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:31:15 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:31:15 --> calling view admin/dashboard
ERROR - 2019-11-17 08:31:15 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\ciproject\application\views\admin\dashboard.php 116
DEBUG - 2019-11-17 08:31:15 --> Total execution time: 0.0640
DEBUG - 2019-11-17 08:32:26 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:32:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:32:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:32:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:32:26 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:32:26 --> validating session page Dashboard
DEBUG - 2019-11-17 08:32:26 --> index page Dashboard
DEBUG - 2019-11-17 08:32:26 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:32:26 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:32:26 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:32:26 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:32:26 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:32:26 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:32:26 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:32:26 --> finding total numbers of active users...
ERROR - 2019-11-17 08:32:26 --> Severity: Notice --> Trying to get property 'total_active' of non-object C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 28
DEBUG - 2019-11-17 08:32:26 --> Admin_Dashboard_Model total_active_sessions=
DEBUG - 2019-11-17 08:32:26 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:32:26 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:32:26 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:32:26 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:32:26 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:32:26 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:32:26 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:32:26 --> Total execution time: 0.0740
DEBUG - 2019-11-17 08:32:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:32:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:32:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:32:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:32:49 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:32:49 --> Total execution time: 0.0540
DEBUG - 2019-11-17 08:33:22 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:33:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:33:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:33:22 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:33:22 --> validating session page Dashboard
DEBUG - 2019-11-17 08:33:22 --> index page Dashboard
DEBUG - 2019-11-17 08:33:22 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:33:22 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:33:22 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:33:22 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:33:22 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:33:22 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:33:22 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:33:22 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:33:22 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:33:22 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:33:22 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:33:22 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:33:22 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:33:22 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:33:22 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:33:22 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:33:22 --> Total execution time: 0.0760
DEBUG - 2019-11-17 08:34:40 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 08:34:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 08:34:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 08:34:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 08:34:40 --> calling constructor page Dashboard
DEBUG - 2019-11-17 08:34:40 --> validating session page Dashboard
DEBUG - 2019-11-17 08:34:40 --> index page Dashboard
DEBUG - 2019-11-17 08:34:40 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 08:34:40 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:34:40 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 08:34:40 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:34:40 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 08:34:40 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 08:34:40 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 08:34:40 --> finding total numbers of active users...
DEBUG - 2019-11-17 08:34:40 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 08:34:40 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 08:34:40 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 08:34:40 --> loading Configarable_Login model...
DEBUG - 2019-11-17 08:34:40 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 08:34:40 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 08:34:40 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 08:34:40 --> calling view admin/dashboard
DEBUG - 2019-11-17 08:34:40 --> Total execution time: 0.0750
DEBUG - 2019-11-17 09:09:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:09:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:09:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:09:23 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:09:23 --> validating session page Dashboard
DEBUG - 2019-11-17 09:09:23 --> index page Dashboard
DEBUG - 2019-11-17 09:09:23 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:09:23 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:09:23 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:09:23 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:09:23 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:09:23 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:09:23 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:09:23 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:09:23 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:09:23 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:09:23 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:09:23 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:09:23 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:09:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:09:23 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:09:23 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:09:23 --> Total execution time: 0.0650
DEBUG - 2019-11-17 09:11:19 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:11:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:11:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:11:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:11:19 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:11:19 --> validating session page Dashboard
DEBUG - 2019-11-17 09:11:19 --> index page Dashboard
DEBUG - 2019-11-17 09:11:19 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:11:19 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:11:19 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:11:19 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:11:19 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:11:19 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:11:19 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:11:19 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:11:19 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:11:19 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:11:19 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:11:19 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:11:19 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:11:19 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:11:19 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:11:19 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:11:19 --> Total execution time: 0.0630
DEBUG - 2019-11-17 09:12:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:12:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:12:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:12:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:12:07 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:12:07 --> validating session page Dashboard
DEBUG - 2019-11-17 09:12:07 --> index page Dashboard
DEBUG - 2019-11-17 09:12:07 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:12:07 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:12:07 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:12:07 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:12:07 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:12:07 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:12:07 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:12:07 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:12:07 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:12:07 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:12:07 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:12:07 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:12:07 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:12:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:12:07 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:12:07 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:12:07 --> Total execution time: 0.0580
DEBUG - 2019-11-17 09:12:08 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:12:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:12:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:12:08 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:12:08 --> validating session page Dashboard
DEBUG - 2019-11-17 09:12:08 --> index page Dashboard
DEBUG - 2019-11-17 09:12:08 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:12:08 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:12:08 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:12:08 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:12:08 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:12:08 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:12:08 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:12:08 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:12:08 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:12:08 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:12:08 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:12:08 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:12:08 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:12:08 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:12:08 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:12:08 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:12:08 --> Total execution time: 0.0650
DEBUG - 2019-11-17 09:19:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:19:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:19:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:19:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:19:28 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:19:28 --> Total execution time: 0.0540
DEBUG - 2019-11-17 09:19:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:19:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:19:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:19:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:19:46 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:19:46 --> Total execution time: 0.0800
DEBUG - 2019-11-17 09:21:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:21:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:21:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:21:59 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:21:59 --> validating session page Dashboard
DEBUG - 2019-11-17 09:21:59 --> index page Dashboard
DEBUG - 2019-11-17 09:21:59 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:21:59 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:21:59 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:21:59 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:21:59 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:21:59 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:21:59 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:21:59 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:21:59 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:21:59 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:21:59 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:21:59 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:21:59 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:21:59 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:21:59 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:21:59 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:21:59 --> Total execution time: 0.0710
DEBUG - 2019-11-17 09:22:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:22:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:22:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:22:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:22:25 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:22:25 --> validating session page Dashboard
DEBUG - 2019-11-17 09:22:25 --> index page Dashboard
DEBUG - 2019-11-17 09:22:25 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:22:25 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:22:25 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:22:25 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:22:25 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:22:25 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:22:25 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:22:25 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:22:25 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:22:25 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:22:25 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:22:25 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:22:25 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:22:25 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:22:25 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:22:25 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:22:25 --> Total execution time: 0.0590
DEBUG - 2019-11-17 09:29:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:29:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:29:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:29:49 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:29:49 --> validating session page Dashboard
DEBUG - 2019-11-17 09:29:49 --> index page Dashboard
DEBUG - 2019-11-17 09:29:49 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:29:49 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:29:49 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:29:49 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:29:49 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:29:49 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:29:49 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:29:49 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:29:49 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:29:49 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:29:49 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:29:49 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:29:49 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:29:49 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:29:49 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:29:49 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:29:49 --> Total execution time: 0.0710
DEBUG - 2019-11-17 09:31:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:31:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:31:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:31:33 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:31:33 --> validating session page Dashboard
DEBUG - 2019-11-17 09:31:33 --> index page Dashboard
DEBUG - 2019-11-17 09:31:33 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:31:33 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:31:33 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:31:33 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:31:33 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:31:33 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:31:33 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:31:33 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:31:33 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:31:33 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:31:33 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:31:33 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:31:33 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:31:33 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:31:33 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:31:33 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:31:33 --> Total execution time: 0.0650
DEBUG - 2019-11-17 09:33:39 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:33:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:33:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:33:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:33:39 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:33:39 --> validating session page Dashboard
DEBUG - 2019-11-17 09:33:39 --> index page Dashboard
DEBUG - 2019-11-17 09:33:39 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:33:39 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:33:39 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:33:39 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:33:39 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:33:39 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:33:39 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:33:40 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:33:40 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:33:40 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:33:40 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:33:40 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:33:40 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:33:40 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:33:40 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:33:40 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:33:40 --> Total execution time: 0.0700
DEBUG - 2019-11-17 09:34:49 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:34:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:34:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:34:49 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:34:49 --> validating session page Dashboard
DEBUG - 2019-11-17 09:34:49 --> index page Dashboard
DEBUG - 2019-11-17 09:34:49 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:34:49 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:34:49 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:34:49 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:34:49 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:34:49 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:34:49 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:34:49 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:34:49 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:34:49 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:34:49 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:34:49 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:34:49 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:34:49 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:34:49 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:34:49 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:34:49 --> Total execution time: 0.0790
DEBUG - 2019-11-17 09:36:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:36:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:36:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:36:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:36:04 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:36:04 --> validating session page Dashboard
DEBUG - 2019-11-17 09:36:04 --> index page Dashboard
DEBUG - 2019-11-17 09:36:04 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:36:04 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:04 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:36:04 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:04 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:36:04 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:04 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:36:04 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:36:04 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:36:04 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:36:04 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:36:04 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:36:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:36:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:36:04 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:36:04 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:36:04 --> Total execution time: 0.0820
DEBUG - 2019-11-17 09:36:55 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:36:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:36:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:36:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:36:55 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:36:55 --> validating session page Dashboard
DEBUG - 2019-11-17 09:36:55 --> index page Dashboard
DEBUG - 2019-11-17 09:36:55 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:36:55 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:55 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:36:55 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:55 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:36:55 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:55 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:36:55 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:36:55 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:36:55 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:36:55 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:36:55 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:36:55 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:36:55 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:36:55 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:36:55 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:36:55 --> Total execution time: 0.0670
DEBUG - 2019-11-17 09:36:56 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:36:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:36:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:36:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:36:56 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:36:56 --> validating session page Dashboard
DEBUG - 2019-11-17 09:36:56 --> index page Dashboard
DEBUG - 2019-11-17 09:36:56 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:36:56 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:56 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:36:56 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:56 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:36:56 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:56 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:36:56 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:36:56 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:36:56 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:36:56 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:36:56 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:36:56 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:36:56 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:36:56 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:36:56 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:36:56 --> Total execution time: 0.0950
DEBUG - 2019-11-17 09:36:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:36:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:36:57 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:36:57 --> validating session page Dashboard
DEBUG - 2019-11-17 09:36:57 --> index page Dashboard
DEBUG - 2019-11-17 09:36:57 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:36:57 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:57 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:36:57 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:57 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:36:57 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:36:57 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:36:57 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:36:57 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:36:57 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:36:57 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:36:57 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:36:57 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:36:57 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:36:57 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:36:57 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:36:57 --> Total execution time: 0.0700
DEBUG - 2019-11-17 09:37:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:37:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:37:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:37:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:37:03 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:37:03 --> validating session page Dashboard
DEBUG - 2019-11-17 09:37:03 --> index page Dashboard
DEBUG - 2019-11-17 09:37:03 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:37:03 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:37:03 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:37:03 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:37:03 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:37:03 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:37:03 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:37:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:37:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:37:03 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:37:03 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:37:03 --> Total execution time: 0.0820
DEBUG - 2019-11-17 09:37:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:37:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:37:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:37:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:37:03 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:37:03 --> validating session page Dashboard
DEBUG - 2019-11-17 09:37:03 --> index page Dashboard
DEBUG - 2019-11-17 09:37:03 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:37:03 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:37:03 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:37:03 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:37:03 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:37:03 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:37:03 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:37:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:37:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:37:03 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:37:03 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:37:03 --> Total execution time: 0.0690
DEBUG - 2019-11-17 09:37:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:37:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:37:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:37:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:37:03 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:37:03 --> validating session page Dashboard
DEBUG - 2019-11-17 09:37:03 --> index page Dashboard
DEBUG - 2019-11-17 09:37:03 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:37:03 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:37:03 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:37:03 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:37:03 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:37:03 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:37:03 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:37:03 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:37:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:37:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:37:03 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:37:03 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:37:03 --> Total execution time: 0.0770
DEBUG - 2019-11-17 09:37:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:37:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:37:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:37:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:37:04 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:37:04 --> validating session page Dashboard
DEBUG - 2019-11-17 09:37:04 --> index page Dashboard
DEBUG - 2019-11-17 09:37:04 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:37:04 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:04 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:37:04 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:04 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:37:04 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:04 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:37:04 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:37:04 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:37:04 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:37:04 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:37:04 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:37:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:37:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:37:04 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:37:04 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:37:04 --> Total execution time: 0.0640
DEBUG - 2019-11-17 09:37:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:37:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:37:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:37:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:37:04 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:37:04 --> validating session page Dashboard
DEBUG - 2019-11-17 09:37:04 --> index page Dashboard
DEBUG - 2019-11-17 09:37:04 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:37:04 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:04 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:37:04 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:04 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:37:04 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:37:04 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:37:04 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:37:04 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:37:04 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:37:04 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:37:04 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:37:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:37:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:37:04 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:37:04 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:37:04 --> Total execution time: 0.0740
DEBUG - 2019-11-17 09:38:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:38:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:38:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:38:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:38:14 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:38:14 --> validating session page Dashboard
DEBUG - 2019-11-17 09:38:14 --> index page Dashboard
DEBUG - 2019-11-17 09:38:14 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:38:14 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:38:14 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:38:14 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:38:14 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:38:14 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:38:14 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:38:14 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:38:14 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:38:14 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:38:14 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:38:14 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:38:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:38:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:38:14 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:38:14 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:38:14 --> Total execution time: 0.0630
DEBUG - 2019-11-17 09:38:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:38:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:38:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:38:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:38:59 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:38:59 --> validating session page Dashboard
DEBUG - 2019-11-17 09:38:59 --> index page Dashboard
DEBUG - 2019-11-17 09:38:59 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:38:59 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:38:59 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:38:59 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:38:59 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:38:59 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:38:59 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:38:59 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:38:59 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:38:59 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:38:59 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:38:59 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:38:59 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:38:59 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:38:59 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:38:59 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:38:59 --> Total execution time: 0.0640
DEBUG - 2019-11-17 09:39:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:39:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:39:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:39:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:39:38 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:39:38 --> validating session page Dashboard
DEBUG - 2019-11-17 09:39:38 --> index page Dashboard
DEBUG - 2019-11-17 09:39:38 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:39:38 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:39:38 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:39:38 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:39:38 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:39:38 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:39:38 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:39:38 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:39:38 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:39:38 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:39:38 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:39:38 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:39:38 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:39:38 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:39:38 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:39:38 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:39:38 --> Total execution time: 0.0630
DEBUG - 2019-11-17 09:39:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:39:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:39:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:39:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:39:52 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:39:52 --> validating session page Dashboard
DEBUG - 2019-11-17 09:39:52 --> index page Dashboard
DEBUG - 2019-11-17 09:39:52 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:39:52 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:39:52 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:39:52 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:39:52 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:39:52 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:39:52 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:39:52 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:39:52 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:39:52 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:39:52 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:39:52 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:39:52 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:39:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:39:52 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:39:52 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:39:52 --> Total execution time: 0.0770
DEBUG - 2019-11-17 09:43:48 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:43:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:43:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:43:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:43:48 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:43:48 --> validating session page Dashboard
DEBUG - 2019-11-17 09:43:48 --> index page Dashboard
DEBUG - 2019-11-17 09:43:48 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:43:48 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:43:48 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:43:48 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:43:48 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:43:48 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:43:48 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:43:48 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:43:48 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:43:48 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:43:48 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:43:48 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:43:48 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:43:48 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:43:48 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:43:48 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:43:48 --> Total execution time: 0.0820
DEBUG - 2019-11-17 09:46:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:46:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:46:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:46:42 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:46:42 --> validating session page Dashboard
DEBUG - 2019-11-17 09:46:42 --> index page Dashboard
DEBUG - 2019-11-17 09:46:42 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:46:42 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:46:42 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:46:42 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:46:42 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:46:42 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:46:42 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:46:42 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:46:42 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:46:42 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:46:42 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:46:42 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:46:42 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:46:42 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:46:42 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:46:42 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:46:42 --> Total execution time: 0.0790
DEBUG - 2019-11-17 09:46:43 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:46:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:46:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:46:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:46:43 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:46:43 --> validating session page Dashboard
DEBUG - 2019-11-17 09:46:43 --> index page Dashboard
DEBUG - 2019-11-17 09:46:43 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:46:43 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:46:43 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:46:43 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:46:43 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:46:43 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:46:43 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:46:43 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:46:43 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:46:43 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:46:43 --> Admin_Dashboard_Model total_dups=Array
(
    [0] => stdClass Object
        (
            [firstName] => Niraj
            [lastName] => Mhatre
            [emailId] => nirajmhatre89
            [total] => 4
        )

)

DEBUG - 2019-11-17 09:46:43 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:46:43 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:46:43 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:46:43 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:46:43 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:46:43 --> Total execution time: 0.0620
DEBUG - 2019-11-17 09:52:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:52:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:52:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:52:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:52:05 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:52:05 --> validating session page Dashboard
DEBUG - 2019-11-17 09:52:05 --> index page Dashboard
DEBUG - 2019-11-17 09:52:05 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:52:05 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:52:05 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:52:05 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:52:05 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:52:05 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:52:05 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:52:05 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:52:05 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:52:05 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 09:52:05 --> Severity: Notice --> Undefined index: total C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 31
DEBUG - 2019-11-17 09:52:05 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 09:52:05 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:52:05 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:52:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:52:05 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:52:05 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:52:05 --> Total execution time: 0.0680
DEBUG - 2019-11-17 09:52:32 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:52:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:52:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:52:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:52:32 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:52:32 --> validating session page Dashboard
DEBUG - 2019-11-17 09:52:32 --> index page Dashboard
DEBUG - 2019-11-17 09:52:32 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:52:32 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:52:32 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:52:32 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:52:32 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:52:32 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:52:32 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:52:32 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:52:32 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:52:32 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 09:52:32 --> Severity: Notice --> Trying to get property 'total' of non-object C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 31
DEBUG - 2019-11-17 09:52:32 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 09:52:32 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:52:32 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:52:32 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:52:32 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:52:32 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:52:32 --> Total execution time: 0.0720
DEBUG - 2019-11-17 09:52:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:52:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:52:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:52:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:52:33 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:52:33 --> validating session page Dashboard
DEBUG - 2019-11-17 09:52:33 --> index page Dashboard
DEBUG - 2019-11-17 09:52:33 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:52:33 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:52:33 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:52:33 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:52:33 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:52:33 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:52:33 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:52:33 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:52:33 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:52:33 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 09:52:33 --> Severity: Notice --> Trying to get property 'total' of non-object C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 31
DEBUG - 2019-11-17 09:52:33 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 09:52:33 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:52:33 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:52:33 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:52:33 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:52:33 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:52:33 --> Total execution time: 0.0660
DEBUG - 2019-11-17 09:54:32 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:54:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:54:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:54:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:54:32 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:54:32 --> validating session page Dashboard
DEBUG - 2019-11-17 09:54:32 --> index page Dashboard
DEBUG - 2019-11-17 09:54:32 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:54:32 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:54:32 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:54:32 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:54:32 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:54:32 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:54:32 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:54:32 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:54:32 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:54:32 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 09:54:32 --> Severity: Notice --> Undefined index: total C:\xampp\htdocs\ciproject\application\controllers\admin\Dashboard.php 31
DEBUG - 2019-11-17 09:54:32 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 09:54:32 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:54:32 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:54:32 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:54:32 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:54:32 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:54:32 --> Total execution time: 0.0750
DEBUG - 2019-11-17 09:56:51 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:56:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:56:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:56:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:56:51 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:56:51 --> validating session page Dashboard
DEBUG - 2019-11-17 09:56:51 --> index page Dashboard
DEBUG - 2019-11-17 09:56:51 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:56:51 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:56:51 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:56:51 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:56:51 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:56:51 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:56:51 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:56:51 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:56:51 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:56:51 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:56:51 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 09:56:51 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:56:51 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:56:51 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:56:51 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:56:51 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:56:51 --> Total execution time: 0.0690
DEBUG - 2019-11-17 09:57:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:57:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:57:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:57:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:57:54 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:57:54 --> validating session page Dashboard
DEBUG - 2019-11-17 09:57:54 --> index page Dashboard
DEBUG - 2019-11-17 09:57:54 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:57:54 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:57:54 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:57:54 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:57:54 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:57:54 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:57:54 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:57:54 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:57:54 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:57:54 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:57:54 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 09:57:54 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:57:54 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:57:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:57:54 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:57:54 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:57:54 --> Total execution time: 0.0730
DEBUG - 2019-11-17 09:57:56 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:57:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:57:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:57:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:57:56 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:57:56 --> validating session page Dashboard
DEBUG - 2019-11-17 09:57:56 --> index page Dashboard
DEBUG - 2019-11-17 09:57:56 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:57:56 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:57:56 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:57:56 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:57:56 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:57:56 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:57:56 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:57:56 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:57:56 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:57:56 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:57:56 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 09:57:56 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:57:56 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:57:56 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:57:56 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:57:56 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:57:56 --> Total execution time: 0.0660
DEBUG - 2019-11-17 09:57:57 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:57:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:57:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:57:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:57:57 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:57:57 --> validating session page Dashboard
DEBUG - 2019-11-17 09:57:57 --> index page Dashboard
DEBUG - 2019-11-17 09:57:57 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:57:57 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:57:57 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:57:57 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:57:57 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:57:57 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:57:57 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:57:57 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:57:57 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:57:57 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:57:57 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 09:57:57 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:57:57 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:57:57 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:57:57 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:57:57 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:57:57 --> Total execution time: 0.0740
DEBUG - 2019-11-17 09:58:34 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:58:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:58:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:58:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:58:34 --> logout() called form login controller.... loading admin/login
DEBUG - 2019-11-17 09:58:34 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:58:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:58:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:58:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:58:34 --> index method Login
DEBUG - 2019-11-17 09:58:34 --> checking request type form or redirect
DEBUG - 2019-11-17 09:58:34 --> admin login view loaded...
DEBUG - 2019-11-17 09:58:34 --> Total execution time: 0.0510
DEBUG - 2019-11-17 09:58:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:58:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:58:41 --> index method Login
DEBUG - 2019-11-17 09:58:41 --> checking request type form or redirect
DEBUG - 2019-11-17 09:58:41 --> form post method
DEBUG - 2019-11-17 09:58:41 --> loading model Admin_Login_Model
DEBUG - 2019-11-17 09:58:41 --> calling validatelogin()
DEBUG - 2019-11-17 09:58:41 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-17 09:58:41 --> Accounts details =1
DEBUG - 2019-11-17 09:58:41 --> account id found
DEBUG - 2019-11-17 09:58:41 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-17 09:58:41 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 09:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 09:58:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 09:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 09:58:41 --> calling constructor page Dashboard
DEBUG - 2019-11-17 09:58:41 --> validating session page Dashboard
DEBUG - 2019-11-17 09:58:41 --> index page Dashboard
DEBUG - 2019-11-17 09:58:41 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 09:58:41 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:58:41 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 09:58:41 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:58:41 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 09:58:41 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 09:58:41 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 09:58:41 --> finding total numbers of active users...
DEBUG - 2019-11-17 09:58:41 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 09:58:41 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 09:58:41 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 09:58:41 --> loading Configarable_Login model...
DEBUG - 2019-11-17 09:58:41 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 09:58:41 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 09:58:41 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 09:58:41 --> calling view admin/dashboard
DEBUG - 2019-11-17 09:58:41 --> Total execution time: 0.0590
DEBUG - 2019-11-17 10:03:45 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:03:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:03:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:03:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:03:45 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 10:03:45 --> Total execution time: 0.0600
DEBUG - 2019-11-17 10:04:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:04:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:04:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:04:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:04:29 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 10:04:29 --> Severity: Notice --> Undefined index: total C:\xampp\htdocs\ciproject\application\controllers\Test.php 62
DEBUG - 2019-11-17 10:04:29 --> Total execution time: 0.1970
DEBUG - 2019-11-17 10:05:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:05:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:05:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:05:33 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 10:05:33 --> Severity: Notice --> Undefined index: total C:\xampp\htdocs\ciproject\application\controllers\Test.php 62
DEBUG - 2019-11-17 10:05:33 --> Total execution time: 0.0540
DEBUG - 2019-11-17 10:05:34 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:05:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:05:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:05:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:05:34 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 10:05:34 --> Severity: Notice --> Undefined index: total C:\xampp\htdocs\ciproject\application\controllers\Test.php 62
DEBUG - 2019-11-17 10:05:34 --> Total execution time: 0.0570
DEBUG - 2019-11-17 10:05:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:05:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:05:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:05:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:05:47 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 10:05:47 --> Total execution time: 0.0540
DEBUG - 2019-11-17 10:06:13 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:06:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:06:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:06:13 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 10:06:13 --> Severity: Notice --> Trying to get property 'total' of non-object C:\xampp\htdocs\ciproject\application\controllers\Test.php 62
DEBUG - 2019-11-17 10:06:13 --> Total execution time: 0.0580
DEBUG - 2019-11-17 10:07:00 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:07:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-17 10:07:00 --> 404 Page Not Found: Assests/uploads
DEBUG - 2019-11-17 10:07:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:07:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:07:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:07:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:07:10 --> Upload_users constructer got called..
DEBUG - 2019-11-17 10:07:10 --> calling view upload_users
DEBUG - 2019-11-17 10:07:10 --> Total execution time: 0.0510
DEBUG - 2019-11-17 10:07:19 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:07:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:07:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:07:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:07:19 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 10:07:19 --> Severity: Notice --> Undefined index: total C:\xampp\htdocs\ciproject\application\controllers\Test.php 62
DEBUG - 2019-11-17 10:07:19 --> Total execution time: 0.0510
DEBUG - 2019-11-17 10:07:31 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:07:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:07:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:07:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:07:31 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 10:07:31 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\ciproject\application\controllers\Test.php 62
DEBUG - 2019-11-17 10:07:43 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:07:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:07:43 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 10:07:43 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\ciproject\application\controllers\Test.php 62
DEBUG - 2019-11-17 10:07:43 --> Total execution time: 0.0670
DEBUG - 2019-11-17 10:10:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:10:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:10:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:10:28 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 10:10:28 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\ciproject\application\controllers\Test.php 64
DEBUG - 2019-11-17 10:10:53 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 10:10:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 10:10:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 10:10:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 10:10:53 --> finding total numbers of duplicate users...
ERROR - 2019-11-17 10:10:53 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\ciproject\application\controllers\Test.php 64
DEBUG - 2019-11-17 17:51:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:51:18 --> No URI present. Default controller set.
DEBUG - 2019-11-17 17:51:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:51:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:51:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:51:18 --> Total execution time: 0.0820
DEBUG - 2019-11-17 17:51:36 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:51:36 --> No URI present. Default controller set.
DEBUG - 2019-11-17 17:51:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:51:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:51:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:51:36 --> Total execution time: 0.0570
DEBUG - 2019-11-17 17:51:37 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:51:37 --> No URI present. Default controller set.
DEBUG - 2019-11-17 17:51:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:51:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:51:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:51:37 --> Total execution time: 0.0570
DEBUG - 2019-11-17 17:51:48 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:51:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:51:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:51:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:51:49 --> index method Login
DEBUG - 2019-11-17 17:51:49 --> checking request type form or redirect
DEBUG - 2019-11-17 17:51:49 --> admin login view loaded...
DEBUG - 2019-11-17 17:51:49 --> Total execution time: 0.0960
DEBUG - 2019-11-17 17:51:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:51:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:51:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:51:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:51:58 --> index method Login
DEBUG - 2019-11-17 17:51:58 --> checking request type form or redirect
DEBUG - 2019-11-17 17:51:58 --> form post method
DEBUG - 2019-11-17 17:51:58 --> loading model Admin_Login_Model
DEBUG - 2019-11-17 17:51:58 --> calling validatelogin()
DEBUG - 2019-11-17 17:51:58 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-17 17:51:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:51:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:51:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:51:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:51:58 --> Accounts details =1
DEBUG - 2019-11-17 17:51:58 --> account id found
DEBUG - 2019-11-17 17:51:58 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-17 17:51:58 --> index method Login
DEBUG - 2019-11-17 17:51:58 --> checking request type form or redirect
DEBUG - 2019-11-17 17:51:58 --> form post method
DEBUG - 2019-11-17 17:51:58 --> loading model Admin_Login_Model
DEBUG - 2019-11-17 17:51:58 --> calling validatelogin()
DEBUG - 2019-11-17 17:51:58 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-17 17:51:58 --> Accounts details =1
DEBUG - 2019-11-17 17:51:58 --> account id found
DEBUG - 2019-11-17 17:51:58 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-17 17:51:58 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:51:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:51:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:51:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:51:59 --> calling constructor page Dashboard
DEBUG - 2019-11-17 17:51:59 --> validating session page Dashboard
DEBUG - 2019-11-17 17:51:59 --> index page Dashboard
DEBUG - 2019-11-17 17:51:59 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 17:51:59 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 17:51:59 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 17:51:59 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 17:51:59 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 17:51:59 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 17:51:59 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 17:51:59 --> finding total numbers of active users...
DEBUG - 2019-11-17 17:51:59 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 17:51:59 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 17:51:59 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 17:51:59 --> loading Configarable_Login model...
DEBUG - 2019-11-17 17:51:59 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 17:51:59 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 17:51:59 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 17:51:59 --> calling view admin/dashboard
DEBUG - 2019-11-17 17:51:59 --> Total execution time: 0.1200
DEBUG - 2019-11-17 17:52:19 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:52:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:52:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:52:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:52:19 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 17:52:19 --> validating session page Manage_Users
DEBUG - 2019-11-17 17:52:19 --> index page Manage_Users
DEBUG - 2019-11-17 17:52:19 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 17:52:19 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 17:52:19 --> calling getusersdetails()
DEBUG - 2019-11-17 17:52:19 --> loading Configarable_Login model...
DEBUG - 2019-11-17 17:52:19 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 17:52:19 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 17:52:19 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 17:52:19 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 17:52:19 --> calling view admin/manage_users
DEBUG - 2019-11-17 17:52:19 --> Total execution time: 0.0600
DEBUG - 2019-11-17 17:52:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:52:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:52:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:52:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:52:29 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 17:52:29 --> validating session page Manage_Users
DEBUG - 2019-11-17 17:52:29 --> loading Configarable_Login model...
DEBUG - 2019-11-17 17:52:29 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 17:52:29 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 17:52:29 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

ERROR - 2019-11-17 17:52:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 47
DEBUG - 2019-11-17 17:52:29 --> loading configurable menu with result=Array
DEBUG - 2019-11-17 17:52:29 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 17:52:29 --> calling getuserdetail()
DEBUG - 2019-11-17 17:52:29 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 17:52:29 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 17:52:29 --> Total execution time: 0.1010
DEBUG - 2019-11-17 17:54:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:54:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:54:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:54:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:54:10 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 17:54:10 --> validating session page Manage_Users
DEBUG - 2019-11-17 17:54:10 --> loading Configarable_Login model...
DEBUG - 2019-11-17 17:54:10 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 17:54:10 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 17:54:10 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 17:54:10 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 17:54:10 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 17:54:10 --> calling getuserdetail()
DEBUG - 2019-11-17 17:54:10 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 17:54:10 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 17:54:10 --> Total execution time: 0.0610
DEBUG - 2019-11-17 17:59:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 17:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 17:59:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 17:59:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 17:59:23 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 17:59:23 --> validating session page Manage_Users
DEBUG - 2019-11-17 17:59:23 --> loading Configarable_Login model...
DEBUG - 2019-11-17 17:59:23 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 17:59:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 17:59:23 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 17:59:23 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 17:59:23 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 17:59:23 --> calling getuserdetail()
DEBUG - 2019-11-17 17:59:23 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 17:59:23 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 17:59:23 --> Total execution time: 0.0610
DEBUG - 2019-11-17 18:00:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:00:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:00:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:00:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:00:04 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:00:04 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:00:04 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:00:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:00:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:00:04 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:00:04 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:00:04 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:00:04 --> calling getuserdetail()
DEBUG - 2019-11-17 18:00:04 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:00:04 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:00:04 --> Total execution time: 0.0600
DEBUG - 2019-11-17 18:05:10 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:05:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:05:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:05:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:05:10 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:05:10 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:05:10 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:05:10 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:05:10 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:05:10 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:05:10 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:05:10 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:05:10 --> calling getuserdetail()
DEBUG - 2019-11-17 18:05:10 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:05:10 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:05:10 --> Total execution time: 0.0740
DEBUG - 2019-11-17 18:05:37 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:05:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:05:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:05:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:05:37 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:05:37 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:05:37 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:05:37 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:05:37 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:05:37 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:05:37 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:05:37 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:05:37 --> calling getuserdetail()
DEBUG - 2019-11-17 18:05:37 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:05:37 --> calling view admin/getuserdetails
ERROR - 2019-11-17 18:05:37 --> Severity: error --> Exception: Call to undefined function form_file() C:\xampp\htdocs\ciproject\application\views\admin\getuserdetails.php 133
DEBUG - 2019-11-17 18:07:05 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:07:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:07:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:07:05 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:07:05 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:07:05 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:07:05 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:07:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:07:05 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:07:05 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:07:05 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:07:05 --> calling getuserdetail()
DEBUG - 2019-11-17 18:07:05 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:07:05 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:07:05 --> Total execution time: 0.0700
DEBUG - 2019-11-17 18:30:27 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:30:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:30:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:30:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:30:27 --> calling constructor page Dashboard
DEBUG - 2019-11-17 18:30:27 --> validating session page Dashboard
DEBUG - 2019-11-17 18:30:27 --> index page Dashboard
DEBUG - 2019-11-17 18:30:27 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 18:30:27 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 18:30:27 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 18:30:27 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 18:30:27 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 18:30:27 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 18:30:27 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 18:30:27 --> finding total numbers of active users...
DEBUG - 2019-11-17 18:30:27 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 18:30:27 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 18:30:27 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 18:30:27 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:30:27 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:30:27 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:30:27 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:30:27 --> calling view admin/dashboard
DEBUG - 2019-11-17 18:30:27 --> Total execution time: 0.0650
DEBUG - 2019-11-17 18:30:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:30:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:30:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:30:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:30:28 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:30:28 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:30:28 --> index page Manage_Users
DEBUG - 2019-11-17 18:30:28 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 18:30:28 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:30:28 --> calling getusersdetails()
DEBUG - 2019-11-17 18:30:28 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:30:28 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:30:28 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:30:28 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:30:28 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:30:28 --> calling view admin/manage_users
DEBUG - 2019-11-17 18:30:28 --> Total execution time: 0.0630
DEBUG - 2019-11-17 18:30:31 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:30:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:30:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:30:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:30:31 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:30:31 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:30:31 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:30:31 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:30:31 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:30:31 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:30:31 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:30:31 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:30:31 --> calling getuserdetail()
DEBUG - 2019-11-17 18:30:31 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:30:31 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:30:31 --> Total execution time: 0.0600
DEBUG - 2019-11-17 18:35:50 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:35:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:35:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:35:50 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:35:50 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:35:50 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:35:50 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:35:50 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:35:50 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:35:50 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:35:50 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:35:50 --> calling getuserdetail()
DEBUG - 2019-11-17 18:35:50 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:35:50 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:35:50 --> Total execution time: 0.0660
DEBUG - 2019-11-17 18:36:12 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:36:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:36:12 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:36:12 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:36:12 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:36:12 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:36:12 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:36:12 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:12 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:12 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:36:12 --> calling getuserdetail()
DEBUG - 2019-11-17 18:36:12 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:36:12 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:36:12 --> Total execution time: 0.0590
DEBUG - 2019-11-17 18:36:13 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:36:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:36:13 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:36:13 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:36:13 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:36:13 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:36:13 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:36:13 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:13 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:13 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:36:13 --> calling getuserdetail()
DEBUG - 2019-11-17 18:36:13 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:36:13 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:36:13 --> Total execution time: 0.0590
DEBUG - 2019-11-17 18:36:27 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:36:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:36:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:36:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:36:27 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:36:27 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:36:27 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:36:27 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:36:27 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:36:27 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:27 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:27 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:36:27 --> calling getuserdetail()
DEBUG - 2019-11-17 18:36:27 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:36:27 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:36:27 --> Total execution time: 0.0560
DEBUG - 2019-11-17 18:36:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:36:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:36:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:36:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:36:28 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:36:28 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:36:28 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:36:28 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:36:28 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:36:28 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:28 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:28 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:36:28 --> calling getuserdetail()
DEBUG - 2019-11-17 18:36:28 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:36:28 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:36:28 --> Total execution time: 0.0590
DEBUG - 2019-11-17 18:36:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:36:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:36:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:36:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:36:28 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:36:28 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:36:28 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:36:28 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:36:28 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:36:28 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:28 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:28 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:36:28 --> calling getuserdetail()
DEBUG - 2019-11-17 18:36:28 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:36:28 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:36:28 --> Total execution time: 0.0620
DEBUG - 2019-11-17 18:36:28 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:36:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:36:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:36:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:36:28 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:36:28 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:36:28 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:36:28 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:36:28 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:36:28 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:28 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:36:28 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:36:28 --> calling getuserdetail()
DEBUG - 2019-11-17 18:36:28 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:36:28 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:36:28 --> Total execution time: 0.0600
DEBUG - 2019-11-17 18:36:34 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:36:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-17 18:36:34 --> 404 Page Not Found: Manage_Users/store
DEBUG - 2019-11-17 18:37:04 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:37:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:37:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:37:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:37:04 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:37:04 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:37:04 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:37:04 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:37:04 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:37:04 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:37:04 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:37:04 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:37:04 --> calling getuserdetail()
DEBUG - 2019-11-17 18:37:04 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:37:04 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:37:04 --> Total execution time: 0.0700
DEBUG - 2019-11-17 18:37:06 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:37:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:37:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:37:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:37:06 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:37:06 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:37:06 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:37:06 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:37:06 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:37:06 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:37:06 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:37:06 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:37:06 --> calling getuserdetail()
DEBUG - 2019-11-17 18:37:06 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:37:06 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:37:06 --> Total execution time: 0.0600
DEBUG - 2019-11-17 18:37:11 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:37:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:37:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:37:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:37:11 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:37:11 --> validating session page Manage_Users
ERROR - 2019-11-17 18:37:11 --> The upload path does not appear to be valid.
ERROR - 2019-11-17 18:37:11 --> Severity: error --> Exception: Call to undefined function getuserdetail() C:\xampp\htdocs\ciproject\application\controllers\admin\Manage_Users.php 80
DEBUG - 2019-11-17 18:39:07 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:39:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:39:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:39:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:39:07 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:39:07 --> validating session page Manage_Users
ERROR - 2019-11-17 18:39:07 --> The upload path does not appear to be valid.
DEBUG - 2019-11-17 18:39:07 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:39:07 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:39:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:39:07 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:39:07 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:39:07 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:39:07 --> calling getuserdetail()
DEBUG - 2019-11-17 18:39:07 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:39:07 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:39:07 --> Total execution time: 0.0750
DEBUG - 2019-11-17 18:39:47 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:39:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:39:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:39:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:39:47 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:39:47 --> validating session page Manage_Users
ERROR - 2019-11-17 18:39:47 --> The upload path does not appear to be valid.
DEBUG - 2019-11-17 18:39:47 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:39:47 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:39:47 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:39:47 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:39:47 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:39:47 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:39:47 --> calling getuserdetail()
DEBUG - 2019-11-17 18:39:47 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:39:47 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:39:47 --> Total execution time: 0.0660
DEBUG - 2019-11-17 18:40:14 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:40:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:40:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:40:14 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:40:14 --> validating session page Manage_Users
ERROR - 2019-11-17 18:40:14 --> The upload path does not appear to be valid.
DEBUG - 2019-11-17 18:40:14 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:40:14 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:40:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:40:14 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:40:14 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:40:14 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:40:14 --> calling getuserdetail()
DEBUG - 2019-11-17 18:40:14 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:40:14 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:40:14 --> Total execution time: 0.0740
DEBUG - 2019-11-17 18:41:22 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:41:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:41:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:41:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:41:22 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:41:22 --> validating session page Manage_Users
ERROR - 2019-11-17 18:41:22 --> The upload path does not appear to be valid.
DEBUG - 2019-11-17 18:41:22 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:41:22 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:41:22 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:41:22 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:41:22 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:41:22 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:41:22 --> calling getuserdetail()
DEBUG - 2019-11-17 18:41:22 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:41:22 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:41:22 --> Total execution time: 0.0750
DEBUG - 2019-11-17 18:41:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:41:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:41:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:41:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:41:52 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:41:52 --> validating session page Manage_Users
ERROR - 2019-11-17 18:41:52 --> The upload path does not appear to be valid.
DEBUG - 2019-11-17 18:41:52 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:41:52 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:41:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:41:52 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:41:52 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:41:52 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:41:52 --> calling getuserdetail()
DEBUG - 2019-11-17 18:41:52 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:41:52 --> calling view admin/getuserdetails
ERROR - 2019-11-17 18:41:52 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\views\admin\getuserdetails.php 122
DEBUG - 2019-11-17 18:41:52 --> Total execution time: 0.0840
DEBUG - 2019-11-17 18:43:23 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:43:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:43:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:43:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:43:23 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:43:23 --> validating session page Manage_Users
ERROR - 2019-11-17 18:43:23 --> The upload path does not appear to be valid.
DEBUG - 2019-11-17 18:43:23 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:43:23 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:43:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:43:23 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:43:23 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:43:23 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:43:23 --> calling getuserdetail()
DEBUG - 2019-11-17 18:43:23 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:43:23 --> calling view admin/getuserdetails
ERROR - 2019-11-17 18:43:23 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\views\admin\getuserdetails.php 122
DEBUG - 2019-11-17 18:43:23 --> Total execution time: 0.0720
DEBUG - 2019-11-17 18:43:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:43:30 --> No URI present. Default controller set.
DEBUG - 2019-11-17 18:43:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:43:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:43:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:43:30 --> Total execution time: 0.0540
DEBUG - 2019-11-17 18:43:30 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:43:30 --> No URI present. Default controller set.
DEBUG - 2019-11-17 18:43:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:43:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:43:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:43:30 --> Total execution time: 0.0930
DEBUG - 2019-11-17 18:43:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:43:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:43:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:43:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:43:33 --> index method Login
DEBUG - 2019-11-17 18:43:33 --> checking request type form or redirect
DEBUG - 2019-11-17 18:43:33 --> admin login view loaded...
DEBUG - 2019-11-17 18:43:33 --> Total execution time: 0.0750
DEBUG - 2019-11-17 18:43:48 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:43:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:43:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:43:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:43:48 --> index method Login
DEBUG - 2019-11-17 18:43:48 --> checking request type form or redirect
DEBUG - 2019-11-17 18:43:48 --> form post method
DEBUG - 2019-11-17 18:43:48 --> loading model Admin_Login_Model
DEBUG - 2019-11-17 18:43:48 --> calling validatelogin()
DEBUG - 2019-11-17 18:43:48 --> validatelogin() got called form Admin_Login_Model
DEBUG - 2019-11-17 18:43:48 --> Accounts details =1
DEBUG - 2019-11-17 18:43:48 --> account id found
DEBUG - 2019-11-17 18:43:48 --> validate login successfully.... loading admin/dashboard
DEBUG - 2019-11-17 18:43:48 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:43:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:43:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:43:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:43:48 --> calling constructor page Dashboard
DEBUG - 2019-11-17 18:43:48 --> validating session page Dashboard
DEBUG - 2019-11-17 18:43:48 --> index page Dashboard
DEBUG - 2019-11-17 18:43:48 --> loading Admin_Dashboard_Model model...
DEBUG - 2019-11-17 18:43:48 --> totalcount() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 18:43:48 --> Admin_Dashboard_Model totalcount=10
DEBUG - 2019-11-17 18:43:48 --> countlastsevendays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 18:43:48 --> Admin_Dashboard_Model sevendayscount=4
DEBUG - 2019-11-17 18:43:48 --> countthirtydays() got called form Admin_Dashboard_Model
DEBUG - 2019-11-17 18:43:48 --> Admin_Dashboard_Model thirtydayscount=4
DEBUG - 2019-11-17 18:43:48 --> finding total numbers of active users...
DEBUG - 2019-11-17 18:43:48 --> Admin_Dashboard_Model total_active_sessions=7
DEBUG - 2019-11-17 18:43:48 --> finding total numbers of duplicate users...
DEBUG - 2019-11-17 18:43:48 --> Admin_Dashboard_Model total_dups=
DEBUG - 2019-11-17 18:43:48 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:43:48 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:43:48 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:43:48 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:43:48 --> calling view admin/dashboard
DEBUG - 2019-11-17 18:43:48 --> Total execution time: 0.0640
DEBUG - 2019-11-17 18:43:52 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:43:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:43:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:43:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:43:52 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:43:52 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:43:52 --> index page Manage_Users
DEBUG - 2019-11-17 18:43:52 --> loading model ManageUsers_Model
DEBUG - 2019-11-17 18:43:52 --> getusersdetails() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:43:52 --> calling getusersdetails()
DEBUG - 2019-11-17 18:43:52 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:43:52 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:43:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:43:52 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:43:52 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:43:52 --> calling view admin/manage_users
DEBUG - 2019-11-17 18:43:52 --> Total execution time: 0.0670
DEBUG - 2019-11-17 18:43:54 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:43:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:43:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:43:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:43:54 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:43:54 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:43:54 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:43:54 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:43:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:43:54 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:43:54 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:43:54 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:43:54 --> calling getuserdetail()
DEBUG - 2019-11-17 18:43:54 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:43:54 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:43:54 --> Total execution time: 0.0580
DEBUG - 2019-11-17 18:44:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:44:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:44:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:44:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:44:03 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:44:03 --> validating session page Manage_Users
ERROR - 2019-11-17 18:44:03 --> The upload path does not appear to be valid.
DEBUG - 2019-11-17 18:44:03 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:44:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:44:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:44:03 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:44:03 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:44:03 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:44:03 --> calling getuserdetail()
DEBUG - 2019-11-17 18:44:03 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:44:03 --> calling view admin/getuserdetails
ERROR - 2019-11-17 18:44:03 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\views\admin\getuserdetails.php 122
DEBUG - 2019-11-17 18:44:03 --> Total execution time: 0.0730
DEBUG - 2019-11-17 18:44:03 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:44:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:44:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:44:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:44:03 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:44:03 --> validating session page Manage_Users
ERROR - 2019-11-17 18:44:03 --> The upload path does not appear to be valid.
DEBUG - 2019-11-17 18:44:03 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:44:03 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:44:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:44:03 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:44:03 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:44:03 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:44:03 --> calling getuserdetail()
DEBUG - 2019-11-17 18:44:03 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:44:03 --> calling view admin/getuserdetails
ERROR - 2019-11-17 18:44:03 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ciproject\application\views\admin\getuserdetails.php 122
DEBUG - 2019-11-17 18:44:03 --> Total execution time: 0.0630
DEBUG - 2019-11-17 18:44:33 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:44:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:44:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:44:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:44:33 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:44:33 --> validating session page Manage_Users
ERROR - 2019-11-17 18:44:33 --> The upload path does not appear to be valid.
DEBUG - 2019-11-17 18:44:33 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:44:33 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:44:33 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:44:33 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:44:33 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:44:33 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:44:33 --> calling getuserdetail()
DEBUG - 2019-11-17 18:44:33 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:44:33 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:44:33 --> Total execution time: 0.0660
DEBUG - 2019-11-17 18:46:59 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:46:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:46:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:46:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:46:59 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:46:59 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:46:59 --> Total execution time: 0.1470
DEBUG - 2019-11-17 18:47:09 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:47:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-17 18:47:09 --> 404 Page Not Found: Images/Tulips.jpg
DEBUG - 2019-11-17 18:47:25 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:47:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:47:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:47:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:47:25 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:47:25 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:47:25 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:47:25 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:47:25 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:47:25 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:47:25 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:47:25 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:47:25 --> calling getuserdetail()
DEBUG - 2019-11-17 18:47:25 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:47:25 --> calling view admin/getuserdetails
ERROR - 2019-11-17 18:47:25 --> Severity: Notice --> Trying to get property 'error' of non-object C:\xampp\htdocs\ciproject\application\views\admin\getuserdetails.php 122
DEBUG - 2019-11-17 18:47:25 --> Total execution time: 0.0960
DEBUG - 2019-11-17 18:47:38 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:47:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:47:38 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:47:38 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:47:38 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:47:38 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:47:38 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:47:38 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:47:38 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:47:38 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:47:38 --> calling getuserdetail()
DEBUG - 2019-11-17 18:47:38 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:47:38 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:47:38 --> Total execution time: 0.0590
DEBUG - 2019-11-17 18:47:46 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:47:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:47:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:47:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:47:46 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:47:46 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:47:46 --> Total execution time: 0.0690
DEBUG - 2019-11-17 18:49:12 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:49:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:49:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:49:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:49:13 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:49:13 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:49:13 --> Total execution time: 0.0740
DEBUG - 2019-11-17 18:49:18 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:49:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-17 18:49:18 --> 404 Page Not Found: Assests/uploads
DEBUG - 2019-11-17 18:50:20 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:50:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-17 18:50:20 --> 404 Page Not Found: Assests/uploads
DEBUG - 2019-11-17 18:50:21 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:50:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-17 18:50:21 --> 404 Page Not Found: Assests/uploads
DEBUG - 2019-11-17 18:50:24 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:50:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:50:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:50:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:50:24 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:50:24 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:50:24 --> loading Configarable_Login model...
DEBUG - 2019-11-17 18:50:24 --> calling countlastsevendays() method for role=ADMIN
DEBUG - 2019-11-17 18:50:24 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-11-17 18:50:24 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:50:24 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 5
            [page_name] => Dashboard
            [page_link] => admin/Dashboard
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 6
            [page_name] => Users
            [page_link] => admin/Manage_Users
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMIN
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 7
            [page_name] => Active Users
            [page_link] => admin/Active_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 8
            [page_name] => Audit
            [page_link] => admin/Audit_Users
            [page_status] => A
            [page_create_ts] => 2019-09-22 22:53:09
            [page_role] => ADMIN
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-folder
        )

    [4] => stdClass Object
        (
            [page_id] => 9
            [page_name] => Active Session
            [page_link] => admin/Active_Sessions
            [page_status] => A
            [page_create_ts] => 2019-11-01 09:24:52
            [page_role] => ADMIN
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-11-17 18:50:24 --> loading ManageUsers_Model model...
DEBUG - 2019-11-17 18:50:24 --> calling getuserdetail()
DEBUG - 2019-11-17 18:50:24 --> getuserdetail() got called form ManageUsers_Model
DEBUG - 2019-11-17 18:50:24 --> calling view admin/getuserdetails
DEBUG - 2019-11-17 18:50:24 --> Total execution time: 0.0980
DEBUG - 2019-11-17 18:50:27 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:50:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-11-17 18:50:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2019-11-17 18:50:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-11-17 18:50:27 --> calling constructor page Manage_Users
DEBUG - 2019-11-17 18:50:27 --> validating session page Manage_Users
DEBUG - 2019-11-17 18:50:27 --> Total execution time: 0.0670
DEBUG - 2019-11-17 18:50:31 --> UTF-8 Support Enabled
DEBUG - 2019-11-17 18:50:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-11-17 18:50:31 --> 404 Page Not Found: Assests/uploads
