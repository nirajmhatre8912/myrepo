<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-12-12 05:42:37 --> Config Class Initialized
INFO - 2019-12-12 05:42:37 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:42:37 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:42:37 --> Utf8 Class Initialized
INFO - 2019-12-12 05:42:37 --> URI Class Initialized
DEBUG - 2019-12-12 05:42:37 --> No URI present. Default controller set.
INFO - 2019-12-12 05:42:37 --> Router Class Initialized
INFO - 2019-12-12 05:42:37 --> Output Class Initialized
INFO - 2019-12-12 05:42:37 --> Security Class Initialized
DEBUG - 2019-12-12 05:42:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:42:37 --> Input Class Initialized
INFO - 2019-12-12 05:42:37 --> Language Class Initialized
INFO - 2019-12-12 05:42:37 --> Loader Class Initialized
INFO - 2019-12-12 05:42:37 --> Helper loaded: html_helper
INFO - 2019-12-12 05:42:37 --> Helper loaded: url_helper
INFO - 2019-12-12 05:42:37 --> Helper loaded: form_helper
INFO - 2019-12-12 05:42:37 --> Database Driver Class Initialized
INFO - 2019-12-12 05:42:37 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:42:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:42:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:42:37 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:42:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:42:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:42:37 --> Controller Class Initialized
INFO - 2019-12-12 05:42:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 05:42:37 --> Final output sent to browser
DEBUG - 2019-12-12 05:42:37 --> Total execution time: 0.2949
INFO - 2019-12-12 05:42:48 --> Config Class Initialized
INFO - 2019-12-12 05:42:48 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:42:48 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:42:48 --> Utf8 Class Initialized
INFO - 2019-12-12 05:42:48 --> URI Class Initialized
INFO - 2019-12-12 05:42:48 --> Router Class Initialized
INFO - 2019-12-12 05:42:48 --> Output Class Initialized
INFO - 2019-12-12 05:42:48 --> Security Class Initialized
DEBUG - 2019-12-12 05:42:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:42:48 --> Input Class Initialized
INFO - 2019-12-12 05:42:48 --> Language Class Initialized
INFO - 2019-12-12 05:42:48 --> Loader Class Initialized
INFO - 2019-12-12 05:42:48 --> Helper loaded: html_helper
INFO - 2019-12-12 05:42:48 --> Helper loaded: url_helper
INFO - 2019-12-12 05:42:48 --> Helper loaded: form_helper
INFO - 2019-12-12 05:42:48 --> Database Driver Class Initialized
INFO - 2019-12-12 05:42:48 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:42:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:42:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:42:48 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:42:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:42:48 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:42:48 --> Controller Class Initialized
INFO - 2019-12-12 05:42:48 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 05:42:48 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 05:42:48 --> getAuth method got called...
DEBUG - 2019-12-12 05:42:48 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 05:42:48 --> Unreachable block here....
DEBUG - 2019-12-12 05:42:48 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 05:42:48 --> validation result=Array
(
    [id] => 1
    [user_group] => 42
)

DEBUG - 2019-12-12 05:42:48 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 05:42:49 -->  ldap login success
INFO - 2019-12-12 05:42:49 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 05:42:49 --> Role Retrive from DB
DEBUG - 2019-12-12 05:42:49 --> loading model Active_Session
INFO - 2019-12-12 05:42:49 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 05:42:49 --> calling insert_active_session()
DEBUG - 2019-12-12 05:42:49 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 05:42:49 --> insert success
DEBUG - 2019-12-12 05:42:49 --> loading Configarable_Login model...
INFO - 2019-12-12 05:42:49 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 05:42:49 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-12 05:42:49 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 05:42:49 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => VIEWUSER
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
            [page_role] => VIEWUSER
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
            [page_role] => VIEWUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => VIEWUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-12 05:42:49 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 05:42:49 --> loading view public\Dashboard
INFO - 2019-12-12 05:42:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 05:42:49 --> Final output sent to browser
DEBUG - 2019-12-12 05:42:49 --> Total execution time: 1.1084
INFO - 2019-12-12 05:42:54 --> Config Class Initialized
INFO - 2019-12-12 05:42:54 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:42:54 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:42:54 --> Utf8 Class Initialized
INFO - 2019-12-12 05:42:54 --> URI Class Initialized
INFO - 2019-12-12 05:42:54 --> Router Class Initialized
INFO - 2019-12-12 05:42:54 --> Output Class Initialized
INFO - 2019-12-12 05:42:54 --> Security Class Initialized
DEBUG - 2019-12-12 05:42:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:42:54 --> Input Class Initialized
INFO - 2019-12-12 05:42:54 --> Language Class Initialized
INFO - 2019-12-12 05:42:54 --> Loader Class Initialized
INFO - 2019-12-12 05:42:54 --> Helper loaded: html_helper
INFO - 2019-12-12 05:42:54 --> Helper loaded: url_helper
INFO - 2019-12-12 05:42:54 --> Helper loaded: form_helper
INFO - 2019-12-12 05:42:54 --> Database Driver Class Initialized
INFO - 2019-12-12 05:42:54 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:42:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:42:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:42:54 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:42:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:42:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:42:54 --> Controller Class Initialized
DEBUG - 2019-12-12 05:42:54 --> Create_User constructer got called..
DEBUG - 2019-12-12 05:42:54 --> loading configurable menu with result=
INFO - 2019-12-12 05:42:54 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 05:42:54 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 05:42:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 05:42:54 --> Final output sent to browser
DEBUG - 2019-12-12 05:42:54 --> Total execution time: 0.0990
INFO - 2019-12-12 05:46:23 --> Config Class Initialized
INFO - 2019-12-12 05:46:23 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:46:23 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:46:23 --> Utf8 Class Initialized
INFO - 2019-12-12 05:46:23 --> URI Class Initialized
INFO - 2019-12-12 05:46:23 --> Router Class Initialized
INFO - 2019-12-12 05:46:23 --> Output Class Initialized
INFO - 2019-12-12 05:46:23 --> Security Class Initialized
DEBUG - 2019-12-12 05:46:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:46:23 --> Input Class Initialized
INFO - 2019-12-12 05:46:23 --> Language Class Initialized
INFO - 2019-12-12 05:46:23 --> Loader Class Initialized
INFO - 2019-12-12 05:46:23 --> Helper loaded: html_helper
INFO - 2019-12-12 05:46:23 --> Helper loaded: url_helper
INFO - 2019-12-12 05:46:23 --> Helper loaded: form_helper
INFO - 2019-12-12 05:46:23 --> Database Driver Class Initialized
INFO - 2019-12-12 05:46:23 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:46:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:46:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:46:23 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:46:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:46:24 --> Controller Class Initialized
DEBUG - 2019-12-12 05:46:24 --> Create_User constructer got called..
DEBUG - 2019-12-12 05:46:24 --> loading configurable menu with result=
INFO - 2019-12-12 05:46:24 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 05:46:24 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 05:46:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 05:46:24 --> Final output sent to browser
DEBUG - 2019-12-12 05:46:24 --> Total execution time: 0.4658
INFO - 2019-12-12 05:46:27 --> Config Class Initialized
INFO - 2019-12-12 05:46:27 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:46:27 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:46:27 --> Utf8 Class Initialized
INFO - 2019-12-12 05:46:27 --> URI Class Initialized
INFO - 2019-12-12 05:46:27 --> Router Class Initialized
INFO - 2019-12-12 05:46:27 --> Output Class Initialized
INFO - 2019-12-12 05:46:27 --> Security Class Initialized
DEBUG - 2019-12-12 05:46:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:46:27 --> Input Class Initialized
INFO - 2019-12-12 05:46:27 --> Language Class Initialized
INFO - 2019-12-12 05:46:27 --> Loader Class Initialized
INFO - 2019-12-12 05:46:27 --> Helper loaded: html_helper
INFO - 2019-12-12 05:46:27 --> Helper loaded: url_helper
INFO - 2019-12-12 05:46:27 --> Helper loaded: form_helper
INFO - 2019-12-12 05:46:27 --> Database Driver Class Initialized
INFO - 2019-12-12 05:46:27 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:46:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:46:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:46:28 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:46:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:46:28 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:46:28 --> Controller Class Initialized
DEBUG - 2019-12-12 05:46:28 --> Create_User constructer got called..
DEBUG - 2019-12-12 05:46:28 --> loading configurable menu with result=
INFO - 2019-12-12 05:46:28 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 05:46:28 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 05:46:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 05:46:28 --> Final output sent to browser
DEBUG - 2019-12-12 05:46:28 --> Total execution time: 0.5497
INFO - 2019-12-12 05:46:50 --> Config Class Initialized
INFO - 2019-12-12 05:46:50 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:46:50 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:46:50 --> Utf8 Class Initialized
INFO - 2019-12-12 05:46:50 --> URI Class Initialized
INFO - 2019-12-12 05:46:50 --> Router Class Initialized
INFO - 2019-12-12 05:46:50 --> Output Class Initialized
INFO - 2019-12-12 05:46:50 --> Security Class Initialized
DEBUG - 2019-12-12 05:46:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:46:50 --> Input Class Initialized
INFO - 2019-12-12 05:46:50 --> Language Class Initialized
ERROR - 2019-12-12 05:46:50 --> 404 Page Not Found: user/Index3html/index
INFO - 2019-12-12 05:47:03 --> Config Class Initialized
INFO - 2019-12-12 05:47:03 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:47:03 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:47:03 --> Utf8 Class Initialized
INFO - 2019-12-12 05:47:03 --> URI Class Initialized
DEBUG - 2019-12-12 05:47:03 --> No URI present. Default controller set.
INFO - 2019-12-12 05:47:03 --> Router Class Initialized
INFO - 2019-12-12 05:47:03 --> Output Class Initialized
INFO - 2019-12-12 05:47:03 --> Security Class Initialized
DEBUG - 2019-12-12 05:47:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:47:03 --> Input Class Initialized
INFO - 2019-12-12 05:47:03 --> Language Class Initialized
INFO - 2019-12-12 05:47:03 --> Loader Class Initialized
INFO - 2019-12-12 05:47:03 --> Helper loaded: html_helper
INFO - 2019-12-12 05:47:03 --> Helper loaded: url_helper
INFO - 2019-12-12 05:47:03 --> Helper loaded: form_helper
INFO - 2019-12-12 05:47:03 --> Database Driver Class Initialized
INFO - 2019-12-12 05:47:03 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:47:03 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:47:03 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:47:03 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:47:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:47:03 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:47:03 --> Controller Class Initialized
INFO - 2019-12-12 05:47:03 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 05:47:03 --> Final output sent to browser
DEBUG - 2019-12-12 05:47:03 --> Total execution time: 0.2800
INFO - 2019-12-12 05:47:07 --> Config Class Initialized
INFO - 2019-12-12 05:47:07 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:47:07 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:47:07 --> Utf8 Class Initialized
INFO - 2019-12-12 05:47:07 --> URI Class Initialized
INFO - 2019-12-12 05:47:07 --> Router Class Initialized
INFO - 2019-12-12 05:47:07 --> Output Class Initialized
INFO - 2019-12-12 05:47:07 --> Security Class Initialized
DEBUG - 2019-12-12 05:47:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:47:07 --> Input Class Initialized
INFO - 2019-12-12 05:47:07 --> Language Class Initialized
INFO - 2019-12-12 05:47:07 --> Loader Class Initialized
INFO - 2019-12-12 05:47:07 --> Helper loaded: html_helper
INFO - 2019-12-12 05:47:07 --> Helper loaded: url_helper
INFO - 2019-12-12 05:47:07 --> Helper loaded: form_helper
INFO - 2019-12-12 05:47:07 --> Database Driver Class Initialized
INFO - 2019-12-12 05:47:07 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:47:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:47:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:47:07 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:47:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:47:07 --> Controller Class Initialized
INFO - 2019-12-12 05:47:07 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 05:47:07 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 05:47:07 --> getAuth method got called...
DEBUG - 2019-12-12 05:47:07 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 05:47:07 --> Unreachable block here....
DEBUG - 2019-12-12 05:47:07 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 05:47:07 --> validation result=Array
(
    [id] => 1
    [user_group] => 42
)

DEBUG - 2019-12-12 05:47:07 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 05:47:07 -->  ldap login success
INFO - 2019-12-12 05:47:07 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 05:47:07 --> Role Retrive from DB
DEBUG - 2019-12-12 05:47:07 --> loading model Active_Session
INFO - 2019-12-12 05:47:07 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 05:47:07 --> calling insert_active_session()
DEBUG - 2019-12-12 05:47:07 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 05:47:07 --> insert success
DEBUG - 2019-12-12 05:47:07 --> loading Configarable_Login model...
INFO - 2019-12-12 05:47:07 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 05:47:07 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-12 05:47:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 05:47:07 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => VIEWUSER
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
            [page_role] => VIEWUSER
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
            [page_role] => VIEWUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => VIEWUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-12 05:47:07 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 05:47:07 --> loading view public\Dashboard
INFO - 2019-12-12 05:47:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 05:47:07 --> Final output sent to browser
DEBUG - 2019-12-12 05:47:07 --> Total execution time: 0.7669
INFO - 2019-12-12 05:47:10 --> Config Class Initialized
INFO - 2019-12-12 05:47:10 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:47:10 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:47:10 --> Utf8 Class Initialized
INFO - 2019-12-12 05:47:10 --> URI Class Initialized
INFO - 2019-12-12 05:47:10 --> Router Class Initialized
INFO - 2019-12-12 05:47:10 --> Output Class Initialized
INFO - 2019-12-12 05:47:10 --> Security Class Initialized
DEBUG - 2019-12-12 05:47:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:47:10 --> Input Class Initialized
INFO - 2019-12-12 05:47:10 --> Language Class Initialized
INFO - 2019-12-12 05:47:10 --> Loader Class Initialized
INFO - 2019-12-12 05:47:10 --> Helper loaded: html_helper
INFO - 2019-12-12 05:47:10 --> Helper loaded: url_helper
INFO - 2019-12-12 05:47:10 --> Helper loaded: form_helper
INFO - 2019-12-12 05:47:10 --> Database Driver Class Initialized
INFO - 2019-12-12 05:47:10 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:47:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:47:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:47:10 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:47:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:47:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:47:10 --> Controller Class Initialized
DEBUG - 2019-12-12 05:47:10 --> Create_User constructer got called..
DEBUG - 2019-12-12 05:47:10 --> loading configurable menu with result=
INFO - 2019-12-12 05:47:10 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 05:47:10 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 05:47:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 05:47:10 --> Final output sent to browser
DEBUG - 2019-12-12 05:47:10 --> Total execution time: 0.1450
INFO - 2019-12-12 05:56:57 --> Config Class Initialized
INFO - 2019-12-12 05:56:57 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:56:57 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:56:57 --> Utf8 Class Initialized
INFO - 2019-12-12 05:56:57 --> URI Class Initialized
INFO - 2019-12-12 05:56:57 --> Router Class Initialized
INFO - 2019-12-12 05:56:57 --> Output Class Initialized
INFO - 2019-12-12 05:56:57 --> Security Class Initialized
DEBUG - 2019-12-12 05:56:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:56:57 --> Input Class Initialized
INFO - 2019-12-12 05:56:57 --> Language Class Initialized
INFO - 2019-12-12 05:56:57 --> Loader Class Initialized
INFO - 2019-12-12 05:56:57 --> Helper loaded: html_helper
INFO - 2019-12-12 05:56:57 --> Helper loaded: url_helper
INFO - 2019-12-12 05:56:57 --> Helper loaded: form_helper
INFO - 2019-12-12 05:56:58 --> Database Driver Class Initialized
INFO - 2019-12-12 05:56:58 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:56:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:56:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:56:58 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:56:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:56:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:56:58 --> Controller Class Initialized
DEBUG - 2019-12-12 05:56:58 --> loading Configarable_Login model...
INFO - 2019-12-12 05:56:58 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 05:56:58 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-12 05:56:58 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 05:56:58 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => VIEWUSER
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
            [page_role] => VIEWUSER
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
            [page_role] => VIEWUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => VIEWUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => VIEWUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-12 05:56:58 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 05:56:58 --> loading view public\Dashboard
INFO - 2019-12-12 05:56:58 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 05:56:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 05:56:58 --> Final output sent to browser
DEBUG - 2019-12-12 05:56:58 --> Total execution time: 0.7416
INFO - 2019-12-12 05:57:01 --> Config Class Initialized
INFO - 2019-12-12 05:57:01 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:57:01 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:57:01 --> Utf8 Class Initialized
INFO - 2019-12-12 05:57:01 --> URI Class Initialized
INFO - 2019-12-12 05:57:01 --> Router Class Initialized
INFO - 2019-12-12 05:57:01 --> Output Class Initialized
INFO - 2019-12-12 05:57:01 --> Security Class Initialized
DEBUG - 2019-12-12 05:57:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:57:01 --> Input Class Initialized
INFO - 2019-12-12 05:57:01 --> Language Class Initialized
INFO - 2019-12-12 05:57:01 --> Loader Class Initialized
INFO - 2019-12-12 05:57:01 --> Helper loaded: html_helper
INFO - 2019-12-12 05:57:01 --> Helper loaded: url_helper
INFO - 2019-12-12 05:57:01 --> Helper loaded: form_helper
INFO - 2019-12-12 05:57:01 --> Database Driver Class Initialized
INFO - 2019-12-12 05:57:01 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:57:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:57:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:57:01 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:57:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:57:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:57:01 --> Controller Class Initialized
DEBUG - 2019-12-12 05:57:01 --> Create_User constructer got called..
DEBUG - 2019-12-12 05:57:01 --> loading configurable menu with result=
INFO - 2019-12-12 05:57:01 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 05:57:01 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 05:57:01 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 05:57:01 --> Final output sent to browser
DEBUG - 2019-12-12 05:57:01 --> Total execution time: 0.5637
INFO - 2019-12-12 05:58:49 --> Config Class Initialized
INFO - 2019-12-12 05:58:49 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:58:50 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:58:50 --> Utf8 Class Initialized
INFO - 2019-12-12 05:58:50 --> URI Class Initialized
INFO - 2019-12-12 05:58:50 --> Router Class Initialized
INFO - 2019-12-12 05:58:50 --> Output Class Initialized
INFO - 2019-12-12 05:58:50 --> Security Class Initialized
DEBUG - 2019-12-12 05:58:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:58:50 --> Input Class Initialized
INFO - 2019-12-12 05:58:50 --> Language Class Initialized
INFO - 2019-12-12 05:58:50 --> Loader Class Initialized
INFO - 2019-12-12 05:58:50 --> Helper loaded: html_helper
INFO - 2019-12-12 05:58:50 --> Helper loaded: url_helper
INFO - 2019-12-12 05:58:50 --> Helper loaded: form_helper
INFO - 2019-12-12 05:58:50 --> Database Driver Class Initialized
INFO - 2019-12-12 05:58:50 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:58:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:58:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:58:50 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:58:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:58:50 --> Controller Class Initialized
DEBUG - 2019-12-12 05:58:50 --> Create_User constructer got called..
INFO - 2019-12-12 05:58:50 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 05:58:50 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2019-12-12 05:58:50 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 05:58:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 05:58:50 --> Final output sent to browser
DEBUG - 2019-12-12 05:58:50 --> Total execution time: 0.5577
INFO - 2019-12-12 05:59:51 --> Config Class Initialized
INFO - 2019-12-12 05:59:51 --> Hooks Class Initialized
DEBUG - 2019-12-12 05:59:51 --> UTF-8 Support Enabled
INFO - 2019-12-12 05:59:51 --> Utf8 Class Initialized
INFO - 2019-12-12 05:59:51 --> URI Class Initialized
INFO - 2019-12-12 05:59:51 --> Router Class Initialized
INFO - 2019-12-12 05:59:51 --> Output Class Initialized
INFO - 2019-12-12 05:59:51 --> Security Class Initialized
DEBUG - 2019-12-12 05:59:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 05:59:51 --> Input Class Initialized
INFO - 2019-12-12 05:59:51 --> Language Class Initialized
INFO - 2019-12-12 05:59:51 --> Loader Class Initialized
INFO - 2019-12-12 05:59:51 --> Helper loaded: html_helper
INFO - 2019-12-12 05:59:51 --> Helper loaded: url_helper
INFO - 2019-12-12 05:59:51 --> Helper loaded: form_helper
INFO - 2019-12-12 05:59:51 --> Database Driver Class Initialized
INFO - 2019-12-12 05:59:51 --> Form Validation Class Initialized
DEBUG - 2019-12-12 05:59:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 05:59:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 05:59:52 --> Encryption Class Initialized
DEBUG - 2019-12-12 05:59:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 05:59:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 05:59:52 --> Controller Class Initialized
DEBUG - 2019-12-12 05:59:52 --> Create_User constructer got called..
INFO - 2019-12-12 05:59:52 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 05:59:52 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2019-12-12 05:59:52 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 05:59:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 05:59:52 --> Final output sent to browser
DEBUG - 2019-12-12 05:59:52 --> Total execution time: 0.4919
INFO - 2019-12-12 06:00:30 --> Config Class Initialized
INFO - 2019-12-12 06:00:30 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:00:30 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:00:30 --> Utf8 Class Initialized
INFO - 2019-12-12 06:00:30 --> URI Class Initialized
INFO - 2019-12-12 06:00:30 --> Router Class Initialized
INFO - 2019-12-12 06:00:30 --> Output Class Initialized
INFO - 2019-12-12 06:00:30 --> Security Class Initialized
DEBUG - 2019-12-12 06:00:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:00:30 --> Input Class Initialized
INFO - 2019-12-12 06:00:30 --> Language Class Initialized
INFO - 2019-12-12 06:00:30 --> Loader Class Initialized
INFO - 2019-12-12 06:00:30 --> Helper loaded: html_helper
INFO - 2019-12-12 06:00:30 --> Helper loaded: url_helper
INFO - 2019-12-12 06:00:30 --> Helper loaded: form_helper
INFO - 2019-12-12 06:00:30 --> Database Driver Class Initialized
INFO - 2019-12-12 06:00:30 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:00:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:00:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:00:30 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:00:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:00:30 --> Controller Class Initialized
DEBUG - 2019-12-12 06:00:30 --> Create_User constructer got called..
INFO - 2019-12-12 06:00:30 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:00:30 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2019-12-12 06:00:30 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:00:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:00:30 --> Final output sent to browser
DEBUG - 2019-12-12 06:00:30 --> Total execution time: 0.1300
INFO - 2019-12-12 06:01:23 --> Config Class Initialized
INFO - 2019-12-12 06:01:23 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:01:23 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:01:23 --> Utf8 Class Initialized
INFO - 2019-12-12 06:01:23 --> URI Class Initialized
INFO - 2019-12-12 06:01:23 --> Router Class Initialized
INFO - 2019-12-12 06:01:23 --> Output Class Initialized
INFO - 2019-12-12 06:01:23 --> Security Class Initialized
DEBUG - 2019-12-12 06:01:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:01:23 --> Input Class Initialized
INFO - 2019-12-12 06:01:23 --> Language Class Initialized
INFO - 2019-12-12 06:01:23 --> Loader Class Initialized
INFO - 2019-12-12 06:01:23 --> Helper loaded: html_helper
INFO - 2019-12-12 06:01:23 --> Helper loaded: url_helper
INFO - 2019-12-12 06:01:23 --> Helper loaded: form_helper
INFO - 2019-12-12 06:01:23 --> Database Driver Class Initialized
INFO - 2019-12-12 06:01:23 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:01:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:01:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:01:23 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:01:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:01:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:01:23 --> Controller Class Initialized
DEBUG - 2019-12-12 06:01:23 --> Create_User constructer got called..
INFO - 2019-12-12 06:01:23 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:01:23 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:01:23 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 06:01:23 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 06:01:23 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 06:01:23 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 06:01:23 --> workGroup_id :- 42 userType :- AD
INFO - 2019-12-12 06:01:23 --> store_user_name function called ...
DEBUG - 2019-12-12 06:01:23 --> User inserted
INFO - 2019-12-12 06:01:23 --> store_insert_name executed successfully...
DEBUG - 2019-12-12 06:01:23 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:01:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:01:23 --> Final output sent to browser
DEBUG - 2019-12-12 06:01:23 --> Total execution time: 0.3799
INFO - 2019-12-12 06:09:50 --> Config Class Initialized
INFO - 2019-12-12 06:09:50 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:09:50 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:09:50 --> Utf8 Class Initialized
INFO - 2019-12-12 06:09:50 --> URI Class Initialized
INFO - 2019-12-12 06:09:50 --> Router Class Initialized
INFO - 2019-12-12 06:09:50 --> Output Class Initialized
INFO - 2019-12-12 06:09:50 --> Security Class Initialized
DEBUG - 2019-12-12 06:09:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:09:50 --> Input Class Initialized
INFO - 2019-12-12 06:09:50 --> Language Class Initialized
INFO - 2019-12-12 06:09:50 --> Loader Class Initialized
INFO - 2019-12-12 06:09:50 --> Helper loaded: html_helper
INFO - 2019-12-12 06:09:50 --> Helper loaded: url_helper
INFO - 2019-12-12 06:09:50 --> Helper loaded: form_helper
INFO - 2019-12-12 06:09:50 --> Database Driver Class Initialized
INFO - 2019-12-12 06:09:50 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:09:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:09:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:09:50 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:09:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:09:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:09:50 --> Controller Class Initialized
DEBUG - 2019-12-12 06:09:50 --> Create_User constructer got called..
INFO - 2019-12-12 06:09:50 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:09:50 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:09:50 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 06:09:50 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 06:09:50 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 06:09:50 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 06:09:50 --> workGroup_id :- 42 userType :- AD
INFO - 2019-12-12 06:09:50 --> store_user_name function called ...
DEBUG - 2019-12-12 06:09:50 --> User inserted
INFO - 2019-12-12 06:09:50 --> store_insert_name executed successfully...
DEBUG - 2019-12-12 06:09:50 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:09:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:09:50 --> Final output sent to browser
DEBUG - 2019-12-12 06:09:50 --> Total execution time: 0.5021
INFO - 2019-12-12 06:13:27 --> Config Class Initialized
INFO - 2019-12-12 06:13:27 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:13:27 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:13:27 --> Utf8 Class Initialized
INFO - 2019-12-12 06:13:27 --> URI Class Initialized
INFO - 2019-12-12 06:13:27 --> Router Class Initialized
INFO - 2019-12-12 06:13:27 --> Output Class Initialized
INFO - 2019-12-12 06:13:27 --> Security Class Initialized
DEBUG - 2019-12-12 06:13:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:13:27 --> Input Class Initialized
INFO - 2019-12-12 06:13:27 --> Language Class Initialized
INFO - 2019-12-12 06:13:27 --> Loader Class Initialized
INFO - 2019-12-12 06:13:27 --> Helper loaded: html_helper
INFO - 2019-12-12 06:13:27 --> Helper loaded: url_helper
INFO - 2019-12-12 06:13:27 --> Helper loaded: form_helper
INFO - 2019-12-12 06:13:27 --> Database Driver Class Initialized
INFO - 2019-12-12 06:13:27 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:13:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:13:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:13:27 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:13:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:13:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:13:27 --> Controller Class Initialized
DEBUG - 2019-12-12 06:13:27 --> Create_User constructer got called..
INFO - 2019-12-12 06:13:27 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:13:27 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:13:27 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 06:13:27 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 06:13:27 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 06:13:27 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 06:13:27 --> workGroup_id :- 42 userType :- AD
INFO - 2019-12-12 06:13:27 --> store_user_name function called ...
DEBUG - 2019-12-12 06:13:27 --> User inserted
INFO - 2019-12-12 06:13:27 --> store_insert_name executed successfully...
DEBUG - 2019-12-12 06:13:27 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:13:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:13:27 --> Final output sent to browser
DEBUG - 2019-12-12 06:13:27 --> Total execution time: 0.5740
INFO - 2019-12-12 06:14:51 --> Config Class Initialized
INFO - 2019-12-12 06:14:51 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:14:51 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:14:51 --> Utf8 Class Initialized
INFO - 2019-12-12 06:14:51 --> URI Class Initialized
INFO - 2019-12-12 06:14:51 --> Router Class Initialized
INFO - 2019-12-12 06:14:51 --> Output Class Initialized
INFO - 2019-12-12 06:14:51 --> Security Class Initialized
DEBUG - 2019-12-12 06:14:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:14:51 --> Input Class Initialized
INFO - 2019-12-12 06:14:51 --> Language Class Initialized
INFO - 2019-12-12 06:14:51 --> Loader Class Initialized
INFO - 2019-12-12 06:14:51 --> Helper loaded: html_helper
INFO - 2019-12-12 06:14:51 --> Helper loaded: url_helper
INFO - 2019-12-12 06:14:51 --> Helper loaded: form_helper
INFO - 2019-12-12 06:14:51 --> Database Driver Class Initialized
INFO - 2019-12-12 06:14:51 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:14:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:14:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:14:51 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:14:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:14:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:14:51 --> Controller Class Initialized
DEBUG - 2019-12-12 06:14:51 --> Create_User constructer got called..
INFO - 2019-12-12 06:14:51 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:14:51 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:14:51 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 06:14:51 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 06:14:51 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 06:14:51 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 06:14:51 --> workGroup_id :- 42 userType :- AD
INFO - 2019-12-12 06:14:51 --> store_user_name function called ...
DEBUG - 2019-12-12 06:14:51 --> User inserted
INFO - 2019-12-12 06:14:51 --> store_insert_name executed successfully...
DEBUG - 2019-12-12 06:14:51 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:14:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:14:51 --> Final output sent to browser
DEBUG - 2019-12-12 06:14:51 --> Total execution time: 0.6380
INFO - 2019-12-12 06:15:37 --> Config Class Initialized
INFO - 2019-12-12 06:15:37 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:15:37 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:15:37 --> Utf8 Class Initialized
INFO - 2019-12-12 06:15:37 --> URI Class Initialized
INFO - 2019-12-12 06:15:37 --> Router Class Initialized
INFO - 2019-12-12 06:15:37 --> Output Class Initialized
INFO - 2019-12-12 06:15:37 --> Security Class Initialized
DEBUG - 2019-12-12 06:15:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:15:37 --> Input Class Initialized
INFO - 2019-12-12 06:15:37 --> Language Class Initialized
INFO - 2019-12-12 06:15:37 --> Loader Class Initialized
INFO - 2019-12-12 06:15:37 --> Helper loaded: html_helper
INFO - 2019-12-12 06:15:37 --> Helper loaded: url_helper
INFO - 2019-12-12 06:15:37 --> Helper loaded: form_helper
INFO - 2019-12-12 06:15:37 --> Database Driver Class Initialized
INFO - 2019-12-12 06:15:38 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:15:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:15:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:15:38 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:15:38 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:15:38 --> Controller Class Initialized
DEBUG - 2019-12-12 06:15:38 --> Create_User constructer got called..
INFO - 2019-12-12 06:15:38 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:15:38 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:15:38 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 06:15:38 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 06:15:38 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 06:15:38 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 06:15:38 --> workGroup_id :- 42 userType :- AD
INFO - 2019-12-12 06:15:38 --> store_user_name function called ...
DEBUG - 2019-12-12 06:15:38 --> User inserted
INFO - 2019-12-12 06:15:38 --> store_insert_name executed successfully...
DEBUG - 2019-12-12 06:15:38 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:15:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:15:38 --> Final output sent to browser
DEBUG - 2019-12-12 06:15:38 --> Total execution time: 0.4890
INFO - 2019-12-12 06:16:02 --> Config Class Initialized
INFO - 2019-12-12 06:16:02 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:16:02 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:16:02 --> Utf8 Class Initialized
INFO - 2019-12-12 06:16:02 --> URI Class Initialized
INFO - 2019-12-12 06:16:02 --> Router Class Initialized
INFO - 2019-12-12 06:16:02 --> Output Class Initialized
INFO - 2019-12-12 06:16:02 --> Security Class Initialized
DEBUG - 2019-12-12 06:16:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:16:02 --> Input Class Initialized
INFO - 2019-12-12 06:16:02 --> Language Class Initialized
INFO - 2019-12-12 06:16:02 --> Loader Class Initialized
INFO - 2019-12-12 06:16:02 --> Helper loaded: html_helper
INFO - 2019-12-12 06:16:02 --> Helper loaded: url_helper
INFO - 2019-12-12 06:16:02 --> Helper loaded: form_helper
INFO - 2019-12-12 06:16:02 --> Database Driver Class Initialized
INFO - 2019-12-12 06:16:02 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:16:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:16:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:16:02 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:16:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:16:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:16:02 --> Controller Class Initialized
DEBUG - 2019-12-12 06:16:02 --> Create_User constructer got called..
INFO - 2019-12-12 06:16:02 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:16:02 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:16:02 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 06:16:02 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 06:16:02 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 06:16:02 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 06:16:02 --> workGroup_id :- 42 userType :- AD
INFO - 2019-12-12 06:16:02 --> store_user_name function called ...
DEBUG - 2019-12-12 06:16:02 --> User inserted
INFO - 2019-12-12 06:16:02 --> store_insert_name executed successfully...
DEBUG - 2019-12-12 06:16:02 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:16:02 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:16:02 --> Final output sent to browser
DEBUG - 2019-12-12 06:16:02 --> Total execution time: 0.4480
INFO - 2019-12-12 06:17:22 --> Config Class Initialized
INFO - 2019-12-12 06:17:22 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:17:22 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:17:22 --> Utf8 Class Initialized
INFO - 2019-12-12 06:17:22 --> URI Class Initialized
INFO - 2019-12-12 06:17:22 --> Router Class Initialized
INFO - 2019-12-12 06:17:22 --> Output Class Initialized
INFO - 2019-12-12 06:17:22 --> Security Class Initialized
DEBUG - 2019-12-12 06:17:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:17:22 --> Input Class Initialized
INFO - 2019-12-12 06:17:22 --> Language Class Initialized
INFO - 2019-12-12 06:17:22 --> Loader Class Initialized
INFO - 2019-12-12 06:17:22 --> Helper loaded: html_helper
INFO - 2019-12-12 06:17:22 --> Helper loaded: url_helper
INFO - 2019-12-12 06:17:22 --> Helper loaded: form_helper
INFO - 2019-12-12 06:17:22 --> Database Driver Class Initialized
INFO - 2019-12-12 06:17:22 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:17:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:17:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:17:22 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:17:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:17:22 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:17:22 --> Controller Class Initialized
DEBUG - 2019-12-12 06:17:22 --> Create_User constructer got called..
INFO - 2019-12-12 06:17:22 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:17:22 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:17:22 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 06:17:22 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 06:17:22 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 06:17:22 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 06:17:22 --> workGroup_id :- 42 userType :- AD
INFO - 2019-12-12 06:17:22 --> store_user_name function called ...
DEBUG - 2019-12-12 06:17:22 --> User inserted
INFO - 2019-12-12 06:17:22 --> store_insert_name executed successfully...
DEBUG - 2019-12-12 06:17:22 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:17:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:17:22 --> Final output sent to browser
DEBUG - 2019-12-12 06:17:22 --> Total execution time: 0.5620
INFO - 2019-12-12 06:26:23 --> Config Class Initialized
INFO - 2019-12-12 06:26:23 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:26:23 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:26:23 --> Utf8 Class Initialized
INFO - 2019-12-12 06:26:23 --> URI Class Initialized
INFO - 2019-12-12 06:26:23 --> Router Class Initialized
INFO - 2019-12-12 06:26:23 --> Output Class Initialized
INFO - 2019-12-12 06:26:23 --> Security Class Initialized
DEBUG - 2019-12-12 06:26:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:26:23 --> Input Class Initialized
INFO - 2019-12-12 06:26:23 --> Language Class Initialized
INFO - 2019-12-12 06:26:23 --> Loader Class Initialized
INFO - 2019-12-12 06:26:23 --> Helper loaded: html_helper
INFO - 2019-12-12 06:26:23 --> Helper loaded: url_helper
INFO - 2019-12-12 06:26:23 --> Helper loaded: form_helper
INFO - 2019-12-12 06:26:23 --> Database Driver Class Initialized
INFO - 2019-12-12 06:26:23 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:26:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:26:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:26:23 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:26:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:26:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:26:24 --> Controller Class Initialized
DEBUG - 2019-12-12 06:26:24 --> loading Configarable_Login model...
INFO - 2019-12-12 06:26:24 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 06:26:24 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-12 06:26:24 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 06:26:24 --> Array
(
)

