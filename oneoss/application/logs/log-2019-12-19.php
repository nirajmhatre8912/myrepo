<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-12-19 05:49:20 --> Config Class Initialized
INFO - 2019-12-19 05:49:20 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:49:20 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:49:20 --> Utf8 Class Initialized
INFO - 2019-12-19 05:49:20 --> URI Class Initialized
DEBUG - 2019-12-19 05:49:20 --> No URI present. Default controller set.
INFO - 2019-12-19 05:49:20 --> Router Class Initialized
INFO - 2019-12-19 05:49:20 --> Output Class Initialized
INFO - 2019-12-19 05:49:20 --> Security Class Initialized
DEBUG - 2019-12-19 05:49:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:49:20 --> Input Class Initialized
INFO - 2019-12-19 05:49:20 --> Language Class Initialized
INFO - 2019-12-19 05:49:21 --> Loader Class Initialized
INFO - 2019-12-19 05:49:21 --> Helper loaded: html_helper
INFO - 2019-12-19 05:49:21 --> Helper loaded: url_helper
INFO - 2019-12-19 05:49:21 --> Helper loaded: form_helper
INFO - 2019-12-19 05:49:21 --> Database Driver Class Initialized
INFO - 2019-12-19 05:49:21 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:49:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:49:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:49:21 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:49:21 --> Controller Class Initialized
INFO - 2019-12-19 05:49:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-19 05:49:21 --> Final output sent to browser
DEBUG - 2019-12-19 05:49:21 --> Total execution time: 0.2615
INFO - 2019-12-19 05:49:49 --> Config Class Initialized
INFO - 2019-12-19 05:49:49 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:49:49 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:49:49 --> Utf8 Class Initialized
INFO - 2019-12-19 05:49:49 --> URI Class Initialized
INFO - 2019-12-19 05:49:50 --> Router Class Initialized
INFO - 2019-12-19 05:49:50 --> Output Class Initialized
INFO - 2019-12-19 05:49:50 --> Security Class Initialized
DEBUG - 2019-12-19 05:49:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:49:50 --> Input Class Initialized
INFO - 2019-12-19 05:49:50 --> Language Class Initialized
INFO - 2019-12-19 05:49:50 --> Loader Class Initialized
INFO - 2019-12-19 05:49:50 --> Helper loaded: html_helper
INFO - 2019-12-19 05:49:50 --> Helper loaded: url_helper
INFO - 2019-12-19 05:49:50 --> Helper loaded: form_helper
INFO - 2019-12-19 05:49:50 --> Database Driver Class Initialized
INFO - 2019-12-19 05:49:50 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:49:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:49:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:49:50 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:49:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:49:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:49:50 --> Controller Class Initialized
INFO - 2019-12-19 05:49:50 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-19 05:49:50 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 05:49:50 --> getAuth method got called...
DEBUG - 2019-12-19 05:49:50 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-19 05:49:50 --> Unreachable block here....
DEBUG - 2019-12-19 05:49:50 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-19 05:49:51 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-19 05:49:51 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-19 05:49:51 -->  ldap login success
INFO - 2019-12-19 05:49:51 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-19 05:49:51 --> Role Retrive from DB
INFO - 2019-12-19 05:49:52 --> get_group_role_mapping model43
DEBUG - 2019-12-19 05:49:52 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-19 05:49:52 --> loading model Active_Session
INFO - 2019-12-19 05:49:52 --> Model "Active_Session" initialized
DEBUG - 2019-12-19 05:49:52 --> calling insert_active_session()
DEBUG - 2019-12-19 05:49:52 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-19 05:49:52 --> insert success
DEBUG - 2019-12-19 05:49:52 --> loading Configarable_Login model...
INFO - 2019-12-19 05:49:52 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-19 05:49:52 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-19 05:49:52 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-19 05:49:53 --> Array
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

