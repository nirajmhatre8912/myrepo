<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-12-31 05:44:00 --> Config Class Initialized
INFO - 2019-12-31 05:44:00 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:44:00 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:44:00 --> Utf8 Class Initialized
INFO - 2019-12-31 05:44:00 --> URI Class Initialized
INFO - 2019-12-31 05:44:00 --> Router Class Initialized
INFO - 2019-12-31 05:44:00 --> Output Class Initialized
INFO - 2019-12-31 05:44:00 --> Security Class Initialized
DEBUG - 2019-12-31 05:44:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:44:00 --> Input Class Initialized
INFO - 2019-12-31 05:44:00 --> Language Class Initialized
INFO - 2019-12-31 05:44:00 --> Loader Class Initialized
INFO - 2019-12-31 05:44:00 --> Helper loaded: html_helper
INFO - 2019-12-31 05:44:00 --> Helper loaded: url_helper
INFO - 2019-12-31 05:44:00 --> Helper loaded: form_helper
INFO - 2019-12-31 05:44:00 --> Database Driver Class Initialized
INFO - 2019-12-31 05:44:00 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:44:00 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:44:00 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:44:00 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:44:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:44:00 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:44:00 --> Controller Class Initialized
INFO - 2019-12-31 05:44:00 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-31 05:44:00 --> Final output sent to browser
DEBUG - 2019-12-31 05:44:00 --> Total execution time: 0.0524
INFO - 2019-12-31 05:44:12 --> Config Class Initialized
INFO - 2019-12-31 05:44:12 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:44:12 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:44:12 --> Utf8 Class Initialized
INFO - 2019-12-31 05:44:12 --> URI Class Initialized
INFO - 2019-12-31 05:44:12 --> Router Class Initialized
INFO - 2019-12-31 05:44:12 --> Output Class Initialized
INFO - 2019-12-31 05:44:12 --> Security Class Initialized
DEBUG - 2019-12-31 05:44:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:44:12 --> Input Class Initialized
INFO - 2019-12-31 05:44:12 --> Language Class Initialized
INFO - 2019-12-31 05:44:12 --> Loader Class Initialized
INFO - 2019-12-31 05:44:12 --> Helper loaded: html_helper
INFO - 2019-12-31 05:44:12 --> Helper loaded: url_helper
INFO - 2019-12-31 05:44:12 --> Helper loaded: form_helper
INFO - 2019-12-31 05:44:12 --> Database Driver Class Initialized
INFO - 2019-12-31 05:44:12 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:44:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:44:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:44:12 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:44:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:44:12 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:44:12 --> Controller Class Initialized
INFO - 2019-12-31 05:44:12 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-31 05:44:12 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:44:12 --> getAuth method got called...
DEBUG - 2019-12-31 05:44:12 --> Username :- DevOss
INFO - 2019-12-31 05:44:12 --> this is db user...
DEBUG - 2019-12-31 05:44:12 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-31 05:44:12 --> Password hashing output = $2y$10$AfXExqLpvWgQf4P6zMCHlukpVgLxHscpHmpEbqgPJwUO2XlpwB2nS
DEBUG - 2019-12-31 05:44:12 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
DEBUG - 2019-12-31 05:44:12 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2019-12-31 05:44:12 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-31 05:44:12 --> Role Retrive from DB
INFO - 2019-12-31 05:44:12 --> get_group_role_mapping model = 16
DEBUG - 2019-12-31 05:44:12 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-31 05:44:12 --> loading model Active_Session
INFO - 2019-12-31 05:44:12 --> Model "Active_Session" initialized
DEBUG - 2019-12-31 05:44:12 --> calling insert_active_session()
DEBUG - 2019-12-31 05:44:12 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-31 05:44:12 --> insert success
DEBUG - 2019-12-31 05:44:12 --> loading Configarable_Login model...
INFO - 2019-12-31 05:44:12 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-31 05:44:12 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-31 05:44:12 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-31 05:44:12 --> Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 05:44:12 --> loading configurable menu with result=Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 05:44:12 --> loading view public\Dashboard
INFO - 2019-12-31 05:44:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-31 05:44:12 --> Final output sent to browser
DEBUG - 2019-12-31 05:44:12 --> Total execution time: 0.2965
INFO - 2019-12-31 05:44:43 --> Config Class Initialized
INFO - 2019-12-31 05:44:43 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:44:43 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:44:43 --> Utf8 Class Initialized
INFO - 2019-12-31 05:44:43 --> URI Class Initialized
INFO - 2019-12-31 05:44:43 --> Router Class Initialized
INFO - 2019-12-31 05:44:43 --> Output Class Initialized
INFO - 2019-12-31 05:44:43 --> Security Class Initialized
DEBUG - 2019-12-31 05:44:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:44:43 --> Input Class Initialized
INFO - 2019-12-31 05:44:43 --> Language Class Initialized
INFO - 2019-12-31 05:44:43 --> Loader Class Initialized
INFO - 2019-12-31 05:44:43 --> Helper loaded: html_helper
INFO - 2019-12-31 05:44:43 --> Helper loaded: url_helper
INFO - 2019-12-31 05:44:43 --> Helper loaded: form_helper
INFO - 2019-12-31 05:44:43 --> Database Driver Class Initialized
INFO - 2019-12-31 05:44:43 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:44:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:44:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:44:43 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:44:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:44:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:44:43 --> Controller Class Initialized
DEBUG - 2019-12-31 05:44:43 --> Create_User constructer got called..
INFO - 2019-12-31 05:44:43 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 05:44:43 --> showing all user from db tblusers...
DEBUG - 2019-12-31 05:44:43 --> show_groups from DB
INFO - 2019-12-31 05:44:43 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-31 05:44:43 --> Final output sent to browser
DEBUG - 2019-12-31 05:44:43 --> Total execution time: 0.0586
INFO - 2019-12-31 05:45:11 --> Config Class Initialized
INFO - 2019-12-31 05:45:11 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:45:11 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:45:11 --> Utf8 Class Initialized
INFO - 2019-12-31 05:45:11 --> URI Class Initialized
INFO - 2019-12-31 05:45:11 --> Router Class Initialized
INFO - 2019-12-31 05:45:11 --> Output Class Initialized
INFO - 2019-12-31 05:45:11 --> Security Class Initialized
DEBUG - 2019-12-31 05:45:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:45:11 --> Input Class Initialized
INFO - 2019-12-31 05:45:11 --> Language Class Initialized
INFO - 2019-12-31 05:45:11 --> Loader Class Initialized
INFO - 2019-12-31 05:45:11 --> Helper loaded: html_helper
INFO - 2019-12-31 05:45:11 --> Helper loaded: url_helper
INFO - 2019-12-31 05:45:11 --> Helper loaded: form_helper
INFO - 2019-12-31 05:45:11 --> Database Driver Class Initialized
INFO - 2019-12-31 05:45:11 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:45:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:45:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:45:11 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:45:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:45:11 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:45:11 --> Controller Class Initialized
DEBUG - 2019-12-31 05:45:11 --> Create_User constructer got called..
INFO - 2019-12-31 05:45:11 --> Model "User_Login_Model" initialized
ERROR - 2019-12-31 05:45:11 --> Query error: Duplicate entry 'My Group_sub' for key 'subGroupName' - Invalid query: INSERT INTO `group_sub_group_map` (`groupId`, `groupName`, `subGroupName`, `subGroupDesc`) VALUES ('56', 'My Group', 'My Group_sub', 'This is the test group_sub')
INFO - 2019-12-31 05:45:11 --> Language file loaded: language/english/db_lang.php
INFO - 2019-12-31 05:45:27 --> Config Class Initialized
INFO - 2019-12-31 05:45:27 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:45:27 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:45:27 --> Utf8 Class Initialized
INFO - 2019-12-31 05:45:27 --> URI Class Initialized
INFO - 2019-12-31 05:45:27 --> Router Class Initialized
INFO - 2019-12-31 05:45:27 --> Output Class Initialized
INFO - 2019-12-31 05:45:27 --> Security Class Initialized
DEBUG - 2019-12-31 05:45:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:45:27 --> Input Class Initialized
INFO - 2019-12-31 05:45:27 --> Language Class Initialized
INFO - 2019-12-31 05:45:27 --> Loader Class Initialized
INFO - 2019-12-31 05:45:27 --> Helper loaded: html_helper
INFO - 2019-12-31 05:45:27 --> Helper loaded: url_helper
INFO - 2019-12-31 05:45:27 --> Helper loaded: form_helper
INFO - 2019-12-31 05:45:27 --> Database Driver Class Initialized
INFO - 2019-12-31 05:45:27 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:45:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:45:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:45:27 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:45:27 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:45:27 --> Controller Class Initialized
DEBUG - 2019-12-31 05:45:27 --> Create_User constructer got called..
INFO - 2019-12-31 05:45:27 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 05:45:27 --> showing all user from db tblusers...
DEBUG - 2019-12-31 05:45:27 --> show_groups from DB
INFO - 2019-12-31 05:45:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-31 05:45:27 --> Final output sent to browser
DEBUG - 2019-12-31 05:45:27 --> Total execution time: 0.0586
INFO - 2019-12-31 05:45:30 --> Config Class Initialized
INFO - 2019-12-31 05:45:30 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:45:30 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:45:30 --> Utf8 Class Initialized
INFO - 2019-12-31 05:45:30 --> URI Class Initialized
INFO - 2019-12-31 05:45:30 --> Router Class Initialized
INFO - 2019-12-31 05:45:30 --> Output Class Initialized
INFO - 2019-12-31 05:45:30 --> Security Class Initialized
DEBUG - 2019-12-31 05:45:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:45:30 --> Input Class Initialized
INFO - 2019-12-31 05:45:30 --> Language Class Initialized
INFO - 2019-12-31 05:45:30 --> Loader Class Initialized
INFO - 2019-12-31 05:45:30 --> Helper loaded: html_helper
INFO - 2019-12-31 05:45:30 --> Helper loaded: url_helper
INFO - 2019-12-31 05:45:30 --> Helper loaded: form_helper
INFO - 2019-12-31 05:45:30 --> Database Driver Class Initialized
INFO - 2019-12-31 05:45:30 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:45:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:45:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:45:30 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:45:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:45:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:45:30 --> Controller Class Initialized
DEBUG - 2019-12-31 05:45:30 --> Create_User constructer got called..
INFO - 2019-12-31 05:45:30 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:45:30 --> getAllSubgroup model
DEBUG - 2019-12-31 05:45:30 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-31 05:45:30 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 05:45:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-31 05:45:30 --> Final output sent to browser
DEBUG - 2019-12-31 05:45:30 --> Total execution time: 0.0591
INFO - 2019-12-31 05:45:34 --> Config Class Initialized
INFO - 2019-12-31 05:45:34 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:45:34 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:45:34 --> Utf8 Class Initialized
INFO - 2019-12-31 05:45:34 --> URI Class Initialized
INFO - 2019-12-31 05:45:34 --> Router Class Initialized
INFO - 2019-12-31 05:45:34 --> Output Class Initialized
INFO - 2019-12-31 05:45:34 --> Security Class Initialized
DEBUG - 2019-12-31 05:45:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:45:34 --> Input Class Initialized
INFO - 2019-12-31 05:45:34 --> Language Class Initialized
INFO - 2019-12-31 05:45:34 --> Loader Class Initialized
INFO - 2019-12-31 05:45:34 --> Helper loaded: html_helper
INFO - 2019-12-31 05:45:34 --> Helper loaded: url_helper
INFO - 2019-12-31 05:45:34 --> Helper loaded: form_helper
INFO - 2019-12-31 05:45:34 --> Database Driver Class Initialized
INFO - 2019-12-31 05:45:34 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:45:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:45:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:45:34 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:45:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:45:34 --> Controller Class Initialized
DEBUG - 2019-12-31 05:45:34 --> Create_User constructer got called..
INFO - 2019-12-31 05:45:34 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:45:34 --> get_group_role_mapping model = 52
DEBUG - 2019-12-31 05:45:34 --> show_all_profile_data from DB retrived
INFO - 2019-12-31 05:45:34 --> Final output sent to browser
DEBUG - 2019-12-31 05:45:34 --> Total execution time: 0.0578
INFO - 2019-12-31 05:45:34 --> Config Class Initialized
INFO - 2019-12-31 05:45:34 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:45:34 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:45:34 --> Utf8 Class Initialized
INFO - 2019-12-31 05:45:34 --> URI Class Initialized
INFO - 2019-12-31 05:45:34 --> Router Class Initialized
INFO - 2019-12-31 05:45:34 --> Output Class Initialized
INFO - 2019-12-31 05:45:34 --> Security Class Initialized
DEBUG - 2019-12-31 05:45:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:45:34 --> Input Class Initialized
INFO - 2019-12-31 05:45:34 --> Language Class Initialized
INFO - 2019-12-31 05:45:34 --> Loader Class Initialized
INFO - 2019-12-31 05:45:34 --> Helper loaded: html_helper
INFO - 2019-12-31 05:45:34 --> Helper loaded: url_helper
INFO - 2019-12-31 05:45:34 --> Helper loaded: form_helper
INFO - 2019-12-31 05:45:34 --> Database Driver Class Initialized
INFO - 2019-12-31 05:45:34 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:45:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:45:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:45:34 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:45:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:45:34 --> Controller Class Initialized
DEBUG - 2019-12-31 05:45:34 --> Create_User constructer got called..
INFO - 2019-12-31 05:45:34 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:45:34 --> getAllSubGroupData model = 16
DEBUG - 2019-12-31 05:45:34 --> getAllSubGroupData from DB retrived
INFO - 2019-12-31 05:45:34 --> Final output sent to browser
DEBUG - 2019-12-31 05:45:34 --> Total execution time: 0.0573
INFO - 2019-12-31 05:45:43 --> Config Class Initialized
INFO - 2019-12-31 05:45:43 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:45:43 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:45:43 --> Utf8 Class Initialized
INFO - 2019-12-31 05:45:43 --> URI Class Initialized
INFO - 2019-12-31 05:45:43 --> Router Class Initialized
INFO - 2019-12-31 05:45:43 --> Output Class Initialized
INFO - 2019-12-31 05:45:43 --> Security Class Initialized
DEBUG - 2019-12-31 05:45:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:45:43 --> Input Class Initialized
INFO - 2019-12-31 05:45:43 --> Language Class Initialized
INFO - 2019-12-31 05:45:43 --> Loader Class Initialized
INFO - 2019-12-31 05:45:43 --> Helper loaded: html_helper
INFO - 2019-12-31 05:45:43 --> Helper loaded: url_helper
INFO - 2019-12-31 05:45:43 --> Helper loaded: form_helper
INFO - 2019-12-31 05:45:43 --> Database Driver Class Initialized
INFO - 2019-12-31 05:45:43 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:45:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:45:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:45:43 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:45:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:45:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:45:43 --> Controller Class Initialized
DEBUG - 2019-12-31 05:45:43 --> Create_User constructer got called..
INFO - 2019-12-31 05:45:43 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:45:43 --> get_group_role_mapping model = 56
DEBUG - 2019-12-31 05:45:43 --> show_all_profile_data from DB retrived
INFO - 2019-12-31 05:45:43 --> Final output sent to browser
DEBUG - 2019-12-31 05:45:43 --> Total execution time: 0.0563
INFO - 2019-12-31 05:45:43 --> Config Class Initialized
INFO - 2019-12-31 05:45:43 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:45:43 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:45:43 --> Utf8 Class Initialized
INFO - 2019-12-31 05:45:43 --> URI Class Initialized
INFO - 2019-12-31 05:45:43 --> Router Class Initialized
INFO - 2019-12-31 05:45:43 --> Output Class Initialized
INFO - 2019-12-31 05:45:43 --> Security Class Initialized
DEBUG - 2019-12-31 05:45:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:45:43 --> Input Class Initialized
INFO - 2019-12-31 05:45:43 --> Language Class Initialized
INFO - 2019-12-31 05:45:43 --> Loader Class Initialized
INFO - 2019-12-31 05:45:43 --> Helper loaded: html_helper
INFO - 2019-12-31 05:45:43 --> Helper loaded: url_helper
INFO - 2019-12-31 05:45:43 --> Helper loaded: form_helper
INFO - 2019-12-31 05:45:43 --> Database Driver Class Initialized
INFO - 2019-12-31 05:45:43 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:45:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:45:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:45:43 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:45:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:45:43 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:45:43 --> Controller Class Initialized
DEBUG - 2019-12-31 05:45:43 --> Create_User constructer got called..
INFO - 2019-12-31 05:45:43 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:45:43 --> getAllSubGroupData model = 12
DEBUG - 2019-12-31 05:45:43 --> getAllSubGroupData from DB retrived
INFO - 2019-12-31 05:45:43 --> Final output sent to browser
DEBUG - 2019-12-31 05:45:43 --> Total execution time: 0.0568
INFO - 2019-12-31 05:45:53 --> Config Class Initialized
INFO - 2019-12-31 05:45:53 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:45:53 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:45:53 --> Utf8 Class Initialized
INFO - 2019-12-31 05:45:53 --> URI Class Initialized
INFO - 2019-12-31 05:45:53 --> Router Class Initialized
INFO - 2019-12-31 05:45:53 --> Output Class Initialized
INFO - 2019-12-31 05:45:53 --> Security Class Initialized
DEBUG - 2019-12-31 05:45:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:45:53 --> Input Class Initialized
INFO - 2019-12-31 05:45:53 --> Language Class Initialized
INFO - 2019-12-31 05:45:53 --> Loader Class Initialized
INFO - 2019-12-31 05:45:53 --> Helper loaded: html_helper
INFO - 2019-12-31 05:45:53 --> Helper loaded: url_helper
INFO - 2019-12-31 05:45:53 --> Helper loaded: form_helper
INFO - 2019-12-31 05:45:53 --> Database Driver Class Initialized
INFO - 2019-12-31 05:45:53 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:45:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:45:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:45:53 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:45:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:45:53 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:45:53 --> Controller Class Initialized
DEBUG - 2019-12-31 05:45:53 --> Create_User constructer got called..
INFO - 2019-12-31 05:45:53 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 05:45:53 --> showing all user from db tblusers...
DEBUG - 2019-12-31 05:45:53 --> show_groups from DB
INFO - 2019-12-31 05:45:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-31 05:45:53 --> Final output sent to browser
DEBUG - 2019-12-31 05:45:53 --> Total execution time: 0.0586
INFO - 2019-12-31 05:45:59 --> Config Class Initialized
INFO - 2019-12-31 05:45:59 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:45:59 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:45:59 --> Utf8 Class Initialized
INFO - 2019-12-31 05:45:59 --> URI Class Initialized
INFO - 2019-12-31 05:45:59 --> Router Class Initialized
INFO - 2019-12-31 05:45:59 --> Output Class Initialized
INFO - 2019-12-31 05:45:59 --> Security Class Initialized
DEBUG - 2019-12-31 05:45:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:45:59 --> Input Class Initialized
INFO - 2019-12-31 05:45:59 --> Language Class Initialized
INFO - 2019-12-31 05:45:59 --> Loader Class Initialized
INFO - 2019-12-31 05:45:59 --> Helper loaded: html_helper
INFO - 2019-12-31 05:45:59 --> Helper loaded: url_helper
INFO - 2019-12-31 05:45:59 --> Helper loaded: form_helper
INFO - 2019-12-31 05:45:59 --> Database Driver Class Initialized
INFO - 2019-12-31 05:45:59 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:45:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:45:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:45:59 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:45:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:45:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:45:59 --> Controller Class Initialized
DEBUG - 2019-12-31 05:45:59 --> Create_User constructer got called..
INFO - 2019-12-31 05:45:59 --> Model "User_Login_Model" initialized
ERROR - 2019-12-31 05:45:59 --> Query error: Duplicate entry 'My Group_sub' for key 'subGroupName' - Invalid query: INSERT INTO `group_sub_group_map` (`groupId`, `groupName`, `subGroupName`, `subGroupDesc`) VALUES ('56', 'My Group', 'My Group_sub', 'This is the test group_sub')
INFO - 2019-12-31 05:45:59 --> Language file loaded: language/english/db_lang.php
INFO - 2019-12-31 05:46:05 --> Config Class Initialized
INFO - 2019-12-31 05:46:05 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:46:05 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:46:05 --> Utf8 Class Initialized
INFO - 2019-12-31 05:46:05 --> URI Class Initialized
INFO - 2019-12-31 05:46:05 --> Router Class Initialized
INFO - 2019-12-31 05:46:05 --> Output Class Initialized
INFO - 2019-12-31 05:46:05 --> Security Class Initialized
DEBUG - 2019-12-31 05:46:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:46:05 --> Input Class Initialized
INFO - 2019-12-31 05:46:05 --> Language Class Initialized
INFO - 2019-12-31 05:46:05 --> Loader Class Initialized
INFO - 2019-12-31 05:46:05 --> Helper loaded: html_helper
INFO - 2019-12-31 05:46:05 --> Helper loaded: url_helper
INFO - 2019-12-31 05:46:05 --> Helper loaded: form_helper
INFO - 2019-12-31 05:46:05 --> Database Driver Class Initialized
INFO - 2019-12-31 05:46:05 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:46:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:46:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:46:05 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:46:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:46:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:46:05 --> Controller Class Initialized
DEBUG - 2019-12-31 05:46:05 --> Create_User constructer got called..
INFO - 2019-12-31 05:46:05 --> Model "User_Login_Model" initialized
ERROR - 2019-12-31 05:46:05 --> Query error: Duplicate entry 'My Group_sub' for key 'subGroupName' - Invalid query: INSERT INTO `group_sub_group_map` (`groupId`, `groupName`, `subGroupName`, `subGroupDesc`) VALUES ('56', 'My Group', 'My Group_sub', 'This is the test group_sub')
INFO - 2019-12-31 05:46:05 --> Language file loaded: language/english/db_lang.php
INFO - 2019-12-31 05:46:12 --> Config Class Initialized
INFO - 2019-12-31 05:46:12 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:46:12 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:46:12 --> Utf8 Class Initialized
INFO - 2019-12-31 05:46:12 --> URI Class Initialized
INFO - 2019-12-31 05:46:12 --> Router Class Initialized
INFO - 2019-12-31 05:46:12 --> Output Class Initialized
INFO - 2019-12-31 05:46:12 --> Security Class Initialized
DEBUG - 2019-12-31 05:46:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:46:12 --> Input Class Initialized
INFO - 2019-12-31 05:46:12 --> Language Class Initialized
INFO - 2019-12-31 05:46:12 --> Loader Class Initialized
INFO - 2019-12-31 05:46:12 --> Helper loaded: html_helper
INFO - 2019-12-31 05:46:12 --> Helper loaded: url_helper
INFO - 2019-12-31 05:46:12 --> Helper loaded: form_helper
INFO - 2019-12-31 05:46:12 --> Database Driver Class Initialized
INFO - 2019-12-31 05:46:12 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:46:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:46:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:46:12 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:46:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:46:12 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:46:12 --> Controller Class Initialized
DEBUG - 2019-12-31 05:46:12 --> Create_User constructer got called..
INFO - 2019-12-31 05:46:12 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:46:12 --> getAllSubgroup model
DEBUG - 2019-12-31 05:46:12 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-31 05:46:12 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 05:46:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-31 05:46:12 --> Final output sent to browser
DEBUG - 2019-12-31 05:46:12 --> Total execution time: 0.0595
INFO - 2019-12-31 05:46:16 --> Config Class Initialized
INFO - 2019-12-31 05:46:16 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:46:16 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:46:16 --> Utf8 Class Initialized
INFO - 2019-12-31 05:46:16 --> URI Class Initialized
INFO - 2019-12-31 05:46:16 --> Router Class Initialized
INFO - 2019-12-31 05:46:16 --> Output Class Initialized
INFO - 2019-12-31 05:46:16 --> Security Class Initialized
DEBUG - 2019-12-31 05:46:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:46:16 --> Input Class Initialized
INFO - 2019-12-31 05:46:16 --> Language Class Initialized
INFO - 2019-12-31 05:46:16 --> Loader Class Initialized
INFO - 2019-12-31 05:46:16 --> Helper loaded: html_helper
INFO - 2019-12-31 05:46:16 --> Helper loaded: url_helper
INFO - 2019-12-31 05:46:16 --> Helper loaded: form_helper
INFO - 2019-12-31 05:46:16 --> Database Driver Class Initialized
INFO - 2019-12-31 05:46:16 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:46:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:46:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:46:16 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:46:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:46:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:46:16 --> Controller Class Initialized
DEBUG - 2019-12-31 05:46:16 --> Create_User constructer got called..
INFO - 2019-12-31 05:46:16 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:46:16 --> get_group_role_mapping model = 56
DEBUG - 2019-12-31 05:46:16 --> show_all_profile_data from DB retrived
INFO - 2019-12-31 05:46:16 --> Final output sent to browser
DEBUG - 2019-12-31 05:46:16 --> Total execution time: 0.0566
INFO - 2019-12-31 05:46:16 --> Config Class Initialized
INFO - 2019-12-31 05:46:16 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:46:16 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:46:16 --> Utf8 Class Initialized
INFO - 2019-12-31 05:46:16 --> URI Class Initialized
INFO - 2019-12-31 05:46:16 --> Router Class Initialized
INFO - 2019-12-31 05:46:16 --> Output Class Initialized
INFO - 2019-12-31 05:46:16 --> Security Class Initialized
DEBUG - 2019-12-31 05:46:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:46:16 --> Input Class Initialized
INFO - 2019-12-31 05:46:16 --> Language Class Initialized
INFO - 2019-12-31 05:46:16 --> Loader Class Initialized
INFO - 2019-12-31 05:46:16 --> Helper loaded: html_helper
INFO - 2019-12-31 05:46:16 --> Helper loaded: url_helper
INFO - 2019-12-31 05:46:16 --> Helper loaded: form_helper
INFO - 2019-12-31 05:46:16 --> Database Driver Class Initialized
INFO - 2019-12-31 05:46:16 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:46:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:46:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:46:16 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:46:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:46:16 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:46:16 --> Controller Class Initialized
DEBUG - 2019-12-31 05:46:16 --> Create_User constructer got called..
INFO - 2019-12-31 05:46:16 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:46:16 --> getAllSubGroupData model = 12
DEBUG - 2019-12-31 05:46:16 --> getAllSubGroupData from DB retrived
INFO - 2019-12-31 05:46:16 --> Final output sent to browser
DEBUG - 2019-12-31 05:46:16 --> Total execution time: 0.0565
INFO - 2019-12-31 05:46:23 --> Config Class Initialized
INFO - 2019-12-31 05:46:23 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:46:23 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:46:23 --> Utf8 Class Initialized
INFO - 2019-12-31 05:46:23 --> URI Class Initialized
INFO - 2019-12-31 05:46:23 --> Router Class Initialized
INFO - 2019-12-31 05:46:23 --> Output Class Initialized
INFO - 2019-12-31 05:46:23 --> Security Class Initialized
DEBUG - 2019-12-31 05:46:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:46:23 --> Input Class Initialized
INFO - 2019-12-31 05:46:23 --> Language Class Initialized
INFO - 2019-12-31 05:46:23 --> Loader Class Initialized
INFO - 2019-12-31 05:46:23 --> Helper loaded: html_helper
INFO - 2019-12-31 05:46:23 --> Helper loaded: url_helper
INFO - 2019-12-31 05:46:23 --> Helper loaded: form_helper
INFO - 2019-12-31 05:46:23 --> Database Driver Class Initialized
INFO - 2019-12-31 05:46:23 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:46:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:46:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:46:23 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:46:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:46:23 --> Controller Class Initialized
DEBUG - 2019-12-31 05:46:23 --> Create_User constructer got called..
INFO - 2019-12-31 05:46:23 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:46:23 --> getAllSubGroupData model = 12
DEBUG - 2019-12-31 05:46:23 --> getAllSubGroupData from DB retrived
INFO - 2019-12-31 05:46:23 --> Final output sent to browser
DEBUG - 2019-12-31 05:46:23 --> Total execution time: 0.0564
INFO - 2019-12-31 05:47:54 --> Config Class Initialized
INFO - 2019-12-31 05:47:54 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:47:54 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:47:54 --> Utf8 Class Initialized
INFO - 2019-12-31 05:47:54 --> URI Class Initialized
INFO - 2019-12-31 05:47:54 --> Router Class Initialized
INFO - 2019-12-31 05:47:54 --> Output Class Initialized
INFO - 2019-12-31 05:47:54 --> Security Class Initialized
DEBUG - 2019-12-31 05:47:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:47:54 --> Input Class Initialized
INFO - 2019-12-31 05:47:54 --> Language Class Initialized
INFO - 2019-12-31 05:47:54 --> Loader Class Initialized
INFO - 2019-12-31 05:47:54 --> Helper loaded: html_helper
INFO - 2019-12-31 05:47:54 --> Helper loaded: url_helper
INFO - 2019-12-31 05:47:54 --> Helper loaded: form_helper
INFO - 2019-12-31 05:47:54 --> Database Driver Class Initialized
INFO - 2019-12-31 05:47:54 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:47:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:47:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:47:54 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:47:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:47:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:47:54 --> Controller Class Initialized
DEBUG - 2019-12-31 05:47:54 --> Create_User constructer got called..
INFO - 2019-12-31 05:47:54 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 05:47:54 --> showing all user from db tblusers...
DEBUG - 2019-12-31 05:47:54 --> show_users from DB
DEBUG - 2019-12-31 05:47:54 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 05:47:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-31 05:47:54 --> Final output sent to browser
DEBUG - 2019-12-31 05:47:54 --> Total execution time: 0.0685
INFO - 2019-12-31 05:47:56 --> Config Class Initialized
INFO - 2019-12-31 05:47:56 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:47:56 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:47:56 --> Utf8 Class Initialized
INFO - 2019-12-31 05:47:56 --> URI Class Initialized
INFO - 2019-12-31 05:47:56 --> Router Class Initialized
INFO - 2019-12-31 05:47:56 --> Output Class Initialized
INFO - 2019-12-31 05:47:56 --> Security Class Initialized
DEBUG - 2019-12-31 05:47:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:47:56 --> Input Class Initialized
INFO - 2019-12-31 05:47:56 --> Language Class Initialized
INFO - 2019-12-31 05:47:56 --> Loader Class Initialized
INFO - 2019-12-31 05:47:56 --> Helper loaded: html_helper
INFO - 2019-12-31 05:47:56 --> Helper loaded: url_helper
INFO - 2019-12-31 05:47:56 --> Helper loaded: form_helper
INFO - 2019-12-31 05:47:56 --> Database Driver Class Initialized
INFO - 2019-12-31 05:47:56 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:47:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:47:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:47:56 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:47:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:47:56 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:47:56 --> Controller Class Initialized
DEBUG - 2019-12-31 05:47:56 --> Create_User constructer got called..
INFO - 2019-12-31 05:47:56 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:47:56 --> getAllSubgroup model
DEBUG - 2019-12-31 05:47:56 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-31 05:47:56 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 05:47:56 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-31 05:47:56 --> Final output sent to browser
DEBUG - 2019-12-31 05:47:56 --> Total execution time: 0.0591
INFO - 2019-12-31 05:47:59 --> Config Class Initialized
INFO - 2019-12-31 05:47:59 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:47:59 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:47:59 --> Utf8 Class Initialized
INFO - 2019-12-31 05:47:59 --> URI Class Initialized
INFO - 2019-12-31 05:47:59 --> Router Class Initialized
INFO - 2019-12-31 05:47:59 --> Output Class Initialized
INFO - 2019-12-31 05:47:59 --> Security Class Initialized
DEBUG - 2019-12-31 05:47:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:47:59 --> Input Class Initialized
INFO - 2019-12-31 05:47:59 --> Language Class Initialized
INFO - 2019-12-31 05:47:59 --> Loader Class Initialized
INFO - 2019-12-31 05:47:59 --> Helper loaded: html_helper
INFO - 2019-12-31 05:47:59 --> Helper loaded: url_helper
INFO - 2019-12-31 05:47:59 --> Helper loaded: form_helper
INFO - 2019-12-31 05:47:59 --> Database Driver Class Initialized
INFO - 2019-12-31 05:47:59 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:47:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:47:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:47:59 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:47:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:47:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:47:59 --> Controller Class Initialized
DEBUG - 2019-12-31 05:47:59 --> Create_User constructer got called..
INFO - 2019-12-31 05:47:59 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 05:47:59 --> showing all user from db tblusers...
DEBUG - 2019-12-31 05:47:59 --> show_groups from DB
INFO - 2019-12-31 05:47:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-31 05:47:59 --> Final output sent to browser
DEBUG - 2019-12-31 05:47:59 --> Total execution time: 0.0581
INFO - 2019-12-31 05:48:25 --> Config Class Initialized
INFO - 2019-12-31 05:48:25 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:48:25 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:48:25 --> Utf8 Class Initialized
INFO - 2019-12-31 05:48:25 --> URI Class Initialized
INFO - 2019-12-31 05:48:25 --> Router Class Initialized
INFO - 2019-12-31 05:48:25 --> Output Class Initialized
INFO - 2019-12-31 05:48:25 --> Security Class Initialized
DEBUG - 2019-12-31 05:48:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:48:25 --> Input Class Initialized
INFO - 2019-12-31 05:48:25 --> Language Class Initialized
INFO - 2019-12-31 05:48:25 --> Loader Class Initialized
INFO - 2019-12-31 05:48:25 --> Helper loaded: html_helper
INFO - 2019-12-31 05:48:25 --> Helper loaded: url_helper
INFO - 2019-12-31 05:48:25 --> Helper loaded: form_helper
INFO - 2019-12-31 05:48:25 --> Database Driver Class Initialized
INFO - 2019-12-31 05:48:25 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:48:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:48:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:48:25 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:48:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:48:25 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:48:25 --> Controller Class Initialized
DEBUG - 2019-12-31 05:48:25 --> Create_User constructer got called..
INFO - 2019-12-31 05:48:25 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:48:25 --> Final output sent to browser
DEBUG - 2019-12-31 05:48:25 --> Total execution time: 0.0556
INFO - 2019-12-31 05:48:25 --> Config Class Initialized
INFO - 2019-12-31 05:48:25 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:48:25 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:48:25 --> Utf8 Class Initialized
INFO - 2019-12-31 05:48:25 --> URI Class Initialized
INFO - 2019-12-31 05:48:25 --> Router Class Initialized
INFO - 2019-12-31 05:48:25 --> Output Class Initialized
INFO - 2019-12-31 05:48:25 --> Security Class Initialized
DEBUG - 2019-12-31 05:48:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:48:25 --> Input Class Initialized
INFO - 2019-12-31 05:48:25 --> Language Class Initialized
INFO - 2019-12-31 05:48:25 --> Loader Class Initialized
INFO - 2019-12-31 05:48:25 --> Helper loaded: html_helper
INFO - 2019-12-31 05:48:25 --> Helper loaded: url_helper
INFO - 2019-12-31 05:48:25 --> Helper loaded: form_helper
INFO - 2019-12-31 05:48:25 --> Database Driver Class Initialized
INFO - 2019-12-31 05:48:25 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:48:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:48:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:48:25 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:48:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:48:25 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:48:25 --> Controller Class Initialized
DEBUG - 2019-12-31 05:48:25 --> Create_User constructer got called..
INFO - 2019-12-31 05:48:25 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 05:48:25 --> showing all user from db tblusers...
DEBUG - 2019-12-31 05:48:25 --> show_groups from DB
INFO - 2019-12-31 05:48:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2019-12-31 05:48:25 --> Final output sent to browser
DEBUG - 2019-12-31 05:48:25 --> Total execution time: 0.0579
INFO - 2019-12-31 05:48:36 --> Config Class Initialized
INFO - 2019-12-31 05:48:36 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:48:36 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:48:36 --> Utf8 Class Initialized
INFO - 2019-12-31 05:48:36 --> URI Class Initialized
INFO - 2019-12-31 05:48:36 --> Router Class Initialized
INFO - 2019-12-31 05:48:36 --> Output Class Initialized
INFO - 2019-12-31 05:48:36 --> Security Class Initialized
DEBUG - 2019-12-31 05:48:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:48:36 --> Input Class Initialized
INFO - 2019-12-31 05:48:36 --> Language Class Initialized
INFO - 2019-12-31 05:48:36 --> Loader Class Initialized
INFO - 2019-12-31 05:48:36 --> Helper loaded: html_helper
INFO - 2019-12-31 05:48:36 --> Helper loaded: url_helper
INFO - 2019-12-31 05:48:36 --> Helper loaded: form_helper
INFO - 2019-12-31 05:48:36 --> Database Driver Class Initialized
INFO - 2019-12-31 05:48:36 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:48:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:48:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:48:36 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:48:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:48:36 --> Controller Class Initialized
DEBUG - 2019-12-31 05:48:36 --> Create_User constructer got called..
INFO - 2019-12-31 05:48:36 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:48:36 --> getAllSubgroup model
DEBUG - 2019-12-31 05:48:36 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-31 05:48:36 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 05:48:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-31 05:48:36 --> Final output sent to browser
DEBUG - 2019-12-31 05:48:36 --> Total execution time: 0.0589
INFO - 2019-12-31 05:48:40 --> Config Class Initialized
INFO - 2019-12-31 05:48:40 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:48:40 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:48:40 --> Utf8 Class Initialized
INFO - 2019-12-31 05:48:40 --> URI Class Initialized
INFO - 2019-12-31 05:48:40 --> Router Class Initialized
INFO - 2019-12-31 05:48:40 --> Output Class Initialized
INFO - 2019-12-31 05:48:40 --> Security Class Initialized
DEBUG - 2019-12-31 05:48:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:48:40 --> Input Class Initialized
INFO - 2019-12-31 05:48:40 --> Language Class Initialized
INFO - 2019-12-31 05:48:40 --> Loader Class Initialized
INFO - 2019-12-31 05:48:40 --> Helper loaded: html_helper
INFO - 2019-12-31 05:48:40 --> Helper loaded: url_helper
INFO - 2019-12-31 05:48:40 --> Helper loaded: form_helper
INFO - 2019-12-31 05:48:40 --> Database Driver Class Initialized
INFO - 2019-12-31 05:48:40 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:48:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:48:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:48:40 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:48:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:48:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:48:40 --> Controller Class Initialized
DEBUG - 2019-12-31 05:48:40 --> Create_User constructer got called..
INFO - 2019-12-31 05:48:40 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:48:40 --> get_group_role_mapping model = 56
DEBUG - 2019-12-31 05:48:40 --> show_all_profile_data from DB retrived
INFO - 2019-12-31 05:48:40 --> Final output sent to browser
DEBUG - 2019-12-31 05:48:40 --> Total execution time: 0.0570
INFO - 2019-12-31 05:48:40 --> Config Class Initialized
INFO - 2019-12-31 05:48:40 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:48:40 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:48:40 --> Utf8 Class Initialized
INFO - 2019-12-31 05:48:40 --> URI Class Initialized
INFO - 2019-12-31 05:48:40 --> Router Class Initialized
INFO - 2019-12-31 05:48:40 --> Output Class Initialized
INFO - 2019-12-31 05:48:40 --> Security Class Initialized
DEBUG - 2019-12-31 05:48:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:48:40 --> Input Class Initialized
INFO - 2019-12-31 05:48:40 --> Language Class Initialized
INFO - 2019-12-31 05:48:40 --> Loader Class Initialized
INFO - 2019-12-31 05:48:40 --> Helper loaded: html_helper
INFO - 2019-12-31 05:48:40 --> Helper loaded: url_helper
INFO - 2019-12-31 05:48:40 --> Helper loaded: form_helper
INFO - 2019-12-31 05:48:40 --> Database Driver Class Initialized
INFO - 2019-12-31 05:48:40 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:48:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:48:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:48:40 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:48:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:48:40 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:48:40 --> Controller Class Initialized
DEBUG - 2019-12-31 05:48:40 --> Create_User constructer got called..
INFO - 2019-12-31 05:48:40 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:48:40 --> getAllSubGroupData model = 12
DEBUG - 2019-12-31 05:48:40 --> getAllSubGroupData from DB retrived
INFO - 2019-12-31 05:48:40 --> Final output sent to browser
DEBUG - 2019-12-31 05:48:40 --> Total execution time: 0.0560
INFO - 2019-12-31 05:48:52 --> Config Class Initialized
INFO - 2019-12-31 05:48:52 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:48:52 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:48:52 --> Utf8 Class Initialized
INFO - 2019-12-31 05:48:52 --> URI Class Initialized
INFO - 2019-12-31 05:48:52 --> Router Class Initialized
INFO - 2019-12-31 05:48:52 --> Output Class Initialized
INFO - 2019-12-31 05:48:52 --> Security Class Initialized
DEBUG - 2019-12-31 05:48:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:48:52 --> Input Class Initialized
INFO - 2019-12-31 05:48:52 --> Language Class Initialized
INFO - 2019-12-31 05:48:52 --> Loader Class Initialized
INFO - 2019-12-31 05:48:52 --> Helper loaded: html_helper
INFO - 2019-12-31 05:48:52 --> Helper loaded: url_helper
INFO - 2019-12-31 05:48:52 --> Helper loaded: form_helper
INFO - 2019-12-31 05:48:52 --> Database Driver Class Initialized
INFO - 2019-12-31 05:48:52 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:48:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:48:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:48:52 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:48:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:48:52 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:48:52 --> Controller Class Initialized
DEBUG - 2019-12-31 05:48:52 --> Create_User constructer got called..
INFO - 2019-12-31 05:48:52 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:48:52 --> getAllSubgroup model
DEBUG - 2019-12-31 05:48:52 --> getAllSubgroup from DB retrived
DEBUG - 2019-12-31 05:48:52 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 05:48:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2019-12-31 05:48:52 --> Final output sent to browser
DEBUG - 2019-12-31 05:48:52 --> Total execution time: 0.0590
INFO - 2019-12-31 05:49:00 --> Config Class Initialized
INFO - 2019-12-31 05:49:00 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:49:00 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:49:00 --> Utf8 Class Initialized
INFO - 2019-12-31 05:49:00 --> URI Class Initialized
INFO - 2019-12-31 05:49:00 --> Router Class Initialized
INFO - 2019-12-31 05:49:00 --> Output Class Initialized
INFO - 2019-12-31 05:49:00 --> Security Class Initialized
DEBUG - 2019-12-31 05:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:49:00 --> Input Class Initialized
INFO - 2019-12-31 05:49:00 --> Language Class Initialized
INFO - 2019-12-31 05:49:00 --> Loader Class Initialized
INFO - 2019-12-31 05:49:00 --> Helper loaded: html_helper
INFO - 2019-12-31 05:49:00 --> Helper loaded: url_helper
INFO - 2019-12-31 05:49:00 --> Helper loaded: form_helper
INFO - 2019-12-31 05:49:00 --> Database Driver Class Initialized
INFO - 2019-12-31 05:49:00 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:49:00 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:49:00 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:49:00 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:49:00 --> Controller Class Initialized
DEBUG - 2019-12-31 05:49:00 --> Create_User constructer got called..
INFO - 2019-12-31 05:49:00 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 05:49:00 --> showing all user from db tblusers...
DEBUG - 2019-12-31 05:49:00 --> show_users from DB
DEBUG - 2019-12-31 05:49:00 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 05:49:00 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-31 05:49:00 --> Final output sent to browser
DEBUG - 2019-12-31 05:49:00 --> Total execution time: 0.0599
INFO - 2019-12-31 05:49:03 --> Config Class Initialized
INFO - 2019-12-31 05:49:03 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:49:03 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:49:03 --> Utf8 Class Initialized
INFO - 2019-12-31 05:49:03 --> URI Class Initialized
INFO - 2019-12-31 05:49:03 --> Router Class Initialized
INFO - 2019-12-31 05:49:03 --> Output Class Initialized
INFO - 2019-12-31 05:49:03 --> Security Class Initialized
DEBUG - 2019-12-31 05:49:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:49:03 --> Input Class Initialized
INFO - 2019-12-31 05:49:03 --> Language Class Initialized
INFO - 2019-12-31 05:49:03 --> Loader Class Initialized
INFO - 2019-12-31 05:49:04 --> Helper loaded: html_helper
INFO - 2019-12-31 05:49:04 --> Helper loaded: url_helper
INFO - 2019-12-31 05:49:04 --> Helper loaded: form_helper
INFO - 2019-12-31 05:49:04 --> Database Driver Class Initialized
INFO - 2019-12-31 05:49:04 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:49:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:49:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:49:04 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:49:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:49:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:49:04 --> Controller Class Initialized
DEBUG - 2019-12-31 05:49:04 --> Create_User constructer got called..
INFO - 2019-12-31 05:49:04 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 05:49:04 --> showing all user from db tblusers...
DEBUG - 2019-12-31 05:49:04 --> show_users from DB
DEBUG - 2019-12-31 05:49:04 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 05:49:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2019-12-31 05:49:04 --> Final output sent to browser
DEBUG - 2019-12-31 05:49:04 --> Total execution time: 0.0599
INFO - 2019-12-31 05:52:10 --> Config Class Initialized
INFO - 2019-12-31 05:52:10 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:52:10 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:52:10 --> Utf8 Class Initialized
INFO - 2019-12-31 05:52:10 --> URI Class Initialized
INFO - 2019-12-31 05:52:10 --> Router Class Initialized
INFO - 2019-12-31 05:52:10 --> Output Class Initialized
INFO - 2019-12-31 05:52:10 --> Security Class Initialized
DEBUG - 2019-12-31 05:52:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:52:10 --> Input Class Initialized
INFO - 2019-12-31 05:52:10 --> Language Class Initialized
INFO - 2019-12-31 05:52:10 --> Loader Class Initialized
INFO - 2019-12-31 05:52:10 --> Helper loaded: html_helper
INFO - 2019-12-31 05:52:10 --> Helper loaded: url_helper
INFO - 2019-12-31 05:52:10 --> Helper loaded: form_helper
INFO - 2019-12-31 05:52:10 --> Database Driver Class Initialized
INFO - 2019-12-31 05:52:10 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:52:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:52:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:52:10 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:52:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:52:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:52:10 --> Controller Class Initialized
DEBUG - 2019-12-31 05:52:10 --> calling constructor page Change_password
DEBUG - 2019-12-31 05:52:10 --> calling user access block = 52
DEBUG - 2019-12-31 05:52:10 --> index page Change_password
DEBUG - 2019-12-31 05:52:10 --> public/User/change_password
INFO - 2019-12-31 05:52:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-31 05:52:10 --> Final output sent to browser
DEBUG - 2019-12-31 05:52:10 --> Total execution time: 0.0709
INFO - 2019-12-31 05:52:12 --> Config Class Initialized
INFO - 2019-12-31 05:52:12 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:52:12 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:52:12 --> Utf8 Class Initialized
INFO - 2019-12-31 05:52:12 --> URI Class Initialized
INFO - 2019-12-31 05:52:12 --> Router Class Initialized
INFO - 2019-12-31 05:52:12 --> Output Class Initialized
INFO - 2019-12-31 05:52:12 --> Security Class Initialized
DEBUG - 2019-12-31 05:52:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:52:12 --> Input Class Initialized
INFO - 2019-12-31 05:52:12 --> Language Class Initialized
INFO - 2019-12-31 05:52:12 --> Loader Class Initialized
INFO - 2019-12-31 05:52:12 --> Helper loaded: html_helper
INFO - 2019-12-31 05:52:12 --> Helper loaded: url_helper
INFO - 2019-12-31 05:52:12 --> Helper loaded: form_helper
INFO - 2019-12-31 05:52:12 --> Database Driver Class Initialized
INFO - 2019-12-31 05:52:12 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:52:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:52:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:52:12 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:52:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:52:12 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:52:12 --> Controller Class Initialized
DEBUG - 2019-12-31 05:52:12 --> Create_User constructer got called..
INFO - 2019-12-31 05:52:12 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 05:52:12 --> show all profile data modelDevOss
DEBUG - 2019-12-31 05:52:12 --> show_all_profile_data from DB retrived
INFO - 2019-12-31 05:52:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-31 05:52:12 --> Final output sent to browser
DEBUG - 2019-12-31 05:52:12 --> Total execution time: 0.0591
INFO - 2019-12-31 05:52:13 --> Config Class Initialized
INFO - 2019-12-31 05:52:13 --> Hooks Class Initialized
DEBUG - 2019-12-31 05:52:13 --> UTF-8 Support Enabled
INFO - 2019-12-31 05:52:13 --> Utf8 Class Initialized
INFO - 2019-12-31 05:52:13 --> URI Class Initialized
INFO - 2019-12-31 05:52:13 --> Router Class Initialized
INFO - 2019-12-31 05:52:13 --> Output Class Initialized
INFO - 2019-12-31 05:52:13 --> Security Class Initialized
DEBUG - 2019-12-31 05:52:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 05:52:13 --> Input Class Initialized
INFO - 2019-12-31 05:52:13 --> Language Class Initialized
INFO - 2019-12-31 05:52:13 --> Loader Class Initialized
INFO - 2019-12-31 05:52:13 --> Helper loaded: html_helper
INFO - 2019-12-31 05:52:13 --> Helper loaded: url_helper
INFO - 2019-12-31 05:52:13 --> Helper loaded: form_helper
INFO - 2019-12-31 05:52:13 --> Database Driver Class Initialized
INFO - 2019-12-31 05:52:13 --> Form Validation Class Initialized
DEBUG - 2019-12-31 05:52:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 05:52:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 05:52:13 --> Encryption Class Initialized
DEBUG - 2019-12-31 05:52:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 05:52:13 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 05:52:13 --> Controller Class Initialized
DEBUG - 2019-12-31 05:52:13 --> calling constructor page Change_password
DEBUG - 2019-12-31 05:52:13 --> calling user access block = 52
DEBUG - 2019-12-31 05:52:13 --> index page Change_password
DEBUG - 2019-12-31 05:52:13 --> public/User/change_password
INFO - 2019-12-31 05:52:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-31 05:52:13 --> Final output sent to browser
DEBUG - 2019-12-31 05:52:13 --> Total execution time: 0.0565
INFO - 2019-12-31 07:05:23 --> Config Class Initialized
INFO - 2019-12-31 07:05:23 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:05:23 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:05:23 --> Utf8 Class Initialized
INFO - 2019-12-31 07:05:23 --> URI Class Initialized
DEBUG - 2019-12-31 07:05:23 --> No URI present. Default controller set.
INFO - 2019-12-31 07:05:23 --> Router Class Initialized
INFO - 2019-12-31 07:05:23 --> Output Class Initialized
INFO - 2019-12-31 07:05:23 --> Security Class Initialized
DEBUG - 2019-12-31 07:05:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:05:23 --> Input Class Initialized
INFO - 2019-12-31 07:05:23 --> Language Class Initialized
INFO - 2019-12-31 07:05:23 --> Loader Class Initialized
INFO - 2019-12-31 07:05:23 --> Helper loaded: html_helper
INFO - 2019-12-31 07:05:23 --> Helper loaded: url_helper
INFO - 2019-12-31 07:05:23 --> Helper loaded: form_helper
INFO - 2019-12-31 07:05:23 --> Database Driver Class Initialized
INFO - 2019-12-31 07:05:23 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:05:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:05:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:05:23 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:05:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:05:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:05:23 --> Controller Class Initialized
INFO - 2019-12-31 07:05:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-31 07:05:23 --> Final output sent to browser
DEBUG - 2019-12-31 07:05:23 --> Total execution time: 0.3485
INFO - 2019-12-31 07:05:35 --> Config Class Initialized
INFO - 2019-12-31 07:05:35 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:05:35 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:05:35 --> Utf8 Class Initialized
INFO - 2019-12-31 07:05:35 --> URI Class Initialized
INFO - 2019-12-31 07:05:35 --> Router Class Initialized
INFO - 2019-12-31 07:05:35 --> Output Class Initialized
INFO - 2019-12-31 07:05:35 --> Security Class Initialized
DEBUG - 2019-12-31 07:05:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:05:35 --> Input Class Initialized
INFO - 2019-12-31 07:05:35 --> Language Class Initialized
INFO - 2019-12-31 07:05:35 --> Loader Class Initialized
INFO - 2019-12-31 07:05:35 --> Helper loaded: html_helper
INFO - 2019-12-31 07:05:35 --> Helper loaded: url_helper
INFO - 2019-12-31 07:05:35 --> Helper loaded: form_helper
INFO - 2019-12-31 07:05:35 --> Database Driver Class Initialized
INFO - 2019-12-31 07:05:35 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:05:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:05:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:05:35 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:05:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:05:35 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:05:35 --> Controller Class Initialized
INFO - 2019-12-31 07:05:35 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-31 07:05:35 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 07:05:35 --> getAuth method got called...
DEBUG - 2019-12-31 07:05:35 --> Username :- DevOss
INFO - 2019-12-31 07:05:35 --> this is db user...
DEBUG - 2019-12-31 07:05:35 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-31 07:05:35 --> Password hashing output = $2y$10$07MqervlgyYB1AGhaHCizecWS1R/ZZLNzj9ltmyJLyexJNe0/Fxsq
DEBUG - 2019-12-31 07:05:36 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
DEBUG - 2019-12-31 07:05:36 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2019-12-31 07:05:36 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-31 07:05:36 --> Role Retrive from DB
INFO - 2019-12-31 07:05:36 --> get_group_role_mapping model = 16
DEBUG - 2019-12-31 07:05:36 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-31 07:05:36 --> loading model Active_Session
INFO - 2019-12-31 07:05:36 --> Model "Active_Session" initialized
DEBUG - 2019-12-31 07:05:36 --> calling insert_active_session()
DEBUG - 2019-12-31 07:05:36 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-31 07:05:36 --> insert success
DEBUG - 2019-12-31 07:05:36 --> loading Configarable_Login model...
INFO - 2019-12-31 07:05:36 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-31 07:05:36 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-31 07:05:36 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-31 07:05:36 --> Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 07:05:36 --> loading configurable menu with result=Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 07:05:36 --> loading view public\Dashboard
INFO - 2019-12-31 07:05:36 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-31 07:05:36 --> Final output sent to browser
DEBUG - 2019-12-31 07:05:36 --> Total execution time: 0.7670
INFO - 2019-12-31 07:05:56 --> Config Class Initialized
INFO - 2019-12-31 07:05:56 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:05:56 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:05:56 --> Utf8 Class Initialized
INFO - 2019-12-31 07:05:56 --> URI Class Initialized
INFO - 2019-12-31 07:05:56 --> Router Class Initialized
INFO - 2019-12-31 07:05:56 --> Output Class Initialized
INFO - 2019-12-31 07:05:56 --> Security Class Initialized
DEBUG - 2019-12-31 07:05:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:05:56 --> Input Class Initialized
INFO - 2019-12-31 07:05:56 --> Language Class Initialized
ERROR - 2019-12-31 07:05:56 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 07:06:05 --> Config Class Initialized
INFO - 2019-12-31 07:06:05 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:06:05 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:06:05 --> Utf8 Class Initialized
INFO - 2019-12-31 07:06:05 --> URI Class Initialized
INFO - 2019-12-31 07:06:05 --> Router Class Initialized
INFO - 2019-12-31 07:06:05 --> Output Class Initialized
INFO - 2019-12-31 07:06:05 --> Security Class Initialized
DEBUG - 2019-12-31 07:06:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:06:05 --> Input Class Initialized
INFO - 2019-12-31 07:06:05 --> Language Class Initialized
INFO - 2019-12-31 07:06:05 --> Loader Class Initialized
INFO - 2019-12-31 07:06:05 --> Helper loaded: html_helper
INFO - 2019-12-31 07:06:05 --> Helper loaded: url_helper
INFO - 2019-12-31 07:06:05 --> Helper loaded: form_helper
INFO - 2019-12-31 07:06:05 --> Database Driver Class Initialized
INFO - 2019-12-31 07:06:05 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:06:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:06:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:06:05 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:06:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:06:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:06:05 --> Controller Class Initialized
INFO - 2019-12-31 07:06:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-31 07:06:05 --> Final output sent to browser
DEBUG - 2019-12-31 07:06:05 --> Total execution time: 0.0526
INFO - 2019-12-31 07:06:23 --> Config Class Initialized
INFO - 2019-12-31 07:06:23 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:06:23 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:06:23 --> Utf8 Class Initialized
INFO - 2019-12-31 07:06:23 --> URI Class Initialized
INFO - 2019-12-31 07:06:23 --> Router Class Initialized
INFO - 2019-12-31 07:06:23 --> Output Class Initialized
INFO - 2019-12-31 07:06:23 --> Security Class Initialized
DEBUG - 2019-12-31 07:06:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:06:23 --> Input Class Initialized
INFO - 2019-12-31 07:06:23 --> Language Class Initialized
INFO - 2019-12-31 07:06:23 --> Loader Class Initialized
INFO - 2019-12-31 07:06:23 --> Helper loaded: html_helper
INFO - 2019-12-31 07:06:23 --> Helper loaded: url_helper
INFO - 2019-12-31 07:06:23 --> Helper loaded: form_helper
INFO - 2019-12-31 07:06:23 --> Database Driver Class Initialized
INFO - 2019-12-31 07:06:23 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:06:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:06:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:06:23 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:06:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:06:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:06:23 --> Controller Class Initialized
INFO - 2019-12-31 07:06:23 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-31 07:06:23 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 07:06:23 --> getAuth method got called...
DEBUG - 2019-12-31 07:06:23 --> Username :- DevOss
INFO - 2019-12-31 07:06:23 --> this is db user...
DEBUG - 2019-12-31 07:06:23 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-31 07:06:23 --> Password hashing output = $2y$10$BkUAPjJgq.EQsvMv8ci.POHSRF0hCXk6PTuYFCWVw29ykDewRnBZ6
DEBUG - 2019-12-31 07:06:23 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
DEBUG - 2019-12-31 07:06:23 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2019-12-31 07:06:23 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-31 07:06:23 --> Role Retrive from DB
INFO - 2019-12-31 07:06:23 --> get_group_role_mapping model = 16
DEBUG - 2019-12-31 07:06:23 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-31 07:06:23 --> loading model Active_Session
INFO - 2019-12-31 07:06:23 --> Model "Active_Session" initialized
DEBUG - 2019-12-31 07:06:23 --> calling insert_active_session()
DEBUG - 2019-12-31 07:06:23 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-31 07:06:23 --> insert success
DEBUG - 2019-12-31 07:06:23 --> loading Configarable_Login model...
INFO - 2019-12-31 07:06:23 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-31 07:06:23 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-31 07:06:23 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-31 07:06:23 --> Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 07:06:23 --> loading configurable menu with result=Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 07:06:23 --> loading view public\Dashboard
INFO - 2019-12-31 07:06:23 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-31 07:06:23 --> Final output sent to browser
DEBUG - 2019-12-31 07:06:23 --> Total execution time: 0.3016
INFO - 2019-12-31 07:06:26 --> Config Class Initialized
INFO - 2019-12-31 07:06:26 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:06:26 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:06:26 --> Utf8 Class Initialized
INFO - 2019-12-31 07:06:26 --> URI Class Initialized
INFO - 2019-12-31 07:06:26 --> Router Class Initialized
INFO - 2019-12-31 07:06:26 --> Output Class Initialized
INFO - 2019-12-31 07:06:26 --> Security Class Initialized
DEBUG - 2019-12-31 07:06:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:06:26 --> Input Class Initialized
INFO - 2019-12-31 07:06:26 --> Language Class Initialized
INFO - 2019-12-31 07:06:26 --> Loader Class Initialized
INFO - 2019-12-31 07:06:26 --> Helper loaded: html_helper
INFO - 2019-12-31 07:06:26 --> Helper loaded: url_helper
INFO - 2019-12-31 07:06:26 --> Helper loaded: form_helper
INFO - 2019-12-31 07:06:26 --> Database Driver Class Initialized
INFO - 2019-12-31 07:06:26 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:06:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:06:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:06:26 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:06:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:06:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:06:26 --> Controller Class Initialized
DEBUG - 2019-12-31 07:06:26 --> Create_User constructer got called..
INFO - 2019-12-31 07:06:26 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 07:06:26 --> show all profile data modelDevOss
DEBUG - 2019-12-31 07:06:26 --> show_all_profile_data from DB retrived
INFO - 2019-12-31 07:06:26 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-31 07:06:26 --> Final output sent to browser
DEBUG - 2019-12-31 07:06:26 --> Total execution time: 0.0592
INFO - 2019-12-31 07:06:27 --> Config Class Initialized
INFO - 2019-12-31 07:06:27 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:06:27 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:06:27 --> Utf8 Class Initialized
INFO - 2019-12-31 07:06:27 --> URI Class Initialized
INFO - 2019-12-31 07:06:27 --> Router Class Initialized
INFO - 2019-12-31 07:06:27 --> Output Class Initialized
INFO - 2019-12-31 07:06:27 --> Security Class Initialized
DEBUG - 2019-12-31 07:06:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:06:27 --> Input Class Initialized
INFO - 2019-12-31 07:06:27 --> Language Class Initialized
INFO - 2019-12-31 07:06:27 --> Loader Class Initialized
INFO - 2019-12-31 07:06:28 --> Helper loaded: html_helper
INFO - 2019-12-31 07:06:28 --> Helper loaded: url_helper
INFO - 2019-12-31 07:06:28 --> Helper loaded: form_helper
INFO - 2019-12-31 07:06:28 --> Database Driver Class Initialized
INFO - 2019-12-31 07:06:28 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:06:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:06:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:06:28 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:06:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:06:28 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:06:28 --> Controller Class Initialized
DEBUG - 2019-12-31 07:06:28 --> loading Configarable_Login model...
INFO - 2019-12-31 07:06:28 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-31 07:06:28 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-31 07:06:28 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-31 07:06:28 --> Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 07:06:28 --> loading configurable menu with result=Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 07:06:28 --> loading view public\Dashboard
INFO - 2019-12-31 07:06:28 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 07:06:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-31 07:06:28 --> Final output sent to browser
DEBUG - 2019-12-31 07:06:28 --> Total execution time: 0.0629
INFO - 2019-12-31 07:06:29 --> Config Class Initialized
INFO - 2019-12-31 07:06:29 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:06:29 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:06:29 --> Utf8 Class Initialized
INFO - 2019-12-31 07:06:29 --> URI Class Initialized
INFO - 2019-12-31 07:06:29 --> Router Class Initialized
INFO - 2019-12-31 07:06:29 --> Output Class Initialized
INFO - 2019-12-31 07:06:29 --> Security Class Initialized
DEBUG - 2019-12-31 07:06:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:06:29 --> Input Class Initialized
INFO - 2019-12-31 07:06:29 --> Language Class Initialized
INFO - 2019-12-31 07:06:29 --> Loader Class Initialized
INFO - 2019-12-31 07:06:29 --> Helper loaded: html_helper
INFO - 2019-12-31 07:06:29 --> Helper loaded: url_helper
INFO - 2019-12-31 07:06:29 --> Helper loaded: form_helper
INFO - 2019-12-31 07:06:29 --> Database Driver Class Initialized
INFO - 2019-12-31 07:06:29 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:06:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:06:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:06:29 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:06:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:06:29 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:06:29 --> Controller Class Initialized
DEBUG - 2019-12-31 07:06:29 --> Create_User constructer got called..
INFO - 2019-12-31 07:06:29 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/adminPage.php
INFO - 2019-12-31 07:06:29 --> Final output sent to browser
DEBUG - 2019-12-31 07:06:29 --> Total execution time: 0.0540
INFO - 2019-12-31 07:06:30 --> Config Class Initialized
INFO - 2019-12-31 07:06:30 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:06:30 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:06:30 --> Utf8 Class Initialized
INFO - 2019-12-31 07:06:30 --> URI Class Initialized
INFO - 2019-12-31 07:06:30 --> Router Class Initialized
INFO - 2019-12-31 07:06:30 --> Output Class Initialized
INFO - 2019-12-31 07:06:30 --> Security Class Initialized
DEBUG - 2019-12-31 07:06:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:06:30 --> Input Class Initialized
INFO - 2019-12-31 07:06:30 --> Language Class Initialized
INFO - 2019-12-31 07:06:30 --> Loader Class Initialized
INFO - 2019-12-31 07:06:30 --> Helper loaded: html_helper
INFO - 2019-12-31 07:06:30 --> Helper loaded: url_helper
INFO - 2019-12-31 07:06:30 --> Helper loaded: form_helper
INFO - 2019-12-31 07:06:30 --> Database Driver Class Initialized
INFO - 2019-12-31 07:06:30 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:06:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:06:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:06:30 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:06:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:06:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:06:30 --> Controller Class Initialized
DEBUG - 2019-12-31 07:06:30 --> Create_User constructer got called..
INFO - 2019-12-31 07:06:30 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 07:06:30 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 07:06:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-31 07:06:30 --> Final output sent to browser
DEBUG - 2019-12-31 07:06:30 --> Total execution time: 0.0582
INFO - 2019-12-31 07:06:32 --> Config Class Initialized
INFO - 2019-12-31 07:06:32 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:06:32 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:06:32 --> Utf8 Class Initialized
INFO - 2019-12-31 07:06:32 --> URI Class Initialized
INFO - 2019-12-31 07:06:32 --> Router Class Initialized
INFO - 2019-12-31 07:06:32 --> Output Class Initialized
INFO - 2019-12-31 07:06:32 --> Security Class Initialized
DEBUG - 2019-12-31 07:06:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:06:32 --> Input Class Initialized
INFO - 2019-12-31 07:06:32 --> Language Class Initialized
INFO - 2019-12-31 07:06:32 --> Loader Class Initialized
INFO - 2019-12-31 07:06:32 --> Helper loaded: html_helper
INFO - 2019-12-31 07:06:32 --> Helper loaded: url_helper
INFO - 2019-12-31 07:06:32 --> Helper loaded: form_helper
INFO - 2019-12-31 07:06:32 --> Database Driver Class Initialized
INFO - 2019-12-31 07:06:32 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:06:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:06:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:06:32 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:06:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:06:32 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:06:32 --> Controller Class Initialized
INFO - 2019-12-31 07:06:32 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-31 07:06:32 --> Final output sent to browser
DEBUG - 2019-12-31 07:06:32 --> Total execution time: 0.0523
INFO - 2019-12-31 07:06:38 --> Config Class Initialized
INFO - 2019-12-31 07:06:38 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:06:38 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:06:38 --> Utf8 Class Initialized
INFO - 2019-12-31 07:06:38 --> URI Class Initialized
INFO - 2019-12-31 07:06:38 --> Router Class Initialized
INFO - 2019-12-31 07:06:38 --> Output Class Initialized
INFO - 2019-12-31 07:06:38 --> Security Class Initialized
DEBUG - 2019-12-31 07:06:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:06:38 --> Input Class Initialized
INFO - 2019-12-31 07:06:38 --> Language Class Initialized
ERROR - 2019-12-31 07:06:38 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 07:14:10 --> Config Class Initialized
INFO - 2019-12-31 07:14:10 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:14:10 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:14:10 --> Utf8 Class Initialized
INFO - 2019-12-31 07:14:10 --> URI Class Initialized
INFO - 2019-12-31 07:14:10 --> Router Class Initialized
INFO - 2019-12-31 07:14:10 --> Output Class Initialized
INFO - 2019-12-31 07:14:10 --> Security Class Initialized
DEBUG - 2019-12-31 07:14:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:14:10 --> Input Class Initialized
INFO - 2019-12-31 07:14:10 --> Language Class Initialized
INFO - 2019-12-31 07:14:10 --> Loader Class Initialized
INFO - 2019-12-31 07:14:10 --> Helper loaded: html_helper
INFO - 2019-12-31 07:14:10 --> Helper loaded: url_helper
INFO - 2019-12-31 07:14:10 --> Helper loaded: form_helper
INFO - 2019-12-31 07:14:10 --> Database Driver Class Initialized
INFO - 2019-12-31 07:14:10 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:14:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:14:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:14:10 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:14:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:14:10 --> Controller Class Initialized
INFO - 2019-12-31 07:14:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2019-12-31 07:14:10 --> Config Class Initialized
INFO - 2019-12-31 07:14:10 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:14:10 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:14:10 --> Utf8 Class Initialized
INFO - 2019-12-31 07:14:10 --> URI Class Initialized
INFO - 2019-12-31 07:14:10 --> Router Class Initialized
INFO - 2019-12-31 07:14:10 --> Output Class Initialized
INFO - 2019-12-31 07:14:10 --> Security Class Initialized
DEBUG - 2019-12-31 07:14:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:14:10 --> Input Class Initialized
INFO - 2019-12-31 07:14:10 --> Language Class Initialized
INFO - 2019-12-31 07:14:10 --> Loader Class Initialized
INFO - 2019-12-31 07:14:10 --> Helper loaded: html_helper
INFO - 2019-12-31 07:14:10 --> Helper loaded: url_helper
INFO - 2019-12-31 07:14:10 --> Helper loaded: form_helper
INFO - 2019-12-31 07:14:10 --> Database Driver Class Initialized
INFO - 2019-12-31 07:14:10 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:14:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:14:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:14:10 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:14:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:14:10 --> Controller Class Initialized
DEBUG - 2019-12-31 07:14:10 --> Create_User constructer got called..
INFO - 2019-12-31 07:14:10 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 07:14:10 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 07:14:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-31 07:14:10 --> Final output sent to browser
DEBUG - 2019-12-31 07:14:10 --> Total execution time: 0.0582
INFO - 2019-12-31 07:14:12 --> Config Class Initialized
INFO - 2019-12-31 07:14:12 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:14:12 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:14:12 --> Utf8 Class Initialized
INFO - 2019-12-31 07:14:12 --> URI Class Initialized
INFO - 2019-12-31 07:14:12 --> Router Class Initialized
INFO - 2019-12-31 07:14:12 --> Output Class Initialized
INFO - 2019-12-31 07:14:12 --> Security Class Initialized
DEBUG - 2019-12-31 07:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:14:12 --> Input Class Initialized
INFO - 2019-12-31 07:14:12 --> Language Class Initialized
ERROR - 2019-12-31 07:14:12 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 07:15:20 --> Config Class Initialized
INFO - 2019-12-31 07:15:20 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:15:20 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:15:20 --> Utf8 Class Initialized
INFO - 2019-12-31 07:15:20 --> URI Class Initialized
INFO - 2019-12-31 07:15:20 --> Router Class Initialized
INFO - 2019-12-31 07:15:20 --> Output Class Initialized
INFO - 2019-12-31 07:15:20 --> Security Class Initialized
DEBUG - 2019-12-31 07:15:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:15:20 --> Input Class Initialized
INFO - 2019-12-31 07:15:20 --> Language Class Initialized
ERROR - 2019-12-31 07:15:20 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 07:15:22 --> Config Class Initialized
INFO - 2019-12-31 07:15:22 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:15:22 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:15:22 --> Utf8 Class Initialized
INFO - 2019-12-31 07:15:22 --> URI Class Initialized
INFO - 2019-12-31 07:15:22 --> Router Class Initialized
INFO - 2019-12-31 07:15:22 --> Output Class Initialized
INFO - 2019-12-31 07:15:22 --> Security Class Initialized
DEBUG - 2019-12-31 07:15:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:15:22 --> Input Class Initialized
INFO - 2019-12-31 07:15:22 --> Language Class Initialized
ERROR - 2019-12-31 07:15:22 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 07:15:22 --> Config Class Initialized
INFO - 2019-12-31 07:15:22 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:15:23 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:15:23 --> Utf8 Class Initialized
INFO - 2019-12-31 07:15:23 --> URI Class Initialized
INFO - 2019-12-31 07:15:23 --> Router Class Initialized
INFO - 2019-12-31 07:15:23 --> Output Class Initialized
INFO - 2019-12-31 07:15:23 --> Security Class Initialized
DEBUG - 2019-12-31 07:15:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:15:23 --> Input Class Initialized
INFO - 2019-12-31 07:15:23 --> Language Class Initialized
ERROR - 2019-12-31 07:15:23 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 07:17:29 --> Config Class Initialized
INFO - 2019-12-31 07:17:29 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:17:29 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:17:29 --> Utf8 Class Initialized
INFO - 2019-12-31 07:17:29 --> URI Class Initialized
INFO - 2019-12-31 07:17:29 --> Router Class Initialized
INFO - 2019-12-31 07:17:29 --> Output Class Initialized
INFO - 2019-12-31 07:17:29 --> Security Class Initialized
DEBUG - 2019-12-31 07:17:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:17:29 --> Input Class Initialized
INFO - 2019-12-31 07:17:29 --> Language Class Initialized
ERROR - 2019-12-31 07:17:29 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:19:04 --> Config Class Initialized
INFO - 2019-12-31 07:19:04 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:19:04 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:19:04 --> Utf8 Class Initialized
INFO - 2019-12-31 07:19:04 --> URI Class Initialized
INFO - 2019-12-31 07:19:04 --> Router Class Initialized
INFO - 2019-12-31 07:19:04 --> Output Class Initialized
INFO - 2019-12-31 07:19:04 --> Security Class Initialized
DEBUG - 2019-12-31 07:19:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:19:04 --> Input Class Initialized
INFO - 2019-12-31 07:19:04 --> Language Class Initialized
ERROR - 2019-12-31 07:19:04 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:20:07 --> Config Class Initialized
INFO - 2019-12-31 07:20:07 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:20:07 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:20:07 --> Utf8 Class Initialized
INFO - 2019-12-31 07:20:07 --> URI Class Initialized
INFO - 2019-12-31 07:20:07 --> Router Class Initialized
INFO - 2019-12-31 07:20:07 --> Output Class Initialized
INFO - 2019-12-31 07:20:07 --> Security Class Initialized
DEBUG - 2019-12-31 07:20:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:20:07 --> Input Class Initialized
INFO - 2019-12-31 07:20:07 --> Language Class Initialized
ERROR - 2019-12-31 07:20:07 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 251
INFO - 2019-12-31 07:20:08 --> Config Class Initialized
INFO - 2019-12-31 07:20:08 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:20:08 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:20:08 --> Utf8 Class Initialized
INFO - 2019-12-31 07:20:08 --> URI Class Initialized
INFO - 2019-12-31 07:20:08 --> Router Class Initialized
INFO - 2019-12-31 07:20:08 --> Output Class Initialized
INFO - 2019-12-31 07:20:08 --> Security Class Initialized
DEBUG - 2019-12-31 07:20:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:20:08 --> Input Class Initialized
INFO - 2019-12-31 07:20:08 --> Language Class Initialized
ERROR - 2019-12-31 07:20:08 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 251
INFO - 2019-12-31 07:22:02 --> Config Class Initialized
INFO - 2019-12-31 07:22:02 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:22:02 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:22:02 --> Utf8 Class Initialized
INFO - 2019-12-31 07:22:02 --> URI Class Initialized
INFO - 2019-12-31 07:22:02 --> Router Class Initialized
INFO - 2019-12-31 07:22:02 --> Output Class Initialized
INFO - 2019-12-31 07:22:02 --> Security Class Initialized
DEBUG - 2019-12-31 07:22:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:22:02 --> Input Class Initialized
INFO - 2019-12-31 07:22:02 --> Language Class Initialized
ERROR - 2019-12-31 07:22:02 --> Severity: Compile Error --> Cannot redeclare Test::testlib() C:\xampp\htdocs\oneoss\application\controllers\Test.php 247
INFO - 2019-12-31 07:22:04 --> Config Class Initialized
INFO - 2019-12-31 07:22:04 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:22:04 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:22:04 --> Utf8 Class Initialized
INFO - 2019-12-31 07:22:04 --> URI Class Initialized
INFO - 2019-12-31 07:22:04 --> Router Class Initialized
INFO - 2019-12-31 07:22:04 --> Output Class Initialized
INFO - 2019-12-31 07:22:04 --> Security Class Initialized
DEBUG - 2019-12-31 07:22:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:22:04 --> Input Class Initialized
INFO - 2019-12-31 07:22:04 --> Language Class Initialized
ERROR - 2019-12-31 07:22:04 --> Severity: Compile Error --> Cannot redeclare Test::testlib() C:\xampp\htdocs\oneoss\application\controllers\Test.php 247
INFO - 2019-12-31 07:22:33 --> Config Class Initialized
INFO - 2019-12-31 07:22:33 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:22:33 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:22:33 --> Utf8 Class Initialized
INFO - 2019-12-31 07:22:33 --> URI Class Initialized
INFO - 2019-12-31 07:22:33 --> Router Class Initialized
INFO - 2019-12-31 07:22:33 --> Output Class Initialized
INFO - 2019-12-31 07:22:33 --> Security Class Initialized
DEBUG - 2019-12-31 07:22:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:22:33 --> Input Class Initialized
INFO - 2019-12-31 07:22:33 --> Language Class Initialized
ERROR - 2019-12-31 07:22:33 --> Severity: Compile Error --> Cannot redeclare Test::testlib() C:\xampp\htdocs\oneoss\application\controllers\Test.php 247
INFO - 2019-12-31 07:22:56 --> Config Class Initialized
INFO - 2019-12-31 07:22:56 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:22:56 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:22:56 --> Utf8 Class Initialized
INFO - 2019-12-31 07:22:56 --> URI Class Initialized
INFO - 2019-12-31 07:22:56 --> Router Class Initialized
INFO - 2019-12-31 07:22:56 --> Output Class Initialized
INFO - 2019-12-31 07:22:56 --> Security Class Initialized
DEBUG - 2019-12-31 07:22:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:22:56 --> Input Class Initialized
INFO - 2019-12-31 07:22:56 --> Language Class Initialized
INFO - 2019-12-31 07:22:56 --> Loader Class Initialized
INFO - 2019-12-31 07:22:56 --> Helper loaded: html_helper
INFO - 2019-12-31 07:22:56 --> Helper loaded: url_helper
INFO - 2019-12-31 07:22:56 --> Helper loaded: form_helper
INFO - 2019-12-31 07:22:56 --> Database Driver Class Initialized
INFO - 2019-12-31 07:22:56 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:22:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:22:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:22:56 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:22:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:22:56 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:22:56 --> Controller Class Initialized
INFO - 2019-12-31 07:22:56 --> Final output sent to browser
DEBUG - 2019-12-31 07:22:56 --> Total execution time: 0.0526
INFO - 2019-12-31 07:23:09 --> Config Class Initialized
INFO - 2019-12-31 07:23:09 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:23:09 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:23:09 --> Utf8 Class Initialized
INFO - 2019-12-31 07:23:09 --> URI Class Initialized
INFO - 2019-12-31 07:23:09 --> Router Class Initialized
INFO - 2019-12-31 07:23:09 --> Output Class Initialized
INFO - 2019-12-31 07:23:09 --> Security Class Initialized
DEBUG - 2019-12-31 07:23:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:23:09 --> Input Class Initialized
INFO - 2019-12-31 07:23:09 --> Language Class Initialized
INFO - 2019-12-31 07:23:09 --> Loader Class Initialized
INFO - 2019-12-31 07:23:09 --> Helper loaded: html_helper
INFO - 2019-12-31 07:23:09 --> Helper loaded: url_helper
INFO - 2019-12-31 07:23:09 --> Helper loaded: form_helper
INFO - 2019-12-31 07:23:09 --> Database Driver Class Initialized
INFO - 2019-12-31 07:23:09 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:23:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:23:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:23:10 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:23:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:23:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:23:10 --> Controller Class Initialized
INFO - 2019-12-31 07:23:10 --> Final output sent to browser
DEBUG - 2019-12-31 07:23:10 --> Total execution time: 0.0516
INFO - 2019-12-31 07:23:21 --> Config Class Initialized
INFO - 2019-12-31 07:23:21 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:23:21 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:23:21 --> Utf8 Class Initialized
INFO - 2019-12-31 07:23:21 --> URI Class Initialized
INFO - 2019-12-31 07:23:21 --> Router Class Initialized
INFO - 2019-12-31 07:23:21 --> Output Class Initialized
INFO - 2019-12-31 07:23:21 --> Security Class Initialized
DEBUG - 2019-12-31 07:23:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:23:21 --> Input Class Initialized
INFO - 2019-12-31 07:23:21 --> Language Class Initialized
ERROR - 2019-12-31 07:23:21 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:26:54 --> Config Class Initialized
INFO - 2019-12-31 07:26:54 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:26:54 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:26:54 --> Utf8 Class Initialized
INFO - 2019-12-31 07:26:54 --> URI Class Initialized
INFO - 2019-12-31 07:26:54 --> Router Class Initialized
INFO - 2019-12-31 07:26:54 --> Output Class Initialized
INFO - 2019-12-31 07:26:54 --> Security Class Initialized
DEBUG - 2019-12-31 07:26:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:26:54 --> Input Class Initialized
INFO - 2019-12-31 07:26:54 --> Language Class Initialized
ERROR - 2019-12-31 07:26:54 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:26:57 --> Config Class Initialized
INFO - 2019-12-31 07:26:57 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:26:57 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:26:57 --> Utf8 Class Initialized
INFO - 2019-12-31 07:26:57 --> URI Class Initialized
INFO - 2019-12-31 07:26:57 --> Router Class Initialized
INFO - 2019-12-31 07:26:57 --> Output Class Initialized
INFO - 2019-12-31 07:26:57 --> Security Class Initialized
DEBUG - 2019-12-31 07:26:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:26:57 --> Input Class Initialized
INFO - 2019-12-31 07:26:57 --> Language Class Initialized
ERROR - 2019-12-31 07:26:57 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:26:57 --> Config Class Initialized
INFO - 2019-12-31 07:26:57 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:26:57 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:26:57 --> Utf8 Class Initialized
INFO - 2019-12-31 07:26:57 --> URI Class Initialized
INFO - 2019-12-31 07:26:57 --> Router Class Initialized
INFO - 2019-12-31 07:26:57 --> Output Class Initialized
INFO - 2019-12-31 07:26:57 --> Security Class Initialized
DEBUG - 2019-12-31 07:26:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:26:57 --> Input Class Initialized
INFO - 2019-12-31 07:26:57 --> Language Class Initialized
ERROR - 2019-12-31 07:26:57 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:26:58 --> Config Class Initialized
INFO - 2019-12-31 07:26:58 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:26:58 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:26:58 --> Utf8 Class Initialized
INFO - 2019-12-31 07:26:58 --> URI Class Initialized
INFO - 2019-12-31 07:26:58 --> Router Class Initialized
INFO - 2019-12-31 07:26:58 --> Output Class Initialized
INFO - 2019-12-31 07:26:58 --> Security Class Initialized
DEBUG - 2019-12-31 07:26:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:26:58 --> Input Class Initialized
INFO - 2019-12-31 07:26:58 --> Language Class Initialized
ERROR - 2019-12-31 07:26:58 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:27:02 --> Config Class Initialized
INFO - 2019-12-31 07:27:02 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:27:02 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:27:02 --> Utf8 Class Initialized
INFO - 2019-12-31 07:27:02 --> URI Class Initialized
INFO - 2019-12-31 07:27:02 --> Router Class Initialized
INFO - 2019-12-31 07:27:02 --> Output Class Initialized
INFO - 2019-12-31 07:27:02 --> Security Class Initialized
DEBUG - 2019-12-31 07:27:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:27:02 --> Input Class Initialized
INFO - 2019-12-31 07:27:02 --> Language Class Initialized
ERROR - 2019-12-31 07:27:02 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:27:02 --> Config Class Initialized
INFO - 2019-12-31 07:27:02 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:27:02 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:27:02 --> Utf8 Class Initialized
INFO - 2019-12-31 07:27:02 --> URI Class Initialized
INFO - 2019-12-31 07:27:02 --> Router Class Initialized
INFO - 2019-12-31 07:27:02 --> Output Class Initialized
INFO - 2019-12-31 07:27:02 --> Security Class Initialized
DEBUG - 2019-12-31 07:27:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:27:02 --> Input Class Initialized
INFO - 2019-12-31 07:27:02 --> Language Class Initialized
ERROR - 2019-12-31 07:27:02 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:27:09 --> Config Class Initialized
INFO - 2019-12-31 07:27:09 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:27:09 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:27:09 --> Utf8 Class Initialized
INFO - 2019-12-31 07:27:09 --> URI Class Initialized
INFO - 2019-12-31 07:27:09 --> Router Class Initialized
INFO - 2019-12-31 07:27:09 --> Output Class Initialized
INFO - 2019-12-31 07:27:09 --> Security Class Initialized
DEBUG - 2019-12-31 07:27:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:27:09 --> Input Class Initialized
INFO - 2019-12-31 07:27:09 --> Language Class Initialized
ERROR - 2019-12-31 07:27:09 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:27:10 --> Config Class Initialized
INFO - 2019-12-31 07:27:10 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:27:10 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:27:10 --> Utf8 Class Initialized
INFO - 2019-12-31 07:27:10 --> URI Class Initialized
INFO - 2019-12-31 07:27:10 --> Router Class Initialized
INFO - 2019-12-31 07:27:10 --> Output Class Initialized
INFO - 2019-12-31 07:27:10 --> Security Class Initialized
DEBUG - 2019-12-31 07:27:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:27:10 --> Input Class Initialized
INFO - 2019-12-31 07:27:10 --> Language Class Initialized
ERROR - 2019-12-31 07:27:10 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:27:11 --> Config Class Initialized
INFO - 2019-12-31 07:27:11 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:27:11 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:27:11 --> Utf8 Class Initialized
INFO - 2019-12-31 07:27:11 --> URI Class Initialized
INFO - 2019-12-31 07:27:11 --> Router Class Initialized
INFO - 2019-12-31 07:27:11 --> Output Class Initialized
INFO - 2019-12-31 07:27:11 --> Security Class Initialized
DEBUG - 2019-12-31 07:27:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:27:11 --> Input Class Initialized
INFO - 2019-12-31 07:27:11 --> Language Class Initialized
ERROR - 2019-12-31 07:27:11 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:27:12 --> Config Class Initialized
INFO - 2019-12-31 07:27:12 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:27:12 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:27:12 --> Utf8 Class Initialized
INFO - 2019-12-31 07:27:12 --> URI Class Initialized
INFO - 2019-12-31 07:27:12 --> Router Class Initialized
INFO - 2019-12-31 07:27:12 --> Output Class Initialized
INFO - 2019-12-31 07:27:12 --> Security Class Initialized
DEBUG - 2019-12-31 07:27:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:27:12 --> Input Class Initialized
INFO - 2019-12-31 07:27:12 --> Language Class Initialized
ERROR - 2019-12-31 07:27:12 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:27:13 --> Config Class Initialized
INFO - 2019-12-31 07:27:13 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:27:13 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:27:13 --> Utf8 Class Initialized
INFO - 2019-12-31 07:27:13 --> URI Class Initialized
INFO - 2019-12-31 07:27:13 --> Router Class Initialized
INFO - 2019-12-31 07:27:13 --> Output Class Initialized
INFO - 2019-12-31 07:27:13 --> Security Class Initialized
DEBUG - 2019-12-31 07:27:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:27:13 --> Input Class Initialized
INFO - 2019-12-31 07:27:13 --> Language Class Initialized
ERROR - 2019-12-31 07:27:13 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:27:14 --> Config Class Initialized
INFO - 2019-12-31 07:27:14 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:27:14 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:27:14 --> Utf8 Class Initialized
INFO - 2019-12-31 07:27:14 --> URI Class Initialized
INFO - 2019-12-31 07:27:14 --> Router Class Initialized
INFO - 2019-12-31 07:27:14 --> Output Class Initialized
INFO - 2019-12-31 07:27:14 --> Security Class Initialized
DEBUG - 2019-12-31 07:27:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:27:14 --> Input Class Initialized
INFO - 2019-12-31 07:27:14 --> Language Class Initialized
ERROR - 2019-12-31 07:27:14 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:27:15 --> Config Class Initialized
INFO - 2019-12-31 07:27:15 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:27:15 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:27:15 --> Utf8 Class Initialized
INFO - 2019-12-31 07:27:15 --> URI Class Initialized
INFO - 2019-12-31 07:27:15 --> Router Class Initialized
INFO - 2019-12-31 07:27:15 --> Output Class Initialized
INFO - 2019-12-31 07:27:15 --> Security Class Initialized
DEBUG - 2019-12-31 07:27:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:27:15 --> Input Class Initialized
INFO - 2019-12-31 07:27:15 --> Language Class Initialized
ERROR - 2019-12-31 07:27:15 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:27:16 --> Config Class Initialized
INFO - 2019-12-31 07:27:16 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:27:16 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:27:16 --> Utf8 Class Initialized
INFO - 2019-12-31 07:27:16 --> URI Class Initialized
INFO - 2019-12-31 07:27:16 --> Router Class Initialized
INFO - 2019-12-31 07:27:16 --> Output Class Initialized
INFO - 2019-12-31 07:27:16 --> Security Class Initialized
DEBUG - 2019-12-31 07:27:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:27:16 --> Input Class Initialized
INFO - 2019-12-31 07:27:16 --> Language Class Initialized
ERROR - 2019-12-31 07:27:16 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:44:39 --> Config Class Initialized
INFO - 2019-12-31 07:44:39 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:44:39 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:44:39 --> Utf8 Class Initialized
INFO - 2019-12-31 07:44:39 --> URI Class Initialized
INFO - 2019-12-31 07:44:39 --> Router Class Initialized
INFO - 2019-12-31 07:44:39 --> Output Class Initialized
INFO - 2019-12-31 07:44:39 --> Security Class Initialized
DEBUG - 2019-12-31 07:44:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:44:39 --> Input Class Initialized
INFO - 2019-12-31 07:44:39 --> Language Class Initialized
ERROR - 2019-12-31 07:44:39 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:44:40 --> Config Class Initialized
INFO - 2019-12-31 07:44:40 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:44:40 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:44:40 --> Utf8 Class Initialized
INFO - 2019-12-31 07:44:40 --> URI Class Initialized
INFO - 2019-12-31 07:44:40 --> Router Class Initialized
INFO - 2019-12-31 07:44:40 --> Output Class Initialized
INFO - 2019-12-31 07:44:40 --> Security Class Initialized
DEBUG - 2019-12-31 07:44:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:44:40 --> Input Class Initialized
INFO - 2019-12-31 07:44:40 --> Language Class Initialized
ERROR - 2019-12-31 07:44:40 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:44:41 --> Config Class Initialized
INFO - 2019-12-31 07:44:41 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:44:41 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:44:41 --> Utf8 Class Initialized
INFO - 2019-12-31 07:44:41 --> URI Class Initialized
INFO - 2019-12-31 07:44:41 --> Router Class Initialized
INFO - 2019-12-31 07:44:41 --> Output Class Initialized
INFO - 2019-12-31 07:44:41 --> Security Class Initialized
DEBUG - 2019-12-31 07:44:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:44:41 --> Input Class Initialized
INFO - 2019-12-31 07:44:41 --> Language Class Initialized
ERROR - 2019-12-31 07:44:41 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:44:42 --> Config Class Initialized
INFO - 2019-12-31 07:44:42 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:44:42 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:44:42 --> Utf8 Class Initialized
INFO - 2019-12-31 07:44:42 --> URI Class Initialized
INFO - 2019-12-31 07:44:42 --> Router Class Initialized
INFO - 2019-12-31 07:44:42 --> Output Class Initialized
INFO - 2019-12-31 07:44:42 --> Security Class Initialized
DEBUG - 2019-12-31 07:44:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:44:42 --> Input Class Initialized
INFO - 2019-12-31 07:44:42 --> Language Class Initialized
ERROR - 2019-12-31 07:44:42 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:44:43 --> Config Class Initialized
INFO - 2019-12-31 07:44:43 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:44:43 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:44:43 --> Utf8 Class Initialized
INFO - 2019-12-31 07:44:43 --> URI Class Initialized
INFO - 2019-12-31 07:44:43 --> Router Class Initialized
INFO - 2019-12-31 07:44:43 --> Output Class Initialized
INFO - 2019-12-31 07:44:43 --> Security Class Initialized
DEBUG - 2019-12-31 07:44:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:44:43 --> Input Class Initialized
INFO - 2019-12-31 07:44:43 --> Language Class Initialized
ERROR - 2019-12-31 07:44:43 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:44:43 --> Config Class Initialized
INFO - 2019-12-31 07:44:43 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:44:43 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:44:43 --> Utf8 Class Initialized
INFO - 2019-12-31 07:44:43 --> URI Class Initialized
INFO - 2019-12-31 07:44:43 --> Router Class Initialized
INFO - 2019-12-31 07:44:43 --> Output Class Initialized
INFO - 2019-12-31 07:44:43 --> Security Class Initialized
DEBUG - 2019-12-31 07:44:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:44:43 --> Input Class Initialized
INFO - 2019-12-31 07:44:43 --> Language Class Initialized
ERROR - 2019-12-31 07:44:43 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:49:28 --> Config Class Initialized
INFO - 2019-12-31 07:49:28 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:49:28 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:49:28 --> Utf8 Class Initialized
INFO - 2019-12-31 07:49:28 --> URI Class Initialized
INFO - 2019-12-31 07:49:28 --> Router Class Initialized
INFO - 2019-12-31 07:49:28 --> Output Class Initialized
INFO - 2019-12-31 07:49:28 --> Security Class Initialized
DEBUG - 2019-12-31 07:49:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:49:28 --> Input Class Initialized
INFO - 2019-12-31 07:49:28 --> Language Class Initialized
ERROR - 2019-12-31 07:49:28 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 07:49:29 --> Config Class Initialized
INFO - 2019-12-31 07:49:29 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:49:29 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:49:29 --> Utf8 Class Initialized
INFO - 2019-12-31 07:49:29 --> URI Class Initialized
INFO - 2019-12-31 07:49:29 --> Router Class Initialized
INFO - 2019-12-31 07:49:29 --> Output Class Initialized
INFO - 2019-12-31 07:49:29 --> Security Class Initialized
DEBUG - 2019-12-31 07:49:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:49:29 --> Input Class Initialized
INFO - 2019-12-31 07:49:29 --> Language Class Initialized
ERROR - 2019-12-31 07:49:29 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 07:49:30 --> Config Class Initialized
INFO - 2019-12-31 07:49:30 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:49:30 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:49:30 --> Utf8 Class Initialized
INFO - 2019-12-31 07:49:30 --> URI Class Initialized
INFO - 2019-12-31 07:49:30 --> Router Class Initialized
INFO - 2019-12-31 07:49:30 --> Output Class Initialized
INFO - 2019-12-31 07:49:30 --> Security Class Initialized
DEBUG - 2019-12-31 07:49:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:49:30 --> Input Class Initialized
INFO - 2019-12-31 07:49:30 --> Language Class Initialized
ERROR - 2019-12-31 07:49:30 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 07:50:46 --> Config Class Initialized
INFO - 2019-12-31 07:50:46 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:50:46 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:50:46 --> Utf8 Class Initialized
INFO - 2019-12-31 07:50:46 --> URI Class Initialized
INFO - 2019-12-31 07:50:46 --> Router Class Initialized
INFO - 2019-12-31 07:50:46 --> Output Class Initialized
INFO - 2019-12-31 07:50:46 --> Security Class Initialized
DEBUG - 2019-12-31 07:50:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:50:46 --> Input Class Initialized
INFO - 2019-12-31 07:50:46 --> Language Class Initialized
ERROR - 2019-12-31 07:50:46 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:50:47 --> Config Class Initialized
INFO - 2019-12-31 07:50:47 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:50:47 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:50:47 --> Utf8 Class Initialized
INFO - 2019-12-31 07:50:47 --> URI Class Initialized
INFO - 2019-12-31 07:50:47 --> Router Class Initialized
INFO - 2019-12-31 07:50:47 --> Output Class Initialized
INFO - 2019-12-31 07:50:47 --> Security Class Initialized
DEBUG - 2019-12-31 07:50:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:50:47 --> Input Class Initialized
INFO - 2019-12-31 07:50:47 --> Language Class Initialized
ERROR - 2019-12-31 07:50:47 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:51:23 --> Config Class Initialized
INFO - 2019-12-31 07:51:23 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:51:23 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:51:23 --> Utf8 Class Initialized
INFO - 2019-12-31 07:51:23 --> URI Class Initialized
INFO - 2019-12-31 07:51:23 --> Router Class Initialized
INFO - 2019-12-31 07:51:23 --> Output Class Initialized
INFO - 2019-12-31 07:51:23 --> Security Class Initialized
DEBUG - 2019-12-31 07:51:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:51:23 --> Input Class Initialized
INFO - 2019-12-31 07:51:23 --> Language Class Initialized
INFO - 2019-12-31 07:51:23 --> Loader Class Initialized
INFO - 2019-12-31 07:51:23 --> Helper loaded: html_helper
INFO - 2019-12-31 07:51:23 --> Helper loaded: url_helper
INFO - 2019-12-31 07:51:23 --> Helper loaded: form_helper
INFO - 2019-12-31 07:51:23 --> Database Driver Class Initialized
INFO - 2019-12-31 07:51:23 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:51:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:51:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:51:23 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:51:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:51:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:51:23 --> Controller Class Initialized
INFO - 2019-12-31 07:51:23 --> Final output sent to browser
DEBUG - 2019-12-31 07:51:23 --> Total execution time: 0.0519
INFO - 2019-12-31 07:51:35 --> Config Class Initialized
INFO - 2019-12-31 07:51:35 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:51:35 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:51:35 --> Utf8 Class Initialized
INFO - 2019-12-31 07:51:35 --> URI Class Initialized
INFO - 2019-12-31 07:51:35 --> Router Class Initialized
INFO - 2019-12-31 07:51:35 --> Output Class Initialized
INFO - 2019-12-31 07:51:35 --> Security Class Initialized
DEBUG - 2019-12-31 07:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:51:35 --> Input Class Initialized
INFO - 2019-12-31 07:51:35 --> Language Class Initialized
INFO - 2019-12-31 07:51:35 --> Loader Class Initialized
INFO - 2019-12-31 07:51:35 --> Helper loaded: html_helper
INFO - 2019-12-31 07:51:35 --> Helper loaded: url_helper
INFO - 2019-12-31 07:51:35 --> Helper loaded: form_helper
INFO - 2019-12-31 07:51:35 --> Database Driver Class Initialized
INFO - 2019-12-31 07:51:35 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:51:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:51:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:51:35 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:51:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:51:35 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:51:35 --> Controller Class Initialized
INFO - 2019-12-31 07:51:35 --> Final output sent to browser
DEBUG - 2019-12-31 07:51:35 --> Total execution time: 0.0510
INFO - 2019-12-31 07:51:36 --> Config Class Initialized
INFO - 2019-12-31 07:51:36 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:51:36 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:51:36 --> Utf8 Class Initialized
INFO - 2019-12-31 07:51:36 --> URI Class Initialized
INFO - 2019-12-31 07:51:36 --> Router Class Initialized
INFO - 2019-12-31 07:51:36 --> Output Class Initialized
INFO - 2019-12-31 07:51:36 --> Security Class Initialized
DEBUG - 2019-12-31 07:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:51:36 --> Input Class Initialized
INFO - 2019-12-31 07:51:36 --> Language Class Initialized
INFO - 2019-12-31 07:51:36 --> Loader Class Initialized
INFO - 2019-12-31 07:51:36 --> Helper loaded: html_helper
INFO - 2019-12-31 07:51:36 --> Helper loaded: url_helper
INFO - 2019-12-31 07:51:36 --> Helper loaded: form_helper
INFO - 2019-12-31 07:51:36 --> Database Driver Class Initialized
INFO - 2019-12-31 07:51:36 --> Form Validation Class Initialized
DEBUG - 2019-12-31 07:51:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 07:51:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 07:51:36 --> Encryption Class Initialized
DEBUG - 2019-12-31 07:51:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 07:51:36 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 07:51:36 --> Controller Class Initialized
INFO - 2019-12-31 07:51:36 --> Final output sent to browser
DEBUG - 2019-12-31 07:51:36 --> Total execution time: 0.0524
INFO - 2019-12-31 07:51:54 --> Config Class Initialized
INFO - 2019-12-31 07:51:54 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:51:54 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:51:54 --> Utf8 Class Initialized
INFO - 2019-12-31 07:51:54 --> URI Class Initialized
INFO - 2019-12-31 07:51:54 --> Router Class Initialized
INFO - 2019-12-31 07:51:54 --> Output Class Initialized
INFO - 2019-12-31 07:51:54 --> Security Class Initialized
DEBUG - 2019-12-31 07:51:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:51:54 --> Input Class Initialized
INFO - 2019-12-31 07:51:54 --> Language Class Initialized
ERROR - 2019-12-31 07:51:54 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:52:20 --> Config Class Initialized
INFO - 2019-12-31 07:52:20 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:52:20 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:52:20 --> Utf8 Class Initialized
INFO - 2019-12-31 07:52:20 --> URI Class Initialized
INFO - 2019-12-31 07:52:20 --> Router Class Initialized
INFO - 2019-12-31 07:52:20 --> Output Class Initialized
INFO - 2019-12-31 07:52:20 --> Security Class Initialized
DEBUG - 2019-12-31 07:52:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:52:20 --> Input Class Initialized
INFO - 2019-12-31 07:52:20 --> Language Class Initialized
ERROR - 2019-12-31 07:52:20 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 254
INFO - 2019-12-31 07:52:22 --> Config Class Initialized
INFO - 2019-12-31 07:52:22 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:52:22 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:52:22 --> Utf8 Class Initialized
INFO - 2019-12-31 07:52:22 --> URI Class Initialized
INFO - 2019-12-31 07:52:22 --> Router Class Initialized
INFO - 2019-12-31 07:52:22 --> Output Class Initialized
INFO - 2019-12-31 07:52:22 --> Security Class Initialized
DEBUG - 2019-12-31 07:52:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:52:22 --> Input Class Initialized
INFO - 2019-12-31 07:52:22 --> Language Class Initialized
ERROR - 2019-12-31 07:52:22 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 254
INFO - 2019-12-31 07:52:23 --> Config Class Initialized
INFO - 2019-12-31 07:52:23 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:52:23 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:52:23 --> Utf8 Class Initialized
INFO - 2019-12-31 07:52:23 --> URI Class Initialized
INFO - 2019-12-31 07:52:23 --> Router Class Initialized
INFO - 2019-12-31 07:52:23 --> Output Class Initialized
INFO - 2019-12-31 07:52:23 --> Security Class Initialized
DEBUG - 2019-12-31 07:52:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:52:23 --> Input Class Initialized
INFO - 2019-12-31 07:52:23 --> Language Class Initialized
ERROR - 2019-12-31 07:52:23 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 254
INFO - 2019-12-31 07:52:23 --> Config Class Initialized
INFO - 2019-12-31 07:52:23 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:52:23 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:52:23 --> Utf8 Class Initialized
INFO - 2019-12-31 07:52:23 --> URI Class Initialized
INFO - 2019-12-31 07:52:23 --> Router Class Initialized
INFO - 2019-12-31 07:52:23 --> Output Class Initialized
INFO - 2019-12-31 07:52:24 --> Security Class Initialized
DEBUG - 2019-12-31 07:52:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:52:24 --> Input Class Initialized
INFO - 2019-12-31 07:52:24 --> Language Class Initialized
ERROR - 2019-12-31 07:52:24 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 254
INFO - 2019-12-31 07:52:24 --> Config Class Initialized
INFO - 2019-12-31 07:52:24 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:52:24 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:52:24 --> Utf8 Class Initialized
INFO - 2019-12-31 07:52:24 --> URI Class Initialized
INFO - 2019-12-31 07:52:24 --> Router Class Initialized
INFO - 2019-12-31 07:52:24 --> Output Class Initialized
INFO - 2019-12-31 07:52:24 --> Security Class Initialized
DEBUG - 2019-12-31 07:52:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:52:24 --> Input Class Initialized
INFO - 2019-12-31 07:52:24 --> Language Class Initialized
ERROR - 2019-12-31 07:52:24 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 254
INFO - 2019-12-31 07:52:26 --> Config Class Initialized
INFO - 2019-12-31 07:52:26 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:52:26 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:52:26 --> Utf8 Class Initialized
INFO - 2019-12-31 07:52:26 --> URI Class Initialized
INFO - 2019-12-31 07:52:26 --> Router Class Initialized
INFO - 2019-12-31 07:52:26 --> Output Class Initialized
INFO - 2019-12-31 07:52:26 --> Security Class Initialized
DEBUG - 2019-12-31 07:52:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:52:26 --> Input Class Initialized
INFO - 2019-12-31 07:52:26 --> Language Class Initialized
ERROR - 2019-12-31 07:52:26 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 254
INFO - 2019-12-31 07:52:27 --> Config Class Initialized
INFO - 2019-12-31 07:52:27 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:52:27 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:52:27 --> Utf8 Class Initialized
INFO - 2019-12-31 07:52:27 --> URI Class Initialized
INFO - 2019-12-31 07:52:27 --> Router Class Initialized
INFO - 2019-12-31 07:52:27 --> Output Class Initialized
INFO - 2019-12-31 07:52:27 --> Security Class Initialized
DEBUG - 2019-12-31 07:52:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:52:27 --> Input Class Initialized
INFO - 2019-12-31 07:52:27 --> Language Class Initialized
ERROR - 2019-12-31 07:52:27 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 254
INFO - 2019-12-31 07:53:25 --> Config Class Initialized
INFO - 2019-12-31 07:53:25 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:53:25 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:53:25 --> Utf8 Class Initialized
INFO - 2019-12-31 07:53:25 --> URI Class Initialized
INFO - 2019-12-31 07:53:25 --> Router Class Initialized
INFO - 2019-12-31 07:53:25 --> Output Class Initialized
INFO - 2019-12-31 07:53:25 --> Security Class Initialized
DEBUG - 2019-12-31 07:53:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:53:25 --> Input Class Initialized
INFO - 2019-12-31 07:53:25 --> Language Class Initialized
ERROR - 2019-12-31 07:53:25 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:53:26 --> Config Class Initialized
INFO - 2019-12-31 07:53:26 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:53:26 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:53:26 --> Utf8 Class Initialized
INFO - 2019-12-31 07:53:26 --> URI Class Initialized
INFO - 2019-12-31 07:53:26 --> Router Class Initialized
INFO - 2019-12-31 07:53:26 --> Output Class Initialized
INFO - 2019-12-31 07:53:26 --> Security Class Initialized
DEBUG - 2019-12-31 07:53:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:53:26 --> Input Class Initialized
INFO - 2019-12-31 07:53:26 --> Language Class Initialized
ERROR - 2019-12-31 07:53:26 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:53:27 --> Config Class Initialized
INFO - 2019-12-31 07:53:27 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:53:27 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:53:27 --> Utf8 Class Initialized
INFO - 2019-12-31 07:53:27 --> URI Class Initialized
INFO - 2019-12-31 07:53:27 --> Router Class Initialized
INFO - 2019-12-31 07:53:27 --> Output Class Initialized
INFO - 2019-12-31 07:53:27 --> Security Class Initialized
DEBUG - 2019-12-31 07:53:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:53:27 --> Input Class Initialized
INFO - 2019-12-31 07:53:27 --> Language Class Initialized
ERROR - 2019-12-31 07:53:27 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:53:28 --> Config Class Initialized
INFO - 2019-12-31 07:53:28 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:53:28 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:53:28 --> Utf8 Class Initialized
INFO - 2019-12-31 07:53:28 --> URI Class Initialized
INFO - 2019-12-31 07:53:28 --> Router Class Initialized
INFO - 2019-12-31 07:53:28 --> Output Class Initialized
INFO - 2019-12-31 07:53:28 --> Security Class Initialized
DEBUG - 2019-12-31 07:53:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:53:28 --> Input Class Initialized
INFO - 2019-12-31 07:53:28 --> Language Class Initialized
ERROR - 2019-12-31 07:53:28 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:55:21 --> Config Class Initialized
INFO - 2019-12-31 07:55:21 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:55:21 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:55:21 --> Utf8 Class Initialized
INFO - 2019-12-31 07:55:21 --> URI Class Initialized
INFO - 2019-12-31 07:55:21 --> Router Class Initialized
INFO - 2019-12-31 07:55:21 --> Output Class Initialized
INFO - 2019-12-31 07:55:21 --> Security Class Initialized
DEBUG - 2019-12-31 07:55:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:55:21 --> Input Class Initialized
INFO - 2019-12-31 07:55:21 --> Language Class Initialized
ERROR - 2019-12-31 07:55:21 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:55:23 --> Config Class Initialized
INFO - 2019-12-31 07:55:23 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:55:23 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:55:23 --> Utf8 Class Initialized
INFO - 2019-12-31 07:55:23 --> URI Class Initialized
INFO - 2019-12-31 07:55:23 --> Router Class Initialized
INFO - 2019-12-31 07:55:23 --> Output Class Initialized
INFO - 2019-12-31 07:55:23 --> Security Class Initialized
DEBUG - 2019-12-31 07:55:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:55:23 --> Input Class Initialized
INFO - 2019-12-31 07:55:23 --> Language Class Initialized
ERROR - 2019-12-31 07:55:23 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:57:51 --> Config Class Initialized
INFO - 2019-12-31 07:57:51 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:57:51 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:57:51 --> Utf8 Class Initialized
INFO - 2019-12-31 07:57:51 --> URI Class Initialized
INFO - 2019-12-31 07:57:51 --> Router Class Initialized
INFO - 2019-12-31 07:57:51 --> Output Class Initialized
INFO - 2019-12-31 07:57:51 --> Security Class Initialized
DEBUG - 2019-12-31 07:57:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:57:51 --> Input Class Initialized
INFO - 2019-12-31 07:57:51 --> Language Class Initialized
ERROR - 2019-12-31 07:57:51 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:57:52 --> Config Class Initialized
INFO - 2019-12-31 07:57:52 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:57:52 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:57:52 --> Utf8 Class Initialized
INFO - 2019-12-31 07:57:52 --> URI Class Initialized
INFO - 2019-12-31 07:57:52 --> Router Class Initialized
INFO - 2019-12-31 07:57:52 --> Output Class Initialized
INFO - 2019-12-31 07:57:52 --> Security Class Initialized
DEBUG - 2019-12-31 07:57:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:57:52 --> Input Class Initialized
INFO - 2019-12-31 07:57:52 --> Language Class Initialized
ERROR - 2019-12-31 07:57:52 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:57:53 --> Config Class Initialized
INFO - 2019-12-31 07:57:53 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:57:53 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:57:53 --> Utf8 Class Initialized
INFO - 2019-12-31 07:57:53 --> URI Class Initialized
INFO - 2019-12-31 07:57:53 --> Router Class Initialized
INFO - 2019-12-31 07:57:53 --> Output Class Initialized
INFO - 2019-12-31 07:57:53 --> Security Class Initialized
DEBUG - 2019-12-31 07:57:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:57:53 --> Input Class Initialized
INFO - 2019-12-31 07:57:53 --> Language Class Initialized
ERROR - 2019-12-31 07:57:53 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:57:54 --> Config Class Initialized
INFO - 2019-12-31 07:57:54 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:57:54 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:57:54 --> Utf8 Class Initialized
INFO - 2019-12-31 07:57:54 --> URI Class Initialized
INFO - 2019-12-31 07:57:54 --> Router Class Initialized
INFO - 2019-12-31 07:57:54 --> Output Class Initialized
INFO - 2019-12-31 07:57:54 --> Security Class Initialized
DEBUG - 2019-12-31 07:57:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:57:54 --> Input Class Initialized
INFO - 2019-12-31 07:57:54 --> Language Class Initialized
ERROR - 2019-12-31 07:57:54 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 07:59:42 --> Config Class Initialized
INFO - 2019-12-31 07:59:42 --> Hooks Class Initialized
DEBUG - 2019-12-31 07:59:42 --> UTF-8 Support Enabled
INFO - 2019-12-31 07:59:42 --> Utf8 Class Initialized
INFO - 2019-12-31 07:59:42 --> URI Class Initialized
INFO - 2019-12-31 07:59:42 --> Router Class Initialized
INFO - 2019-12-31 07:59:42 --> Output Class Initialized
INFO - 2019-12-31 07:59:42 --> Security Class Initialized
DEBUG - 2019-12-31 07:59:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 07:59:42 --> Input Class Initialized
INFO - 2019-12-31 07:59:42 --> Language Class Initialized
ERROR - 2019-12-31 07:59:42 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:00:00 --> Config Class Initialized
INFO - 2019-12-31 08:00:00 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:00:00 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:00:00 --> Utf8 Class Initialized
INFO - 2019-12-31 08:00:00 --> URI Class Initialized
INFO - 2019-12-31 08:00:00 --> Router Class Initialized
INFO - 2019-12-31 08:00:00 --> Output Class Initialized
INFO - 2019-12-31 08:00:00 --> Security Class Initialized
DEBUG - 2019-12-31 08:00:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:00:00 --> Input Class Initialized
INFO - 2019-12-31 08:00:00 --> Language Class Initialized
ERROR - 2019-12-31 08:00:00 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 08:00:03 --> Config Class Initialized
INFO - 2019-12-31 08:00:03 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:00:03 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:00:03 --> Utf8 Class Initialized
INFO - 2019-12-31 08:00:03 --> URI Class Initialized
INFO - 2019-12-31 08:00:03 --> Router Class Initialized
INFO - 2019-12-31 08:00:03 --> Output Class Initialized
INFO - 2019-12-31 08:00:03 --> Security Class Initialized
DEBUG - 2019-12-31 08:00:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:00:03 --> Input Class Initialized
INFO - 2019-12-31 08:00:03 --> Language Class Initialized
ERROR - 2019-12-31 08:00:03 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:00:04 --> Config Class Initialized
INFO - 2019-12-31 08:00:04 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:00:04 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:00:04 --> Utf8 Class Initialized
INFO - 2019-12-31 08:00:04 --> URI Class Initialized
INFO - 2019-12-31 08:00:04 --> Router Class Initialized
INFO - 2019-12-31 08:00:04 --> Output Class Initialized
INFO - 2019-12-31 08:00:04 --> Security Class Initialized
DEBUG - 2019-12-31 08:00:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:00:04 --> Input Class Initialized
INFO - 2019-12-31 08:00:04 --> Language Class Initialized
ERROR - 2019-12-31 08:00:04 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:00:04 --> Config Class Initialized
INFO - 2019-12-31 08:00:04 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:00:04 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:00:04 --> Utf8 Class Initialized
INFO - 2019-12-31 08:00:04 --> URI Class Initialized
INFO - 2019-12-31 08:00:04 --> Router Class Initialized
INFO - 2019-12-31 08:00:04 --> Output Class Initialized
INFO - 2019-12-31 08:00:04 --> Security Class Initialized
DEBUG - 2019-12-31 08:00:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:00:04 --> Input Class Initialized
INFO - 2019-12-31 08:00:04 --> Language Class Initialized
ERROR - 2019-12-31 08:00:05 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:00:05 --> Config Class Initialized
INFO - 2019-12-31 08:00:05 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:00:05 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:00:05 --> Utf8 Class Initialized
INFO - 2019-12-31 08:00:05 --> URI Class Initialized
INFO - 2019-12-31 08:00:05 --> Router Class Initialized
INFO - 2019-12-31 08:00:05 --> Output Class Initialized
INFO - 2019-12-31 08:00:05 --> Security Class Initialized
DEBUG - 2019-12-31 08:00:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:00:05 --> Input Class Initialized
INFO - 2019-12-31 08:00:05 --> Language Class Initialized
ERROR - 2019-12-31 08:00:05 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:03:00 --> Config Class Initialized
INFO - 2019-12-31 08:03:00 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:03:00 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:03:00 --> Utf8 Class Initialized
INFO - 2019-12-31 08:03:00 --> URI Class Initialized
INFO - 2019-12-31 08:03:00 --> Router Class Initialized
INFO - 2019-12-31 08:03:00 --> Output Class Initialized
INFO - 2019-12-31 08:03:00 --> Security Class Initialized
DEBUG - 2019-12-31 08:03:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:03:00 --> Input Class Initialized
INFO - 2019-12-31 08:03:00 --> Language Class Initialized
ERROR - 2019-12-31 08:03:00 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:03:01 --> Config Class Initialized
INFO - 2019-12-31 08:03:01 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:03:01 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:03:01 --> Utf8 Class Initialized
INFO - 2019-12-31 08:03:01 --> URI Class Initialized
INFO - 2019-12-31 08:03:01 --> Router Class Initialized
INFO - 2019-12-31 08:03:01 --> Output Class Initialized
INFO - 2019-12-31 08:03:01 --> Security Class Initialized
DEBUG - 2019-12-31 08:03:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:03:01 --> Input Class Initialized
INFO - 2019-12-31 08:03:01 --> Language Class Initialized
ERROR - 2019-12-31 08:03:01 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:03:02 --> Config Class Initialized
INFO - 2019-12-31 08:03:02 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:03:02 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:03:02 --> Utf8 Class Initialized
INFO - 2019-12-31 08:03:02 --> URI Class Initialized
INFO - 2019-12-31 08:03:02 --> Router Class Initialized
INFO - 2019-12-31 08:03:02 --> Output Class Initialized
INFO - 2019-12-31 08:03:02 --> Security Class Initialized
DEBUG - 2019-12-31 08:03:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:03:02 --> Input Class Initialized
INFO - 2019-12-31 08:03:02 --> Language Class Initialized
ERROR - 2019-12-31 08:03:02 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:03:42 --> Config Class Initialized
INFO - 2019-12-31 08:03:42 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:03:42 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:03:42 --> Utf8 Class Initialized
INFO - 2019-12-31 08:03:42 --> URI Class Initialized
INFO - 2019-12-31 08:03:42 --> Router Class Initialized
INFO - 2019-12-31 08:03:42 --> Output Class Initialized
INFO - 2019-12-31 08:03:42 --> Security Class Initialized
DEBUG - 2019-12-31 08:03:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:03:42 --> Input Class Initialized
INFO - 2019-12-31 08:03:42 --> Language Class Initialized
ERROR - 2019-12-31 08:03:42 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:03:43 --> Config Class Initialized
INFO - 2019-12-31 08:03:43 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:03:43 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:03:43 --> Utf8 Class Initialized
INFO - 2019-12-31 08:03:43 --> URI Class Initialized
INFO - 2019-12-31 08:03:43 --> Router Class Initialized
INFO - 2019-12-31 08:03:43 --> Output Class Initialized
INFO - 2019-12-31 08:03:43 --> Security Class Initialized
DEBUG - 2019-12-31 08:03:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:03:43 --> Input Class Initialized
INFO - 2019-12-31 08:03:43 --> Language Class Initialized
ERROR - 2019-12-31 08:03:43 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:03:57 --> Config Class Initialized
INFO - 2019-12-31 08:03:57 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:03:57 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:03:57 --> Utf8 Class Initialized
INFO - 2019-12-31 08:03:57 --> URI Class Initialized
INFO - 2019-12-31 08:03:57 --> Router Class Initialized
INFO - 2019-12-31 08:03:57 --> Output Class Initialized
INFO - 2019-12-31 08:03:57 --> Security Class Initialized
DEBUG - 2019-12-31 08:03:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:03:57 --> Input Class Initialized
INFO - 2019-12-31 08:03:57 --> Language Class Initialized
ERROR - 2019-12-31 08:03:57 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:03:58 --> Config Class Initialized
INFO - 2019-12-31 08:03:58 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:03:58 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:03:58 --> Utf8 Class Initialized
INFO - 2019-12-31 08:03:58 --> URI Class Initialized
INFO - 2019-12-31 08:03:58 --> Router Class Initialized
INFO - 2019-12-31 08:03:58 --> Output Class Initialized
INFO - 2019-12-31 08:03:58 --> Security Class Initialized
DEBUG - 2019-12-31 08:03:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:03:58 --> Input Class Initialized
INFO - 2019-12-31 08:03:58 --> Language Class Initialized
ERROR - 2019-12-31 08:03:58 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:03:59 --> Config Class Initialized
INFO - 2019-12-31 08:03:59 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:03:59 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:03:59 --> Utf8 Class Initialized
INFO - 2019-12-31 08:03:59 --> URI Class Initialized
INFO - 2019-12-31 08:03:59 --> Router Class Initialized
INFO - 2019-12-31 08:03:59 --> Output Class Initialized
INFO - 2019-12-31 08:03:59 --> Security Class Initialized
DEBUG - 2019-12-31 08:03:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:03:59 --> Input Class Initialized
INFO - 2019-12-31 08:03:59 --> Language Class Initialized
ERROR - 2019-12-31 08:03:59 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:07:51 --> Config Class Initialized
INFO - 2019-12-31 08:07:51 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:07:51 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:07:51 --> Utf8 Class Initialized
INFO - 2019-12-31 08:07:51 --> URI Class Initialized
INFO - 2019-12-31 08:07:51 --> Router Class Initialized
INFO - 2019-12-31 08:07:51 --> Output Class Initialized
INFO - 2019-12-31 08:07:51 --> Security Class Initialized
DEBUG - 2019-12-31 08:07:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:07:51 --> Input Class Initialized
INFO - 2019-12-31 08:07:51 --> Language Class Initialized
ERROR - 2019-12-31 08:07:51 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:07:51 --> Config Class Initialized
INFO - 2019-12-31 08:07:51 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:07:51 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:07:51 --> Utf8 Class Initialized
INFO - 2019-12-31 08:07:51 --> URI Class Initialized
INFO - 2019-12-31 08:07:51 --> Router Class Initialized
INFO - 2019-12-31 08:07:51 --> Output Class Initialized
INFO - 2019-12-31 08:07:51 --> Security Class Initialized
DEBUG - 2019-12-31 08:07:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:07:51 --> Input Class Initialized
INFO - 2019-12-31 08:07:51 --> Language Class Initialized
ERROR - 2019-12-31 08:07:51 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:07:52 --> Config Class Initialized
INFO - 2019-12-31 08:07:52 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:07:52 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:07:52 --> Utf8 Class Initialized
INFO - 2019-12-31 08:07:52 --> URI Class Initialized
INFO - 2019-12-31 08:07:52 --> Router Class Initialized
INFO - 2019-12-31 08:07:52 --> Output Class Initialized
INFO - 2019-12-31 08:07:52 --> Security Class Initialized
DEBUG - 2019-12-31 08:07:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:07:52 --> Input Class Initialized
INFO - 2019-12-31 08:07:52 --> Language Class Initialized
ERROR - 2019-12-31 08:07:52 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:07:53 --> Config Class Initialized
INFO - 2019-12-31 08:07:53 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:07:53 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:07:53 --> Utf8 Class Initialized
INFO - 2019-12-31 08:07:53 --> URI Class Initialized
INFO - 2019-12-31 08:07:53 --> Router Class Initialized
INFO - 2019-12-31 08:07:53 --> Output Class Initialized
INFO - 2019-12-31 08:07:53 --> Security Class Initialized
DEBUG - 2019-12-31 08:07:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:07:53 --> Input Class Initialized
INFO - 2019-12-31 08:07:53 --> Language Class Initialized
ERROR - 2019-12-31 08:07:53 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:07:54 --> Config Class Initialized
INFO - 2019-12-31 08:07:54 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:07:54 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:07:54 --> Utf8 Class Initialized
INFO - 2019-12-31 08:07:54 --> URI Class Initialized
INFO - 2019-12-31 08:07:54 --> Router Class Initialized
INFO - 2019-12-31 08:07:54 --> Output Class Initialized
INFO - 2019-12-31 08:07:54 --> Security Class Initialized
DEBUG - 2019-12-31 08:07:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:07:54 --> Input Class Initialized
INFO - 2019-12-31 08:07:54 --> Language Class Initialized
ERROR - 2019-12-31 08:07:54 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:07:54 --> Config Class Initialized
INFO - 2019-12-31 08:07:54 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:07:54 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:07:54 --> Utf8 Class Initialized
INFO - 2019-12-31 08:07:54 --> URI Class Initialized
INFO - 2019-12-31 08:07:54 --> Router Class Initialized
INFO - 2019-12-31 08:07:54 --> Output Class Initialized
INFO - 2019-12-31 08:07:54 --> Security Class Initialized
DEBUG - 2019-12-31 08:07:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:07:54 --> Input Class Initialized
INFO - 2019-12-31 08:07:54 --> Language Class Initialized
ERROR - 2019-12-31 08:07:54 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 08:07:58 --> Config Class Initialized
INFO - 2019-12-31 08:07:58 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:07:58 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:07:58 --> Utf8 Class Initialized
INFO - 2019-12-31 08:07:58 --> URI Class Initialized
INFO - 2019-12-31 08:07:58 --> Router Class Initialized
INFO - 2019-12-31 08:07:58 --> Output Class Initialized
INFO - 2019-12-31 08:07:58 --> Security Class Initialized
DEBUG - 2019-12-31 08:07:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:07:58 --> Input Class Initialized
INFO - 2019-12-31 08:07:58 --> Language Class Initialized
ERROR - 2019-12-31 08:07:58 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 08:07:59 --> Config Class Initialized
INFO - 2019-12-31 08:07:59 --> Hooks Class Initialized
DEBUG - 2019-12-31 08:07:59 --> UTF-8 Support Enabled
INFO - 2019-12-31 08:07:59 --> Utf8 Class Initialized
INFO - 2019-12-31 08:07:59 --> URI Class Initialized
INFO - 2019-12-31 08:07:59 --> Router Class Initialized
INFO - 2019-12-31 08:07:59 --> Output Class Initialized
INFO - 2019-12-31 08:07:59 --> Security Class Initialized
DEBUG - 2019-12-31 08:07:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 08:07:59 --> Input Class Initialized
INFO - 2019-12-31 08:07:59 --> Language Class Initialized
ERROR - 2019-12-31 08:07:59 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 10:44:18 --> Config Class Initialized
INFO - 2019-12-31 10:44:18 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:44:18 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:44:18 --> Utf8 Class Initialized
INFO - 2019-12-31 10:44:18 --> URI Class Initialized
DEBUG - 2019-12-31 10:44:18 --> No URI present. Default controller set.
INFO - 2019-12-31 10:44:18 --> Router Class Initialized
INFO - 2019-12-31 10:44:18 --> Output Class Initialized
INFO - 2019-12-31 10:44:18 --> Security Class Initialized
DEBUG - 2019-12-31 10:44:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:44:18 --> Input Class Initialized
INFO - 2019-12-31 10:44:18 --> Language Class Initialized
INFO - 2019-12-31 10:44:18 --> Loader Class Initialized
INFO - 2019-12-31 10:44:18 --> Helper loaded: html_helper
INFO - 2019-12-31 10:44:18 --> Helper loaded: url_helper
INFO - 2019-12-31 10:44:18 --> Helper loaded: form_helper
INFO - 2019-12-31 10:44:18 --> Database Driver Class Initialized
INFO - 2019-12-31 10:44:18 --> Form Validation Class Initialized
DEBUG - 2019-12-31 10:44:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 10:44:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 10:44:18 --> Encryption Class Initialized
DEBUG - 2019-12-31 10:44:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 10:44:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 10:44:18 --> Controller Class Initialized
INFO - 2019-12-31 10:44:18 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-31 10:44:18 --> Final output sent to browser
DEBUG - 2019-12-31 10:44:18 --> Total execution time: 0.0524
INFO - 2019-12-31 10:44:19 --> Config Class Initialized
INFO - 2019-12-31 10:44:19 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:44:19 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:44:19 --> Utf8 Class Initialized
INFO - 2019-12-31 10:44:19 --> URI Class Initialized
DEBUG - 2019-12-31 10:44:19 --> No URI present. Default controller set.
INFO - 2019-12-31 10:44:19 --> Router Class Initialized
INFO - 2019-12-31 10:44:19 --> Output Class Initialized
INFO - 2019-12-31 10:44:19 --> Security Class Initialized
DEBUG - 2019-12-31 10:44:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:44:19 --> Input Class Initialized
INFO - 2019-12-31 10:44:19 --> Language Class Initialized
INFO - 2019-12-31 10:44:19 --> Loader Class Initialized
INFO - 2019-12-31 10:44:19 --> Helper loaded: html_helper
INFO - 2019-12-31 10:44:19 --> Helper loaded: url_helper
INFO - 2019-12-31 10:44:19 --> Helper loaded: form_helper
INFO - 2019-12-31 10:44:19 --> Database Driver Class Initialized
INFO - 2019-12-31 10:44:19 --> Form Validation Class Initialized
DEBUG - 2019-12-31 10:44:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 10:44:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 10:44:19 --> Encryption Class Initialized
DEBUG - 2019-12-31 10:44:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 10:44:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 10:44:19 --> Controller Class Initialized
INFO - 2019-12-31 10:44:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-31 10:44:19 --> Final output sent to browser
DEBUG - 2019-12-31 10:44:19 --> Total execution time: 0.0523
INFO - 2019-12-31 10:44:23 --> Config Class Initialized
INFO - 2019-12-31 10:44:23 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:44:23 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:44:23 --> Utf8 Class Initialized
INFO - 2019-12-31 10:44:23 --> URI Class Initialized
INFO - 2019-12-31 10:44:23 --> Router Class Initialized
INFO - 2019-12-31 10:44:23 --> Output Class Initialized
INFO - 2019-12-31 10:44:23 --> Security Class Initialized
DEBUG - 2019-12-31 10:44:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:44:23 --> Input Class Initialized
INFO - 2019-12-31 10:44:23 --> Language Class Initialized
INFO - 2019-12-31 10:44:23 --> Loader Class Initialized
INFO - 2019-12-31 10:44:23 --> Helper loaded: html_helper
INFO - 2019-12-31 10:44:23 --> Helper loaded: url_helper
INFO - 2019-12-31 10:44:23 --> Helper loaded: form_helper
INFO - 2019-12-31 10:44:23 --> Database Driver Class Initialized
INFO - 2019-12-31 10:44:23 --> Form Validation Class Initialized
DEBUG - 2019-12-31 10:44:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 10:44:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 10:44:23 --> Encryption Class Initialized
DEBUG - 2019-12-31 10:44:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 10:44:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 10:44:23 --> Controller Class Initialized
INFO - 2019-12-31 10:44:23 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-31 10:44:23 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 10:44:23 --> getAuth method got called...
DEBUG - 2019-12-31 10:44:23 --> Username :- DevOss
INFO - 2019-12-31 10:44:23 --> this is db user...
DEBUG - 2019-12-31 10:44:23 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-31 10:44:24 --> Password hashing output = $2y$10$pfyxB.2wYNb2mnIq0AVe2e8KcDXWNaK5MyobLwTRIwrMKzR.AWIjW
DEBUG - 2019-12-31 10:44:24 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
DEBUG - 2019-12-31 10:44:24 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2019-12-31 10:44:24 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-31 10:44:24 --> Role Retrive from DB
INFO - 2019-12-31 10:44:24 --> get_group_role_mapping model = 16
DEBUG - 2019-12-31 10:44:24 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-31 10:44:24 --> loading model Active_Session
INFO - 2019-12-31 10:44:24 --> Model "Active_Session" initialized
DEBUG - 2019-12-31 10:44:24 --> calling insert_active_session()
DEBUG - 2019-12-31 10:44:24 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-31 10:44:24 --> insert success
DEBUG - 2019-12-31 10:44:24 --> loading Configarable_Login model...
INFO - 2019-12-31 10:44:24 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-31 10:44:24 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-31 10:44:24 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-31 10:44:24 --> Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 10:44:24 --> loading configurable menu with result=Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 10:44:24 --> loading view public\Dashboard
INFO - 2019-12-31 10:44:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-31 10:44:24 --> Final output sent to browser
DEBUG - 2019-12-31 10:44:24 --> Total execution time: 0.2990
INFO - 2019-12-31 10:44:33 --> Config Class Initialized
INFO - 2019-12-31 10:44:33 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:44:33 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:44:33 --> Utf8 Class Initialized
INFO - 2019-12-31 10:44:33 --> URI Class Initialized
INFO - 2019-12-31 10:44:33 --> Router Class Initialized
INFO - 2019-12-31 10:44:33 --> Output Class Initialized
INFO - 2019-12-31 10:44:33 --> Security Class Initialized
DEBUG - 2019-12-31 10:44:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:44:33 --> Input Class Initialized
INFO - 2019-12-31 10:44:33 --> Language Class Initialized
INFO - 2019-12-31 10:44:33 --> Loader Class Initialized
INFO - 2019-12-31 10:44:33 --> Helper loaded: html_helper
INFO - 2019-12-31 10:44:33 --> Helper loaded: url_helper
INFO - 2019-12-31 10:44:33 --> Helper loaded: form_helper
INFO - 2019-12-31 10:44:33 --> Database Driver Class Initialized
INFO - 2019-12-31 10:44:33 --> Form Validation Class Initialized
DEBUG - 2019-12-31 10:44:33 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 10:44:33 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 10:44:33 --> Encryption Class Initialized
DEBUG - 2019-12-31 10:44:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 10:44:33 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 10:44:33 --> Controller Class Initialized
INFO - 2019-12-31 10:44:33 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-31 10:44:33 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 10:44:33 --> getAuth method got called...
DEBUG - 2019-12-31 10:44:33 --> Username :- DevOss
INFO - 2019-12-31 10:44:33 --> this is db user...
DEBUG - 2019-12-31 10:44:33 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-31 10:44:33 --> Password hashing output = $2y$10$in3TxtJlsn9MRNrpK.jUG.ZWIsgF2nkcjfxJZeqorsXKdqeklM0NC
DEBUG - 2019-12-31 10:44:33 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
DEBUG - 2019-12-31 10:44:33 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2019-12-31 10:44:33 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-31 10:44:33 --> Role Retrive from DB
INFO - 2019-12-31 10:44:33 --> get_group_role_mapping model = 16
DEBUG - 2019-12-31 10:44:33 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-31 10:44:33 --> loading model Active_Session
INFO - 2019-12-31 10:44:33 --> Model "Active_Session" initialized
DEBUG - 2019-12-31 10:44:33 --> calling insert_active_session()
DEBUG - 2019-12-31 10:44:33 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-31 10:44:33 --> insert success
DEBUG - 2019-12-31 10:44:33 --> loading Configarable_Login model...
INFO - 2019-12-31 10:44:33 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-31 10:44:33 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-31 10:44:33 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-31 10:44:33 --> Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 10:44:33 --> loading configurable menu with result=Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 10:44:33 --> loading view public\Dashboard
INFO - 2019-12-31 10:44:33 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-31 10:44:33 --> Final output sent to browser
DEBUG - 2019-12-31 10:44:33 --> Total execution time: 0.2984
INFO - 2019-12-31 10:44:43 --> Config Class Initialized
INFO - 2019-12-31 10:44:43 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:44:43 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:44:43 --> Utf8 Class Initialized
INFO - 2019-12-31 10:44:43 --> URI Class Initialized
INFO - 2019-12-31 10:44:43 --> Router Class Initialized
INFO - 2019-12-31 10:44:43 --> Output Class Initialized
INFO - 2019-12-31 10:44:43 --> Security Class Initialized
DEBUG - 2019-12-31 10:44:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:44:43 --> Input Class Initialized
INFO - 2019-12-31 10:44:43 --> Language Class Initialized
ERROR - 2019-12-31 10:44:43 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 10:46:37 --> Config Class Initialized
INFO - 2019-12-31 10:46:37 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:46:37 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:46:37 --> Utf8 Class Initialized
INFO - 2019-12-31 10:46:37 --> URI Class Initialized
INFO - 2019-12-31 10:46:37 --> Router Class Initialized
INFO - 2019-12-31 10:46:37 --> Output Class Initialized
INFO - 2019-12-31 10:46:37 --> Security Class Initialized
DEBUG - 2019-12-31 10:46:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:46:37 --> Input Class Initialized
INFO - 2019-12-31 10:46:37 --> Language Class Initialized
ERROR - 2019-12-31 10:46:37 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 10:46:40 --> Config Class Initialized
INFO - 2019-12-31 10:46:40 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:46:40 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:46:40 --> Utf8 Class Initialized
INFO - 2019-12-31 10:46:40 --> URI Class Initialized
INFO - 2019-12-31 10:46:40 --> Router Class Initialized
INFO - 2019-12-31 10:46:40 --> Output Class Initialized
INFO - 2019-12-31 10:46:40 --> Security Class Initialized
DEBUG - 2019-12-31 10:46:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:46:40 --> Input Class Initialized
INFO - 2019-12-31 10:46:40 --> Language Class Initialized
ERROR - 2019-12-31 10:46:40 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\oneoss\application\controllers\user\Change_Password.php 87
INFO - 2019-12-31 10:57:00 --> Config Class Initialized
INFO - 2019-12-31 10:57:00 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:57:00 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:57:00 --> Utf8 Class Initialized
INFO - 2019-12-31 10:57:00 --> URI Class Initialized
INFO - 2019-12-31 10:57:00 --> Router Class Initialized
INFO - 2019-12-31 10:57:00 --> Output Class Initialized
INFO - 2019-12-31 10:57:00 --> Security Class Initialized
DEBUG - 2019-12-31 10:57:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:57:00 --> Input Class Initialized
INFO - 2019-12-31 10:57:00 --> Language Class Initialized
ERROR - 2019-12-31 10:57:00 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 10:57:30 --> Config Class Initialized
INFO - 2019-12-31 10:57:30 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:57:30 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:57:30 --> Utf8 Class Initialized
INFO - 2019-12-31 10:57:30 --> URI Class Initialized
INFO - 2019-12-31 10:57:30 --> Router Class Initialized
INFO - 2019-12-31 10:57:30 --> Output Class Initialized
INFO - 2019-12-31 10:57:30 --> Security Class Initialized
DEBUG - 2019-12-31 10:57:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:57:30 --> Input Class Initialized
INFO - 2019-12-31 10:57:30 --> Language Class Initialized
INFO - 2019-12-31 10:57:30 --> Loader Class Initialized
INFO - 2019-12-31 10:57:30 --> Helper loaded: html_helper
INFO - 2019-12-31 10:57:30 --> Helper loaded: url_helper
INFO - 2019-12-31 10:57:30 --> Helper loaded: form_helper
INFO - 2019-12-31 10:57:30 --> Database Driver Class Initialized
INFO - 2019-12-31 10:57:30 --> Form Validation Class Initialized
DEBUG - 2019-12-31 10:57:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 10:57:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 10:57:30 --> Encryption Class Initialized
DEBUG - 2019-12-31 10:57:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 10:57:30 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 10:57:30 --> Controller Class Initialized
DEBUG - 2019-12-31 10:57:30 --> calling constructor page Change_password
DEBUG - 2019-12-31 10:57:30 --> calling user access block = 52
DEBUG - 2019-12-31 10:57:30 --> index page Change_password
DEBUG - 2019-12-31 10:57:30 --> public/User/change_password
INFO - 2019-12-31 10:57:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-31 10:57:30 --> Final output sent to browser
DEBUG - 2019-12-31 10:57:30 --> Total execution time: 0.0595
INFO - 2019-12-31 10:57:33 --> Config Class Initialized
INFO - 2019-12-31 10:57:33 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:57:33 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:57:33 --> Utf8 Class Initialized
INFO - 2019-12-31 10:57:33 --> URI Class Initialized
INFO - 2019-12-31 10:57:33 --> Router Class Initialized
INFO - 2019-12-31 10:57:33 --> Output Class Initialized
INFO - 2019-12-31 10:57:33 --> Security Class Initialized
DEBUG - 2019-12-31 10:57:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:57:33 --> Input Class Initialized
INFO - 2019-12-31 10:57:33 --> Language Class Initialized
INFO - 2019-12-31 10:57:33 --> Loader Class Initialized
INFO - 2019-12-31 10:57:33 --> Helper loaded: html_helper
INFO - 2019-12-31 10:57:33 --> Helper loaded: url_helper
INFO - 2019-12-31 10:57:33 --> Helper loaded: form_helper
INFO - 2019-12-31 10:57:33 --> Database Driver Class Initialized
INFO - 2019-12-31 10:57:33 --> Form Validation Class Initialized
DEBUG - 2019-12-31 10:57:33 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 10:57:33 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 10:57:33 --> Encryption Class Initialized
DEBUG - 2019-12-31 10:57:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 10:57:33 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 10:57:33 --> Controller Class Initialized
DEBUG - 2019-12-31 10:57:33 --> calling constructor page Change_password
DEBUG - 2019-12-31 10:57:33 --> calling user access block = 52
DEBUG - 2019-12-31 10:57:33 --> index page Change_password
DEBUG - 2019-12-31 10:57:33 --> public/User/change_password
INFO - 2019-12-31 10:57:33 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-31 10:57:33 --> Final output sent to browser
DEBUG - 2019-12-31 10:57:33 --> Total execution time: 0.0565
INFO - 2019-12-31 10:57:58 --> Config Class Initialized
INFO - 2019-12-31 10:57:58 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:57:58 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:57:58 --> Utf8 Class Initialized
INFO - 2019-12-31 10:57:58 --> URI Class Initialized
INFO - 2019-12-31 10:57:58 --> Router Class Initialized
INFO - 2019-12-31 10:57:58 --> Output Class Initialized
INFO - 2019-12-31 10:57:58 --> Security Class Initialized
DEBUG - 2019-12-31 10:57:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:57:58 --> Input Class Initialized
INFO - 2019-12-31 10:57:58 --> Language Class Initialized
INFO - 2019-12-31 10:57:58 --> Loader Class Initialized
INFO - 2019-12-31 10:57:58 --> Helper loaded: html_helper
INFO - 2019-12-31 10:57:58 --> Helper loaded: url_helper
INFO - 2019-12-31 10:57:58 --> Helper loaded: form_helper
INFO - 2019-12-31 10:57:58 --> Database Driver Class Initialized
INFO - 2019-12-31 10:57:58 --> Form Validation Class Initialized
DEBUG - 2019-12-31 10:57:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 10:57:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 10:57:58 --> Encryption Class Initialized
DEBUG - 2019-12-31 10:57:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 10:57:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 10:57:58 --> Controller Class Initialized
DEBUG - 2019-12-31 10:57:58 --> calling constructor page Change_password
DEBUG - 2019-12-31 10:57:58 --> calling user access block = 52
DEBUG - 2019-12-31 10:57:58 --> index page Change_password
DEBUG - 2019-12-31 10:57:58 --> public/User/change_password
INFO - 2019-12-31 10:57:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2019-12-31 10:57:58 --> Final output sent to browser
DEBUG - 2019-12-31 10:57:58 --> Total execution time: 0.0587
INFO - 2019-12-31 10:58:33 --> Config Class Initialized
INFO - 2019-12-31 10:58:33 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:58:33 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:58:33 --> Utf8 Class Initialized
INFO - 2019-12-31 10:58:33 --> URI Class Initialized
INFO - 2019-12-31 10:58:33 --> Router Class Initialized
INFO - 2019-12-31 10:58:33 --> Output Class Initialized
INFO - 2019-12-31 10:58:33 --> Security Class Initialized
DEBUG - 2019-12-31 10:58:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:58:33 --> Input Class Initialized
INFO - 2019-12-31 10:58:33 --> Language Class Initialized
ERROR - 2019-12-31 10:58:33 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 10:58:34 --> Config Class Initialized
INFO - 2019-12-31 10:58:34 --> Hooks Class Initialized
DEBUG - 2019-12-31 10:58:34 --> UTF-8 Support Enabled
INFO - 2019-12-31 10:58:34 --> Utf8 Class Initialized
INFO - 2019-12-31 10:58:34 --> URI Class Initialized
INFO - 2019-12-31 10:58:34 --> Router Class Initialized
INFO - 2019-12-31 10:58:34 --> Output Class Initialized
INFO - 2019-12-31 10:58:34 --> Security Class Initialized
DEBUG - 2019-12-31 10:58:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 10:58:34 --> Input Class Initialized
INFO - 2019-12-31 10:58:34 --> Language Class Initialized
ERROR - 2019-12-31 10:58:34 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 252
INFO - 2019-12-31 11:12:33 --> Config Class Initialized
INFO - 2019-12-31 11:12:33 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:12:33 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:12:33 --> Utf8 Class Initialized
INFO - 2019-12-31 11:12:33 --> URI Class Initialized
INFO - 2019-12-31 11:12:33 --> Router Class Initialized
INFO - 2019-12-31 11:12:33 --> Output Class Initialized
INFO - 2019-12-31 11:12:33 --> Security Class Initialized
DEBUG - 2019-12-31 11:12:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:12:33 --> Input Class Initialized
INFO - 2019-12-31 11:12:33 --> Language Class Initialized
ERROR - 2019-12-31 11:12:33 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 11:12:35 --> Config Class Initialized
INFO - 2019-12-31 11:12:35 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:12:35 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:12:35 --> Utf8 Class Initialized
INFO - 2019-12-31 11:12:35 --> URI Class Initialized
INFO - 2019-12-31 11:12:35 --> Router Class Initialized
INFO - 2019-12-31 11:12:35 --> Output Class Initialized
INFO - 2019-12-31 11:12:35 --> Security Class Initialized
DEBUG - 2019-12-31 11:12:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:12:35 --> Input Class Initialized
INFO - 2019-12-31 11:12:35 --> Language Class Initialized
ERROR - 2019-12-31 11:12:35 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 11:12:36 --> Config Class Initialized
INFO - 2019-12-31 11:12:36 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:12:36 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:12:36 --> Utf8 Class Initialized
INFO - 2019-12-31 11:12:36 --> URI Class Initialized
INFO - 2019-12-31 11:12:36 --> Router Class Initialized
INFO - 2019-12-31 11:12:36 --> Output Class Initialized
INFO - 2019-12-31 11:12:36 --> Security Class Initialized
DEBUG - 2019-12-31 11:12:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:12:36 --> Input Class Initialized
INFO - 2019-12-31 11:12:36 --> Language Class Initialized
ERROR - 2019-12-31 11:12:36 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 11:53:58 --> Config Class Initialized
INFO - 2019-12-31 11:53:58 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:53:58 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:53:58 --> Utf8 Class Initialized
INFO - 2019-12-31 11:53:58 --> URI Class Initialized
INFO - 2019-12-31 11:53:58 --> Router Class Initialized
INFO - 2019-12-31 11:53:58 --> Output Class Initialized
INFO - 2019-12-31 11:53:58 --> Security Class Initialized
DEBUG - 2019-12-31 11:53:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:53:58 --> Input Class Initialized
INFO - 2019-12-31 11:53:58 --> Language Class Initialized
ERROR - 2019-12-31 11:53:58 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 11:57:14 --> Config Class Initialized
INFO - 2019-12-31 11:57:14 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:57:14 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:57:14 --> Utf8 Class Initialized
INFO - 2019-12-31 11:57:14 --> URI Class Initialized
INFO - 2019-12-31 11:57:14 --> Router Class Initialized
INFO - 2019-12-31 11:57:14 --> Output Class Initialized
INFO - 2019-12-31 11:57:14 --> Security Class Initialized
DEBUG - 2019-12-31 11:57:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:57:14 --> Input Class Initialized
INFO - 2019-12-31 11:57:14 --> Language Class Initialized
ERROR - 2019-12-31 11:57:14 --> 404 Page Not Found: Test1/test_lib
INFO - 2019-12-31 11:57:17 --> Config Class Initialized
INFO - 2019-12-31 11:57:17 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:57:17 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:57:17 --> Utf8 Class Initialized
INFO - 2019-12-31 11:57:17 --> URI Class Initialized
INFO - 2019-12-31 11:57:17 --> Router Class Initialized
INFO - 2019-12-31 11:57:17 --> Output Class Initialized
INFO - 2019-12-31 11:57:17 --> Security Class Initialized
DEBUG - 2019-12-31 11:57:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:57:17 --> Input Class Initialized
INFO - 2019-12-31 11:57:17 --> Language Class Initialized
INFO - 2019-12-31 11:57:17 --> Loader Class Initialized
INFO - 2019-12-31 11:57:17 --> Helper loaded: html_helper
INFO - 2019-12-31 11:57:17 --> Helper loaded: url_helper
INFO - 2019-12-31 11:57:17 --> Helper loaded: form_helper
INFO - 2019-12-31 11:57:17 --> Database Driver Class Initialized
INFO - 2019-12-31 11:57:17 --> Form Validation Class Initialized
DEBUG - 2019-12-31 11:57:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 11:57:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 11:57:17 --> Encryption Class Initialized
DEBUG - 2019-12-31 11:57:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 11:57:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 11:57:17 --> Controller Class Initialized
INFO - 2019-12-31 11:57:17 --> Final output sent to browser
DEBUG - 2019-12-31 11:57:17 --> Total execution time: 0.0659
INFO - 2019-12-31 11:58:06 --> Config Class Initialized
INFO - 2019-12-31 11:58:06 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:58:06 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:58:06 --> Utf8 Class Initialized
INFO - 2019-12-31 11:58:06 --> URI Class Initialized
INFO - 2019-12-31 11:58:06 --> Router Class Initialized
INFO - 2019-12-31 11:58:06 --> Output Class Initialized
INFO - 2019-12-31 11:58:06 --> Security Class Initialized
DEBUG - 2019-12-31 11:58:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:58:06 --> Input Class Initialized
INFO - 2019-12-31 11:58:06 --> Language Class Initialized
ERROR - 2019-12-31 11:58:06 --> 404 Page Not Found: Test_lib/index
INFO - 2019-12-31 11:58:15 --> Config Class Initialized
INFO - 2019-12-31 11:58:15 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:58:15 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:58:15 --> Utf8 Class Initialized
INFO - 2019-12-31 11:58:15 --> URI Class Initialized
INFO - 2019-12-31 11:58:15 --> Router Class Initialized
INFO - 2019-12-31 11:58:15 --> Output Class Initialized
INFO - 2019-12-31 11:58:15 --> Security Class Initialized
DEBUG - 2019-12-31 11:58:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:58:15 --> Input Class Initialized
INFO - 2019-12-31 11:58:15 --> Language Class Initialized
ERROR - 2019-12-31 11:58:15 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 11:59:01 --> Config Class Initialized
INFO - 2019-12-31 11:59:01 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:59:01 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:59:01 --> Utf8 Class Initialized
INFO - 2019-12-31 11:59:01 --> URI Class Initialized
INFO - 2019-12-31 11:59:01 --> Router Class Initialized
INFO - 2019-12-31 11:59:01 --> Output Class Initialized
INFO - 2019-12-31 11:59:01 --> Security Class Initialized
DEBUG - 2019-12-31 11:59:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:59:01 --> Input Class Initialized
INFO - 2019-12-31 11:59:01 --> Language Class Initialized
ERROR - 2019-12-31 11:59:01 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 11:59:02 --> Config Class Initialized
INFO - 2019-12-31 11:59:02 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:59:02 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:59:02 --> Utf8 Class Initialized
INFO - 2019-12-31 11:59:02 --> URI Class Initialized
INFO - 2019-12-31 11:59:02 --> Router Class Initialized
INFO - 2019-12-31 11:59:02 --> Output Class Initialized
INFO - 2019-12-31 11:59:02 --> Security Class Initialized
DEBUG - 2019-12-31 11:59:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:59:02 --> Input Class Initialized
INFO - 2019-12-31 11:59:02 --> Language Class Initialized
ERROR - 2019-12-31 11:59:02 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 11:59:03 --> Config Class Initialized
INFO - 2019-12-31 11:59:03 --> Hooks Class Initialized
DEBUG - 2019-12-31 11:59:03 --> UTF-8 Support Enabled
INFO - 2019-12-31 11:59:03 --> Utf8 Class Initialized
INFO - 2019-12-31 11:59:03 --> URI Class Initialized
INFO - 2019-12-31 11:59:03 --> Router Class Initialized
INFO - 2019-12-31 11:59:03 --> Output Class Initialized
INFO - 2019-12-31 11:59:03 --> Security Class Initialized
DEBUG - 2019-12-31 11:59:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 11:59:03 --> Input Class Initialized
INFO - 2019-12-31 11:59:03 --> Language Class Initialized
ERROR - 2019-12-31 11:59:03 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:03:43 --> Config Class Initialized
INFO - 2019-12-31 12:03:43 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:03:43 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:03:43 --> Utf8 Class Initialized
INFO - 2019-12-31 12:03:43 --> URI Class Initialized
INFO - 2019-12-31 12:03:43 --> Router Class Initialized
INFO - 2019-12-31 12:03:43 --> Output Class Initialized
INFO - 2019-12-31 12:03:43 --> Security Class Initialized
DEBUG - 2019-12-31 12:03:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:03:43 --> Input Class Initialized
INFO - 2019-12-31 12:03:43 --> Language Class Initialized
ERROR - 2019-12-31 12:03:43 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:03:59 --> Config Class Initialized
INFO - 2019-12-31 12:03:59 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:03:59 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:03:59 --> Utf8 Class Initialized
INFO - 2019-12-31 12:03:59 --> URI Class Initialized
INFO - 2019-12-31 12:03:59 --> Router Class Initialized
INFO - 2019-12-31 12:03:59 --> Output Class Initialized
INFO - 2019-12-31 12:03:59 --> Security Class Initialized
DEBUG - 2019-12-31 12:03:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:03:59 --> Input Class Initialized
INFO - 2019-12-31 12:03:59 --> Language Class Initialized
ERROR - 2019-12-31 12:03:59 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:04:17 --> Config Class Initialized
INFO - 2019-12-31 12:04:17 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:04:17 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:04:17 --> Utf8 Class Initialized
INFO - 2019-12-31 12:04:17 --> URI Class Initialized
INFO - 2019-12-31 12:04:17 --> Router Class Initialized
INFO - 2019-12-31 12:04:17 --> Output Class Initialized
INFO - 2019-12-31 12:04:17 --> Security Class Initialized
DEBUG - 2019-12-31 12:04:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:04:17 --> Input Class Initialized
INFO - 2019-12-31 12:04:17 --> Language Class Initialized
ERROR - 2019-12-31 12:04:17 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:04:18 --> Config Class Initialized
INFO - 2019-12-31 12:04:18 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:04:18 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:04:18 --> Utf8 Class Initialized
INFO - 2019-12-31 12:04:18 --> URI Class Initialized
INFO - 2019-12-31 12:04:18 --> Router Class Initialized
INFO - 2019-12-31 12:04:18 --> Output Class Initialized
INFO - 2019-12-31 12:04:18 --> Security Class Initialized
DEBUG - 2019-12-31 12:04:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:04:18 --> Input Class Initialized
INFO - 2019-12-31 12:04:18 --> Language Class Initialized
ERROR - 2019-12-31 12:04:18 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:04:19 --> Config Class Initialized
INFO - 2019-12-31 12:04:19 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:04:19 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:04:19 --> Utf8 Class Initialized
INFO - 2019-12-31 12:04:19 --> URI Class Initialized
INFO - 2019-12-31 12:04:19 --> Router Class Initialized
INFO - 2019-12-31 12:04:19 --> Output Class Initialized
INFO - 2019-12-31 12:04:19 --> Security Class Initialized
DEBUG - 2019-12-31 12:04:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:04:19 --> Input Class Initialized
INFO - 2019-12-31 12:04:19 --> Language Class Initialized
ERROR - 2019-12-31 12:04:19 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:04:19 --> Config Class Initialized
INFO - 2019-12-31 12:04:19 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:04:19 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:04:19 --> Utf8 Class Initialized
INFO - 2019-12-31 12:04:19 --> URI Class Initialized
INFO - 2019-12-31 12:04:19 --> Router Class Initialized
INFO - 2019-12-31 12:04:19 --> Output Class Initialized
INFO - 2019-12-31 12:04:19 --> Security Class Initialized
DEBUG - 2019-12-31 12:04:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:04:19 --> Input Class Initialized
INFO - 2019-12-31 12:04:19 --> Language Class Initialized
ERROR - 2019-12-31 12:04:19 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:04:51 --> Config Class Initialized
INFO - 2019-12-31 12:04:51 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:04:51 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:04:51 --> Utf8 Class Initialized
INFO - 2019-12-31 12:04:51 --> URI Class Initialized
INFO - 2019-12-31 12:04:51 --> Router Class Initialized
INFO - 2019-12-31 12:04:51 --> Output Class Initialized
INFO - 2019-12-31 12:04:51 --> Security Class Initialized
DEBUG - 2019-12-31 12:04:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:04:51 --> Input Class Initialized
INFO - 2019-12-31 12:04:51 --> Language Class Initialized
ERROR - 2019-12-31 12:04:51 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:05:24 --> Config Class Initialized
INFO - 2019-12-31 12:05:24 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:05:24 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:05:24 --> Utf8 Class Initialized
INFO - 2019-12-31 12:05:24 --> URI Class Initialized
INFO - 2019-12-31 12:05:24 --> Router Class Initialized
INFO - 2019-12-31 12:05:24 --> Output Class Initialized
INFO - 2019-12-31 12:05:24 --> Security Class Initialized
DEBUG - 2019-12-31 12:05:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:05:24 --> Input Class Initialized
INFO - 2019-12-31 12:05:24 --> Language Class Initialized
ERROR - 2019-12-31 12:05:24 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:05:25 --> Config Class Initialized
INFO - 2019-12-31 12:05:25 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:05:25 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:05:25 --> Utf8 Class Initialized
INFO - 2019-12-31 12:05:25 --> URI Class Initialized
INFO - 2019-12-31 12:05:25 --> Router Class Initialized
INFO - 2019-12-31 12:05:25 --> Output Class Initialized
INFO - 2019-12-31 12:05:25 --> Security Class Initialized
DEBUG - 2019-12-31 12:05:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:05:25 --> Input Class Initialized
INFO - 2019-12-31 12:05:25 --> Language Class Initialized
ERROR - 2019-12-31 12:05:25 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:05:26 --> Config Class Initialized
INFO - 2019-12-31 12:05:26 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:05:26 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:05:26 --> Utf8 Class Initialized
INFO - 2019-12-31 12:05:26 --> URI Class Initialized
INFO - 2019-12-31 12:05:26 --> Router Class Initialized
INFO - 2019-12-31 12:05:26 --> Output Class Initialized
INFO - 2019-12-31 12:05:26 --> Security Class Initialized
DEBUG - 2019-12-31 12:05:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:05:26 --> Input Class Initialized
INFO - 2019-12-31 12:05:26 --> Language Class Initialized
ERROR - 2019-12-31 12:05:26 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:05:26 --> Config Class Initialized
INFO - 2019-12-31 12:05:26 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:05:26 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:05:26 --> Utf8 Class Initialized
INFO - 2019-12-31 12:05:26 --> URI Class Initialized
INFO - 2019-12-31 12:05:26 --> Router Class Initialized
INFO - 2019-12-31 12:05:26 --> Output Class Initialized
INFO - 2019-12-31 12:05:26 --> Security Class Initialized
DEBUG - 2019-12-31 12:05:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:05:26 --> Input Class Initialized
INFO - 2019-12-31 12:05:26 --> Language Class Initialized
ERROR - 2019-12-31 12:05:26 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:05:26 --> Config Class Initialized
INFO - 2019-12-31 12:05:26 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:05:26 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:05:26 --> Utf8 Class Initialized
INFO - 2019-12-31 12:05:26 --> URI Class Initialized
INFO - 2019-12-31 12:05:26 --> Router Class Initialized
INFO - 2019-12-31 12:05:26 --> Output Class Initialized
INFO - 2019-12-31 12:05:26 --> Security Class Initialized
DEBUG - 2019-12-31 12:05:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:05:26 --> Input Class Initialized
INFO - 2019-12-31 12:05:26 --> Language Class Initialized
ERROR - 2019-12-31 12:05:26 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:06:02 --> Config Class Initialized
INFO - 2019-12-31 12:06:02 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:06:02 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:06:02 --> Utf8 Class Initialized
INFO - 2019-12-31 12:06:02 --> URI Class Initialized
INFO - 2019-12-31 12:06:02 --> Router Class Initialized
INFO - 2019-12-31 12:06:02 --> Output Class Initialized
INFO - 2019-12-31 12:06:02 --> Security Class Initialized
DEBUG - 2019-12-31 12:06:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:06:02 --> Input Class Initialized
INFO - 2019-12-31 12:06:02 --> Language Class Initialized
ERROR - 2019-12-31 12:06:02 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:06:54 --> Config Class Initialized
INFO - 2019-12-31 12:06:54 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:06:54 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:06:54 --> Utf8 Class Initialized
INFO - 2019-12-31 12:06:54 --> URI Class Initialized
INFO - 2019-12-31 12:06:54 --> Router Class Initialized
INFO - 2019-12-31 12:06:54 --> Output Class Initialized
INFO - 2019-12-31 12:06:54 --> Security Class Initialized
DEBUG - 2019-12-31 12:06:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:06:54 --> Input Class Initialized
INFO - 2019-12-31 12:06:54 --> Language Class Initialized
ERROR - 2019-12-31 12:06:54 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\test1.php 28
INFO - 2019-12-31 12:09:57 --> Config Class Initialized
INFO - 2019-12-31 12:09:57 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:09:57 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:09:57 --> Utf8 Class Initialized
INFO - 2019-12-31 12:09:57 --> URI Class Initialized
INFO - 2019-12-31 12:09:57 --> Router Class Initialized
INFO - 2019-12-31 12:09:57 --> Output Class Initialized
INFO - 2019-12-31 12:09:57 --> Security Class Initialized
DEBUG - 2019-12-31 12:09:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:09:57 --> Input Class Initialized
INFO - 2019-12-31 12:09:57 --> Language Class Initialized
INFO - 2019-12-31 12:09:57 --> Loader Class Initialized
INFO - 2019-12-31 12:09:57 --> Helper loaded: html_helper
INFO - 2019-12-31 12:09:57 --> Helper loaded: url_helper
INFO - 2019-12-31 12:09:57 --> Helper loaded: form_helper
INFO - 2019-12-31 12:09:57 --> Database Driver Class Initialized
INFO - 2019-12-31 12:09:57 --> Form Validation Class Initialized
DEBUG - 2019-12-31 12:09:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 12:09:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 12:09:57 --> Encryption Class Initialized
DEBUG - 2019-12-31 12:09:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 12:09:57 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 12:09:57 --> Controller Class Initialized
DEBUG - 2019-12-31 12:09:57 --> Auditlogs class already loaded. Second attempt ignored.
INFO - 2019-12-31 12:09:57 --> Final output sent to browser
DEBUG - 2019-12-31 12:09:57 --> Total execution time: 0.0527
INFO - 2019-12-31 12:13:25 --> Config Class Initialized
INFO - 2019-12-31 12:13:25 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:13:25 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:13:25 --> Utf8 Class Initialized
INFO - 2019-12-31 12:13:25 --> URI Class Initialized
INFO - 2019-12-31 12:13:25 --> Router Class Initialized
INFO - 2019-12-31 12:13:25 --> Output Class Initialized
INFO - 2019-12-31 12:13:25 --> Security Class Initialized
DEBUG - 2019-12-31 12:13:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:13:25 --> Input Class Initialized
INFO - 2019-12-31 12:13:25 --> Language Class Initialized
ERROR - 2019-12-31 12:13:25 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 12:14:15 --> Config Class Initialized
INFO - 2019-12-31 12:14:15 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:14:15 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:14:15 --> Utf8 Class Initialized
INFO - 2019-12-31 12:14:15 --> URI Class Initialized
INFO - 2019-12-31 12:14:15 --> Router Class Initialized
INFO - 2019-12-31 12:14:15 --> Output Class Initialized
INFO - 2019-12-31 12:14:15 --> Security Class Initialized
DEBUG - 2019-12-31 12:14:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:14:15 --> Input Class Initialized
INFO - 2019-12-31 12:14:15 --> Language Class Initialized
ERROR - 2019-12-31 12:14:15 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 12:15:24 --> Config Class Initialized
INFO - 2019-12-31 12:15:24 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:15:24 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:15:24 --> Utf8 Class Initialized
INFO - 2019-12-31 12:15:24 --> URI Class Initialized
INFO - 2019-12-31 12:15:24 --> Router Class Initialized
INFO - 2019-12-31 12:15:24 --> Output Class Initialized
INFO - 2019-12-31 12:15:24 --> Security Class Initialized
DEBUG - 2019-12-31 12:15:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:15:24 --> Input Class Initialized
INFO - 2019-12-31 12:15:24 --> Language Class Initialized
ERROR - 2019-12-31 12:15:24 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 12:19:05 --> Config Class Initialized
INFO - 2019-12-31 12:19:05 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:19:05 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:19:05 --> Utf8 Class Initialized
INFO - 2019-12-31 12:19:05 --> URI Class Initialized
INFO - 2019-12-31 12:19:05 --> Router Class Initialized
INFO - 2019-12-31 12:19:05 --> Output Class Initialized
INFO - 2019-12-31 12:19:05 --> Security Class Initialized
DEBUG - 2019-12-31 12:19:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:19:05 --> Input Class Initialized
INFO - 2019-12-31 12:19:05 --> Language Class Initialized
ERROR - 2019-12-31 12:19:05 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 12:19:06 --> Config Class Initialized
INFO - 2019-12-31 12:19:06 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:19:06 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:19:06 --> Utf8 Class Initialized
INFO - 2019-12-31 12:19:06 --> URI Class Initialized
INFO - 2019-12-31 12:19:06 --> Router Class Initialized
INFO - 2019-12-31 12:19:06 --> Output Class Initialized
INFO - 2019-12-31 12:19:06 --> Security Class Initialized
DEBUG - 2019-12-31 12:19:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:19:06 --> Input Class Initialized
INFO - 2019-12-31 12:19:06 --> Language Class Initialized
ERROR - 2019-12-31 12:19:06 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 12:19:07 --> Config Class Initialized
INFO - 2019-12-31 12:19:07 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:19:07 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:19:07 --> Utf8 Class Initialized
INFO - 2019-12-31 12:19:07 --> URI Class Initialized
INFO - 2019-12-31 12:19:07 --> Router Class Initialized
INFO - 2019-12-31 12:19:07 --> Output Class Initialized
INFO - 2019-12-31 12:19:07 --> Security Class Initialized
DEBUG - 2019-12-31 12:19:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:19:07 --> Input Class Initialized
INFO - 2019-12-31 12:19:07 --> Language Class Initialized
ERROR - 2019-12-31 12:19:07 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 12:19:08 --> Config Class Initialized
INFO - 2019-12-31 12:19:08 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:19:08 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:19:08 --> Utf8 Class Initialized
INFO - 2019-12-31 12:19:08 --> URI Class Initialized
INFO - 2019-12-31 12:19:08 --> Router Class Initialized
INFO - 2019-12-31 12:19:08 --> Output Class Initialized
INFO - 2019-12-31 12:19:08 --> Security Class Initialized
DEBUG - 2019-12-31 12:19:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:19:08 --> Input Class Initialized
INFO - 2019-12-31 12:19:08 --> Language Class Initialized
ERROR - 2019-12-31 12:19:08 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 12:19:08 --> Config Class Initialized
INFO - 2019-12-31 12:19:08 --> Hooks Class Initialized
DEBUG - 2019-12-31 12:19:08 --> UTF-8 Support Enabled
INFO - 2019-12-31 12:19:08 --> Utf8 Class Initialized
INFO - 2019-12-31 12:19:08 --> URI Class Initialized
INFO - 2019-12-31 12:19:08 --> Router Class Initialized
INFO - 2019-12-31 12:19:08 --> Output Class Initialized
INFO - 2019-12-31 12:19:08 --> Security Class Initialized
DEBUG - 2019-12-31 12:19:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 12:19:08 --> Input Class Initialized
INFO - 2019-12-31 12:19:08 --> Language Class Initialized
ERROR - 2019-12-31 12:19:08 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\oneoss\application\controllers\Test.php 250
INFO - 2019-12-31 19:17:46 --> Config Class Initialized
INFO - 2019-12-31 19:17:46 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:17:46 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:17:46 --> Utf8 Class Initialized
INFO - 2019-12-31 19:17:46 --> URI Class Initialized
DEBUG - 2019-12-31 19:17:46 --> No URI present. Default controller set.
INFO - 2019-12-31 19:17:46 --> Router Class Initialized
INFO - 2019-12-31 19:17:46 --> Output Class Initialized
INFO - 2019-12-31 19:17:46 --> Security Class Initialized
DEBUG - 2019-12-31 19:17:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:17:46 --> Input Class Initialized
INFO - 2019-12-31 19:17:46 --> Language Class Initialized
INFO - 2019-12-31 19:17:46 --> Loader Class Initialized
INFO - 2019-12-31 19:17:46 --> Helper loaded: html_helper
INFO - 2019-12-31 19:17:46 --> Helper loaded: url_helper
INFO - 2019-12-31 19:17:46 --> Helper loaded: form_helper
INFO - 2019-12-31 19:17:46 --> Database Driver Class Initialized
INFO - 2019-12-31 19:17:46 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:17:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:17:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:17:46 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:17:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:17:46 --> Session: Class initialized using 'files' driver.
ERROR - 2019-12-31 19:17:46 --> Unable to load the requested class: Auditlogs
INFO - 2019-12-31 19:23:16 --> Config Class Initialized
INFO - 2019-12-31 19:23:16 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:23:16 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:23:16 --> Utf8 Class Initialized
INFO - 2019-12-31 19:23:16 --> URI Class Initialized
DEBUG - 2019-12-31 19:23:16 --> No URI present. Default controller set.
INFO - 2019-12-31 19:23:16 --> Router Class Initialized
INFO - 2019-12-31 19:23:16 --> Output Class Initialized
INFO - 2019-12-31 19:23:16 --> Security Class Initialized
DEBUG - 2019-12-31 19:23:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:23:16 --> Input Class Initialized
INFO - 2019-12-31 19:23:16 --> Language Class Initialized
INFO - 2019-12-31 19:23:16 --> Loader Class Initialized
INFO - 2019-12-31 19:23:16 --> Helper loaded: html_helper
INFO - 2019-12-31 19:23:16 --> Helper loaded: url_helper
INFO - 2019-12-31 19:23:16 --> Helper loaded: form_helper
INFO - 2019-12-31 19:23:16 --> Database Driver Class Initialized
INFO - 2019-12-31 19:23:16 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:23:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:23:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:23:16 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:23:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:23:16 --> Session: Class initialized using 'files' driver.
ERROR - 2019-12-31 19:23:16 --> Unable to load the requested class: Auditlogs
INFO - 2019-12-31 19:23:17 --> Config Class Initialized
INFO - 2019-12-31 19:23:17 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:23:17 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:23:17 --> Utf8 Class Initialized
INFO - 2019-12-31 19:23:17 --> URI Class Initialized
DEBUG - 2019-12-31 19:23:17 --> No URI present. Default controller set.
INFO - 2019-12-31 19:23:17 --> Router Class Initialized
INFO - 2019-12-31 19:23:17 --> Output Class Initialized
INFO - 2019-12-31 19:23:17 --> Security Class Initialized
DEBUG - 2019-12-31 19:23:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:23:17 --> Input Class Initialized
INFO - 2019-12-31 19:23:17 --> Language Class Initialized
INFO - 2019-12-31 19:23:17 --> Loader Class Initialized
INFO - 2019-12-31 19:23:17 --> Helper loaded: html_helper
INFO - 2019-12-31 19:23:17 --> Helper loaded: url_helper
INFO - 2019-12-31 19:23:17 --> Helper loaded: form_helper
INFO - 2019-12-31 19:23:17 --> Database Driver Class Initialized
INFO - 2019-12-31 19:23:17 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:23:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:23:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:23:17 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:23:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:23:18 --> Session: Class initialized using 'files' driver.
ERROR - 2019-12-31 19:23:18 --> Unable to load the requested class: Auditlogs
INFO - 2019-12-31 19:35:01 --> Config Class Initialized
INFO - 2019-12-31 19:35:01 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:35:01 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:35:01 --> Utf8 Class Initialized
INFO - 2019-12-31 19:35:01 --> URI Class Initialized
INFO - 2019-12-31 19:35:01 --> Router Class Initialized
INFO - 2019-12-31 19:35:01 --> Output Class Initialized
INFO - 2019-12-31 19:35:01 --> Security Class Initialized
DEBUG - 2019-12-31 19:35:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:35:01 --> Input Class Initialized
INFO - 2019-12-31 19:35:01 --> Language Class Initialized
INFO - 2019-12-31 19:35:01 --> Loader Class Initialized
INFO - 2019-12-31 19:35:01 --> Helper loaded: html_helper
INFO - 2019-12-31 19:35:01 --> Helper loaded: url_helper
INFO - 2019-12-31 19:35:01 --> Helper loaded: form_helper
INFO - 2019-12-31 19:35:01 --> Database Driver Class Initialized
INFO - 2019-12-31 19:35:01 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:35:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:35:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:35:01 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:35:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:35:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:35:01 --> Controller Class Initialized
INFO - 2019-12-31 19:35:01 --> Final output sent to browser
DEBUG - 2019-12-31 19:35:01 --> Total execution time: 0.2000
INFO - 2019-12-31 19:35:14 --> Config Class Initialized
INFO - 2019-12-31 19:35:14 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:35:14 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:35:14 --> Utf8 Class Initialized
INFO - 2019-12-31 19:35:14 --> URI Class Initialized
INFO - 2019-12-31 19:35:14 --> Router Class Initialized
INFO - 2019-12-31 19:35:14 --> Output Class Initialized
INFO - 2019-12-31 19:35:14 --> Security Class Initialized
DEBUG - 2019-12-31 19:35:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:35:14 --> Input Class Initialized
INFO - 2019-12-31 19:35:14 --> Language Class Initialized
INFO - 2019-12-31 19:35:14 --> Loader Class Initialized
INFO - 2019-12-31 19:35:14 --> Helper loaded: html_helper
INFO - 2019-12-31 19:35:14 --> Helper loaded: url_helper
INFO - 2019-12-31 19:35:14 --> Helper loaded: form_helper
INFO - 2019-12-31 19:35:14 --> Database Driver Class Initialized
INFO - 2019-12-31 19:35:14 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:35:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:35:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:35:14 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:35:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:35:14 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:35:14 --> Controller Class Initialized
ERROR - 2019-12-31 19:35:14 --> Severity: Notice --> Undefined index: USER C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 16
ERROR - 2019-12-31 19:35:14 --> Severity: Notice --> Undefined index: REMOTE_ADDR C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 17
ERROR - 2019-12-31 19:35:14 --> Severity: Notice --> Undefined index: REMOTE_ADDR C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 18
ERROR - 2019-12-31 19:35:14 --> Severity: Notice --> Undefined index: SESSION_ID C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 19
ERROR - 2019-12-31 19:35:14 --> Severity: Notice --> Undefined variable: event_desc C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 25
INFO - 2019-12-31 19:35:14 --> Final output sent to browser
DEBUG - 2019-12-31 19:35:14 --> Total execution time: 0.2300
INFO - 2019-12-31 19:37:08 --> Config Class Initialized
INFO - 2019-12-31 19:37:08 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:37:08 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:37:08 --> Utf8 Class Initialized
INFO - 2019-12-31 19:37:08 --> URI Class Initialized
DEBUG - 2019-12-31 19:37:08 --> No URI present. Default controller set.
INFO - 2019-12-31 19:37:08 --> Router Class Initialized
INFO - 2019-12-31 19:37:08 --> Output Class Initialized
INFO - 2019-12-31 19:37:08 --> Security Class Initialized
DEBUG - 2019-12-31 19:37:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:37:08 --> Input Class Initialized
INFO - 2019-12-31 19:37:08 --> Language Class Initialized
INFO - 2019-12-31 19:37:08 --> Loader Class Initialized
INFO - 2019-12-31 19:37:08 --> Helper loaded: html_helper
INFO - 2019-12-31 19:37:08 --> Helper loaded: url_helper
INFO - 2019-12-31 19:37:08 --> Helper loaded: form_helper
INFO - 2019-12-31 19:37:08 --> Database Driver Class Initialized
INFO - 2019-12-31 19:37:08 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:37:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:37:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:37:08 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:37:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:37:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:37:08 --> Controller Class Initialized
INFO - 2019-12-31 19:37:08 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-31 19:37:08 --> Final output sent to browser
DEBUG - 2019-12-31 19:37:08 --> Total execution time: 0.2800
INFO - 2019-12-31 19:37:18 --> Config Class Initialized
INFO - 2019-12-31 19:37:18 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:37:18 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:37:18 --> Utf8 Class Initialized
INFO - 2019-12-31 19:37:18 --> URI Class Initialized
INFO - 2019-12-31 19:37:18 --> Router Class Initialized
INFO - 2019-12-31 19:37:18 --> Output Class Initialized
INFO - 2019-12-31 19:37:18 --> Security Class Initialized
DEBUG - 2019-12-31 19:37:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:37:18 --> Input Class Initialized
INFO - 2019-12-31 19:37:18 --> Language Class Initialized
INFO - 2019-12-31 19:37:18 --> Loader Class Initialized
INFO - 2019-12-31 19:37:18 --> Helper loaded: html_helper
INFO - 2019-12-31 19:37:18 --> Helper loaded: url_helper
INFO - 2019-12-31 19:37:18 --> Helper loaded: form_helper
INFO - 2019-12-31 19:37:18 --> Database Driver Class Initialized
INFO - 2019-12-31 19:37:19 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:37:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:37:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:37:19 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:37:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:37:19 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:37:19 --> Controller Class Initialized
INFO - 2019-12-31 19:37:19 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-31 19:37:19 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 19:37:19 --> getAuth method got called...
DEBUG - 2019-12-31 19:37:19 --> Username :- DevOss
INFO - 2019-12-31 19:37:19 --> this is db user...
DEBUG - 2019-12-31 19:37:19 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-31 19:37:19 --> Password hashing output = $2y$10$HxoH44H4hM4hSR0SYZzjIO53U6OHeWtSoQxd7Ac5HQVE9xRh9vZ9e
DEBUG - 2019-12-31 19:37:19 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
DEBUG - 2019-12-31 19:37:19 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2019-12-31 19:37:19 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-31 19:37:19 --> Role Retrive from DB
INFO - 2019-12-31 19:37:19 --> get_group_role_mapping model = 16
DEBUG - 2019-12-31 19:37:19 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-31 19:37:19 --> loading model Active_Session
INFO - 2019-12-31 19:37:19 --> Model "Active_Session" initialized
DEBUG - 2019-12-31 19:37:19 --> calling insert_active_session()
DEBUG - 2019-12-31 19:37:19 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-31 19:37:19 --> insert success
DEBUG - 2019-12-31 19:37:19 --> loading Configarable_Login model...
INFO - 2019-12-31 19:37:19 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-31 19:37:19 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-31 19:37:19 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-31 19:37:19 --> Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 19:37:19 --> loading configurable menu with result=Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 19:37:19 --> loading view public\Dashboard
INFO - 2019-12-31 19:37:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-31 19:37:19 --> Final output sent to browser
DEBUG - 2019-12-31 19:37:19 --> Total execution time: 1.3900
INFO - 2019-12-31 19:38:23 --> Config Class Initialized
INFO - 2019-12-31 19:38:23 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:38:23 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:38:23 --> Utf8 Class Initialized
INFO - 2019-12-31 19:38:23 --> URI Class Initialized
INFO - 2019-12-31 19:38:23 --> Router Class Initialized
INFO - 2019-12-31 19:38:23 --> Output Class Initialized
INFO - 2019-12-31 19:38:23 --> Security Class Initialized
DEBUG - 2019-12-31 19:38:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:38:23 --> Input Class Initialized
INFO - 2019-12-31 19:38:23 --> Language Class Initialized
INFO - 2019-12-31 19:38:23 --> Loader Class Initialized
INFO - 2019-12-31 19:38:23 --> Helper loaded: html_helper
INFO - 2019-12-31 19:38:23 --> Helper loaded: url_helper
INFO - 2019-12-31 19:38:23 --> Helper loaded: form_helper
INFO - 2019-12-31 19:38:23 --> Database Driver Class Initialized
INFO - 2019-12-31 19:38:23 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:38:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:38:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:38:23 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:38:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:38:23 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:38:23 --> Controller Class Initialized
ERROR - 2019-12-31 19:38:23 --> Severity: Notice --> Undefined index: USER C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 16
ERROR - 2019-12-31 19:38:23 --> Severity: Notice --> Undefined index: REMOTE_ADDR C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 17
ERROR - 2019-12-31 19:38:23 --> Severity: Notice --> Undefined index: REMOTE_ADDR C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 18
ERROR - 2019-12-31 19:38:23 --> Severity: Notice --> Undefined index: SESSION_ID C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 19
ERROR - 2019-12-31 19:38:23 --> Severity: Notice --> Undefined variable: event_desc C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 25
INFO - 2019-12-31 19:38:23 --> Final output sent to browser
DEBUG - 2019-12-31 19:38:23 --> Total execution time: 0.2525
INFO - 2019-12-31 19:39:45 --> Config Class Initialized
INFO - 2019-12-31 19:39:45 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:39:45 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:39:45 --> Utf8 Class Initialized
INFO - 2019-12-31 19:39:45 --> URI Class Initialized
INFO - 2019-12-31 19:39:45 --> Router Class Initialized
INFO - 2019-12-31 19:39:45 --> Output Class Initialized
INFO - 2019-12-31 19:39:45 --> Security Class Initialized
DEBUG - 2019-12-31 19:39:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:39:45 --> Input Class Initialized
INFO - 2019-12-31 19:39:45 --> Language Class Initialized
INFO - 2019-12-31 19:39:46 --> Loader Class Initialized
INFO - 2019-12-31 19:39:46 --> Helper loaded: html_helper
INFO - 2019-12-31 19:39:46 --> Helper loaded: url_helper
INFO - 2019-12-31 19:39:46 --> Helper loaded: form_helper
INFO - 2019-12-31 19:39:46 --> Database Driver Class Initialized
INFO - 2019-12-31 19:39:46 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:39:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:39:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:39:46 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:39:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:39:46 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:39:46 --> Controller Class Initialized
ERROR - 2019-12-31 19:39:46 --> Severity: Notice --> Undefined index: USER C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 16
ERROR - 2019-12-31 19:39:46 --> Severity: Notice --> Undefined index: REMOTE_ADDR C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 17
ERROR - 2019-12-31 19:39:46 --> Severity: Notice --> Undefined index: REMOTE_ADDR C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 18
ERROR - 2019-12-31 19:39:46 --> Severity: Notice --> Undefined index: SESSION_ID C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 19
ERROR - 2019-12-31 19:39:46 --> Severity: Notice --> Undefined variable: event_desc C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 25
INFO - 2019-12-31 19:39:46 --> Final output sent to browser
DEBUG - 2019-12-31 19:39:46 --> Total execution time: 0.4350
INFO - 2019-12-31 19:47:56 --> Config Class Initialized
INFO - 2019-12-31 19:47:56 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:47:56 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:47:56 --> Utf8 Class Initialized
INFO - 2019-12-31 19:47:56 --> URI Class Initialized
INFO - 2019-12-31 19:47:56 --> Router Class Initialized
INFO - 2019-12-31 19:47:56 --> Output Class Initialized
INFO - 2019-12-31 19:47:56 --> Security Class Initialized
DEBUG - 2019-12-31 19:47:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:47:56 --> Input Class Initialized
INFO - 2019-12-31 19:47:56 --> Language Class Initialized
INFO - 2019-12-31 19:47:56 --> Loader Class Initialized
INFO - 2019-12-31 19:47:56 --> Helper loaded: html_helper
INFO - 2019-12-31 19:47:56 --> Helper loaded: url_helper
INFO - 2019-12-31 19:47:56 --> Helper loaded: form_helper
INFO - 2019-12-31 19:47:56 --> Database Driver Class Initialized
INFO - 2019-12-31 19:47:57 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:47:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:47:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:47:57 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:47:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:47:57 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:47:57 --> Controller Class Initialized
ERROR - 2019-12-31 19:47:57 --> Severity: Notice --> Undefined variable: event_desc C:\xampp\htdocs\oneoss\application\libraries\AuditLogs.php 33
INFO - 2019-12-31 19:47:57 --> Final output sent to browser
DEBUG - 2019-12-31 19:47:57 --> Total execution time: 0.2637
INFO - 2019-12-31 19:48:49 --> Config Class Initialized
INFO - 2019-12-31 19:48:49 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:48:49 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:48:49 --> Utf8 Class Initialized
INFO - 2019-12-31 19:48:49 --> URI Class Initialized
INFO - 2019-12-31 19:48:49 --> Router Class Initialized
INFO - 2019-12-31 19:48:49 --> Output Class Initialized
INFO - 2019-12-31 19:48:49 --> Security Class Initialized
DEBUG - 2019-12-31 19:48:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:48:49 --> Input Class Initialized
INFO - 2019-12-31 19:48:49 --> Language Class Initialized
INFO - 2019-12-31 19:48:49 --> Loader Class Initialized
INFO - 2019-12-31 19:48:49 --> Helper loaded: html_helper
INFO - 2019-12-31 19:48:49 --> Helper loaded: url_helper
INFO - 2019-12-31 19:48:49 --> Helper loaded: form_helper
INFO - 2019-12-31 19:48:49 --> Database Driver Class Initialized
INFO - 2019-12-31 19:48:50 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:48:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:48:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:48:50 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:48:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:48:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:48:50 --> Controller Class Initialized
INFO - 2019-12-31 19:48:50 --> Final output sent to browser
DEBUG - 2019-12-31 19:48:50 --> Total execution time: 0.1825
INFO - 2019-12-31 19:49:21 --> Config Class Initialized
INFO - 2019-12-31 19:49:21 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:49:21 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:49:21 --> Utf8 Class Initialized
INFO - 2019-12-31 19:49:21 --> URI Class Initialized
INFO - 2019-12-31 19:49:21 --> Router Class Initialized
INFO - 2019-12-31 19:49:21 --> Output Class Initialized
INFO - 2019-12-31 19:49:21 --> Security Class Initialized
DEBUG - 2019-12-31 19:49:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:49:21 --> Input Class Initialized
INFO - 2019-12-31 19:49:21 --> Language Class Initialized
INFO - 2019-12-31 19:49:21 --> Loader Class Initialized
INFO - 2019-12-31 19:49:21 --> Helper loaded: html_helper
INFO - 2019-12-31 19:49:21 --> Helper loaded: url_helper
INFO - 2019-12-31 19:49:21 --> Helper loaded: form_helper
INFO - 2019-12-31 19:49:21 --> Database Driver Class Initialized
INFO - 2019-12-31 19:49:21 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:49:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:49:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:49:21 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:49:21 --> Controller Class Initialized
INFO - 2019-12-31 19:49:21 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-31 19:49:21 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 19:49:21 --> getAuth method got called...
DEBUG - 2019-12-31 19:49:21 --> Username :- DevOss
INFO - 2019-12-31 19:49:21 --> this is db user...
DEBUG - 2019-12-31 19:49:21 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-31 19:49:21 --> Password hashing output = $2y$10$dRtl6kqKgid7x95hcv3E7u4y2pNPzd8zPvN.h33IHm5kZho33XGOy
DEBUG - 2019-12-31 19:49:21 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
DEBUG - 2019-12-31 19:49:22 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2019-12-31 19:49:22 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-31 19:49:22 --> Role Retrive from DB
INFO - 2019-12-31 19:49:22 --> get_group_role_mapping model = 16
DEBUG - 2019-12-31 19:49:22 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-31 19:49:22 --> loading model Active_Session
INFO - 2019-12-31 19:49:22 --> Model "Active_Session" initialized
DEBUG - 2019-12-31 19:49:22 --> calling insert_active_session()
DEBUG - 2019-12-31 19:49:22 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-31 19:49:22 --> insert success
DEBUG - 2019-12-31 19:49:22 --> loading Configarable_Login model...
INFO - 2019-12-31 19:49:22 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-31 19:49:22 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-31 19:49:22 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-31 19:49:22 --> Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 19:49:22 --> loading configurable menu with result=Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 19:49:22 --> loading view public\Dashboard
INFO - 2019-12-31 19:49:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-31 19:49:22 --> Final output sent to browser
DEBUG - 2019-12-31 19:49:22 --> Total execution time: 1.2100
INFO - 2019-12-31 19:49:26 --> Config Class Initialized
INFO - 2019-12-31 19:49:26 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:49:26 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:49:26 --> Utf8 Class Initialized
INFO - 2019-12-31 19:49:26 --> URI Class Initialized
INFO - 2019-12-31 19:49:26 --> Router Class Initialized
INFO - 2019-12-31 19:49:26 --> Output Class Initialized
INFO - 2019-12-31 19:49:26 --> Security Class Initialized
DEBUG - 2019-12-31 19:49:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:49:26 --> Input Class Initialized
INFO - 2019-12-31 19:49:26 --> Language Class Initialized
INFO - 2019-12-31 19:49:26 --> Loader Class Initialized
INFO - 2019-12-31 19:49:26 --> Helper loaded: html_helper
INFO - 2019-12-31 19:49:26 --> Helper loaded: url_helper
INFO - 2019-12-31 19:49:26 --> Helper loaded: form_helper
INFO - 2019-12-31 19:49:26 --> Database Driver Class Initialized
INFO - 2019-12-31 19:49:26 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:49:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:49:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:49:26 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:49:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:49:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:49:26 --> Controller Class Initialized
INFO - 2019-12-31 19:49:26 --> Final output sent to browser
DEBUG - 2019-12-31 19:49:26 --> Total execution time: 0.2150
INFO - 2019-12-31 19:53:54 --> Config Class Initialized
INFO - 2019-12-31 19:53:54 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:53:54 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:53:54 --> Utf8 Class Initialized
INFO - 2019-12-31 19:53:54 --> URI Class Initialized
INFO - 2019-12-31 19:53:54 --> Router Class Initialized
INFO - 2019-12-31 19:53:54 --> Output Class Initialized
INFO - 2019-12-31 19:53:54 --> Security Class Initialized
DEBUG - 2019-12-31 19:53:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:53:54 --> Input Class Initialized
INFO - 2019-12-31 19:53:54 --> Language Class Initialized
INFO - 2019-12-31 19:53:54 --> Loader Class Initialized
INFO - 2019-12-31 19:53:54 --> Helper loaded: html_helper
INFO - 2019-12-31 19:53:54 --> Helper loaded: url_helper
INFO - 2019-12-31 19:53:54 --> Helper loaded: form_helper
INFO - 2019-12-31 19:53:54 --> Database Driver Class Initialized
INFO - 2019-12-31 19:53:55 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:53:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:53:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:53:55 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:53:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:53:55 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:53:55 --> Controller Class Initialized
INFO - 2019-12-31 19:53:55 --> Final output sent to browser
DEBUG - 2019-12-31 19:53:55 --> Total execution time: 0.2075
INFO - 2019-12-31 19:53:56 --> Config Class Initialized
INFO - 2019-12-31 19:53:56 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:53:56 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:53:56 --> Utf8 Class Initialized
INFO - 2019-12-31 19:53:56 --> URI Class Initialized
INFO - 2019-12-31 19:53:56 --> Router Class Initialized
INFO - 2019-12-31 19:53:56 --> Output Class Initialized
INFO - 2019-12-31 19:53:56 --> Security Class Initialized
DEBUG - 2019-12-31 19:53:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:53:56 --> Input Class Initialized
INFO - 2019-12-31 19:53:56 --> Language Class Initialized
INFO - 2019-12-31 19:53:56 --> Loader Class Initialized
INFO - 2019-12-31 19:53:56 --> Helper loaded: html_helper
INFO - 2019-12-31 19:53:56 --> Helper loaded: url_helper
INFO - 2019-12-31 19:53:56 --> Helper loaded: form_helper
INFO - 2019-12-31 19:53:56 --> Database Driver Class Initialized
INFO - 2019-12-31 19:53:56 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:53:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:53:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:53:56 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:53:56 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:53:56 --> Controller Class Initialized
INFO - 2019-12-31 19:53:56 --> Final output sent to browser
DEBUG - 2019-12-31 19:53:56 --> Total execution time: 0.2525
INFO - 2019-12-31 19:56:11 --> Config Class Initialized
INFO - 2019-12-31 19:56:11 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:56:11 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:56:11 --> Utf8 Class Initialized
INFO - 2019-12-31 19:56:11 --> URI Class Initialized
INFO - 2019-12-31 19:56:11 --> Router Class Initialized
INFO - 2019-12-31 19:56:11 --> Output Class Initialized
INFO - 2019-12-31 19:56:11 --> Security Class Initialized
DEBUG - 2019-12-31 19:56:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:56:11 --> Input Class Initialized
INFO - 2019-12-31 19:56:11 --> Language Class Initialized
INFO - 2019-12-31 19:56:11 --> Loader Class Initialized
INFO - 2019-12-31 19:56:11 --> Helper loaded: html_helper
INFO - 2019-12-31 19:56:11 --> Helper loaded: url_helper
INFO - 2019-12-31 19:56:11 --> Helper loaded: form_helper
INFO - 2019-12-31 19:56:11 --> Database Driver Class Initialized
INFO - 2019-12-31 19:56:12 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:56:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:56:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:56:12 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:56:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:56:12 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:56:12 --> Controller Class Initialized
INFO - 2019-12-31 19:56:12 --> Final output sent to browser
DEBUG - 2019-12-31 19:56:12 --> Total execution time: 0.2125
INFO - 2019-12-31 19:56:12 --> Config Class Initialized
INFO - 2019-12-31 19:56:13 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:56:13 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:56:13 --> Utf8 Class Initialized
INFO - 2019-12-31 19:56:13 --> URI Class Initialized
INFO - 2019-12-31 19:56:13 --> Router Class Initialized
INFO - 2019-12-31 19:56:13 --> Output Class Initialized
INFO - 2019-12-31 19:56:13 --> Security Class Initialized
DEBUG - 2019-12-31 19:56:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:56:13 --> Input Class Initialized
INFO - 2019-12-31 19:56:13 --> Language Class Initialized
INFO - 2019-12-31 19:56:13 --> Loader Class Initialized
INFO - 2019-12-31 19:56:13 --> Helper loaded: html_helper
INFO - 2019-12-31 19:56:13 --> Helper loaded: url_helper
INFO - 2019-12-31 19:56:13 --> Helper loaded: form_helper
INFO - 2019-12-31 19:56:13 --> Database Driver Class Initialized
INFO - 2019-12-31 19:56:13 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:56:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:56:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:56:13 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:56:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:56:13 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:56:13 --> Controller Class Initialized
INFO - 2019-12-31 19:56:13 --> Final output sent to browser
DEBUG - 2019-12-31 19:56:13 --> Total execution time: 0.2350
INFO - 2019-12-31 19:56:25 --> Config Class Initialized
INFO - 2019-12-31 19:56:25 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:56:25 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:56:25 --> Utf8 Class Initialized
INFO - 2019-12-31 19:56:25 --> URI Class Initialized
INFO - 2019-12-31 19:56:25 --> Router Class Initialized
INFO - 2019-12-31 19:56:25 --> Output Class Initialized
INFO - 2019-12-31 19:56:25 --> Security Class Initialized
DEBUG - 2019-12-31 19:56:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:56:25 --> Input Class Initialized
INFO - 2019-12-31 19:56:26 --> Language Class Initialized
INFO - 2019-12-31 19:56:26 --> Loader Class Initialized
INFO - 2019-12-31 19:56:26 --> Helper loaded: html_helper
INFO - 2019-12-31 19:56:26 --> Helper loaded: url_helper
INFO - 2019-12-31 19:56:26 --> Helper loaded: form_helper
INFO - 2019-12-31 19:56:26 --> Database Driver Class Initialized
INFO - 2019-12-31 19:56:26 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:56:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:56:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:56:26 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:56:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:56:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:56:26 --> Controller Class Initialized
INFO - 2019-12-31 19:56:26 --> Final output sent to browser
DEBUG - 2019-12-31 19:56:26 --> Total execution time: 0.2250
INFO - 2019-12-31 19:56:40 --> Config Class Initialized
INFO - 2019-12-31 19:56:40 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:56:40 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:56:40 --> Utf8 Class Initialized
INFO - 2019-12-31 19:56:40 --> URI Class Initialized
INFO - 2019-12-31 19:56:40 --> Router Class Initialized
INFO - 2019-12-31 19:56:40 --> Output Class Initialized
INFO - 2019-12-31 19:56:40 --> Security Class Initialized
DEBUG - 2019-12-31 19:56:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:56:40 --> Input Class Initialized
INFO - 2019-12-31 19:56:40 --> Language Class Initialized
INFO - 2019-12-31 19:56:40 --> Loader Class Initialized
INFO - 2019-12-31 19:56:40 --> Helper loaded: html_helper
INFO - 2019-12-31 19:56:40 --> Helper loaded: url_helper
INFO - 2019-12-31 19:56:40 --> Helper loaded: form_helper
INFO - 2019-12-31 19:56:41 --> Database Driver Class Initialized
INFO - 2019-12-31 19:56:41 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:56:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:56:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:56:41 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:56:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:56:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:56:41 --> Controller Class Initialized
DEBUG - 2019-12-31 19:56:41 --> loading Configarable_Login model...
INFO - 2019-12-31 19:56:41 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-31 19:56:41 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-31 19:56:41 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-31 19:56:41 --> Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 19:56:41 --> loading configurable menu with result=Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 19:56:41 --> loading view public\Dashboard
INFO - 2019-12-31 19:56:41 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 19:56:41 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-31 19:56:41 --> Final output sent to browser
DEBUG - 2019-12-31 19:56:41 --> Total execution time: 0.3450
INFO - 2019-12-31 19:56:51 --> Config Class Initialized
INFO - 2019-12-31 19:56:51 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:56:51 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:56:51 --> Utf8 Class Initialized
INFO - 2019-12-31 19:56:51 --> URI Class Initialized
INFO - 2019-12-31 19:56:51 --> Router Class Initialized
INFO - 2019-12-31 19:56:51 --> Output Class Initialized
INFO - 2019-12-31 19:56:51 --> Security Class Initialized
DEBUG - 2019-12-31 19:56:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:56:51 --> Input Class Initialized
INFO - 2019-12-31 19:56:51 --> Language Class Initialized
INFO - 2019-12-31 19:56:51 --> Loader Class Initialized
INFO - 2019-12-31 19:56:51 --> Helper loaded: html_helper
INFO - 2019-12-31 19:56:51 --> Helper loaded: url_helper
INFO - 2019-12-31 19:56:51 --> Helper loaded: form_helper
INFO - 2019-12-31 19:56:51 --> Database Driver Class Initialized
INFO - 2019-12-31 19:56:51 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:56:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:56:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:56:51 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:56:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:56:51 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:56:51 --> Controller Class Initialized
DEBUG - 2019-12-31 19:56:51 --> Create_User constructer got called..
INFO - 2019-12-31 19:56:51 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 19:56:51 --> show all profile data modelDevOss
DEBUG - 2019-12-31 19:56:52 --> show_all_profile_data from DB retrived
INFO - 2019-12-31 19:56:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-31 19:56:52 --> Final output sent to browser
DEBUG - 2019-12-31 19:56:52 --> Total execution time: 0.2725
INFO - 2019-12-31 19:56:56 --> Config Class Initialized
INFO - 2019-12-31 19:56:56 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:56:56 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:56:56 --> Utf8 Class Initialized
INFO - 2019-12-31 19:56:56 --> URI Class Initialized
INFO - 2019-12-31 19:56:56 --> Router Class Initialized
INFO - 2019-12-31 19:56:56 --> Output Class Initialized
INFO - 2019-12-31 19:56:56 --> Security Class Initialized
DEBUG - 2019-12-31 19:56:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:56:56 --> Input Class Initialized
INFO - 2019-12-31 19:56:56 --> Language Class Initialized
INFO - 2019-12-31 19:56:56 --> Loader Class Initialized
INFO - 2019-12-31 19:56:56 --> Helper loaded: html_helper
INFO - 2019-12-31 19:56:56 --> Helper loaded: url_helper
INFO - 2019-12-31 19:56:56 --> Helper loaded: form_helper
INFO - 2019-12-31 19:56:56 --> Database Driver Class Initialized
INFO - 2019-12-31 19:56:56 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:56:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:56:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:56:56 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:56:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:56:56 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:56:56 --> Controller Class Initialized
DEBUG - 2019-12-31 19:56:56 --> Create_User constructer got called..
INFO - 2019-12-31 19:56:56 --> Model "User_Login_Model" initialized
DEBUG - 2019-12-31 19:56:56 --> group_names() got called form ManageUsers_Model
INFO - 2019-12-31 19:56:56 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2019-12-31 19:56:56 --> Final output sent to browser
DEBUG - 2019-12-31 19:56:56 --> Total execution time: 0.2700
INFO - 2019-12-31 19:56:59 --> Config Class Initialized
INFO - 2019-12-31 19:56:59 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:56:59 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:56:59 --> Utf8 Class Initialized
INFO - 2019-12-31 19:56:59 --> URI Class Initialized
INFO - 2019-12-31 19:56:59 --> Router Class Initialized
INFO - 2019-12-31 19:56:59 --> Output Class Initialized
INFO - 2019-12-31 19:56:59 --> Security Class Initialized
DEBUG - 2019-12-31 19:56:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:56:59 --> Input Class Initialized
INFO - 2019-12-31 19:56:59 --> Language Class Initialized
INFO - 2019-12-31 19:56:59 --> Loader Class Initialized
INFO - 2019-12-31 19:56:59 --> Helper loaded: html_helper
INFO - 2019-12-31 19:56:59 --> Helper loaded: url_helper
INFO - 2019-12-31 19:56:59 --> Helper loaded: form_helper
INFO - 2019-12-31 19:56:59 --> Database Driver Class Initialized
INFO - 2019-12-31 19:56:59 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:56:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:56:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:56:59 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:57:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:57:00 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:57:00 --> Controller Class Initialized
DEBUG - 2019-12-31 19:57:00 --> Create_User constructer got called..
INFO - 2019-12-31 19:57:00 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 19:57:00 --> show all profile data modelDevOss
DEBUG - 2019-12-31 19:57:00 --> show_all_profile_data from DB retrived
INFO - 2019-12-31 19:57:00 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2019-12-31 19:57:00 --> Final output sent to browser
DEBUG - 2019-12-31 19:57:00 --> Total execution time: 0.2425
INFO - 2019-12-31 19:57:02 --> Config Class Initialized
INFO - 2019-12-31 19:57:02 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:57:02 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:57:02 --> Utf8 Class Initialized
INFO - 2019-12-31 19:57:02 --> URI Class Initialized
INFO - 2019-12-31 19:57:02 --> Router Class Initialized
INFO - 2019-12-31 19:57:02 --> Output Class Initialized
INFO - 2019-12-31 19:57:02 --> Security Class Initialized
DEBUG - 2019-12-31 19:57:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:57:02 --> Input Class Initialized
INFO - 2019-12-31 19:57:02 --> Language Class Initialized
INFO - 2019-12-31 19:57:02 --> Loader Class Initialized
INFO - 2019-12-31 19:57:02 --> Helper loaded: html_helper
INFO - 2019-12-31 19:57:02 --> Helper loaded: url_helper
INFO - 2019-12-31 19:57:02 --> Helper loaded: form_helper
INFO - 2019-12-31 19:57:03 --> Database Driver Class Initialized
INFO - 2019-12-31 19:57:03 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:57:03 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:57:03 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:57:03 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:57:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:57:03 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:57:03 --> Controller Class Initialized
INFO - 2019-12-31 19:57:03 --> Helper loaded: cookie_helper
INFO - 2019-12-31 19:57:03 --> logout() called
DEBUG - 2019-12-31 19:57:03 --> loading model Active_Session
DEBUG - 2019-12-31 19:57:03 --> Session_id = ffui7jq28havg7di6r1nvnfihttpmtbi
DEBUG - 2019-12-31 19:57:03 --> email = DevOss
INFO - 2019-12-31 19:57:03 --> Model "Active_Session" initialized
DEBUG - 2019-12-31 19:57:03 --> calling remove_active_session()
DEBUG - 2019-12-31 19:57:03 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-31 19:57:03 --> loading view welcome controller ... 
INFO - 2019-12-31 19:57:03 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-31 19:57:03 --> Final output sent to browser
DEBUG - 2019-12-31 19:57:03 --> Total execution time: 0.3675
INFO - 2019-12-31 19:57:18 --> Config Class Initialized
INFO - 2019-12-31 19:57:18 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:57:18 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:57:18 --> Utf8 Class Initialized
INFO - 2019-12-31 19:57:18 --> URI Class Initialized
INFO - 2019-12-31 19:57:18 --> Router Class Initialized
INFO - 2019-12-31 19:57:18 --> Output Class Initialized
INFO - 2019-12-31 19:57:18 --> Security Class Initialized
DEBUG - 2019-12-31 19:57:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:57:18 --> Input Class Initialized
INFO - 2019-12-31 19:57:18 --> Language Class Initialized
INFO - 2019-12-31 19:57:18 --> Loader Class Initialized
INFO - 2019-12-31 19:57:18 --> Helper loaded: html_helper
INFO - 2019-12-31 19:57:18 --> Helper loaded: url_helper
INFO - 2019-12-31 19:57:18 --> Helper loaded: form_helper
INFO - 2019-12-31 19:57:18 --> Database Driver Class Initialized
INFO - 2019-12-31 19:57:18 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:57:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:57:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:57:18 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:57:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:57:18 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:57:18 --> Controller Class Initialized
INFO - 2019-12-31 19:57:18 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-12-31 19:57:18 --> Model "User_Login_Model" initialized
INFO - 2019-12-31 19:57:18 --> getAuth method got called...
DEBUG - 2019-12-31 19:57:18 --> Username :- DevOss
INFO - 2019-12-31 19:57:18 --> this is db user...
DEBUG - 2019-12-31 19:57:18 --> validatelogin() got called form User_Login_Model
DEBUG - 2019-12-31 19:57:19 --> Password hashing output = $2y$10$WoM0wXqFLyKAsLQE2n8uzOIXa6UEFpAUj.Y4xQR9jH3m00dCgzktS
DEBUG - 2019-12-31 19:57:19 --> Password hash found in db = $2y$10$BcOtL6EQ4gJROVymv6e8X./bkfnyIEWerHxIIewWffcdvH4bK8nAq
DEBUG - 2019-12-31 19:57:19 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2019-12-31 19:57:19 --> get_role() got called form User_Login_Model
DEBUG - 2019-12-31 19:57:19 --> Role Retrive from DB
INFO - 2019-12-31 19:57:19 --> get_group_role_mapping model = 16
DEBUG - 2019-12-31 19:57:19 --> show_all_profile_data from DB retrived
DEBUG - 2019-12-31 19:57:19 --> loading model Active_Session
INFO - 2019-12-31 19:57:19 --> Model "Active_Session" initialized
DEBUG - 2019-12-31 19:57:19 --> calling insert_active_session()
DEBUG - 2019-12-31 19:57:19 --> insert_active_session() got called form Active_Session
DEBUG - 2019-12-31 19:57:19 --> insert success
DEBUG - 2019-12-31 19:57:19 --> loading Configarable_Login model...
INFO - 2019-12-31 19:57:19 --> Model "Configarable_Login" initialized
DEBUG - 2019-12-31 19:57:19 --> calling countlastsevendays() method for role=DBADMINUSER
DEBUG - 2019-12-31 19:57:19 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2019-12-31 19:57:19 --> Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 19:57:19 --> loading configurable menu with result=Array
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

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

    [5] => stdClass Object
        (
            [page_id] => 32
            [page_name] => Admin
            [page_link] => user/Create_User/admin
            [page_status] => A
            [page_create_ts] => 2019-12-27 11:47:22
            [page_role] => DBADMINUSER
            [page_seq] => 9
            [page_active] => 
            [symbol] => fas fa-fw fa-strikethrough
        )

)