DEBUG - 2019-12-12 06:26:24 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 06:26:24 --> loading view public\Dashboard
INFO - 2019-12-12 06:26:24 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:26:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 06:26:24 --> Final output sent to browser
DEBUG - 2019-12-12 06:26:24 --> Total execution time: 0.6881
INFO - 2019-12-12 06:27:29 --> Config Class Initialized
INFO - 2019-12-12 06:27:29 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:27:29 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:27:29 --> Utf8 Class Initialized
INFO - 2019-12-12 06:27:29 --> URI Class Initialized
INFO - 2019-12-12 06:27:29 --> Router Class Initialized
INFO - 2019-12-12 06:27:29 --> Output Class Initialized
INFO - 2019-12-12 06:27:29 --> Security Class Initialized
DEBUG - 2019-12-12 06:27:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:27:29 --> Input Class Initialized
INFO - 2019-12-12 06:27:29 --> Language Class Initialized
INFO - 2019-12-12 06:27:29 --> Loader Class Initialized
INFO - 2019-12-12 06:27:29 --> Helper loaded: html_helper
INFO - 2019-12-12 06:27:29 --> Helper loaded: url_helper
INFO - 2019-12-12 06:27:29 --> Helper loaded: form_helper
INFO - 2019-12-12 06:27:29 --> Database Driver Class Initialized
INFO - 2019-12-12 06:27:29 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:27:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:27:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:27:29 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:27:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:27:29 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:27:29 --> Controller Class Initialized
DEBUG - 2019-12-12 06:27:29 --> loading Configarable_Login model...
INFO - 2019-12-12 06:27:29 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 06:27:29 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-12 06:27:29 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 06:27:29 --> Array
(
)