DEBUG - 2019-12-19 05:49:53 --> loading configurable menu with result=Array
DEBUG - 2019-12-19 05:49:53 --> loading view public\Dashboard
INFO - 2019-12-19 05:49:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-19 05:49:53 --> Final output sent to browser
DEBUG - 2019-12-19 05:49:53 --> Total execution time: 3.7347
INFO - 2019-12-19 05:49:59 --> Config Class Initialized
INFO - 2019-12-19 05:49:59 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:49:59 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:49:59 --> Utf8 Class Initialized
INFO - 2019-12-19 05:49:59 --> URI Class Initialized
INFO - 2019-12-19 05:50:00 --> Router Class Initialized
INFO - 2019-12-19 05:50:00 --> Output Class Initialized
INFO - 2019-12-19 05:50:00 --> Security Class Initialized
DEBUG - 2019-12-19 05:50:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:50:00 --> Input Class Initialized
INFO - 2019-12-19 05:50:00 --> Language Class Initialized
INFO - 2019-12-19 05:50:00 --> Loader Class Initialized
INFO - 2019-12-19 05:50:00 --> Helper loaded: html_helper
INFO - 2019-12-19 05:50:00 --> Helper loaded: url_helper
INFO - 2019-12-19 05:50:00 --> Helper loaded: form_helper
INFO - 2019-12-19 05:50:00 --> Database Driver Class Initialized
INFO - 2019-12-19 05:50:00 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:50:00 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:50:00 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:50:00 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:50:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:50:00 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:50:00 --> Controller Class Initialized
INFO - 2019-12-19 05:50:00 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-19 05:50:00 --> Final output sent to browser
DEBUG - 2019-12-19 05:50:00 --> Total execution time: 0.1322
INFO - 2019-12-19 05:50:01 --> Config Class Initialized
INFO - 2019-12-19 05:50:01 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:50:01 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:50:01 --> Utf8 Class Initialized
INFO - 2019-12-19 05:50:01 --> URI Class Initialized
INFO - 2019-12-19 05:50:01 --> Router Class Initialized
INFO - 2019-12-19 05:50:01 --> Output Class Initialized
INFO - 2019-12-19 05:50:01 --> Security Class Initialized
DEBUG - 2019-12-19 05:50:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:50:01 --> Input Class Initialized
INFO - 2019-12-19 05:50:01 --> Language Class Initialized
INFO - 2019-12-19 05:50:01 --> Loader Class Initialized
INFO - 2019-12-19 05:50:01 --> Helper loaded: html_helper
INFO - 2019-12-19 05:50:01 --> Helper loaded: url_helper
INFO - 2019-12-19 05:50:01 --> Helper loaded: form_helper
INFO - 2019-12-19 05:50:01 --> Database Driver Class Initialized
INFO - 2019-12-19 05:50:01 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:50:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:50:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:50:01 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:50:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:50:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:50:01 --> Controller Class Initialized
INFO - 2019-12-19 05:50:01 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-19 05:50:01 --> Final output sent to browser
DEBUG - 2019-12-19 05:50:01 --> Total execution time: 0.1132
INFO - 2019-12-19 05:50:03 --> Config Class Initialized
INFO - 2019-12-19 05:50:03 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:50:03 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:50:03 --> Utf8 Class Initialized
INFO - 2019-12-19 05:50:03 --> URI Class Initialized
INFO - 2019-12-19 05:50:03 --> Router Class Initialized
INFO - 2019-12-19 05:50:03 --> Output Class Initialized
INFO - 2019-12-19 05:50:03 --> Security Class Initialized
DEBUG - 2019-12-19 05:50:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:50:03 --> Input Class Initialized
INFO - 2019-12-19 05:50:03 --> Language Class Initialized
INFO - 2019-12-19 05:50:03 --> Loader Class Initialized
INFO - 2019-12-19 05:50:03 --> Helper loaded: html_helper
INFO - 2019-12-19 05:50:03 --> Helper loaded: url_helper
INFO - 2019-12-19 05:50:03 --> Helper loaded: form_helper
INFO - 2019-12-19 05:50:03 --> Database Driver Class Initialized
INFO - 2019-12-19 05:50:03 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:50:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:50:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:50:04 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:50:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:50:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:50:04 --> Controller Class Initialized
INFO - 2019-12-19 05:50:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-19 05:50:04 --> Final output sent to browser
DEBUG - 2019-12-19 05:50:04 --> Total execution time: 0.2655
INFO - 2019-12-19 05:50:05 --> Config Class Initialized
INFO - 2019-12-19 05:50:05 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:50:05 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:50:05 --> Utf8 Class Initialized
INFO - 2019-12-19 05:50:05 --> URI Class Initialized
INFO - 2019-12-19 05:50:05 --> Router Class Initialized
INFO - 2019-12-19 05:50:05 --> Output Class Initialized
INFO - 2019-12-19 05:50:05 --> Security Class Initialized
DEBUG - 2019-12-19 05:50:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:50:05 --> Input Class Initialized
INFO - 2019-12-19 05:50:05 --> Language Class Initialized
INFO - 2019-12-19 05:50:05 --> Loader Class Initialized
INFO - 2019-12-19 05:50:05 --> Helper loaded: html_helper
INFO - 2019-12-19 05:50:05 --> Helper loaded: url_helper
INFO - 2019-12-19 05:50:05 --> Helper loaded: form_helper
INFO - 2019-12-19 05:50:05 --> Database Driver Class Initialized
INFO - 2019-12-19 05:50:05 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:50:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:50:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:50:05 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:50:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:50:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:50:05 --> Controller Class Initialized
INFO - 2019-12-19 05:50:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-19 05:50:05 --> Final output sent to browser
DEBUG - 2019-12-19 05:50:05 --> Total execution time: 0.0992
INFO - 2019-12-19 05:50:07 --> Config Class Initialized
INFO - 2019-12-19 05:50:07 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:50:07 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:50:07 --> Utf8 Class Initialized
INFO - 2019-12-19 05:50:07 --> URI Class Initialized
INFO - 2019-12-19 05:50:07 --> Router Class Initialized
INFO - 2019-12-19 05:50:07 --> Output Class Initialized
INFO - 2019-12-19 05:50:07 --> Security Class Initialized
DEBUG - 2019-12-19 05:50:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:50:07 --> Input Class Initialized
INFO - 2019-12-19 05:50:07 --> Language Class Initialized
INFO - 2019-12-19 05:50:07 --> Loader Class Initialized
INFO - 2019-12-19 05:50:07 --> Helper loaded: html_helper
INFO - 2019-12-19 05:50:07 --> Helper loaded: url_helper
INFO - 2019-12-19 05:50:07 --> Helper loaded: form_helper
INFO - 2019-12-19 05:50:07 --> Database Driver Class Initialized
INFO - 2019-12-19 05:50:07 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:50:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:50:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:50:07 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:50:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:50:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:50:07 --> Controller Class Initialized
INFO - 2019-12-19 05:50:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-19 05:50:07 --> Final output sent to browser
DEBUG - 2019-12-19 05:50:07 --> Total execution time: 0.0962
INFO - 2019-12-19 05:50:08 --> Config Class Initialized
INFO - 2019-12-19 05:50:08 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:50:08 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:50:08 --> Utf8 Class Initialized
INFO - 2019-12-19 05:50:08 --> URI Class Initialized
INFO - 2019-12-19 05:50:08 --> Router Class Initialized
INFO - 2019-12-19 05:50:08 --> Output Class Initialized
INFO - 2019-12-19 05:50:08 --> Security Class Initialized
DEBUG - 2019-12-19 05:50:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:50:08 --> Input Class Initialized
INFO - 2019-12-19 05:50:08 --> Language Class Initialized
INFO - 2019-12-19 05:50:08 --> Loader Class Initialized
INFO - 2019-12-19 05:50:08 --> Helper loaded: html_helper
INFO - 2019-12-19 05:50:08 --> Helper loaded: url_helper
INFO - 2019-12-19 05:50:08 --> Helper loaded: form_helper
INFO - 2019-12-19 05:50:08 --> Database Driver Class Initialized
INFO - 2019-12-19 05:50:08 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:50:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:50:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:50:08 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:50:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:50:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:50:08 --> Controller Class Initialized
DEBUG - 2019-12-19 05:50:08 --> Create_User constructer got called..
DEBUG - 2019-12-19 05:50:08 --> loading configurable menu with result=
INFO - 2019-12-19 05:50:08 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 05:50:08 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 05:50:09 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 05:50:09 --> Final output sent to browser
DEBUG - 2019-12-19 05:50:09 --> Total execution time: 0.1342
INFO - 2019-12-19 05:50:11 --> Config Class Initialized
INFO - 2019-12-19 05:50:11 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:50:11 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:50:11 --> Utf8 Class Initialized
INFO - 2019-12-19 05:50:11 --> URI Class Initialized
INFO - 2019-12-19 05:50:11 --> Router Class Initialized
INFO - 2019-12-19 05:50:11 --> Output Class Initialized
INFO - 2019-12-19 05:50:11 --> Security Class Initialized
DEBUG - 2019-12-19 05:50:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:50:11 --> Input Class Initialized
INFO - 2019-12-19 05:50:11 --> Language Class Initialized
INFO - 2019-12-19 05:50:11 --> Loader Class Initialized
INFO - 2019-12-19 05:50:11 --> Helper loaded: html_helper
INFO - 2019-12-19 05:50:11 --> Helper loaded: url_helper
INFO - 2019-12-19 05:50:11 --> Helper loaded: form_helper
INFO - 2019-12-19 05:50:11 --> Database Driver Class Initialized
INFO - 2019-12-19 05:50:11 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:50:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:50:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:50:11 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:50:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:50:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:50:11 --> Controller Class Initialized
DEBUG - 2019-12-19 05:50:11 --> Create_User constructer got called..
INFO - 2019-12-19 05:50:11 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 05:50:12 --> showing all user from db tblusers...
DEBUG - 2019-12-19 05:50:12 --> show_users from DB
INFO - 2019-12-19 05:50:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 05:50:12 --> Final output sent to browser
DEBUG - 2019-12-19 05:50:12 --> Total execution time: 0.1322
INFO - 2019-12-19 05:50:24 --> Config Class Initialized
INFO - 2019-12-19 05:50:24 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:50:24 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:50:24 --> Utf8 Class Initialized
INFO - 2019-12-19 05:50:24 --> URI Class Initialized
INFO - 2019-12-19 05:50:24 --> Router Class Initialized
INFO - 2019-12-19 05:50:24 --> Output Class Initialized
INFO - 2019-12-19 05:50:24 --> Security Class Initialized
DEBUG - 2019-12-19 05:50:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:50:24 --> Input Class Initialized
INFO - 2019-12-19 05:50:24 --> Language Class Initialized
INFO - 2019-12-19 05:50:24 --> Loader Class Initialized
INFO - 2019-12-19 05:50:24 --> Helper loaded: html_helper
INFO - 2019-12-19 05:50:24 --> Helper loaded: url_helper
INFO - 2019-12-19 05:50:24 --> Helper loaded: form_helper
INFO - 2019-12-19 05:50:24 --> Database Driver Class Initialized
INFO - 2019-12-19 05:50:24 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:50:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:50:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:50:24 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:50:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:50:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:50:24 --> Controller Class Initialized
DEBUG - 2019-12-19 05:50:24 --> Create_User constructer got called..
INFO - 2019-12-19 05:50:24 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 05:50:24 --> showing all user from db tblusers...
DEBUG - 2019-12-19 05:50:24 --> show_groups from DB
INFO - 2019-12-19 05:50:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 05:50:24 --> Final output sent to browser
DEBUG - 2019-12-19 05:50:24 --> Total execution time: 0.1082
INFO - 2019-12-19 05:54:24 --> Config Class Initialized
INFO - 2019-12-19 05:54:24 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:54:24 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:54:24 --> Utf8 Class Initialized
INFO - 2019-12-19 05:54:24 --> URI Class Initialized
INFO - 2019-12-19 05:54:24 --> Router Class Initialized
INFO - 2019-12-19 05:54:24 --> Output Class Initialized
INFO - 2019-12-19 05:54:24 --> Security Class Initialized
DEBUG - 2019-12-19 05:54:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:54:24 --> Input Class Initialized
INFO - 2019-12-19 05:54:24 --> Language Class Initialized
INFO - 2019-12-19 05:54:24 --> Loader Class Initialized
INFO - 2019-12-19 05:54:24 --> Helper loaded: html_helper
INFO - 2019-12-19 05:54:24 --> Helper loaded: url_helper
INFO - 2019-12-19 05:54:24 --> Helper loaded: form_helper
INFO - 2019-12-19 05:54:24 --> Database Driver Class Initialized
INFO - 2019-12-19 05:54:24 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:54:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:54:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:54:24 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:54:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:54:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:54:24 --> Controller Class Initialized
DEBUG - 2019-12-19 05:54:24 --> Create_User constructer got called..
INFO - 2019-12-19 05:54:25 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 05:54:25 --> showing all user from db tblusers...
DEBUG - 2019-12-19 05:54:25 --> show_groups from DB
INFO - 2019-12-19 05:54:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 05:54:25 --> Final output sent to browser
DEBUG - 2019-12-19 05:54:25 --> Total execution time: 0.4272
INFO - 2019-12-19 05:54:45 --> Config Class Initialized
INFO - 2019-12-19 05:54:45 --> Hooks Class Initialized
DEBUG - 2019-12-19 05:54:45 --> UTF-8 Support Enabled
INFO - 2019-12-19 05:54:45 --> Utf8 Class Initialized
INFO - 2019-12-19 05:54:45 --> URI Class Initialized
INFO - 2019-12-19 05:54:45 --> Router Class Initialized
INFO - 2019-12-19 05:54:45 --> Output Class Initialized
INFO - 2019-12-19 05:54:45 --> Security Class Initialized
DEBUG - 2019-12-19 05:54:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 05:54:45 --> Input Class Initialized
INFO - 2019-12-19 05:54:45 --> Language Class Initialized
INFO - 2019-12-19 05:54:45 --> Loader Class Initialized
INFO - 2019-12-19 05:54:45 --> Helper loaded: html_helper
INFO - 2019-12-19 05:54:45 --> Helper loaded: url_helper
INFO - 2019-12-19 05:54:45 --> Helper loaded: form_helper
INFO - 2019-12-19 05:54:45 --> Database Driver Class Initialized
INFO - 2019-12-19 05:54:45 --> Form Validation Class Initialized
DEBUG - 2019-12-19 05:54:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 05:54:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 05:54:45 --> Encryption Class Initialized
DEBUG - 2019-12-19 05:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 05:54:45 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 05:54:45 --> Controller Class Initialized
DEBUG - 2019-12-19 05:54:45 --> Create_User constructer got called..
INFO - 2019-12-19 05:54:45 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 05:54:45 --> showing all user from db tblusers...
DEBUG - 2019-12-19 05:54:45 --> show_groups from DB
INFO - 2019-12-19 05:54:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 05:54:45 --> Final output sent to browser
DEBUG - 2019-12-19 05:54:45 --> Total execution time: 0.4002
INFO - 2019-12-19 06:19:55 --> Config Class Initialized
INFO - 2019-12-19 06:19:55 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:19:55 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:19:55 --> Utf8 Class Initialized
INFO - 2019-12-19 06:19:55 --> URI Class Initialized
INFO - 2019-12-19 06:19:55 --> Router Class Initialized
INFO - 2019-12-19 06:19:55 --> Output Class Initialized
INFO - 2019-12-19 06:19:55 --> Security Class Initialized
DEBUG - 2019-12-19 06:19:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:19:56 --> Input Class Initialized
INFO - 2019-12-19 06:19:56 --> Language Class Initialized
INFO - 2019-12-19 06:19:56 --> Loader Class Initialized
INFO - 2019-12-19 06:19:56 --> Helper loaded: html_helper
INFO - 2019-12-19 06:19:56 --> Helper loaded: url_helper
INFO - 2019-12-19 06:19:56 --> Helper loaded: form_helper
INFO - 2019-12-19 06:19:56 --> Database Driver Class Initialized
INFO - 2019-12-19 06:19:56 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:19:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:19:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:19:56 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:19:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:19:56 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:19:56 --> Controller Class Initialized
DEBUG - 2019-12-19 06:19:56 --> Create_User constructer got called..
INFO - 2019-12-19 06:19:56 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:19:56 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:19:56 --> show_groups from DB
INFO - 2019-12-19 06:19:56 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:19:56 --> Final output sent to browser
DEBUG - 2019-12-19 06:19:56 --> Total execution time: 0.5831
INFO - 2019-12-19 06:28:52 --> Config Class Initialized
INFO - 2019-12-19 06:28:52 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:28:52 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:28:52 --> Utf8 Class Initialized
INFO - 2019-12-19 06:28:52 --> URI Class Initialized
INFO - 2019-12-19 06:28:52 --> Router Class Initialized
INFO - 2019-12-19 06:28:52 --> Output Class Initialized
INFO - 2019-12-19 06:28:52 --> Security Class Initialized
DEBUG - 2019-12-19 06:28:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:28:52 --> Input Class Initialized
INFO - 2019-12-19 06:28:52 --> Language Class Initialized
INFO - 2019-12-19 06:28:52 --> Loader Class Initialized
INFO - 2019-12-19 06:28:52 --> Helper loaded: html_helper
INFO - 2019-12-19 06:28:53 --> Helper loaded: url_helper
INFO - 2019-12-19 06:28:53 --> Helper loaded: form_helper
INFO - 2019-12-19 06:28:53 --> Database Driver Class Initialized
INFO - 2019-12-19 06:28:53 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:28:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:28:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:28:53 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:28:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:28:53 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:28:53 --> Controller Class Initialized
DEBUG - 2019-12-19 06:28:53 --> Create_User constructer got called..
INFO - 2019-12-19 06:28:53 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:28:53 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:28:53 --> show_groups from DB
INFO - 2019-12-19 06:28:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:28:53 --> Final output sent to browser
DEBUG - 2019-12-19 06:28:53 --> Total execution time: 0.6411
INFO - 2019-12-19 06:29:06 --> Config Class Initialized
INFO - 2019-12-19 06:29:06 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:29:06 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:29:06 --> Utf8 Class Initialized
INFO - 2019-12-19 06:29:06 --> URI Class Initialized
INFO - 2019-12-19 06:29:06 --> Router Class Initialized
INFO - 2019-12-19 06:29:06 --> Output Class Initialized
INFO - 2019-12-19 06:29:06 --> Security Class Initialized
DEBUG - 2019-12-19 06:29:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:29:06 --> Input Class Initialized
INFO - 2019-12-19 06:29:06 --> Language Class Initialized
INFO - 2019-12-19 06:29:06 --> Loader Class Initialized
INFO - 2019-12-19 06:29:06 --> Helper loaded: html_helper
INFO - 2019-12-19 06:29:06 --> Helper loaded: url_helper
INFO - 2019-12-19 06:29:06 --> Helper loaded: form_helper
INFO - 2019-12-19 06:29:07 --> Database Driver Class Initialized
INFO - 2019-12-19 06:29:07 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:29:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:29:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:29:07 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:29:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:29:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:29:07 --> Controller Class Initialized
DEBUG - 2019-12-19 06:29:07 --> Create_User constructer got called..
INFO - 2019-12-19 06:29:07 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:29:07 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:29:07 --> show_groups from DB
INFO - 2019-12-19 06:29:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:29:07 --> Final output sent to browser
DEBUG - 2019-12-19 06:29:07 --> Total execution time: 0.5551
INFO - 2019-12-19 06:29:31 --> Config Class Initialized
INFO - 2019-12-19 06:29:31 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:29:31 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:29:31 --> Utf8 Class Initialized
INFO - 2019-12-19 06:29:31 --> URI Class Initialized
INFO - 2019-12-19 06:29:31 --> Router Class Initialized
INFO - 2019-12-19 06:29:31 --> Output Class Initialized
INFO - 2019-12-19 06:29:31 --> Security Class Initialized
DEBUG - 2019-12-19 06:29:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:29:31 --> Input Class Initialized
INFO - 2019-12-19 06:29:32 --> Language Class Initialized
INFO - 2019-12-19 06:29:32 --> Loader Class Initialized
INFO - 2019-12-19 06:29:32 --> Helper loaded: html_helper
INFO - 2019-12-19 06:29:32 --> Helper loaded: url_helper
INFO - 2019-12-19 06:29:32 --> Helper loaded: form_helper
INFO - 2019-12-19 06:29:32 --> Database Driver Class Initialized
INFO - 2019-12-19 06:29:32 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:29:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:29:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:29:32 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:29:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:29:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:29:32 --> Controller Class Initialized
DEBUG - 2019-12-19 06:29:32 --> Create_User constructer got called..
INFO - 2019-12-19 06:29:32 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:29:32 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:29:32 --> show_groups from DB
INFO - 2019-12-19 06:29:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:29:32 --> Final output sent to browser
DEBUG - 2019-12-19 06:29:32 --> Total execution time: 0.5401
INFO - 2019-12-19 06:30:54 --> Config Class Initialized
INFO - 2019-12-19 06:30:54 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:30:54 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:30:54 --> Utf8 Class Initialized
INFO - 2019-12-19 06:30:54 --> URI Class Initialized
INFO - 2019-12-19 06:30:54 --> Router Class Initialized
INFO - 2019-12-19 06:30:54 --> Output Class Initialized
INFO - 2019-12-19 06:30:54 --> Security Class Initialized
DEBUG - 2019-12-19 06:30:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:30:55 --> Input Class Initialized
INFO - 2019-12-19 06:30:55 --> Language Class Initialized
INFO - 2019-12-19 06:30:55 --> Loader Class Initialized
INFO - 2019-12-19 06:30:55 --> Helper loaded: html_helper
INFO - 2019-12-19 06:30:55 --> Helper loaded: url_helper
INFO - 2019-12-19 06:30:55 --> Helper loaded: form_helper
INFO - 2019-12-19 06:30:55 --> Database Driver Class Initialized
INFO - 2019-12-19 06:30:55 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:30:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:30:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:30:55 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:30:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:30:55 --> Controller Class Initialized
DEBUG - 2019-12-19 06:30:55 --> Create_User constructer got called..
INFO - 2019-12-19 06:30:55 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:30:55 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:30:55 --> show_groups from DB
INFO - 2019-12-19 06:30:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:30:55 --> Final output sent to browser
DEBUG - 2019-12-19 06:30:55 --> Total execution time: 0.4890
INFO - 2019-12-19 06:31:06 --> Config Class Initialized
INFO - 2019-12-19 06:31:06 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:31:06 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:31:06 --> Utf8 Class Initialized
INFO - 2019-12-19 06:31:06 --> URI Class Initialized
INFO - 2019-12-19 06:31:06 --> Router Class Initialized
INFO - 2019-12-19 06:31:06 --> Output Class Initialized
INFO - 2019-12-19 06:31:06 --> Security Class Initialized
DEBUG - 2019-12-19 06:31:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:31:06 --> Input Class Initialized
INFO - 2019-12-19 06:31:06 --> Language Class Initialized
INFO - 2019-12-19 06:31:06 --> Loader Class Initialized
INFO - 2019-12-19 06:31:06 --> Helper loaded: html_helper
INFO - 2019-12-19 06:31:06 --> Helper loaded: url_helper
INFO - 2019-12-19 06:31:06 --> Helper loaded: form_helper
INFO - 2019-12-19 06:31:06 --> Database Driver Class Initialized
INFO - 2019-12-19 06:31:06 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:31:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:31:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:31:06 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:31:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:31:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:31:06 --> Controller Class Initialized
DEBUG - 2019-12-19 06:31:06 --> Create_User constructer got called..
INFO - 2019-12-19 06:31:06 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:31:06 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:31:06 --> show_groups from DB
INFO - 2019-12-19 06:31:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:31:06 --> Final output sent to browser
DEBUG - 2019-12-19 06:31:06 --> Total execution time: 0.5661
INFO - 2019-12-19 06:32:48 --> Config Class Initialized
INFO - 2019-12-19 06:32:48 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:32:48 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:32:48 --> Utf8 Class Initialized
INFO - 2019-12-19 06:32:48 --> URI Class Initialized
INFO - 2019-12-19 06:32:48 --> Router Class Initialized
INFO - 2019-12-19 06:32:48 --> Output Class Initialized
INFO - 2019-12-19 06:32:48 --> Security Class Initialized
DEBUG - 2019-12-19 06:32:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:32:48 --> Input Class Initialized
INFO - 2019-12-19 06:32:48 --> Language Class Initialized
INFO - 2019-12-19 06:32:48 --> Loader Class Initialized
INFO - 2019-12-19 06:32:48 --> Helper loaded: html_helper
INFO - 2019-12-19 06:32:48 --> Helper loaded: url_helper
INFO - 2019-12-19 06:32:48 --> Helper loaded: form_helper
INFO - 2019-12-19 06:32:48 --> Database Driver Class Initialized
INFO - 2019-12-19 06:32:48 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:32:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:32:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:32:48 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:32:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:32:48 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:32:48 --> Controller Class Initialized
DEBUG - 2019-12-19 06:32:49 --> Create_User constructer got called..
INFO - 2019-12-19 06:32:49 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:32:49 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:32:49 --> show_groups from DB
INFO - 2019-12-19 06:32:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:32:49 --> Final output sent to browser
DEBUG - 2019-12-19 06:32:49 --> Total execution time: 0.5081
INFO - 2019-12-19 06:33:27 --> Config Class Initialized
INFO - 2019-12-19 06:33:27 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:33:27 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:33:27 --> Utf8 Class Initialized
INFO - 2019-12-19 06:33:27 --> URI Class Initialized
INFO - 2019-12-19 06:33:27 --> Router Class Initialized
INFO - 2019-12-19 06:33:27 --> Output Class Initialized
INFO - 2019-12-19 06:33:27 --> Security Class Initialized
DEBUG - 2019-12-19 06:33:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:33:27 --> Input Class Initialized
INFO - 2019-12-19 06:33:27 --> Language Class Initialized
INFO - 2019-12-19 06:33:27 --> Loader Class Initialized
INFO - 2019-12-19 06:33:27 --> Helper loaded: html_helper
INFO - 2019-12-19 06:33:27 --> Helper loaded: url_helper
INFO - 2019-12-19 06:33:27 --> Helper loaded: form_helper
INFO - 2019-12-19 06:33:27 --> Database Driver Class Initialized
INFO - 2019-12-19 06:33:27 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:33:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:33:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:33:27 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:33:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:33:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:33:27 --> Controller Class Initialized
DEBUG - 2019-12-19 06:33:27 --> Create_User constructer got called..
INFO - 2019-12-19 06:33:27 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:33:27 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:33:27 --> show_groups from DB
INFO - 2019-12-19 06:33:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:33:27 --> Final output sent to browser
DEBUG - 2019-12-19 06:33:27 --> Total execution time: 0.4910
INFO - 2019-12-19 06:35:04 --> Config Class Initialized
INFO - 2019-12-19 06:35:04 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:35:04 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:35:04 --> Utf8 Class Initialized
INFO - 2019-12-19 06:35:04 --> URI Class Initialized
INFO - 2019-12-19 06:35:04 --> Router Class Initialized
INFO - 2019-12-19 06:35:04 --> Output Class Initialized
INFO - 2019-12-19 06:35:04 --> Security Class Initialized
DEBUG - 2019-12-19 06:35:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:35:04 --> Input Class Initialized
INFO - 2019-12-19 06:35:04 --> Language Class Initialized
INFO - 2019-12-19 06:35:04 --> Loader Class Initialized
INFO - 2019-12-19 06:35:04 --> Helper loaded: html_helper
INFO - 2019-12-19 06:35:04 --> Helper loaded: url_helper
INFO - 2019-12-19 06:35:04 --> Helper loaded: form_helper
INFO - 2019-12-19 06:35:04 --> Database Driver Class Initialized
INFO - 2019-12-19 06:35:04 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:35:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:35:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:35:04 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:35:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:35:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:35:04 --> Controller Class Initialized
DEBUG - 2019-12-19 06:35:04 --> Create_User constructer got called..
INFO - 2019-12-19 06:35:04 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:35:04 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:35:04 --> show_groups from DB
INFO - 2019-12-19 06:35:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:35:04 --> Final output sent to browser
DEBUG - 2019-12-19 06:35:04 --> Total execution time: 0.5221
INFO - 2019-12-19 06:49:23 --> Config Class Initialized
INFO - 2019-12-19 06:49:23 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:49:23 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:49:23 --> Utf8 Class Initialized
INFO - 2019-12-19 06:49:23 --> URI Class Initialized
INFO - 2019-12-19 06:49:23 --> Router Class Initialized
INFO - 2019-12-19 06:49:23 --> Output Class Initialized
INFO - 2019-12-19 06:49:23 --> Security Class Initialized
DEBUG - 2019-12-19 06:49:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:49:23 --> Input Class Initialized
INFO - 2019-12-19 06:49:23 --> Language Class Initialized
INFO - 2019-12-19 06:49:23 --> Loader Class Initialized
INFO - 2019-12-19 06:49:23 --> Helper loaded: html_helper
INFO - 2019-12-19 06:49:23 --> Helper loaded: url_helper
INFO - 2019-12-19 06:49:23 --> Helper loaded: form_helper
INFO - 2019-12-19 06:49:23 --> Database Driver Class Initialized
INFO - 2019-12-19 06:49:23 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:49:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:49:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:49:23 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:49:23 --> Controller Class Initialized
DEBUG - 2019-12-19 06:49:24 --> Create_User constructer got called..
INFO - 2019-12-19 06:49:24 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:49:24 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:49:24 --> show_groups from DB
INFO - 2019-12-19 06:49:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:49:24 --> Final output sent to browser
DEBUG - 2019-12-19 06:49:24 --> Total execution time: 0.6411
INFO - 2019-12-19 06:50:51 --> Config Class Initialized
INFO - 2019-12-19 06:50:51 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:50:51 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:50:51 --> Utf8 Class Initialized
INFO - 2019-12-19 06:50:51 --> URI Class Initialized
INFO - 2019-12-19 06:50:51 --> Router Class Initialized
INFO - 2019-12-19 06:50:51 --> Output Class Initialized
INFO - 2019-12-19 06:50:51 --> Security Class Initialized
DEBUG - 2019-12-19 06:50:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:50:51 --> Input Class Initialized
INFO - 2019-12-19 06:50:51 --> Language Class Initialized
INFO - 2019-12-19 06:50:51 --> Loader Class Initialized
INFO - 2019-12-19 06:50:51 --> Helper loaded: html_helper
INFO - 2019-12-19 06:50:51 --> Helper loaded: url_helper
INFO - 2019-12-19 06:50:51 --> Helper loaded: form_helper
INFO - 2019-12-19 06:50:51 --> Database Driver Class Initialized
INFO - 2019-12-19 06:50:51 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:50:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:50:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:50:51 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:50:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:50:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:50:51 --> Controller Class Initialized
DEBUG - 2019-12-19 06:50:51 --> Create_User constructer got called..
INFO - 2019-12-19 06:50:51 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:50:51 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:50:51 --> show_groups from DB
INFO - 2019-12-19 06:50:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:50:51 --> Final output sent to browser
DEBUG - 2019-12-19 06:50:51 --> Total execution time: 0.6191
INFO - 2019-12-19 06:53:49 --> Config Class Initialized
INFO - 2019-12-19 06:53:49 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:53:49 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:53:49 --> Utf8 Class Initialized
INFO - 2019-12-19 06:53:49 --> URI Class Initialized
INFO - 2019-12-19 06:53:49 --> Router Class Initialized
INFO - 2019-12-19 06:53:49 --> Output Class Initialized
INFO - 2019-12-19 06:53:49 --> Security Class Initialized
DEBUG - 2019-12-19 06:53:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:53:49 --> Input Class Initialized
INFO - 2019-12-19 06:53:49 --> Language Class Initialized
INFO - 2019-12-19 06:53:49 --> Loader Class Initialized
INFO - 2019-12-19 06:53:49 --> Helper loaded: html_helper
INFO - 2019-12-19 06:53:49 --> Helper loaded: url_helper
INFO - 2019-12-19 06:53:49 --> Helper loaded: form_helper
INFO - 2019-12-19 06:53:49 --> Database Driver Class Initialized
INFO - 2019-12-19 06:53:49 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:53:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:53:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:53:50 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:53:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:53:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:53:50 --> Controller Class Initialized
DEBUG - 2019-12-19 06:53:50 --> Create_User constructer got called..
INFO - 2019-12-19 06:53:50 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:53:50 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:53:50 --> show_groups from DB
INFO - 2019-12-19 06:53:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:53:50 --> Final output sent to browser
DEBUG - 2019-12-19 06:53:50 --> Total execution time: 0.5760
INFO - 2019-12-19 06:54:36 --> Config Class Initialized
INFO - 2019-12-19 06:54:36 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:54:36 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:54:36 --> Utf8 Class Initialized
INFO - 2019-12-19 06:54:36 --> URI Class Initialized
INFO - 2019-12-19 06:54:36 --> Router Class Initialized
INFO - 2019-12-19 06:54:36 --> Output Class Initialized
INFO - 2019-12-19 06:54:36 --> Security Class Initialized
DEBUG - 2019-12-19 06:54:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:54:36 --> Input Class Initialized
INFO - 2019-12-19 06:54:36 --> Language Class Initialized
INFO - 2019-12-19 06:54:36 --> Loader Class Initialized
INFO - 2019-12-19 06:54:36 --> Helper loaded: html_helper
INFO - 2019-12-19 06:54:36 --> Helper loaded: url_helper
INFO - 2019-12-19 06:54:36 --> Helper loaded: form_helper
INFO - 2019-12-19 06:54:36 --> Database Driver Class Initialized
INFO - 2019-12-19 06:54:36 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:54:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:54:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:54:36 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:54:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:54:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:54:36 --> Controller Class Initialized
DEBUG - 2019-12-19 06:54:36 --> Create_User constructer got called..
INFO - 2019-12-19 06:54:36 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:54:36 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:54:36 --> show_groups from DB
INFO - 2019-12-19 06:54:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:54:36 --> Final output sent to browser
DEBUG - 2019-12-19 06:54:36 --> Total execution time: 0.5560
INFO - 2019-12-19 06:55:03 --> Config Class Initialized
INFO - 2019-12-19 06:55:03 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:55:03 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:55:03 --> Utf8 Class Initialized
INFO - 2019-12-19 06:55:03 --> URI Class Initialized
INFO - 2019-12-19 06:55:03 --> Router Class Initialized
INFO - 2019-12-19 06:55:03 --> Output Class Initialized
INFO - 2019-12-19 06:55:03 --> Security Class Initialized
DEBUG - 2019-12-19 06:55:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:55:03 --> Input Class Initialized
INFO - 2019-12-19 06:55:03 --> Language Class Initialized
INFO - 2019-12-19 06:55:03 --> Loader Class Initialized
INFO - 2019-12-19 06:55:03 --> Helper loaded: html_helper
INFO - 2019-12-19 06:55:03 --> Helper loaded: url_helper
INFO - 2019-12-19 06:55:03 --> Helper loaded: form_helper
INFO - 2019-12-19 06:55:03 --> Database Driver Class Initialized
INFO - 2019-12-19 06:55:03 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:55:03 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:55:03 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:55:03 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:55:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:55:03 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:55:03 --> Controller Class Initialized
DEBUG - 2019-12-19 06:55:03 --> Create_User constructer got called..
INFO - 2019-12-19 06:55:03 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:55:03 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:55:03 --> show_groups from DB
INFO - 2019-12-19 06:55:03 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:55:03 --> Final output sent to browser
DEBUG - 2019-12-19 06:55:03 --> Total execution time: 0.4710
INFO - 2019-12-19 06:55:38 --> Config Class Initialized
INFO - 2019-12-19 06:55:38 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:55:38 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:55:38 --> Utf8 Class Initialized
INFO - 2019-12-19 06:55:38 --> URI Class Initialized
INFO - 2019-12-19 06:55:38 --> Router Class Initialized
INFO - 2019-12-19 06:55:38 --> Output Class Initialized
INFO - 2019-12-19 06:55:38 --> Security Class Initialized
DEBUG - 2019-12-19 06:55:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:55:38 --> Input Class Initialized
INFO - 2019-12-19 06:55:38 --> Language Class Initialized
INFO - 2019-12-19 06:55:38 --> Loader Class Initialized
INFO - 2019-12-19 06:55:38 --> Helper loaded: html_helper
INFO - 2019-12-19 06:55:38 --> Helper loaded: url_helper
INFO - 2019-12-19 06:55:38 --> Helper loaded: form_helper
INFO - 2019-12-19 06:55:38 --> Database Driver Class Initialized
INFO - 2019-12-19 06:55:38 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:55:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:55:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:55:38 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:55:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:55:38 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:55:38 --> Controller Class Initialized
DEBUG - 2019-12-19 06:55:38 --> Create_User constructer got called..
INFO - 2019-12-19 06:55:38 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:55:38 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:55:38 --> show_groups from DB
INFO - 2019-12-19 06:55:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:55:38 --> Final output sent to browser
DEBUG - 2019-12-19 06:55:38 --> Total execution time: 0.5990
INFO - 2019-12-19 06:56:13 --> Config Class Initialized
INFO - 2019-12-19 06:56:13 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:56:13 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:56:13 --> Utf8 Class Initialized
INFO - 2019-12-19 06:56:13 --> URI Class Initialized
INFO - 2019-12-19 06:56:13 --> Router Class Initialized
INFO - 2019-12-19 06:56:13 --> Output Class Initialized
INFO - 2019-12-19 06:56:13 --> Security Class Initialized
DEBUG - 2019-12-19 06:56:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:56:13 --> Input Class Initialized
INFO - 2019-12-19 06:56:13 --> Language Class Initialized
INFO - 2019-12-19 06:56:13 --> Loader Class Initialized
INFO - 2019-12-19 06:56:13 --> Helper loaded: html_helper
INFO - 2019-12-19 06:56:13 --> Helper loaded: url_helper
INFO - 2019-12-19 06:56:13 --> Helper loaded: form_helper
INFO - 2019-12-19 06:56:13 --> Database Driver Class Initialized
INFO - 2019-12-19 06:56:13 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:56:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:56:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:56:13 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:56:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:56:13 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:56:13 --> Controller Class Initialized
DEBUG - 2019-12-19 06:56:13 --> Create_User constructer got called..
INFO - 2019-12-19 06:56:13 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:56:13 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:56:13 --> show_groups from DB
INFO - 2019-12-19 06:56:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:56:13 --> Final output sent to browser
DEBUG - 2019-12-19 06:56:13 --> Total execution time: 0.5350
INFO - 2019-12-19 06:57:44 --> Config Class Initialized
INFO - 2019-12-19 06:57:44 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:57:44 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:57:44 --> Utf8 Class Initialized
INFO - 2019-12-19 06:57:44 --> URI Class Initialized
INFO - 2019-12-19 06:57:44 --> Router Class Initialized
INFO - 2019-12-19 06:57:44 --> Output Class Initialized
INFO - 2019-12-19 06:57:44 --> Security Class Initialized
DEBUG - 2019-12-19 06:57:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:57:44 --> Input Class Initialized
INFO - 2019-12-19 06:57:44 --> Language Class Initialized
INFO - 2019-12-19 06:57:44 --> Loader Class Initialized
INFO - 2019-12-19 06:57:44 --> Helper loaded: html_helper
INFO - 2019-12-19 06:57:44 --> Helper loaded: url_helper
INFO - 2019-12-19 06:57:44 --> Helper loaded: form_helper
INFO - 2019-12-19 06:57:44 --> Database Driver Class Initialized
INFO - 2019-12-19 06:57:44 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:57:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:57:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:57:44 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:57:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:57:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:57:44 --> Controller Class Initialized
DEBUG - 2019-12-19 06:57:44 --> Create_User constructer got called..
INFO - 2019-12-19 06:57:44 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:57:44 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:57:44 --> show_groups from DB
INFO - 2019-12-19 06:57:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:57:44 --> Final output sent to browser
DEBUG - 2019-12-19 06:57:44 --> Total execution time: 0.5531
INFO - 2019-12-19 06:58:14 --> Config Class Initialized
INFO - 2019-12-19 06:58:14 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:58:14 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:58:14 --> Utf8 Class Initialized
INFO - 2019-12-19 06:58:14 --> URI Class Initialized
INFO - 2019-12-19 06:58:14 --> Router Class Initialized
INFO - 2019-12-19 06:58:14 --> Output Class Initialized
INFO - 2019-12-19 06:58:14 --> Security Class Initialized
DEBUG - 2019-12-19 06:58:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:58:14 --> Input Class Initialized
INFO - 2019-12-19 06:58:14 --> Language Class Initialized
INFO - 2019-12-19 06:58:14 --> Loader Class Initialized
INFO - 2019-12-19 06:58:14 --> Helper loaded: html_helper
INFO - 2019-12-19 06:58:14 --> Helper loaded: url_helper
INFO - 2019-12-19 06:58:14 --> Helper loaded: form_helper
INFO - 2019-12-19 06:58:14 --> Database Driver Class Initialized
INFO - 2019-12-19 06:58:14 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:58:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:58:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:58:14 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:58:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:58:14 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:58:14 --> Controller Class Initialized
DEBUG - 2019-12-19 06:58:14 --> Create_User constructer got called..
INFO - 2019-12-19 06:58:14 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:58:14 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:58:14 --> show_groups from DB
INFO - 2019-12-19 06:58:14 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:58:14 --> Final output sent to browser
DEBUG - 2019-12-19 06:58:14 --> Total execution time: 0.6871
INFO - 2019-12-19 06:58:37 --> Config Class Initialized
INFO - 2019-12-19 06:58:37 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:58:38 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:58:38 --> Utf8 Class Initialized
INFO - 2019-12-19 06:58:38 --> URI Class Initialized
INFO - 2019-12-19 06:58:38 --> Router Class Initialized
INFO - 2019-12-19 06:58:38 --> Output Class Initialized
INFO - 2019-12-19 06:58:38 --> Security Class Initialized
DEBUG - 2019-12-19 06:58:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:58:38 --> Input Class Initialized
INFO - 2019-12-19 06:58:38 --> Language Class Initialized
INFO - 2019-12-19 06:58:38 --> Loader Class Initialized
INFO - 2019-12-19 06:58:38 --> Helper loaded: html_helper
INFO - 2019-12-19 06:58:38 --> Helper loaded: url_helper
INFO - 2019-12-19 06:58:38 --> Helper loaded: form_helper
INFO - 2019-12-19 06:58:38 --> Database Driver Class Initialized
INFO - 2019-12-19 06:58:38 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:58:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:58:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:58:38 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:58:38 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:58:38 --> Controller Class Initialized
DEBUG - 2019-12-19 06:58:38 --> Create_User constructer got called..
INFO - 2019-12-19 06:58:38 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:58:38 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:58:38 --> show_groups from DB
INFO - 2019-12-19 06:58:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:58:38 --> Final output sent to browser
DEBUG - 2019-12-19 06:58:38 --> Total execution time: 0.5211
INFO - 2019-12-19 06:59:21 --> Config Class Initialized
INFO - 2019-12-19 06:59:21 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:59:21 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:59:21 --> Utf8 Class Initialized
INFO - 2019-12-19 06:59:21 --> URI Class Initialized
INFO - 2019-12-19 06:59:21 --> Router Class Initialized
INFO - 2019-12-19 06:59:21 --> Output Class Initialized
INFO - 2019-12-19 06:59:21 --> Security Class Initialized
DEBUG - 2019-12-19 06:59:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:59:21 --> Input Class Initialized
INFO - 2019-12-19 06:59:22 --> Language Class Initialized
INFO - 2019-12-19 06:59:22 --> Loader Class Initialized
INFO - 2019-12-19 06:59:22 --> Helper loaded: html_helper
INFO - 2019-12-19 06:59:22 --> Helper loaded: url_helper
INFO - 2019-12-19 06:59:22 --> Helper loaded: form_helper
INFO - 2019-12-19 06:59:22 --> Database Driver Class Initialized
INFO - 2019-12-19 06:59:22 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:59:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:59:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:59:22 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:59:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:59:22 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:59:22 --> Controller Class Initialized
DEBUG - 2019-12-19 06:59:22 --> Create_User constructer got called..
INFO - 2019-12-19 06:59:22 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:59:22 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:59:22 --> show_groups from DB
INFO - 2019-12-19 06:59:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:59:22 --> Final output sent to browser
DEBUG - 2019-12-19 06:59:22 --> Total execution time: 0.5311
INFO - 2019-12-19 06:59:55 --> Config Class Initialized
INFO - 2019-12-19 06:59:55 --> Hooks Class Initialized
DEBUG - 2019-12-19 06:59:55 --> UTF-8 Support Enabled
INFO - 2019-12-19 06:59:55 --> Utf8 Class Initialized
INFO - 2019-12-19 06:59:55 --> URI Class Initialized
INFO - 2019-12-19 06:59:55 --> Router Class Initialized
INFO - 2019-12-19 06:59:55 --> Output Class Initialized
INFO - 2019-12-19 06:59:55 --> Security Class Initialized
DEBUG - 2019-12-19 06:59:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 06:59:55 --> Input Class Initialized
INFO - 2019-12-19 06:59:55 --> Language Class Initialized
INFO - 2019-12-19 06:59:55 --> Loader Class Initialized
INFO - 2019-12-19 06:59:55 --> Helper loaded: html_helper
INFO - 2019-12-19 06:59:55 --> Helper loaded: url_helper
INFO - 2019-12-19 06:59:55 --> Helper loaded: form_helper
INFO - 2019-12-19 06:59:55 --> Database Driver Class Initialized
INFO - 2019-12-19 06:59:55 --> Form Validation Class Initialized
DEBUG - 2019-12-19 06:59:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 06:59:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 06:59:55 --> Encryption Class Initialized
DEBUG - 2019-12-19 06:59:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 06:59:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 06:59:55 --> Controller Class Initialized
DEBUG - 2019-12-19 06:59:55 --> Create_User constructer got called..
INFO - 2019-12-19 06:59:55 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 06:59:55 --> showing all user from db tblusers...
DEBUG - 2019-12-19 06:59:55 --> show_groups from DB
INFO - 2019-12-19 06:59:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 06:59:55 --> Final output sent to browser
DEBUG - 2019-12-19 06:59:55 --> Total execution time: 0.5221
INFO - 2019-12-19 07:02:31 --> Config Class Initialized
INFO - 2019-12-19 07:02:31 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:02:31 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:02:31 --> Utf8 Class Initialized
INFO - 2019-12-19 07:02:31 --> URI Class Initialized
INFO - 2019-12-19 07:02:32 --> Router Class Initialized
INFO - 2019-12-19 07:02:32 --> Output Class Initialized
INFO - 2019-12-19 07:02:32 --> Security Class Initialized
DEBUG - 2019-12-19 07:02:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:02:32 --> Input Class Initialized
INFO - 2019-12-19 07:02:32 --> Language Class Initialized
INFO - 2019-12-19 07:02:32 --> Loader Class Initialized
INFO - 2019-12-19 07:02:32 --> Helper loaded: html_helper
INFO - 2019-12-19 07:02:32 --> Helper loaded: url_helper
INFO - 2019-12-19 07:02:32 --> Helper loaded: form_helper
INFO - 2019-12-19 07:02:32 --> Database Driver Class Initialized
INFO - 2019-12-19 07:02:32 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:02:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:02:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:02:32 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:02:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:02:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:02:32 --> Controller Class Initialized
DEBUG - 2019-12-19 07:02:32 --> Create_User constructer got called..
INFO - 2019-12-19 07:02:32 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:02:32 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:02:32 --> show_groups from DB
INFO - 2019-12-19 07:02:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:02:32 --> Final output sent to browser
DEBUG - 2019-12-19 07:02:32 --> Total execution time: 0.7231
INFO - 2019-12-19 07:08:25 --> Config Class Initialized
INFO - 2019-12-19 07:08:25 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:08:25 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:08:25 --> Utf8 Class Initialized
INFO - 2019-12-19 07:08:25 --> URI Class Initialized
INFO - 2019-12-19 07:08:25 --> Router Class Initialized
INFO - 2019-12-19 07:08:25 --> Output Class Initialized
INFO - 2019-12-19 07:08:25 --> Security Class Initialized
DEBUG - 2019-12-19 07:08:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:08:25 --> Input Class Initialized
INFO - 2019-12-19 07:08:25 --> Language Class Initialized
INFO - 2019-12-19 07:08:25 --> Loader Class Initialized
INFO - 2019-12-19 07:08:25 --> Helper loaded: html_helper
INFO - 2019-12-19 07:08:25 --> Helper loaded: url_helper
INFO - 2019-12-19 07:08:25 --> Helper loaded: form_helper
INFO - 2019-12-19 07:08:25 --> Database Driver Class Initialized
INFO - 2019-12-19 07:08:25 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:08:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:08:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:08:25 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:08:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:08:25 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:08:25 --> Controller Class Initialized
DEBUG - 2019-12-19 07:08:25 --> Create_User constructer got called..
INFO - 2019-12-19 07:08:25 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:08:25 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:08:25 --> show_groups from DB
INFO - 2019-12-19 07:08:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:08:25 --> Final output sent to browser
DEBUG - 2019-12-19 07:08:25 --> Total execution time: 0.7201
INFO - 2019-12-19 07:08:46 --> Config Class Initialized
INFO - 2019-12-19 07:08:46 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:08:46 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:08:46 --> Utf8 Class Initialized
INFO - 2019-12-19 07:08:46 --> URI Class Initialized
INFO - 2019-12-19 07:08:46 --> Router Class Initialized
INFO - 2019-12-19 07:08:46 --> Output Class Initialized
INFO - 2019-12-19 07:08:46 --> Security Class Initialized
DEBUG - 2019-12-19 07:08:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:08:46 --> Input Class Initialized
INFO - 2019-12-19 07:08:46 --> Language Class Initialized
INFO - 2019-12-19 07:08:46 --> Loader Class Initialized
INFO - 2019-12-19 07:08:46 --> Helper loaded: html_helper
INFO - 2019-12-19 07:08:46 --> Helper loaded: url_helper
INFO - 2019-12-19 07:08:46 --> Helper loaded: form_helper
INFO - 2019-12-19 07:08:46 --> Database Driver Class Initialized
INFO - 2019-12-19 07:08:46 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:08:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:08:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:08:46 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:08:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:08:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:08:46 --> Controller Class Initialized
DEBUG - 2019-12-19 07:08:46 --> Create_User constructer got called..
INFO - 2019-12-19 07:08:46 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:08:46 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:08:46 --> show_groups from DB
INFO - 2019-12-19 07:08:46 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:08:46 --> Final output sent to browser
DEBUG - 2019-12-19 07:08:46 --> Total execution time: 0.4820
INFO - 2019-12-19 07:09:19 --> Config Class Initialized
INFO - 2019-12-19 07:09:19 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:09:19 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:09:19 --> Utf8 Class Initialized
INFO - 2019-12-19 07:09:19 --> URI Class Initialized
INFO - 2019-12-19 07:09:19 --> Router Class Initialized
INFO - 2019-12-19 07:09:19 --> Output Class Initialized
INFO - 2019-12-19 07:09:19 --> Security Class Initialized
DEBUG - 2019-12-19 07:09:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:09:19 --> Input Class Initialized
INFO - 2019-12-19 07:09:19 --> Language Class Initialized
INFO - 2019-12-19 07:09:19 --> Loader Class Initialized
INFO - 2019-12-19 07:09:19 --> Helper loaded: html_helper
INFO - 2019-12-19 07:09:19 --> Helper loaded: url_helper
INFO - 2019-12-19 07:09:19 --> Helper loaded: form_helper
INFO - 2019-12-19 07:09:19 --> Database Driver Class Initialized
INFO - 2019-12-19 07:09:19 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:09:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:09:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:09:19 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:09:20 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:09:20 --> Controller Class Initialized
DEBUG - 2019-12-19 07:09:20 --> Create_User constructer got called..
INFO - 2019-12-19 07:09:20 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:09:20 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:09:20 --> show_groups from DB
INFO - 2019-12-19 07:09:20 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:09:20 --> Final output sent to browser
DEBUG - 2019-12-19 07:09:20 --> Total execution time: 0.5109
INFO - 2019-12-19 07:10:49 --> Config Class Initialized
INFO - 2019-12-19 07:10:49 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:10:49 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:10:49 --> Utf8 Class Initialized
INFO - 2019-12-19 07:10:49 --> URI Class Initialized
INFO - 2019-12-19 07:10:49 --> Router Class Initialized
INFO - 2019-12-19 07:10:49 --> Output Class Initialized
INFO - 2019-12-19 07:10:49 --> Security Class Initialized
DEBUG - 2019-12-19 07:10:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:10:49 --> Input Class Initialized
INFO - 2019-12-19 07:10:49 --> Language Class Initialized
INFO - 2019-12-19 07:10:49 --> Loader Class Initialized
INFO - 2019-12-19 07:10:49 --> Helper loaded: html_helper
INFO - 2019-12-19 07:10:49 --> Helper loaded: url_helper
INFO - 2019-12-19 07:10:49 --> Helper loaded: form_helper
INFO - 2019-12-19 07:10:50 --> Database Driver Class Initialized
INFO - 2019-12-19 07:10:50 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:10:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:10:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:10:50 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:10:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:10:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:10:50 --> Controller Class Initialized
DEBUG - 2019-12-19 07:10:50 --> Create_User constructer got called..
INFO - 2019-12-19 07:10:50 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:10:50 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:10:50 --> show_groups from DB
INFO - 2019-12-19 07:10:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:10:50 --> Final output sent to browser
DEBUG - 2019-12-19 07:10:50 --> Total execution time: 0.5879
INFO - 2019-12-19 07:11:46 --> Config Class Initialized
INFO - 2019-12-19 07:11:46 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:11:46 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:11:46 --> Utf8 Class Initialized
INFO - 2019-12-19 07:11:47 --> URI Class Initialized
INFO - 2019-12-19 07:11:47 --> Router Class Initialized
INFO - 2019-12-19 07:11:47 --> Output Class Initialized
INFO - 2019-12-19 07:11:47 --> Security Class Initialized
DEBUG - 2019-12-19 07:11:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:11:47 --> Input Class Initialized
INFO - 2019-12-19 07:11:47 --> Language Class Initialized
INFO - 2019-12-19 07:11:47 --> Loader Class Initialized
INFO - 2019-12-19 07:11:47 --> Helper loaded: html_helper
INFO - 2019-12-19 07:11:47 --> Helper loaded: url_helper
INFO - 2019-12-19 07:11:47 --> Helper loaded: form_helper
INFO - 2019-12-19 07:11:47 --> Database Driver Class Initialized
INFO - 2019-12-19 07:11:47 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:11:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:11:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:11:47 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:11:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:11:47 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:11:47 --> Controller Class Initialized
DEBUG - 2019-12-19 07:11:47 --> Create_User constructer got called..
INFO - 2019-12-19 07:11:47 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:11:47 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:11:47 --> show_groups from DB
INFO - 2019-12-19 07:11:47 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:11:47 --> Final output sent to browser
DEBUG - 2019-12-19 07:11:47 --> Total execution time: 0.5769
INFO - 2019-12-19 07:12:34 --> Config Class Initialized
INFO - 2019-12-19 07:12:34 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:12:34 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:12:34 --> Utf8 Class Initialized
INFO - 2019-12-19 07:12:34 --> URI Class Initialized
INFO - 2019-12-19 07:12:34 --> Router Class Initialized
INFO - 2019-12-19 07:12:34 --> Output Class Initialized
INFO - 2019-12-19 07:12:34 --> Security Class Initialized
DEBUG - 2019-12-19 07:12:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:12:34 --> Input Class Initialized
INFO - 2019-12-19 07:12:34 --> Language Class Initialized
INFO - 2019-12-19 07:12:34 --> Loader Class Initialized
INFO - 2019-12-19 07:12:34 --> Helper loaded: html_helper
INFO - 2019-12-19 07:12:34 --> Helper loaded: url_helper
INFO - 2019-12-19 07:12:34 --> Helper loaded: form_helper
INFO - 2019-12-19 07:12:34 --> Database Driver Class Initialized
INFO - 2019-12-19 07:12:34 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:12:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:12:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:12:34 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:12:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:12:34 --> Controller Class Initialized
DEBUG - 2019-12-19 07:12:34 --> Create_User constructer got called..
INFO - 2019-12-19 07:12:34 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:12:34 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:12:34 --> show_groups from DB
INFO - 2019-12-19 07:12:34 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:12:34 --> Final output sent to browser
DEBUG - 2019-12-19 07:12:34 --> Total execution time: 0.3340
INFO - 2019-12-19 07:32:17 --> Config Class Initialized
INFO - 2019-12-19 07:32:17 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:32:17 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:32:17 --> Utf8 Class Initialized
INFO - 2019-12-19 07:32:17 --> URI Class Initialized
INFO - 2019-12-19 07:32:17 --> Router Class Initialized
INFO - 2019-12-19 07:32:17 --> Output Class Initialized
INFO - 2019-12-19 07:32:17 --> Security Class Initialized
DEBUG - 2019-12-19 07:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:32:17 --> Input Class Initialized
INFO - 2019-12-19 07:32:17 --> Language Class Initialized
INFO - 2019-12-19 07:32:17 --> Loader Class Initialized
INFO - 2019-12-19 07:32:17 --> Helper loaded: html_helper
INFO - 2019-12-19 07:32:17 --> Helper loaded: url_helper
INFO - 2019-12-19 07:32:17 --> Helper loaded: form_helper
INFO - 2019-12-19 07:32:17 --> Database Driver Class Initialized
INFO - 2019-12-19 07:32:17 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:32:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:32:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:32:17 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:32:17 --> Controller Class Initialized
DEBUG - 2019-12-19 07:32:17 --> Create_User constructer got called..
INFO - 2019-12-19 07:32:17 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:32:17 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:32:17 --> show_groups from DB
INFO - 2019-12-19 07:32:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:32:17 --> Final output sent to browser
DEBUG - 2019-12-19 07:32:17 --> Total execution time: 0.3060
INFO - 2019-12-19 07:33:40 --> Config Class Initialized
INFO - 2019-12-19 07:33:40 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:33:40 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:33:40 --> Utf8 Class Initialized
INFO - 2019-12-19 07:33:40 --> URI Class Initialized
INFO - 2019-12-19 07:33:40 --> Router Class Initialized
INFO - 2019-12-19 07:33:40 --> Output Class Initialized
INFO - 2019-12-19 07:33:40 --> Security Class Initialized
DEBUG - 2019-12-19 07:33:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:33:40 --> Input Class Initialized
INFO - 2019-12-19 07:33:40 --> Language Class Initialized
INFO - 2019-12-19 07:33:40 --> Loader Class Initialized
INFO - 2019-12-19 07:33:40 --> Helper loaded: html_helper
INFO - 2019-12-19 07:33:40 --> Helper loaded: url_helper
INFO - 2019-12-19 07:33:40 --> Helper loaded: form_helper
INFO - 2019-12-19 07:33:40 --> Database Driver Class Initialized
INFO - 2019-12-19 07:33:40 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:33:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:33:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:33:40 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:33:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:33:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:33:40 --> Controller Class Initialized
INFO - 2019-12-19 07:33:40 --> Final output sent to browser
DEBUG - 2019-12-19 07:33:40 --> Total execution time: 0.2940
INFO - 2019-12-19 07:34:16 --> Config Class Initialized
INFO - 2019-12-19 07:34:16 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:34:16 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:34:16 --> Utf8 Class Initialized
INFO - 2019-12-19 07:34:16 --> URI Class Initialized
INFO - 2019-12-19 07:34:16 --> Router Class Initialized
INFO - 2019-12-19 07:34:16 --> Output Class Initialized
INFO - 2019-12-19 07:34:16 --> Security Class Initialized
DEBUG - 2019-12-19 07:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:34:16 --> Input Class Initialized
INFO - 2019-12-19 07:34:16 --> Language Class Initialized
INFO - 2019-12-19 07:34:16 --> Loader Class Initialized
INFO - 2019-12-19 07:34:16 --> Helper loaded: html_helper
INFO - 2019-12-19 07:34:16 --> Helper loaded: url_helper
INFO - 2019-12-19 07:34:16 --> Helper loaded: form_helper
INFO - 2019-12-19 07:34:16 --> Database Driver Class Initialized
INFO - 2019-12-19 07:34:16 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:34:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:34:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:34:16 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:34:16 --> Controller Class Initialized
INFO - 2019-12-19 07:34:16 --> Final output sent to browser
DEBUG - 2019-12-19 07:34:16 --> Total execution time: 0.3440
INFO - 2019-12-19 07:34:28 --> Config Class Initialized
INFO - 2019-12-19 07:34:28 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:34:28 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:34:28 --> Utf8 Class Initialized
INFO - 2019-12-19 07:34:28 --> URI Class Initialized
INFO - 2019-12-19 07:34:28 --> Router Class Initialized
INFO - 2019-12-19 07:34:28 --> Output Class Initialized
INFO - 2019-12-19 07:34:28 --> Security Class Initialized
DEBUG - 2019-12-19 07:34:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:34:28 --> Input Class Initialized
INFO - 2019-12-19 07:34:28 --> Language Class Initialized
INFO - 2019-12-19 07:34:28 --> Loader Class Initialized
INFO - 2019-12-19 07:34:28 --> Helper loaded: html_helper
INFO - 2019-12-19 07:34:28 --> Helper loaded: url_helper
INFO - 2019-12-19 07:34:28 --> Helper loaded: form_helper
INFO - 2019-12-19 07:34:28 --> Database Driver Class Initialized
INFO - 2019-12-19 07:34:28 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:34:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:34:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:34:28 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:34:28 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:34:28 --> Controller Class Initialized
DEBUG - 2019-12-19 07:34:28 --> Create_User constructer got called..
INFO - 2019-12-19 07:34:28 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:34:28 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:34:28 --> show_groups from DB
INFO - 2019-12-19 07:34:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:34:28 --> Final output sent to browser
DEBUG - 2019-12-19 07:34:28 --> Total execution time: 0.3050
INFO - 2019-12-19 07:36:16 --> Config Class Initialized
INFO - 2019-12-19 07:36:16 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:36:16 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:36:16 --> Utf8 Class Initialized
INFO - 2019-12-19 07:36:16 --> URI Class Initialized
INFO - 2019-12-19 07:36:16 --> Router Class Initialized
INFO - 2019-12-19 07:36:16 --> Output Class Initialized
INFO - 2019-12-19 07:36:16 --> Security Class Initialized
DEBUG - 2019-12-19 07:36:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:36:16 --> Input Class Initialized
INFO - 2019-12-19 07:36:16 --> Language Class Initialized
INFO - 2019-12-19 07:36:16 --> Loader Class Initialized
INFO - 2019-12-19 07:36:16 --> Helper loaded: html_helper
INFO - 2019-12-19 07:36:16 --> Helper loaded: url_helper
INFO - 2019-12-19 07:36:16 --> Helper loaded: form_helper
INFO - 2019-12-19 07:36:16 --> Database Driver Class Initialized
INFO - 2019-12-19 07:36:16 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:36:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:36:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:36:16 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:36:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:36:16 --> Controller Class Initialized
DEBUG - 2019-12-19 07:36:16 --> Create_User constructer got called..
INFO - 2019-12-19 07:36:16 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:36:16 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:36:16 --> show_groups from DB
INFO - 2019-12-19 07:36:16 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:36:16 --> Final output sent to browser
DEBUG - 2019-12-19 07:36:16 --> Total execution time: 0.3370
INFO - 2019-12-19 07:37:33 --> Config Class Initialized
INFO - 2019-12-19 07:37:33 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:37:33 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:37:33 --> Utf8 Class Initialized
INFO - 2019-12-19 07:37:33 --> URI Class Initialized
INFO - 2019-12-19 07:37:33 --> Router Class Initialized
INFO - 2019-12-19 07:37:33 --> Output Class Initialized
INFO - 2019-12-19 07:37:33 --> Security Class Initialized
DEBUG - 2019-12-19 07:37:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:37:33 --> Input Class Initialized
INFO - 2019-12-19 07:37:33 --> Language Class Initialized
INFO - 2019-12-19 07:37:33 --> Loader Class Initialized
INFO - 2019-12-19 07:37:33 --> Helper loaded: html_helper
INFO - 2019-12-19 07:37:33 --> Helper loaded: url_helper
INFO - 2019-12-19 07:37:33 --> Helper loaded: form_helper
INFO - 2019-12-19 07:37:33 --> Database Driver Class Initialized
INFO - 2019-12-19 07:37:33 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:37:33 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:37:33 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:37:33 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:37:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:37:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:37:34 --> Controller Class Initialized
DEBUG - 2019-12-19 07:37:34 --> Create_User constructer got called..
INFO - 2019-12-19 07:37:34 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:37:34 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:37:34 --> show_groups from DB
INFO - 2019-12-19 07:37:34 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:37:34 --> Final output sent to browser
DEBUG - 2019-12-19 07:37:34 --> Total execution time: 0.2810
INFO - 2019-12-19 07:37:40 --> Config Class Initialized
INFO - 2019-12-19 07:37:40 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:37:40 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:37:40 --> Utf8 Class Initialized
INFO - 2019-12-19 07:37:41 --> Config Class Initialized
INFO - 2019-12-19 07:37:41 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:37:41 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:37:41 --> Utf8 Class Initialized
INFO - 2019-12-19 07:37:50 --> Config Class Initialized
INFO - 2019-12-19 07:37:50 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:37:50 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:37:50 --> Utf8 Class Initialized
INFO - 2019-12-19 07:37:50 --> URI Class Initialized
INFO - 2019-12-19 07:37:50 --> Router Class Initialized
INFO - 2019-12-19 07:37:50 --> Output Class Initialized
INFO - 2019-12-19 07:37:50 --> Security Class Initialized
DEBUG - 2019-12-19 07:37:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:37:50 --> Input Class Initialized
INFO - 2019-12-19 07:37:51 --> Language Class Initialized
INFO - 2019-12-19 07:37:51 --> Loader Class Initialized
INFO - 2019-12-19 07:37:51 --> Helper loaded: html_helper
INFO - 2019-12-19 07:37:51 --> Helper loaded: url_helper
INFO - 2019-12-19 07:37:51 --> Helper loaded: form_helper
INFO - 2019-12-19 07:37:51 --> Database Driver Class Initialized
INFO - 2019-12-19 07:37:51 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:37:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:37:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:37:51 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:37:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:37:51 --> Controller Class Initialized
DEBUG - 2019-12-19 07:37:51 --> Create_User constructer got called..
INFO - 2019-12-19 07:37:51 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:37:51 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:37:51 --> show_groups from DB
INFO - 2019-12-19 07:37:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:37:51 --> Final output sent to browser
DEBUG - 2019-12-19 07:37:51 --> Total execution time: 0.3500
INFO - 2019-12-19 07:46:19 --> Config Class Initialized
INFO - 2019-12-19 07:46:19 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:46:19 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:46:19 --> Utf8 Class Initialized
INFO - 2019-12-19 07:46:19 --> URI Class Initialized
INFO - 2019-12-19 07:46:19 --> Router Class Initialized
INFO - 2019-12-19 07:46:19 --> Output Class Initialized
INFO - 2019-12-19 07:46:19 --> Security Class Initialized
DEBUG - 2019-12-19 07:46:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:46:19 --> Input Class Initialized
INFO - 2019-12-19 07:46:19 --> Language Class Initialized
INFO - 2019-12-19 07:46:19 --> Loader Class Initialized
INFO - 2019-12-19 07:46:19 --> Helper loaded: html_helper
INFO - 2019-12-19 07:46:19 --> Helper loaded: url_helper
INFO - 2019-12-19 07:46:19 --> Helper loaded: form_helper
INFO - 2019-12-19 07:46:19 --> Database Driver Class Initialized
INFO - 2019-12-19 07:46:19 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:46:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:46:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:46:19 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:46:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:46:19 --> Controller Class Initialized
DEBUG - 2019-12-19 07:46:19 --> Create_User constructer got called..
INFO - 2019-12-19 07:46:19 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:46:19 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:46:19 --> show_groups from DB
INFO - 2019-12-19 07:46:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:46:20 --> Final output sent to browser
DEBUG - 2019-12-19 07:46:20 --> Total execution time: 0.3525
INFO - 2019-12-19 07:46:39 --> Config Class Initialized
INFO - 2019-12-19 07:46:39 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:46:39 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:46:39 --> Utf8 Class Initialized
INFO - 2019-12-19 07:46:39 --> URI Class Initialized
INFO - 2019-12-19 07:46:39 --> Router Class Initialized
INFO - 2019-12-19 07:46:39 --> Output Class Initialized
INFO - 2019-12-19 07:46:39 --> Security Class Initialized
DEBUG - 2019-12-19 07:46:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:46:39 --> Input Class Initialized
INFO - 2019-12-19 07:46:39 --> Language Class Initialized
ERROR - 2019-12-19 07:46:39 --> 404 Page Not Found: user/Create_User/user
INFO - 2019-12-19 07:47:37 --> Config Class Initialized
INFO - 2019-12-19 07:47:37 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:47:37 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:47:37 --> Utf8 Class Initialized
INFO - 2019-12-19 07:47:37 --> URI Class Initialized
INFO - 2019-12-19 07:47:37 --> Router Class Initialized
INFO - 2019-12-19 07:47:37 --> Output Class Initialized
INFO - 2019-12-19 07:47:37 --> Security Class Initialized
DEBUG - 2019-12-19 07:47:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:47:37 --> Input Class Initialized
INFO - 2019-12-19 07:47:37 --> Language Class Initialized
INFO - 2019-12-19 07:47:37 --> Loader Class Initialized
INFO - 2019-12-19 07:47:37 --> Helper loaded: html_helper
INFO - 2019-12-19 07:47:37 --> Helper loaded: url_helper
INFO - 2019-12-19 07:47:37 --> Helper loaded: form_helper
INFO - 2019-12-19 07:47:37 --> Database Driver Class Initialized
INFO - 2019-12-19 07:47:37 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:47:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:47:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:47:37 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:47:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:47:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:47:37 --> Controller Class Initialized
DEBUG - 2019-12-19 07:47:37 --> Create_User constructer got called..
INFO - 2019-12-19 07:47:37 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:47:37 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:47:37 --> show_groups from DB
INFO - 2019-12-19 07:47:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:47:37 --> Final output sent to browser
DEBUG - 2019-12-19 07:47:37 --> Total execution time: 0.4150
INFO - 2019-12-19 07:47:58 --> Config Class Initialized
INFO - 2019-12-19 07:47:58 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:47:58 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:47:58 --> Utf8 Class Initialized
INFO - 2019-12-19 07:47:59 --> URI Class Initialized
INFO - 2019-12-19 07:47:59 --> Router Class Initialized
INFO - 2019-12-19 07:47:59 --> Output Class Initialized
INFO - 2019-12-19 07:47:59 --> Security Class Initialized
DEBUG - 2019-12-19 07:47:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:47:59 --> Input Class Initialized
INFO - 2019-12-19 07:47:59 --> Language Class Initialized
ERROR - 2019-12-19 07:47:59 --> 404 Page Not Found: user/Create_User/user
INFO - 2019-12-19 07:49:03 --> Config Class Initialized
INFO - 2019-12-19 07:49:03 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:49:03 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:49:03 --> Utf8 Class Initialized
INFO - 2019-12-19 07:49:03 --> URI Class Initialized
INFO - 2019-12-19 07:49:03 --> Router Class Initialized
INFO - 2019-12-19 07:49:03 --> Output Class Initialized
INFO - 2019-12-19 07:49:03 --> Security Class Initialized
DEBUG - 2019-12-19 07:49:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:49:03 --> Input Class Initialized
INFO - 2019-12-19 07:49:03 --> Language Class Initialized
INFO - 2019-12-19 07:49:03 --> Loader Class Initialized
INFO - 2019-12-19 07:49:03 --> Helper loaded: html_helper
INFO - 2019-12-19 07:49:03 --> Helper loaded: url_helper
INFO - 2019-12-19 07:49:03 --> Helper loaded: form_helper
INFO - 2019-12-19 07:49:03 --> Database Driver Class Initialized
INFO - 2019-12-19 07:49:03 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:49:03 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:49:03 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:49:03 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:49:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:49:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:49:04 --> Controller Class Initialized
INFO - 2019-12-19 07:49:04 --> Helper loaded: cookie_helper
INFO - 2019-12-19 07:49:04 --> logout() called
DEBUG - 2019-12-19 07:49:04 --> loading model Active_Session
INFO - 2019-12-19 07:49:04 --> Model "Active_Session" initialized
DEBUG - 2019-12-19 07:49:04 --> calling remove_active_session()
DEBUG - 2019-12-19 07:49:04 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-19 07:49:04 --> loading view welcome controller ... 
INFO - 2019-12-19 07:49:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-19 07:49:04 --> Final output sent to browser
DEBUG - 2019-12-19 07:49:04 --> Total execution time: 0.3820
INFO - 2019-12-19 07:49:42 --> Config Class Initialized
INFO - 2019-12-19 07:49:42 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:49:42 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:49:42 --> Utf8 Class Initialized
INFO - 2019-12-19 07:49:42 --> URI Class Initialized
INFO - 2019-12-19 07:49:42 --> Router Class Initialized
INFO - 2019-12-19 07:49:42 --> Output Class Initialized
INFO - 2019-12-19 07:49:42 --> Security Class Initialized
DEBUG - 2019-12-19 07:49:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:49:42 --> Input Class Initialized
INFO - 2019-12-19 07:49:42 --> Language Class Initialized
INFO - 2019-12-19 07:49:42 --> Loader Class Initialized
INFO - 2019-12-19 07:49:42 --> Helper loaded: html_helper
INFO - 2019-12-19 07:49:42 --> Helper loaded: url_helper
INFO - 2019-12-19 07:49:42 --> Helper loaded: form_helper
INFO - 2019-12-19 07:49:43 --> Database Driver Class Initialized
INFO - 2019-12-19 07:49:43 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:49:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:49:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:49:43 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:49:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:49:43 --> Controller Class Initialized
INFO - 2019-12-19 07:49:43 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-19 07:49:43 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 07:49:43 --> getAuth method got called...
DEBUG - 2019-12-19 07:49:43 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DECXXXXXXX@2019
INFO - 2019-12-19 07:49:43 --> Unreachable block here....
DEBUG - 2019-12-19 07:49:43 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-19 07:49:43 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-19 07:49:43 -->  ldap connectivity object returnResource id #82
ERROR - 2019-12-19 07:49:44 --> Severity: Warning --> ldap_bind(): Unable to bind to server: Invalid credentials C:\xampp\htdocs\oneoss\application\controllers\Auth\AdLogin.php 173
INFO - 2019-12-19 07:49:44 -->  ldap login error
INFO - 2019-12-19 07:49:44 -->  error 80090308: LdapErr: DSID-0C09042F, comment: AcceptSecurityContext error, data 52e, v2580
INFO - 2019-12-19 07:49:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-19 07:49:44 --> Final output sent to browser
DEBUG - 2019-12-19 07:49:44 --> Total execution time: 1.3701
INFO - 2019-12-19 07:50:02 --> Config Class Initialized
INFO - 2019-12-19 07:50:02 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:50:02 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:50:02 --> Utf8 Class Initialized
INFO - 2019-12-19 07:50:02 --> URI Class Initialized
INFO - 2019-12-19 07:50:02 --> Router Class Initialized
INFO - 2019-12-19 07:50:02 --> Output Class Initialized
INFO - 2019-12-19 07:50:02 --> Security Class Initialized
DEBUG - 2019-12-19 07:50:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:50:02 --> Input Class Initialized
INFO - 2019-12-19 07:50:02 --> Language Class Initialized
INFO - 2019-12-19 07:50:02 --> Loader Class Initialized
INFO - 2019-12-19 07:50:02 --> Helper loaded: html_helper
INFO - 2019-12-19 07:50:02 --> Helper loaded: url_helper
INFO - 2019-12-19 07:50:02 --> Helper loaded: form_helper
INFO - 2019-12-19 07:50:02 --> Database Driver Class Initialized
INFO - 2019-12-19 07:50:02 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:50:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:50:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:50:02 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:50:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:50:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:50:02 --> Controller Class Initialized
INFO - 2019-12-19 07:50:02 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-19 07:50:02 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 07:50:02 --> getAuth method got called...
DEBUG - 2019-12-19 07:50:02 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-19 07:50:02 --> Unreachable block here....
DEBUG - 2019-12-19 07:50:02 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-19 07:50:02 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-19 07:50:02 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-19 07:50:03 -->  ldap login success
INFO - 2019-12-19 07:50:03 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-19 07:50:03 --> Role Retrive from DB
INFO - 2019-12-19 07:50:03 --> get_group_role_mapping model43
DEBUG - 2019-12-19 07:50:03 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-19 07:50:03 --> loading model Active_Session
INFO - 2019-12-19 07:50:03 --> Model "Active_Session" initialized
DEBUG - 2019-12-19 07:50:03 --> calling insert_active_session()
DEBUG - 2019-12-19 07:50:03 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-19 07:50:03 --> insert success
DEBUG - 2019-12-19 07:50:03 --> loading Configarable_Login model...
INFO - 2019-12-19 07:50:03 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-19 07:50:03 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-19 07:50:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-19 07:50:03 --> Array
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

