<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-12-18 05:46:22 --> Config Class Initialized
INFO - 2019-12-18 05:46:22 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:46:22 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:46:22 --> Utf8 Class Initialized
INFO - 2019-12-18 05:46:22 --> URI Class Initialized
DEBUG - 2019-12-18 05:46:22 --> No URI present. Default controller set.
INFO - 2019-12-18 05:46:22 --> Router Class Initialized
INFO - 2019-12-18 05:46:22 --> Output Class Initialized
INFO - 2019-12-18 05:46:22 --> Security Class Initialized
DEBUG - 2019-12-18 05:46:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:46:22 --> Input Class Initialized
INFO - 2019-12-18 05:46:22 --> Language Class Initialized
INFO - 2019-12-18 05:46:22 --> Loader Class Initialized
INFO - 2019-12-18 05:46:22 --> Helper loaded: html_helper
INFO - 2019-12-18 05:46:23 --> Helper loaded: url_helper
INFO - 2019-12-18 05:46:23 --> Helper loaded: form_helper
INFO - 2019-12-18 05:46:23 --> Database Driver Class Initialized
INFO - 2019-12-18 05:46:23 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:46:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:46:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:46:23 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:46:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:46:23 --> Controller Class Initialized
INFO - 2019-12-18 05:46:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 05:46:23 --> Final output sent to browser
DEBUG - 2019-12-18 05:46:23 --> Total execution time: 1.3131
INFO - 2019-12-18 05:46:41 --> Config Class Initialized
INFO - 2019-12-18 05:46:41 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:46:41 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:46:41 --> Utf8 Class Initialized
INFO - 2019-12-18 05:46:41 --> URI Class Initialized
INFO - 2019-12-18 05:46:41 --> Router Class Initialized
INFO - 2019-12-18 05:46:41 --> Output Class Initialized
INFO - 2019-12-18 05:46:41 --> Security Class Initialized
DEBUG - 2019-12-18 05:46:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:46:41 --> Input Class Initialized
INFO - 2019-12-18 05:46:41 --> Language Class Initialized
INFO - 2019-12-18 05:46:41 --> Loader Class Initialized
INFO - 2019-12-18 05:46:41 --> Helper loaded: html_helper
INFO - 2019-12-18 05:46:41 --> Helper loaded: url_helper
INFO - 2019-12-18 05:46:41 --> Helper loaded: form_helper
INFO - 2019-12-18 05:46:41 --> Database Driver Class Initialized
INFO - 2019-12-18 05:46:41 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:46:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:46:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:46:41 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:46:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:46:41 --> Controller Class Initialized
INFO - 2019-12-18 05:46:41 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 05:46:41 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 05:46:41 --> getAuth method got called...
DEBUG - 2019-12-18 05:46:41 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-18 05:46:41 --> Unreachable block here....
DEBUG - 2019-12-18 05:46:41 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 05:46:41 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-18 05:46:41 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-18 05:46:42 -->  ldap login success
INFO - 2019-12-18 05:46:42 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 05:46:42 --> Role Retrive from DB
INFO - 2019-12-18 05:46:42 --> get_group_role_mapping model43
DEBUG - 2019-12-18 05:46:42 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 05:46:42 --> loading model Active_Session
INFO - 2019-12-18 05:46:42 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 05:46:42 --> calling insert_active_session()
DEBUG - 2019-12-18 05:46:42 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 05:46:42 --> insert success
DEBUG - 2019-12-18 05:46:42 --> loading Configarable_Login model...
INFO - 2019-12-18 05:46:42 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 05:46:42 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-18 05:46:42 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 05:46:42 --> Array
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [4] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [6] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [7] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [8] => stdClass Object
        (
            [page_id] => 24
            [page_name] => Show Sessions
            [page_link] => user/authors
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:34:01
            [page_role] => ADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [9] => stdClass Object
        (
            [page_id] => 27
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:46:17
            [page_role] => ADMINUSER
            [page_seq] => 10
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-18 05:46:42 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 05:46:42 --> loading view public\Dashboard
INFO - 2019-12-18 05:46:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 05:46:42 --> Final output sent to browser
DEBUG - 2019-12-18 05:46:42 --> Total execution time: 1.1521
INFO - 2019-12-18 05:50:14 --> Config Class Initialized
INFO - 2019-12-18 05:50:14 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:50:14 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:50:14 --> Utf8 Class Initialized
INFO - 2019-12-18 05:50:14 --> URI Class Initialized
INFO - 2019-12-18 05:50:14 --> Router Class Initialized
INFO - 2019-12-18 05:50:14 --> Output Class Initialized
INFO - 2019-12-18 05:50:14 --> Security Class Initialized
DEBUG - 2019-12-18 05:50:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:50:14 --> Input Class Initialized
INFO - 2019-12-18 05:50:14 --> Language Class Initialized
INFO - 2019-12-18 05:50:14 --> Loader Class Initialized
INFO - 2019-12-18 05:50:14 --> Helper loaded: html_helper
INFO - 2019-12-18 05:50:14 --> Helper loaded: url_helper
INFO - 2019-12-18 05:50:14 --> Helper loaded: form_helper
INFO - 2019-12-18 05:50:14 --> Database Driver Class Initialized
INFO - 2019-12-18 05:50:14 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:50:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:50:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:50:14 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:50:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:50:14 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:50:14 --> Controller Class Initialized
INFO - 2019-12-18 05:50:14 --> Helper loaded: cookie_helper
INFO - 2019-12-18 05:50:14 --> logout() called
DEBUG - 2019-12-18 05:50:14 --> loading model Active_Session
INFO - 2019-12-18 05:50:14 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 05:50:14 --> calling remove_active_session()
DEBUG - 2019-12-18 05:50:14 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 05:50:14 --> loading view welcome controller ... 
INFO - 2019-12-18 05:50:14 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 05:50:14 --> Final output sent to browser
DEBUG - 2019-12-18 05:50:14 --> Total execution time: 0.3100
INFO - 2019-12-18 05:50:28 --> Config Class Initialized
INFO - 2019-12-18 05:50:28 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:50:28 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:50:28 --> Utf8 Class Initialized
INFO - 2019-12-18 05:50:28 --> URI Class Initialized
INFO - 2019-12-18 05:50:28 --> Router Class Initialized
INFO - 2019-12-18 05:50:29 --> Output Class Initialized
INFO - 2019-12-18 05:50:29 --> Security Class Initialized
DEBUG - 2019-12-18 05:50:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:50:29 --> Input Class Initialized
INFO - 2019-12-18 05:50:29 --> Language Class Initialized
INFO - 2019-12-18 05:50:29 --> Loader Class Initialized
INFO - 2019-12-18 05:50:29 --> Helper loaded: html_helper
INFO - 2019-12-18 05:50:29 --> Helper loaded: url_helper
INFO - 2019-12-18 05:50:29 --> Helper loaded: form_helper
INFO - 2019-12-18 05:50:29 --> Database Driver Class Initialized
INFO - 2019-12-18 05:50:29 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:50:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:50:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:50:29 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:50:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:50:29 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:50:29 --> Controller Class Initialized
INFO - 2019-12-18 05:50:29 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 05:50:29 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 05:50:29 --> getAuth method got called...
DEBUG - 2019-12-18 05:50:29 --> Username :- nirajcmhatre Password :- Test@12345
INFO - 2019-12-18 05:50:29 --> this is db user...
DEBUG - 2019-12-18 05:50:29 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 05:50:29 --> validation result=Array
(
    [id] => 17
    [user_group] => 42
    [userType] => DB
)

INFO - 2019-12-18 05:50:29 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 05:50:29 --> Role Retrive from DB
INFO - 2019-12-18 05:50:29 --> get_group_role_mapping model42
DEBUG - 2019-12-18 05:50:29 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 05:50:29 --> loading model Active_Session
INFO - 2019-12-18 05:50:29 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 05:50:29 --> calling insert_active_session()
DEBUG - 2019-12-18 05:50:29 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 05:50:29 --> insert success
DEBUG - 2019-12-18 05:50:29 --> loading Configarable_Login model...
INFO - 2019-12-18 05:50:29 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 05:50:29 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-18 05:50:29 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 05:50:29 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 15
            [page_name] => Config management
            [page_link] => Test/wip_page
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
            [page_link] => user/Create_User/showAllProfileData
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-12-18 05:50:29 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 05:50:29 --> loading view public\Dashboard
INFO - 2019-12-18 05:50:29 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 05:50:29 --> Final output sent to browser
DEBUG - 2019-12-18 05:50:29 --> Total execution time: 0.4875
INFO - 2019-12-18 05:50:39 --> Config Class Initialized
INFO - 2019-12-18 05:50:39 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:50:39 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:50:39 --> Utf8 Class Initialized
INFO - 2019-12-18 05:50:39 --> URI Class Initialized
INFO - 2019-12-18 05:50:39 --> Router Class Initialized
INFO - 2019-12-18 05:50:39 --> Output Class Initialized
INFO - 2019-12-18 05:50:39 --> Security Class Initialized
DEBUG - 2019-12-18 05:50:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:50:39 --> Input Class Initialized
INFO - 2019-12-18 05:50:39 --> Language Class Initialized
INFO - 2019-12-18 05:50:39 --> Loader Class Initialized
INFO - 2019-12-18 05:50:39 --> Helper loaded: html_helper
INFO - 2019-12-18 05:50:39 --> Helper loaded: url_helper
INFO - 2019-12-18 05:50:39 --> Helper loaded: form_helper
INFO - 2019-12-18 05:50:39 --> Database Driver Class Initialized
INFO - 2019-12-18 05:50:39 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:50:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:50:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:50:39 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:50:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:50:39 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:50:39 --> Controller Class Initialized
DEBUG - 2019-12-18 05:50:39 --> User_Right constructer got called..
INFO - 2019-12-18 05:50:39 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-18 05:50:39 --> Final output sent to browser
DEBUG - 2019-12-18 05:50:39 --> Total execution time: 0.3025
INFO - 2019-12-18 05:50:45 --> Config Class Initialized
INFO - 2019-12-18 05:50:45 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:50:45 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:50:45 --> Utf8 Class Initialized
INFO - 2019-12-18 05:50:45 --> URI Class Initialized
INFO - 2019-12-18 05:50:45 --> Router Class Initialized
INFO - 2019-12-18 05:50:45 --> Output Class Initialized
INFO - 2019-12-18 05:50:45 --> Security Class Initialized
DEBUG - 2019-12-18 05:50:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:50:45 --> Input Class Initialized
INFO - 2019-12-18 05:50:45 --> Language Class Initialized
INFO - 2019-12-18 05:50:45 --> Loader Class Initialized
INFO - 2019-12-18 05:50:45 --> Helper loaded: html_helper
INFO - 2019-12-18 05:50:45 --> Helper loaded: url_helper
INFO - 2019-12-18 05:50:45 --> Helper loaded: form_helper
INFO - 2019-12-18 05:50:45 --> Database Driver Class Initialized
INFO - 2019-12-18 05:50:45 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:50:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:50:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:50:45 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:50:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:50:45 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:50:45 --> Controller Class Initialized
DEBUG - 2019-12-18 05:50:45 --> Create_User constructer got called..
INFO - 2019-12-18 05:50:45 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 05:50:45 --> show all profile data modelnirajcmhatre
DEBUG - 2019-12-18 05:50:45 --> show_all_profile_data from DB retrived
INFO - 2019-12-18 05:50:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-18 05:50:45 --> Final output sent to browser
DEBUG - 2019-12-18 05:50:45 --> Total execution time: 0.3175
INFO - 2019-12-18 05:50:47 --> Config Class Initialized
INFO - 2019-12-18 05:50:47 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:50:47 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:50:47 --> Utf8 Class Initialized
INFO - 2019-12-18 05:50:47 --> URI Class Initialized
INFO - 2019-12-18 05:50:47 --> Router Class Initialized
INFO - 2019-12-18 05:50:47 --> Output Class Initialized
INFO - 2019-12-18 05:50:47 --> Security Class Initialized
DEBUG - 2019-12-18 05:50:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:50:47 --> Input Class Initialized
INFO - 2019-12-18 05:50:47 --> Language Class Initialized
INFO - 2019-12-18 05:50:47 --> Loader Class Initialized
INFO - 2019-12-18 05:50:47 --> Helper loaded: html_helper
INFO - 2019-12-18 05:50:47 --> Helper loaded: url_helper
INFO - 2019-12-18 05:50:47 --> Helper loaded: form_helper
INFO - 2019-12-18 05:50:47 --> Database Driver Class Initialized
INFO - 2019-12-18 05:50:47 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:50:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:50:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:50:47 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:50:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:50:47 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:50:47 --> Controller Class Initialized
DEBUG - 2019-12-18 05:50:47 --> calling constructor page Change_password
DEBUG - 2019-12-18 05:50:47 --> calling user access block = 42
DEBUG - 2019-12-18 05:50:47 --> index page Change_password
DEBUG - 2019-12-18 05:50:47 --> public/User/change_password
INFO - 2019-12-18 05:50:47 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-18 05:50:47 --> Final output sent to browser
DEBUG - 2019-12-18 05:50:47 --> Total execution time: 0.3325
INFO - 2019-12-18 05:50:54 --> Config Class Initialized
INFO - 2019-12-18 05:50:54 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:50:54 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:50:54 --> Utf8 Class Initialized
INFO - 2019-12-18 05:50:54 --> URI Class Initialized
INFO - 2019-12-18 05:50:54 --> Router Class Initialized
INFO - 2019-12-18 05:50:54 --> Output Class Initialized
INFO - 2019-12-18 05:50:54 --> Security Class Initialized
DEBUG - 2019-12-18 05:50:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:50:54 --> Input Class Initialized
INFO - 2019-12-18 05:50:54 --> Language Class Initialized
INFO - 2019-12-18 05:50:54 --> Loader Class Initialized
INFO - 2019-12-18 05:50:54 --> Helper loaded: html_helper
INFO - 2019-12-18 05:50:54 --> Helper loaded: url_helper
INFO - 2019-12-18 05:50:54 --> Helper loaded: form_helper
INFO - 2019-12-18 05:50:54 --> Database Driver Class Initialized
INFO - 2019-12-18 05:50:54 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:50:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:50:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:50:54 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:50:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:50:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:50:54 --> Controller Class Initialized
DEBUG - 2019-12-18 05:50:54 --> User_Right constructer got called..
INFO - 2019-12-18 05:50:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-18 05:50:54 --> Final output sent to browser
DEBUG - 2019-12-18 05:50:54 --> Total execution time: 0.5325
INFO - 2019-12-18 05:51:26 --> Config Class Initialized
INFO - 2019-12-18 05:51:26 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:51:26 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:51:26 --> Utf8 Class Initialized
INFO - 2019-12-18 05:51:26 --> URI Class Initialized
INFO - 2019-12-18 05:51:26 --> Router Class Initialized
INFO - 2019-12-18 05:51:26 --> Output Class Initialized
INFO - 2019-12-18 05:51:26 --> Security Class Initialized
DEBUG - 2019-12-18 05:51:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:51:26 --> Input Class Initialized
INFO - 2019-12-18 05:51:26 --> Language Class Initialized
INFO - 2019-12-18 05:51:26 --> Loader Class Initialized
INFO - 2019-12-18 05:51:26 --> Helper loaded: html_helper
INFO - 2019-12-18 05:51:26 --> Helper loaded: url_helper
INFO - 2019-12-18 05:51:26 --> Helper loaded: form_helper
INFO - 2019-12-18 05:51:26 --> Database Driver Class Initialized
INFO - 2019-12-18 05:51:26 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:51:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:51:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:51:26 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:51:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:51:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:51:26 --> Controller Class Initialized
INFO - 2019-12-18 05:51:26 --> Helper loaded: cookie_helper
INFO - 2019-12-18 05:51:26 --> logout() called
DEBUG - 2019-12-18 05:51:26 --> loading model Active_Session
INFO - 2019-12-18 05:51:26 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 05:51:26 --> calling remove_active_session()
DEBUG - 2019-12-18 05:51:26 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 05:51:26 --> loading view welcome controller ... 
INFO - 2019-12-18 05:51:26 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 05:51:26 --> Final output sent to browser
DEBUG - 2019-12-18 05:51:26 --> Total execution time: 0.3850
INFO - 2019-12-18 05:52:48 --> Config Class Initialized
INFO - 2019-12-18 05:52:48 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:52:48 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:52:48 --> Utf8 Class Initialized
INFO - 2019-12-18 05:52:48 --> URI Class Initialized
INFO - 2019-12-18 05:52:48 --> Router Class Initialized
INFO - 2019-12-18 05:52:48 --> Output Class Initialized
INFO - 2019-12-18 05:52:48 --> Security Class Initialized
DEBUG - 2019-12-18 05:52:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:52:48 --> Input Class Initialized
INFO - 2019-12-18 05:52:48 --> Language Class Initialized
INFO - 2019-12-18 05:52:48 --> Loader Class Initialized
INFO - 2019-12-18 05:52:48 --> Helper loaded: html_helper
INFO - 2019-12-18 05:52:48 --> Helper loaded: url_helper
INFO - 2019-12-18 05:52:48 --> Helper loaded: form_helper
INFO - 2019-12-18 05:52:48 --> Database Driver Class Initialized
INFO - 2019-12-18 05:52:48 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:52:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:52:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:52:48 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:52:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:52:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:52:49 --> Controller Class Initialized
INFO - 2019-12-18 05:52:49 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 05:52:49 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 05:52:49 --> getAuth method got called...
DEBUG - 2019-12-18 05:52:49 --> Username :- nirajcmhatre Password :- Test@12345
INFO - 2019-12-18 05:52:49 --> this is db user...
DEBUG - 2019-12-18 05:52:49 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 05:52:49 --> validation result=Array
(
    [id] => 17
    [user_group] => 42
    [userType] => DB
)

INFO - 2019-12-18 05:52:49 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 05:52:49 --> Role Retrive from DB
INFO - 2019-12-18 05:52:49 --> get_group_role_mapping model42
DEBUG - 2019-12-18 05:52:49 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 05:52:49 --> loading model Active_Session
INFO - 2019-12-18 05:52:49 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 05:52:49 --> calling insert_active_session()
DEBUG - 2019-12-18 05:52:49 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 05:52:49 --> insert success
DEBUG - 2019-12-18 05:52:49 --> loading Configarable_Login model...
INFO - 2019-12-18 05:52:49 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 05:52:49 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-18 05:52:49 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 05:52:49 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 15
            [page_name] => Config management
            [page_link] => Test/wip_page
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
            [page_link] => user/Create_User/showAllProfileData
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

)

DEBUG - 2019-12-18 05:52:49 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 05:52:49 --> loading view public\Dashboard
INFO - 2019-12-18 05:52:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 05:52:49 --> Final output sent to browser
DEBUG - 2019-12-18 05:52:49 --> Total execution time: 0.5600
INFO - 2019-12-18 05:53:24 --> Config Class Initialized
INFO - 2019-12-18 05:53:24 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:53:24 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:53:24 --> Utf8 Class Initialized
INFO - 2019-12-18 05:53:24 --> URI Class Initialized
INFO - 2019-12-18 05:53:24 --> Router Class Initialized
INFO - 2019-12-18 05:53:24 --> Output Class Initialized
INFO - 2019-12-18 05:53:24 --> Security Class Initialized
DEBUG - 2019-12-18 05:53:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:53:24 --> Input Class Initialized
INFO - 2019-12-18 05:53:24 --> Language Class Initialized
INFO - 2019-12-18 05:53:24 --> Loader Class Initialized
INFO - 2019-12-18 05:53:24 --> Helper loaded: html_helper
INFO - 2019-12-18 05:53:24 --> Helper loaded: url_helper
INFO - 2019-12-18 05:53:24 --> Helper loaded: form_helper
INFO - 2019-12-18 05:53:24 --> Database Driver Class Initialized
INFO - 2019-12-18 05:53:24 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:53:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:53:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:53:24 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:53:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:53:25 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:53:25 --> Controller Class Initialized
INFO - 2019-12-18 05:53:25 --> Helper loaded: cookie_helper
INFO - 2019-12-18 05:53:25 --> logout() called
DEBUG - 2019-12-18 05:53:25 --> loading model Active_Session
INFO - 2019-12-18 05:53:25 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 05:53:25 --> calling remove_active_session()
DEBUG - 2019-12-18 05:53:25 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 05:53:25 --> loading view welcome controller ... 
INFO - 2019-12-18 05:53:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 05:53:25 --> Final output sent to browser
DEBUG - 2019-12-18 05:53:25 --> Total execution time: 0.6600
INFO - 2019-12-18 05:59:00 --> Config Class Initialized
INFO - 2019-12-18 05:59:00 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:59:00 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:59:00 --> Utf8 Class Initialized
INFO - 2019-12-18 05:59:00 --> URI Class Initialized
INFO - 2019-12-18 05:59:00 --> Router Class Initialized
INFO - 2019-12-18 05:59:00 --> Output Class Initialized
INFO - 2019-12-18 05:59:00 --> Security Class Initialized
DEBUG - 2019-12-18 05:59:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:59:00 --> Input Class Initialized
INFO - 2019-12-18 05:59:00 --> Language Class Initialized
INFO - 2019-12-18 05:59:01 --> Loader Class Initialized
INFO - 2019-12-18 05:59:01 --> Helper loaded: html_helper
INFO - 2019-12-18 05:59:01 --> Helper loaded: url_helper
INFO - 2019-12-18 05:59:01 --> Helper loaded: form_helper
INFO - 2019-12-18 05:59:01 --> Database Driver Class Initialized
INFO - 2019-12-18 05:59:01 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:59:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:59:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:59:01 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:59:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:59:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:59:01 --> Controller Class Initialized
INFO - 2019-12-18 05:59:01 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 05:59:01 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 05:59:01 --> getAuth method got called...
DEBUG - 2019-12-18 05:59:01 --> Username :- nirajcmhatre Password :- Test212345
INFO - 2019-12-18 05:59:01 --> this is db user...
DEBUG - 2019-12-18 05:59:01 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 05:59:01 --> validation result=
INFO - 2019-12-18 05:59:01 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 05:59:01 --> Final output sent to browser
DEBUG - 2019-12-18 05:59:01 --> Total execution time: 0.4751
INFO - 2019-12-18 05:59:11 --> Config Class Initialized
INFO - 2019-12-18 05:59:11 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:59:11 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:59:11 --> Utf8 Class Initialized
INFO - 2019-12-18 05:59:11 --> URI Class Initialized
INFO - 2019-12-18 05:59:11 --> Router Class Initialized
INFO - 2019-12-18 05:59:11 --> Output Class Initialized
INFO - 2019-12-18 05:59:11 --> Security Class Initialized
DEBUG - 2019-12-18 05:59:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:59:11 --> Input Class Initialized
INFO - 2019-12-18 05:59:11 --> Language Class Initialized
INFO - 2019-12-18 05:59:11 --> Loader Class Initialized
INFO - 2019-12-18 05:59:11 --> Helper loaded: html_helper
INFO - 2019-12-18 05:59:11 --> Helper loaded: url_helper
INFO - 2019-12-18 05:59:11 --> Helper loaded: form_helper
INFO - 2019-12-18 05:59:11 --> Database Driver Class Initialized
INFO - 2019-12-18 05:59:11 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:59:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:59:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:59:11 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:59:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:59:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:59:11 --> Controller Class Initialized
INFO - 2019-12-18 05:59:11 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 05:59:11 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 05:59:11 --> getAuth method got called...
DEBUG - 2019-12-18 05:59:11 --> Username :- nirajcmhatre Password :- Test@12345
INFO - 2019-12-18 05:59:11 --> this is db user...
DEBUG - 2019-12-18 05:59:11 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 05:59:11 --> validation result=Array
(
    [id] => 17
    [user_group] => 42
    [userType] => DB
)

INFO - 2019-12-18 05:59:11 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 05:59:11 --> Role Retrive from DB
INFO - 2019-12-18 05:59:11 --> get_group_role_mapping model42
DEBUG - 2019-12-18 05:59:11 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 05:59:11 --> loading model Active_Session
INFO - 2019-12-18 05:59:11 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 05:59:11 --> calling insert_active_session()
DEBUG - 2019-12-18 05:59:11 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 05:59:12 --> insert success
DEBUG - 2019-12-18 05:59:12 --> loading Configarable_Login model...
INFO - 2019-12-18 05:59:12 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 05:59:12 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-18 05:59:12 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 05:59:12 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 15
            [page_name] => Config management
            [page_link] => Test/wip_page
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
            [page_link] => user/Create_User/showAllProfileData
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [4] => stdClass Object
        (
            [page_id] => 28
            [page_name] => Customer Creation
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => VIEWUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

)

DEBUG - 2019-12-18 05:59:12 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 05:59:12 --> loading view public\Dashboard
INFO - 2019-12-18 05:59:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 05:59:12 --> Final output sent to browser
DEBUG - 2019-12-18 05:59:12 --> Total execution time: 1.0926
INFO - 2019-12-18 05:59:15 --> Config Class Initialized
INFO - 2019-12-18 05:59:15 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:59:16 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:59:16 --> Utf8 Class Initialized
INFO - 2019-12-18 05:59:16 --> URI Class Initialized
INFO - 2019-12-18 05:59:16 --> Router Class Initialized
INFO - 2019-12-18 05:59:16 --> Output Class Initialized
INFO - 2019-12-18 05:59:16 --> Security Class Initialized
DEBUG - 2019-12-18 05:59:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:59:16 --> Input Class Initialized
INFO - 2019-12-18 05:59:16 --> Language Class Initialized
INFO - 2019-12-18 05:59:16 --> Loader Class Initialized
INFO - 2019-12-18 05:59:16 --> Helper loaded: html_helper
INFO - 2019-12-18 05:59:16 --> Helper loaded: url_helper
INFO - 2019-12-18 05:59:16 --> Helper loaded: form_helper
INFO - 2019-12-18 05:59:16 --> Database Driver Class Initialized
INFO - 2019-12-18 05:59:16 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:59:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:59:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:59:16 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:59:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:59:16 --> Controller Class Initialized
INFO - 2019-12-18 05:59:16 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 05:59:16 --> Final output sent to browser
DEBUG - 2019-12-18 05:59:16 --> Total execution time: 0.3795
INFO - 2019-12-18 05:59:17 --> Config Class Initialized
INFO - 2019-12-18 05:59:17 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:59:17 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:59:17 --> Utf8 Class Initialized
INFO - 2019-12-18 05:59:17 --> URI Class Initialized
INFO - 2019-12-18 05:59:17 --> Router Class Initialized
INFO - 2019-12-18 05:59:17 --> Output Class Initialized
INFO - 2019-12-18 05:59:17 --> Security Class Initialized
DEBUG - 2019-12-18 05:59:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:59:17 --> Input Class Initialized
INFO - 2019-12-18 05:59:17 --> Language Class Initialized
INFO - 2019-12-18 05:59:17 --> Loader Class Initialized
INFO - 2019-12-18 05:59:17 --> Helper loaded: html_helper
INFO - 2019-12-18 05:59:18 --> Helper loaded: url_helper
INFO - 2019-12-18 05:59:18 --> Helper loaded: form_helper
INFO - 2019-12-18 05:59:18 --> Database Driver Class Initialized
INFO - 2019-12-18 05:59:18 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:59:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:59:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:59:18 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:59:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:59:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:59:18 --> Controller Class Initialized
DEBUG - 2019-12-18 05:59:18 --> calling constructor page Change_password
DEBUG - 2019-12-18 05:59:18 --> calling user access block = 42
DEBUG - 2019-12-18 05:59:18 --> index page Change_password
DEBUG - 2019-12-18 05:59:18 --> public/User/change_password
INFO - 2019-12-18 05:59:18 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-18 05:59:18 --> Final output sent to browser
DEBUG - 2019-12-18 05:59:18 --> Total execution time: 0.1725
INFO - 2019-12-18 05:59:19 --> Config Class Initialized
INFO - 2019-12-18 05:59:19 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:59:19 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:59:19 --> Utf8 Class Initialized
INFO - 2019-12-18 05:59:19 --> URI Class Initialized
INFO - 2019-12-18 05:59:19 --> Router Class Initialized
INFO - 2019-12-18 05:59:19 --> Output Class Initialized
INFO - 2019-12-18 05:59:19 --> Security Class Initialized
DEBUG - 2019-12-18 05:59:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:59:19 --> Input Class Initialized
INFO - 2019-12-18 05:59:19 --> Language Class Initialized
INFO - 2019-12-18 05:59:19 --> Loader Class Initialized
INFO - 2019-12-18 05:59:19 --> Helper loaded: html_helper
INFO - 2019-12-18 05:59:19 --> Helper loaded: url_helper
INFO - 2019-12-18 05:59:19 --> Helper loaded: form_helper
INFO - 2019-12-18 05:59:19 --> Database Driver Class Initialized
INFO - 2019-12-18 05:59:19 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:59:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:59:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:59:19 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:59:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:59:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:59:19 --> Controller Class Initialized
DEBUG - 2019-12-18 05:59:19 --> Create_User constructer got called..
INFO - 2019-12-18 05:59:19 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 05:59:19 --> show all profile data modelnirajcmhatre
DEBUG - 2019-12-18 05:59:19 --> show_all_profile_data from DB retrived
INFO - 2019-12-18 05:59:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-18 05:59:19 --> Final output sent to browser
DEBUG - 2019-12-18 05:59:19 --> Total execution time: 0.3645
INFO - 2019-12-18 05:59:21 --> Config Class Initialized
INFO - 2019-12-18 05:59:21 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:59:21 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:59:21 --> Utf8 Class Initialized
INFO - 2019-12-18 05:59:21 --> URI Class Initialized
INFO - 2019-12-18 05:59:21 --> Router Class Initialized
INFO - 2019-12-18 05:59:21 --> Output Class Initialized
INFO - 2019-12-18 05:59:21 --> Security Class Initialized
DEBUG - 2019-12-18 05:59:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:59:21 --> Input Class Initialized
INFO - 2019-12-18 05:59:21 --> Language Class Initialized
INFO - 2019-12-18 05:59:21 --> Loader Class Initialized
INFO - 2019-12-18 05:59:21 --> Helper loaded: html_helper
INFO - 2019-12-18 05:59:21 --> Helper loaded: url_helper
INFO - 2019-12-18 05:59:21 --> Helper loaded: form_helper
INFO - 2019-12-18 05:59:21 --> Database Driver Class Initialized
INFO - 2019-12-18 05:59:21 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:59:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:59:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:59:21 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:59:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:59:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:59:21 --> Controller Class Initialized
DEBUG - 2019-12-18 05:59:21 --> User_Right constructer got called..
INFO - 2019-12-18 05:59:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-18 05:59:21 --> Final output sent to browser
DEBUG - 2019-12-18 05:59:21 --> Total execution time: 0.3175
INFO - 2019-12-18 05:59:24 --> Config Class Initialized
INFO - 2019-12-18 05:59:24 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:59:24 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:59:24 --> Utf8 Class Initialized
INFO - 2019-12-18 05:59:24 --> URI Class Initialized
INFO - 2019-12-18 05:59:24 --> Router Class Initialized
INFO - 2019-12-18 05:59:24 --> Output Class Initialized
INFO - 2019-12-18 05:59:24 --> Security Class Initialized
DEBUG - 2019-12-18 05:59:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:59:24 --> Input Class Initialized
INFO - 2019-12-18 05:59:24 --> Language Class Initialized
INFO - 2019-12-18 05:59:24 --> Loader Class Initialized
INFO - 2019-12-18 05:59:24 --> Helper loaded: html_helper
INFO - 2019-12-18 05:59:24 --> Helper loaded: url_helper
INFO - 2019-12-18 05:59:24 --> Helper loaded: form_helper
INFO - 2019-12-18 05:59:24 --> Database Driver Class Initialized
INFO - 2019-12-18 05:59:24 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:59:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:59:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:59:24 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:59:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:59:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:59:24 --> Controller Class Initialized
INFO - 2019-12-18 05:59:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 05:59:24 --> Final output sent to browser
DEBUG - 2019-12-18 05:59:24 --> Total execution time: 0.1850
INFO - 2019-12-18 05:59:36 --> Config Class Initialized
INFO - 2019-12-18 05:59:36 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:59:36 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:59:36 --> Utf8 Class Initialized
INFO - 2019-12-18 05:59:36 --> URI Class Initialized
INFO - 2019-12-18 05:59:36 --> Router Class Initialized
INFO - 2019-12-18 05:59:36 --> Output Class Initialized
INFO - 2019-12-18 05:59:36 --> Security Class Initialized
DEBUG - 2019-12-18 05:59:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:59:36 --> Input Class Initialized
INFO - 2019-12-18 05:59:36 --> Language Class Initialized
INFO - 2019-12-18 05:59:36 --> Loader Class Initialized
INFO - 2019-12-18 05:59:36 --> Helper loaded: html_helper
INFO - 2019-12-18 05:59:36 --> Helper loaded: url_helper
INFO - 2019-12-18 05:59:36 --> Helper loaded: form_helper
INFO - 2019-12-18 05:59:36 --> Database Driver Class Initialized
INFO - 2019-12-18 05:59:36 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:59:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:59:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:59:36 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:59:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:59:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:59:36 --> Controller Class Initialized
INFO - 2019-12-18 05:59:36 --> Helper loaded: cookie_helper
INFO - 2019-12-18 05:59:36 --> logout() called
DEBUG - 2019-12-18 05:59:36 --> loading model Active_Session
INFO - 2019-12-18 05:59:36 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 05:59:36 --> calling remove_active_session()
DEBUG - 2019-12-18 05:59:36 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 05:59:36 --> loading view welcome controller ... 
INFO - 2019-12-18 05:59:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 05:59:36 --> Final output sent to browser
DEBUG - 2019-12-18 05:59:36 --> Total execution time: 0.3350
INFO - 2019-12-18 05:59:45 --> Config Class Initialized
INFO - 2019-12-18 05:59:45 --> Hooks Class Initialized
DEBUG - 2019-12-18 05:59:45 --> UTF-8 Support Enabled
INFO - 2019-12-18 05:59:45 --> Utf8 Class Initialized
INFO - 2019-12-18 05:59:45 --> URI Class Initialized
INFO - 2019-12-18 05:59:45 --> Router Class Initialized
INFO - 2019-12-18 05:59:45 --> Output Class Initialized
INFO - 2019-12-18 05:59:45 --> Security Class Initialized
DEBUG - 2019-12-18 05:59:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 05:59:45 --> Input Class Initialized
INFO - 2019-12-18 05:59:45 --> Language Class Initialized
INFO - 2019-12-18 05:59:45 --> Loader Class Initialized
INFO - 2019-12-18 05:59:45 --> Helper loaded: html_helper
INFO - 2019-12-18 05:59:45 --> Helper loaded: url_helper
INFO - 2019-12-18 05:59:45 --> Helper loaded: form_helper
INFO - 2019-12-18 05:59:45 --> Database Driver Class Initialized
INFO - 2019-12-18 05:59:45 --> Form Validation Class Initialized
DEBUG - 2019-12-18 05:59:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 05:59:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 05:59:45 --> Encryption Class Initialized
DEBUG - 2019-12-18 05:59:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 05:59:45 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 05:59:45 --> Controller Class Initialized
INFO - 2019-12-18 05:59:45 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 05:59:45 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 05:59:45 --> getAuth method got called...
DEBUG - 2019-12-18 05:59:45 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-18 05:59:45 --> Unreachable block here....
DEBUG - 2019-12-18 05:59:45 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 05:59:45 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-18 05:59:45 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-18 06:00:06 -->  ldap login success
INFO - 2019-12-18 06:00:06 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 06:00:06 --> Role Retrive from DB
INFO - 2019-12-18 06:00:06 --> get_group_role_mapping model43
DEBUG - 2019-12-18 06:00:06 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 06:00:06 --> loading model Active_Session
INFO - 2019-12-18 06:00:06 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 06:00:06 --> calling insert_active_session()
DEBUG - 2019-12-18 06:00:06 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 06:00:07 --> insert success
DEBUG - 2019-12-18 06:00:07 --> loading Configarable_Login model...
INFO - 2019-12-18 06:00:07 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 06:00:07 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-18 06:00:07 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 06:00:07 --> Array
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [4] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [6] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [7] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [8] => stdClass Object
        (
            [page_id] => 24
            [page_name] => Show Sessions
            [page_link] => user/authors
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:34:01
            [page_role] => ADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [9] => stdClass Object
        (
            [page_id] => 27
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:46:17
            [page_role] => ADMINUSER
            [page_seq] => 10
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

)

DEBUG - 2019-12-18 06:00:07 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 06:00:07 --> loading view public\Dashboard
INFO - 2019-12-18 06:00:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 06:00:07 --> Final output sent to browser
DEBUG - 2019-12-18 06:00:07 --> Total execution time: 21.9951
INFO - 2019-12-18 06:00:21 --> Config Class Initialized
INFO - 2019-12-18 06:00:21 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:00:21 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:00:21 --> Utf8 Class Initialized
INFO - 2019-12-18 06:00:21 --> URI Class Initialized
INFO - 2019-12-18 06:00:21 --> Router Class Initialized
INFO - 2019-12-18 06:00:21 --> Output Class Initialized
INFO - 2019-12-18 06:00:21 --> Security Class Initialized
DEBUG - 2019-12-18 06:00:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:00:21 --> Input Class Initialized
INFO - 2019-12-18 06:00:21 --> Language Class Initialized
INFO - 2019-12-18 06:00:21 --> Loader Class Initialized
INFO - 2019-12-18 06:00:21 --> Helper loaded: html_helper
INFO - 2019-12-18 06:00:21 --> Helper loaded: url_helper
INFO - 2019-12-18 06:00:21 --> Helper loaded: form_helper
INFO - 2019-12-18 06:00:21 --> Database Driver Class Initialized
INFO - 2019-12-18 06:00:21 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:00:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:00:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:00:21 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:00:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:00:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:00:21 --> Controller Class Initialized
INFO - 2019-12-18 06:00:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 06:00:21 --> Final output sent to browser
DEBUG - 2019-12-18 06:00:21 --> Total execution time: 0.3475
INFO - 2019-12-18 06:00:23 --> Config Class Initialized
INFO - 2019-12-18 06:00:23 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:00:23 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:00:23 --> Utf8 Class Initialized
INFO - 2019-12-18 06:00:23 --> URI Class Initialized
INFO - 2019-12-18 06:00:23 --> Router Class Initialized
INFO - 2019-12-18 06:00:23 --> Output Class Initialized
INFO - 2019-12-18 06:00:23 --> Security Class Initialized
DEBUG - 2019-12-18 06:00:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:00:23 --> Input Class Initialized
INFO - 2019-12-18 06:00:23 --> Language Class Initialized
INFO - 2019-12-18 06:00:23 --> Loader Class Initialized
INFO - 2019-12-18 06:00:23 --> Helper loaded: html_helper
INFO - 2019-12-18 06:00:23 --> Helper loaded: url_helper
INFO - 2019-12-18 06:00:23 --> Helper loaded: form_helper
INFO - 2019-12-18 06:00:23 --> Database Driver Class Initialized
INFO - 2019-12-18 06:00:23 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:00:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:00:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:00:23 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:00:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:00:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:00:23 --> Controller Class Initialized
INFO - 2019-12-18 06:00:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 06:00:23 --> Final output sent to browser
DEBUG - 2019-12-18 06:00:23 --> Total execution time: 0.1750
INFO - 2019-12-18 06:00:25 --> Config Class Initialized
INFO - 2019-12-18 06:00:25 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:00:25 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:00:25 --> Utf8 Class Initialized
INFO - 2019-12-18 06:00:25 --> URI Class Initialized
INFO - 2019-12-18 06:00:25 --> Router Class Initialized
INFO - 2019-12-18 06:00:25 --> Output Class Initialized
INFO - 2019-12-18 06:00:25 --> Security Class Initialized
DEBUG - 2019-12-18 06:00:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:00:25 --> Input Class Initialized
INFO - 2019-12-18 06:00:25 --> Language Class Initialized
INFO - 2019-12-18 06:00:25 --> Loader Class Initialized
INFO - 2019-12-18 06:00:25 --> Helper loaded: html_helper
INFO - 2019-12-18 06:00:25 --> Helper loaded: url_helper
INFO - 2019-12-18 06:00:25 --> Helper loaded: form_helper
INFO - 2019-12-18 06:00:25 --> Database Driver Class Initialized
INFO - 2019-12-18 06:00:25 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:00:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:00:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:00:25 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:00:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:00:25 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:00:25 --> Controller Class Initialized
INFO - 2019-12-18 06:00:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 06:00:25 --> Final output sent to browser
DEBUG - 2019-12-18 06:00:25 --> Total execution time: 0.2700
INFO - 2019-12-18 06:00:32 --> Config Class Initialized
INFO - 2019-12-18 06:00:32 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:00:32 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:00:32 --> Utf8 Class Initialized
INFO - 2019-12-18 06:00:32 --> URI Class Initialized
INFO - 2019-12-18 06:00:32 --> Router Class Initialized
INFO - 2019-12-18 06:00:32 --> Output Class Initialized
INFO - 2019-12-18 06:00:32 --> Security Class Initialized
DEBUG - 2019-12-18 06:00:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:00:32 --> Input Class Initialized
INFO - 2019-12-18 06:00:32 --> Language Class Initialized
INFO - 2019-12-18 06:00:32 --> Loader Class Initialized
INFO - 2019-12-18 06:00:32 --> Helper loaded: html_helper
INFO - 2019-12-18 06:00:32 --> Helper loaded: url_helper
INFO - 2019-12-18 06:00:32 --> Helper loaded: form_helper
INFO - 2019-12-18 06:00:32 --> Database Driver Class Initialized
INFO - 2019-12-18 06:00:32 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:00:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:00:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:00:32 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:00:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:00:32 --> Controller Class Initialized
INFO - 2019-12-18 06:00:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 06:00:32 --> Final output sent to browser
DEBUG - 2019-12-18 06:00:32 --> Total execution time: 0.2875
INFO - 2019-12-18 06:00:49 --> Config Class Initialized
INFO - 2019-12-18 06:00:49 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:00:49 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:00:49 --> Utf8 Class Initialized
INFO - 2019-12-18 06:00:49 --> URI Class Initialized
INFO - 2019-12-18 06:00:49 --> Router Class Initialized
INFO - 2019-12-18 06:00:49 --> Output Class Initialized
INFO - 2019-12-18 06:00:49 --> Security Class Initialized
DEBUG - 2019-12-18 06:00:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:00:49 --> Input Class Initialized
INFO - 2019-12-18 06:00:49 --> Language Class Initialized
INFO - 2019-12-18 06:00:49 --> Loader Class Initialized
INFO - 2019-12-18 06:00:49 --> Helper loaded: html_helper
INFO - 2019-12-18 06:00:49 --> Helper loaded: url_helper
INFO - 2019-12-18 06:00:49 --> Helper loaded: form_helper
INFO - 2019-12-18 06:00:49 --> Database Driver Class Initialized
INFO - 2019-12-18 06:00:49 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:00:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:00:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:00:49 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:00:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:00:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:00:49 --> Controller Class Initialized
DEBUG - 2019-12-18 06:00:49 --> User_Right constructer got called..
INFO - 2019-12-18 06:00:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-18 06:00:49 --> Final output sent to browser
DEBUG - 2019-12-18 06:00:49 --> Total execution time: 0.2825
INFO - 2019-12-18 06:01:26 --> Config Class Initialized
INFO - 2019-12-18 06:01:26 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:01:26 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:01:26 --> Utf8 Class Initialized
INFO - 2019-12-18 06:01:26 --> URI Class Initialized
INFO - 2019-12-18 06:01:26 --> Router Class Initialized
INFO - 2019-12-18 06:01:26 --> Output Class Initialized
INFO - 2019-12-18 06:01:26 --> Security Class Initialized
DEBUG - 2019-12-18 06:01:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:01:26 --> Input Class Initialized
INFO - 2019-12-18 06:01:26 --> Language Class Initialized
INFO - 2019-12-18 06:01:26 --> Loader Class Initialized
INFO - 2019-12-18 06:01:26 --> Helper loaded: html_helper
INFO - 2019-12-18 06:01:26 --> Helper loaded: url_helper
INFO - 2019-12-18 06:01:26 --> Helper loaded: form_helper
INFO - 2019-12-18 06:01:26 --> Database Driver Class Initialized
INFO - 2019-12-18 06:01:26 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:01:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:01:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:01:26 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:01:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:01:26 --> Controller Class Initialized
DEBUG - 2019-12-18 06:01:26 --> Create_User constructer got called..
DEBUG - 2019-12-18 06:01:26 --> loading configurable menu with result=
INFO - 2019-12-18 06:01:26 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-18 06:01:26 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-18 06:01:26 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-18 06:01:26 --> Final output sent to browser
DEBUG - 2019-12-18 06:01:26 --> Total execution time: 0.3100
INFO - 2019-12-18 06:01:33 --> Config Class Initialized
INFO - 2019-12-18 06:01:33 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:01:33 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:01:33 --> Utf8 Class Initialized
INFO - 2019-12-18 06:01:33 --> URI Class Initialized
INFO - 2019-12-18 06:01:33 --> Router Class Initialized
INFO - 2019-12-18 06:01:33 --> Output Class Initialized
INFO - 2019-12-18 06:01:33 --> Security Class Initialized
DEBUG - 2019-12-18 06:01:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:01:33 --> Input Class Initialized
INFO - 2019-12-18 06:01:33 --> Language Class Initialized
INFO - 2019-12-18 06:01:33 --> Loader Class Initialized
INFO - 2019-12-18 06:01:33 --> Helper loaded: html_helper
INFO - 2019-12-18 06:01:33 --> Helper loaded: url_helper
INFO - 2019-12-18 06:01:33 --> Helper loaded: form_helper
INFO - 2019-12-18 06:01:33 --> Database Driver Class Initialized
INFO - 2019-12-18 06:01:33 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:01:33 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:01:33 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:01:33 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:01:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:01:33 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:01:33 --> Controller Class Initialized
DEBUG - 2019-12-18 06:01:33 --> Create_User constructer got called..
INFO - 2019-12-18 06:01:33 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-18 06:01:33 --> showing all user from db tblusers...
DEBUG - 2019-12-18 06:01:33 --> show_users from DB
INFO - 2019-12-18 06:01:33 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-18 06:01:33 --> Final output sent to browser
DEBUG - 2019-12-18 06:01:33 --> Total execution time: 0.2925
INFO - 2019-12-18 06:01:41 --> Config Class Initialized
INFO - 2019-12-18 06:01:41 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:01:42 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:01:42 --> Utf8 Class Initialized
INFO - 2019-12-18 06:01:42 --> URI Class Initialized
INFO - 2019-12-18 06:01:42 --> Router Class Initialized
INFO - 2019-12-18 06:01:42 --> Output Class Initialized
INFO - 2019-12-18 06:01:42 --> Security Class Initialized
DEBUG - 2019-12-18 06:01:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:01:42 --> Input Class Initialized
INFO - 2019-12-18 06:01:42 --> Language Class Initialized
INFO - 2019-12-18 06:01:42 --> Loader Class Initialized
INFO - 2019-12-18 06:01:42 --> Helper loaded: html_helper
INFO - 2019-12-18 06:01:42 --> Helper loaded: url_helper
INFO - 2019-12-18 06:01:42 --> Helper loaded: form_helper
INFO - 2019-12-18 06:01:42 --> Database Driver Class Initialized
INFO - 2019-12-18 06:01:42 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:01:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:01:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:01:42 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:01:42 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:01:42 --> Controller Class Initialized
DEBUG - 2019-12-18 06:01:42 --> Create_User constructer got called..
INFO - 2019-12-18 06:01:42 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-18 06:01:42 --> showing all user from db tblusers...
DEBUG - 2019-12-18 06:01:42 --> show_groups from DB
INFO - 2019-12-18 06:01:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-18 06:01:42 --> Final output sent to browser
DEBUG - 2019-12-18 06:01:42 --> Total execution time: 0.3100
INFO - 2019-12-18 06:17:43 --> Config Class Initialized
INFO - 2019-12-18 06:17:43 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:17:43 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:17:43 --> Utf8 Class Initialized
INFO - 2019-12-18 06:17:43 --> URI Class Initialized
INFO - 2019-12-18 06:17:43 --> Router Class Initialized
INFO - 2019-12-18 06:17:43 --> Output Class Initialized
INFO - 2019-12-18 06:17:43 --> Security Class Initialized
DEBUG - 2019-12-18 06:17:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:17:43 --> Input Class Initialized
INFO - 2019-12-18 06:17:43 --> Language Class Initialized
INFO - 2019-12-18 06:17:43 --> Loader Class Initialized
INFO - 2019-12-18 06:17:43 --> Helper loaded: html_helper
INFO - 2019-12-18 06:17:43 --> Helper loaded: url_helper
INFO - 2019-12-18 06:17:43 --> Helper loaded: form_helper
INFO - 2019-12-18 06:17:43 --> Database Driver Class Initialized
INFO - 2019-12-18 06:17:43 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:17:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:17:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:17:43 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:17:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:17:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:17:43 --> Controller Class Initialized
INFO - 2019-12-18 06:17:43 --> Helper loaded: cookie_helper
INFO - 2019-12-18 06:17:43 --> logout() called
DEBUG - 2019-12-18 06:17:43 --> loading model Active_Session
INFO - 2019-12-18 06:17:43 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 06:17:43 --> calling remove_active_session()
DEBUG - 2019-12-18 06:17:43 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 06:17:43 --> loading view welcome controller ... 
INFO - 2019-12-18 06:17:43 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 06:17:43 --> Final output sent to browser
DEBUG - 2019-12-18 06:17:43 --> Total execution time: 0.2687
INFO - 2019-12-18 06:17:56 --> Config Class Initialized
INFO - 2019-12-18 06:17:56 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:17:56 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:17:56 --> Utf8 Class Initialized
INFO - 2019-12-18 06:17:56 --> URI Class Initialized
INFO - 2019-12-18 06:17:56 --> Router Class Initialized
INFO - 2019-12-18 06:17:56 --> Output Class Initialized
INFO - 2019-12-18 06:17:56 --> Security Class Initialized
DEBUG - 2019-12-18 06:17:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:17:56 --> Input Class Initialized
INFO - 2019-12-18 06:17:56 --> Language Class Initialized
INFO - 2019-12-18 06:17:56 --> Loader Class Initialized
INFO - 2019-12-18 06:17:56 --> Helper loaded: html_helper
INFO - 2019-12-18 06:17:56 --> Helper loaded: url_helper
INFO - 2019-12-18 06:17:56 --> Helper loaded: form_helper
INFO - 2019-12-18 06:17:56 --> Database Driver Class Initialized
INFO - 2019-12-18 06:17:56 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:17:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:17:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:17:56 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:17:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:17:56 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:17:56 --> Controller Class Initialized
INFO - 2019-12-18 06:17:56 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 06:17:56 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 06:17:56 --> getAuth method got called...
DEBUG - 2019-12-18 06:17:56 --> Username :- DevOss Password :- Test@12345
INFO - 2019-12-18 06:17:56 --> this is db user...
DEBUG - 2019-12-18 06:17:56 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 06:17:56 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
)

INFO - 2019-12-18 06:17:56 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 06:17:56 --> Role Retrive from DB
INFO - 2019-12-18 06:17:56 --> get_group_role_mapping model52
DEBUG - 2019-12-18 06:17:56 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 06:17:56 --> loading model Active_Session
INFO - 2019-12-18 06:17:56 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 06:17:56 --> calling insert_active_session()
DEBUG - 2019-12-18 06:17:56 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 06:17:56 --> insert success
DEBUG - 2019-12-18 06:17:56 --> loading Configarable_Login model...
INFO - 2019-12-18 06:17:56 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 06:17:56 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-18 06:17:56 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 06:17:56 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DBADMINUSER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 20
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DBADMINUSER
            [page_seq] => 2
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [2] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DBADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [3] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DBADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [4] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DBADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [5] => stdClass Object
        (
            [page_id] => 25
            [page_name] => Show Sessions
            [page_link] => user/authors
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:40:12
            [page_role] => DBADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [6] => stdClass Object
        (
            [page_id] => 26
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:46:17
            [page_role] => DBADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-wpexplorer
        )

)

DEBUG - 2019-12-18 06:17:56 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 06:17:56 --> loading view public\Dashboard
INFO - 2019-12-18 06:17:56 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 06:17:56 --> Final output sent to browser
DEBUG - 2019-12-18 06:17:56 --> Total execution time: 0.3682
INFO - 2019-12-18 06:19:23 --> Config Class Initialized
INFO - 2019-12-18 06:19:23 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:19:23 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:19:23 --> Utf8 Class Initialized
INFO - 2019-12-18 06:19:23 --> URI Class Initialized
INFO - 2019-12-18 06:19:23 --> Router Class Initialized
INFO - 2019-12-18 06:19:23 --> Output Class Initialized
INFO - 2019-12-18 06:19:23 --> Security Class Initialized
DEBUG - 2019-12-18 06:19:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:19:23 --> Input Class Initialized
INFO - 2019-12-18 06:19:23 --> Language Class Initialized
INFO - 2019-12-18 06:19:23 --> Loader Class Initialized
INFO - 2019-12-18 06:19:23 --> Helper loaded: html_helper
INFO - 2019-12-18 06:19:23 --> Helper loaded: url_helper
INFO - 2019-12-18 06:19:23 --> Helper loaded: form_helper
INFO - 2019-12-18 06:19:23 --> Database Driver Class Initialized
INFO - 2019-12-18 06:19:23 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:19:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:19:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:19:23 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:19:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:19:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:19:23 --> Controller Class Initialized
INFO - 2019-12-18 06:19:23 --> Helper loaded: cookie_helper
INFO - 2019-12-18 06:19:23 --> logout() called
DEBUG - 2019-12-18 06:19:23 --> loading model Active_Session
INFO - 2019-12-18 06:19:23 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 06:19:23 --> calling remove_active_session()
DEBUG - 2019-12-18 06:19:23 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 06:19:23 --> loading view welcome controller ... 
INFO - 2019-12-18 06:19:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 06:19:23 --> Final output sent to browser
DEBUG - 2019-12-18 06:19:23 --> Total execution time: 0.2710
INFO - 2019-12-18 06:19:36 --> Config Class Initialized
INFO - 2019-12-18 06:19:36 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:19:36 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:19:36 --> Utf8 Class Initialized
INFO - 2019-12-18 06:19:36 --> URI Class Initialized
INFO - 2019-12-18 06:19:36 --> Router Class Initialized
INFO - 2019-12-18 06:19:36 --> Output Class Initialized
INFO - 2019-12-18 06:19:36 --> Security Class Initialized
DEBUG - 2019-12-18 06:19:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:19:36 --> Input Class Initialized
INFO - 2019-12-18 06:19:36 --> Language Class Initialized
INFO - 2019-12-18 06:19:36 --> Loader Class Initialized
INFO - 2019-12-18 06:19:36 --> Helper loaded: html_helper
INFO - 2019-12-18 06:19:36 --> Helper loaded: url_helper
INFO - 2019-12-18 06:19:36 --> Helper loaded: form_helper
INFO - 2019-12-18 06:19:36 --> Database Driver Class Initialized
INFO - 2019-12-18 06:19:36 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:19:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:19:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:19:36 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:19:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:19:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:19:36 --> Controller Class Initialized
INFO - 2019-12-18 06:19:36 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 06:19:36 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 06:19:36 --> getAuth method got called...
DEBUG - 2019-12-18 06:19:36 --> Username :- ncmhatre@globalcloudxchange.com Password :- Test@123245
INFO - 2019-12-18 06:19:36 --> Unreachable block here....
DEBUG - 2019-12-18 06:19:36 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 06:19:36 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-18 06:19:36 -->  ldap connectivity object returnResource id #82
ERROR - 2019-12-18 06:19:37 --> Severity: Warning --> ldap_bind(): Unable to bind to server: Invalid credentials C:\xampp\htdocs\oneoss\application\controllers\Auth\AdLogin.php 173
INFO - 2019-12-18 06:19:37 -->  ldap login error
INFO - 2019-12-18 06:19:37 -->  error 80090308: LdapErr: DSID-0C09042F, comment: AcceptSecurityContext error, data 52e, v2580
INFO - 2019-12-18 06:19:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 06:19:37 --> Final output sent to browser
DEBUG - 2019-12-18 06:19:37 --> Total execution time: 0.7350
INFO - 2019-12-18 06:19:44 --> Config Class Initialized
INFO - 2019-12-18 06:19:44 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:19:44 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:19:44 --> Utf8 Class Initialized
INFO - 2019-12-18 06:19:44 --> URI Class Initialized
INFO - 2019-12-18 06:19:44 --> Router Class Initialized
INFO - 2019-12-18 06:19:44 --> Output Class Initialized
INFO - 2019-12-18 06:19:44 --> Security Class Initialized
DEBUG - 2019-12-18 06:19:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:19:44 --> Input Class Initialized
INFO - 2019-12-18 06:19:44 --> Language Class Initialized
INFO - 2019-12-18 06:19:44 --> Loader Class Initialized
INFO - 2019-12-18 06:19:44 --> Helper loaded: html_helper
INFO - 2019-12-18 06:19:44 --> Helper loaded: url_helper
INFO - 2019-12-18 06:19:44 --> Helper loaded: form_helper
INFO - 2019-12-18 06:19:44 --> Database Driver Class Initialized
INFO - 2019-12-18 06:19:44 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:19:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:19:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:19:44 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:19:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:19:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:19:44 --> Controller Class Initialized
INFO - 2019-12-18 06:19:44 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 06:19:44 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 06:19:44 --> getAuth method got called...
DEBUG - 2019-12-18 06:19:44 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-18 06:19:44 --> Unreachable block here....
DEBUG - 2019-12-18 06:19:44 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 06:19:44 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-18 06:19:44 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-18 06:19:44 -->  ldap login success
INFO - 2019-12-18 06:19:44 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 06:19:44 --> Role Retrive from DB
INFO - 2019-12-18 06:19:44 --> get_group_role_mapping model43
DEBUG - 2019-12-18 06:19:44 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 06:19:44 --> loading model Active_Session
INFO - 2019-12-18 06:19:44 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 06:19:44 --> calling insert_active_session()
DEBUG - 2019-12-18 06:19:44 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 06:19:44 --> insert success
DEBUG - 2019-12-18 06:19:44 --> loading Configarable_Login model...
INFO - 2019-12-18 06:19:44 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 06:19:44 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-18 06:19:44 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 06:19:44 --> Array
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [4] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [6] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [7] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [8] => stdClass Object
        (
            [page_id] => 24
            [page_name] => Show Sessions
            [page_link] => user/authors
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:34:01
            [page_role] => ADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [9] => stdClass Object
        (
            [page_id] => 27
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:46:17
            [page_role] => ADMINUSER
            [page_seq] => 10
            [page_active] => 
            [symbol] => fas fa-fw fa-outdent
        )

)

DEBUG - 2019-12-18 06:19:44 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 06:19:44 --> loading view public\Dashboard
INFO - 2019-12-18 06:19:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 06:19:44 --> Final output sent to browser
DEBUG - 2019-12-18 06:19:44 --> Total execution time: 0.6142
INFO - 2019-12-18 06:21:35 --> Config Class Initialized
INFO - 2019-12-18 06:21:35 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:21:35 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:21:35 --> Utf8 Class Initialized
INFO - 2019-12-18 06:21:35 --> URI Class Initialized
INFO - 2019-12-18 06:21:35 --> Router Class Initialized
INFO - 2019-12-18 06:21:35 --> Output Class Initialized
INFO - 2019-12-18 06:21:35 --> Security Class Initialized
DEBUG - 2019-12-18 06:21:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:21:35 --> Input Class Initialized
INFO - 2019-12-18 06:21:35 --> Language Class Initialized
INFO - 2019-12-18 06:21:35 --> Loader Class Initialized
INFO - 2019-12-18 06:21:35 --> Helper loaded: html_helper
INFO - 2019-12-18 06:21:35 --> Helper loaded: url_helper
INFO - 2019-12-18 06:21:35 --> Helper loaded: form_helper
INFO - 2019-12-18 06:21:35 --> Database Driver Class Initialized
INFO - 2019-12-18 06:21:35 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:21:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:21:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:21:35 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:21:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:21:35 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:21:35 --> Controller Class Initialized
INFO - 2019-12-18 06:21:35 --> Helper loaded: cookie_helper
INFO - 2019-12-18 06:21:35 --> logout() called
DEBUG - 2019-12-18 06:21:35 --> loading model Active_Session
INFO - 2019-12-18 06:21:35 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 06:21:35 --> calling remove_active_session()
DEBUG - 2019-12-18 06:21:35 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 06:21:36 --> loading view welcome controller ... 
INFO - 2019-12-18 06:21:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 06:21:36 --> Final output sent to browser
DEBUG - 2019-12-18 06:21:36 --> Total execution time: 0.2647
INFO - 2019-12-18 06:21:44 --> Config Class Initialized
INFO - 2019-12-18 06:21:44 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:21:44 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:21:44 --> Utf8 Class Initialized
INFO - 2019-12-18 06:21:44 --> URI Class Initialized
INFO - 2019-12-18 06:21:44 --> Router Class Initialized
INFO - 2019-12-18 06:21:44 --> Output Class Initialized
INFO - 2019-12-18 06:21:44 --> Security Class Initialized
DEBUG - 2019-12-18 06:21:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:21:44 --> Input Class Initialized
INFO - 2019-12-18 06:21:44 --> Language Class Initialized
INFO - 2019-12-18 06:21:44 --> Loader Class Initialized
INFO - 2019-12-18 06:21:44 --> Helper loaded: html_helper
INFO - 2019-12-18 06:21:44 --> Helper loaded: url_helper
INFO - 2019-12-18 06:21:44 --> Helper loaded: form_helper
INFO - 2019-12-18 06:21:44 --> Database Driver Class Initialized
INFO - 2019-12-18 06:21:44 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:21:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:21:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:21:44 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:21:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:21:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:21:44 --> Controller Class Initialized
INFO - 2019-12-18 06:21:44 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 06:21:44 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 06:21:44 --> getAuth method got called...
DEBUG - 2019-12-18 06:21:45 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-18 06:21:45 --> Unreachable block here....
DEBUG - 2019-12-18 06:21:45 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 06:21:45 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-18 06:21:45 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-18 06:21:45 -->  ldap login success
INFO - 2019-12-18 06:21:45 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 06:21:45 --> Role Retrive from DB
INFO - 2019-12-18 06:21:45 --> get_group_role_mapping model43
DEBUG - 2019-12-18 06:21:45 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 06:21:45 --> loading model Active_Session
INFO - 2019-12-18 06:21:45 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 06:21:45 --> calling insert_active_session()
DEBUG - 2019-12-18 06:21:45 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 06:21:45 --> insert success
DEBUG - 2019-12-18 06:21:45 --> loading Configarable_Login model...
INFO - 2019-12-18 06:21:45 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 06:21:45 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-18 06:21:45 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 06:21:45 --> Array
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [4] => stdClass Object
        (
            [page_id] => 14
            [page_name] => Create User
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [6] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [7] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [8] => stdClass Object
        (
            [page_id] => 24
            [page_name] => Show Sessions
            [page_link] => user/authors
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:34:01
            [page_role] => ADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

    [9] => stdClass Object
        (
            [page_id] => 27
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:46:17
            [page_role] => ADMINUSER
            [page_seq] => 10
            [page_active] => 
            [symbol] => fas fa-fw fa-outdent
        )

)

DEBUG - 2019-12-18 06:21:45 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 06:21:45 --> loading view public\Dashboard
INFO - 2019-12-18 06:21:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 06:21:45 --> Final output sent to browser
DEBUG - 2019-12-18 06:21:45 --> Total execution time: 0.8595
INFO - 2019-12-18 06:25:23 --> Config Class Initialized
INFO - 2019-12-18 06:25:23 --> Hooks Class Initialized
DEBUG - 2019-12-18 06:25:23 --> UTF-8 Support Enabled
INFO - 2019-12-18 06:25:23 --> Utf8 Class Initialized
INFO - 2019-12-18 06:25:23 --> URI Class Initialized
INFO - 2019-12-18 06:25:23 --> Router Class Initialized
INFO - 2019-12-18 06:25:23 --> Output Class Initialized
INFO - 2019-12-18 06:25:23 --> Security Class Initialized
DEBUG - 2019-12-18 06:25:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 06:25:23 --> Input Class Initialized
INFO - 2019-12-18 06:25:23 --> Language Class Initialized
INFO - 2019-12-18 06:25:23 --> Loader Class Initialized
INFO - 2019-12-18 06:25:23 --> Helper loaded: html_helper
INFO - 2019-12-18 06:25:24 --> Helper loaded: url_helper
INFO - 2019-12-18 06:25:24 --> Helper loaded: form_helper
INFO - 2019-12-18 06:25:24 --> Database Driver Class Initialized
INFO - 2019-12-18 06:25:24 --> Form Validation Class Initialized
DEBUG - 2019-12-18 06:25:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 06:25:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 06:25:24 --> Encryption Class Initialized
DEBUG - 2019-12-18 06:25:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 06:25:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 06:25:24 --> Controller Class Initialized
INFO - 2019-12-18 06:25:24 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 06:25:24 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 06:25:24 --> getAuth method got called...
DEBUG - 2019-12-18 06:25:24 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-18 06:25:24 --> Unreachable block here....
DEBUG - 2019-12-18 06:25:24 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 06:25:24 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-18 06:25:24 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-18 06:25:24 -->  ldap login success
INFO - 2019-12-18 06:25:24 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 06:25:24 --> Role Retrive from DB
INFO - 2019-12-18 06:25:24 --> get_group_role_mapping model43
DEBUG - 2019-12-18 06:25:24 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 06:25:24 --> loading model Active_Session
INFO - 2019-12-18 06:25:24 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 06:25:24 --> calling insert_active_session()
DEBUG - 2019-12-18 06:25:24 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 06:25:24 --> insert success
DEBUG - 2019-12-18 06:25:24 --> loading Configarable_Login model...
INFO - 2019-12-18 06:25:24 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 06:25:24 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-18 06:25:24 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 06:25:24 --> Array
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [4] => stdClass Object
        (
            [page_id] => 14
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [6] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [7] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [8] => stdClass Object
        (
            [page_id] => 24
            [page_name] => Show Sessions
            [page_link] => user/authors
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:34:01
            [page_role] => ADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

    [9] => stdClass Object
        (
            [page_id] => 27
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:46:17
            [page_role] => ADMINUSER
            [page_seq] => 10
            [page_active] => 
            [symbol] => fas fa-fw fa-outdent
        )

)

DEBUG - 2019-12-18 06:25:24 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 06:25:24 --> loading view public\Dashboard
INFO - 2019-12-18 06:25:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 06:25:24 --> Final output sent to browser
DEBUG - 2019-12-18 06:25:25 --> Total execution time: 1.2501
INFO - 2019-12-18 07:01:59 --> Config Class Initialized
INFO - 2019-12-18 07:01:59 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:01:59 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:01:59 --> Utf8 Class Initialized
INFO - 2019-12-18 07:01:59 --> URI Class Initialized
INFO - 2019-12-18 07:01:59 --> Router Class Initialized
INFO - 2019-12-18 07:01:59 --> Output Class Initialized
INFO - 2019-12-18 07:01:59 --> Security Class Initialized
DEBUG - 2019-12-18 07:01:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:01:59 --> Input Class Initialized
INFO - 2019-12-18 07:01:59 --> Language Class Initialized
INFO - 2019-12-18 07:01:59 --> Loader Class Initialized
INFO - 2019-12-18 07:01:59 --> Helper loaded: html_helper
INFO - 2019-12-18 07:01:59 --> Helper loaded: url_helper
INFO - 2019-12-18 07:01:59 --> Helper loaded: form_helper
INFO - 2019-12-18 07:01:59 --> Database Driver Class Initialized
INFO - 2019-12-18 07:01:59 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:01:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:01:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:01:59 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:01:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:01:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:01:59 --> Controller Class Initialized
INFO - 2019-12-18 07:01:59 --> Helper loaded: cookie_helper
INFO - 2019-12-18 07:01:59 --> logout() called
DEBUG - 2019-12-18 07:01:59 --> loading model Active_Session
INFO - 2019-12-18 07:01:59 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 07:01:59 --> calling remove_active_session()
DEBUG - 2019-12-18 07:01:59 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 07:01:59 --> loading view welcome controller ... 
INFO - 2019-12-18 07:01:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 07:01:59 --> Final output sent to browser
DEBUG - 2019-12-18 07:01:59 --> Total execution time: 0.3498
INFO - 2019-12-18 07:02:03 --> Config Class Initialized
INFO - 2019-12-18 07:02:03 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:02:03 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:02:03 --> Utf8 Class Initialized
INFO - 2019-12-18 07:02:03 --> URI Class Initialized
DEBUG - 2019-12-18 07:02:03 --> No URI present. Default controller set.
INFO - 2019-12-18 07:02:03 --> Router Class Initialized
INFO - 2019-12-18 07:02:03 --> Output Class Initialized
INFO - 2019-12-18 07:02:03 --> Security Class Initialized
DEBUG - 2019-12-18 07:02:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:02:03 --> Input Class Initialized
INFO - 2019-12-18 07:02:03 --> Language Class Initialized
INFO - 2019-12-18 07:02:03 --> Loader Class Initialized
INFO - 2019-12-18 07:02:03 --> Helper loaded: html_helper
INFO - 2019-12-18 07:02:03 --> Helper loaded: url_helper
INFO - 2019-12-18 07:02:03 --> Helper loaded: form_helper
INFO - 2019-12-18 07:02:03 --> Database Driver Class Initialized
INFO - 2019-12-18 07:02:03 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:02:03 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:02:03 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:02:04 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:02:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:02:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:02:04 --> Controller Class Initialized
INFO - 2019-12-18 07:02:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 07:02:04 --> Final output sent to browser
DEBUG - 2019-12-18 07:02:04 --> Total execution time: 0.4010
INFO - 2019-12-18 07:02:04 --> Config Class Initialized
INFO - 2019-12-18 07:02:04 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:02:04 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:02:04 --> Utf8 Class Initialized
INFO - 2019-12-18 07:02:04 --> URI Class Initialized
DEBUG - 2019-12-18 07:02:04 --> No URI present. Default controller set.
INFO - 2019-12-18 07:02:04 --> Router Class Initialized
INFO - 2019-12-18 07:02:04 --> Output Class Initialized
INFO - 2019-12-18 07:02:04 --> Security Class Initialized
DEBUG - 2019-12-18 07:02:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:02:04 --> Input Class Initialized
INFO - 2019-12-18 07:02:04 --> Language Class Initialized
INFO - 2019-12-18 07:02:04 --> Loader Class Initialized
INFO - 2019-12-18 07:02:04 --> Helper loaded: html_helper
INFO - 2019-12-18 07:02:04 --> Helper loaded: url_helper
INFO - 2019-12-18 07:02:04 --> Helper loaded: form_helper
INFO - 2019-12-18 07:02:04 --> Database Driver Class Initialized
INFO - 2019-12-18 07:02:04 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:02:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:02:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:02:04 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:02:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:02:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:02:04 --> Controller Class Initialized
INFO - 2019-12-18 07:02:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 07:02:04 --> Final output sent to browser
DEBUG - 2019-12-18 07:02:04 --> Total execution time: 0.2675
INFO - 2019-12-18 07:28:17 --> Config Class Initialized
INFO - 2019-12-18 07:28:17 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:28:17 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:28:18 --> Utf8 Class Initialized
INFO - 2019-12-18 07:28:18 --> URI Class Initialized
DEBUG - 2019-12-18 07:28:18 --> No URI present. Default controller set.
INFO - 2019-12-18 07:28:18 --> Router Class Initialized
INFO - 2019-12-18 07:28:18 --> Output Class Initialized
INFO - 2019-12-18 07:28:18 --> Security Class Initialized
DEBUG - 2019-12-18 07:28:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:28:18 --> Input Class Initialized
INFO - 2019-12-18 07:28:18 --> Language Class Initialized
INFO - 2019-12-18 07:28:18 --> Loader Class Initialized
INFO - 2019-12-18 07:28:18 --> Helper loaded: html_helper
INFO - 2019-12-18 07:28:18 --> Helper loaded: url_helper
INFO - 2019-12-18 07:28:18 --> Helper loaded: form_helper
INFO - 2019-12-18 07:28:18 --> Database Driver Class Initialized
INFO - 2019-12-18 07:28:18 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:28:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:28:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:28:18 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:28:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:28:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:28:18 --> Controller Class Initialized
INFO - 2019-12-18 07:28:18 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 07:28:18 --> Final output sent to browser
DEBUG - 2019-12-18 07:28:18 --> Total execution time: 0.4150
INFO - 2019-12-18 07:30:42 --> Config Class Initialized
INFO - 2019-12-18 07:30:42 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:30:43 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:30:43 --> Utf8 Class Initialized
INFO - 2019-12-18 07:30:43 --> URI Class Initialized
INFO - 2019-12-18 07:30:43 --> Router Class Initialized
INFO - 2019-12-18 07:30:43 --> Output Class Initialized
INFO - 2019-12-18 07:30:43 --> Security Class Initialized
DEBUG - 2019-12-18 07:30:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:30:43 --> Input Class Initialized
INFO - 2019-12-18 07:30:43 --> Language Class Initialized
INFO - 2019-12-18 07:30:43 --> Loader Class Initialized
INFO - 2019-12-18 07:30:43 --> Helper loaded: html_helper
INFO - 2019-12-18 07:30:43 --> Helper loaded: url_helper
INFO - 2019-12-18 07:30:43 --> Helper loaded: form_helper
INFO - 2019-12-18 07:30:43 --> Database Driver Class Initialized
INFO - 2019-12-18 07:30:43 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:30:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:30:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:30:43 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:30:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:30:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:30:43 --> Controller Class Initialized
INFO - 2019-12-18 07:30:43 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 07:30:43 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 07:30:43 --> getAuth method got called...
DEBUG - 2019-12-18 07:30:43 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-18 07:30:43 --> Unreachable block here....
DEBUG - 2019-12-18 07:30:43 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 07:30:43 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-18 07:30:43 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-18 07:30:43 -->  ldap login success
INFO - 2019-12-18 07:30:43 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 07:30:43 --> Role Retrive from DB
INFO - 2019-12-18 07:30:43 --> get_group_role_mapping model43
DEBUG - 2019-12-18 07:30:43 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 07:30:43 --> loading model Active_Session
INFO - 2019-12-18 07:30:43 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 07:30:43 --> calling insert_active_session()
DEBUG - 2019-12-18 07:30:43 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 07:30:43 --> insert success
DEBUG - 2019-12-18 07:30:43 --> loading Configarable_Login model...
INFO - 2019-12-18 07:30:43 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 07:30:43 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-18 07:30:43 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 07:30:43 --> Array
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [4] => stdClass Object
        (
            [page_id] => 14
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [6] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [7] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [8] => stdClass Object
        (
            [page_id] => 24
            [page_name] => Show Sessions
            [page_link] => user/authors
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:34:01
            [page_role] => ADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

    [9] => stdClass Object
        (
            [page_id] => 27
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:46:17
            [page_role] => ADMINUSER
            [page_seq] => 10
            [page_active] => 
            [symbol] => fas fa-fw fa-outdent
        )

)

DEBUG - 2019-12-18 07:30:43 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 07:30:43 --> loading view public\Dashboard
INFO - 2019-12-18 07:30:43 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 07:30:43 --> Final output sent to browser
DEBUG - 2019-12-18 07:30:43 --> Total execution time: 0.8549
INFO - 2019-12-18 07:31:18 --> Config Class Initialized
INFO - 2019-12-18 07:31:18 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:31:18 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:31:18 --> Utf8 Class Initialized
INFO - 2019-12-18 07:31:18 --> URI Class Initialized
INFO - 2019-12-18 07:31:18 --> Router Class Initialized
INFO - 2019-12-18 07:31:18 --> Output Class Initialized
INFO - 2019-12-18 07:31:18 --> Security Class Initialized
DEBUG - 2019-12-18 07:31:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:31:18 --> Input Class Initialized
INFO - 2019-12-18 07:31:18 --> Language Class Initialized
INFO - 2019-12-18 07:31:18 --> Loader Class Initialized
INFO - 2019-12-18 07:31:18 --> Helper loaded: html_helper
INFO - 2019-12-18 07:31:18 --> Helper loaded: url_helper
INFO - 2019-12-18 07:31:18 --> Helper loaded: form_helper
INFO - 2019-12-18 07:31:18 --> Database Driver Class Initialized
INFO - 2019-12-18 07:31:18 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:31:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:31:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:31:18 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:31:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:31:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:31:18 --> Controller Class Initialized
DEBUG - 2019-12-18 07:31:18 --> Create_User constructer got called..
INFO - 2019-12-18 07:31:18 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 07:31:18 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-18 07:31:18 --> show_all_profile_data from DB retrived
INFO - 2019-12-18 07:31:18 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-18 07:31:18 --> Final output sent to browser
DEBUG - 2019-12-18 07:31:18 --> Total execution time: 0.2950
INFO - 2019-12-18 07:31:54 --> Config Class Initialized
INFO - 2019-12-18 07:31:54 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:31:54 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:31:54 --> Utf8 Class Initialized
INFO - 2019-12-18 07:31:54 --> URI Class Initialized
INFO - 2019-12-18 07:31:54 --> Router Class Initialized
INFO - 2019-12-18 07:31:54 --> Output Class Initialized
INFO - 2019-12-18 07:31:54 --> Security Class Initialized
DEBUG - 2019-12-18 07:31:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:31:54 --> Input Class Initialized
INFO - 2019-12-18 07:31:54 --> Language Class Initialized
INFO - 2019-12-18 07:31:54 --> Loader Class Initialized
INFO - 2019-12-18 07:31:54 --> Helper loaded: html_helper
INFO - 2019-12-18 07:31:54 --> Helper loaded: url_helper
INFO - 2019-12-18 07:31:54 --> Helper loaded: form_helper
INFO - 2019-12-18 07:31:54 --> Database Driver Class Initialized
INFO - 2019-12-18 07:31:54 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:31:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:31:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:31:54 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:31:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:31:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:31:54 --> Controller Class Initialized
DEBUG - 2019-12-18 07:31:54 --> calling constructor page Change_password
DEBUG - 2019-12-18 07:31:54 --> calling user access block = 43
DEBUG - 2019-12-18 07:31:54 --> index page Change_password
DEBUG - 2019-12-18 07:31:54 --> public/User/change_password
INFO - 2019-12-18 07:31:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-18 07:31:54 --> Final output sent to browser
DEBUG - 2019-12-18 07:31:54 --> Total execution time: 0.3350
INFO - 2019-12-18 07:32:08 --> Config Class Initialized
INFO - 2019-12-18 07:32:08 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:32:08 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:32:08 --> Utf8 Class Initialized
INFO - 2019-12-18 07:32:08 --> URI Class Initialized
INFO - 2019-12-18 07:32:08 --> Router Class Initialized
INFO - 2019-12-18 07:32:08 --> Output Class Initialized
INFO - 2019-12-18 07:32:08 --> Security Class Initialized
DEBUG - 2019-12-18 07:32:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:32:08 --> Input Class Initialized
INFO - 2019-12-18 07:32:08 --> Language Class Initialized
INFO - 2019-12-18 07:32:08 --> Loader Class Initialized
INFO - 2019-12-18 07:32:08 --> Helper loaded: html_helper
INFO - 2019-12-18 07:32:08 --> Helper loaded: url_helper
INFO - 2019-12-18 07:32:08 --> Helper loaded: form_helper
INFO - 2019-12-18 07:32:08 --> Database Driver Class Initialized
INFO - 2019-12-18 07:32:08 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:32:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:32:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:32:08 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:32:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:32:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:32:08 --> Controller Class Initialized
DEBUG - 2019-12-18 07:32:08 --> User_Right constructer got called..
INFO - 2019-12-18 07:32:08 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-18 07:32:08 --> Final output sent to browser
DEBUG - 2019-12-18 07:32:08 --> Total execution time: 0.3200
INFO - 2019-12-18 07:32:21 --> Config Class Initialized
INFO - 2019-12-18 07:32:21 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:32:21 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:32:21 --> Utf8 Class Initialized
INFO - 2019-12-18 07:32:21 --> URI Class Initialized
INFO - 2019-12-18 07:32:21 --> Router Class Initialized
INFO - 2019-12-18 07:32:21 --> Output Class Initialized
INFO - 2019-12-18 07:32:21 --> Security Class Initialized
DEBUG - 2019-12-18 07:32:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:32:21 --> Input Class Initialized
INFO - 2019-12-18 07:32:21 --> Language Class Initialized
INFO - 2019-12-18 07:32:21 --> Loader Class Initialized
INFO - 2019-12-18 07:32:21 --> Helper loaded: html_helper
INFO - 2019-12-18 07:32:21 --> Helper loaded: url_helper
INFO - 2019-12-18 07:32:21 --> Helper loaded: form_helper
INFO - 2019-12-18 07:32:21 --> Database Driver Class Initialized
INFO - 2019-12-18 07:32:21 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:32:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:32:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:32:21 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:32:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:32:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:32:21 --> Controller Class Initialized
DEBUG - 2019-12-18 07:32:21 --> Create_User constructer got called..
INFO - 2019-12-18 07:32:21 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 07:32:21 --> show all profile data modelncmhatre@globalcloudxchange.com
DEBUG - 2019-12-18 07:32:21 --> show_all_profile_data from DB retrived
INFO - 2019-12-18 07:32:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-18 07:32:21 --> Final output sent to browser
DEBUG - 2019-12-18 07:32:21 --> Total execution time: 0.2625
INFO - 2019-12-18 07:32:48 --> Config Class Initialized
INFO - 2019-12-18 07:32:48 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:32:48 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:32:48 --> Utf8 Class Initialized
INFO - 2019-12-18 07:32:48 --> URI Class Initialized
INFO - 2019-12-18 07:32:48 --> Router Class Initialized
INFO - 2019-12-18 07:32:48 --> Output Class Initialized
INFO - 2019-12-18 07:32:48 --> Security Class Initialized
DEBUG - 2019-12-18 07:32:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:32:48 --> Input Class Initialized
INFO - 2019-12-18 07:32:48 --> Language Class Initialized
INFO - 2019-12-18 07:32:48 --> Loader Class Initialized
INFO - 2019-12-18 07:32:48 --> Helper loaded: html_helper
INFO - 2019-12-18 07:32:48 --> Helper loaded: url_helper
INFO - 2019-12-18 07:32:48 --> Helper loaded: form_helper
INFO - 2019-12-18 07:32:48 --> Database Driver Class Initialized
INFO - 2019-12-18 07:32:48 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:32:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:32:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:32:49 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:32:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:32:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:32:49 --> Controller Class Initialized
DEBUG - 2019-12-18 07:32:49 --> Create_User constructer got called..
DEBUG - 2019-12-18 07:32:49 --> loading configurable menu with result=
INFO - 2019-12-18 07:32:49 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-18 07:32:49 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-18 07:32:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-18 07:32:49 --> Final output sent to browser
DEBUG - 2019-12-18 07:32:49 --> Total execution time: 0.3100
INFO - 2019-12-18 07:39:42 --> Config Class Initialized
INFO - 2019-12-18 07:39:42 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:39:42 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:39:42 --> Utf8 Class Initialized
INFO - 2019-12-18 07:39:42 --> URI Class Initialized
INFO - 2019-12-18 07:39:42 --> Router Class Initialized
INFO - 2019-12-18 07:39:42 --> Output Class Initialized
INFO - 2019-12-18 07:39:42 --> Security Class Initialized
DEBUG - 2019-12-18 07:39:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:39:42 --> Input Class Initialized
INFO - 2019-12-18 07:39:42 --> Language Class Initialized
INFO - 2019-12-18 07:39:42 --> Loader Class Initialized
INFO - 2019-12-18 07:39:42 --> Helper loaded: html_helper
INFO - 2019-12-18 07:39:42 --> Helper loaded: url_helper
INFO - 2019-12-18 07:39:42 --> Helper loaded: form_helper
INFO - 2019-12-18 07:39:42 --> Database Driver Class Initialized
INFO - 2019-12-18 07:39:42 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:39:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:39:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:39:42 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:39:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:39:42 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:39:42 --> Controller Class Initialized
INFO - 2019-12-18 07:39:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 07:39:42 --> Final output sent to browser
DEBUG - 2019-12-18 07:39:42 --> Total execution time: 0.2749
INFO - 2019-12-18 07:39:45 --> Config Class Initialized
INFO - 2019-12-18 07:39:45 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:39:45 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:39:45 --> Utf8 Class Initialized
INFO - 2019-12-18 07:39:45 --> URI Class Initialized
INFO - 2019-12-18 07:39:45 --> Router Class Initialized
INFO - 2019-12-18 07:39:45 --> Output Class Initialized
INFO - 2019-12-18 07:39:45 --> Security Class Initialized
DEBUG - 2019-12-18 07:39:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:39:45 --> Input Class Initialized
INFO - 2019-12-18 07:39:45 --> Language Class Initialized
INFO - 2019-12-18 07:39:45 --> Loader Class Initialized
INFO - 2019-12-18 07:39:45 --> Helper loaded: html_helper
INFO - 2019-12-18 07:39:45 --> Helper loaded: url_helper
INFO - 2019-12-18 07:39:45 --> Helper loaded: form_helper
INFO - 2019-12-18 07:39:45 --> Database Driver Class Initialized
INFO - 2019-12-18 07:39:45 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:39:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:39:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:39:45 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:39:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:39:45 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:39:45 --> Controller Class Initialized
DEBUG - 2019-12-18 07:39:45 --> Create_User constructer got called..
DEBUG - 2019-12-18 07:39:45 --> loading configurable menu with result=
INFO - 2019-12-18 07:39:45 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-18 07:39:45 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-18 07:39:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-18 07:39:45 --> Final output sent to browser
DEBUG - 2019-12-18 07:39:45 --> Total execution time: 0.2949
INFO - 2019-12-18 07:40:38 --> Config Class Initialized
INFO - 2019-12-18 07:40:38 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:40:38 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:40:38 --> Utf8 Class Initialized
INFO - 2019-12-18 07:40:38 --> URI Class Initialized
INFO - 2019-12-18 07:40:38 --> Router Class Initialized
INFO - 2019-12-18 07:40:38 --> Output Class Initialized
INFO - 2019-12-18 07:40:38 --> Security Class Initialized
DEBUG - 2019-12-18 07:40:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:40:38 --> Input Class Initialized
INFO - 2019-12-18 07:40:38 --> Language Class Initialized
INFO - 2019-12-18 07:40:38 --> Loader Class Initialized
INFO - 2019-12-18 07:40:38 --> Helper loaded: html_helper
INFO - 2019-12-18 07:40:38 --> Helper loaded: url_helper
INFO - 2019-12-18 07:40:38 --> Helper loaded: form_helper
INFO - 2019-12-18 07:40:38 --> Database Driver Class Initialized
INFO - 2019-12-18 07:40:38 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:40:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:40:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:40:38 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:40:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:40:38 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:40:38 --> Controller Class Initialized
DEBUG - 2019-12-18 07:40:38 --> Create_User constructer got called..
INFO - 2019-12-18 07:40:38 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-18 07:40:38 --> showing all user from db tblusers...
DEBUG - 2019-12-18 07:40:38 --> show_users from DB
INFO - 2019-12-18 07:40:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-18 07:40:38 --> Final output sent to browser
DEBUG - 2019-12-18 07:40:38 --> Total execution time: 0.3349
INFO - 2019-12-18 07:40:55 --> Config Class Initialized
INFO - 2019-12-18 07:40:55 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:40:55 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:40:55 --> Utf8 Class Initialized
INFO - 2019-12-18 07:40:55 --> URI Class Initialized
INFO - 2019-12-18 07:40:55 --> Router Class Initialized
INFO - 2019-12-18 07:40:55 --> Output Class Initialized
INFO - 2019-12-18 07:40:55 --> Security Class Initialized
DEBUG - 2019-12-18 07:40:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:40:55 --> Input Class Initialized
INFO - 2019-12-18 07:40:55 --> Language Class Initialized
INFO - 2019-12-18 07:40:55 --> Loader Class Initialized
INFO - 2019-12-18 07:40:55 --> Helper loaded: html_helper
INFO - 2019-12-18 07:40:55 --> Helper loaded: url_helper
INFO - 2019-12-18 07:40:55 --> Helper loaded: form_helper
INFO - 2019-12-18 07:40:55 --> Database Driver Class Initialized
INFO - 2019-12-18 07:40:55 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:40:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:40:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:40:55 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:40:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:40:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:40:55 --> Controller Class Initialized
DEBUG - 2019-12-18 07:40:55 --> Create_User constructer got called..
INFO - 2019-12-18 07:40:55 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-18 07:40:55 --> showing all user from db tblusers...
DEBUG - 2019-12-18 07:40:55 --> show_groups from DB
INFO - 2019-12-18 07:40:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-18 07:40:55 --> Final output sent to browser
DEBUG - 2019-12-18 07:40:55 --> Total execution time: 0.2949
INFO - 2019-12-18 07:41:18 --> Config Class Initialized
INFO - 2019-12-18 07:41:18 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:41:18 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:41:18 --> Utf8 Class Initialized
INFO - 2019-12-18 07:41:18 --> URI Class Initialized
INFO - 2019-12-18 07:41:18 --> Router Class Initialized
INFO - 2019-12-18 07:41:18 --> Output Class Initialized
INFO - 2019-12-18 07:41:18 --> Security Class Initialized
DEBUG - 2019-12-18 07:41:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:41:18 --> Input Class Initialized
INFO - 2019-12-18 07:41:18 --> Language Class Initialized
INFO - 2019-12-18 07:41:18 --> Loader Class Initialized
INFO - 2019-12-18 07:41:18 --> Helper loaded: html_helper
INFO - 2019-12-18 07:41:18 --> Helper loaded: url_helper
INFO - 2019-12-18 07:41:18 --> Helper loaded: form_helper
INFO - 2019-12-18 07:41:18 --> Database Driver Class Initialized
INFO - 2019-12-18 07:41:18 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:41:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:41:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:41:18 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:41:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:41:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:41:18 --> Controller Class Initialized
DEBUG - 2019-12-18 07:41:18 --> loading Configarable_Login model...
INFO - 2019-12-18 07:41:18 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 07:41:18 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-18 07:41:18 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 07:41:18 --> Array
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [4] => stdClass Object
        (
            [page_id] => 14
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [6] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [7] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [8] => stdClass Object
        (
            [page_id] => 24
            [page_name] => Show Sessions
            [page_link] => user/authors
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:34:01
            [page_role] => ADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

    [9] => stdClass Object
        (
            [page_id] => 27
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:46:17
            [page_role] => ADMINUSER
            [page_seq] => 10
            [page_active] => 
            [symbol] => fas fa-fw fa-outdent
        )

)

DEBUG - 2019-12-18 07:41:18 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 07:41:18 --> loading view public\Dashboard
INFO - 2019-12-18 07:41:18 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 07:41:18 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 07:41:18 --> Final output sent to browser
DEBUG - 2019-12-18 07:41:18 --> Total execution time: 0.3324
INFO - 2019-12-18 07:55:51 --> Config Class Initialized
INFO - 2019-12-18 07:55:51 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:55:51 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:55:51 --> Utf8 Class Initialized
INFO - 2019-12-18 07:55:51 --> URI Class Initialized
INFO - 2019-12-18 07:55:51 --> Router Class Initialized
INFO - 2019-12-18 07:55:51 --> Output Class Initialized
INFO - 2019-12-18 07:55:51 --> Security Class Initialized
DEBUG - 2019-12-18 07:55:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:55:51 --> Input Class Initialized
INFO - 2019-12-18 07:55:51 --> Language Class Initialized
INFO - 2019-12-18 07:55:51 --> Loader Class Initialized
INFO - 2019-12-18 07:55:51 --> Helper loaded: html_helper
INFO - 2019-12-18 07:55:51 --> Helper loaded: url_helper
INFO - 2019-12-18 07:55:51 --> Helper loaded: form_helper
INFO - 2019-12-18 07:55:51 --> Database Driver Class Initialized
INFO - 2019-12-18 07:55:51 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:55:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:55:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:55:51 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:55:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:55:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:55:51 --> Controller Class Initialized
INFO - 2019-12-18 07:55:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 07:55:51 --> Final output sent to browser
DEBUG - 2019-12-18 07:55:51 --> Total execution time: 0.1320
INFO - 2019-12-18 07:55:52 --> Config Class Initialized
INFO - 2019-12-18 07:55:52 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:55:52 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:55:52 --> Utf8 Class Initialized
INFO - 2019-12-18 07:55:52 --> URI Class Initialized
INFO - 2019-12-18 07:55:52 --> Router Class Initialized
INFO - 2019-12-18 07:55:52 --> Output Class Initialized
INFO - 2019-12-18 07:55:52 --> Security Class Initialized
DEBUG - 2019-12-18 07:55:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:55:52 --> Input Class Initialized
INFO - 2019-12-18 07:55:52 --> Language Class Initialized
INFO - 2019-12-18 07:55:52 --> Loader Class Initialized
INFO - 2019-12-18 07:55:52 --> Helper loaded: html_helper
INFO - 2019-12-18 07:55:52 --> Helper loaded: url_helper
INFO - 2019-12-18 07:55:52 --> Helper loaded: form_helper
INFO - 2019-12-18 07:55:52 --> Database Driver Class Initialized
INFO - 2019-12-18 07:55:52 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:55:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:55:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:55:52 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:55:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:55:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:55:52 --> Controller Class Initialized
DEBUG - 2019-12-18 07:55:52 --> User_Right constructer got called..
INFO - 2019-12-18 07:55:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-18 07:55:52 --> Final output sent to browser
DEBUG - 2019-12-18 07:55:52 --> Total execution time: 0.1125
INFO - 2019-12-18 07:55:53 --> Config Class Initialized
INFO - 2019-12-18 07:55:53 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:55:53 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:55:53 --> Utf8 Class Initialized
INFO - 2019-12-18 07:55:53 --> URI Class Initialized
INFO - 2019-12-18 07:55:53 --> Router Class Initialized
INFO - 2019-12-18 07:55:53 --> Output Class Initialized
INFO - 2019-12-18 07:55:53 --> Security Class Initialized
DEBUG - 2019-12-18 07:55:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:55:53 --> Input Class Initialized
INFO - 2019-12-18 07:55:53 --> Language Class Initialized
INFO - 2019-12-18 07:55:53 --> Loader Class Initialized
INFO - 2019-12-18 07:55:53 --> Helper loaded: html_helper
INFO - 2019-12-18 07:55:53 --> Helper loaded: url_helper
INFO - 2019-12-18 07:55:53 --> Helper loaded: form_helper
INFO - 2019-12-18 07:55:53 --> Database Driver Class Initialized
INFO - 2019-12-18 07:55:53 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:55:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:55:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:55:53 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:55:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:55:53 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:55:53 --> Controller Class Initialized
DEBUG - 2019-12-18 07:55:53 --> Create_User constructer got called..
DEBUG - 2019-12-18 07:55:53 --> loading configurable menu with result=
INFO - 2019-12-18 07:55:53 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-18 07:55:53 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-18 07:55:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-18 07:55:53 --> Final output sent to browser
DEBUG - 2019-12-18 07:55:53 --> Total execution time: 0.1300
INFO - 2019-12-18 07:55:56 --> Config Class Initialized
INFO - 2019-12-18 07:55:56 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:55:56 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:55:56 --> Utf8 Class Initialized
INFO - 2019-12-18 07:55:56 --> URI Class Initialized
INFO - 2019-12-18 07:55:56 --> Router Class Initialized
INFO - 2019-12-18 07:55:56 --> Output Class Initialized
INFO - 2019-12-18 07:55:56 --> Security Class Initialized
DEBUG - 2019-12-18 07:55:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:55:56 --> Input Class Initialized
INFO - 2019-12-18 07:55:56 --> Language Class Initialized
INFO - 2019-12-18 07:55:56 --> Loader Class Initialized
INFO - 2019-12-18 07:55:56 --> Helper loaded: html_helper
INFO - 2019-12-18 07:55:56 --> Helper loaded: url_helper
INFO - 2019-12-18 07:55:56 --> Helper loaded: form_helper
INFO - 2019-12-18 07:55:56 --> Database Driver Class Initialized
INFO - 2019-12-18 07:55:56 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:55:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:55:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:55:56 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:55:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:55:56 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:55:56 --> Controller Class Initialized
DEBUG - 2019-12-18 07:55:56 --> User_Right constructer got called..
INFO - 2019-12-18 07:55:56 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-18 07:55:56 --> Final output sent to browser
DEBUG - 2019-12-18 07:55:56 --> Total execution time: 0.0925
INFO - 2019-12-18 07:56:36 --> Config Class Initialized
INFO - 2019-12-18 07:56:36 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:56:36 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:56:36 --> Utf8 Class Initialized
INFO - 2019-12-18 07:56:36 --> URI Class Initialized
INFO - 2019-12-18 07:56:36 --> Router Class Initialized
INFO - 2019-12-18 07:56:36 --> Output Class Initialized
INFO - 2019-12-18 07:56:36 --> Security Class Initialized
DEBUG - 2019-12-18 07:56:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:56:36 --> Input Class Initialized
INFO - 2019-12-18 07:56:36 --> Language Class Initialized
INFO - 2019-12-18 07:56:36 --> Loader Class Initialized
INFO - 2019-12-18 07:56:36 --> Helper loaded: html_helper
INFO - 2019-12-18 07:56:36 --> Helper loaded: url_helper
INFO - 2019-12-18 07:56:36 --> Helper loaded: form_helper
INFO - 2019-12-18 07:56:36 --> Database Driver Class Initialized
INFO - 2019-12-18 07:56:36 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:56:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:56:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:56:36 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:56:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:56:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:56:36 --> Controller Class Initialized
INFO - 2019-12-18 07:56:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 07:56:36 --> Final output sent to browser
DEBUG - 2019-12-18 07:56:36 --> Total execution time: 0.1000
INFO - 2019-12-18 07:56:38 --> Config Class Initialized
INFO - 2019-12-18 07:56:38 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:56:38 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:56:38 --> Utf8 Class Initialized
INFO - 2019-12-18 07:56:38 --> URI Class Initialized
INFO - 2019-12-18 07:56:38 --> Router Class Initialized
INFO - 2019-12-18 07:56:38 --> Output Class Initialized
INFO - 2019-12-18 07:56:38 --> Security Class Initialized
DEBUG - 2019-12-18 07:56:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:56:38 --> Input Class Initialized
INFO - 2019-12-18 07:56:38 --> Language Class Initialized
INFO - 2019-12-18 07:56:38 --> Loader Class Initialized
INFO - 2019-12-18 07:56:38 --> Helper loaded: html_helper
INFO - 2019-12-18 07:56:38 --> Helper loaded: url_helper
INFO - 2019-12-18 07:56:38 --> Helper loaded: form_helper
INFO - 2019-12-18 07:56:38 --> Database Driver Class Initialized
INFO - 2019-12-18 07:56:38 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:56:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:56:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:56:38 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:56:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:56:38 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:56:38 --> Controller Class Initialized
INFO - 2019-12-18 07:56:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 07:56:38 --> Final output sent to browser
DEBUG - 2019-12-18 07:56:38 --> Total execution time: 0.1175
INFO - 2019-12-18 07:56:41 --> Config Class Initialized
INFO - 2019-12-18 07:56:41 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:56:41 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:56:41 --> Utf8 Class Initialized
INFO - 2019-12-18 07:56:41 --> URI Class Initialized
INFO - 2019-12-18 07:56:41 --> Router Class Initialized
INFO - 2019-12-18 07:56:41 --> Output Class Initialized
INFO - 2019-12-18 07:56:41 --> Security Class Initialized
DEBUG - 2019-12-18 07:56:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:56:41 --> Input Class Initialized
INFO - 2019-12-18 07:56:41 --> Language Class Initialized
INFO - 2019-12-18 07:56:41 --> Loader Class Initialized
INFO - 2019-12-18 07:56:41 --> Helper loaded: html_helper
INFO - 2019-12-18 07:56:41 --> Helper loaded: url_helper
INFO - 2019-12-18 07:56:41 --> Helper loaded: form_helper
INFO - 2019-12-18 07:56:41 --> Database Driver Class Initialized
INFO - 2019-12-18 07:56:41 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:56:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:56:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:56:41 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:56:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:56:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:56:41 --> Controller Class Initialized
INFO - 2019-12-18 07:56:41 --> Model "Authors_model" initialized
INFO - 2019-12-18 07:56:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-18 07:56:41 --> Pagination Class Initialized
INFO - 2019-12-18 07:56:41 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-18 07:56:41 --> Final output sent to browser
DEBUG - 2019-12-18 07:56:41 --> Total execution time: 0.0925
INFO - 2019-12-18 07:56:59 --> Config Class Initialized
INFO - 2019-12-18 07:56:59 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:56:59 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:56:59 --> Utf8 Class Initialized
INFO - 2019-12-18 07:56:59 --> URI Class Initialized
INFO - 2019-12-18 07:56:59 --> Router Class Initialized
INFO - 2019-12-18 07:56:59 --> Output Class Initialized
INFO - 2019-12-18 07:56:59 --> Security Class Initialized
DEBUG - 2019-12-18 07:56:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:56:59 --> Input Class Initialized
INFO - 2019-12-18 07:56:59 --> Language Class Initialized
INFO - 2019-12-18 07:56:59 --> Loader Class Initialized
INFO - 2019-12-18 07:56:59 --> Helper loaded: html_helper
INFO - 2019-12-18 07:56:59 --> Helper loaded: url_helper
INFO - 2019-12-18 07:56:59 --> Helper loaded: form_helper
INFO - 2019-12-18 07:56:59 --> Database Driver Class Initialized
INFO - 2019-12-18 07:56:59 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:56:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:56:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:56:59 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:56:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:56:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:56:59 --> Controller Class Initialized
INFO - 2019-12-18 07:56:59 --> Model "Authors_model" initialized
INFO - 2019-12-18 07:56:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-18 07:56:59 --> Pagination Class Initialized
INFO - 2019-12-18 07:56:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-18 07:56:59 --> Final output sent to browser
DEBUG - 2019-12-18 07:56:59 --> Total execution time: 0.1025
INFO - 2019-12-18 07:57:33 --> Config Class Initialized
INFO - 2019-12-18 07:57:33 --> Hooks Class Initialized
DEBUG - 2019-12-18 07:57:33 --> UTF-8 Support Enabled
INFO - 2019-12-18 07:57:33 --> Utf8 Class Initialized
INFO - 2019-12-18 07:57:34 --> URI Class Initialized
INFO - 2019-12-18 07:57:34 --> Router Class Initialized
INFO - 2019-12-18 07:57:34 --> Output Class Initialized
INFO - 2019-12-18 07:57:34 --> Security Class Initialized
DEBUG - 2019-12-18 07:57:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 07:57:34 --> Input Class Initialized
INFO - 2019-12-18 07:57:34 --> Language Class Initialized
INFO - 2019-12-18 07:57:34 --> Loader Class Initialized
INFO - 2019-12-18 07:57:34 --> Helper loaded: html_helper
INFO - 2019-12-18 07:57:34 --> Helper loaded: url_helper
INFO - 2019-12-18 07:57:34 --> Helper loaded: form_helper
INFO - 2019-12-18 07:57:34 --> Database Driver Class Initialized
INFO - 2019-12-18 07:57:34 --> Form Validation Class Initialized
DEBUG - 2019-12-18 07:57:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 07:57:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 07:57:34 --> Encryption Class Initialized
DEBUG - 2019-12-18 07:57:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 07:57:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 07:57:34 --> Controller Class Initialized
INFO - 2019-12-18 07:57:34 --> Model "Authors_model" initialized
INFO - 2019-12-18 07:57:34 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-18 07:57:34 --> Pagination Class Initialized
INFO - 2019-12-18 07:57:34 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-18 07:57:34 --> Final output sent to browser
DEBUG - 2019-12-18 07:57:34 --> Total execution time: 1.0973
INFO - 2019-12-18 08:01:43 --> Config Class Initialized
INFO - 2019-12-18 08:01:43 --> Hooks Class Initialized
DEBUG - 2019-12-18 08:01:43 --> UTF-8 Support Enabled
INFO - 2019-12-18 08:01:43 --> Utf8 Class Initialized
INFO - 2019-12-18 08:01:43 --> URI Class Initialized
INFO - 2019-12-18 08:01:43 --> Router Class Initialized
INFO - 2019-12-18 08:01:43 --> Output Class Initialized
INFO - 2019-12-18 08:01:43 --> Security Class Initialized
DEBUG - 2019-12-18 08:01:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 08:01:43 --> Input Class Initialized
INFO - 2019-12-18 08:01:43 --> Language Class Initialized
INFO - 2019-12-18 08:01:43 --> Loader Class Initialized
INFO - 2019-12-18 08:01:43 --> Helper loaded: html_helper
INFO - 2019-12-18 08:01:43 --> Helper loaded: url_helper
INFO - 2019-12-18 08:01:43 --> Helper loaded: form_helper
INFO - 2019-12-18 08:01:44 --> Database Driver Class Initialized
INFO - 2019-12-18 08:01:44 --> Form Validation Class Initialized
DEBUG - 2019-12-18 08:01:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 08:01:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 08:01:44 --> Encryption Class Initialized
DEBUG - 2019-12-18 08:01:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 08:01:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 08:01:44 --> Controller Class Initialized
INFO - 2019-12-18 08:01:44 --> Model "Authors_model" initialized
INFO - 2019-12-18 08:01:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-18 08:01:44 --> Pagination Class Initialized
INFO - 2019-12-18 08:01:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-18 08:01:44 --> Final output sent to browser
DEBUG - 2019-12-18 08:01:44 --> Total execution time: 0.3920
INFO - 2019-12-18 08:01:48 --> Config Class Initialized
INFO - 2019-12-18 08:01:48 --> Hooks Class Initialized
DEBUG - 2019-12-18 08:01:48 --> UTF-8 Support Enabled
INFO - 2019-12-18 08:01:48 --> Utf8 Class Initialized
INFO - 2019-12-18 08:01:48 --> URI Class Initialized
INFO - 2019-12-18 08:01:48 --> Router Class Initialized
INFO - 2019-12-18 08:01:48 --> Output Class Initialized
INFO - 2019-12-18 08:01:48 --> Security Class Initialized
DEBUG - 2019-12-18 08:01:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 08:01:48 --> Input Class Initialized
INFO - 2019-12-18 08:01:48 --> Language Class Initialized
INFO - 2019-12-18 08:01:48 --> Loader Class Initialized
INFO - 2019-12-18 08:01:48 --> Helper loaded: html_helper
INFO - 2019-12-18 08:01:48 --> Helper loaded: url_helper
INFO - 2019-12-18 08:01:48 --> Helper loaded: form_helper
INFO - 2019-12-18 08:01:48 --> Database Driver Class Initialized
INFO - 2019-12-18 08:01:48 --> Form Validation Class Initialized
DEBUG - 2019-12-18 08:01:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 08:01:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 08:01:48 --> Encryption Class Initialized
DEBUG - 2019-12-18 08:01:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 08:01:48 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 08:01:48 --> Controller Class Initialized
INFO - 2019-12-18 08:01:48 --> Model "Authors_model" initialized
INFO - 2019-12-18 08:01:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-18 08:01:48 --> Pagination Class Initialized
INFO - 2019-12-18 08:01:48 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2019-12-18 08:01:48 --> Final output sent to browser
DEBUG - 2019-12-18 08:01:48 --> Total execution time: 0.2600
INFO - 2019-12-18 08:02:07 --> Config Class Initialized
INFO - 2019-12-18 08:02:07 --> Hooks Class Initialized
DEBUG - 2019-12-18 08:02:07 --> UTF-8 Support Enabled
INFO - 2019-12-18 08:02:07 --> Utf8 Class Initialized
INFO - 2019-12-18 08:02:07 --> URI Class Initialized
INFO - 2019-12-18 08:02:07 --> Router Class Initialized
INFO - 2019-12-18 08:02:07 --> Output Class Initialized
INFO - 2019-12-18 08:02:07 --> Security Class Initialized
DEBUG - 2019-12-18 08:02:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 08:02:07 --> Input Class Initialized
INFO - 2019-12-18 08:02:07 --> Language Class Initialized
INFO - 2019-12-18 08:02:07 --> Loader Class Initialized
INFO - 2019-12-18 08:02:07 --> Helper loaded: html_helper
INFO - 2019-12-18 08:02:07 --> Helper loaded: url_helper
INFO - 2019-12-18 08:02:07 --> Helper loaded: form_helper
INFO - 2019-12-18 08:02:07 --> Database Driver Class Initialized
INFO - 2019-12-18 08:02:07 --> Form Validation Class Initialized
DEBUG - 2019-12-18 08:02:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 08:02:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 08:02:07 --> Encryption Class Initialized
DEBUG - 2019-12-18 08:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 08:02:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 08:02:07 --> Controller Class Initialized
INFO - 2019-12-18 08:02:07 --> Model "Authors_model" initialized
INFO - 2019-12-18 08:02:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-18 08:02:07 --> Pagination Class Initialized
INFO - 2019-12-18 08:02:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-18 08:02:07 --> Final output sent to browser
DEBUG - 2019-12-18 08:02:07 --> Total execution time: 0.2175
INFO - 2019-12-18 08:02:11 --> Config Class Initialized
INFO - 2019-12-18 08:02:11 --> Hooks Class Initialized
DEBUG - 2019-12-18 08:02:11 --> UTF-8 Support Enabled
INFO - 2019-12-18 08:02:11 --> Utf8 Class Initialized
INFO - 2019-12-18 08:02:11 --> URI Class Initialized
INFO - 2019-12-18 08:02:11 --> Router Class Initialized
INFO - 2019-12-18 08:02:11 --> Output Class Initialized
INFO - 2019-12-18 08:02:11 --> Security Class Initialized
DEBUG - 2019-12-18 08:02:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 08:02:11 --> Input Class Initialized
INFO - 2019-12-18 08:02:11 --> Language Class Initialized
INFO - 2019-12-18 08:02:11 --> Loader Class Initialized
INFO - 2019-12-18 08:02:11 --> Helper loaded: html_helper
INFO - 2019-12-18 08:02:11 --> Helper loaded: url_helper
INFO - 2019-12-18 08:02:11 --> Helper loaded: form_helper
INFO - 2019-12-18 08:02:11 --> Database Driver Class Initialized
INFO - 2019-12-18 08:02:11 --> Form Validation Class Initialized
DEBUG - 2019-12-18 08:02:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 08:02:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 08:02:11 --> Encryption Class Initialized
DEBUG - 2019-12-18 08:02:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 08:02:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 08:02:11 --> Controller Class Initialized
INFO - 2019-12-18 08:02:11 --> Model "Authors_model" initialized
INFO - 2019-12-18 08:02:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-18 08:02:11 --> Pagination Class Initialized
INFO - 2019-12-18 08:02:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2019-12-18 08:02:11 --> Final output sent to browser
DEBUG - 2019-12-18 08:02:11 --> Total execution time: 0.2775
INFO - 2019-12-18 08:03:18 --> Config Class Initialized
INFO - 2019-12-18 08:03:18 --> Hooks Class Initialized
DEBUG - 2019-12-18 08:03:18 --> UTF-8 Support Enabled
INFO - 2019-12-18 08:03:18 --> Utf8 Class Initialized
INFO - 2019-12-18 08:03:18 --> URI Class Initialized
INFO - 2019-12-18 08:03:18 --> Router Class Initialized
INFO - 2019-12-18 08:03:18 --> Output Class Initialized
INFO - 2019-12-18 08:03:18 --> Security Class Initialized
DEBUG - 2019-12-18 08:03:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 08:03:18 --> Input Class Initialized
INFO - 2019-12-18 08:03:18 --> Language Class Initialized
INFO - 2019-12-18 08:03:18 --> Loader Class Initialized
INFO - 2019-12-18 08:03:18 --> Helper loaded: html_helper
INFO - 2019-12-18 08:03:18 --> Helper loaded: url_helper
INFO - 2019-12-18 08:03:18 --> Helper loaded: form_helper
INFO - 2019-12-18 08:03:18 --> Database Driver Class Initialized
INFO - 2019-12-18 08:03:19 --> Form Validation Class Initialized
DEBUG - 2019-12-18 08:03:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 08:03:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 08:03:19 --> Encryption Class Initialized
DEBUG - 2019-12-18 08:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 08:03:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 08:03:19 --> Controller Class Initialized
INFO - 2019-12-18 08:03:19 --> Helper loaded: cookie_helper
INFO - 2019-12-18 08:03:19 --> logout() called
DEBUG - 2019-12-18 08:03:19 --> loading model Active_Session
INFO - 2019-12-18 08:03:19 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 08:03:19 --> calling remove_active_session()
DEBUG - 2019-12-18 08:03:19 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 08:03:19 --> loading view welcome controller ... 
INFO - 2019-12-18 08:03:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 08:03:19 --> Final output sent to browser
DEBUG - 2019-12-18 08:03:19 --> Total execution time: 0.4645
INFO - 2019-12-18 09:40:42 --> Config Class Initialized
INFO - 2019-12-18 09:40:42 --> Hooks Class Initialized
DEBUG - 2019-12-18 09:40:42 --> UTF-8 Support Enabled
INFO - 2019-12-18 09:40:42 --> Utf8 Class Initialized
INFO - 2019-12-18 09:40:42 --> URI Class Initialized
INFO - 2019-12-18 09:40:42 --> Router Class Initialized
INFO - 2019-12-18 09:40:42 --> Output Class Initialized
INFO - 2019-12-18 09:40:42 --> Security Class Initialized
DEBUG - 2019-12-18 09:40:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 09:40:42 --> Input Class Initialized
INFO - 2019-12-18 09:40:42 --> Language Class Initialized
INFO - 2019-12-18 09:40:42 --> Loader Class Initialized
INFO - 2019-12-18 09:40:42 --> Helper loaded: html_helper
INFO - 2019-12-18 09:40:42 --> Helper loaded: url_helper
INFO - 2019-12-18 09:40:42 --> Helper loaded: form_helper
INFO - 2019-12-18 09:40:42 --> Database Driver Class Initialized
INFO - 2019-12-18 09:40:42 --> Form Validation Class Initialized
DEBUG - 2019-12-18 09:40:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 09:40:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 09:40:42 --> Encryption Class Initialized
DEBUG - 2019-12-18 09:40:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 09:40:42 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 09:40:42 --> Controller Class Initialized
INFO - 2019-12-18 09:40:42 --> Helper loaded: cookie_helper
INFO - 2019-12-18 09:40:42 --> logout() called
DEBUG - 2019-12-18 09:40:42 --> loading model Active_Session
INFO - 2019-12-18 09:40:42 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 09:40:42 --> calling remove_active_session()
DEBUG - 2019-12-18 09:40:42 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 09:40:42 --> loading view welcome controller ... 
INFO - 2019-12-18 09:40:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 09:40:42 --> Final output sent to browser
DEBUG - 2019-12-18 09:40:42 --> Total execution time: 0.0842
INFO - 2019-12-18 09:40:43 --> Config Class Initialized
INFO - 2019-12-18 09:40:43 --> Hooks Class Initialized
DEBUG - 2019-12-18 09:40:43 --> UTF-8 Support Enabled
INFO - 2019-12-18 09:40:43 --> Utf8 Class Initialized
INFO - 2019-12-18 09:40:43 --> URI Class Initialized
INFO - 2019-12-18 09:40:43 --> Router Class Initialized
INFO - 2019-12-18 09:40:43 --> Output Class Initialized
INFO - 2019-12-18 09:40:43 --> Security Class Initialized
DEBUG - 2019-12-18 09:40:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 09:40:43 --> Input Class Initialized
INFO - 2019-12-18 09:40:43 --> Language Class Initialized
INFO - 2019-12-18 09:40:43 --> Loader Class Initialized
INFO - 2019-12-18 09:40:43 --> Helper loaded: html_helper
INFO - 2019-12-18 09:40:43 --> Helper loaded: url_helper
INFO - 2019-12-18 09:40:43 --> Helper loaded: form_helper
INFO - 2019-12-18 09:40:43 --> Database Driver Class Initialized
INFO - 2019-12-18 09:40:43 --> Form Validation Class Initialized
DEBUG - 2019-12-18 09:40:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 09:40:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 09:40:43 --> Encryption Class Initialized
DEBUG - 2019-12-18 09:40:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 09:40:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 09:40:43 --> Controller Class Initialized
INFO - 2019-12-18 09:40:43 --> Helper loaded: cookie_helper
INFO - 2019-12-18 09:40:43 --> logout() called
DEBUG - 2019-12-18 09:40:43 --> loading model Active_Session
INFO - 2019-12-18 09:40:43 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 09:40:43 --> calling remove_active_session()
DEBUG - 2019-12-18 09:40:43 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 09:40:43 --> loading view welcome controller ... 
INFO - 2019-12-18 09:40:43 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 09:40:43 --> Final output sent to browser
DEBUG - 2019-12-18 09:40:43 --> Total execution time: 0.0764
INFO - 2019-12-18 09:45:49 --> Config Class Initialized
INFO - 2019-12-18 09:45:49 --> Hooks Class Initialized
DEBUG - 2019-12-18 09:45:50 --> UTF-8 Support Enabled
INFO - 2019-12-18 09:45:50 --> Utf8 Class Initialized
INFO - 2019-12-18 09:45:50 --> URI Class Initialized
INFO - 2019-12-18 09:45:50 --> Router Class Initialized
INFO - 2019-12-18 09:45:50 --> Output Class Initialized
INFO - 2019-12-18 09:45:50 --> Security Class Initialized
DEBUG - 2019-12-18 09:45:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 09:45:50 --> Input Class Initialized
INFO - 2019-12-18 09:45:50 --> Language Class Initialized
ERROR - 2019-12-18 09:45:50 --> 404 Page Not Found: Index2html/index
INFO - 2019-12-18 09:45:52 --> Config Class Initialized
INFO - 2019-12-18 09:45:52 --> Hooks Class Initialized
DEBUG - 2019-12-18 09:45:52 --> UTF-8 Support Enabled
INFO - 2019-12-18 09:45:52 --> Utf8 Class Initialized
INFO - 2019-12-18 09:45:52 --> URI Class Initialized
INFO - 2019-12-18 09:45:52 --> Router Class Initialized
INFO - 2019-12-18 09:45:52 --> Output Class Initialized
INFO - 2019-12-18 09:45:52 --> Security Class Initialized
DEBUG - 2019-12-18 09:45:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 09:45:52 --> Input Class Initialized
INFO - 2019-12-18 09:45:52 --> Language Class Initialized
INFO - 2019-12-18 09:45:52 --> Loader Class Initialized
INFO - 2019-12-18 09:45:52 --> Helper loaded: html_helper
INFO - 2019-12-18 09:45:52 --> Helper loaded: url_helper
INFO - 2019-12-18 09:45:52 --> Helper loaded: form_helper
INFO - 2019-12-18 09:45:52 --> Database Driver Class Initialized
INFO - 2019-12-18 09:45:52 --> Form Validation Class Initialized
DEBUG - 2019-12-18 09:45:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 09:45:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 09:45:52 --> Encryption Class Initialized
DEBUG - 2019-12-18 09:45:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 09:45:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 09:45:52 --> Controller Class Initialized
INFO - 2019-12-18 09:45:52 --> Helper loaded: cookie_helper
INFO - 2019-12-18 09:45:52 --> logout() called
DEBUG - 2019-12-18 09:45:52 --> loading model Active_Session
INFO - 2019-12-18 09:45:52 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 09:45:52 --> calling remove_active_session()
DEBUG - 2019-12-18 09:45:52 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 09:45:52 --> loading view welcome controller ... 
INFO - 2019-12-18 09:45:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 09:45:52 --> Final output sent to browser
DEBUG - 2019-12-18 09:45:52 --> Total execution time: 0.3459
INFO - 2019-12-18 09:46:19 --> Config Class Initialized
INFO - 2019-12-18 09:46:19 --> Hooks Class Initialized
DEBUG - 2019-12-18 09:46:19 --> UTF-8 Support Enabled
INFO - 2019-12-18 09:46:19 --> Utf8 Class Initialized
INFO - 2019-12-18 09:46:19 --> URI Class Initialized
INFO - 2019-12-18 09:46:19 --> Router Class Initialized
INFO - 2019-12-18 09:46:19 --> Output Class Initialized
INFO - 2019-12-18 09:46:19 --> Security Class Initialized
DEBUG - 2019-12-18 09:46:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 09:46:19 --> Input Class Initialized
INFO - 2019-12-18 09:46:19 --> Language Class Initialized
INFO - 2019-12-18 09:46:19 --> Loader Class Initialized
INFO - 2019-12-18 09:46:19 --> Helper loaded: html_helper
INFO - 2019-12-18 09:46:19 --> Helper loaded: url_helper
INFO - 2019-12-18 09:46:19 --> Helper loaded: form_helper
INFO - 2019-12-18 09:46:19 --> Database Driver Class Initialized
INFO - 2019-12-18 09:46:19 --> Form Validation Class Initialized
DEBUG - 2019-12-18 09:46:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 09:46:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 09:46:19 --> Encryption Class Initialized
DEBUG - 2019-12-18 09:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 09:46:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 09:46:19 --> Controller Class Initialized
INFO - 2019-12-18 09:46:19 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 09:46:19 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 09:46:19 --> getAuth method got called...
DEBUG - 2019-12-18 09:46:19 --> Username :- nirajcmhatre Password :- Test@12345
INFO - 2019-12-18 09:46:19 --> this is db user...
DEBUG - 2019-12-18 09:46:19 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 09:46:19 --> validation result=Array
(
    [id] => 17
    [user_group] => 42
    [userType] => DB
)

INFO - 2019-12-18 09:46:19 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 09:46:19 --> Role Retrive from DB
INFO - 2019-12-18 09:46:19 --> get_group_role_mapping model42
DEBUG - 2019-12-18 09:46:19 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 09:46:19 --> loading model Active_Session
INFO - 2019-12-18 09:46:19 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 09:46:19 --> calling insert_active_session()
DEBUG - 2019-12-18 09:46:19 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 09:46:19 --> insert success
DEBUG - 2019-12-18 09:46:19 --> loading Configarable_Login model...
INFO - 2019-12-18 09:46:19 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 09:46:19 --> calling countlastsevendays() method for role=VIEWUSER
DEBUG - 2019-12-18 09:46:19 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 09:46:19 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 15
            [page_name] => Config management
            [page_link] => Test/wip_page
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
            [page_link] => user/Create_User/showAllProfileData
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => VIEWUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [4] => stdClass Object
        (
            [page_id] => 28
            [page_name] => Customer Creation
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 0000-00-00 00:00:00
            [page_role] => VIEWUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

)

DEBUG - 2019-12-18 09:46:19 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 09:46:19 --> loading view public\Dashboard
INFO - 2019-12-18 09:46:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 09:46:19 --> Final output sent to browser
DEBUG - 2019-12-18 09:46:19 --> Total execution time: 0.4542
INFO - 2019-12-18 10:01:59 --> Config Class Initialized
INFO - 2019-12-18 10:01:59 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:01:59 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:01:59 --> Utf8 Class Initialized
INFO - 2019-12-18 10:01:59 --> URI Class Initialized
INFO - 2019-12-18 10:01:59 --> Router Class Initialized
INFO - 2019-12-18 10:01:59 --> Output Class Initialized
INFO - 2019-12-18 10:01:59 --> Security Class Initialized
DEBUG - 2019-12-18 10:01:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:01:59 --> Input Class Initialized
INFO - 2019-12-18 10:01:59 --> Language Class Initialized
INFO - 2019-12-18 10:01:59 --> Loader Class Initialized
INFO - 2019-12-18 10:01:59 --> Helper loaded: html_helper
INFO - 2019-12-18 10:01:59 --> Helper loaded: url_helper
INFO - 2019-12-18 10:01:59 --> Helper loaded: form_helper
INFO - 2019-12-18 10:01:59 --> Database Driver Class Initialized
INFO - 2019-12-18 10:01:59 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:01:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:01:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:01:59 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:01:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:01:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:01:59 --> Controller Class Initialized
DEBUG - 2019-12-18 10:01:59 --> Create_User constructer got called..
INFO - 2019-12-18 10:01:59 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 10:01:59 --> show all profile data modelnirajcmhatre
DEBUG - 2019-12-18 10:01:59 --> show_all_profile_data from DB retrived
INFO - 2019-12-18 10:01:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-18 10:01:59 --> Final output sent to browser
DEBUG - 2019-12-18 10:01:59 --> Total execution time: 0.3210
INFO - 2019-12-18 10:02:01 --> Config Class Initialized
INFO - 2019-12-18 10:02:01 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:02:01 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:02:01 --> Utf8 Class Initialized
INFO - 2019-12-18 10:02:01 --> URI Class Initialized
INFO - 2019-12-18 10:02:01 --> Router Class Initialized
INFO - 2019-12-18 10:02:01 --> Output Class Initialized
INFO - 2019-12-18 10:02:01 --> Security Class Initialized
DEBUG - 2019-12-18 10:02:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:02:01 --> Input Class Initialized
INFO - 2019-12-18 10:02:01 --> Language Class Initialized
INFO - 2019-12-18 10:02:01 --> Loader Class Initialized
INFO - 2019-12-18 10:02:01 --> Helper loaded: html_helper
INFO - 2019-12-18 10:02:01 --> Helper loaded: url_helper
INFO - 2019-12-18 10:02:01 --> Helper loaded: form_helper
INFO - 2019-12-18 10:02:01 --> Database Driver Class Initialized
INFO - 2019-12-18 10:02:01 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:02:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:02:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:02:01 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:02:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:02:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:02:01 --> Controller Class Initialized
DEBUG - 2019-12-18 10:02:01 --> Create_User constructer got called..
INFO - 2019-12-18 10:02:01 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 10:02:01 --> show all profile data modelnirajcmhatre
DEBUG - 2019-12-18 10:02:01 --> show_all_profile_data from DB retrived
INFO - 2019-12-18 10:02:01 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-18 10:02:01 --> Final output sent to browser
DEBUG - 2019-12-18 10:02:01 --> Total execution time: 0.2588
INFO - 2019-12-18 10:02:02 --> Config Class Initialized
INFO - 2019-12-18 10:02:02 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:02:02 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:02:02 --> Utf8 Class Initialized
INFO - 2019-12-18 10:02:02 --> URI Class Initialized
INFO - 2019-12-18 10:02:02 --> Router Class Initialized
INFO - 2019-12-18 10:02:02 --> Output Class Initialized
INFO - 2019-12-18 10:02:02 --> Security Class Initialized
DEBUG - 2019-12-18 10:02:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:02:02 --> Input Class Initialized
INFO - 2019-12-18 10:02:02 --> Language Class Initialized
INFO - 2019-12-18 10:02:02 --> Loader Class Initialized
INFO - 2019-12-18 10:02:02 --> Helper loaded: html_helper
INFO - 2019-12-18 10:02:02 --> Helper loaded: url_helper
INFO - 2019-12-18 10:02:02 --> Helper loaded: form_helper
INFO - 2019-12-18 10:02:02 --> Database Driver Class Initialized
INFO - 2019-12-18 10:02:02 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:02:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:02:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:02:02 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:02:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:02:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:02:02 --> Controller Class Initialized
DEBUG - 2019-12-18 10:02:02 --> calling constructor page Change_password
DEBUG - 2019-12-18 10:02:02 --> calling user access block = 42
DEBUG - 2019-12-18 10:02:02 --> index page Change_password
DEBUG - 2019-12-18 10:02:02 --> public/User/change_password
INFO - 2019-12-18 10:02:02 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-18 10:02:02 --> Final output sent to browser
DEBUG - 2019-12-18 10:02:02 --> Total execution time: 0.2016
INFO - 2019-12-18 10:02:04 --> Config Class Initialized
INFO - 2019-12-18 10:02:04 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:02:04 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:02:04 --> Utf8 Class Initialized
INFO - 2019-12-18 10:02:04 --> URI Class Initialized
INFO - 2019-12-18 10:02:04 --> Router Class Initialized
INFO - 2019-12-18 10:02:04 --> Output Class Initialized
INFO - 2019-12-18 10:02:04 --> Security Class Initialized
DEBUG - 2019-12-18 10:02:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:02:04 --> Input Class Initialized
INFO - 2019-12-18 10:02:04 --> Language Class Initialized
INFO - 2019-12-18 10:02:04 --> Loader Class Initialized
INFO - 2019-12-18 10:02:04 --> Helper loaded: html_helper
INFO - 2019-12-18 10:02:04 --> Helper loaded: url_helper
INFO - 2019-12-18 10:02:04 --> Helper loaded: form_helper
INFO - 2019-12-18 10:02:04 --> Database Driver Class Initialized
INFO - 2019-12-18 10:02:04 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:02:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:02:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:02:04 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:02:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:02:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:02:04 --> Controller Class Initialized
INFO - 2019-12-18 10:02:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 10:02:04 --> Final output sent to browser
DEBUG - 2019-12-18 10:02:04 --> Total execution time: 0.2688
INFO - 2019-12-18 10:02:06 --> Config Class Initialized
INFO - 2019-12-18 10:02:06 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:02:06 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:02:06 --> Utf8 Class Initialized
INFO - 2019-12-18 10:02:06 --> URI Class Initialized
INFO - 2019-12-18 10:02:06 --> Router Class Initialized
INFO - 2019-12-18 10:02:06 --> Output Class Initialized
INFO - 2019-12-18 10:02:06 --> Security Class Initialized
DEBUG - 2019-12-18 10:02:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:02:06 --> Input Class Initialized
INFO - 2019-12-18 10:02:06 --> Language Class Initialized
INFO - 2019-12-18 10:02:06 --> Loader Class Initialized
INFO - 2019-12-18 10:02:06 --> Helper loaded: html_helper
INFO - 2019-12-18 10:02:06 --> Helper loaded: url_helper
INFO - 2019-12-18 10:02:06 --> Helper loaded: form_helper
INFO - 2019-12-18 10:02:06 --> Database Driver Class Initialized
INFO - 2019-12-18 10:02:06 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:02:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:02:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:02:06 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:02:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:02:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:02:06 --> Controller Class Initialized
DEBUG - 2019-12-18 10:02:06 --> calling constructor page Change_password
DEBUG - 2019-12-18 10:02:06 --> calling user access block = 42
DEBUG - 2019-12-18 10:02:06 --> index page Change_password
DEBUG - 2019-12-18 10:02:06 --> public/User/change_password
INFO - 2019-12-18 10:02:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-18 10:02:06 --> Final output sent to browser
DEBUG - 2019-12-18 10:02:06 --> Total execution time: 0.3434
INFO - 2019-12-18 10:02:17 --> Config Class Initialized
INFO - 2019-12-18 10:02:17 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:02:17 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:02:17 --> Utf8 Class Initialized
INFO - 2019-12-18 10:02:17 --> URI Class Initialized
INFO - 2019-12-18 10:02:17 --> Router Class Initialized
INFO - 2019-12-18 10:02:17 --> Output Class Initialized
INFO - 2019-12-18 10:02:17 --> Security Class Initialized
DEBUG - 2019-12-18 10:02:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:02:17 --> Input Class Initialized
INFO - 2019-12-18 10:02:17 --> Language Class Initialized
INFO - 2019-12-18 10:02:17 --> Loader Class Initialized
INFO - 2019-12-18 10:02:17 --> Helper loaded: html_helper
INFO - 2019-12-18 10:02:17 --> Helper loaded: url_helper
INFO - 2019-12-18 10:02:17 --> Helper loaded: form_helper
INFO - 2019-12-18 10:02:17 --> Database Driver Class Initialized
INFO - 2019-12-18 10:02:17 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:02:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:02:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:02:17 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:02:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:02:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:02:17 --> Controller Class Initialized
DEBUG - 2019-12-18 10:02:17 --> calling constructor page Change_password
DEBUG - 2019-12-18 10:02:17 --> calling user access block = 42
DEBUG - 2019-12-18 10:02:17 --> index page Change_password
DEBUG - 2019-12-18 10:02:17 --> public/User/change_password
INFO - 2019-12-18 10:02:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-18 10:02:17 --> Final output sent to browser
DEBUG - 2019-12-18 10:02:17 --> Total execution time: 0.2945
INFO - 2019-12-18 10:02:19 --> Config Class Initialized
INFO - 2019-12-18 10:02:19 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:02:19 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:02:19 --> Utf8 Class Initialized
INFO - 2019-12-18 10:02:19 --> URI Class Initialized
INFO - 2019-12-18 10:02:19 --> Router Class Initialized
INFO - 2019-12-18 10:02:19 --> Output Class Initialized
INFO - 2019-12-18 10:02:19 --> Security Class Initialized
DEBUG - 2019-12-18 10:02:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:02:19 --> Input Class Initialized
INFO - 2019-12-18 10:02:19 --> Language Class Initialized
INFO - 2019-12-18 10:02:19 --> Loader Class Initialized
INFO - 2019-12-18 10:02:19 --> Helper loaded: html_helper
INFO - 2019-12-18 10:02:19 --> Helper loaded: url_helper
INFO - 2019-12-18 10:02:19 --> Helper loaded: form_helper
INFO - 2019-12-18 10:02:19 --> Database Driver Class Initialized
INFO - 2019-12-18 10:02:19 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:02:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:02:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:02:19 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:02:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:02:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:02:19 --> Controller Class Initialized
DEBUG - 2019-12-18 10:02:19 --> Create_User constructer got called..
INFO - 2019-12-18 10:02:19 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 10:02:19 --> show all profile data modelnirajcmhatre
DEBUG - 2019-12-18 10:02:19 --> show_all_profile_data from DB retrived
INFO - 2019-12-18 10:02:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-18 10:02:19 --> Final output sent to browser
DEBUG - 2019-12-18 10:02:19 --> Total execution time: 0.2471
INFO - 2019-12-18 10:02:20 --> Config Class Initialized
INFO - 2019-12-18 10:02:20 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:02:20 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:02:20 --> Utf8 Class Initialized
INFO - 2019-12-18 10:02:20 --> URI Class Initialized
INFO - 2019-12-18 10:02:20 --> Router Class Initialized
INFO - 2019-12-18 10:02:20 --> Output Class Initialized
INFO - 2019-12-18 10:02:20 --> Security Class Initialized
DEBUG - 2019-12-18 10:02:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:02:20 --> Input Class Initialized
INFO - 2019-12-18 10:02:20 --> Language Class Initialized
INFO - 2019-12-18 10:02:20 --> Loader Class Initialized
INFO - 2019-12-18 10:02:20 --> Helper loaded: html_helper
INFO - 2019-12-18 10:02:20 --> Helper loaded: url_helper
INFO - 2019-12-18 10:02:20 --> Helper loaded: form_helper
INFO - 2019-12-18 10:02:20 --> Database Driver Class Initialized
INFO - 2019-12-18 10:02:20 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:02:20 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:02:20 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:02:20 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:02:20 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:02:20 --> Controller Class Initialized
INFO - 2019-12-18 10:02:20 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 10:02:20 --> Final output sent to browser
DEBUG - 2019-12-18 10:02:20 --> Total execution time: 0.2321
INFO - 2019-12-18 10:02:21 --> Config Class Initialized
INFO - 2019-12-18 10:02:21 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:02:21 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:02:21 --> Utf8 Class Initialized
INFO - 2019-12-18 10:02:21 --> URI Class Initialized
INFO - 2019-12-18 10:02:21 --> Router Class Initialized
INFO - 2019-12-18 10:02:21 --> Output Class Initialized
INFO - 2019-12-18 10:02:21 --> Security Class Initialized
DEBUG - 2019-12-18 10:02:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:02:21 --> Input Class Initialized
INFO - 2019-12-18 10:02:21 --> Language Class Initialized
INFO - 2019-12-18 10:02:21 --> Loader Class Initialized
INFO - 2019-12-18 10:02:21 --> Helper loaded: html_helper
INFO - 2019-12-18 10:02:21 --> Helper loaded: url_helper
INFO - 2019-12-18 10:02:21 --> Helper loaded: form_helper
INFO - 2019-12-18 10:02:21 --> Database Driver Class Initialized
INFO - 2019-12-18 10:02:21 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:02:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:02:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:02:21 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:02:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:02:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:02:21 --> Controller Class Initialized
DEBUG - 2019-12-18 10:02:21 --> User_Right constructer got called..
INFO - 2019-12-18 10:02:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-18 10:02:22 --> Final output sent to browser
DEBUG - 2019-12-18 10:02:22 --> Total execution time: 0.2746
INFO - 2019-12-18 10:14:52 --> Config Class Initialized
INFO - 2019-12-18 10:14:52 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:14:52 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:14:52 --> Utf8 Class Initialized
INFO - 2019-12-18 10:14:52 --> URI Class Initialized
INFO - 2019-12-18 10:14:52 --> Router Class Initialized
INFO - 2019-12-18 10:14:52 --> Output Class Initialized
INFO - 2019-12-18 10:14:52 --> Security Class Initialized
DEBUG - 2019-12-18 10:14:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:14:52 --> Input Class Initialized
INFO - 2019-12-18 10:14:52 --> Language Class Initialized
INFO - 2019-12-18 10:14:52 --> Loader Class Initialized
INFO - 2019-12-18 10:14:52 --> Helper loaded: html_helper
INFO - 2019-12-18 10:14:52 --> Helper loaded: url_helper
INFO - 2019-12-18 10:14:52 --> Helper loaded: form_helper
INFO - 2019-12-18 10:14:52 --> Database Driver Class Initialized
INFO - 2019-12-18 10:14:52 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:14:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:14:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:14:52 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:14:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:14:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:14:52 --> Controller Class Initialized
DEBUG - 2019-12-18 10:14:52 --> User_Right constructer got called..
INFO - 2019-12-18 10:14:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-18 10:14:52 --> Final output sent to browser
DEBUG - 2019-12-18 10:14:52 --> Total execution time: 0.3269
INFO - 2019-12-18 10:14:54 --> Config Class Initialized
INFO - 2019-12-18 10:14:54 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:14:54 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:14:54 --> Utf8 Class Initialized
INFO - 2019-12-18 10:14:54 --> URI Class Initialized
INFO - 2019-12-18 10:14:54 --> Router Class Initialized
INFO - 2019-12-18 10:14:54 --> Output Class Initialized
INFO - 2019-12-18 10:14:54 --> Security Class Initialized
DEBUG - 2019-12-18 10:14:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:14:54 --> Input Class Initialized
INFO - 2019-12-18 10:14:54 --> Language Class Initialized
INFO - 2019-12-18 10:14:54 --> Loader Class Initialized
INFO - 2019-12-18 10:14:54 --> Helper loaded: html_helper
INFO - 2019-12-18 10:14:54 --> Helper loaded: url_helper
INFO - 2019-12-18 10:14:54 --> Helper loaded: form_helper
INFO - 2019-12-18 10:14:54 --> Database Driver Class Initialized
INFO - 2019-12-18 10:14:54 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:14:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:14:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:14:54 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:14:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:14:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:14:54 --> Controller Class Initialized
INFO - 2019-12-18 10:14:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 10:14:54 --> Final output sent to browser
DEBUG - 2019-12-18 10:14:54 --> Total execution time: 0.3020
INFO - 2019-12-18 10:14:56 --> Config Class Initialized
INFO - 2019-12-18 10:14:56 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:14:56 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:14:56 --> Utf8 Class Initialized
INFO - 2019-12-18 10:14:57 --> URI Class Initialized
INFO - 2019-12-18 10:14:57 --> Router Class Initialized
INFO - 2019-12-18 10:14:57 --> Output Class Initialized
INFO - 2019-12-18 10:14:57 --> Security Class Initialized
DEBUG - 2019-12-18 10:14:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:14:57 --> Input Class Initialized
INFO - 2019-12-18 10:14:57 --> Language Class Initialized
INFO - 2019-12-18 10:14:57 --> Loader Class Initialized
INFO - 2019-12-18 10:14:57 --> Helper loaded: html_helper
INFO - 2019-12-18 10:14:57 --> Helper loaded: url_helper
INFO - 2019-12-18 10:14:57 --> Helper loaded: form_helper
INFO - 2019-12-18 10:14:57 --> Database Driver Class Initialized
INFO - 2019-12-18 10:14:57 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:14:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:14:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:14:57 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:14:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:14:57 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:14:57 --> Controller Class Initialized
INFO - 2019-12-18 10:14:57 --> Helper loaded: cookie_helper
INFO - 2019-12-18 10:14:57 --> logout() called
DEBUG - 2019-12-18 10:14:57 --> loading model Active_Session
INFO - 2019-12-18 10:14:57 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 10:14:57 --> calling remove_active_session()
DEBUG - 2019-12-18 10:14:57 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-18 10:14:57 --> loading view welcome controller ... 
INFO - 2019-12-18 10:14:57 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 10:14:57 --> Final output sent to browser
DEBUG - 2019-12-18 10:14:57 --> Total execution time: 0.3095
INFO - 2019-12-18 10:15:04 --> Config Class Initialized
INFO - 2019-12-18 10:15:04 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:15:04 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:15:04 --> Utf8 Class Initialized
INFO - 2019-12-18 10:15:04 --> URI Class Initialized
INFO - 2019-12-18 10:15:04 --> Router Class Initialized
INFO - 2019-12-18 10:15:04 --> Output Class Initialized
INFO - 2019-12-18 10:15:04 --> Security Class Initialized
DEBUG - 2019-12-18 10:15:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:15:04 --> Input Class Initialized
INFO - 2019-12-18 10:15:04 --> Language Class Initialized
INFO - 2019-12-18 10:15:04 --> Loader Class Initialized
INFO - 2019-12-18 10:15:04 --> Helper loaded: html_helper
INFO - 2019-12-18 10:15:04 --> Helper loaded: url_helper
INFO - 2019-12-18 10:15:04 --> Helper loaded: form_helper
INFO - 2019-12-18 10:15:04 --> Database Driver Class Initialized
INFO - 2019-12-18 10:15:04 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:15:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:15:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:15:04 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:15:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:15:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:15:04 --> Controller Class Initialized
INFO - 2019-12-18 10:15:04 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-18 10:15:04 --> Model "User_Login_Model" initialized
INFO - 2019-12-18 10:15:04 --> getAuth method got called...
DEBUG - 2019-12-18 10:15:04 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-18 10:15:04 --> Unreachable block here....
DEBUG - 2019-12-18 10:15:04 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-18 10:15:04 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-18 10:15:04 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-18 10:15:25 -->  ldap login success
INFO - 2019-12-18 10:15:25 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-18 10:15:25 --> Role Retrive from DB
INFO - 2019-12-18 10:15:25 --> get_group_role_mapping model43
DEBUG - 2019-12-18 10:15:25 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-18 10:15:25 --> loading model Active_Session
INFO - 2019-12-18 10:15:25 --> Model "Active_Session" initialized
DEBUG - 2019-12-18 10:15:25 --> calling insert_active_session()
DEBUG - 2019-12-18 10:15:25 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-18 10:15:25 --> insert success
DEBUG - 2019-12-18 10:15:25 --> loading Configarable_Login model...
INFO - 2019-12-18 10:15:25 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-18 10:15:25 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-18 10:15:25 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-18 10:15:25 --> Array
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
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-09-15 00:30:51
            [page_role] => ADMINUSER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 11
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [4] => stdClass Object
        (
            [page_id] => 14
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-10 15:12:28
            [page_role] => ADMINUSER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 10
            [page_name] => Customer Management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 6
            [page_active] => 
            [symbol] => fas fa-fw fa-user-circle
        )

    [6] => stdClass Object
        (
            [page_id] => 12
            [page_name] => Customer Creation
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 7
            [page_active] => 
            [symbol] => fas fa-fw fa-bolt
        )

    [7] => stdClass Object
        (
            [page_id] => 13
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-09 11:10:08
            [page_role] => ADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [8] => stdClass Object
        (
            [page_id] => 24
            [page_name] => Show Sessions
            [page_link] => user/authors
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:34:01
            [page_role] => ADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

    [9] => stdClass Object
        (
            [page_id] => 27
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2019-12-17 17:46:17
            [page_role] => ADMINUSER
            [page_seq] => 10
            [page_active] => 
            [symbol] => fas fa-fw fa-outdent
        )

)

DEBUG - 2019-12-18 10:15:25 --> loading configurable menu with result=Array
DEBUG - 2019-12-18 10:15:25 --> loading view public\Dashboard
INFO - 2019-12-18 10:15:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-18 10:15:25 --> Final output sent to browser
DEBUG - 2019-12-18 10:15:25 --> Total execution time: 21.7741
INFO - 2019-12-18 10:15:34 --> Config Class Initialized
INFO - 2019-12-18 10:15:34 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:15:34 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:15:34 --> Utf8 Class Initialized
INFO - 2019-12-18 10:15:34 --> URI Class Initialized
INFO - 2019-12-18 10:15:34 --> Router Class Initialized
INFO - 2019-12-18 10:15:34 --> Output Class Initialized
INFO - 2019-12-18 10:15:34 --> Security Class Initialized
DEBUG - 2019-12-18 10:15:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:15:34 --> Input Class Initialized
INFO - 2019-12-18 10:15:34 --> Language Class Initialized
INFO - 2019-12-18 10:15:34 --> Loader Class Initialized
INFO - 2019-12-18 10:15:34 --> Helper loaded: html_helper
INFO - 2019-12-18 10:15:34 --> Helper loaded: url_helper
INFO - 2019-12-18 10:15:34 --> Helper loaded: form_helper
INFO - 2019-12-18 10:15:34 --> Database Driver Class Initialized
INFO - 2019-12-18 10:15:34 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:15:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:15:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:15:34 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:15:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:15:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:15:34 --> Controller Class Initialized
INFO - 2019-12-18 10:15:34 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-18 10:15:34 --> Final output sent to browser
DEBUG - 2019-12-18 10:15:34 --> Total execution time: 0.2446
INFO - 2019-12-18 10:15:37 --> Config Class Initialized
INFO - 2019-12-18 10:15:37 --> Hooks Class Initialized
DEBUG - 2019-12-18 10:15:37 --> UTF-8 Support Enabled
INFO - 2019-12-18 10:15:37 --> Utf8 Class Initialized
INFO - 2019-12-18 10:15:37 --> URI Class Initialized
INFO - 2019-12-18 10:15:37 --> Router Class Initialized
INFO - 2019-12-18 10:15:37 --> Output Class Initialized
INFO - 2019-12-18 10:15:37 --> Security Class Initialized
DEBUG - 2019-12-18 10:15:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 10:15:37 --> Input Class Initialized
INFO - 2019-12-18 10:15:37 --> Language Class Initialized
INFO - 2019-12-18 10:15:37 --> Loader Class Initialized
INFO - 2019-12-18 10:15:37 --> Helper loaded: html_helper
INFO - 2019-12-18 10:15:37 --> Helper loaded: url_helper
INFO - 2019-12-18 10:15:37 --> Helper loaded: form_helper
INFO - 2019-12-18 10:15:37 --> Database Driver Class Initialized
INFO - 2019-12-18 10:15:37 --> Form Validation Class Initialized
DEBUG - 2019-12-18 10:15:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 10:15:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 10:15:37 --> Encryption Class Initialized
DEBUG - 2019-12-18 10:15:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 10:15:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 10:15:37 --> Controller Class Initialized
DEBUG - 2019-12-18 10:15:37 --> Create_User constructer got called..
DEBUG - 2019-12-18 10:15:37 --> loading configurable menu with result=
INFO - 2019-12-18 10:15:37 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-18 10:15:37 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-18 10:15:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-18 10:15:37 --> Final output sent to browser
DEBUG - 2019-12-18 10:15:37 --> Total execution time: 0.3394
INFO - 2019-12-18 12:06:23 --> Config Class Initialized
INFO - 2019-12-18 12:06:23 --> Hooks Class Initialized
DEBUG - 2019-12-18 12:06:23 --> UTF-8 Support Enabled
INFO - 2019-12-18 12:06:23 --> Utf8 Class Initialized
INFO - 2019-12-18 12:06:23 --> URI Class Initialized
DEBUG - 2019-12-18 12:06:23 --> No URI present. Default controller set.
INFO - 2019-12-18 12:06:23 --> Router Class Initialized
INFO - 2019-12-18 12:06:23 --> Output Class Initialized
INFO - 2019-12-18 12:06:23 --> Security Class Initialized
DEBUG - 2019-12-18 12:06:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 12:06:23 --> Input Class Initialized
INFO - 2019-12-18 12:06:23 --> Language Class Initialized
INFO - 2019-12-18 12:06:23 --> Loader Class Initialized
INFO - 2019-12-18 12:06:23 --> Helper loaded: html_helper
INFO - 2019-12-18 12:06:23 --> Helper loaded: url_helper
INFO - 2019-12-18 12:06:23 --> Helper loaded: form_helper
INFO - 2019-12-18 12:06:23 --> Database Driver Class Initialized
INFO - 2019-12-18 12:06:23 --> Form Validation Class Initialized
DEBUG - 2019-12-18 12:06:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 12:06:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 12:06:23 --> Encryption Class Initialized
DEBUG - 2019-12-18 12:06:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 12:06:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 12:06:23 --> Controller Class Initialized
INFO - 2019-12-18 12:06:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 12:06:23 --> Final output sent to browser
DEBUG - 2019-12-18 12:06:23 --> Total execution time: 0.0565
INFO - 2019-12-18 12:06:35 --> Config Class Initialized
INFO - 2019-12-18 12:06:35 --> Hooks Class Initialized
DEBUG - 2019-12-18 12:06:35 --> UTF-8 Support Enabled
INFO - 2019-12-18 12:06:35 --> Utf8 Class Initialized
INFO - 2019-12-18 12:06:35 --> URI Class Initialized
DEBUG - 2019-12-18 12:06:35 --> No URI present. Default controller set.
INFO - 2019-12-18 12:06:35 --> Router Class Initialized
INFO - 2019-12-18 12:06:35 --> Output Class Initialized
INFO - 2019-12-18 12:06:35 --> Security Class Initialized
DEBUG - 2019-12-18 12:06:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 12:06:35 --> Input Class Initialized
INFO - 2019-12-18 12:06:35 --> Language Class Initialized
INFO - 2019-12-18 12:06:35 --> Loader Class Initialized
INFO - 2019-12-18 12:06:35 --> Helper loaded: html_helper
INFO - 2019-12-18 12:06:35 --> Helper loaded: url_helper
INFO - 2019-12-18 12:06:35 --> Helper loaded: form_helper
INFO - 2019-12-18 12:06:35 --> Database Driver Class Initialized
INFO - 2019-12-18 12:06:35 --> Form Validation Class Initialized
DEBUG - 2019-12-18 12:06:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 12:06:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 12:06:35 --> Encryption Class Initialized
DEBUG - 2019-12-18 12:06:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 12:06:35 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 12:06:35 --> Controller Class Initialized
INFO - 2019-12-18 12:06:35 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 12:06:35 --> Final output sent to browser
DEBUG - 2019-12-18 12:06:35 --> Total execution time: 0.0517
INFO - 2019-12-18 12:07:16 --> Config Class Initialized
INFO - 2019-12-18 12:07:16 --> Hooks Class Initialized
DEBUG - 2019-12-18 12:07:16 --> UTF-8 Support Enabled
INFO - 2019-12-18 12:07:16 --> Utf8 Class Initialized
INFO - 2019-12-18 12:07:16 --> URI Class Initialized
DEBUG - 2019-12-18 12:07:16 --> No URI present. Default controller set.
INFO - 2019-12-18 12:07:16 --> Router Class Initialized
INFO - 2019-12-18 12:07:16 --> Output Class Initialized
INFO - 2019-12-18 12:07:16 --> Security Class Initialized
DEBUG - 2019-12-18 12:07:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-18 12:07:16 --> Input Class Initialized
INFO - 2019-12-18 12:07:16 --> Language Class Initialized
INFO - 2019-12-18 12:07:16 --> Loader Class Initialized
INFO - 2019-12-18 12:07:16 --> Helper loaded: html_helper
INFO - 2019-12-18 12:07:16 --> Helper loaded: url_helper
INFO - 2019-12-18 12:07:16 --> Helper loaded: form_helper
INFO - 2019-12-18 12:07:16 --> Database Driver Class Initialized
INFO - 2019-12-18 12:07:16 --> Form Validation Class Initialized
DEBUG - 2019-12-18 12:07:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-18 12:07:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-18 12:07:16 --> Encryption Class Initialized
DEBUG - 2019-12-18 12:07:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-18 12:07:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-18 12:07:16 --> Controller Class Initialized
INFO - 2019-12-18 12:07:16 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-18 12:07:16 --> Final output sent to browser
DEBUG - 2019-12-18 12:07:16 --> Total execution time: 0.0504