DEBUG - 2019-12-12 06:27:29 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 06:27:29 --> loading view public\Dashboard
INFO - 2019-12-12 06:27:29 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:27:29 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 06:27:29 --> Final output sent to browser
DEBUG - 2019-12-12 06:27:29 --> Total execution time: 0.5341
INFO - 2019-12-12 06:27:34 --> Config Class Initialized
INFO - 2019-12-12 06:27:34 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:27:34 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:27:34 --> Utf8 Class Initialized
INFO - 2019-12-12 06:27:34 --> URI Class Initialized
INFO - 2019-12-12 06:27:34 --> Router Class Initialized
INFO - 2019-12-12 06:27:34 --> Output Class Initialized
INFO - 2019-12-12 06:27:34 --> Security Class Initialized
DEBUG - 2019-12-12 06:27:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:27:34 --> Input Class Initialized
INFO - 2019-12-12 06:27:34 --> Language Class Initialized
INFO - 2019-12-12 06:27:34 --> Loader Class Initialized
INFO - 2019-12-12 06:27:34 --> Helper loaded: html_helper
INFO - 2019-12-12 06:27:34 --> Helper loaded: url_helper
INFO - 2019-12-12 06:27:34 --> Helper loaded: form_helper
INFO - 2019-12-12 06:27:35 --> Database Driver Class Initialized
INFO - 2019-12-12 06:27:35 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:27:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:27:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:27:35 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:27:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:27:35 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:27:35 --> Controller Class Initialized
INFO - 2019-12-12 06:27:35 --> Helper loaded: cookie_helper
INFO - 2019-12-12 06:27:35 --> logout() called
DEBUG - 2019-12-12 06:27:35 --> loading model Active_Session
INFO - 2019-12-12 06:27:35 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 06:27:35 --> calling remove_active_session()
DEBUG - 2019-12-12 06:27:35 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-12 06:27:35 --> loading view welcome controller ... 
INFO - 2019-12-12 06:27:35 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 06:27:35 --> Final output sent to browser
DEBUG - 2019-12-12 06:27:35 --> Total execution time: 0.6031
INFO - 2019-12-12 06:27:39 --> Config Class Initialized
INFO - 2019-12-12 06:27:39 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:27:39 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:27:39 --> Utf8 Class Initialized
INFO - 2019-12-12 06:27:39 --> URI Class Initialized
INFO - 2019-12-12 06:27:40 --> Router Class Initialized
INFO - 2019-12-12 06:27:40 --> Output Class Initialized
INFO - 2019-12-12 06:27:40 --> Security Class Initialized
DEBUG - 2019-12-12 06:27:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:27:40 --> Input Class Initialized
INFO - 2019-12-12 06:27:40 --> Language Class Initialized
INFO - 2019-12-12 06:27:40 --> Loader Class Initialized
INFO - 2019-12-12 06:27:40 --> Helper loaded: html_helper
INFO - 2019-12-12 06:27:40 --> Helper loaded: url_helper
INFO - 2019-12-12 06:27:40 --> Helper loaded: form_helper
INFO - 2019-12-12 06:27:40 --> Database Driver Class Initialized
INFO - 2019-12-12 06:27:40 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:27:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:27:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:27:40 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:27:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:27:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:27:40 --> Controller Class Initialized
INFO - 2019-12-12 06:27:40 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:27:40 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:27:40 --> getAuth method got called...
DEBUG - 2019-12-12 06:27:40 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 06:27:40 --> Unreachable block here....
DEBUG - 2019-12-12 06:27:40 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 06:27:40 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 06:27:40 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 06:27:40 -->  ldap login success
INFO - 2019-12-12 06:27:40 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 06:27:40 --> Role Retrive from DB
DEBUG - 2019-12-12 06:27:41 --> loading model Active_Session
INFO - 2019-12-12 06:27:41 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 06:27:41 --> calling insert_active_session()
DEBUG - 2019-12-12 06:27:41 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 06:27:41 --> insert success
DEBUG - 2019-12-12 06:27:41 --> loading Configarable_Login model...
INFO - 2019-12-12 06:27:41 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 06:27:41 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 06:27:41 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 06:27:41 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-12 06:27:41 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 06:27:41 --> loading view public\Dashboard
INFO - 2019-12-12 06:27:41 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 06:27:41 --> Final output sent to browser
DEBUG - 2019-12-12 06:27:41 --> Total execution time: 1.3541
INFO - 2019-12-12 06:27:43 --> Config Class Initialized
INFO - 2019-12-12 06:27:43 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:27:43 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:27:43 --> Utf8 Class Initialized
INFO - 2019-12-12 06:27:43 --> URI Class Initialized
INFO - 2019-12-12 06:27:44 --> Router Class Initialized
INFO - 2019-12-12 06:27:44 --> Output Class Initialized
INFO - 2019-12-12 06:27:44 --> Security Class Initialized
DEBUG - 2019-12-12 06:27:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:27:44 --> Input Class Initialized
INFO - 2019-12-12 06:27:44 --> Language Class Initialized
INFO - 2019-12-12 06:27:44 --> Loader Class Initialized
INFO - 2019-12-12 06:27:44 --> Helper loaded: html_helper
INFO - 2019-12-12 06:27:44 --> Helper loaded: url_helper
INFO - 2019-12-12 06:27:44 --> Helper loaded: form_helper
INFO - 2019-12-12 06:27:44 --> Database Driver Class Initialized
INFO - 2019-12-12 06:27:44 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:27:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:27:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:27:44 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:27:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:27:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:27:44 --> Controller Class Initialized
DEBUG - 2019-12-12 06:27:44 --> Create_User constructer got called..
DEBUG - 2019-12-12 06:27:44 --> loading configurable menu with result=
INFO - 2019-12-12 06:27:44 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 06:27:44 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:27:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:27:44 --> Final output sent to browser
DEBUG - 2019-12-12 06:27:44 --> Total execution time: 0.5561
INFO - 2019-12-12 06:30:11 --> Config Class Initialized
INFO - 2019-12-12 06:30:11 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:30:11 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:30:11 --> Utf8 Class Initialized
INFO - 2019-12-12 06:30:11 --> URI Class Initialized
INFO - 2019-12-12 06:30:11 --> Router Class Initialized
INFO - 2019-12-12 06:30:11 --> Output Class Initialized
INFO - 2019-12-12 06:30:11 --> Security Class Initialized
DEBUG - 2019-12-12 06:30:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:30:11 --> Input Class Initialized
INFO - 2019-12-12 06:30:11 --> Language Class Initialized
INFO - 2019-12-12 06:30:11 --> Loader Class Initialized
INFO - 2019-12-12 06:30:11 --> Helper loaded: html_helper
INFO - 2019-12-12 06:30:11 --> Helper loaded: url_helper
INFO - 2019-12-12 06:30:11 --> Helper loaded: form_helper
INFO - 2019-12-12 06:30:11 --> Database Driver Class Initialized
INFO - 2019-12-12 06:30:11 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:30:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:30:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:30:11 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:30:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:30:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:30:11 --> Controller Class Initialized
DEBUG - 2019-12-12 06:30:11 --> Create_User constructer got called..
DEBUG - 2019-12-12 06:30:11 --> loading configurable menu with result=
INFO - 2019-12-12 06:30:11 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 06:30:11 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:30:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:30:11 --> Final output sent to browser
DEBUG - 2019-12-12 06:30:11 --> Total execution time: 0.4120
INFO - 2019-12-12 06:30:16 --> Config Class Initialized
INFO - 2019-12-12 06:30:16 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:30:16 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:30:16 --> Utf8 Class Initialized
INFO - 2019-12-12 06:30:16 --> URI Class Initialized
INFO - 2019-12-12 06:30:16 --> Router Class Initialized
INFO - 2019-12-12 06:30:16 --> Output Class Initialized
INFO - 2019-12-12 06:30:16 --> Security Class Initialized
DEBUG - 2019-12-12 06:30:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:30:16 --> Input Class Initialized
INFO - 2019-12-12 06:30:16 --> Language Class Initialized
INFO - 2019-12-12 06:30:16 --> Loader Class Initialized
INFO - 2019-12-12 06:30:16 --> Helper loaded: html_helper
INFO - 2019-12-12 06:30:16 --> Helper loaded: url_helper
INFO - 2019-12-12 06:30:16 --> Helper loaded: form_helper
INFO - 2019-12-12 06:30:16 --> Database Driver Class Initialized
INFO - 2019-12-12 06:30:16 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:30:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:30:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:30:16 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:30:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:30:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:30:16 --> Controller Class Initialized
DEBUG - 2019-12-12 06:30:16 --> Create_User constructer got called..
INFO - 2019-12-12 06:30:16 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:30:16 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2019-12-12 06:30:16 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:30:16 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:30:16 --> Final output sent to browser
DEBUG - 2019-12-12 06:30:16 --> Total execution time: 0.5260
INFO - 2019-12-12 06:30:40 --> Config Class Initialized
INFO - 2019-12-12 06:30:40 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:30:40 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:30:40 --> Utf8 Class Initialized
INFO - 2019-12-12 06:30:40 --> URI Class Initialized
INFO - 2019-12-12 06:30:40 --> Router Class Initialized
INFO - 2019-12-12 06:30:40 --> Output Class Initialized
INFO - 2019-12-12 06:30:40 --> Security Class Initialized
DEBUG - 2019-12-12 06:30:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:30:40 --> Input Class Initialized
INFO - 2019-12-12 06:30:40 --> Language Class Initialized
INFO - 2019-12-12 06:30:40 --> Loader Class Initialized
INFO - 2019-12-12 06:30:40 --> Helper loaded: html_helper
INFO - 2019-12-12 06:30:40 --> Helper loaded: url_helper
INFO - 2019-12-12 06:30:40 --> Helper loaded: form_helper
INFO - 2019-12-12 06:30:40 --> Database Driver Class Initialized
INFO - 2019-12-12 06:30:40 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:30:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:30:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:30:40 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:30:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:30:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:30:40 --> Controller Class Initialized
DEBUG - 2019-12-12 06:30:40 --> Create_User constructer got called..
INFO - 2019-12-12 06:30:40 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:30:40 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:30:40 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 06:30:40 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 06:30:40 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 06:30:40 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 06:30:40 --> workGroup_id :- 42 userType :- DB
INFO - 2019-12-12 06:30:40 --> store_user_name function called ...
DEBUG - 2019-12-12 06:30:40 --> User inserted
INFO - 2019-12-12 06:30:40 --> store_insert_name executed successfully...
DEBUG - 2019-12-12 06:30:40 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:30:40 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:30:40 --> Final output sent to browser
DEBUG - 2019-12-12 06:30:40 --> Total execution time: 0.7280
INFO - 2019-12-12 06:31:40 --> Config Class Initialized
INFO - 2019-12-12 06:31:40 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:31:40 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:31:40 --> Utf8 Class Initialized
INFO - 2019-12-12 06:31:40 --> URI Class Initialized
INFO - 2019-12-12 06:31:40 --> Router Class Initialized
INFO - 2019-12-12 06:31:40 --> Output Class Initialized
INFO - 2019-12-12 06:31:40 --> Security Class Initialized
DEBUG - 2019-12-12 06:31:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:31:41 --> Input Class Initialized
INFO - 2019-12-12 06:31:41 --> Language Class Initialized
INFO - 2019-12-12 06:31:41 --> Loader Class Initialized
INFO - 2019-12-12 06:31:41 --> Helper loaded: html_helper
INFO - 2019-12-12 06:31:41 --> Helper loaded: url_helper
INFO - 2019-12-12 06:31:41 --> Helper loaded: form_helper
INFO - 2019-12-12 06:31:41 --> Database Driver Class Initialized
INFO - 2019-12-12 06:31:41 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:31:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:31:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:31:41 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:31:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:31:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:31:41 --> Controller Class Initialized
DEBUG - 2019-12-12 06:31:41 --> Create_User constructer got called..
INFO - 2019-12-12 06:31:41 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:31:41 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:31:41 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 06:31:41 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 06:31:41 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 06:31:41 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 06:31:41 --> workGroup_id :- 42 userType :- DB
INFO - 2019-12-12 06:31:41 --> store_user_name function called ...
ERROR - 2019-12-12 06:31:41 --> Query error: Duplicate entry 'nirajcmhatre' for key 'userId' - Invalid query: INSERT INTO `tblusers` (`firstName`, `lastName`, `userId`, `mobileNumber`, `userPassword`, `isActive`, `workGroup_id`, `userType`) VALUES ('Niraj ', 'Mhatre', 'nirajcmhatre', '9699675725', 'Test@12345', '1', '42', 'DB')
DEBUG - 2019-12-12 06:31:41 --> User insertion failed...
DEBUG - 2019-12-12 06:31:41 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:31:41 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:31:41 --> Final output sent to browser
DEBUG - 2019-12-12 06:31:41 --> Total execution time: 0.7370
INFO - 2019-12-12 06:32:01 --> Config Class Initialized
INFO - 2019-12-12 06:32:01 --> Hooks Class Initialized
DEBUG - 2019-12-12 06:32:01 --> UTF-8 Support Enabled
INFO - 2019-12-12 06:32:01 --> Utf8 Class Initialized
INFO - 2019-12-12 06:32:01 --> URI Class Initialized
INFO - 2019-12-12 06:32:01 --> Router Class Initialized
INFO - 2019-12-12 06:32:01 --> Output Class Initialized
INFO - 2019-12-12 06:32:01 --> Security Class Initialized
DEBUG - 2019-12-12 06:32:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 06:32:01 --> Input Class Initialized
INFO - 2019-12-12 06:32:01 --> Language Class Initialized
INFO - 2019-12-12 06:32:01 --> Loader Class Initialized
INFO - 2019-12-12 06:32:01 --> Helper loaded: html_helper
INFO - 2019-12-12 06:32:01 --> Helper loaded: url_helper
INFO - 2019-12-12 06:32:01 --> Helper loaded: form_helper
INFO - 2019-12-12 06:32:01 --> Database Driver Class Initialized
INFO - 2019-12-12 06:32:01 --> Form Validation Class Initialized
DEBUG - 2019-12-12 06:32:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 06:32:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 06:32:01 --> Encryption Class Initialized
DEBUG - 2019-12-12 06:32:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 06:32:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 06:32:01 --> Controller Class Initialized
DEBUG - 2019-12-12 06:32:01 --> Create_User constructer got called..
INFO - 2019-12-12 06:32:01 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 06:32:01 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 06:32:01 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 06:32:01 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 06:32:01 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 06:32:01 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 06:32:01 --> workGroup_id :- 42 userType :- DB
INFO - 2019-12-12 06:32:01 --> store_user_name function called ...
ERROR - 2019-12-12 06:32:01 --> Query error: Duplicate entry 'nirajcmhatre' for key 'userId' - Invalid query: INSERT INTO `tblusers` (`firstName`, `lastName`, `userId`, `mobileNumber`, `userPassword`, `isActive`, `workGroup_id`, `userType`) VALUES ('Niraj ', 'Mhatre', 'nirajcmhatre', '9699675725', 'Test@12345', '1', '42', 'DB')
DEBUG - 2019-12-12 06:32:01 --> User insertion failed...
DEBUG - 2019-12-12 06:32:01 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 06:32:01 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 06:32:02 --> Final output sent to browser
DEBUG - 2019-12-12 06:32:02 --> Total execution time: 0.7890
INFO - 2019-12-12 07:13:18 --> Config Class Initialized
INFO - 2019-12-12 07:13:18 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:13:18 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:13:18 --> Utf8 Class Initialized
INFO - 2019-12-12 07:13:18 --> URI Class Initialized
INFO - 2019-12-12 07:13:18 --> Router Class Initialized
INFO - 2019-12-12 07:13:18 --> Output Class Initialized
INFO - 2019-12-12 07:13:18 --> Security Class Initialized
DEBUG - 2019-12-12 07:13:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:13:18 --> Input Class Initialized
INFO - 2019-12-12 07:13:18 --> Language Class Initialized
INFO - 2019-12-12 07:13:18 --> Loader Class Initialized
INFO - 2019-12-12 07:13:18 --> Helper loaded: html_helper
INFO - 2019-12-12 07:13:18 --> Helper loaded: url_helper
INFO - 2019-12-12 07:13:18 --> Helper loaded: form_helper
INFO - 2019-12-12 07:13:18 --> Database Driver Class Initialized
INFO - 2019-12-12 07:13:18 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:13:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:13:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:13:18 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:13:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:13:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:13:18 --> Controller Class Initialized
DEBUG - 2019-12-12 07:13:18 --> Create_User constructer got called..
INFO - 2019-12-12 07:13:18 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 07:13:18 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 07:13:18 --> insert_data method got called from Create_User...
DEBUG - 2019-12-12 07:13:18 --> firstName :- Niraj  lastName :- Mhatre
DEBUG - 2019-12-12 07:13:18 --> userId :- nirajcmhatre mobileNumber :- 9699675725
DEBUG - 2019-12-12 07:13:18 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2019-12-12 07:13:18 --> workGroup_id :- 42 userType :- DB
INFO - 2019-12-12 07:13:18 --> store_user_name function called ...
ERROR - 2019-12-12 07:13:19 --> Query error: Duplicate entry 'nirajcmhatre' for key 'userId' - Invalid query: INSERT INTO `tblusers` (`firstName`, `lastName`, `userId`, `mobileNumber`, `userPassword`, `isActive`, `workGroup_id`, `userType`) VALUES ('Niraj ', 'Mhatre', 'nirajcmhatre', '9699675725', 'Test@12345', '1', '42', 'DB')
DEBUG - 2019-12-12 07:13:19 --> User insertion failed...
DEBUG - 2019-12-12 07:13:19 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 07:13:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 07:13:19 --> Final output sent to browser
DEBUG - 2019-12-12 07:13:19 --> Total execution time: 0.4250
INFO - 2019-12-12 07:13:22 --> Config Class Initialized
INFO - 2019-12-12 07:13:22 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:13:22 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:13:22 --> Utf8 Class Initialized
INFO - 2019-12-12 07:13:22 --> URI Class Initialized
INFO - 2019-12-12 07:13:22 --> Router Class Initialized
INFO - 2019-12-12 07:13:22 --> Output Class Initialized
INFO - 2019-12-12 07:13:22 --> Security Class Initialized
DEBUG - 2019-12-12 07:13:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:13:22 --> Input Class Initialized
INFO - 2019-12-12 07:13:22 --> Language Class Initialized
INFO - 2019-12-12 07:13:22 --> Loader Class Initialized
INFO - 2019-12-12 07:13:22 --> Helper loaded: html_helper
INFO - 2019-12-12 07:13:22 --> Helper loaded: url_helper
INFO - 2019-12-12 07:13:22 --> Helper loaded: form_helper
INFO - 2019-12-12 07:13:22 --> Database Driver Class Initialized
INFO - 2019-12-12 07:13:23 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:13:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:13:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:13:23 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:13:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:13:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:13:23 --> Controller Class Initialized
DEBUG - 2019-12-12 07:13:23 --> Create_User constructer got called..
DEBUG - 2019-12-12 07:13:23 --> loading configurable menu with result=
INFO - 2019-12-12 07:13:23 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:13:23 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 07:13:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 07:13:23 --> Final output sent to browser
DEBUG - 2019-12-12 07:13:23 --> Total execution time: 0.3490
INFO - 2019-12-12 07:14:10 --> Config Class Initialized
INFO - 2019-12-12 07:14:10 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:14:10 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:14:10 --> Utf8 Class Initialized
INFO - 2019-12-12 07:14:10 --> URI Class Initialized
INFO - 2019-12-12 07:14:10 --> Router Class Initialized
INFO - 2019-12-12 07:14:10 --> Output Class Initialized
INFO - 2019-12-12 07:14:10 --> Security Class Initialized
DEBUG - 2019-12-12 07:14:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:14:10 --> Input Class Initialized
INFO - 2019-12-12 07:14:10 --> Language Class Initialized
INFO - 2019-12-12 07:14:10 --> Loader Class Initialized
INFO - 2019-12-12 07:14:10 --> Helper loaded: html_helper
INFO - 2019-12-12 07:14:10 --> Helper loaded: url_helper
INFO - 2019-12-12 07:14:10 --> Helper loaded: form_helper
INFO - 2019-12-12 07:14:10 --> Database Driver Class Initialized
INFO - 2019-12-12 07:14:10 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:14:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:14:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:14:10 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:14:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:14:10 --> Controller Class Initialized
DEBUG - 2019-12-12 07:14:10 --> Create_User constructer got called..
INFO - 2019-12-12 07:14:10 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 07:14:10 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2019-12-12 07:14:10 --> Group inserted
DEBUG - 2019-12-12 07:14:10 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 07:14:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 07:14:10 --> Final output sent to browser
DEBUG - 2019-12-12 07:14:10 --> Total execution time: 0.2280
INFO - 2019-12-12 07:15:31 --> Config Class Initialized
INFO - 2019-12-12 07:15:31 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:15:31 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:15:31 --> Utf8 Class Initialized
INFO - 2019-12-12 07:15:31 --> URI Class Initialized
INFO - 2019-12-12 07:15:31 --> Router Class Initialized
INFO - 2019-12-12 07:15:31 --> Output Class Initialized
INFO - 2019-12-12 07:15:31 --> Security Class Initialized
DEBUG - 2019-12-12 07:15:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:15:31 --> Input Class Initialized
INFO - 2019-12-12 07:15:31 --> Language Class Initialized
INFO - 2019-12-12 07:15:31 --> Loader Class Initialized
INFO - 2019-12-12 07:15:31 --> Helper loaded: html_helper
INFO - 2019-12-12 07:15:31 --> Helper loaded: url_helper
INFO - 2019-12-12 07:15:31 --> Helper loaded: form_helper
INFO - 2019-12-12 07:15:31 --> Database Driver Class Initialized
INFO - 2019-12-12 07:15:31 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:15:31 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:15:31 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:15:31 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:15:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:15:31 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:15:31 --> Controller Class Initialized
DEBUG - 2019-12-12 07:15:31 --> Create_User constructer got called..
INFO - 2019-12-12 07:15:31 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 07:15:31 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2019-12-12 07:15:31 --> Query error: Duplicate entry 'My_Group' for key 'groupName' - Invalid query: INSERT INTO `permission_groups` (`groupName`, `groupDesc`, `groupSection`) VALUES ('My_Group', 'This is test group', 'A1-A2-A3')
DEBUG - 2019-12-12 07:15:31 --> Group insertion failed...
DEBUG - 2019-12-12 07:15:31 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 07:15:31 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 07:15:31 --> Final output sent to browser
DEBUG - 2019-12-12 07:15:31 --> Total execution time: 0.4410
INFO - 2019-12-12 07:18:42 --> Config Class Initialized
INFO - 2019-12-12 07:18:42 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:18:42 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:18:42 --> Utf8 Class Initialized
INFO - 2019-12-12 07:18:42 --> URI Class Initialized
INFO - 2019-12-12 07:18:42 --> Router Class Initialized
INFO - 2019-12-12 07:18:42 --> Output Class Initialized
INFO - 2019-12-12 07:18:42 --> Security Class Initialized
DEBUG - 2019-12-12 07:18:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:18:42 --> Input Class Initialized
INFO - 2019-12-12 07:18:42 --> Language Class Initialized
INFO - 2019-12-12 07:18:42 --> Loader Class Initialized
INFO - 2019-12-12 07:18:42 --> Helper loaded: html_helper
INFO - 2019-12-12 07:18:42 --> Helper loaded: url_helper
INFO - 2019-12-12 07:18:42 --> Helper loaded: form_helper
INFO - 2019-12-12 07:18:42 --> Database Driver Class Initialized
INFO - 2019-12-12 07:18:42 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:18:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:18:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:18:42 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:18:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:18:42 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:18:42 --> Controller Class Initialized
DEBUG - 2019-12-12 07:18:42 --> Create_User constructer got called..
INFO - 2019-12-12 07:18:42 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 07:18:42 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2019-12-12 07:18:42 --> Group inserted
DEBUG - 2019-12-12 07:18:42 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 07:18:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 07:18:42 --> Final output sent to browser
DEBUG - 2019-12-12 07:18:42 --> Total execution time: 0.3260
INFO - 2019-12-12 07:18:46 --> Config Class Initialized
INFO - 2019-12-12 07:18:46 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:18:46 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:18:46 --> Utf8 Class Initialized
INFO - 2019-12-12 07:18:46 --> URI Class Initialized
INFO - 2019-12-12 07:18:46 --> Router Class Initialized
INFO - 2019-12-12 07:18:46 --> Output Class Initialized
INFO - 2019-12-12 07:18:46 --> Security Class Initialized
DEBUG - 2019-12-12 07:18:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:18:46 --> Input Class Initialized
INFO - 2019-12-12 07:18:46 --> Language Class Initialized
INFO - 2019-12-12 07:18:46 --> Loader Class Initialized
INFO - 2019-12-12 07:18:46 --> Helper loaded: html_helper
INFO - 2019-12-12 07:18:46 --> Helper loaded: url_helper
INFO - 2019-12-12 07:18:46 --> Helper loaded: form_helper
INFO - 2019-12-12 07:18:46 --> Database Driver Class Initialized
INFO - 2019-12-12 07:18:46 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:18:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:18:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:18:46 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:18:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:18:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:18:46 --> Controller Class Initialized
DEBUG - 2019-12-12 07:18:46 --> Create_User constructer got called..
INFO - 2019-12-12 07:18:46 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 07:18:46 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2019-12-12 07:18:46 --> Query error: Duplicate entry 'My_Group' for key 'groupName' - Invalid query: INSERT INTO `permission_groups` (`groupName`, `groupDesc`, `groupSection`) VALUES ('My_Group', 'This is test group', 'A1-A2-A3')
DEBUG - 2019-12-12 07:18:46 --> Group insertion failed...
DEBUG - 2019-12-12 07:18:46 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 07:18:46 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 07:18:46 --> Final output sent to browser
DEBUG - 2019-12-12 07:18:46 --> Total execution time: 0.4200
INFO - 2019-12-12 07:19:46 --> Config Class Initialized
INFO - 2019-12-12 07:19:46 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:19:46 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:19:46 --> Utf8 Class Initialized
INFO - 2019-12-12 07:19:46 --> URI Class Initialized
INFO - 2019-12-12 07:19:46 --> Router Class Initialized
INFO - 2019-12-12 07:19:46 --> Output Class Initialized
INFO - 2019-12-12 07:19:46 --> Security Class Initialized
DEBUG - 2019-12-12 07:19:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:19:46 --> Input Class Initialized
INFO - 2019-12-12 07:19:46 --> Language Class Initialized
INFO - 2019-12-12 07:19:46 --> Loader Class Initialized
INFO - 2019-12-12 07:19:46 --> Helper loaded: html_helper
INFO - 2019-12-12 07:19:46 --> Helper loaded: url_helper
INFO - 2019-12-12 07:19:46 --> Helper loaded: form_helper
INFO - 2019-12-12 07:19:46 --> Database Driver Class Initialized
INFO - 2019-12-12 07:19:46 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:19:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:19:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:19:46 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:19:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:19:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:19:46 --> Controller Class Initialized
DEBUG - 2019-12-12 07:19:46 --> Create_User constructer got called..
INFO - 2019-12-12 07:19:46 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 07:19:46 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2019-12-12 07:19:47 --> Query error: Duplicate entry 'My_Group' for key 'groupName' - Invalid query: INSERT INTO `permission_groups` (`groupName`, `groupDesc`, `groupSection`) VALUES ('My_Group', 'This is test group', 'A1-A2-A3')
DEBUG - 2019-12-12 07:19:47 --> Group insertion failed...
DEBUG - 2019-12-12 07:19:47 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 07:19:47 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 07:19:47 --> Final output sent to browser
DEBUG - 2019-12-12 07:19:47 --> Total execution time: 0.4770
INFO - 2019-12-12 07:19:58 --> Config Class Initialized
INFO - 2019-12-12 07:19:58 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:19:58 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:19:58 --> Utf8 Class Initialized
INFO - 2019-12-12 07:19:58 --> URI Class Initialized
INFO - 2019-12-12 07:19:58 --> Router Class Initialized
INFO - 2019-12-12 07:19:58 --> Output Class Initialized
INFO - 2019-12-12 07:19:59 --> Security Class Initialized
DEBUG - 2019-12-12 07:19:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:19:59 --> Input Class Initialized
INFO - 2019-12-12 07:19:59 --> Language Class Initialized
INFO - 2019-12-12 07:19:59 --> Loader Class Initialized
INFO - 2019-12-12 07:19:59 --> Helper loaded: html_helper
INFO - 2019-12-12 07:19:59 --> Helper loaded: url_helper
INFO - 2019-12-12 07:19:59 --> Helper loaded: form_helper
INFO - 2019-12-12 07:19:59 --> Database Driver Class Initialized
INFO - 2019-12-12 07:19:59 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:19:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:19:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:19:59 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:19:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:19:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:19:59 --> Controller Class Initialized
DEBUG - 2019-12-12 07:19:59 --> Create_User constructer got called..
INFO - 2019-12-12 07:19:59 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 07:19:59 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2019-12-12 07:19:59 --> Query error: Duplicate entry 'My_Group' for key 'groupName' - Invalid query: INSERT INTO `permission_groups` (`groupName`, `groupDesc`, `groupSection`) VALUES ('My_Group', 'This is test group', 'A1-A2-A3')
DEBUG - 2019-12-12 07:19:59 --> Group insertion failed...
DEBUG - 2019-12-12 07:19:59 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 07:19:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 07:19:59 --> Final output sent to browser
DEBUG - 2019-12-12 07:19:59 --> Total execution time: 0.3610
INFO - 2019-12-12 07:20:08 --> Config Class Initialized
INFO - 2019-12-12 07:20:08 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:20:08 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:20:08 --> Utf8 Class Initialized
INFO - 2019-12-12 07:20:08 --> URI Class Initialized
INFO - 2019-12-12 07:20:08 --> Router Class Initialized
INFO - 2019-12-12 07:20:08 --> Output Class Initialized
INFO - 2019-12-12 07:20:08 --> Security Class Initialized
DEBUG - 2019-12-12 07:20:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:20:08 --> Input Class Initialized
INFO - 2019-12-12 07:20:08 --> Language Class Initialized
INFO - 2019-12-12 07:20:08 --> Loader Class Initialized
INFO - 2019-12-12 07:20:08 --> Helper loaded: html_helper
INFO - 2019-12-12 07:20:08 --> Helper loaded: url_helper
INFO - 2019-12-12 07:20:08 --> Helper loaded: form_helper
INFO - 2019-12-12 07:20:08 --> Database Driver Class Initialized
INFO - 2019-12-12 07:20:08 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:20:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:20:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:20:08 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:20:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:20:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:20:08 --> Controller Class Initialized
DEBUG - 2019-12-12 07:20:08 --> Create_User constructer got called..
INFO - 2019-12-12 07:20:08 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:20:08 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:20:08 --> show_users from DB
INFO - 2019-12-12 07:20:08 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:20:08 --> Final output sent to browser
DEBUG - 2019-12-12 07:20:08 --> Total execution time: 0.3230
INFO - 2019-12-12 07:20:23 --> Config Class Initialized
INFO - 2019-12-12 07:20:23 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:20:23 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:20:23 --> Utf8 Class Initialized
INFO - 2019-12-12 07:20:23 --> URI Class Initialized
DEBUG - 2019-12-12 07:20:23 --> No URI present. Default controller set.
INFO - 2019-12-12 07:20:23 --> Router Class Initialized
INFO - 2019-12-12 07:20:23 --> Output Class Initialized
INFO - 2019-12-12 07:20:23 --> Security Class Initialized
DEBUG - 2019-12-12 07:20:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:20:23 --> Input Class Initialized
INFO - 2019-12-12 07:20:23 --> Language Class Initialized
INFO - 2019-12-12 07:20:23 --> Loader Class Initialized
INFO - 2019-12-12 07:20:23 --> Helper loaded: html_helper
INFO - 2019-12-12 07:20:23 --> Helper loaded: url_helper
INFO - 2019-12-12 07:20:23 --> Helper loaded: form_helper
INFO - 2019-12-12 07:20:23 --> Database Driver Class Initialized
INFO - 2019-12-12 07:20:23 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:20:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:20:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:20:23 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:20:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:20:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:20:23 --> Controller Class Initialized
INFO - 2019-12-12 07:20:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 07:20:23 --> Final output sent to browser
DEBUG - 2019-12-12 07:20:23 --> Total execution time: 0.0810
INFO - 2019-12-12 07:20:23 --> Config Class Initialized
INFO - 2019-12-12 07:20:23 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:20:23 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:20:23 --> Utf8 Class Initialized
INFO - 2019-12-12 07:20:23 --> URI Class Initialized
DEBUG - 2019-12-12 07:20:23 --> No URI present. Default controller set.
INFO - 2019-12-12 07:20:23 --> Router Class Initialized
INFO - 2019-12-12 07:20:23 --> Output Class Initialized
INFO - 2019-12-12 07:20:23 --> Security Class Initialized
DEBUG - 2019-12-12 07:20:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:20:23 --> Input Class Initialized
INFO - 2019-12-12 07:20:23 --> Language Class Initialized
INFO - 2019-12-12 07:20:23 --> Loader Class Initialized
INFO - 2019-12-12 07:20:23 --> Helper loaded: html_helper
INFO - 2019-12-12 07:20:23 --> Helper loaded: url_helper
INFO - 2019-12-12 07:20:23 --> Helper loaded: form_helper
INFO - 2019-12-12 07:20:23 --> Database Driver Class Initialized
INFO - 2019-12-12 07:20:23 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:20:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:20:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:20:23 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:20:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:20:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:20:23 --> Controller Class Initialized
INFO - 2019-12-12 07:20:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 07:20:23 --> Final output sent to browser
DEBUG - 2019-12-12 07:20:23 --> Total execution time: 0.1580
INFO - 2019-12-12 07:20:28 --> Config Class Initialized
INFO - 2019-12-12 07:20:28 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:20:28 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:20:28 --> Utf8 Class Initialized
INFO - 2019-12-12 07:20:28 --> URI Class Initialized
INFO - 2019-12-12 07:20:28 --> Router Class Initialized
INFO - 2019-12-12 07:20:28 --> Output Class Initialized
INFO - 2019-12-12 07:20:28 --> Security Class Initialized
DEBUG - 2019-12-12 07:20:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:20:28 --> Input Class Initialized
INFO - 2019-12-12 07:20:28 --> Language Class Initialized
INFO - 2019-12-12 07:20:28 --> Loader Class Initialized
INFO - 2019-12-12 07:20:28 --> Helper loaded: html_helper
INFO - 2019-12-12 07:20:28 --> Helper loaded: url_helper
INFO - 2019-12-12 07:20:28 --> Helper loaded: form_helper
INFO - 2019-12-12 07:20:28 --> Database Driver Class Initialized
INFO - 2019-12-12 07:20:28 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:20:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:20:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:20:28 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:20:28 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:20:28 --> Controller Class Initialized
INFO - 2019-12-12 07:20:28 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 07:20:28 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 07:20:28 --> getAuth method got called...
DEBUG - 2019-12-12 07:20:28 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 07:20:28 --> Unreachable block here....
DEBUG - 2019-12-12 07:20:28 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 07:20:28 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 07:20:28 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 07:20:46 --> Config Class Initialized
INFO - 2019-12-12 07:20:46 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:20:46 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:20:46 --> Utf8 Class Initialized
INFO - 2019-12-12 07:20:46 --> URI Class Initialized
INFO - 2019-12-12 07:20:46 --> Router Class Initialized
INFO - 2019-12-12 07:20:46 --> Output Class Initialized
INFO - 2019-12-12 07:20:46 --> Security Class Initialized
DEBUG - 2019-12-12 07:20:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:20:46 --> Input Class Initialized
INFO - 2019-12-12 07:20:46 --> Language Class Initialized
INFO - 2019-12-12 07:20:46 --> Config Class Initialized
INFO - 2019-12-12 07:20:46 --> Hooks Class Initialized
INFO - 2019-12-12 07:20:46 --> Loader Class Initialized
INFO - 2019-12-12 07:20:46 --> Helper loaded: html_helper
DEBUG - 2019-12-12 07:20:46 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:20:46 --> Utf8 Class Initialized
INFO - 2019-12-12 07:20:46 --> Helper loaded: url_helper
INFO - 2019-12-12 07:20:46 --> URI Class Initialized
INFO - 2019-12-12 07:20:46 --> Helper loaded: form_helper
INFO - 2019-12-12 07:20:46 --> Router Class Initialized
INFO - 2019-12-12 07:20:46 --> Output Class Initialized
INFO - 2019-12-12 07:20:46 --> Security Class Initialized
INFO - 2019-12-12 07:20:46 --> Database Driver Class Initialized
DEBUG - 2019-12-12 07:20:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:20:46 --> Input Class Initialized
INFO - 2019-12-12 07:20:46 --> Language Class Initialized
INFO - 2019-12-12 07:20:46 --> Loader Class Initialized
INFO - 2019-12-12 07:20:46 --> Form Validation Class Initialized
INFO - 2019-12-12 07:20:46 --> Helper loaded: html_helper
DEBUG - 2019-12-12 07:20:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:20:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:20:46 --> Helper loaded: url_helper
INFO - 2019-12-12 07:20:46 --> Encryption Class Initialized
INFO - 2019-12-12 07:20:46 --> Helper loaded: form_helper
DEBUG - 2019-12-12 07:20:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:20:47 --> Database Driver Class Initialized
INFO - 2019-12-12 07:20:47 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:20:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:20:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:20:47 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:20:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:20:49 -->  ldap login success
INFO - 2019-12-12 07:20:49 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 07:20:49 --> Role Retrive from DB
DEBUG - 2019-12-12 07:20:49 --> loading model Active_Session
INFO - 2019-12-12 07:20:49 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 07:20:49 --> calling insert_active_session()
DEBUG - 2019-12-12 07:20:49 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 07:20:49 --> insert success
DEBUG - 2019-12-12 07:20:49 --> loading Configarable_Login model...
INFO - 2019-12-12 07:20:49 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 07:20:49 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 07:20:49 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 07:20:49 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-12 07:20:49 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 07:20:49 --> loading view public\Dashboard
INFO - 2019-12-12 07:20:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 07:20:49 --> Final output sent to browser
DEBUG - 2019-12-12 07:20:49 --> Total execution time: 21.6470
INFO - 2019-12-12 07:20:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:20:49 --> Controller Class Initialized
INFO - 2019-12-12 07:20:49 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 07:20:49 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 07:20:49 --> getAuth method got called...
DEBUG - 2019-12-12 07:20:49 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 07:20:49 --> Unreachable block here....
DEBUG - 2019-12-12 07:20:49 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 07:20:49 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 07:20:49 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 07:21:11 -->  ldap login success
INFO - 2019-12-12 07:21:11 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 07:21:11 --> Role Retrive from DB
DEBUG - 2019-12-12 07:21:11 --> loading model Active_Session
INFO - 2019-12-12 07:21:11 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 07:21:11 --> calling insert_active_session()
DEBUG - 2019-12-12 07:21:11 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 07:21:11 --> insert success
DEBUG - 2019-12-12 07:21:11 --> loading Configarable_Login model...
INFO - 2019-12-12 07:21:11 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 07:21:11 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 07:21:11 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 07:21:11 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-12 07:21:11 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 07:21:11 --> loading view public\Dashboard
INFO - 2019-12-12 07:21:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 07:21:11 --> Final output sent to browser
DEBUG - 2019-12-12 07:21:11 --> Total execution time: 24.5600
INFO - 2019-12-12 07:21:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:21:11 --> Controller Class Initialized
INFO - 2019-12-12 07:21:11 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 07:21:11 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 07:21:11 --> getAuth method got called...
DEBUG - 2019-12-12 07:21:11 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 07:21:11 --> Unreachable block here....
DEBUG - 2019-12-12 07:21:11 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 07:21:11 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 07:21:11 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 07:21:32 -->  ldap login success
INFO - 2019-12-12 07:21:32 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 07:21:32 --> Role Retrive from DB
DEBUG - 2019-12-12 07:21:32 --> loading model Active_Session
INFO - 2019-12-12 07:21:32 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 07:21:32 --> calling insert_active_session()
DEBUG - 2019-12-12 07:21:32 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 07:21:32 --> insert success
DEBUG - 2019-12-12 07:21:32 --> loading Configarable_Login model...
INFO - 2019-12-12 07:21:32 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 07:21:32 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 07:21:32 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 07:21:32 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-12 07:21:32 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 07:21:32 --> loading view public\Dashboard
INFO - 2019-12-12 07:21:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 07:21:32 --> Final output sent to browser
DEBUG - 2019-12-12 07:21:32 --> Total execution time: 46.0010
INFO - 2019-12-12 07:38:58 --> Config Class Initialized
INFO - 2019-12-12 07:38:58 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:38:58 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:38:58 --> Utf8 Class Initialized
INFO - 2019-12-12 07:38:58 --> URI Class Initialized
INFO - 2019-12-12 07:38:58 --> Router Class Initialized
INFO - 2019-12-12 07:38:58 --> Output Class Initialized
INFO - 2019-12-12 07:38:58 --> Security Class Initialized
DEBUG - 2019-12-12 07:38:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:38:58 --> Input Class Initialized
INFO - 2019-12-12 07:38:58 --> Language Class Initialized
INFO - 2019-12-12 07:38:58 --> Loader Class Initialized
INFO - 2019-12-12 07:38:58 --> Helper loaded: html_helper
INFO - 2019-12-12 07:38:58 --> Helper loaded: url_helper
INFO - 2019-12-12 07:38:58 --> Helper loaded: form_helper
INFO - 2019-12-12 07:38:59 --> Database Driver Class Initialized
INFO - 2019-12-12 07:38:59 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:38:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:38:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:38:59 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:38:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:38:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:38:59 --> Controller Class Initialized
DEBUG - 2019-12-12 07:38:59 --> Create_User constructer got called..
DEBUG - 2019-12-12 07:38:59 --> loading configurable menu with result=
INFO - 2019-12-12 07:38:59 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:38:59 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 07:38:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 07:38:59 --> Final output sent to browser
DEBUG - 2019-12-12 07:38:59 --> Total execution time: 0.3690
INFO - 2019-12-12 07:39:02 --> Config Class Initialized
INFO - 2019-12-12 07:39:02 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:39:02 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:39:02 --> Utf8 Class Initialized
INFO - 2019-12-12 07:39:02 --> URI Class Initialized
INFO - 2019-12-12 07:39:02 --> Router Class Initialized
INFO - 2019-12-12 07:39:02 --> Output Class Initialized
INFO - 2019-12-12 07:39:02 --> Security Class Initialized
DEBUG - 2019-12-12 07:39:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:39:02 --> Input Class Initialized
INFO - 2019-12-12 07:39:02 --> Language Class Initialized
INFO - 2019-12-12 07:39:02 --> Loader Class Initialized
INFO - 2019-12-12 07:39:02 --> Helper loaded: html_helper
INFO - 2019-12-12 07:39:02 --> Helper loaded: url_helper
INFO - 2019-12-12 07:39:02 --> Helper loaded: form_helper
INFO - 2019-12-12 07:39:02 --> Database Driver Class Initialized
INFO - 2019-12-12 07:39:02 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:39:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:39:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:39:02 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:39:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:39:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:39:02 --> Controller Class Initialized
DEBUG - 2019-12-12 07:39:02 --> Create_User constructer got called..
INFO - 2019-12-12 07:39:02 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:39:02 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:39:02 --> show_users from DB
INFO - 2019-12-12 07:39:02 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:39:02 --> Final output sent to browser
DEBUG - 2019-12-12 07:39:02 --> Total execution time: 0.2040
INFO - 2019-12-12 07:40:32 --> Config Class Initialized
INFO - 2019-12-12 07:40:32 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:40:32 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:40:32 --> Utf8 Class Initialized
INFO - 2019-12-12 07:40:32 --> URI Class Initialized
INFO - 2019-12-12 07:40:32 --> Router Class Initialized
INFO - 2019-12-12 07:40:32 --> Output Class Initialized
INFO - 2019-12-12 07:40:32 --> Security Class Initialized
DEBUG - 2019-12-12 07:40:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:40:32 --> Input Class Initialized
INFO - 2019-12-12 07:40:32 --> Language Class Initialized
INFO - 2019-12-12 07:40:32 --> Loader Class Initialized
INFO - 2019-12-12 07:40:32 --> Helper loaded: html_helper
INFO - 2019-12-12 07:40:32 --> Helper loaded: url_helper
INFO - 2019-12-12 07:40:32 --> Helper loaded: form_helper
INFO - 2019-12-12 07:40:32 --> Database Driver Class Initialized
INFO - 2019-12-12 07:40:32 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:40:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:40:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:40:32 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:40:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:40:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:40:32 --> Controller Class Initialized
DEBUG - 2019-12-12 07:40:32 --> Create_User constructer got called..
INFO - 2019-12-12 07:40:32 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:40:32 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:40:32 --> show_users from DB
INFO - 2019-12-12 07:40:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:40:32 --> Final output sent to browser
DEBUG - 2019-12-12 07:40:32 --> Total execution time: 0.2710
INFO - 2019-12-12 07:42:59 --> Config Class Initialized
INFO - 2019-12-12 07:42:59 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:42:59 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:42:59 --> Utf8 Class Initialized
INFO - 2019-12-12 07:42:59 --> URI Class Initialized
INFO - 2019-12-12 07:42:59 --> Router Class Initialized
INFO - 2019-12-12 07:42:59 --> Output Class Initialized
INFO - 2019-12-12 07:42:59 --> Security Class Initialized
DEBUG - 2019-12-12 07:42:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:42:59 --> Input Class Initialized
INFO - 2019-12-12 07:42:59 --> Language Class Initialized
INFO - 2019-12-12 07:42:59 --> Loader Class Initialized
INFO - 2019-12-12 07:42:59 --> Helper loaded: html_helper
INFO - 2019-12-12 07:42:59 --> Helper loaded: url_helper
INFO - 2019-12-12 07:42:59 --> Helper loaded: form_helper
INFO - 2019-12-12 07:42:59 --> Database Driver Class Initialized
INFO - 2019-12-12 07:42:59 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:42:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:42:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:42:59 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:42:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:42:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:42:59 --> Controller Class Initialized
DEBUG - 2019-12-12 07:42:59 --> Create_User constructer got called..
INFO - 2019-12-12 07:42:59 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:42:59 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:42:59 --> show_users from DB
INFO - 2019-12-12 07:42:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:42:59 --> Final output sent to browser
DEBUG - 2019-12-12 07:42:59 --> Total execution time: 0.3780
INFO - 2019-12-12 07:45:07 --> Config Class Initialized
INFO - 2019-12-12 07:45:07 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:45:07 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:45:07 --> Utf8 Class Initialized
INFO - 2019-12-12 07:45:07 --> URI Class Initialized
INFO - 2019-12-12 07:45:07 --> Router Class Initialized
INFO - 2019-12-12 07:45:07 --> Output Class Initialized
INFO - 2019-12-12 07:45:07 --> Security Class Initialized
DEBUG - 2019-12-12 07:45:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:45:07 --> Input Class Initialized
INFO - 2019-12-12 07:45:07 --> Language Class Initialized
INFO - 2019-12-12 07:45:07 --> Loader Class Initialized
INFO - 2019-12-12 07:45:07 --> Helper loaded: html_helper
INFO - 2019-12-12 07:45:07 --> Helper loaded: url_helper
INFO - 2019-12-12 07:45:07 --> Helper loaded: form_helper
INFO - 2019-12-12 07:45:07 --> Database Driver Class Initialized
INFO - 2019-12-12 07:45:07 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:45:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:45:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:45:07 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:45:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:45:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:45:07 --> Controller Class Initialized
DEBUG - 2019-12-12 07:45:07 --> Create_User constructer got called..
INFO - 2019-12-12 07:45:07 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:45:07 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:45:07 --> show_users from DB
INFO - 2019-12-12 07:45:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:45:07 --> Final output sent to browser
DEBUG - 2019-12-12 07:45:07 --> Total execution time: 0.3790
INFO - 2019-12-12 07:45:14 --> Config Class Initialized
INFO - 2019-12-12 07:45:14 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:45:14 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:45:14 --> Utf8 Class Initialized
INFO - 2019-12-12 07:45:14 --> URI Class Initialized
INFO - 2019-12-12 07:45:14 --> Router Class Initialized
INFO - 2019-12-12 07:45:14 --> Output Class Initialized
INFO - 2019-12-12 07:45:14 --> Security Class Initialized
DEBUG - 2019-12-12 07:45:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:45:14 --> Input Class Initialized
INFO - 2019-12-12 07:45:14 --> Language Class Initialized
INFO - 2019-12-12 07:45:14 --> Loader Class Initialized
INFO - 2019-12-12 07:45:14 --> Helper loaded: html_helper
INFO - 2019-12-12 07:45:15 --> Helper loaded: url_helper
INFO - 2019-12-12 07:45:15 --> Helper loaded: form_helper
INFO - 2019-12-12 07:45:15 --> Database Driver Class Initialized
INFO - 2019-12-12 07:45:15 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:45:15 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:45:15 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:45:15 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:45:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:45:15 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:45:15 --> Controller Class Initialized
DEBUG - 2019-12-12 07:45:15 --> Create_User constructer got called..
INFO - 2019-12-12 07:45:15 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:45:15 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:45:15 --> show_users from DB
INFO - 2019-12-12 07:45:15 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:45:15 --> Final output sent to browser
DEBUG - 2019-12-12 07:45:15 --> Total execution time: 0.4730
INFO - 2019-12-12 07:45:32 --> Config Class Initialized
INFO - 2019-12-12 07:45:32 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:45:32 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:45:32 --> Utf8 Class Initialized
INFO - 2019-12-12 07:45:32 --> URI Class Initialized
INFO - 2019-12-12 07:45:32 --> Router Class Initialized
INFO - 2019-12-12 07:45:32 --> Output Class Initialized
INFO - 2019-12-12 07:45:32 --> Security Class Initialized
DEBUG - 2019-12-12 07:45:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:45:32 --> Input Class Initialized
INFO - 2019-12-12 07:45:32 --> Language Class Initialized
INFO - 2019-12-12 07:45:32 --> Loader Class Initialized
INFO - 2019-12-12 07:45:32 --> Helper loaded: html_helper
INFO - 2019-12-12 07:45:32 --> Helper loaded: url_helper
INFO - 2019-12-12 07:45:32 --> Helper loaded: form_helper
INFO - 2019-12-12 07:45:32 --> Database Driver Class Initialized
INFO - 2019-12-12 07:45:32 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:45:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:45:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:45:32 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:45:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:45:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:45:32 --> Controller Class Initialized
DEBUG - 2019-12-12 07:45:32 --> Create_User constructer got called..
INFO - 2019-12-12 07:45:32 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:45:32 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:45:32 --> show_users from DB
INFO - 2019-12-12 07:45:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:45:32 --> Final output sent to browser
DEBUG - 2019-12-12 07:45:32 --> Total execution time: 0.2520
INFO - 2019-12-12 07:46:35 --> Config Class Initialized
INFO - 2019-12-12 07:46:35 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:46:35 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:46:35 --> Utf8 Class Initialized
INFO - 2019-12-12 07:46:35 --> URI Class Initialized
INFO - 2019-12-12 07:46:35 --> Router Class Initialized
INFO - 2019-12-12 07:46:35 --> Output Class Initialized
INFO - 2019-12-12 07:46:35 --> Security Class Initialized
DEBUG - 2019-12-12 07:46:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:46:35 --> Input Class Initialized
INFO - 2019-12-12 07:46:35 --> Language Class Initialized
INFO - 2019-12-12 07:46:35 --> Loader Class Initialized
INFO - 2019-12-12 07:46:35 --> Helper loaded: html_helper
INFO - 2019-12-12 07:46:35 --> Helper loaded: url_helper
INFO - 2019-12-12 07:46:35 --> Helper loaded: form_helper
INFO - 2019-12-12 07:46:35 --> Database Driver Class Initialized
INFO - 2019-12-12 07:46:35 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:46:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:46:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:46:35 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:46:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:46:35 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:46:35 --> Controller Class Initialized
DEBUG - 2019-12-12 07:46:35 --> Create_User constructer got called..
INFO - 2019-12-12 07:46:35 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:46:35 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:46:35 --> show_users from DB
INFO - 2019-12-12 07:46:35 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:46:35 --> Final output sent to browser
DEBUG - 2019-12-12 07:46:35 --> Total execution time: 0.4280
INFO - 2019-12-12 07:48:19 --> Config Class Initialized
INFO - 2019-12-12 07:48:19 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:48:19 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:48:19 --> Utf8 Class Initialized
INFO - 2019-12-12 07:48:19 --> URI Class Initialized
INFO - 2019-12-12 07:48:19 --> Router Class Initialized
INFO - 2019-12-12 07:48:19 --> Output Class Initialized
INFO - 2019-12-12 07:48:19 --> Security Class Initialized
DEBUG - 2019-12-12 07:48:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:48:19 --> Input Class Initialized
INFO - 2019-12-12 07:48:19 --> Language Class Initialized
INFO - 2019-12-12 07:48:19 --> Loader Class Initialized
INFO - 2019-12-12 07:48:19 --> Helper loaded: html_helper
INFO - 2019-12-12 07:48:19 --> Helper loaded: url_helper
INFO - 2019-12-12 07:48:19 --> Helper loaded: form_helper
INFO - 2019-12-12 07:48:19 --> Database Driver Class Initialized
INFO - 2019-12-12 07:48:19 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:48:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:48:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:48:19 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:48:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:48:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:48:19 --> Controller Class Initialized
DEBUG - 2019-12-12 07:48:19 --> Create_User constructer got called..
INFO - 2019-12-12 07:48:19 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:48:19 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:48:19 --> show_users from DB
INFO - 2019-12-12 07:48:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:48:19 --> Final output sent to browser
DEBUG - 2019-12-12 07:48:19 --> Total execution time: 0.4000
INFO - 2019-12-12 07:49:48 --> Config Class Initialized
INFO - 2019-12-12 07:49:48 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:49:48 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:49:48 --> Utf8 Class Initialized
INFO - 2019-12-12 07:49:48 --> URI Class Initialized
INFO - 2019-12-12 07:49:48 --> Router Class Initialized
INFO - 2019-12-12 07:49:48 --> Output Class Initialized
INFO - 2019-12-12 07:49:48 --> Security Class Initialized
DEBUG - 2019-12-12 07:49:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:49:48 --> Input Class Initialized
INFO - 2019-12-12 07:49:49 --> Language Class Initialized
INFO - 2019-12-12 07:49:49 --> Loader Class Initialized
INFO - 2019-12-12 07:49:49 --> Helper loaded: html_helper
INFO - 2019-12-12 07:49:49 --> Helper loaded: url_helper
INFO - 2019-12-12 07:49:49 --> Helper loaded: form_helper
INFO - 2019-12-12 07:49:49 --> Database Driver Class Initialized
INFO - 2019-12-12 07:49:49 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:49:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:49:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:49:49 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:49:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:49:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:49:49 --> Controller Class Initialized
DEBUG - 2019-12-12 07:49:49 --> Create_User constructer got called..
INFO - 2019-12-12 07:49:49 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:49:49 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:49:49 --> show_users from DB
INFO - 2019-12-12 07:49:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:49:49 --> Final output sent to browser
DEBUG - 2019-12-12 07:49:49 --> Total execution time: 0.3680
INFO - 2019-12-12 07:52:34 --> Config Class Initialized
INFO - 2019-12-12 07:52:34 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:52:34 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:52:34 --> Utf8 Class Initialized
INFO - 2019-12-12 07:52:34 --> URI Class Initialized
INFO - 2019-12-12 07:52:34 --> Router Class Initialized
INFO - 2019-12-12 07:52:34 --> Output Class Initialized
INFO - 2019-12-12 07:52:34 --> Security Class Initialized
DEBUG - 2019-12-12 07:52:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:52:34 --> Input Class Initialized
INFO - 2019-12-12 07:52:34 --> Language Class Initialized
INFO - 2019-12-12 07:52:34 --> Loader Class Initialized
INFO - 2019-12-12 07:52:34 --> Helper loaded: html_helper
INFO - 2019-12-12 07:52:34 --> Helper loaded: url_helper
INFO - 2019-12-12 07:52:34 --> Helper loaded: form_helper
INFO - 2019-12-12 07:52:34 --> Database Driver Class Initialized
INFO - 2019-12-12 07:52:34 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:52:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:52:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:52:34 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:52:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:52:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:52:34 --> Controller Class Initialized
DEBUG - 2019-12-12 07:52:34 --> Create_User constructer got called..
INFO - 2019-12-12 07:52:34 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:52:34 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:52:34 --> show_users from DB
INFO - 2019-12-12 07:52:34 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:52:34 --> Final output sent to browser
DEBUG - 2019-12-12 07:52:34 --> Total execution time: 0.3680
INFO - 2019-12-12 07:53:17 --> Config Class Initialized
INFO - 2019-12-12 07:53:17 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:53:17 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:53:17 --> Utf8 Class Initialized
INFO - 2019-12-12 07:53:17 --> URI Class Initialized
INFO - 2019-12-12 07:53:17 --> Router Class Initialized
INFO - 2019-12-12 07:53:17 --> Output Class Initialized
INFO - 2019-12-12 07:53:17 --> Security Class Initialized
DEBUG - 2019-12-12 07:53:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:53:17 --> Input Class Initialized
INFO - 2019-12-12 07:53:17 --> Language Class Initialized
INFO - 2019-12-12 07:53:17 --> Loader Class Initialized
INFO - 2019-12-12 07:53:17 --> Helper loaded: html_helper
INFO - 2019-12-12 07:53:17 --> Helper loaded: url_helper
INFO - 2019-12-12 07:53:17 --> Helper loaded: form_helper
INFO - 2019-12-12 07:53:17 --> Database Driver Class Initialized
INFO - 2019-12-12 07:53:17 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:53:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:53:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:53:18 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:53:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:53:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:53:18 --> Controller Class Initialized
DEBUG - 2019-12-12 07:53:18 --> Create_User constructer got called..
INFO - 2019-12-12 07:53:18 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:53:18 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:53:18 --> show_users from DB
INFO - 2019-12-12 07:53:18 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:53:18 --> Final output sent to browser
DEBUG - 2019-12-12 07:53:18 --> Total execution time: 0.3190
INFO - 2019-12-12 07:57:49 --> Config Class Initialized
INFO - 2019-12-12 07:57:49 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:57:49 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:57:49 --> Utf8 Class Initialized
INFO - 2019-12-12 07:57:49 --> URI Class Initialized
INFO - 2019-12-12 07:57:49 --> Router Class Initialized
INFO - 2019-12-12 07:57:49 --> Output Class Initialized
INFO - 2019-12-12 07:57:49 --> Security Class Initialized
DEBUG - 2019-12-12 07:57:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:57:49 --> Input Class Initialized
INFO - 2019-12-12 07:57:49 --> Language Class Initialized
INFO - 2019-12-12 07:57:49 --> Loader Class Initialized
INFO - 2019-12-12 07:57:49 --> Helper loaded: html_helper
INFO - 2019-12-12 07:57:49 --> Helper loaded: url_helper
INFO - 2019-12-12 07:57:49 --> Helper loaded: form_helper
INFO - 2019-12-12 07:57:49 --> Database Driver Class Initialized
INFO - 2019-12-12 07:57:49 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:57:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:57:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:57:49 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:57:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:57:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:57:49 --> Controller Class Initialized
DEBUG - 2019-12-12 07:57:49 --> Create_User constructer got called..
INFO - 2019-12-12 07:57:49 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:57:49 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:57:49 --> show_users from DB
INFO - 2019-12-12 07:57:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:57:49 --> Final output sent to browser
DEBUG - 2019-12-12 07:57:49 --> Total execution time: 0.3670
INFO - 2019-12-12 07:59:28 --> Config Class Initialized
INFO - 2019-12-12 07:59:28 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:59:28 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:59:28 --> Utf8 Class Initialized
INFO - 2019-12-12 07:59:29 --> URI Class Initialized
INFO - 2019-12-12 07:59:29 --> Router Class Initialized
INFO - 2019-12-12 07:59:29 --> Output Class Initialized
INFO - 2019-12-12 07:59:29 --> Security Class Initialized
DEBUG - 2019-12-12 07:59:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:59:29 --> Input Class Initialized
INFO - 2019-12-12 07:59:29 --> Language Class Initialized
INFO - 2019-12-12 07:59:29 --> Loader Class Initialized
INFO - 2019-12-12 07:59:29 --> Helper loaded: html_helper
INFO - 2019-12-12 07:59:29 --> Helper loaded: url_helper
INFO - 2019-12-12 07:59:29 --> Helper loaded: form_helper
INFO - 2019-12-12 07:59:29 --> Database Driver Class Initialized
INFO - 2019-12-12 07:59:29 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:59:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:59:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:59:29 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:59:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:59:29 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:59:29 --> Controller Class Initialized
DEBUG - 2019-12-12 07:59:29 --> Create_User constructer got called..
INFO - 2019-12-12 07:59:29 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:59:29 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:59:29 --> show_users from DB
INFO - 2019-12-12 07:59:29 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:59:29 --> Final output sent to browser
DEBUG - 2019-12-12 07:59:29 --> Total execution time: 0.3180
INFO - 2019-12-12 07:59:58 --> Config Class Initialized
INFO - 2019-12-12 07:59:58 --> Hooks Class Initialized
DEBUG - 2019-12-12 07:59:58 --> UTF-8 Support Enabled
INFO - 2019-12-12 07:59:58 --> Utf8 Class Initialized
INFO - 2019-12-12 07:59:58 --> URI Class Initialized
INFO - 2019-12-12 07:59:58 --> Router Class Initialized
INFO - 2019-12-12 07:59:58 --> Output Class Initialized
INFO - 2019-12-12 07:59:58 --> Security Class Initialized
DEBUG - 2019-12-12 07:59:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 07:59:58 --> Input Class Initialized
INFO - 2019-12-12 07:59:58 --> Language Class Initialized
INFO - 2019-12-12 07:59:58 --> Loader Class Initialized
INFO - 2019-12-12 07:59:58 --> Helper loaded: html_helper
INFO - 2019-12-12 07:59:58 --> Helper loaded: url_helper
INFO - 2019-12-12 07:59:58 --> Helper loaded: form_helper
INFO - 2019-12-12 07:59:58 --> Database Driver Class Initialized
INFO - 2019-12-12 07:59:58 --> Form Validation Class Initialized
DEBUG - 2019-12-12 07:59:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 07:59:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 07:59:58 --> Encryption Class Initialized
DEBUG - 2019-12-12 07:59:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 07:59:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 07:59:58 --> Controller Class Initialized
DEBUG - 2019-12-12 07:59:58 --> Create_User constructer got called..
INFO - 2019-12-12 07:59:58 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 07:59:58 --> showing all user from db tblusers...
DEBUG - 2019-12-12 07:59:58 --> show_users from DB
INFO - 2019-12-12 07:59:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 07:59:58 --> Final output sent to browser
DEBUG - 2019-12-12 07:59:58 --> Total execution time: 0.3730
INFO - 2019-12-12 08:01:04 --> Config Class Initialized
INFO - 2019-12-12 08:01:04 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:01:05 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:01:05 --> Utf8 Class Initialized
INFO - 2019-12-12 08:01:05 --> URI Class Initialized
INFO - 2019-12-12 08:01:05 --> Router Class Initialized
INFO - 2019-12-12 08:01:05 --> Output Class Initialized
INFO - 2019-12-12 08:01:05 --> Security Class Initialized
DEBUG - 2019-12-12 08:01:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:01:05 --> Input Class Initialized
INFO - 2019-12-12 08:01:05 --> Language Class Initialized
INFO - 2019-12-12 08:01:05 --> Loader Class Initialized
INFO - 2019-12-12 08:01:05 --> Helper loaded: html_helper
INFO - 2019-12-12 08:01:05 --> Helper loaded: url_helper
INFO - 2019-12-12 08:01:05 --> Helper loaded: form_helper
INFO - 2019-12-12 08:01:05 --> Database Driver Class Initialized
INFO - 2019-12-12 08:01:05 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:01:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:01:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:01:05 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:01:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:01:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:01:05 --> Controller Class Initialized
DEBUG - 2019-12-12 08:01:05 --> Create_User constructer got called..
INFO - 2019-12-12 08:01:05 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:01:05 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:01:05 --> show_users from DB
INFO - 2019-12-12 08:01:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:01:05 --> Final output sent to browser
DEBUG - 2019-12-12 08:01:05 --> Total execution time: 0.3670
INFO - 2019-12-12 08:02:14 --> Config Class Initialized
INFO - 2019-12-12 08:02:14 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:02:14 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:02:14 --> Utf8 Class Initialized
INFO - 2019-12-12 08:02:14 --> URI Class Initialized
INFO - 2019-12-12 08:02:14 --> Router Class Initialized
INFO - 2019-12-12 08:02:14 --> Output Class Initialized
INFO - 2019-12-12 08:02:14 --> Security Class Initialized
DEBUG - 2019-12-12 08:02:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:02:14 --> Input Class Initialized
INFO - 2019-12-12 08:02:14 --> Language Class Initialized
INFO - 2019-12-12 08:02:14 --> Loader Class Initialized
INFO - 2019-12-12 08:02:14 --> Helper loaded: html_helper
INFO - 2019-12-12 08:02:14 --> Helper loaded: url_helper
INFO - 2019-12-12 08:02:14 --> Helper loaded: form_helper
INFO - 2019-12-12 08:02:15 --> Database Driver Class Initialized
INFO - 2019-12-12 08:02:15 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:02:15 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:02:15 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:02:15 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:02:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:02:15 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:02:15 --> Controller Class Initialized
DEBUG - 2019-12-12 08:02:15 --> Create_User constructer got called..
INFO - 2019-12-12 08:02:15 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:02:15 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:02:15 --> show_users from DB
INFO - 2019-12-12 08:02:15 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:02:15 --> Final output sent to browser
DEBUG - 2019-12-12 08:02:15 --> Total execution time: 0.5070
INFO - 2019-12-12 08:03:00 --> Config Class Initialized
INFO - 2019-12-12 08:03:00 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:03:00 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:03:00 --> Utf8 Class Initialized
INFO - 2019-12-12 08:03:00 --> URI Class Initialized
INFO - 2019-12-12 08:03:00 --> Router Class Initialized
INFO - 2019-12-12 08:03:00 --> Output Class Initialized
INFO - 2019-12-12 08:03:00 --> Security Class Initialized
DEBUG - 2019-12-12 08:03:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:03:00 --> Input Class Initialized
INFO - 2019-12-12 08:03:00 --> Language Class Initialized
INFO - 2019-12-12 08:03:00 --> Loader Class Initialized
INFO - 2019-12-12 08:03:00 --> Helper loaded: html_helper
INFO - 2019-12-12 08:03:00 --> Helper loaded: url_helper
INFO - 2019-12-12 08:03:00 --> Helper loaded: form_helper
INFO - 2019-12-12 08:03:00 --> Database Driver Class Initialized
INFO - 2019-12-12 08:03:00 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:03:00 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:03:00 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:03:00 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:03:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:03:00 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:03:00 --> Controller Class Initialized
DEBUG - 2019-12-12 08:03:00 --> Create_User constructer got called..
INFO - 2019-12-12 08:03:00 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:03:00 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:03:00 --> show_users from DB
INFO - 2019-12-12 08:03:00 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:03:00 --> Final output sent to browser
DEBUG - 2019-12-12 08:03:00 --> Total execution time: 0.3910
INFO - 2019-12-12 08:03:21 --> Config Class Initialized
INFO - 2019-12-12 08:03:21 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:03:21 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:03:21 --> Utf8 Class Initialized
INFO - 2019-12-12 08:03:21 --> URI Class Initialized
INFO - 2019-12-12 08:03:21 --> Router Class Initialized
INFO - 2019-12-12 08:03:21 --> Output Class Initialized
INFO - 2019-12-12 08:03:21 --> Security Class Initialized
DEBUG - 2019-12-12 08:03:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:03:21 --> Input Class Initialized
INFO - 2019-12-12 08:03:21 --> Language Class Initialized
INFO - 2019-12-12 08:03:21 --> Loader Class Initialized
INFO - 2019-12-12 08:03:21 --> Helper loaded: html_helper
INFO - 2019-12-12 08:03:21 --> Helper loaded: url_helper
INFO - 2019-12-12 08:03:21 --> Helper loaded: form_helper
INFO - 2019-12-12 08:03:21 --> Database Driver Class Initialized
INFO - 2019-12-12 08:03:21 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:03:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:03:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:03:21 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:03:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:03:21 --> Controller Class Initialized
DEBUG - 2019-12-12 08:03:21 --> Create_User constructer got called..
INFO - 2019-12-12 08:03:21 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:03:21 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:03:21 --> show_users from DB
INFO - 2019-12-12 08:03:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:03:21 --> Final output sent to browser
DEBUG - 2019-12-12 08:03:21 --> Total execution time: 0.2670
INFO - 2019-12-12 08:03:38 --> Config Class Initialized
INFO - 2019-12-12 08:03:38 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:03:38 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:03:38 --> Utf8 Class Initialized
INFO - 2019-12-12 08:03:38 --> URI Class Initialized
INFO - 2019-12-12 08:03:39 --> Router Class Initialized
INFO - 2019-12-12 08:03:39 --> Output Class Initialized
INFO - 2019-12-12 08:03:39 --> Security Class Initialized
DEBUG - 2019-12-12 08:03:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:03:39 --> Input Class Initialized
INFO - 2019-12-12 08:03:39 --> Language Class Initialized
INFO - 2019-12-12 08:03:39 --> Loader Class Initialized
INFO - 2019-12-12 08:03:39 --> Helper loaded: html_helper
INFO - 2019-12-12 08:03:39 --> Helper loaded: url_helper
INFO - 2019-12-12 08:03:39 --> Helper loaded: form_helper
INFO - 2019-12-12 08:03:39 --> Database Driver Class Initialized
INFO - 2019-12-12 08:03:39 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:03:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:03:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:03:39 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:03:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:03:39 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:03:39 --> Controller Class Initialized
DEBUG - 2019-12-12 08:03:39 --> Create_User constructer got called..
INFO - 2019-12-12 08:03:39 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:03:39 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:03:39 --> show_users from DB
INFO - 2019-12-12 08:03:39 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:03:39 --> Final output sent to browser
DEBUG - 2019-12-12 08:03:39 --> Total execution time: 0.3200
INFO - 2019-12-12 08:04:17 --> Config Class Initialized
INFO - 2019-12-12 08:04:17 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:04:17 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:04:17 --> Utf8 Class Initialized
INFO - 2019-12-12 08:04:17 --> URI Class Initialized
INFO - 2019-12-12 08:04:17 --> Router Class Initialized
INFO - 2019-12-12 08:04:17 --> Output Class Initialized
INFO - 2019-12-12 08:04:17 --> Security Class Initialized
DEBUG - 2019-12-12 08:04:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:04:17 --> Input Class Initialized
INFO - 2019-12-12 08:04:17 --> Language Class Initialized
INFO - 2019-12-12 08:04:17 --> Loader Class Initialized
INFO - 2019-12-12 08:04:17 --> Helper loaded: html_helper
INFO - 2019-12-12 08:04:17 --> Helper loaded: url_helper
INFO - 2019-12-12 08:04:17 --> Helper loaded: form_helper
INFO - 2019-12-12 08:04:17 --> Database Driver Class Initialized
INFO - 2019-12-12 08:04:17 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:04:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:04:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:04:17 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:04:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:04:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:04:17 --> Controller Class Initialized
DEBUG - 2019-12-12 08:04:17 --> Create_User constructer got called..
INFO - 2019-12-12 08:04:17 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:04:17 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:04:17 --> show_users from DB
INFO - 2019-12-12 08:04:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:04:17 --> Final output sent to browser
DEBUG - 2019-12-12 08:04:17 --> Total execution time: 0.3040
INFO - 2019-12-12 08:06:49 --> Config Class Initialized
INFO - 2019-12-12 08:06:49 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:06:49 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:06:49 --> Utf8 Class Initialized
INFO - 2019-12-12 08:06:49 --> URI Class Initialized
INFO - 2019-12-12 08:06:49 --> Router Class Initialized
INFO - 2019-12-12 08:06:49 --> Output Class Initialized
INFO - 2019-12-12 08:06:49 --> Security Class Initialized
DEBUG - 2019-12-12 08:06:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:06:49 --> Input Class Initialized
INFO - 2019-12-12 08:06:49 --> Language Class Initialized
INFO - 2019-12-12 08:06:49 --> Loader Class Initialized
INFO - 2019-12-12 08:06:49 --> Helper loaded: html_helper
INFO - 2019-12-12 08:06:49 --> Helper loaded: url_helper
INFO - 2019-12-12 08:06:49 --> Helper loaded: form_helper
INFO - 2019-12-12 08:06:49 --> Database Driver Class Initialized
INFO - 2019-12-12 08:06:49 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:06:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:06:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:06:49 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:06:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:06:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:06:49 --> Controller Class Initialized
DEBUG - 2019-12-12 08:06:49 --> Create_User constructer got called..
INFO - 2019-12-12 08:06:49 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:06:49 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:06:49 --> show_users from DB
INFO - 2019-12-12 08:06:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:06:49 --> Final output sent to browser
DEBUG - 2019-12-12 08:06:49 --> Total execution time: 0.3730
INFO - 2019-12-12 08:07:16 --> Config Class Initialized
INFO - 2019-12-12 08:07:16 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:07:16 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:07:16 --> Utf8 Class Initialized
INFO - 2019-12-12 08:07:17 --> URI Class Initialized
INFO - 2019-12-12 08:07:17 --> Router Class Initialized
INFO - 2019-12-12 08:07:17 --> Output Class Initialized
INFO - 2019-12-12 08:07:17 --> Security Class Initialized
DEBUG - 2019-12-12 08:07:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:07:17 --> Input Class Initialized
INFO - 2019-12-12 08:07:17 --> Language Class Initialized
INFO - 2019-12-12 08:07:17 --> Loader Class Initialized
INFO - 2019-12-12 08:07:17 --> Helper loaded: html_helper
INFO - 2019-12-12 08:07:17 --> Helper loaded: url_helper
INFO - 2019-12-12 08:07:17 --> Helper loaded: form_helper
INFO - 2019-12-12 08:07:17 --> Database Driver Class Initialized
INFO - 2019-12-12 08:07:17 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:07:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:07:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:07:17 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:07:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:07:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:07:17 --> Controller Class Initialized
DEBUG - 2019-12-12 08:07:17 --> Create_User constructer got called..
INFO - 2019-12-12 08:07:17 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:07:17 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:07:17 --> show_users from DB
INFO - 2019-12-12 08:07:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:07:17 --> Final output sent to browser
DEBUG - 2019-12-12 08:07:17 --> Total execution time: 0.3710
INFO - 2019-12-12 08:07:58 --> Config Class Initialized
INFO - 2019-12-12 08:07:58 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:07:58 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:07:58 --> Utf8 Class Initialized
INFO - 2019-12-12 08:07:58 --> URI Class Initialized
INFO - 2019-12-12 08:07:58 --> Router Class Initialized
INFO - 2019-12-12 08:07:58 --> Output Class Initialized
INFO - 2019-12-12 08:07:58 --> Security Class Initialized
DEBUG - 2019-12-12 08:07:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:07:58 --> Input Class Initialized
INFO - 2019-12-12 08:07:58 --> Language Class Initialized
INFO - 2019-12-12 08:07:58 --> Loader Class Initialized
INFO - 2019-12-12 08:07:58 --> Helper loaded: html_helper
INFO - 2019-12-12 08:07:58 --> Helper loaded: url_helper
INFO - 2019-12-12 08:07:58 --> Helper loaded: form_helper
INFO - 2019-12-12 08:07:58 --> Database Driver Class Initialized
INFO - 2019-12-12 08:07:59 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:07:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:07:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:07:59 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:07:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:07:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:07:59 --> Controller Class Initialized
DEBUG - 2019-12-12 08:07:59 --> Create_User constructer got called..
INFO - 2019-12-12 08:07:59 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:07:59 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:07:59 --> show_users from DB
INFO - 2019-12-12 08:07:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:07:59 --> Final output sent to browser
DEBUG - 2019-12-12 08:07:59 --> Total execution time: 0.3770
INFO - 2019-12-12 08:09:27 --> Config Class Initialized
INFO - 2019-12-12 08:09:27 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:09:27 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:09:27 --> Utf8 Class Initialized
INFO - 2019-12-12 08:09:27 --> URI Class Initialized
INFO - 2019-12-12 08:09:27 --> Router Class Initialized
INFO - 2019-12-12 08:09:27 --> Output Class Initialized
INFO - 2019-12-12 08:09:27 --> Security Class Initialized
DEBUG - 2019-12-12 08:09:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:09:27 --> Input Class Initialized
INFO - 2019-12-12 08:09:27 --> Language Class Initialized
INFO - 2019-12-12 08:09:27 --> Loader Class Initialized
INFO - 2019-12-12 08:09:27 --> Helper loaded: html_helper
INFO - 2019-12-12 08:09:27 --> Helper loaded: url_helper
INFO - 2019-12-12 08:09:27 --> Helper loaded: form_helper
INFO - 2019-12-12 08:09:27 --> Database Driver Class Initialized
INFO - 2019-12-12 08:09:27 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:09:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:09:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:09:27 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:09:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:09:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:09:27 --> Controller Class Initialized
DEBUG - 2019-12-12 08:09:27 --> Create_User constructer got called..
INFO - 2019-12-12 08:09:27 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:09:27 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:09:27 --> show_users from DB
INFO - 2019-12-12 08:09:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:09:27 --> Final output sent to browser
DEBUG - 2019-12-12 08:09:27 --> Total execution time: 0.3010
INFO - 2019-12-12 08:09:49 --> Config Class Initialized
INFO - 2019-12-12 08:09:49 --> Hooks Class Initialized
DEBUG - 2019-12-12 08:09:49 --> UTF-8 Support Enabled
INFO - 2019-12-12 08:09:49 --> Utf8 Class Initialized
INFO - 2019-12-12 08:09:49 --> URI Class Initialized
INFO - 2019-12-12 08:09:49 --> Router Class Initialized
INFO - 2019-12-12 08:09:49 --> Output Class Initialized
INFO - 2019-12-12 08:09:49 --> Security Class Initialized
DEBUG - 2019-12-12 08:09:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 08:09:49 --> Input Class Initialized
INFO - 2019-12-12 08:09:49 --> Language Class Initialized
INFO - 2019-12-12 08:09:49 --> Loader Class Initialized
INFO - 2019-12-12 08:09:49 --> Helper loaded: html_helper
INFO - 2019-12-12 08:09:49 --> Helper loaded: url_helper
INFO - 2019-12-12 08:09:49 --> Helper loaded: form_helper
INFO - 2019-12-12 08:09:49 --> Database Driver Class Initialized
INFO - 2019-12-12 08:09:49 --> Form Validation Class Initialized
DEBUG - 2019-12-12 08:09:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 08:09:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 08:09:49 --> Encryption Class Initialized
DEBUG - 2019-12-12 08:09:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 08:09:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 08:09:49 --> Controller Class Initialized
DEBUG - 2019-12-12 08:09:49 --> Create_User constructer got called..
INFO - 2019-12-12 08:09:49 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 08:09:49 --> showing all user from db tblusers...
DEBUG - 2019-12-12 08:09:49 --> show_users from DB
INFO - 2019-12-12 08:09:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 08:09:49 --> Final output sent to browser
DEBUG - 2019-12-12 08:09:49 --> Total execution time: 0.3950
INFO - 2019-12-12 10:01:17 --> Config Class Initialized
INFO - 2019-12-12 10:01:17 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:01:17 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:01:17 --> Utf8 Class Initialized
INFO - 2019-12-12 10:01:17 --> URI Class Initialized
INFO - 2019-12-12 10:01:17 --> Router Class Initialized
INFO - 2019-12-12 10:01:17 --> Output Class Initialized
INFO - 2019-12-12 10:01:17 --> Security Class Initialized
DEBUG - 2019-12-12 10:01:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:01:17 --> Input Class Initialized
INFO - 2019-12-12 10:01:17 --> Language Class Initialized
INFO - 2019-12-12 10:01:17 --> Loader Class Initialized
INFO - 2019-12-12 10:01:17 --> Helper loaded: html_helper
INFO - 2019-12-12 10:01:17 --> Helper loaded: url_helper
INFO - 2019-12-12 10:01:17 --> Helper loaded: form_helper
INFO - 2019-12-12 10:01:17 --> Database Driver Class Initialized
INFO - 2019-12-12 10:01:17 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:01:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:01:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:01:17 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:01:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:01:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:01:17 --> Controller Class Initialized
DEBUG - 2019-12-12 10:01:17 --> Create_User constructer got called..
INFO - 2019-12-12 10:01:17 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:01:17 --> showing all user from db tblusers...
DEBUG - 2019-12-12 10:01:17 --> show_users from DB
INFO - 2019-12-12 10:01:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 10:01:17 --> Final output sent to browser
DEBUG - 2019-12-12 10:01:17 --> Total execution time: 0.2490
INFO - 2019-12-12 10:01:20 --> Config Class Initialized
INFO - 2019-12-12 10:01:20 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:01:20 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:01:20 --> Utf8 Class Initialized
INFO - 2019-12-12 10:01:20 --> URI Class Initialized
INFO - 2019-12-12 10:01:21 --> Router Class Initialized
INFO - 2019-12-12 10:01:21 --> Output Class Initialized
INFO - 2019-12-12 10:01:21 --> Security Class Initialized
DEBUG - 2019-12-12 10:01:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:01:21 --> Input Class Initialized
INFO - 2019-12-12 10:01:21 --> Language Class Initialized
INFO - 2019-12-12 10:01:21 --> Loader Class Initialized
INFO - 2019-12-12 10:01:21 --> Helper loaded: html_helper
INFO - 2019-12-12 10:01:21 --> Helper loaded: url_helper
INFO - 2019-12-12 10:01:21 --> Helper loaded: form_helper
INFO - 2019-12-12 10:01:21 --> Database Driver Class Initialized
INFO - 2019-12-12 10:01:21 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:01:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:01:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:01:21 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:01:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:01:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:01:21 --> Controller Class Initialized
DEBUG - 2019-12-12 10:01:21 --> Create_User constructer got called..
INFO - 2019-12-12 10:01:21 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:01:21 --> showing all user from db tblusers...
DEBUG - 2019-12-12 10:01:21 --> show_groups from DB
INFO - 2019-12-12 10:01:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-12 10:01:21 --> Final output sent to browser
DEBUG - 2019-12-12 10:01:21 --> Total execution time: 0.3250
INFO - 2019-12-12 10:02:14 --> Config Class Initialized
INFO - 2019-12-12 10:02:14 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:02:14 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:02:14 --> Utf8 Class Initialized
INFO - 2019-12-12 10:02:14 --> URI Class Initialized
INFO - 2019-12-12 10:02:14 --> Router Class Initialized
INFO - 2019-12-12 10:02:14 --> Output Class Initialized
INFO - 2019-12-12 10:02:14 --> Security Class Initialized
DEBUG - 2019-12-12 10:02:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:02:14 --> Input Class Initialized
INFO - 2019-12-12 10:02:14 --> Language Class Initialized
INFO - 2019-12-12 10:02:14 --> Loader Class Initialized
INFO - 2019-12-12 10:02:14 --> Helper loaded: html_helper
INFO - 2019-12-12 10:02:14 --> Helper loaded: url_helper
INFO - 2019-12-12 10:02:14 --> Helper loaded: form_helper
INFO - 2019-12-12 10:02:14 --> Database Driver Class Initialized
INFO - 2019-12-12 10:02:14 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:02:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:02:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:02:14 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:02:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:02:14 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:02:14 --> Controller Class Initialized
DEBUG - 2019-12-12 10:02:14 --> Create_User constructer got called..
INFO - 2019-12-12 10:02:14 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:02:14 --> showing all user from db tblusers...
DEBUG - 2019-12-12 10:02:14 --> show_groups from DB
INFO - 2019-12-12 10:02:14 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-12 10:02:14 --> Final output sent to browser
DEBUG - 2019-12-12 10:02:14 --> Total execution time: 0.3070
INFO - 2019-12-12 10:02:17 --> Config Class Initialized
INFO - 2019-12-12 10:02:17 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:02:17 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:02:17 --> Utf8 Class Initialized
INFO - 2019-12-12 10:02:17 --> URI Class Initialized
INFO - 2019-12-12 10:02:17 --> Router Class Initialized
INFO - 2019-12-12 10:02:17 --> Output Class Initialized
INFO - 2019-12-12 10:02:17 --> Security Class Initialized
DEBUG - 2019-12-12 10:02:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:02:17 --> Input Class Initialized
INFO - 2019-12-12 10:02:17 --> Language Class Initialized
INFO - 2019-12-12 10:02:17 --> Loader Class Initialized
INFO - 2019-12-12 10:02:17 --> Helper loaded: html_helper
INFO - 2019-12-12 10:02:17 --> Helper loaded: url_helper
INFO - 2019-12-12 10:02:17 --> Helper loaded: form_helper
INFO - 2019-12-12 10:02:17 --> Database Driver Class Initialized
INFO - 2019-12-12 10:02:18 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:02:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:02:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:02:18 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:02:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:02:18 --> Controller Class Initialized
DEBUG - 2019-12-12 10:02:18 --> Create_User constructer got called..
INFO - 2019-12-12 10:02:18 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:02:18 --> showing all user from db tblusers...
DEBUG - 2019-12-12 10:02:18 --> show_groups from DB
INFO - 2019-12-12 10:02:18 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-12 10:02:18 --> Final output sent to browser
DEBUG - 2019-12-12 10:02:18 --> Total execution time: 0.4140
INFO - 2019-12-12 10:02:55 --> Config Class Initialized
INFO - 2019-12-12 10:02:55 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:02:55 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:02:55 --> Utf8 Class Initialized
INFO - 2019-12-12 10:02:55 --> URI Class Initialized
INFO - 2019-12-12 10:02:55 --> Router Class Initialized
INFO - 2019-12-12 10:02:55 --> Output Class Initialized
INFO - 2019-12-12 10:02:55 --> Security Class Initialized
DEBUG - 2019-12-12 10:02:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:02:55 --> Input Class Initialized
INFO - 2019-12-12 10:02:55 --> Language Class Initialized
INFO - 2019-12-12 10:02:55 --> Loader Class Initialized
INFO - 2019-12-12 10:02:55 --> Helper loaded: html_helper
INFO - 2019-12-12 10:02:55 --> Helper loaded: url_helper
INFO - 2019-12-12 10:02:55 --> Helper loaded: form_helper
INFO - 2019-12-12 10:02:55 --> Database Driver Class Initialized
INFO - 2019-12-12 10:02:55 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:02:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:02:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:02:55 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:02:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:02:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:02:55 --> Controller Class Initialized
DEBUG - 2019-12-12 10:02:55 --> Create_User constructer got called..
INFO - 2019-12-12 10:02:55 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:02:55 --> showing all user from db tblusers...
DEBUG - 2019-12-12 10:02:55 --> show_groups from DB
INFO - 2019-12-12 10:02:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-12 10:02:55 --> Final output sent to browser
DEBUG - 2019-12-12 10:02:55 --> Total execution time: 0.3990
INFO - 2019-12-12 10:03:08 --> Config Class Initialized
INFO - 2019-12-12 10:03:08 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:03:08 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:03:08 --> Utf8 Class Initialized
INFO - 2019-12-12 10:03:08 --> URI Class Initialized
INFO - 2019-12-12 10:03:08 --> Router Class Initialized
INFO - 2019-12-12 10:03:08 --> Output Class Initialized
INFO - 2019-12-12 10:03:08 --> Security Class Initialized
DEBUG - 2019-12-12 10:03:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:03:08 --> Input Class Initialized
INFO - 2019-12-12 10:03:08 --> Language Class Initialized
INFO - 2019-12-12 10:03:08 --> Loader Class Initialized
INFO - 2019-12-12 10:03:08 --> Helper loaded: html_helper
INFO - 2019-12-12 10:03:08 --> Helper loaded: url_helper
INFO - 2019-12-12 10:03:08 --> Helper loaded: form_helper
INFO - 2019-12-12 10:03:08 --> Database Driver Class Initialized
INFO - 2019-12-12 10:03:08 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:03:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:03:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:03:08 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:03:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:03:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:03:08 --> Controller Class Initialized
DEBUG - 2019-12-12 10:03:08 --> Create_User constructer got called..
INFO - 2019-12-12 10:03:08 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:03:08 --> showing all user from db tblusers...
DEBUG - 2019-12-12 10:03:08 --> show_users from DB
INFO - 2019-12-12 10:03:08 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 10:03:08 --> Final output sent to browser
DEBUG - 2019-12-12 10:03:08 --> Total execution time: 0.3580
INFO - 2019-12-12 10:03:14 --> Config Class Initialized
INFO - 2019-12-12 10:03:14 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:03:14 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:03:14 --> Utf8 Class Initialized
INFO - 2019-12-12 10:03:14 --> URI Class Initialized
INFO - 2019-12-12 10:03:14 --> Router Class Initialized
INFO - 2019-12-12 10:03:14 --> Output Class Initialized
INFO - 2019-12-12 10:03:14 --> Security Class Initialized
DEBUG - 2019-12-12 10:03:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:03:14 --> Input Class Initialized
INFO - 2019-12-12 10:03:14 --> Language Class Initialized
INFO - 2019-12-12 10:03:14 --> Loader Class Initialized
INFO - 2019-12-12 10:03:14 --> Helper loaded: html_helper
INFO - 2019-12-12 10:03:14 --> Helper loaded: url_helper
INFO - 2019-12-12 10:03:14 --> Helper loaded: form_helper
INFO - 2019-12-12 10:03:14 --> Database Driver Class Initialized
INFO - 2019-12-12 10:03:14 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:03:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:03:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:03:14 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:03:14 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:03:14 --> Controller Class Initialized
DEBUG - 2019-12-12 10:03:14 --> loading Configarable_Login model...
INFO - 2019-12-12 10:03:14 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 10:03:14 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 10:03:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 10:03:14 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-12 10:03:14 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 10:03:14 --> loading view public\Dashboard
INFO - 2019-12-12 10:03:14 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 10:03:14 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 10:03:14 --> Final output sent to browser
DEBUG - 2019-12-12 10:03:14 --> Total execution time: 0.4060
INFO - 2019-12-12 10:03:49 --> Config Class Initialized
INFO - 2019-12-12 10:03:49 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:03:49 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:03:49 --> Utf8 Class Initialized
INFO - 2019-12-12 10:03:49 --> URI Class Initialized
INFO - 2019-12-12 10:03:49 --> Router Class Initialized
INFO - 2019-12-12 10:03:49 --> Output Class Initialized
INFO - 2019-12-12 10:03:49 --> Security Class Initialized
DEBUG - 2019-12-12 10:03:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:03:49 --> Input Class Initialized
INFO - 2019-12-12 10:03:49 --> Language Class Initialized
INFO - 2019-12-12 10:03:49 --> Loader Class Initialized
INFO - 2019-12-12 10:03:49 --> Helper loaded: html_helper
INFO - 2019-12-12 10:03:49 --> Helper loaded: url_helper
INFO - 2019-12-12 10:03:49 --> Helper loaded: form_helper
INFO - 2019-12-12 10:03:49 --> Database Driver Class Initialized
INFO - 2019-12-12 10:03:49 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:03:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:03:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:03:49 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:03:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:03:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:03:49 --> Controller Class Initialized
DEBUG - 2019-12-12 10:03:49 --> Create_User constructer got called..
DEBUG - 2019-12-12 10:03:49 --> loading configurable menu with result=
INFO - 2019-12-12 10:03:49 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:03:49 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 10:03:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 10:03:49 --> Final output sent to browser
DEBUG - 2019-12-12 10:03:49 --> Total execution time: 0.3140
INFO - 2019-12-12 10:04:01 --> Config Class Initialized
INFO - 2019-12-12 10:04:01 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:04:01 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:04:01 --> Utf8 Class Initialized
INFO - 2019-12-12 10:04:01 --> URI Class Initialized
INFO - 2019-12-12 10:04:01 --> Router Class Initialized
INFO - 2019-12-12 10:04:01 --> Output Class Initialized
INFO - 2019-12-12 10:04:01 --> Security Class Initialized
DEBUG - 2019-12-12 10:04:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:04:01 --> Input Class Initialized
INFO - 2019-12-12 10:04:02 --> Language Class Initialized
INFO - 2019-12-12 10:04:02 --> Loader Class Initialized
INFO - 2019-12-12 10:04:02 --> Helper loaded: html_helper
INFO - 2019-12-12 10:04:02 --> Helper loaded: url_helper
INFO - 2019-12-12 10:04:02 --> Helper loaded: form_helper
INFO - 2019-12-12 10:04:02 --> Database Driver Class Initialized
INFO - 2019-12-12 10:04:02 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:04:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:04:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:04:02 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:04:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:04:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:04:02 --> Controller Class Initialized
DEBUG - 2019-12-12 10:04:02 --> loading Configarable_Login model...
INFO - 2019-12-12 10:04:02 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 10:04:02 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 10:04:02 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 10:04:02 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-12 10:04:02 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 10:04:02 --> loading view public\Dashboard
INFO - 2019-12-12 10:04:02 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 10:04:02 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 10:04:02 --> Final output sent to browser
DEBUG - 2019-12-12 10:04:02 --> Total execution time: 0.3610
INFO - 2019-12-12 10:04:04 --> Config Class Initialized
INFO - 2019-12-12 10:04:04 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:04:04 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:04:04 --> Utf8 Class Initialized
INFO - 2019-12-12 10:04:04 --> URI Class Initialized
INFO - 2019-12-12 10:04:04 --> Router Class Initialized
INFO - 2019-12-12 10:04:04 --> Output Class Initialized
INFO - 2019-12-12 10:04:04 --> Security Class Initialized
DEBUG - 2019-12-12 10:04:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:04:04 --> Input Class Initialized
INFO - 2019-12-12 10:04:04 --> Language Class Initialized
INFO - 2019-12-12 10:04:04 --> Loader Class Initialized
INFO - 2019-12-12 10:04:04 --> Helper loaded: html_helper
INFO - 2019-12-12 10:04:04 --> Helper loaded: url_helper
INFO - 2019-12-12 10:04:04 --> Helper loaded: form_helper
INFO - 2019-12-12 10:04:04 --> Database Driver Class Initialized
INFO - 2019-12-12 10:04:04 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:04:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:04:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:04:04 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:04:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:04:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:04:04 --> Controller Class Initialized
DEBUG - 2019-12-12 10:04:05 --> loading Configarable_Login model...
INFO - 2019-12-12 10:04:05 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 10:04:05 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 10:04:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 10:04:05 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-12 10:04:05 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 10:04:05 --> loading view public\Dashboard
INFO - 2019-12-12 10:04:05 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 10:04:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 10:04:05 --> Final output sent to browser
DEBUG - 2019-12-12 10:04:05 --> Total execution time: 0.3870
INFO - 2019-12-12 10:04:07 --> Config Class Initialized
INFO - 2019-12-12 10:04:07 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:04:07 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:04:07 --> Utf8 Class Initialized
INFO - 2019-12-12 10:04:07 --> URI Class Initialized
INFO - 2019-12-12 10:04:07 --> Router Class Initialized
INFO - 2019-12-12 10:04:07 --> Output Class Initialized
INFO - 2019-12-12 10:04:07 --> Security Class Initialized
DEBUG - 2019-12-12 10:04:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:04:07 --> Input Class Initialized
INFO - 2019-12-12 10:04:07 --> Language Class Initialized
INFO - 2019-12-12 10:04:07 --> Loader Class Initialized
INFO - 2019-12-12 10:04:07 --> Helper loaded: html_helper
INFO - 2019-12-12 10:04:07 --> Helper loaded: url_helper
INFO - 2019-12-12 10:04:07 --> Helper loaded: form_helper
INFO - 2019-12-12 10:04:07 --> Database Driver Class Initialized
INFO - 2019-12-12 10:04:07 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:04:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:04:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:04:07 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:04:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:04:07 --> Controller Class Initialized
DEBUG - 2019-12-12 10:04:07 --> Create_User constructer got called..
DEBUG - 2019-12-12 10:04:07 --> loading configurable menu with result=
INFO - 2019-12-12 10:04:07 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:04:07 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 10:04:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 10:04:07 --> Final output sent to browser
DEBUG - 2019-12-12 10:04:07 --> Total execution time: 0.3490
INFO - 2019-12-12 10:04:47 --> Config Class Initialized
INFO - 2019-12-12 10:04:47 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:04:47 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:04:47 --> Utf8 Class Initialized
INFO - 2019-12-12 10:04:47 --> URI Class Initialized
INFO - 2019-12-12 10:04:47 --> Router Class Initialized
INFO - 2019-12-12 10:04:47 --> Output Class Initialized
INFO - 2019-12-12 10:04:47 --> Security Class Initialized
DEBUG - 2019-12-12 10:04:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:04:47 --> Input Class Initialized
INFO - 2019-12-12 10:04:47 --> Language Class Initialized
INFO - 2019-12-12 10:04:47 --> Loader Class Initialized
INFO - 2019-12-12 10:04:47 --> Helper loaded: html_helper
INFO - 2019-12-12 10:04:47 --> Helper loaded: url_helper
INFO - 2019-12-12 10:04:47 --> Helper loaded: form_helper
INFO - 2019-12-12 10:04:47 --> Database Driver Class Initialized
INFO - 2019-12-12 10:04:47 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:04:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:04:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:04:47 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:04:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:04:47 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:04:47 --> Controller Class Initialized
DEBUG - 2019-12-12 10:04:47 --> Create_User constructer got called..
DEBUG - 2019-12-12 10:04:47 --> loading configurable menu with result=
INFO - 2019-12-12 10:04:47 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:04:47 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 10:04:47 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 10:04:47 --> Final output sent to browser
DEBUG - 2019-12-12 10:04:47 --> Total execution time: 0.2730
INFO - 2019-12-12 10:04:50 --> Config Class Initialized
INFO - 2019-12-12 10:04:50 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:04:50 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:04:50 --> Utf8 Class Initialized
INFO - 2019-12-12 10:04:50 --> URI Class Initialized
INFO - 2019-12-12 10:04:50 --> Router Class Initialized
INFO - 2019-12-12 10:04:50 --> Output Class Initialized
INFO - 2019-12-12 10:04:50 --> Security Class Initialized
DEBUG - 2019-12-12 10:04:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:04:50 --> Input Class Initialized
INFO - 2019-12-12 10:04:50 --> Language Class Initialized
INFO - 2019-12-12 10:04:50 --> Loader Class Initialized
INFO - 2019-12-12 10:04:50 --> Helper loaded: html_helper
INFO - 2019-12-12 10:04:50 --> Helper loaded: url_helper
INFO - 2019-12-12 10:04:50 --> Helper loaded: form_helper
INFO - 2019-12-12 10:04:50 --> Database Driver Class Initialized
INFO - 2019-12-12 10:04:50 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:04:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:04:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:04:50 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:04:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:04:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:04:50 --> Controller Class Initialized
DEBUG - 2019-12-12 10:04:50 --> Create_User constructer got called..
INFO - 2019-12-12 10:04:50 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:04:50 --> showing all user from db tblusers...
DEBUG - 2019-12-12 10:04:50 --> show_users from DB
INFO - 2019-12-12 10:04:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 10:04:50 --> Final output sent to browser
DEBUG - 2019-12-12 10:04:50 --> Total execution time: 0.3230
INFO - 2019-12-12 10:40:41 --> Config Class Initialized
INFO - 2019-12-12 10:40:41 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:40:42 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:40:42 --> Utf8 Class Initialized
INFO - 2019-12-12 10:40:42 --> URI Class Initialized
INFO - 2019-12-12 10:40:42 --> Router Class Initialized
INFO - 2019-12-12 10:40:42 --> Output Class Initialized
INFO - 2019-12-12 10:40:42 --> Security Class Initialized
DEBUG - 2019-12-12 10:40:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:40:42 --> Input Class Initialized
INFO - 2019-12-12 10:40:42 --> Language Class Initialized
INFO - 2019-12-12 10:40:42 --> Loader Class Initialized
INFO - 2019-12-12 10:40:42 --> Helper loaded: html_helper
INFO - 2019-12-12 10:40:42 --> Helper loaded: url_helper
INFO - 2019-12-12 10:40:42 --> Helper loaded: form_helper
INFO - 2019-12-12 10:40:42 --> Database Driver Class Initialized
INFO - 2019-12-12 10:40:42 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:40:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:40:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:40:42 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:40:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:40:42 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:40:42 --> Controller Class Initialized
INFO - 2019-12-12 10:40:42 --> Helper loaded: cookie_helper
INFO - 2019-12-12 10:40:42 --> logout() called
DEBUG - 2019-12-12 10:40:42 --> loading model Active_Session
INFO - 2019-12-12 10:40:42 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 10:40:42 --> calling remove_active_session()
DEBUG - 2019-12-12 10:40:42 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-12 10:40:42 --> loading view welcome controller ... 
INFO - 2019-12-12 10:40:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 10:40:42 --> Final output sent to browser
DEBUG - 2019-12-12 10:40:42 --> Total execution time: 0.3530
INFO - 2019-12-12 10:40:46 --> Config Class Initialized
INFO - 2019-12-12 10:40:46 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:40:46 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:40:46 --> Utf8 Class Initialized
INFO - 2019-12-12 10:40:46 --> URI Class Initialized
INFO - 2019-12-12 10:40:46 --> Router Class Initialized
INFO - 2019-12-12 10:40:46 --> Output Class Initialized
INFO - 2019-12-12 10:40:46 --> Security Class Initialized
DEBUG - 2019-12-12 10:40:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:40:46 --> Input Class Initialized
INFO - 2019-12-12 10:40:46 --> Language Class Initialized
INFO - 2019-12-12 10:40:46 --> Loader Class Initialized
INFO - 2019-12-12 10:40:46 --> Helper loaded: html_helper
INFO - 2019-12-12 10:40:46 --> Helper loaded: url_helper
INFO - 2019-12-12 10:40:46 --> Helper loaded: form_helper
INFO - 2019-12-12 10:40:46 --> Database Driver Class Initialized
INFO - 2019-12-12 10:40:46 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:40:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:40:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:40:46 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:40:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:40:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:40:46 --> Controller Class Initialized
INFO - 2019-12-12 10:40:46 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 10:40:46 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 10:40:46 --> getAuth method got called...
DEBUG - 2019-12-12 10:40:46 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 10:40:46 --> Unreachable block here....
DEBUG - 2019-12-12 10:40:46 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 10:40:46 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 10:40:46 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 10:40:47 -->  ldap login success
INFO - 2019-12-12 10:40:47 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 10:40:47 --> Role Retrive from DB
DEBUG - 2019-12-12 10:40:47 --> loading model Active_Session
INFO - 2019-12-12 10:40:47 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 10:40:47 --> calling insert_active_session()
DEBUG - 2019-12-12 10:40:47 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 10:40:47 --> insert success
DEBUG - 2019-12-12 10:40:47 --> loading Configarable_Login model...
INFO - 2019-12-12 10:40:47 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 10:40:47 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 10:40:47 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 10:40:47 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle-o
        )

)