DEBUG - 2019-12-19 07:50:03 --> loading configurable menu with result=Array
DEBUG - 2019-12-19 07:50:03 --> loading view public\Dashboard
INFO - 2019-12-19 07:50:03 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-19 07:50:03 --> Final output sent to browser
DEBUG - 2019-12-19 07:50:03 --> Total execution time: 1.5076
INFO - 2019-12-19 07:50:13 --> Config Class Initialized
INFO - 2019-12-19 07:50:13 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:50:13 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:50:13 --> Utf8 Class Initialized
INFO - 2019-12-19 07:50:13 --> URI Class Initialized
INFO - 2019-12-19 07:50:13 --> Router Class Initialized
INFO - 2019-12-19 07:50:13 --> Output Class Initialized
INFO - 2019-12-19 07:50:13 --> Security Class Initialized
DEBUG - 2019-12-19 07:50:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:50:13 --> Input Class Initialized
INFO - 2019-12-19 07:50:13 --> Language Class Initialized
INFO - 2019-12-19 07:50:13 --> Loader Class Initialized
INFO - 2019-12-19 07:50:13 --> Helper loaded: html_helper
INFO - 2019-12-19 07:50:13 --> Helper loaded: url_helper
INFO - 2019-12-19 07:50:13 --> Helper loaded: form_helper
INFO - 2019-12-19 07:50:13 --> Database Driver Class Initialized
INFO - 2019-12-19 07:50:13 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:50:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:50:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:50:13 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:50:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:50:13 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:50:13 --> Controller Class Initialized
DEBUG - 2019-12-19 07:50:13 --> Create_User constructer got called..
DEBUG - 2019-12-19 07:50:13 --> loading configurable menu with result=
INFO - 2019-12-19 07:50:13 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:50:13 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 07:50:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 07:50:13 --> Final output sent to browser
DEBUG - 2019-12-19 07:50:13 --> Total execution time: 0.3375
INFO - 2019-12-19 07:50:17 --> Config Class Initialized
INFO - 2019-12-19 07:50:17 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:50:17 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:50:17 --> Utf8 Class Initialized
INFO - 2019-12-19 07:50:17 --> URI Class Initialized
INFO - 2019-12-19 07:50:17 --> Router Class Initialized
INFO - 2019-12-19 07:50:17 --> Output Class Initialized
INFO - 2019-12-19 07:50:17 --> Security Class Initialized
DEBUG - 2019-12-19 07:50:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:50:17 --> Input Class Initialized
INFO - 2019-12-19 07:50:17 --> Language Class Initialized
INFO - 2019-12-19 07:50:17 --> Loader Class Initialized
INFO - 2019-12-19 07:50:17 --> Helper loaded: html_helper
INFO - 2019-12-19 07:50:17 --> Helper loaded: url_helper
INFO - 2019-12-19 07:50:17 --> Helper loaded: form_helper
INFO - 2019-12-19 07:50:17 --> Database Driver Class Initialized
INFO - 2019-12-19 07:50:17 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:50:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:50:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:50:17 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:50:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:50:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:50:17 --> Controller Class Initialized
INFO - 2019-12-19 07:50:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-19 07:50:17 --> Final output sent to browser
DEBUG - 2019-12-19 07:50:17 --> Total execution time: 0.3475
INFO - 2019-12-19 07:50:19 --> Config Class Initialized
INFO - 2019-12-19 07:50:19 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:50:19 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:50:19 --> Utf8 Class Initialized
INFO - 2019-12-19 07:50:19 --> URI Class Initialized
INFO - 2019-12-19 07:50:19 --> Router Class Initialized
INFO - 2019-12-19 07:50:19 --> Output Class Initialized
INFO - 2019-12-19 07:50:19 --> Security Class Initialized
DEBUG - 2019-12-19 07:50:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:50:19 --> Input Class Initialized
INFO - 2019-12-19 07:50:19 --> Language Class Initialized
INFO - 2019-12-19 07:50:19 --> Loader Class Initialized
INFO - 2019-12-19 07:50:19 --> Helper loaded: html_helper
INFO - 2019-12-19 07:50:19 --> Helper loaded: url_helper
INFO - 2019-12-19 07:50:19 --> Helper loaded: form_helper
INFO - 2019-12-19 07:50:19 --> Database Driver Class Initialized
INFO - 2019-12-19 07:50:19 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:50:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:50:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:50:19 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:50:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:50:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:50:19 --> Controller Class Initialized
INFO - 2019-12-19 07:50:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-19 07:50:19 --> Final output sent to browser
DEBUG - 2019-12-19 07:50:19 --> Total execution time: 0.2225
INFO - 2019-12-19 07:50:22 --> Config Class Initialized
INFO - 2019-12-19 07:50:22 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:50:22 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:50:22 --> Utf8 Class Initialized
INFO - 2019-12-19 07:50:22 --> URI Class Initialized
INFO - 2019-12-19 07:50:22 --> Router Class Initialized
INFO - 2019-12-19 07:50:22 --> Output Class Initialized
INFO - 2019-12-19 07:50:22 --> Security Class Initialized
DEBUG - 2019-12-19 07:50:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:50:22 --> Input Class Initialized
INFO - 2019-12-19 07:50:22 --> Language Class Initialized
INFO - 2019-12-19 07:50:22 --> Loader Class Initialized
INFO - 2019-12-19 07:50:22 --> Helper loaded: html_helper
INFO - 2019-12-19 07:50:22 --> Helper loaded: url_helper
INFO - 2019-12-19 07:50:22 --> Helper loaded: form_helper
INFO - 2019-12-19 07:50:22 --> Database Driver Class Initialized
INFO - 2019-12-19 07:50:22 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:50:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:50:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:50:22 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:50:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:50:22 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:50:22 --> Controller Class Initialized
INFO - 2019-12-19 07:50:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-19 07:50:22 --> Final output sent to browser
DEBUG - 2019-12-19 07:50:22 --> Total execution time: 0.2950
INFO - 2019-12-19 07:50:25 --> Config Class Initialized
INFO - 2019-12-19 07:50:25 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:50:25 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:50:25 --> Utf8 Class Initialized
INFO - 2019-12-19 07:50:25 --> URI Class Initialized
INFO - 2019-12-19 07:50:25 --> Router Class Initialized
INFO - 2019-12-19 07:50:25 --> Output Class Initialized
INFO - 2019-12-19 07:50:25 --> Security Class Initialized
DEBUG - 2019-12-19 07:50:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:50:25 --> Input Class Initialized
INFO - 2019-12-19 07:50:25 --> Language Class Initialized
INFO - 2019-12-19 07:50:25 --> Loader Class Initialized
INFO - 2019-12-19 07:50:25 --> Helper loaded: html_helper
INFO - 2019-12-19 07:50:25 --> Helper loaded: url_helper
INFO - 2019-12-19 07:50:25 --> Helper loaded: form_helper
INFO - 2019-12-19 07:50:25 --> Database Driver Class Initialized
INFO - 2019-12-19 07:50:25 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:50:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:50:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:50:25 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:50:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:50:25 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:50:25 --> Controller Class Initialized
INFO - 2019-12-19 07:50:25 --> Model "Authors_model" initialized
INFO - 2019-12-19 07:50:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-19 07:50:25 --> Pagination Class Initialized
INFO - 2019-12-19 07:50:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2019-12-19 07:50:25 --> Final output sent to browser
DEBUG - 2019-12-19 07:50:25 --> Total execution time: 0.3220
INFO - 2019-12-19 07:50:29 --> Config Class Initialized
INFO - 2019-12-19 07:50:29 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:50:29 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:50:29 --> Utf8 Class Initialized
INFO - 2019-12-19 07:50:29 --> URI Class Initialized
INFO - 2019-12-19 07:50:29 --> Router Class Initialized
INFO - 2019-12-19 07:50:29 --> Output Class Initialized
INFO - 2019-12-19 07:50:29 --> Security Class Initialized
DEBUG - 2019-12-19 07:50:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:50:29 --> Input Class Initialized
INFO - 2019-12-19 07:50:29 --> Language Class Initialized
INFO - 2019-12-19 07:50:29 --> Loader Class Initialized
INFO - 2019-12-19 07:50:30 --> Helper loaded: html_helper
INFO - 2019-12-19 07:50:30 --> Helper loaded: url_helper
INFO - 2019-12-19 07:50:30 --> Helper loaded: form_helper
INFO - 2019-12-19 07:50:30 --> Database Driver Class Initialized
INFO - 2019-12-19 07:50:30 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:50:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:50:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:50:30 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:50:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:50:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:50:30 --> Controller Class Initialized
INFO - 2019-12-19 07:50:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-19 07:50:30 --> Final output sent to browser
DEBUG - 2019-12-19 07:50:30 --> Total execution time: 0.4220
INFO - 2019-12-19 07:50:32 --> Config Class Initialized
INFO - 2019-12-19 07:50:32 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:50:32 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:50:32 --> Utf8 Class Initialized
INFO - 2019-12-19 07:50:32 --> URI Class Initialized
INFO - 2019-12-19 07:50:32 --> Router Class Initialized
INFO - 2019-12-19 07:50:32 --> Output Class Initialized
INFO - 2019-12-19 07:50:32 --> Security Class Initialized
DEBUG - 2019-12-19 07:50:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:50:32 --> Input Class Initialized
INFO - 2019-12-19 07:50:32 --> Language Class Initialized
INFO - 2019-12-19 07:50:32 --> Loader Class Initialized
INFO - 2019-12-19 07:50:32 --> Helper loaded: html_helper
INFO - 2019-12-19 07:50:32 --> Helper loaded: url_helper
INFO - 2019-12-19 07:50:32 --> Helper loaded: form_helper
INFO - 2019-12-19 07:50:32 --> Database Driver Class Initialized
INFO - 2019-12-19 07:50:32 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:50:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:50:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:50:32 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:50:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:50:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:50:32 --> Controller Class Initialized
DEBUG - 2019-12-19 07:50:32 --> Create_User constructer got called..
DEBUG - 2019-12-19 07:50:32 --> loading configurable menu with result=
INFO - 2019-12-19 07:50:32 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:50:32 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 07:50:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 07:50:32 --> Final output sent to browser
DEBUG - 2019-12-19 07:50:32 --> Total execution time: 0.1625
INFO - 2019-12-19 07:50:35 --> Config Class Initialized
INFO - 2019-12-19 07:50:35 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:50:35 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:50:35 --> Utf8 Class Initialized
INFO - 2019-12-19 07:50:35 --> URI Class Initialized
INFO - 2019-12-19 07:50:35 --> Router Class Initialized
INFO - 2019-12-19 07:50:35 --> Output Class Initialized
INFO - 2019-12-19 07:50:35 --> Security Class Initialized
DEBUG - 2019-12-19 07:50:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:50:35 --> Input Class Initialized
INFO - 2019-12-19 07:50:35 --> Language Class Initialized
INFO - 2019-12-19 07:50:35 --> Loader Class Initialized
INFO - 2019-12-19 07:50:35 --> Helper loaded: html_helper
INFO - 2019-12-19 07:50:35 --> Helper loaded: url_helper
INFO - 2019-12-19 07:50:35 --> Helper loaded: form_helper
INFO - 2019-12-19 07:50:35 --> Database Driver Class Initialized
INFO - 2019-12-19 07:50:35 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:50:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:50:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:50:35 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:50:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:50:35 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:50:35 --> Controller Class Initialized
DEBUG - 2019-12-19 07:50:35 --> Create_User constructer got called..
INFO - 2019-12-19 07:50:35 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:50:35 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:50:35 --> show_users from DB
INFO - 2019-12-19 07:50:35 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 07:50:35 --> Final output sent to browser
DEBUG - 2019-12-19 07:50:35 --> Total execution time: 0.3470
INFO - 2019-12-19 07:50:40 --> Config Class Initialized
INFO - 2019-12-19 07:50:40 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:50:40 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:50:40 --> Utf8 Class Initialized
INFO - 2019-12-19 07:50:40 --> URI Class Initialized
INFO - 2019-12-19 07:50:40 --> Router Class Initialized
INFO - 2019-12-19 07:50:40 --> Output Class Initialized
INFO - 2019-12-19 07:50:40 --> Security Class Initialized
DEBUG - 2019-12-19 07:50:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:50:40 --> Input Class Initialized
INFO - 2019-12-19 07:50:40 --> Language Class Initialized
INFO - 2019-12-19 07:50:40 --> Loader Class Initialized
INFO - 2019-12-19 07:50:40 --> Helper loaded: html_helper
INFO - 2019-12-19 07:50:40 --> Helper loaded: url_helper
INFO - 2019-12-19 07:50:40 --> Helper loaded: form_helper
INFO - 2019-12-19 07:50:40 --> Database Driver Class Initialized
INFO - 2019-12-19 07:50:40 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:50:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:50:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:50:40 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:50:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:50:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:50:40 --> Controller Class Initialized
DEBUG - 2019-12-19 07:50:40 --> Create_User constructer got called..
INFO - 2019-12-19 07:50:40 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:50:40 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:50:40 --> show_groups from DB
INFO - 2019-12-19 07:50:40 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:50:40 --> Final output sent to browser
DEBUG - 2019-12-19 07:50:40 --> Total execution time: 0.2750
INFO - 2019-12-19 07:51:00 --> Config Class Initialized
INFO - 2019-12-19 07:51:00 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:51:00 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:51:00 --> Utf8 Class Initialized
INFO - 2019-12-19 07:51:00 --> URI Class Initialized
INFO - 2019-12-19 07:51:00 --> Router Class Initialized
INFO - 2019-12-19 07:51:00 --> Output Class Initialized
INFO - 2019-12-19 07:51:00 --> Security Class Initialized
DEBUG - 2019-12-19 07:51:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:51:00 --> Input Class Initialized
INFO - 2019-12-19 07:51:00 --> Language Class Initialized
ERROR - 2019-12-19 07:51:00 --> 404 Page Not Found: user/Create_User/user
INFO - 2019-12-19 07:52:59 --> Config Class Initialized
INFO - 2019-12-19 07:52:59 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:52:59 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:52:59 --> Utf8 Class Initialized
INFO - 2019-12-19 07:52:59 --> URI Class Initialized
INFO - 2019-12-19 07:52:59 --> Router Class Initialized
INFO - 2019-12-19 07:52:59 --> Output Class Initialized
INFO - 2019-12-19 07:52:59 --> Security Class Initialized
DEBUG - 2019-12-19 07:52:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:52:59 --> Input Class Initialized
INFO - 2019-12-19 07:52:59 --> Language Class Initialized
INFO - 2019-12-19 07:52:59 --> Loader Class Initialized
INFO - 2019-12-19 07:52:59 --> Helper loaded: html_helper
INFO - 2019-12-19 07:52:59 --> Helper loaded: url_helper
INFO - 2019-12-19 07:52:59 --> Helper loaded: form_helper
INFO - 2019-12-19 07:52:59 --> Database Driver Class Initialized
INFO - 2019-12-19 07:52:59 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:52:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:52:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:52:59 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:52:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:52:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:52:59 --> Controller Class Initialized
DEBUG - 2019-12-19 07:52:59 --> Create_User constructer got called..
INFO - 2019-12-19 07:52:59 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:52:59 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:52:59 --> show_groups from DB
INFO - 2019-12-19 07:52:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:52:59 --> Final output sent to browser
DEBUG - 2019-12-19 07:52:59 --> Total execution time: 0.3150
INFO - 2019-12-19 07:53:32 --> Config Class Initialized
INFO - 2019-12-19 07:53:32 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:53:32 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:53:32 --> Utf8 Class Initialized
INFO - 2019-12-19 07:53:32 --> URI Class Initialized
INFO - 2019-12-19 07:53:32 --> Router Class Initialized
INFO - 2019-12-19 07:53:32 --> Output Class Initialized
INFO - 2019-12-19 07:53:32 --> Security Class Initialized
DEBUG - 2019-12-19 07:53:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:53:32 --> Input Class Initialized
INFO - 2019-12-19 07:53:32 --> Language Class Initialized
INFO - 2019-12-19 07:53:32 --> Loader Class Initialized
INFO - 2019-12-19 07:53:33 --> Helper loaded: html_helper
INFO - 2019-12-19 07:53:33 --> Helper loaded: url_helper
INFO - 2019-12-19 07:53:33 --> Helper loaded: form_helper
INFO - 2019-12-19 07:53:33 --> Database Driver Class Initialized
INFO - 2019-12-19 07:53:33 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:53:33 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:53:33 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:53:33 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:53:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:53:33 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:53:33 --> Controller Class Initialized
DEBUG - 2019-12-19 07:53:33 --> Create_User constructer got called..
INFO - 2019-12-19 07:53:33 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 07:53:33 --> delete_group in User Login Model53
INFO - 2019-12-19 07:53:33 --> Final output sent to browser
DEBUG - 2019-12-19 07:53:33 --> Total execution time: 0.5275
INFO - 2019-12-19 07:53:40 --> Config Class Initialized
INFO - 2019-12-19 07:53:40 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:53:40 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:53:40 --> Utf8 Class Initialized
INFO - 2019-12-19 07:53:40 --> URI Class Initialized
INFO - 2019-12-19 07:53:40 --> Router Class Initialized
INFO - 2019-12-19 07:53:40 --> Output Class Initialized
INFO - 2019-12-19 07:53:40 --> Security Class Initialized
DEBUG - 2019-12-19 07:53:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:53:40 --> Input Class Initialized
INFO - 2019-12-19 07:53:40 --> Language Class Initialized
INFO - 2019-12-19 07:53:40 --> Loader Class Initialized
INFO - 2019-12-19 07:53:40 --> Helper loaded: html_helper
INFO - 2019-12-19 07:53:40 --> Helper loaded: url_helper
INFO - 2019-12-19 07:53:40 --> Helper loaded: form_helper
INFO - 2019-12-19 07:53:40 --> Database Driver Class Initialized
INFO - 2019-12-19 07:53:40 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:53:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:53:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:53:40 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:53:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:53:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:53:40 --> Controller Class Initialized
DEBUG - 2019-12-19 07:53:40 --> Create_User constructer got called..
INFO - 2019-12-19 07:53:40 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 07:53:40 --> delete_group in User Login Model53
INFO - 2019-12-19 07:53:40 --> Final output sent to browser
DEBUG - 2019-12-19 07:53:40 --> Total execution time: 0.2350
INFO - 2019-12-19 07:53:48 --> Config Class Initialized
INFO - 2019-12-19 07:53:48 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:53:48 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:53:48 --> Utf8 Class Initialized
INFO - 2019-12-19 07:53:48 --> URI Class Initialized
INFO - 2019-12-19 07:53:48 --> Router Class Initialized
INFO - 2019-12-19 07:53:48 --> Output Class Initialized
INFO - 2019-12-19 07:53:48 --> Security Class Initialized
DEBUG - 2019-12-19 07:53:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:53:48 --> Input Class Initialized
INFO - 2019-12-19 07:53:48 --> Language Class Initialized
INFO - 2019-12-19 07:53:48 --> Loader Class Initialized
INFO - 2019-12-19 07:53:48 --> Helper loaded: html_helper
INFO - 2019-12-19 07:53:48 --> Helper loaded: url_helper
INFO - 2019-12-19 07:53:48 --> Helper loaded: form_helper
INFO - 2019-12-19 07:53:48 --> Database Driver Class Initialized
INFO - 2019-12-19 07:53:48 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:53:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:53:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:53:48 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:53:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:53:48 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:53:48 --> Controller Class Initialized
DEBUG - 2019-12-19 07:53:48 --> Create_User constructer got called..
INFO - 2019-12-19 07:53:48 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:53:48 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:53:48 --> show_groups from DB
INFO - 2019-12-19 07:53:48 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:53:48 --> Final output sent to browser
DEBUG - 2019-12-19 07:53:48 --> Total execution time: 0.3500
INFO - 2019-12-19 07:57:36 --> Config Class Initialized
INFO - 2019-12-19 07:57:36 --> Hooks Class Initialized
DEBUG - 2019-12-19 07:57:36 --> UTF-8 Support Enabled
INFO - 2019-12-19 07:57:36 --> Utf8 Class Initialized
INFO - 2019-12-19 07:57:36 --> URI Class Initialized
INFO - 2019-12-19 07:57:36 --> Router Class Initialized
INFO - 2019-12-19 07:57:36 --> Output Class Initialized
INFO - 2019-12-19 07:57:36 --> Security Class Initialized
DEBUG - 2019-12-19 07:57:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 07:57:36 --> Input Class Initialized
INFO - 2019-12-19 07:57:36 --> Language Class Initialized
INFO - 2019-12-19 07:57:36 --> Loader Class Initialized
INFO - 2019-12-19 07:57:36 --> Helper loaded: html_helper
INFO - 2019-12-19 07:57:36 --> Helper loaded: url_helper
INFO - 2019-12-19 07:57:36 --> Helper loaded: form_helper
INFO - 2019-12-19 07:57:36 --> Database Driver Class Initialized
INFO - 2019-12-19 07:57:37 --> Form Validation Class Initialized
DEBUG - 2019-12-19 07:57:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 07:57:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 07:57:37 --> Encryption Class Initialized
DEBUG - 2019-12-19 07:57:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 07:57:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 07:57:37 --> Controller Class Initialized
DEBUG - 2019-12-19 07:57:37 --> Create_User constructer got called..
INFO - 2019-12-19 07:57:37 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 07:57:37 --> showing all user from db tblusers...
DEBUG - 2019-12-19 07:57:37 --> show_groups from DB
INFO - 2019-12-19 07:57:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 07:57:37 --> Final output sent to browser
DEBUG - 2019-12-19 07:57:37 --> Total execution time: 0.3425
INFO - 2019-12-19 09:58:05 --> Config Class Initialized
INFO - 2019-12-19 09:58:05 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:58:05 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:58:05 --> Utf8 Class Initialized
INFO - 2019-12-19 09:58:05 --> URI Class Initialized
INFO - 2019-12-19 09:58:05 --> Router Class Initialized
INFO - 2019-12-19 09:58:05 --> Output Class Initialized
INFO - 2019-12-19 09:58:05 --> Security Class Initialized
DEBUG - 2019-12-19 09:58:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:58:05 --> Input Class Initialized
INFO - 2019-12-19 09:58:05 --> Language Class Initialized
INFO - 2019-12-19 09:58:05 --> Loader Class Initialized
INFO - 2019-12-19 09:58:05 --> Helper loaded: html_helper
INFO - 2019-12-19 09:58:05 --> Helper loaded: url_helper
INFO - 2019-12-19 09:58:05 --> Helper loaded: form_helper
INFO - 2019-12-19 09:58:05 --> Database Driver Class Initialized
INFO - 2019-12-19 09:58:05 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:58:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:58:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:58:05 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:58:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:58:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:58:05 --> Controller Class Initialized
DEBUG - 2019-12-19 09:58:05 --> Create_User constructer got called..
INFO - 2019-12-19 09:58:07 --> Config Class Initialized
INFO - 2019-12-19 09:58:07 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:58:07 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:58:07 --> Utf8 Class Initialized
INFO - 2019-12-19 09:58:07 --> URI Class Initialized
INFO - 2019-12-19 09:58:07 --> Router Class Initialized
INFO - 2019-12-19 09:58:07 --> Output Class Initialized
INFO - 2019-12-19 09:58:07 --> Security Class Initialized
DEBUG - 2019-12-19 09:58:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:58:07 --> Input Class Initialized
INFO - 2019-12-19 09:58:07 --> Language Class Initialized
INFO - 2019-12-19 09:58:07 --> Loader Class Initialized
INFO - 2019-12-19 09:58:07 --> Helper loaded: html_helper
INFO - 2019-12-19 09:58:07 --> Helper loaded: url_helper
INFO - 2019-12-19 09:58:07 --> Helper loaded: form_helper
INFO - 2019-12-19 09:58:07 --> Database Driver Class Initialized
INFO - 2019-12-19 09:58:07 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:58:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:58:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:58:07 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:58:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:58:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:58:07 --> Controller Class Initialized
DEBUG - 2019-12-19 09:58:07 --> Create_User constructer got called..
INFO - 2019-12-19 09:58:11 --> Config Class Initialized
INFO - 2019-12-19 09:58:11 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:58:11 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:58:11 --> Utf8 Class Initialized
INFO - 2019-12-19 09:58:11 --> URI Class Initialized
DEBUG - 2019-12-19 09:58:11 --> No URI present. Default controller set.
INFO - 2019-12-19 09:58:11 --> Router Class Initialized
INFO - 2019-12-19 09:58:11 --> Output Class Initialized
INFO - 2019-12-19 09:58:11 --> Security Class Initialized
DEBUG - 2019-12-19 09:58:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:58:11 --> Input Class Initialized
INFO - 2019-12-19 09:58:11 --> Language Class Initialized
INFO - 2019-12-19 09:58:11 --> Loader Class Initialized
INFO - 2019-12-19 09:58:11 --> Helper loaded: html_helper
INFO - 2019-12-19 09:58:11 --> Helper loaded: url_helper
INFO - 2019-12-19 09:58:11 --> Helper loaded: form_helper
INFO - 2019-12-19 09:58:11 --> Database Driver Class Initialized
INFO - 2019-12-19 09:58:11 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:58:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:58:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:58:11 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:58:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:58:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:58:11 --> Controller Class Initialized
INFO - 2019-12-19 09:58:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-19 09:58:11 --> Final output sent to browser
DEBUG - 2019-12-19 09:58:11 --> Total execution time: 0.2849
INFO - 2019-12-19 09:58:22 --> Config Class Initialized
INFO - 2019-12-19 09:58:22 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:58:22 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:58:22 --> Utf8 Class Initialized
INFO - 2019-12-19 09:58:22 --> URI Class Initialized
INFO - 2019-12-19 09:58:22 --> Router Class Initialized
INFO - 2019-12-19 09:58:22 --> Output Class Initialized
INFO - 2019-12-19 09:58:22 --> Security Class Initialized
DEBUG - 2019-12-19 09:58:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:58:22 --> Input Class Initialized
INFO - 2019-12-19 09:58:22 --> Language Class Initialized
INFO - 2019-12-19 09:58:22 --> Loader Class Initialized
INFO - 2019-12-19 09:58:22 --> Helper loaded: html_helper
INFO - 2019-12-19 09:58:22 --> Helper loaded: url_helper
INFO - 2019-12-19 09:58:22 --> Helper loaded: form_helper
INFO - 2019-12-19 09:58:22 --> Database Driver Class Initialized
INFO - 2019-12-19 09:58:22 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:58:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:58:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:58:22 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:58:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:58:22 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:58:22 --> Controller Class Initialized
INFO - 2019-12-19 09:58:22 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-19 09:58:22 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 09:58:22 --> getAuth method got called...
DEBUG - 2019-12-19 09:58:22 --> Username :- ncmhatre@globalcloudxchange.com Password :- 09DEC@2019
INFO - 2019-12-19 09:58:22 --> Unreachable block here....
DEBUG - 2019-12-19 09:58:22 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-19 09:58:22 --> validation result=Array
(
    [id] => 1
    [user_group] => 43
    [user_type] => AD
)

DEBUG - 2019-12-19 09:58:22 -->  ldap connectivity object returnResource id #82
INFO - 2019-12-19 09:58:23 -->  ldap login success
INFO - 2019-12-19 09:58:23 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-19 09:58:23 --> Role Retrive from DB
INFO - 2019-12-19 09:58:23 --> get_group_role_mapping model43
DEBUG - 2019-12-19 09:58:23 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-19 09:58:23 --> loading model Active_Session
INFO - 2019-12-19 09:58:23 --> Model "Active_Session" initialized
DEBUG - 2019-12-19 09:58:23 --> calling insert_active_session()
DEBUG - 2019-12-19 09:58:23 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-19 09:58:23 --> insert success
DEBUG - 2019-12-19 09:58:23 --> loading Configarable_Login model...
INFO - 2019-12-19 09:58:23 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-19 09:58:23 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-19 09:58:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-19 09:58:23 --> Array
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

