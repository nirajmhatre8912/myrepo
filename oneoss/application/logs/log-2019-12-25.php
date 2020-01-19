<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-12-25 14:20:21 --> Config Class Initialized
INFO - 2019-12-25 14:20:21 --> Hooks Class Initialized
DEBUG - 2019-12-25 14:20:21 --> UTF-8 Support Enabled
INFO - 2019-12-25 14:20:21 --> Utf8 Class Initialized
INFO - 2019-12-25 14:20:21 --> URI Class Initialized
DEBUG - 2019-12-25 14:20:21 --> No URI present. Default controller set.
INFO - 2019-12-25 14:20:21 --> Router Class Initialized
INFO - 2019-12-25 14:20:21 --> Output Class Initialized
INFO - 2019-12-25 14:20:21 --> Security Class Initialized
DEBUG - 2019-12-25 14:20:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 14:20:21 --> Input Class Initialized
INFO - 2019-12-25 14:20:21 --> Language Class Initialized
INFO - 2019-12-25 14:20:22 --> Loader Class Initialized
INFO - 2019-12-25 14:20:22 --> Helper loaded: html_helper
INFO - 2019-12-25 14:20:22 --> Helper loaded: url_helper
INFO - 2019-12-25 14:20:22 --> Helper loaded: form_helper
INFO - 2019-12-25 14:20:22 --> Database Driver Class Initialized
INFO - 2019-12-25 14:20:22 --> Form Validation Class Initialized
DEBUG - 2019-12-25 14:20:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 14:20:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 14:20:22 --> Encryption Class Initialized
DEBUG - 2019-12-25 14:20:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 14:20:22 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 14:20:22 --> Controller Class Initialized
INFO - 2019-12-25 14:20:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-25 14:20:22 --> Final output sent to browser
DEBUG - 2019-12-25 14:20:22 --> Total execution time: 0.5290
INFO - 2019-12-25 14:20:34 --> Config Class Initialized
INFO - 2019-12-25 14:20:34 --> Hooks Class Initialized
DEBUG - 2019-12-25 14:20:34 --> UTF-8 Support Enabled
INFO - 2019-12-25 14:20:34 --> Utf8 Class Initialized
INFO - 2019-12-25 14:20:34 --> URI Class Initialized
INFO - 2019-12-25 14:20:34 --> Router Class Initialized
INFO - 2019-12-25 14:20:34 --> Output Class Initialized
INFO - 2019-12-25 14:20:34 --> Security Class Initialized
DEBUG - 2019-12-25 14:20:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 14:20:34 --> Input Class Initialized
INFO - 2019-12-25 14:20:34 --> Language Class Initialized
INFO - 2019-12-25 14:20:34 --> Loader Class Initialized
INFO - 2019-12-25 14:20:34 --> Helper loaded: html_helper
INFO - 2019-12-25 14:20:34 --> Helper loaded: url_helper
INFO - 2019-12-25 14:20:34 --> Helper loaded: form_helper
INFO - 2019-12-25 14:20:34 --> Database Driver Class Initialized
INFO - 2019-12-25 14:20:34 --> Form Validation Class Initialized
DEBUG - 2019-12-25 14:20:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 14:20:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 14:20:34 --> Encryption Class Initialized
DEBUG - 2019-12-25 14:20:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 14:20:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 14:20:34 --> Controller Class Initialized
INFO - 2019-12-25 14:20:34 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-25 14:20:34 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 14:20:34 --> getAuth method got called...
DEBUG - 2019-12-25 14:20:34 --> Username :- DevOss
INFO - 2019-12-25 14:20:34 --> this is db user...
DEBUG - 2019-12-25 14:20:34 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-25 14:20:34 --> Password hashing output = $2y$10$q8LPFvtThrAi112ISVkcmO383I609.j5elPcCET0V6bEmncYnLN5W
DEBUG - 2019-12-25 14:20:34 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
DEBUG - 2019-12-25 14:20:34 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2019-12-25 14:20:34 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-25 14:20:34 --> Role Retrive from DB
INFO - 2019-12-25 14:20:34 --> get_group_role_mapping model = 16
DEBUG - 2019-12-25 14:20:35 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-25 14:20:35 --> loading model Active_Session
INFO - 2019-12-25 14:20:35 --> Model "Active_Session" initialized
DEBUG - 2019-12-25 14:20:35 --> calling insert_active_session()
DEBUG - 2019-12-25 14:20:35 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-25 14:20:35 --> insert success
DEBUG - 2019-12-25 14:20:35 --> loading Configarable_Login model...
INFO - 2019-12-25 14:20:35 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-25 14:20:35 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-25 14:20:35 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-25 14:20:35 --> Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 14:20:35 --> loading configurable menu with result=Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 14:20:35 --> loading view public\Dashboard
INFO - 2019-12-25 14:20:35 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-25 14:20:35 --> Final output sent to browser
DEBUG - 2019-12-25 14:20:35 --> Total execution time: 1.2071
INFO - 2019-12-25 14:20:55 --> Config Class Initialized
INFO - 2019-12-25 14:20:55 --> Hooks Class Initialized
DEBUG - 2019-12-25 14:20:55 --> UTF-8 Support Enabled
INFO - 2019-12-25 14:20:55 --> Utf8 Class Initialized
INFO - 2019-12-25 14:20:55 --> URI Class Initialized
INFO - 2019-12-25 14:20:55 --> Router Class Initialized
INFO - 2019-12-25 14:20:55 --> Output Class Initialized
INFO - 2019-12-25 14:20:55 --> Security Class Initialized
DEBUG - 2019-12-25 14:20:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 14:20:55 --> Input Class Initialized
INFO - 2019-12-25 14:20:55 --> Language Class Initialized
INFO - 2019-12-25 14:20:55 --> Loader Class Initialized
INFO - 2019-12-25 14:20:55 --> Helper loaded: html_helper
INFO - 2019-12-25 14:20:55 --> Helper loaded: url_helper
INFO - 2019-12-25 14:20:55 --> Helper loaded: form_helper
INFO - 2019-12-25 14:20:55 --> Database Driver Class Initialized
INFO - 2019-12-25 14:20:55 --> Form Validation Class Initialized
DEBUG - 2019-12-25 14:20:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 14:20:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 14:20:55 --> Encryption Class Initialized
DEBUG - 2019-12-25 14:20:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 14:20:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 14:20:55 --> Controller Class Initialized
DEBUG - 2019-12-25 14:20:55 --> Create_User constructer got called..
INFO - 2019-12-25 14:20:55 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 14:20:55 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 14:20:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-25 14:20:55 --> Final output sent to browser
DEBUG - 2019-12-25 14:20:55 --> Total execution time: 0.2970
INFO - 2019-12-25 14:20:58 --> Config Class Initialized
INFO - 2019-12-25 14:20:58 --> Hooks Class Initialized
DEBUG - 2019-12-25 14:20:58 --> UTF-8 Support Enabled
INFO - 2019-12-25 14:20:58 --> Utf8 Class Initialized
INFO - 2019-12-25 14:20:58 --> URI Class Initialized
INFO - 2019-12-25 14:20:58 --> Router Class Initialized
INFO - 2019-12-25 14:20:58 --> Output Class Initialized
INFO - 2019-12-25 14:20:58 --> Security Class Initialized
DEBUG - 2019-12-25 14:20:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 14:20:58 --> Input Class Initialized
INFO - 2019-12-25 14:20:58 --> Language Class Initialized
INFO - 2019-12-25 14:20:58 --> Loader Class Initialized
INFO - 2019-12-25 14:20:58 --> Helper loaded: html_helper
INFO - 2019-12-25 14:20:58 --> Helper loaded: url_helper
INFO - 2019-12-25 14:20:58 --> Helper loaded: form_helper
INFO - 2019-12-25 14:20:58 --> Database Driver Class Initialized
INFO - 2019-12-25 14:20:58 --> Form Validation Class Initialized
DEBUG - 2019-12-25 14:20:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 14:20:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 14:20:58 --> Encryption Class Initialized
DEBUG - 2019-12-25 14:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 14:20:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 14:20:58 --> Controller Class Initialized
DEBUG - 2019-12-25 14:20:58 --> Create_User constructer got called..
ERROR - 2019-12-25 14:20:58 --> Severity: Notice --> Undefined variable: grp_names C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 214
ERROR - 2019-12-25 14:20:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 214
ERROR - 2019-12-25 14:20:58 --> Severity: Notice --> Undefined variable: roledesc C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 262
ERROR - 2019-12-25 14:20:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 262
INFO - 2019-12-25 14:20:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 14:20:58 --> Final output sent to browser
DEBUG - 2019-12-25 14:20:58 --> Total execution time: 0.3540
INFO - 2019-12-25 14:22:20 --> Config Class Initialized
INFO - 2019-12-25 14:22:20 --> Hooks Class Initialized
DEBUG - 2019-12-25 14:22:20 --> UTF-8 Support Enabled
INFO - 2019-12-25 14:22:20 --> Utf8 Class Initialized
INFO - 2019-12-25 14:22:20 --> URI Class Initialized
INFO - 2019-12-25 14:22:20 --> Router Class Initialized
INFO - 2019-12-25 14:22:20 --> Output Class Initialized
INFO - 2019-12-25 14:22:20 --> Security Class Initialized
DEBUG - 2019-12-25 14:22:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 14:22:20 --> Input Class Initialized
INFO - 2019-12-25 14:22:20 --> Language Class Initialized
INFO - 2019-12-25 14:22:20 --> Loader Class Initialized
INFO - 2019-12-25 14:22:20 --> Helper loaded: html_helper
INFO - 2019-12-25 14:22:20 --> Helper loaded: url_helper
INFO - 2019-12-25 14:22:20 --> Helper loaded: form_helper
INFO - 2019-12-25 14:22:20 --> Database Driver Class Initialized
INFO - 2019-12-25 14:22:20 --> Form Validation Class Initialized
DEBUG - 2019-12-25 14:22:20 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 14:22:20 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 14:22:20 --> Encryption Class Initialized
DEBUG - 2019-12-25 14:22:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 14:22:20 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 14:22:20 --> Controller Class Initialized
DEBUG - 2019-12-25 14:22:20 --> Create_User constructer got called..
INFO - 2019-12-25 14:22:20 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 14:22:20 --> getAllSubgroup model
DEBUG - 2019-12-25 14:22:20 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 14:22:20 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 14:22:20 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 14:22:20 --> Final output sent to browser
DEBUG - 2019-12-25 14:22:20 --> Total execution time: 0.2640
INFO - 2019-12-25 14:23:07 --> Config Class Initialized
INFO - 2019-12-25 14:23:07 --> Hooks Class Initialized
DEBUG - 2019-12-25 14:23:07 --> UTF-8 Support Enabled
INFO - 2019-12-25 14:23:07 --> Utf8 Class Initialized
INFO - 2019-12-25 14:23:07 --> URI Class Initialized
INFO - 2019-12-25 14:23:07 --> Router Class Initialized
INFO - 2019-12-25 14:23:07 --> Output Class Initialized
INFO - 2019-12-25 14:23:07 --> Security Class Initialized
DEBUG - 2019-12-25 14:23:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 14:23:07 --> Input Class Initialized
INFO - 2019-12-25 14:23:07 --> Language Class Initialized
INFO - 2019-12-25 14:23:07 --> Loader Class Initialized
INFO - 2019-12-25 14:23:07 --> Helper loaded: html_helper
INFO - 2019-12-25 14:23:07 --> Helper loaded: url_helper
INFO - 2019-12-25 14:23:07 --> Helper loaded: form_helper
INFO - 2019-12-25 14:23:07 --> Database Driver Class Initialized
INFO - 2019-12-25 14:23:07 --> Form Validation Class Initialized
DEBUG - 2019-12-25 14:23:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 14:23:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 14:23:07 --> Encryption Class Initialized
DEBUG - 2019-12-25 14:23:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 14:23:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 14:23:07 --> Controller Class Initialized
DEBUG - 2019-12-25 14:23:07 --> Create_User constructer got called..
INFO - 2019-12-25 14:23:07 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 14:23:07 --> get_group_role_mapping model = 52
DEBUG - 2019-12-25 14:23:07 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 14:23:07 --> Final output sent to browser
DEBUG - 2019-12-25 14:23:07 --> Total execution time: 0.2110
INFO - 2019-12-25 14:23:07 --> Config Class Initialized
INFO - 2019-12-25 14:23:07 --> Hooks Class Initialized
DEBUG - 2019-12-25 14:23:07 --> UTF-8 Support Enabled
INFO - 2019-12-25 14:23:07 --> Utf8 Class Initialized
INFO - 2019-12-25 14:23:07 --> URI Class Initialized
INFO - 2019-12-25 14:23:07 --> Router Class Initialized
INFO - 2019-12-25 14:23:07 --> Output Class Initialized
INFO - 2019-12-25 14:23:07 --> Security Class Initialized
DEBUG - 2019-12-25 14:23:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 14:23:07 --> Input Class Initialized
INFO - 2019-12-25 14:23:07 --> Language Class Initialized
INFO - 2019-12-25 14:23:07 --> Loader Class Initialized
INFO - 2019-12-25 14:23:07 --> Helper loaded: html_helper
INFO - 2019-12-25 14:23:07 --> Helper loaded: url_helper
INFO - 2019-12-25 14:23:07 --> Helper loaded: form_helper
INFO - 2019-12-25 14:23:07 --> Database Driver Class Initialized
INFO - 2019-12-25 14:23:07 --> Form Validation Class Initialized
DEBUG - 2019-12-25 14:23:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 14:23:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 14:23:07 --> Encryption Class Initialized
DEBUG - 2019-12-25 14:23:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 14:23:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 14:23:07 --> Controller Class Initialized
DEBUG - 2019-12-25 14:23:07 --> Create_User constructer got called..
INFO - 2019-12-25 14:23:07 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 14:23:07 --> getAllSubGroupData model = 16
DEBUG - 2019-12-25 14:23:07 --> getAllSubGroupData from DB retrived
INFO - 2019-12-25 14:23:07 --> Final output sent to browser
DEBUG - 2019-12-25 14:23:07 --> Total execution time: 0.1640
INFO - 2019-12-25 14:47:53 --> Config Class Initialized
INFO - 2019-12-25 14:47:53 --> Hooks Class Initialized
DEBUG - 2019-12-25 14:47:53 --> UTF-8 Support Enabled
INFO - 2019-12-25 14:47:53 --> Utf8 Class Initialized
INFO - 2019-12-25 14:47:53 --> URI Class Initialized
INFO - 2019-12-25 14:47:53 --> Router Class Initialized
INFO - 2019-12-25 14:47:53 --> Output Class Initialized
INFO - 2019-12-25 14:47:53 --> Security Class Initialized
DEBUG - 2019-12-25 14:47:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 14:47:53 --> Input Class Initialized
INFO - 2019-12-25 14:47:53 --> Language Class Initialized
INFO - 2019-12-25 14:47:53 --> Loader Class Initialized
INFO - 2019-12-25 14:47:53 --> Helper loaded: html_helper
INFO - 2019-12-25 14:47:53 --> Helper loaded: url_helper
INFO - 2019-12-25 14:47:53 --> Helper loaded: form_helper
INFO - 2019-12-25 14:47:53 --> Database Driver Class Initialized
INFO - 2019-12-25 14:47:53 --> Form Validation Class Initialized
DEBUG - 2019-12-25 14:47:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 14:47:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 14:47:53 --> Encryption Class Initialized
DEBUG - 2019-12-25 14:47:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 14:47:53 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 14:47:53 --> Controller Class Initialized
DEBUG - 2019-12-25 14:47:53 --> Create_User constructer got called..
INFO - 2019-12-25 14:47:53 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 14:47:53 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 14:47:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-25 14:47:53 --> Final output sent to browser
DEBUG - 2019-12-25 14:47:53 --> Total execution time: 0.2500
INFO - 2019-12-25 14:49:08 --> Config Class Initialized
INFO - 2019-12-25 14:49:08 --> Hooks Class Initialized
DEBUG - 2019-12-25 14:49:08 --> UTF-8 Support Enabled
INFO - 2019-12-25 14:49:08 --> Utf8 Class Initialized
INFO - 2019-12-25 14:49:08 --> URI Class Initialized
INFO - 2019-12-25 14:49:08 --> Router Class Initialized
INFO - 2019-12-25 14:49:08 --> Output Class Initialized
INFO - 2019-12-25 14:49:08 --> Security Class Initialized
DEBUG - 2019-12-25 14:49:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 14:49:08 --> Input Class Initialized
INFO - 2019-12-25 14:49:08 --> Language Class Initialized
INFO - 2019-12-25 14:49:08 --> Loader Class Initialized
INFO - 2019-12-25 14:49:08 --> Helper loaded: html_helper
INFO - 2019-12-25 14:49:08 --> Helper loaded: url_helper
INFO - 2019-12-25 14:49:08 --> Helper loaded: form_helper
INFO - 2019-12-25 14:49:08 --> Database Driver Class Initialized
INFO - 2019-12-25 14:49:08 --> Form Validation Class Initialized
DEBUG - 2019-12-25 14:49:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 14:49:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 14:49:08 --> Encryption Class Initialized
DEBUG - 2019-12-25 14:49:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 14:49:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 14:49:08 --> Controller Class Initialized
DEBUG - 2019-12-25 14:49:08 --> Create_User constructer got called..
ERROR - 2019-12-25 14:49:08 --> Severity: Notice --> Undefined variable: grp_names C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 214
ERROR - 2019-12-25 14:49:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 214
ERROR - 2019-12-25 14:49:08 --> Severity: Notice --> Undefined variable: roledesc C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 262
ERROR - 2019-12-25 14:49:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 262
INFO - 2019-12-25 14:49:08 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 14:49:08 --> Final output sent to browser
DEBUG - 2019-12-25 14:49:08 --> Total execution time: 0.2370
INFO - 2019-12-25 14:50:06 --> Config Class Initialized
INFO - 2019-12-25 14:50:06 --> Hooks Class Initialized
DEBUG - 2019-12-25 14:50:06 --> UTF-8 Support Enabled
INFO - 2019-12-25 14:50:06 --> Utf8 Class Initialized
INFO - 2019-12-25 14:50:06 --> URI Class Initialized
INFO - 2019-12-25 14:50:06 --> Router Class Initialized
INFO - 2019-12-25 14:50:06 --> Output Class Initialized
INFO - 2019-12-25 14:50:06 --> Security Class Initialized
DEBUG - 2019-12-25 14:50:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 14:50:06 --> Input Class Initialized
INFO - 2019-12-25 14:50:06 --> Language Class Initialized
INFO - 2019-12-25 14:50:06 --> Loader Class Initialized
INFO - 2019-12-25 14:50:06 --> Helper loaded: html_helper
INFO - 2019-12-25 14:50:06 --> Helper loaded: url_helper
INFO - 2019-12-25 14:50:06 --> Helper loaded: form_helper
INFO - 2019-12-25 14:50:06 --> Database Driver Class Initialized
INFO - 2019-12-25 14:50:06 --> Form Validation Class Initialized
DEBUG - 2019-12-25 14:50:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 14:50:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 14:50:06 --> Encryption Class Initialized
DEBUG - 2019-12-25 14:50:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 14:50:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 14:50:06 --> Controller Class Initialized
DEBUG - 2019-12-25 14:50:06 --> Create_User constructer got called..
ERROR - 2019-12-25 14:50:06 --> Severity: Notice --> Undefined variable: grp_names C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 214
ERROR - 2019-12-25 14:50:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 214
ERROR - 2019-12-25 14:50:06 --> Severity: Notice --> Undefined variable: roledesc C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 262
ERROR - 2019-12-25 14:50:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\oneoss\application\views\public\User\uiprofile.php 262
INFO - 2019-12-25 14:50:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 14:50:07 --> Final output sent to browser
DEBUG - 2019-12-25 14:50:07 --> Total execution time: 0.2960
INFO - 2019-12-25 15:01:42 --> Config Class Initialized
INFO - 2019-12-25 15:01:42 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:01:42 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:01:42 --> Utf8 Class Initialized
INFO - 2019-12-25 15:01:42 --> URI Class Initialized
INFO - 2019-12-25 15:01:42 --> Router Class Initialized
INFO - 2019-12-25 15:01:42 --> Output Class Initialized
INFO - 2019-12-25 15:01:42 --> Security Class Initialized
DEBUG - 2019-12-25 15:01:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:01:42 --> Input Class Initialized
INFO - 2019-12-25 15:01:42 --> Language Class Initialized
INFO - 2019-12-25 15:01:42 --> Loader Class Initialized
INFO - 2019-12-25 15:01:42 --> Helper loaded: html_helper
INFO - 2019-12-25 15:01:42 --> Helper loaded: url_helper
INFO - 2019-12-25 15:01:42 --> Helper loaded: form_helper
INFO - 2019-12-25 15:01:42 --> Database Driver Class Initialized
INFO - 2019-12-25 15:01:42 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:01:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:01:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:01:42 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:01:42 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:01:42 --> Controller Class Initialized
DEBUG - 2019-12-25 15:01:42 --> Create_User constructer got called..
INFO - 2019-12-25 15:01:42 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:01:42 --> getAllSubgroup model
DEBUG - 2019-12-25 15:01:42 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:01:42 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:01:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 15:01:42 --> Final output sent to browser
DEBUG - 2019-12-25 15:01:42 --> Total execution time: 0.2880
INFO - 2019-12-25 15:06:05 --> Config Class Initialized
INFO - 2019-12-25 15:06:05 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:06:05 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:06:05 --> Utf8 Class Initialized
INFO - 2019-12-25 15:06:05 --> URI Class Initialized
INFO - 2019-12-25 15:06:05 --> Router Class Initialized
INFO - 2019-12-25 15:06:05 --> Output Class Initialized
INFO - 2019-12-25 15:06:05 --> Security Class Initialized
DEBUG - 2019-12-25 15:06:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:06:05 --> Input Class Initialized
INFO - 2019-12-25 15:06:05 --> Language Class Initialized
INFO - 2019-12-25 15:06:05 --> Loader Class Initialized
INFO - 2019-12-25 15:06:05 --> Helper loaded: html_helper
INFO - 2019-12-25 15:06:05 --> Helper loaded: url_helper
INFO - 2019-12-25 15:06:05 --> Helper loaded: form_helper
INFO - 2019-12-25 15:06:06 --> Database Driver Class Initialized
INFO - 2019-12-25 15:06:06 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:06:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:06:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:06:06 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:06:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:06:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:06:06 --> Controller Class Initialized
DEBUG - 2019-12-25 15:06:06 --> Create_User constructer got called..
INFO - 2019-12-25 15:06:06 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:06:06 --> getAllSubgroup model
DEBUG - 2019-12-25 15:06:06 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:06:06 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:06:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 15:06:06 --> Final output sent to browser
DEBUG - 2019-12-25 15:06:06 --> Total execution time: 0.3060
INFO - 2019-12-25 15:06:12 --> Config Class Initialized
INFO - 2019-12-25 15:06:12 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:06:12 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:06:12 --> Utf8 Class Initialized
INFO - 2019-12-25 15:06:12 --> URI Class Initialized
INFO - 2019-12-25 15:06:12 --> Router Class Initialized
INFO - 2019-12-25 15:06:12 --> Output Class Initialized
INFO - 2019-12-25 15:06:12 --> Security Class Initialized
DEBUG - 2019-12-25 15:06:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:06:12 --> Input Class Initialized
INFO - 2019-12-25 15:06:12 --> Language Class Initialized
INFO - 2019-12-25 15:06:12 --> Loader Class Initialized
INFO - 2019-12-25 15:06:12 --> Helper loaded: html_helper
INFO - 2019-12-25 15:06:12 --> Helper loaded: url_helper
INFO - 2019-12-25 15:06:12 --> Helper loaded: form_helper
INFO - 2019-12-25 15:06:12 --> Database Driver Class Initialized
INFO - 2019-12-25 15:06:12 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:06:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:06:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:06:12 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:06:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:06:12 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:06:12 --> Controller Class Initialized
DEBUG - 2019-12-25 15:06:12 --> Create_User constructer got called..
INFO - 2019-12-25 15:06:12 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:06:12 --> get_group_role_mapping model = 43
DEBUG - 2019-12-25 15:06:12 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 15:06:12 --> Final output sent to browser
DEBUG - 2019-12-25 15:06:12 --> Total execution time: 0.2610
INFO - 2019-12-25 15:07:56 --> Config Class Initialized
INFO - 2019-12-25 15:07:56 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:07:56 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:07:56 --> Utf8 Class Initialized
INFO - 2019-12-25 15:07:56 --> URI Class Initialized
INFO - 2019-12-25 15:07:56 --> Router Class Initialized
INFO - 2019-12-25 15:07:56 --> Output Class Initialized
INFO - 2019-12-25 15:07:56 --> Security Class Initialized
DEBUG - 2019-12-25 15:07:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:07:56 --> Input Class Initialized
INFO - 2019-12-25 15:07:56 --> Language Class Initialized
INFO - 2019-12-25 15:07:56 --> Loader Class Initialized
INFO - 2019-12-25 15:07:56 --> Helper loaded: html_helper
INFO - 2019-12-25 15:07:56 --> Helper loaded: url_helper
INFO - 2019-12-25 15:07:56 --> Helper loaded: form_helper
INFO - 2019-12-25 15:07:56 --> Database Driver Class Initialized
INFO - 2019-12-25 15:07:56 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:07:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:07:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:07:56 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:07:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:07:56 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:07:56 --> Controller Class Initialized
DEBUG - 2019-12-25 15:07:56 --> Create_User constructer got called..
INFO - 2019-12-25 15:07:56 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:07:56 --> getAllSubgroup model
DEBUG - 2019-12-25 15:07:56 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:07:56 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:07:56 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 15:07:56 --> Final output sent to browser
DEBUG - 2019-12-25 15:07:56 --> Total execution time: 0.3230
INFO - 2019-12-25 15:08:01 --> Config Class Initialized
INFO - 2019-12-25 15:08:01 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:08:01 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:08:01 --> Utf8 Class Initialized
INFO - 2019-12-25 15:08:01 --> URI Class Initialized
INFO - 2019-12-25 15:08:01 --> Router Class Initialized
INFO - 2019-12-25 15:08:01 --> Output Class Initialized
INFO - 2019-12-25 15:08:01 --> Security Class Initialized
DEBUG - 2019-12-25 15:08:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:08:01 --> Input Class Initialized
INFO - 2019-12-25 15:08:01 --> Language Class Initialized
INFO - 2019-12-25 15:08:01 --> Loader Class Initialized
INFO - 2019-12-25 15:08:01 --> Helper loaded: html_helper
INFO - 2019-12-25 15:08:01 --> Helper loaded: url_helper
INFO - 2019-12-25 15:08:01 --> Helper loaded: form_helper
INFO - 2019-12-25 15:08:01 --> Database Driver Class Initialized
INFO - 2019-12-25 15:08:01 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:08:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:08:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:08:01 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:08:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:08:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:08:01 --> Controller Class Initialized
DEBUG - 2019-12-25 15:08:01 --> Create_User constructer got called..
INFO - 2019-12-25 15:08:01 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:08:01 --> get_group_role_mapping model = 43
DEBUG - 2019-12-25 15:08:01 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 15:08:01 --> Final output sent to browser
DEBUG - 2019-12-25 15:08:01 --> Total execution time: 0.2760
INFO - 2019-12-25 15:08:01 --> Config Class Initialized
INFO - 2019-12-25 15:08:01 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:08:01 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:08:01 --> Utf8 Class Initialized
INFO - 2019-12-25 15:08:01 --> URI Class Initialized
INFO - 2019-12-25 15:08:01 --> Router Class Initialized
INFO - 2019-12-25 15:08:01 --> Output Class Initialized
INFO - 2019-12-25 15:08:01 --> Security Class Initialized
DEBUG - 2019-12-25 15:08:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:08:01 --> Input Class Initialized
INFO - 2019-12-25 15:08:01 --> Language Class Initialized
INFO - 2019-12-25 15:08:01 --> Loader Class Initialized
INFO - 2019-12-25 15:08:02 --> Helper loaded: html_helper
INFO - 2019-12-25 15:08:02 --> Helper loaded: url_helper
INFO - 2019-12-25 15:08:02 --> Helper loaded: form_helper
INFO - 2019-12-25 15:08:02 --> Database Driver Class Initialized
INFO - 2019-12-25 15:08:02 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:08:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:08:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:08:02 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:08:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:08:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:08:02 --> Controller Class Initialized
DEBUG - 2019-12-25 15:08:02 --> Create_User constructer got called..
INFO - 2019-12-25 15:08:02 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:08:02 --> getAllUIGroupData model = 43
DEBUG - 2019-12-25 15:08:02 --> getAllUIGroupData from DB retrived
INFO - 2019-12-25 15:08:02 --> Final output sent to browser
DEBUG - 2019-12-25 15:08:02 --> Total execution time: 0.2500
INFO - 2019-12-25 15:08:28 --> Config Class Initialized
INFO - 2019-12-25 15:08:28 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:08:28 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:08:28 --> Utf8 Class Initialized
INFO - 2019-12-25 15:08:28 --> URI Class Initialized
INFO - 2019-12-25 15:08:28 --> Router Class Initialized
INFO - 2019-12-25 15:08:28 --> Output Class Initialized
INFO - 2019-12-25 15:08:28 --> Security Class Initialized
DEBUG - 2019-12-25 15:08:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:08:28 --> Input Class Initialized
INFO - 2019-12-25 15:08:28 --> Language Class Initialized
INFO - 2019-12-25 15:08:28 --> Loader Class Initialized
INFO - 2019-12-25 15:08:28 --> Helper loaded: html_helper
INFO - 2019-12-25 15:08:28 --> Helper loaded: url_helper
INFO - 2019-12-25 15:08:28 --> Helper loaded: form_helper
INFO - 2019-12-25 15:08:28 --> Database Driver Class Initialized
INFO - 2019-12-25 15:08:29 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:08:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:08:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:08:29 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:08:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:08:29 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:08:29 --> Controller Class Initialized
DEBUG - 2019-12-25 15:08:29 --> Create_User constructer got called..
INFO - 2019-12-25 15:08:29 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:08:29 --> get_group_role_mapping model = 42
DEBUG - 2019-12-25 15:08:29 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 15:08:29 --> Final output sent to browser
DEBUG - 2019-12-25 15:08:29 --> Total execution time: 0.3040
INFO - 2019-12-25 15:08:29 --> Config Class Initialized
INFO - 2019-12-25 15:08:29 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:08:29 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:08:29 --> Utf8 Class Initialized
INFO - 2019-12-25 15:08:29 --> URI Class Initialized
INFO - 2019-12-25 15:08:29 --> Router Class Initialized
INFO - 2019-12-25 15:08:29 --> Output Class Initialized
INFO - 2019-12-25 15:08:29 --> Security Class Initialized
DEBUG - 2019-12-25 15:08:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:08:29 --> Input Class Initialized
INFO - 2019-12-25 15:08:29 --> Language Class Initialized
INFO - 2019-12-25 15:08:29 --> Loader Class Initialized
INFO - 2019-12-25 15:08:29 --> Helper loaded: html_helper
INFO - 2019-12-25 15:08:29 --> Helper loaded: url_helper
INFO - 2019-12-25 15:08:29 --> Helper loaded: form_helper
INFO - 2019-12-25 15:08:29 --> Database Driver Class Initialized
INFO - 2019-12-25 15:08:29 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:08:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:08:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:08:29 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:08:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:08:29 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:08:29 --> Controller Class Initialized
DEBUG - 2019-12-25 15:08:29 --> Create_User constructer got called..
INFO - 2019-12-25 15:08:29 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:08:29 --> getAllUIGroupData model = 42
DEBUG - 2019-12-25 15:08:29 --> getAllUIGroupData from DB retrived
INFO - 2019-12-25 15:08:29 --> Final output sent to browser
DEBUG - 2019-12-25 15:08:29 --> Total execution time: 0.2090
INFO - 2019-12-25 15:08:38 --> Config Class Initialized
INFO - 2019-12-25 15:08:38 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:08:38 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:08:38 --> Utf8 Class Initialized
INFO - 2019-12-25 15:08:38 --> URI Class Initialized
INFO - 2019-12-25 15:08:38 --> Router Class Initialized
INFO - 2019-12-25 15:08:38 --> Output Class Initialized
INFO - 2019-12-25 15:08:38 --> Security Class Initialized
DEBUG - 2019-12-25 15:08:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:08:38 --> Input Class Initialized
INFO - 2019-12-25 15:08:38 --> Language Class Initialized
INFO - 2019-12-25 15:08:38 --> Loader Class Initialized
INFO - 2019-12-25 15:08:38 --> Helper loaded: html_helper
INFO - 2019-12-25 15:08:38 --> Helper loaded: url_helper
INFO - 2019-12-25 15:08:38 --> Helper loaded: form_helper
INFO - 2019-12-25 15:08:38 --> Database Driver Class Initialized
INFO - 2019-12-25 15:08:38 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:08:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:08:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:08:38 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:08:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:08:38 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:08:38 --> Controller Class Initialized
DEBUG - 2019-12-25 15:08:38 --> Create_User constructer got called..
INFO - 2019-12-25 15:08:38 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:08:38 --> getAllUIGroupData model = 42
DEBUG - 2019-12-25 15:08:38 --> getAllUIGroupData from DB retrived
INFO - 2019-12-25 15:08:38 --> Final output sent to browser
DEBUG - 2019-12-25 15:08:38 --> Total execution time: 0.2200
INFO - 2019-12-25 15:15:57 --> Config Class Initialized
INFO - 2019-12-25 15:15:57 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:15:57 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:15:57 --> Utf8 Class Initialized
INFO - 2019-12-25 15:15:57 --> URI Class Initialized
INFO - 2019-12-25 15:15:57 --> Router Class Initialized
INFO - 2019-12-25 15:15:57 --> Output Class Initialized
INFO - 2019-12-25 15:15:57 --> Security Class Initialized
DEBUG - 2019-12-25 15:15:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:15:57 --> Input Class Initialized
INFO - 2019-12-25 15:15:57 --> Language Class Initialized
INFO - 2019-12-25 15:15:57 --> Loader Class Initialized
INFO - 2019-12-25 15:15:57 --> Helper loaded: html_helper
INFO - 2019-12-25 15:15:57 --> Helper loaded: url_helper
INFO - 2019-12-25 15:15:57 --> Helper loaded: form_helper
INFO - 2019-12-25 15:15:57 --> Database Driver Class Initialized
INFO - 2019-12-25 15:15:57 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:15:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:15:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:15:57 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:15:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:15:57 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:15:57 --> Controller Class Initialized
DEBUG - 2019-12-25 15:15:57 --> Create_User constructer got called..
INFO - 2019-12-25 15:15:57 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:15:57 --> getAllSubgroup model
DEBUG - 2019-12-25 15:15:57 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:15:57 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:15:57 --> getAllSubgroup model
DEBUG - 2019-12-25 15:15:57 --> getAllUIMasterData from DB retrived
INFO - 2019-12-25 15:15:57 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 15:15:57 --> Final output sent to browser
DEBUG - 2019-12-25 15:15:57 --> Total execution time: 0.3120
INFO - 2019-12-25 15:16:25 --> Config Class Initialized
INFO - 2019-12-25 15:16:25 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:16:25 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:16:25 --> Utf8 Class Initialized
INFO - 2019-12-25 15:16:25 --> URI Class Initialized
INFO - 2019-12-25 15:16:25 --> Router Class Initialized
INFO - 2019-12-25 15:16:25 --> Output Class Initialized
INFO - 2019-12-25 15:16:25 --> Security Class Initialized
DEBUG - 2019-12-25 15:16:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:16:25 --> Input Class Initialized
INFO - 2019-12-25 15:16:25 --> Language Class Initialized
INFO - 2019-12-25 15:16:25 --> Loader Class Initialized
INFO - 2019-12-25 15:16:25 --> Helper loaded: html_helper
INFO - 2019-12-25 15:16:25 --> Helper loaded: url_helper
INFO - 2019-12-25 15:16:25 --> Helper loaded: form_helper
INFO - 2019-12-25 15:16:25 --> Database Driver Class Initialized
INFO - 2019-12-25 15:16:25 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:16:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:16:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:16:25 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:16:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:16:25 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:16:25 --> Controller Class Initialized
DEBUG - 2019-12-25 15:16:25 --> Create_User constructer got called..
INFO - 2019-12-25 15:16:25 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:16:25 --> get_group_role_mapping model = 43
DEBUG - 2019-12-25 15:16:25 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 15:16:25 --> Final output sent to browser
DEBUG - 2019-12-25 15:16:25 --> Total execution time: 0.2070
INFO - 2019-12-25 15:16:25 --> Config Class Initialized
INFO - 2019-12-25 15:16:25 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:16:25 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:16:25 --> Utf8 Class Initialized
INFO - 2019-12-25 15:16:25 --> URI Class Initialized
INFO - 2019-12-25 15:16:25 --> Router Class Initialized
INFO - 2019-12-25 15:16:25 --> Output Class Initialized
INFO - 2019-12-25 15:16:25 --> Security Class Initialized
DEBUG - 2019-12-25 15:16:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:16:25 --> Input Class Initialized
INFO - 2019-12-25 15:16:25 --> Language Class Initialized
INFO - 2019-12-25 15:16:25 --> Loader Class Initialized
INFO - 2019-12-25 15:16:25 --> Helper loaded: html_helper
INFO - 2019-12-25 15:16:25 --> Helper loaded: url_helper
INFO - 2019-12-25 15:16:25 --> Helper loaded: form_helper
INFO - 2019-12-25 15:16:25 --> Database Driver Class Initialized
INFO - 2019-12-25 15:16:26 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:16:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:16:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:16:26 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:16:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:16:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:16:26 --> Controller Class Initialized
DEBUG - 2019-12-25 15:16:26 --> Create_User constructer got called..
INFO - 2019-12-25 15:16:26 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:16:26 --> getAllUIGroupData model = 43
DEBUG - 2019-12-25 15:16:26 --> getAllUIGroupData from DB retrived
INFO - 2019-12-25 15:16:26 --> Final output sent to browser
DEBUG - 2019-12-25 15:16:26 --> Total execution time: 0.2110
INFO - 2019-12-25 15:22:26 --> Config Class Initialized
INFO - 2019-12-25 15:22:26 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:22:26 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:22:26 --> Utf8 Class Initialized
INFO - 2019-12-25 15:22:26 --> URI Class Initialized
INFO - 2019-12-25 15:22:26 --> Router Class Initialized
INFO - 2019-12-25 15:22:26 --> Output Class Initialized
INFO - 2019-12-25 15:22:26 --> Security Class Initialized
DEBUG - 2019-12-25 15:22:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:22:26 --> Input Class Initialized
INFO - 2019-12-25 15:22:26 --> Language Class Initialized
INFO - 2019-12-25 15:22:26 --> Loader Class Initialized
INFO - 2019-12-25 15:22:26 --> Helper loaded: html_helper
INFO - 2019-12-25 15:22:26 --> Helper loaded: url_helper
INFO - 2019-12-25 15:22:27 --> Helper loaded: form_helper
INFO - 2019-12-25 15:22:27 --> Database Driver Class Initialized
INFO - 2019-12-25 15:22:27 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:22:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:22:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:22:27 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:22:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:22:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:22:27 --> Controller Class Initialized
DEBUG - 2019-12-25 15:22:27 --> Create_User constructer got called..
INFO - 2019-12-25 15:22:27 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:22:27 --> getAllSubgroup model
DEBUG - 2019-12-25 15:22:27 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:22:27 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:22:27 --> getAllSubgroup model
DEBUG - 2019-12-25 15:22:27 --> getAllUIMasterData from DB retrived
INFO - 2019-12-25 15:22:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 15:22:27 --> Final output sent to browser
DEBUG - 2019-12-25 15:22:27 --> Total execution time: 0.2580
INFO - 2019-12-25 15:22:34 --> Config Class Initialized
INFO - 2019-12-25 15:22:34 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:22:34 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:22:34 --> Utf8 Class Initialized
INFO - 2019-12-25 15:22:34 --> URI Class Initialized
INFO - 2019-12-25 15:22:34 --> Router Class Initialized
INFO - 2019-12-25 15:22:34 --> Output Class Initialized
INFO - 2019-12-25 15:22:34 --> Security Class Initialized
DEBUG - 2019-12-25 15:22:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:22:34 --> Input Class Initialized
INFO - 2019-12-25 15:22:34 --> Language Class Initialized
INFO - 2019-12-25 15:22:34 --> Loader Class Initialized
INFO - 2019-12-25 15:22:34 --> Helper loaded: html_helper
INFO - 2019-12-25 15:22:34 --> Helper loaded: url_helper
INFO - 2019-12-25 15:22:34 --> Helper loaded: form_helper
INFO - 2019-12-25 15:22:34 --> Database Driver Class Initialized
INFO - 2019-12-25 15:22:34 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:22:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:22:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:22:34 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:22:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:22:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:22:34 --> Controller Class Initialized
DEBUG - 2019-12-25 15:22:34 --> Create_User constructer got called..
INFO - 2019-12-25 15:22:34 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:22:34 --> get_group_role_mapping model = 43@ADMINUSER
DEBUG - 2019-12-25 15:22:34 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 15:22:34 --> Final output sent to browser
DEBUG - 2019-12-25 15:22:34 --> Total execution time: 0.2480
INFO - 2019-12-25 15:22:34 --> Config Class Initialized
INFO - 2019-12-25 15:22:34 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:22:34 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:22:34 --> Utf8 Class Initialized
INFO - 2019-12-25 15:22:34 --> URI Class Initialized
INFO - 2019-12-25 15:22:34 --> Router Class Initialized
INFO - 2019-12-25 15:22:34 --> Output Class Initialized
INFO - 2019-12-25 15:22:34 --> Security Class Initialized
DEBUG - 2019-12-25 15:22:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:22:34 --> Input Class Initialized
INFO - 2019-12-25 15:22:34 --> Language Class Initialized
INFO - 2019-12-25 15:22:34 --> Loader Class Initialized
INFO - 2019-12-25 15:22:34 --> Helper loaded: html_helper
INFO - 2019-12-25 15:22:34 --> Helper loaded: url_helper
INFO - 2019-12-25 15:22:34 --> Helper loaded: form_helper
INFO - 2019-12-25 15:22:34 --> Database Driver Class Initialized
INFO - 2019-12-25 15:22:34 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:22:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:22:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:22:34 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:22:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:22:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:22:34 --> Controller Class Initialized
DEBUG - 2019-12-25 15:22:34 --> Create_User constructer got called..
INFO - 2019-12-25 15:22:34 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:22:34 --> getAllUIGroupData model = 43
DEBUG - 2019-12-25 15:22:34 --> getAllUIGroupData from DB retrived
INFO - 2019-12-25 15:22:34 --> Final output sent to browser
DEBUG - 2019-12-25 15:22:34 --> Total execution time: 0.2070
INFO - 2019-12-25 15:40:43 --> Config Class Initialized
INFO - 2019-12-25 15:40:43 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:40:43 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:40:43 --> Utf8 Class Initialized
INFO - 2019-12-25 15:40:43 --> URI Class Initialized
INFO - 2019-12-25 15:40:43 --> Router Class Initialized
INFO - 2019-12-25 15:40:43 --> Output Class Initialized
INFO - 2019-12-25 15:40:43 --> Security Class Initialized
DEBUG - 2019-12-25 15:40:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:40:43 --> Input Class Initialized
INFO - 2019-12-25 15:40:43 --> Language Class Initialized
INFO - 2019-12-25 15:40:43 --> Loader Class Initialized
INFO - 2019-12-25 15:40:44 --> Helper loaded: html_helper
INFO - 2019-12-25 15:40:44 --> Helper loaded: url_helper
INFO - 2019-12-25 15:40:44 --> Helper loaded: form_helper
INFO - 2019-12-25 15:40:44 --> Database Driver Class Initialized
INFO - 2019-12-25 15:40:44 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:40:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:40:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:40:44 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:40:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:40:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:40:44 --> Controller Class Initialized
DEBUG - 2019-12-25 15:40:44 --> Create_User constructer got called..
INFO - 2019-12-25 15:40:44 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:40:44 --> getAllSubgroup model
DEBUG - 2019-12-25 15:40:44 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:40:44 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:40:44 --> getAllSubgroup model
DEBUG - 2019-12-25 15:40:44 --> getAllUIMasterData from DB retrived
INFO - 2019-12-25 15:40:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 15:40:44 --> Final output sent to browser
DEBUG - 2019-12-25 15:40:44 --> Total execution time: 0.2480
INFO - 2019-12-25 15:40:50 --> Config Class Initialized
INFO - 2019-12-25 15:40:50 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:40:50 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:40:50 --> Utf8 Class Initialized
INFO - 2019-12-25 15:40:50 --> URI Class Initialized
INFO - 2019-12-25 15:40:50 --> Router Class Initialized
INFO - 2019-12-25 15:40:50 --> Output Class Initialized
INFO - 2019-12-25 15:40:50 --> Security Class Initialized
DEBUG - 2019-12-25 15:40:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:40:50 --> Input Class Initialized
INFO - 2019-12-25 15:40:50 --> Language Class Initialized
INFO - 2019-12-25 15:40:50 --> Loader Class Initialized
INFO - 2019-12-25 15:40:50 --> Helper loaded: html_helper
INFO - 2019-12-25 15:40:50 --> Helper loaded: url_helper
INFO - 2019-12-25 15:40:50 --> Helper loaded: form_helper
INFO - 2019-12-25 15:40:50 --> Database Driver Class Initialized
INFO - 2019-12-25 15:40:51 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:40:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:40:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:40:51 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:40:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:40:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:40:51 --> Controller Class Initialized
DEBUG - 2019-12-25 15:40:51 --> Create_User constructer got called..
INFO - 2019-12-25 15:40:51 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:40:51 --> get_group_role_mapping model = 56@My Group
DEBUG - 2019-12-25 15:40:51 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 15:40:51 --> Final output sent to browser
DEBUG - 2019-12-25 15:40:51 --> Total execution time: 0.2940
INFO - 2019-12-25 15:40:51 --> Config Class Initialized
INFO - 2019-12-25 15:40:51 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:40:51 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:40:51 --> Utf8 Class Initialized
INFO - 2019-12-25 15:40:51 --> URI Class Initialized
INFO - 2019-12-25 15:40:51 --> Router Class Initialized
INFO - 2019-12-25 15:40:51 --> Output Class Initialized
INFO - 2019-12-25 15:40:51 --> Security Class Initialized
DEBUG - 2019-12-25 15:40:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:40:51 --> Input Class Initialized
INFO - 2019-12-25 15:40:51 --> Language Class Initialized
INFO - 2019-12-25 15:40:51 --> Loader Class Initialized
INFO - 2019-12-25 15:40:51 --> Helper loaded: html_helper
INFO - 2019-12-25 15:40:51 --> Helper loaded: url_helper
INFO - 2019-12-25 15:40:51 --> Helper loaded: form_helper
INFO - 2019-12-25 15:40:51 --> Database Driver Class Initialized
INFO - 2019-12-25 15:40:51 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:40:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:40:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:40:51 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:40:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:40:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:40:51 --> Controller Class Initialized
DEBUG - 2019-12-25 15:40:51 --> Create_User constructer got called..
INFO - 2019-12-25 15:40:51 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:40:51 --> getAllUIGroupData model = 56
DEBUG - 2019-12-25 15:40:51 --> getAllUIGroupData from DB retrived
INFO - 2019-12-25 15:40:51 --> Final output sent to browser
DEBUG - 2019-12-25 15:40:51 --> Total execution time: 0.2020
INFO - 2019-12-25 15:40:58 --> Config Class Initialized
INFO - 2019-12-25 15:40:58 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:40:58 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:40:58 --> Utf8 Class Initialized
INFO - 2019-12-25 15:40:58 --> URI Class Initialized
INFO - 2019-12-25 15:40:58 --> Router Class Initialized
INFO - 2019-12-25 15:40:58 --> Output Class Initialized
INFO - 2019-12-25 15:40:59 --> Security Class Initialized
DEBUG - 2019-12-25 15:40:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:40:59 --> Input Class Initialized
INFO - 2019-12-25 15:40:59 --> Language Class Initialized
INFO - 2019-12-25 15:40:59 --> Loader Class Initialized
INFO - 2019-12-25 15:40:59 --> Helper loaded: html_helper
INFO - 2019-12-25 15:40:59 --> Helper loaded: url_helper
INFO - 2019-12-25 15:40:59 --> Helper loaded: form_helper
INFO - 2019-12-25 15:40:59 --> Database Driver Class Initialized
INFO - 2019-12-25 15:40:59 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:40:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:40:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:40:59 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:40:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:40:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:40:59 --> Controller Class Initialized
DEBUG - 2019-12-25 15:40:59 --> Create_User constructer got called..
INFO - 2019-12-25 15:40:59 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:40:59 --> configarable_sideview model
DEBUG - 2019-12-25 15:40:59 --> BEGIN role insertion...
DEBUG - 2019-12-25 15:40:59 --> END configarable_sideview insertion...
DEBUG - 2019-12-25 15:40:59 --> Group inserted
DEBUG - 2019-12-25 15:40:59 --> insert role result =1
INFO - 2019-12-25 15:40:59 --> Final output sent to browser
DEBUG - 2019-12-25 15:40:59 --> Total execution time: 0.2940
INFO - 2019-12-25 15:41:05 --> Config Class Initialized
INFO - 2019-12-25 15:41:05 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:41:05 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:41:05 --> Utf8 Class Initialized
INFO - 2019-12-25 15:41:05 --> URI Class Initialized
INFO - 2019-12-25 15:41:05 --> Router Class Initialized
INFO - 2019-12-25 15:41:05 --> Output Class Initialized
INFO - 2019-12-25 15:41:05 --> Security Class Initialized
DEBUG - 2019-12-25 15:41:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:41:05 --> Input Class Initialized
INFO - 2019-12-25 15:41:05 --> Language Class Initialized
INFO - 2019-12-25 15:41:05 --> Loader Class Initialized
INFO - 2019-12-25 15:41:05 --> Helper loaded: html_helper
INFO - 2019-12-25 15:41:05 --> Helper loaded: url_helper
INFO - 2019-12-25 15:41:05 --> Helper loaded: form_helper
INFO - 2019-12-25 15:41:05 --> Database Driver Class Initialized
INFO - 2019-12-25 15:41:05 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:41:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:41:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:41:05 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:41:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:41:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:41:05 --> Controller Class Initialized
DEBUG - 2019-12-25 15:41:05 --> Create_User constructer got called..
INFO - 2019-12-25 15:41:05 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:41:05 --> getAllUIGroupData model = 56
DEBUG - 2019-12-25 15:41:05 --> getAllUIGroupData from DB retrived
INFO - 2019-12-25 15:41:05 --> Final output sent to browser
DEBUG - 2019-12-25 15:41:05 --> Total execution time: 0.2600
INFO - 2019-12-25 15:48:54 --> Config Class Initialized
INFO - 2019-12-25 15:48:54 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:48:54 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:48:54 --> Utf8 Class Initialized
INFO - 2019-12-25 15:48:54 --> URI Class Initialized
INFO - 2019-12-25 15:48:54 --> Router Class Initialized
INFO - 2019-12-25 15:48:55 --> Output Class Initialized
INFO - 2019-12-25 15:48:55 --> Security Class Initialized
DEBUG - 2019-12-25 15:48:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:48:55 --> Input Class Initialized
INFO - 2019-12-25 15:48:55 --> Language Class Initialized
INFO - 2019-12-25 15:48:55 --> Loader Class Initialized
INFO - 2019-12-25 15:48:55 --> Helper loaded: html_helper
INFO - 2019-12-25 15:48:55 --> Helper loaded: url_helper
INFO - 2019-12-25 15:48:55 --> Helper loaded: form_helper
INFO - 2019-12-25 15:48:55 --> Database Driver Class Initialized
INFO - 2019-12-25 15:48:55 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:48:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:48:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:48:55 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:48:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:48:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:48:55 --> Controller Class Initialized
DEBUG - 2019-12-25 15:48:55 --> Create_User constructer got called..
INFO - 2019-12-25 15:48:55 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:48:55 --> getAllSubgroup model
DEBUG - 2019-12-25 15:48:55 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:48:55 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:48:55 --> getAllSubgroup model
DEBUG - 2019-12-25 15:48:55 --> getAllUIMasterData from DB retrived
INFO - 2019-12-25 15:48:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 15:48:55 --> Final output sent to browser
DEBUG - 2019-12-25 15:48:55 --> Total execution time: 0.3680
INFO - 2019-12-25 15:49:03 --> Config Class Initialized
INFO - 2019-12-25 15:49:03 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:49:03 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:49:03 --> Utf8 Class Initialized
INFO - 2019-12-25 15:49:03 --> URI Class Initialized
INFO - 2019-12-25 15:49:03 --> Router Class Initialized
INFO - 2019-12-25 15:49:03 --> Output Class Initialized
INFO - 2019-12-25 15:49:03 --> Security Class Initialized
DEBUG - 2019-12-25 15:49:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:49:03 --> Input Class Initialized
INFO - 2019-12-25 15:49:03 --> Language Class Initialized
INFO - 2019-12-25 15:49:03 --> Loader Class Initialized
INFO - 2019-12-25 15:49:03 --> Helper loaded: html_helper
INFO - 2019-12-25 15:49:03 --> Helper loaded: url_helper
INFO - 2019-12-25 15:49:03 --> Helper loaded: form_helper
INFO - 2019-12-25 15:49:03 --> Database Driver Class Initialized
INFO - 2019-12-25 15:49:03 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:49:03 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:49:03 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:49:03 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:49:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:49:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:49:04 --> Controller Class Initialized
DEBUG - 2019-12-25 15:49:04 --> Create_User constructer got called..
INFO - 2019-12-25 15:49:04 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:49:04 --> get_group_role_mapping model = 56@My Group
DEBUG - 2019-12-25 15:49:04 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 15:49:04 --> Final output sent to browser
DEBUG - 2019-12-25 15:49:04 --> Total execution time: 0.2700
INFO - 2019-12-25 15:49:04 --> Config Class Initialized
INFO - 2019-12-25 15:49:04 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:49:04 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:49:04 --> Utf8 Class Initialized
INFO - 2019-12-25 15:49:04 --> URI Class Initialized
INFO - 2019-12-25 15:49:04 --> Router Class Initialized
INFO - 2019-12-25 15:49:04 --> Output Class Initialized
INFO - 2019-12-25 15:49:04 --> Security Class Initialized
DEBUG - 2019-12-25 15:49:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:49:04 --> Input Class Initialized
INFO - 2019-12-25 15:49:04 --> Language Class Initialized
INFO - 2019-12-25 15:49:04 --> Loader Class Initialized
INFO - 2019-12-25 15:49:04 --> Helper loaded: html_helper
INFO - 2019-12-25 15:49:04 --> Helper loaded: url_helper
INFO - 2019-12-25 15:49:04 --> Helper loaded: form_helper
INFO - 2019-12-25 15:49:04 --> Database Driver Class Initialized
INFO - 2019-12-25 15:49:04 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:49:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:49:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:49:04 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:49:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:49:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:49:04 --> Controller Class Initialized
DEBUG - 2019-12-25 15:49:04 --> Create_User constructer got called..
INFO - 2019-12-25 15:49:04 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:49:04 --> getAllUIGroupData model = 56
DEBUG - 2019-12-25 15:49:04 --> getAllUIGroupData from DB retrived
INFO - 2019-12-25 15:49:04 --> Final output sent to browser
DEBUG - 2019-12-25 15:49:04 --> Total execution time: 0.1970
INFO - 2019-12-25 15:49:10 --> Config Class Initialized
INFO - 2019-12-25 15:49:10 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:49:10 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:49:10 --> Utf8 Class Initialized
INFO - 2019-12-25 15:49:10 --> URI Class Initialized
INFO - 2019-12-25 15:49:10 --> Router Class Initialized
INFO - 2019-12-25 15:49:10 --> Output Class Initialized
INFO - 2019-12-25 15:49:10 --> Security Class Initialized
DEBUG - 2019-12-25 15:49:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:49:10 --> Input Class Initialized
INFO - 2019-12-25 15:49:10 --> Language Class Initialized
INFO - 2019-12-25 15:49:10 --> Loader Class Initialized
INFO - 2019-12-25 15:49:10 --> Helper loaded: html_helper
INFO - 2019-12-25 15:49:10 --> Helper loaded: url_helper
INFO - 2019-12-25 15:49:10 --> Helper loaded: form_helper
INFO - 2019-12-25 15:49:10 --> Database Driver Class Initialized
INFO - 2019-12-25 15:49:10 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:49:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:49:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:49:10 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:49:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:49:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:49:10 --> Controller Class Initialized
DEBUG - 2019-12-25 15:49:10 --> Create_User constructer got called..
INFO - 2019-12-25 15:49:10 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:49:10 --> configarable_sideview model
DEBUG - 2019-12-25 15:49:10 --> BEGIN role insertion...
DEBUG - 2019-12-25 15:49:10 --> END configarable_sideview insertion...
DEBUG - 2019-12-25 15:49:10 --> Group inserted
DEBUG - 2019-12-25 15:49:10 --> insert role result =1
INFO - 2019-12-25 15:49:10 --> Final output sent to browser
DEBUG - 2019-12-25 15:49:10 --> Total execution time: 0.3090
INFO - 2019-12-25 15:49:10 --> Config Class Initialized
INFO - 2019-12-25 15:49:10 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:49:10 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:49:10 --> Utf8 Class Initialized
INFO - 2019-12-25 15:49:10 --> URI Class Initialized
INFO - 2019-12-25 15:49:10 --> Router Class Initialized
INFO - 2019-12-25 15:49:10 --> Output Class Initialized
INFO - 2019-12-25 15:49:10 --> Security Class Initialized
DEBUG - 2019-12-25 15:49:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:49:10 --> Input Class Initialized
INFO - 2019-12-25 15:49:10 --> Language Class Initialized
INFO - 2019-12-25 15:49:10 --> Loader Class Initialized
INFO - 2019-12-25 15:49:10 --> Helper loaded: html_helper
INFO - 2019-12-25 15:49:10 --> Helper loaded: url_helper
INFO - 2019-12-25 15:49:10 --> Helper loaded: form_helper
INFO - 2019-12-25 15:49:10 --> Database Driver Class Initialized
INFO - 2019-12-25 15:49:10 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:49:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:49:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:49:10 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:49:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:49:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:49:10 --> Controller Class Initialized
DEBUG - 2019-12-25 15:49:10 --> Create_User constructer got called..
INFO - 2019-12-25 15:49:10 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:49:10 --> getAllUIGroupData model = 56
DEBUG - 2019-12-25 15:49:10 --> getAllUIGroupData from DB retrived
INFO - 2019-12-25 15:49:10 --> Final output sent to browser
DEBUG - 2019-12-25 15:49:10 --> Total execution time: 0.2390
INFO - 2019-12-25 15:50:03 --> Config Class Initialized
INFO - 2019-12-25 15:50:03 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:50:03 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:50:03 --> Utf8 Class Initialized
INFO - 2019-12-25 15:50:03 --> URI Class Initialized
INFO - 2019-12-25 15:50:03 --> Router Class Initialized
INFO - 2019-12-25 15:50:03 --> Output Class Initialized
INFO - 2019-12-25 15:50:03 --> Security Class Initialized
DEBUG - 2019-12-25 15:50:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:50:03 --> Input Class Initialized
INFO - 2019-12-25 15:50:03 --> Language Class Initialized
INFO - 2019-12-25 15:50:03 --> Loader Class Initialized
INFO - 2019-12-25 15:50:03 --> Helper loaded: html_helper
INFO - 2019-12-25 15:50:03 --> Helper loaded: url_helper
INFO - 2019-12-25 15:50:03 --> Helper loaded: form_helper
INFO - 2019-12-25 15:50:03 --> Database Driver Class Initialized
INFO - 2019-12-25 15:50:03 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:50:03 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:50:03 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:50:03 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:50:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:50:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:50:04 --> Controller Class Initialized
DEBUG - 2019-12-25 15:50:04 --> Create_User constructer got called..
INFO - 2019-12-25 15:50:04 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:50:04 --> getAllSubgroup model
DEBUG - 2019-12-25 15:50:04 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:50:04 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:50:04 --> getAllSubgroup model
DEBUG - 2019-12-25 15:50:04 --> getAllUIMasterData from DB retrived
INFO - 2019-12-25 15:50:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 15:50:04 --> Final output sent to browser
DEBUG - 2019-12-25 15:50:04 --> Total execution time: 0.2690
INFO - 2019-12-25 15:51:31 --> Config Class Initialized
INFO - 2019-12-25 15:51:31 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:51:31 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:51:31 --> Utf8 Class Initialized
INFO - 2019-12-25 15:51:31 --> URI Class Initialized
INFO - 2019-12-25 15:51:31 --> Router Class Initialized
INFO - 2019-12-25 15:51:31 --> Output Class Initialized
INFO - 2019-12-25 15:51:32 --> Security Class Initialized
DEBUG - 2019-12-25 15:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:51:32 --> Input Class Initialized
INFO - 2019-12-25 15:51:32 --> Language Class Initialized
INFO - 2019-12-25 15:51:32 --> Loader Class Initialized
INFO - 2019-12-25 15:51:32 --> Helper loaded: html_helper
INFO - 2019-12-25 15:51:32 --> Helper loaded: url_helper
INFO - 2019-12-25 15:51:32 --> Helper loaded: form_helper
INFO - 2019-12-25 15:51:32 --> Database Driver Class Initialized
INFO - 2019-12-25 15:51:32 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:51:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:51:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:51:32 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:51:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:51:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:51:33 --> Controller Class Initialized
DEBUG - 2019-12-25 15:51:33 --> Create_User constructer got called..
INFO - 2019-12-25 15:51:33 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:51:33 --> getAllSubgroup model
DEBUG - 2019-12-25 15:51:33 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:51:33 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:51:33 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 15:51:33 --> Final output sent to browser
DEBUG - 2019-12-25 15:51:33 --> Total execution time: 1.0911
INFO - 2019-12-25 15:51:40 --> Config Class Initialized
INFO - 2019-12-25 15:51:40 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:51:40 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:51:40 --> Utf8 Class Initialized
INFO - 2019-12-25 15:51:40 --> URI Class Initialized
INFO - 2019-12-25 15:51:40 --> Router Class Initialized
INFO - 2019-12-25 15:51:40 --> Output Class Initialized
INFO - 2019-12-25 15:51:40 --> Security Class Initialized
DEBUG - 2019-12-25 15:51:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:51:40 --> Input Class Initialized
INFO - 2019-12-25 15:51:40 --> Language Class Initialized
INFO - 2019-12-25 15:51:40 --> Loader Class Initialized
INFO - 2019-12-25 15:51:40 --> Helper loaded: html_helper
INFO - 2019-12-25 15:51:40 --> Helper loaded: url_helper
INFO - 2019-12-25 15:51:40 --> Helper loaded: form_helper
INFO - 2019-12-25 15:51:40 --> Database Driver Class Initialized
INFO - 2019-12-25 15:51:41 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:51:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:51:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:51:41 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:51:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:51:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:51:41 --> Controller Class Initialized
DEBUG - 2019-12-25 15:51:41 --> Create_User constructer got called..
INFO - 2019-12-25 15:51:41 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:51:41 --> get_group_role_mapping model = 42
DEBUG - 2019-12-25 15:51:41 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 15:51:41 --> Final output sent to browser
DEBUG - 2019-12-25 15:51:41 --> Total execution time: 0.2050
INFO - 2019-12-25 15:51:41 --> Config Class Initialized
INFO - 2019-12-25 15:51:41 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:51:41 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:51:41 --> Utf8 Class Initialized
INFO - 2019-12-25 15:51:41 --> URI Class Initialized
INFO - 2019-12-25 15:51:41 --> Router Class Initialized
INFO - 2019-12-25 15:51:41 --> Output Class Initialized
INFO - 2019-12-25 15:51:41 --> Security Class Initialized
DEBUG - 2019-12-25 15:51:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:51:41 --> Input Class Initialized
INFO - 2019-12-25 15:51:41 --> Language Class Initialized
INFO - 2019-12-25 15:51:41 --> Loader Class Initialized
INFO - 2019-12-25 15:51:41 --> Helper loaded: html_helper
INFO - 2019-12-25 15:51:41 --> Helper loaded: url_helper
INFO - 2019-12-25 15:51:41 --> Helper loaded: form_helper
INFO - 2019-12-25 15:51:41 --> Database Driver Class Initialized
INFO - 2019-12-25 15:51:41 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:51:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:51:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:51:41 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:51:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:51:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:51:41 --> Controller Class Initialized
DEBUG - 2019-12-25 15:51:41 --> Create_User constructer got called..
INFO - 2019-12-25 15:51:41 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:51:41 --> getAllSubGroupData model = 13
DEBUG - 2019-12-25 15:51:41 --> getAllSubGroupData from DB retrived
INFO - 2019-12-25 15:51:41 --> Final output sent to browser
DEBUG - 2019-12-25 15:51:41 --> Total execution time: 0.2150
INFO - 2019-12-25 15:51:44 --> Config Class Initialized
INFO - 2019-12-25 15:51:44 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:51:44 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:51:44 --> Utf8 Class Initialized
INFO - 2019-12-25 15:51:44 --> URI Class Initialized
INFO - 2019-12-25 15:51:44 --> Router Class Initialized
INFO - 2019-12-25 15:51:44 --> Output Class Initialized
INFO - 2019-12-25 15:51:44 --> Security Class Initialized
DEBUG - 2019-12-25 15:51:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:51:44 --> Input Class Initialized
INFO - 2019-12-25 15:51:44 --> Language Class Initialized
INFO - 2019-12-25 15:51:44 --> Loader Class Initialized
INFO - 2019-12-25 15:51:44 --> Helper loaded: html_helper
INFO - 2019-12-25 15:51:44 --> Helper loaded: url_helper
INFO - 2019-12-25 15:51:44 --> Helper loaded: form_helper
INFO - 2019-12-25 15:51:44 --> Database Driver Class Initialized
INFO - 2019-12-25 15:51:44 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:51:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:51:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:51:44 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:51:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:51:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:51:44 --> Controller Class Initialized
DEBUG - 2019-12-25 15:51:44 --> Create_User constructer got called..
INFO - 2019-12-25 15:51:44 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:51:44 --> getAllSubGroupData model = 13
DEBUG - 2019-12-25 15:51:44 --> getAllSubGroupData from DB retrived
INFO - 2019-12-25 15:51:44 --> Final output sent to browser
DEBUG - 2019-12-25 15:51:44 --> Total execution time: 0.2410
INFO - 2019-12-25 15:51:47 --> Config Class Initialized
INFO - 2019-12-25 15:51:47 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:51:47 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:51:47 --> Utf8 Class Initialized
INFO - 2019-12-25 15:51:47 --> URI Class Initialized
INFO - 2019-12-25 15:51:47 --> Router Class Initialized
INFO - 2019-12-25 15:51:47 --> Output Class Initialized
INFO - 2019-12-25 15:51:47 --> Security Class Initialized
DEBUG - 2019-12-25 15:51:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:51:47 --> Input Class Initialized
INFO - 2019-12-25 15:51:47 --> Language Class Initialized
INFO - 2019-12-25 15:51:47 --> Loader Class Initialized
INFO - 2019-12-25 15:51:47 --> Helper loaded: html_helper
INFO - 2019-12-25 15:51:47 --> Helper loaded: url_helper
INFO - 2019-12-25 15:51:47 --> Helper loaded: form_helper
INFO - 2019-12-25 15:51:47 --> Database Driver Class Initialized
INFO - 2019-12-25 15:51:47 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:51:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:51:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:51:47 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:51:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:51:47 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:51:47 --> Controller Class Initialized
DEBUG - 2019-12-25 15:51:47 --> Create_User constructer got called..
INFO - 2019-12-25 15:51:47 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:51:47 --> getAllSubGroupData model = 13
DEBUG - 2019-12-25 15:51:47 --> getAllSubGroupData from DB retrived
INFO - 2019-12-25 15:51:47 --> Final output sent to browser
DEBUG - 2019-12-25 15:51:47 --> Total execution time: 0.2300
INFO - 2019-12-25 15:51:54 --> Config Class Initialized
INFO - 2019-12-25 15:51:54 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:51:54 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:51:54 --> Utf8 Class Initialized
INFO - 2019-12-25 15:51:54 --> URI Class Initialized
INFO - 2019-12-25 15:51:54 --> Router Class Initialized
INFO - 2019-12-25 15:51:54 --> Output Class Initialized
INFO - 2019-12-25 15:51:54 --> Security Class Initialized
DEBUG - 2019-12-25 15:51:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:51:54 --> Input Class Initialized
INFO - 2019-12-25 15:51:54 --> Language Class Initialized
INFO - 2019-12-25 15:51:54 --> Loader Class Initialized
INFO - 2019-12-25 15:51:54 --> Helper loaded: html_helper
INFO - 2019-12-25 15:51:54 --> Helper loaded: url_helper
INFO - 2019-12-25 15:51:55 --> Helper loaded: form_helper
INFO - 2019-12-25 15:51:55 --> Database Driver Class Initialized
INFO - 2019-12-25 15:51:55 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:51:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:51:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:51:55 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:51:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:51:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:51:55 --> Controller Class Initialized
DEBUG - 2019-12-25 15:51:55 --> Create_User constructer got called..
INFO - 2019-12-25 15:51:55 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:51:55 --> get_group_role_mapping model = 43
DEBUG - 2019-12-25 15:51:55 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 15:51:55 --> Final output sent to browser
DEBUG - 2019-12-25 15:51:55 --> Total execution time: 0.3120
INFO - 2019-12-25 15:51:55 --> Config Class Initialized
INFO - 2019-12-25 15:51:55 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:51:55 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:51:55 --> Utf8 Class Initialized
INFO - 2019-12-25 15:51:55 --> URI Class Initialized
INFO - 2019-12-25 15:51:55 --> Router Class Initialized
INFO - 2019-12-25 15:51:55 --> Output Class Initialized
INFO - 2019-12-25 15:51:55 --> Security Class Initialized
DEBUG - 2019-12-25 15:51:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:51:55 --> Input Class Initialized
INFO - 2019-12-25 15:51:55 --> Language Class Initialized
INFO - 2019-12-25 15:51:55 --> Loader Class Initialized
INFO - 2019-12-25 15:51:55 --> Helper loaded: html_helper
INFO - 2019-12-25 15:51:55 --> Helper loaded: url_helper
INFO - 2019-12-25 15:51:55 --> Helper loaded: form_helper
INFO - 2019-12-25 15:51:55 --> Database Driver Class Initialized
INFO - 2019-12-25 15:51:55 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:51:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:51:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:51:55 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:51:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:51:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:51:55 --> Controller Class Initialized
DEBUG - 2019-12-25 15:51:55 --> Create_User constructer got called..
INFO - 2019-12-25 15:51:55 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:51:55 --> getAllSubGroupData model = 15
DEBUG - 2019-12-25 15:51:55 --> getAllSubGroupData from DB retrived
INFO - 2019-12-25 15:51:55 --> Final output sent to browser
DEBUG - 2019-12-25 15:51:55 --> Total execution time: 0.2100
INFO - 2019-12-25 15:51:59 --> Config Class Initialized
INFO - 2019-12-25 15:51:59 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:51:59 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:51:59 --> Utf8 Class Initialized
INFO - 2019-12-25 15:51:59 --> URI Class Initialized
INFO - 2019-12-25 15:51:59 --> Router Class Initialized
INFO - 2019-12-25 15:51:59 --> Output Class Initialized
INFO - 2019-12-25 15:51:59 --> Security Class Initialized
DEBUG - 2019-12-25 15:51:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:51:59 --> Input Class Initialized
INFO - 2019-12-25 15:51:59 --> Language Class Initialized
INFO - 2019-12-25 15:51:59 --> Loader Class Initialized
INFO - 2019-12-25 15:51:59 --> Helper loaded: html_helper
INFO - 2019-12-25 15:51:59 --> Helper loaded: url_helper
INFO - 2019-12-25 15:51:59 --> Helper loaded: form_helper
INFO - 2019-12-25 15:51:59 --> Database Driver Class Initialized
INFO - 2019-12-25 15:51:59 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:51:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:51:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:51:59 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:51:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:51:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:51:59 --> Controller Class Initialized
DEBUG - 2019-12-25 15:51:59 --> Create_User constructer got called..
INFO - 2019-12-25 15:51:59 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:51:59 --> getAllSubGroupData model = 15
DEBUG - 2019-12-25 15:51:59 --> getAllSubGroupData from DB retrived
INFO - 2019-12-25 15:51:59 --> Final output sent to browser
DEBUG - 2019-12-25 15:51:59 --> Total execution time: 0.2160
INFO - 2019-12-25 15:57:12 --> Config Class Initialized
INFO - 2019-12-25 15:57:12 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:57:12 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:57:12 --> Utf8 Class Initialized
INFO - 2019-12-25 15:57:12 --> URI Class Initialized
INFO - 2019-12-25 15:57:12 --> Router Class Initialized
INFO - 2019-12-25 15:57:12 --> Output Class Initialized
INFO - 2019-12-25 15:57:12 --> Security Class Initialized
DEBUG - 2019-12-25 15:57:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:57:12 --> Input Class Initialized
INFO - 2019-12-25 15:57:12 --> Language Class Initialized
INFO - 2019-12-25 15:57:12 --> Loader Class Initialized
INFO - 2019-12-25 15:57:12 --> Helper loaded: html_helper
INFO - 2019-12-25 15:57:12 --> Helper loaded: url_helper
INFO - 2019-12-25 15:57:12 --> Helper loaded: form_helper
INFO - 2019-12-25 15:57:12 --> Database Driver Class Initialized
INFO - 2019-12-25 15:57:12 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:57:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:57:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:57:12 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:57:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:57:12 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:57:12 --> Controller Class Initialized
DEBUG - 2019-12-25 15:57:12 --> Create_User constructer got called..
INFO - 2019-12-25 15:57:12 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:57:12 --> getAllSubgroup model
DEBUG - 2019-12-25 15:57:12 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:57:12 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:57:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 15:57:12 --> Final output sent to browser
DEBUG - 2019-12-25 15:57:12 --> Total execution time: 0.3180
INFO - 2019-12-25 15:58:18 --> Config Class Initialized
INFO - 2019-12-25 15:58:18 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:58:18 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:58:18 --> Utf8 Class Initialized
INFO - 2019-12-25 15:58:18 --> URI Class Initialized
INFO - 2019-12-25 15:58:18 --> Router Class Initialized
INFO - 2019-12-25 15:58:18 --> Output Class Initialized
INFO - 2019-12-25 15:58:18 --> Security Class Initialized
DEBUG - 2019-12-25 15:58:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:58:18 --> Input Class Initialized
INFO - 2019-12-25 15:58:18 --> Language Class Initialized
INFO - 2019-12-25 15:58:18 --> Loader Class Initialized
INFO - 2019-12-25 15:58:18 --> Helper loaded: html_helper
INFO - 2019-12-25 15:58:18 --> Helper loaded: url_helper
INFO - 2019-12-25 15:58:18 --> Helper loaded: form_helper
INFO - 2019-12-25 15:58:18 --> Database Driver Class Initialized
INFO - 2019-12-25 15:58:18 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:58:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:58:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:58:18 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:58:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:58:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:58:18 --> Controller Class Initialized
DEBUG - 2019-12-25 15:58:18 --> Create_User constructer got called..
INFO - 2019-12-25 15:58:18 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:58:18 --> getAllSubgroup model
DEBUG - 2019-12-25 15:58:18 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:58:18 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:58:18 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 15:58:18 --> Final output sent to browser
DEBUG - 2019-12-25 15:58:18 --> Total execution time: 0.3250
INFO - 2019-12-25 15:58:28 --> Config Class Initialized
INFO - 2019-12-25 15:58:28 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:58:29 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:58:29 --> Utf8 Class Initialized
INFO - 2019-12-25 15:58:29 --> URI Class Initialized
INFO - 2019-12-25 15:58:29 --> Router Class Initialized
INFO - 2019-12-25 15:58:29 --> Output Class Initialized
INFO - 2019-12-25 15:58:29 --> Security Class Initialized
DEBUG - 2019-12-25 15:58:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:58:29 --> Input Class Initialized
INFO - 2019-12-25 15:58:29 --> Language Class Initialized
INFO - 2019-12-25 15:58:29 --> Loader Class Initialized
INFO - 2019-12-25 15:58:29 --> Helper loaded: html_helper
INFO - 2019-12-25 15:58:29 --> Helper loaded: url_helper
INFO - 2019-12-25 15:58:29 --> Helper loaded: form_helper
INFO - 2019-12-25 15:58:29 --> Database Driver Class Initialized
INFO - 2019-12-25 15:58:29 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:58:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:58:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:58:29 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:58:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:58:29 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:58:29 --> Controller Class Initialized
DEBUG - 2019-12-25 15:58:29 --> Create_User constructer got called..
INFO - 2019-12-25 15:58:29 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:58:29 --> getAllSubgroup model
DEBUG - 2019-12-25 15:58:29 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:58:29 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:58:29 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 15:58:29 --> Final output sent to browser
DEBUG - 2019-12-25 15:58:29 --> Total execution time: 0.5860
INFO - 2019-12-25 15:58:52 --> Config Class Initialized
INFO - 2019-12-25 15:58:53 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:58:53 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:58:53 --> Utf8 Class Initialized
INFO - 2019-12-25 15:58:53 --> URI Class Initialized
INFO - 2019-12-25 15:58:53 --> Router Class Initialized
INFO - 2019-12-25 15:58:53 --> Output Class Initialized
INFO - 2019-12-25 15:58:53 --> Security Class Initialized
DEBUG - 2019-12-25 15:58:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:58:53 --> Input Class Initialized
INFO - 2019-12-25 15:58:53 --> Language Class Initialized
INFO - 2019-12-25 15:58:53 --> Loader Class Initialized
INFO - 2019-12-25 15:58:53 --> Helper loaded: html_helper
INFO - 2019-12-25 15:58:53 --> Helper loaded: url_helper
INFO - 2019-12-25 15:58:53 --> Helper loaded: form_helper
INFO - 2019-12-25 15:58:53 --> Database Driver Class Initialized
INFO - 2019-12-25 15:58:53 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:58:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:58:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:58:53 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:58:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:58:53 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:58:53 --> Controller Class Initialized
DEBUG - 2019-12-25 15:58:53 --> Create_User constructer got called..
INFO - 2019-12-25 15:58:53 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:58:53 --> getAllSubgroup model
DEBUG - 2019-12-25 15:58:53 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:58:53 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:58:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 15:58:53 --> Final output sent to browser
DEBUG - 2019-12-25 15:58:53 --> Total execution time: 0.3070
INFO - 2019-12-25 15:59:13 --> Config Class Initialized
INFO - 2019-12-25 15:59:13 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:59:13 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:59:13 --> Utf8 Class Initialized
INFO - 2019-12-25 15:59:13 --> URI Class Initialized
INFO - 2019-12-25 15:59:13 --> Router Class Initialized
INFO - 2019-12-25 15:59:13 --> Output Class Initialized
INFO - 2019-12-25 15:59:13 --> Security Class Initialized
DEBUG - 2019-12-25 15:59:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:59:13 --> Input Class Initialized
INFO - 2019-12-25 15:59:13 --> Language Class Initialized
INFO - 2019-12-25 15:59:13 --> Loader Class Initialized
INFO - 2019-12-25 15:59:13 --> Helper loaded: html_helper
INFO - 2019-12-25 15:59:13 --> Helper loaded: url_helper
INFO - 2019-12-25 15:59:13 --> Helper loaded: form_helper
INFO - 2019-12-25 15:59:13 --> Database Driver Class Initialized
INFO - 2019-12-25 15:59:13 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:59:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:59:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:59:13 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:59:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:59:13 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:59:13 --> Controller Class Initialized
DEBUG - 2019-12-25 15:59:13 --> Create_User constructer got called..
INFO - 2019-12-25 15:59:13 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:59:13 --> getAllSubgroup model
DEBUG - 2019-12-25 15:59:13 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:59:13 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:59:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 15:59:13 --> Final output sent to browser
DEBUG - 2019-12-25 15:59:13 --> Total execution time: 0.3100
INFO - 2019-12-25 15:59:25 --> Config Class Initialized
INFO - 2019-12-25 15:59:25 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:59:25 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:59:25 --> Utf8 Class Initialized
INFO - 2019-12-25 15:59:25 --> URI Class Initialized
INFO - 2019-12-25 15:59:25 --> Router Class Initialized
INFO - 2019-12-25 15:59:25 --> Output Class Initialized
INFO - 2019-12-25 15:59:25 --> Security Class Initialized
DEBUG - 2019-12-25 15:59:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:59:25 --> Input Class Initialized
INFO - 2019-12-25 15:59:25 --> Language Class Initialized
INFO - 2019-12-25 15:59:25 --> Loader Class Initialized
INFO - 2019-12-25 15:59:25 --> Helper loaded: html_helper
INFO - 2019-12-25 15:59:25 --> Helper loaded: url_helper
INFO - 2019-12-25 15:59:25 --> Helper loaded: form_helper
INFO - 2019-12-25 15:59:25 --> Database Driver Class Initialized
INFO - 2019-12-25 15:59:25 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:59:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:59:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:59:25 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:59:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:59:25 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:59:25 --> Controller Class Initialized
DEBUG - 2019-12-25 15:59:25 --> Create_User constructer got called..
INFO - 2019-12-25 15:59:25 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 15:59:25 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:59:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-25 15:59:25 --> Final output sent to browser
DEBUG - 2019-12-25 15:59:25 --> Total execution time: 0.3810
INFO - 2019-12-25 15:59:29 --> Config Class Initialized
INFO - 2019-12-25 15:59:29 --> Hooks Class Initialized
DEBUG - 2019-12-25 15:59:29 --> UTF-8 Support Enabled
INFO - 2019-12-25 15:59:29 --> Utf8 Class Initialized
INFO - 2019-12-25 15:59:29 --> URI Class Initialized
INFO - 2019-12-25 15:59:29 --> Router Class Initialized
INFO - 2019-12-25 15:59:29 --> Output Class Initialized
INFO - 2019-12-25 15:59:29 --> Security Class Initialized
DEBUG - 2019-12-25 15:59:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 15:59:29 --> Input Class Initialized
INFO - 2019-12-25 15:59:29 --> Language Class Initialized
INFO - 2019-12-25 15:59:29 --> Loader Class Initialized
INFO - 2019-12-25 15:59:29 --> Helper loaded: html_helper
INFO - 2019-12-25 15:59:29 --> Helper loaded: url_helper
INFO - 2019-12-25 15:59:29 --> Helper loaded: form_helper
INFO - 2019-12-25 15:59:29 --> Database Driver Class Initialized
INFO - 2019-12-25 15:59:29 --> Form Validation Class Initialized
DEBUG - 2019-12-25 15:59:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 15:59:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 15:59:29 --> Encryption Class Initialized
DEBUG - 2019-12-25 15:59:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 15:59:29 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 15:59:29 --> Controller Class Initialized
DEBUG - 2019-12-25 15:59:29 --> Create_User constructer got called..
INFO - 2019-12-25 15:59:29 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 15:59:29 --> getAllSubgroup model
DEBUG - 2019-12-25 15:59:29 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 15:59:29 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 15:59:29 --> getAllSubgroup model
DEBUG - 2019-12-25 15:59:29 --> getAllUIMasterData from DB retrived
INFO - 2019-12-25 15:59:29 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 15:59:29 --> Final output sent to browser
DEBUG - 2019-12-25 15:59:29 --> Total execution time: 0.2810
INFO - 2019-12-25 16:00:45 --> Config Class Initialized
INFO - 2019-12-25 16:00:45 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:00:45 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:00:45 --> Utf8 Class Initialized
INFO - 2019-12-25 16:00:45 --> URI Class Initialized
INFO - 2019-12-25 16:00:45 --> Router Class Initialized
INFO - 2019-12-25 16:00:45 --> Output Class Initialized
INFO - 2019-12-25 16:00:45 --> Security Class Initialized
DEBUG - 2019-12-25 16:00:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:00:45 --> Input Class Initialized
INFO - 2019-12-25 16:00:45 --> Language Class Initialized
INFO - 2019-12-25 16:00:45 --> Loader Class Initialized
INFO - 2019-12-25 16:00:45 --> Helper loaded: html_helper
INFO - 2019-12-25 16:00:45 --> Helper loaded: url_helper
INFO - 2019-12-25 16:00:45 --> Helper loaded: form_helper
INFO - 2019-12-25 16:00:45 --> Database Driver Class Initialized
INFO - 2019-12-25 16:00:45 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:00:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:00:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:00:45 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:00:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:00:45 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:00:45 --> Controller Class Initialized
DEBUG - 2019-12-25 16:00:45 --> Create_User constructer got called..
INFO - 2019-12-25 16:00:45 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:00:45 --> getAllSubgroup model
DEBUG - 2019-12-25 16:00:45 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 16:00:45 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:00:46 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 16:00:46 --> Final output sent to browser
DEBUG - 2019-12-25 16:00:46 --> Total execution time: 0.2780
INFO - 2019-12-25 16:00:47 --> Config Class Initialized
INFO - 2019-12-25 16:00:47 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:00:47 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:00:47 --> Utf8 Class Initialized
INFO - 2019-12-25 16:00:47 --> URI Class Initialized
INFO - 2019-12-25 16:00:47 --> Router Class Initialized
INFO - 2019-12-25 16:00:47 --> Output Class Initialized
INFO - 2019-12-25 16:00:47 --> Security Class Initialized
DEBUG - 2019-12-25 16:00:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:00:47 --> Input Class Initialized
INFO - 2019-12-25 16:00:47 --> Language Class Initialized
INFO - 2019-12-25 16:00:47 --> Loader Class Initialized
INFO - 2019-12-25 16:00:47 --> Helper loaded: html_helper
INFO - 2019-12-25 16:00:47 --> Helper loaded: url_helper
INFO - 2019-12-25 16:00:47 --> Helper loaded: form_helper
INFO - 2019-12-25 16:00:47 --> Database Driver Class Initialized
INFO - 2019-12-25 16:00:47 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:00:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:00:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:00:47 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:00:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:00:47 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:00:47 --> Controller Class Initialized
DEBUG - 2019-12-25 16:00:47 --> Create_User constructer got called..
INFO - 2019-12-25 16:00:47 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:00:47 --> getAllSubgroup model
DEBUG - 2019-12-25 16:00:47 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 16:00:47 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:00:47 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 16:00:47 --> Final output sent to browser
DEBUG - 2019-12-25 16:00:47 --> Total execution time: 0.2070
INFO - 2019-12-25 16:01:20 --> Config Class Initialized
INFO - 2019-12-25 16:01:20 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:01:20 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:01:20 --> Utf8 Class Initialized
INFO - 2019-12-25 16:01:20 --> URI Class Initialized
INFO - 2019-12-25 16:01:20 --> Router Class Initialized
INFO - 2019-12-25 16:01:20 --> Output Class Initialized
INFO - 2019-12-25 16:01:20 --> Security Class Initialized
DEBUG - 2019-12-25 16:01:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:01:20 --> Input Class Initialized
INFO - 2019-12-25 16:01:20 --> Language Class Initialized
INFO - 2019-12-25 16:01:20 --> Loader Class Initialized
INFO - 2019-12-25 16:01:20 --> Helper loaded: html_helper
INFO - 2019-12-25 16:01:20 --> Helper loaded: url_helper
INFO - 2019-12-25 16:01:20 --> Helper loaded: form_helper
INFO - 2019-12-25 16:01:20 --> Database Driver Class Initialized
INFO - 2019-12-25 16:01:20 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:01:20 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:01:20 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:01:20 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:01:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:01:20 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:01:20 --> Controller Class Initialized
DEBUG - 2019-12-25 16:01:20 --> Create_User constructer got called..
INFO - 2019-12-25 16:01:20 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:01:20 --> showing all user from db tblusers...
DEBUG - 2019-12-25 16:01:20 --> show_groups from DB
INFO - 2019-12-25 16:01:20 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-25 16:01:20 --> Final output sent to browser
DEBUG - 2019-12-25 16:01:20 --> Total execution time: 0.3400
INFO - 2019-12-25 16:02:18 --> Config Class Initialized
INFO - 2019-12-25 16:02:18 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:02:18 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:02:18 --> Utf8 Class Initialized
INFO - 2019-12-25 16:02:18 --> URI Class Initialized
INFO - 2019-12-25 16:02:18 --> Router Class Initialized
INFO - 2019-12-25 16:02:18 --> Output Class Initialized
INFO - 2019-12-25 16:02:18 --> Security Class Initialized
DEBUG - 2019-12-25 16:02:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:02:18 --> Input Class Initialized
INFO - 2019-12-25 16:02:18 --> Language Class Initialized
INFO - 2019-12-25 16:02:18 --> Loader Class Initialized
INFO - 2019-12-25 16:02:18 --> Helper loaded: html_helper
INFO - 2019-12-25 16:02:18 --> Helper loaded: url_helper
INFO - 2019-12-25 16:02:18 --> Helper loaded: form_helper
INFO - 2019-12-25 16:02:18 --> Database Driver Class Initialized
INFO - 2019-12-25 16:02:18 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:02:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:02:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:02:18 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:02:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:02:18 --> Controller Class Initialized
DEBUG - 2019-12-25 16:02:18 --> Create_User constructer got called..
INFO - 2019-12-25 16:02:18 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:02:18 --> showing all user from db tblusers...
DEBUG - 2019-12-25 16:02:18 --> show_groups from DB
INFO - 2019-12-25 16:02:18 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-25 16:02:18 --> Final output sent to browser
DEBUG - 2019-12-25 16:02:18 --> Total execution time: 0.2520
INFO - 2019-12-25 16:02:24 --> Config Class Initialized
INFO - 2019-12-25 16:02:24 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:02:24 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:02:24 --> Utf8 Class Initialized
INFO - 2019-12-25 16:02:24 --> URI Class Initialized
INFO - 2019-12-25 16:02:24 --> Router Class Initialized
INFO - 2019-12-25 16:02:24 --> Output Class Initialized
INFO - 2019-12-25 16:02:24 --> Security Class Initialized
DEBUG - 2019-12-25 16:02:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:02:24 --> Input Class Initialized
INFO - 2019-12-25 16:02:24 --> Language Class Initialized
INFO - 2019-12-25 16:02:24 --> Loader Class Initialized
INFO - 2019-12-25 16:02:24 --> Helper loaded: html_helper
INFO - 2019-12-25 16:02:24 --> Helper loaded: url_helper
INFO - 2019-12-25 16:02:24 --> Helper loaded: form_helper
INFO - 2019-12-25 16:02:24 --> Database Driver Class Initialized
INFO - 2019-12-25 16:02:24 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:02:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:02:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:02:24 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:02:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:02:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:02:24 --> Controller Class Initialized
DEBUG - 2019-12-25 16:02:24 --> Create_User constructer got called..
INFO - 2019-12-25 16:02:24 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:02:24 --> showing all user from db tblusers...
DEBUG - 2019-12-25 16:02:24 --> show_users from DB
DEBUG - 2019-12-25 16:02:24 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:02:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-25 16:02:24 --> Final output sent to browser
DEBUG - 2019-12-25 16:02:24 --> Total execution time: 0.3880
INFO - 2019-12-25 16:03:21 --> Config Class Initialized
INFO - 2019-12-25 16:03:21 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:03:21 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:03:21 --> Utf8 Class Initialized
INFO - 2019-12-25 16:03:21 --> URI Class Initialized
INFO - 2019-12-25 16:03:21 --> Router Class Initialized
INFO - 2019-12-25 16:03:21 --> Output Class Initialized
INFO - 2019-12-25 16:03:21 --> Security Class Initialized
DEBUG - 2019-12-25 16:03:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:03:21 --> Input Class Initialized
INFO - 2019-12-25 16:03:21 --> Language Class Initialized
INFO - 2019-12-25 16:03:21 --> Loader Class Initialized
INFO - 2019-12-25 16:03:21 --> Helper loaded: html_helper
INFO - 2019-12-25 16:03:21 --> Helper loaded: url_helper
INFO - 2019-12-25 16:03:21 --> Helper loaded: form_helper
INFO - 2019-12-25 16:03:21 --> Database Driver Class Initialized
INFO - 2019-12-25 16:03:21 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:03:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:03:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:03:21 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:03:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:03:21 --> Controller Class Initialized
DEBUG - 2019-12-25 16:03:21 --> Create_User constructer got called..
INFO - 2019-12-25 16:03:21 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:03:21 --> showing all user from db tblusers...
DEBUG - 2019-12-25 16:03:21 --> show_users from DB
DEBUG - 2019-12-25 16:03:21 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:03:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-25 16:03:21 --> Final output sent to browser
DEBUG - 2019-12-25 16:03:21 --> Total execution time: 0.3130
INFO - 2019-12-25 16:03:26 --> Config Class Initialized
INFO - 2019-12-25 16:03:26 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:03:26 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:03:26 --> Utf8 Class Initialized
INFO - 2019-12-25 16:03:26 --> URI Class Initialized
INFO - 2019-12-25 16:03:26 --> Router Class Initialized
INFO - 2019-12-25 16:03:26 --> Output Class Initialized
INFO - 2019-12-25 16:03:26 --> Security Class Initialized
DEBUG - 2019-12-25 16:03:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:03:26 --> Input Class Initialized
INFO - 2019-12-25 16:03:26 --> Language Class Initialized
INFO - 2019-12-25 16:03:26 --> Loader Class Initialized
INFO - 2019-12-25 16:03:26 --> Helper loaded: html_helper
INFO - 2019-12-25 16:03:26 --> Helper loaded: url_helper
INFO - 2019-12-25 16:03:26 --> Helper loaded: form_helper
INFO - 2019-12-25 16:03:26 --> Database Driver Class Initialized
INFO - 2019-12-25 16:03:27 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:03:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:03:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:03:27 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:03:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:03:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:03:27 --> Controller Class Initialized
DEBUG - 2019-12-25 16:03:27 --> Create_User constructer got called..
INFO - 2019-12-25 16:03:27 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:03:27 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:03:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-25 16:03:27 --> Final output sent to browser
DEBUG - 2019-12-25 16:03:27 --> Total execution time: 0.2600
INFO - 2019-12-25 16:04:50 --> Config Class Initialized
INFO - 2019-12-25 16:04:50 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:04:50 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:04:50 --> Utf8 Class Initialized
INFO - 2019-12-25 16:04:50 --> URI Class Initialized
INFO - 2019-12-25 16:04:50 --> Router Class Initialized
INFO - 2019-12-25 16:04:50 --> Output Class Initialized
INFO - 2019-12-25 16:04:50 --> Security Class Initialized
DEBUG - 2019-12-25 16:04:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:04:50 --> Input Class Initialized
INFO - 2019-12-25 16:04:50 --> Language Class Initialized
INFO - 2019-12-25 16:04:50 --> Loader Class Initialized
INFO - 2019-12-25 16:04:50 --> Helper loaded: html_helper
INFO - 2019-12-25 16:04:50 --> Helper loaded: url_helper
INFO - 2019-12-25 16:04:50 --> Helper loaded: form_helper
INFO - 2019-12-25 16:04:50 --> Database Driver Class Initialized
INFO - 2019-12-25 16:04:50 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:04:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:04:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:04:50 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:04:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:04:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:04:50 --> Controller Class Initialized
DEBUG - 2019-12-25 16:04:50 --> Create_User constructer got called..
INFO - 2019-12-25 16:04:50 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:04:50 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:04:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-25 16:04:50 --> Final output sent to browser
DEBUG - 2019-12-25 16:04:50 --> Total execution time: 0.3280
INFO - 2019-12-25 16:04:55 --> Config Class Initialized
INFO - 2019-12-25 16:04:55 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:04:55 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:04:55 --> Utf8 Class Initialized
INFO - 2019-12-25 16:04:55 --> URI Class Initialized
INFO - 2019-12-25 16:04:55 --> Router Class Initialized
INFO - 2019-12-25 16:04:55 --> Output Class Initialized
INFO - 2019-12-25 16:04:55 --> Security Class Initialized
DEBUG - 2019-12-25 16:04:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:04:55 --> Input Class Initialized
INFO - 2019-12-25 16:04:55 --> Language Class Initialized
INFO - 2019-12-25 16:04:55 --> Loader Class Initialized
INFO - 2019-12-25 16:04:55 --> Helper loaded: html_helper
INFO - 2019-12-25 16:04:55 --> Helper loaded: url_helper
INFO - 2019-12-25 16:04:55 --> Helper loaded: form_helper
INFO - 2019-12-25 16:04:55 --> Database Driver Class Initialized
INFO - 2019-12-25 16:04:55 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:04:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:04:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:04:55 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:04:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:04:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:04:55 --> Controller Class Initialized
DEBUG - 2019-12-25 16:04:55 --> Create_User constructer got called..
INFO - 2019-12-25 16:04:55 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:04:55 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:04:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-25 16:04:55 --> Final output sent to browser
DEBUG - 2019-12-25 16:04:55 --> Total execution time: 0.3400
INFO - 2019-12-25 16:04:57 --> Config Class Initialized
INFO - 2019-12-25 16:04:57 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:04:57 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:04:57 --> Utf8 Class Initialized
INFO - 2019-12-25 16:04:57 --> URI Class Initialized
INFO - 2019-12-25 16:04:57 --> Router Class Initialized
INFO - 2019-12-25 16:04:57 --> Output Class Initialized
INFO - 2019-12-25 16:04:57 --> Security Class Initialized
DEBUG - 2019-12-25 16:04:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:04:57 --> Input Class Initialized
INFO - 2019-12-25 16:04:57 --> Language Class Initialized
INFO - 2019-12-25 16:04:57 --> Loader Class Initialized
INFO - 2019-12-25 16:04:57 --> Helper loaded: html_helper
INFO - 2019-12-25 16:04:57 --> Helper loaded: url_helper
INFO - 2019-12-25 16:04:57 --> Helper loaded: form_helper
INFO - 2019-12-25 16:04:57 --> Database Driver Class Initialized
INFO - 2019-12-25 16:04:57 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:04:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:04:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:04:57 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:04:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:04:57 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:04:57 --> Controller Class Initialized
DEBUG - 2019-12-25 16:04:57 --> loading Configarable_Login model...
INFO - 2019-12-25 16:04:57 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-25 16:04:57 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-25 16:04:57 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-25 16:04:57 --> Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:04:57 --> loading configurable menu with result=Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:04:57 --> loading view public\Dashboard
INFO - 2019-12-25 16:04:57 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:04:57 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-25 16:04:57 --> Final output sent to browser
DEBUG - 2019-12-25 16:04:57 --> Total execution time: 0.2750
INFO - 2019-12-25 16:05:52 --> Config Class Initialized
INFO - 2019-12-25 16:05:52 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:05:52 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:05:52 --> Utf8 Class Initialized
INFO - 2019-12-25 16:05:52 --> URI Class Initialized
INFO - 2019-12-25 16:05:52 --> Router Class Initialized
INFO - 2019-12-25 16:05:52 --> Output Class Initialized
INFO - 2019-12-25 16:05:52 --> Security Class Initialized
DEBUG - 2019-12-25 16:05:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:05:52 --> Input Class Initialized
INFO - 2019-12-25 16:05:52 --> Language Class Initialized
INFO - 2019-12-25 16:05:52 --> Loader Class Initialized
INFO - 2019-12-25 16:05:52 --> Helper loaded: html_helper
INFO - 2019-12-25 16:05:52 --> Helper loaded: url_helper
INFO - 2019-12-25 16:05:52 --> Helper loaded: form_helper
INFO - 2019-12-25 16:05:52 --> Database Driver Class Initialized
INFO - 2019-12-25 16:05:52 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:05:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:05:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:05:52 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:05:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:05:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:05:52 --> Controller Class Initialized
DEBUG - 2019-12-25 16:05:52 --> loading Configarable_Login model...
INFO - 2019-12-25 16:05:52 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-25 16:05:52 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-25 16:05:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-25 16:05:52 --> Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:05:52 --> loading configurable menu with result=Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:05:52 --> loading view public\Dashboard
INFO - 2019-12-25 16:05:52 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:05:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-25 16:05:52 --> Final output sent to browser
DEBUG - 2019-12-25 16:05:52 --> Total execution time: 0.3580
INFO - 2019-12-25 16:06:14 --> Config Class Initialized
INFO - 2019-12-25 16:06:14 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:06:14 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:06:14 --> Utf8 Class Initialized
INFO - 2019-12-25 16:06:14 --> URI Class Initialized
INFO - 2019-12-25 16:06:14 --> Router Class Initialized
INFO - 2019-12-25 16:06:14 --> Output Class Initialized
INFO - 2019-12-25 16:06:14 --> Security Class Initialized
DEBUG - 2019-12-25 16:06:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:06:14 --> Input Class Initialized
INFO - 2019-12-25 16:06:14 --> Language Class Initialized
INFO - 2019-12-25 16:06:14 --> Loader Class Initialized
INFO - 2019-12-25 16:06:14 --> Helper loaded: html_helper
INFO - 2019-12-25 16:06:14 --> Helper loaded: url_helper
INFO - 2019-12-25 16:06:14 --> Helper loaded: form_helper
INFO - 2019-12-25 16:06:14 --> Database Driver Class Initialized
INFO - 2019-12-25 16:06:14 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:06:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:06:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:06:14 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:06:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:06:14 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:06:14 --> Controller Class Initialized
DEBUG - 2019-12-25 16:06:14 --> loading Configarable_Login model...
INFO - 2019-12-25 16:06:14 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-25 16:06:14 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-25 16:06:14 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-25 16:06:14 --> Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:06:14 --> loading configurable menu with result=Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:06:14 --> loading view public\Dashboard
INFO - 2019-12-25 16:06:14 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:06:14 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-25 16:06:14 --> Final output sent to browser
DEBUG - 2019-12-25 16:06:14 --> Total execution time: 0.2270
INFO - 2019-12-25 16:06:17 --> Config Class Initialized
INFO - 2019-12-25 16:06:17 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:06:17 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:06:17 --> Utf8 Class Initialized
INFO - 2019-12-25 16:06:17 --> URI Class Initialized
INFO - 2019-12-25 16:06:17 --> Router Class Initialized
INFO - 2019-12-25 16:06:17 --> Output Class Initialized
INFO - 2019-12-25 16:06:17 --> Security Class Initialized
DEBUG - 2019-12-25 16:06:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:06:17 --> Input Class Initialized
INFO - 2019-12-25 16:06:17 --> Language Class Initialized
INFO - 2019-12-25 16:06:17 --> Loader Class Initialized
INFO - 2019-12-25 16:06:17 --> Helper loaded: html_helper
INFO - 2019-12-25 16:06:17 --> Helper loaded: url_helper
INFO - 2019-12-25 16:06:17 --> Helper loaded: form_helper
INFO - 2019-12-25 16:06:17 --> Database Driver Class Initialized
INFO - 2019-12-25 16:06:17 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:06:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:06:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:06:17 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:06:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:06:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:06:17 --> Controller Class Initialized
DEBUG - 2019-12-25 16:06:17 --> User_Right constructer got called..
INFO - 2019-12-25 16:06:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-25 16:06:17 --> Final output sent to browser
DEBUG - 2019-12-25 16:06:17 --> Total execution time: 0.1850
INFO - 2019-12-25 16:06:44 --> Config Class Initialized
INFO - 2019-12-25 16:06:44 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:06:44 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:06:44 --> Utf8 Class Initialized
INFO - 2019-12-25 16:06:44 --> URI Class Initialized
INFO - 2019-12-25 16:06:44 --> Router Class Initialized
INFO - 2019-12-25 16:06:44 --> Output Class Initialized
INFO - 2019-12-25 16:06:44 --> Security Class Initialized
DEBUG - 2019-12-25 16:06:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:06:44 --> Input Class Initialized
INFO - 2019-12-25 16:06:44 --> Language Class Initialized
INFO - 2019-12-25 16:06:44 --> Loader Class Initialized
INFO - 2019-12-25 16:06:44 --> Helper loaded: html_helper
INFO - 2019-12-25 16:06:44 --> Helper loaded: url_helper
INFO - 2019-12-25 16:06:44 --> Helper loaded: form_helper
INFO - 2019-12-25 16:06:44 --> Database Driver Class Initialized
INFO - 2019-12-25 16:06:45 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:06:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:06:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:06:45 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:06:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:06:45 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:06:45 --> Controller Class Initialized
DEBUG - 2019-12-25 16:06:45 --> User_Right constructer got called..
INFO - 2019-12-25 16:06:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-25 16:06:45 --> Final output sent to browser
DEBUG - 2019-12-25 16:06:45 --> Total execution time: 1.4251
INFO - 2019-12-25 16:07:06 --> Config Class Initialized
INFO - 2019-12-25 16:07:06 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:07:06 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:07:06 --> Utf8 Class Initialized
INFO - 2019-12-25 16:07:06 --> URI Class Initialized
INFO - 2019-12-25 16:07:06 --> Router Class Initialized
INFO - 2019-12-25 16:07:06 --> Output Class Initialized
INFO - 2019-12-25 16:07:06 --> Security Class Initialized
DEBUG - 2019-12-25 16:07:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:07:06 --> Input Class Initialized
INFO - 2019-12-25 16:07:06 --> Language Class Initialized
INFO - 2019-12-25 16:07:06 --> Loader Class Initialized
INFO - 2019-12-25 16:07:06 --> Helper loaded: html_helper
INFO - 2019-12-25 16:07:06 --> Helper loaded: url_helper
INFO - 2019-12-25 16:07:06 --> Helper loaded: form_helper
INFO - 2019-12-25 16:07:06 --> Database Driver Class Initialized
INFO - 2019-12-25 16:07:06 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:07:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:07:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:07:06 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:07:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:07:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:07:06 --> Controller Class Initialized
DEBUG - 2019-12-25 16:07:06 --> User_Right constructer got called..
INFO - 2019-12-25 16:07:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-25 16:07:06 --> Final output sent to browser
DEBUG - 2019-12-25 16:07:06 --> Total execution time: 0.2530
INFO - 2019-12-25 16:07:11 --> Config Class Initialized
INFO - 2019-12-25 16:07:11 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:07:11 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:07:11 --> Utf8 Class Initialized
INFO - 2019-12-25 16:07:11 --> URI Class Initialized
INFO - 2019-12-25 16:07:11 --> Router Class Initialized
INFO - 2019-12-25 16:07:11 --> Output Class Initialized
INFO - 2019-12-25 16:07:11 --> Security Class Initialized
DEBUG - 2019-12-25 16:07:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:07:11 --> Input Class Initialized
INFO - 2019-12-25 16:07:11 --> Language Class Initialized
INFO - 2019-12-25 16:07:11 --> Loader Class Initialized
INFO - 2019-12-25 16:07:11 --> Helper loaded: html_helper
INFO - 2019-12-25 16:07:11 --> Helper loaded: url_helper
INFO - 2019-12-25 16:07:11 --> Helper loaded: form_helper
INFO - 2019-12-25 16:07:11 --> Database Driver Class Initialized
INFO - 2019-12-25 16:07:11 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:07:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:07:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:07:11 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:07:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:07:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:07:11 --> Controller Class Initialized
DEBUG - 2019-12-25 16:07:11 --> Create_User constructer got called..
INFO - 2019-12-25 16:07:11 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:07:11 --> show all profile data modelDevOss
DEBUG - 2019-12-25 16:07:11 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 16:07:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-25 16:07:11 --> Final output sent to browser
DEBUG - 2019-12-25 16:07:11 --> Total execution time: 0.2230
INFO - 2019-12-25 16:07:30 --> Config Class Initialized
INFO - 2019-12-25 16:07:30 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:07:30 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:07:30 --> Utf8 Class Initialized
INFO - 2019-12-25 16:07:30 --> URI Class Initialized
INFO - 2019-12-25 16:07:30 --> Router Class Initialized
INFO - 2019-12-25 16:07:30 --> Output Class Initialized
INFO - 2019-12-25 16:07:30 --> Security Class Initialized
DEBUG - 2019-12-25 16:07:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:07:30 --> Input Class Initialized
INFO - 2019-12-25 16:07:30 --> Language Class Initialized
INFO - 2019-12-25 16:07:30 --> Loader Class Initialized
INFO - 2019-12-25 16:07:30 --> Helper loaded: html_helper
INFO - 2019-12-25 16:07:30 --> Helper loaded: url_helper
INFO - 2019-12-25 16:07:30 --> Helper loaded: form_helper
INFO - 2019-12-25 16:07:30 --> Database Driver Class Initialized
INFO - 2019-12-25 16:07:30 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:07:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:07:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:07:30 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:07:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:07:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:07:30 --> Controller Class Initialized
DEBUG - 2019-12-25 16:07:30 --> calling constructor page Change_password
DEBUG - 2019-12-25 16:07:30 --> calling user access block = 52
DEBUG - 2019-12-25 16:07:30 --> index page Change_password
DEBUG - 2019-12-25 16:07:30 --> public/User/change_password
INFO - 2019-12-25 16:07:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-25 16:07:30 --> Final output sent to browser
DEBUG - 2019-12-25 16:07:30 --> Total execution time: 0.2290
INFO - 2019-12-25 16:08:22 --> Config Class Initialized
INFO - 2019-12-25 16:08:22 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:08:22 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:08:22 --> Utf8 Class Initialized
INFO - 2019-12-25 16:08:22 --> URI Class Initialized
INFO - 2019-12-25 16:08:22 --> Router Class Initialized
INFO - 2019-12-25 16:08:22 --> Output Class Initialized
INFO - 2019-12-25 16:08:22 --> Security Class Initialized
DEBUG - 2019-12-25 16:08:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:08:22 --> Input Class Initialized
INFO - 2019-12-25 16:08:22 --> Language Class Initialized
INFO - 2019-12-25 16:08:22 --> Loader Class Initialized
INFO - 2019-12-25 16:08:22 --> Helper loaded: html_helper
INFO - 2019-12-25 16:08:22 --> Helper loaded: url_helper
INFO - 2019-12-25 16:08:22 --> Helper loaded: form_helper
INFO - 2019-12-25 16:08:23 --> Database Driver Class Initialized
INFO - 2019-12-25 16:08:23 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:08:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:08:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:08:23 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:08:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:08:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:08:23 --> Controller Class Initialized
DEBUG - 2019-12-25 16:08:23 --> calling constructor page Change_password
DEBUG - 2019-12-25 16:08:23 --> calling user access block = 52
DEBUG - 2019-12-25 16:08:23 --> index page Change_password
DEBUG - 2019-12-25 16:08:23 --> public/User/change_password
INFO - 2019-12-25 16:08:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-25 16:08:23 --> Final output sent to browser
DEBUG - 2019-12-25 16:08:23 --> Total execution time: 0.3840
INFO - 2019-12-25 16:08:25 --> Config Class Initialized
INFO - 2019-12-25 16:08:25 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:08:25 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:08:25 --> Utf8 Class Initialized
INFO - 2019-12-25 16:08:25 --> URI Class Initialized
INFO - 2019-12-25 16:08:25 --> Router Class Initialized
INFO - 2019-12-25 16:08:25 --> Output Class Initialized
INFO - 2019-12-25 16:08:25 --> Security Class Initialized
DEBUG - 2019-12-25 16:08:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:08:25 --> Input Class Initialized
INFO - 2019-12-25 16:08:25 --> Language Class Initialized
INFO - 2019-12-25 16:08:25 --> Loader Class Initialized
INFO - 2019-12-25 16:08:25 --> Helper loaded: html_helper
INFO - 2019-12-25 16:08:25 --> Helper loaded: url_helper
INFO - 2019-12-25 16:08:25 --> Helper loaded: form_helper
INFO - 2019-12-25 16:08:25 --> Database Driver Class Initialized
INFO - 2019-12-25 16:08:25 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:08:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:08:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:08:25 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:08:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:08:25 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:08:25 --> Controller Class Initialized
INFO - 2019-12-25 16:08:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-25 16:08:25 --> Final output sent to browser
DEBUG - 2019-12-25 16:08:25 --> Total execution time: 0.2980
INFO - 2019-12-25 16:08:54 --> Config Class Initialized
INFO - 2019-12-25 16:08:54 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:08:54 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:08:54 --> Utf8 Class Initialized
INFO - 2019-12-25 16:08:54 --> URI Class Initialized
INFO - 2019-12-25 16:08:54 --> Router Class Initialized
INFO - 2019-12-25 16:08:54 --> Output Class Initialized
INFO - 2019-12-25 16:08:54 --> Security Class Initialized
DEBUG - 2019-12-25 16:08:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:08:54 --> Input Class Initialized
INFO - 2019-12-25 16:08:54 --> Language Class Initialized
INFO - 2019-12-25 16:08:54 --> Loader Class Initialized
INFO - 2019-12-25 16:08:54 --> Helper loaded: html_helper
INFO - 2019-12-25 16:08:54 --> Helper loaded: url_helper
INFO - 2019-12-25 16:08:54 --> Helper loaded: form_helper
INFO - 2019-12-25 16:08:54 --> Database Driver Class Initialized
INFO - 2019-12-25 16:08:54 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:08:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:08:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:08:54 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:08:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:08:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:08:54 --> Controller Class Initialized
INFO - 2019-12-25 16:08:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-25 16:08:54 --> Final output sent to browser
DEBUG - 2019-12-25 16:08:54 --> Total execution time: 0.2190
INFO - 2019-12-25 16:08:58 --> Config Class Initialized
INFO - 2019-12-25 16:08:58 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:08:58 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:08:58 --> Utf8 Class Initialized
INFO - 2019-12-25 16:08:58 --> URI Class Initialized
INFO - 2019-12-25 16:08:58 --> Router Class Initialized
INFO - 2019-12-25 16:08:58 --> Output Class Initialized
INFO - 2019-12-25 16:08:58 --> Security Class Initialized
DEBUG - 2019-12-25 16:08:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:08:58 --> Input Class Initialized
INFO - 2019-12-25 16:08:58 --> Language Class Initialized
INFO - 2019-12-25 16:08:58 --> Loader Class Initialized
INFO - 2019-12-25 16:08:58 --> Helper loaded: html_helper
INFO - 2019-12-25 16:08:58 --> Helper loaded: url_helper
INFO - 2019-12-25 16:08:58 --> Helper loaded: form_helper
INFO - 2019-12-25 16:08:58 --> Database Driver Class Initialized
INFO - 2019-12-25 16:08:58 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:08:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:08:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:08:58 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:08:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:08:58 --> Controller Class Initialized
INFO - 2019-12-25 16:08:58 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:08:58 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:08:58 --> Pagination Class Initialized
INFO - 2019-12-25 16:08:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-25 16:08:58 --> Final output sent to browser
DEBUG - 2019-12-25 16:08:58 --> Total execution time: 0.2940
INFO - 2019-12-25 16:09:18 --> Config Class Initialized
INFO - 2019-12-25 16:09:18 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:09:18 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:09:18 --> Utf8 Class Initialized
INFO - 2019-12-25 16:09:18 --> URI Class Initialized
INFO - 2019-12-25 16:09:18 --> Router Class Initialized
INFO - 2019-12-25 16:09:18 --> Output Class Initialized
INFO - 2019-12-25 16:09:18 --> Security Class Initialized
DEBUG - 2019-12-25 16:09:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:09:18 --> Input Class Initialized
INFO - 2019-12-25 16:09:18 --> Language Class Initialized
INFO - 2019-12-25 16:09:18 --> Loader Class Initialized
INFO - 2019-12-25 16:09:18 --> Helper loaded: html_helper
INFO - 2019-12-25 16:09:18 --> Helper loaded: url_helper
INFO - 2019-12-25 16:09:18 --> Helper loaded: form_helper
INFO - 2019-12-25 16:09:18 --> Database Driver Class Initialized
INFO - 2019-12-25 16:09:18 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:09:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:09:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:09:18 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:09:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:09:18 --> Controller Class Initialized
INFO - 2019-12-25 16:09:18 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:09:18 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:09:18 --> Pagination Class Initialized
INFO - 2019-12-25 16:09:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-25 16:09:19 --> Final output sent to browser
DEBUG - 2019-12-25 16:09:19 --> Total execution time: 0.2810
INFO - 2019-12-25 16:09:37 --> Config Class Initialized
INFO - 2019-12-25 16:09:37 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:09:37 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:09:37 --> Utf8 Class Initialized
INFO - 2019-12-25 16:09:37 --> URI Class Initialized
INFO - 2019-12-25 16:09:37 --> Router Class Initialized
INFO - 2019-12-25 16:09:37 --> Output Class Initialized
INFO - 2019-12-25 16:09:37 --> Security Class Initialized
DEBUG - 2019-12-25 16:09:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:09:37 --> Input Class Initialized
INFO - 2019-12-25 16:09:37 --> Language Class Initialized
INFO - 2019-12-25 16:09:37 --> Loader Class Initialized
INFO - 2019-12-25 16:09:37 --> Helper loaded: html_helper
INFO - 2019-12-25 16:09:37 --> Helper loaded: url_helper
INFO - 2019-12-25 16:09:37 --> Helper loaded: form_helper
INFO - 2019-12-25 16:09:37 --> Database Driver Class Initialized
INFO - 2019-12-25 16:09:37 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:09:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:09:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:09:37 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:09:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:09:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:09:37 --> Controller Class Initialized
INFO - 2019-12-25 16:09:37 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:09:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:09:37 --> Pagination Class Initialized
INFO - 2019-12-25 16:09:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-25 16:09:37 --> Final output sent to browser
DEBUG - 2019-12-25 16:09:37 --> Total execution time: 0.3960
INFO - 2019-12-25 16:09:40 --> Config Class Initialized
INFO - 2019-12-25 16:09:40 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:09:40 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:09:40 --> Utf8 Class Initialized
INFO - 2019-12-25 16:09:40 --> URI Class Initialized
INFO - 2019-12-25 16:09:40 --> Router Class Initialized
INFO - 2019-12-25 16:09:40 --> Output Class Initialized
INFO - 2019-12-25 16:09:40 --> Security Class Initialized
DEBUG - 2019-12-25 16:09:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:09:40 --> Input Class Initialized
INFO - 2019-12-25 16:09:40 --> Language Class Initialized
INFO - 2019-12-25 16:09:40 --> Loader Class Initialized
INFO - 2019-12-25 16:09:40 --> Helper loaded: html_helper
INFO - 2019-12-25 16:09:40 --> Helper loaded: url_helper
INFO - 2019-12-25 16:09:40 --> Helper loaded: form_helper
INFO - 2019-12-25 16:09:40 --> Database Driver Class Initialized
INFO - 2019-12-25 16:09:40 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:09:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:09:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:09:40 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:09:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:09:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:09:41 --> Controller Class Initialized
INFO - 2019-12-25 16:09:41 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:09:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:09:41 --> Pagination Class Initialized
INFO - 2019-12-25 16:09:41 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2019-12-25 16:09:41 --> Final output sent to browser
DEBUG - 2019-12-25 16:09:41 --> Total execution time: 0.2420
INFO - 2019-12-25 16:09:46 --> Config Class Initialized
INFO - 2019-12-25 16:09:46 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:09:46 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:09:46 --> Utf8 Class Initialized
INFO - 2019-12-25 16:09:46 --> URI Class Initialized
INFO - 2019-12-25 16:09:46 --> Router Class Initialized
INFO - 2019-12-25 16:09:46 --> Output Class Initialized
INFO - 2019-12-25 16:09:46 --> Security Class Initialized
DEBUG - 2019-12-25 16:09:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:09:46 --> Input Class Initialized
INFO - 2019-12-25 16:09:46 --> Language Class Initialized
INFO - 2019-12-25 16:09:46 --> Loader Class Initialized
INFO - 2019-12-25 16:09:46 --> Helper loaded: html_helper
INFO - 2019-12-25 16:09:46 --> Helper loaded: url_helper
INFO - 2019-12-25 16:09:46 --> Helper loaded: form_helper
INFO - 2019-12-25 16:09:46 --> Database Driver Class Initialized
INFO - 2019-12-25 16:09:46 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:09:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:09:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:09:46 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:09:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:09:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:09:46 --> Controller Class Initialized
DEBUG - 2019-12-25 16:09:46 --> Create_User constructer got called..
INFO - 2019-12-25 16:09:46 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:09:46 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:09:46 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-25 16:09:46 --> Final output sent to browser
DEBUG - 2019-12-25 16:09:46 --> Total execution time: 0.2900
INFO - 2019-12-25 16:09:57 --> Config Class Initialized
INFO - 2019-12-25 16:09:57 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:09:58 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:09:58 --> Utf8 Class Initialized
INFO - 2019-12-25 16:09:58 --> URI Class Initialized
INFO - 2019-12-25 16:09:58 --> Router Class Initialized
INFO - 2019-12-25 16:09:58 --> Output Class Initialized
INFO - 2019-12-25 16:09:58 --> Security Class Initialized
DEBUG - 2019-12-25 16:09:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:09:58 --> Input Class Initialized
INFO - 2019-12-25 16:09:58 --> Language Class Initialized
INFO - 2019-12-25 16:09:58 --> Loader Class Initialized
INFO - 2019-12-25 16:09:58 --> Helper loaded: html_helper
INFO - 2019-12-25 16:09:58 --> Helper loaded: url_helper
INFO - 2019-12-25 16:09:58 --> Helper loaded: form_helper
INFO - 2019-12-25 16:09:58 --> Database Driver Class Initialized
INFO - 2019-12-25 16:09:58 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:09:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:09:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:09:58 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:09:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:09:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:09:58 --> Controller Class Initialized
DEBUG - 2019-12-25 16:09:58 --> Create_User constructer got called..
INFO - 2019-12-25 16:09:58 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:09:58 --> getAllSubgroup model
DEBUG - 2019-12-25 16:09:58 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 16:09:58 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:09:58 --> getAllSubgroup model
DEBUG - 2019-12-25 16:09:58 --> getAllUIMasterData from DB retrived
INFO - 2019-12-25 16:09:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 16:09:58 --> Final output sent to browser
DEBUG - 2019-12-25 16:09:58 --> Total execution time: 0.2880
INFO - 2019-12-25 16:11:13 --> Config Class Initialized
INFO - 2019-12-25 16:11:13 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:11:13 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:11:13 --> Utf8 Class Initialized
INFO - 2019-12-25 16:11:13 --> URI Class Initialized
INFO - 2019-12-25 16:11:13 --> Router Class Initialized
INFO - 2019-12-25 16:11:13 --> Output Class Initialized
INFO - 2019-12-25 16:11:13 --> Security Class Initialized
DEBUG - 2019-12-25 16:11:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:11:13 --> Input Class Initialized
INFO - 2019-12-25 16:11:13 --> Language Class Initialized
INFO - 2019-12-25 16:11:13 --> Loader Class Initialized
INFO - 2019-12-25 16:11:13 --> Helper loaded: html_helper
INFO - 2019-12-25 16:11:13 --> Helper loaded: url_helper
INFO - 2019-12-25 16:11:13 --> Helper loaded: form_helper
INFO - 2019-12-25 16:11:14 --> Database Driver Class Initialized
INFO - 2019-12-25 16:11:14 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:11:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:11:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:11:14 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:11:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:11:14 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:11:14 --> Controller Class Initialized
DEBUG - 2019-12-25 16:11:14 --> Create_User constructer got called..
INFO - 2019-12-25 16:11:14 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:11:14 --> getAllSubgroup model
DEBUG - 2019-12-25 16:11:14 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 16:11:14 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:11:14 --> getAllSubgroup model
DEBUG - 2019-12-25 16:11:14 --> getAllUIMasterData from DB retrived
INFO - 2019-12-25 16:11:14 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 16:11:14 --> Final output sent to browser
DEBUG - 2019-12-25 16:11:14 --> Total execution time: 0.2360
INFO - 2019-12-25 16:11:47 --> Config Class Initialized
INFO - 2019-12-25 16:11:47 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:11:47 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:11:47 --> Utf8 Class Initialized
INFO - 2019-12-25 16:11:47 --> URI Class Initialized
INFO - 2019-12-25 16:11:47 --> Router Class Initialized
INFO - 2019-12-25 16:11:47 --> Output Class Initialized
INFO - 2019-12-25 16:11:47 --> Security Class Initialized
DEBUG - 2019-12-25 16:11:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:11:47 --> Input Class Initialized
INFO - 2019-12-25 16:11:47 --> Language Class Initialized
INFO - 2019-12-25 16:11:47 --> Loader Class Initialized
INFO - 2019-12-25 16:11:47 --> Helper loaded: html_helper
INFO - 2019-12-25 16:11:47 --> Helper loaded: url_helper
INFO - 2019-12-25 16:11:47 --> Helper loaded: form_helper
INFO - 2019-12-25 16:11:47 --> Database Driver Class Initialized
INFO - 2019-12-25 16:11:47 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:11:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:11:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:11:47 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:11:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:11:47 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:11:47 --> Controller Class Initialized
DEBUG - 2019-12-25 16:11:47 --> loading Configarable_Login model...
INFO - 2019-12-25 16:11:47 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-25 16:11:47 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-25 16:11:47 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-25 16:11:47 --> Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:11:47 --> loading configurable menu with result=Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:11:47 --> loading view public\Dashboard
INFO - 2019-12-25 16:11:47 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:11:47 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-25 16:11:47 --> Final output sent to browser
DEBUG - 2019-12-25 16:11:47 --> Total execution time: 0.2970
INFO - 2019-12-25 16:11:49 --> Config Class Initialized
INFO - 2019-12-25 16:11:49 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:11:49 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:11:49 --> Utf8 Class Initialized
INFO - 2019-12-25 16:11:49 --> URI Class Initialized
INFO - 2019-12-25 16:11:49 --> Router Class Initialized
INFO - 2019-12-25 16:11:49 --> Output Class Initialized
INFO - 2019-12-25 16:11:49 --> Security Class Initialized
DEBUG - 2019-12-25 16:11:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:11:49 --> Input Class Initialized
INFO - 2019-12-25 16:11:49 --> Language Class Initialized
INFO - 2019-12-25 16:11:49 --> Loader Class Initialized
INFO - 2019-12-25 16:11:49 --> Helper loaded: html_helper
INFO - 2019-12-25 16:11:49 --> Helper loaded: url_helper
INFO - 2019-12-25 16:11:49 --> Helper loaded: form_helper
INFO - 2019-12-25 16:11:49 --> Database Driver Class Initialized
INFO - 2019-12-25 16:11:49 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:11:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:11:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:11:49 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:11:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:11:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:11:49 --> Controller Class Initialized
DEBUG - 2019-12-25 16:11:49 --> User_Right constructer got called..
INFO - 2019-12-25 16:11:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-25 16:11:49 --> Final output sent to browser
DEBUG - 2019-12-25 16:11:49 --> Total execution time: 0.2410
INFO - 2019-12-25 16:11:50 --> Config Class Initialized
INFO - 2019-12-25 16:11:50 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:11:50 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:11:50 --> Utf8 Class Initialized
INFO - 2019-12-25 16:11:50 --> URI Class Initialized
INFO - 2019-12-25 16:11:50 --> Router Class Initialized
INFO - 2019-12-25 16:11:50 --> Output Class Initialized
INFO - 2019-12-25 16:11:50 --> Security Class Initialized
DEBUG - 2019-12-25 16:11:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:11:50 --> Input Class Initialized
INFO - 2019-12-25 16:11:50 --> Language Class Initialized
INFO - 2019-12-25 16:11:51 --> Loader Class Initialized
INFO - 2019-12-25 16:11:51 --> Helper loaded: html_helper
INFO - 2019-12-25 16:11:51 --> Helper loaded: url_helper
INFO - 2019-12-25 16:11:51 --> Helper loaded: form_helper
INFO - 2019-12-25 16:11:51 --> Database Driver Class Initialized
INFO - 2019-12-25 16:11:51 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:11:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:11:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:11:51 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:11:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:11:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:11:51 --> Controller Class Initialized
DEBUG - 2019-12-25 16:11:51 --> calling constructor page Change_password
DEBUG - 2019-12-25 16:11:51 --> calling user access block = 52
DEBUG - 2019-12-25 16:11:51 --> index page Change_password
DEBUG - 2019-12-25 16:11:51 --> public/User/change_password
INFO - 2019-12-25 16:11:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-25 16:11:51 --> Final output sent to browser
DEBUG - 2019-12-25 16:11:51 --> Total execution time: 0.2220
INFO - 2019-12-25 16:11:52 --> Config Class Initialized
INFO - 2019-12-25 16:11:52 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:11:52 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:11:52 --> Utf8 Class Initialized
INFO - 2019-12-25 16:11:52 --> URI Class Initialized
INFO - 2019-12-25 16:11:52 --> Router Class Initialized
INFO - 2019-12-25 16:11:52 --> Output Class Initialized
INFO - 2019-12-25 16:11:52 --> Security Class Initialized
DEBUG - 2019-12-25 16:11:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:11:52 --> Input Class Initialized
INFO - 2019-12-25 16:11:52 --> Language Class Initialized
INFO - 2019-12-25 16:11:52 --> Loader Class Initialized
INFO - 2019-12-25 16:11:52 --> Helper loaded: html_helper
INFO - 2019-12-25 16:11:52 --> Helper loaded: url_helper
INFO - 2019-12-25 16:11:52 --> Helper loaded: form_helper
INFO - 2019-12-25 16:11:52 --> Database Driver Class Initialized
INFO - 2019-12-25 16:11:52 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:11:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:11:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:11:52 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:11:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:11:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:11:52 --> Controller Class Initialized
INFO - 2019-12-25 16:11:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-25 16:11:52 --> Final output sent to browser
DEBUG - 2019-12-25 16:11:52 --> Total execution time: 0.2240
INFO - 2019-12-25 16:11:54 --> Config Class Initialized
INFO - 2019-12-25 16:11:54 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:11:54 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:11:54 --> Utf8 Class Initialized
INFO - 2019-12-25 16:11:54 --> URI Class Initialized
INFO - 2019-12-25 16:11:54 --> Router Class Initialized
INFO - 2019-12-25 16:11:54 --> Output Class Initialized
INFO - 2019-12-25 16:11:54 --> Security Class Initialized
DEBUG - 2019-12-25 16:11:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:11:54 --> Input Class Initialized
INFO - 2019-12-25 16:11:54 --> Language Class Initialized
INFO - 2019-12-25 16:11:54 --> Loader Class Initialized
INFO - 2019-12-25 16:11:54 --> Helper loaded: html_helper
INFO - 2019-12-25 16:11:54 --> Helper loaded: url_helper
INFO - 2019-12-25 16:11:54 --> Helper loaded: form_helper
INFO - 2019-12-25 16:11:54 --> Database Driver Class Initialized
INFO - 2019-12-25 16:11:54 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:11:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:11:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:11:54 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:11:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:11:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:11:54 --> Controller Class Initialized
INFO - 2019-12-25 16:11:54 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:11:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:11:54 --> Pagination Class Initialized
INFO - 2019-12-25 16:11:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2019-12-25 16:11:54 --> Final output sent to browser
DEBUG - 2019-12-25 16:11:54 --> Total execution time: 0.2970
INFO - 2019-12-25 16:12:03 --> Config Class Initialized
INFO - 2019-12-25 16:12:03 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:12:03 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:12:03 --> Utf8 Class Initialized
INFO - 2019-12-25 16:12:03 --> URI Class Initialized
INFO - 2019-12-25 16:12:03 --> Router Class Initialized
INFO - 2019-12-25 16:12:03 --> Output Class Initialized
INFO - 2019-12-25 16:12:03 --> Security Class Initialized
DEBUG - 2019-12-25 16:12:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:12:03 --> Input Class Initialized
INFO - 2019-12-25 16:12:03 --> Language Class Initialized
INFO - 2019-12-25 16:12:03 --> Loader Class Initialized
INFO - 2019-12-25 16:12:03 --> Helper loaded: html_helper
INFO - 2019-12-25 16:12:03 --> Helper loaded: url_helper
INFO - 2019-12-25 16:12:03 --> Helper loaded: form_helper
INFO - 2019-12-25 16:12:03 --> Database Driver Class Initialized
INFO - 2019-12-25 16:12:05 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:12:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:12:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:12:05 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:12:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:12:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:12:05 --> Controller Class Initialized
DEBUG - 2019-12-25 16:12:05 --> Create_User constructer got called..
INFO - 2019-12-25 16:12:05 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:12:05 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:12:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-25 16:12:05 --> Final output sent to browser
DEBUG - 2019-12-25 16:12:05 --> Total execution time: 1.6671
INFO - 2019-12-25 16:12:10 --> Config Class Initialized
INFO - 2019-12-25 16:12:10 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:12:10 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:12:10 --> Utf8 Class Initialized
INFO - 2019-12-25 16:12:10 --> URI Class Initialized
INFO - 2019-12-25 16:12:10 --> Router Class Initialized
INFO - 2019-12-25 16:12:10 --> Output Class Initialized
INFO - 2019-12-25 16:12:10 --> Security Class Initialized
DEBUG - 2019-12-25 16:12:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:12:10 --> Input Class Initialized
INFO - 2019-12-25 16:12:10 --> Language Class Initialized
INFO - 2019-12-25 16:12:10 --> Loader Class Initialized
INFO - 2019-12-25 16:12:10 --> Helper loaded: html_helper
INFO - 2019-12-25 16:12:10 --> Helper loaded: url_helper
INFO - 2019-12-25 16:12:10 --> Helper loaded: form_helper
INFO - 2019-12-25 16:12:10 --> Database Driver Class Initialized
INFO - 2019-12-25 16:12:10 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:12:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:12:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:12:10 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:12:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:12:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:12:10 --> Controller Class Initialized
DEBUG - 2019-12-25 16:12:10 --> Create_User constructer got called..
INFO - 2019-12-25 16:12:10 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:12:10 --> getAllSubgroup model
DEBUG - 2019-12-25 16:12:10 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 16:12:10 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:12:10 --> getAllSubgroup model
DEBUG - 2019-12-25 16:12:10 --> getAllUIMasterData from DB retrived
INFO - 2019-12-25 16:12:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2019-12-25 16:12:10 --> Final output sent to browser
DEBUG - 2019-12-25 16:12:10 --> Total execution time: 0.2530
INFO - 2019-12-25 16:12:35 --> Config Class Initialized
INFO - 2019-12-25 16:12:35 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:12:35 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:12:35 --> Utf8 Class Initialized
INFO - 2019-12-25 16:12:35 --> URI Class Initialized
INFO - 2019-12-25 16:12:35 --> Router Class Initialized
INFO - 2019-12-25 16:12:35 --> Output Class Initialized
INFO - 2019-12-25 16:12:35 --> Security Class Initialized
DEBUG - 2019-12-25 16:12:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:12:35 --> Input Class Initialized
INFO - 2019-12-25 16:12:35 --> Language Class Initialized
INFO - 2019-12-25 16:12:35 --> Loader Class Initialized
INFO - 2019-12-25 16:12:35 --> Helper loaded: html_helper
INFO - 2019-12-25 16:12:35 --> Helper loaded: url_helper
INFO - 2019-12-25 16:12:35 --> Helper loaded: form_helper
INFO - 2019-12-25 16:12:35 --> Database Driver Class Initialized
INFO - 2019-12-25 16:12:35 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:12:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:12:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:12:35 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:12:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:12:35 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:12:35 --> Controller Class Initialized
DEBUG - 2019-12-25 16:12:35 --> User_Right constructer got called..
INFO - 2019-12-25 16:12:35 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-25 16:12:35 --> Final output sent to browser
DEBUG - 2019-12-25 16:12:35 --> Total execution time: 0.2950
INFO - 2019-12-25 16:12:37 --> Config Class Initialized
INFO - 2019-12-25 16:12:37 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:12:37 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:12:37 --> Utf8 Class Initialized
INFO - 2019-12-25 16:12:37 --> URI Class Initialized
INFO - 2019-12-25 16:12:37 --> Router Class Initialized
INFO - 2019-12-25 16:12:37 --> Output Class Initialized
INFO - 2019-12-25 16:12:37 --> Security Class Initialized
DEBUG - 2019-12-25 16:12:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:12:37 --> Input Class Initialized
INFO - 2019-12-25 16:12:37 --> Language Class Initialized
INFO - 2019-12-25 16:12:37 --> Loader Class Initialized
INFO - 2019-12-25 16:12:37 --> Helper loaded: html_helper
INFO - 2019-12-25 16:12:37 --> Helper loaded: url_helper
INFO - 2019-12-25 16:12:37 --> Helper loaded: form_helper
INFO - 2019-12-25 16:12:37 --> Database Driver Class Initialized
INFO - 2019-12-25 16:12:37 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:12:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:12:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:12:37 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:12:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:12:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:12:37 --> Controller Class Initialized
DEBUG - 2019-12-25 16:12:37 --> loading Configarable_Login model...
INFO - 2019-12-25 16:12:37 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-25 16:12:37 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-25 16:12:37 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-25 16:12:37 --> Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:12:37 --> loading configurable menu with result=Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:12:37 --> loading view public\Dashboard
INFO - 2019-12-25 16:12:37 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:12:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-25 16:12:38 --> Final output sent to browser
DEBUG - 2019-12-25 16:12:38 --> Total execution time: 0.3110
INFO - 2019-12-25 16:12:43 --> Config Class Initialized
INFO - 2019-12-25 16:12:43 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:12:43 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:12:43 --> Utf8 Class Initialized
INFO - 2019-12-25 16:12:43 --> URI Class Initialized
INFO - 2019-12-25 16:12:43 --> Router Class Initialized
INFO - 2019-12-25 16:12:43 --> Output Class Initialized
INFO - 2019-12-25 16:12:43 --> Security Class Initialized
DEBUG - 2019-12-25 16:12:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:12:43 --> Input Class Initialized
INFO - 2019-12-25 16:12:43 --> Language Class Initialized
INFO - 2019-12-25 16:12:43 --> Loader Class Initialized
INFO - 2019-12-25 16:12:43 --> Helper loaded: html_helper
INFO - 2019-12-25 16:12:43 --> Helper loaded: url_helper
INFO - 2019-12-25 16:12:43 --> Helper loaded: form_helper
INFO - 2019-12-25 16:12:43 --> Database Driver Class Initialized
INFO - 2019-12-25 16:12:43 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:12:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:12:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:12:43 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:12:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:12:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:12:43 --> Controller Class Initialized
DEBUG - 2019-12-25 16:12:43 --> loading Configarable_Login model...
INFO - 2019-12-25 16:12:43 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-25 16:12:43 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-25 16:12:43 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-25 16:12:43 --> Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:12:43 --> loading configurable menu with result=Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:12:43 --> loading view public\Dashboard
INFO - 2019-12-25 16:12:43 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:12:43 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-25 16:12:43 --> Final output sent to browser
DEBUG - 2019-12-25 16:12:43 --> Total execution time: 0.2530
INFO - 2019-12-25 16:13:11 --> Config Class Initialized
INFO - 2019-12-25 16:13:11 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:13:11 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:13:11 --> Utf8 Class Initialized
INFO - 2019-12-25 16:13:11 --> URI Class Initialized
INFO - 2019-12-25 16:13:11 --> Router Class Initialized
INFO - 2019-12-25 16:13:11 --> Output Class Initialized
INFO - 2019-12-25 16:13:11 --> Security Class Initialized
DEBUG - 2019-12-25 16:13:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:13:11 --> Input Class Initialized
INFO - 2019-12-25 16:13:11 --> Language Class Initialized
INFO - 2019-12-25 16:13:11 --> Loader Class Initialized
INFO - 2019-12-25 16:13:11 --> Helper loaded: html_helper
INFO - 2019-12-25 16:13:11 --> Helper loaded: url_helper
INFO - 2019-12-25 16:13:11 --> Helper loaded: form_helper
INFO - 2019-12-25 16:13:11 --> Database Driver Class Initialized
INFO - 2019-12-25 16:13:11 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:13:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:13:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:13:11 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:13:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:13:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:13:11 --> Controller Class Initialized
INFO - 2019-12-25 16:13:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-25 16:13:11 --> Final output sent to browser
DEBUG - 2019-12-25 16:13:11 --> Total execution time: 0.2310
INFO - 2019-12-25 16:13:13 --> Config Class Initialized
INFO - 2019-12-25 16:13:13 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:13:13 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:13:13 --> Utf8 Class Initialized
INFO - 2019-12-25 16:13:13 --> URI Class Initialized
INFO - 2019-12-25 16:13:13 --> Router Class Initialized
INFO - 2019-12-25 16:13:13 --> Output Class Initialized
INFO - 2019-12-25 16:13:13 --> Security Class Initialized
DEBUG - 2019-12-25 16:13:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:13:13 --> Input Class Initialized
INFO - 2019-12-25 16:13:13 --> Language Class Initialized
INFO - 2019-12-25 16:13:13 --> Loader Class Initialized
INFO - 2019-12-25 16:13:13 --> Helper loaded: html_helper
INFO - 2019-12-25 16:13:13 --> Helper loaded: url_helper
INFO - 2019-12-25 16:13:13 --> Helper loaded: form_helper
INFO - 2019-12-25 16:13:13 --> Database Driver Class Initialized
INFO - 2019-12-25 16:13:13 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:13:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:13:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:13:13 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:13:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:13:13 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:13:13 --> Controller Class Initialized
DEBUG - 2019-12-25 16:13:13 --> calling constructor page Change_password
DEBUG - 2019-12-25 16:13:13 --> calling user access block = 52
DEBUG - 2019-12-25 16:13:13 --> index page Change_password
DEBUG - 2019-12-25 16:13:13 --> public/User/change_password
INFO - 2019-12-25 16:13:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-25 16:13:13 --> Final output sent to browser
DEBUG - 2019-12-25 16:13:13 --> Total execution time: 0.2430
INFO - 2019-12-25 16:13:14 --> Config Class Initialized
INFO - 2019-12-25 16:13:14 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:13:14 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:13:14 --> Utf8 Class Initialized
INFO - 2019-12-25 16:13:14 --> URI Class Initialized
INFO - 2019-12-25 16:13:14 --> Router Class Initialized
INFO - 2019-12-25 16:13:14 --> Output Class Initialized
INFO - 2019-12-25 16:13:14 --> Security Class Initialized
DEBUG - 2019-12-25 16:13:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:13:14 --> Input Class Initialized
INFO - 2019-12-25 16:13:14 --> Language Class Initialized
INFO - 2019-12-25 16:13:14 --> Loader Class Initialized
INFO - 2019-12-25 16:13:14 --> Helper loaded: html_helper
INFO - 2019-12-25 16:13:14 --> Helper loaded: url_helper
INFO - 2019-12-25 16:13:14 --> Helper loaded: form_helper
INFO - 2019-12-25 16:13:14 --> Database Driver Class Initialized
INFO - 2019-12-25 16:13:14 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:13:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:13:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:13:14 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:13:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:13:14 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:13:14 --> Controller Class Initialized
DEBUG - 2019-12-25 16:13:14 --> Create_User constructer got called..
INFO - 2019-12-25 16:13:14 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:13:14 --> show all profile data modelDevOss
DEBUG - 2019-12-25 16:13:14 --> show_all_profile_data from DB retrived
INFO - 2019-12-25 16:13:14 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-25 16:13:15 --> Final output sent to browser
DEBUG - 2019-12-25 16:13:15 --> Total execution time: 0.2330
INFO - 2019-12-25 16:13:16 --> Config Class Initialized
INFO - 2019-12-25 16:13:16 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:13:16 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:13:16 --> Utf8 Class Initialized
INFO - 2019-12-25 16:13:16 --> URI Class Initialized
INFO - 2019-12-25 16:13:16 --> Router Class Initialized
INFO - 2019-12-25 16:13:16 --> Output Class Initialized
INFO - 2019-12-25 16:13:16 --> Security Class Initialized
DEBUG - 2019-12-25 16:13:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:13:16 --> Input Class Initialized
INFO - 2019-12-25 16:13:16 --> Language Class Initialized
INFO - 2019-12-25 16:13:16 --> Loader Class Initialized
INFO - 2019-12-25 16:13:16 --> Helper loaded: html_helper
INFO - 2019-12-25 16:13:16 --> Helper loaded: url_helper
INFO - 2019-12-25 16:13:16 --> Helper loaded: form_helper
INFO - 2019-12-25 16:13:16 --> Database Driver Class Initialized
INFO - 2019-12-25 16:13:16 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:13:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:13:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:13:16 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:13:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:13:16 --> Controller Class Initialized
DEBUG - 2019-12-25 16:13:16 --> User_Right constructer got called..
INFO - 2019-12-25 16:13:16 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2019-12-25 16:13:16 --> Final output sent to browser
DEBUG - 2019-12-25 16:13:16 --> Total execution time: 0.1780
INFO - 2019-12-25 16:13:17 --> Config Class Initialized
INFO - 2019-12-25 16:13:17 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:13:17 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:13:17 --> Utf8 Class Initialized
INFO - 2019-12-25 16:13:17 --> URI Class Initialized
INFO - 2019-12-25 16:13:17 --> Router Class Initialized
INFO - 2019-12-25 16:13:17 --> Output Class Initialized
INFO - 2019-12-25 16:13:17 --> Security Class Initialized
DEBUG - 2019-12-25 16:13:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:13:17 --> Input Class Initialized
INFO - 2019-12-25 16:13:17 --> Language Class Initialized
INFO - 2019-12-25 16:13:17 --> Loader Class Initialized
INFO - 2019-12-25 16:13:17 --> Helper loaded: html_helper
INFO - 2019-12-25 16:13:17 --> Helper loaded: url_helper
INFO - 2019-12-25 16:13:17 --> Helper loaded: form_helper
INFO - 2019-12-25 16:13:17 --> Database Driver Class Initialized
INFO - 2019-12-25 16:13:17 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:13:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:13:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:13:17 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:13:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:13:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:13:17 --> Controller Class Initialized
DEBUG - 2019-12-25 16:13:17 --> loading Configarable_Login model...
INFO - 2019-12-25 16:13:17 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-25 16:13:17 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-25 16:13:17 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-25 16:13:17 --> Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:13:17 --> loading configurable menu with result=Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:13:17 --> loading view public\Dashboard
INFO - 2019-12-25 16:13:17 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:13:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-25 16:13:17 --> Final output sent to browser
DEBUG - 2019-12-25 16:13:17 --> Total execution time: 0.2580
INFO - 2019-12-25 16:13:20 --> Config Class Initialized
INFO - 2019-12-25 16:13:20 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:13:20 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:13:20 --> Utf8 Class Initialized
INFO - 2019-12-25 16:13:20 --> URI Class Initialized
INFO - 2019-12-25 16:13:20 --> Router Class Initialized
INFO - 2019-12-25 16:13:20 --> Output Class Initialized
INFO - 2019-12-25 16:13:20 --> Security Class Initialized
DEBUG - 2019-12-25 16:13:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:13:20 --> Input Class Initialized
INFO - 2019-12-25 16:13:20 --> Language Class Initialized
INFO - 2019-12-25 16:13:20 --> Loader Class Initialized
INFO - 2019-12-25 16:13:20 --> Helper loaded: html_helper
INFO - 2019-12-25 16:13:20 --> Helper loaded: url_helper
INFO - 2019-12-25 16:13:20 --> Helper loaded: form_helper
INFO - 2019-12-25 16:13:20 --> Database Driver Class Initialized
INFO - 2019-12-25 16:13:20 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:13:20 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:13:20 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:13:20 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:13:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:13:20 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:13:20 --> Controller Class Initialized
INFO - 2019-12-25 16:13:20 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:13:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:13:20 --> Pagination Class Initialized
INFO - 2019-12-25 16:13:20 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2019-12-25 16:13:20 --> Final output sent to browser
DEBUG - 2019-12-25 16:13:20 --> Total execution time: 0.2790
INFO - 2019-12-25 16:13:22 --> Config Class Initialized
INFO - 2019-12-25 16:13:22 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:13:23 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:13:23 --> Utf8 Class Initialized
INFO - 2019-12-25 16:13:23 --> URI Class Initialized
INFO - 2019-12-25 16:13:23 --> Router Class Initialized
INFO - 2019-12-25 16:13:23 --> Output Class Initialized
INFO - 2019-12-25 16:13:23 --> Security Class Initialized
DEBUG - 2019-12-25 16:13:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:13:23 --> Input Class Initialized
INFO - 2019-12-25 16:13:23 --> Language Class Initialized
INFO - 2019-12-25 16:13:23 --> Loader Class Initialized
INFO - 2019-12-25 16:13:23 --> Helper loaded: html_helper
INFO - 2019-12-25 16:13:23 --> Helper loaded: url_helper
INFO - 2019-12-25 16:13:23 --> Helper loaded: form_helper
INFO - 2019-12-25 16:13:23 --> Database Driver Class Initialized
INFO - 2019-12-25 16:13:23 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:13:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:13:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:13:23 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:13:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:13:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:13:23 --> Controller Class Initialized
INFO - 2019-12-25 16:13:23 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:13:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:13:23 --> Pagination Class Initialized
INFO - 2019-12-25 16:13:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-25 16:13:23 --> Final output sent to browser
DEBUG - 2019-12-25 16:13:23 --> Total execution time: 0.3350
INFO - 2019-12-25 16:14:39 --> Config Class Initialized
INFO - 2019-12-25 16:14:39 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:14:39 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:14:39 --> Utf8 Class Initialized
INFO - 2019-12-25 16:14:39 --> URI Class Initialized
INFO - 2019-12-25 16:14:39 --> Router Class Initialized
INFO - 2019-12-25 16:14:39 --> Output Class Initialized
INFO - 2019-12-25 16:14:39 --> Security Class Initialized
DEBUG - 2019-12-25 16:14:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:14:39 --> Input Class Initialized
INFO - 2019-12-25 16:14:40 --> Language Class Initialized
INFO - 2019-12-25 16:14:40 --> Loader Class Initialized
INFO - 2019-12-25 16:14:40 --> Helper loaded: html_helper
INFO - 2019-12-25 16:14:40 --> Helper loaded: url_helper
INFO - 2019-12-25 16:14:40 --> Helper loaded: form_helper
INFO - 2019-12-25 16:14:40 --> Database Driver Class Initialized
INFO - 2019-12-25 16:14:40 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:14:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:14:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:14:40 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:14:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:14:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:14:40 --> Controller Class Initialized
INFO - 2019-12-25 16:14:40 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:14:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:14:40 --> Pagination Class Initialized
INFO - 2019-12-25 16:14:40 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-25 16:14:40 --> Final output sent to browser
DEBUG - 2019-12-25 16:14:40 --> Total execution time: 0.2690
INFO - 2019-12-25 16:14:41 --> Config Class Initialized
INFO - 2019-12-25 16:14:41 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:14:41 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:14:41 --> Utf8 Class Initialized
INFO - 2019-12-25 16:14:41 --> URI Class Initialized
INFO - 2019-12-25 16:14:41 --> Router Class Initialized
INFO - 2019-12-25 16:14:41 --> Output Class Initialized
INFO - 2019-12-25 16:14:41 --> Security Class Initialized
DEBUG - 2019-12-25 16:14:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:14:41 --> Input Class Initialized
INFO - 2019-12-25 16:14:41 --> Language Class Initialized
INFO - 2019-12-25 16:14:41 --> Loader Class Initialized
INFO - 2019-12-25 16:14:42 --> Helper loaded: html_helper
INFO - 2019-12-25 16:14:42 --> Helper loaded: url_helper
INFO - 2019-12-25 16:14:42 --> Helper loaded: form_helper
INFO - 2019-12-25 16:14:42 --> Database Driver Class Initialized
INFO - 2019-12-25 16:14:42 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:14:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:14:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:14:42 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:14:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:14:42 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:14:42 --> Controller Class Initialized
INFO - 2019-12-25 16:14:42 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:14:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:14:42 --> Pagination Class Initialized
INFO - 2019-12-25 16:14:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-25 16:14:42 --> Final output sent to browser
DEBUG - 2019-12-25 16:14:42 --> Total execution time: 0.2300
INFO - 2019-12-25 16:14:44 --> Config Class Initialized
INFO - 2019-12-25 16:14:44 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:14:44 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:14:44 --> Utf8 Class Initialized
INFO - 2019-12-25 16:14:44 --> URI Class Initialized
INFO - 2019-12-25 16:14:44 --> Router Class Initialized
INFO - 2019-12-25 16:14:44 --> Output Class Initialized
INFO - 2019-12-25 16:14:44 --> Security Class Initialized
DEBUG - 2019-12-25 16:14:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:14:44 --> Input Class Initialized
INFO - 2019-12-25 16:14:44 --> Language Class Initialized
INFO - 2019-12-25 16:14:44 --> Loader Class Initialized
INFO - 2019-12-25 16:14:44 --> Helper loaded: html_helper
INFO - 2019-12-25 16:14:44 --> Helper loaded: url_helper
INFO - 2019-12-25 16:14:44 --> Helper loaded: form_helper
INFO - 2019-12-25 16:14:44 --> Database Driver Class Initialized
INFO - 2019-12-25 16:14:44 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:14:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:14:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:14:44 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:14:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:14:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:14:44 --> Controller Class Initialized
INFO - 2019-12-25 16:14:44 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:14:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:14:44 --> Pagination Class Initialized
INFO - 2019-12-25 16:14:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-25 16:14:44 --> Final output sent to browser
DEBUG - 2019-12-25 16:14:44 --> Total execution time: 0.2950
INFO - 2019-12-25 16:15:18 --> Config Class Initialized
INFO - 2019-12-25 16:15:18 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:15:18 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:15:18 --> Utf8 Class Initialized
INFO - 2019-12-25 16:15:18 --> URI Class Initialized
INFO - 2019-12-25 16:15:18 --> Router Class Initialized
INFO - 2019-12-25 16:15:18 --> Output Class Initialized
INFO - 2019-12-25 16:15:18 --> Security Class Initialized
DEBUG - 2019-12-25 16:15:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:15:18 --> Input Class Initialized
INFO - 2019-12-25 16:15:18 --> Language Class Initialized
INFO - 2019-12-25 16:15:18 --> Loader Class Initialized
INFO - 2019-12-25 16:15:18 --> Helper loaded: html_helper
INFO - 2019-12-25 16:15:18 --> Helper loaded: url_helper
INFO - 2019-12-25 16:15:18 --> Helper loaded: form_helper
INFO - 2019-12-25 16:15:18 --> Database Driver Class Initialized
INFO - 2019-12-25 16:15:18 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:15:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:15:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:15:18 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:15:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:15:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:15:18 --> Controller Class Initialized
INFO - 2019-12-25 16:15:18 --> Helper loaded: cookie_helper
INFO - 2019-12-25 16:15:18 --> logout() called
DEBUG - 2019-12-25 16:15:18 --> loading model Active_Session
DEBUG - 2019-12-25 16:15:18 --> Session_id = 5e0ph0aqck78b3ih5akkp6qlt947b9a1
DEBUG - 2019-12-25 16:15:18 --> email = DevOss
INFO - 2019-12-25 16:15:18 --> Model "Active_Session" initialized
DEBUG - 2019-12-25 16:15:18 --> calling remove_active_session()
DEBUG - 2019-12-25 16:15:18 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-25 16:15:18 --> loading view welcome controller ... 
INFO - 2019-12-25 16:15:18 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-25 16:15:18 --> Final output sent to browser
DEBUG - 2019-12-25 16:15:18 --> Total execution time: 0.4490
INFO - 2019-12-25 16:15:26 --> Config Class Initialized
INFO - 2019-12-25 16:15:26 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:15:26 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:15:26 --> Utf8 Class Initialized
INFO - 2019-12-25 16:15:26 --> URI Class Initialized
INFO - 2019-12-25 16:15:26 --> Router Class Initialized
INFO - 2019-12-25 16:15:26 --> Output Class Initialized
INFO - 2019-12-25 16:15:26 --> Security Class Initialized
DEBUG - 2019-12-25 16:15:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:15:26 --> Input Class Initialized
INFO - 2019-12-25 16:15:26 --> Language Class Initialized
INFO - 2019-12-25 16:15:26 --> Loader Class Initialized
INFO - 2019-12-25 16:15:26 --> Helper loaded: html_helper
INFO - 2019-12-25 16:15:26 --> Helper loaded: url_helper
INFO - 2019-12-25 16:15:26 --> Helper loaded: form_helper
INFO - 2019-12-25 16:15:26 --> Database Driver Class Initialized
INFO - 2019-12-25 16:15:27 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:15:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:15:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:15:27 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:15:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:15:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:15:27 --> Controller Class Initialized
INFO - 2019-12-25 16:15:27 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-25 16:15:27 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:15:27 --> getAuth method got called...
DEBUG - 2019-12-25 16:15:27 --> Username :- DevOss
INFO - 2019-12-25 16:15:27 --> this is db user...
DEBUG - 2019-12-25 16:15:27 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-25 16:15:27 --> Password hashing output = $2y$10$TMU0aRaMJXkz7IqrDb4uZOcVwt8ep.zgQDf7pwrkQIF4ylloJ5mZa
DEBUG - 2019-12-25 16:15:27 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
INFO - 2019-12-25 16:15:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
DEBUG - 2019-12-25 16:15:27 --> validation result=
INFO - 2019-12-25 16:15:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-25 16:15:27 --> Final output sent to browser
DEBUG - 2019-12-25 16:15:27 --> Total execution time: 0.9301
INFO - 2019-12-25 16:15:38 --> Config Class Initialized
INFO - 2019-12-25 16:15:38 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:15:38 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:15:38 --> Utf8 Class Initialized
INFO - 2019-12-25 16:15:38 --> URI Class Initialized
INFO - 2019-12-25 16:15:38 --> Router Class Initialized
INFO - 2019-12-25 16:15:38 --> Output Class Initialized
INFO - 2019-12-25 16:15:38 --> Security Class Initialized
DEBUG - 2019-12-25 16:15:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:15:38 --> Input Class Initialized
INFO - 2019-12-25 16:15:38 --> Language Class Initialized
INFO - 2019-12-25 16:15:38 --> Loader Class Initialized
INFO - 2019-12-25 16:15:38 --> Helper loaded: html_helper
INFO - 2019-12-25 16:15:38 --> Helper loaded: url_helper
INFO - 2019-12-25 16:15:38 --> Helper loaded: form_helper
INFO - 2019-12-25 16:15:38 --> Database Driver Class Initialized
INFO - 2019-12-25 16:15:38 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:15:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:15:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:15:38 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:15:38 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:15:38 --> Controller Class Initialized
INFO - 2019-12-25 16:15:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-25 16:15:38 --> Final output sent to browser
DEBUG - 2019-12-25 16:15:38 --> Total execution time: 0.3010
INFO - 2019-12-25 16:15:46 --> Config Class Initialized
INFO - 2019-12-25 16:15:46 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:15:46 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:15:46 --> Utf8 Class Initialized
INFO - 2019-12-25 16:15:46 --> URI Class Initialized
INFO - 2019-12-25 16:15:46 --> Router Class Initialized
INFO - 2019-12-25 16:15:46 --> Output Class Initialized
INFO - 2019-12-25 16:15:46 --> Security Class Initialized
DEBUG - 2019-12-25 16:15:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:15:46 --> Input Class Initialized
INFO - 2019-12-25 16:15:46 --> Language Class Initialized
INFO - 2019-12-25 16:15:46 --> Loader Class Initialized
INFO - 2019-12-25 16:15:46 --> Helper loaded: html_helper
INFO - 2019-12-25 16:15:46 --> Helper loaded: url_helper
INFO - 2019-12-25 16:15:46 --> Helper loaded: form_helper
INFO - 2019-12-25 16:15:46 --> Database Driver Class Initialized
INFO - 2019-12-25 16:15:46 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:15:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:15:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:15:46 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:15:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:15:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:15:46 --> Controller Class Initialized
INFO - 2019-12-25 16:15:46 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-25 16:15:46 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:15:46 --> getAuth method got called...
DEBUG - 2019-12-25 16:15:46 --> Username :- DevOss
INFO - 2019-12-25 16:15:46 --> this is db user...
DEBUG - 2019-12-25 16:15:46 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-25 16:15:46 --> Password hashing output = $2y$10$WJgufrWwa2qiarfTiFJlFOxE8L.Zc9OMG8ijYkNT4qyVgEo4kxQFe
DEBUG - 2019-12-25 16:15:46 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
DEBUG - 2019-12-25 16:15:47 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2019-12-25 16:15:47 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-25 16:15:47 --> Role Retrive from DB
INFO - 2019-12-25 16:15:47 --> get_group_role_mapping model = 16
DEBUG - 2019-12-25 16:15:47 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-25 16:15:47 --> loading model Active_Session
INFO - 2019-12-25 16:15:47 --> Model "Active_Session" initialized
DEBUG - 2019-12-25 16:15:47 --> calling insert_active_session()
DEBUG - 2019-12-25 16:15:47 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-25 16:15:47 --> insert success
DEBUG - 2019-12-25 16:15:47 --> loading Configarable_Login model...
INFO - 2019-12-25 16:15:47 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-25 16:15:47 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-25 16:15:47 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-25 16:15:47 --> Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:15:47 --> loading configurable menu with result=Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:15:47 --> loading view public\Dashboard
INFO - 2019-12-25 16:15:47 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-25 16:15:47 --> Final output sent to browser
DEBUG - 2019-12-25 16:15:47 --> Total execution time: 1.0061
INFO - 2019-12-25 16:15:52 --> Config Class Initialized
INFO - 2019-12-25 16:15:52 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:15:52 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:15:52 --> Utf8 Class Initialized
INFO - 2019-12-25 16:15:52 --> URI Class Initialized
INFO - 2019-12-25 16:15:52 --> Router Class Initialized
INFO - 2019-12-25 16:15:52 --> Output Class Initialized
INFO - 2019-12-25 16:15:52 --> Security Class Initialized
DEBUG - 2019-12-25 16:15:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:15:52 --> Input Class Initialized
INFO - 2019-12-25 16:15:52 --> Language Class Initialized
INFO - 2019-12-25 16:15:52 --> Loader Class Initialized
INFO - 2019-12-25 16:15:52 --> Helper loaded: html_helper
INFO - 2019-12-25 16:15:52 --> Helper loaded: url_helper
INFO - 2019-12-25 16:15:52 --> Helper loaded: form_helper
INFO - 2019-12-25 16:15:52 --> Database Driver Class Initialized
INFO - 2019-12-25 16:15:52 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:15:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:15:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:15:52 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:15:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:15:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:15:52 --> Controller Class Initialized
INFO - 2019-12-25 16:15:52 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:15:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:15:52 --> Pagination Class Initialized
INFO - 2019-12-25 16:15:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2019-12-25 16:15:52 --> Final output sent to browser
DEBUG - 2019-12-25 16:15:52 --> Total execution time: 0.3210
INFO - 2019-12-25 16:15:55 --> Config Class Initialized
INFO - 2019-12-25 16:15:55 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:15:55 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:15:55 --> Utf8 Class Initialized
INFO - 2019-12-25 16:15:55 --> URI Class Initialized
INFO - 2019-12-25 16:15:55 --> Router Class Initialized
INFO - 2019-12-25 16:15:55 --> Output Class Initialized
INFO - 2019-12-25 16:15:55 --> Security Class Initialized
DEBUG - 2019-12-25 16:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:15:55 --> Input Class Initialized
INFO - 2019-12-25 16:15:55 --> Language Class Initialized
INFO - 2019-12-25 16:15:55 --> Loader Class Initialized
INFO - 2019-12-25 16:15:55 --> Helper loaded: html_helper
INFO - 2019-12-25 16:15:55 --> Helper loaded: url_helper
INFO - 2019-12-25 16:15:55 --> Helper loaded: form_helper
INFO - 2019-12-25 16:15:55 --> Database Driver Class Initialized
INFO - 2019-12-25 16:15:55 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:15:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:15:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:15:55 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:15:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:15:55 --> Controller Class Initialized
INFO - 2019-12-25 16:15:55 --> Model "Authors_model" initialized
INFO - 2019-12-25 16:15:55 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-25 16:15:55 --> Pagination Class Initialized
INFO - 2019-12-25 16:15:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-25 16:15:55 --> Final output sent to browser
DEBUG - 2019-12-25 16:15:55 --> Total execution time: 0.3120
INFO - 2019-12-25 16:16:27 --> Config Class Initialized
INFO - 2019-12-25 16:16:27 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:16:27 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:16:27 --> Utf8 Class Initialized
INFO - 2019-12-25 16:16:27 --> URI Class Initialized
INFO - 2019-12-25 16:16:27 --> Router Class Initialized
INFO - 2019-12-25 16:16:27 --> Output Class Initialized
INFO - 2019-12-25 16:16:27 --> Security Class Initialized
DEBUG - 2019-12-25 16:16:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:16:27 --> Input Class Initialized
INFO - 2019-12-25 16:16:27 --> Language Class Initialized
INFO - 2019-12-25 16:16:27 --> Loader Class Initialized
INFO - 2019-12-25 16:16:27 --> Helper loaded: html_helper
INFO - 2019-12-25 16:16:27 --> Helper loaded: url_helper
INFO - 2019-12-25 16:16:27 --> Helper loaded: form_helper
INFO - 2019-12-25 16:16:27 --> Database Driver Class Initialized
INFO - 2019-12-25 16:16:27 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:16:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:16:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:16:27 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:16:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:16:27 --> Controller Class Initialized
DEBUG - 2019-12-25 16:16:27 --> Create_User constructer got called..
INFO - 2019-12-25 16:16:27 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:16:27 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:16:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-25 16:16:27 --> Final output sent to browser
DEBUG - 2019-12-25 16:16:27 --> Total execution time: 0.2740
INFO - 2019-12-25 16:16:32 --> Config Class Initialized
INFO - 2019-12-25 16:16:32 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:16:32 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:16:32 --> Utf8 Class Initialized
INFO - 2019-12-25 16:16:32 --> URI Class Initialized
INFO - 2019-12-25 16:16:32 --> Router Class Initialized
INFO - 2019-12-25 16:16:32 --> Output Class Initialized
INFO - 2019-12-25 16:16:32 --> Security Class Initialized
DEBUG - 2019-12-25 16:16:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:16:32 --> Input Class Initialized
INFO - 2019-12-25 16:16:32 --> Language Class Initialized
INFO - 2019-12-25 16:16:32 --> Loader Class Initialized
INFO - 2019-12-25 16:16:32 --> Helper loaded: html_helper
INFO - 2019-12-25 16:16:32 --> Helper loaded: url_helper
INFO - 2019-12-25 16:16:32 --> Helper loaded: form_helper
INFO - 2019-12-25 16:16:32 --> Database Driver Class Initialized
INFO - 2019-12-25 16:16:33 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:16:33 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:16:33 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:16:33 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:16:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:16:33 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:16:33 --> Controller Class Initialized
DEBUG - 2019-12-25 16:16:33 --> Create_User constructer got called..
INFO - 2019-12-25 16:16:33 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:16:33 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:16:33 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-25 16:16:33 --> Final output sent to browser
DEBUG - 2019-12-25 16:16:33 --> Total execution time: 1.3351
INFO - 2019-12-25 16:16:36 --> Config Class Initialized
INFO - 2019-12-25 16:16:36 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:16:36 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:16:36 --> Utf8 Class Initialized
INFO - 2019-12-25 16:16:36 --> URI Class Initialized
INFO - 2019-12-25 16:16:36 --> Router Class Initialized
INFO - 2019-12-25 16:16:36 --> Output Class Initialized
INFO - 2019-12-25 16:16:36 --> Security Class Initialized
DEBUG - 2019-12-25 16:16:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:16:36 --> Input Class Initialized
INFO - 2019-12-25 16:16:36 --> Language Class Initialized
INFO - 2019-12-25 16:16:36 --> Loader Class Initialized
INFO - 2019-12-25 16:16:36 --> Helper loaded: html_helper
INFO - 2019-12-25 16:16:36 --> Helper loaded: url_helper
INFO - 2019-12-25 16:16:36 --> Helper loaded: form_helper
INFO - 2019-12-25 16:16:36 --> Database Driver Class Initialized
INFO - 2019-12-25 16:16:36 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:16:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:16:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:16:36 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:16:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:16:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:16:36 --> Controller Class Initialized
DEBUG - 2019-12-25 16:16:36 --> Create_User constructer got called..
INFO - 2019-12-25 16:16:36 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:16:36 --> showing all user from db tblusers...
DEBUG - 2019-12-25 16:16:36 --> show_users from DB
DEBUG - 2019-12-25 16:16:36 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:16:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-25 16:16:36 --> Final output sent to browser
DEBUG - 2019-12-25 16:16:36 --> Total execution time: 0.3160
INFO - 2019-12-25 16:16:39 --> Config Class Initialized
INFO - 2019-12-25 16:16:39 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:16:39 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:16:39 --> Utf8 Class Initialized
INFO - 2019-12-25 16:16:39 --> URI Class Initialized
INFO - 2019-12-25 16:16:39 --> Router Class Initialized
INFO - 2019-12-25 16:16:39 --> Output Class Initialized
INFO - 2019-12-25 16:16:39 --> Security Class Initialized
DEBUG - 2019-12-25 16:16:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:16:39 --> Input Class Initialized
INFO - 2019-12-25 16:16:39 --> Language Class Initialized
INFO - 2019-12-25 16:16:39 --> Loader Class Initialized
INFO - 2019-12-25 16:16:39 --> Helper loaded: html_helper
INFO - 2019-12-25 16:16:39 --> Helper loaded: url_helper
INFO - 2019-12-25 16:16:39 --> Helper loaded: form_helper
INFO - 2019-12-25 16:16:39 --> Database Driver Class Initialized
INFO - 2019-12-25 16:16:39 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:16:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:16:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:16:39 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:16:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:16:39 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:16:39 --> Controller Class Initialized
DEBUG - 2019-12-25 16:16:39 --> Create_User constructer got called..
INFO - 2019-12-25 16:16:39 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-25 16:16:39 --> showing all user from db tblusers...
DEBUG - 2019-12-25 16:16:39 --> show_groups from DB
INFO - 2019-12-25 16:16:39 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-25 16:16:39 --> Final output sent to browser
DEBUG - 2019-12-25 16:16:39 --> Total execution time: 0.3430
INFO - 2019-12-25 16:16:42 --> Config Class Initialized
INFO - 2019-12-25 16:16:42 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:16:42 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:16:42 --> Utf8 Class Initialized
INFO - 2019-12-25 16:16:42 --> URI Class Initialized
INFO - 2019-12-25 16:16:42 --> Router Class Initialized
INFO - 2019-12-25 16:16:42 --> Output Class Initialized
INFO - 2019-12-25 16:16:42 --> Security Class Initialized
DEBUG - 2019-12-25 16:16:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:16:42 --> Input Class Initialized
INFO - 2019-12-25 16:16:42 --> Language Class Initialized
INFO - 2019-12-25 16:16:42 --> Loader Class Initialized
INFO - 2019-12-25 16:16:42 --> Helper loaded: html_helper
INFO - 2019-12-25 16:16:42 --> Helper loaded: url_helper
INFO - 2019-12-25 16:16:42 --> Helper loaded: form_helper
INFO - 2019-12-25 16:16:42 --> Database Driver Class Initialized
INFO - 2019-12-25 16:16:42 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:16:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:16:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:16:42 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:16:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:16:42 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:16:42 --> Controller Class Initialized
DEBUG - 2019-12-25 16:16:42 --> Create_User constructer got called..
INFO - 2019-12-25 16:16:42 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:16:42 --> getAllSubgroup model
DEBUG - 2019-12-25 16:16:42 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 16:16:42 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:16:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 16:16:42 --> Final output sent to browser
DEBUG - 2019-12-25 16:16:42 --> Total execution time: 0.2770
INFO - 2019-12-25 16:20:37 --> Config Class Initialized
INFO - 2019-12-25 16:20:37 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:20:37 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:20:37 --> Utf8 Class Initialized
INFO - 2019-12-25 16:20:37 --> URI Class Initialized
INFO - 2019-12-25 16:20:37 --> Router Class Initialized
INFO - 2019-12-25 16:20:37 --> Output Class Initialized
INFO - 2019-12-25 16:20:37 --> Security Class Initialized
DEBUG - 2019-12-25 16:20:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:20:37 --> Input Class Initialized
INFO - 2019-12-25 16:20:37 --> Language Class Initialized
INFO - 2019-12-25 16:20:37 --> Loader Class Initialized
INFO - 2019-12-25 16:20:37 --> Helper loaded: html_helper
INFO - 2019-12-25 16:20:37 --> Helper loaded: url_helper
INFO - 2019-12-25 16:20:37 --> Helper loaded: form_helper
INFO - 2019-12-25 16:20:37 --> Database Driver Class Initialized
INFO - 2019-12-25 16:20:37 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:20:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:20:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:20:37 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:20:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:20:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:20:37 --> Controller Class Initialized
DEBUG - 2019-12-25 16:20:37 --> Create_User constructer got called..
INFO - 2019-12-25 16:20:37 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:20:37 --> getAllSubgroup model
DEBUG - 2019-12-25 16:20:37 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-25 16:20:37 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-25 16:20:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-25 16:20:37 --> Final output sent to browser
DEBUG - 2019-12-25 16:20:37 --> Total execution time: 0.2800
INFO - 2019-12-25 16:22:21 --> Config Class Initialized
INFO - 2019-12-25 16:22:21 --> Hooks Class Initialized
DEBUG - 2019-12-25 16:22:21 --> UTF-8 Support Enabled
INFO - 2019-12-25 16:22:21 --> Utf8 Class Initialized
INFO - 2019-12-25 16:22:21 --> URI Class Initialized
INFO - 2019-12-25 16:22:21 --> Router Class Initialized
INFO - 2019-12-25 16:22:21 --> Output Class Initialized
INFO - 2019-12-25 16:22:21 --> Security Class Initialized
DEBUG - 2019-12-25 16:22:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-25 16:22:21 --> Input Class Initialized
INFO - 2019-12-25 16:22:21 --> Language Class Initialized
INFO - 2019-12-25 16:22:21 --> Loader Class Initialized
INFO - 2019-12-25 16:22:21 --> Helper loaded: html_helper
INFO - 2019-12-25 16:22:21 --> Helper loaded: url_helper
INFO - 2019-12-25 16:22:21 --> Helper loaded: form_helper
INFO - 2019-12-25 16:22:22 --> Database Driver Class Initialized
INFO - 2019-12-25 16:22:22 --> Form Validation Class Initialized
DEBUG - 2019-12-25 16:22:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-25 16:22:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-25 16:22:22 --> Encryption Class Initialized
DEBUG - 2019-12-25 16:22:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-25 16:22:22 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-25 16:22:22 --> Controller Class Initialized
DEBUG - 2019-12-25 16:22:22 --> loading Configarable_Login model...
INFO - 2019-12-25 16:22:22 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-25 16:22:22 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-25 16:22:22 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-25 16:22:22 --> Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:22:22 --> loading configurable menu with result=Array
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
            [symbol] => fas fa-fw fa-strikethrough
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
            [symbol] => fas fa-fw fa-outdent
        )

    [7] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DBADMINUSER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

)

DEBUG - 2019-12-25 16:22:22 --> loading view public\Dashboard
INFO - 2019-12-25 16:22:22 --> Model "User_Login_Model" initialized
INFO - 2019-12-25 16:22:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-25 16:22:22 --> Final output sent to browser
DEBUG - 2019-12-25 16:22:22 --> Total execution time: 0.2380