DEBUG - 2019-12-12 10:40:47 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 10:40:47 --> loading view public\Dashboard
INFO - 2019-12-12 10:40:47 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 10:40:47 --> Final output sent to browser
DEBUG - 2019-12-12 10:40:47 --> Total execution time: 1.0570
INFO - 2019-12-12 10:40:53 --> Config Class Initialized
INFO - 2019-12-12 10:40:53 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:40:53 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:40:53 --> Utf8 Class Initialized
INFO - 2019-12-12 10:40:53 --> URI Class Initialized
INFO - 2019-12-12 10:40:53 --> Router Class Initialized
INFO - 2019-12-12 10:40:53 --> Output Class Initialized
INFO - 2019-12-12 10:40:53 --> Security Class Initialized
DEBUG - 2019-12-12 10:40:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:40:53 --> Input Class Initialized
INFO - 2019-12-12 10:40:53 --> Language Class Initialized
INFO - 2019-12-12 10:40:53 --> Loader Class Initialized
INFO - 2019-12-12 10:40:53 --> Helper loaded: html_helper
INFO - 2019-12-12 10:40:53 --> Helper loaded: url_helper
INFO - 2019-12-12 10:40:53 --> Helper loaded: form_helper
INFO - 2019-12-12 10:40:53 --> Database Driver Class Initialized
INFO - 2019-12-12 10:40:53 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:40:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:40:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:40:53 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:40:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:40:53 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:40:53 --> Controller Class Initialized
INFO - 2019-12-12 10:40:53 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 10:40:53 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 10:40:53 --> getAuth method got called...
DEBUG - 2019-12-12 10:40:53 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 10:40:53 --> Unreachable block here....
DEBUG - 2019-12-12 10:40:53 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 10:40:53 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 10:40:53 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 10:40:53 -->  ldap login success
INFO - 2019-12-12 10:40:53 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 10:40:54 --> Role Retrive from DB
DEBUG - 2019-12-12 10:40:54 --> loading model Active_Session
INFO - 2019-12-12 10:40:54 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 10:40:54 --> calling insert_active_session()
DEBUG - 2019-12-12 10:40:54 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 10:40:54 --> insert success
DEBUG - 2019-12-12 10:40:54 --> loading Configarable_Login model...
INFO - 2019-12-12 10:40:54 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 10:40:54 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 10:40:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 10:40:54 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle-o
        )

)