DEBUG - 2019-12-19 09:58:23 --> loading configurable menu with result=Array
DEBUG - 2019-12-19 09:58:23 --> loading view public\Dashboard
INFO - 2019-12-19 09:58:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-19 09:58:23 --> Final output sent to browser
DEBUG - 2019-12-19 09:58:23 --> Total execution time: 1.1397
INFO - 2019-12-19 09:58:28 --> Config Class Initialized
INFO - 2019-12-19 09:58:28 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:58:28 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:58:28 --> Utf8 Class Initialized
INFO - 2019-12-19 09:58:28 --> URI Class Initialized
INFO - 2019-12-19 09:58:28 --> Router Class Initialized
INFO - 2019-12-19 09:58:28 --> Output Class Initialized
INFO - 2019-12-19 09:58:28 --> Security Class Initialized
DEBUG - 2019-12-19 09:58:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:58:28 --> Input Class Initialized
INFO - 2019-12-19 09:58:28 --> Language Class Initialized
INFO - 2019-12-19 09:58:28 --> Loader Class Initialized
INFO - 2019-12-19 09:58:28 --> Helper loaded: html_helper
INFO - 2019-12-19 09:58:28 --> Helper loaded: url_helper
INFO - 2019-12-19 09:58:28 --> Helper loaded: form_helper
INFO - 2019-12-19 09:58:28 --> Database Driver Class Initialized
INFO - 2019-12-19 09:58:28 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:58:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:58:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:58:28 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:58:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:58:28 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:58:28 --> Controller Class Initialized
DEBUG - 2019-12-19 09:58:28 --> Create_User constructer got called..
DEBUG - 2019-12-19 09:58:28 --> loading configurable menu with result=
INFO - 2019-12-19 09:58:28 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 09:58:28 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 09:58:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 09:58:28 --> Final output sent to browser
DEBUG - 2019-12-19 09:58:29 --> Total execution time: 0.3224
INFO - 2019-12-19 09:58:49 --> Config Class Initialized
INFO - 2019-12-19 09:58:49 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:58:49 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:58:49 --> Utf8 Class Initialized
INFO - 2019-12-19 09:58:49 --> URI Class Initialized
INFO - 2019-12-19 09:58:49 --> Router Class Initialized
INFO - 2019-12-19 09:58:49 --> Output Class Initialized
INFO - 2019-12-19 09:58:49 --> Security Class Initialized
DEBUG - 2019-12-19 09:58:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:58:49 --> Input Class Initialized
INFO - 2019-12-19 09:58:49 --> Language Class Initialized
INFO - 2019-12-19 09:58:49 --> Loader Class Initialized
INFO - 2019-12-19 09:58:49 --> Helper loaded: html_helper
INFO - 2019-12-19 09:58:49 --> Helper loaded: url_helper
INFO - 2019-12-19 09:58:49 --> Helper loaded: form_helper
INFO - 2019-12-19 09:58:49 --> Database Driver Class Initialized
INFO - 2019-12-19 09:58:49 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:58:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:58:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:58:49 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:58:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:58:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:58:49 --> Controller Class Initialized
DEBUG - 2019-12-19 09:58:49 --> Create_User constructer got called..
INFO - 2019-12-19 09:58:49 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 09:58:49 --> showing all user from db tblusers...
DEBUG - 2019-12-19 09:58:49 --> show_users from DB
INFO - 2019-12-19 09:58:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 09:58:50 --> Final output sent to browser
DEBUG - 2019-12-19 09:58:50 --> Total execution time: 0.3299
INFO - 2019-12-19 09:58:55 --> Config Class Initialized
INFO - 2019-12-19 09:58:55 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:58:55 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:58:55 --> Utf8 Class Initialized
INFO - 2019-12-19 09:58:55 --> URI Class Initialized
INFO - 2019-12-19 09:58:55 --> Router Class Initialized
INFO - 2019-12-19 09:58:55 --> Output Class Initialized
INFO - 2019-12-19 09:58:55 --> Security Class Initialized
DEBUG - 2019-12-19 09:58:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:58:55 --> Input Class Initialized
INFO - 2019-12-19 09:58:55 --> Language Class Initialized
INFO - 2019-12-19 09:58:55 --> Loader Class Initialized
INFO - 2019-12-19 09:58:55 --> Helper loaded: html_helper
INFO - 2019-12-19 09:58:55 --> Helper loaded: url_helper
INFO - 2019-12-19 09:58:55 --> Helper loaded: form_helper
INFO - 2019-12-19 09:58:55 --> Database Driver Class Initialized
INFO - 2019-12-19 09:58:55 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:58:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:58:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:58:55 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:58:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:58:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:58:55 --> Controller Class Initialized
DEBUG - 2019-12-19 09:58:55 --> Create_User constructer got called..
INFO - 2019-12-19 09:58:55 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 09:58:55 --> showing all user from db tblusers...
DEBUG - 2019-12-19 09:58:55 --> show_groups from DB
INFO - 2019-12-19 09:58:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 09:58:55 --> Final output sent to browser
DEBUG - 2019-12-19 09:58:55 --> Total execution time: 0.3125
INFO - 2019-12-19 09:59:08 --> Config Class Initialized
INFO - 2019-12-19 09:59:08 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:59:08 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:59:08 --> Utf8 Class Initialized
INFO - 2019-12-19 09:59:08 --> URI Class Initialized
INFO - 2019-12-19 09:59:08 --> Router Class Initialized
INFO - 2019-12-19 09:59:08 --> Output Class Initialized
INFO - 2019-12-19 09:59:08 --> Security Class Initialized
DEBUG - 2019-12-19 09:59:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:59:08 --> Input Class Initialized
INFO - 2019-12-19 09:59:08 --> Language Class Initialized
INFO - 2019-12-19 09:59:08 --> Loader Class Initialized
INFO - 2019-12-19 09:59:08 --> Helper loaded: html_helper
INFO - 2019-12-19 09:59:08 --> Helper loaded: url_helper
INFO - 2019-12-19 09:59:08 --> Helper loaded: form_helper
INFO - 2019-12-19 09:59:08 --> Database Driver Class Initialized
INFO - 2019-12-19 09:59:08 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:59:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:59:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:59:08 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:59:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:59:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:59:08 --> Controller Class Initialized
DEBUG - 2019-12-19 09:59:08 --> Create_User constructer got called..
INFO - 2019-12-19 09:59:08 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 09:59:08 --> delete_group in User Login Model44
INFO - 2019-12-19 09:59:08 --> Final output sent to browser
DEBUG - 2019-12-19 09:59:08 --> Total execution time: 0.2375
INFO - 2019-12-19 09:59:18 --> Config Class Initialized
INFO - 2019-12-19 09:59:18 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:59:18 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:59:18 --> Utf8 Class Initialized
INFO - 2019-12-19 09:59:18 --> URI Class Initialized
INFO - 2019-12-19 09:59:18 --> Router Class Initialized
INFO - 2019-12-19 09:59:18 --> Output Class Initialized
INFO - 2019-12-19 09:59:18 --> Security Class Initialized
DEBUG - 2019-12-19 09:59:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:59:18 --> Input Class Initialized
INFO - 2019-12-19 09:59:18 --> Language Class Initialized
INFO - 2019-12-19 09:59:18 --> Loader Class Initialized
INFO - 2019-12-19 09:59:18 --> Helper loaded: html_helper
INFO - 2019-12-19 09:59:18 --> Helper loaded: url_helper
INFO - 2019-12-19 09:59:18 --> Helper loaded: form_helper
INFO - 2019-12-19 09:59:18 --> Database Driver Class Initialized
INFO - 2019-12-19 09:59:18 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:59:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:59:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:59:18 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:59:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:59:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:59:18 --> Controller Class Initialized
DEBUG - 2019-12-19 09:59:18 --> Create_User constructer got called..
INFO - 2019-12-19 09:59:18 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 09:59:18 --> showing all user from db tblusers...
DEBUG - 2019-12-19 09:59:18 --> show_groups from DB
INFO - 2019-12-19 09:59:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 09:59:19 --> Final output sent to browser
DEBUG - 2019-12-19 09:59:19 --> Total execution time: 0.3075
INFO - 2019-12-19 09:59:42 --> Config Class Initialized
INFO - 2019-12-19 09:59:42 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:59:42 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:59:42 --> Utf8 Class Initialized
INFO - 2019-12-19 09:59:42 --> URI Class Initialized
INFO - 2019-12-19 09:59:42 --> Router Class Initialized
INFO - 2019-12-19 09:59:42 --> Output Class Initialized
INFO - 2019-12-19 09:59:42 --> Security Class Initialized
DEBUG - 2019-12-19 09:59:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:59:42 --> Input Class Initialized
INFO - 2019-12-19 09:59:42 --> Language Class Initialized
INFO - 2019-12-19 09:59:42 --> Loader Class Initialized
INFO - 2019-12-19 09:59:42 --> Helper loaded: html_helper
INFO - 2019-12-19 09:59:42 --> Helper loaded: url_helper
INFO - 2019-12-19 09:59:42 --> Helper loaded: form_helper
INFO - 2019-12-19 09:59:42 --> Database Driver Class Initialized
INFO - 2019-12-19 09:59:42 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:59:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:59:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:59:42 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:59:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:59:42 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:59:42 --> Controller Class Initialized
DEBUG - 2019-12-19 09:59:42 --> Create_User constructer got called..
INFO - 2019-12-19 09:59:42 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 09:59:42 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2019-12-19 09:59:42 --> Group inserted
DEBUG - 2019-12-19 09:59:42 --> group_names() got called form ManageUsers_Model
DEBUG - 2019-12-19 09:59:42 --> showing all user from db tblusers...
DEBUG - 2019-12-19 09:59:42 --> show_groups from DB
INFO - 2019-12-19 09:59:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 09:59:42 --> Final output sent to browser
DEBUG - 2019-12-19 09:59:42 --> Total execution time: 0.3375
INFO - 2019-12-19 09:59:49 --> Config Class Initialized
INFO - 2019-12-19 09:59:49 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:59:49 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:59:49 --> Utf8 Class Initialized
INFO - 2019-12-19 09:59:49 --> URI Class Initialized
INFO - 2019-12-19 09:59:49 --> Router Class Initialized
INFO - 2019-12-19 09:59:49 --> Output Class Initialized
INFO - 2019-12-19 09:59:49 --> Security Class Initialized
DEBUG - 2019-12-19 09:59:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:59:49 --> Input Class Initialized
INFO - 2019-12-19 09:59:49 --> Language Class Initialized
INFO - 2019-12-19 09:59:49 --> Loader Class Initialized
INFO - 2019-12-19 09:59:49 --> Helper loaded: html_helper
INFO - 2019-12-19 09:59:49 --> Helper loaded: url_helper
INFO - 2019-12-19 09:59:49 --> Helper loaded: form_helper
INFO - 2019-12-19 09:59:49 --> Database Driver Class Initialized
INFO - 2019-12-19 09:59:49 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:59:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:59:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:59:49 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:59:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:59:49 --> Controller Class Initialized
DEBUG - 2019-12-19 09:59:49 --> Create_User constructer got called..
INFO - 2019-12-19 09:59:49 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 09:59:49 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2019-12-19 09:59:49 --> Group inserted
DEBUG - 2019-12-19 09:59:49 --> group_names() got called form ManageUsers_Model
DEBUG - 2019-12-19 09:59:49 --> showing all user from db tblusers...
DEBUG - 2019-12-19 09:59:49 --> show_groups from DB
INFO - 2019-12-19 09:59:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 09:59:49 --> Final output sent to browser
DEBUG - 2019-12-19 09:59:49 --> Total execution time: 0.3250
INFO - 2019-12-19 09:59:57 --> Config Class Initialized
INFO - 2019-12-19 09:59:57 --> Hooks Class Initialized
DEBUG - 2019-12-19 09:59:57 --> UTF-8 Support Enabled
INFO - 2019-12-19 09:59:57 --> Utf8 Class Initialized
INFO - 2019-12-19 09:59:57 --> URI Class Initialized
INFO - 2019-12-19 09:59:57 --> Router Class Initialized
INFO - 2019-12-19 09:59:58 --> Output Class Initialized
INFO - 2019-12-19 09:59:58 --> Security Class Initialized
DEBUG - 2019-12-19 09:59:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 09:59:58 --> Input Class Initialized
INFO - 2019-12-19 09:59:58 --> Language Class Initialized
INFO - 2019-12-19 09:59:58 --> Loader Class Initialized
INFO - 2019-12-19 09:59:58 --> Helper loaded: html_helper
INFO - 2019-12-19 09:59:58 --> Helper loaded: url_helper
INFO - 2019-12-19 09:59:58 --> Helper loaded: form_helper
INFO - 2019-12-19 09:59:58 --> Database Driver Class Initialized
INFO - 2019-12-19 09:59:58 --> Form Validation Class Initialized
DEBUG - 2019-12-19 09:59:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 09:59:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 09:59:58 --> Encryption Class Initialized
DEBUG - 2019-12-19 09:59:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 09:59:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 09:59:58 --> Controller Class Initialized
DEBUG - 2019-12-19 09:59:58 --> Create_User constructer got called..
INFO - 2019-12-19 09:59:58 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 09:59:58 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2019-12-19 09:59:58 --> Group inserted
DEBUG - 2019-12-19 09:59:58 --> group_names() got called form ManageUsers_Model
DEBUG - 2019-12-19 09:59:58 --> showing all user from db tblusers...
DEBUG - 2019-12-19 09:59:58 --> show_groups from DB
INFO - 2019-12-19 09:59:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 09:59:58 --> Final output sent to browser
DEBUG - 2019-12-19 09:59:58 --> Total execution time: 0.3125
INFO - 2019-12-19 10:00:06 --> Config Class Initialized
INFO - 2019-12-19 10:00:06 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:00:06 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:00:06 --> Utf8 Class Initialized
INFO - 2019-12-19 10:00:06 --> URI Class Initialized
INFO - 2019-12-19 10:00:06 --> Router Class Initialized
INFO - 2019-12-19 10:00:06 --> Output Class Initialized
INFO - 2019-12-19 10:00:06 --> Security Class Initialized
DEBUG - 2019-12-19 10:00:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:00:06 --> Input Class Initialized
INFO - 2019-12-19 10:00:06 --> Language Class Initialized
INFO - 2019-12-19 10:00:06 --> Loader Class Initialized
INFO - 2019-12-19 10:00:06 --> Helper loaded: html_helper
INFO - 2019-12-19 10:00:06 --> Helper loaded: url_helper
INFO - 2019-12-19 10:00:06 --> Helper loaded: form_helper
INFO - 2019-12-19 10:00:06 --> Database Driver Class Initialized
INFO - 2019-12-19 10:00:06 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:00:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:00:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:00:06 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:00:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:00:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:00:06 --> Controller Class Initialized
DEBUG - 2019-12-19 10:00:06 --> Create_User constructer got called..
INFO - 2019-12-19 10:00:06 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 10:00:06 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2019-12-19 10:00:06 --> Group inserted
DEBUG - 2019-12-19 10:00:06 --> group_names() got called form ManageUsers_Model
DEBUG - 2019-12-19 10:00:06 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:00:06 --> show_groups from DB
INFO - 2019-12-19 10:00:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:00:06 --> Final output sent to browser
DEBUG - 2019-12-19 10:00:06 --> Total execution time: 0.3350
INFO - 2019-12-19 10:00:15 --> Config Class Initialized
INFO - 2019-12-19 10:00:15 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:00:16 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:00:16 --> Utf8 Class Initialized
INFO - 2019-12-19 10:00:16 --> URI Class Initialized
INFO - 2019-12-19 10:00:16 --> Router Class Initialized
INFO - 2019-12-19 10:00:16 --> Output Class Initialized
INFO - 2019-12-19 10:00:16 --> Security Class Initialized
DEBUG - 2019-12-19 10:00:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:00:16 --> Input Class Initialized
INFO - 2019-12-19 10:00:16 --> Language Class Initialized
INFO - 2019-12-19 10:00:16 --> Loader Class Initialized
INFO - 2019-12-19 10:00:16 --> Helper loaded: html_helper
INFO - 2019-12-19 10:00:16 --> Helper loaded: url_helper
INFO - 2019-12-19 10:00:16 --> Helper loaded: form_helper
INFO - 2019-12-19 10:00:16 --> Database Driver Class Initialized
INFO - 2019-12-19 10:00:16 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:00:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:00:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:00:16 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:00:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:00:16 --> Controller Class Initialized
DEBUG - 2019-12-19 10:00:16 --> Create_User constructer got called..
INFO - 2019-12-19 10:00:16 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:00:16 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:00:16 --> show_users from DB
INFO - 2019-12-19 10:00:16 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 10:00:16 --> Final output sent to browser
DEBUG - 2019-12-19 10:00:16 --> Total execution time: 0.3425
INFO - 2019-12-19 10:00:19 --> Config Class Initialized
INFO - 2019-12-19 10:00:19 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:00:19 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:00:19 --> Utf8 Class Initialized
INFO - 2019-12-19 10:00:19 --> URI Class Initialized
INFO - 2019-12-19 10:00:19 --> Router Class Initialized
INFO - 2019-12-19 10:00:19 --> Output Class Initialized
INFO - 2019-12-19 10:00:19 --> Security Class Initialized
DEBUG - 2019-12-19 10:00:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:00:19 --> Input Class Initialized
INFO - 2019-12-19 10:00:19 --> Language Class Initialized
INFO - 2019-12-19 10:00:19 --> Loader Class Initialized
INFO - 2019-12-19 10:00:19 --> Helper loaded: html_helper
INFO - 2019-12-19 10:00:19 --> Helper loaded: url_helper
INFO - 2019-12-19 10:00:19 --> Helper loaded: form_helper
INFO - 2019-12-19 10:00:19 --> Database Driver Class Initialized
INFO - 2019-12-19 10:00:19 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:00:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:00:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:00:19 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:00:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:00:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:00:19 --> Controller Class Initialized
DEBUG - 2019-12-19 10:00:19 --> Create_User constructer got called..
INFO - 2019-12-19 10:00:19 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:00:19 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:00:19 --> show_users from DB
INFO - 2019-12-19 10:00:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 10:00:19 --> Final output sent to browser
DEBUG - 2019-12-19 10:00:19 --> Total execution time: 0.3100
INFO - 2019-12-19 10:00:22 --> Config Class Initialized
INFO - 2019-12-19 10:00:22 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:00:22 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:00:22 --> Utf8 Class Initialized
INFO - 2019-12-19 10:00:22 --> URI Class Initialized
INFO - 2019-12-19 10:00:22 --> Router Class Initialized
INFO - 2019-12-19 10:00:22 --> Output Class Initialized
INFO - 2019-12-19 10:00:22 --> Security Class Initialized
DEBUG - 2019-12-19 10:00:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:00:22 --> Input Class Initialized
INFO - 2019-12-19 10:00:22 --> Language Class Initialized
INFO - 2019-12-19 10:00:22 --> Loader Class Initialized
INFO - 2019-12-19 10:00:22 --> Helper loaded: html_helper
INFO - 2019-12-19 10:00:22 --> Helper loaded: url_helper
INFO - 2019-12-19 10:00:22 --> Helper loaded: form_helper
INFO - 2019-12-19 10:00:22 --> Database Driver Class Initialized
INFO - 2019-12-19 10:00:22 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:00:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:00:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:00:22 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:00:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:00:22 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:00:22 --> Controller Class Initialized
DEBUG - 2019-12-19 10:00:22 --> Create_User constructer got called..
INFO - 2019-12-19 10:00:22 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:00:22 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:00:22 --> show_groups from DB
INFO - 2019-12-19 10:00:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:00:22 --> Final output sent to browser
DEBUG - 2019-12-19 10:00:22 --> Total execution time: 0.3450
INFO - 2019-12-19 10:04:09 --> Config Class Initialized
INFO - 2019-12-19 10:04:09 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:04:09 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:04:09 --> Utf8 Class Initialized
INFO - 2019-12-19 10:04:09 --> URI Class Initialized
INFO - 2019-12-19 10:04:09 --> Router Class Initialized
INFO - 2019-12-19 10:04:09 --> Output Class Initialized
INFO - 2019-12-19 10:04:09 --> Security Class Initialized
DEBUG - 2019-12-19 10:04:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:04:09 --> Input Class Initialized
INFO - 2019-12-19 10:04:09 --> Language Class Initialized
INFO - 2019-12-19 10:04:09 --> Loader Class Initialized
INFO - 2019-12-19 10:04:09 --> Helper loaded: html_helper
INFO - 2019-12-19 10:04:09 --> Helper loaded: url_helper
INFO - 2019-12-19 10:04:09 --> Helper loaded: form_helper
INFO - 2019-12-19 10:04:10 --> Database Driver Class Initialized
INFO - 2019-12-19 10:04:10 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:04:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:04:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:04:10 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:04:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:04:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:04:10 --> Controller Class Initialized
DEBUG - 2019-12-19 10:04:10 --> Create_User constructer got called..
INFO - 2019-12-19 10:04:10 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:04:10 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:04:10 --> show_groups from DB
INFO - 2019-12-19 10:04:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:04:10 --> Final output sent to browser
DEBUG - 2019-12-19 10:04:10 --> Total execution time: 0.5295
INFO - 2019-12-19 10:07:49 --> Config Class Initialized
INFO - 2019-12-19 10:07:49 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:07:49 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:07:49 --> Utf8 Class Initialized
INFO - 2019-12-19 10:07:49 --> URI Class Initialized
INFO - 2019-12-19 10:07:49 --> Router Class Initialized
INFO - 2019-12-19 10:07:49 --> Output Class Initialized
INFO - 2019-12-19 10:07:49 --> Security Class Initialized
DEBUG - 2019-12-19 10:07:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:07:49 --> Input Class Initialized
INFO - 2019-12-19 10:07:49 --> Language Class Initialized
INFO - 2019-12-19 10:07:49 --> Loader Class Initialized
INFO - 2019-12-19 10:07:49 --> Helper loaded: html_helper
INFO - 2019-12-19 10:07:49 --> Helper loaded: url_helper
INFO - 2019-12-19 10:07:49 --> Helper loaded: form_helper
INFO - 2019-12-19 10:07:49 --> Database Driver Class Initialized
INFO - 2019-12-19 10:07:49 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:07:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:07:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:07:49 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:07:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:07:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:07:49 --> Controller Class Initialized
DEBUG - 2019-12-19 10:07:49 --> Create_User constructer got called..
INFO - 2019-12-19 10:07:49 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:07:49 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:07:49 --> show_groups from DB
INFO - 2019-12-19 10:07:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:07:49 --> Final output sent to browser
DEBUG - 2019-12-19 10:07:49 --> Total execution time: 0.3225
INFO - 2019-12-19 10:10:17 --> Config Class Initialized
INFO - 2019-12-19 10:10:17 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:10:17 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:10:17 --> Utf8 Class Initialized
INFO - 2019-12-19 10:10:17 --> URI Class Initialized
INFO - 2019-12-19 10:10:17 --> Router Class Initialized
INFO - 2019-12-19 10:10:17 --> Output Class Initialized
INFO - 2019-12-19 10:10:17 --> Security Class Initialized
DEBUG - 2019-12-19 10:10:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:10:17 --> Input Class Initialized
INFO - 2019-12-19 10:10:17 --> Language Class Initialized
INFO - 2019-12-19 10:10:17 --> Loader Class Initialized
INFO - 2019-12-19 10:10:17 --> Helper loaded: html_helper
INFO - 2019-12-19 10:10:17 --> Helper loaded: url_helper
INFO - 2019-12-19 10:10:17 --> Helper loaded: form_helper
INFO - 2019-12-19 10:10:17 --> Database Driver Class Initialized
INFO - 2019-12-19 10:10:17 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:10:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:10:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:10:17 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:10:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:10:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:10:17 --> Controller Class Initialized
DEBUG - 2019-12-19 10:10:17 --> Create_User constructer got called..
INFO - 2019-12-19 10:10:17 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:10:17 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:10:17 --> show_groups from DB
INFO - 2019-12-19 10:10:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:10:17 --> Final output sent to browser
DEBUG - 2019-12-19 10:10:17 --> Total execution time: 0.3425
INFO - 2019-12-19 10:10:27 --> Config Class Initialized
INFO - 2019-12-19 10:10:27 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:10:27 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:10:27 --> Utf8 Class Initialized
INFO - 2019-12-19 10:10:27 --> URI Class Initialized
INFO - 2019-12-19 10:10:27 --> Router Class Initialized
INFO - 2019-12-19 10:10:27 --> Output Class Initialized
INFO - 2019-12-19 10:10:27 --> Security Class Initialized
DEBUG - 2019-12-19 10:10:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:10:27 --> Input Class Initialized
INFO - 2019-12-19 10:10:27 --> Language Class Initialized
INFO - 2019-12-19 10:10:27 --> Loader Class Initialized
INFO - 2019-12-19 10:10:27 --> Helper loaded: html_helper
INFO - 2019-12-19 10:10:27 --> Helper loaded: url_helper
INFO - 2019-12-19 10:10:28 --> Helper loaded: form_helper
INFO - 2019-12-19 10:10:28 --> Database Driver Class Initialized
INFO - 2019-12-19 10:10:28 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:10:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:10:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:10:28 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:10:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:10:28 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:10:28 --> Controller Class Initialized
DEBUG - 2019-12-19 10:10:28 --> Create_User constructer got called..
INFO - 2019-12-19 10:10:28 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 10:10:28 --> delete_group in User Login Model59
INFO - 2019-12-19 10:10:28 --> Final output sent to browser
DEBUG - 2019-12-19 10:10:28 --> Total execution time: 0.2550
INFO - 2019-12-19 10:15:58 --> Config Class Initialized
INFO - 2019-12-19 10:15:58 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:15:58 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:15:58 --> Utf8 Class Initialized
INFO - 2019-12-19 10:15:58 --> URI Class Initialized
INFO - 2019-12-19 10:15:58 --> Router Class Initialized
INFO - 2019-12-19 10:15:58 --> Output Class Initialized
INFO - 2019-12-19 10:15:58 --> Security Class Initialized
DEBUG - 2019-12-19 10:15:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:15:58 --> Input Class Initialized
INFO - 2019-12-19 10:15:58 --> Language Class Initialized
INFO - 2019-12-19 10:15:58 --> Loader Class Initialized
INFO - 2019-12-19 10:15:58 --> Helper loaded: html_helper
INFO - 2019-12-19 10:15:58 --> Helper loaded: url_helper
INFO - 2019-12-19 10:15:58 --> Helper loaded: form_helper
INFO - 2019-12-19 10:15:58 --> Database Driver Class Initialized
INFO - 2019-12-19 10:15:58 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:15:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:15:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:15:58 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:15:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:15:58 --> Controller Class Initialized
DEBUG - 2019-12-19 10:15:58 --> Create_User constructer got called..
INFO - 2019-12-19 10:15:58 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:15:58 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:15:59 --> show_groups from DB
INFO - 2019-12-19 10:15:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:15:59 --> Final output sent to browser
DEBUG - 2019-12-19 10:15:59 --> Total execution time: 0.3150
INFO - 2019-12-19 10:16:07 --> Config Class Initialized
INFO - 2019-12-19 10:16:07 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:16:07 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:16:07 --> Utf8 Class Initialized
INFO - 2019-12-19 10:16:07 --> URI Class Initialized
INFO - 2019-12-19 10:16:07 --> Router Class Initialized
INFO - 2019-12-19 10:16:07 --> Output Class Initialized
INFO - 2019-12-19 10:16:07 --> Security Class Initialized
DEBUG - 2019-12-19 10:16:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:16:07 --> Input Class Initialized
INFO - 2019-12-19 10:16:07 --> Language Class Initialized
INFO - 2019-12-19 10:16:07 --> Loader Class Initialized
INFO - 2019-12-19 10:16:07 --> Helper loaded: html_helper
INFO - 2019-12-19 10:16:07 --> Helper loaded: url_helper
INFO - 2019-12-19 10:16:07 --> Helper loaded: form_helper
INFO - 2019-12-19 10:16:07 --> Database Driver Class Initialized
INFO - 2019-12-19 10:16:07 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:16:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:16:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:16:07 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:16:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:16:08 --> Controller Class Initialized
DEBUG - 2019-12-19 10:16:08 --> Create_User constructer got called..
INFO - 2019-12-19 10:16:08 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 10:16:08 --> delete_group in User Login Model58
INFO - 2019-12-19 10:16:08 --> Final output sent to browser
DEBUG - 2019-12-19 10:16:08 --> Total execution time: 0.2750
INFO - 2019-12-19 10:16:08 --> Config Class Initialized
INFO - 2019-12-19 10:16:08 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:16:08 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:16:08 --> Utf8 Class Initialized
INFO - 2019-12-19 10:16:08 --> URI Class Initialized
INFO - 2019-12-19 10:16:08 --> Router Class Initialized
INFO - 2019-12-19 10:16:08 --> Output Class Initialized
INFO - 2019-12-19 10:16:08 --> Security Class Initialized
DEBUG - 2019-12-19 10:16:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:16:08 --> Input Class Initialized
INFO - 2019-12-19 10:16:08 --> Language Class Initialized
INFO - 2019-12-19 10:16:08 --> Loader Class Initialized
INFO - 2019-12-19 10:16:08 --> Helper loaded: html_helper
INFO - 2019-12-19 10:16:08 --> Helper loaded: url_helper
INFO - 2019-12-19 10:16:08 --> Helper loaded: form_helper
INFO - 2019-12-19 10:16:08 --> Database Driver Class Initialized
INFO - 2019-12-19 10:16:08 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:16:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:16:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:16:08 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:16:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:16:08 --> Controller Class Initialized
DEBUG - 2019-12-19 10:16:08 --> Create_User constructer got called..
INFO - 2019-12-19 10:16:08 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:16:08 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:16:08 --> show_groups from DB
INFO - 2019-12-19 10:16:08 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:16:08 --> Final output sent to browser
DEBUG - 2019-12-19 10:16:08 --> Total execution time: 0.2875
INFO - 2019-12-19 10:16:30 --> Config Class Initialized
INFO - 2019-12-19 10:16:30 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:16:30 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:16:30 --> Utf8 Class Initialized
INFO - 2019-12-19 10:16:30 --> URI Class Initialized
INFO - 2019-12-19 10:16:30 --> Router Class Initialized
INFO - 2019-12-19 10:16:30 --> Output Class Initialized
INFO - 2019-12-19 10:16:30 --> Security Class Initialized
DEBUG - 2019-12-19 10:16:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:16:30 --> Input Class Initialized
INFO - 2019-12-19 10:16:30 --> Language Class Initialized
INFO - 2019-12-19 10:16:30 --> Loader Class Initialized
INFO - 2019-12-19 10:16:30 --> Helper loaded: html_helper
INFO - 2019-12-19 10:16:30 --> Helper loaded: url_helper
INFO - 2019-12-19 10:16:30 --> Helper loaded: form_helper
INFO - 2019-12-19 10:16:30 --> Database Driver Class Initialized
INFO - 2019-12-19 10:16:30 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:16:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:16:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:16:30 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:16:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:16:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:16:30 --> Controller Class Initialized
DEBUG - 2019-12-19 10:16:30 --> Create_User constructer got called..
INFO - 2019-12-19 10:16:30 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 10:16:30 --> delete_group in User Login Model57
INFO - 2019-12-19 10:16:30 --> Final output sent to browser
DEBUG - 2019-12-19 10:16:30 --> Total execution time: 0.2350
INFO - 2019-12-19 10:16:30 --> Config Class Initialized
INFO - 2019-12-19 10:16:30 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:16:30 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:16:30 --> Utf8 Class Initialized
INFO - 2019-12-19 10:16:30 --> URI Class Initialized
INFO - 2019-12-19 10:16:30 --> Router Class Initialized
INFO - 2019-12-19 10:16:30 --> Output Class Initialized
INFO - 2019-12-19 10:16:30 --> Security Class Initialized
DEBUG - 2019-12-19 10:16:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:16:30 --> Input Class Initialized
INFO - 2019-12-19 10:16:30 --> Language Class Initialized
INFO - 2019-12-19 10:16:30 --> Loader Class Initialized
INFO - 2019-12-19 10:16:30 --> Helper loaded: html_helper
INFO - 2019-12-19 10:16:30 --> Helper loaded: url_helper
INFO - 2019-12-19 10:16:30 --> Helper loaded: form_helper
INFO - 2019-12-19 10:16:30 --> Database Driver Class Initialized
INFO - 2019-12-19 10:16:30 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:16:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:16:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:16:30 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:16:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:16:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:16:30 --> Controller Class Initialized
DEBUG - 2019-12-19 10:16:30 --> Create_User constructer got called..
INFO - 2019-12-19 10:16:30 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:16:30 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:16:30 --> show_groups from DB
INFO - 2019-12-19 10:16:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:16:30 --> Final output sent to browser
DEBUG - 2019-12-19 10:16:30 --> Total execution time: 0.2675
INFO - 2019-12-19 10:30:27 --> Config Class Initialized
INFO - 2019-12-19 10:30:27 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:30:27 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:30:27 --> Utf8 Class Initialized
INFO - 2019-12-19 10:30:27 --> URI Class Initialized
INFO - 2019-12-19 10:30:27 --> Router Class Initialized
INFO - 2019-12-19 10:30:27 --> Output Class Initialized
INFO - 2019-12-19 10:30:27 --> Security Class Initialized
DEBUG - 2019-12-19 10:30:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:30:27 --> Input Class Initialized
INFO - 2019-12-19 10:30:27 --> Language Class Initialized
INFO - 2019-12-19 10:30:27 --> Loader Class Initialized
INFO - 2019-12-19 10:30:27 --> Helper loaded: html_helper
INFO - 2019-12-19 10:30:27 --> Helper loaded: url_helper
INFO - 2019-12-19 10:30:27 --> Helper loaded: form_helper
INFO - 2019-12-19 10:30:27 --> Database Driver Class Initialized
INFO - 2019-12-19 10:30:27 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:30:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:30:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:30:27 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:30:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:30:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:30:27 --> Controller Class Initialized
DEBUG - 2019-12-19 10:30:27 --> Create_User constructer got called..
INFO - 2019-12-19 10:30:27 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:30:27 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:30:27 --> show_groups from DB
INFO - 2019-12-19 10:30:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:30:27 --> Final output sent to browser
DEBUG - 2019-12-19 10:30:27 --> Total execution time: 0.3325
INFO - 2019-12-19 10:30:52 --> Config Class Initialized
INFO - 2019-12-19 10:30:52 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:30:52 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:30:52 --> Utf8 Class Initialized
INFO - 2019-12-19 10:30:52 --> URI Class Initialized
INFO - 2019-12-19 10:30:53 --> Router Class Initialized
INFO - 2019-12-19 10:30:53 --> Output Class Initialized
INFO - 2019-12-19 10:30:53 --> Security Class Initialized
DEBUG - 2019-12-19 10:30:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:30:53 --> Input Class Initialized
INFO - 2019-12-19 10:30:53 --> Language Class Initialized
INFO - 2019-12-19 10:30:53 --> Loader Class Initialized
INFO - 2019-12-19 10:30:53 --> Helper loaded: html_helper
INFO - 2019-12-19 10:30:53 --> Helper loaded: url_helper
INFO - 2019-12-19 10:30:53 --> Helper loaded: form_helper
INFO - 2019-12-19 10:30:53 --> Database Driver Class Initialized
INFO - 2019-12-19 10:30:53 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:30:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:30:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:30:53 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:30:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:30:53 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:30:53 --> Controller Class Initialized
DEBUG - 2019-12-19 10:30:53 --> Create_User constructer got called..
INFO - 2019-12-19 10:30:53 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:30:53 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:30:53 --> show_groups from DB
INFO - 2019-12-19 10:30:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:30:53 --> Final output sent to browser
DEBUG - 2019-12-19 10:30:53 --> Total execution time: 0.3550
INFO - 2019-12-19 10:32:12 --> Config Class Initialized
INFO - 2019-12-19 10:32:12 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:32:12 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:32:12 --> Utf8 Class Initialized
INFO - 2019-12-19 10:32:12 --> URI Class Initialized
INFO - 2019-12-19 10:32:12 --> Router Class Initialized
INFO - 2019-12-19 10:32:12 --> Output Class Initialized
INFO - 2019-12-19 10:32:12 --> Security Class Initialized
DEBUG - 2019-12-19 10:32:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:32:12 --> Input Class Initialized
INFO - 2019-12-19 10:32:12 --> Language Class Initialized
INFO - 2019-12-19 10:32:12 --> Loader Class Initialized
INFO - 2019-12-19 10:32:12 --> Helper loaded: html_helper
INFO - 2019-12-19 10:32:12 --> Helper loaded: url_helper
INFO - 2019-12-19 10:32:12 --> Helper loaded: form_helper
INFO - 2019-12-19 10:32:12 --> Database Driver Class Initialized
INFO - 2019-12-19 10:32:13 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:32:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:32:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:32:13 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:32:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:32:13 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:32:13 --> Controller Class Initialized
DEBUG - 2019-12-19 10:32:13 --> Create_User constructer got called..
INFO - 2019-12-19 10:32:13 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:32:13 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:32:13 --> show_groups from DB
INFO - 2019-12-19 10:32:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:32:13 --> Final output sent to browser
DEBUG - 2019-12-19 10:32:13 --> Total execution time: 0.3150
INFO - 2019-12-19 10:33:37 --> Config Class Initialized
INFO - 2019-12-19 10:33:37 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:33:37 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:33:37 --> Utf8 Class Initialized
INFO - 2019-12-19 10:33:37 --> URI Class Initialized
INFO - 2019-12-19 10:33:37 --> Router Class Initialized
INFO - 2019-12-19 10:33:37 --> Output Class Initialized
INFO - 2019-12-19 10:33:37 --> Security Class Initialized
DEBUG - 2019-12-19 10:33:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:33:37 --> Input Class Initialized
INFO - 2019-12-19 10:33:37 --> Language Class Initialized
INFO - 2019-12-19 10:33:37 --> Loader Class Initialized
INFO - 2019-12-19 10:33:37 --> Helper loaded: html_helper
INFO - 2019-12-19 10:33:37 --> Helper loaded: url_helper
INFO - 2019-12-19 10:33:37 --> Helper loaded: form_helper
INFO - 2019-12-19 10:33:37 --> Database Driver Class Initialized
INFO - 2019-12-19 10:33:37 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:33:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:33:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:33:37 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:33:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:33:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:33:37 --> Controller Class Initialized
DEBUG - 2019-12-19 10:33:37 --> Create_User constructer got called..
INFO - 2019-12-19 10:33:37 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:33:37 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:33:37 --> show_groups from DB
INFO - 2019-12-19 10:33:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:33:37 --> Final output sent to browser
DEBUG - 2019-12-19 10:33:37 --> Total execution time: 0.4120
INFO - 2019-12-19 10:36:31 --> Config Class Initialized
INFO - 2019-12-19 10:36:31 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:36:31 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:36:31 --> Utf8 Class Initialized
INFO - 2019-12-19 10:36:31 --> URI Class Initialized
INFO - 2019-12-19 10:36:31 --> Router Class Initialized
INFO - 2019-12-19 10:36:31 --> Output Class Initialized
INFO - 2019-12-19 10:36:31 --> Security Class Initialized
DEBUG - 2019-12-19 10:36:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:36:31 --> Input Class Initialized
INFO - 2019-12-19 10:36:31 --> Language Class Initialized
INFO - 2019-12-19 10:36:31 --> Loader Class Initialized
INFO - 2019-12-19 10:36:31 --> Helper loaded: html_helper
INFO - 2019-12-19 10:36:31 --> Helper loaded: url_helper
INFO - 2019-12-19 10:36:31 --> Helper loaded: form_helper
INFO - 2019-12-19 10:36:31 --> Database Driver Class Initialized
INFO - 2019-12-19 10:36:31 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:36:31 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:36:31 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:36:31 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:36:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:36:31 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:36:31 --> Controller Class Initialized
DEBUG - 2019-12-19 10:36:31 --> Create_User constructer got called..
INFO - 2019-12-19 10:36:31 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:36:31 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:36:31 --> show_groups from DB
INFO - 2019-12-19 10:36:31 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:36:31 --> Final output sent to browser
DEBUG - 2019-12-19 10:36:31 --> Total execution time: 0.2815
INFO - 2019-12-19 10:37:31 --> Config Class Initialized
INFO - 2019-12-19 10:37:31 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:37:31 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:37:31 --> Utf8 Class Initialized
INFO - 2019-12-19 10:37:31 --> URI Class Initialized
INFO - 2019-12-19 10:37:31 --> Router Class Initialized
INFO - 2019-12-19 10:37:32 --> Output Class Initialized
INFO - 2019-12-19 10:37:32 --> Security Class Initialized
DEBUG - 2019-12-19 10:37:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:37:32 --> Input Class Initialized
INFO - 2019-12-19 10:37:32 --> Language Class Initialized
INFO - 2019-12-19 10:37:32 --> Loader Class Initialized
INFO - 2019-12-19 10:37:32 --> Helper loaded: html_helper
INFO - 2019-12-19 10:37:32 --> Helper loaded: url_helper
INFO - 2019-12-19 10:37:32 --> Helper loaded: form_helper
INFO - 2019-12-19 10:37:32 --> Database Driver Class Initialized
INFO - 2019-12-19 10:37:32 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:37:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:37:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:37:32 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:37:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:37:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:37:32 --> Controller Class Initialized
DEBUG - 2019-12-19 10:37:32 --> Create_User constructer got called..
INFO - 2019-12-19 10:37:32 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:37:32 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:37:32 --> show_groups from DB
INFO - 2019-12-19 10:37:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:37:32 --> Final output sent to browser
DEBUG - 2019-12-19 10:37:32 --> Total execution time: 0.2975
INFO - 2019-12-19 10:39:06 --> Config Class Initialized
INFO - 2019-12-19 10:39:06 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:39:06 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:39:06 --> Utf8 Class Initialized
INFO - 2019-12-19 10:39:06 --> URI Class Initialized
INFO - 2019-12-19 10:39:06 --> Router Class Initialized
INFO - 2019-12-19 10:39:06 --> Output Class Initialized
INFO - 2019-12-19 10:39:06 --> Security Class Initialized
DEBUG - 2019-12-19 10:39:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:39:06 --> Input Class Initialized
INFO - 2019-12-19 10:39:06 --> Language Class Initialized
INFO - 2019-12-19 10:39:06 --> Loader Class Initialized
INFO - 2019-12-19 10:39:06 --> Helper loaded: html_helper
INFO - 2019-12-19 10:39:06 --> Helper loaded: url_helper
INFO - 2019-12-19 10:39:06 --> Helper loaded: form_helper
INFO - 2019-12-19 10:39:06 --> Database Driver Class Initialized
INFO - 2019-12-19 10:39:06 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:39:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:39:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:39:06 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:39:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:39:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:39:06 --> Controller Class Initialized
DEBUG - 2019-12-19 10:39:06 --> Create_User constructer got called..
INFO - 2019-12-19 10:39:06 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:39:06 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:39:06 --> show_groups from DB
INFO - 2019-12-19 10:39:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:39:06 --> Final output sent to browser
DEBUG - 2019-12-19 10:39:06 --> Total execution time: 0.2975
INFO - 2019-12-19 10:46:46 --> Config Class Initialized
INFO - 2019-12-19 10:46:46 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:46:46 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:46:46 --> Utf8 Class Initialized
INFO - 2019-12-19 10:46:46 --> URI Class Initialized
INFO - 2019-12-19 10:46:46 --> Router Class Initialized
INFO - 2019-12-19 10:46:46 --> Output Class Initialized
INFO - 2019-12-19 10:46:46 --> Security Class Initialized
DEBUG - 2019-12-19 10:46:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:46:46 --> Input Class Initialized
INFO - 2019-12-19 10:46:46 --> Language Class Initialized
INFO - 2019-12-19 10:46:46 --> Loader Class Initialized
INFO - 2019-12-19 10:46:46 --> Helper loaded: html_helper
INFO - 2019-12-19 10:46:46 --> Helper loaded: url_helper
INFO - 2019-12-19 10:46:46 --> Helper loaded: form_helper
INFO - 2019-12-19 10:46:46 --> Database Driver Class Initialized
INFO - 2019-12-19 10:46:46 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:46:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:46:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:46:46 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:46:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:46:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:46:46 --> Controller Class Initialized
DEBUG - 2019-12-19 10:46:46 --> Create_User constructer got called..
INFO - 2019-12-19 10:46:46 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:46:46 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:46:46 --> show_groups from DB
INFO - 2019-12-19 10:46:46 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:46:46 --> Final output sent to browser
DEBUG - 2019-12-19 10:46:46 --> Total execution time: 0.3800
INFO - 2019-12-19 10:47:58 --> Config Class Initialized
INFO - 2019-12-19 10:47:58 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:47:58 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:47:58 --> Utf8 Class Initialized
INFO - 2019-12-19 10:47:58 --> URI Class Initialized
INFO - 2019-12-19 10:47:58 --> Router Class Initialized
INFO - 2019-12-19 10:47:58 --> Output Class Initialized
INFO - 2019-12-19 10:47:59 --> Security Class Initialized
DEBUG - 2019-12-19 10:47:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:47:59 --> Input Class Initialized
INFO - 2019-12-19 10:47:59 --> Language Class Initialized
INFO - 2019-12-19 10:47:59 --> Loader Class Initialized
INFO - 2019-12-19 10:47:59 --> Helper loaded: html_helper
INFO - 2019-12-19 10:47:59 --> Helper loaded: url_helper
INFO - 2019-12-19 10:47:59 --> Helper loaded: form_helper
INFO - 2019-12-19 10:47:59 --> Database Driver Class Initialized
INFO - 2019-12-19 10:47:59 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:47:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:47:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:47:59 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:47:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:47:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:47:59 --> Controller Class Initialized
DEBUG - 2019-12-19 10:47:59 --> Create_User constructer got called..
INFO - 2019-12-19 10:47:59 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:47:59 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:47:59 --> show_groups from DB
INFO - 2019-12-19 10:47:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:47:59 --> Final output sent to browser
DEBUG - 2019-12-19 10:47:59 --> Total execution time: 0.4295
INFO - 2019-12-19 10:50:54 --> Config Class Initialized
INFO - 2019-12-19 10:50:54 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:50:54 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:50:54 --> Utf8 Class Initialized
INFO - 2019-12-19 10:50:54 --> URI Class Initialized
INFO - 2019-12-19 10:50:54 --> Router Class Initialized
INFO - 2019-12-19 10:50:54 --> Output Class Initialized
INFO - 2019-12-19 10:50:54 --> Security Class Initialized
DEBUG - 2019-12-19 10:50:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:50:54 --> Input Class Initialized
INFO - 2019-12-19 10:50:54 --> Language Class Initialized
INFO - 2019-12-19 10:50:54 --> Loader Class Initialized
INFO - 2019-12-19 10:50:54 --> Helper loaded: html_helper
INFO - 2019-12-19 10:50:54 --> Helper loaded: url_helper
INFO - 2019-12-19 10:50:54 --> Helper loaded: form_helper
INFO - 2019-12-19 10:50:54 --> Database Driver Class Initialized
INFO - 2019-12-19 10:50:54 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:50:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:50:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:50:54 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:50:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:50:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:50:54 --> Controller Class Initialized
DEBUG - 2019-12-19 10:50:54 --> Create_User constructer got called..
INFO - 2019-12-19 10:50:54 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:50:54 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:50:54 --> show_groups from DB
INFO - 2019-12-19 10:50:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:50:54 --> Final output sent to browser
DEBUG - 2019-12-19 10:50:54 --> Total execution time: 0.3350
INFO - 2019-12-19 10:52:45 --> Config Class Initialized
INFO - 2019-12-19 10:52:45 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:52:45 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:52:45 --> Utf8 Class Initialized
INFO - 2019-12-19 10:52:45 --> URI Class Initialized
INFO - 2019-12-19 10:52:45 --> Router Class Initialized
INFO - 2019-12-19 10:52:45 --> Output Class Initialized
INFO - 2019-12-19 10:52:45 --> Security Class Initialized
DEBUG - 2019-12-19 10:52:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:52:45 --> Input Class Initialized
INFO - 2019-12-19 10:52:45 --> Language Class Initialized
INFO - 2019-12-19 10:52:45 --> Loader Class Initialized
INFO - 2019-12-19 10:52:45 --> Helper loaded: html_helper
INFO - 2019-12-19 10:52:45 --> Helper loaded: url_helper
INFO - 2019-12-19 10:52:45 --> Helper loaded: form_helper
INFO - 2019-12-19 10:52:45 --> Database Driver Class Initialized
INFO - 2019-12-19 10:52:45 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:52:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:52:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:52:45 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:52:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:52:45 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:52:45 --> Controller Class Initialized
DEBUG - 2019-12-19 10:52:45 --> Create_User constructer got called..
INFO - 2019-12-19 10:52:45 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:52:45 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:52:45 --> show_groups from DB
INFO - 2019-12-19 10:52:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:52:45 --> Final output sent to browser
DEBUG - 2019-12-19 10:52:45 --> Total execution time: 0.3425
INFO - 2019-12-19 10:53:30 --> Config Class Initialized
INFO - 2019-12-19 10:53:30 --> Hooks Class Initialized
DEBUG - 2019-12-19 10:53:30 --> UTF-8 Support Enabled
INFO - 2019-12-19 10:53:30 --> Utf8 Class Initialized
INFO - 2019-12-19 10:53:30 --> URI Class Initialized
INFO - 2019-12-19 10:53:30 --> Router Class Initialized
INFO - 2019-12-19 10:53:30 --> Output Class Initialized
INFO - 2019-12-19 10:53:30 --> Security Class Initialized
DEBUG - 2019-12-19 10:53:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 10:53:30 --> Input Class Initialized
INFO - 2019-12-19 10:53:30 --> Language Class Initialized
INFO - 2019-12-19 10:53:30 --> Loader Class Initialized
INFO - 2019-12-19 10:53:30 --> Helper loaded: html_helper
INFO - 2019-12-19 10:53:30 --> Helper loaded: url_helper
INFO - 2019-12-19 10:53:30 --> Helper loaded: form_helper
INFO - 2019-12-19 10:53:30 --> Database Driver Class Initialized
INFO - 2019-12-19 10:53:30 --> Form Validation Class Initialized
DEBUG - 2019-12-19 10:53:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 10:53:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 10:53:30 --> Encryption Class Initialized
DEBUG - 2019-12-19 10:53:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 10:53:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 10:53:30 --> Controller Class Initialized
DEBUG - 2019-12-19 10:53:30 --> Create_User constructer got called..
INFO - 2019-12-19 10:53:30 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 10:53:30 --> showing all user from db tblusers...
DEBUG - 2019-12-19 10:53:30 --> show_groups from DB
INFO - 2019-12-19 10:53:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 10:53:30 --> Final output sent to browser
DEBUG - 2019-12-19 10:53:30 --> Total execution time: 0.3775
INFO - 2019-12-19 11:33:51 --> Config Class Initialized
INFO - 2019-12-19 11:33:51 --> Hooks Class Initialized
DEBUG - 2019-12-19 11:33:51 --> UTF-8 Support Enabled
INFO - 2019-12-19 11:33:51 --> Utf8 Class Initialized
INFO - 2019-12-19 11:33:51 --> URI Class Initialized
INFO - 2019-12-19 11:33:51 --> Router Class Initialized
INFO - 2019-12-19 11:33:51 --> Output Class Initialized
INFO - 2019-12-19 11:33:51 --> Security Class Initialized
DEBUG - 2019-12-19 11:33:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 11:33:51 --> Input Class Initialized
INFO - 2019-12-19 11:33:51 --> Language Class Initialized
INFO - 2019-12-19 11:33:51 --> Loader Class Initialized
INFO - 2019-12-19 11:33:51 --> Helper loaded: html_helper
INFO - 2019-12-19 11:33:51 --> Helper loaded: url_helper
INFO - 2019-12-19 11:33:51 --> Helper loaded: form_helper
INFO - 2019-12-19 11:33:51 --> Database Driver Class Initialized
INFO - 2019-12-19 11:33:51 --> Form Validation Class Initialized
DEBUG - 2019-12-19 11:33:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 11:33:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 11:33:51 --> Encryption Class Initialized
DEBUG - 2019-12-19 11:33:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 11:33:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 11:33:51 --> Controller Class Initialized
DEBUG - 2019-12-19 11:33:51 --> Create_User constructer got called..
INFO - 2019-12-19 11:33:51 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 11:33:51 --> showing all user from db tblusers...
DEBUG - 2019-12-19 11:33:51 --> show_groups from DB
INFO - 2019-12-19 11:33:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 11:33:51 --> Final output sent to browser
DEBUG - 2019-12-19 11:33:51 --> Total execution time: 0.3170
INFO - 2019-12-19 12:09:56 --> Config Class Initialized
INFO - 2019-12-19 12:09:56 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:09:57 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:09:57 --> Utf8 Class Initialized
INFO - 2019-12-19 12:09:57 --> URI Class Initialized
INFO - 2019-12-19 12:09:57 --> Router Class Initialized
INFO - 2019-12-19 12:09:57 --> Output Class Initialized
INFO - 2019-12-19 12:09:57 --> Security Class Initialized
DEBUG - 2019-12-19 12:09:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:09:57 --> Input Class Initialized
INFO - 2019-12-19 12:09:57 --> Language Class Initialized
INFO - 2019-12-19 12:09:57 --> Loader Class Initialized
INFO - 2019-12-19 12:09:57 --> Helper loaded: html_helper
INFO - 2019-12-19 12:09:57 --> Helper loaded: url_helper
INFO - 2019-12-19 12:09:57 --> Helper loaded: form_helper
INFO - 2019-12-19 12:09:57 --> Database Driver Class Initialized
INFO - 2019-12-19 12:09:57 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:09:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:09:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:09:57 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:09:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:09:57 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:09:57 --> Controller Class Initialized
ERROR - 2019-12-19 12:09:57 --> Severity: error --> Exception: Call to a member function add_sub_group() on null C:\xampp\htdocs\oneoss\application\controllers\Test.php 131
INFO - 2019-12-19 12:10:10 --> Config Class Initialized
INFO - 2019-12-19 12:10:10 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:10:10 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:10:10 --> Utf8 Class Initialized
INFO - 2019-12-19 12:10:10 --> URI Class Initialized
INFO - 2019-12-19 12:10:10 --> Router Class Initialized
INFO - 2019-12-19 12:10:10 --> Output Class Initialized
INFO - 2019-12-19 12:10:10 --> Security Class Initialized
DEBUG - 2019-12-19 12:10:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:10:10 --> Input Class Initialized
INFO - 2019-12-19 12:10:10 --> Language Class Initialized
INFO - 2019-12-19 12:10:10 --> Loader Class Initialized
INFO - 2019-12-19 12:10:10 --> Helper loaded: html_helper
INFO - 2019-12-19 12:10:10 --> Helper loaded: url_helper
INFO - 2019-12-19 12:10:10 --> Helper loaded: form_helper
INFO - 2019-12-19 12:10:10 --> Database Driver Class Initialized
INFO - 2019-12-19 12:10:10 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:10:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:10:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:10:10 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:10:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:10:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:10:10 --> Controller Class Initialized
ERROR - 2019-12-19 12:10:10 --> Severity: error --> Exception: Call to a member function add_sub_group() on null C:\xampp\htdocs\oneoss\application\controllers\Test.php 131
INFO - 2019-12-19 12:10:42 --> Config Class Initialized
INFO - 2019-12-19 12:10:42 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:10:42 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:10:42 --> Utf8 Class Initialized
INFO - 2019-12-19 12:10:42 --> URI Class Initialized
INFO - 2019-12-19 12:10:42 --> Router Class Initialized
INFO - 2019-12-19 12:10:42 --> Output Class Initialized
INFO - 2019-12-19 12:10:42 --> Security Class Initialized
DEBUG - 2019-12-19 12:10:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:10:42 --> Input Class Initialized
INFO - 2019-12-19 12:10:42 --> Language Class Initialized
INFO - 2019-12-19 12:10:42 --> Loader Class Initialized
INFO - 2019-12-19 12:10:42 --> Helper loaded: html_helper
INFO - 2019-12-19 12:10:42 --> Helper loaded: url_helper
INFO - 2019-12-19 12:10:42 --> Helper loaded: form_helper
INFO - 2019-12-19 12:10:43 --> Database Driver Class Initialized
INFO - 2019-12-19 12:10:43 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:10:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:10:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:10:43 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:10:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:10:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:10:43 --> Controller Class Initialized
ERROR - 2019-12-19 12:10:43 --> Severity: error --> Exception: Call to a member function add_sub_group() on null C:\xampp\htdocs\oneoss\application\controllers\Test.php 131
INFO - 2019-12-19 12:11:08 --> Config Class Initialized
INFO - 2019-12-19 12:11:08 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:11:08 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:11:08 --> Utf8 Class Initialized
INFO - 2019-12-19 12:11:08 --> URI Class Initialized
INFO - 2019-12-19 12:11:08 --> Router Class Initialized
INFO - 2019-12-19 12:11:08 --> Output Class Initialized
INFO - 2019-12-19 12:11:08 --> Security Class Initialized
DEBUG - 2019-12-19 12:11:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:11:08 --> Input Class Initialized
INFO - 2019-12-19 12:11:08 --> Language Class Initialized
INFO - 2019-12-19 12:11:08 --> Loader Class Initialized
INFO - 2019-12-19 12:11:08 --> Helper loaded: html_helper
INFO - 2019-12-19 12:11:08 --> Helper loaded: url_helper
INFO - 2019-12-19 12:11:08 --> Helper loaded: form_helper
INFO - 2019-12-19 12:11:08 --> Database Driver Class Initialized
INFO - 2019-12-19 12:11:08 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:11:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:11:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:11:08 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:11:08 --> Controller Class Initialized
INFO - 2019-12-19 12:11:08 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:11:08 --> Final output sent to browser
DEBUG - 2019-12-19 12:11:08 --> Total execution time: 0.4350
INFO - 2019-12-19 12:11:22 --> Config Class Initialized
INFO - 2019-12-19 12:11:22 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:11:22 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:11:22 --> Utf8 Class Initialized
INFO - 2019-12-19 12:11:22 --> URI Class Initialized
INFO - 2019-12-19 12:11:22 --> Router Class Initialized
INFO - 2019-12-19 12:11:22 --> Output Class Initialized
INFO - 2019-12-19 12:11:22 --> Security Class Initialized
DEBUG - 2019-12-19 12:11:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:11:22 --> Input Class Initialized
INFO - 2019-12-19 12:11:22 --> Language Class Initialized
INFO - 2019-12-19 12:11:22 --> Loader Class Initialized
INFO - 2019-12-19 12:11:22 --> Helper loaded: html_helper
INFO - 2019-12-19 12:11:22 --> Helper loaded: url_helper
INFO - 2019-12-19 12:11:22 --> Helper loaded: form_helper
INFO - 2019-12-19 12:11:22 --> Database Driver Class Initialized
INFO - 2019-12-19 12:11:22 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:11:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:11:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:11:22 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:11:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:11:22 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:11:22 --> Controller Class Initialized
INFO - 2019-12-19 12:11:22 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:11:22 --> Final output sent to browser
DEBUG - 2019-12-19 12:11:22 --> Total execution time: 0.3430
INFO - 2019-12-19 12:11:40 --> Config Class Initialized
INFO - 2019-12-19 12:11:40 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:11:40 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:11:40 --> Utf8 Class Initialized
INFO - 2019-12-19 12:11:40 --> URI Class Initialized
INFO - 2019-12-19 12:11:40 --> Router Class Initialized
INFO - 2019-12-19 12:11:40 --> Output Class Initialized
INFO - 2019-12-19 12:11:40 --> Security Class Initialized
DEBUG - 2019-12-19 12:11:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:11:40 --> Input Class Initialized
INFO - 2019-12-19 12:11:40 --> Language Class Initialized
INFO - 2019-12-19 12:11:40 --> Loader Class Initialized
INFO - 2019-12-19 12:11:40 --> Helper loaded: html_helper
INFO - 2019-12-19 12:11:40 --> Helper loaded: url_helper
INFO - 2019-12-19 12:11:40 --> Helper loaded: form_helper
INFO - 2019-12-19 12:11:40 --> Database Driver Class Initialized
INFO - 2019-12-19 12:11:40 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:11:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:11:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:11:40 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:11:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:11:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:11:40 --> Controller Class Initialized
INFO - 2019-12-19 12:11:40 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:11:40 --> Final output sent to browser
DEBUG - 2019-12-19 12:11:40 --> Total execution time: 0.3980
INFO - 2019-12-19 12:12:46 --> Config Class Initialized
INFO - 2019-12-19 12:12:46 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:12:46 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:12:46 --> Utf8 Class Initialized
INFO - 2019-12-19 12:12:46 --> URI Class Initialized
INFO - 2019-12-19 12:12:46 --> Router Class Initialized
INFO - 2019-12-19 12:12:46 --> Output Class Initialized
INFO - 2019-12-19 12:12:46 --> Security Class Initialized
DEBUG - 2019-12-19 12:12:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:12:46 --> Input Class Initialized
INFO - 2019-12-19 12:12:46 --> Language Class Initialized
INFO - 2019-12-19 12:12:46 --> Loader Class Initialized
INFO - 2019-12-19 12:12:46 --> Helper loaded: html_helper
INFO - 2019-12-19 12:12:46 --> Helper loaded: url_helper
INFO - 2019-12-19 12:12:46 --> Helper loaded: form_helper
INFO - 2019-12-19 12:12:46 --> Database Driver Class Initialized
INFO - 2019-12-19 12:12:46 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:12:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:12:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:12:46 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:12:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:12:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:12:46 --> Controller Class Initialized
INFO - 2019-12-19 12:12:46 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:12:46 --> Final output sent to browser
DEBUG - 2019-12-19 12:12:46 --> Total execution time: 0.3400
INFO - 2019-12-19 12:13:04 --> Config Class Initialized
INFO - 2019-12-19 12:13:04 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:13:04 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:13:04 --> Utf8 Class Initialized
INFO - 2019-12-19 12:13:04 --> URI Class Initialized
INFO - 2019-12-19 12:13:04 --> Router Class Initialized
INFO - 2019-12-19 12:13:04 --> Output Class Initialized
INFO - 2019-12-19 12:13:04 --> Security Class Initialized
DEBUG - 2019-12-19 12:13:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:13:04 --> Input Class Initialized
INFO - 2019-12-19 12:13:04 --> Language Class Initialized
INFO - 2019-12-19 12:13:04 --> Loader Class Initialized
INFO - 2019-12-19 12:13:04 --> Helper loaded: html_helper
INFO - 2019-12-19 12:13:04 --> Helper loaded: url_helper
INFO - 2019-12-19 12:13:04 --> Helper loaded: form_helper
INFO - 2019-12-19 12:13:04 --> Database Driver Class Initialized
INFO - 2019-12-19 12:13:04 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:13:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:13:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:13:04 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:13:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:13:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:13:04 --> Controller Class Initialized
INFO - 2019-12-19 12:13:04 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:13:04 --> Final output sent to browser
DEBUG - 2019-12-19 12:13:04 --> Total execution time: 0.3830
INFO - 2019-12-19 12:16:35 --> Config Class Initialized
INFO - 2019-12-19 12:16:35 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:16:35 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:16:35 --> Utf8 Class Initialized
INFO - 2019-12-19 12:16:35 --> URI Class Initialized
INFO - 2019-12-19 12:16:35 --> Router Class Initialized
INFO - 2019-12-19 12:16:35 --> Output Class Initialized
INFO - 2019-12-19 12:16:35 --> Security Class Initialized
DEBUG - 2019-12-19 12:16:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:16:35 --> Input Class Initialized
INFO - 2019-12-19 12:16:35 --> Language Class Initialized
INFO - 2019-12-19 12:16:35 --> Loader Class Initialized
INFO - 2019-12-19 12:16:35 --> Helper loaded: html_helper
INFO - 2019-12-19 12:16:35 --> Helper loaded: url_helper
INFO - 2019-12-19 12:16:35 --> Helper loaded: form_helper
INFO - 2019-12-19 12:16:35 --> Database Driver Class Initialized
INFO - 2019-12-19 12:16:35 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:16:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:16:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:16:35 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:16:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:16:35 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:16:35 --> Controller Class Initialized
INFO - 2019-12-19 12:16:36 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:16:36 --> Final output sent to browser
DEBUG - 2019-12-19 12:16:36 --> Total execution time: 0.3820
INFO - 2019-12-19 12:16:37 --> Config Class Initialized
INFO - 2019-12-19 12:16:37 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:16:37 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:16:37 --> Utf8 Class Initialized
INFO - 2019-12-19 12:16:37 --> URI Class Initialized
INFO - 2019-12-19 12:16:37 --> Router Class Initialized
INFO - 2019-12-19 12:16:37 --> Output Class Initialized
INFO - 2019-12-19 12:16:37 --> Security Class Initialized
DEBUG - 2019-12-19 12:16:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:16:37 --> Input Class Initialized
INFO - 2019-12-19 12:16:37 --> Language Class Initialized
INFO - 2019-12-19 12:16:37 --> Loader Class Initialized
INFO - 2019-12-19 12:16:37 --> Helper loaded: html_helper
INFO - 2019-12-19 12:16:37 --> Helper loaded: url_helper
INFO - 2019-12-19 12:16:37 --> Helper loaded: form_helper
INFO - 2019-12-19 12:16:37 --> Database Driver Class Initialized
INFO - 2019-12-19 12:16:37 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:16:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:16:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:16:38 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:16:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:16:38 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:16:38 --> Controller Class Initialized
INFO - 2019-12-19 12:16:38 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:16:38 --> Final output sent to browser
DEBUG - 2019-12-19 12:16:38 --> Total execution time: 0.3540
INFO - 2019-12-19 12:17:19 --> Config Class Initialized
INFO - 2019-12-19 12:17:19 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:17:19 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:17:19 --> Utf8 Class Initialized
INFO - 2019-12-19 12:17:19 --> URI Class Initialized
INFO - 2019-12-19 12:17:19 --> Router Class Initialized
INFO - 2019-12-19 12:17:19 --> Output Class Initialized
INFO - 2019-12-19 12:17:19 --> Security Class Initialized
DEBUG - 2019-12-19 12:17:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:17:19 --> Input Class Initialized
INFO - 2019-12-19 12:17:19 --> Language Class Initialized
INFO - 2019-12-19 12:17:19 --> Loader Class Initialized
INFO - 2019-12-19 12:17:19 --> Helper loaded: html_helper
INFO - 2019-12-19 12:17:19 --> Helper loaded: url_helper
INFO - 2019-12-19 12:17:19 --> Helper loaded: form_helper
INFO - 2019-12-19 12:17:19 --> Database Driver Class Initialized
INFO - 2019-12-19 12:17:19 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:17:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:17:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:17:19 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:17:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:17:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:17:19 --> Controller Class Initialized
INFO - 2019-12-19 12:17:19 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:17:19 --> Final output sent to browser
DEBUG - 2019-12-19 12:17:19 --> Total execution time: 0.3820
INFO - 2019-12-19 12:17:37 --> Config Class Initialized
INFO - 2019-12-19 12:17:37 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:17:37 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:17:37 --> Utf8 Class Initialized
INFO - 2019-12-19 12:17:37 --> URI Class Initialized
INFO - 2019-12-19 12:17:37 --> Router Class Initialized
INFO - 2019-12-19 12:17:37 --> Output Class Initialized
INFO - 2019-12-19 12:17:37 --> Security Class Initialized
DEBUG - 2019-12-19 12:17:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:17:37 --> Input Class Initialized
INFO - 2019-12-19 12:17:37 --> Language Class Initialized
INFO - 2019-12-19 12:17:37 --> Loader Class Initialized
INFO - 2019-12-19 12:17:37 --> Helper loaded: html_helper
INFO - 2019-12-19 12:17:37 --> Helper loaded: url_helper
INFO - 2019-12-19 12:17:37 --> Helper loaded: form_helper
INFO - 2019-12-19 12:17:37 --> Database Driver Class Initialized
INFO - 2019-12-19 12:17:37 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:17:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:17:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:17:37 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:17:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:17:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:17:37 --> Controller Class Initialized
INFO - 2019-12-19 12:17:37 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:17:37 --> Final output sent to browser
DEBUG - 2019-12-19 12:17:37 --> Total execution time: 0.3650
INFO - 2019-12-19 12:18:04 --> Config Class Initialized
INFO - 2019-12-19 12:18:04 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:18:04 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:18:04 --> Utf8 Class Initialized
INFO - 2019-12-19 12:18:04 --> URI Class Initialized
INFO - 2019-12-19 12:18:04 --> Router Class Initialized
INFO - 2019-12-19 12:18:04 --> Output Class Initialized
INFO - 2019-12-19 12:18:04 --> Security Class Initialized
DEBUG - 2019-12-19 12:18:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:18:04 --> Input Class Initialized
INFO - 2019-12-19 12:18:04 --> Language Class Initialized
INFO - 2019-12-19 12:18:04 --> Loader Class Initialized
INFO - 2019-12-19 12:18:04 --> Helper loaded: html_helper
INFO - 2019-12-19 12:18:04 --> Helper loaded: url_helper
INFO - 2019-12-19 12:18:04 --> Helper loaded: form_helper
INFO - 2019-12-19 12:18:04 --> Database Driver Class Initialized
INFO - 2019-12-19 12:18:04 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:18:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:18:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:18:04 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:18:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:18:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:18:04 --> Controller Class Initialized
INFO - 2019-12-19 12:18:04 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:18:04 --> Final output sent to browser
DEBUG - 2019-12-19 12:18:04 --> Total execution time: 0.3850
INFO - 2019-12-19 12:18:14 --> Config Class Initialized
INFO - 2019-12-19 12:18:14 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:18:14 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:18:14 --> Utf8 Class Initialized
INFO - 2019-12-19 12:18:14 --> URI Class Initialized
INFO - 2019-12-19 12:18:14 --> Router Class Initialized
INFO - 2019-12-19 12:18:14 --> Output Class Initialized
INFO - 2019-12-19 12:18:14 --> Security Class Initialized
DEBUG - 2019-12-19 12:18:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:18:14 --> Input Class Initialized
INFO - 2019-12-19 12:18:14 --> Language Class Initialized
INFO - 2019-12-19 12:18:14 --> Loader Class Initialized
INFO - 2019-12-19 12:18:14 --> Helper loaded: html_helper
INFO - 2019-12-19 12:18:14 --> Helper loaded: url_helper
INFO - 2019-12-19 12:18:14 --> Helper loaded: form_helper
INFO - 2019-12-19 12:18:14 --> Database Driver Class Initialized
INFO - 2019-12-19 12:18:14 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:18:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:18:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:18:14 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:18:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:18:15 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:18:15 --> Controller Class Initialized
INFO - 2019-12-19 12:18:15 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:18:15 --> Final output sent to browser
DEBUG - 2019-12-19 12:18:15 --> Total execution time: 0.3630
INFO - 2019-12-19 12:38:29 --> Config Class Initialized
INFO - 2019-12-19 12:38:29 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:38:29 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:38:29 --> Utf8 Class Initialized
INFO - 2019-12-19 12:38:29 --> URI Class Initialized
INFO - 2019-12-19 12:38:29 --> Router Class Initialized
INFO - 2019-12-19 12:38:29 --> Output Class Initialized
INFO - 2019-12-19 12:38:29 --> Security Class Initialized
DEBUG - 2019-12-19 12:38:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:38:29 --> Input Class Initialized
INFO - 2019-12-19 12:38:29 --> Language Class Initialized
INFO - 2019-12-19 12:38:29 --> Loader Class Initialized
INFO - 2019-12-19 12:38:29 --> Helper loaded: html_helper
INFO - 2019-12-19 12:38:29 --> Helper loaded: url_helper
INFO - 2019-12-19 12:38:29 --> Helper loaded: form_helper
INFO - 2019-12-19 12:38:29 --> Database Driver Class Initialized
INFO - 2019-12-19 12:38:29 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:38:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:38:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:38:29 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:38:29 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:38:29 --> Controller Class Initialized
DEBUG - 2019-12-19 12:38:29 --> Create_User constructer got called..
INFO - 2019-12-19 12:38:29 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 12:38:29 --> showing all user from db tblusers...
DEBUG - 2019-12-19 12:38:29 --> show_groups from DB
INFO - 2019-12-19 12:38:29 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 12:38:29 --> Final output sent to browser
DEBUG - 2019-12-19 12:38:29 --> Total execution time: 0.3500
INFO - 2019-12-19 12:38:50 --> Config Class Initialized
INFO - 2019-12-19 12:38:50 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:38:50 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:38:50 --> Utf8 Class Initialized
INFO - 2019-12-19 12:38:50 --> URI Class Initialized
INFO - 2019-12-19 12:38:50 --> Router Class Initialized
INFO - 2019-12-19 12:38:50 --> Output Class Initialized
INFO - 2019-12-19 12:38:50 --> Security Class Initialized
DEBUG - 2019-12-19 12:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:38:50 --> Input Class Initialized
INFO - 2019-12-19 12:38:50 --> Language Class Initialized
INFO - 2019-12-19 12:38:50 --> Loader Class Initialized
INFO - 2019-12-19 12:38:50 --> Helper loaded: html_helper
INFO - 2019-12-19 12:38:50 --> Helper loaded: url_helper
INFO - 2019-12-19 12:38:50 --> Helper loaded: form_helper
INFO - 2019-12-19 12:38:50 --> Database Driver Class Initialized
INFO - 2019-12-19 12:38:50 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:38:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:38:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:38:50 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:38:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:38:50 --> Controller Class Initialized
DEBUG - 2019-12-19 12:38:50 --> Create_User constructer got called..
ERROR - 2019-12-19 12:38:50 --> Severity: error --> Exception: Call to a member function modify_group() on null C:\xampp\htdocs\oneoss\application\controllers\user\Create_User.php 269
INFO - 2019-12-19 12:38:53 --> Config Class Initialized
INFO - 2019-12-19 12:38:53 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:38:54 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:38:54 --> Utf8 Class Initialized
INFO - 2019-12-19 12:38:54 --> URI Class Initialized
INFO - 2019-12-19 12:38:54 --> Router Class Initialized
INFO - 2019-12-19 12:38:54 --> Output Class Initialized
INFO - 2019-12-19 12:38:54 --> Security Class Initialized
DEBUG - 2019-12-19 12:38:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:38:54 --> Input Class Initialized
INFO - 2019-12-19 12:38:54 --> Language Class Initialized
INFO - 2019-12-19 12:38:54 --> Loader Class Initialized
INFO - 2019-12-19 12:38:54 --> Helper loaded: html_helper
INFO - 2019-12-19 12:38:54 --> Helper loaded: url_helper
INFO - 2019-12-19 12:38:54 --> Helper loaded: form_helper
INFO - 2019-12-19 12:38:54 --> Database Driver Class Initialized
INFO - 2019-12-19 12:38:54 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:38:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:38:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:38:54 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:38:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:38:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:38:54 --> Controller Class Initialized
DEBUG - 2019-12-19 12:38:54 --> Create_User constructer got called..
ERROR - 2019-12-19 12:38:54 --> Severity: error --> Exception: Call to a member function modify_group() on null C:\xampp\htdocs\oneoss\application\controllers\user\Create_User.php 269
INFO - 2019-12-19 12:40:36 --> Config Class Initialized
INFO - 2019-12-19 12:40:36 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:40:36 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:40:36 --> Utf8 Class Initialized
INFO - 2019-12-19 12:40:36 --> URI Class Initialized
INFO - 2019-12-19 12:40:36 --> Router Class Initialized
INFO - 2019-12-19 12:40:36 --> Output Class Initialized
INFO - 2019-12-19 12:40:36 --> Security Class Initialized
DEBUG - 2019-12-19 12:40:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:40:36 --> Input Class Initialized
INFO - 2019-12-19 12:40:36 --> Language Class Initialized
INFO - 2019-12-19 12:40:36 --> Loader Class Initialized
INFO - 2019-12-19 12:40:36 --> Helper loaded: html_helper
INFO - 2019-12-19 12:40:36 --> Helper loaded: url_helper
INFO - 2019-12-19 12:40:36 --> Helper loaded: form_helper
INFO - 2019-12-19 12:40:36 --> Database Driver Class Initialized
INFO - 2019-12-19 12:40:36 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:40:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:40:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:40:36 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:40:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:40:36 --> Controller Class Initialized
DEBUG - 2019-12-19 12:40:36 --> Create_User constructer got called..
INFO - 2019-12-19 12:40:36 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 12:40:36 --> showing all user from db tblusers...
DEBUG - 2019-12-19 12:40:36 --> show_groups from DB
INFO - 2019-12-19 12:40:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 12:40:36 --> Final output sent to browser
DEBUG - 2019-12-19 12:40:36 --> Total execution time: 0.3590
INFO - 2019-12-19 12:40:53 --> Config Class Initialized
INFO - 2019-12-19 12:40:53 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:40:53 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:40:53 --> Utf8 Class Initialized
INFO - 2019-12-19 12:40:53 --> URI Class Initialized
INFO - 2019-12-19 12:40:53 --> Router Class Initialized
INFO - 2019-12-19 12:40:53 --> Output Class Initialized
INFO - 2019-12-19 12:40:53 --> Security Class Initialized
DEBUG - 2019-12-19 12:40:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:40:53 --> Input Class Initialized
INFO - 2019-12-19 12:40:53 --> Language Class Initialized
INFO - 2019-12-19 12:40:53 --> Loader Class Initialized
INFO - 2019-12-19 12:40:53 --> Helper loaded: html_helper
INFO - 2019-12-19 12:40:53 --> Helper loaded: url_helper
INFO - 2019-12-19 12:40:53 --> Helper loaded: form_helper
INFO - 2019-12-19 12:40:53 --> Database Driver Class Initialized
INFO - 2019-12-19 12:40:53 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:40:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:40:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:40:53 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:40:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:40:53 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:40:53 --> Controller Class Initialized
DEBUG - 2019-12-19 12:40:53 --> Create_User constructer got called..
ERROR - 2019-12-19 12:40:53 --> Severity: error --> Exception: Call to a member function modify_group() on null C:\xampp\htdocs\oneoss\application\controllers\user\Create_User.php 269
INFO - 2019-12-19 12:41:00 --> Config Class Initialized
INFO - 2019-12-19 12:41:00 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:41:00 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:41:00 --> Utf8 Class Initialized
INFO - 2019-12-19 12:41:00 --> URI Class Initialized
INFO - 2019-12-19 12:41:00 --> Router Class Initialized
INFO - 2019-12-19 12:41:00 --> Output Class Initialized
INFO - 2019-12-19 12:41:00 --> Security Class Initialized
DEBUG - 2019-12-19 12:41:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:41:00 --> Input Class Initialized
INFO - 2019-12-19 12:41:00 --> Language Class Initialized
INFO - 2019-12-19 12:41:00 --> Loader Class Initialized
INFO - 2019-12-19 12:41:00 --> Helper loaded: html_helper
INFO - 2019-12-19 12:41:00 --> Helper loaded: url_helper
INFO - 2019-12-19 12:41:00 --> Helper loaded: form_helper
INFO - 2019-12-19 12:41:00 --> Database Driver Class Initialized
INFO - 2019-12-19 12:41:00 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:41:00 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:41:00 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:41:00 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:41:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:41:00 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:41:00 --> Controller Class Initialized
DEBUG - 2019-12-19 12:41:00 --> Create_User constructer got called..
ERROR - 2019-12-19 12:41:00 --> Severity: error --> Exception: Call to a member function modify_group() on null C:\xampp\htdocs\oneoss\application\controllers\user\Create_User.php 269
INFO - 2019-12-19 12:42:28 --> Config Class Initialized
INFO - 2019-12-19 12:42:28 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:42:28 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:42:28 --> Utf8 Class Initialized
INFO - 2019-12-19 12:42:28 --> URI Class Initialized
INFO - 2019-12-19 12:42:28 --> Router Class Initialized
INFO - 2019-12-19 12:42:28 --> Output Class Initialized
INFO - 2019-12-19 12:42:28 --> Security Class Initialized
DEBUG - 2019-12-19 12:42:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:42:28 --> Input Class Initialized
INFO - 2019-12-19 12:42:28 --> Language Class Initialized
INFO - 2019-12-19 12:42:28 --> Loader Class Initialized
INFO - 2019-12-19 12:42:28 --> Helper loaded: html_helper
INFO - 2019-12-19 12:42:29 --> Helper loaded: url_helper
INFO - 2019-12-19 12:42:29 --> Helper loaded: form_helper
INFO - 2019-12-19 12:42:29 --> Database Driver Class Initialized
INFO - 2019-12-19 12:42:29 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:42:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:42:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:42:29 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:42:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:42:29 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:42:29 --> Controller Class Initialized
DEBUG - 2019-12-19 12:42:29 --> Create_User constructer got called..
INFO - 2019-12-19 12:42:29 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 12:42:29 --> showing all user from db tblusers...
DEBUG - 2019-12-19 12:42:29 --> show_groups from DB
INFO - 2019-12-19 12:42:29 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 12:42:29 --> Final output sent to browser
DEBUG - 2019-12-19 12:42:29 --> Total execution time: 0.3480
INFO - 2019-12-19 12:42:42 --> Config Class Initialized
INFO - 2019-12-19 12:42:42 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:42:42 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:42:42 --> Utf8 Class Initialized
INFO - 2019-12-19 12:42:42 --> URI Class Initialized
INFO - 2019-12-19 12:42:42 --> Router Class Initialized
INFO - 2019-12-19 12:42:42 --> Output Class Initialized
INFO - 2019-12-19 12:42:42 --> Security Class Initialized
DEBUG - 2019-12-19 12:42:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:42:42 --> Input Class Initialized
INFO - 2019-12-19 12:42:42 --> Language Class Initialized
INFO - 2019-12-19 12:42:42 --> Loader Class Initialized
INFO - 2019-12-19 12:42:42 --> Helper loaded: html_helper
INFO - 2019-12-19 12:42:42 --> Helper loaded: url_helper
INFO - 2019-12-19 12:42:43 --> Helper loaded: form_helper
INFO - 2019-12-19 12:42:43 --> Database Driver Class Initialized
INFO - 2019-12-19 12:42:43 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:42:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:42:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:42:43 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:42:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:42:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:42:43 --> Controller Class Initialized
DEBUG - 2019-12-19 12:42:43 --> Create_User constructer got called..
ERROR - 2019-12-19 12:42:43 --> Severity: error --> Exception: Call to a member function modify_group() on null C:\xampp\htdocs\oneoss\application\controllers\user\Create_User.php 269
INFO - 2019-12-19 12:54:44 --> Config Class Initialized
INFO - 2019-12-19 12:54:44 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:54:44 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:54:44 --> Utf8 Class Initialized
INFO - 2019-12-19 12:54:44 --> URI Class Initialized
INFO - 2019-12-19 12:54:44 --> Router Class Initialized
INFO - 2019-12-19 12:54:44 --> Output Class Initialized
INFO - 2019-12-19 12:54:44 --> Security Class Initialized
DEBUG - 2019-12-19 12:54:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:54:44 --> Input Class Initialized
INFO - 2019-12-19 12:54:44 --> Language Class Initialized
INFO - 2019-12-19 12:54:44 --> Loader Class Initialized
INFO - 2019-12-19 12:54:44 --> Helper loaded: html_helper
INFO - 2019-12-19 12:54:44 --> Helper loaded: url_helper
INFO - 2019-12-19 12:54:44 --> Helper loaded: form_helper
INFO - 2019-12-19 12:54:44 --> Database Driver Class Initialized
INFO - 2019-12-19 12:54:44 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:54:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:54:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:54:44 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:54:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:54:44 --> Controller Class Initialized
DEBUG - 2019-12-19 12:54:44 --> Create_User constructer got called..
INFO - 2019-12-19 12:54:44 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 12:54:44 --> showing all user from db tblusers...
DEBUG - 2019-12-19 12:54:44 --> show_groups from DB
INFO - 2019-12-19 12:54:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 12:54:44 --> Final output sent to browser
DEBUG - 2019-12-19 12:54:44 --> Total execution time: 0.3830
INFO - 2019-12-19 12:55:05 --> Config Class Initialized
INFO - 2019-12-19 12:55:05 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:55:05 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:55:05 --> Utf8 Class Initialized
INFO - 2019-12-19 12:55:05 --> URI Class Initialized
INFO - 2019-12-19 12:55:05 --> Router Class Initialized
INFO - 2019-12-19 12:55:05 --> Output Class Initialized
INFO - 2019-12-19 12:55:05 --> Security Class Initialized
DEBUG - 2019-12-19 12:55:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:55:05 --> Input Class Initialized
INFO - 2019-12-19 12:55:05 --> Language Class Initialized
INFO - 2019-12-19 12:55:05 --> Loader Class Initialized
INFO - 2019-12-19 12:55:05 --> Helper loaded: html_helper
INFO - 2019-12-19 12:55:05 --> Helper loaded: url_helper
INFO - 2019-12-19 12:55:05 --> Helper loaded: form_helper
INFO - 2019-12-19 12:55:05 --> Database Driver Class Initialized
INFO - 2019-12-19 12:55:05 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:55:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:55:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:55:05 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:55:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:55:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:55:06 --> Controller Class Initialized
DEBUG - 2019-12-19 12:55:06 --> Create_User constructer got called..
INFO - 2019-12-19 12:55:06 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:55:06 --> Final output sent to browser
DEBUG - 2019-12-19 12:55:06 --> Total execution time: 0.3030
INFO - 2019-12-19 12:55:06 --> Config Class Initialized
INFO - 2019-12-19 12:55:06 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:55:06 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:55:06 --> Utf8 Class Initialized
INFO - 2019-12-19 12:55:06 --> URI Class Initialized
INFO - 2019-12-19 12:55:06 --> Router Class Initialized
INFO - 2019-12-19 12:55:06 --> Output Class Initialized
INFO - 2019-12-19 12:55:06 --> Security Class Initialized
DEBUG - 2019-12-19 12:55:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:55:06 --> Input Class Initialized
INFO - 2019-12-19 12:55:06 --> Language Class Initialized
INFO - 2019-12-19 12:55:06 --> Loader Class Initialized
INFO - 2019-12-19 12:55:06 --> Helper loaded: html_helper
INFO - 2019-12-19 12:55:06 --> Helper loaded: url_helper
INFO - 2019-12-19 12:55:06 --> Helper loaded: form_helper
INFO - 2019-12-19 12:55:06 --> Database Driver Class Initialized
INFO - 2019-12-19 12:55:06 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:55:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:55:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:55:06 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:55:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:55:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:55:06 --> Controller Class Initialized
DEBUG - 2019-12-19 12:55:06 --> Create_User constructer got called..
INFO - 2019-12-19 12:55:06 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 12:55:06 --> showing all user from db tblusers...
DEBUG - 2019-12-19 12:55:06 --> show_groups from DB
INFO - 2019-12-19 12:55:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 12:55:06 --> Final output sent to browser
DEBUG - 2019-12-19 12:55:06 --> Total execution time: 0.2790
INFO - 2019-12-19 12:55:12 --> Config Class Initialized
INFO - 2019-12-19 12:55:12 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:55:12 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:55:12 --> Utf8 Class Initialized
INFO - 2019-12-19 12:55:12 --> URI Class Initialized
INFO - 2019-12-19 12:55:12 --> Router Class Initialized
INFO - 2019-12-19 12:55:12 --> Output Class Initialized
INFO - 2019-12-19 12:55:12 --> Security Class Initialized
DEBUG - 2019-12-19 12:55:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:55:12 --> Input Class Initialized
INFO - 2019-12-19 12:55:12 --> Language Class Initialized
INFO - 2019-12-19 12:55:12 --> Loader Class Initialized
INFO - 2019-12-19 12:55:12 --> Helper loaded: html_helper
INFO - 2019-12-19 12:55:12 --> Helper loaded: url_helper
INFO - 2019-12-19 12:55:12 --> Helper loaded: form_helper
INFO - 2019-12-19 12:55:12 --> Database Driver Class Initialized
INFO - 2019-12-19 12:55:12 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:55:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:55:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:55:12 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:55:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:55:12 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:55:12 --> Controller Class Initialized
DEBUG - 2019-12-19 12:55:12 --> Create_User constructer got called..
INFO - 2019-12-19 12:55:12 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 12:55:12 --> showing all user from db tblusers...
DEBUG - 2019-12-19 12:55:12 --> show_groups from DB
INFO - 2019-12-19 12:55:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 12:55:12 --> Final output sent to browser
DEBUG - 2019-12-19 12:55:12 --> Total execution time: 0.3260
INFO - 2019-12-19 12:55:39 --> Config Class Initialized
INFO - 2019-12-19 12:55:39 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:55:39 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:55:39 --> Utf8 Class Initialized
INFO - 2019-12-19 12:55:39 --> URI Class Initialized
INFO - 2019-12-19 12:55:39 --> Router Class Initialized
INFO - 2019-12-19 12:55:39 --> Output Class Initialized
INFO - 2019-12-19 12:55:39 --> Security Class Initialized
DEBUG - 2019-12-19 12:55:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:55:39 --> Input Class Initialized
INFO - 2019-12-19 12:55:39 --> Language Class Initialized
INFO - 2019-12-19 12:55:39 --> Loader Class Initialized
INFO - 2019-12-19 12:55:39 --> Helper loaded: html_helper
INFO - 2019-12-19 12:55:39 --> Helper loaded: url_helper
INFO - 2019-12-19 12:55:39 --> Helper loaded: form_helper
INFO - 2019-12-19 12:55:39 --> Database Driver Class Initialized
INFO - 2019-12-19 12:55:39 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:55:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:55:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:55:39 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:55:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:55:39 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:55:39 --> Controller Class Initialized
DEBUG - 2019-12-19 12:55:39 --> Create_User constructer got called..
INFO - 2019-12-19 12:55:39 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:55:39 --> Final output sent to browser
DEBUG - 2019-12-19 12:55:39 --> Total execution time: 0.3540
INFO - 2019-12-19 12:55:40 --> Config Class Initialized
INFO - 2019-12-19 12:55:40 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:55:40 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:55:40 --> Utf8 Class Initialized
INFO - 2019-12-19 12:55:40 --> URI Class Initialized
INFO - 2019-12-19 12:55:40 --> Router Class Initialized
INFO - 2019-12-19 12:55:40 --> Output Class Initialized
INFO - 2019-12-19 12:55:40 --> Security Class Initialized
DEBUG - 2019-12-19 12:55:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:55:40 --> Input Class Initialized
INFO - 2019-12-19 12:55:40 --> Language Class Initialized
INFO - 2019-12-19 12:55:40 --> Loader Class Initialized
INFO - 2019-12-19 12:55:40 --> Helper loaded: html_helper
INFO - 2019-12-19 12:55:40 --> Helper loaded: url_helper
INFO - 2019-12-19 12:55:40 --> Helper loaded: form_helper
INFO - 2019-12-19 12:55:40 --> Database Driver Class Initialized
INFO - 2019-12-19 12:55:40 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:55:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:55:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:55:40 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:55:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:55:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:55:40 --> Controller Class Initialized
DEBUG - 2019-12-19 12:55:40 --> Create_User constructer got called..
INFO - 2019-12-19 12:55:40 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 12:55:40 --> showing all user from db tblusers...
DEBUG - 2019-12-19 12:55:40 --> show_groups from DB
INFO - 2019-12-19 12:55:40 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 12:55:40 --> Final output sent to browser
DEBUG - 2019-12-19 12:55:40 --> Total execution time: 0.4010
INFO - 2019-12-19 12:55:44 --> Config Class Initialized
INFO - 2019-12-19 12:55:44 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:55:44 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:55:44 --> Utf8 Class Initialized
INFO - 2019-12-19 12:55:44 --> URI Class Initialized
INFO - 2019-12-19 12:55:44 --> Router Class Initialized
INFO - 2019-12-19 12:55:44 --> Output Class Initialized
INFO - 2019-12-19 12:55:44 --> Security Class Initialized
DEBUG - 2019-12-19 12:55:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:55:44 --> Input Class Initialized
INFO - 2019-12-19 12:55:44 --> Language Class Initialized
INFO - 2019-12-19 12:55:44 --> Loader Class Initialized
INFO - 2019-12-19 12:55:44 --> Helper loaded: html_helper
INFO - 2019-12-19 12:55:44 --> Helper loaded: url_helper
INFO - 2019-12-19 12:55:44 --> Helper loaded: form_helper
INFO - 2019-12-19 12:55:44 --> Database Driver Class Initialized
INFO - 2019-12-19 12:55:44 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:55:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:55:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:55:44 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:55:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:55:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:55:44 --> Controller Class Initialized
DEBUG - 2019-12-19 12:55:44 --> Create_User constructer got called..
INFO - 2019-12-19 12:55:44 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 12:55:44 --> showing all user from db tblusers...
DEBUG - 2019-12-19 12:55:44 --> show_groups from DB
INFO - 2019-12-19 12:55:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 12:55:44 --> Final output sent to browser
DEBUG - 2019-12-19 12:55:44 --> Total execution time: 0.2940
INFO - 2019-12-19 12:57:35 --> Config Class Initialized
INFO - 2019-12-19 12:57:35 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:57:35 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:57:35 --> Utf8 Class Initialized
INFO - 2019-12-19 12:57:35 --> URI Class Initialized
INFO - 2019-12-19 12:57:35 --> Router Class Initialized
INFO - 2019-12-19 12:57:35 --> Output Class Initialized
INFO - 2019-12-19 12:57:35 --> Security Class Initialized
DEBUG - 2019-12-19 12:57:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:57:35 --> Input Class Initialized
INFO - 2019-12-19 12:57:35 --> Language Class Initialized
INFO - 2019-12-19 12:57:35 --> Loader Class Initialized
INFO - 2019-12-19 12:57:35 --> Helper loaded: html_helper
INFO - 2019-12-19 12:57:35 --> Helper loaded: url_helper
INFO - 2019-12-19 12:57:35 --> Helper loaded: form_helper
INFO - 2019-12-19 12:57:36 --> Database Driver Class Initialized
INFO - 2019-12-19 12:57:36 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:57:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:57:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:57:36 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:57:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:57:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:57:36 --> Controller Class Initialized
INFO - 2019-12-19 12:57:36 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:57:36 --> Final output sent to browser
DEBUG - 2019-12-19 12:57:36 --> Total execution time: 0.2590
INFO - 2019-12-19 12:58:02 --> Config Class Initialized
INFO - 2019-12-19 12:58:02 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:58:02 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:58:02 --> Utf8 Class Initialized
INFO - 2019-12-19 12:58:02 --> URI Class Initialized
INFO - 2019-12-19 12:58:02 --> Router Class Initialized
INFO - 2019-12-19 12:58:02 --> Output Class Initialized
INFO - 2019-12-19 12:58:02 --> Security Class Initialized
DEBUG - 2019-12-19 12:58:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:58:02 --> Input Class Initialized
INFO - 2019-12-19 12:58:02 --> Language Class Initialized
INFO - 2019-12-19 12:58:02 --> Loader Class Initialized
INFO - 2019-12-19 12:58:02 --> Helper loaded: html_helper
INFO - 2019-12-19 12:58:02 --> Helper loaded: url_helper
INFO - 2019-12-19 12:58:02 --> Helper loaded: form_helper
INFO - 2019-12-19 12:58:03 --> Database Driver Class Initialized
INFO - 2019-12-19 12:58:03 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:58:03 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:58:03 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:58:03 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:58:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:58:03 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:58:03 --> Controller Class Initialized
INFO - 2019-12-19 12:58:03 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:58:03 --> Final output sent to browser
DEBUG - 2019-12-19 12:58:03 --> Total execution time: 0.3660
INFO - 2019-12-19 12:58:31 --> Config Class Initialized
INFO - 2019-12-19 12:58:31 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:58:31 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:58:31 --> Utf8 Class Initialized
INFO - 2019-12-19 12:58:31 --> URI Class Initialized
INFO - 2019-12-19 12:58:31 --> Router Class Initialized
INFO - 2019-12-19 12:58:31 --> Output Class Initialized
INFO - 2019-12-19 12:58:31 --> Security Class Initialized
DEBUG - 2019-12-19 12:58:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:58:31 --> Input Class Initialized
INFO - 2019-12-19 12:58:31 --> Language Class Initialized
INFO - 2019-12-19 12:58:31 --> Loader Class Initialized
INFO - 2019-12-19 12:58:31 --> Helper loaded: html_helper
INFO - 2019-12-19 12:58:31 --> Helper loaded: url_helper
INFO - 2019-12-19 12:58:31 --> Helper loaded: form_helper
INFO - 2019-12-19 12:58:31 --> Database Driver Class Initialized
INFO - 2019-12-19 12:58:31 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:58:31 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:58:31 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:58:31 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:58:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:58:31 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:58:31 --> Controller Class Initialized
INFO - 2019-12-19 12:58:31 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:58:31 --> Final output sent to browser
DEBUG - 2019-12-19 12:58:31 --> Total execution time: 0.3290
INFO - 2019-12-19 12:58:38 --> Config Class Initialized
INFO - 2019-12-19 12:58:38 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:58:38 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:58:38 --> Utf8 Class Initialized
INFO - 2019-12-19 12:58:38 --> URI Class Initialized
INFO - 2019-12-19 12:58:38 --> Router Class Initialized
INFO - 2019-12-19 12:58:38 --> Output Class Initialized
INFO - 2019-12-19 12:58:38 --> Security Class Initialized
DEBUG - 2019-12-19 12:58:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:58:38 --> Input Class Initialized
INFO - 2019-12-19 12:58:38 --> Language Class Initialized
INFO - 2019-12-19 12:58:38 --> Loader Class Initialized
INFO - 2019-12-19 12:58:38 --> Helper loaded: html_helper
INFO - 2019-12-19 12:58:38 --> Helper loaded: url_helper
INFO - 2019-12-19 12:58:38 --> Helper loaded: form_helper
INFO - 2019-12-19 12:58:38 --> Database Driver Class Initialized
INFO - 2019-12-19 12:58:38 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:58:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:58:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:58:38 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:58:38 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:58:38 --> Controller Class Initialized
INFO - 2019-12-19 12:58:38 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:58:38 --> Final output sent to browser
DEBUG - 2019-12-19 12:58:38 --> Total execution time: 0.2710
INFO - 2019-12-19 12:58:40 --> Config Class Initialized
INFO - 2019-12-19 12:58:40 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:58:40 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:58:40 --> Utf8 Class Initialized
INFO - 2019-12-19 12:58:40 --> URI Class Initialized
INFO - 2019-12-19 12:58:40 --> Router Class Initialized
INFO - 2019-12-19 12:58:40 --> Output Class Initialized
INFO - 2019-12-19 12:58:40 --> Security Class Initialized
DEBUG - 2019-12-19 12:58:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:58:40 --> Input Class Initialized
INFO - 2019-12-19 12:58:40 --> Language Class Initialized
INFO - 2019-12-19 12:58:40 --> Loader Class Initialized
INFO - 2019-12-19 12:58:40 --> Helper loaded: html_helper
INFO - 2019-12-19 12:58:40 --> Helper loaded: url_helper
INFO - 2019-12-19 12:58:40 --> Helper loaded: form_helper
INFO - 2019-12-19 12:58:40 --> Database Driver Class Initialized
INFO - 2019-12-19 12:58:40 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:58:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:58:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:58:40 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:58:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:58:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:58:40 --> Controller Class Initialized
INFO - 2019-12-19 12:58:40 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:58:40 --> Final output sent to browser
DEBUG - 2019-12-19 12:58:40 --> Total execution time: 0.2440
INFO - 2019-12-19 12:58:46 --> Config Class Initialized
INFO - 2019-12-19 12:58:46 --> Hooks Class Initialized
DEBUG - 2019-12-19 12:58:46 --> UTF-8 Support Enabled
INFO - 2019-12-19 12:58:46 --> Utf8 Class Initialized
INFO - 2019-12-19 12:58:46 --> URI Class Initialized
INFO - 2019-12-19 12:58:46 --> Router Class Initialized
INFO - 2019-12-19 12:58:46 --> Output Class Initialized
INFO - 2019-12-19 12:58:46 --> Security Class Initialized
DEBUG - 2019-12-19 12:58:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 12:58:46 --> Input Class Initialized
INFO - 2019-12-19 12:58:46 --> Language Class Initialized
INFO - 2019-12-19 12:58:46 --> Loader Class Initialized
INFO - 2019-12-19 12:58:46 --> Helper loaded: html_helper
INFO - 2019-12-19 12:58:46 --> Helper loaded: url_helper
INFO - 2019-12-19 12:58:46 --> Helper loaded: form_helper
INFO - 2019-12-19 12:58:46 --> Database Driver Class Initialized
INFO - 2019-12-19 12:58:46 --> Form Validation Class Initialized
DEBUG - 2019-12-19 12:58:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 12:58:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 12:58:46 --> Encryption Class Initialized
DEBUG - 2019-12-19 12:58:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 12:58:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 12:58:46 --> Controller Class Initialized
INFO - 2019-12-19 12:58:46 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 12:58:46 --> Final output sent to browser
DEBUG - 2019-12-19 12:58:46 --> Total execution time: 0.2920
INFO - 2019-12-19 13:00:13 --> Config Class Initialized
INFO - 2019-12-19 13:00:13 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:00:13 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:00:13 --> Utf8 Class Initialized
INFO - 2019-12-19 13:00:13 --> URI Class Initialized
INFO - 2019-12-19 13:00:13 --> Router Class Initialized
INFO - 2019-12-19 13:00:13 --> Output Class Initialized
INFO - 2019-12-19 13:00:13 --> Security Class Initialized
DEBUG - 2019-12-19 13:00:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:00:13 --> Input Class Initialized
INFO - 2019-12-19 13:00:13 --> Language Class Initialized
INFO - 2019-12-19 13:00:13 --> Loader Class Initialized
INFO - 2019-12-19 13:00:13 --> Helper loaded: html_helper
INFO - 2019-12-19 13:00:13 --> Helper loaded: url_helper
INFO - 2019-12-19 13:00:13 --> Helper loaded: form_helper
INFO - 2019-12-19 13:00:13 --> Database Driver Class Initialized
INFO - 2019-12-19 13:00:13 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:00:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:00:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:00:13 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:00:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:00:13 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:00:13 --> Controller Class Initialized
DEBUG - 2019-12-19 13:00:13 --> Create_User constructer got called..
INFO - 2019-12-19 13:00:13 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:00:13 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:00:13 --> show_groups from DB
INFO - 2019-12-19 13:00:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:00:13 --> Final output sent to browser
DEBUG - 2019-12-19 13:00:13 --> Total execution time: 0.3160
INFO - 2019-12-19 13:00:32 --> Config Class Initialized
INFO - 2019-12-19 13:00:32 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:00:32 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:00:32 --> Utf8 Class Initialized
INFO - 2019-12-19 13:00:32 --> URI Class Initialized
INFO - 2019-12-19 13:00:32 --> Router Class Initialized
INFO - 2019-12-19 13:00:32 --> Output Class Initialized
INFO - 2019-12-19 13:00:32 --> Security Class Initialized
DEBUG - 2019-12-19 13:00:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:00:32 --> Input Class Initialized
INFO - 2019-12-19 13:00:32 --> Language Class Initialized
INFO - 2019-12-19 13:00:32 --> Loader Class Initialized
INFO - 2019-12-19 13:00:32 --> Helper loaded: html_helper
INFO - 2019-12-19 13:00:32 --> Helper loaded: url_helper
INFO - 2019-12-19 13:00:32 --> Helper loaded: form_helper
INFO - 2019-12-19 13:00:32 --> Database Driver Class Initialized
INFO - 2019-12-19 13:00:32 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:00:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:00:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:00:32 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:00:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:00:32 --> Controller Class Initialized
DEBUG - 2019-12-19 13:00:32 --> Create_User constructer got called..
INFO - 2019-12-19 13:00:32 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 13:00:32 --> Final output sent to browser
DEBUG - 2019-12-19 13:00:32 --> Total execution time: 0.2370
INFO - 2019-12-19 13:00:32 --> Config Class Initialized
INFO - 2019-12-19 13:00:32 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:00:32 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:00:32 --> Utf8 Class Initialized
INFO - 2019-12-19 13:00:32 --> URI Class Initialized
INFO - 2019-12-19 13:00:32 --> Router Class Initialized
INFO - 2019-12-19 13:00:32 --> Output Class Initialized
INFO - 2019-12-19 13:00:32 --> Security Class Initialized
DEBUG - 2019-12-19 13:00:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:00:32 --> Input Class Initialized
INFO - 2019-12-19 13:00:32 --> Language Class Initialized
INFO - 2019-12-19 13:00:32 --> Loader Class Initialized
INFO - 2019-12-19 13:00:32 --> Helper loaded: html_helper
INFO - 2019-12-19 13:00:32 --> Helper loaded: url_helper
INFO - 2019-12-19 13:00:32 --> Helper loaded: form_helper
INFO - 2019-12-19 13:00:32 --> Database Driver Class Initialized
INFO - 2019-12-19 13:00:32 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:00:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:00:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:00:32 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:00:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:00:32 --> Controller Class Initialized
DEBUG - 2019-12-19 13:00:32 --> Create_User constructer got called..
INFO - 2019-12-19 13:00:32 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:00:32 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:00:32 --> show_groups from DB
INFO - 2019-12-19 13:00:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:00:32 --> Final output sent to browser
DEBUG - 2019-12-19 13:00:32 --> Total execution time: 0.2750
INFO - 2019-12-19 13:00:51 --> Config Class Initialized
INFO - 2019-12-19 13:00:51 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:00:51 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:00:51 --> Utf8 Class Initialized
INFO - 2019-12-19 13:00:51 --> URI Class Initialized
INFO - 2019-12-19 13:00:51 --> Router Class Initialized
INFO - 2019-12-19 13:00:51 --> Output Class Initialized
INFO - 2019-12-19 13:00:51 --> Security Class Initialized
DEBUG - 2019-12-19 13:00:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:00:51 --> Input Class Initialized
INFO - 2019-12-19 13:00:51 --> Language Class Initialized
INFO - 2019-12-19 13:00:51 --> Loader Class Initialized
INFO - 2019-12-19 13:00:51 --> Helper loaded: html_helper
INFO - 2019-12-19 13:00:51 --> Helper loaded: url_helper
INFO - 2019-12-19 13:00:51 --> Helper loaded: form_helper
INFO - 2019-12-19 13:00:51 --> Database Driver Class Initialized
INFO - 2019-12-19 13:00:51 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:00:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:00:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:00:51 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:00:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:00:51 --> Controller Class Initialized
DEBUG - 2019-12-19 13:00:51 --> Create_User constructer got called..
INFO - 2019-12-19 13:00:51 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 13:00:51 --> Final output sent to browser
DEBUG - 2019-12-19 13:00:51 --> Total execution time: 0.2720
INFO - 2019-12-19 13:00:51 --> Config Class Initialized
INFO - 2019-12-19 13:00:51 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:00:51 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:00:51 --> Utf8 Class Initialized
INFO - 2019-12-19 13:00:51 --> URI Class Initialized
INFO - 2019-12-19 13:00:51 --> Router Class Initialized
INFO - 2019-12-19 13:00:51 --> Output Class Initialized
INFO - 2019-12-19 13:00:51 --> Security Class Initialized
DEBUG - 2019-12-19 13:00:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:00:51 --> Input Class Initialized
INFO - 2019-12-19 13:00:51 --> Language Class Initialized
INFO - 2019-12-19 13:00:52 --> Loader Class Initialized
INFO - 2019-12-19 13:00:52 --> Helper loaded: html_helper
INFO - 2019-12-19 13:00:52 --> Helper loaded: url_helper
INFO - 2019-12-19 13:00:52 --> Helper loaded: form_helper
INFO - 2019-12-19 13:00:52 --> Database Driver Class Initialized
INFO - 2019-12-19 13:00:52 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:00:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:00:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:00:52 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:00:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:00:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:00:52 --> Controller Class Initialized
DEBUG - 2019-12-19 13:00:52 --> Create_User constructer got called..
INFO - 2019-12-19 13:00:52 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:00:52 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:00:52 --> show_groups from DB
INFO - 2019-12-19 13:00:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:00:52 --> Final output sent to browser
DEBUG - 2019-12-19 13:00:52 --> Total execution time: 0.3060
INFO - 2019-12-19 13:00:55 --> Config Class Initialized
INFO - 2019-12-19 13:00:55 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:00:55 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:00:55 --> Utf8 Class Initialized
INFO - 2019-12-19 13:00:55 --> URI Class Initialized
INFO - 2019-12-19 13:00:55 --> Router Class Initialized
INFO - 2019-12-19 13:00:55 --> Output Class Initialized
INFO - 2019-12-19 13:00:55 --> Security Class Initialized
DEBUG - 2019-12-19 13:00:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:00:55 --> Input Class Initialized
INFO - 2019-12-19 13:00:55 --> Language Class Initialized
INFO - 2019-12-19 13:00:55 --> Loader Class Initialized
INFO - 2019-12-19 13:00:55 --> Helper loaded: html_helper
INFO - 2019-12-19 13:00:55 --> Helper loaded: url_helper
INFO - 2019-12-19 13:00:55 --> Helper loaded: form_helper
INFO - 2019-12-19 13:00:55 --> Database Driver Class Initialized
INFO - 2019-12-19 13:00:55 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:00:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:00:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:00:55 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:00:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:00:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:00:55 --> Controller Class Initialized
DEBUG - 2019-12-19 13:00:55 --> Create_User constructer got called..
INFO - 2019-12-19 13:00:55 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:00:55 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:00:55 --> show_groups from DB
INFO - 2019-12-19 13:00:55 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:00:55 --> Final output sent to browser
DEBUG - 2019-12-19 13:00:55 --> Total execution time: 0.3470
INFO - 2019-12-19 13:01:56 --> Config Class Initialized
INFO - 2019-12-19 13:01:56 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:01:57 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:01:57 --> Utf8 Class Initialized
INFO - 2019-12-19 13:01:57 --> URI Class Initialized
INFO - 2019-12-19 13:01:57 --> Router Class Initialized
INFO - 2019-12-19 13:01:57 --> Output Class Initialized
INFO - 2019-12-19 13:01:57 --> Security Class Initialized
DEBUG - 2019-12-19 13:01:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:01:57 --> Input Class Initialized
INFO - 2019-12-19 13:01:57 --> Language Class Initialized
INFO - 2019-12-19 13:01:57 --> Loader Class Initialized
INFO - 2019-12-19 13:01:57 --> Helper loaded: html_helper
INFO - 2019-12-19 13:01:57 --> Helper loaded: url_helper
INFO - 2019-12-19 13:01:57 --> Helper loaded: form_helper
INFO - 2019-12-19 13:01:57 --> Database Driver Class Initialized
INFO - 2019-12-19 13:01:57 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:01:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:01:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:01:57 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:01:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:01:57 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:01:57 --> Controller Class Initialized
DEBUG - 2019-12-19 13:01:57 --> Create_User constructer got called..
INFO - 2019-12-19 13:01:57 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 13:01:57 --> Final output sent to browser
DEBUG - 2019-12-19 13:01:57 --> Total execution time: 0.4150
INFO - 2019-12-19 13:01:57 --> Config Class Initialized
INFO - 2019-12-19 13:01:57 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:01:57 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:01:57 --> Utf8 Class Initialized
INFO - 2019-12-19 13:01:57 --> URI Class Initialized
INFO - 2019-12-19 13:01:57 --> Router Class Initialized
INFO - 2019-12-19 13:01:57 --> Output Class Initialized
INFO - 2019-12-19 13:01:57 --> Security Class Initialized
DEBUG - 2019-12-19 13:01:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:01:57 --> Input Class Initialized
INFO - 2019-12-19 13:01:57 --> Language Class Initialized
INFO - 2019-12-19 13:01:57 --> Loader Class Initialized
INFO - 2019-12-19 13:01:57 --> Helper loaded: html_helper
INFO - 2019-12-19 13:01:57 --> Helper loaded: url_helper
INFO - 2019-12-19 13:01:57 --> Helper loaded: form_helper
INFO - 2019-12-19 13:01:57 --> Database Driver Class Initialized
INFO - 2019-12-19 13:01:57 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:01:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:01:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:01:57 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:01:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:01:57 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:01:57 --> Controller Class Initialized
DEBUG - 2019-12-19 13:01:57 --> Create_User constructer got called..
INFO - 2019-12-19 13:01:57 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:01:57 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:01:57 --> show_groups from DB
INFO - 2019-12-19 13:01:57 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:01:57 --> Final output sent to browser
DEBUG - 2019-12-19 13:01:57 --> Total execution time: 0.2790
INFO - 2019-12-19 13:10:05 --> Config Class Initialized
INFO - 2019-12-19 13:10:05 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:10:05 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:10:05 --> Utf8 Class Initialized
INFO - 2019-12-19 13:10:05 --> URI Class Initialized
INFO - 2019-12-19 13:10:05 --> Router Class Initialized
INFO - 2019-12-19 13:10:05 --> Output Class Initialized
INFO - 2019-12-19 13:10:05 --> Security Class Initialized
DEBUG - 2019-12-19 13:10:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:10:05 --> Input Class Initialized
INFO - 2019-12-19 13:10:05 --> Language Class Initialized
INFO - 2019-12-19 13:10:05 --> Loader Class Initialized
INFO - 2019-12-19 13:10:05 --> Helper loaded: html_helper
INFO - 2019-12-19 13:10:05 --> Helper loaded: url_helper
INFO - 2019-12-19 13:10:05 --> Helper loaded: form_helper
INFO - 2019-12-19 13:10:05 --> Database Driver Class Initialized
INFO - 2019-12-19 13:10:05 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:10:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:10:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:10:05 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:10:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:10:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:10:05 --> Controller Class Initialized
DEBUG - 2019-12-19 13:10:05 --> Create_User constructer got called..
INFO - 2019-12-19 13:10:05 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:10:05 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:10:05 --> show_groups from DB
INFO - 2019-12-19 13:10:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:10:05 --> Final output sent to browser
DEBUG - 2019-12-19 13:10:05 --> Total execution time: 0.4500
INFO - 2019-12-19 13:10:24 --> Config Class Initialized
INFO - 2019-12-19 13:10:24 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:10:24 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:10:24 --> Utf8 Class Initialized
INFO - 2019-12-19 13:10:24 --> URI Class Initialized
INFO - 2019-12-19 13:10:24 --> Router Class Initialized
INFO - 2019-12-19 13:10:24 --> Output Class Initialized
INFO - 2019-12-19 13:10:24 --> Security Class Initialized
DEBUG - 2019-12-19 13:10:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:10:24 --> Input Class Initialized
INFO - 2019-12-19 13:10:24 --> Language Class Initialized
INFO - 2019-12-19 13:10:24 --> Loader Class Initialized
INFO - 2019-12-19 13:10:24 --> Helper loaded: html_helper
INFO - 2019-12-19 13:10:24 --> Helper loaded: url_helper
INFO - 2019-12-19 13:10:24 --> Helper loaded: form_helper
INFO - 2019-12-19 13:10:24 --> Database Driver Class Initialized
INFO - 2019-12-19 13:10:24 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:10:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:10:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:10:24 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:10:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:10:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:10:24 --> Controller Class Initialized
DEBUG - 2019-12-19 13:10:24 --> Create_User constructer got called..
INFO - 2019-12-19 13:10:24 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 13:10:24 --> Final output sent to browser
DEBUG - 2019-12-19 13:10:24 --> Total execution time: 0.3500
INFO - 2019-12-19 13:10:24 --> Config Class Initialized
INFO - 2019-12-19 13:10:24 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:10:24 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:10:24 --> Utf8 Class Initialized
INFO - 2019-12-19 13:10:24 --> URI Class Initialized
INFO - 2019-12-19 13:10:24 --> Router Class Initialized
INFO - 2019-12-19 13:10:24 --> Output Class Initialized
INFO - 2019-12-19 13:10:24 --> Security Class Initialized
DEBUG - 2019-12-19 13:10:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:10:24 --> Input Class Initialized
INFO - 2019-12-19 13:10:24 --> Language Class Initialized
INFO - 2019-12-19 13:10:24 --> Loader Class Initialized
INFO - 2019-12-19 13:10:24 --> Helper loaded: html_helper
INFO - 2019-12-19 13:10:24 --> Helper loaded: url_helper
INFO - 2019-12-19 13:10:24 --> Helper loaded: form_helper
INFO - 2019-12-19 13:10:24 --> Database Driver Class Initialized
INFO - 2019-12-19 13:10:24 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:10:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:10:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:10:24 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:10:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:10:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:10:24 --> Controller Class Initialized
DEBUG - 2019-12-19 13:10:24 --> Create_User constructer got called..
INFO - 2019-12-19 13:10:24 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:10:24 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:10:24 --> show_groups from DB
INFO - 2019-12-19 13:10:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:10:24 --> Final output sent to browser
DEBUG - 2019-12-19 13:10:24 --> Total execution time: 0.2410
INFO - 2019-12-19 13:11:12 --> Config Class Initialized
INFO - 2019-12-19 13:11:12 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:11:12 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:11:12 --> Utf8 Class Initialized
INFO - 2019-12-19 13:11:12 --> URI Class Initialized
INFO - 2019-12-19 13:11:12 --> Router Class Initialized
INFO - 2019-12-19 13:11:12 --> Output Class Initialized
INFO - 2019-12-19 13:11:12 --> Security Class Initialized
DEBUG - 2019-12-19 13:11:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:11:12 --> Input Class Initialized
INFO - 2019-12-19 13:11:12 --> Language Class Initialized
INFO - 2019-12-19 13:11:12 --> Loader Class Initialized
INFO - 2019-12-19 13:11:12 --> Config Class Initialized
INFO - 2019-12-19 13:11:12 --> Hooks Class Initialized
INFO - 2019-12-19 13:11:12 --> Helper loaded: html_helper
INFO - 2019-12-19 13:11:12 --> Helper loaded: url_helper
INFO - 2019-12-19 13:11:12 --> Helper loaded: form_helper
DEBUG - 2019-12-19 13:11:12 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:11:12 --> Database Driver Class Initialized
INFO - 2019-12-19 13:11:12 --> Utf8 Class Initialized
INFO - 2019-12-19 13:11:12 --> URI Class Initialized
INFO - 2019-12-19 13:11:12 --> Router Class Initialized
INFO - 2019-12-19 13:11:12 --> Form Validation Class Initialized
INFO - 2019-12-19 13:11:12 --> Output Class Initialized
DEBUG - 2019-12-19 13:11:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:11:12 --> Security Class Initialized
INFO - 2019-12-19 13:11:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:11:12 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:11:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:11:12 --> Input Class Initialized
INFO - 2019-12-19 13:11:12 --> Language Class Initialized
DEBUG - 2019-12-19 13:11:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:11:12 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:11:13 --> Controller Class Initialized
DEBUG - 2019-12-19 13:11:13 --> Create_User constructer got called..
INFO - 2019-12-19 13:11:13 --> Loader Class Initialized
INFO - 2019-12-19 13:11:13 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:11:13 --> showing all user from db tblusers...
INFO - 2019-12-19 13:11:13 --> Helper loaded: html_helper
INFO - 2019-12-19 13:11:13 --> Helper loaded: url_helper
DEBUG - 2019-12-19 13:11:13 --> show_groups from DB
INFO - 2019-12-19 13:11:13 --> Helper loaded: form_helper
INFO - 2019-12-19 13:11:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:11:13 --> Final output sent to browser
DEBUG - 2019-12-19 13:11:13 --> Total execution time: 0.3760
INFO - 2019-12-19 13:11:13 --> Database Driver Class Initialized
INFO - 2019-12-19 13:11:13 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:11:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:11:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:11:13 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:11:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:11:13 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:11:13 --> Controller Class Initialized
DEBUG - 2019-12-19 13:11:13 --> Create_User constructer got called..
INFO - 2019-12-19 13:11:13 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 13:11:13 --> Final output sent to browser
DEBUG - 2019-12-19 13:11:13 --> Total execution time: 0.5361
INFO - 2019-12-19 13:13:05 --> Config Class Initialized
INFO - 2019-12-19 13:13:05 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:13:05 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:13:05 --> Utf8 Class Initialized
INFO - 2019-12-19 13:13:05 --> URI Class Initialized
INFO - 2019-12-19 13:13:05 --> Router Class Initialized
INFO - 2019-12-19 13:13:05 --> Output Class Initialized
INFO - 2019-12-19 13:13:05 --> Security Class Initialized
DEBUG - 2019-12-19 13:13:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:13:05 --> Input Class Initialized
INFO - 2019-12-19 13:13:05 --> Language Class Initialized
INFO - 2019-12-19 13:13:05 --> Loader Class Initialized
INFO - 2019-12-19 13:13:05 --> Helper loaded: html_helper
INFO - 2019-12-19 13:13:05 --> Helper loaded: url_helper
INFO - 2019-12-19 13:13:05 --> Helper loaded: form_helper
INFO - 2019-12-19 13:13:05 --> Database Driver Class Initialized
INFO - 2019-12-19 13:13:05 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:13:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:13:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:13:05 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:13:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:13:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:13:05 --> Controller Class Initialized
DEBUG - 2019-12-19 13:13:05 --> Create_User constructer got called..
INFO - 2019-12-19 13:13:05 --> Model "User_Login_Model" initialized
ERROR - 2019-12-19 13:13:05 --> Query error: Duplicate entry 'VIEWUSER_sub' for key 'subGroupName' - Invalid query: INSERT INTO `group_sub_group_map` (`groupId`, `groupName`, `subGroupName`, `subGroupDesc`) VALUES ('42', 'VIEWUSER', 'VIEWUSER_sub', 'User with view Access_sub')
INFO - 2019-12-19 13:13:05 --> Final output sent to browser
DEBUG - 2019-12-19 13:13:05 --> Total execution time: 0.4120
INFO - 2019-12-19 13:13:05 --> Config Class Initialized
INFO - 2019-12-19 13:13:05 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:13:05 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:13:05 --> Utf8 Class Initialized
INFO - 2019-12-19 13:13:05 --> URI Class Initialized
INFO - 2019-12-19 13:13:05 --> Router Class Initialized
INFO - 2019-12-19 13:13:05 --> Output Class Initialized
INFO - 2019-12-19 13:13:05 --> Security Class Initialized
DEBUG - 2019-12-19 13:13:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:13:05 --> Input Class Initialized
INFO - 2019-12-19 13:13:05 --> Language Class Initialized
INFO - 2019-12-19 13:13:05 --> Loader Class Initialized
INFO - 2019-12-19 13:13:05 --> Helper loaded: html_helper
INFO - 2019-12-19 13:13:05 --> Helper loaded: url_helper
INFO - 2019-12-19 13:13:05 --> Helper loaded: form_helper
INFO - 2019-12-19 13:13:05 --> Database Driver Class Initialized
INFO - 2019-12-19 13:13:05 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:13:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:13:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:13:05 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:13:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:13:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:13:05 --> Controller Class Initialized
DEBUG - 2019-12-19 13:13:05 --> Create_User constructer got called..
INFO - 2019-12-19 13:13:05 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:13:05 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:13:05 --> show_groups from DB
INFO - 2019-12-19 13:13:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:13:05 --> Final output sent to browser
DEBUG - 2019-12-19 13:13:05 --> Total execution time: 0.2510
INFO - 2019-12-19 13:15:47 --> Config Class Initialized
INFO - 2019-12-19 13:15:47 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:15:47 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:15:47 --> Utf8 Class Initialized
INFO - 2019-12-19 13:15:47 --> URI Class Initialized
INFO - 2019-12-19 13:15:47 --> Router Class Initialized
INFO - 2019-12-19 13:15:47 --> Output Class Initialized
INFO - 2019-12-19 13:15:47 --> Security Class Initialized
DEBUG - 2019-12-19 13:15:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:15:47 --> Input Class Initialized
INFO - 2019-12-19 13:15:47 --> Language Class Initialized
INFO - 2019-12-19 13:15:47 --> Loader Class Initialized
INFO - 2019-12-19 13:15:47 --> Helper loaded: html_helper
INFO - 2019-12-19 13:15:47 --> Helper loaded: url_helper
INFO - 2019-12-19 13:15:47 --> Helper loaded: form_helper
INFO - 2019-12-19 13:15:47 --> Database Driver Class Initialized
INFO - 2019-12-19 13:15:47 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:15:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:15:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:15:47 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:15:47 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:15:47 --> Controller Class Initialized
DEBUG - 2019-12-19 13:15:47 --> Create_User constructer got called..
INFO - 2019-12-19 13:15:47 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 13:15:47 --> Final output sent to browser
DEBUG - 2019-12-19 13:15:47 --> Total execution time: 0.4750
INFO - 2019-12-19 13:15:48 --> Config Class Initialized
INFO - 2019-12-19 13:15:48 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:15:48 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:15:48 --> Utf8 Class Initialized
INFO - 2019-12-19 13:15:48 --> URI Class Initialized
INFO - 2019-12-19 13:15:48 --> Router Class Initialized
INFO - 2019-12-19 13:15:48 --> Output Class Initialized
INFO - 2019-12-19 13:15:48 --> Security Class Initialized
DEBUG - 2019-12-19 13:15:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:15:48 --> Input Class Initialized
INFO - 2019-12-19 13:15:48 --> Language Class Initialized
INFO - 2019-12-19 13:15:48 --> Loader Class Initialized
INFO - 2019-12-19 13:15:48 --> Helper loaded: html_helper
INFO - 2019-12-19 13:15:48 --> Helper loaded: url_helper
INFO - 2019-12-19 13:15:48 --> Helper loaded: form_helper
INFO - 2019-12-19 13:15:48 --> Database Driver Class Initialized
INFO - 2019-12-19 13:15:48 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:15:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:15:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:15:48 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:15:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:15:48 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:15:48 --> Controller Class Initialized
DEBUG - 2019-12-19 13:15:48 --> Create_User constructer got called..
INFO - 2019-12-19 13:15:48 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:15:48 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:15:48 --> show_groups from DB
INFO - 2019-12-19 13:15:48 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:15:48 --> Final output sent to browser
DEBUG - 2019-12-19 13:15:48 --> Total execution time: 0.2650
INFO - 2019-12-19 13:18:10 --> Config Class Initialized
INFO - 2019-12-19 13:18:10 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:18:10 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:18:10 --> Utf8 Class Initialized
INFO - 2019-12-19 13:18:10 --> URI Class Initialized
INFO - 2019-12-19 13:18:10 --> Router Class Initialized
INFO - 2019-12-19 13:18:10 --> Output Class Initialized
INFO - 2019-12-19 13:18:10 --> Security Class Initialized
DEBUG - 2019-12-19 13:18:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:18:11 --> Input Class Initialized
INFO - 2019-12-19 13:18:11 --> Language Class Initialized
INFO - 2019-12-19 13:18:11 --> Loader Class Initialized
INFO - 2019-12-19 13:18:11 --> Helper loaded: html_helper
INFO - 2019-12-19 13:18:11 --> Helper loaded: url_helper
INFO - 2019-12-19 13:18:11 --> Helper loaded: form_helper
INFO - 2019-12-19 13:18:11 --> Database Driver Class Initialized
INFO - 2019-12-19 13:18:11 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:18:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:18:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:18:11 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:18:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:18:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:18:11 --> Controller Class Initialized
DEBUG - 2019-12-19 13:18:11 --> Create_User constructer got called..
INFO - 2019-12-19 13:18:11 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 13:18:11 --> Final output sent to browser
DEBUG - 2019-12-19 13:18:11 --> Total execution time: 0.5211
INFO - 2019-12-19 13:18:11 --> Config Class Initialized
INFO - 2019-12-19 13:18:11 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:18:11 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:18:11 --> Utf8 Class Initialized
INFO - 2019-12-19 13:18:11 --> URI Class Initialized
INFO - 2019-12-19 13:18:11 --> Router Class Initialized
INFO - 2019-12-19 13:18:11 --> Output Class Initialized
INFO - 2019-12-19 13:18:11 --> Security Class Initialized
DEBUG - 2019-12-19 13:18:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:18:11 --> Input Class Initialized
INFO - 2019-12-19 13:18:11 --> Language Class Initialized
INFO - 2019-12-19 13:18:11 --> Loader Class Initialized
INFO - 2019-12-19 13:18:11 --> Helper loaded: html_helper
INFO - 2019-12-19 13:18:11 --> Helper loaded: url_helper
INFO - 2019-12-19 13:18:11 --> Helper loaded: form_helper
INFO - 2019-12-19 13:18:11 --> Database Driver Class Initialized
INFO - 2019-12-19 13:18:11 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:18:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:18:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:18:11 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:18:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:18:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:18:11 --> Controller Class Initialized
DEBUG - 2019-12-19 13:18:11 --> Create_User constructer got called..
INFO - 2019-12-19 13:18:11 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:18:11 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:18:11 --> show_groups from DB
INFO - 2019-12-19 13:18:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:18:11 --> Final output sent to browser
DEBUG - 2019-12-19 13:18:11 --> Total execution time: 0.4050
INFO - 2019-12-19 13:19:00 --> Config Class Initialized
INFO - 2019-12-19 13:19:00 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:19:00 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:19:01 --> Utf8 Class Initialized
INFO - 2019-12-19 13:19:01 --> URI Class Initialized
INFO - 2019-12-19 13:19:01 --> Router Class Initialized
INFO - 2019-12-19 13:19:01 --> Output Class Initialized
INFO - 2019-12-19 13:19:01 --> Security Class Initialized
DEBUG - 2019-12-19 13:19:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:19:01 --> Input Class Initialized
INFO - 2019-12-19 13:19:01 --> Language Class Initialized
INFO - 2019-12-19 13:19:01 --> Loader Class Initialized
INFO - 2019-12-19 13:19:01 --> Helper loaded: html_helper
INFO - 2019-12-19 13:19:01 --> Helper loaded: url_helper
INFO - 2019-12-19 13:19:01 --> Helper loaded: form_helper
INFO - 2019-12-19 13:19:01 --> Database Driver Class Initialized
INFO - 2019-12-19 13:19:01 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:19:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:19:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:19:01 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:19:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:19:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:19:01 --> Controller Class Initialized
DEBUG - 2019-12-19 13:19:01 --> loading Configarable_Login model...
INFO - 2019-12-19 13:19:01 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-19 13:19:01 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-19 13:19:01 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-19 13:19:01 --> Array
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

