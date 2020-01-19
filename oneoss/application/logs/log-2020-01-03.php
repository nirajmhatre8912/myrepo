<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2020-01-03 05:29:22 --> Config Class Initialized
INFO - 2020-01-03 05:29:22 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:29:22 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:29:22 --> Utf8 Class Initialized
INFO - 2020-01-03 05:29:22 --> URI Class Initialized
DEBUG - 2020-01-03 05:29:22 --> No URI present. Default controller set.
INFO - 2020-01-03 05:29:22 --> Router Class Initialized
INFO - 2020-01-03 05:29:22 --> Output Class Initialized
INFO - 2020-01-03 05:29:22 --> Security Class Initialized
DEBUG - 2020-01-03 05:29:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:29:22 --> Input Class Initialized
INFO - 2020-01-03 05:29:22 --> Language Class Initialized
INFO - 2020-01-03 05:29:22 --> Loader Class Initialized
INFO - 2020-01-03 05:29:23 --> Helper loaded: html_helper
INFO - 2020-01-03 05:29:23 --> Helper loaded: url_helper
INFO - 2020-01-03 05:29:23 --> Helper loaded: form_helper
INFO - 2020-01-03 05:29:23 --> Database Driver Class Initialized
INFO - 2020-01-03 05:29:23 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:29:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:29:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:29:23 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:29:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:29:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:29:23 --> Controller Class Initialized
INFO - 2020-01-03 05:29:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-03 05:29:23 --> Final output sent to browser
DEBUG - 2020-01-03 05:29:23 --> Total execution time: 0.1802
INFO - 2020-01-03 05:29:34 --> Config Class Initialized
INFO - 2020-01-03 05:29:34 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:29:34 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:29:34 --> Utf8 Class Initialized
INFO - 2020-01-03 05:29:34 --> URI Class Initialized
INFO - 2020-01-03 05:29:34 --> Router Class Initialized
INFO - 2020-01-03 05:29:34 --> Output Class Initialized
INFO - 2020-01-03 05:29:34 --> Security Class Initialized
DEBUG - 2020-01-03 05:29:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:29:34 --> Input Class Initialized
INFO - 2020-01-03 05:29:34 --> Language Class Initialized
INFO - 2020-01-03 05:29:34 --> Loader Class Initialized
INFO - 2020-01-03 05:29:34 --> Helper loaded: html_helper
INFO - 2020-01-03 05:29:34 --> Helper loaded: url_helper
INFO - 2020-01-03 05:29:34 --> Helper loaded: form_helper
INFO - 2020-01-03 05:29:34 --> Database Driver Class Initialized
INFO - 2020-01-03 05:29:34 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:29:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:29:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:29:34 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:29:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:29:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:29:34 --> Controller Class Initialized
INFO - 2020-01-03 05:29:34 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-03 05:29:34 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:29:34 --> getAuth method got called...
DEBUG - 2020-01-03 05:29:34 --> Username :- DevOss
INFO - 2020-01-03 05:29:34 --> this is db user...
DEBUG - 2020-01-03 05:29:34 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-03 05:29:35 --> Password hashing output = $2y$10$t9Bj36N8adNaszYDKNxXm.JJC1Tc9LP9rzHxs.3TZMqa.EzDzMZ.m
DEBUG - 2020-01-03 05:29:35 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
DEBUG - 2020-01-03 05:29:35 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2020-01-03 05:29:35 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-03 05:29:35 --> Role Retrive from DB
INFO - 2020-01-03 05:29:35 --> get_group_role_mapping model = 16
DEBUG - 2020-01-03 05:29:35 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-03 05:29:35 --> loading model Active_Session
INFO - 2020-01-03 05:29:35 --> Model "Active_Session" initialized
DEBUG - 2020-01-03 05:29:35 --> calling insert_active_session()
DEBUG - 2020-01-03 05:29:35 --> insert_active_session() got called form Active_Session
DEBUG - 2020-01-03 05:29:35 --> insert success
DEBUG - 2020-01-03 05:29:35 --> loading Configarable_Login model...
INFO - 2020-01-03 05:29:35 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-03 05:29:35 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-03 05:29:35 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-03 05:29:35 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 05:29:35 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 05:29:35 --> loading view public\Dashboard
INFO - 2020-01-03 05:29:35 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-03 05:29:35 --> Final output sent to browser
DEBUG - 2020-01-03 05:29:35 --> Total execution time: 1.0770
INFO - 2020-01-03 05:30:39 --> Config Class Initialized
INFO - 2020-01-03 05:30:39 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:30:39 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:30:39 --> Utf8 Class Initialized
INFO - 2020-01-03 05:30:39 --> URI Class Initialized
INFO - 2020-01-03 05:30:39 --> Router Class Initialized
INFO - 2020-01-03 05:30:39 --> Output Class Initialized
INFO - 2020-01-03 05:30:39 --> Security Class Initialized
DEBUG - 2020-01-03 05:30:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:30:39 --> Input Class Initialized
INFO - 2020-01-03 05:30:39 --> Language Class Initialized
INFO - 2020-01-03 05:30:39 --> Loader Class Initialized
INFO - 2020-01-03 05:30:39 --> Helper loaded: html_helper
INFO - 2020-01-03 05:30:39 --> Helper loaded: url_helper
INFO - 2020-01-03 05:30:39 --> Helper loaded: form_helper
INFO - 2020-01-03 05:30:39 --> Database Driver Class Initialized
INFO - 2020-01-03 05:30:39 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:30:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:30:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:30:39 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:30:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:30:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:30:39 --> Controller Class Initialized
DEBUG - 2020-01-03 05:30:39 --> Create_User constructer got called..
INFO - 2020-01-03 05:30:39 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-03 05:30:39 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 05:30:39 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-03 05:30:39 --> Final output sent to browser
DEBUG - 2020-01-03 05:30:39 --> Total execution time: 0.2867
INFO - 2020-01-03 05:31:04 --> Config Class Initialized
INFO - 2020-01-03 05:31:04 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:31:04 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:31:04 --> Utf8 Class Initialized
INFO - 2020-01-03 05:31:04 --> URI Class Initialized
INFO - 2020-01-03 05:31:04 --> Router Class Initialized
INFO - 2020-01-03 05:31:04 --> Output Class Initialized
INFO - 2020-01-03 05:31:04 --> Security Class Initialized
DEBUG - 2020-01-03 05:31:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:31:04 --> Input Class Initialized
INFO - 2020-01-03 05:31:04 --> Language Class Initialized
INFO - 2020-01-03 05:31:04 --> Loader Class Initialized
INFO - 2020-01-03 05:31:04 --> Helper loaded: html_helper
INFO - 2020-01-03 05:31:04 --> Helper loaded: url_helper
INFO - 2020-01-03 05:31:04 --> Helper loaded: form_helper
INFO - 2020-01-03 05:31:04 --> Database Driver Class Initialized
INFO - 2020-01-03 05:31:04 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:31:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:31:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:31:04 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:31:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:31:04 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:31:04 --> Controller Class Initialized
DEBUG - 2020-01-03 05:31:04 --> Create_User constructer got called..
INFO - 2020-01-03 05:31:04 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-03 05:31:04 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 05:31:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-03 05:31:04 --> Final output sent to browser
DEBUG - 2020-01-03 05:31:04 --> Total execution time: 0.2777
INFO - 2020-01-03 05:31:06 --> Config Class Initialized
INFO - 2020-01-03 05:31:06 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:31:06 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:31:06 --> Utf8 Class Initialized
INFO - 2020-01-03 05:31:06 --> URI Class Initialized
INFO - 2020-01-03 05:31:06 --> Router Class Initialized
INFO - 2020-01-03 05:31:06 --> Output Class Initialized
INFO - 2020-01-03 05:31:06 --> Security Class Initialized
DEBUG - 2020-01-03 05:31:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:31:06 --> Input Class Initialized
INFO - 2020-01-03 05:31:06 --> Language Class Initialized
INFO - 2020-01-03 05:31:06 --> Loader Class Initialized
INFO - 2020-01-03 05:31:06 --> Helper loaded: html_helper
INFO - 2020-01-03 05:31:06 --> Helper loaded: url_helper
INFO - 2020-01-03 05:31:06 --> Helper loaded: form_helper
INFO - 2020-01-03 05:31:06 --> Database Driver Class Initialized
INFO - 2020-01-03 05:31:06 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:31:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:31:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:31:06 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:31:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:31:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:31:06 --> Controller Class Initialized
DEBUG - 2020-01-03 05:31:06 --> Create_User constructer got called..
INFO - 2020-01-03 05:31:06 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:31:06 --> getAllSubgroup model
DEBUG - 2020-01-03 05:31:06 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-03 05:31:06 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 05:31:06 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2020-01-03 05:31:06 --> Final output sent to browser
DEBUG - 2020-01-03 05:31:06 --> Total execution time: 0.2946
INFO - 2020-01-03 05:33:19 --> Config Class Initialized
INFO - 2020-01-03 05:33:19 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:19 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:19 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:19 --> URI Class Initialized
INFO - 2020-01-03 05:33:19 --> Router Class Initialized
INFO - 2020-01-03 05:33:19 --> Output Class Initialized
INFO - 2020-01-03 05:33:19 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:19 --> Input Class Initialized
INFO - 2020-01-03 05:33:19 --> Language Class Initialized
INFO - 2020-01-03 05:33:19 --> Loader Class Initialized
INFO - 2020-01-03 05:33:19 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:19 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:19 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:19 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:19 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:19 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:19 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:19 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:19 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:19 --> get_group_role_mapping model = 42
DEBUG - 2020-01-03 05:33:19 --> show_all_profile_data from DB retrived
INFO - 2020-01-03 05:33:19 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:19 --> Total execution time: 0.2257
INFO - 2020-01-03 05:33:19 --> Config Class Initialized
INFO - 2020-01-03 05:33:19 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:19 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:19 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:19 --> URI Class Initialized
INFO - 2020-01-03 05:33:19 --> Router Class Initialized
INFO - 2020-01-03 05:33:19 --> Output Class Initialized
INFO - 2020-01-03 05:33:19 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:19 --> Input Class Initialized
INFO - 2020-01-03 05:33:19 --> Language Class Initialized
INFO - 2020-01-03 05:33:19 --> Loader Class Initialized
INFO - 2020-01-03 05:33:19 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:19 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:19 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:19 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:19 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:19 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:19 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:19 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:19 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:19 --> getAllSubGroupData model = 13
DEBUG - 2020-01-03 05:33:19 --> getAllSubGroupData from DB retrived
INFO - 2020-01-03 05:33:19 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:19 --> Total execution time: 0.2237
INFO - 2020-01-03 05:33:20 --> Config Class Initialized
INFO - 2020-01-03 05:33:20 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:20 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:20 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:20 --> URI Class Initialized
INFO - 2020-01-03 05:33:20 --> Router Class Initialized
INFO - 2020-01-03 05:33:20 --> Output Class Initialized
INFO - 2020-01-03 05:33:20 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:20 --> Input Class Initialized
INFO - 2020-01-03 05:33:20 --> Language Class Initialized
INFO - 2020-01-03 05:33:20 --> Loader Class Initialized
INFO - 2020-01-03 05:33:20 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:20 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:20 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:20 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:20 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:20 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:20 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:20 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:20 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:20 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:20 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:20 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:20 --> getAllSubGroupData model = 13
DEBUG - 2020-01-03 05:33:20 --> getAllSubGroupData from DB retrived
INFO - 2020-01-03 05:33:20 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:20 --> Total execution time: 0.2386
INFO - 2020-01-03 05:33:22 --> Config Class Initialized
INFO - 2020-01-03 05:33:22 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:22 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:22 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:22 --> URI Class Initialized
INFO - 2020-01-03 05:33:22 --> Router Class Initialized
INFO - 2020-01-03 05:33:22 --> Output Class Initialized
INFO - 2020-01-03 05:33:22 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:22 --> Input Class Initialized
INFO - 2020-01-03 05:33:22 --> Language Class Initialized
INFO - 2020-01-03 05:33:22 --> Loader Class Initialized
INFO - 2020-01-03 05:33:22 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:22 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:22 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:22 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:22 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:22 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:22 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:22 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:22 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:22 --> getAllSubGroupData model = 13
DEBUG - 2020-01-03 05:33:22 --> getAllSubGroupData from DB retrived
INFO - 2020-01-03 05:33:22 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:22 --> Total execution time: 0.2386
INFO - 2020-01-03 05:33:28 --> Config Class Initialized
INFO - 2020-01-03 05:33:28 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:28 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:28 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:28 --> URI Class Initialized
INFO - 2020-01-03 05:33:28 --> Router Class Initialized
INFO - 2020-01-03 05:33:28 --> Output Class Initialized
INFO - 2020-01-03 05:33:28 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:28 --> Input Class Initialized
INFO - 2020-01-03 05:33:28 --> Language Class Initialized
INFO - 2020-01-03 05:33:28 --> Loader Class Initialized
INFO - 2020-01-03 05:33:28 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:28 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:28 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:28 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:28 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:28 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:28 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:28 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:28 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:28 --> get_group_role_mapping model = 43
DEBUG - 2020-01-03 05:33:28 --> show_all_profile_data from DB retrived
INFO - 2020-01-03 05:33:28 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:28 --> Total execution time: 0.2416
INFO - 2020-01-03 05:33:28 --> Config Class Initialized
INFO - 2020-01-03 05:33:28 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:29 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:29 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:29 --> URI Class Initialized
INFO - 2020-01-03 05:33:29 --> Router Class Initialized
INFO - 2020-01-03 05:33:29 --> Output Class Initialized
INFO - 2020-01-03 05:33:29 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:29 --> Input Class Initialized
INFO - 2020-01-03 05:33:29 --> Language Class Initialized
INFO - 2020-01-03 05:33:29 --> Loader Class Initialized
INFO - 2020-01-03 05:33:29 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:29 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:29 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:29 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:29 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:29 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:29 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:29 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:29 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:29 --> getAllSubGroupData model = 15
DEBUG - 2020-01-03 05:33:29 --> getAllSubGroupData from DB retrived
INFO - 2020-01-03 05:33:29 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:29 --> Total execution time: 0.2416
INFO - 2020-01-03 05:33:30 --> Config Class Initialized
INFO - 2020-01-03 05:33:30 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:30 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:30 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:30 --> URI Class Initialized
INFO - 2020-01-03 05:33:30 --> Router Class Initialized
INFO - 2020-01-03 05:33:30 --> Output Class Initialized
INFO - 2020-01-03 05:33:30 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:30 --> Input Class Initialized
INFO - 2020-01-03 05:33:30 --> Language Class Initialized
INFO - 2020-01-03 05:33:30 --> Loader Class Initialized
INFO - 2020-01-03 05:33:30 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:30 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:30 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:30 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:30 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:30 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:30 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:30 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:30 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:30 --> getAllSubGroupData model = 15
DEBUG - 2020-01-03 05:33:30 --> getAllSubGroupData from DB retrived
INFO - 2020-01-03 05:33:30 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:30 --> Total execution time: 0.2327
INFO - 2020-01-03 05:33:50 --> Config Class Initialized
INFO - 2020-01-03 05:33:50 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:50 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:50 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:50 --> URI Class Initialized
INFO - 2020-01-03 05:33:50 --> Router Class Initialized
INFO - 2020-01-03 05:33:50 --> Output Class Initialized
INFO - 2020-01-03 05:33:50 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:50 --> Input Class Initialized
INFO - 2020-01-03 05:33:50 --> Language Class Initialized
INFO - 2020-01-03 05:33:50 --> Loader Class Initialized
INFO - 2020-01-03 05:33:50 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:50 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:50 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:50 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:50 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:50 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:50 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:50 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:50 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:50 --> get_group_role_mapping model = 56
DEBUG - 2020-01-03 05:33:50 --> show_all_profile_data from DB retrived
INFO - 2020-01-03 05:33:50 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:50 --> Total execution time: 0.2317
INFO - 2020-01-03 05:33:50 --> Config Class Initialized
INFO - 2020-01-03 05:33:50 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:50 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:50 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:50 --> URI Class Initialized
INFO - 2020-01-03 05:33:50 --> Router Class Initialized
INFO - 2020-01-03 05:33:50 --> Output Class Initialized
INFO - 2020-01-03 05:33:50 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:50 --> Input Class Initialized
INFO - 2020-01-03 05:33:50 --> Language Class Initialized
INFO - 2020-01-03 05:33:50 --> Loader Class Initialized
INFO - 2020-01-03 05:33:50 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:50 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:50 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:50 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:50 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:50 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:50 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:50 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:50 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:50 --> getAllSubGroupData model = 12
DEBUG - 2020-01-03 05:33:50 --> getAllSubGroupData from DB retrived
INFO - 2020-01-03 05:33:50 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:50 --> Total execution time: 0.1907
INFO - 2020-01-03 05:33:53 --> Config Class Initialized
INFO - 2020-01-03 05:33:53 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:53 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:53 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:53 --> URI Class Initialized
INFO - 2020-01-03 05:33:53 --> Router Class Initialized
INFO - 2020-01-03 05:33:53 --> Output Class Initialized
INFO - 2020-01-03 05:33:53 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:53 --> Input Class Initialized
INFO - 2020-01-03 05:33:53 --> Language Class Initialized
INFO - 2020-01-03 05:33:53 --> Loader Class Initialized
INFO - 2020-01-03 05:33:53 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:53 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:53 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:54 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:54 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:54 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:54 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:54 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:54 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:54 --> getAllSubGroupData model = 12
DEBUG - 2020-01-03 05:33:54 --> getAllSubGroupData from DB retrived
INFO - 2020-01-03 05:33:54 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:54 --> Total execution time: 0.2446
INFO - 2020-01-03 05:33:54 --> Config Class Initialized
INFO - 2020-01-03 05:33:54 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:33:54 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:33:54 --> Utf8 Class Initialized
INFO - 2020-01-03 05:33:54 --> URI Class Initialized
INFO - 2020-01-03 05:33:54 --> Router Class Initialized
INFO - 2020-01-03 05:33:54 --> Output Class Initialized
INFO - 2020-01-03 05:33:54 --> Security Class Initialized
DEBUG - 2020-01-03 05:33:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:33:54 --> Input Class Initialized
INFO - 2020-01-03 05:33:54 --> Language Class Initialized
INFO - 2020-01-03 05:33:54 --> Loader Class Initialized
INFO - 2020-01-03 05:33:54 --> Helper loaded: html_helper
INFO - 2020-01-03 05:33:54 --> Helper loaded: url_helper
INFO - 2020-01-03 05:33:54 --> Helper loaded: form_helper
INFO - 2020-01-03 05:33:54 --> Database Driver Class Initialized
INFO - 2020-01-03 05:33:54 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:33:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:33:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:33:54 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:33:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:33:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:33:54 --> Controller Class Initialized
DEBUG - 2020-01-03 05:33:54 --> Create_User constructer got called..
INFO - 2020-01-03 05:33:54 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:33:54 --> getAllSubGroupData model = 12
DEBUG - 2020-01-03 05:33:54 --> getAllSubGroupData from DB retrived
INFO - 2020-01-03 05:33:54 --> Final output sent to browser
DEBUG - 2020-01-03 05:33:54 --> Total execution time: 0.2796
INFO - 2020-01-03 05:47:58 --> Config Class Initialized
INFO - 2020-01-03 05:47:58 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:47:58 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:47:58 --> Utf8 Class Initialized
INFO - 2020-01-03 05:47:58 --> URI Class Initialized
INFO - 2020-01-03 05:47:58 --> Router Class Initialized
INFO - 2020-01-03 05:47:58 --> Output Class Initialized
INFO - 2020-01-03 05:47:58 --> Security Class Initialized
DEBUG - 2020-01-03 05:47:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:47:58 --> Input Class Initialized
INFO - 2020-01-03 05:47:58 --> Language Class Initialized
INFO - 2020-01-03 05:47:58 --> Loader Class Initialized
INFO - 2020-01-03 05:47:58 --> Helper loaded: html_helper
INFO - 2020-01-03 05:47:58 --> Helper loaded: url_helper
INFO - 2020-01-03 05:47:58 --> Helper loaded: form_helper
INFO - 2020-01-03 05:47:58 --> Database Driver Class Initialized
INFO - 2020-01-03 05:47:58 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:47:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:47:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:47:58 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:47:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:47:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:47:58 --> Controller Class Initialized
DEBUG - 2020-01-03 05:47:58 --> Create_User constructer got called..
INFO - 2020-01-03 05:47:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/adminPage.php
INFO - 2020-01-03 05:47:58 --> Final output sent to browser
DEBUG - 2020-01-03 05:47:58 --> Total execution time: 0.2268
INFO - 2020-01-03 05:48:02 --> Config Class Initialized
INFO - 2020-01-03 05:48:02 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:02 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:02 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:02 --> URI Class Initialized
INFO - 2020-01-03 05:48:02 --> Router Class Initialized
INFO - 2020-01-03 05:48:02 --> Output Class Initialized
INFO - 2020-01-03 05:48:02 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:02 --> Input Class Initialized
INFO - 2020-01-03 05:48:02 --> Language Class Initialized
INFO - 2020-01-03 05:48:02 --> Loader Class Initialized
INFO - 2020-01-03 05:48:02 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:02 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:02 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:02 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:02 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:02 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:02 --> Controller Class Initialized
INFO - 2020-01-03 05:48:02 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:02 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:02 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:02 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2020-01-03 05:48:02 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:02 --> Total execution time: 0.3140
INFO - 2020-01-03 05:48:05 --> Config Class Initialized
INFO - 2020-01-03 05:48:05 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:05 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:05 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:05 --> URI Class Initialized
INFO - 2020-01-03 05:48:05 --> Router Class Initialized
INFO - 2020-01-03 05:48:05 --> Output Class Initialized
INFO - 2020-01-03 05:48:05 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:05 --> Input Class Initialized
INFO - 2020-01-03 05:48:05 --> Language Class Initialized
INFO - 2020-01-03 05:48:05 --> Loader Class Initialized
INFO - 2020-01-03 05:48:05 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:05 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:05 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:05 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:05 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:05 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:05 --> Controller Class Initialized
INFO - 2020-01-03 05:48:05 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:05 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:05 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditSearch.php
INFO - 2020-01-03 05:48:05 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:05 --> Total execution time: 0.3190
INFO - 2020-01-03 05:48:06 --> Config Class Initialized
INFO - 2020-01-03 05:48:06 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:06 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:06 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:06 --> URI Class Initialized
INFO - 2020-01-03 05:48:06 --> Router Class Initialized
INFO - 2020-01-03 05:48:06 --> Output Class Initialized
INFO - 2020-01-03 05:48:06 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:06 --> Input Class Initialized
INFO - 2020-01-03 05:48:06 --> Language Class Initialized
INFO - 2020-01-03 05:48:06 --> Loader Class Initialized
INFO - 2020-01-03 05:48:06 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:06 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:06 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:06 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:06 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:06 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:06 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:06 --> Controller Class Initialized
INFO - 2020-01-03 05:48:06 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:06 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:06 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:06 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:06 --> Total execution time: 0.2642
INFO - 2020-01-03 05:48:21 --> Config Class Initialized
INFO - 2020-01-03 05:48:21 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:21 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:21 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:21 --> URI Class Initialized
INFO - 2020-01-03 05:48:21 --> Router Class Initialized
INFO - 2020-01-03 05:48:21 --> Output Class Initialized
INFO - 2020-01-03 05:48:21 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:21 --> Input Class Initialized
INFO - 2020-01-03 05:48:21 --> Language Class Initialized
INFO - 2020-01-03 05:48:21 --> Loader Class Initialized
INFO - 2020-01-03 05:48:21 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:21 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:21 --> Config Class Initialized
INFO - 2020-01-03 05:48:21 --> Hooks Class Initialized
INFO - 2020-01-03 05:48:21 --> Helper loaded: form_helper
DEBUG - 2020-01-03 05:48:22 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:22 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:22 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:22 --> URI Class Initialized
INFO - 2020-01-03 05:48:22 --> Router Class Initialized
INFO - 2020-01-03 05:48:22 --> Output Class Initialized
INFO - 2020-01-03 05:48:22 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:22 --> Input Class Initialized
INFO - 2020-01-03 05:48:22 --> Language Class Initialized
INFO - 2020-01-03 05:48:22 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:22 --> Encryption Class Initialized
INFO - 2020-01-03 05:48:22 --> Loader Class Initialized
DEBUG - 2020-01-03 05:48:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:22 --> Controller Class Initialized
INFO - 2020-01-03 05:48:22 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:22 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:22 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:22 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:22 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:22 --> Config Class Initialized
INFO - 2020-01-03 05:48:22 --> Hooks Class Initialized
INFO - 2020-01-03 05:48:22 --> Helper loaded: form_helper
DEBUG - 2020-01-03 05:48:22 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:22 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:22 --> URI Class Initialized
INFO - 2020-01-03 05:48:22 --> Router Class Initialized
INFO - 2020-01-03 05:48:22 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:22 --> Output Class Initialized
INFO - 2020-01-03 05:48:22 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:22 --> Input Class Initialized
INFO - 2020-01-03 05:48:22 --> Final output sent to browser
INFO - 2020-01-03 05:48:22 --> Language Class Initialized
INFO - 2020-01-03 05:48:22 --> Loader Class Initialized
DEBUG - 2020-01-03 05:48:22 --> Total execution time: 0.3763
INFO - 2020-01-03 05:48:22 --> Form Validation Class Initialized
INFO - 2020-01-03 05:48:22 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:22 --> Helper loaded: url_helper
DEBUG - 2020-01-03 05:48:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:22 --> Encryption Class Initialized
INFO - 2020-01-03 05:48:22 --> Helper loaded: form_helper
DEBUG - 2020-01-03 05:48:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:22 --> Controller Class Initialized
INFO - 2020-01-03 05:48:22 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:22 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:22 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:22 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:22 --> Form Validation Class Initialized
INFO - 2020-01-03 05:48:22 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:22 --> Total execution time: 0.3738
DEBUG - 2020-01-03 05:48:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:22 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:22 --> Controller Class Initialized
INFO - 2020-01-03 05:48:22 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:22 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:22 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:22 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:22 --> Total execution time: 0.2691
INFO - 2020-01-03 05:48:23 --> Config Class Initialized
INFO - 2020-01-03 05:48:23 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:23 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:23 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:23 --> URI Class Initialized
INFO - 2020-01-03 05:48:23 --> Router Class Initialized
INFO - 2020-01-03 05:48:23 --> Output Class Initialized
INFO - 2020-01-03 05:48:23 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:23 --> Input Class Initialized
INFO - 2020-01-03 05:48:23 --> Language Class Initialized
INFO - 2020-01-03 05:48:23 --> Loader Class Initialized
INFO - 2020-01-03 05:48:23 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:23 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:23 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:23 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:23 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:23 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:23 --> Controller Class Initialized
INFO - 2020-01-03 05:48:23 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:23 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:23 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:23 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:23 --> Total execution time: 0.2268
INFO - 2020-01-03 05:48:24 --> Config Class Initialized
INFO - 2020-01-03 05:48:24 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:24 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:24 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:24 --> URI Class Initialized
INFO - 2020-01-03 05:48:24 --> Router Class Initialized
INFO - 2020-01-03 05:48:24 --> Output Class Initialized
INFO - 2020-01-03 05:48:24 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:24 --> Input Class Initialized
INFO - 2020-01-03 05:48:24 --> Language Class Initialized
INFO - 2020-01-03 05:48:24 --> Loader Class Initialized
INFO - 2020-01-03 05:48:24 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:24 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:24 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:24 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:24 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:24 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:24 --> Controller Class Initialized
INFO - 2020-01-03 05:48:24 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:24 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:24 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:24 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:24 --> Total execution time: 0.2193
INFO - 2020-01-03 05:48:24 --> Config Class Initialized
INFO - 2020-01-03 05:48:24 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:24 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:24 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:24 --> URI Class Initialized
INFO - 2020-01-03 05:48:24 --> Router Class Initialized
INFO - 2020-01-03 05:48:24 --> Output Class Initialized
INFO - 2020-01-03 05:48:24 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:24 --> Input Class Initialized
INFO - 2020-01-03 05:48:24 --> Language Class Initialized
INFO - 2020-01-03 05:48:25 --> Loader Class Initialized
INFO - 2020-01-03 05:48:25 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:25 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:25 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:25 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:25 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:25 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:25 --> Controller Class Initialized
INFO - 2020-01-03 05:48:25 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:25 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:25 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:25 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:25 --> Total execution time: 0.2019
INFO - 2020-01-03 05:48:28 --> Config Class Initialized
INFO - 2020-01-03 05:48:28 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:28 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:28 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:28 --> URI Class Initialized
INFO - 2020-01-03 05:48:28 --> Router Class Initialized
INFO - 2020-01-03 05:48:28 --> Output Class Initialized
INFO - 2020-01-03 05:48:28 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:28 --> Input Class Initialized
INFO - 2020-01-03 05:48:28 --> Language Class Initialized
INFO - 2020-01-03 05:48:28 --> Loader Class Initialized
INFO - 2020-01-03 05:48:28 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:28 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:28 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:28 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:28 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:28 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:28 --> Controller Class Initialized
INFO - 2020-01-03 05:48:28 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:28 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:28 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:28 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:28 --> Total execution time: 0.2293
INFO - 2020-01-03 05:48:28 --> Config Class Initialized
INFO - 2020-01-03 05:48:28 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:28 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:28 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:28 --> URI Class Initialized
INFO - 2020-01-03 05:48:28 --> Router Class Initialized
INFO - 2020-01-03 05:48:28 --> Output Class Initialized
INFO - 2020-01-03 05:48:28 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:28 --> Input Class Initialized
INFO - 2020-01-03 05:48:28 --> Language Class Initialized
INFO - 2020-01-03 05:48:28 --> Loader Class Initialized
INFO - 2020-01-03 05:48:28 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:28 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:28 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:28 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:28 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:28 --> Encryption Class Initialized
INFO - 2020-01-03 05:48:28 --> Config Class Initialized
INFO - 2020-01-03 05:48:28 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2020-01-03 05:48:28 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:28 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:28 --> Controller Class Initialized
INFO - 2020-01-03 05:48:28 --> URI Class Initialized
INFO - 2020-01-03 05:48:28 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:28 --> Router Class Initialized
INFO - 2020-01-03 05:48:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:28 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:28 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:28 --> Output Class Initialized
INFO - 2020-01-03 05:48:28 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:28 --> Input Class Initialized
INFO - 2020-01-03 05:48:28 --> Language Class Initialized
INFO - 2020-01-03 05:48:28 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:28 --> Total execution time: 0.2363
INFO - 2020-01-03 05:48:28 --> Loader Class Initialized
INFO - 2020-01-03 05:48:28 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:28 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:28 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:29 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:29 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:29 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:29 --> Controller Class Initialized
INFO - 2020-01-03 05:48:29 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:29 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:29 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:29 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:29 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:29 --> Total execution time: 0.2372
INFO - 2020-01-03 05:48:34 --> Config Class Initialized
INFO - 2020-01-03 05:48:34 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:34 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:34 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:34 --> URI Class Initialized
INFO - 2020-01-03 05:48:34 --> Router Class Initialized
INFO - 2020-01-03 05:48:34 --> Output Class Initialized
INFO - 2020-01-03 05:48:34 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:34 --> Input Class Initialized
INFO - 2020-01-03 05:48:34 --> Language Class Initialized
INFO - 2020-01-03 05:48:34 --> Config Class Initialized
INFO - 2020-01-03 05:48:34 --> Hooks Class Initialized
INFO - 2020-01-03 05:48:34 --> Loader Class Initialized
INFO - 2020-01-03 05:48:34 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:34 --> Helper loaded: url_helper
DEBUG - 2020-01-03 05:48:34 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:34 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:34 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:34 --> URI Class Initialized
INFO - 2020-01-03 05:48:34 --> Router Class Initialized
INFO - 2020-01-03 05:48:34 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:34 --> Output Class Initialized
INFO - 2020-01-03 05:48:34 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:34 --> Input Class Initialized
INFO - 2020-01-03 05:48:34 --> Language Class Initialized
INFO - 2020-01-03 05:48:34 --> Form Validation Class Initialized
INFO - 2020-01-03 05:48:34 --> Loader Class Initialized
INFO - 2020-01-03 05:48:34 --> Helper loaded: html_helper
DEBUG - 2020-01-03 05:48:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:34 --> Encryption Class Initialized
INFO - 2020-01-03 05:48:34 --> Helper loaded: url_helper
DEBUG - 2020-01-03 05:48:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:34 --> Controller Class Initialized
INFO - 2020-01-03 05:48:34 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:34 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:34 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:34 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:34 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:34 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:34 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:34 --> Total execution time: 0.2866
INFO - 2020-01-03 05:48:34 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:34 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:34 --> Controller Class Initialized
INFO - 2020-01-03 05:48:34 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:34 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:34 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:34 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:34 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:34 --> Total execution time: 0.2841
INFO - 2020-01-03 05:48:41 --> Config Class Initialized
INFO - 2020-01-03 05:48:41 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:41 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:41 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:41 --> URI Class Initialized
INFO - 2020-01-03 05:48:41 --> Router Class Initialized
INFO - 2020-01-03 05:48:41 --> Output Class Initialized
INFO - 2020-01-03 05:48:41 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:41 --> Input Class Initialized
INFO - 2020-01-03 05:48:41 --> Language Class Initialized
INFO - 2020-01-03 05:48:41 --> Loader Class Initialized
INFO - 2020-01-03 05:48:41 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:41 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:41 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:41 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:41 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:41 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:41 --> Controller Class Initialized
INFO - 2020-01-03 05:48:41 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:41 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:41 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:41 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:41 --> Total execution time: 0.2343
INFO - 2020-01-03 05:48:42 --> Config Class Initialized
INFO - 2020-01-03 05:48:42 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:42 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:42 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:42 --> URI Class Initialized
INFO - 2020-01-03 05:48:42 --> Router Class Initialized
INFO - 2020-01-03 05:48:42 --> Output Class Initialized
INFO - 2020-01-03 05:48:42 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:42 --> Input Class Initialized
INFO - 2020-01-03 05:48:42 --> Language Class Initialized
INFO - 2020-01-03 05:48:42 --> Config Class Initialized
INFO - 2020-01-03 05:48:42 --> Hooks Class Initialized
INFO - 2020-01-03 05:48:42 --> Loader Class Initialized
INFO - 2020-01-03 05:48:42 --> Helper loaded: html_helper
DEBUG - 2020-01-03 05:48:42 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:42 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:42 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:42 --> URI Class Initialized
INFO - 2020-01-03 05:48:42 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:42 --> Router Class Initialized
INFO - 2020-01-03 05:48:42 --> Output Class Initialized
INFO - 2020-01-03 05:48:42 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:42 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:42 --> Input Class Initialized
INFO - 2020-01-03 05:48:42 --> Language Class Initialized
INFO - 2020-01-03 05:48:42 --> Loader Class Initialized
INFO - 2020-01-03 05:48:42 --> Form Validation Class Initialized
INFO - 2020-01-03 05:48:42 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:42 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:42 --> Helper loaded: form_helper
DEBUG - 2020-01-03 05:48:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:42 --> Encryption Class Initialized
INFO - 2020-01-03 05:48:42 --> Database Driver Class Initialized
DEBUG - 2020-01-03 05:48:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:42 --> Controller Class Initialized
INFO - 2020-01-03 05:48:42 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:42 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:42 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:42 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:42 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:42 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:42 --> Total execution time: 0.3464
INFO - 2020-01-03 05:48:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:42 --> Controller Class Initialized
INFO - 2020-01-03 05:48:42 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:42 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:42 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:42 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:42 --> Total execution time: 0.2617
INFO - 2020-01-03 05:48:49 --> Config Class Initialized
INFO - 2020-01-03 05:48:49 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:49 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:49 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:49 --> URI Class Initialized
INFO - 2020-01-03 05:48:49 --> Router Class Initialized
INFO - 2020-01-03 05:48:49 --> Output Class Initialized
INFO - 2020-01-03 05:48:49 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:49 --> Input Class Initialized
INFO - 2020-01-03 05:48:49 --> Language Class Initialized
INFO - 2020-01-03 05:48:49 --> Loader Class Initialized
INFO - 2020-01-03 05:48:49 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:49 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:49 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:49 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:49 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:49 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:49 --> Controller Class Initialized
INFO - 2020-01-03 05:48:49 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:49 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:49 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:49 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:49 --> Total execution time: 0.2447
INFO - 2020-01-03 05:48:49 --> Config Class Initialized
INFO - 2020-01-03 05:48:49 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:49 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:49 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:49 --> URI Class Initialized
INFO - 2020-01-03 05:48:49 --> Config Class Initialized
INFO - 2020-01-03 05:48:49 --> Router Class Initialized
INFO - 2020-01-03 05:48:49 --> Hooks Class Initialized
INFO - 2020-01-03 05:48:49 --> Output Class Initialized
DEBUG - 2020-01-03 05:48:49 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:49 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:49 --> URI Class Initialized
INFO - 2020-01-03 05:48:49 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:49 --> Input Class Initialized
INFO - 2020-01-03 05:48:49 --> Router Class Initialized
INFO - 2020-01-03 05:48:49 --> Language Class Initialized
INFO - 2020-01-03 05:48:49 --> Output Class Initialized
INFO - 2020-01-03 05:48:49 --> Loader Class Initialized
INFO - 2020-01-03 05:48:49 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:49 --> Security Class Initialized
INFO - 2020-01-03 05:48:49 --> Helper loaded: url_helper
DEBUG - 2020-01-03 05:48:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:49 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:49 --> Input Class Initialized
INFO - 2020-01-03 05:48:49 --> Language Class Initialized
INFO - 2020-01-03 05:48:49 --> Loader Class Initialized
INFO - 2020-01-03 05:48:49 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:49 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:49 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:49 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:49 --> Form Validation Class Initialized
INFO - 2020-01-03 05:48:49 --> Database Driver Class Initialized
DEBUG - 2020-01-03 05:48:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:49 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:49 --> Controller Class Initialized
INFO - 2020-01-03 05:48:49 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:49 --> Form Validation Class Initialized
INFO - 2020-01-03 05:48:49 --> Language file loaded: language/english/pagination_lang.php
DEBUG - 2020-01-03 05:48:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:49 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:49 --> Encryption Class Initialized
INFO - 2020-01-03 05:48:49 --> Model "ajaxsearch_model" initialized
DEBUG - 2020-01-03 05:48:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:49 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:49 --> Total execution time: 0.3246
INFO - 2020-01-03 05:48:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:49 --> Controller Class Initialized
INFO - 2020-01-03 05:48:49 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:49 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:49 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:49 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:49 --> Total execution time: 0.3321
INFO - 2020-01-03 05:48:58 --> Config Class Initialized
INFO - 2020-01-03 05:48:58 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:48:58 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:58 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:58 --> URI Class Initialized
INFO - 2020-01-03 05:48:58 --> Router Class Initialized
INFO - 2020-01-03 05:48:58 --> Output Class Initialized
INFO - 2020-01-03 05:48:58 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:58 --> Input Class Initialized
INFO - 2020-01-03 05:48:58 --> Language Class Initialized
INFO - 2020-01-03 05:48:58 --> Config Class Initialized
INFO - 2020-01-03 05:48:58 --> Loader Class Initialized
INFO - 2020-01-03 05:48:58 --> Hooks Class Initialized
INFO - 2020-01-03 05:48:58 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:58 --> Helper loaded: url_helper
DEBUG - 2020-01-03 05:48:58 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:48:58 --> Utf8 Class Initialized
INFO - 2020-01-03 05:48:58 --> Helper loaded: form_helper
INFO - 2020-01-03 05:48:58 --> URI Class Initialized
INFO - 2020-01-03 05:48:58 --> Router Class Initialized
INFO - 2020-01-03 05:48:58 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:58 --> Output Class Initialized
INFO - 2020-01-03 05:48:58 --> Security Class Initialized
DEBUG - 2020-01-03 05:48:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:48:58 --> Input Class Initialized
INFO - 2020-01-03 05:48:58 --> Language Class Initialized
INFO - 2020-01-03 05:48:58 --> Form Validation Class Initialized
INFO - 2020-01-03 05:48:58 --> Loader Class Initialized
DEBUG - 2020-01-03 05:48:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:58 --> Encryption Class Initialized
INFO - 2020-01-03 05:48:58 --> Helper loaded: html_helper
INFO - 2020-01-03 05:48:58 --> Helper loaded: url_helper
INFO - 2020-01-03 05:48:58 --> Helper loaded: form_helper
DEBUG - 2020-01-03 05:48:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:58 --> Controller Class Initialized
INFO - 2020-01-03 05:48:58 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:58 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:58 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:58 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:58 --> Database Driver Class Initialized
INFO - 2020-01-03 05:48:58 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:58 --> Total execution time: 0.2472
INFO - 2020-01-03 05:48:58 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:48:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:48:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:48:58 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:48:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:48:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:48:58 --> Controller Class Initialized
INFO - 2020-01-03 05:48:58 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:48:58 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:48:58 --> Pagination Class Initialized
INFO - 2020-01-03 05:48:58 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:48:58 --> Final output sent to browser
DEBUG - 2020-01-03 05:48:58 --> Total execution time: 0.3241
INFO - 2020-01-03 05:49:20 --> Config Class Initialized
INFO - 2020-01-03 05:49:20 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:20 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:20 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:20 --> URI Class Initialized
INFO - 2020-01-03 05:49:20 --> Router Class Initialized
INFO - 2020-01-03 05:49:20 --> Output Class Initialized
INFO - 2020-01-03 05:49:20 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:20 --> Input Class Initialized
INFO - 2020-01-03 05:49:20 --> Language Class Initialized
INFO - 2020-01-03 05:49:20 --> Loader Class Initialized
INFO - 2020-01-03 05:49:20 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:20 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:21 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:21 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:21 --> Config Class Initialized
INFO - 2020-01-03 05:49:21 --> Hooks Class Initialized
INFO - 2020-01-03 05:49:21 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2020-01-03 05:49:21 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:21 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:21 --> Encryption Class Initialized
INFO - 2020-01-03 05:49:21 --> URI Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:21 --> Router Class Initialized
INFO - 2020-01-03 05:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:21 --> Controller Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:21 --> Output Class Initialized
INFO - 2020-01-03 05:49:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:21 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:21 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:21 --> Input Class Initialized
INFO - 2020-01-03 05:49:21 --> Language Class Initialized
INFO - 2020-01-03 05:49:21 --> Loader Class Initialized
INFO - 2020-01-03 05:49:21 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:21 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:21 --> Total execution time: 0.3321
INFO - 2020-01-03 05:49:21 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:21 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:21 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:21 --> Form Validation Class Initialized
INFO - 2020-01-03 05:49:21 --> Config Class Initialized
INFO - 2020-01-03 05:49:21 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:21 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:21 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:21 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:21 --> URI Class Initialized
INFO - 2020-01-03 05:49:21 --> Router Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:21 --> Output Class Initialized
INFO - 2020-01-03 05:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:21 --> Controller Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:21 --> Security Class Initialized
INFO - 2020-01-03 05:49:21 --> Config Class Initialized
INFO - 2020-01-03 05:49:21 --> Hooks Class Initialized
INFO - 2020-01-03 05:49:21 --> Language file loaded: language/english/pagination_lang.php
DEBUG - 2020-01-03 05:49:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:21 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:21 --> Input Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:21 --> Language Class Initialized
DEBUG - 2020-01-03 05:49:21 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:21 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:21 --> URI Class Initialized
INFO - 2020-01-03 05:49:21 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:21 --> Total execution time: 0.3156
INFO - 2020-01-03 05:49:21 --> Router Class Initialized
INFO - 2020-01-03 05:49:21 --> Output Class Initialized
INFO - 2020-01-03 05:49:21 --> Loader Class Initialized
INFO - 2020-01-03 05:49:21 --> Security Class Initialized
INFO - 2020-01-03 05:49:21 --> Helper loaded: html_helper
DEBUG - 2020-01-03 05:49:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:21 --> Input Class Initialized
INFO - 2020-01-03 05:49:21 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:21 --> Language Class Initialized
INFO - 2020-01-03 05:49:21 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:21 --> Config Class Initialized
INFO - 2020-01-03 05:49:21 --> Hooks Class Initialized
INFO - 2020-01-03 05:49:21 --> Loader Class Initialized
INFO - 2020-01-03 05:49:21 --> Helper loaded: html_helper
DEBUG - 2020-01-03 05:49:21 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:21 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:21 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:21 --> URI Class Initialized
INFO - 2020-01-03 05:49:21 --> Router Class Initialized
INFO - 2020-01-03 05:49:21 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:21 --> Output Class Initialized
INFO - 2020-01-03 05:49:21 --> Security Class Initialized
INFO - 2020-01-03 05:49:21 --> Database Driver Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:21 --> Input Class Initialized
INFO - 2020-01-03 05:49:21 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:21 --> Language Class Initialized
INFO - 2020-01-03 05:49:21 --> Loader Class Initialized
INFO - 2020-01-03 05:49:21 --> Form Validation Class Initialized
INFO - 2020-01-03 05:49:21 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
DEBUG - 2020-01-03 05:49:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:21 --> Encryption Class Initialized
INFO - 2020-01-03 05:49:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:21 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:21 --> Controller Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:21 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:21 --> Config Class Initialized
INFO - 2020-01-03 05:49:21 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:21 --> Final output sent to browser
INFO - 2020-01-03 05:49:21 --> Helper loaded: html_helper
DEBUG - 2020-01-03 05:49:21 --> Total execution time: 0.3795
DEBUG - 2020-01-03 05:49:21 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:21 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:21 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:21 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:21 --> URI Class Initialized
INFO - 2020-01-03 05:49:21 --> Controller Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:21 --> Router Class Initialized
INFO - 2020-01-03 05:49:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:21 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:21 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:21 --> Output Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:21 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:21 --> Input Class Initialized
INFO - 2020-01-03 05:49:21 --> Language Class Initialized
INFO - 2020-01-03 05:49:21 --> Loader Class Initialized
INFO - 2020-01-03 05:49:21 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:21 --> Total execution time: 0.5389
INFO - 2020-01-03 05:49:21 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:21 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:21 --> Encryption Class Initialized
INFO - 2020-01-03 05:49:21 --> Helper loaded: url_helper
DEBUG - 2020-01-03 05:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:21 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:21 --> Controller Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:21 --> Config Class Initialized
INFO - 2020-01-03 05:49:21 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:21 --> Hooks Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "ajaxsearch_model" initialized
DEBUG - 2020-01-03 05:49:21 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:21 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:21 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:21 --> Total execution time: 0.4405
INFO - 2020-01-03 05:49:21 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:21 --> URI Class Initialized
INFO - 2020-01-03 05:49:21 --> Router Class Initialized
INFO - 2020-01-03 05:49:21 --> Form Validation Class Initialized
INFO - 2020-01-03 05:49:21 --> Output Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:21 --> Encryption Class Initialized
INFO - 2020-01-03 05:49:21 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:21 --> Input Class Initialized
INFO - 2020-01-03 05:49:21 --> Language Class Initialized
DEBUG - 2020-01-03 05:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:21 --> Controller Class Initialized
INFO - 2020-01-03 05:49:21 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:21 --> Loader Class Initialized
INFO - 2020-01-03 05:49:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:22 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:22 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:22 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:22 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:22 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:22 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:22 --> Total execution time: 0.3381
INFO - 2020-01-03 05:49:22 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:22 --> Form Validation Class Initialized
INFO - 2020-01-03 05:49:22 --> Config Class Initialized
INFO - 2020-01-03 05:49:22 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:22 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:22 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:22 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:22 --> URI Class Initialized
DEBUG - 2020-01-03 05:49:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:22 --> Router Class Initialized
INFO - 2020-01-03 05:49:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:22 --> Controller Class Initialized
INFO - 2020-01-03 05:49:22 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:22 --> Output Class Initialized
INFO - 2020-01-03 05:49:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:22 --> Security Class Initialized
INFO - 2020-01-03 05:49:22 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:22 --> Model "ajaxsearch_model" initialized
DEBUG - 2020-01-03 05:49:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:22 --> Input Class Initialized
INFO - 2020-01-03 05:49:22 --> Language Class Initialized
INFO - 2020-01-03 05:49:22 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:22 --> Total execution time: 0.2797
INFO - 2020-01-03 05:49:22 --> Loader Class Initialized
INFO - 2020-01-03 05:49:22 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:22 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:22 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:22 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:22 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:22 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:22 --> Controller Class Initialized
INFO - 2020-01-03 05:49:22 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:22 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:22 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:22 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:22 --> Total execution time: 0.1793
INFO - 2020-01-03 05:49:24 --> Config Class Initialized
INFO - 2020-01-03 05:49:24 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:24 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:24 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:24 --> URI Class Initialized
INFO - 2020-01-03 05:49:24 --> Router Class Initialized
INFO - 2020-01-03 05:49:24 --> Output Class Initialized
INFO - 2020-01-03 05:49:24 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:24 --> Input Class Initialized
INFO - 2020-01-03 05:49:24 --> Language Class Initialized
INFO - 2020-01-03 05:49:24 --> Loader Class Initialized
INFO - 2020-01-03 05:49:24 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:24 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:24 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:24 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:24 --> Config Class Initialized
INFO - 2020-01-03 05:49:24 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:24 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:24 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:24 --> URI Class Initialized
INFO - 2020-01-03 05:49:24 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:24 --> Encryption Class Initialized
INFO - 2020-01-03 05:49:24 --> Router Class Initialized
DEBUG - 2020-01-03 05:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:24 --> Output Class Initialized
INFO - 2020-01-03 05:49:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:24 --> Controller Class Initialized
INFO - 2020-01-03 05:49:24 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:24 --> Security Class Initialized
INFO - 2020-01-03 05:49:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:24 --> Pagination Class Initialized
DEBUG - 2020-01-03 05:49:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:24 --> Input Class Initialized
INFO - 2020-01-03 05:49:24 --> Language Class Initialized
INFO - 2020-01-03 05:49:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2020-01-03 05:49:24 --> Final output sent to browser
INFO - 2020-01-03 05:49:24 --> Loader Class Initialized
DEBUG - 2020-01-03 05:49:24 --> Total execution time: 0.3171
INFO - 2020-01-03 05:49:24 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:24 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:24 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:24 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:24 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:24 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:24 --> Controller Class Initialized
INFO - 2020-01-03 05:49:24 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:24 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2020-01-03 05:49:24 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:24 --> Total execution time: 0.2971
INFO - 2020-01-03 05:49:35 --> Config Class Initialized
INFO - 2020-01-03 05:49:35 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:35 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:35 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:35 --> URI Class Initialized
INFO - 2020-01-03 05:49:35 --> Router Class Initialized
INFO - 2020-01-03 05:49:35 --> Output Class Initialized
INFO - 2020-01-03 05:49:35 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:35 --> Input Class Initialized
INFO - 2020-01-03 05:49:35 --> Language Class Initialized
INFO - 2020-01-03 05:49:35 --> Loader Class Initialized
INFO - 2020-01-03 05:49:35 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:36 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:36 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:36 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:36 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:36 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:36 --> Controller Class Initialized
INFO - 2020-01-03 05:49:36 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:36 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditSearch.php
INFO - 2020-01-03 05:49:36 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:36 --> Total execution time: 0.2347
INFO - 2020-01-03 05:49:36 --> Config Class Initialized
INFO - 2020-01-03 05:49:36 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:36 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:36 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:36 --> URI Class Initialized
INFO - 2020-01-03 05:49:36 --> Router Class Initialized
INFO - 2020-01-03 05:49:36 --> Output Class Initialized
INFO - 2020-01-03 05:49:36 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:36 --> Input Class Initialized
INFO - 2020-01-03 05:49:36 --> Language Class Initialized
INFO - 2020-01-03 05:49:36 --> Loader Class Initialized
INFO - 2020-01-03 05:49:36 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:36 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:36 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:36 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:36 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:36 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:36 --> Controller Class Initialized
INFO - 2020-01-03 05:49:36 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:36 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:36 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:36 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:36 --> Total execution time: 0.2747
INFO - 2020-01-03 05:49:39 --> Config Class Initialized
INFO - 2020-01-03 05:49:39 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:39 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:39 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:39 --> URI Class Initialized
INFO - 2020-01-03 05:49:39 --> Router Class Initialized
INFO - 2020-01-03 05:49:39 --> Output Class Initialized
INFO - 2020-01-03 05:49:39 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:39 --> Input Class Initialized
INFO - 2020-01-03 05:49:39 --> Language Class Initialized
INFO - 2020-01-03 05:49:39 --> Loader Class Initialized
INFO - 2020-01-03 05:49:39 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:39 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:39 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:39 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:39 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:39 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:39 --> Controller Class Initialized
INFO - 2020-01-03 05:49:39 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:39 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:39 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:39 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:39 --> Total execution time: 0.2397
INFO - 2020-01-03 05:49:39 --> Config Class Initialized
INFO - 2020-01-03 05:49:39 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:39 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:39 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:39 --> URI Class Initialized
INFO - 2020-01-03 05:49:39 --> Router Class Initialized
INFO - 2020-01-03 05:49:39 --> Output Class Initialized
INFO - 2020-01-03 05:49:39 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:39 --> Input Class Initialized
INFO - 2020-01-03 05:49:39 --> Language Class Initialized
INFO - 2020-01-03 05:49:39 --> Loader Class Initialized
INFO - 2020-01-03 05:49:39 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:39 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:39 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:40 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:40 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:40 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:40 --> Controller Class Initialized
INFO - 2020-01-03 05:49:40 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:40 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:40 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:40 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:40 --> Total execution time: 0.2122
INFO - 2020-01-03 05:49:40 --> Config Class Initialized
INFO - 2020-01-03 05:49:40 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:40 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:40 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:40 --> URI Class Initialized
INFO - 2020-01-03 05:49:40 --> Router Class Initialized
INFO - 2020-01-03 05:49:40 --> Output Class Initialized
INFO - 2020-01-03 05:49:40 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:40 --> Input Class Initialized
INFO - 2020-01-03 05:49:40 --> Language Class Initialized
INFO - 2020-01-03 05:49:40 --> Loader Class Initialized
INFO - 2020-01-03 05:49:40 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:40 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:40 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:40 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:40 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:40 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:40 --> Controller Class Initialized
INFO - 2020-01-03 05:49:40 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:40 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:40 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:40 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:40 --> Total execution time: 0.2073
INFO - 2020-01-03 05:49:41 --> Config Class Initialized
INFO - 2020-01-03 05:49:41 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:41 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:41 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:41 --> URI Class Initialized
INFO - 2020-01-03 05:49:41 --> Router Class Initialized
INFO - 2020-01-03 05:49:41 --> Output Class Initialized
INFO - 2020-01-03 05:49:41 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:41 --> Input Class Initialized
INFO - 2020-01-03 05:49:41 --> Language Class Initialized
INFO - 2020-01-03 05:49:41 --> Loader Class Initialized
INFO - 2020-01-03 05:49:41 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:41 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:41 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:41 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:41 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:41 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:41 --> Controller Class Initialized
INFO - 2020-01-03 05:49:41 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:41 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:41 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:41 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:41 --> Total execution time: 0.2097
INFO - 2020-01-03 05:49:41 --> Config Class Initialized
INFO - 2020-01-03 05:49:41 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:41 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:41 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:41 --> URI Class Initialized
INFO - 2020-01-03 05:49:41 --> Router Class Initialized
INFO - 2020-01-03 05:49:41 --> Output Class Initialized
INFO - 2020-01-03 05:49:41 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:41 --> Input Class Initialized
INFO - 2020-01-03 05:49:41 --> Language Class Initialized
INFO - 2020-01-03 05:49:41 --> Loader Class Initialized
INFO - 2020-01-03 05:49:41 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:41 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:41 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:41 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:41 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:41 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:42 --> Controller Class Initialized
INFO - 2020-01-03 05:49:42 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:42 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:42 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:42 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:42 --> Total execution time: 0.2272
INFO - 2020-01-03 05:49:43 --> Config Class Initialized
INFO - 2020-01-03 05:49:43 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:43 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:43 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:43 --> URI Class Initialized
INFO - 2020-01-03 05:49:43 --> Router Class Initialized
INFO - 2020-01-03 05:49:43 --> Output Class Initialized
INFO - 2020-01-03 05:49:43 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:43 --> Input Class Initialized
INFO - 2020-01-03 05:49:43 --> Language Class Initialized
INFO - 2020-01-03 05:49:43 --> Loader Class Initialized
INFO - 2020-01-03 05:49:43 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:43 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:43 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:43 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:43 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:43 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:43 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:43 --> Controller Class Initialized
INFO - 2020-01-03 05:49:43 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:43 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:43 --> Config Class Initialized
INFO - 2020-01-03 05:49:43 --> Hooks Class Initialized
INFO - 2020-01-03 05:49:43 --> Model "ajaxsearch_model" initialized
DEBUG - 2020-01-03 05:49:43 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:43 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:43 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:43 --> Total execution time: 0.2247
INFO - 2020-01-03 05:49:43 --> URI Class Initialized
INFO - 2020-01-03 05:49:43 --> Router Class Initialized
INFO - 2020-01-03 05:49:43 --> Output Class Initialized
INFO - 2020-01-03 05:49:43 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:43 --> Input Class Initialized
INFO - 2020-01-03 05:49:43 --> Language Class Initialized
INFO - 2020-01-03 05:49:43 --> Loader Class Initialized
INFO - 2020-01-03 05:49:43 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:43 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:43 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:43 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:43 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:43 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:43 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:43 --> Controller Class Initialized
INFO - 2020-01-03 05:49:43 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:43 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:43 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:43 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:43 --> Total execution time: 0.2097
INFO - 2020-01-03 05:49:43 --> Config Class Initialized
INFO - 2020-01-03 05:49:43 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:43 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:43 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:43 --> URI Class Initialized
INFO - 2020-01-03 05:49:43 --> Router Class Initialized
INFO - 2020-01-03 05:49:43 --> Output Class Initialized
INFO - 2020-01-03 05:49:44 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:44 --> Input Class Initialized
INFO - 2020-01-03 05:49:44 --> Language Class Initialized
INFO - 2020-01-03 05:49:44 --> Loader Class Initialized
INFO - 2020-01-03 05:49:44 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:44 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:44 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:44 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:44 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:44 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:44 --> Controller Class Initialized
INFO - 2020-01-03 05:49:44 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:44 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:44 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:44 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:44 --> Total execution time: 0.2073
INFO - 2020-01-03 05:49:46 --> Config Class Initialized
INFO - 2020-01-03 05:49:46 --> Hooks Class Initialized
INFO - 2020-01-03 05:49:46 --> Config Class Initialized
INFO - 2020-01-03 05:49:46 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:46 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:46 --> Utf8 Class Initialized
DEBUG - 2020-01-03 05:49:46 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:46 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:46 --> URI Class Initialized
INFO - 2020-01-03 05:49:46 --> Router Class Initialized
INFO - 2020-01-03 05:49:46 --> URI Class Initialized
INFO - 2020-01-03 05:49:46 --> Router Class Initialized
INFO - 2020-01-03 05:49:46 --> Output Class Initialized
INFO - 2020-01-03 05:49:46 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:46 --> Input Class Initialized
INFO - 2020-01-03 05:49:46 --> Language Class Initialized
INFO - 2020-01-03 05:49:46 --> Output Class Initialized
INFO - 2020-01-03 05:49:46 --> Loader Class Initialized
INFO - 2020-01-03 05:49:46 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:46 --> Input Class Initialized
INFO - 2020-01-03 05:49:46 --> Language Class Initialized
INFO - 2020-01-03 05:49:46 --> Loader Class Initialized
INFO - 2020-01-03 05:49:46 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:46 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:46 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:46 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:46 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:46 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:46 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:46 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:46 --> Form Validation Class Initialized
INFO - 2020-01-03 05:49:46 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:46 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:46 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:46 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:46 --> Controller Class Initialized
INFO - 2020-01-03 05:49:46 --> Model "Authors_model" initialized
DEBUG - 2020-01-03 05:49:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:46 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:46 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:46 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:46 --> Total execution time: 0.3021
INFO - 2020-01-03 05:49:46 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:46 --> Controller Class Initialized
INFO - 2020-01-03 05:49:46 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:46 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:46 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:46 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:46 --> Total execution time: 0.3496
INFO - 2020-01-03 05:49:47 --> Config Class Initialized
INFO - 2020-01-03 05:49:47 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:47 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:47 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:47 --> URI Class Initialized
INFO - 2020-01-03 05:49:47 --> Router Class Initialized
INFO - 2020-01-03 05:49:47 --> Output Class Initialized
INFO - 2020-01-03 05:49:47 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:47 --> Input Class Initialized
INFO - 2020-01-03 05:49:47 --> Language Class Initialized
INFO - 2020-01-03 05:49:47 --> Loader Class Initialized
INFO - 2020-01-03 05:49:47 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:47 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:47 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:47 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:47 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:47 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:47 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:47 --> Controller Class Initialized
INFO - 2020-01-03 05:49:47 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:47 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:47 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:49:47 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:47 --> Total execution time: 0.2172
INFO - 2020-01-03 05:49:52 --> Config Class Initialized
INFO - 2020-01-03 05:49:52 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:49:52 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:49:52 --> Utf8 Class Initialized
INFO - 2020-01-03 05:49:52 --> URI Class Initialized
INFO - 2020-01-03 05:49:52 --> Router Class Initialized
INFO - 2020-01-03 05:49:52 --> Output Class Initialized
INFO - 2020-01-03 05:49:52 --> Security Class Initialized
DEBUG - 2020-01-03 05:49:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:49:52 --> Input Class Initialized
INFO - 2020-01-03 05:49:52 --> Language Class Initialized
INFO - 2020-01-03 05:49:52 --> Loader Class Initialized
INFO - 2020-01-03 05:49:52 --> Helper loaded: html_helper
INFO - 2020-01-03 05:49:52 --> Helper loaded: url_helper
INFO - 2020-01-03 05:49:52 --> Helper loaded: form_helper
INFO - 2020-01-03 05:49:52 --> Database Driver Class Initialized
INFO - 2020-01-03 05:49:52 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:49:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:49:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:49:52 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:49:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:49:52 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:49:52 --> Controller Class Initialized
INFO - 2020-01-03 05:49:52 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:49:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:49:52 --> Pagination Class Initialized
INFO - 2020-01-03 05:49:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2020-01-03 05:49:52 --> Final output sent to browser
DEBUG - 2020-01-03 05:49:52 --> Total execution time: 0.3046
INFO - 2020-01-03 05:50:09 --> Config Class Initialized
INFO - 2020-01-03 05:50:09 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:09 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:09 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:09 --> URI Class Initialized
INFO - 2020-01-03 05:50:09 --> Router Class Initialized
INFO - 2020-01-03 05:50:09 --> Output Class Initialized
INFO - 2020-01-03 05:50:09 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:09 --> Input Class Initialized
INFO - 2020-01-03 05:50:09 --> Language Class Initialized
INFO - 2020-01-03 05:50:09 --> Loader Class Initialized
INFO - 2020-01-03 05:50:09 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:09 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:09 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:09 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:09 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:09 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:09 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:09 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:09 --> Controller Class Initialized
INFO - 2020-01-03 05:50:09 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:09 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:09 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2020-01-03 05:50:09 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:09 --> Total execution time: 0.2946
INFO - 2020-01-03 05:50:11 --> Config Class Initialized
INFO - 2020-01-03 05:50:11 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:11 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:11 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:11 --> URI Class Initialized
INFO - 2020-01-03 05:50:11 --> Router Class Initialized
INFO - 2020-01-03 05:50:11 --> Output Class Initialized
INFO - 2020-01-03 05:50:11 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:11 --> Input Class Initialized
INFO - 2020-01-03 05:50:11 --> Language Class Initialized
INFO - 2020-01-03 05:50:11 --> Loader Class Initialized
INFO - 2020-01-03 05:50:11 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:11 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:11 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:11 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:11 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:11 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:11 --> Controller Class Initialized
INFO - 2020-01-03 05:50:11 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:11 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditSearch.php
INFO - 2020-01-03 05:50:11 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:11 --> Total execution time: 0.2847
INFO - 2020-01-03 05:50:12 --> Config Class Initialized
INFO - 2020-01-03 05:50:12 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:12 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:12 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:12 --> URI Class Initialized
INFO - 2020-01-03 05:50:12 --> Router Class Initialized
INFO - 2020-01-03 05:50:12 --> Output Class Initialized
INFO - 2020-01-03 05:50:12 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:12 --> Input Class Initialized
INFO - 2020-01-03 05:50:12 --> Language Class Initialized
INFO - 2020-01-03 05:50:12 --> Loader Class Initialized
INFO - 2020-01-03 05:50:12 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:12 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:12 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:12 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:12 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:12 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:12 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:12 --> Controller Class Initialized
INFO - 2020-01-03 05:50:12 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:12 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:12 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:12 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:12 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:12 --> Total execution time: 0.2747
INFO - 2020-01-03 05:50:22 --> Config Class Initialized
INFO - 2020-01-03 05:50:22 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:22 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:22 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:22 --> URI Class Initialized
INFO - 2020-01-03 05:50:22 --> Router Class Initialized
INFO - 2020-01-03 05:50:22 --> Output Class Initialized
INFO - 2020-01-03 05:50:22 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:22 --> Input Class Initialized
INFO - 2020-01-03 05:50:22 --> Language Class Initialized
INFO - 2020-01-03 05:50:22 --> Loader Class Initialized
INFO - 2020-01-03 05:50:22 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:22 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:22 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:22 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:22 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:22 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:22 --> Controller Class Initialized
INFO - 2020-01-03 05:50:22 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:22 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:22 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:22 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:22 --> Total execution time: 0.2547
INFO - 2020-01-03 05:50:23 --> Config Class Initialized
INFO - 2020-01-03 05:50:23 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:23 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:23 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:23 --> URI Class Initialized
INFO - 2020-01-03 05:50:23 --> Router Class Initialized
INFO - 2020-01-03 05:50:23 --> Output Class Initialized
INFO - 2020-01-03 05:50:23 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:23 --> Input Class Initialized
INFO - 2020-01-03 05:50:23 --> Language Class Initialized
INFO - 2020-01-03 05:50:23 --> Config Class Initialized
INFO - 2020-01-03 05:50:23 --> Loader Class Initialized
INFO - 2020-01-03 05:50:23 --> Hooks Class Initialized
INFO - 2020-01-03 05:50:23 --> Helper loaded: html_helper
DEBUG - 2020-01-03 05:50:23 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:23 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:23 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:23 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:23 --> URI Class Initialized
INFO - 2020-01-03 05:50:23 --> Router Class Initialized
INFO - 2020-01-03 05:50:23 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:23 --> Output Class Initialized
INFO - 2020-01-03 05:50:23 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:23 --> Input Class Initialized
INFO - 2020-01-03 05:50:23 --> Form Validation Class Initialized
INFO - 2020-01-03 05:50:23 --> Language Class Initialized
DEBUG - 2020-01-03 05:50:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:23 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:23 --> Loader Class Initialized
INFO - 2020-01-03 05:50:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:23 --> Controller Class Initialized
INFO - 2020-01-03 05:50:23 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:23 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:23 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:23 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:23 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:23 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:23 --> Config Class Initialized
INFO - 2020-01-03 05:50:23 --> Hooks Class Initialized
INFO - 2020-01-03 05:50:23 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:23 --> Total execution time: 0.2792
DEBUG - 2020-01-03 05:50:23 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:23 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:23 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:23 --> URI Class Initialized
INFO - 2020-01-03 05:50:23 --> Router Class Initialized
INFO - 2020-01-03 05:50:23 --> Output Class Initialized
INFO - 2020-01-03 05:50:23 --> Form Validation Class Initialized
INFO - 2020-01-03 05:50:23 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2020-01-03 05:50:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:23 --> Input Class Initialized
INFO - 2020-01-03 05:50:23 --> Encryption Class Initialized
INFO - 2020-01-03 05:50:23 --> Language Class Initialized
INFO - 2020-01-03 05:50:23 --> Loader Class Initialized
DEBUG - 2020-01-03 05:50:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:23 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:23 --> Controller Class Initialized
INFO - 2020-01-03 05:50:23 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:23 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:23 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:23 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:23 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:23 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:23 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:23 --> Total execution time: 0.3431
INFO - 2020-01-03 05:50:23 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:23 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:23 --> Controller Class Initialized
INFO - 2020-01-03 05:50:23 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:23 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:23 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:23 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:23 --> Total execution time: 0.2991
INFO - 2020-01-03 05:50:24 --> Config Class Initialized
INFO - 2020-01-03 05:50:24 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:24 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:24 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:24 --> URI Class Initialized
INFO - 2020-01-03 05:50:24 --> Router Class Initialized
INFO - 2020-01-03 05:50:24 --> Output Class Initialized
INFO - 2020-01-03 05:50:24 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:24 --> Input Class Initialized
INFO - 2020-01-03 05:50:24 --> Language Class Initialized
INFO - 2020-01-03 05:50:24 --> Loader Class Initialized
INFO - 2020-01-03 05:50:24 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:24 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:25 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:25 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:25 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:25 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:25 --> Controller Class Initialized
INFO - 2020-01-03 05:50:25 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:25 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:25 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:25 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:25 --> Total execution time: 0.2023
INFO - 2020-01-03 05:50:25 --> Config Class Initialized
INFO - 2020-01-03 05:50:25 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:25 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:25 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:25 --> URI Class Initialized
INFO - 2020-01-03 05:50:25 --> Router Class Initialized
INFO - 2020-01-03 05:50:25 --> Output Class Initialized
INFO - 2020-01-03 05:50:25 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:25 --> Input Class Initialized
INFO - 2020-01-03 05:50:25 --> Language Class Initialized
INFO - 2020-01-03 05:50:25 --> Loader Class Initialized
INFO - 2020-01-03 05:50:25 --> Config Class Initialized
INFO - 2020-01-03 05:50:25 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:25 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:25 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:25 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:25 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:25 --> URI Class Initialized
INFO - 2020-01-03 05:50:25 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:25 --> Router Class Initialized
INFO - 2020-01-03 05:50:25 --> Output Class Initialized
INFO - 2020-01-03 05:50:25 --> Security Class Initialized
INFO - 2020-01-03 05:50:25 --> Database Driver Class Initialized
DEBUG - 2020-01-03 05:50:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:25 --> Input Class Initialized
INFO - 2020-01-03 05:50:25 --> Language Class Initialized
INFO - 2020-01-03 05:50:25 --> Loader Class Initialized
INFO - 2020-01-03 05:50:25 --> Form Validation Class Initialized
INFO - 2020-01-03 05:50:25 --> Helper loaded: html_helper
DEBUG - 2020-01-03 05:50:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:25 --> Encryption Class Initialized
INFO - 2020-01-03 05:50:25 --> Helper loaded: url_helper
DEBUG - 2020-01-03 05:50:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:25 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:25 --> Controller Class Initialized
INFO - 2020-01-03 05:50:25 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:25 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:25 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:25 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:25 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:25 --> Total execution time: 0.2797
INFO - 2020-01-03 05:50:25 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:25 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:25 --> Controller Class Initialized
INFO - 2020-01-03 05:50:25 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:25 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:25 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:25 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:25 --> Total execution time: 0.2497
INFO - 2020-01-03 05:50:26 --> Config Class Initialized
INFO - 2020-01-03 05:50:26 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:26 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:26 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:26 --> URI Class Initialized
INFO - 2020-01-03 05:50:26 --> Router Class Initialized
INFO - 2020-01-03 05:50:26 --> Output Class Initialized
INFO - 2020-01-03 05:50:26 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:26 --> Input Class Initialized
INFO - 2020-01-03 05:50:26 --> Language Class Initialized
INFO - 2020-01-03 05:50:26 --> Loader Class Initialized
INFO - 2020-01-03 05:50:26 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:26 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:26 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:26 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:26 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:26 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:26 --> Controller Class Initialized
INFO - 2020-01-03 05:50:26 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:26 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:26 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:26 --> Config Class Initialized
INFO - 2020-01-03 05:50:26 --> Hooks Class Initialized
INFO - 2020-01-03 05:50:26 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:26 --> Total execution time: 0.2147
DEBUG - 2020-01-03 05:50:26 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:26 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:26 --> URI Class Initialized
INFO - 2020-01-03 05:50:26 --> Router Class Initialized
INFO - 2020-01-03 05:50:26 --> Output Class Initialized
INFO - 2020-01-03 05:50:26 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:26 --> Input Class Initialized
INFO - 2020-01-03 05:50:26 --> Language Class Initialized
INFO - 2020-01-03 05:50:26 --> Loader Class Initialized
INFO - 2020-01-03 05:50:26 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:26 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:26 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:26 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:26 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:26 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:26 --> Controller Class Initialized
INFO - 2020-01-03 05:50:26 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:26 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:26 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:26 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:26 --> Total execution time: 0.1973
INFO - 2020-01-03 05:50:27 --> Config Class Initialized
INFO - 2020-01-03 05:50:27 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:27 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:27 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:27 --> URI Class Initialized
INFO - 2020-01-03 05:50:27 --> Router Class Initialized
INFO - 2020-01-03 05:50:27 --> Output Class Initialized
INFO - 2020-01-03 05:50:27 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:27 --> Input Class Initialized
INFO - 2020-01-03 05:50:27 --> Language Class Initialized
INFO - 2020-01-03 05:50:27 --> Loader Class Initialized
INFO - 2020-01-03 05:50:27 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:27 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:27 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:27 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:27 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:27 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:27 --> Controller Class Initialized
INFO - 2020-01-03 05:50:27 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:27 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:27 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:27 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:27 --> Total execution time: 0.2197
INFO - 2020-01-03 05:50:27 --> Config Class Initialized
INFO - 2020-01-03 05:50:27 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:27 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:27 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:27 --> URI Class Initialized
INFO - 2020-01-03 05:50:27 --> Router Class Initialized
INFO - 2020-01-03 05:50:27 --> Output Class Initialized
INFO - 2020-01-03 05:50:28 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:28 --> Input Class Initialized
INFO - 2020-01-03 05:50:28 --> Language Class Initialized
INFO - 2020-01-03 05:50:28 --> Loader Class Initialized
INFO - 2020-01-03 05:50:28 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:28 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:28 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:28 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:28 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:28 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:28 --> Controller Class Initialized
INFO - 2020-01-03 05:50:28 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:28 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:28 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:28 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:28 --> Total execution time: 0.2197
INFO - 2020-01-03 05:50:28 --> Config Class Initialized
INFO - 2020-01-03 05:50:28 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:28 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:28 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:28 --> URI Class Initialized
INFO - 2020-01-03 05:50:28 --> Router Class Initialized
INFO - 2020-01-03 05:50:28 --> Output Class Initialized
INFO - 2020-01-03 05:50:28 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:28 --> Input Class Initialized
INFO - 2020-01-03 05:50:28 --> Language Class Initialized
INFO - 2020-01-03 05:50:28 --> Loader Class Initialized
INFO - 2020-01-03 05:50:28 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:28 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:28 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:28 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:28 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:28 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:28 --> Controller Class Initialized
INFO - 2020-01-03 05:50:28 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:28 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:28 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:28 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:28 --> Total execution time: 0.2247
INFO - 2020-01-03 05:50:29 --> Config Class Initialized
INFO - 2020-01-03 05:50:29 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:29 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:29 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:29 --> URI Class Initialized
INFO - 2020-01-03 05:50:29 --> Router Class Initialized
INFO - 2020-01-03 05:50:29 --> Output Class Initialized
INFO - 2020-01-03 05:50:29 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:29 --> Input Class Initialized
INFO - 2020-01-03 05:50:29 --> Language Class Initialized
INFO - 2020-01-03 05:50:29 --> Loader Class Initialized
INFO - 2020-01-03 05:50:29 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:29 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:29 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:29 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:29 --> Config Class Initialized
INFO - 2020-01-03 05:50:29 --> Hooks Class Initialized
INFO - 2020-01-03 05:50:29 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:29 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:29 --> Utf8 Class Initialized
DEBUG - 2020-01-03 05:50:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:29 --> Encryption Class Initialized
INFO - 2020-01-03 05:50:29 --> URI Class Initialized
INFO - 2020-01-03 05:50:29 --> Router Class Initialized
DEBUG - 2020-01-03 05:50:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:29 --> Controller Class Initialized
INFO - 2020-01-03 05:50:29 --> Output Class Initialized
INFO - 2020-01-03 05:50:29 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:29 --> Security Class Initialized
INFO - 2020-01-03 05:50:29 --> Language file loaded: language/english/pagination_lang.php
DEBUG - 2020-01-03 05:50:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:29 --> Input Class Initialized
INFO - 2020-01-03 05:50:29 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:29 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:29 --> Language Class Initialized
INFO - 2020-01-03 05:50:29 --> Loader Class Initialized
INFO - 2020-01-03 05:50:29 --> Final output sent to browser
INFO - 2020-01-03 05:50:29 --> Helper loaded: html_helper
DEBUG - 2020-01-03 05:50:29 --> Total execution time: 0.2697
INFO - 2020-01-03 05:50:29 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:29 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:29 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:29 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:29 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:29 --> Controller Class Initialized
INFO - 2020-01-03 05:50:29 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:29 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:29 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:29 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:29 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:29 --> Total execution time: 0.2472
INFO - 2020-01-03 05:50:30 --> Config Class Initialized
INFO - 2020-01-03 05:50:30 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:30 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:30 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:30 --> URI Class Initialized
INFO - 2020-01-03 05:50:30 --> Router Class Initialized
INFO - 2020-01-03 05:50:30 --> Output Class Initialized
INFO - 2020-01-03 05:50:30 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:30 --> Input Class Initialized
INFO - 2020-01-03 05:50:30 --> Language Class Initialized
INFO - 2020-01-03 05:50:30 --> Loader Class Initialized
INFO - 2020-01-03 05:50:30 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:30 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:30 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:30 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:30 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:30 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:30 --> Controller Class Initialized
INFO - 2020-01-03 05:50:30 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:30 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:30 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:30 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:30 --> Total execution time: 0.2397
INFO - 2020-01-03 05:50:30 --> Config Class Initialized
INFO - 2020-01-03 05:50:30 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:30 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:30 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:30 --> URI Class Initialized
INFO - 2020-01-03 05:50:30 --> Router Class Initialized
INFO - 2020-01-03 05:50:30 --> Output Class Initialized
INFO - 2020-01-03 05:50:30 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:30 --> Input Class Initialized
INFO - 2020-01-03 05:50:30 --> Language Class Initialized
INFO - 2020-01-03 05:50:30 --> Loader Class Initialized
INFO - 2020-01-03 05:50:30 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:30 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:30 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:30 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:30 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:30 --> Encryption Class Initialized
INFO - 2020-01-03 05:50:30 --> Config Class Initialized
INFO - 2020-01-03 05:50:30 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:30 --> Controller Class Initialized
DEBUG - 2020-01-03 05:50:30 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:30 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:30 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:30 --> URI Class Initialized
INFO - 2020-01-03 05:50:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:30 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:30 --> Router Class Initialized
INFO - 2020-01-03 05:50:30 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:30 --> Output Class Initialized
INFO - 2020-01-03 05:50:30 --> Security Class Initialized
INFO - 2020-01-03 05:50:30 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-01-03 05:50:30 --> Total execution time: 0.2752
INFO - 2020-01-03 05:50:30 --> Input Class Initialized
INFO - 2020-01-03 05:50:30 --> Language Class Initialized
INFO - 2020-01-03 05:50:31 --> Loader Class Initialized
INFO - 2020-01-03 05:50:31 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:31 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:31 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:31 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:31 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:31 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:31 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:31 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:31 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:31 --> Controller Class Initialized
INFO - 2020-01-03 05:50:31 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:31 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:31 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:31 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:31 --> Total execution time: 0.2667
INFO - 2020-01-03 05:50:45 --> Config Class Initialized
INFO - 2020-01-03 05:50:45 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:45 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:45 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:45 --> URI Class Initialized
INFO - 2020-01-03 05:50:45 --> Router Class Initialized
INFO - 2020-01-03 05:50:45 --> Output Class Initialized
INFO - 2020-01-03 05:50:45 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:45 --> Input Class Initialized
INFO - 2020-01-03 05:50:45 --> Language Class Initialized
INFO - 2020-01-03 05:50:45 --> Loader Class Initialized
INFO - 2020-01-03 05:50:45 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:45 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:45 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:45 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:45 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:45 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:45 --> Controller Class Initialized
INFO - 2020-01-03 05:50:45 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:45 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:45 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:45 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:45 --> Total execution time: 0.2297
INFO - 2020-01-03 05:50:52 --> Config Class Initialized
INFO - 2020-01-03 05:50:52 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:50:52 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:50:52 --> Utf8 Class Initialized
INFO - 2020-01-03 05:50:52 --> URI Class Initialized
INFO - 2020-01-03 05:50:52 --> Router Class Initialized
INFO - 2020-01-03 05:50:52 --> Output Class Initialized
INFO - 2020-01-03 05:50:52 --> Security Class Initialized
DEBUG - 2020-01-03 05:50:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:50:52 --> Input Class Initialized
INFO - 2020-01-03 05:50:52 --> Language Class Initialized
INFO - 2020-01-03 05:50:52 --> Loader Class Initialized
INFO - 2020-01-03 05:50:52 --> Helper loaded: html_helper
INFO - 2020-01-03 05:50:52 --> Helper loaded: url_helper
INFO - 2020-01-03 05:50:52 --> Helper loaded: form_helper
INFO - 2020-01-03 05:50:52 --> Database Driver Class Initialized
INFO - 2020-01-03 05:50:52 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:50:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:50:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:50:52 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:50:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:50:52 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:50:52 --> Controller Class Initialized
INFO - 2020-01-03 05:50:52 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:50:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:50:52 --> Pagination Class Initialized
INFO - 2020-01-03 05:50:52 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:50:52 --> Final output sent to browser
DEBUG - 2020-01-03 05:50:52 --> Total execution time: 0.2122
INFO - 2020-01-03 05:51:17 --> Config Class Initialized
INFO - 2020-01-03 05:51:17 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:51:17 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:51:17 --> Utf8 Class Initialized
INFO - 2020-01-03 05:51:17 --> URI Class Initialized
INFO - 2020-01-03 05:51:17 --> Router Class Initialized
INFO - 2020-01-03 05:51:17 --> Output Class Initialized
INFO - 2020-01-03 05:51:17 --> Security Class Initialized
DEBUG - 2020-01-03 05:51:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:51:17 --> Input Class Initialized
INFO - 2020-01-03 05:51:17 --> Language Class Initialized
INFO - 2020-01-03 05:51:17 --> Loader Class Initialized
INFO - 2020-01-03 05:51:17 --> Helper loaded: html_helper
INFO - 2020-01-03 05:51:17 --> Helper loaded: url_helper
INFO - 2020-01-03 05:51:17 --> Helper loaded: form_helper
INFO - 2020-01-03 05:51:17 --> Database Driver Class Initialized
INFO - 2020-01-03 05:51:17 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:51:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:51:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:51:17 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:51:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:51:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:51:17 --> Controller Class Initialized
INFO - 2020-01-03 05:51:17 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:51:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:51:17 --> Pagination Class Initialized
INFO - 2020-01-03 05:51:17 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:51:17 --> Final output sent to browser
DEBUG - 2020-01-03 05:51:17 --> Total execution time: 0.3046
INFO - 2020-01-03 05:51:25 --> Config Class Initialized
INFO - 2020-01-03 05:51:25 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:51:25 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:51:25 --> Utf8 Class Initialized
INFO - 2020-01-03 05:51:25 --> URI Class Initialized
INFO - 2020-01-03 05:51:25 --> Router Class Initialized
INFO - 2020-01-03 05:51:25 --> Output Class Initialized
INFO - 2020-01-03 05:51:25 --> Security Class Initialized
DEBUG - 2020-01-03 05:51:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:51:25 --> Input Class Initialized
INFO - 2020-01-03 05:51:25 --> Language Class Initialized
INFO - 2020-01-03 05:51:25 --> Loader Class Initialized
INFO - 2020-01-03 05:51:25 --> Helper loaded: html_helper
INFO - 2020-01-03 05:51:25 --> Helper loaded: url_helper
INFO - 2020-01-03 05:51:25 --> Helper loaded: form_helper
INFO - 2020-01-03 05:51:25 --> Database Driver Class Initialized
INFO - 2020-01-03 05:51:25 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:51:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:51:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:51:25 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:51:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:51:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:51:25 --> Controller Class Initialized
INFO - 2020-01-03 05:51:25 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:51:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:51:25 --> Pagination Class Initialized
INFO - 2020-01-03 05:51:25 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:51:25 --> Final output sent to browser
DEBUG - 2020-01-03 05:51:25 --> Total execution time: 0.2097
INFO - 2020-01-03 05:51:28 --> Config Class Initialized
INFO - 2020-01-03 05:51:28 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:51:28 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:51:28 --> Utf8 Class Initialized
INFO - 2020-01-03 05:51:28 --> URI Class Initialized
INFO - 2020-01-03 05:51:28 --> Router Class Initialized
INFO - 2020-01-03 05:51:28 --> Output Class Initialized
INFO - 2020-01-03 05:51:28 --> Security Class Initialized
DEBUG - 2020-01-03 05:51:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:51:28 --> Input Class Initialized
INFO - 2020-01-03 05:51:28 --> Language Class Initialized
INFO - 2020-01-03 05:51:28 --> Loader Class Initialized
INFO - 2020-01-03 05:51:28 --> Helper loaded: html_helper
INFO - 2020-01-03 05:51:28 --> Helper loaded: url_helper
INFO - 2020-01-03 05:51:28 --> Helper loaded: form_helper
INFO - 2020-01-03 05:51:28 --> Database Driver Class Initialized
INFO - 2020-01-03 05:51:28 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:51:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:51:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:51:28 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:51:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:51:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:51:28 --> Controller Class Initialized
INFO - 2020-01-03 05:51:28 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:51:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:51:28 --> Pagination Class Initialized
INFO - 2020-01-03 05:51:28 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:51:28 --> Final output sent to browser
DEBUG - 2020-01-03 05:51:28 --> Total execution time: 0.2272
INFO - 2020-01-03 05:51:29 --> Config Class Initialized
INFO - 2020-01-03 05:51:29 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:51:29 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:51:29 --> Utf8 Class Initialized
INFO - 2020-01-03 05:51:29 --> URI Class Initialized
INFO - 2020-01-03 05:51:29 --> Router Class Initialized
INFO - 2020-01-03 05:51:29 --> Output Class Initialized
INFO - 2020-01-03 05:51:29 --> Security Class Initialized
DEBUG - 2020-01-03 05:51:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:51:29 --> Input Class Initialized
INFO - 2020-01-03 05:51:29 --> Language Class Initialized
INFO - 2020-01-03 05:51:29 --> Loader Class Initialized
INFO - 2020-01-03 05:51:29 --> Helper loaded: html_helper
INFO - 2020-01-03 05:51:29 --> Helper loaded: url_helper
INFO - 2020-01-03 05:51:29 --> Helper loaded: form_helper
INFO - 2020-01-03 05:51:29 --> Database Driver Class Initialized
INFO - 2020-01-03 05:51:29 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:51:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:51:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:51:29 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:51:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:51:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:51:29 --> Controller Class Initialized
INFO - 2020-01-03 05:51:29 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:51:29 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:51:29 --> Pagination Class Initialized
INFO - 2020-01-03 05:51:29 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:51:29 --> Final output sent to browser
DEBUG - 2020-01-03 05:51:29 --> Total execution time: 0.2222
INFO - 2020-01-03 05:51:40 --> Config Class Initialized
INFO - 2020-01-03 05:51:40 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:51:40 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:51:40 --> Utf8 Class Initialized
INFO - 2020-01-03 05:51:40 --> URI Class Initialized
INFO - 2020-01-03 05:51:40 --> Router Class Initialized
INFO - 2020-01-03 05:51:40 --> Output Class Initialized
INFO - 2020-01-03 05:51:40 --> Security Class Initialized
DEBUG - 2020-01-03 05:51:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:51:40 --> Input Class Initialized
INFO - 2020-01-03 05:51:40 --> Language Class Initialized
INFO - 2020-01-03 05:51:40 --> Loader Class Initialized
INFO - 2020-01-03 05:51:40 --> Helper loaded: html_helper
INFO - 2020-01-03 05:51:40 --> Helper loaded: url_helper
INFO - 2020-01-03 05:51:40 --> Helper loaded: form_helper
INFO - 2020-01-03 05:51:40 --> Database Driver Class Initialized
INFO - 2020-01-03 05:51:40 --> Config Class Initialized
INFO - 2020-01-03 05:51:41 --> Hooks Class Initialized
INFO - 2020-01-03 05:51:41 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:51:41 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:51:41 --> Utf8 Class Initialized
DEBUG - 2020-01-03 05:51:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:51:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:51:41 --> URI Class Initialized
INFO - 2020-01-03 05:51:41 --> Encryption Class Initialized
INFO - 2020-01-03 05:51:41 --> Router Class Initialized
DEBUG - 2020-01-03 05:51:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:51:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:51:41 --> Controller Class Initialized
INFO - 2020-01-03 05:51:41 --> Output Class Initialized
INFO - 2020-01-03 05:51:41 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:51:41 --> Security Class Initialized
INFO - 2020-01-03 05:51:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:51:41 --> Pagination Class Initialized
INFO - 2020-01-03 05:51:41 --> Model "ajaxsearch_model" initialized
DEBUG - 2020-01-03 05:51:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:51:41 --> Input Class Initialized
INFO - 2020-01-03 05:51:41 --> Language Class Initialized
INFO - 2020-01-03 05:51:41 --> Final output sent to browser
INFO - 2020-01-03 05:51:41 --> Loader Class Initialized
DEBUG - 2020-01-03 05:51:41 --> Total execution time: 0.2547
INFO - 2020-01-03 05:51:41 --> Helper loaded: html_helper
INFO - 2020-01-03 05:51:41 --> Helper loaded: url_helper
INFO - 2020-01-03 05:51:41 --> Helper loaded: form_helper
INFO - 2020-01-03 05:51:41 --> Database Driver Class Initialized
INFO - 2020-01-03 05:51:41 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:51:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:51:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:51:41 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:51:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:51:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:51:41 --> Controller Class Initialized
INFO - 2020-01-03 05:51:41 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:51:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:51:41 --> Pagination Class Initialized
INFO - 2020-01-03 05:51:41 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:51:41 --> Final output sent to browser
DEBUG - 2020-01-03 05:51:41 --> Total execution time: 0.2897
INFO - 2020-01-03 05:51:43 --> Config Class Initialized
INFO - 2020-01-03 05:51:43 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:51:43 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:51:43 --> Utf8 Class Initialized
INFO - 2020-01-03 05:51:43 --> URI Class Initialized
INFO - 2020-01-03 05:51:43 --> Router Class Initialized
INFO - 2020-01-03 05:51:43 --> Output Class Initialized
INFO - 2020-01-03 05:51:43 --> Security Class Initialized
DEBUG - 2020-01-03 05:51:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:51:43 --> Input Class Initialized
INFO - 2020-01-03 05:51:43 --> Language Class Initialized
INFO - 2020-01-03 05:51:43 --> Loader Class Initialized
INFO - 2020-01-03 05:51:43 --> Helper loaded: html_helper
INFO - 2020-01-03 05:51:43 --> Helper loaded: url_helper
INFO - 2020-01-03 05:51:43 --> Helper loaded: form_helper
INFO - 2020-01-03 05:51:43 --> Database Driver Class Initialized
INFO - 2020-01-03 05:51:43 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:51:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:51:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:51:44 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:51:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:51:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:51:44 --> Controller Class Initialized
INFO - 2020-01-03 05:51:44 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:51:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:51:44 --> Pagination Class Initialized
INFO - 2020-01-03 05:51:44 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:51:44 --> Final output sent to browser
DEBUG - 2020-01-03 05:51:44 --> Total execution time: 0.2222
INFO - 2020-01-03 05:52:22 --> Config Class Initialized
INFO - 2020-01-03 05:52:22 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:52:22 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:52:22 --> Utf8 Class Initialized
INFO - 2020-01-03 05:52:22 --> URI Class Initialized
INFO - 2020-01-03 05:52:22 --> Router Class Initialized
INFO - 2020-01-03 05:52:22 --> Output Class Initialized
INFO - 2020-01-03 05:52:22 --> Security Class Initialized
DEBUG - 2020-01-03 05:52:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:52:22 --> Input Class Initialized
INFO - 2020-01-03 05:52:22 --> Language Class Initialized
INFO - 2020-01-03 05:52:22 --> Loader Class Initialized
INFO - 2020-01-03 05:52:22 --> Helper loaded: html_helper
INFO - 2020-01-03 05:52:22 --> Helper loaded: url_helper
INFO - 2020-01-03 05:52:22 --> Helper loaded: form_helper
INFO - 2020-01-03 05:52:22 --> Database Driver Class Initialized
INFO - 2020-01-03 05:52:22 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:52:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:52:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:52:22 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:52:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:52:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:52:22 --> Controller Class Initialized
INFO - 2020-01-03 05:52:22 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:52:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:52:22 --> Pagination Class Initialized
INFO - 2020-01-03 05:52:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2020-01-03 05:52:22 --> Final output sent to browser
DEBUG - 2020-01-03 05:52:22 --> Total execution time: 0.2597
INFO - 2020-01-03 05:52:30 --> Config Class Initialized
INFO - 2020-01-03 05:52:30 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:52:30 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:52:30 --> Utf8 Class Initialized
INFO - 2020-01-03 05:52:30 --> URI Class Initialized
INFO - 2020-01-03 05:52:30 --> Router Class Initialized
INFO - 2020-01-03 05:52:30 --> Output Class Initialized
INFO - 2020-01-03 05:52:30 --> Security Class Initialized
DEBUG - 2020-01-03 05:52:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:52:30 --> Input Class Initialized
INFO - 2020-01-03 05:52:30 --> Language Class Initialized
INFO - 2020-01-03 05:52:30 --> Loader Class Initialized
INFO - 2020-01-03 05:52:30 --> Helper loaded: html_helper
INFO - 2020-01-03 05:52:30 --> Helper loaded: url_helper
INFO - 2020-01-03 05:52:30 --> Helper loaded: form_helper
INFO - 2020-01-03 05:52:30 --> Database Driver Class Initialized
INFO - 2020-01-03 05:52:30 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:52:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:52:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:52:30 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:52:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:52:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:52:30 --> Controller Class Initialized
INFO - 2020-01-03 05:52:30 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:52:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:52:30 --> Pagination Class Initialized
INFO - 2020-01-03 05:52:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2020-01-03 05:52:30 --> Final output sent to browser
DEBUG - 2020-01-03 05:52:30 --> Total execution time: 0.2847
INFO - 2020-01-03 05:53:21 --> Config Class Initialized
INFO - 2020-01-03 05:53:21 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:53:21 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:53:21 --> Utf8 Class Initialized
INFO - 2020-01-03 05:53:21 --> URI Class Initialized
INFO - 2020-01-03 05:53:21 --> Router Class Initialized
INFO - 2020-01-03 05:53:21 --> Output Class Initialized
INFO - 2020-01-03 05:53:21 --> Security Class Initialized
DEBUG - 2020-01-03 05:53:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:53:21 --> Input Class Initialized
INFO - 2020-01-03 05:53:21 --> Language Class Initialized
INFO - 2020-01-03 05:53:21 --> Loader Class Initialized
INFO - 2020-01-03 05:53:21 --> Helper loaded: html_helper
INFO - 2020-01-03 05:53:21 --> Helper loaded: url_helper
INFO - 2020-01-03 05:53:21 --> Helper loaded: form_helper
INFO - 2020-01-03 05:53:21 --> Database Driver Class Initialized
INFO - 2020-01-03 05:53:21 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:53:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:53:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:53:21 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:53:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:53:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:53:21 --> Controller Class Initialized
INFO - 2020-01-03 05:53:21 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:53:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:53:21 --> Pagination Class Initialized
INFO - 2020-01-03 05:53:21 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/sessionSearch.php
INFO - 2020-01-03 05:53:21 --> Final output sent to browser
DEBUG - 2020-01-03 05:53:21 --> Total execution time: 0.2547
INFO - 2020-01-03 05:53:22 --> Config Class Initialized
INFO - 2020-01-03 05:53:22 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:53:22 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:53:22 --> Utf8 Class Initialized
INFO - 2020-01-03 05:53:22 --> URI Class Initialized
INFO - 2020-01-03 05:53:22 --> Router Class Initialized
INFO - 2020-01-03 05:53:22 --> Output Class Initialized
INFO - 2020-01-03 05:53:22 --> Security Class Initialized
DEBUG - 2020-01-03 05:53:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:53:22 --> Input Class Initialized
INFO - 2020-01-03 05:53:22 --> Language Class Initialized
INFO - 2020-01-03 05:53:22 --> Loader Class Initialized
INFO - 2020-01-03 05:53:22 --> Helper loaded: html_helper
INFO - 2020-01-03 05:53:22 --> Helper loaded: url_helper
INFO - 2020-01-03 05:53:22 --> Helper loaded: form_helper
INFO - 2020-01-03 05:53:22 --> Database Driver Class Initialized
INFO - 2020-01-03 05:53:22 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:53:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:53:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:53:22 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:53:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:53:22 --> Controller Class Initialized
INFO - 2020-01-03 05:53:22 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:53:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:53:22 --> Pagination Class Initialized
INFO - 2020-01-03 05:53:22 --> Model "ajaxsearch_model" initialized
INFO - 2020-01-03 05:53:22 --> Final output sent to browser
DEBUG - 2020-01-03 05:53:22 --> Total execution time: 0.2772
INFO - 2020-01-03 05:54:04 --> Config Class Initialized
INFO - 2020-01-03 05:54:04 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:54:04 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:54:04 --> Utf8 Class Initialized
INFO - 2020-01-03 05:54:04 --> URI Class Initialized
INFO - 2020-01-03 05:54:04 --> Router Class Initialized
INFO - 2020-01-03 05:54:04 --> Output Class Initialized
INFO - 2020-01-03 05:54:04 --> Security Class Initialized
DEBUG - 2020-01-03 05:54:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:54:04 --> Input Class Initialized
INFO - 2020-01-03 05:54:04 --> Language Class Initialized
INFO - 2020-01-03 05:54:04 --> Loader Class Initialized
INFO - 2020-01-03 05:54:04 --> Helper loaded: html_helper
INFO - 2020-01-03 05:54:04 --> Helper loaded: url_helper
INFO - 2020-01-03 05:54:04 --> Helper loaded: form_helper
INFO - 2020-01-03 05:54:04 --> Database Driver Class Initialized
INFO - 2020-01-03 05:54:05 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:54:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:54:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:54:05 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:54:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:54:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:54:05 --> Controller Class Initialized
INFO - 2020-01-03 05:54:05 --> Model "Authors_model" initialized
INFO - 2020-01-03 05:54:05 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-03 05:54:05 --> Pagination Class Initialized
INFO - 2020-01-03 05:54:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2020-01-03 05:54:05 --> Final output sent to browser
DEBUG - 2020-01-03 05:54:05 --> Total execution time: 0.2674
INFO - 2020-01-03 05:58:37 --> Config Class Initialized
INFO - 2020-01-03 05:58:37 --> Hooks Class Initialized
DEBUG - 2020-01-03 05:58:37 --> UTF-8 Support Enabled
INFO - 2020-01-03 05:58:37 --> Utf8 Class Initialized
INFO - 2020-01-03 05:58:37 --> URI Class Initialized
INFO - 2020-01-03 05:58:37 --> Router Class Initialized
INFO - 2020-01-03 05:58:37 --> Output Class Initialized
INFO - 2020-01-03 05:58:37 --> Security Class Initialized
DEBUG - 2020-01-03 05:58:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 05:58:37 --> Input Class Initialized
INFO - 2020-01-03 05:58:37 --> Language Class Initialized
INFO - 2020-01-03 05:58:37 --> Loader Class Initialized
INFO - 2020-01-03 05:58:37 --> Helper loaded: html_helper
INFO - 2020-01-03 05:58:37 --> Helper loaded: url_helper
INFO - 2020-01-03 05:58:37 --> Helper loaded: form_helper
INFO - 2020-01-03 05:58:37 --> Database Driver Class Initialized
INFO - 2020-01-03 05:58:37 --> Form Validation Class Initialized
DEBUG - 2020-01-03 05:58:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 05:58:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 05:58:37 --> Encryption Class Initialized
DEBUG - 2020-01-03 05:58:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 05:58:37 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 05:58:37 --> Controller Class Initialized
DEBUG - 2020-01-03 05:58:37 --> loading Configarable_Login model...
INFO - 2020-01-03 05:58:37 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-03 05:58:37 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-03 05:58:37 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-03 05:58:37 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 05:58:37 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 05:58:37 --> loading view public\Dashboard
INFO - 2020-01-03 05:58:37 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 05:58:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-03 05:58:37 --> Final output sent to browser
DEBUG - 2020-01-03 05:58:37 --> Total execution time: 0.3024
INFO - 2020-01-03 06:10:44 --> Config Class Initialized
INFO - 2020-01-03 06:10:44 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:10:44 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:10:44 --> Utf8 Class Initialized
INFO - 2020-01-03 06:10:44 --> URI Class Initialized
INFO - 2020-01-03 06:10:44 --> Router Class Initialized
INFO - 2020-01-03 06:10:44 --> Output Class Initialized
INFO - 2020-01-03 06:10:44 --> Security Class Initialized
DEBUG - 2020-01-03 06:10:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:10:44 --> Input Class Initialized
INFO - 2020-01-03 06:10:44 --> Language Class Initialized
INFO - 2020-01-03 06:10:44 --> Loader Class Initialized
INFO - 2020-01-03 06:10:44 --> Helper loaded: html_helper
INFO - 2020-01-03 06:10:44 --> Helper loaded: url_helper
INFO - 2020-01-03 06:10:44 --> Helper loaded: form_helper
INFO - 2020-01-03 06:10:44 --> Database Driver Class Initialized
INFO - 2020-01-03 06:10:44 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:10:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:10:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:10:44 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:10:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:10:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:10:44 --> Controller Class Initialized
DEBUG - 2020-01-03 06:10:44 --> loading Configarable_Login model...
INFO - 2020-01-03 06:10:44 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-03 06:10:44 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-03 06:10:44 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-03 06:10:44 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 06:10:44 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 06:10:44 --> loading view public\Dashboard
INFO - 2020-01-03 06:10:44 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 06:10:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-03 06:10:44 --> Final output sent to browser
DEBUG - 2020-01-03 06:10:44 --> Total execution time: 0.2950
INFO - 2020-01-03 06:13:45 --> Config Class Initialized
INFO - 2020-01-03 06:13:45 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:13:45 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:13:45 --> Utf8 Class Initialized
INFO - 2020-01-03 06:13:45 --> URI Class Initialized
INFO - 2020-01-03 06:13:45 --> Router Class Initialized
INFO - 2020-01-03 06:13:45 --> Output Class Initialized
INFO - 2020-01-03 06:13:45 --> Security Class Initialized
DEBUG - 2020-01-03 06:13:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:13:45 --> Input Class Initialized
INFO - 2020-01-03 06:13:45 --> Language Class Initialized
INFO - 2020-01-03 06:13:45 --> Loader Class Initialized
INFO - 2020-01-03 06:13:45 --> Helper loaded: html_helper
INFO - 2020-01-03 06:13:45 --> Helper loaded: url_helper
INFO - 2020-01-03 06:13:45 --> Helper loaded: form_helper
INFO - 2020-01-03 06:13:45 --> Database Driver Class Initialized
INFO - 2020-01-03 06:13:45 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:13:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:13:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:13:45 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:13:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:13:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:13:45 --> Controller Class Initialized
DEBUG - 2020-01-03 06:13:45 --> loading Configarable_Login model...
INFO - 2020-01-03 06:13:45 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-03 06:13:45 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-03 06:13:45 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-03 06:13:45 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 06:13:45 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 06:13:45 --> loading view public\Dashboard
INFO - 2020-01-03 06:13:45 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 06:13:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-03 06:13:45 --> Final output sent to browser
DEBUG - 2020-01-03 06:13:45 --> Total execution time: 0.3425
INFO - 2020-01-03 06:18:16 --> Config Class Initialized
INFO - 2020-01-03 06:18:16 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:18:16 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:18:16 --> Utf8 Class Initialized
INFO - 2020-01-03 06:18:16 --> URI Class Initialized
INFO - 2020-01-03 06:18:16 --> Router Class Initialized
INFO - 2020-01-03 06:18:16 --> Output Class Initialized
INFO - 2020-01-03 06:18:16 --> Security Class Initialized
DEBUG - 2020-01-03 06:18:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:18:16 --> Input Class Initialized
INFO - 2020-01-03 06:18:16 --> Language Class Initialized
INFO - 2020-01-03 06:18:16 --> Loader Class Initialized
INFO - 2020-01-03 06:18:16 --> Helper loaded: html_helper
INFO - 2020-01-03 06:18:16 --> Helper loaded: url_helper
INFO - 2020-01-03 06:18:16 --> Helper loaded: form_helper
INFO - 2020-01-03 06:18:16 --> Database Driver Class Initialized
INFO - 2020-01-03 06:18:16 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:18:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:18:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:18:16 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:18:16 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:18:16 --> Controller Class Initialized
DEBUG - 2020-01-03 06:18:16 --> loading Configarable_Login model...
INFO - 2020-01-03 06:18:16 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-03 06:18:16 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-03 06:18:16 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-03 06:18:16 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 06:18:16 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 06:18:16 --> loading view public\Dashboard
INFO - 2020-01-03 06:18:16 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 06:18:16 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-03 06:18:16 --> Final output sent to browser
DEBUG - 2020-01-03 06:18:16 --> Total execution time: 0.3011
INFO - 2020-01-03 06:21:01 --> Config Class Initialized
INFO - 2020-01-03 06:21:01 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:21:01 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:21:01 --> Utf8 Class Initialized
INFO - 2020-01-03 06:21:01 --> URI Class Initialized
INFO - 2020-01-03 06:21:01 --> Router Class Initialized
INFO - 2020-01-03 06:21:01 --> Output Class Initialized
INFO - 2020-01-03 06:21:01 --> Security Class Initialized
DEBUG - 2020-01-03 06:21:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:21:01 --> Input Class Initialized
INFO - 2020-01-03 06:21:01 --> Language Class Initialized
INFO - 2020-01-03 06:21:02 --> Loader Class Initialized
INFO - 2020-01-03 06:21:02 --> Helper loaded: html_helper
INFO - 2020-01-03 06:21:02 --> Helper loaded: url_helper
INFO - 2020-01-03 06:21:02 --> Helper loaded: form_helper
INFO - 2020-01-03 06:21:02 --> Database Driver Class Initialized
INFO - 2020-01-03 06:21:02 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:21:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:21:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:21:02 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:21:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:21:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:21:02 --> Controller Class Initialized
DEBUG - 2020-01-03 06:21:02 --> loading Configarable_Login model...
INFO - 2020-01-03 06:21:02 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-03 06:21:02 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-03 06:21:02 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-03 06:21:02 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 06:21:02 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 06:21:02 --> loading view public\Dashboard
INFO - 2020-01-03 06:21:02 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 06:21:02 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-03 06:21:02 --> Final output sent to browser
DEBUG - 2020-01-03 06:21:02 --> Total execution time: 0.2671
INFO - 2020-01-03 06:25:17 --> Config Class Initialized
INFO - 2020-01-03 06:25:17 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:25:17 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:25:17 --> Utf8 Class Initialized
INFO - 2020-01-03 06:25:17 --> URI Class Initialized
INFO - 2020-01-03 06:25:17 --> Router Class Initialized
INFO - 2020-01-03 06:25:17 --> Output Class Initialized
INFO - 2020-01-03 06:25:17 --> Security Class Initialized
DEBUG - 2020-01-03 06:25:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:25:17 --> Input Class Initialized
INFO - 2020-01-03 06:25:17 --> Language Class Initialized
INFO - 2020-01-03 06:25:17 --> Loader Class Initialized
INFO - 2020-01-03 06:25:17 --> Helper loaded: html_helper
INFO - 2020-01-03 06:25:17 --> Helper loaded: url_helper
INFO - 2020-01-03 06:25:17 --> Helper loaded: form_helper
INFO - 2020-01-03 06:25:17 --> Database Driver Class Initialized
INFO - 2020-01-03 06:25:17 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:25:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:25:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:25:17 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:25:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:25:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:25:17 --> Controller Class Initialized
DEBUG - 2020-01-03 06:25:17 --> Create_User constructer got called..
INFO - 2020-01-03 06:25:17 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-03 06:25:17 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 06:25:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-03 06:25:17 --> Final output sent to browser
DEBUG - 2020-01-03 06:25:17 --> Total execution time: 0.2400
INFO - 2020-01-03 06:25:19 --> Config Class Initialized
INFO - 2020-01-03 06:25:19 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:25:19 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:25:19 --> Utf8 Class Initialized
INFO - 2020-01-03 06:25:19 --> URI Class Initialized
INFO - 2020-01-03 06:25:19 --> Router Class Initialized
INFO - 2020-01-03 06:25:19 --> Output Class Initialized
INFO - 2020-01-03 06:25:19 --> Security Class Initialized
DEBUG - 2020-01-03 06:25:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:25:19 --> Input Class Initialized
INFO - 2020-01-03 06:25:19 --> Language Class Initialized
INFO - 2020-01-03 06:25:19 --> Loader Class Initialized
INFO - 2020-01-03 06:25:19 --> Helper loaded: html_helper
INFO - 2020-01-03 06:25:19 --> Helper loaded: url_helper
INFO - 2020-01-03 06:25:19 --> Helper loaded: form_helper
INFO - 2020-01-03 06:25:19 --> Database Driver Class Initialized
INFO - 2020-01-03 06:25:19 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:25:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:25:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:25:19 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:25:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:25:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:25:19 --> Controller Class Initialized
DEBUG - 2020-01-03 06:25:19 --> Create_User constructer got called..
INFO - 2020-01-03 06:25:19 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-03 06:25:19 --> showing all user from db tblusers...
DEBUG - 2020-01-03 06:25:19 --> show_users from DB
DEBUG - 2020-01-03 06:25:19 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 06:25:20 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-03 06:25:20 --> Final output sent to browser
DEBUG - 2020-01-03 06:25:20 --> Total execution time: 0.3200
INFO - 2020-01-03 06:25:22 --> Config Class Initialized
INFO - 2020-01-03 06:25:22 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:25:22 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:25:22 --> Utf8 Class Initialized
INFO - 2020-01-03 06:25:22 --> URI Class Initialized
INFO - 2020-01-03 06:25:22 --> Router Class Initialized
INFO - 2020-01-03 06:25:22 --> Output Class Initialized
INFO - 2020-01-03 06:25:22 --> Security Class Initialized
DEBUG - 2020-01-03 06:25:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:25:22 --> Input Class Initialized
INFO - 2020-01-03 06:25:22 --> Language Class Initialized
INFO - 2020-01-03 06:25:22 --> Loader Class Initialized
INFO - 2020-01-03 06:25:22 --> Helper loaded: html_helper
INFO - 2020-01-03 06:25:22 --> Helper loaded: url_helper
INFO - 2020-01-03 06:25:22 --> Helper loaded: form_helper
INFO - 2020-01-03 06:25:22 --> Database Driver Class Initialized
INFO - 2020-01-03 06:25:22 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:25:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:25:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:25:22 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:25:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:25:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:25:22 --> Controller Class Initialized
DEBUG - 2020-01-03 06:25:22 --> Create_User constructer got called..
INFO - 2020-01-03 06:25:22 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 06:25:22 --> getAllSubgroup model
DEBUG - 2020-01-03 06:25:22 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-03 06:25:22 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 06:25:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2020-01-03 06:25:22 --> Final output sent to browser
DEBUG - 2020-01-03 06:25:22 --> Total execution time: 0.2560
INFO - 2020-01-03 06:25:29 --> Config Class Initialized
INFO - 2020-01-03 06:25:29 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:25:29 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:25:29 --> Utf8 Class Initialized
INFO - 2020-01-03 06:25:29 --> URI Class Initialized
INFO - 2020-01-03 06:25:29 --> Router Class Initialized
INFO - 2020-01-03 06:25:29 --> Output Class Initialized
INFO - 2020-01-03 06:25:29 --> Security Class Initialized
DEBUG - 2020-01-03 06:25:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:25:29 --> Input Class Initialized
INFO - 2020-01-03 06:25:29 --> Language Class Initialized
INFO - 2020-01-03 06:25:29 --> Loader Class Initialized
INFO - 2020-01-03 06:25:29 --> Helper loaded: html_helper
INFO - 2020-01-03 06:25:29 --> Helper loaded: url_helper
INFO - 2020-01-03 06:25:29 --> Helper loaded: form_helper
INFO - 2020-01-03 06:25:29 --> Database Driver Class Initialized
INFO - 2020-01-03 06:25:29 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:25:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:25:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:25:29 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:25:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:25:29 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:25:29 --> Controller Class Initialized
DEBUG - 2020-01-03 06:25:29 --> Create_User constructer got called..
INFO - 2020-01-03 06:25:29 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 06:25:29 --> getAllSubgroup model
DEBUG - 2020-01-03 06:25:29 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-03 06:25:29 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 06:25:29 --> getAllSubgroup model
DEBUG - 2020-01-03 06:25:29 --> getAllUIMasterData from DB retrived
INFO - 2020-01-03 06:25:29 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2020-01-03 06:25:29 --> Final output sent to browser
DEBUG - 2020-01-03 06:25:29 --> Total execution time: 0.3300
INFO - 2020-01-03 06:25:31 --> Config Class Initialized
INFO - 2020-01-03 06:25:31 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:25:31 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:25:31 --> Utf8 Class Initialized
INFO - 2020-01-03 06:25:31 --> URI Class Initialized
INFO - 2020-01-03 06:25:31 --> Router Class Initialized
INFO - 2020-01-03 06:25:31 --> Output Class Initialized
INFO - 2020-01-03 06:25:31 --> Security Class Initialized
DEBUG - 2020-01-03 06:25:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:25:31 --> Input Class Initialized
INFO - 2020-01-03 06:25:32 --> Language Class Initialized
INFO - 2020-01-03 06:25:32 --> Loader Class Initialized
INFO - 2020-01-03 06:25:32 --> Helper loaded: html_helper
INFO - 2020-01-03 06:25:32 --> Helper loaded: url_helper
INFO - 2020-01-03 06:25:32 --> Helper loaded: form_helper
INFO - 2020-01-03 06:25:32 --> Database Driver Class Initialized
INFO - 2020-01-03 06:25:32 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:25:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:25:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:25:32 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:25:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:25:32 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:25:32 --> Controller Class Initialized
DEBUG - 2020-01-03 06:25:32 --> Create_User constructer got called..
INFO - 2020-01-03 06:25:32 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 06:25:32 --> getAllSubgroup model
DEBUG - 2020-01-03 06:25:32 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-03 06:25:32 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 06:25:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2020-01-03 06:25:32 --> Final output sent to browser
DEBUG - 2020-01-03 06:25:32 --> Total execution time: 0.2680
INFO - 2020-01-03 06:25:36 --> Config Class Initialized
INFO - 2020-01-03 06:25:36 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:25:36 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:25:36 --> Utf8 Class Initialized
INFO - 2020-01-03 06:25:36 --> URI Class Initialized
INFO - 2020-01-03 06:25:36 --> Router Class Initialized
INFO - 2020-01-03 06:25:36 --> Output Class Initialized
INFO - 2020-01-03 06:25:36 --> Security Class Initialized
DEBUG - 2020-01-03 06:25:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:25:36 --> Input Class Initialized
INFO - 2020-01-03 06:25:36 --> Language Class Initialized
INFO - 2020-01-03 06:25:36 --> Loader Class Initialized
INFO - 2020-01-03 06:25:36 --> Helper loaded: html_helper
INFO - 2020-01-03 06:25:36 --> Helper loaded: url_helper
INFO - 2020-01-03 06:25:36 --> Helper loaded: form_helper
INFO - 2020-01-03 06:25:36 --> Database Driver Class Initialized
INFO - 2020-01-03 06:25:36 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:25:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:25:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:25:36 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:25:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:25:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:25:36 --> Controller Class Initialized
DEBUG - 2020-01-03 06:25:36 --> Create_User constructer got called..
INFO - 2020-01-03 06:25:36 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-03 06:25:36 --> showing all user from db tblusers...
DEBUG - 2020-01-03 06:25:36 --> show_groups from DB
INFO - 2020-01-03 06:25:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2020-01-03 06:25:36 --> Final output sent to browser
DEBUG - 2020-01-03 06:25:36 --> Total execution time: 0.2670
INFO - 2020-01-03 06:25:40 --> Config Class Initialized
INFO - 2020-01-03 06:25:40 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:25:40 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:25:40 --> Utf8 Class Initialized
INFO - 2020-01-03 06:25:40 --> URI Class Initialized
INFO - 2020-01-03 06:25:40 --> Router Class Initialized
INFO - 2020-01-03 06:25:40 --> Output Class Initialized
INFO - 2020-01-03 06:25:40 --> Security Class Initialized
DEBUG - 2020-01-03 06:25:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:25:40 --> Input Class Initialized
INFO - 2020-01-03 06:25:40 --> Language Class Initialized
INFO - 2020-01-03 06:25:40 --> Loader Class Initialized
INFO - 2020-01-03 06:25:40 --> Helper loaded: html_helper
INFO - 2020-01-03 06:25:40 --> Helper loaded: url_helper
INFO - 2020-01-03 06:25:40 --> Helper loaded: form_helper
INFO - 2020-01-03 06:25:40 --> Database Driver Class Initialized
INFO - 2020-01-03 06:25:40 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:25:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:25:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:25:40 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:25:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:25:40 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:25:40 --> Controller Class Initialized
DEBUG - 2020-01-03 06:25:40 --> Create_User constructer got called..
INFO - 2020-01-03 06:25:40 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-03 06:25:40 --> showing all user from db tblusers...
DEBUG - 2020-01-03 06:25:40 --> show_users from DB
DEBUG - 2020-01-03 06:25:40 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 06:25:40 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-03 06:25:40 --> Final output sent to browser
DEBUG - 2020-01-03 06:25:40 --> Total execution time: 0.2620
INFO - 2020-01-03 06:25:42 --> Config Class Initialized
INFO - 2020-01-03 06:25:42 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:25:42 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:25:42 --> Utf8 Class Initialized
INFO - 2020-01-03 06:25:42 --> URI Class Initialized
INFO - 2020-01-03 06:25:42 --> Router Class Initialized
INFO - 2020-01-03 06:25:42 --> Output Class Initialized
INFO - 2020-01-03 06:25:42 --> Security Class Initialized
DEBUG - 2020-01-03 06:25:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:25:42 --> Input Class Initialized
INFO - 2020-01-03 06:25:42 --> Language Class Initialized
INFO - 2020-01-03 06:25:42 --> Loader Class Initialized
INFO - 2020-01-03 06:25:42 --> Helper loaded: html_helper
INFO - 2020-01-03 06:25:42 --> Helper loaded: url_helper
INFO - 2020-01-03 06:25:42 --> Helper loaded: form_helper
INFO - 2020-01-03 06:25:42 --> Database Driver Class Initialized
INFO - 2020-01-03 06:25:42 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:25:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:25:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:25:42 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:25:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:25:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:25:42 --> Controller Class Initialized
DEBUG - 2020-01-03 06:25:42 --> Create_User constructer got called..
INFO - 2020-01-03 06:25:42 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-03 06:25:42 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 06:25:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-03 06:25:42 --> Final output sent to browser
DEBUG - 2020-01-03 06:25:42 --> Total execution time: 0.3380
INFO - 2020-01-03 06:26:09 --> Config Class Initialized
INFO - 2020-01-03 06:26:09 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:26:09 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:26:09 --> Utf8 Class Initialized
INFO - 2020-01-03 06:26:09 --> URI Class Initialized
INFO - 2020-01-03 06:26:09 --> Router Class Initialized
INFO - 2020-01-03 06:26:09 --> Output Class Initialized
INFO - 2020-01-03 06:26:09 --> Security Class Initialized
DEBUG - 2020-01-03 06:26:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:26:09 --> Input Class Initialized
INFO - 2020-01-03 06:26:09 --> Language Class Initialized
INFO - 2020-01-03 06:26:09 --> Loader Class Initialized
INFO - 2020-01-03 06:26:09 --> Helper loaded: html_helper
INFO - 2020-01-03 06:26:09 --> Helper loaded: url_helper
INFO - 2020-01-03 06:26:09 --> Helper loaded: form_helper
INFO - 2020-01-03 06:26:09 --> Database Driver Class Initialized
INFO - 2020-01-03 06:26:09 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:26:09 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:26:09 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:26:09 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:26:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:26:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:26:09 --> Controller Class Initialized
DEBUG - 2020-01-03 06:26:09 --> loading Configarable_Login model...
INFO - 2020-01-03 06:26:09 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-03 06:26:09 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-03 06:26:09 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-03 06:26:09 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 06:26:09 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 23
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2019-12-17 14:16:54
            [page_role] => DB_ADMIN_USER
            [page_seq] => 1
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 21
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 3
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 22
            [page_name] => Change password
            [page_link] => user/Change_Password
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 4
            [page_active] => 
            [symbol] => fas fa-fw fa-table
        )

    [3] => stdClass Object
        (
            [page_id] => 19
            [page_name] => Config management
            [page_link] => Test/wip_page
            [page_status] => A
            [page_create_ts] => 2019-12-12 15:19:39
            [page_role] => DB_ADMIN_USER
            [page_seq] => 5
            [page_active] => 
            [symbol] => fas fa-fw fa-list
        )

    [4] => stdClass Object
        (
            [page_id] => 29
            [page_name] => User Management
            [page_link] => user/Create_User
            [page_status] => A
            [page_create_ts] => 2019-12-21 11:57:51
            [page_role] => DB_ADMIN_USER
            [page_seq] => 8
            [page_active] => 
            [symbol] => fas fa-fw fa-user-plus
        )

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DB_ADMIN_USER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2020-01-03 06:26:09 --> loading view public\Dashboard
INFO - 2020-01-03 06:26:09 --> Model "User_Login_Model" initialized
INFO - 2020-01-03 06:26:09 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-03 06:26:09 --> Final output sent to browser
DEBUG - 2020-01-03 06:26:09 --> Total execution time: 0.3190
INFO - 2020-01-03 06:26:11 --> Config Class Initialized
INFO - 2020-01-03 06:26:11 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:26:11 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:26:11 --> Utf8 Class Initialized
INFO - 2020-01-03 06:26:11 --> URI Class Initialized
INFO - 2020-01-03 06:26:11 --> Router Class Initialized
INFO - 2020-01-03 06:26:11 --> Output Class Initialized
INFO - 2020-01-03 06:26:11 --> Security Class Initialized
DEBUG - 2020-01-03 06:26:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:26:11 --> Input Class Initialized
INFO - 2020-01-03 06:26:11 --> Language Class Initialized
INFO - 2020-01-03 06:26:11 --> Loader Class Initialized
INFO - 2020-01-03 06:26:11 --> Helper loaded: html_helper
INFO - 2020-01-03 06:26:11 --> Helper loaded: url_helper
INFO - 2020-01-03 06:26:11 --> Helper loaded: form_helper
INFO - 2020-01-03 06:26:11 --> Database Driver Class Initialized
INFO - 2020-01-03 06:26:11 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:26:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:26:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:26:11 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:26:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:26:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:26:11 --> Controller Class Initialized
DEBUG - 2020-01-03 06:26:11 --> Create_User constructer got called..
INFO - 2020-01-03 06:26:11 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-03 06:26:11 --> showing all user from db tblusers...
DEBUG - 2020-01-03 06:26:11 --> show_users from DB
DEBUG - 2020-01-03 06:26:11 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 06:26:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-03 06:26:11 --> Final output sent to browser
DEBUG - 2020-01-03 06:26:11 --> Total execution time: 0.2670
INFO - 2020-01-03 06:26:13 --> Config Class Initialized
INFO - 2020-01-03 06:26:13 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:26:13 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:26:13 --> Utf8 Class Initialized
INFO - 2020-01-03 06:26:13 --> URI Class Initialized
INFO - 2020-01-03 06:26:13 --> Router Class Initialized
INFO - 2020-01-03 06:26:13 --> Output Class Initialized
INFO - 2020-01-03 06:26:13 --> Security Class Initialized
DEBUG - 2020-01-03 06:26:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:26:13 --> Input Class Initialized
INFO - 2020-01-03 06:26:13 --> Language Class Initialized
INFO - 2020-01-03 06:26:13 --> Loader Class Initialized
INFO - 2020-01-03 06:26:13 --> Helper loaded: html_helper
INFO - 2020-01-03 06:26:13 --> Helper loaded: url_helper
INFO - 2020-01-03 06:26:13 --> Helper loaded: form_helper
INFO - 2020-01-03 06:26:13 --> Database Driver Class Initialized
INFO - 2020-01-03 06:26:13 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:26:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:26:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:26:13 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:26:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:26:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:26:13 --> Controller Class Initialized
DEBUG - 2020-01-03 06:26:13 --> Create_User constructer got called..
INFO - 2020-01-03 06:26:13 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-03 06:26:13 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 06:26:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-03 06:26:13 --> Final output sent to browser
DEBUG - 2020-01-03 06:26:13 --> Total execution time: 0.2850
INFO - 2020-01-03 06:28:24 --> Config Class Initialized
INFO - 2020-01-03 06:28:24 --> Hooks Class Initialized
DEBUG - 2020-01-03 06:28:24 --> UTF-8 Support Enabled
INFO - 2020-01-03 06:28:24 --> Utf8 Class Initialized
INFO - 2020-01-03 06:28:24 --> URI Class Initialized
INFO - 2020-01-03 06:28:24 --> Router Class Initialized
INFO - 2020-01-03 06:28:24 --> Output Class Initialized
INFO - 2020-01-03 06:28:24 --> Security Class Initialized
DEBUG - 2020-01-03 06:28:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-03 06:28:24 --> Input Class Initialized
INFO - 2020-01-03 06:28:24 --> Language Class Initialized
INFO - 2020-01-03 06:28:24 --> Loader Class Initialized
INFO - 2020-01-03 06:28:24 --> Helper loaded: html_helper
INFO - 2020-01-03 06:28:24 --> Helper loaded: url_helper
INFO - 2020-01-03 06:28:24 --> Helper loaded: form_helper
INFO - 2020-01-03 06:28:24 --> Database Driver Class Initialized
INFO - 2020-01-03 06:28:24 --> Form Validation Class Initialized
DEBUG - 2020-01-03 06:28:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-03 06:28:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-03 06:28:24 --> Encryption Class Initialized
DEBUG - 2020-01-03 06:28:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-03 06:28:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-03 06:28:24 --> Controller Class Initialized
DEBUG - 2020-01-03 06:28:24 --> Create_User constructer got called..
INFO - 2020-01-03 06:28:24 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-03 06:28:24 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-03 06:28:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-03 06:28:24 --> Final output sent to browser
DEBUG - 2020-01-03 06:28:24 --> Total execution time: 0.2910