DEBUG - 2019-12-12 10:40:54 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 10:40:54 --> loading view public\Dashboard
INFO - 2019-12-12 10:40:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 10:40:54 --> Final output sent to browser
DEBUG - 2019-12-12 10:40:54 --> Total execution time: 0.8840
INFO - 2019-12-12 10:42:53 --> Config Class Initialized
INFO - 2019-12-12 10:42:53 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:42:53 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:42:54 --> Utf8 Class Initialized
INFO - 2019-12-12 10:42:54 --> URI Class Initialized
INFO - 2019-12-12 10:42:54 --> Router Class Initialized
INFO - 2019-12-12 10:42:54 --> Output Class Initialized
INFO - 2019-12-12 10:42:54 --> Security Class Initialized
DEBUG - 2019-12-12 10:42:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:42:54 --> Input Class Initialized
INFO - 2019-12-12 10:42:54 --> Language Class Initialized
INFO - 2019-12-12 10:42:54 --> Loader Class Initialized
INFO - 2019-12-12 10:42:54 --> Helper loaded: html_helper
INFO - 2019-12-12 10:42:54 --> Helper loaded: url_helper
INFO - 2019-12-12 10:42:54 --> Helper loaded: form_helper
INFO - 2019-12-12 10:42:54 --> Database Driver Class Initialized
INFO - 2019-12-12 10:42:54 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:42:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:42:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:42:54 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:42:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:42:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:42:54 --> Controller Class Initialized
INFO - 2019-12-12 10:42:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 10:42:54 --> Final output sent to browser
DEBUG - 2019-12-12 10:42:54 --> Total execution time: 0.2880
INFO - 2019-12-12 10:42:58 --> Config Class Initialized
INFO - 2019-12-12 10:42:58 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:42:58 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:42:58 --> Utf8 Class Initialized
INFO - 2019-12-12 10:42:58 --> URI Class Initialized
INFO - 2019-12-12 10:42:58 --> Router Class Initialized
INFO - 2019-12-12 10:42:58 --> Output Class Initialized
INFO - 2019-12-12 10:42:58 --> Security Class Initialized
DEBUG - 2019-12-12 10:42:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:42:58 --> Input Class Initialized
INFO - 2019-12-12 10:42:58 --> Language Class Initialized
INFO - 2019-12-12 10:42:58 --> Loader Class Initialized
INFO - 2019-12-12 10:42:58 --> Helper loaded: html_helper
INFO - 2019-12-12 10:42:58 --> Helper loaded: url_helper
INFO - 2019-12-12 10:42:58 --> Helper loaded: form_helper
INFO - 2019-12-12 10:42:58 --> Database Driver Class Initialized
INFO - 2019-12-12 10:42:58 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:42:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:42:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:42:58 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:42:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:42:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:42:58 --> Controller Class Initialized
INFO - 2019-12-12 10:42:58 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 10:42:58 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 10:42:58 --> getAuth method got called...
DEBUG - 2019-12-12 10:42:58 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 10:42:58 --> Unreachable block here....
DEBUG - 2019-12-12 10:42:58 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 10:42:58 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 10:42:58 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 10:42:59 -->  ldap login success
INFO - 2019-12-12 10:42:59 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 10:42:59 --> Role Retrive from DB
DEBUG - 2019-12-12 10:42:59 --> loading model Active_Session
INFO - 2019-12-12 10:42:59 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 10:42:59 --> calling insert_active_session()
DEBUG - 2019-12-12 10:42:59 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 10:42:59 --> insert success
DEBUG - 2019-12-12 10:42:59 --> loading Configarable_Login model...
INFO - 2019-12-12 10:42:59 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 10:42:59 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 10:42:59 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 10:42:59 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 10:42:59 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 10:42:59 --> loading view public\Dashboard
INFO - 2019-12-12 10:42:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 10:42:59 --> Final output sent to browser
DEBUG - 2019-12-12 10:42:59 --> Total execution time: 0.8390
INFO - 2019-12-12 10:50:05 --> Config Class Initialized
INFO - 2019-12-12 10:50:05 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:50:05 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:50:05 --> Utf8 Class Initialized
INFO - 2019-12-12 10:50:05 --> URI Class Initialized
INFO - 2019-12-12 10:50:05 --> Router Class Initialized
INFO - 2019-12-12 10:50:05 --> Output Class Initialized
INFO - 2019-12-12 10:50:05 --> Security Class Initialized
DEBUG - 2019-12-12 10:50:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:50:05 --> Input Class Initialized
INFO - 2019-12-12 10:50:05 --> Language Class Initialized
INFO - 2019-12-12 10:50:05 --> Loader Class Initialized
INFO - 2019-12-12 10:50:05 --> Helper loaded: html_helper
INFO - 2019-12-12 10:50:05 --> Helper loaded: url_helper
INFO - 2019-12-12 10:50:05 --> Helper loaded: form_helper
INFO - 2019-12-12 10:50:05 --> Database Driver Class Initialized
INFO - 2019-12-12 10:50:05 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:50:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:50:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:50:05 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:50:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:50:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:50:05 --> Controller Class Initialized
DEBUG - 2019-12-12 10:50:05 --> Create_User constructer got called..
DEBUG - 2019-12-12 10:50:05 --> loading configurable menu with result=
INFO - 2019-12-12 10:50:05 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:50:05 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 10:50:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 10:50:05 --> Final output sent to browser
DEBUG - 2019-12-12 10:50:05 --> Total execution time: 0.4400
INFO - 2019-12-12 10:50:08 --> Config Class Initialized
INFO - 2019-12-12 10:50:08 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:50:08 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:50:08 --> Utf8 Class Initialized
INFO - 2019-12-12 10:50:08 --> URI Class Initialized
INFO - 2019-12-12 10:50:09 --> Router Class Initialized
INFO - 2019-12-12 10:50:09 --> Output Class Initialized
INFO - 2019-12-12 10:50:09 --> Security Class Initialized
DEBUG - 2019-12-12 10:50:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:50:09 --> Input Class Initialized
INFO - 2019-12-12 10:50:09 --> Language Class Initialized
INFO - 2019-12-12 10:50:09 --> Loader Class Initialized
INFO - 2019-12-12 10:50:09 --> Helper loaded: html_helper
INFO - 2019-12-12 10:50:09 --> Helper loaded: url_helper
INFO - 2019-12-12 10:50:09 --> Helper loaded: form_helper
INFO - 2019-12-12 10:50:09 --> Database Driver Class Initialized
INFO - 2019-12-12 10:50:09 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:50:09 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:50:09 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:50:09 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:50:09 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:50:09 --> Controller Class Initialized
DEBUG - 2019-12-12 10:50:09 --> Create_User constructer got called..
INFO - 2019-12-12 10:50:09 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 10:50:09 --> showing all user from db tblusers...
DEBUG - 2019-12-12 10:50:09 --> show_users from DB
INFO - 2019-12-12 10:50:09 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 10:50:09 --> Final output sent to browser
DEBUG - 2019-12-12 10:50:09 --> Total execution time: 0.3260
INFO - 2019-12-12 10:50:27 --> Config Class Initialized
INFO - 2019-12-12 10:50:27 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:50:27 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:50:27 --> Utf8 Class Initialized
INFO - 2019-12-12 10:50:27 --> URI Class Initialized
INFO - 2019-12-12 10:50:27 --> Router Class Initialized
INFO - 2019-12-12 10:50:27 --> Output Class Initialized
INFO - 2019-12-12 10:50:27 --> Security Class Initialized
DEBUG - 2019-12-12 10:50:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:50:27 --> Input Class Initialized
INFO - 2019-12-12 10:50:27 --> Language Class Initialized
INFO - 2019-12-12 10:50:27 --> Loader Class Initialized
INFO - 2019-12-12 10:50:27 --> Helper loaded: html_helper
INFO - 2019-12-12 10:50:27 --> Helper loaded: url_helper
INFO - 2019-12-12 10:50:27 --> Helper loaded: form_helper
INFO - 2019-12-12 10:50:27 --> Database Driver Class Initialized
INFO - 2019-12-12 10:50:27 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:50:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:50:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:50:27 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:50:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:50:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:50:27 --> Controller Class Initialized
INFO - 2019-12-12 10:50:27 --> Helper loaded: cookie_helper
INFO - 2019-12-12 10:50:27 --> logout() called
DEBUG - 2019-12-12 10:50:27 --> loading model Active_Session
INFO - 2019-12-12 10:50:27 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 10:50:27 --> calling remove_active_session()
DEBUG - 2019-12-12 10:50:27 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-12 10:50:27 --> loading view welcome controller ... 
INFO - 2019-12-12 10:50:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 10:50:27 --> Final output sent to browser
DEBUG - 2019-12-12 10:50:27 --> Total execution time: 0.4420
INFO - 2019-12-12 10:50:31 --> Config Class Initialized
INFO - 2019-12-12 10:50:31 --> Hooks Class Initialized
DEBUG - 2019-12-12 10:50:31 --> UTF-8 Support Enabled
INFO - 2019-12-12 10:50:31 --> Utf8 Class Initialized
INFO - 2019-12-12 10:50:31 --> URI Class Initialized
INFO - 2019-12-12 10:50:31 --> Router Class Initialized
INFO - 2019-12-12 10:50:31 --> Output Class Initialized
INFO - 2019-12-12 10:50:31 --> Security Class Initialized
DEBUG - 2019-12-12 10:50:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 10:50:31 --> Input Class Initialized
INFO - 2019-12-12 10:50:31 --> Language Class Initialized
INFO - 2019-12-12 10:50:31 --> Loader Class Initialized
INFO - 2019-12-12 10:50:31 --> Helper loaded: html_helper
INFO - 2019-12-12 10:50:31 --> Helper loaded: url_helper
INFO - 2019-12-12 10:50:31 --> Helper loaded: form_helper
INFO - 2019-12-12 10:50:31 --> Database Driver Class Initialized
INFO - 2019-12-12 10:50:31 --> Form Validation Class Initialized
DEBUG - 2019-12-12 10:50:31 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 10:50:31 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 10:50:31 --> Encryption Class Initialized
DEBUG - 2019-12-12 10:50:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 10:50:31 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 10:50:31 --> Controller Class Initialized
INFO - 2019-12-12 10:50:31 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 10:50:31 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 10:50:31 --> getAuth method got called...
DEBUG - 2019-12-12 10:50:31 --> Username :- DevOss Password :- Test@12345
INFO - 2019-12-12 10:50:31 --> this is db user...
DEBUG - 2019-12-12 10:50:31 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 10:50:31 --> validation result=Array
(
    [id] => 9
    [user_group] => 42
)