DEBUG - 2019-12-19 13:19:01 --> loading configurable menu with result=Array
DEBUG - 2019-12-19 13:19:01 --> loading view public\Dashboard
INFO - 2019-12-19 13:19:01 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 13:19:01 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-19 13:19:01 --> Final output sent to browser
DEBUG - 2019-12-19 13:19:01 --> Total execution time: 0.5130
INFO - 2019-12-19 13:19:04 --> Config Class Initialized
INFO - 2019-12-19 13:19:04 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:19:04 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:19:04 --> Utf8 Class Initialized
INFO - 2019-12-19 13:19:04 --> URI Class Initialized
INFO - 2019-12-19 13:19:04 --> Router Class Initialized
INFO - 2019-12-19 13:19:04 --> Output Class Initialized
INFO - 2019-12-19 13:19:04 --> Security Class Initialized
DEBUG - 2019-12-19 13:19:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:19:04 --> Input Class Initialized
INFO - 2019-12-19 13:19:04 --> Language Class Initialized
INFO - 2019-12-19 13:19:04 --> Loader Class Initialized
INFO - 2019-12-19 13:19:04 --> Helper loaded: html_helper
INFO - 2019-12-19 13:19:04 --> Helper loaded: url_helper
INFO - 2019-12-19 13:19:04 --> Helper loaded: form_helper
INFO - 2019-12-19 13:19:04 --> Database Driver Class Initialized
INFO - 2019-12-19 13:19:04 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:19:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:19:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:19:04 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:19:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:19:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:19:04 --> Controller Class Initialized
INFO - 2019-12-19 13:19:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-19 13:19:04 --> Final output sent to browser
DEBUG - 2019-12-19 13:19:04 --> Total execution time: 0.2960
INFO - 2019-12-19 13:19:06 --> Config Class Initialized
INFO - 2019-12-19 13:19:06 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:19:06 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:19:06 --> Utf8 Class Initialized
INFO - 2019-12-19 13:19:06 --> URI Class Initialized
INFO - 2019-12-19 13:19:06 --> Router Class Initialized
INFO - 2019-12-19 13:19:06 --> Output Class Initialized
INFO - 2019-12-19 13:19:06 --> Security Class Initialized
DEBUG - 2019-12-19 13:19:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:19:06 --> Input Class Initialized
INFO - 2019-12-19 13:19:06 --> Language Class Initialized
INFO - 2019-12-19 13:19:06 --> Loader Class Initialized
INFO - 2019-12-19 13:19:06 --> Helper loaded: html_helper
INFO - 2019-12-19 13:19:06 --> Helper loaded: url_helper
INFO - 2019-12-19 13:19:06 --> Helper loaded: form_helper
INFO - 2019-12-19 13:19:06 --> Database Driver Class Initialized
INFO - 2019-12-19 13:19:07 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:19:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:19:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:19:07 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:19:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:19:07 --> Controller Class Initialized
DEBUG - 2019-12-19 13:19:07 --> Create_User constructer got called..
DEBUG - 2019-12-19 13:19:07 --> loading configurable menu with result=
INFO - 2019-12-19 13:19:07 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:19:07 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 13:19:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 13:19:07 --> Final output sent to browser
DEBUG - 2019-12-19 13:19:07 --> Total execution time: 0.5600
INFO - 2019-12-19 13:19:10 --> Config Class Initialized
INFO - 2019-12-19 13:19:10 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:19:10 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:19:10 --> Utf8 Class Initialized
INFO - 2019-12-19 13:19:10 --> URI Class Initialized
INFO - 2019-12-19 13:19:10 --> Router Class Initialized
INFO - 2019-12-19 13:19:10 --> Output Class Initialized
INFO - 2019-12-19 13:19:10 --> Security Class Initialized
DEBUG - 2019-12-19 13:19:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:19:10 --> Input Class Initialized
INFO - 2019-12-19 13:19:10 --> Language Class Initialized
INFO - 2019-12-19 13:19:10 --> Loader Class Initialized
INFO - 2019-12-19 13:19:10 --> Helper loaded: html_helper
INFO - 2019-12-19 13:19:10 --> Helper loaded: url_helper
INFO - 2019-12-19 13:19:10 --> Helper loaded: form_helper
INFO - 2019-12-19 13:19:10 --> Database Driver Class Initialized
INFO - 2019-12-19 13:19:10 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:19:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:19:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:19:10 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:19:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:19:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:19:10 --> Controller Class Initialized
DEBUG - 2019-12-19 13:19:10 --> Create_User constructer got called..
INFO - 2019-12-19 13:19:10 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:19:10 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:19:10 --> show_users from DB
INFO - 2019-12-19 13:19:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:19:10 --> Final output sent to browser
DEBUG - 2019-12-19 13:19:10 --> Total execution time: 0.3290
INFO - 2019-12-19 13:19:20 --> Config Class Initialized
INFO - 2019-12-19 13:19:20 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:19:20 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:19:20 --> Utf8 Class Initialized
INFO - 2019-12-19 13:19:20 --> URI Class Initialized
INFO - 2019-12-19 13:19:20 --> Router Class Initialized
INFO - 2019-12-19 13:19:20 --> Output Class Initialized
INFO - 2019-12-19 13:19:20 --> Security Class Initialized
DEBUG - 2019-12-19 13:19:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:19:20 --> Input Class Initialized
INFO - 2019-12-19 13:19:20 --> Language Class Initialized
INFO - 2019-12-19 13:19:20 --> Loader Class Initialized
INFO - 2019-12-19 13:19:20 --> Helper loaded: html_helper
INFO - 2019-12-19 13:19:20 --> Helper loaded: url_helper
INFO - 2019-12-19 13:19:20 --> Helper loaded: form_helper
INFO - 2019-12-19 13:19:20 --> Database Driver Class Initialized
INFO - 2019-12-19 13:19:20 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:19:20 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:19:20 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:19:20 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:19:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:19:20 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:19:20 --> Controller Class Initialized
DEBUG - 2019-12-19 13:19:20 --> Create_User constructer got called..
DEBUG - 2019-12-19 13:19:20 --> loading configurable menu with result=
INFO - 2019-12-19 13:19:20 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:19:20 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 13:19:20 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 13:19:20 --> Final output sent to browser
DEBUG - 2019-12-19 13:19:20 --> Total execution time: 0.3420
INFO - 2019-12-19 13:19:26 --> Config Class Initialized
INFO - 2019-12-19 13:19:26 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:19:26 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:19:26 --> Utf8 Class Initialized
INFO - 2019-12-19 13:19:26 --> URI Class Initialized
INFO - 2019-12-19 13:19:26 --> Router Class Initialized
INFO - 2019-12-19 13:19:26 --> Output Class Initialized
INFO - 2019-12-19 13:19:26 --> Security Class Initialized
DEBUG - 2019-12-19 13:19:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:19:26 --> Input Class Initialized
INFO - 2019-12-19 13:19:26 --> Language Class Initialized
INFO - 2019-12-19 13:19:26 --> Loader Class Initialized
INFO - 2019-12-19 13:19:26 --> Helper loaded: html_helper
INFO - 2019-12-19 13:19:26 --> Helper loaded: url_helper
INFO - 2019-12-19 13:19:26 --> Helper loaded: form_helper
INFO - 2019-12-19 13:19:26 --> Database Driver Class Initialized
INFO - 2019-12-19 13:19:26 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:19:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:19:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:19:26 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:19:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:19:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:19:26 --> Controller Class Initialized
DEBUG - 2019-12-19 13:19:26 --> Create_User constructer got called..
INFO - 2019-12-19 13:19:26 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:19:26 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:19:26 --> show_users from DB
INFO - 2019-12-19 13:19:26 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:19:27 --> Final output sent to browser
DEBUG - 2019-12-19 13:19:27 --> Total execution time: 0.3730
INFO - 2019-12-19 13:19:33 --> Config Class Initialized
INFO - 2019-12-19 13:19:33 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:19:33 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:19:33 --> Utf8 Class Initialized
INFO - 2019-12-19 13:19:33 --> URI Class Initialized
INFO - 2019-12-19 13:19:33 --> Router Class Initialized
INFO - 2019-12-19 13:19:33 --> Output Class Initialized
INFO - 2019-12-19 13:19:33 --> Security Class Initialized
DEBUG - 2019-12-19 13:19:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:19:33 --> Input Class Initialized
INFO - 2019-12-19 13:19:33 --> Language Class Initialized
INFO - 2019-12-19 13:19:33 --> Loader Class Initialized
INFO - 2019-12-19 13:19:33 --> Helper loaded: html_helper
INFO - 2019-12-19 13:19:33 --> Helper loaded: url_helper
INFO - 2019-12-19 13:19:33 --> Helper loaded: form_helper
INFO - 2019-12-19 13:19:33 --> Database Driver Class Initialized
INFO - 2019-12-19 13:19:33 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:19:33 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:19:33 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:19:33 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:19:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:19:33 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:19:33 --> Controller Class Initialized
DEBUG - 2019-12-19 13:19:33 --> Create_User constructer got called..
INFO - 2019-12-19 13:19:33 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:19:33 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:19:33 --> show_groups from DB
INFO - 2019-12-19 13:19:33 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:19:33 --> Final output sent to browser
DEBUG - 2019-12-19 13:19:33 --> Total execution time: 0.3520
INFO - 2019-12-19 13:20:24 --> Config Class Initialized
INFO - 2019-12-19 13:20:24 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:20:24 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:20:24 --> Utf8 Class Initialized
INFO - 2019-12-19 13:20:24 --> URI Class Initialized
INFO - 2019-12-19 13:20:24 --> Router Class Initialized
INFO - 2019-12-19 13:20:24 --> Output Class Initialized
INFO - 2019-12-19 13:20:24 --> Security Class Initialized
DEBUG - 2019-12-19 13:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:20:24 --> Input Class Initialized
INFO - 2019-12-19 13:20:24 --> Language Class Initialized
INFO - 2019-12-19 13:20:24 --> Loader Class Initialized
INFO - 2019-12-19 13:20:24 --> Helper loaded: html_helper
INFO - 2019-12-19 13:20:24 --> Helper loaded: url_helper
INFO - 2019-12-19 13:20:24 --> Helper loaded: form_helper
INFO - 2019-12-19 13:20:24 --> Database Driver Class Initialized
INFO - 2019-12-19 13:20:24 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:20:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:20:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:20:24 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:20:24 --> Controller Class Initialized
DEBUG - 2019-12-19 13:20:24 --> Create_User constructer got called..
INFO - 2019-12-19 13:20:24 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:20:24 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:20:24 --> show_users from DB
INFO - 2019-12-19 13:20:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:20:24 --> Final output sent to browser
DEBUG - 2019-12-19 13:20:24 --> Total execution time: 0.3620
INFO - 2019-12-19 13:20:33 --> Config Class Initialized
INFO - 2019-12-19 13:20:33 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:20:33 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:20:33 --> Utf8 Class Initialized
INFO - 2019-12-19 13:20:33 --> URI Class Initialized
INFO - 2019-12-19 13:20:33 --> Router Class Initialized
INFO - 2019-12-19 13:20:33 --> Output Class Initialized
INFO - 2019-12-19 13:20:33 --> Security Class Initialized
DEBUG - 2019-12-19 13:20:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:20:33 --> Input Class Initialized
INFO - 2019-12-19 13:20:33 --> Language Class Initialized
INFO - 2019-12-19 13:20:33 --> Loader Class Initialized
INFO - 2019-12-19 13:20:33 --> Helper loaded: html_helper
INFO - 2019-12-19 13:20:33 --> Helper loaded: url_helper
INFO - 2019-12-19 13:20:33 --> Helper loaded: form_helper
INFO - 2019-12-19 13:20:34 --> Database Driver Class Initialized
INFO - 2019-12-19 13:20:34 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:20:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:20:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:20:34 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:20:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:20:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:20:34 --> Controller Class Initialized
DEBUG - 2019-12-19 13:20:34 --> loading Configarable_Login model...
INFO - 2019-12-19 13:20:34 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-19 13:20:34 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-19 13:20:34 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-19 13:20:34 --> Array
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