DEBUG - 2019-12-31 19:57:19 --> loading view public\Dashboard
INFO - 2019-12-31 19:57:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2019-12-31 19:57:19 --> Final output sent to browser
DEBUG - 2019-12-31 19:57:19 --> Total execution time: 1.0300
INFO - 2019-12-31 19:58:03 --> Config Class Initialized
INFO - 2019-12-31 19:58:03 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:58:03 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:58:03 --> Utf8 Class Initialized
INFO - 2019-12-31 19:58:03 --> URI Class Initialized
INFO - 2019-12-31 19:58:03 --> Router Class Initialized
INFO - 2019-12-31 19:58:03 --> Output Class Initialized
INFO - 2019-12-31 19:58:03 --> Security Class Initialized
DEBUG - 2019-12-31 19:58:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:58:03 --> Input Class Initialized
INFO - 2019-12-31 19:58:03 --> Language Class Initialized
INFO - 2019-12-31 19:58:03 --> Loader Class Initialized
INFO - 2019-12-31 19:58:03 --> Helper loaded: html_helper
INFO - 2019-12-31 19:58:03 --> Helper loaded: url_helper
INFO - 2019-12-31 19:58:03 --> Helper loaded: form_helper
INFO - 2019-12-31 19:58:04 --> Database Driver Class Initialized
INFO - 2019-12-31 19:58:04 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:58:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:58:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:58:04 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:58:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:58:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:58:04 --> Controller Class Initialized
INFO - 2019-12-31 19:58:04 --> Final output sent to browser
DEBUG - 2019-12-31 19:58:04 --> Total execution time: 0.2250
INFO - 2019-12-31 19:58:41 --> Config Class Initialized
INFO - 2019-12-31 19:58:41 --> Hooks Class Initialized
DEBUG - 2019-12-31 19:58:41 --> UTF-8 Support Enabled
INFO - 2019-12-31 19:58:41 --> Utf8 Class Initialized
INFO - 2019-12-31 19:58:41 --> URI Class Initialized
INFO - 2019-12-31 19:58:41 --> Router Class Initialized
INFO - 2019-12-31 19:58:41 --> Output Class Initialized
INFO - 2019-12-31 19:58:41 --> Security Class Initialized
DEBUG - 2019-12-31 19:58:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 19:58:41 --> Input Class Initialized
INFO - 2019-12-31 19:58:41 --> Language Class Initialized
INFO - 2019-12-31 19:58:41 --> Loader Class Initialized
INFO - 2019-12-31 19:58:41 --> Helper loaded: html_helper
INFO - 2019-12-31 19:58:41 --> Helper loaded: url_helper
INFO - 2019-12-31 19:58:41 --> Helper loaded: form_helper
INFO - 2019-12-31 19:58:41 --> Database Driver Class Initialized
INFO - 2019-12-31 19:58:41 --> Form Validation Class Initialized
DEBUG - 2019-12-31 19:58:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 19:58:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 19:58:41 --> Encryption Class Initialized
DEBUG - 2019-12-31 19:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 19:58:41 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 19:58:41 --> Controller Class Initialized
INFO - 2019-12-31 19:58:41 --> Final output sent to browser
DEBUG - 2019-12-31 19:58:41 --> Total execution time: 0.2050
INFO - 2019-12-31 20:01:58 --> Config Class Initialized
INFO - 2019-12-31 20:01:58 --> Hooks Class Initialized
DEBUG - 2019-12-31 20:01:58 --> UTF-8 Support Enabled
INFO - 2019-12-31 20:01:58 --> Utf8 Class Initialized
INFO - 2019-12-31 20:01:58 --> URI Class Initialized
INFO - 2019-12-31 20:01:58 --> Router Class Initialized
INFO - 2019-12-31 20:01:58 --> Output Class Initialized
INFO - 2019-12-31 20:01:58 --> Security Class Initialized
DEBUG - 2019-12-31 20:01:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 20:01:58 --> Input Class Initialized
INFO - 2019-12-31 20:01:58 --> Language Class Initialized
INFO - 2019-12-31 20:01:58 --> Loader Class Initialized
INFO - 2019-12-31 20:01:58 --> Helper loaded: html_helper
INFO - 2019-12-31 20:01:58 --> Helper loaded: url_helper
INFO - 2019-12-31 20:01:58 --> Helper loaded: form_helper
INFO - 2019-12-31 20:01:58 --> Database Driver Class Initialized
INFO - 2019-12-31 20:01:58 --> Form Validation Class Initialized
DEBUG - 2019-12-31 20:01:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 20:01:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 20:01:58 --> Encryption Class Initialized
DEBUG - 2019-12-31 20:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 20:01:58 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 20:01:58 --> Controller Class Initialized
INFO - 2019-12-31 20:01:58 --> Final output sent to browser
DEBUG - 2019-12-31 20:01:58 --> Total execution time: 0.4525
INFO - 2019-12-31 20:02:06 --> Config Class Initialized
INFO - 2019-12-31 20:02:06 --> Hooks Class Initialized
DEBUG - 2019-12-31 20:02:07 --> UTF-8 Support Enabled
INFO - 2019-12-31 20:02:07 --> Utf8 Class Initialized
INFO - 2019-12-31 20:02:07 --> URI Class Initialized
INFO - 2019-12-31 20:02:07 --> Router Class Initialized
INFO - 2019-12-31 20:02:07 --> Output Class Initialized
INFO - 2019-12-31 20:02:07 --> Security Class Initialized
DEBUG - 2019-12-31 20:02:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 20:02:07 --> Input Class Initialized
INFO - 2019-12-31 20:02:07 --> Language Class Initialized
INFO - 2019-12-31 20:02:07 --> Loader Class Initialized
INFO - 2019-12-31 20:02:07 --> Helper loaded: html_helper
INFO - 2019-12-31 20:02:07 --> Helper loaded: url_helper
INFO - 2019-12-31 20:02:07 --> Helper loaded: form_helper
INFO - 2019-12-31 20:02:07 --> Database Driver Class Initialized
INFO - 2019-12-31 20:02:07 --> Form Validation Class Initialized
DEBUG - 2019-12-31 20:02:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 20:02:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 20:02:07 --> Encryption Class Initialized
DEBUG - 2019-12-31 20:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 20:02:07 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 20:02:07 --> Controller Class Initialized
DEBUG - 2019-12-31 20:02:07 --> Create_User constructer got called..
INFO - 2019-12-31 20:02:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/adminPage.php
INFO - 2019-12-31 20:02:07 --> Final output sent to browser
DEBUG - 2019-12-31 20:02:07 --> Total execution time: 0.2400
INFO - 2019-12-31 20:02:09 --> Config Class Initialized
INFO - 2019-12-31 20:02:09 --> Hooks Class Initialized
DEBUG - 2019-12-31 20:02:09 --> UTF-8 Support Enabled
INFO - 2019-12-31 20:02:09 --> Utf8 Class Initialized
INFO - 2019-12-31 20:02:10 --> URI Class Initialized
INFO - 2019-12-31 20:02:10 --> Router Class Initialized
INFO - 2019-12-31 20:02:10 --> Output Class Initialized
INFO - 2019-12-31 20:02:10 --> Security Class Initialized
DEBUG - 2019-12-31 20:02:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 20:02:10 --> Input Class Initialized
INFO - 2019-12-31 20:02:10 --> Language Class Initialized
INFO - 2019-12-31 20:02:10 --> Loader Class Initialized
INFO - 2019-12-31 20:02:10 --> Helper loaded: html_helper
INFO - 2019-12-31 20:02:10 --> Helper loaded: url_helper
INFO - 2019-12-31 20:02:10 --> Helper loaded: form_helper
INFO - 2019-12-31 20:02:10 --> Database Driver Class Initialized
INFO - 2019-12-31 20:02:10 --> Form Validation Class Initialized
DEBUG - 2019-12-31 20:02:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 20:02:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 20:02:10 --> Encryption Class Initialized
DEBUG - 2019-12-31 20:02:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 20:02:10 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 20:02:10 --> Controller Class Initialized
INFO - 2019-12-31 20:02:10 --> Model "Authors_model" initialized
INFO - 2019-12-31 20:02:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2019-12-31 20:02:10 --> Pagination Class Initialized
INFO - 2019-12-31 20:02:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2019-12-31 20:02:10 --> Final output sent to browser
DEBUG - 2019-12-31 20:02:10 --> Total execution time: 0.2381
INFO - 2019-12-31 20:03:28 --> Config Class Initialized
INFO - 2019-12-31 20:03:28 --> Hooks Class Initialized
DEBUG - 2019-12-31 20:03:28 --> UTF-8 Support Enabled
INFO - 2019-12-31 20:03:28 --> Utf8 Class Initialized
INFO - 2019-12-31 20:03:28 --> URI Class Initialized
INFO - 2019-12-31 20:03:28 --> Router Class Initialized
INFO - 2019-12-31 20:03:28 --> Output Class Initialized
INFO - 2019-12-31 20:03:28 --> Security Class Initialized
DEBUG - 2019-12-31 20:03:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-31 20:03:28 --> Input Class Initialized
INFO - 2019-12-31 20:03:28 --> Language Class Initialized
INFO - 2019-12-31 20:03:28 --> Loader Class Initialized
INFO - 2019-12-31 20:03:28 --> Helper loaded: html_helper
INFO - 2019-12-31 20:03:28 --> Helper loaded: url_helper
INFO - 2019-12-31 20:03:28 --> Helper loaded: form_helper
INFO - 2019-12-31 20:03:28 --> Database Driver Class Initialized
INFO - 2019-12-31 20:03:28 --> Form Validation Class Initialized
DEBUG - 2019-12-31 20:03:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2019-12-31 20:03:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2019-12-31 20:03:28 --> Encryption Class Initialized
DEBUG - 2019-12-31 20:03:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2019-12-31 20:03:28 --> Session: Class initialized using 'files' driver.
INFO - 2019-12-31 20:03:28 --> Controller Class Initialized
INFO - 2019-12-31 20:03:28 --> Helper loaded: cookie_helper
INFO - 2019-12-31 20:03:28 --> logout() called
DEBUG - 2019-12-31 20:03:28 --> loading model Active_Session
DEBUG - 2019-12-31 20:03:28 --> Session_id = 4pnstktif55aq143re5aftu8bh9gtl9p
DEBUG - 2019-12-31 20:03:28 --> email = DevOss
INFO - 2019-12-31 20:03:28 --> Model "Active_Session" initialized
DEBUG - 2019-12-31 20:03:28 --> calling remove_active_session()
DEBUG - 2019-12-31 20:03:28 --> remove_active_session() got called form Active_Session
DEBUG - 2019-12-31 20:03:28 --> loading view welcome controller ... 
INFO - 2019-12-31 20:03:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2019-12-31 20:03:28 --> Final output sent to browser
DEBUG - 2019-12-31 20:03:28 --> Total execution time: 0.3700