INFO - 2019-12-12 10:50:31 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 10:50:31 --> Role Retrive from DB
DEBUG - 2019-12-12 10:50:31 --> loading model Active_Session
INFO - 2019-12-12 10:50:31 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 10:50:31 --> calling insert_active_session()
DEBUG - 2019-12-12 10:50:31 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 10:50:32 --> insert success
DEBUG - 2019-12-12 10:50:32 --> loading Configarable_Login model...
INFO - 2019-12-12 10:50:32 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 10:50:32 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-12 10:50:32 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 10:50:32 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 15
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [1] => stdClass Object
        (
            [page_id] => 16
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [2] => stdClass Object
        (
            [page_id] => 17
            [page_name] => Profile
            [page_link] => user/User_profile
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [3] => stdClass Object
        (
            [page_id] => 18
            [page_name] => Change password
            [page_link] => user/Change_password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-12-12 10:50:32 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 10:50:32 --> loading view public\Dashboard
INFO - 2019-12-12 10:50:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 10:50:32 --> Final output sent to browser
DEBUG - 2019-12-12 10:50:32 --> Total execution time: 0.4450
INFO - 2019-12-12 11:00:34 --> Config Class Initialized
INFO - 2019-12-12 11:00:34 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:00:34 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:00:34 --> Utf8 Class Initialized
INFO - 2019-12-12 11:00:34 --> URI Class Initialized
INFO - 2019-12-12 11:00:34 --> Router Class Initialized
INFO - 2019-12-12 11:00:34 --> Output Class Initialized
INFO - 2019-12-12 11:00:34 --> Security Class Initialized
DEBUG - 2019-12-12 11:00:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:00:34 --> Input Class Initialized
INFO - 2019-12-12 11:00:34 --> Language Class Initialized
INFO - 2019-12-12 11:00:34 --> Loader Class Initialized
INFO - 2019-12-12 11:00:34 --> Helper loaded: html_helper
INFO - 2019-12-12 11:00:34 --> Helper loaded: url_helper
INFO - 2019-12-12 11:00:34 --> Helper loaded: form_helper
INFO - 2019-12-12 11:00:34 --> Database Driver Class Initialized
INFO - 2019-12-12 11:00:34 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:00:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:00:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:00:34 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:00:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:00:34 --> Controller Class Initialized
INFO - 2019-12-12 11:00:34 --> Helper loaded: cookie_helper
INFO - 2019-12-12 11:00:34 --> logout() called
DEBUG - 2019-12-12 11:00:34 --> loading model Active_Session
INFO - 2019-12-12 11:00:34 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 11:00:34 --> calling remove_active_session()
DEBUG - 2019-12-12 11:00:34 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-12 11:00:34 --> loading view welcome controller ... 
INFO - 2019-12-12 11:00:34 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 11:00:34 --> Final output sent to browser
DEBUG - 2019-12-12 11:00:34 --> Total execution time: 0.4570
INFO - 2019-12-12 11:00:41 --> Config Class Initialized
INFO - 2019-12-12 11:00:41 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:00:41 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:00:41 --> Utf8 Class Initialized
INFO - 2019-12-12 11:00:41 --> URI Class Initialized
INFO - 2019-12-12 11:00:41 --> Router Class Initialized
INFO - 2019-12-12 11:00:41 --> Output Class Initialized
INFO - 2019-12-12 11:00:41 --> Security Class Initialized
DEBUG - 2019-12-12 11:00:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:00:41 --> Input Class Initialized
INFO - 2019-12-12 11:00:41 --> Language Class Initialized
INFO - 2019-12-12 11:00:41 --> Loader Class Initialized
INFO - 2019-12-12 11:00:41 --> Helper loaded: html_helper
INFO - 2019-12-12 11:00:41 --> Helper loaded: url_helper
INFO - 2019-12-12 11:00:41 --> Helper loaded: form_helper
INFO - 2019-12-12 11:00:41 --> Database Driver Class Initialized
INFO - 2019-12-12 11:00:41 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:00:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:00:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:00:41 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:00:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:00:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:00:41 --> Controller Class Initialized
INFO - 2019-12-12 11:00:41 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 11:00:41 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 11:00:41 --> getAuth method got called...
DEBUG - 2019-12-12 11:00:41 --> Username :- DevOss Password :- Test@12345
INFO - 2019-12-12 11:00:41 --> this is db user...
DEBUG - 2019-12-12 11:00:41 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 11:00:41 --> validation result=Array
(
    [id] => 9
    [user_group] => 42
)

INFO - 2019-12-12 11:00:41 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 11:00:41 --> Role Retrive from DB
DEBUG - 2019-12-12 11:00:41 --> loading model Active_Session
INFO - 2019-12-12 11:00:41 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 11:00:41 --> calling insert_active_session()
DEBUG - 2019-12-12 11:00:41 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 11:00:41 --> insert success
DEBUG - 2019-12-12 11:00:41 --> loading Configarable_Login model...
INFO - 2019-12-12 11:00:41 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 11:00:41 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-12 11:00:41 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 11:00:41 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 15
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [1] => stdClass Object
        (
            [page_id] => 16
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [2] => stdClass Object
        (
            [page_id] => 17
            [page_name] => Profile
            [page_link] => user/User_profile
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [3] => stdClass Object
        (
            [page_id] => 18
            [page_name] => Change password
            [page_link] => user/Change_password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-12-12 11:00:41 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 11:00:41 --> loading view public\Dashboard
INFO - 2019-12-12 11:00:41 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 11:00:41 --> Final output sent to browser
DEBUG - 2019-12-12 11:00:41 --> Total execution time: 0.6041
INFO - 2019-12-12 11:43:41 --> Config Class Initialized
INFO - 2019-12-12 11:43:41 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:43:41 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:43:41 --> Utf8 Class Initialized
INFO - 2019-12-12 11:43:41 --> URI Class Initialized
INFO - 2019-12-12 11:43:41 --> Router Class Initialized
INFO - 2019-12-12 11:43:41 --> Output Class Initialized
INFO - 2019-12-12 11:43:41 --> Security Class Initialized
DEBUG - 2019-12-12 11:43:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:43:41 --> Input Class Initialized
INFO - 2019-12-12 11:43:41 --> Language Class Initialized
INFO - 2019-12-12 11:43:41 --> Loader Class Initialized
INFO - 2019-12-12 11:43:41 --> Helper loaded: html_helper
INFO - 2019-12-12 11:43:41 --> Helper loaded: url_helper
INFO - 2019-12-12 11:43:41 --> Helper loaded: form_helper
INFO - 2019-12-12 11:43:41 --> Database Driver Class Initialized
INFO - 2019-12-12 11:43:41 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:43:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:43:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:43:41 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:43:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:43:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:43:41 --> Controller Class Initialized
INFO - 2019-12-12 11:43:41 --> Helper loaded: cookie_helper
INFO - 2019-12-12 11:43:41 --> logout() called
DEBUG - 2019-12-12 11:43:41 --> loading model Active_Session
INFO - 2019-12-12 11:43:41 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 11:43:41 --> calling remove_active_session()
DEBUG - 2019-12-12 11:43:41 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-12 11:43:41 --> loading view welcome controller ... 
INFO - 2019-12-12 11:43:41 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 11:43:41 --> Final output sent to browser
DEBUG - 2019-12-12 11:43:41 --> Total execution time: 0.4550
INFO - 2019-12-12 11:43:46 --> Config Class Initialized
INFO - 2019-12-12 11:43:46 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:43:46 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:43:46 --> Utf8 Class Initialized
INFO - 2019-12-12 11:43:46 --> URI Class Initialized
INFO - 2019-12-12 11:43:46 --> Router Class Initialized
INFO - 2019-12-12 11:43:46 --> Output Class Initialized
INFO - 2019-12-12 11:43:46 --> Security Class Initialized
DEBUG - 2019-12-12 11:43:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:43:46 --> Input Class Initialized
INFO - 2019-12-12 11:43:46 --> Language Class Initialized
INFO - 2019-12-12 11:43:46 --> Loader Class Initialized
INFO - 2019-12-12 11:43:46 --> Helper loaded: html_helper
INFO - 2019-12-12 11:43:46 --> Helper loaded: url_helper
INFO - 2019-12-12 11:43:46 --> Helper loaded: form_helper
INFO - 2019-12-12 11:43:46 --> Database Driver Class Initialized
INFO - 2019-12-12 11:43:46 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:43:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:43:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:43:46 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:43:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:43:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:43:46 --> Controller Class Initialized
INFO - 2019-12-12 11:43:46 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 11:43:46 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 11:43:46 --> getAuth method got called...
DEBUG - 2019-12-12 11:43:46 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 11:43:46 --> Unreachable block here....
DEBUG - 2019-12-12 11:43:46 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 11:43:46 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 11:43:46 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 11:43:47 -->  ldap login success
INFO - 2019-12-12 11:43:47 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 11:43:47 --> Role Retrive from DB
DEBUG - 2019-12-12 11:43:47 --> loading model Active_Session
INFO - 2019-12-12 11:43:47 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 11:43:47 --> calling insert_active_session()
DEBUG - 2019-12-12 11:43:47 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 11:43:47 --> insert success
DEBUG - 2019-12-12 11:43:47 --> loading Configarable_Login model...
INFO - 2019-12-12 11:43:47 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 11:43:47 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 11:43:47 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 11:43:47 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 11:43:47 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 11:43:47 --> loading view public\Dashboard
INFO - 2019-12-12 11:43:47 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 11:43:47 --> Final output sent to browser
DEBUG - 2019-12-12 11:43:47 --> Total execution time: 0.9940
INFO - 2019-12-12 11:43:49 --> Config Class Initialized
INFO - 2019-12-12 11:43:49 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:43:49 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:43:49 --> Utf8 Class Initialized
INFO - 2019-12-12 11:43:49 --> URI Class Initialized
INFO - 2019-12-12 11:43:49 --> Router Class Initialized
INFO - 2019-12-12 11:43:49 --> Output Class Initialized
INFO - 2019-12-12 11:43:49 --> Security Class Initialized
DEBUG - 2019-12-12 11:43:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:43:49 --> Input Class Initialized
INFO - 2019-12-12 11:43:49 --> Language Class Initialized
ERROR - 2019-12-12 11:43:49 --> Severity: Compile Error --> Cannot redeclare Create_User::showAllGroupData() C:\xampp\htdocs\oneoss\application\controllers\user\Create_User.php 216
INFO - 2019-12-12 11:43:57 --> Config Class Initialized
INFO - 2019-12-12 11:43:57 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:43:57 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:43:57 --> Utf8 Class Initialized
INFO - 2019-12-12 11:43:57 --> URI Class Initialized
DEBUG - 2019-12-12 11:43:57 --> No URI present. Default controller set.
INFO - 2019-12-12 11:43:57 --> Router Class Initialized
INFO - 2019-12-12 11:43:57 --> Output Class Initialized
INFO - 2019-12-12 11:43:57 --> Security Class Initialized
DEBUG - 2019-12-12 11:43:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:43:57 --> Input Class Initialized
INFO - 2019-12-12 11:43:57 --> Language Class Initialized
INFO - 2019-12-12 11:43:57 --> Loader Class Initialized
INFO - 2019-12-12 11:43:57 --> Helper loaded: html_helper
INFO - 2019-12-12 11:43:57 --> Helper loaded: url_helper
INFO - 2019-12-12 11:43:57 --> Helper loaded: form_helper
INFO - 2019-12-12 11:43:57 --> Database Driver Class Initialized
INFO - 2019-12-12 11:43:58 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:43:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:43:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:43:58 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:43:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:43:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:43:58 --> Controller Class Initialized
INFO - 2019-12-12 11:43:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 11:43:58 --> Final output sent to browser
DEBUG - 2019-12-12 11:43:58 --> Total execution time: 0.2420
INFO - 2019-12-12 11:43:58 --> Config Class Initialized
INFO - 2019-12-12 11:43:58 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:43:58 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:43:58 --> Utf8 Class Initialized
INFO - 2019-12-12 11:43:58 --> URI Class Initialized
DEBUG - 2019-12-12 11:43:58 --> No URI present. Default controller set.
INFO - 2019-12-12 11:43:58 --> Router Class Initialized
INFO - 2019-12-12 11:43:58 --> Output Class Initialized
INFO - 2019-12-12 11:43:58 --> Security Class Initialized
DEBUG - 2019-12-12 11:43:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:43:58 --> Input Class Initialized
INFO - 2019-12-12 11:43:58 --> Language Class Initialized
INFO - 2019-12-12 11:43:58 --> Loader Class Initialized
INFO - 2019-12-12 11:43:58 --> Helper loaded: html_helper
INFO - 2019-12-12 11:43:58 --> Helper loaded: url_helper
INFO - 2019-12-12 11:43:58 --> Helper loaded: form_helper
INFO - 2019-12-12 11:43:58 --> Database Driver Class Initialized
INFO - 2019-12-12 11:43:58 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:43:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:43:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:43:58 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:43:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:43:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:43:58 --> Controller Class Initialized
INFO - 2019-12-12 11:43:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 11:43:58 --> Final output sent to browser
DEBUG - 2019-12-12 11:43:58 --> Total execution time: 0.2510
INFO - 2019-12-12 11:44:02 --> Config Class Initialized
INFO - 2019-12-12 11:44:02 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:44:02 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:44:02 --> Utf8 Class Initialized
INFO - 2019-12-12 11:44:02 --> URI Class Initialized
INFO - 2019-12-12 11:44:02 --> Router Class Initialized
INFO - 2019-12-12 11:44:02 --> Output Class Initialized
INFO - 2019-12-12 11:44:02 --> Security Class Initialized
DEBUG - 2019-12-12 11:44:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:44:02 --> Input Class Initialized
INFO - 2019-12-12 11:44:02 --> Language Class Initialized
INFO - 2019-12-12 11:44:02 --> Loader Class Initialized
INFO - 2019-12-12 11:44:02 --> Helper loaded: html_helper
INFO - 2019-12-12 11:44:02 --> Helper loaded: url_helper
INFO - 2019-12-12 11:44:02 --> Helper loaded: form_helper
INFO - 2019-12-12 11:44:02 --> Database Driver Class Initialized
INFO - 2019-12-12 11:44:02 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:44:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:44:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:44:02 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:44:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:44:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:44:02 --> Controller Class Initialized
INFO - 2019-12-12 11:44:02 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 11:44:02 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 11:44:02 --> getAuth method got called...
DEBUG - 2019-12-12 11:44:02 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 11:44:02 --> Unreachable block here....
DEBUG - 2019-12-12 11:44:02 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 11:44:02 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 11:44:02 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 11:44:03 -->  ldap login success
INFO - 2019-12-12 11:44:03 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 11:44:03 --> Role Retrive from DB
DEBUG - 2019-12-12 11:44:03 --> loading model Active_Session
INFO - 2019-12-12 11:44:03 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 11:44:03 --> calling insert_active_session()
DEBUG - 2019-12-12 11:44:03 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 11:44:03 --> insert success
DEBUG - 2019-12-12 11:44:03 --> loading Configarable_Login model...
INFO - 2019-12-12 11:44:03 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 11:44:03 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 11:44:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 11:44:03 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 11:44:03 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 11:44:03 --> loading view public\Dashboard
INFO - 2019-12-12 11:44:03 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 11:44:03 --> Final output sent to browser
DEBUG - 2019-12-12 11:44:03 --> Total execution time: 0.8930
INFO - 2019-12-12 11:44:06 --> Config Class Initialized
INFO - 2019-12-12 11:44:06 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:44:06 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:44:06 --> Utf8 Class Initialized
INFO - 2019-12-12 11:44:06 --> URI Class Initialized
INFO - 2019-12-12 11:44:06 --> Router Class Initialized
INFO - 2019-12-12 11:44:06 --> Output Class Initialized
INFO - 2019-12-12 11:44:06 --> Security Class Initialized
DEBUG - 2019-12-12 11:44:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:44:06 --> Input Class Initialized
INFO - 2019-12-12 11:44:06 --> Language Class Initialized
ERROR - 2019-12-12 11:44:06 --> Severity: Compile Error --> Cannot redeclare Create_User::showAllGroupData() C:\xampp\htdocs\oneoss\application\controllers\user\Create_User.php 216
INFO - 2019-12-12 11:45:27 --> Config Class Initialized
INFO - 2019-12-12 11:45:27 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:45:27 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:45:27 --> Utf8 Class Initialized
INFO - 2019-12-12 11:45:27 --> URI Class Initialized
INFO - 2019-12-12 11:45:27 --> Router Class Initialized
INFO - 2019-12-12 11:45:27 --> Output Class Initialized
INFO - 2019-12-12 11:45:27 --> Security Class Initialized
DEBUG - 2019-12-12 11:45:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:45:27 --> Input Class Initialized
INFO - 2019-12-12 11:45:27 --> Language Class Initialized
INFO - 2019-12-12 11:45:27 --> Loader Class Initialized
INFO - 2019-12-12 11:45:27 --> Helper loaded: html_helper
INFO - 2019-12-12 11:45:27 --> Helper loaded: url_helper
INFO - 2019-12-12 11:45:27 --> Helper loaded: form_helper
INFO - 2019-12-12 11:45:27 --> Database Driver Class Initialized
INFO - 2019-12-12 11:45:27 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:45:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:45:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:45:27 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:45:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:45:27 --> Controller Class Initialized
DEBUG - 2019-12-12 11:45:27 --> Create_User constructer got called..
DEBUG - 2019-12-12 11:45:27 --> loading configurable menu with result=
INFO - 2019-12-12 11:45:27 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 11:45:27 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 11:45:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 11:45:27 --> Final output sent to browser
DEBUG - 2019-12-12 11:45:27 --> Total execution time: 0.4420
INFO - 2019-12-12 11:45:31 --> Config Class Initialized
INFO - 2019-12-12 11:45:31 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:45:31 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:45:31 --> Utf8 Class Initialized
INFO - 2019-12-12 11:45:31 --> URI Class Initialized
INFO - 2019-12-12 11:45:31 --> Router Class Initialized
INFO - 2019-12-12 11:45:31 --> Output Class Initialized
INFO - 2019-12-12 11:45:31 --> Security Class Initialized
DEBUG - 2019-12-12 11:45:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:45:31 --> Input Class Initialized
INFO - 2019-12-12 11:45:31 --> Language Class Initialized
INFO - 2019-12-12 11:45:31 --> Loader Class Initialized
INFO - 2019-12-12 11:45:31 --> Helper loaded: html_helper
INFO - 2019-12-12 11:45:31 --> Helper loaded: url_helper
INFO - 2019-12-12 11:45:31 --> Helper loaded: form_helper
INFO - 2019-12-12 11:45:31 --> Database Driver Class Initialized
INFO - 2019-12-12 11:45:31 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:45:31 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:45:31 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:45:31 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:45:31 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:45:31 --> Controller Class Initialized
DEBUG - 2019-12-12 11:45:31 --> Create_User constructer got called..
INFO - 2019-12-12 11:45:31 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 11:45:31 --> showing all user from db tblusers...
DEBUG - 2019-12-12 11:45:31 --> show_users from DB
INFO - 2019-12-12 11:45:31 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 11:45:31 --> Final output sent to browser
DEBUG - 2019-12-12 11:45:31 --> Total execution time: 0.3460
INFO - 2019-12-12 11:45:49 --> Config Class Initialized
INFO - 2019-12-12 11:45:49 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:45:50 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:45:50 --> Utf8 Class Initialized
INFO - 2019-12-12 11:45:50 --> URI Class Initialized
INFO - 2019-12-12 11:45:50 --> Router Class Initialized
INFO - 2019-12-12 11:45:50 --> Output Class Initialized
INFO - 2019-12-12 11:45:50 --> Security Class Initialized
DEBUG - 2019-12-12 11:45:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:45:50 --> Input Class Initialized
INFO - 2019-12-12 11:45:50 --> Language Class Initialized
INFO - 2019-12-12 11:45:50 --> Loader Class Initialized
INFO - 2019-12-12 11:45:50 --> Helper loaded: html_helper
INFO - 2019-12-12 11:45:50 --> Helper loaded: url_helper
INFO - 2019-12-12 11:45:50 --> Helper loaded: form_helper
INFO - 2019-12-12 11:45:50 --> Database Driver Class Initialized
INFO - 2019-12-12 11:45:50 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:45:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:45:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:45:50 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:45:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:45:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:45:50 --> Controller Class Initialized
DEBUG - 2019-12-12 11:45:50 --> Create_User constructer got called..
INFO - 2019-12-12 11:45:50 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 11:45:50 --> showing all user from db tblusers...
DEBUG - 2019-12-12 11:45:50 --> show_groups from DB
INFO - 2019-12-12 11:45:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-12 11:45:50 --> Final output sent to browser
DEBUG - 2019-12-12 11:45:50 --> Total execution time: 0.3270
INFO - 2019-12-12 11:45:53 --> Config Class Initialized
INFO - 2019-12-12 11:45:53 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:45:53 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:45:53 --> Utf8 Class Initialized
INFO - 2019-12-12 11:45:53 --> URI Class Initialized
INFO - 2019-12-12 11:45:53 --> Router Class Initialized
INFO - 2019-12-12 11:45:53 --> Output Class Initialized
INFO - 2019-12-12 11:45:53 --> Security Class Initialized
DEBUG - 2019-12-12 11:45:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:45:53 --> Input Class Initialized
INFO - 2019-12-12 11:45:53 --> Language Class Initialized
INFO - 2019-12-12 11:45:53 --> Loader Class Initialized
INFO - 2019-12-12 11:45:53 --> Helper loaded: html_helper
INFO - 2019-12-12 11:45:53 --> Helper loaded: url_helper
INFO - 2019-12-12 11:45:53 --> Helper loaded: form_helper
INFO - 2019-12-12 11:45:53 --> Database Driver Class Initialized
INFO - 2019-12-12 11:45:53 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:45:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:45:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:45:53 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:45:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:45:53 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:45:53 --> Controller Class Initialized
DEBUG - 2019-12-12 11:45:53 --> Create_User constructer got called..
INFO - 2019-12-12 11:45:53 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 11:45:53 --> showing all user from db tblusers...
DEBUG - 2019-12-12 11:45:53 --> show_users from DB
INFO - 2019-12-12 11:45:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 11:45:53 --> Final output sent to browser
DEBUG - 2019-12-12 11:45:53 --> Total execution time: 0.2850
INFO - 2019-12-12 11:45:54 --> Config Class Initialized
INFO - 2019-12-12 11:45:54 --> Hooks Class Initialized
DEBUG - 2019-12-12 11:45:54 --> UTF-8 Support Enabled
INFO - 2019-12-12 11:45:54 --> Utf8 Class Initialized
INFO - 2019-12-12 11:45:54 --> URI Class Initialized
INFO - 2019-12-12 11:45:54 --> Router Class Initialized
INFO - 2019-12-12 11:45:54 --> Output Class Initialized
INFO - 2019-12-12 11:45:54 --> Security Class Initialized
DEBUG - 2019-12-12 11:45:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 11:45:54 --> Input Class Initialized
INFO - 2019-12-12 11:45:54 --> Language Class Initialized
INFO - 2019-12-12 11:45:54 --> Loader Class Initialized
INFO - 2019-12-12 11:45:54 --> Helper loaded: html_helper
INFO - 2019-12-12 11:45:54 --> Helper loaded: url_helper
INFO - 2019-12-12 11:45:54 --> Helper loaded: form_helper
INFO - 2019-12-12 11:45:54 --> Database Driver Class Initialized
INFO - 2019-12-12 11:45:54 --> Form Validation Class Initialized
DEBUG - 2019-12-12 11:45:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 11:45:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 11:45:54 --> Encryption Class Initialized
DEBUG - 2019-12-12 11:45:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 11:45:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 11:45:54 --> Controller Class Initialized
DEBUG - 2019-12-12 11:45:54 --> loading Configarable_Login model...
INFO - 2019-12-12 11:45:54 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 11:45:54 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 11:45:54 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 11:45:54 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 11:45:54 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 11:45:54 --> loading view public\Dashboard
INFO - 2019-12-12 11:45:54 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 11:45:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 11:45:54 --> Final output sent to browser
DEBUG - 2019-12-12 11:45:54 --> Total execution time: 0.3730
INFO - 2019-12-12 12:45:20 --> Config Class Initialized
INFO - 2019-12-12 12:45:20 --> Hooks Class Initialized
DEBUG - 2019-12-12 12:45:20 --> UTF-8 Support Enabled
INFO - 2019-12-12 12:45:20 --> Utf8 Class Initialized
INFO - 2019-12-12 12:45:20 --> URI Class Initialized
INFO - 2019-12-12 12:45:20 --> Router Class Initialized
INFO - 2019-12-12 12:45:20 --> Output Class Initialized
INFO - 2019-12-12 12:45:20 --> Security Class Initialized
DEBUG - 2019-12-12 12:45:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 12:45:20 --> Input Class Initialized
INFO - 2019-12-12 12:45:20 --> Language Class Initialized
INFO - 2019-12-12 12:45:20 --> Loader Class Initialized
INFO - 2019-12-12 12:45:20 --> Helper loaded: html_helper
INFO - 2019-12-12 12:45:20 --> Helper loaded: url_helper
INFO - 2019-12-12 12:45:20 --> Helper loaded: form_helper
INFO - 2019-12-12 12:45:20 --> Database Driver Class Initialized
INFO - 2019-12-12 12:45:20 --> Form Validation Class Initialized
DEBUG - 2019-12-12 12:45:20 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 12:45:20 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 12:45:20 --> Encryption Class Initialized
DEBUG - 2019-12-12 12:45:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 12:45:20 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 12:45:20 --> Controller Class Initialized
DEBUG - 2019-12-12 12:45:20 --> loading Configarable_Login model...
INFO - 2019-12-12 12:45:20 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 12:45:20 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 12:45:20 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 12:45:20 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 12:45:20 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 12:45:20 --> loading view public\Dashboard
INFO - 2019-12-12 12:45:20 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 12:45:20 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 12:45:20 --> Final output sent to browser
DEBUG - 2019-12-12 12:45:20 --> Total execution time: 0.2670
INFO - 2019-12-12 12:45:37 --> Config Class Initialized
INFO - 2019-12-12 12:45:37 --> Hooks Class Initialized
DEBUG - 2019-12-12 12:45:37 --> UTF-8 Support Enabled
INFO - 2019-12-12 12:45:37 --> Utf8 Class Initialized
INFO - 2019-12-12 12:45:37 --> URI Class Initialized
INFO - 2019-12-12 12:45:37 --> Router Class Initialized
INFO - 2019-12-12 12:45:37 --> Output Class Initialized
INFO - 2019-12-12 12:45:37 --> Security Class Initialized
DEBUG - 2019-12-12 12:45:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 12:45:37 --> Input Class Initialized
INFO - 2019-12-12 12:45:37 --> Language Class Initialized
INFO - 2019-12-12 12:45:37 --> Loader Class Initialized
INFO - 2019-12-12 12:45:37 --> Helper loaded: html_helper
INFO - 2019-12-12 12:45:37 --> Helper loaded: url_helper
INFO - 2019-12-12 12:45:37 --> Helper loaded: form_helper
INFO - 2019-12-12 12:45:37 --> Database Driver Class Initialized
INFO - 2019-12-12 12:45:37 --> Form Validation Class Initialized
DEBUG - 2019-12-12 12:45:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 12:45:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 12:45:37 --> Encryption Class Initialized
DEBUG - 2019-12-12 12:45:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 12:45:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 12:45:37 --> Controller Class Initialized
DEBUG - 2019-12-12 12:45:37 --> loading Configarable_Login model...
INFO - 2019-12-12 12:45:37 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 12:45:37 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 12:45:37 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 12:45:37 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 12:45:37 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 12:45:37 --> loading view public\Dashboard
INFO - 2019-12-12 12:45:37 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 12:45:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 12:45:37 --> Final output sent to browser
DEBUG - 2019-12-12 12:45:37 --> Total execution time: 0.4030
INFO - 2019-12-12 12:45:41 --> Config Class Initialized
INFO - 2019-12-12 12:45:41 --> Hooks Class Initialized
DEBUG - 2019-12-12 12:45:41 --> UTF-8 Support Enabled
INFO - 2019-12-12 12:45:41 --> Utf8 Class Initialized
INFO - 2019-12-12 12:45:41 --> URI Class Initialized
INFO - 2019-12-12 12:45:41 --> Router Class Initialized
INFO - 2019-12-12 12:45:41 --> Output Class Initialized
INFO - 2019-12-12 12:45:41 --> Security Class Initialized
DEBUG - 2019-12-12 12:45:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 12:45:41 --> Input Class Initialized
INFO - 2019-12-12 12:45:41 --> Language Class Initialized
INFO - 2019-12-12 12:45:41 --> Loader Class Initialized
INFO - 2019-12-12 12:45:41 --> Helper loaded: html_helper
INFO - 2019-12-12 12:45:41 --> Helper loaded: url_helper
INFO - 2019-12-12 12:45:41 --> Helper loaded: form_helper
INFO - 2019-12-12 12:45:41 --> Database Driver Class Initialized
INFO - 2019-12-12 12:45:41 --> Form Validation Class Initialized
DEBUG - 2019-12-12 12:45:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 12:45:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 12:45:41 --> Encryption Class Initialized
DEBUG - 2019-12-12 12:45:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 12:45:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 12:45:41 --> Controller Class Initialized
DEBUG - 2019-12-12 12:45:41 --> Create_User constructer got called..
DEBUG - 2019-12-12 12:45:41 --> loading configurable menu with result=
INFO - 2019-12-12 12:45:41 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 12:45:41 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 12:45:41 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 12:45:41 --> Final output sent to browser
DEBUG - 2019-12-12 12:45:41 --> Total execution time: 0.3550
INFO - 2019-12-12 12:45:45 --> Config Class Initialized
INFO - 2019-12-12 12:45:45 --> Hooks Class Initialized
DEBUG - 2019-12-12 12:45:45 --> UTF-8 Support Enabled
INFO - 2019-12-12 12:45:45 --> Utf8 Class Initialized
INFO - 2019-12-12 12:45:45 --> URI Class Initialized
INFO - 2019-12-12 12:45:45 --> Router Class Initialized
INFO - 2019-12-12 12:45:45 --> Output Class Initialized
INFO - 2019-12-12 12:45:45 --> Security Class Initialized
DEBUG - 2019-12-12 12:45:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 12:45:45 --> Input Class Initialized
INFO - 2019-12-12 12:45:45 --> Language Class Initialized
INFO - 2019-12-12 12:45:45 --> Loader Class Initialized
INFO - 2019-12-12 12:45:45 --> Helper loaded: html_helper
INFO - 2019-12-12 12:45:45 --> Helper loaded: url_helper
INFO - 2019-12-12 12:45:45 --> Helper loaded: form_helper
INFO - 2019-12-12 12:45:45 --> Database Driver Class Initialized
INFO - 2019-12-12 12:45:45 --> Form Validation Class Initialized
DEBUG - 2019-12-12 12:45:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 12:45:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 12:45:45 --> Encryption Class Initialized
DEBUG - 2019-12-12 12:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 12:45:45 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 12:45:45 --> Controller Class Initialized
DEBUG - 2019-12-12 12:45:45 --> Create_User constructer got called..
INFO - 2019-12-12 12:45:45 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 12:45:45 --> showing all user from db tblusers...
DEBUG - 2019-12-12 12:45:45 --> show_users from DB
INFO - 2019-12-12 12:45:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 12:45:45 --> Final output sent to browser
DEBUG - 2019-12-12 12:45:45 --> Total execution time: 0.3870
INFO - 2019-12-12 13:05:30 --> Config Class Initialized
INFO - 2019-12-12 13:05:30 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:05:30 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:05:30 --> Utf8 Class Initialized
INFO - 2019-12-12 13:05:30 --> URI Class Initialized
INFO - 2019-12-12 13:05:30 --> Router Class Initialized
INFO - 2019-12-12 13:05:30 --> Output Class Initialized
INFO - 2019-12-12 13:05:30 --> Security Class Initialized
DEBUG - 2019-12-12 13:05:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:05:30 --> Input Class Initialized
INFO - 2019-12-12 13:05:30 --> Language Class Initialized
INFO - 2019-12-12 13:05:30 --> Loader Class Initialized
INFO - 2019-12-12 13:05:30 --> Helper loaded: html_helper
INFO - 2019-12-12 13:05:30 --> Helper loaded: url_helper
INFO - 2019-12-12 13:05:30 --> Helper loaded: form_helper
INFO - 2019-12-12 13:05:30 --> Database Driver Class Initialized
INFO - 2019-12-12 13:05:30 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:05:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:05:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:05:30 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:05:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:05:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:05:30 --> Controller Class Initialized
DEBUG - 2019-12-12 13:05:30 --> Create_User constructer got called..
INFO - 2019-12-12 13:05:30 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:05:30 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:05:30 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:05:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:05:30 --> Final output sent to browser
DEBUG - 2019-12-12 13:05:30 --> Total execution time: 0.3930
INFO - 2019-12-12 13:06:01 --> Config Class Initialized
INFO - 2019-12-12 13:06:02 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:06:02 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:06:02 --> Utf8 Class Initialized
INFO - 2019-12-12 13:06:02 --> URI Class Initialized
INFO - 2019-12-12 13:06:02 --> Router Class Initialized
INFO - 2019-12-12 13:06:02 --> Output Class Initialized
INFO - 2019-12-12 13:06:02 --> Security Class Initialized
DEBUG - 2019-12-12 13:06:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:06:02 --> Input Class Initialized
INFO - 2019-12-12 13:06:02 --> Language Class Initialized
INFO - 2019-12-12 13:06:02 --> Loader Class Initialized
INFO - 2019-12-12 13:06:02 --> Helper loaded: html_helper
INFO - 2019-12-12 13:06:02 --> Helper loaded: url_helper
INFO - 2019-12-12 13:06:02 --> Helper loaded: form_helper
INFO - 2019-12-12 13:06:02 --> Database Driver Class Initialized
INFO - 2019-12-12 13:06:02 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:06:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:06:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:06:02 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:06:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:06:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:06:02 --> Controller Class Initialized
DEBUG - 2019-12-12 13:06:02 --> Create_User constructer got called..
INFO - 2019-12-12 13:06:02 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:06:02 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:06:02 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:06:02 --> Final output sent to browser
DEBUG - 2019-12-12 13:06:02 --> Total execution time: 0.3640
INFO - 2019-12-12 13:08:03 --> Config Class Initialized
INFO - 2019-12-12 13:08:03 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:08:03 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:08:03 --> Utf8 Class Initialized
INFO - 2019-12-12 13:08:03 --> URI Class Initialized
INFO - 2019-12-12 13:08:03 --> Router Class Initialized
INFO - 2019-12-12 13:08:03 --> Output Class Initialized
INFO - 2019-12-12 13:08:03 --> Security Class Initialized
DEBUG - 2019-12-12 13:08:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:08:03 --> Input Class Initialized
INFO - 2019-12-12 13:08:03 --> Language Class Initialized
INFO - 2019-12-12 13:08:03 --> Loader Class Initialized
INFO - 2019-12-12 13:08:03 --> Helper loaded: html_helper
INFO - 2019-12-12 13:08:03 --> Helper loaded: url_helper
INFO - 2019-12-12 13:08:03 --> Helper loaded: form_helper
INFO - 2019-12-12 13:08:03 --> Database Driver Class Initialized
INFO - 2019-12-12 13:08:03 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:08:03 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:08:03 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:08:03 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:08:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:08:03 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:08:03 --> Controller Class Initialized
DEBUG - 2019-12-12 13:08:03 --> Create_User constructer got called..
INFO - 2019-12-12 13:08:03 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:08:03 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:08:03 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:08:03 --> Final output sent to browser
DEBUG - 2019-12-12 13:08:03 --> Total execution time: 0.3360
INFO - 2019-12-12 13:08:36 --> Config Class Initialized
INFO - 2019-12-12 13:08:36 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:08:36 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:08:36 --> Utf8 Class Initialized
INFO - 2019-12-12 13:08:36 --> URI Class Initialized
INFO - 2019-12-12 13:08:36 --> Router Class Initialized
INFO - 2019-12-12 13:08:36 --> Output Class Initialized
INFO - 2019-12-12 13:08:36 --> Security Class Initialized
DEBUG - 2019-12-12 13:08:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:08:36 --> Input Class Initialized
INFO - 2019-12-12 13:08:36 --> Language Class Initialized
INFO - 2019-12-12 13:08:36 --> Loader Class Initialized
INFO - 2019-12-12 13:08:36 --> Helper loaded: html_helper
INFO - 2019-12-12 13:08:36 --> Helper loaded: url_helper
INFO - 2019-12-12 13:08:36 --> Helper loaded: form_helper
INFO - 2019-12-12 13:08:36 --> Database Driver Class Initialized
INFO - 2019-12-12 13:08:36 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:08:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:08:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:08:36 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:08:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:08:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:08:36 --> Controller Class Initialized
DEBUG - 2019-12-12 13:08:36 --> Create_User constructer got called..
INFO - 2019-12-12 13:08:36 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:08:36 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:08:36 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:08:36 --> Final output sent to browser
DEBUG - 2019-12-12 13:08:36 --> Total execution time: 0.3360
INFO - 2019-12-12 13:17:17 --> Config Class Initialized
INFO - 2019-12-12 13:17:17 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:17:17 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:17:17 --> Utf8 Class Initialized
INFO - 2019-12-12 13:17:17 --> URI Class Initialized
INFO - 2019-12-12 13:17:17 --> Router Class Initialized
INFO - 2019-12-12 13:17:17 --> Output Class Initialized
INFO - 2019-12-12 13:17:17 --> Security Class Initialized
DEBUG - 2019-12-12 13:17:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:17:17 --> Input Class Initialized
INFO - 2019-12-12 13:17:17 --> Language Class Initialized
INFO - 2019-12-12 13:17:17 --> Loader Class Initialized
INFO - 2019-12-12 13:17:17 --> Helper loaded: html_helper
INFO - 2019-12-12 13:17:17 --> Helper loaded: url_helper
INFO - 2019-12-12 13:17:17 --> Helper loaded: form_helper
INFO - 2019-12-12 13:17:17 --> Database Driver Class Initialized
INFO - 2019-12-12 13:17:17 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:17:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:17:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:17:17 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:17:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:17:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:17:17 --> Controller Class Initialized
DEBUG - 2019-12-12 13:17:17 --> Create_User constructer got called..
INFO - 2019-12-12 13:17:17 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:17:17 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:17:17 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:17:17 --> Final output sent to browser
DEBUG - 2019-12-12 13:17:17 --> Total execution time: 0.3290
INFO - 2019-12-12 13:24:36 --> Config Class Initialized
INFO - 2019-12-12 13:24:36 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:24:36 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:24:36 --> Utf8 Class Initialized
INFO - 2019-12-12 13:24:36 --> URI Class Initialized
INFO - 2019-12-12 13:24:36 --> Router Class Initialized
INFO - 2019-12-12 13:24:36 --> Output Class Initialized
INFO - 2019-12-12 13:24:36 --> Security Class Initialized
DEBUG - 2019-12-12 13:24:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:24:36 --> Input Class Initialized
INFO - 2019-12-12 13:24:36 --> Language Class Initialized
INFO - 2019-12-12 13:24:36 --> Loader Class Initialized
INFO - 2019-12-12 13:24:36 --> Helper loaded: html_helper
INFO - 2019-12-12 13:24:36 --> Helper loaded: url_helper
INFO - 2019-12-12 13:24:36 --> Helper loaded: form_helper
INFO - 2019-12-12 13:24:36 --> Database Driver Class Initialized
INFO - 2019-12-12 13:24:36 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:24:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:24:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:24:36 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:24:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:24:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:24:36 --> Controller Class Initialized
INFO - 2019-12-12 13:24:36 --> Helper loaded: cookie_helper
INFO - 2019-12-12 13:24:36 --> logout() called
DEBUG - 2019-12-12 13:24:36 --> loading model Active_Session
INFO - 2019-12-12 13:24:36 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 13:24:36 --> calling remove_active_session()
DEBUG - 2019-12-12 13:24:36 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-12 13:24:36 --> loading view welcome controller ... 
INFO - 2019-12-12 13:24:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 13:24:36 --> Final output sent to browser
DEBUG - 2019-12-12 13:24:36 --> Total execution time: 0.3080
INFO - 2019-12-12 13:24:39 --> Config Class Initialized
INFO - 2019-12-12 13:24:39 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:24:40 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:24:40 --> Utf8 Class Initialized
INFO - 2019-12-12 13:24:40 --> URI Class Initialized
INFO - 2019-12-12 13:24:40 --> Router Class Initialized
INFO - 2019-12-12 13:24:40 --> Output Class Initialized
INFO - 2019-12-12 13:24:40 --> Security Class Initialized
DEBUG - 2019-12-12 13:24:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:24:40 --> Input Class Initialized
INFO - 2019-12-12 13:24:40 --> Language Class Initialized
INFO - 2019-12-12 13:24:40 --> Loader Class Initialized
INFO - 2019-12-12 13:24:40 --> Helper loaded: html_helper
INFO - 2019-12-12 13:24:40 --> Helper loaded: url_helper
INFO - 2019-12-12 13:24:40 --> Helper loaded: form_helper
INFO - 2019-12-12 13:24:40 --> Database Driver Class Initialized
INFO - 2019-12-12 13:24:40 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:24:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:24:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:24:40 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:24:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:24:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:24:40 --> Controller Class Initialized
INFO - 2019-12-12 13:24:40 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 13:24:40 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:24:40 --> getAuth method got called...
DEBUG - 2019-12-12 13:24:40 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 13:24:40 --> Unreachable block here....
DEBUG - 2019-12-12 13:24:40 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 13:24:40 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 13:24:40 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 13:24:40 -->  ldap login success
INFO - 2019-12-12 13:24:40 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 13:24:40 --> Role Retrive from DB
DEBUG - 2019-12-12 13:24:40 --> loading model Active_Session
INFO - 2019-12-12 13:24:40 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 13:24:40 --> calling insert_active_session()
DEBUG - 2019-12-12 13:24:40 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 13:24:40 --> insert success
DEBUG - 2019-12-12 13:24:40 --> loading Configarable_Login model...
INFO - 2019-12-12 13:24:40 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 13:24:40 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 13:24:40 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 13:24:40 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 2
            [page_name] => Profile
            [page_link] => user/Create_User/showAllUserData
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 13:24:40 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 13:24:40 --> loading view public\Dashboard
INFO - 2019-12-12 13:24:40 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 13:24:40 --> Final output sent to browser
DEBUG - 2019-12-12 13:24:40 --> Total execution time: 1.0250
INFO - 2019-12-12 13:24:43 --> Config Class Initialized
INFO - 2019-12-12 13:24:43 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:24:43 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:24:43 --> Utf8 Class Initialized
INFO - 2019-12-12 13:24:43 --> URI Class Initialized
INFO - 2019-12-12 13:24:43 --> Router Class Initialized
INFO - 2019-12-12 13:24:43 --> Output Class Initialized
INFO - 2019-12-12 13:24:43 --> Security Class Initialized
DEBUG - 2019-12-12 13:24:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:24:43 --> Input Class Initialized
INFO - 2019-12-12 13:24:43 --> Language Class Initialized
INFO - 2019-12-12 13:24:43 --> Loader Class Initialized
INFO - 2019-12-12 13:24:43 --> Helper loaded: html_helper
INFO - 2019-12-12 13:24:43 --> Helper loaded: url_helper
INFO - 2019-12-12 13:24:43 --> Helper loaded: form_helper
INFO - 2019-12-12 13:24:43 --> Database Driver Class Initialized
INFO - 2019-12-12 13:24:43 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:24:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:24:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:24:43 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:24:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:24:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:24:43 --> Controller Class Initialized
DEBUG - 2019-12-12 13:24:43 --> Create_User constructer got called..
INFO - 2019-12-12 13:24:43 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 13:24:43 --> showing all user from db tblusers...
DEBUG - 2019-12-12 13:24:43 --> show_users from DB
INFO - 2019-12-12 13:24:43 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 13:24:43 --> Final output sent to browser
DEBUG - 2019-12-12 13:24:43 --> Total execution time: 0.4100
INFO - 2019-12-12 13:24:47 --> Config Class Initialized
INFO - 2019-12-12 13:24:47 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:24:47 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:24:47 --> Utf8 Class Initialized
INFO - 2019-12-12 13:24:47 --> URI Class Initialized
INFO - 2019-12-12 13:24:47 --> Router Class Initialized
INFO - 2019-12-12 13:24:47 --> Output Class Initialized
INFO - 2019-12-12 13:24:47 --> Security Class Initialized
DEBUG - 2019-12-12 13:24:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:24:47 --> Input Class Initialized
INFO - 2019-12-12 13:24:47 --> Language Class Initialized
INFO - 2019-12-12 13:24:47 --> Loader Class Initialized
INFO - 2019-12-12 13:24:47 --> Helper loaded: html_helper
INFO - 2019-12-12 13:24:47 --> Helper loaded: url_helper
INFO - 2019-12-12 13:24:47 --> Helper loaded: form_helper
INFO - 2019-12-12 13:24:47 --> Database Driver Class Initialized
INFO - 2019-12-12 13:24:48 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:24:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:24:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:24:48 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:24:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:24:48 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:24:48 --> Controller Class Initialized
DEBUG - 2019-12-12 13:24:48 --> Create_User constructer got called..
INFO - 2019-12-12 13:24:48 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 13:24:48 --> showing all user from db tblusers...
DEBUG - 2019-12-12 13:24:48 --> show_users from DB
INFO - 2019-12-12 13:24:48 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 13:24:48 --> Final output sent to browser
DEBUG - 2019-12-12 13:24:48 --> Total execution time: 0.4280
INFO - 2019-12-12 13:25:37 --> Config Class Initialized
INFO - 2019-12-12 13:25:37 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:25:37 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:25:37 --> Utf8 Class Initialized
INFO - 2019-12-12 13:25:37 --> URI Class Initialized
INFO - 2019-12-12 13:25:37 --> Router Class Initialized
INFO - 2019-12-12 13:25:37 --> Output Class Initialized
INFO - 2019-12-12 13:25:37 --> Security Class Initialized
DEBUG - 2019-12-12 13:25:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:25:37 --> Input Class Initialized
INFO - 2019-12-12 13:25:37 --> Language Class Initialized
INFO - 2019-12-12 13:25:37 --> Loader Class Initialized
INFO - 2019-12-12 13:25:37 --> Helper loaded: html_helper
INFO - 2019-12-12 13:25:37 --> Helper loaded: url_helper
INFO - 2019-12-12 13:25:37 --> Helper loaded: form_helper
INFO - 2019-12-12 13:25:37 --> Database Driver Class Initialized
INFO - 2019-12-12 13:25:37 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:25:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:25:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:25:37 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:25:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:25:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:25:37 --> Controller Class Initialized
DEBUG - 2019-12-12 13:25:37 --> Create_User constructer got called..
INFO - 2019-12-12 13:25:37 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 13:25:37 --> showing all user from db tblusers...
DEBUG - 2019-12-12 13:25:37 --> show_users from DB
INFO - 2019-12-12 13:25:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 13:25:37 --> Final output sent to browser
DEBUG - 2019-12-12 13:25:37 --> Total execution time: 0.4050
INFO - 2019-12-12 13:25:40 --> Config Class Initialized
INFO - 2019-12-12 13:25:40 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:25:40 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:25:40 --> Utf8 Class Initialized
INFO - 2019-12-12 13:25:40 --> URI Class Initialized
INFO - 2019-12-12 13:25:40 --> Router Class Initialized
INFO - 2019-12-12 13:25:40 --> Output Class Initialized
INFO - 2019-12-12 13:25:40 --> Security Class Initialized
DEBUG - 2019-12-12 13:25:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:25:40 --> Input Class Initialized
INFO - 2019-12-12 13:25:40 --> Language Class Initialized
INFO - 2019-12-12 13:25:40 --> Loader Class Initialized
INFO - 2019-12-12 13:25:40 --> Helper loaded: html_helper
INFO - 2019-12-12 13:25:40 --> Helper loaded: url_helper
INFO - 2019-12-12 13:25:40 --> Helper loaded: form_helper
INFO - 2019-12-12 13:25:40 --> Database Driver Class Initialized
INFO - 2019-12-12 13:25:40 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:25:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:25:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:25:40 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:25:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:25:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:25:40 --> Controller Class Initialized
DEBUG - 2019-12-12 13:25:40 --> Create_User constructer got called..
INFO - 2019-12-12 13:25:40 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 13:25:40 --> showing all user from db tblusers...
DEBUG - 2019-12-12 13:25:40 --> show_users from DB
INFO - 2019-12-12 13:25:40 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-12 13:25:40 --> Final output sent to browser
DEBUG - 2019-12-12 13:25:40 --> Total execution time: 0.3760
INFO - 2019-12-12 13:25:44 --> Config Class Initialized
INFO - 2019-12-12 13:25:44 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:25:44 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:25:44 --> Utf8 Class Initialized
INFO - 2019-12-12 13:25:44 --> URI Class Initialized
INFO - 2019-12-12 13:25:44 --> Router Class Initialized
INFO - 2019-12-12 13:25:44 --> Output Class Initialized
INFO - 2019-12-12 13:25:44 --> Security Class Initialized
DEBUG - 2019-12-12 13:25:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:25:44 --> Input Class Initialized
INFO - 2019-12-12 13:25:44 --> Language Class Initialized
INFO - 2019-12-12 13:25:44 --> Loader Class Initialized
INFO - 2019-12-12 13:25:44 --> Helper loaded: html_helper
INFO - 2019-12-12 13:25:44 --> Helper loaded: url_helper
INFO - 2019-12-12 13:25:44 --> Helper loaded: form_helper
INFO - 2019-12-12 13:25:44 --> Database Driver Class Initialized
INFO - 2019-12-12 13:25:44 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:25:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:25:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:25:44 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:25:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:25:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:25:44 --> Controller Class Initialized
INFO - 2019-12-12 13:25:44 --> Helper loaded: cookie_helper
INFO - 2019-12-12 13:25:44 --> logout() called
DEBUG - 2019-12-12 13:25:44 --> loading model Active_Session
INFO - 2019-12-12 13:25:44 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 13:25:44 --> calling remove_active_session()
DEBUG - 2019-12-12 13:25:44 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-12 13:25:44 --> loading view welcome controller ... 
INFO - 2019-12-12 13:25:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 13:25:44 --> Final output sent to browser
DEBUG - 2019-12-12 13:25:44 --> Total execution time: 0.3660
INFO - 2019-12-12 13:25:49 --> Config Class Initialized
INFO - 2019-12-12 13:25:49 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:25:49 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:25:49 --> Utf8 Class Initialized
INFO - 2019-12-12 13:25:49 --> URI Class Initialized
INFO - 2019-12-12 13:25:49 --> Router Class Initialized
INFO - 2019-12-12 13:25:49 --> Output Class Initialized
INFO - 2019-12-12 13:25:49 --> Security Class Initialized
DEBUG - 2019-12-12 13:25:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:25:49 --> Input Class Initialized
INFO - 2019-12-12 13:25:49 --> Language Class Initialized
INFO - 2019-12-12 13:25:49 --> Loader Class Initialized
INFO - 2019-12-12 13:25:49 --> Helper loaded: html_helper
INFO - 2019-12-12 13:25:49 --> Helper loaded: url_helper
INFO - 2019-12-12 13:25:49 --> Helper loaded: form_helper
INFO - 2019-12-12 13:25:49 --> Database Driver Class Initialized
INFO - 2019-12-12 13:25:49 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:25:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:25:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:25:49 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:25:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:25:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:25:49 --> Controller Class Initialized
INFO - 2019-12-12 13:25:49 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 13:25:49 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:25:49 --> getAuth method got called...
DEBUG - 2019-12-12 13:25:49 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 13:25:49 --> Unreachable block here....
DEBUG - 2019-12-12 13:25:49 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 13:25:50 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 13:25:50 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 13:25:50 -->  ldap login success
INFO - 2019-12-12 13:25:50 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 13:25:50 --> Role Retrive from DB
DEBUG - 2019-12-12 13:25:50 --> loading model Active_Session
INFO - 2019-12-12 13:25:50 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 13:25:50 --> calling insert_active_session()
DEBUG - 2019-12-12 13:25:50 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 13:25:50 --> insert success
DEBUG - 2019-12-12 13:25:50 --> loading Configarable_Login model...
INFO - 2019-12-12 13:25:50 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 13:25:50 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 13:25:50 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 13:25:50 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 2
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 13:25:50 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 13:25:50 --> loading view public\Dashboard
INFO - 2019-12-12 13:25:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 13:25:50 --> Final output sent to browser
DEBUG - 2019-12-12 13:25:50 --> Total execution time: 0.9970
INFO - 2019-12-12 13:25:54 --> Config Class Initialized
INFO - 2019-12-12 13:25:54 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:25:54 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:25:54 --> Utf8 Class Initialized
INFO - 2019-12-12 13:25:54 --> URI Class Initialized
INFO - 2019-12-12 13:25:54 --> Router Class Initialized
INFO - 2019-12-12 13:25:54 --> Output Class Initialized
INFO - 2019-12-12 13:25:54 --> Security Class Initialized
DEBUG - 2019-12-12 13:25:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:25:54 --> Input Class Initialized
INFO - 2019-12-12 13:25:54 --> Language Class Initialized
INFO - 2019-12-12 13:25:54 --> Loader Class Initialized
INFO - 2019-12-12 13:25:54 --> Helper loaded: html_helper
INFO - 2019-12-12 13:25:54 --> Helper loaded: url_helper
INFO - 2019-12-12 13:25:54 --> Helper loaded: form_helper
INFO - 2019-12-12 13:25:54 --> Database Driver Class Initialized
INFO - 2019-12-12 13:25:54 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:25:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:25:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:25:54 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:25:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:25:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:25:54 --> Controller Class Initialized
DEBUG - 2019-12-12 13:25:54 --> Create_User constructer got called..
INFO - 2019-12-12 13:25:54 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:25:54 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:25:54 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:25:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:25:54 --> Final output sent to browser
DEBUG - 2019-12-12 13:25:54 --> Total execution time: 0.3470
INFO - 2019-12-12 13:30:55 --> Config Class Initialized
INFO - 2019-12-12 13:30:55 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:30:55 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:30:55 --> Utf8 Class Initialized
INFO - 2019-12-12 13:30:55 --> URI Class Initialized
INFO - 2019-12-12 13:30:55 --> Router Class Initialized
INFO - 2019-12-12 13:30:55 --> Output Class Initialized
INFO - 2019-12-12 13:30:55 --> Security Class Initialized
DEBUG - 2019-12-12 13:30:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:30:55 --> Input Class Initialized
INFO - 2019-12-12 13:30:55 --> Language Class Initialized
INFO - 2019-12-12 13:30:55 --> Loader Class Initialized
INFO - 2019-12-12 13:30:55 --> Helper loaded: html_helper
INFO - 2019-12-12 13:30:55 --> Helper loaded: url_helper
INFO - 2019-12-12 13:30:55 --> Helper loaded: form_helper
INFO - 2019-12-12 13:30:55 --> Database Driver Class Initialized
INFO - 2019-12-12 13:30:55 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:30:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:30:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:30:55 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:30:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:30:55 --> Controller Class Initialized
DEBUG - 2019-12-12 13:30:55 --> Create_User constructer got called..
INFO - 2019-12-12 13:30:55 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:30:55 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:30:55 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:30:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:30:55 --> Final output sent to browser
DEBUG - 2019-12-12 13:30:55 --> Total execution time: 0.2380
INFO - 2019-12-12 13:31:49 --> Config Class Initialized
INFO - 2019-12-12 13:31:49 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:31:49 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:31:49 --> Utf8 Class Initialized
INFO - 2019-12-12 13:31:49 --> URI Class Initialized
INFO - 2019-12-12 13:31:49 --> Router Class Initialized
INFO - 2019-12-12 13:31:49 --> Output Class Initialized
INFO - 2019-12-12 13:31:49 --> Security Class Initialized
DEBUG - 2019-12-12 13:31:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:31:49 --> Input Class Initialized
INFO - 2019-12-12 13:31:49 --> Language Class Initialized
INFO - 2019-12-12 13:31:49 --> Loader Class Initialized
INFO - 2019-12-12 13:31:49 --> Helper loaded: html_helper
INFO - 2019-12-12 13:31:49 --> Helper loaded: url_helper
INFO - 2019-12-12 13:31:49 --> Helper loaded: form_helper
INFO - 2019-12-12 13:31:49 --> Database Driver Class Initialized
INFO - 2019-12-12 13:31:49 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:31:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:31:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:31:49 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:31:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:31:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:31:49 --> Controller Class Initialized
DEBUG - 2019-12-12 13:31:49 --> Create_User constructer got called..
INFO - 2019-12-12 13:31:49 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:31:49 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:31:49 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:31:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:31:49 --> Final output sent to browser
DEBUG - 2019-12-12 13:31:49 --> Total execution time: 0.3010
INFO - 2019-12-12 13:33:36 --> Config Class Initialized
INFO - 2019-12-12 13:33:36 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:33:36 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:33:36 --> Utf8 Class Initialized
INFO - 2019-12-12 13:33:36 --> URI Class Initialized
INFO - 2019-12-12 13:33:36 --> Router Class Initialized
INFO - 2019-12-12 13:33:36 --> Output Class Initialized
INFO - 2019-12-12 13:33:36 --> Security Class Initialized
DEBUG - 2019-12-12 13:33:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:33:36 --> Input Class Initialized
INFO - 2019-12-12 13:33:36 --> Language Class Initialized
INFO - 2019-12-12 13:33:36 --> Loader Class Initialized
INFO - 2019-12-12 13:33:37 --> Helper loaded: html_helper
INFO - 2019-12-12 13:33:37 --> Helper loaded: url_helper
INFO - 2019-12-12 13:33:37 --> Helper loaded: form_helper
INFO - 2019-12-12 13:33:37 --> Database Driver Class Initialized
INFO - 2019-12-12 13:33:37 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:33:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:33:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:33:37 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:33:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:33:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:33:37 --> Controller Class Initialized
DEBUG - 2019-12-12 13:33:37 --> Create_User constructer got called..
INFO - 2019-12-12 13:33:37 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:33:37 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:33:37 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:33:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:33:37 --> Final output sent to browser
DEBUG - 2019-12-12 13:33:37 --> Total execution time: 0.3950
INFO - 2019-12-12 13:37:01 --> Config Class Initialized
INFO - 2019-12-12 13:37:01 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:37:01 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:37:01 --> Utf8 Class Initialized
INFO - 2019-12-12 13:37:01 --> URI Class Initialized
INFO - 2019-12-12 13:37:01 --> Router Class Initialized
INFO - 2019-12-12 13:37:01 --> Output Class Initialized
INFO - 2019-12-12 13:37:01 --> Security Class Initialized
DEBUG - 2019-12-12 13:37:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:37:01 --> Input Class Initialized
INFO - 2019-12-12 13:37:01 --> Language Class Initialized
INFO - 2019-12-12 13:37:01 --> Loader Class Initialized
INFO - 2019-12-12 13:37:01 --> Helper loaded: html_helper
INFO - 2019-12-12 13:37:01 --> Helper loaded: url_helper
INFO - 2019-12-12 13:37:01 --> Helper loaded: form_helper
INFO - 2019-12-12 13:37:01 --> Database Driver Class Initialized
INFO - 2019-12-12 13:37:01 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:37:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:37:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:37:01 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:37:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:37:01 --> Controller Class Initialized
DEBUG - 2019-12-12 13:37:01 --> Create_User constructer got called..
INFO - 2019-12-12 13:37:01 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:37:01 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:37:01 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:37:01 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:37:01 --> Final output sent to browser
DEBUG - 2019-12-12 13:37:01 --> Total execution time: 0.5540
INFO - 2019-12-12 13:37:06 --> Config Class Initialized
INFO - 2019-12-12 13:37:06 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:37:06 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:37:06 --> Utf8 Class Initialized
INFO - 2019-12-12 13:37:06 --> URI Class Initialized
INFO - 2019-12-12 13:37:06 --> Router Class Initialized
INFO - 2019-12-12 13:37:06 --> Output Class Initialized
INFO - 2019-12-12 13:37:06 --> Security Class Initialized
DEBUG - 2019-12-12 13:37:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:37:06 --> Input Class Initialized
INFO - 2019-12-12 13:37:06 --> Language Class Initialized
INFO - 2019-12-12 13:37:06 --> Loader Class Initialized
INFO - 2019-12-12 13:37:06 --> Helper loaded: html_helper
INFO - 2019-12-12 13:37:06 --> Helper loaded: url_helper
INFO - 2019-12-12 13:37:06 --> Helper loaded: form_helper
INFO - 2019-12-12 13:37:06 --> Database Driver Class Initialized
INFO - 2019-12-12 13:37:06 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:37:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:37:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:37:06 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:37:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:37:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:37:06 --> Controller Class Initialized
DEBUG - 2019-12-12 13:37:06 --> loading Configarable_Login model...
INFO - 2019-12-12 13:37:06 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 13:37:06 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 13:37:06 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 13:37:06 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 2
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 13:37:06 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 13:37:06 --> loading view public\Dashboard
INFO - 2019-12-12 13:37:06 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:37:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 13:37:06 --> Final output sent to browser
DEBUG - 2019-12-12 13:37:06 --> Total execution time: 0.4120
INFO - 2019-12-12 13:37:09 --> Config Class Initialized
INFO - 2019-12-12 13:37:09 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:37:09 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:37:09 --> Utf8 Class Initialized
INFO - 2019-12-12 13:37:09 --> URI Class Initialized
INFO - 2019-12-12 13:37:09 --> Router Class Initialized
INFO - 2019-12-12 13:37:09 --> Output Class Initialized
INFO - 2019-12-12 13:37:09 --> Security Class Initialized
DEBUG - 2019-12-12 13:37:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:37:09 --> Input Class Initialized
INFO - 2019-12-12 13:37:09 --> Language Class Initialized
INFO - 2019-12-12 13:37:09 --> Loader Class Initialized
INFO - 2019-12-12 13:37:09 --> Helper loaded: html_helper
INFO - 2019-12-12 13:37:09 --> Helper loaded: url_helper
INFO - 2019-12-12 13:37:09 --> Helper loaded: form_helper
INFO - 2019-12-12 13:37:09 --> Database Driver Class Initialized
INFO - 2019-12-12 13:37:09 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:37:09 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:37:09 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:37:09 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:37:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:37:09 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:37:09 --> Controller Class Initialized
DEBUG - 2019-12-12 13:37:09 --> Create_User constructer got called..
INFO - 2019-12-12 13:37:09 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:37:09 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:37:09 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:37:09 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:37:09 --> Final output sent to browser
DEBUG - 2019-12-12 13:37:09 --> Total execution time: 0.3750
INFO - 2019-12-12 13:38:21 --> Config Class Initialized
INFO - 2019-12-12 13:38:21 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:38:21 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:38:21 --> Utf8 Class Initialized
INFO - 2019-12-12 13:38:21 --> URI Class Initialized
INFO - 2019-12-12 13:38:21 --> Router Class Initialized
INFO - 2019-12-12 13:38:21 --> Output Class Initialized
INFO - 2019-12-12 13:38:21 --> Security Class Initialized
DEBUG - 2019-12-12 13:38:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:38:21 --> Input Class Initialized
INFO - 2019-12-12 13:38:21 --> Language Class Initialized
INFO - 2019-12-12 13:38:21 --> Loader Class Initialized
INFO - 2019-12-12 13:38:21 --> Helper loaded: html_helper
INFO - 2019-12-12 13:38:21 --> Helper loaded: url_helper
INFO - 2019-12-12 13:38:21 --> Helper loaded: form_helper
INFO - 2019-12-12 13:38:21 --> Database Driver Class Initialized
INFO - 2019-12-12 13:38:21 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:38:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:38:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:38:21 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:38:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:38:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:38:21 --> Controller Class Initialized
DEBUG - 2019-12-12 13:38:21 --> Create_User constructer got called..
INFO - 2019-12-12 13:38:21 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:38:21 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:38:21 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:38:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:38:21 --> Final output sent to browser
DEBUG - 2019-12-12 13:38:21 --> Total execution time: 0.4500
INFO - 2019-12-12 13:38:38 --> Config Class Initialized
INFO - 2019-12-12 13:38:38 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:38:38 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:38:38 --> Utf8 Class Initialized
INFO - 2019-12-12 13:38:38 --> URI Class Initialized
INFO - 2019-12-12 13:38:38 --> Router Class Initialized
INFO - 2019-12-12 13:38:38 --> Output Class Initialized
INFO - 2019-12-12 13:38:38 --> Security Class Initialized
DEBUG - 2019-12-12 13:38:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:38:38 --> Input Class Initialized
INFO - 2019-12-12 13:38:39 --> Language Class Initialized
INFO - 2019-12-12 13:38:39 --> Loader Class Initialized
INFO - 2019-12-12 13:38:39 --> Helper loaded: html_helper
INFO - 2019-12-12 13:38:39 --> Helper loaded: url_helper
INFO - 2019-12-12 13:38:39 --> Helper loaded: form_helper
INFO - 2019-12-12 13:38:39 --> Database Driver Class Initialized
INFO - 2019-12-12 13:38:39 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:38:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:38:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:38:39 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:38:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:38:39 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:38:39 --> Controller Class Initialized
DEBUG - 2019-12-12 13:38:39 --> Create_User constructer got called..
INFO - 2019-12-12 13:38:39 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:38:39 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:38:39 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:38:39 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:38:39 --> Final output sent to browser
DEBUG - 2019-12-12 13:38:39 --> Total execution time: 0.5870
INFO - 2019-12-12 13:39:37 --> Config Class Initialized
INFO - 2019-12-12 13:39:37 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:39:37 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:39:37 --> Utf8 Class Initialized
INFO - 2019-12-12 13:39:37 --> URI Class Initialized
INFO - 2019-12-12 13:39:37 --> Router Class Initialized
INFO - 2019-12-12 13:39:37 --> Output Class Initialized
INFO - 2019-12-12 13:39:37 --> Security Class Initialized
DEBUG - 2019-12-12 13:39:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:39:37 --> Input Class Initialized
INFO - 2019-12-12 13:39:37 --> Language Class Initialized
INFO - 2019-12-12 13:39:37 --> Loader Class Initialized
INFO - 2019-12-12 13:39:37 --> Helper loaded: html_helper
INFO - 2019-12-12 13:39:37 --> Helper loaded: url_helper
INFO - 2019-12-12 13:39:37 --> Helper loaded: form_helper
INFO - 2019-12-12 13:39:37 --> Database Driver Class Initialized
INFO - 2019-12-12 13:39:37 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:39:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:39:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:39:37 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:39:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:39:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:39:37 --> Controller Class Initialized
DEBUG - 2019-12-12 13:39:37 --> Create_User constructer got called..
INFO - 2019-12-12 13:39:37 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:39:37 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:39:37 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:39:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:39:37 --> Final output sent to browser
DEBUG - 2019-12-12 13:39:37 --> Total execution time: 0.4140
INFO - 2019-12-12 13:45:06 --> Config Class Initialized
INFO - 2019-12-12 13:45:06 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:45:06 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:45:06 --> Utf8 Class Initialized
INFO - 2019-12-12 13:45:06 --> URI Class Initialized
INFO - 2019-12-12 13:45:06 --> Router Class Initialized
INFO - 2019-12-12 13:45:06 --> Output Class Initialized
INFO - 2019-12-12 13:45:06 --> Security Class Initialized
DEBUG - 2019-12-12 13:45:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:45:06 --> Input Class Initialized
INFO - 2019-12-12 13:45:06 --> Language Class Initialized
INFO - 2019-12-12 13:45:06 --> Loader Class Initialized
INFO - 2019-12-12 13:45:06 --> Helper loaded: html_helper
INFO - 2019-12-12 13:45:06 --> Helper loaded: url_helper
INFO - 2019-12-12 13:45:06 --> Helper loaded: form_helper
INFO - 2019-12-12 13:45:06 --> Database Driver Class Initialized
INFO - 2019-12-12 13:45:07 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:45:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:45:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:45:07 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:45:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:45:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:45:07 --> Controller Class Initialized
DEBUG - 2019-12-12 13:45:07 --> Create_User constructer got called..
INFO - 2019-12-12 13:45:07 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:45:07 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:45:07 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:45:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:45:07 --> Final output sent to browser
DEBUG - 2019-12-12 13:45:07 --> Total execution time: 0.3780
INFO - 2019-12-12 13:45:37 --> Config Class Initialized
INFO - 2019-12-12 13:45:37 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:45:37 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:45:37 --> Utf8 Class Initialized
INFO - 2019-12-12 13:45:37 --> URI Class Initialized
INFO - 2019-12-12 13:45:37 --> Router Class Initialized
INFO - 2019-12-12 13:45:37 --> Output Class Initialized
INFO - 2019-12-12 13:45:37 --> Security Class Initialized
DEBUG - 2019-12-12 13:45:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:45:37 --> Input Class Initialized
INFO - 2019-12-12 13:45:37 --> Language Class Initialized
INFO - 2019-12-12 13:45:37 --> Loader Class Initialized
INFO - 2019-12-12 13:45:37 --> Helper loaded: html_helper
INFO - 2019-12-12 13:45:37 --> Helper loaded: url_helper
INFO - 2019-12-12 13:45:37 --> Helper loaded: form_helper
INFO - 2019-12-12 13:45:37 --> Database Driver Class Initialized
INFO - 2019-12-12 13:45:37 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:45:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:45:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:45:37 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:45:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:45:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:45:37 --> Controller Class Initialized
DEBUG - 2019-12-12 13:45:37 --> Create_User constructer got called..
INFO - 2019-12-12 13:45:37 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:45:37 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:45:37 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:45:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:45:37 --> Final output sent to browser
DEBUG - 2019-12-12 13:45:37 --> Total execution time: 0.4210
INFO - 2019-12-12 13:45:53 --> Config Class Initialized
INFO - 2019-12-12 13:45:53 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:45:53 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:45:53 --> Utf8 Class Initialized
INFO - 2019-12-12 13:45:53 --> URI Class Initialized
INFO - 2019-12-12 13:45:53 --> Router Class Initialized
INFO - 2019-12-12 13:45:53 --> Output Class Initialized
INFO - 2019-12-12 13:45:53 --> Security Class Initialized
DEBUG - 2019-12-12 13:45:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:45:53 --> Input Class Initialized
INFO - 2019-12-12 13:45:53 --> Language Class Initialized
INFO - 2019-12-12 13:45:53 --> Loader Class Initialized
INFO - 2019-12-12 13:45:53 --> Helper loaded: html_helper
INFO - 2019-12-12 13:45:53 --> Helper loaded: url_helper
INFO - 2019-12-12 13:45:53 --> Helper loaded: form_helper
INFO - 2019-12-12 13:45:53 --> Database Driver Class Initialized
INFO - 2019-12-12 13:45:53 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:45:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:45:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:45:53 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:45:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:45:53 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:45:53 --> Controller Class Initialized
DEBUG - 2019-12-12 13:45:53 --> Create_User constructer got called..
INFO - 2019-12-12 13:45:53 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:45:53 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:45:53 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:45:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:45:53 --> Final output sent to browser
DEBUG - 2019-12-12 13:45:53 --> Total execution time: 0.3440
INFO - 2019-12-12 13:46:12 --> Config Class Initialized
INFO - 2019-12-12 13:46:12 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:46:12 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:46:12 --> Utf8 Class Initialized
INFO - 2019-12-12 13:46:12 --> URI Class Initialized
INFO - 2019-12-12 13:46:12 --> Router Class Initialized
INFO - 2019-12-12 13:46:12 --> Output Class Initialized
INFO - 2019-12-12 13:46:12 --> Security Class Initialized
DEBUG - 2019-12-12 13:46:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:46:12 --> Input Class Initialized
INFO - 2019-12-12 13:46:12 --> Language Class Initialized
INFO - 2019-12-12 13:46:12 --> Loader Class Initialized
INFO - 2019-12-12 13:46:12 --> Helper loaded: html_helper
INFO - 2019-12-12 13:46:12 --> Helper loaded: url_helper
INFO - 2019-12-12 13:46:12 --> Helper loaded: form_helper
INFO - 2019-12-12 13:46:12 --> Database Driver Class Initialized
INFO - 2019-12-12 13:46:12 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:46:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:46:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:46:12 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:46:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:46:13 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:46:13 --> Controller Class Initialized
DEBUG - 2019-12-12 13:46:13 --> Create_User constructer got called..
INFO - 2019-12-12 13:46:13 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:46:13 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:46:13 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:46:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:46:13 --> Final output sent to browser
DEBUG - 2019-12-12 13:46:13 --> Total execution time: 0.5230
INFO - 2019-12-12 13:46:48 --> Config Class Initialized
INFO - 2019-12-12 13:46:48 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:46:48 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:46:48 --> Utf8 Class Initialized
INFO - 2019-12-12 13:46:48 --> URI Class Initialized
INFO - 2019-12-12 13:46:48 --> Router Class Initialized
INFO - 2019-12-12 13:46:48 --> Output Class Initialized
INFO - 2019-12-12 13:46:48 --> Security Class Initialized
DEBUG - 2019-12-12 13:46:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:46:48 --> Input Class Initialized
INFO - 2019-12-12 13:46:48 --> Language Class Initialized
INFO - 2019-12-12 13:46:48 --> Loader Class Initialized
INFO - 2019-12-12 13:46:48 --> Helper loaded: html_helper
INFO - 2019-12-12 13:46:48 --> Helper loaded: url_helper
INFO - 2019-12-12 13:46:48 --> Helper loaded: form_helper
INFO - 2019-12-12 13:46:48 --> Database Driver Class Initialized
INFO - 2019-12-12 13:46:48 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:46:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:46:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:46:48 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:46:48 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:46:48 --> Controller Class Initialized
INFO - 2019-12-12 13:46:48 --> Helper loaded: cookie_helper
INFO - 2019-12-12 13:46:48 --> logout() called
DEBUG - 2019-12-12 13:46:48 --> loading model Active_Session
INFO - 2019-12-12 13:46:48 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 13:46:48 --> calling remove_active_session()
DEBUG - 2019-12-12 13:46:48 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-12 13:46:48 --> loading view welcome controller ... 
INFO - 2019-12-12 13:46:48 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 13:46:48 --> Final output sent to browser
DEBUG - 2019-12-12 13:46:48 --> Total execution time: 0.3990
INFO - 2019-12-12 13:46:52 --> Config Class Initialized
INFO - 2019-12-12 13:46:52 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:46:52 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:46:52 --> Utf8 Class Initialized
INFO - 2019-12-12 13:46:52 --> URI Class Initialized
INFO - 2019-12-12 13:46:52 --> Router Class Initialized
INFO - 2019-12-12 13:46:52 --> Output Class Initialized
INFO - 2019-12-12 13:46:52 --> Security Class Initialized
DEBUG - 2019-12-12 13:46:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:46:52 --> Input Class Initialized
INFO - 2019-12-12 13:46:52 --> Language Class Initialized
INFO - 2019-12-12 13:46:52 --> Loader Class Initialized
INFO - 2019-12-12 13:46:52 --> Helper loaded: html_helper
INFO - 2019-12-12 13:46:52 --> Helper loaded: url_helper
INFO - 2019-12-12 13:46:52 --> Helper loaded: form_helper
INFO - 2019-12-12 13:46:52 --> Database Driver Class Initialized
INFO - 2019-12-12 13:46:52 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:46:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:46:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:46:52 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:46:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:46:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:46:52 --> Controller Class Initialized
INFO - 2019-12-12 13:46:52 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 13:46:52 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:46:52 --> getAuth method got called...
DEBUG - 2019-12-12 13:46:52 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 13:46:52 --> Unreachable block here....
DEBUG - 2019-12-12 13:46:52 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 13:46:52 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 13:46:52 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 13:46:53 -->  ldap login success
INFO - 2019-12-12 13:46:53 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 13:46:53 --> Role Retrive from DB
DEBUG - 2019-12-12 13:46:53 --> loading model Active_Session
INFO - 2019-12-12 13:46:53 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 13:46:53 --> calling insert_active_session()
DEBUG - 2019-12-12 13:46:53 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 13:46:53 --> insert success
DEBUG - 2019-12-12 13:46:53 --> loading Configarable_Login model...
INFO - 2019-12-12 13:46:53 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 13:46:53 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 13:46:53 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 13:46:53 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 2
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 13:46:53 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 13:46:53 --> loading view public\Dashboard
INFO - 2019-12-12 13:46:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 13:46:53 --> Final output sent to browser
DEBUG - 2019-12-12 13:46:53 --> Total execution time: 0.8790
INFO - 2019-12-12 13:46:57 --> Config Class Initialized
INFO - 2019-12-12 13:46:57 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:46:57 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:46:57 --> Utf8 Class Initialized
INFO - 2019-12-12 13:46:57 --> URI Class Initialized
INFO - 2019-12-12 13:46:57 --> Router Class Initialized
INFO - 2019-12-12 13:46:57 --> Output Class Initialized
INFO - 2019-12-12 13:46:57 --> Security Class Initialized
DEBUG - 2019-12-12 13:46:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:46:57 --> Input Class Initialized
INFO - 2019-12-12 13:46:57 --> Language Class Initialized
INFO - 2019-12-12 13:46:57 --> Loader Class Initialized
INFO - 2019-12-12 13:46:57 --> Helper loaded: html_helper
INFO - 2019-12-12 13:46:57 --> Helper loaded: url_helper
INFO - 2019-12-12 13:46:57 --> Helper loaded: form_helper
INFO - 2019-12-12 13:46:57 --> Database Driver Class Initialized
INFO - 2019-12-12 13:46:57 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:46:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:46:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:46:57 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:46:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:46:57 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:46:57 --> Controller Class Initialized
DEBUG - 2019-12-12 13:46:57 --> Create_User constructer got called..
INFO - 2019-12-12 13:46:57 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:46:57 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:46:57 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:46:57 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:46:57 --> Final output sent to browser
DEBUG - 2019-12-12 13:46:57 --> Total execution time: 0.3241
INFO - 2019-12-12 13:51:04 --> Config Class Initialized
INFO - 2019-12-12 13:51:04 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:51:04 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:51:04 --> Utf8 Class Initialized
INFO - 2019-12-12 13:51:04 --> URI Class Initialized
INFO - 2019-12-12 13:51:04 --> Router Class Initialized
INFO - 2019-12-12 13:51:04 --> Output Class Initialized
INFO - 2019-12-12 13:51:04 --> Security Class Initialized
DEBUG - 2019-12-12 13:51:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:51:04 --> Input Class Initialized
INFO - 2019-12-12 13:51:04 --> Language Class Initialized
INFO - 2019-12-12 13:51:04 --> Loader Class Initialized
INFO - 2019-12-12 13:51:04 --> Helper loaded: html_helper
INFO - 2019-12-12 13:51:04 --> Helper loaded: url_helper
INFO - 2019-12-12 13:51:04 --> Helper loaded: form_helper
INFO - 2019-12-12 13:51:04 --> Database Driver Class Initialized
INFO - 2019-12-12 13:51:04 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:51:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:51:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:51:05 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:51:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:51:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:51:05 --> Controller Class Initialized
DEBUG - 2019-12-12 13:51:05 --> Create_User constructer got called..
INFO - 2019-12-12 13:51:05 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:51:05 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:51:05 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:51:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:51:05 --> Final output sent to browser
DEBUG - 2019-12-12 13:51:05 --> Total execution time: 0.4111
INFO - 2019-12-12 13:52:37 --> Config Class Initialized
INFO - 2019-12-12 13:52:37 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:52:37 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:52:37 --> Utf8 Class Initialized
INFO - 2019-12-12 13:52:37 --> URI Class Initialized
INFO - 2019-12-12 13:52:37 --> Router Class Initialized
INFO - 2019-12-12 13:52:37 --> Output Class Initialized
INFO - 2019-12-12 13:52:37 --> Security Class Initialized
DEBUG - 2019-12-12 13:52:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:52:37 --> Input Class Initialized
INFO - 2019-12-12 13:52:37 --> Language Class Initialized
INFO - 2019-12-12 13:52:37 --> Loader Class Initialized
INFO - 2019-12-12 13:52:37 --> Helper loaded: html_helper
INFO - 2019-12-12 13:52:37 --> Helper loaded: url_helper
INFO - 2019-12-12 13:52:37 --> Helper loaded: form_helper
INFO - 2019-12-12 13:52:37 --> Database Driver Class Initialized
INFO - 2019-12-12 13:52:37 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:52:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:52:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:52:37 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:52:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:52:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:52:37 --> Controller Class Initialized
DEBUG - 2019-12-12 13:52:37 --> Create_User constructer got called..
INFO - 2019-12-12 13:52:37 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:52:37 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:52:37 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:52:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:52:37 --> Final output sent to browser
DEBUG - 2019-12-12 13:52:37 --> Total execution time: 0.3930
INFO - 2019-12-12 13:53:00 --> Config Class Initialized
INFO - 2019-12-12 13:53:00 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:53:00 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:53:00 --> Utf8 Class Initialized
INFO - 2019-12-12 13:53:00 --> URI Class Initialized
INFO - 2019-12-12 13:53:00 --> Router Class Initialized
INFO - 2019-12-12 13:53:00 --> Output Class Initialized
INFO - 2019-12-12 13:53:00 --> Security Class Initialized
DEBUG - 2019-12-12 13:53:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:53:00 --> Input Class Initialized
INFO - 2019-12-12 13:53:00 --> Language Class Initialized
INFO - 2019-12-12 13:53:00 --> Loader Class Initialized
INFO - 2019-12-12 13:53:01 --> Helper loaded: html_helper
INFO - 2019-12-12 13:53:01 --> Helper loaded: url_helper
INFO - 2019-12-12 13:53:01 --> Helper loaded: form_helper
INFO - 2019-12-12 13:53:01 --> Database Driver Class Initialized
INFO - 2019-12-12 13:53:01 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:53:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:53:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:53:01 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:53:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:53:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:53:01 --> Controller Class Initialized
DEBUG - 2019-12-12 13:53:01 --> Create_User constructer got called..
INFO - 2019-12-12 13:53:01 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:53:01 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:53:01 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:53:01 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:53:01 --> Final output sent to browser
DEBUG - 2019-12-12 13:53:01 --> Total execution time: 0.3880
INFO - 2019-12-12 13:54:26 --> Config Class Initialized
INFO - 2019-12-12 13:54:26 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:54:26 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:54:26 --> Utf8 Class Initialized
INFO - 2019-12-12 13:54:26 --> URI Class Initialized
INFO - 2019-12-12 13:54:26 --> Router Class Initialized
INFO - 2019-12-12 13:54:26 --> Output Class Initialized
INFO - 2019-12-12 13:54:26 --> Security Class Initialized
DEBUG - 2019-12-12 13:54:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:54:26 --> Input Class Initialized
INFO - 2019-12-12 13:54:26 --> Language Class Initialized
INFO - 2019-12-12 13:54:26 --> Loader Class Initialized
INFO - 2019-12-12 13:54:26 --> Helper loaded: html_helper
INFO - 2019-12-12 13:54:26 --> Helper loaded: url_helper
INFO - 2019-12-12 13:54:26 --> Helper loaded: form_helper
INFO - 2019-12-12 13:54:27 --> Database Driver Class Initialized
INFO - 2019-12-12 13:54:27 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:54:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:54:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:54:27 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:54:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:54:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:54:27 --> Controller Class Initialized
DEBUG - 2019-12-12 13:54:27 --> Create_User constructer got called..
INFO - 2019-12-12 13:54:27 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:54:27 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:54:27 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:54:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:54:27 --> Final output sent to browser
DEBUG - 2019-12-12 13:54:27 --> Total execution time: 0.4910
INFO - 2019-12-12 13:55:02 --> Config Class Initialized
INFO - 2019-12-12 13:55:02 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:55:02 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:55:02 --> Utf8 Class Initialized
INFO - 2019-12-12 13:55:02 --> URI Class Initialized
INFO - 2019-12-12 13:55:02 --> Router Class Initialized
INFO - 2019-12-12 13:55:02 --> Output Class Initialized
INFO - 2019-12-12 13:55:02 --> Security Class Initialized
DEBUG - 2019-12-12 13:55:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:55:02 --> Input Class Initialized
INFO - 2019-12-12 13:55:02 --> Language Class Initialized
INFO - 2019-12-12 13:55:02 --> Loader Class Initialized
INFO - 2019-12-12 13:55:02 --> Helper loaded: html_helper
INFO - 2019-12-12 13:55:02 --> Helper loaded: url_helper
INFO - 2019-12-12 13:55:02 --> Helper loaded: form_helper
INFO - 2019-12-12 13:55:02 --> Database Driver Class Initialized
INFO - 2019-12-12 13:55:02 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:55:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:55:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:55:02 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:55:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:55:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:55:02 --> Controller Class Initialized
DEBUG - 2019-12-12 13:55:02 --> Create_User constructer got called..
INFO - 2019-12-12 13:55:02 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:55:02 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:55:02 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:55:02 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:55:02 --> Final output sent to browser
DEBUG - 2019-12-12 13:55:02 --> Total execution time: 0.5521
INFO - 2019-12-12 13:56:24 --> Config Class Initialized
INFO - 2019-12-12 13:56:24 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:56:24 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:56:24 --> Utf8 Class Initialized
INFO - 2019-12-12 13:56:24 --> URI Class Initialized
INFO - 2019-12-12 13:56:24 --> Router Class Initialized
INFO - 2019-12-12 13:56:24 --> Output Class Initialized
INFO - 2019-12-12 13:56:24 --> Security Class Initialized
DEBUG - 2019-12-12 13:56:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:56:24 --> Input Class Initialized
INFO - 2019-12-12 13:56:24 --> Language Class Initialized
INFO - 2019-12-12 13:56:24 --> Loader Class Initialized
INFO - 2019-12-12 13:56:24 --> Helper loaded: html_helper
INFO - 2019-12-12 13:56:24 --> Helper loaded: url_helper
INFO - 2019-12-12 13:56:24 --> Helper loaded: form_helper
INFO - 2019-12-12 13:56:24 --> Database Driver Class Initialized
INFO - 2019-12-12 13:56:24 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:56:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:56:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:56:24 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:56:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:56:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:56:24 --> Controller Class Initialized
DEBUG - 2019-12-12 13:56:24 --> Create_User constructer got called..
INFO - 2019-12-12 13:56:24 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:56:24 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:56:24 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:56:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:56:24 --> Final output sent to browser
DEBUG - 2019-12-12 13:56:24 --> Total execution time: 0.3460
INFO - 2019-12-12 13:56:47 --> Config Class Initialized
INFO - 2019-12-12 13:56:47 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:56:47 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:56:47 --> Utf8 Class Initialized
INFO - 2019-12-12 13:56:47 --> URI Class Initialized
INFO - 2019-12-12 13:56:47 --> Router Class Initialized
INFO - 2019-12-12 13:56:47 --> Output Class Initialized
INFO - 2019-12-12 13:56:47 --> Security Class Initialized
DEBUG - 2019-12-12 13:56:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:56:47 --> Input Class Initialized
INFO - 2019-12-12 13:56:47 --> Language Class Initialized
INFO - 2019-12-12 13:56:47 --> Loader Class Initialized
INFO - 2019-12-12 13:56:47 --> Helper loaded: html_helper
INFO - 2019-12-12 13:56:47 --> Helper loaded: url_helper
INFO - 2019-12-12 13:56:47 --> Helper loaded: form_helper
INFO - 2019-12-12 13:56:47 --> Database Driver Class Initialized
INFO - 2019-12-12 13:56:47 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:56:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:56:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:56:47 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:56:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:56:47 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:56:47 --> Controller Class Initialized
DEBUG - 2019-12-12 13:56:47 --> Create_User constructer got called..
INFO - 2019-12-12 13:56:47 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:56:47 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:56:47 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:56:47 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:56:47 --> Final output sent to browser
DEBUG - 2019-12-12 13:56:47 --> Total execution time: 0.3100
INFO - 2019-12-12 13:57:45 --> Config Class Initialized
INFO - 2019-12-12 13:57:45 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:57:45 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:57:45 --> Utf8 Class Initialized
INFO - 2019-12-12 13:57:45 --> URI Class Initialized
INFO - 2019-12-12 13:57:45 --> Router Class Initialized
INFO - 2019-12-12 13:57:45 --> Output Class Initialized
INFO - 2019-12-12 13:57:45 --> Security Class Initialized
DEBUG - 2019-12-12 13:57:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:57:45 --> Input Class Initialized
INFO - 2019-12-12 13:57:45 --> Language Class Initialized
INFO - 2019-12-12 13:57:45 --> Loader Class Initialized
INFO - 2019-12-12 13:57:45 --> Helper loaded: html_helper
INFO - 2019-12-12 13:57:45 --> Helper loaded: url_helper
INFO - 2019-12-12 13:57:45 --> Helper loaded: form_helper
INFO - 2019-12-12 13:57:45 --> Database Driver Class Initialized
INFO - 2019-12-12 13:57:45 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:57:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:57:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:57:45 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:57:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:57:45 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:57:45 --> Controller Class Initialized
DEBUG - 2019-12-12 13:57:45 --> Create_User constructer got called..
INFO - 2019-12-12 13:57:45 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:57:45 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:57:45 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:57:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:57:45 --> Final output sent to browser
DEBUG - 2019-12-12 13:57:45 --> Total execution time: 0.3390
INFO - 2019-12-12 13:57:50 --> Config Class Initialized
INFO - 2019-12-12 13:57:50 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:57:50 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:57:50 --> Utf8 Class Initialized
INFO - 2019-12-12 13:57:50 --> URI Class Initialized
INFO - 2019-12-12 13:57:50 --> Router Class Initialized
INFO - 2019-12-12 13:57:50 --> Output Class Initialized
INFO - 2019-12-12 13:57:51 --> Security Class Initialized
DEBUG - 2019-12-12 13:57:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:57:51 --> Input Class Initialized
INFO - 2019-12-12 13:57:51 --> Language Class Initialized
INFO - 2019-12-12 13:57:51 --> Loader Class Initialized
INFO - 2019-12-12 13:57:51 --> Helper loaded: html_helper
INFO - 2019-12-12 13:57:51 --> Helper loaded: url_helper
INFO - 2019-12-12 13:57:51 --> Helper loaded: form_helper
INFO - 2019-12-12 13:57:51 --> Database Driver Class Initialized
INFO - 2019-12-12 13:57:51 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:57:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:57:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:57:51 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:57:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:57:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:57:51 --> Controller Class Initialized
DEBUG - 2019-12-12 13:57:51 --> loading Configarable_Login model...
INFO - 2019-12-12 13:57:51 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 13:57:51 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 13:57:51 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 13:57:51 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 2
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 13:57:51 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 13:57:51 --> loading view public\Dashboard
INFO - 2019-12-12 13:57:51 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:57:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 13:57:51 --> Final output sent to browser
DEBUG - 2019-12-12 13:57:51 --> Total execution time: 0.4220
INFO - 2019-12-12 13:58:00 --> Config Class Initialized
INFO - 2019-12-12 13:58:00 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:58:00 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:58:00 --> Utf8 Class Initialized
INFO - 2019-12-12 13:58:00 --> URI Class Initialized
INFO - 2019-12-12 13:58:00 --> Router Class Initialized
INFO - 2019-12-12 13:58:00 --> Output Class Initialized
INFO - 2019-12-12 13:58:00 --> Security Class Initialized
DEBUG - 2019-12-12 13:58:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:58:00 --> Input Class Initialized
INFO - 2019-12-12 13:58:00 --> Language Class Initialized
ERROR - 2019-12-12 13:58:00 --> 404 Page Not Found: user/User_Right/index
INFO - 2019-12-12 13:58:01 --> Config Class Initialized
INFO - 2019-12-12 13:58:01 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:58:02 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:58:02 --> Utf8 Class Initialized
INFO - 2019-12-12 13:58:02 --> URI Class Initialized
INFO - 2019-12-12 13:58:02 --> Router Class Initialized
INFO - 2019-12-12 13:58:02 --> Output Class Initialized
INFO - 2019-12-12 13:58:02 --> Security Class Initialized
DEBUG - 2019-12-12 13:58:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:58:02 --> Input Class Initialized
INFO - 2019-12-12 13:58:02 --> Language Class Initialized
INFO - 2019-12-12 13:58:02 --> Loader Class Initialized
INFO - 2019-12-12 13:58:02 --> Helper loaded: html_helper
INFO - 2019-12-12 13:58:02 --> Helper loaded: url_helper
INFO - 2019-12-12 13:58:02 --> Helper loaded: form_helper
INFO - 2019-12-12 13:58:02 --> Database Driver Class Initialized
INFO - 2019-12-12 13:58:02 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:58:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:58:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:58:02 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:58:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:58:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:58:02 --> Controller Class Initialized
DEBUG - 2019-12-12 13:58:02 --> loading Configarable_Login model...
INFO - 2019-12-12 13:58:02 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 13:58:02 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 13:58:02 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 13:58:02 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => user/Dashboard
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 2
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 13:58:02 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 13:58:02 --> loading view public\Dashboard
INFO - 2019-12-12 13:58:02 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:58:02 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 13:58:02 --> Final output sent to browser
DEBUG - 2019-12-12 13:58:02 --> Total execution time: 0.5741
INFO - 2019-12-12 13:58:26 --> Config Class Initialized
INFO - 2019-12-12 13:58:26 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:58:26 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:58:26 --> Utf8 Class Initialized
INFO - 2019-12-12 13:58:26 --> URI Class Initialized
INFO - 2019-12-12 13:58:26 --> Router Class Initialized
INFO - 2019-12-12 13:58:26 --> Output Class Initialized
INFO - 2019-12-12 13:58:26 --> Security Class Initialized
DEBUG - 2019-12-12 13:58:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:58:26 --> Input Class Initialized
INFO - 2019-12-12 13:58:27 --> Language Class Initialized
INFO - 2019-12-12 13:58:27 --> Loader Class Initialized
INFO - 2019-12-12 13:58:27 --> Helper loaded: html_helper
INFO - 2019-12-12 13:58:27 --> Helper loaded: url_helper
INFO - 2019-12-12 13:58:27 --> Helper loaded: form_helper
INFO - 2019-12-12 13:58:27 --> Database Driver Class Initialized
INFO - 2019-12-12 13:58:27 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:58:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:58:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:58:27 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:58:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:58:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:58:27 --> Controller Class Initialized
DEBUG - 2019-12-12 13:58:27 --> Create_User constructer got called..
INFO - 2019-12-12 13:58:27 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:58:27 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:58:27 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:58:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:58:27 --> Final output sent to browser
DEBUG - 2019-12-12 13:58:27 --> Total execution time: 0.3990
INFO - 2019-12-12 13:58:30 --> Config Class Initialized
INFO - 2019-12-12 13:58:30 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:58:30 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:58:30 --> Utf8 Class Initialized
INFO - 2019-12-12 13:58:30 --> URI Class Initialized
INFO - 2019-12-12 13:58:30 --> Router Class Initialized
INFO - 2019-12-12 13:58:30 --> Output Class Initialized
INFO - 2019-12-12 13:58:30 --> Security Class Initialized
DEBUG - 2019-12-12 13:58:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:58:30 --> Input Class Initialized
INFO - 2019-12-12 13:58:30 --> Language Class Initialized
ERROR - 2019-12-12 13:58:30 --> 404 Page Not Found: user/User_Right/index
INFO - 2019-12-12 13:58:32 --> Config Class Initialized
INFO - 2019-12-12 13:58:32 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:58:32 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:58:32 --> Utf8 Class Initialized
INFO - 2019-12-12 13:58:32 --> URI Class Initialized
INFO - 2019-12-12 13:58:32 --> Router Class Initialized
INFO - 2019-12-12 13:58:32 --> Output Class Initialized
INFO - 2019-12-12 13:58:32 --> Security Class Initialized
DEBUG - 2019-12-12 13:58:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:58:32 --> Input Class Initialized
INFO - 2019-12-12 13:58:32 --> Language Class Initialized
INFO - 2019-12-12 13:58:32 --> Loader Class Initialized
INFO - 2019-12-12 13:58:32 --> Helper loaded: html_helper
INFO - 2019-12-12 13:58:32 --> Helper loaded: url_helper
INFO - 2019-12-12 13:58:32 --> Helper loaded: form_helper
INFO - 2019-12-12 13:58:32 --> Database Driver Class Initialized
INFO - 2019-12-12 13:58:32 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:58:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:58:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:58:32 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:58:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:58:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:58:32 --> Controller Class Initialized
DEBUG - 2019-12-12 13:58:32 --> Create_User constructer got called..
INFO - 2019-12-12 13:58:32 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:58:32 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:58:32 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:58:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:58:32 --> Final output sent to browser
DEBUG - 2019-12-12 13:58:32 --> Total execution time: 0.3780
INFO - 2019-12-12 13:58:37 --> Config Class Initialized
INFO - 2019-12-12 13:58:37 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:58:37 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:58:37 --> Utf8 Class Initialized
INFO - 2019-12-12 13:58:37 --> URI Class Initialized
INFO - 2019-12-12 13:58:37 --> Router Class Initialized
INFO - 2019-12-12 13:58:37 --> Output Class Initialized
INFO - 2019-12-12 13:58:37 --> Security Class Initialized
DEBUG - 2019-12-12 13:58:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:58:37 --> Input Class Initialized
INFO - 2019-12-12 13:58:37 --> Language Class Initialized
INFO - 2019-12-12 13:58:37 --> Loader Class Initialized
INFO - 2019-12-12 13:58:37 --> Helper loaded: html_helper
INFO - 2019-12-12 13:58:37 --> Helper loaded: url_helper
INFO - 2019-12-12 13:58:37 --> Helper loaded: form_helper
INFO - 2019-12-12 13:58:37 --> Database Driver Class Initialized
INFO - 2019-12-12 13:58:37 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:58:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:58:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:58:37 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:58:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:58:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:58:37 --> Controller Class Initialized
DEBUG - 2019-12-12 13:58:37 --> Create_User constructer got called..
DEBUG - 2019-12-12 13:58:37 --> loading configurable menu with result=
INFO - 2019-12-12 13:58:37 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-12 13:58:37 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-12 13:58:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-12 13:58:37 --> Final output sent to browser
DEBUG - 2019-12-12 13:58:37 --> Total execution time: 0.4150
INFO - 2019-12-12 13:58:43 --> Config Class Initialized
INFO - 2019-12-12 13:58:43 --> Hooks Class Initialized
DEBUG - 2019-12-12 13:58:43 --> UTF-8 Support Enabled
INFO - 2019-12-12 13:58:43 --> Utf8 Class Initialized
INFO - 2019-12-12 13:58:43 --> URI Class Initialized
INFO - 2019-12-12 13:58:43 --> Router Class Initialized
INFO - 2019-12-12 13:58:43 --> Output Class Initialized
INFO - 2019-12-12 13:58:43 --> Security Class Initialized
DEBUG - 2019-12-12 13:58:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 13:58:43 --> Input Class Initialized
INFO - 2019-12-12 13:58:43 --> Language Class Initialized
INFO - 2019-12-12 13:58:43 --> Loader Class Initialized
INFO - 2019-12-12 13:58:43 --> Helper loaded: html_helper
INFO - 2019-12-12 13:58:43 --> Helper loaded: url_helper
INFO - 2019-12-12 13:58:43 --> Helper loaded: form_helper
INFO - 2019-12-12 13:58:43 --> Database Driver Class Initialized
INFO - 2019-12-12 13:58:43 --> Form Validation Class Initialized
DEBUG - 2019-12-12 13:58:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 13:58:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 13:58:43 --> Encryption Class Initialized
DEBUG - 2019-12-12 13:58:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 13:58:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 13:58:43 --> Controller Class Initialized
DEBUG - 2019-12-12 13:58:43 --> Create_User constructer got called..
INFO - 2019-12-12 13:58:43 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 13:58:43 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 13:58:43 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 13:58:43 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 13:58:43 --> Final output sent to browser
DEBUG - 2019-12-12 13:58:43 --> Total execution time: 0.3510
INFO - 2019-12-12 14:00:17 --> Config Class Initialized
INFO - 2019-12-12 14:00:17 --> Hooks Class Initialized
DEBUG - 2019-12-12 14:00:17 --> UTF-8 Support Enabled
INFO - 2019-12-12 14:00:17 --> Utf8 Class Initialized
INFO - 2019-12-12 14:00:17 --> URI Class Initialized
INFO - 2019-12-12 14:00:17 --> Router Class Initialized
INFO - 2019-12-12 14:00:17 --> Output Class Initialized
INFO - 2019-12-12 14:00:17 --> Security Class Initialized
DEBUG - 2019-12-12 14:00:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 14:00:17 --> Input Class Initialized
INFO - 2019-12-12 14:00:17 --> Language Class Initialized
INFO - 2019-12-12 14:00:17 --> Loader Class Initialized
INFO - 2019-12-12 14:00:17 --> Helper loaded: html_helper
INFO - 2019-12-12 14:00:17 --> Helper loaded: url_helper
INFO - 2019-12-12 14:00:17 --> Helper loaded: form_helper
INFO - 2019-12-12 14:00:17 --> Database Driver Class Initialized
INFO - 2019-12-12 14:00:17 --> Form Validation Class Initialized
DEBUG - 2019-12-12 14:00:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 14:00:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 14:00:17 --> Encryption Class Initialized
DEBUG - 2019-12-12 14:00:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 14:00:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 14:00:17 --> Controller Class Initialized
DEBUG - 2019-12-12 14:00:17 --> Create_User constructer got called..
INFO - 2019-12-12 14:00:17 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 14:00:17 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 14:00:17 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 14:00:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 14:00:17 --> Final output sent to browser
DEBUG - 2019-12-12 14:00:17 --> Total execution time: 0.4550
INFO - 2019-12-12 14:00:19 --> Config Class Initialized
INFO - 2019-12-12 14:00:19 --> Hooks Class Initialized
DEBUG - 2019-12-12 14:00:19 --> UTF-8 Support Enabled
INFO - 2019-12-12 14:00:19 --> Utf8 Class Initialized
INFO - 2019-12-12 14:00:19 --> URI Class Initialized
INFO - 2019-12-12 14:00:19 --> Router Class Initialized
INFO - 2019-12-12 14:00:19 --> Output Class Initialized
INFO - 2019-12-12 14:00:19 --> Security Class Initialized
DEBUG - 2019-12-12 14:00:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 14:00:19 --> Input Class Initialized
INFO - 2019-12-12 14:00:19 --> Language Class Initialized
ERROR - 2019-12-12 14:00:19 --> 404 Page Not Found: user/Dashboard/index
INFO - 2019-12-12 14:00:21 --> Config Class Initialized
INFO - 2019-12-12 14:00:21 --> Hooks Class Initialized
DEBUG - 2019-12-12 14:00:21 --> UTF-8 Support Enabled
INFO - 2019-12-12 14:00:21 --> Utf8 Class Initialized
INFO - 2019-12-12 14:00:21 --> URI Class Initialized
INFO - 2019-12-12 14:00:21 --> Router Class Initialized
INFO - 2019-12-12 14:00:21 --> Output Class Initialized
INFO - 2019-12-12 14:00:21 --> Security Class Initialized
DEBUG - 2019-12-12 14:00:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 14:00:21 --> Input Class Initialized
INFO - 2019-12-12 14:00:21 --> Language Class Initialized
INFO - 2019-12-12 14:00:21 --> Loader Class Initialized
INFO - 2019-12-12 14:00:21 --> Helper loaded: html_helper
INFO - 2019-12-12 14:00:21 --> Helper loaded: url_helper
INFO - 2019-12-12 14:00:21 --> Helper loaded: form_helper
INFO - 2019-12-12 14:00:21 --> Database Driver Class Initialized
INFO - 2019-12-12 14:00:21 --> Form Validation Class Initialized
DEBUG - 2019-12-12 14:00:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 14:00:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 14:00:21 --> Encryption Class Initialized
DEBUG - 2019-12-12 14:00:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 14:00:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 14:00:21 --> Controller Class Initialized
DEBUG - 2019-12-12 14:00:21 --> Create_User constructer got called..
INFO - 2019-12-12 14:00:21 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 14:00:21 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 14:00:21 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 14:00:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 14:00:21 --> Final output sent to browser
DEBUG - 2019-12-12 14:00:21 --> Total execution time: 0.3880
INFO - 2019-12-12 14:00:23 --> Config Class Initialized
INFO - 2019-12-12 14:00:23 --> Hooks Class Initialized
DEBUG - 2019-12-12 14:00:23 --> UTF-8 Support Enabled
INFO - 2019-12-12 14:00:23 --> Utf8 Class Initialized
INFO - 2019-12-12 14:00:23 --> URI Class Initialized
INFO - 2019-12-12 14:00:23 --> Router Class Initialized
INFO - 2019-12-12 14:00:23 --> Output Class Initialized
INFO - 2019-12-12 14:00:23 --> Security Class Initialized
DEBUG - 2019-12-12 14:00:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 14:00:23 --> Input Class Initialized
INFO - 2019-12-12 14:00:23 --> Language Class Initialized
INFO - 2019-12-12 14:00:23 --> Loader Class Initialized
INFO - 2019-12-12 14:00:23 --> Helper loaded: html_helper
INFO - 2019-12-12 14:00:24 --> Helper loaded: url_helper
INFO - 2019-12-12 14:00:24 --> Helper loaded: form_helper
INFO - 2019-12-12 14:00:24 --> Database Driver Class Initialized
INFO - 2019-12-12 14:00:24 --> Form Validation Class Initialized
DEBUG - 2019-12-12 14:00:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 14:00:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 14:00:24 --> Encryption Class Initialized
DEBUG - 2019-12-12 14:00:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 14:00:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 14:00:24 --> Controller Class Initialized
INFO - 2019-12-12 14:00:24 --> Helper loaded: cookie_helper
INFO - 2019-12-12 14:00:24 --> logout() called
DEBUG - 2019-12-12 14:00:24 --> loading model Active_Session
INFO - 2019-12-12 14:00:24 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 14:00:24 --> calling remove_active_session()
DEBUG - 2019-12-12 14:00:24 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-12 14:00:24 --> loading view welcome controller ... 
INFO - 2019-12-12 14:00:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 14:00:24 --> Final output sent to browser
DEBUG - 2019-12-12 14:00:24 --> Total execution time: 0.4170
INFO - 2019-12-12 14:00:27 --> Config Class Initialized
INFO - 2019-12-12 14:00:27 --> Hooks Class Initialized
DEBUG - 2019-12-12 14:00:27 --> UTF-8 Support Enabled
INFO - 2019-12-12 14:00:27 --> Utf8 Class Initialized
INFO - 2019-12-12 14:00:27 --> URI Class Initialized
INFO - 2019-12-12 14:00:27 --> Router Class Initialized
INFO - 2019-12-12 14:00:27 --> Output Class Initialized
INFO - 2019-12-12 14:00:27 --> Security Class Initialized
DEBUG - 2019-12-12 14:00:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 14:00:27 --> Input Class Initialized
INFO - 2019-12-12 14:00:27 --> Language Class Initialized
INFO - 2019-12-12 14:00:27 --> Loader Class Initialized
INFO - 2019-12-12 14:00:27 --> Helper loaded: html_helper
INFO - 2019-12-12 14:00:27 --> Helper loaded: url_helper
INFO - 2019-12-12 14:00:27 --> Helper loaded: form_helper
INFO - 2019-12-12 14:00:27 --> Database Driver Class Initialized
INFO - 2019-12-12 14:00:27 --> Form Validation Class Initialized
DEBUG - 2019-12-12 14:00:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 14:00:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 14:00:27 --> Encryption Class Initialized
DEBUG - 2019-12-12 14:00:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 14:00:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 14:00:27 --> Controller Class Initialized
INFO - 2019-12-12 14:00:27 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-12 14:00:27 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 14:00:27 --> getAuth method got called...
DEBUG - 2019-12-12 14:00:27 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-12 14:00:27 --> Unreachable block here....
DEBUG - 2019-12-12 14:00:27 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-12 14:00:27 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
)

DEBUG - 2019-12-12 14:00:27 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-12 14:00:28 -->  ldap login success
INFO - 2019-12-12 14:00:28 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-12 14:00:28 --> Role Retrive from DB
DEBUG - 2019-12-12 14:00:28 --> loading model Active_Session
INFO - 2019-12-12 14:00:28 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 14:00:28 --> calling insert_active_session()
DEBUG - 2019-12-12 14:00:28 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-12 14:00:28 --> insert success
DEBUG - 2019-12-12 14:00:28 --> loading Configarable_Login model...
INFO - 2019-12-12 14:00:28 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 14:00:28 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 14:00:28 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 14:00:28 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 2
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 14:00:28 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 14:00:28 --> loading view public\Dashboard
INFO - 2019-12-12 14:00:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 14:00:28 --> Final output sent to browser
DEBUG - 2019-12-12 14:00:28 --> Total execution time: 0.9151
INFO - 2019-12-12 14:00:30 --> Config Class Initialized
INFO - 2019-12-12 14:00:30 --> Hooks Class Initialized
DEBUG - 2019-12-12 14:00:30 --> UTF-8 Support Enabled
INFO - 2019-12-12 14:00:30 --> Utf8 Class Initialized
INFO - 2019-12-12 14:00:30 --> URI Class Initialized
INFO - 2019-12-12 14:00:30 --> Router Class Initialized
INFO - 2019-12-12 14:00:30 --> Output Class Initialized
INFO - 2019-12-12 14:00:30 --> Security Class Initialized
DEBUG - 2019-12-12 14:00:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 14:00:30 --> Input Class Initialized
INFO - 2019-12-12 14:00:30 --> Language Class Initialized
INFO - 2019-12-12 14:00:30 --> Loader Class Initialized
INFO - 2019-12-12 14:00:30 --> Helper loaded: html_helper
INFO - 2019-12-12 14:00:30 --> Helper loaded: url_helper
INFO - 2019-12-12 14:00:30 --> Helper loaded: form_helper
INFO - 2019-12-12 14:00:30 --> Database Driver Class Initialized
INFO - 2019-12-12 14:00:30 --> Form Validation Class Initialized
DEBUG - 2019-12-12 14:00:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 14:00:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 14:00:30 --> Encryption Class Initialized
DEBUG - 2019-12-12 14:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 14:00:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 14:00:30 --> Controller Class Initialized
DEBUG - 2019-12-12 14:00:30 --> loading Configarable_Login model...
INFO - 2019-12-12 14:00:30 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-12 14:00:30 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-12 14:00:30 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-12 14:00:30 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 1
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => ADMINUSER
            [page_seq] => 1
            [page_active] => Active
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 2
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
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
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => user/Customer_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [4] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [5] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => user/Create_Customer
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [6] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => user/Config_Mgmt
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [7] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-12 14:00:30 --> loading configurable menu with result=Array
DEBUG - 2019-12-12 14:00:30 --> loading view public\Dashboard
INFO - 2019-12-12 14:00:30 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 14:00:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-12 14:00:30 --> Final output sent to browser
DEBUG - 2019-12-12 14:00:30 --> Total execution time: 0.4420
INFO - 2019-12-12 14:06:17 --> Config Class Initialized
INFO - 2019-12-12 14:06:17 --> Hooks Class Initialized
DEBUG - 2019-12-12 14:06:17 --> UTF-8 Support Enabled
INFO - 2019-12-12 14:06:17 --> Utf8 Class Initialized
INFO - 2019-12-12 14:06:17 --> URI Class Initialized
INFO - 2019-12-12 14:06:17 --> Router Class Initialized
INFO - 2019-12-12 14:06:17 --> Output Class Initialized
INFO - 2019-12-12 14:06:17 --> Security Class Initialized
DEBUG - 2019-12-12 14:06:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 14:06:17 --> Input Class Initialized
INFO - 2019-12-12 14:06:17 --> Language Class Initialized
INFO - 2019-12-12 14:06:17 --> Loader Class Initialized
INFO - 2019-12-12 14:06:17 --> Helper loaded: html_helper
INFO - 2019-12-12 14:06:17 --> Helper loaded: url_helper
INFO - 2019-12-12 14:06:17 --> Helper loaded: form_helper
INFO - 2019-12-12 14:06:17 --> Database Driver Class Initialized
INFO - 2019-12-12 14:06:17 --> Form Validation Class Initialized
DEBUG - 2019-12-12 14:06:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 14:06:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 14:06:17 --> Encryption Class Initialized
DEBUG - 2019-12-12 14:06:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 14:06:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 14:06:17 --> Controller Class Initialized
DEBUG - 2019-12-12 14:06:17 --> Create_User constructer got called..
INFO - 2019-12-12 14:06:17 --> Model "User_Login_Model" initialized
INFO - 2019-12-12 14:06:17 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-12 14:06:17 --> show_all_profile_data from DB retrived
INFO - 2019-12-12 14:06:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-12 14:06:17 --> Final output sent to browser
DEBUG - 2019-12-12 14:06:17 --> Total execution time: 0.2690
INFO - 2019-12-12 14:08:12 --> Config Class Initialized
INFO - 2019-12-12 14:08:12 --> Hooks Class Initialized
DEBUG - 2019-12-12 14:08:12 --> UTF-8 Support Enabled
INFO - 2019-12-12 14:08:12 --> Utf8 Class Initialized
INFO - 2019-12-12 14:08:12 --> URI Class Initialized
INFO - 2019-12-12 14:08:12 --> Router Class Initialized
INFO - 2019-12-12 14:08:12 --> Output Class Initialized
INFO - 2019-12-12 14:08:12 --> Security Class Initialized
DEBUG - 2019-12-12 14:08:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-12 14:08:12 --> Input Class Initialized
INFO - 2019-12-12 14:08:12 --> Language Class Initialized
INFO - 2019-12-12 14:08:12 --> Loader Class Initialized
INFO - 2019-12-12 14:08:12 --> Helper loaded: html_helper
INFO - 2019-12-12 14:08:12 --> Helper loaded: url_helper
INFO - 2019-12-12 14:08:12 --> Helper loaded: form_helper
INFO - 2019-12-12 14:08:12 --> Database Driver Class Initialized
INFO - 2019-12-12 14:08:12 --> Form Validation Class Initialized
DEBUG - 2019-12-12 14:08:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-12 14:08:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-12 14:08:12 --> Encryption Class Initialized
DEBUG - 2019-12-12 14:08:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-12 14:08:12 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-12 14:08:12 --> Controller Class Initialized
INFO - 2019-12-12 14:08:12 --> Helper loaded: cookie_helper
INFO - 2019-12-12 14:08:12 --> logout() called
DEBUG - 2019-12-12 14:08:12 --> loading model Active_Session
INFO - 2019-12-12 14:08:12 --> Model "Active_Session" initialized
DEBUG - 2019-12-12 14:08:12 --> calling remove_active_session()
DEBUG - 2019-12-12 14:08:12 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-12 14:08:12 --> loading view welcome controller ... 
INFO - 2019-12-12 14:08:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-12 14:08:12 --> Final output sent to browser
DEBUG - 2019-12-12 14:08:12 --> Total execution time: 0.3760