DEBUG - 2019-12-19 13:20:34 --> loading configurable menu with result=Array
DEBUG - 2019-12-19 13:20:34 --> loading view public\Dashboard
INFO - 2019-12-19 13:20:34 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 13:20:34 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-19 13:20:34 --> Final output sent to browser
DEBUG - 2019-12-19 13:20:34 --> Total execution time: 0.3790
INFO - 2019-12-19 13:20:37 --> Config Class Initialized
INFO - 2019-12-19 13:20:37 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:20:37 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:20:37 --> Utf8 Class Initialized
INFO - 2019-12-19 13:20:37 --> URI Class Initialized
INFO - 2019-12-19 13:20:37 --> Router Class Initialized
INFO - 2019-12-19 13:20:37 --> Output Class Initialized
INFO - 2019-12-19 13:20:37 --> Security Class Initialized
DEBUG - 2019-12-19 13:20:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:20:37 --> Input Class Initialized
INFO - 2019-12-19 13:20:37 --> Language Class Initialized
INFO - 2019-12-19 13:20:37 --> Loader Class Initialized
INFO - 2019-12-19 13:20:37 --> Helper loaded: html_helper
INFO - 2019-12-19 13:20:37 --> Helper loaded: url_helper
INFO - 2019-12-19 13:20:37 --> Helper loaded: form_helper
INFO - 2019-12-19 13:20:37 --> Database Driver Class Initialized
INFO - 2019-12-19 13:20:37 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:20:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:20:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:20:37 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:20:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:20:37 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:20:37 --> Controller Class Initialized
DEBUG - 2019-12-19 13:20:37 --> Create_User constructer got called..
DEBUG - 2019-12-19 13:20:37 --> loading configurable menu with result=
INFO - 2019-12-19 13:20:37 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:20:37 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 13:20:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 13:20:37 --> Final output sent to browser
DEBUG - 2019-12-19 13:20:37 --> Total execution time: 0.3470
INFO - 2019-12-19 13:22:05 --> Config Class Initialized
INFO - 2019-12-19 13:22:05 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:22:05 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:22:05 --> Utf8 Class Initialized
INFO - 2019-12-19 13:22:05 --> URI Class Initialized
INFO - 2019-12-19 13:22:05 --> Router Class Initialized
INFO - 2019-12-19 13:22:05 --> Output Class Initialized
INFO - 2019-12-19 13:22:05 --> Security Class Initialized
DEBUG - 2019-12-19 13:22:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:22:05 --> Input Class Initialized
INFO - 2019-12-19 13:22:05 --> Language Class Initialized
INFO - 2019-12-19 13:22:06 --> Loader Class Initialized
INFO - 2019-12-19 13:22:06 --> Helper loaded: html_helper
INFO - 2019-12-19 13:22:06 --> Helper loaded: url_helper
INFO - 2019-12-19 13:22:06 --> Helper loaded: form_helper
INFO - 2019-12-19 13:22:06 --> Database Driver Class Initialized
INFO - 2019-12-19 13:22:06 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:22:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:22:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:22:06 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:22:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:22:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:22:06 --> Controller Class Initialized
DEBUG - 2019-12-19 13:22:06 --> Create_User constructer got called..
DEBUG - 2019-12-19 13:22:06 --> loading configurable menu with result=
INFO - 2019-12-19 13:22:06 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:22:06 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 13:22:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 13:22:06 --> Final output sent to browser
DEBUG - 2019-12-19 13:22:06 --> Total execution time: 0.3160
INFO - 2019-12-19 13:22:07 --> Config Class Initialized
INFO - 2019-12-19 13:22:07 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:22:07 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:22:07 --> Utf8 Class Initialized
INFO - 2019-12-19 13:22:07 --> URI Class Initialized
INFO - 2019-12-19 13:22:07 --> Router Class Initialized
INFO - 2019-12-19 13:22:07 --> Output Class Initialized
INFO - 2019-12-19 13:22:07 --> Security Class Initialized
DEBUG - 2019-12-19 13:22:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:22:07 --> Input Class Initialized
INFO - 2019-12-19 13:22:07 --> Language Class Initialized
INFO - 2019-12-19 13:22:07 --> Loader Class Initialized
INFO - 2019-12-19 13:22:07 --> Helper loaded: html_helper
INFO - 2019-12-19 13:22:07 --> Helper loaded: url_helper
INFO - 2019-12-19 13:22:07 --> Helper loaded: form_helper
INFO - 2019-12-19 13:22:07 --> Database Driver Class Initialized
INFO - 2019-12-19 13:22:07 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:22:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:22:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:22:07 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:22:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:22:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:22:07 --> Controller Class Initialized
DEBUG - 2019-12-19 13:22:07 --> Create_User constructer got called..
INFO - 2019-12-19 13:22:07 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:22:07 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:22:07 --> show_users from DB
INFO - 2019-12-19 13:22:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:22:07 --> Final output sent to browser
DEBUG - 2019-12-19 13:22:07 --> Total execution time: 0.3510
INFO - 2019-12-19 13:22:09 --> Config Class Initialized
INFO - 2019-12-19 13:22:09 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:22:09 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:22:09 --> Utf8 Class Initialized
INFO - 2019-12-19 13:22:09 --> URI Class Initialized
INFO - 2019-12-19 13:22:09 --> Router Class Initialized
INFO - 2019-12-19 13:22:09 --> Output Class Initialized
INFO - 2019-12-19 13:22:09 --> Security Class Initialized
DEBUG - 2019-12-19 13:22:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:22:09 --> Input Class Initialized
INFO - 2019-12-19 13:22:09 --> Language Class Initialized
INFO - 2019-12-19 13:22:09 --> Loader Class Initialized
INFO - 2019-12-19 13:22:09 --> Helper loaded: html_helper
INFO - 2019-12-19 13:22:09 --> Helper loaded: url_helper
INFO - 2019-12-19 13:22:09 --> Helper loaded: form_helper
INFO - 2019-12-19 13:22:09 --> Database Driver Class Initialized
INFO - 2019-12-19 13:22:10 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:22:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:22:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:22:10 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:22:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:22:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:22:10 --> Controller Class Initialized
DEBUG - 2019-12-19 13:22:10 --> Create_User constructer got called..
INFO - 2019-12-19 13:22:10 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:22:10 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:22:10 --> show_groups from DB
INFO - 2019-12-19 13:22:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:22:10 --> Final output sent to browser
DEBUG - 2019-12-19 13:22:10 --> Total execution time: 0.3360
INFO - 2019-12-19 13:23:04 --> Config Class Initialized
INFO - 2019-12-19 13:23:04 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:23:04 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:23:04 --> Utf8 Class Initialized
INFO - 2019-12-19 13:23:04 --> URI Class Initialized
INFO - 2019-12-19 13:23:04 --> Router Class Initialized
INFO - 2019-12-19 13:23:04 --> Output Class Initialized
INFO - 2019-12-19 13:23:04 --> Security Class Initialized
DEBUG - 2019-12-19 13:23:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:23:04 --> Input Class Initialized
INFO - 2019-12-19 13:23:04 --> Language Class Initialized
INFO - 2019-12-19 13:23:04 --> Loader Class Initialized
INFO - 2019-12-19 13:23:04 --> Helper loaded: html_helper
INFO - 2019-12-19 13:23:04 --> Helper loaded: url_helper
INFO - 2019-12-19 13:23:04 --> Helper loaded: form_helper
INFO - 2019-12-19 13:23:04 --> Database Driver Class Initialized
INFO - 2019-12-19 13:23:04 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:23:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:23:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:23:04 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:23:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:23:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:23:04 --> Controller Class Initialized
DEBUG - 2019-12-19 13:23:04 --> Create_User constructer got called..
INFO - 2019-12-19 13:23:04 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:23:04 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:23:04 --> show_groups from DB
INFO - 2019-12-19 13:23:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:23:04 --> Final output sent to browser
DEBUG - 2019-12-19 13:23:04 --> Total execution time: 0.3680
INFO - 2019-12-19 13:23:28 --> Config Class Initialized
INFO - 2019-12-19 13:23:28 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:23:28 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:23:28 --> Utf8 Class Initialized
INFO - 2019-12-19 13:23:28 --> URI Class Initialized
INFO - 2019-12-19 13:23:28 --> Router Class Initialized
INFO - 2019-12-19 13:23:28 --> Output Class Initialized
INFO - 2019-12-19 13:23:28 --> Security Class Initialized
DEBUG - 2019-12-19 13:23:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:23:28 --> Input Class Initialized
INFO - 2019-12-19 13:23:28 --> Language Class Initialized
INFO - 2019-12-19 13:23:28 --> Loader Class Initialized
INFO - 2019-12-19 13:23:28 --> Helper loaded: html_helper
INFO - 2019-12-19 13:23:28 --> Helper loaded: url_helper
INFO - 2019-12-19 13:23:28 --> Helper loaded: form_helper
INFO - 2019-12-19 13:23:28 --> Database Driver Class Initialized
INFO - 2019-12-19 13:23:28 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:23:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:23:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:23:28 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:23:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:23:28 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:23:28 --> Controller Class Initialized
DEBUG - 2019-12-19 13:23:28 --> Create_User constructer got called..
INFO - 2019-12-19 13:23:28 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:23:28 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:23:28 --> show_users from DB
INFO - 2019-12-19 13:23:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:23:28 --> Final output sent to browser
DEBUG - 2019-12-19 13:23:28 --> Total execution time: 0.3510
INFO - 2019-12-19 13:24:15 --> Config Class Initialized
INFO - 2019-12-19 13:24:15 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:24:15 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:24:15 --> Utf8 Class Initialized
INFO - 2019-12-19 13:24:15 --> URI Class Initialized
INFO - 2019-12-19 13:24:15 --> Router Class Initialized
INFO - 2019-12-19 13:24:15 --> Output Class Initialized
INFO - 2019-12-19 13:24:15 --> Security Class Initialized
DEBUG - 2019-12-19 13:24:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:24:15 --> Input Class Initialized
INFO - 2019-12-19 13:24:15 --> Language Class Initialized
INFO - 2019-12-19 13:24:15 --> Loader Class Initialized
INFO - 2019-12-19 13:24:15 --> Helper loaded: html_helper
INFO - 2019-12-19 13:24:15 --> Helper loaded: url_helper
INFO - 2019-12-19 13:24:15 --> Helper loaded: form_helper
INFO - 2019-12-19 13:24:15 --> Database Driver Class Initialized
INFO - 2019-12-19 13:24:15 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:24:15 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:24:15 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:24:15 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:24:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:24:15 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:24:15 --> Controller Class Initialized
DEBUG - 2019-12-19 13:24:15 --> Create_User constructer got called..
INFO - 2019-12-19 13:24:15 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:24:15 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:24:15 --> show_users from DB
INFO - 2019-12-19 13:24:15 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:24:15 --> Final output sent to browser
DEBUG - 2019-12-19 13:24:15 --> Total execution time: 0.3750
INFO - 2019-12-19 13:24:43 --> Config Class Initialized
INFO - 2019-12-19 13:24:43 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:24:43 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:24:43 --> Utf8 Class Initialized
INFO - 2019-12-19 13:24:43 --> URI Class Initialized
INFO - 2019-12-19 13:24:43 --> Router Class Initialized
INFO - 2019-12-19 13:24:43 --> Output Class Initialized
INFO - 2019-12-19 13:24:43 --> Security Class Initialized
DEBUG - 2019-12-19 13:24:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:24:43 --> Input Class Initialized
INFO - 2019-12-19 13:24:43 --> Language Class Initialized
INFO - 2019-12-19 13:24:43 --> Loader Class Initialized
INFO - 2019-12-19 13:24:43 --> Helper loaded: html_helper
INFO - 2019-12-19 13:24:43 --> Helper loaded: url_helper
INFO - 2019-12-19 13:24:43 --> Helper loaded: form_helper
INFO - 2019-12-19 13:24:43 --> Database Driver Class Initialized
INFO - 2019-12-19 13:24:43 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:24:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:24:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:24:44 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:24:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:24:44 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:24:44 --> Controller Class Initialized
DEBUG - 2019-12-19 13:24:44 --> Create_User constructer got called..
INFO - 2019-12-19 13:24:44 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:24:44 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:24:44 --> show_users from DB
INFO - 2019-12-19 13:24:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:24:44 --> Final output sent to browser
DEBUG - 2019-12-19 13:24:44 --> Total execution time: 0.3680
INFO - 2019-12-19 13:24:48 --> Config Class Initialized
INFO - 2019-12-19 13:24:48 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:24:48 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:24:48 --> Utf8 Class Initialized
INFO - 2019-12-19 13:24:48 --> URI Class Initialized
INFO - 2019-12-19 13:24:48 --> Router Class Initialized
INFO - 2019-12-19 13:24:48 --> Output Class Initialized
INFO - 2019-12-19 13:24:48 --> Security Class Initialized
DEBUG - 2019-12-19 13:24:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:24:48 --> Input Class Initialized
INFO - 2019-12-19 13:24:48 --> Language Class Initialized
INFO - 2019-12-19 13:24:48 --> Loader Class Initialized
INFO - 2019-12-19 13:24:48 --> Helper loaded: html_helper
INFO - 2019-12-19 13:24:48 --> Helper loaded: url_helper
INFO - 2019-12-19 13:24:48 --> Helper loaded: form_helper
INFO - 2019-12-19 13:24:48 --> Database Driver Class Initialized
INFO - 2019-12-19 13:24:49 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:24:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:24:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:24:49 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:24:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:24:49 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:24:49 --> Controller Class Initialized
DEBUG - 2019-12-19 13:24:49 --> Create_User constructer got called..
INFO - 2019-12-19 13:24:49 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:24:49 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:24:49 --> show_users from DB
INFO - 2019-12-19 13:24:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:24:49 --> Final output sent to browser
DEBUG - 2019-12-19 13:24:49 --> Total execution time: 0.3370
INFO - 2019-12-19 13:24:51 --> Config Class Initialized
INFO - 2019-12-19 13:24:51 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:24:52 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:24:52 --> Utf8 Class Initialized
INFO - 2019-12-19 13:24:52 --> URI Class Initialized
INFO - 2019-12-19 13:24:52 --> Router Class Initialized
INFO - 2019-12-19 13:24:52 --> Output Class Initialized
INFO - 2019-12-19 13:24:52 --> Security Class Initialized
DEBUG - 2019-12-19 13:24:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:24:52 --> Input Class Initialized
INFO - 2019-12-19 13:24:52 --> Language Class Initialized
INFO - 2019-12-19 13:24:52 --> Loader Class Initialized
INFO - 2019-12-19 13:24:52 --> Helper loaded: html_helper
INFO - 2019-12-19 13:24:52 --> Helper loaded: url_helper
INFO - 2019-12-19 13:24:52 --> Helper loaded: form_helper
INFO - 2019-12-19 13:24:52 --> Database Driver Class Initialized
INFO - 2019-12-19 13:24:52 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:24:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:24:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:24:52 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:24:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:24:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:24:52 --> Controller Class Initialized
DEBUG - 2019-12-19 13:24:52 --> Create_User constructer got called..
DEBUG - 2019-12-19 13:24:52 --> loading configurable menu with result=
INFO - 2019-12-19 13:24:52 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:24:52 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 13:24:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 13:24:52 --> Final output sent to browser
DEBUG - 2019-12-19 13:24:52 --> Total execution time: 0.3720
INFO - 2019-12-19 13:26:03 --> Config Class Initialized
INFO - 2019-12-19 13:26:03 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:26:03 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:26:03 --> Utf8 Class Initialized
INFO - 2019-12-19 13:26:03 --> URI Class Initialized
INFO - 2019-12-19 13:26:03 --> Router Class Initialized
INFO - 2019-12-19 13:26:03 --> Output Class Initialized
INFO - 2019-12-19 13:26:03 --> Security Class Initialized
DEBUG - 2019-12-19 13:26:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:26:03 --> Input Class Initialized
INFO - 2019-12-19 13:26:03 --> Language Class Initialized
INFO - 2019-12-19 13:26:03 --> Loader Class Initialized
INFO - 2019-12-19 13:26:03 --> Helper loaded: html_helper
INFO - 2019-12-19 13:26:03 --> Helper loaded: url_helper
INFO - 2019-12-19 13:26:03 --> Helper loaded: form_helper
INFO - 2019-12-19 13:26:03 --> Database Driver Class Initialized
INFO - 2019-12-19 13:26:03 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:26:03 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:26:03 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:26:03 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:26:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:26:03 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:26:03 --> Controller Class Initialized
DEBUG - 2019-12-19 13:26:03 --> Create_User constructer got called..
DEBUG - 2019-12-19 13:26:03 --> loading configurable menu with result=
INFO - 2019-12-19 13:26:03 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:26:03 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 13:26:03 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 13:26:03 --> Final output sent to browser
DEBUG - 2019-12-19 13:26:03 --> Total execution time: 0.3660
INFO - 2019-12-19 13:26:15 --> Config Class Initialized
INFO - 2019-12-19 13:26:15 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:26:15 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:26:15 --> Utf8 Class Initialized
INFO - 2019-12-19 13:26:15 --> URI Class Initialized
INFO - 2019-12-19 13:26:15 --> Router Class Initialized
INFO - 2019-12-19 13:26:15 --> Output Class Initialized
INFO - 2019-12-19 13:26:15 --> Security Class Initialized
DEBUG - 2019-12-19 13:26:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:26:15 --> Input Class Initialized
INFO - 2019-12-19 13:26:15 --> Language Class Initialized
INFO - 2019-12-19 13:26:15 --> Loader Class Initialized
INFO - 2019-12-19 13:26:15 --> Helper loaded: html_helper
INFO - 2019-12-19 13:26:15 --> Helper loaded: url_helper
INFO - 2019-12-19 13:26:15 --> Helper loaded: form_helper
INFO - 2019-12-19 13:26:15 --> Database Driver Class Initialized
INFO - 2019-12-19 13:26:16 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:26:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:26:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:26:16 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:26:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:26:16 --> Controller Class Initialized
DEBUG - 2019-12-19 13:26:16 --> Create_User constructer got called..
DEBUG - 2019-12-19 13:26:16 --> loading configurable menu with result=
INFO - 2019-12-19 13:26:16 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:26:16 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 13:26:16 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 13:26:16 --> Final output sent to browser
DEBUG - 2019-12-19 13:26:16 --> Total execution time: 0.4200
INFO - 2019-12-19 13:26:17 --> Config Class Initialized
INFO - 2019-12-19 13:26:17 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:26:17 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:26:17 --> Utf8 Class Initialized
INFO - 2019-12-19 13:26:17 --> URI Class Initialized
INFO - 2019-12-19 13:26:17 --> Router Class Initialized
INFO - 2019-12-19 13:26:17 --> Output Class Initialized
INFO - 2019-12-19 13:26:17 --> Security Class Initialized
DEBUG - 2019-12-19 13:26:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:26:17 --> Input Class Initialized
INFO - 2019-12-19 13:26:17 --> Language Class Initialized
INFO - 2019-12-19 13:26:17 --> Loader Class Initialized
INFO - 2019-12-19 13:26:17 --> Helper loaded: html_helper
INFO - 2019-12-19 13:26:17 --> Helper loaded: url_helper
INFO - 2019-12-19 13:26:17 --> Helper loaded: form_helper
INFO - 2019-12-19 13:26:17 --> Database Driver Class Initialized
INFO - 2019-12-19 13:26:17 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:26:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:26:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:26:17 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:26:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:26:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:26:17 --> Controller Class Initialized
DEBUG - 2019-12-19 13:26:17 --> Create_User constructer got called..
DEBUG - 2019-12-19 13:26:17 --> loading configurable menu with result=
INFO - 2019-12-19 13:26:17 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:26:17 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 13:26:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 13:26:17 --> Final output sent to browser
DEBUG - 2019-12-19 13:26:17 --> Total execution time: 0.5570
INFO - 2019-12-19 13:26:18 --> Config Class Initialized
INFO - 2019-12-19 13:26:18 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:26:18 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:26:18 --> Utf8 Class Initialized
INFO - 2019-12-19 13:26:18 --> URI Class Initialized
INFO - 2019-12-19 13:26:18 --> Router Class Initialized
INFO - 2019-12-19 13:26:18 --> Output Class Initialized
INFO - 2019-12-19 13:26:19 --> Security Class Initialized
DEBUG - 2019-12-19 13:26:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:26:19 --> Input Class Initialized
INFO - 2019-12-19 13:26:19 --> Language Class Initialized
INFO - 2019-12-19 13:26:19 --> Loader Class Initialized
INFO - 2019-12-19 13:26:19 --> Helper loaded: html_helper
INFO - 2019-12-19 13:26:19 --> Helper loaded: url_helper
INFO - 2019-12-19 13:26:19 --> Helper loaded: form_helper
INFO - 2019-12-19 13:26:19 --> Database Driver Class Initialized
INFO - 2019-12-19 13:26:19 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:26:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:26:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:26:19 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:26:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:26:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:26:19 --> Controller Class Initialized
DEBUG - 2019-12-19 13:26:19 --> Create_User constructer got called..
INFO - 2019-12-19 13:26:19 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:26:19 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:26:19 --> show_users from DB
INFO - 2019-12-19 13:26:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:26:19 --> Final output sent to browser
DEBUG - 2019-12-19 13:26:19 --> Total execution time: 0.4400
INFO - 2019-12-19 13:26:21 --> Config Class Initialized
INFO - 2019-12-19 13:26:21 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:26:21 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:26:21 --> Utf8 Class Initialized
INFO - 2019-12-19 13:26:21 --> URI Class Initialized
INFO - 2019-12-19 13:26:21 --> Router Class Initialized
INFO - 2019-12-19 13:26:21 --> Output Class Initialized
INFO - 2019-12-19 13:26:21 --> Security Class Initialized
DEBUG - 2019-12-19 13:26:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:26:21 --> Input Class Initialized
INFO - 2019-12-19 13:26:21 --> Language Class Initialized
INFO - 2019-12-19 13:26:21 --> Loader Class Initialized
INFO - 2019-12-19 13:26:21 --> Helper loaded: html_helper
INFO - 2019-12-19 13:26:21 --> Helper loaded: url_helper
INFO - 2019-12-19 13:26:22 --> Helper loaded: form_helper
INFO - 2019-12-19 13:26:22 --> Database Driver Class Initialized
INFO - 2019-12-19 13:26:22 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:26:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:26:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:26:22 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:26:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:26:22 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:26:22 --> Controller Class Initialized
DEBUG - 2019-12-19 13:26:22 --> Create_User constructer got called..
INFO - 2019-12-19 13:26:22 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:26:22 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:26:22 --> show_groups from DB
INFO - 2019-12-19 13:26:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 13:26:22 --> Final output sent to browser
DEBUG - 2019-12-19 13:26:22 --> Total execution time: 0.4110
INFO - 2019-12-19 13:26:27 --> Config Class Initialized
INFO - 2019-12-19 13:26:27 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:26:27 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:26:27 --> Utf8 Class Initialized
INFO - 2019-12-19 13:26:27 --> URI Class Initialized
INFO - 2019-12-19 13:26:27 --> Router Class Initialized
INFO - 2019-12-19 13:26:27 --> Output Class Initialized
INFO - 2019-12-19 13:26:27 --> Security Class Initialized
DEBUG - 2019-12-19 13:26:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:26:27 --> Input Class Initialized
INFO - 2019-12-19 13:26:27 --> Language Class Initialized
INFO - 2019-12-19 13:26:27 --> Loader Class Initialized
INFO - 2019-12-19 13:26:27 --> Helper loaded: html_helper
INFO - 2019-12-19 13:26:27 --> Helper loaded: url_helper
INFO - 2019-12-19 13:26:27 --> Helper loaded: form_helper
INFO - 2019-12-19 13:26:27 --> Database Driver Class Initialized
INFO - 2019-12-19 13:26:27 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:26:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:26:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:26:27 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:26:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:26:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:26:27 --> Controller Class Initialized
DEBUG - 2019-12-19 13:26:27 --> loading Configarable_Login model...
INFO - 2019-12-19 13:26:27 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-19 13:26:27 --> calling countlastsevendays() method for role=ADMINUSER
DEBUG - 2019-12-19 13:26:27 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-19 13:26:27 --> Array
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

DEBUG - 2019-12-19 13:26:27 --> loading configurable menu with result=Array
DEBUG - 2019-12-19 13:26:27 --> loading view public\Dashboard
INFO - 2019-12-19 13:26:27 --> Model "User_Login_Model" initialized
INFO - 2019-12-19 13:26:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-19 13:26:27 --> Final output sent to browser
DEBUG - 2019-12-19 13:26:27 --> Total execution time: 0.4670
INFO - 2019-12-19 13:26:31 --> Config Class Initialized
INFO - 2019-12-19 13:26:31 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:26:31 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:26:31 --> Utf8 Class Initialized
INFO - 2019-12-19 13:26:31 --> URI Class Initialized
INFO - 2019-12-19 13:26:31 --> Router Class Initialized
INFO - 2019-12-19 13:26:31 --> Output Class Initialized
INFO - 2019-12-19 13:26:31 --> Security Class Initialized
DEBUG - 2019-12-19 13:26:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:26:31 --> Input Class Initialized
INFO - 2019-12-19 13:26:31 --> Language Class Initialized
INFO - 2019-12-19 13:26:31 --> Loader Class Initialized
INFO - 2019-12-19 13:26:31 --> Helper loaded: html_helper
INFO - 2019-12-19 13:26:31 --> Helper loaded: url_helper
INFO - 2019-12-19 13:26:31 --> Helper loaded: form_helper
INFO - 2019-12-19 13:26:31 --> Database Driver Class Initialized
INFO - 2019-12-19 13:26:31 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:26:31 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:26:31 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:26:31 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:26:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:26:31 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:26:31 --> Controller Class Initialized
DEBUG - 2019-12-19 13:26:31 --> Create_User constructer got called..
DEBUG - 2019-12-19 13:26:31 --> loading configurable menu with result=
INFO - 2019-12-19 13:26:31 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:26:31 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-19 13:26:31 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-19 13:26:31 --> Final output sent to browser
DEBUG - 2019-12-19 13:26:31 --> Total execution time: 0.3460
INFO - 2019-12-19 13:27:39 --> Config Class Initialized
INFO - 2019-12-19 13:27:39 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:27:39 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:27:39 --> Utf8 Class Initialized
INFO - 2019-12-19 13:27:39 --> URI Class Initialized
INFO - 2019-12-19 13:27:39 --> Router Class Initialized
INFO - 2019-12-19 13:27:39 --> Output Class Initialized
INFO - 2019-12-19 13:27:39 --> Security Class Initialized
DEBUG - 2019-12-19 13:27:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:27:39 --> Input Class Initialized
INFO - 2019-12-19 13:27:39 --> Language Class Initialized
INFO - 2019-12-19 13:27:39 --> Loader Class Initialized
INFO - 2019-12-19 13:27:39 --> Helper loaded: html_helper
INFO - 2019-12-19 13:27:39 --> Helper loaded: url_helper
INFO - 2019-12-19 13:27:39 --> Helper loaded: form_helper
INFO - 2019-12-19 13:27:39 --> Database Driver Class Initialized
INFO - 2019-12-19 13:27:39 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:27:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:27:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:27:39 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:27:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:27:39 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:27:39 --> Controller Class Initialized
DEBUG - 2019-12-19 13:27:39 --> Create_User constructer got called..
INFO - 2019-12-19 13:27:39 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:27:39 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:27:39 --> show_users from DB
INFO - 2019-12-19 13:27:39 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:27:39 --> Final output sent to browser
DEBUG - 2019-12-19 13:27:39 --> Total execution time: 0.3660
INFO - 2019-12-19 13:39:16 --> Config Class Initialized
INFO - 2019-12-19 13:39:16 --> Hooks Class Initialized
DEBUG - 2019-12-19 13:39:16 --> UTF-8 Support Enabled
INFO - 2019-12-19 13:39:16 --> Utf8 Class Initialized
INFO - 2019-12-19 13:39:16 --> URI Class Initialized
INFO - 2019-12-19 13:39:16 --> Router Class Initialized
INFO - 2019-12-19 13:39:16 --> Output Class Initialized
INFO - 2019-12-19 13:39:16 --> Security Class Initialized
DEBUG - 2019-12-19 13:39:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 13:39:16 --> Input Class Initialized
INFO - 2019-12-19 13:39:16 --> Language Class Initialized
INFO - 2019-12-19 13:39:16 --> Loader Class Initialized
INFO - 2019-12-19 13:39:16 --> Helper loaded: html_helper
INFO - 2019-12-19 13:39:16 --> Helper loaded: url_helper
INFO - 2019-12-19 13:39:16 --> Helper loaded: form_helper
INFO - 2019-12-19 13:39:16 --> Database Driver Class Initialized
INFO - 2019-12-19 13:39:16 --> Form Validation Class Initialized
DEBUG - 2019-12-19 13:39:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 13:39:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 13:39:16 --> Encryption Class Initialized
DEBUG - 2019-12-19 13:39:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 13:39:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 13:39:16 --> Controller Class Initialized
DEBUG - 2019-12-19 13:39:16 --> Create_User constructer got called..
INFO - 2019-12-19 13:39:16 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 13:39:16 --> showing all user from db tblusers...
DEBUG - 2019-12-19 13:39:16 --> show_users from DB
INFO - 2019-12-19 13:39:16 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 13:39:17 --> Final output sent to browser
DEBUG - 2019-12-19 13:39:17 --> Total execution time: 0.4575
INFO - 2019-12-19 14:01:34 --> Config Class Initialized
INFO - 2019-12-19 14:01:34 --> Hooks Class Initialized
DEBUG - 2019-12-19 14:01:34 --> UTF-8 Support Enabled
INFO - 2019-12-19 14:01:34 --> Utf8 Class Initialized
INFO - 2019-12-19 14:01:34 --> URI Class Initialized
INFO - 2019-12-19 14:01:34 --> Router Class Initialized
INFO - 2019-12-19 14:01:34 --> Output Class Initialized
INFO - 2019-12-19 14:01:34 --> Security Class Initialized
DEBUG - 2019-12-19 14:01:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 14:01:34 --> Input Class Initialized
INFO - 2019-12-19 14:01:34 --> Language Class Initialized
INFO - 2019-12-19 14:01:34 --> Loader Class Initialized
INFO - 2019-12-19 14:01:34 --> Helper loaded: html_helper
INFO - 2019-12-19 14:01:34 --> Helper loaded: url_helper
INFO - 2019-12-19 14:01:34 --> Helper loaded: form_helper
INFO - 2019-12-19 14:01:34 --> Database Driver Class Initialized
INFO - 2019-12-19 14:01:34 --> Form Validation Class Initialized
DEBUG - 2019-12-19 14:01:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 14:01:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 14:01:34 --> Encryption Class Initialized
DEBUG - 2019-12-19 14:01:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 14:01:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 14:01:34 --> Controller Class Initialized
DEBUG - 2019-12-19 14:01:34 --> Create_User constructer got called..
INFO - 2019-12-19 14:01:34 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 14:01:34 --> showing all user from db tblusers...
DEBUG - 2019-12-19 14:01:34 --> show_users from DB
INFO - 2019-12-19 14:01:34 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 14:01:34 --> Final output sent to browser
DEBUG - 2019-12-19 14:01:34 --> Total execution time: 0.4145
INFO - 2019-12-19 14:09:51 --> Config Class Initialized
INFO - 2019-12-19 14:09:51 --> Hooks Class Initialized
DEBUG - 2019-12-19 14:09:51 --> UTF-8 Support Enabled
INFO - 2019-12-19 14:09:51 --> Utf8 Class Initialized
INFO - 2019-12-19 14:09:51 --> URI Class Initialized
INFO - 2019-12-19 14:09:51 --> Router Class Initialized
INFO - 2019-12-19 14:09:51 --> Output Class Initialized
INFO - 2019-12-19 14:09:51 --> Security Class Initialized
DEBUG - 2019-12-19 14:09:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 14:09:51 --> Input Class Initialized
INFO - 2019-12-19 14:09:51 --> Language Class Initialized
INFO - 2019-12-19 14:09:51 --> Loader Class Initialized
INFO - 2019-12-19 14:09:51 --> Helper loaded: html_helper
INFO - 2019-12-19 14:09:51 --> Helper loaded: url_helper
INFO - 2019-12-19 14:09:51 --> Helper loaded: form_helper
INFO - 2019-12-19 14:09:51 --> Database Driver Class Initialized
INFO - 2019-12-19 14:09:51 --> Form Validation Class Initialized
DEBUG - 2019-12-19 14:09:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 14:09:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 14:09:51 --> Encryption Class Initialized
DEBUG - 2019-12-19 14:09:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 14:09:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 14:09:51 --> Controller Class Initialized
DEBUG - 2019-12-19 14:09:51 --> Create_User constructer got called..
INFO - 2019-12-19 14:09:51 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 14:09:51 --> showing all user from db tblusers...
DEBUG - 2019-12-19 14:09:51 --> show_groups from DB
INFO - 2019-12-19 14:09:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-19 14:09:51 --> Final output sent to browser
DEBUG - 2019-12-19 14:09:51 --> Total execution time: 0.3197
INFO - 2019-12-19 14:09:59 --> Config Class Initialized
INFO - 2019-12-19 14:09:59 --> Hooks Class Initialized
DEBUG - 2019-12-19 14:09:59 --> UTF-8 Support Enabled
INFO - 2019-12-19 14:09:59 --> Utf8 Class Initialized
INFO - 2019-12-19 14:09:59 --> URI Class Initialized
INFO - 2019-12-19 14:09:59 --> Router Class Initialized
INFO - 2019-12-19 14:09:59 --> Output Class Initialized
INFO - 2019-12-19 14:09:59 --> Security Class Initialized
DEBUG - 2019-12-19 14:09:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 14:09:59 --> Input Class Initialized
INFO - 2019-12-19 14:09:59 --> Language Class Initialized
INFO - 2019-12-19 14:09:59 --> Loader Class Initialized
INFO - 2019-12-19 14:09:59 --> Helper loaded: html_helper
INFO - 2019-12-19 14:09:59 --> Helper loaded: url_helper
INFO - 2019-12-19 14:09:59 --> Helper loaded: form_helper
INFO - 2019-12-19 14:09:59 --> Database Driver Class Initialized
INFO - 2019-12-19 14:09:59 --> Form Validation Class Initialized
DEBUG - 2019-12-19 14:09:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 14:09:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 14:09:59 --> Encryption Class Initialized
DEBUG - 2019-12-19 14:09:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 14:09:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 14:09:59 --> Controller Class Initialized
DEBUG - 2019-12-19 14:09:59 --> Create_User constructer got called..
INFO - 2019-12-19 14:09:59 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 14:09:59 --> showing all user from db tblusers...
DEBUG - 2019-12-19 14:09:59 --> show_users from DB
INFO - 2019-12-19 14:09:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 14:09:59 --> Final output sent to browser
DEBUG - 2019-12-19 14:09:59 --> Total execution time: 0.4091
INFO - 2019-12-19 14:43:58 --> Config Class Initialized
INFO - 2019-12-19 14:43:58 --> Hooks Class Initialized
DEBUG - 2019-12-19 14:43:58 --> UTF-8 Support Enabled
INFO - 2019-12-19 14:43:58 --> Utf8 Class Initialized
INFO - 2019-12-19 14:43:58 --> URI Class Initialized
INFO - 2019-12-19 14:43:58 --> Router Class Initialized
INFO - 2019-12-19 14:43:58 --> Output Class Initialized
INFO - 2019-12-19 14:43:58 --> Security Class Initialized
DEBUG - 2019-12-19 14:43:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 14:43:58 --> Input Class Initialized
INFO - 2019-12-19 14:43:58 --> Language Class Initialized
INFO - 2019-12-19 14:43:58 --> Loader Class Initialized
INFO - 2019-12-19 14:43:58 --> Helper loaded: html_helper
INFO - 2019-12-19 14:43:58 --> Helper loaded: url_helper
INFO - 2019-12-19 14:43:58 --> Helper loaded: form_helper
INFO - 2019-12-19 14:43:58 --> Database Driver Class Initialized
INFO - 2019-12-19 14:43:58 --> Form Validation Class Initialized
DEBUG - 2019-12-19 14:43:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 14:43:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 14:43:58 --> Encryption Class Initialized
DEBUG - 2019-12-19 14:43:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 14:43:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 14:43:58 --> Controller Class Initialized
DEBUG - 2019-12-19 14:43:58 --> Create_User constructer got called..
INFO - 2019-12-19 14:43:58 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 14:43:58 --> showing all user from db tblusers...
DEBUG - 2019-12-19 14:43:58 --> show_users from DB
INFO - 2019-12-19 14:43:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 14:43:58 --> Final output sent to browser
DEBUG - 2019-12-19 14:43:58 --> Total execution time: 0.5528
INFO - 2019-12-19 14:44:06 --> Config Class Initialized
INFO - 2019-12-19 14:44:06 --> Hooks Class Initialized
DEBUG - 2019-12-19 14:44:06 --> UTF-8 Support Enabled
INFO - 2019-12-19 14:44:06 --> Utf8 Class Initialized
INFO - 2019-12-19 14:44:06 --> URI Class Initialized
INFO - 2019-12-19 14:44:06 --> Router Class Initialized
INFO - 2019-12-19 14:44:06 --> Output Class Initialized
INFO - 2019-12-19 14:44:06 --> Security Class Initialized
DEBUG - 2019-12-19 14:44:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-19 14:44:06 --> Input Class Initialized
INFO - 2019-12-19 14:44:06 --> Language Class Initialized
INFO - 2019-12-19 14:44:06 --> Loader Class Initialized
INFO - 2019-12-19 14:44:06 --> Helper loaded: html_helper
INFO - 2019-12-19 14:44:06 --> Helper loaded: url_helper
INFO - 2019-12-19 14:44:06 --> Helper loaded: form_helper
INFO - 2019-12-19 14:44:06 --> Database Driver Class Initialized
INFO - 2019-12-19 14:44:06 --> Form Validation Class Initialized
DEBUG - 2019-12-19 14:44:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-19 14:44:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-19 14:44:06 --> Encryption Class Initialized
DEBUG - 2019-12-19 14:44:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-19 14:44:06 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-19 14:44:06 --> Controller Class Initialized
DEBUG - 2019-12-19 14:44:06 --> Create_User constructer got called..
INFO - 2019-12-19 14:44:06 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-19 14:44:06 --> showing all user from db tblusers...
DEBUG - 2019-12-19 14:44:07 --> show_users from DB
INFO - 2019-12-19 14:44:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-19 14:44:07 --> Final output sent to browser
DEBUG - 2019-12-19 14:44:07 --> Total execution time: 0.5108
