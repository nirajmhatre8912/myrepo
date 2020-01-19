<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2020-01-10 10:05:37 --> Config Class Initialized
INFO - 2020-01-10 10:05:37 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:05:37 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:05:37 --> Utf8 Class Initialized
INFO - 2020-01-10 10:05:37 --> URI Class Initialized
DEBUG - 2020-01-10 10:05:37 --> No URI present. Default controller set.
INFO - 2020-01-10 10:05:37 --> Router Class Initialized
INFO - 2020-01-10 10:05:38 --> Output Class Initialized
INFO - 2020-01-10 10:05:38 --> Security Class Initialized
DEBUG - 2020-01-10 10:05:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:05:38 --> Input Class Initialized
INFO - 2020-01-10 10:05:38 --> Language Class Initialized
INFO - 2020-01-10 10:05:38 --> Loader Class Initialized
INFO - 2020-01-10 10:05:38 --> Helper loaded: html_helper
INFO - 2020-01-10 10:05:38 --> Helper loaded: url_helper
INFO - 2020-01-10 10:05:38 --> Helper loaded: form_helper
INFO - 2020-01-10 10:05:38 --> Database Driver Class Initialized
INFO - 2020-01-10 10:05:38 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:05:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:05:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:05:38 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:05:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:05:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:05:38 --> Controller Class Initialized
INFO - 2020-01-10 10:05:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 10:05:38 --> Final output sent to browser
DEBUG - 2020-01-10 10:05:38 --> Total execution time: 0.8300
INFO - 2020-01-10 10:05:49 --> Config Class Initialized
INFO - 2020-01-10 10:05:49 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:05:49 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:05:49 --> Utf8 Class Initialized
INFO - 2020-01-10 10:05:49 --> URI Class Initialized
INFO - 2020-01-10 10:05:49 --> Router Class Initialized
INFO - 2020-01-10 10:05:49 --> Output Class Initialized
INFO - 2020-01-10 10:05:49 --> Security Class Initialized
DEBUG - 2020-01-10 10:05:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:05:49 --> Input Class Initialized
INFO - 2020-01-10 10:05:49 --> Language Class Initialized
INFO - 2020-01-10 10:05:49 --> Loader Class Initialized
INFO - 2020-01-10 10:05:49 --> Helper loaded: html_helper
INFO - 2020-01-10 10:05:49 --> Helper loaded: url_helper
INFO - 2020-01-10 10:05:49 --> Helper loaded: form_helper
INFO - 2020-01-10 10:05:49 --> Database Driver Class Initialized
INFO - 2020-01-10 10:05:49 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:05:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:05:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:05:49 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:05:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:05:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:05:49 --> Controller Class Initialized
INFO - 2020-01-10 10:05:49 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 10:05:49 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:05:49 --> getAuth method got called...
DEBUG - 2020-01-10 10:05:49 --> Username :- DevOss
INFO - 2020-01-10 10:05:49 --> this is db user...
DEBUG - 2020-01-10 10:05:49 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 10:05:50 --> Password hashing output = $2y$10$PPrnFqpcm3iwacHGHjXcNefs9uVzcAyoRwNA1NVneXe1JTGcre8Pa
DEBUG - 2020-01-10 10:05:50 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
DEBUG - 2020-01-10 10:05:50 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2020-01-10 10:05:50 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-10 10:05:50 --> Role Retrive from DB
INFO - 2020-01-10 10:05:50 --> get_group_role_mapping model = 16
DEBUG - 2020-01-10 10:05:50 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-10 10:05:50 --> loading model Active_Session
INFO - 2020-01-10 10:05:50 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 10:05:50 --> calling insert_active_session()
DEBUG - 2020-01-10 10:05:50 --> insert_active_session() got called form Active_Session
ERROR - 2020-01-10 10:05:50 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`oneossdb`.`active_session`, CONSTRAINT `FK_TBUSR_ID` FOREIGN KEY (`tid`) REFERENCES `tblusers` (`id`)) - Invalid query: INSERT INTO `active_session` (`user`, `tid`, `ip`, `sessionID`, `role`, `status`) VALUES ('DevOss', '9', '10.10.203.98', '6g3trob4dggin9clo6q88u52tk8unmjd', 'DB_ADMIN_USER', 'A')
INFO - 2020-01-10 10:05:50 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-10 10:18:12 --> Config Class Initialized
INFO - 2020-01-10 10:18:12 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:18:12 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:18:12 --> Utf8 Class Initialized
INFO - 2020-01-10 10:18:12 --> URI Class Initialized
INFO - 2020-01-10 10:18:12 --> Router Class Initialized
INFO - 2020-01-10 10:18:12 --> Output Class Initialized
INFO - 2020-01-10 10:18:13 --> Security Class Initialized
DEBUG - 2020-01-10 10:18:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:18:13 --> Input Class Initialized
INFO - 2020-01-10 10:18:13 --> Language Class Initialized
INFO - 2020-01-10 10:18:13 --> Loader Class Initialized
INFO - 2020-01-10 10:18:13 --> Helper loaded: html_helper
INFO - 2020-01-10 10:18:13 --> Helper loaded: url_helper
INFO - 2020-01-10 10:18:13 --> Helper loaded: form_helper
INFO - 2020-01-10 10:18:13 --> Database Driver Class Initialized
INFO - 2020-01-10 10:18:13 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:18:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:18:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:18:13 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:18:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:18:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:18:13 --> Controller Class Initialized
INFO - 2020-01-10 10:18:13 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 10:18:13 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:18:13 --> getAuth method got called...
DEBUG - 2020-01-10 10:18:13 --> Username :- DevOss
INFO - 2020-01-10 10:18:13 --> this is db user...
DEBUG - 2020-01-10 10:18:13 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 10:18:13 --> Password hashing output = $2y$10$1Oy5zH12H.UzJzyzaE9e5.5XBoNr5Nb5STnsulw2kGzb7KOG642wu
DEBUG - 2020-01-10 10:18:13 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
DEBUG - 2020-01-10 10:18:13 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2020-01-10 10:18:13 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-10 10:18:13 --> Role Retrive from DB
INFO - 2020-01-10 10:18:13 --> get_group_role_mapping model = 16
DEBUG - 2020-01-10 10:18:13 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-10 10:18:13 --> loading model Active_Session
INFO - 2020-01-10 10:18:13 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 10:18:13 --> calling insert_active_session()
DEBUG - 2020-01-10 10:18:13 --> insert_active_session() got called form Active_Session
ERROR - 2020-01-10 10:18:13 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`oneossdb`.`active_session`, CONSTRAINT `FK_TBUSR_ID` FOREIGN KEY (`tid`) REFERENCES `tblusers` (`id`)) - Invalid query: INSERT INTO `active_session` (`user`, `tid`, `ip`, `sessionID`, `role`, `status`) VALUES ('DevOss', '9', '10.10.203.98', '3ap5h4h38kspaqbfoqnhmm0dbqsvh40f', 'DB_ADMIN_USER', 'A')
INFO - 2020-01-10 10:18:13 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-10 10:23:04 --> Config Class Initialized
INFO - 2020-01-10 10:23:04 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:23:04 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:23:04 --> Utf8 Class Initialized
INFO - 2020-01-10 10:23:04 --> URI Class Initialized
INFO - 2020-01-10 10:23:04 --> Router Class Initialized
INFO - 2020-01-10 10:23:04 --> Output Class Initialized
INFO - 2020-01-10 10:23:04 --> Security Class Initialized
DEBUG - 2020-01-10 10:23:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:23:04 --> Input Class Initialized
INFO - 2020-01-10 10:23:04 --> Language Class Initialized
INFO - 2020-01-10 10:23:04 --> Loader Class Initialized
INFO - 2020-01-10 10:23:04 --> Helper loaded: html_helper
INFO - 2020-01-10 10:23:04 --> Helper loaded: url_helper
INFO - 2020-01-10 10:23:04 --> Helper loaded: form_helper
INFO - 2020-01-10 10:23:04 --> Database Driver Class Initialized
INFO - 2020-01-10 10:23:04 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:23:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:23:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:23:04 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:23:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:23:04 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:23:04 --> Controller Class Initialized
INFO - 2020-01-10 10:23:04 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 10:23:04 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:23:04 --> getAuth method got called...
DEBUG - 2020-01-10 10:23:04 --> Username :- DevOss
INFO - 2020-01-10 10:23:04 --> this is db user...
DEBUG - 2020-01-10 10:23:04 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 10:23:04 --> Password hashing output = $2y$10$Yxmk.gYhpQUi3YFNSnX9zebAzntL65/HhLLpYl4zoqJlm2CfYVkvO
DEBUG - 2020-01-10 10:23:04 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
DEBUG - 2020-01-10 10:23:05 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2020-01-10 10:23:05 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-10 10:23:05 --> Role Retrive from DB
INFO - 2020-01-10 10:23:05 --> get_group_role_mapping model = 16
DEBUG - 2020-01-10 10:23:05 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-10 10:23:05 --> loading model Active_Session
INFO - 2020-01-10 10:23:05 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 10:23:05 --> calling insert_active_session()
DEBUG - 2020-01-10 10:23:05 --> insert_active_session() got called form Active_Session
DEBUG - 2020-01-10 10:23:05 --> insert success
DEBUG - 2020-01-10 10:23:05 --> loading Configarable_Login model...
INFO - 2020-01-10 10:23:05 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 10:23:05 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-10 10:23:05 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 10:23:05 --> Array
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

DEBUG - 2020-01-10 10:23:05 --> loading configurable menu with result=Array
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

DEBUG - 2020-01-10 10:23:05 --> loading view public\Dashboard
INFO - 2020-01-10 10:23:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 10:23:05 --> Final output sent to browser
DEBUG - 2020-01-10 10:23:05 --> Total execution time: 0.9349
INFO - 2020-01-10 10:31:27 --> Config Class Initialized
INFO - 2020-01-10 10:31:27 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:31:27 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:31:27 --> Utf8 Class Initialized
INFO - 2020-01-10 10:31:27 --> URI Class Initialized
INFO - 2020-01-10 10:31:27 --> Router Class Initialized
INFO - 2020-01-10 10:31:27 --> Output Class Initialized
INFO - 2020-01-10 10:31:27 --> Security Class Initialized
DEBUG - 2020-01-10 10:31:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:31:27 --> Input Class Initialized
INFO - 2020-01-10 10:31:27 --> Language Class Initialized
INFO - 2020-01-10 10:31:27 --> Loader Class Initialized
INFO - 2020-01-10 10:31:27 --> Helper loaded: html_helper
INFO - 2020-01-10 10:31:27 --> Helper loaded: url_helper
INFO - 2020-01-10 10:31:27 --> Helper loaded: form_helper
INFO - 2020-01-10 10:31:27 --> Database Driver Class Initialized
INFO - 2020-01-10 10:31:27 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:31:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:31:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:31:27 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:31:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:31:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:31:27 --> Controller Class Initialized
INFO - 2020-01-10 10:31:27 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 10:31:27 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:31:27 --> getAuth method got called...
DEBUG - 2020-01-10 10:31:27 --> Username :- DevOss
INFO - 2020-01-10 10:31:27 --> this is db user...
DEBUG - 2020-01-10 10:31:27 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 10:31:28 --> Password hashing output = $2y$10$lNrFtVhzWWA49C/Mb59GdOEJE6KigzQje1N0CM8gVhXNZDBRJYIgy
DEBUG - 2020-01-10 10:31:28 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
DEBUG - 2020-01-10 10:31:28 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2020-01-10 10:31:28 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-10 10:31:28 --> Role Retrive from DB
INFO - 2020-01-10 10:31:28 --> get_group_role_mapping model = 16
DEBUG - 2020-01-10 10:31:28 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-10 10:31:28 --> loading model Active_Session
INFO - 2020-01-10 10:31:28 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 10:31:28 --> calling insert_active_session()
DEBUG - 2020-01-10 10:31:28 --> insert_active_session() got called form Active_Session
DEBUG - 2020-01-10 10:31:28 --> insert success
DEBUG - 2020-01-10 10:31:28 --> loading Configarable_Login model...
INFO - 2020-01-10 10:31:28 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 10:31:28 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-10 10:31:28 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 10:31:28 --> Array
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

DEBUG - 2020-01-10 10:31:28 --> loading configurable menu with result=Array
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

DEBUG - 2020-01-10 10:31:28 --> loading view public\Dashboard
INFO - 2020-01-10 10:31:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 10:31:28 --> Final output sent to browser
DEBUG - 2020-01-10 10:31:28 --> Total execution time: 1.0875
INFO - 2020-01-10 10:31:41 --> Config Class Initialized
INFO - 2020-01-10 10:31:41 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:31:41 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:31:41 --> Utf8 Class Initialized
INFO - 2020-01-10 10:31:41 --> URI Class Initialized
INFO - 2020-01-10 10:31:41 --> Router Class Initialized
INFO - 2020-01-10 10:31:41 --> Output Class Initialized
INFO - 2020-01-10 10:31:41 --> Security Class Initialized
DEBUG - 2020-01-10 10:31:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:31:41 --> Input Class Initialized
INFO - 2020-01-10 10:31:41 --> Language Class Initialized
INFO - 2020-01-10 10:31:41 --> Loader Class Initialized
INFO - 2020-01-10 10:31:41 --> Helper loaded: html_helper
INFO - 2020-01-10 10:31:41 --> Helper loaded: url_helper
INFO - 2020-01-10 10:31:41 --> Helper loaded: form_helper
INFO - 2020-01-10 10:31:41 --> Database Driver Class Initialized
INFO - 2020-01-10 10:31:41 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:31:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:31:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:31:41 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:31:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:31:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:31:41 --> Controller Class Initialized
DEBUG - 2020-01-10 10:31:41 --> Create_User constructer got called..
INFO - 2020-01-10 10:31:41 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 10:31:41 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 10:31:41 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-10 10:31:41 --> Final output sent to browser
DEBUG - 2020-01-10 10:31:41 --> Total execution time: 0.3700
INFO - 2020-01-10 10:31:51 --> Config Class Initialized
INFO - 2020-01-10 10:31:51 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:31:51 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:31:51 --> Utf8 Class Initialized
INFO - 2020-01-10 10:31:51 --> URI Class Initialized
INFO - 2020-01-10 10:31:51 --> Router Class Initialized
INFO - 2020-01-10 10:31:51 --> Output Class Initialized
INFO - 2020-01-10 10:31:51 --> Security Class Initialized
DEBUG - 2020-01-10 10:31:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:31:51 --> Input Class Initialized
INFO - 2020-01-10 10:31:51 --> Language Class Initialized
INFO - 2020-01-10 10:31:51 --> Loader Class Initialized
INFO - 2020-01-10 10:31:51 --> Helper loaded: html_helper
INFO - 2020-01-10 10:31:51 --> Helper loaded: url_helper
INFO - 2020-01-10 10:31:51 --> Helper loaded: form_helper
INFO - 2020-01-10 10:31:51 --> Database Driver Class Initialized
INFO - 2020-01-10 10:31:51 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:31:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:31:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:31:51 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:31:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:31:51 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:31:51 --> Controller Class Initialized
DEBUG - 2020-01-10 10:31:51 --> Create_User constructer got called..
INFO - 2020-01-10 10:31:51 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:31:51 --> getAllSubgroup model
DEBUG - 2020-01-10 10:31:51 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-10 10:31:51 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 10:31:51 --> getAllSubgroup model
DEBUG - 2020-01-10 10:31:51 --> getAllUIMasterData from DB retrived
INFO - 2020-01-10 10:31:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2020-01-10 10:31:51 --> Final output sent to browser
DEBUG - 2020-01-10 10:31:51 --> Total execution time: 0.3475
INFO - 2020-01-10 10:31:53 --> Config Class Initialized
INFO - 2020-01-10 10:31:53 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:31:53 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:31:53 --> Utf8 Class Initialized
INFO - 2020-01-10 10:31:53 --> URI Class Initialized
INFO - 2020-01-10 10:31:53 --> Router Class Initialized
INFO - 2020-01-10 10:31:54 --> Output Class Initialized
INFO - 2020-01-10 10:31:54 --> Security Class Initialized
DEBUG - 2020-01-10 10:31:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:31:54 --> Input Class Initialized
INFO - 2020-01-10 10:31:54 --> Language Class Initialized
INFO - 2020-01-10 10:31:54 --> Loader Class Initialized
INFO - 2020-01-10 10:31:54 --> Helper loaded: html_helper
INFO - 2020-01-10 10:31:54 --> Helper loaded: url_helper
INFO - 2020-01-10 10:31:54 --> Helper loaded: form_helper
INFO - 2020-01-10 10:31:54 --> Database Driver Class Initialized
INFO - 2020-01-10 10:31:54 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:31:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:31:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:31:54 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:31:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:31:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:31:54 --> Controller Class Initialized
DEBUG - 2020-01-10 10:31:54 --> Create_User constructer got called..
INFO - 2020-01-10 10:31:54 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:31:54 --> getAllSubgroup model
DEBUG - 2020-01-10 10:31:54 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-10 10:31:54 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 10:31:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2020-01-10 10:31:54 --> Final output sent to browser
DEBUG - 2020-01-10 10:31:54 --> Total execution time: 0.3675
INFO - 2020-01-10 10:31:55 --> Config Class Initialized
INFO - 2020-01-10 10:31:55 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:31:55 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:31:55 --> Utf8 Class Initialized
INFO - 2020-01-10 10:31:55 --> URI Class Initialized
INFO - 2020-01-10 10:31:55 --> Router Class Initialized
INFO - 2020-01-10 10:31:55 --> Output Class Initialized
INFO - 2020-01-10 10:31:55 --> Security Class Initialized
DEBUG - 2020-01-10 10:31:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:31:55 --> Input Class Initialized
INFO - 2020-01-10 10:31:55 --> Language Class Initialized
INFO - 2020-01-10 10:31:55 --> Loader Class Initialized
INFO - 2020-01-10 10:31:55 --> Helper loaded: html_helper
INFO - 2020-01-10 10:31:56 --> Helper loaded: url_helper
INFO - 2020-01-10 10:31:56 --> Helper loaded: form_helper
INFO - 2020-01-10 10:31:56 --> Database Driver Class Initialized
INFO - 2020-01-10 10:31:56 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:31:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:31:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:31:56 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:31:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:31:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:31:56 --> Controller Class Initialized
DEBUG - 2020-01-10 10:31:56 --> Create_User constructer got called..
INFO - 2020-01-10 10:31:56 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 10:31:56 --> showing all user from db tblusers...
DEBUG - 2020-01-10 10:31:56 --> show_groups from DB
INFO - 2020-01-10 10:31:56 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2020-01-10 10:31:56 --> Final output sent to browser
DEBUG - 2020-01-10 10:31:56 --> Total execution time: 0.3675
INFO - 2020-01-10 10:31:57 --> Config Class Initialized
INFO - 2020-01-10 10:31:57 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:31:57 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:31:57 --> Utf8 Class Initialized
INFO - 2020-01-10 10:31:57 --> URI Class Initialized
INFO - 2020-01-10 10:31:57 --> Router Class Initialized
INFO - 2020-01-10 10:31:57 --> Output Class Initialized
INFO - 2020-01-10 10:31:58 --> Security Class Initialized
DEBUG - 2020-01-10 10:31:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:31:58 --> Input Class Initialized
INFO - 2020-01-10 10:31:58 --> Language Class Initialized
INFO - 2020-01-10 10:31:58 --> Loader Class Initialized
INFO - 2020-01-10 10:31:58 --> Helper loaded: html_helper
INFO - 2020-01-10 10:31:58 --> Helper loaded: url_helper
INFO - 2020-01-10 10:31:58 --> Helper loaded: form_helper
INFO - 2020-01-10 10:31:58 --> Database Driver Class Initialized
INFO - 2020-01-10 10:31:58 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:31:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:31:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:31:58 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:31:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:31:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:31:58 --> Controller Class Initialized
DEBUG - 2020-01-10 10:31:58 --> Create_User constructer got called..
INFO - 2020-01-10 10:31:58 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 10:31:58 --> showing all user from db tblusers...
DEBUG - 2020-01-10 10:31:58 --> show_users from DB
DEBUG - 2020-01-10 10:31:58 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 10:31:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 10:31:58 --> Final output sent to browser
DEBUG - 2020-01-10 10:31:58 --> Total execution time: 0.2875
INFO - 2020-01-10 10:31:59 --> Config Class Initialized
INFO - 2020-01-10 10:31:59 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:31:59 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:31:59 --> Utf8 Class Initialized
INFO - 2020-01-10 10:31:59 --> URI Class Initialized
INFO - 2020-01-10 10:31:59 --> Router Class Initialized
INFO - 2020-01-10 10:31:59 --> Output Class Initialized
INFO - 2020-01-10 10:31:59 --> Security Class Initialized
DEBUG - 2020-01-10 10:31:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:31:59 --> Input Class Initialized
INFO - 2020-01-10 10:31:59 --> Language Class Initialized
INFO - 2020-01-10 10:31:59 --> Loader Class Initialized
INFO - 2020-01-10 10:31:59 --> Helper loaded: html_helper
INFO - 2020-01-10 10:31:59 --> Helper loaded: url_helper
INFO - 2020-01-10 10:32:00 --> Helper loaded: form_helper
INFO - 2020-01-10 10:32:00 --> Database Driver Class Initialized
INFO - 2020-01-10 10:32:00 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:32:00 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:32:00 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:32:00 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:32:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:32:00 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:32:00 --> Controller Class Initialized
DEBUG - 2020-01-10 10:32:00 --> Create_User constructer got called..
INFO - 2020-01-10 10:32:00 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 10:32:00 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 10:32:00 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-10 10:32:00 --> Final output sent to browser
DEBUG - 2020-01-10 10:32:00 --> Total execution time: 0.3000
INFO - 2020-01-10 10:33:57 --> Config Class Initialized
INFO - 2020-01-10 10:33:57 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:33:57 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:33:57 --> Utf8 Class Initialized
INFO - 2020-01-10 10:33:57 --> URI Class Initialized
INFO - 2020-01-10 10:33:57 --> Router Class Initialized
INFO - 2020-01-10 10:33:57 --> Output Class Initialized
INFO - 2020-01-10 10:33:57 --> Security Class Initialized
DEBUG - 2020-01-10 10:33:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:33:57 --> Input Class Initialized
INFO - 2020-01-10 10:33:57 --> Language Class Initialized
INFO - 2020-01-10 10:33:57 --> Loader Class Initialized
INFO - 2020-01-10 10:33:57 --> Helper loaded: html_helper
INFO - 2020-01-10 10:33:57 --> Helper loaded: url_helper
INFO - 2020-01-10 10:33:57 --> Helper loaded: form_helper
INFO - 2020-01-10 10:33:57 --> Database Driver Class Initialized
INFO - 2020-01-10 10:33:57 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:33:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:33:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:33:57 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:33:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:33:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:33:57 --> Controller Class Initialized
DEBUG - 2020-01-10 10:33:57 --> Create_User constructer got called..
INFO - 2020-01-10 10:33:57 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 10:33:57 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 10:33:57 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-10 10:33:57 --> Final output sent to browser
DEBUG - 2020-01-10 10:33:57 --> Total execution time: 0.2725
INFO - 2020-01-10 10:35:26 --> Config Class Initialized
INFO - 2020-01-10 10:35:26 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:35:26 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:35:26 --> Utf8 Class Initialized
INFO - 2020-01-10 10:35:26 --> URI Class Initialized
INFO - 2020-01-10 10:35:26 --> Router Class Initialized
INFO - 2020-01-10 10:35:26 --> Output Class Initialized
INFO - 2020-01-10 10:35:27 --> Security Class Initialized
DEBUG - 2020-01-10 10:35:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:35:27 --> Input Class Initialized
INFO - 2020-01-10 10:35:27 --> Language Class Initialized
INFO - 2020-01-10 10:35:27 --> Loader Class Initialized
INFO - 2020-01-10 10:35:27 --> Helper loaded: html_helper
INFO - 2020-01-10 10:35:27 --> Helper loaded: url_helper
INFO - 2020-01-10 10:35:27 --> Helper loaded: form_helper
INFO - 2020-01-10 10:35:27 --> Database Driver Class Initialized
INFO - 2020-01-10 10:35:27 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:35:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:35:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:35:27 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:35:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:35:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:35:27 --> Controller Class Initialized
DEBUG - 2020-01-10 10:35:27 --> Create_User constructer got called..
INFO - 2020-01-10 10:35:27 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:35:27 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:35:27 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:35:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:35:27 --> Final output sent to browser
DEBUG - 2020-01-10 10:35:27 --> Total execution time: 0.3600
INFO - 2020-01-10 10:35:32 --> Config Class Initialized
INFO - 2020-01-10 10:35:32 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:35:32 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:35:32 --> Utf8 Class Initialized
INFO - 2020-01-10 10:35:32 --> URI Class Initialized
INFO - 2020-01-10 10:35:32 --> Router Class Initialized
INFO - 2020-01-10 10:35:32 --> Output Class Initialized
INFO - 2020-01-10 10:35:32 --> Security Class Initialized
DEBUG - 2020-01-10 10:35:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:35:32 --> Input Class Initialized
INFO - 2020-01-10 10:35:32 --> Language Class Initialized
INFO - 2020-01-10 10:35:32 --> Loader Class Initialized
INFO - 2020-01-10 10:35:32 --> Helper loaded: html_helper
INFO - 2020-01-10 10:35:32 --> Helper loaded: url_helper
INFO - 2020-01-10 10:35:32 --> Helper loaded: form_helper
INFO - 2020-01-10 10:35:32 --> Database Driver Class Initialized
INFO - 2020-01-10 10:35:32 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:35:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:35:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:35:32 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:35:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:35:32 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:35:32 --> Controller Class Initialized
DEBUG - 2020-01-10 10:35:32 --> loading Configarable_Login model...
INFO - 2020-01-10 10:35:32 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 10:35:32 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-10 10:35:32 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 10:35:33 --> Array
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

DEBUG - 2020-01-10 10:35:33 --> loading configurable menu with result=Array
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

DEBUG - 2020-01-10 10:35:33 --> loading view public\Dashboard
INFO - 2020-01-10 10:35:33 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:35:33 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 10:35:33 --> Final output sent to browser
DEBUG - 2020-01-10 10:35:33 --> Total execution time: 0.2875
INFO - 2020-01-10 10:36:12 --> Config Class Initialized
INFO - 2020-01-10 10:36:12 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:36:12 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:36:12 --> Utf8 Class Initialized
INFO - 2020-01-10 10:36:12 --> URI Class Initialized
INFO - 2020-01-10 10:36:12 --> Router Class Initialized
INFO - 2020-01-10 10:36:12 --> Output Class Initialized
INFO - 2020-01-10 10:36:12 --> Security Class Initialized
DEBUG - 2020-01-10 10:36:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:36:12 --> Input Class Initialized
INFO - 2020-01-10 10:36:12 --> Language Class Initialized
INFO - 2020-01-10 10:36:12 --> Loader Class Initialized
INFO - 2020-01-10 10:36:12 --> Helper loaded: html_helper
INFO - 2020-01-10 10:36:12 --> Helper loaded: url_helper
INFO - 2020-01-10 10:36:12 --> Helper loaded: form_helper
INFO - 2020-01-10 10:36:12 --> Database Driver Class Initialized
INFO - 2020-01-10 10:36:12 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:36:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:36:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:36:12 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:36:12 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:36:12 --> Controller Class Initialized
DEBUG - 2020-01-10 10:36:12 --> Create_User constructer got called..
INFO - 2020-01-10 10:36:12 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:36:12 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:36:12 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:36:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:36:12 --> Final output sent to browser
DEBUG - 2020-01-10 10:36:12 --> Total execution time: 0.2725
INFO - 2020-01-10 10:36:51 --> Config Class Initialized
INFO - 2020-01-10 10:36:51 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:36:51 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:36:51 --> Utf8 Class Initialized
INFO - 2020-01-10 10:36:51 --> URI Class Initialized
INFO - 2020-01-10 10:36:51 --> Router Class Initialized
INFO - 2020-01-10 10:36:51 --> Output Class Initialized
INFO - 2020-01-10 10:36:51 --> Security Class Initialized
DEBUG - 2020-01-10 10:36:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:36:51 --> Input Class Initialized
INFO - 2020-01-10 10:36:51 --> Language Class Initialized
INFO - 2020-01-10 10:36:51 --> Loader Class Initialized
INFO - 2020-01-10 10:36:51 --> Helper loaded: html_helper
INFO - 2020-01-10 10:36:51 --> Helper loaded: url_helper
INFO - 2020-01-10 10:36:51 --> Helper loaded: form_helper
INFO - 2020-01-10 10:36:51 --> Database Driver Class Initialized
INFO - 2020-01-10 10:36:51 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:36:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:36:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:36:51 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:36:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:36:51 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:36:51 --> Controller Class Initialized
DEBUG - 2020-01-10 10:36:51 --> Create_User constructer got called..
INFO - 2020-01-10 10:36:51 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:36:51 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:36:51 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:36:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:36:51 --> Final output sent to browser
DEBUG - 2020-01-10 10:36:51 --> Total execution time: 0.3675
INFO - 2020-01-10 10:37:30 --> Config Class Initialized
INFO - 2020-01-10 10:37:30 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:37:30 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:37:30 --> Utf8 Class Initialized
INFO - 2020-01-10 10:37:30 --> URI Class Initialized
INFO - 2020-01-10 10:37:30 --> Router Class Initialized
INFO - 2020-01-10 10:37:30 --> Output Class Initialized
INFO - 2020-01-10 10:37:30 --> Security Class Initialized
DEBUG - 2020-01-10 10:37:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:37:30 --> Input Class Initialized
INFO - 2020-01-10 10:37:30 --> Language Class Initialized
INFO - 2020-01-10 10:37:30 --> Loader Class Initialized
INFO - 2020-01-10 10:37:30 --> Helper loaded: html_helper
INFO - 2020-01-10 10:37:30 --> Helper loaded: url_helper
INFO - 2020-01-10 10:37:30 --> Helper loaded: form_helper
INFO - 2020-01-10 10:37:30 --> Database Driver Class Initialized
INFO - 2020-01-10 10:37:30 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:37:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:37:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:37:30 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:37:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:37:30 --> Controller Class Initialized
DEBUG - 2020-01-10 10:37:30 --> Create_User constructer got called..
INFO - 2020-01-10 10:37:30 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:37:30 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:37:30 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:39:24 --> Config Class Initialized
INFO - 2020-01-10 10:39:24 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:39:24 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:39:24 --> Utf8 Class Initialized
INFO - 2020-01-10 10:39:24 --> URI Class Initialized
INFO - 2020-01-10 10:39:24 --> Router Class Initialized
INFO - 2020-01-10 10:39:24 --> Output Class Initialized
INFO - 2020-01-10 10:39:24 --> Security Class Initialized
DEBUG - 2020-01-10 10:39:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:39:24 --> Input Class Initialized
INFO - 2020-01-10 10:39:24 --> Language Class Initialized
INFO - 2020-01-10 10:39:24 --> Loader Class Initialized
INFO - 2020-01-10 10:39:24 --> Helper loaded: html_helper
INFO - 2020-01-10 10:39:24 --> Helper loaded: url_helper
INFO - 2020-01-10 10:39:24 --> Helper loaded: form_helper
INFO - 2020-01-10 10:39:24 --> Database Driver Class Initialized
INFO - 2020-01-10 10:39:24 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:39:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:39:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:39:24 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:39:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:39:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:39:24 --> Controller Class Initialized
DEBUG - 2020-01-10 10:39:24 --> Create_User constructer got called..
INFO - 2020-01-10 10:39:24 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:39:24 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:39:24 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:39:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:39:24 --> Final output sent to browser
DEBUG - 2020-01-10 10:39:24 --> Total execution time: 0.3350
INFO - 2020-01-10 10:39:30 --> Config Class Initialized
INFO - 2020-01-10 10:39:30 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:39:30 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:39:30 --> Utf8 Class Initialized
INFO - 2020-01-10 10:39:30 --> URI Class Initialized
INFO - 2020-01-10 10:39:30 --> Router Class Initialized
INFO - 2020-01-10 10:39:30 --> Output Class Initialized
INFO - 2020-01-10 10:39:30 --> Security Class Initialized
DEBUG - 2020-01-10 10:39:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:39:30 --> Input Class Initialized
INFO - 2020-01-10 10:39:30 --> Language Class Initialized
INFO - 2020-01-10 10:39:30 --> Loader Class Initialized
INFO - 2020-01-10 10:39:30 --> Helper loaded: html_helper
INFO - 2020-01-10 10:39:30 --> Helper loaded: url_helper
INFO - 2020-01-10 10:39:30 --> Helper loaded: form_helper
INFO - 2020-01-10 10:39:30 --> Database Driver Class Initialized
INFO - 2020-01-10 10:39:30 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:39:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:39:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:39:30 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:39:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:39:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:39:30 --> Controller Class Initialized
DEBUG - 2020-01-10 10:39:30 --> Create_User constructer got called..
INFO - 2020-01-10 10:39:30 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:39:30 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:39:30 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:39:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:39:30 --> Final output sent to browser
DEBUG - 2020-01-10 10:39:30 --> Total execution time: 0.2800
INFO - 2020-01-10 10:40:26 --> Config Class Initialized
INFO - 2020-01-10 10:40:26 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:40:26 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:40:26 --> Utf8 Class Initialized
INFO - 2020-01-10 10:40:26 --> URI Class Initialized
INFO - 2020-01-10 10:40:26 --> Router Class Initialized
INFO - 2020-01-10 10:40:26 --> Output Class Initialized
INFO - 2020-01-10 10:40:26 --> Security Class Initialized
DEBUG - 2020-01-10 10:40:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:40:26 --> Input Class Initialized
INFO - 2020-01-10 10:40:26 --> Language Class Initialized
INFO - 2020-01-10 10:40:26 --> Loader Class Initialized
INFO - 2020-01-10 10:40:26 --> Helper loaded: html_helper
INFO - 2020-01-10 10:40:26 --> Helper loaded: url_helper
INFO - 2020-01-10 10:40:26 --> Helper loaded: form_helper
INFO - 2020-01-10 10:40:26 --> Database Driver Class Initialized
INFO - 2020-01-10 10:40:26 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:40:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:40:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:40:26 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:40:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:40:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:40:26 --> Controller Class Initialized
DEBUG - 2020-01-10 10:40:26 --> Create_User constructer got called..
INFO - 2020-01-10 10:40:26 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:40:26 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:40:26 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:40:26 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:40:26 --> Final output sent to browser
DEBUG - 2020-01-10 10:40:26 --> Total execution time: 0.2825
INFO - 2020-01-10 10:41:54 --> Config Class Initialized
INFO - 2020-01-10 10:41:54 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:41:54 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:41:54 --> Utf8 Class Initialized
INFO - 2020-01-10 10:41:54 --> URI Class Initialized
INFO - 2020-01-10 10:41:54 --> Router Class Initialized
INFO - 2020-01-10 10:41:54 --> Output Class Initialized
INFO - 2020-01-10 10:41:54 --> Security Class Initialized
DEBUG - 2020-01-10 10:41:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:41:54 --> Input Class Initialized
INFO - 2020-01-10 10:41:54 --> Language Class Initialized
INFO - 2020-01-10 10:41:54 --> Loader Class Initialized
INFO - 2020-01-10 10:41:54 --> Helper loaded: html_helper
INFO - 2020-01-10 10:41:54 --> Helper loaded: url_helper
INFO - 2020-01-10 10:41:54 --> Helper loaded: form_helper
INFO - 2020-01-10 10:41:54 --> Database Driver Class Initialized
INFO - 2020-01-10 10:41:54 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:41:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:41:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:41:54 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:41:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:41:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:41:54 --> Controller Class Initialized
DEBUG - 2020-01-10 10:41:54 --> Create_User constructer got called..
INFO - 2020-01-10 10:41:54 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:41:54 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:41:54 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:41:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:41:54 --> Final output sent to browser
DEBUG - 2020-01-10 10:41:54 --> Total execution time: 0.3325
INFO - 2020-01-10 10:42:29 --> Config Class Initialized
INFO - 2020-01-10 10:42:29 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:42:29 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:42:29 --> Utf8 Class Initialized
INFO - 2020-01-10 10:42:29 --> URI Class Initialized
INFO - 2020-01-10 10:42:29 --> Router Class Initialized
INFO - 2020-01-10 10:42:29 --> Output Class Initialized
INFO - 2020-01-10 10:42:29 --> Security Class Initialized
DEBUG - 2020-01-10 10:42:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:42:29 --> Input Class Initialized
INFO - 2020-01-10 10:42:29 --> Language Class Initialized
INFO - 2020-01-10 10:42:30 --> Loader Class Initialized
INFO - 2020-01-10 10:42:30 --> Helper loaded: html_helper
INFO - 2020-01-10 10:42:30 --> Helper loaded: url_helper
INFO - 2020-01-10 10:42:30 --> Helper loaded: form_helper
INFO - 2020-01-10 10:42:30 --> Database Driver Class Initialized
INFO - 2020-01-10 10:42:30 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:42:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:42:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:42:30 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:42:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:42:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:42:30 --> Controller Class Initialized
DEBUG - 2020-01-10 10:42:30 --> Create_User constructer got called..
INFO - 2020-01-10 10:42:30 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:42:30 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:42:30 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:42:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:42:30 --> Final output sent to browser
DEBUG - 2020-01-10 10:42:30 --> Total execution time: 0.3125
INFO - 2020-01-10 10:42:53 --> Config Class Initialized
INFO - 2020-01-10 10:42:53 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:42:53 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:42:53 --> Utf8 Class Initialized
INFO - 2020-01-10 10:42:53 --> URI Class Initialized
INFO - 2020-01-10 10:42:53 --> Router Class Initialized
INFO - 2020-01-10 10:42:53 --> Output Class Initialized
INFO - 2020-01-10 10:42:53 --> Security Class Initialized
DEBUG - 2020-01-10 10:42:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:42:53 --> Input Class Initialized
INFO - 2020-01-10 10:42:53 --> Language Class Initialized
INFO - 2020-01-10 10:42:53 --> Loader Class Initialized
INFO - 2020-01-10 10:42:53 --> Helper loaded: html_helper
INFO - 2020-01-10 10:42:53 --> Helper loaded: url_helper
INFO - 2020-01-10 10:42:53 --> Helper loaded: form_helper
INFO - 2020-01-10 10:42:53 --> Database Driver Class Initialized
INFO - 2020-01-10 10:42:53 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:42:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:42:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:42:53 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:42:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:42:53 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:42:53 --> Controller Class Initialized
DEBUG - 2020-01-10 10:42:53 --> Create_User constructer got called..
INFO - 2020-01-10 10:42:53 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:42:53 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:42:53 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:42:53 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:42:53 --> Final output sent to browser
DEBUG - 2020-01-10 10:42:53 --> Total execution time: 0.2725
INFO - 2020-01-10 10:43:12 --> Config Class Initialized
INFO - 2020-01-10 10:43:12 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:43:12 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:43:12 --> Utf8 Class Initialized
INFO - 2020-01-10 10:43:12 --> URI Class Initialized
INFO - 2020-01-10 10:43:12 --> Router Class Initialized
INFO - 2020-01-10 10:43:12 --> Output Class Initialized
INFO - 2020-01-10 10:43:12 --> Security Class Initialized
DEBUG - 2020-01-10 10:43:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:43:12 --> Input Class Initialized
INFO - 2020-01-10 10:43:12 --> Language Class Initialized
INFO - 2020-01-10 10:43:12 --> Loader Class Initialized
INFO - 2020-01-10 10:43:12 --> Helper loaded: html_helper
INFO - 2020-01-10 10:43:13 --> Helper loaded: url_helper
INFO - 2020-01-10 10:43:13 --> Helper loaded: form_helper
INFO - 2020-01-10 10:43:13 --> Database Driver Class Initialized
INFO - 2020-01-10 10:43:13 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:43:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:43:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:43:13 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:43:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:43:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:43:13 --> Controller Class Initialized
DEBUG - 2020-01-10 10:43:13 --> Create_User constructer got called..
INFO - 2020-01-10 10:43:13 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:43:13 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:43:13 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:43:13 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:43:13 --> Final output sent to browser
DEBUG - 2020-01-10 10:43:13 --> Total execution time: 0.3550
INFO - 2020-01-10 10:44:10 --> Config Class Initialized
INFO - 2020-01-10 10:44:10 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:44:10 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:44:10 --> Utf8 Class Initialized
INFO - 2020-01-10 10:44:10 --> URI Class Initialized
INFO - 2020-01-10 10:44:10 --> Router Class Initialized
INFO - 2020-01-10 10:44:10 --> Output Class Initialized
INFO - 2020-01-10 10:44:10 --> Security Class Initialized
DEBUG - 2020-01-10 10:44:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:44:10 --> Input Class Initialized
INFO - 2020-01-10 10:44:10 --> Language Class Initialized
INFO - 2020-01-10 10:44:10 --> Loader Class Initialized
INFO - 2020-01-10 10:44:10 --> Helper loaded: html_helper
INFO - 2020-01-10 10:44:10 --> Helper loaded: url_helper
INFO - 2020-01-10 10:44:10 --> Helper loaded: form_helper
INFO - 2020-01-10 10:44:10 --> Database Driver Class Initialized
INFO - 2020-01-10 10:44:10 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:44:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:44:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:44:10 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:44:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:44:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:44:10 --> Controller Class Initialized
DEBUG - 2020-01-10 10:44:10 --> Create_User constructer got called..
INFO - 2020-01-10 10:44:10 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 10:44:10 --> show all profile data modelDevOss
DEBUG - 2020-01-10 10:44:10 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 10:44:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 10:44:10 --> Final output sent to browser
DEBUG - 2020-01-10 10:44:10 --> Total execution time: 0.2725
INFO - 2020-01-10 10:44:24 --> Config Class Initialized
INFO - 2020-01-10 10:44:24 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:44:24 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:44:24 --> Utf8 Class Initialized
INFO - 2020-01-10 10:44:24 --> URI Class Initialized
INFO - 2020-01-10 10:44:24 --> Router Class Initialized
INFO - 2020-01-10 10:44:24 --> Output Class Initialized
INFO - 2020-01-10 10:44:24 --> Security Class Initialized
DEBUG - 2020-01-10 10:44:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:44:24 --> Input Class Initialized
INFO - 2020-01-10 10:44:24 --> Language Class Initialized
INFO - 2020-01-10 10:44:24 --> Loader Class Initialized
INFO - 2020-01-10 10:44:24 --> Helper loaded: html_helper
INFO - 2020-01-10 10:44:24 --> Helper loaded: url_helper
INFO - 2020-01-10 10:44:24 --> Helper loaded: form_helper
INFO - 2020-01-10 10:44:24 --> Database Driver Class Initialized
INFO - 2020-01-10 10:44:24 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:44:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:44:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:44:24 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:44:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:44:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:44:24 --> Controller Class Initialized
DEBUG - 2020-01-10 10:44:24 --> User_Right constructer got called..
INFO - 2020-01-10 10:44:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2020-01-10 10:44:24 --> Final output sent to browser
DEBUG - 2020-01-10 10:44:24 --> Total execution time: 0.3750
INFO - 2020-01-10 10:45:10 --> Config Class Initialized
INFO - 2020-01-10 10:45:10 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:45:10 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:45:10 --> Utf8 Class Initialized
INFO - 2020-01-10 10:45:11 --> URI Class Initialized
INFO - 2020-01-10 10:45:11 --> Router Class Initialized
INFO - 2020-01-10 10:45:11 --> Output Class Initialized
INFO - 2020-01-10 10:45:11 --> Security Class Initialized
DEBUG - 2020-01-10 10:45:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:45:11 --> Input Class Initialized
INFO - 2020-01-10 10:45:11 --> Language Class Initialized
INFO - 2020-01-10 10:45:11 --> Loader Class Initialized
INFO - 2020-01-10 10:45:11 --> Helper loaded: html_helper
INFO - 2020-01-10 10:45:11 --> Helper loaded: url_helper
INFO - 2020-01-10 10:45:11 --> Helper loaded: form_helper
INFO - 2020-01-10 10:45:11 --> Database Driver Class Initialized
INFO - 2020-01-10 10:45:11 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:45:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:45:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:45:11 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:45:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:45:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:45:11 --> Controller Class Initialized
DEBUG - 2020-01-10 10:45:11 --> User_Right constructer got called..
INFO - 2020-01-10 10:45:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2020-01-10 10:45:11 --> Final output sent to browser
DEBUG - 2020-01-10 10:45:11 --> Total execution time: 0.2950
INFO - 2020-01-10 10:45:45 --> Config Class Initialized
INFO - 2020-01-10 10:45:45 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:45:45 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:45:45 --> Utf8 Class Initialized
INFO - 2020-01-10 10:45:45 --> URI Class Initialized
INFO - 2020-01-10 10:45:45 --> Router Class Initialized
INFO - 2020-01-10 10:45:45 --> Output Class Initialized
INFO - 2020-01-10 10:45:45 --> Security Class Initialized
DEBUG - 2020-01-10 10:45:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:45:45 --> Input Class Initialized
INFO - 2020-01-10 10:45:45 --> Language Class Initialized
INFO - 2020-01-10 10:45:45 --> Loader Class Initialized
INFO - 2020-01-10 10:45:45 --> Helper loaded: html_helper
INFO - 2020-01-10 10:45:45 --> Helper loaded: url_helper
INFO - 2020-01-10 10:45:45 --> Helper loaded: form_helper
INFO - 2020-01-10 10:45:45 --> Database Driver Class Initialized
INFO - 2020-01-10 10:45:45 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:45:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:45:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:45:45 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:45:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:45:45 --> Controller Class Initialized
DEBUG - 2020-01-10 10:45:45 --> User_Right constructer got called..
INFO - 2020-01-10 10:45:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2020-01-10 10:45:45 --> Final output sent to browser
DEBUG - 2020-01-10 10:45:45 --> Total execution time: 0.0900
INFO - 2020-01-10 10:50:52 --> Config Class Initialized
INFO - 2020-01-10 10:50:52 --> Hooks Class Initialized
DEBUG - 2020-01-10 10:50:52 --> UTF-8 Support Enabled
INFO - 2020-01-10 10:50:52 --> Utf8 Class Initialized
INFO - 2020-01-10 10:50:52 --> URI Class Initialized
INFO - 2020-01-10 10:50:52 --> Router Class Initialized
INFO - 2020-01-10 10:50:52 --> Output Class Initialized
INFO - 2020-01-10 10:50:52 --> Security Class Initialized
DEBUG - 2020-01-10 10:50:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 10:50:52 --> Input Class Initialized
INFO - 2020-01-10 10:50:52 --> Language Class Initialized
INFO - 2020-01-10 10:50:52 --> Loader Class Initialized
INFO - 2020-01-10 10:50:52 --> Helper loaded: html_helper
INFO - 2020-01-10 10:50:52 --> Helper loaded: url_helper
INFO - 2020-01-10 10:50:52 --> Helper loaded: form_helper
INFO - 2020-01-10 10:50:52 --> Database Driver Class Initialized
INFO - 2020-01-10 10:50:52 --> Form Validation Class Initialized
DEBUG - 2020-01-10 10:50:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 10:50:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 10:50:52 --> Encryption Class Initialized
DEBUG - 2020-01-10 10:50:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 10:50:52 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 10:50:52 --> Controller Class Initialized
DEBUG - 2020-01-10 10:50:52 --> Create_User constructer got called..
INFO - 2020-01-10 10:50:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/adminPage.php
INFO - 2020-01-10 10:50:52 --> Final output sent to browser
DEBUG - 2020-01-10 10:50:52 --> Total execution time: 0.3631
INFO - 2020-01-10 12:20:26 --> Config Class Initialized
INFO - 2020-01-10 12:20:26 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:20:26 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:20:26 --> Utf8 Class Initialized
INFO - 2020-01-10 12:20:26 --> URI Class Initialized
INFO - 2020-01-10 12:20:26 --> Router Class Initialized
INFO - 2020-01-10 12:20:26 --> Output Class Initialized
INFO - 2020-01-10 12:20:26 --> Security Class Initialized
DEBUG - 2020-01-10 12:20:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:20:26 --> Input Class Initialized
INFO - 2020-01-10 12:20:26 --> Language Class Initialized
INFO - 2020-01-10 12:20:26 --> Loader Class Initialized
INFO - 2020-01-10 12:20:26 --> Helper loaded: html_helper
INFO - 2020-01-10 12:20:26 --> Helper loaded: url_helper
INFO - 2020-01-10 12:20:26 --> Helper loaded: form_helper
INFO - 2020-01-10 12:20:26 --> Database Driver Class Initialized
INFO - 2020-01-10 12:20:26 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:20:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:20:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:20:26 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:20:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:20:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:20:26 --> Controller Class Initialized
DEBUG - 2020-01-10 12:20:26 --> loading Configarable_Login model...
INFO - 2020-01-10 12:20:26 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 12:20:26 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-10 12:20:26 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 12:20:26 --> Array
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

DEBUG - 2020-01-10 12:20:26 --> loading configurable menu with result=Array
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

DEBUG - 2020-01-10 12:20:26 --> loading view public\Dashboard
INFO - 2020-01-10 12:20:26 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:20:26 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 12:20:26 --> Final output sent to browser
DEBUG - 2020-01-10 12:20:26 --> Total execution time: 0.2925
INFO - 2020-01-10 12:20:30 --> Config Class Initialized
INFO - 2020-01-10 12:20:30 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:20:30 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:20:30 --> Utf8 Class Initialized
INFO - 2020-01-10 12:20:30 --> URI Class Initialized
INFO - 2020-01-10 12:20:30 --> Router Class Initialized
INFO - 2020-01-10 12:20:30 --> Output Class Initialized
INFO - 2020-01-10 12:20:30 --> Security Class Initialized
DEBUG - 2020-01-10 12:20:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:20:30 --> Input Class Initialized
INFO - 2020-01-10 12:20:30 --> Language Class Initialized
INFO - 2020-01-10 12:20:30 --> Loader Class Initialized
INFO - 2020-01-10 12:20:30 --> Helper loaded: html_helper
INFO - 2020-01-10 12:20:30 --> Helper loaded: url_helper
INFO - 2020-01-10 12:20:30 --> Helper loaded: form_helper
INFO - 2020-01-10 12:20:30 --> Database Driver Class Initialized
INFO - 2020-01-10 12:20:30 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:20:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:20:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:20:30 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:20:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:20:30 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:20:30 --> Controller Class Initialized
DEBUG - 2020-01-10 12:20:30 --> Create_User constructer got called..
INFO - 2020-01-10 12:20:30 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:20:30 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:20:30 --> show_groups from DB
INFO - 2020-01-10 12:20:30 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2020-01-10 12:20:30 --> Final output sent to browser
DEBUG - 2020-01-10 12:20:30 --> Total execution time: 0.3100
INFO - 2020-01-10 12:20:42 --> Config Class Initialized
INFO - 2020-01-10 12:20:42 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:20:42 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:20:42 --> Utf8 Class Initialized
INFO - 2020-01-10 12:20:42 --> URI Class Initialized
INFO - 2020-01-10 12:20:42 --> Router Class Initialized
INFO - 2020-01-10 12:20:42 --> Output Class Initialized
INFO - 2020-01-10 12:20:42 --> Security Class Initialized
DEBUG - 2020-01-10 12:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:20:42 --> Input Class Initialized
INFO - 2020-01-10 12:20:42 --> Language Class Initialized
INFO - 2020-01-10 12:20:42 --> Loader Class Initialized
INFO - 2020-01-10 12:20:42 --> Helper loaded: html_helper
INFO - 2020-01-10 12:20:42 --> Helper loaded: url_helper
INFO - 2020-01-10 12:20:42 --> Helper loaded: form_helper
INFO - 2020-01-10 12:20:42 --> Database Driver Class Initialized
INFO - 2020-01-10 12:20:42 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:20:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:20:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:20:42 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:20:42 --> Controller Class Initialized
DEBUG - 2020-01-10 12:20:42 --> Create_User constructer got called..
INFO - 2020-01-10 12:20:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/adminPage.php
INFO - 2020-01-10 12:20:42 --> Final output sent to browser
DEBUG - 2020-01-10 12:20:42 --> Total execution time: 0.2075
INFO - 2020-01-10 12:20:45 --> Config Class Initialized
INFO - 2020-01-10 12:20:45 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:20:45 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:20:45 --> Utf8 Class Initialized
INFO - 2020-01-10 12:20:45 --> URI Class Initialized
INFO - 2020-01-10 12:20:45 --> Router Class Initialized
INFO - 2020-01-10 12:20:45 --> Output Class Initialized
INFO - 2020-01-10 12:20:45 --> Security Class Initialized
DEBUG - 2020-01-10 12:20:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:20:45 --> Input Class Initialized
INFO - 2020-01-10 12:20:45 --> Language Class Initialized
INFO - 2020-01-10 12:20:45 --> Loader Class Initialized
INFO - 2020-01-10 12:20:45 --> Helper loaded: html_helper
INFO - 2020-01-10 12:20:45 --> Helper loaded: url_helper
INFO - 2020-01-10 12:20:45 --> Helper loaded: form_helper
INFO - 2020-01-10 12:20:45 --> Database Driver Class Initialized
INFO - 2020-01-10 12:20:45 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:20:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:20:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:20:45 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:20:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:20:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:20:45 --> Controller Class Initialized
DEBUG - 2020-01-10 12:20:45 --> Create_User constructer got called..
INFO - 2020-01-10 12:20:45 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/adminPage.php
INFO - 2020-01-10 12:20:45 --> Final output sent to browser
DEBUG - 2020-01-10 12:20:45 --> Total execution time: 0.1950
INFO - 2020-01-10 12:20:47 --> Config Class Initialized
INFO - 2020-01-10 12:20:47 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:20:47 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:20:47 --> Utf8 Class Initialized
INFO - 2020-01-10 12:20:47 --> URI Class Initialized
INFO - 2020-01-10 12:20:47 --> Router Class Initialized
INFO - 2020-01-10 12:20:47 --> Output Class Initialized
INFO - 2020-01-10 12:20:47 --> Security Class Initialized
DEBUG - 2020-01-10 12:20:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:20:47 --> Input Class Initialized
INFO - 2020-01-10 12:20:47 --> Language Class Initialized
INFO - 2020-01-10 12:20:47 --> Loader Class Initialized
INFO - 2020-01-10 12:20:47 --> Helper loaded: html_helper
INFO - 2020-01-10 12:20:48 --> Helper loaded: url_helper
INFO - 2020-01-10 12:20:48 --> Helper loaded: form_helper
INFO - 2020-01-10 12:20:48 --> Database Driver Class Initialized
INFO - 2020-01-10 12:20:48 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:20:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:20:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:20:48 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:20:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:20:48 --> Controller Class Initialized
DEBUG - 2020-01-10 12:20:48 --> Create_User constructer got called..
INFO - 2020-01-10 12:20:48 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:20:48 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:20:48 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-10 12:20:48 --> Final output sent to browser
DEBUG - 2020-01-10 12:20:48 --> Total execution time: 0.2775
INFO - 2020-01-10 12:20:51 --> Config Class Initialized
INFO - 2020-01-10 12:20:51 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:20:51 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:20:51 --> Utf8 Class Initialized
INFO - 2020-01-10 12:20:51 --> URI Class Initialized
INFO - 2020-01-10 12:20:51 --> Router Class Initialized
INFO - 2020-01-10 12:20:51 --> Output Class Initialized
INFO - 2020-01-10 12:20:51 --> Security Class Initialized
DEBUG - 2020-01-10 12:20:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:20:51 --> Input Class Initialized
INFO - 2020-01-10 12:20:51 --> Language Class Initialized
INFO - 2020-01-10 12:20:51 --> Loader Class Initialized
INFO - 2020-01-10 12:20:51 --> Helper loaded: html_helper
INFO - 2020-01-10 12:20:51 --> Helper loaded: url_helper
INFO - 2020-01-10 12:20:51 --> Helper loaded: form_helper
INFO - 2020-01-10 12:20:51 --> Database Driver Class Initialized
INFO - 2020-01-10 12:20:51 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:20:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:20:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:20:51 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:20:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:20:51 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:20:51 --> Controller Class Initialized
DEBUG - 2020-01-10 12:20:51 --> Create_User constructer got called..
INFO - 2020-01-10 12:20:51 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/adminPage.php
INFO - 2020-01-10 12:20:51 --> Final output sent to browser
DEBUG - 2020-01-10 12:20:51 --> Total execution time: 0.2400
INFO - 2020-01-10 12:20:53 --> Config Class Initialized
INFO - 2020-01-10 12:20:53 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:20:53 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:20:53 --> Utf8 Class Initialized
INFO - 2020-01-10 12:20:53 --> URI Class Initialized
INFO - 2020-01-10 12:20:53 --> Router Class Initialized
INFO - 2020-01-10 12:20:53 --> Output Class Initialized
INFO - 2020-01-10 12:20:53 --> Security Class Initialized
DEBUG - 2020-01-10 12:20:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:20:53 --> Input Class Initialized
INFO - 2020-01-10 12:20:53 --> Language Class Initialized
INFO - 2020-01-10 12:20:54 --> Loader Class Initialized
INFO - 2020-01-10 12:20:54 --> Helper loaded: html_helper
INFO - 2020-01-10 12:20:54 --> Helper loaded: url_helper
INFO - 2020-01-10 12:20:54 --> Helper loaded: form_helper
INFO - 2020-01-10 12:20:54 --> Database Driver Class Initialized
INFO - 2020-01-10 12:20:54 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:20:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:20:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:20:54 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:20:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:20:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:20:54 --> Controller Class Initialized
INFO - 2020-01-10 12:20:54 --> Helper loaded: cookie_helper
INFO - 2020-01-10 12:20:54 --> logout() called
DEBUG - 2020-01-10 12:20:54 --> loading model Active_Session
DEBUG - 2020-01-10 12:20:54 --> Session_id = ecf3drjt2svddvcj1pbq450qd5hf9ge4
DEBUG - 2020-01-10 12:20:54 --> email = DevOss
INFO - 2020-01-10 12:20:54 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:20:54 --> calling remove_active_session()
DEBUG - 2020-01-10 12:20:54 --> remove_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:20:54 --> loading view welcome controller ... 
INFO - 2020-01-10 12:20:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:20:54 --> Final output sent to browser
DEBUG - 2020-01-10 12:20:54 --> Total execution time: 0.4125
INFO - 2020-01-10 12:21:02 --> Config Class Initialized
INFO - 2020-01-10 12:21:02 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:21:02 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:21:02 --> Utf8 Class Initialized
INFO - 2020-01-10 12:21:02 --> URI Class Initialized
INFO - 2020-01-10 12:21:02 --> Router Class Initialized
INFO - 2020-01-10 12:21:02 --> Output Class Initialized
INFO - 2020-01-10 12:21:02 --> Security Class Initialized
DEBUG - 2020-01-10 12:21:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:21:02 --> Input Class Initialized
INFO - 2020-01-10 12:21:02 --> Language Class Initialized
INFO - 2020-01-10 12:21:02 --> Loader Class Initialized
INFO - 2020-01-10 12:21:02 --> Helper loaded: html_helper
INFO - 2020-01-10 12:21:02 --> Helper loaded: url_helper
INFO - 2020-01-10 12:21:02 --> Helper loaded: form_helper
INFO - 2020-01-10 12:21:02 --> Database Driver Class Initialized
INFO - 2020-01-10 12:21:02 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:21:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:21:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:21:02 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:21:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:21:02 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:21:02 --> Controller Class Initialized
INFO - 2020-01-10 12:21:02 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:21:02 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:21:02 --> getAuth method got called...
DEBUG - 2020-01-10 12:21:02 --> Username :- DevOss
INFO - 2020-01-10 12:21:02 --> this is db user...
DEBUG - 2020-01-10 12:21:02 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:21:02 --> Password hashing output = $2y$10$Zi7swMDOY5YetWeah0h9ceXVjghTExBTdPd.5rPJHA7ZmbyOYMh5O
DEBUG - 2020-01-10 12:21:02 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
DEBUG - 2020-01-10 12:21:02 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2020-01-10 12:21:02 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-10 12:21:02 --> Role Retrive from DB
INFO - 2020-01-10 12:21:02 --> get_group_role_mapping model = 16
DEBUG - 2020-01-10 12:21:02 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-10 12:21:02 --> loading model Active_Session
INFO - 2020-01-10 12:21:02 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:21:02 --> calling insert_active_session()
DEBUG - 2020-01-10 12:21:02 --> insert_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:21:03 --> insert success
DEBUG - 2020-01-10 12:21:03 --> loading Configarable_Login model...
INFO - 2020-01-10 12:21:03 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 12:21:03 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-10 12:21:03 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 12:21:03 --> Array
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

DEBUG - 2020-01-10 12:21:03 --> loading configurable menu with result=Array
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

DEBUG - 2020-01-10 12:21:03 --> loading view public\Dashboard
INFO - 2020-01-10 12:21:03 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 12:21:03 --> Final output sent to browser
DEBUG - 2020-01-10 12:21:03 --> Total execution time: 0.9701
INFO - 2020-01-10 12:21:06 --> Config Class Initialized
INFO - 2020-01-10 12:21:06 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:21:06 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:21:06 --> Utf8 Class Initialized
INFO - 2020-01-10 12:21:06 --> URI Class Initialized
INFO - 2020-01-10 12:21:06 --> Router Class Initialized
INFO - 2020-01-10 12:21:07 --> Output Class Initialized
INFO - 2020-01-10 12:21:07 --> Security Class Initialized
DEBUG - 2020-01-10 12:21:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:21:07 --> Input Class Initialized
INFO - 2020-01-10 12:21:07 --> Language Class Initialized
INFO - 2020-01-10 12:21:07 --> Loader Class Initialized
INFO - 2020-01-10 12:21:07 --> Helper loaded: html_helper
INFO - 2020-01-10 12:21:07 --> Helper loaded: url_helper
INFO - 2020-01-10 12:21:07 --> Helper loaded: form_helper
INFO - 2020-01-10 12:21:07 --> Database Driver Class Initialized
INFO - 2020-01-10 12:21:07 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:21:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:21:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:21:07 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:21:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:21:07 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:21:07 --> Controller Class Initialized
DEBUG - 2020-01-10 12:21:07 --> Create_User constructer got called..
INFO - 2020-01-10 12:21:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/adminPage.php
INFO - 2020-01-10 12:21:07 --> Final output sent to browser
DEBUG - 2020-01-10 12:21:07 --> Total execution time: 0.2875
INFO - 2020-01-10 12:21:09 --> Config Class Initialized
INFO - 2020-01-10 12:21:09 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:21:09 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:21:09 --> Utf8 Class Initialized
INFO - 2020-01-10 12:21:09 --> URI Class Initialized
INFO - 2020-01-10 12:21:09 --> Router Class Initialized
INFO - 2020-01-10 12:21:09 --> Output Class Initialized
INFO - 2020-01-10 12:21:09 --> Security Class Initialized
DEBUG - 2020-01-10 12:21:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:21:09 --> Input Class Initialized
INFO - 2020-01-10 12:21:09 --> Language Class Initialized
INFO - 2020-01-10 12:21:09 --> Loader Class Initialized
INFO - 2020-01-10 12:21:09 --> Config Class Initialized
INFO - 2020-01-10 12:21:09 --> Helper loaded: html_helper
INFO - 2020-01-10 12:21:09 --> Hooks Class Initialized
INFO - 2020-01-10 12:21:09 --> Helper loaded: url_helper
INFO - 2020-01-10 12:21:09 --> Helper loaded: form_helper
DEBUG - 2020-01-10 12:21:09 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:21:09 --> Utf8 Class Initialized
INFO - 2020-01-10 12:21:09 --> URI Class Initialized
INFO - 2020-01-10 12:21:09 --> Router Class Initialized
INFO - 2020-01-10 12:21:09 --> Database Driver Class Initialized
INFO - 2020-01-10 12:21:09 --> Output Class Initialized
INFO - 2020-01-10 12:21:09 --> Security Class Initialized
DEBUG - 2020-01-10 12:21:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:21:09 --> Input Class Initialized
INFO - 2020-01-10 12:21:09 --> Language Class Initialized
INFO - 2020-01-10 12:21:09 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:21:09 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:21:09 --> Loader Class Initialized
INFO - 2020-01-10 12:21:09 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:21:09 --> Encryption Class Initialized
INFO - 2020-01-10 12:21:09 --> Helper loaded: html_helper
INFO - 2020-01-10 12:21:09 --> Helper loaded: url_helper
DEBUG - 2020-01-10 12:21:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:21:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:21:09 --> Helper loaded: form_helper
INFO - 2020-01-10 12:21:09 --> Controller Class Initialized
INFO - 2020-01-10 12:21:09 --> Model "Authors_model" initialized
INFO - 2020-01-10 12:21:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-10 12:21:09 --> Pagination Class Initialized
INFO - 2020-01-10 12:21:09 --> Database Driver Class Initialized
INFO - 2020-01-10 12:21:09 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2020-01-10 12:21:09 --> Final output sent to browser
DEBUG - 2020-01-10 12:21:09 --> Total execution time: 0.2300
INFO - 2020-01-10 12:21:09 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:21:09 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:21:09 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:21:09 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:21:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:21:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:21:09 --> Controller Class Initialized
INFO - 2020-01-10 12:21:09 --> Model "Authors_model" initialized
INFO - 2020-01-10 12:21:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-10 12:21:09 --> Pagination Class Initialized
INFO - 2020-01-10 12:21:09 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/activeSessions.php
INFO - 2020-01-10 12:21:09 --> Final output sent to browser
DEBUG - 2020-01-10 12:21:09 --> Total execution time: 0.1825
INFO - 2020-01-10 12:22:05 --> Config Class Initialized
INFO - 2020-01-10 12:22:05 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:22:05 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:22:05 --> Utf8 Class Initialized
INFO - 2020-01-10 12:22:05 --> URI Class Initialized
INFO - 2020-01-10 12:22:05 --> Router Class Initialized
INFO - 2020-01-10 12:22:05 --> Output Class Initialized
INFO - 2020-01-10 12:22:05 --> Security Class Initialized
DEBUG - 2020-01-10 12:22:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:22:05 --> Input Class Initialized
INFO - 2020-01-10 12:22:05 --> Language Class Initialized
INFO - 2020-01-10 12:22:05 --> Loader Class Initialized
INFO - 2020-01-10 12:22:05 --> Helper loaded: html_helper
INFO - 2020-01-10 12:22:05 --> Helper loaded: url_helper
INFO - 2020-01-10 12:22:05 --> Helper loaded: form_helper
INFO - 2020-01-10 12:22:05 --> Database Driver Class Initialized
INFO - 2020-01-10 12:22:05 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:22:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:22:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:22:05 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:22:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:22:05 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:22:05 --> Controller Class Initialized
DEBUG - 2020-01-10 12:22:05 --> Create_User constructer got called..
INFO - 2020-01-10 12:22:05 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:22:05 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:22:05 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-10 12:22:05 --> Final output sent to browser
DEBUG - 2020-01-10 12:22:05 --> Total execution time: 0.2800
INFO - 2020-01-10 12:23:04 --> Config Class Initialized
INFO - 2020-01-10 12:23:04 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:23:04 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:23:04 --> Utf8 Class Initialized
INFO - 2020-01-10 12:23:04 --> URI Class Initialized
INFO - 2020-01-10 12:23:04 --> Router Class Initialized
INFO - 2020-01-10 12:23:04 --> Output Class Initialized
INFO - 2020-01-10 12:23:04 --> Security Class Initialized
DEBUG - 2020-01-10 12:23:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:23:04 --> Input Class Initialized
INFO - 2020-01-10 12:23:04 --> Language Class Initialized
INFO - 2020-01-10 12:23:04 --> Loader Class Initialized
INFO - 2020-01-10 12:23:04 --> Helper loaded: html_helper
INFO - 2020-01-10 12:23:04 --> Helper loaded: url_helper
INFO - 2020-01-10 12:23:04 --> Helper loaded: form_helper
INFO - 2020-01-10 12:23:04 --> Database Driver Class Initialized
INFO - 2020-01-10 12:23:04 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:23:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:23:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:23:04 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:23:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:23:04 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:23:04 --> Controller Class Initialized
DEBUG - 2020-01-10 12:23:04 --> Create_User constructer got called..
INFO - 2020-01-10 12:23:04 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:23:04 --> get_group_role_mapping model = 52
DEBUG - 2020-01-10 12:23:04 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:23:04 --> Final output sent to browser
DEBUG - 2020-01-10 12:23:04 --> Total execution time: 0.2725
INFO - 2020-01-10 12:23:10 --> Config Class Initialized
INFO - 2020-01-10 12:23:10 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:23:10 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:23:10 --> Utf8 Class Initialized
INFO - 2020-01-10 12:23:10 --> URI Class Initialized
INFO - 2020-01-10 12:23:10 --> Router Class Initialized
INFO - 2020-01-10 12:23:10 --> Output Class Initialized
INFO - 2020-01-10 12:23:10 --> Security Class Initialized
DEBUG - 2020-01-10 12:23:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:23:10 --> Input Class Initialized
INFO - 2020-01-10 12:23:10 --> Language Class Initialized
INFO - 2020-01-10 12:23:10 --> Loader Class Initialized
INFO - 2020-01-10 12:23:10 --> Helper loaded: html_helper
INFO - 2020-01-10 12:23:10 --> Helper loaded: url_helper
INFO - 2020-01-10 12:23:10 --> Helper loaded: form_helper
INFO - 2020-01-10 12:23:10 --> Database Driver Class Initialized
INFO - 2020-01-10 12:23:10 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:23:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:23:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:23:10 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:23:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:23:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:23:10 --> Controller Class Initialized
DEBUG - 2020-01-10 12:23:10 --> Create_User constructer got called..
INFO - 2020-01-10 12:23:10 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:23:10 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:23:10 --> insert_data method got called from Create_User...
DEBUG - 2020-01-10 12:23:10 --> firstName :- Yugal lastName :- Ingal
DEBUG - 2020-01-10 12:23:10 --> userId :- DEV_OSS_USER mobileNumber :- 9699675725
DEBUG - 2020-01-10 12:23:10 --> userPassword :- Test@12345 isActive :- 1
DEBUG - 2020-01-10 12:23:10 --> workGroup_id :- 52 userType :- DB
INFO - 2020-01-10 12:23:10 --> store_user_name function called ...
DEBUG - 2020-01-10 12:23:10 --> Password hashing output = $2y$10$kwg6jbFNWlI1pWr30A8yReIFgWfrGIq8hXbf1XOs2qeWsnwX6AS2S
DEBUG - 2020-01-10 12:23:10 --> User inserted
INFO - 2020-01-10 12:23:10 --> store_insert_name executed successfully...
DEBUG - 2020-01-10 12:23:10 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:23:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-10 12:23:11 --> Final output sent to browser
DEBUG - 2020-01-10 12:23:11 --> Total execution time: 0.7251
INFO - 2020-01-10 12:23:17 --> Config Class Initialized
INFO - 2020-01-10 12:23:17 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:23:17 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:23:17 --> Utf8 Class Initialized
INFO - 2020-01-10 12:23:17 --> URI Class Initialized
INFO - 2020-01-10 12:23:17 --> Router Class Initialized
INFO - 2020-01-10 12:23:17 --> Output Class Initialized
INFO - 2020-01-10 12:23:17 --> Security Class Initialized
DEBUG - 2020-01-10 12:23:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:23:17 --> Input Class Initialized
INFO - 2020-01-10 12:23:17 --> Language Class Initialized
INFO - 2020-01-10 12:23:17 --> Loader Class Initialized
INFO - 2020-01-10 12:23:17 --> Helper loaded: html_helper
INFO - 2020-01-10 12:23:17 --> Helper loaded: url_helper
INFO - 2020-01-10 12:23:17 --> Helper loaded: form_helper
INFO - 2020-01-10 12:23:17 --> Database Driver Class Initialized
INFO - 2020-01-10 12:23:17 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:23:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:23:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:23:17 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:23:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:23:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:23:17 --> Controller Class Initialized
DEBUG - 2020-01-10 12:23:17 --> Create_User constructer got called..
INFO - 2020-01-10 12:23:17 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:23:17 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:23:17 --> show_users from DB
DEBUG - 2020-01-10 12:23:17 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:23:17 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:23:17 --> Final output sent to browser
DEBUG - 2020-01-10 12:23:17 --> Total execution time: 0.3250
INFO - 2020-01-10 12:23:28 --> Config Class Initialized
INFO - 2020-01-10 12:23:28 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:23:28 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:23:28 --> Utf8 Class Initialized
INFO - 2020-01-10 12:23:28 --> URI Class Initialized
INFO - 2020-01-10 12:23:28 --> Router Class Initialized
INFO - 2020-01-10 12:23:28 --> Output Class Initialized
INFO - 2020-01-10 12:23:28 --> Security Class Initialized
DEBUG - 2020-01-10 12:23:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:23:28 --> Input Class Initialized
INFO - 2020-01-10 12:23:28 --> Language Class Initialized
INFO - 2020-01-10 12:23:28 --> Loader Class Initialized
INFO - 2020-01-10 12:23:28 --> Helper loaded: html_helper
INFO - 2020-01-10 12:23:28 --> Helper loaded: url_helper
INFO - 2020-01-10 12:23:28 --> Helper loaded: form_helper
INFO - 2020-01-10 12:23:28 --> Database Driver Class Initialized
INFO - 2020-01-10 12:23:28 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:23:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:23:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:23:28 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:23:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:23:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:23:28 --> Controller Class Initialized
DEBUG - 2020-01-10 12:23:28 --> Create_User constructer got called..
INFO - 2020-01-10 12:23:28 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:23:28 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:23:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-10 12:23:28 --> Final output sent to browser
DEBUG - 2020-01-10 12:23:28 --> Total execution time: 0.2650
INFO - 2020-01-10 12:24:17 --> Config Class Initialized
INFO - 2020-01-10 12:24:17 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:24:17 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:24:17 --> Utf8 Class Initialized
INFO - 2020-01-10 12:24:17 --> URI Class Initialized
INFO - 2020-01-10 12:24:17 --> Router Class Initialized
INFO - 2020-01-10 12:24:17 --> Output Class Initialized
INFO - 2020-01-10 12:24:17 --> Security Class Initialized
DEBUG - 2020-01-10 12:24:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:24:17 --> Input Class Initialized
INFO - 2020-01-10 12:24:17 --> Language Class Initialized
INFO - 2020-01-10 12:24:17 --> Loader Class Initialized
INFO - 2020-01-10 12:24:17 --> Helper loaded: html_helper
INFO - 2020-01-10 12:24:17 --> Helper loaded: url_helper
INFO - 2020-01-10 12:24:17 --> Helper loaded: form_helper
INFO - 2020-01-10 12:24:17 --> Database Driver Class Initialized
INFO - 2020-01-10 12:24:17 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:24:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:24:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:24:17 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:24:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:24:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:24:17 --> Controller Class Initialized
DEBUG - 2020-01-10 12:24:17 --> Create_User constructer got called..
INFO - 2020-01-10 12:24:17 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:24:17 --> get_group_role_mapping model = 52
DEBUG - 2020-01-10 12:24:17 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:24:17 --> Final output sent to browser
DEBUG - 2020-01-10 12:24:17 --> Total execution time: 0.3125
INFO - 2020-01-10 12:24:20 --> Config Class Initialized
INFO - 2020-01-10 12:24:20 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:24:20 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:24:20 --> Utf8 Class Initialized
INFO - 2020-01-10 12:24:20 --> URI Class Initialized
INFO - 2020-01-10 12:24:20 --> Router Class Initialized
INFO - 2020-01-10 12:24:20 --> Output Class Initialized
INFO - 2020-01-10 12:24:20 --> Security Class Initialized
DEBUG - 2020-01-10 12:24:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:24:20 --> Input Class Initialized
INFO - 2020-01-10 12:24:20 --> Language Class Initialized
INFO - 2020-01-10 12:24:21 --> Loader Class Initialized
INFO - 2020-01-10 12:24:21 --> Helper loaded: html_helper
INFO - 2020-01-10 12:24:21 --> Helper loaded: url_helper
INFO - 2020-01-10 12:24:21 --> Helper loaded: form_helper
INFO - 2020-01-10 12:24:21 --> Database Driver Class Initialized
INFO - 2020-01-10 12:24:21 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:24:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:24:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:24:21 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:24:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:24:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:24:21 --> Controller Class Initialized
DEBUG - 2020-01-10 12:24:21 --> Create_User constructer got called..
INFO - 2020-01-10 12:24:21 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:24:21 --> get_group_role_mapping model = 43
DEBUG - 2020-01-10 12:24:21 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:24:21 --> Final output sent to browser
DEBUG - 2020-01-10 12:24:21 --> Total execution time: 0.2550
INFO - 2020-01-10 12:24:25 --> Config Class Initialized
INFO - 2020-01-10 12:24:25 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:24:25 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:24:25 --> Utf8 Class Initialized
INFO - 2020-01-10 12:24:25 --> URI Class Initialized
INFO - 2020-01-10 12:24:25 --> Router Class Initialized
INFO - 2020-01-10 12:24:25 --> Output Class Initialized
INFO - 2020-01-10 12:24:25 --> Security Class Initialized
DEBUG - 2020-01-10 12:24:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:24:25 --> Input Class Initialized
INFO - 2020-01-10 12:24:25 --> Language Class Initialized
INFO - 2020-01-10 12:24:25 --> Loader Class Initialized
INFO - 2020-01-10 12:24:25 --> Helper loaded: html_helper
INFO - 2020-01-10 12:24:25 --> Helper loaded: url_helper
INFO - 2020-01-10 12:24:25 --> Helper loaded: form_helper
INFO - 2020-01-10 12:24:25 --> Database Driver Class Initialized
INFO - 2020-01-10 12:24:25 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:24:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:24:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:24:25 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:24:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:24:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:24:25 --> Controller Class Initialized
DEBUG - 2020-01-10 12:24:25 --> Create_User constructer got called..
INFO - 2020-01-10 12:24:25 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:24:25 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:24:25 --> insert_data method got called from Create_User...
DEBUG - 2020-01-10 12:24:25 --> firstName :- Abhay lastName :- Patil
DEBUG - 2020-01-10 12:24:25 --> userId :- DEV_OSS_USER1 mobileNumber :- 9699675725
DEBUG - 2020-01-10 12:24:25 --> userPassword :- NA isActive :- 1
DEBUG - 2020-01-10 12:24:25 --> workGroup_id :- 43 userType :- AD
INFO - 2020-01-10 12:24:25 --> store_user_name function called ...
DEBUG - 2020-01-10 12:24:26 --> Password hashing output = $2y$10$khkhipwa7IMlEUd3ZEClweNro8XJT8XaqssbmYSMU5SOutdBGBjiK
DEBUG - 2020-01-10 12:24:26 --> User inserted
INFO - 2020-01-10 12:24:26 --> store_insert_name executed successfully...
DEBUG - 2020-01-10 12:24:26 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:24:26 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-10 12:24:26 --> Final output sent to browser
DEBUG - 2020-01-10 12:24:26 --> Total execution time: 0.6726
INFO - 2020-01-10 12:24:28 --> Config Class Initialized
INFO - 2020-01-10 12:24:28 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:24:28 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:24:28 --> Utf8 Class Initialized
INFO - 2020-01-10 12:24:28 --> URI Class Initialized
INFO - 2020-01-10 12:24:28 --> Router Class Initialized
INFO - 2020-01-10 12:24:28 --> Output Class Initialized
INFO - 2020-01-10 12:24:28 --> Security Class Initialized
DEBUG - 2020-01-10 12:24:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:24:28 --> Input Class Initialized
INFO - 2020-01-10 12:24:28 --> Language Class Initialized
INFO - 2020-01-10 12:24:28 --> Loader Class Initialized
INFO - 2020-01-10 12:24:28 --> Helper loaded: html_helper
INFO - 2020-01-10 12:24:28 --> Helper loaded: url_helper
INFO - 2020-01-10 12:24:28 --> Helper loaded: form_helper
INFO - 2020-01-10 12:24:28 --> Database Driver Class Initialized
INFO - 2020-01-10 12:24:28 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:24:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:24:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:24:28 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:24:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:24:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:24:28 --> Controller Class Initialized
DEBUG - 2020-01-10 12:24:28 --> Create_User constructer got called..
INFO - 2020-01-10 12:24:28 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:24:28 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:24:29 --> show_users from DB
DEBUG - 2020-01-10 12:24:29 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:24:29 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:24:29 --> Final output sent to browser
DEBUG - 2020-01-10 12:24:29 --> Total execution time: 0.3000
INFO - 2020-01-10 12:25:13 --> Config Class Initialized
INFO - 2020-01-10 12:25:13 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:25:13 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:25:13 --> Utf8 Class Initialized
INFO - 2020-01-10 12:25:13 --> URI Class Initialized
INFO - 2020-01-10 12:25:13 --> Router Class Initialized
INFO - 2020-01-10 12:25:13 --> Output Class Initialized
INFO - 2020-01-10 12:25:13 --> Security Class Initialized
DEBUG - 2020-01-10 12:25:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:25:13 --> Input Class Initialized
INFO - 2020-01-10 12:25:13 --> Language Class Initialized
INFO - 2020-01-10 12:25:13 --> Loader Class Initialized
INFO - 2020-01-10 12:25:13 --> Helper loaded: html_helper
INFO - 2020-01-10 12:25:13 --> Helper loaded: url_helper
INFO - 2020-01-10 12:25:13 --> Helper loaded: form_helper
INFO - 2020-01-10 12:25:13 --> Database Driver Class Initialized
INFO - 2020-01-10 12:25:13 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:25:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:25:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:25:13 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:25:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:25:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:25:13 --> Controller Class Initialized
DEBUG - 2020-01-10 12:25:13 --> Create_User constructer got called..
INFO - 2020-01-10 12:25:13 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:25:13 --> get_group_role_mapping model = 52
DEBUG - 2020-01-10 12:25:13 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:25:13 --> Final output sent to browser
DEBUG - 2020-01-10 12:25:13 --> Total execution time: 0.2750
INFO - 2020-01-10 12:25:22 --> Config Class Initialized
INFO - 2020-01-10 12:25:22 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:25:22 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:25:22 --> Utf8 Class Initialized
INFO - 2020-01-10 12:25:22 --> URI Class Initialized
INFO - 2020-01-10 12:25:22 --> Router Class Initialized
INFO - 2020-01-10 12:25:22 --> Output Class Initialized
INFO - 2020-01-10 12:25:22 --> Security Class Initialized
DEBUG - 2020-01-10 12:25:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:25:22 --> Input Class Initialized
INFO - 2020-01-10 12:25:22 --> Language Class Initialized
INFO - 2020-01-10 12:25:22 --> Loader Class Initialized
INFO - 2020-01-10 12:25:22 --> Helper loaded: html_helper
INFO - 2020-01-10 12:25:22 --> Helper loaded: url_helper
INFO - 2020-01-10 12:25:22 --> Helper loaded: form_helper
INFO - 2020-01-10 12:25:22 --> Database Driver Class Initialized
INFO - 2020-01-10 12:25:22 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:25:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:25:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:25:22 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:25:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:25:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:25:22 --> Controller Class Initialized
DEBUG - 2020-01-10 12:25:22 --> Create_User constructer got called..
INFO - 2020-01-10 12:25:22 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:25:22 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:25:22 --> show_users from DB
DEBUG - 2020-01-10 12:25:22 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:25:22 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:25:22 --> Final output sent to browser
DEBUG - 2020-01-10 12:25:22 --> Total execution time: 0.2850
INFO - 2020-01-10 12:25:37 --> Config Class Initialized
INFO - 2020-01-10 12:25:37 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:25:37 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:25:37 --> Utf8 Class Initialized
INFO - 2020-01-10 12:25:37 --> URI Class Initialized
INFO - 2020-01-10 12:25:37 --> Router Class Initialized
INFO - 2020-01-10 12:25:37 --> Output Class Initialized
INFO - 2020-01-10 12:25:37 --> Security Class Initialized
DEBUG - 2020-01-10 12:25:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:25:37 --> Input Class Initialized
INFO - 2020-01-10 12:25:37 --> Language Class Initialized
INFO - 2020-01-10 12:25:37 --> Loader Class Initialized
INFO - 2020-01-10 12:25:37 --> Helper loaded: html_helper
INFO - 2020-01-10 12:25:38 --> Helper loaded: url_helper
INFO - 2020-01-10 12:25:38 --> Helper loaded: form_helper
INFO - 2020-01-10 12:25:38 --> Database Driver Class Initialized
INFO - 2020-01-10 12:25:38 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:25:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:25:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:25:38 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:25:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:25:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:25:38 --> Controller Class Initialized
DEBUG - 2020-01-10 12:25:38 --> Create_User constructer got called..
INFO - 2020-01-10 12:25:38 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:25:38 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:25:38 --> show_users from DB
DEBUG - 2020-01-10 12:25:38 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:25:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:25:38 --> Final output sent to browser
DEBUG - 2020-01-10 12:25:38 --> Total execution time: 0.2575
INFO - 2020-01-10 12:28:24 --> Config Class Initialized
INFO - 2020-01-10 12:28:24 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:28:24 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:28:24 --> Utf8 Class Initialized
INFO - 2020-01-10 12:28:24 --> URI Class Initialized
INFO - 2020-01-10 12:28:24 --> Router Class Initialized
INFO - 2020-01-10 12:28:24 --> Output Class Initialized
INFO - 2020-01-10 12:28:24 --> Security Class Initialized
DEBUG - 2020-01-10 12:28:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:28:24 --> Input Class Initialized
INFO - 2020-01-10 12:28:24 --> Language Class Initialized
INFO - 2020-01-10 12:28:24 --> Loader Class Initialized
INFO - 2020-01-10 12:28:24 --> Helper loaded: html_helper
INFO - 2020-01-10 12:28:24 --> Helper loaded: url_helper
INFO - 2020-01-10 12:28:24 --> Helper loaded: form_helper
INFO - 2020-01-10 12:28:24 --> Database Driver Class Initialized
INFO - 2020-01-10 12:28:24 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:28:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:28:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:28:24 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:28:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:28:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:28:24 --> Controller Class Initialized
DEBUG - 2020-01-10 12:28:24 --> Create_User constructer got called..
INFO - 2020-01-10 12:28:24 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:28:24 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:28:24 --> show_users from DB
DEBUG - 2020-01-10 12:28:24 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:28:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:28:24 --> Final output sent to browser
DEBUG - 2020-01-10 12:28:24 --> Total execution time: 0.3450
INFO - 2020-01-10 12:28:33 --> Config Class Initialized
INFO - 2020-01-10 12:28:33 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:28:33 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:28:33 --> Utf8 Class Initialized
INFO - 2020-01-10 12:28:33 --> URI Class Initialized
INFO - 2020-01-10 12:28:33 --> Router Class Initialized
INFO - 2020-01-10 12:28:33 --> Output Class Initialized
INFO - 2020-01-10 12:28:33 --> Security Class Initialized
DEBUG - 2020-01-10 12:28:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:28:33 --> Input Class Initialized
INFO - 2020-01-10 12:28:33 --> Language Class Initialized
INFO - 2020-01-10 12:28:33 --> Loader Class Initialized
INFO - 2020-01-10 12:28:33 --> Helper loaded: html_helper
INFO - 2020-01-10 12:28:33 --> Helper loaded: url_helper
INFO - 2020-01-10 12:28:33 --> Helper loaded: form_helper
INFO - 2020-01-10 12:28:33 --> Database Driver Class Initialized
INFO - 2020-01-10 12:28:33 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:28:33 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:28:33 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:28:33 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:28:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:28:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:28:33 --> Controller Class Initialized
DEBUG - 2020-01-10 12:28:33 --> Create_User constructer got called..
INFO - 2020-01-10 12:28:33 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:28:33 --> get_group_role_mapping model = 52
DEBUG - 2020-01-10 12:28:33 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:28:33 --> Final output sent to browser
DEBUG - 2020-01-10 12:28:33 --> Total execution time: 0.2400
INFO - 2020-01-10 12:28:36 --> Config Class Initialized
INFO - 2020-01-10 12:28:36 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:28:36 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:28:36 --> Utf8 Class Initialized
INFO - 2020-01-10 12:28:36 --> URI Class Initialized
INFO - 2020-01-10 12:28:36 --> Router Class Initialized
INFO - 2020-01-10 12:28:36 --> Output Class Initialized
INFO - 2020-01-10 12:28:36 --> Security Class Initialized
DEBUG - 2020-01-10 12:28:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:28:36 --> Input Class Initialized
INFO - 2020-01-10 12:28:36 --> Language Class Initialized
INFO - 2020-01-10 12:28:36 --> Loader Class Initialized
INFO - 2020-01-10 12:28:36 --> Helper loaded: html_helper
INFO - 2020-01-10 12:28:36 --> Helper loaded: url_helper
INFO - 2020-01-10 12:28:36 --> Helper loaded: form_helper
INFO - 2020-01-10 12:28:36 --> Database Driver Class Initialized
INFO - 2020-01-10 12:28:36 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:28:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:28:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:28:36 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:28:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:28:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:28:36 --> Controller Class Initialized
DEBUG - 2020-01-10 12:28:36 --> Create_User constructer got called..
DEBUG - 2020-01-10 12:28:36 --> function inserUserAj executed....
DEBUG - 2020-01-10 12:28:36 --> form validation function apply....
INFO - 2020-01-10 12:28:36 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2020-01-10 12:28:36 --> form validation SUCCESS.........
DEBUG - 2020-01-10 12:28:36 --> removed html escape character SUCCESS.........
DEBUG - 2020-01-10 12:28:36 --> Received data from post method SUCCESS.........
INFO - 2020-01-10 12:28:36 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:28:36 --> loading module
DEBUG - 2020-01-10 12:28:36 --> modify user function got called....
DEBUG - 2020-01-10 12:28:36 --> Query = UPDATE `tblusers` SET `firstName` = 'Niraj', `lastName` = 'Mhatre', `userId` = 'DevOss', `mobileNumber` = '0000000000', `isActive` = '1', `lastUpdationDate` = '2020-01-10 12:28:36', `workGroup_id` = '52', `userType` = 'DB', `domainName` = 'NA', `subGroup` = '16'
WHERE `id` = '9'
DEBUG - 2020-01-10 12:28:36 --> update query executed....1
DEBUG - 2020-01-10 12:28:36 --> module run finished .. result = 1
INFO - 2020-01-10 12:28:36 --> Final output sent to browser
DEBUG - 2020-01-10 12:28:36 --> Total execution time: 0.4750
INFO - 2020-01-10 12:28:38 --> Config Class Initialized
INFO - 2020-01-10 12:28:38 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:28:38 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:28:38 --> Utf8 Class Initialized
INFO - 2020-01-10 12:28:38 --> URI Class Initialized
INFO - 2020-01-10 12:28:38 --> Router Class Initialized
INFO - 2020-01-10 12:28:38 --> Output Class Initialized
INFO - 2020-01-10 12:28:38 --> Security Class Initialized
DEBUG - 2020-01-10 12:28:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:28:38 --> Input Class Initialized
INFO - 2020-01-10 12:28:38 --> Language Class Initialized
INFO - 2020-01-10 12:28:38 --> Loader Class Initialized
INFO - 2020-01-10 12:28:38 --> Helper loaded: html_helper
INFO - 2020-01-10 12:28:38 --> Helper loaded: url_helper
INFO - 2020-01-10 12:28:38 --> Helper loaded: form_helper
INFO - 2020-01-10 12:28:38 --> Database Driver Class Initialized
INFO - 2020-01-10 12:28:38 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:28:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:28:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:28:38 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:28:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:28:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:28:38 --> Controller Class Initialized
DEBUG - 2020-01-10 12:28:38 --> Create_User constructer got called..
INFO - 2020-01-10 12:28:38 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:28:38 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:28:38 --> show_users from DB
DEBUG - 2020-01-10 12:28:38 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:28:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:28:38 --> Final output sent to browser
DEBUG - 2020-01-10 12:28:38 --> Total execution time: 0.3000
INFO - 2020-01-10 12:28:49 --> Config Class Initialized
INFO - 2020-01-10 12:28:49 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:28:49 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:28:49 --> Utf8 Class Initialized
INFO - 2020-01-10 12:28:49 --> URI Class Initialized
INFO - 2020-01-10 12:28:49 --> Router Class Initialized
INFO - 2020-01-10 12:28:49 --> Output Class Initialized
INFO - 2020-01-10 12:28:50 --> Security Class Initialized
DEBUG - 2020-01-10 12:28:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:28:50 --> Input Class Initialized
INFO - 2020-01-10 12:28:50 --> Language Class Initialized
INFO - 2020-01-10 12:28:50 --> Loader Class Initialized
INFO - 2020-01-10 12:28:50 --> Helper loaded: html_helper
INFO - 2020-01-10 12:28:50 --> Helper loaded: url_helper
INFO - 2020-01-10 12:28:50 --> Helper loaded: form_helper
INFO - 2020-01-10 12:28:50 --> Database Driver Class Initialized
INFO - 2020-01-10 12:28:50 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:28:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:28:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:28:50 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:28:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:28:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:28:50 --> Controller Class Initialized
DEBUG - 2020-01-10 12:28:50 --> Create_User constructer got called..
INFO - 2020-01-10 12:28:50 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:28:50 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:28:50 --> show_groups from DB
INFO - 2020-01-10 12:28:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2020-01-10 12:28:50 --> Final output sent to browser
DEBUG - 2020-01-10 12:28:50 --> Total execution time: 0.3200
INFO - 2020-01-10 12:29:25 --> Config Class Initialized
INFO - 2020-01-10 12:29:25 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:29:25 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:29:25 --> Utf8 Class Initialized
INFO - 2020-01-10 12:29:25 --> URI Class Initialized
INFO - 2020-01-10 12:29:25 --> Router Class Initialized
INFO - 2020-01-10 12:29:25 --> Output Class Initialized
INFO - 2020-01-10 12:29:25 --> Security Class Initialized
DEBUG - 2020-01-10 12:29:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:29:25 --> Input Class Initialized
INFO - 2020-01-10 12:29:25 --> Language Class Initialized
INFO - 2020-01-10 12:29:25 --> Loader Class Initialized
INFO - 2020-01-10 12:29:25 --> Helper loaded: html_helper
INFO - 2020-01-10 12:29:25 --> Helper loaded: url_helper
INFO - 2020-01-10 12:29:25 --> Helper loaded: form_helper
INFO - 2020-01-10 12:29:25 --> Database Driver Class Initialized
INFO - 2020-01-10 12:29:25 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:29:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:29:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:29:25 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:29:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:29:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:29:25 --> Controller Class Initialized
DEBUG - 2020-01-10 12:29:25 --> Create_User constructer got called..
DEBUG - 2020-01-10 12:29:25 --> insert group data Aj called...
INFO - 2020-01-10 12:29:25 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:29:25 --> form validation successfull...
DEBUG - 2020-01-10 12:29:25 --> Group inserted
DEBUG - 2020-01-10 12:29:25 --> store group name model called....
DEBUG - 2020-01-10 12:29:25 --> db status ok...1
DEBUG - 2020-01-10 12:29:25 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:29:26 --> Final output sent to browser
DEBUG - 2020-01-10 12:29:26 --> Total execution time: 0.3850
INFO - 2020-01-10 12:29:28 --> Config Class Initialized
INFO - 2020-01-10 12:29:28 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:29:28 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:29:28 --> Utf8 Class Initialized
INFO - 2020-01-10 12:29:28 --> URI Class Initialized
INFO - 2020-01-10 12:29:28 --> Router Class Initialized
INFO - 2020-01-10 12:29:28 --> Output Class Initialized
INFO - 2020-01-10 12:29:28 --> Security Class Initialized
DEBUG - 2020-01-10 12:29:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:29:28 --> Input Class Initialized
INFO - 2020-01-10 12:29:28 --> Language Class Initialized
INFO - 2020-01-10 12:29:28 --> Loader Class Initialized
INFO - 2020-01-10 12:29:28 --> Helper loaded: html_helper
INFO - 2020-01-10 12:29:28 --> Helper loaded: url_helper
INFO - 2020-01-10 12:29:28 --> Helper loaded: form_helper
INFO - 2020-01-10 12:29:28 --> Database Driver Class Initialized
INFO - 2020-01-10 12:29:28 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:29:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:29:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:29:28 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:29:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:29:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:29:28 --> Controller Class Initialized
DEBUG - 2020-01-10 12:29:28 --> Create_User constructer got called..
INFO - 2020-01-10 12:29:28 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:29:28 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:29:28 --> show_groups from DB
INFO - 2020-01-10 12:29:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2020-01-10 12:29:28 --> Final output sent to browser
DEBUG - 2020-01-10 12:29:28 --> Total execution time: 0.3125
INFO - 2020-01-10 12:29:37 --> Config Class Initialized
INFO - 2020-01-10 12:29:37 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:29:37 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:29:37 --> Utf8 Class Initialized
INFO - 2020-01-10 12:29:37 --> URI Class Initialized
INFO - 2020-01-10 12:29:37 --> Router Class Initialized
INFO - 2020-01-10 12:29:37 --> Output Class Initialized
INFO - 2020-01-10 12:29:37 --> Security Class Initialized
DEBUG - 2020-01-10 12:29:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:29:37 --> Input Class Initialized
INFO - 2020-01-10 12:29:37 --> Language Class Initialized
INFO - 2020-01-10 12:29:37 --> Loader Class Initialized
INFO - 2020-01-10 12:29:37 --> Helper loaded: html_helper
INFO - 2020-01-10 12:29:37 --> Helper loaded: url_helper
INFO - 2020-01-10 12:29:37 --> Helper loaded: form_helper
INFO - 2020-01-10 12:29:37 --> Database Driver Class Initialized
INFO - 2020-01-10 12:29:37 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:29:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:29:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:29:37 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:29:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:29:37 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:29:37 --> Controller Class Initialized
DEBUG - 2020-01-10 12:29:37 --> Create_User constructer got called..
INFO - 2020-01-10 12:29:37 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:29:37 --> getAllSubgroup model
DEBUG - 2020-01-10 12:29:37 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-10 12:29:37 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:29:37 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2020-01-10 12:29:37 --> Final output sent to browser
DEBUG - 2020-01-10 12:29:37 --> Total execution time: 0.3850
INFO - 2020-01-10 12:29:43 --> Config Class Initialized
INFO - 2020-01-10 12:29:43 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:29:43 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:29:43 --> Utf8 Class Initialized
INFO - 2020-01-10 12:29:43 --> URI Class Initialized
INFO - 2020-01-10 12:29:43 --> Router Class Initialized
INFO - 2020-01-10 12:29:43 --> Output Class Initialized
INFO - 2020-01-10 12:29:43 --> Security Class Initialized
DEBUG - 2020-01-10 12:29:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:29:43 --> Input Class Initialized
INFO - 2020-01-10 12:29:43 --> Language Class Initialized
INFO - 2020-01-10 12:29:43 --> Loader Class Initialized
INFO - 2020-01-10 12:29:43 --> Helper loaded: html_helper
INFO - 2020-01-10 12:29:43 --> Helper loaded: url_helper
INFO - 2020-01-10 12:29:43 --> Helper loaded: form_helper
INFO - 2020-01-10 12:29:43 --> Database Driver Class Initialized
INFO - 2020-01-10 12:29:43 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:29:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:29:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:29:43 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:29:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:29:43 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:29:43 --> Controller Class Initialized
DEBUG - 2020-01-10 12:29:43 --> Create_User constructer got called..
INFO - 2020-01-10 12:29:43 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:29:43 --> get_group_role_mapping model = 57
DEBUG - 2020-01-10 12:29:43 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:29:43 --> Final output sent to browser
DEBUG - 2020-01-10 12:29:43 --> Total execution time: 0.2775
INFO - 2020-01-10 12:29:44 --> Config Class Initialized
INFO - 2020-01-10 12:29:44 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:29:44 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:29:44 --> Utf8 Class Initialized
INFO - 2020-01-10 12:29:44 --> URI Class Initialized
INFO - 2020-01-10 12:29:44 --> Router Class Initialized
INFO - 2020-01-10 12:29:44 --> Output Class Initialized
INFO - 2020-01-10 12:29:44 --> Security Class Initialized
DEBUG - 2020-01-10 12:29:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:29:44 --> Input Class Initialized
INFO - 2020-01-10 12:29:44 --> Language Class Initialized
INFO - 2020-01-10 12:29:44 --> Loader Class Initialized
INFO - 2020-01-10 12:29:44 --> Helper loaded: html_helper
INFO - 2020-01-10 12:29:44 --> Helper loaded: url_helper
INFO - 2020-01-10 12:29:44 --> Helper loaded: form_helper
INFO - 2020-01-10 12:29:44 --> Database Driver Class Initialized
INFO - 2020-01-10 12:29:44 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:29:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:29:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:29:44 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:29:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:29:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:29:44 --> Controller Class Initialized
DEBUG - 2020-01-10 12:29:44 --> Create_User constructer got called..
INFO - 2020-01-10 12:29:44 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:29:44 --> getAllSubGroupData model = 
DEBUG - 2020-01-10 12:29:44 --> getAllSubGroupData from DB retrived
INFO - 2020-01-10 12:29:44 --> Final output sent to browser
DEBUG - 2020-01-10 12:29:44 --> Total execution time: 0.2800
INFO - 2020-01-10 12:29:55 --> Config Class Initialized
INFO - 2020-01-10 12:29:55 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:29:55 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:29:55 --> Utf8 Class Initialized
INFO - 2020-01-10 12:29:55 --> URI Class Initialized
INFO - 2020-01-10 12:29:55 --> Router Class Initialized
INFO - 2020-01-10 12:29:55 --> Output Class Initialized
INFO - 2020-01-10 12:29:55 --> Security Class Initialized
DEBUG - 2020-01-10 12:29:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:29:55 --> Input Class Initialized
INFO - 2020-01-10 12:29:55 --> Language Class Initialized
INFO - 2020-01-10 12:29:55 --> Loader Class Initialized
INFO - 2020-01-10 12:29:55 --> Helper loaded: html_helper
INFO - 2020-01-10 12:29:55 --> Helper loaded: url_helper
INFO - 2020-01-10 12:29:55 --> Helper loaded: form_helper
INFO - 2020-01-10 12:29:55 --> Database Driver Class Initialized
INFO - 2020-01-10 12:29:55 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:29:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:29:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:29:55 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:29:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:29:55 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:29:55 --> Controller Class Initialized
DEBUG - 2020-01-10 12:29:55 --> Create_User constructer got called..
INFO - 2020-01-10 12:29:55 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:29:55 --> insert_role_access model
DEBUG - 2020-01-10 12:29:55 --> BEGIN role insertion...
ERROR - 2020-01-10 12:29:55 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`oneossdb`.`group_role_map`, CONSTRAINT `FK_SUBGP` FOREIGN KEY (`subGroupId`) REFERENCES `group_sub_group_map` (`subGroupId`)) - Invalid query: INSERT INTO `group_role_map` (`subGroupId`, `roleId`, `roleKey`) VALUES ('', '1', 'crtuser')
INFO - 2020-01-10 12:29:55 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-10 12:31:35 --> Config Class Initialized
INFO - 2020-01-10 12:31:35 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:31:35 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:31:35 --> Utf8 Class Initialized
INFO - 2020-01-10 12:31:35 --> URI Class Initialized
INFO - 2020-01-10 12:31:35 --> Router Class Initialized
INFO - 2020-01-10 12:31:35 --> Output Class Initialized
INFO - 2020-01-10 12:31:35 --> Security Class Initialized
DEBUG - 2020-01-10 12:31:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:31:35 --> Input Class Initialized
INFO - 2020-01-10 12:31:35 --> Language Class Initialized
INFO - 2020-01-10 12:31:35 --> Loader Class Initialized
INFO - 2020-01-10 12:31:35 --> Helper loaded: html_helper
INFO - 2020-01-10 12:31:35 --> Helper loaded: url_helper
INFO - 2020-01-10 12:31:35 --> Helper loaded: form_helper
INFO - 2020-01-10 12:31:35 --> Database Driver Class Initialized
INFO - 2020-01-10 12:31:35 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:31:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:31:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:31:35 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:31:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:31:35 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:31:35 --> Controller Class Initialized
DEBUG - 2020-01-10 12:31:35 --> Create_User constructer got called..
INFO - 2020-01-10 12:31:35 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:31:35 --> insert_role_access model
DEBUG - 2020-01-10 12:31:35 --> BEGIN role insertion...
ERROR - 2020-01-10 12:31:36 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`oneossdb`.`group_role_map`, CONSTRAINT `FK_SUBGP` FOREIGN KEY (`subGroupId`) REFERENCES `group_sub_group_map` (`subGroupId`)) - Invalid query: INSERT INTO `group_role_map` (`subGroupId`, `roleId`, `roleKey`) VALUES ('', '1', 'crtuser')
INFO - 2020-01-10 12:31:36 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-10 12:31:42 --> Config Class Initialized
INFO - 2020-01-10 12:31:42 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:31:42 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:31:42 --> Utf8 Class Initialized
INFO - 2020-01-10 12:31:42 --> URI Class Initialized
INFO - 2020-01-10 12:31:42 --> Router Class Initialized
INFO - 2020-01-10 12:31:42 --> Output Class Initialized
INFO - 2020-01-10 12:31:42 --> Security Class Initialized
DEBUG - 2020-01-10 12:31:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:31:42 --> Input Class Initialized
INFO - 2020-01-10 12:31:42 --> Language Class Initialized
INFO - 2020-01-10 12:31:42 --> Loader Class Initialized
INFO - 2020-01-10 12:31:42 --> Helper loaded: html_helper
INFO - 2020-01-10 12:31:42 --> Helper loaded: url_helper
INFO - 2020-01-10 12:31:42 --> Helper loaded: form_helper
INFO - 2020-01-10 12:31:42 --> Database Driver Class Initialized
INFO - 2020-01-10 12:31:42 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:31:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:31:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:31:42 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:31:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:31:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:31:42 --> Controller Class Initialized
DEBUG - 2020-01-10 12:31:42 --> Create_User constructer got called..
INFO - 2020-01-10 12:31:42 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:31:42 --> insert_role_access model
DEBUG - 2020-01-10 12:31:42 --> BEGIN role insertion...
ERROR - 2020-01-10 12:31:42 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`oneossdb`.`group_role_map`, CONSTRAINT `FK_SUBGP` FOREIGN KEY (`subGroupId`) REFERENCES `group_sub_group_map` (`subGroupId`)) - Invalid query: INSERT INTO `group_role_map` (`subGroupId`, `roleId`, `roleKey`) VALUES ('', '1', 'crtuser')
INFO - 2020-01-10 12:31:42 --> Language file loaded: language/english/db_lang.php
INFO - 2020-01-10 12:40:04 --> Config Class Initialized
INFO - 2020-01-10 12:40:04 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:40:04 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:40:04 --> Utf8 Class Initialized
INFO - 2020-01-10 12:40:04 --> URI Class Initialized
INFO - 2020-01-10 12:40:04 --> Router Class Initialized
INFO - 2020-01-10 12:40:04 --> Output Class Initialized
INFO - 2020-01-10 12:40:04 --> Security Class Initialized
DEBUG - 2020-01-10 12:40:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:40:04 --> Input Class Initialized
INFO - 2020-01-10 12:40:04 --> Language Class Initialized
INFO - 2020-01-10 12:40:04 --> Loader Class Initialized
INFO - 2020-01-10 12:40:04 --> Helper loaded: html_helper
INFO - 2020-01-10 12:40:04 --> Helper loaded: url_helper
INFO - 2020-01-10 12:40:04 --> Helper loaded: form_helper
INFO - 2020-01-10 12:40:04 --> Database Driver Class Initialized
INFO - 2020-01-10 12:40:04 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:40:04 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:40:04 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:40:04 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:40:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:40:04 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:40:04 --> Controller Class Initialized
DEBUG - 2020-01-10 12:40:04 --> Create_User constructer got called..
INFO - 2020-01-10 12:40:04 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:40:04 --> getAllSubgroup model
DEBUG - 2020-01-10 12:40:04 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-10 12:40:04 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:40:04 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2020-01-10 12:40:04 --> Final output sent to browser
DEBUG - 2020-01-10 12:40:04 --> Total execution time: 0.3250
INFO - 2020-01-10 12:40:17 --> Config Class Initialized
INFO - 2020-01-10 12:40:17 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:40:17 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:40:17 --> Utf8 Class Initialized
INFO - 2020-01-10 12:40:17 --> URI Class Initialized
INFO - 2020-01-10 12:40:17 --> Router Class Initialized
INFO - 2020-01-10 12:40:17 --> Output Class Initialized
INFO - 2020-01-10 12:40:17 --> Security Class Initialized
DEBUG - 2020-01-10 12:40:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:40:17 --> Input Class Initialized
INFO - 2020-01-10 12:40:17 --> Language Class Initialized
INFO - 2020-01-10 12:40:17 --> Loader Class Initialized
INFO - 2020-01-10 12:40:17 --> Helper loaded: html_helper
INFO - 2020-01-10 12:40:17 --> Helper loaded: url_helper
INFO - 2020-01-10 12:40:17 --> Helper loaded: form_helper
INFO - 2020-01-10 12:40:17 --> Database Driver Class Initialized
INFO - 2020-01-10 12:40:17 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:40:17 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:40:17 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:40:17 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:40:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:40:17 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:40:17 --> Controller Class Initialized
DEBUG - 2020-01-10 12:40:17 --> Create_User constructer got called..
INFO - 2020-01-10 12:40:17 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:40:17 --> get_group_role_mapping model = 52
DEBUG - 2020-01-10 12:40:18 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:40:18 --> Final output sent to browser
DEBUG - 2020-01-10 12:40:18 --> Total execution time: 0.2525
INFO - 2020-01-10 12:41:14 --> Config Class Initialized
INFO - 2020-01-10 12:41:14 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:41:14 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:41:14 --> Utf8 Class Initialized
INFO - 2020-01-10 12:41:14 --> URI Class Initialized
INFO - 2020-01-10 12:41:14 --> Router Class Initialized
INFO - 2020-01-10 12:41:14 --> Output Class Initialized
INFO - 2020-01-10 12:41:14 --> Security Class Initialized
DEBUG - 2020-01-10 12:41:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:41:14 --> Input Class Initialized
INFO - 2020-01-10 12:41:14 --> Language Class Initialized
INFO - 2020-01-10 12:41:14 --> Loader Class Initialized
INFO - 2020-01-10 12:41:14 --> Helper loaded: html_helper
INFO - 2020-01-10 12:41:14 --> Helper loaded: url_helper
INFO - 2020-01-10 12:41:14 --> Helper loaded: form_helper
INFO - 2020-01-10 12:41:14 --> Database Driver Class Initialized
INFO - 2020-01-10 12:41:14 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:41:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:41:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:41:14 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:41:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:41:14 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:41:14 --> Controller Class Initialized
DEBUG - 2020-01-10 12:41:14 --> Create_User constructer got called..
INFO - 2020-01-10 12:41:14 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:41:14 --> getAllSubgroup model
DEBUG - 2020-01-10 12:41:14 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-10 12:41:14 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:41:14 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2020-01-10 12:41:14 --> Final output sent to browser
DEBUG - 2020-01-10 12:41:14 --> Total execution time: 0.3200
INFO - 2020-01-10 12:41:21 --> Config Class Initialized
INFO - 2020-01-10 12:41:21 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:41:21 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:41:21 --> Utf8 Class Initialized
INFO - 2020-01-10 12:41:21 --> URI Class Initialized
INFO - 2020-01-10 12:41:21 --> Router Class Initialized
INFO - 2020-01-10 12:41:21 --> Output Class Initialized
INFO - 2020-01-10 12:41:21 --> Security Class Initialized
DEBUG - 2020-01-10 12:41:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:41:21 --> Input Class Initialized
INFO - 2020-01-10 12:41:21 --> Language Class Initialized
INFO - 2020-01-10 12:41:21 --> Loader Class Initialized
INFO - 2020-01-10 12:41:21 --> Helper loaded: html_helper
INFO - 2020-01-10 12:41:21 --> Helper loaded: url_helper
INFO - 2020-01-10 12:41:21 --> Helper loaded: form_helper
INFO - 2020-01-10 12:41:21 --> Database Driver Class Initialized
INFO - 2020-01-10 12:41:21 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:41:21 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:41:21 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:41:21 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:41:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:41:21 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:41:21 --> Controller Class Initialized
DEBUG - 2020-01-10 12:41:21 --> Create_User constructer got called..
INFO - 2020-01-10 12:41:21 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:41:21 --> get_group_role_mapping model = 52
DEBUG - 2020-01-10 12:41:21 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:41:21 --> Final output sent to browser
DEBUG - 2020-01-10 12:41:21 --> Total execution time: 0.2625
INFO - 2020-01-10 12:41:21 --> Config Class Initialized
INFO - 2020-01-10 12:41:21 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:41:21 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:41:21 --> Utf8 Class Initialized
INFO - 2020-01-10 12:41:22 --> URI Class Initialized
INFO - 2020-01-10 12:41:22 --> Router Class Initialized
INFO - 2020-01-10 12:41:22 --> Output Class Initialized
INFO - 2020-01-10 12:41:22 --> Security Class Initialized
DEBUG - 2020-01-10 12:41:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:41:22 --> Input Class Initialized
INFO - 2020-01-10 12:41:22 --> Language Class Initialized
INFO - 2020-01-10 12:41:22 --> Loader Class Initialized
INFO - 2020-01-10 12:41:22 --> Helper loaded: html_helper
INFO - 2020-01-10 12:41:22 --> Helper loaded: url_helper
INFO - 2020-01-10 12:41:22 --> Helper loaded: form_helper
INFO - 2020-01-10 12:41:22 --> Database Driver Class Initialized
INFO - 2020-01-10 12:41:22 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:41:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:41:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:41:22 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:41:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:41:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:41:22 --> Controller Class Initialized
DEBUG - 2020-01-10 12:41:22 --> Create_User constructer got called..
INFO - 2020-01-10 12:41:22 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:41:22 --> getAllSubGroupData model = 16
DEBUG - 2020-01-10 12:41:22 --> getAllSubGroupData from DB retrived
INFO - 2020-01-10 12:41:22 --> Final output sent to browser
DEBUG - 2020-01-10 12:41:22 --> Total execution time: 0.4100
INFO - 2020-01-10 12:41:36 --> Config Class Initialized
INFO - 2020-01-10 12:41:36 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:41:36 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:41:36 --> Utf8 Class Initialized
INFO - 2020-01-10 12:41:36 --> URI Class Initialized
INFO - 2020-01-10 12:41:36 --> Router Class Initialized
INFO - 2020-01-10 12:41:36 --> Output Class Initialized
INFO - 2020-01-10 12:41:36 --> Security Class Initialized
DEBUG - 2020-01-10 12:41:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:41:36 --> Input Class Initialized
INFO - 2020-01-10 12:41:36 --> Language Class Initialized
INFO - 2020-01-10 12:41:36 --> Loader Class Initialized
INFO - 2020-01-10 12:41:36 --> Helper loaded: html_helper
INFO - 2020-01-10 12:41:36 --> Helper loaded: url_helper
INFO - 2020-01-10 12:41:36 --> Helper loaded: form_helper
INFO - 2020-01-10 12:41:36 --> Database Driver Class Initialized
INFO - 2020-01-10 12:41:36 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:41:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:41:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:41:36 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:41:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:41:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:41:36 --> Controller Class Initialized
DEBUG - 2020-01-10 12:41:36 --> Create_User constructer got called..
INFO - 2020-01-10 12:41:36 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:41:36 --> get_group_role_mapping model = 57
DEBUG - 2020-01-10 12:41:36 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:41:36 --> Final output sent to browser
DEBUG - 2020-01-10 12:41:36 --> Total execution time: 0.3825
INFO - 2020-01-10 12:41:50 --> Config Class Initialized
INFO - 2020-01-10 12:41:50 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:41:50 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:41:50 --> Utf8 Class Initialized
INFO - 2020-01-10 12:41:50 --> URI Class Initialized
INFO - 2020-01-10 12:41:50 --> Router Class Initialized
INFO - 2020-01-10 12:41:50 --> Output Class Initialized
INFO - 2020-01-10 12:41:50 --> Security Class Initialized
DEBUG - 2020-01-10 12:41:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:41:50 --> Input Class Initialized
INFO - 2020-01-10 12:41:50 --> Language Class Initialized
INFO - 2020-01-10 12:41:50 --> Loader Class Initialized
INFO - 2020-01-10 12:41:50 --> Helper loaded: html_helper
INFO - 2020-01-10 12:41:50 --> Helper loaded: url_helper
INFO - 2020-01-10 12:41:50 --> Helper loaded: form_helper
INFO - 2020-01-10 12:41:50 --> Database Driver Class Initialized
INFO - 2020-01-10 12:41:50 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:41:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:41:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:41:50 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:41:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:41:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:41:50 --> Controller Class Initialized
DEBUG - 2020-01-10 12:41:50 --> Create_User constructer got called..
INFO - 2020-01-10 12:41:50 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:41:50 --> getAllSubgroup model
DEBUG - 2020-01-10 12:41:50 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-10 12:41:50 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:41:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2020-01-10 12:41:50 --> Final output sent to browser
DEBUG - 2020-01-10 12:41:50 --> Total execution time: 0.4075
INFO - 2020-01-10 12:41:55 --> Config Class Initialized
INFO - 2020-01-10 12:41:55 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:41:55 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:41:55 --> Utf8 Class Initialized
INFO - 2020-01-10 12:41:55 --> URI Class Initialized
INFO - 2020-01-10 12:41:55 --> Router Class Initialized
INFO - 2020-01-10 12:41:55 --> Output Class Initialized
INFO - 2020-01-10 12:41:55 --> Security Class Initialized
DEBUG - 2020-01-10 12:41:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:41:55 --> Input Class Initialized
INFO - 2020-01-10 12:41:55 --> Language Class Initialized
INFO - 2020-01-10 12:41:55 --> Loader Class Initialized
INFO - 2020-01-10 12:41:55 --> Helper loaded: html_helper
INFO - 2020-01-10 12:41:55 --> Helper loaded: url_helper
INFO - 2020-01-10 12:41:55 --> Helper loaded: form_helper
INFO - 2020-01-10 12:41:55 --> Database Driver Class Initialized
INFO - 2020-01-10 12:41:55 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:41:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:41:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:41:55 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:41:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:41:55 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:41:55 --> Controller Class Initialized
DEBUG - 2020-01-10 12:41:55 --> Create_User constructer got called..
INFO - 2020-01-10 12:41:55 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:41:55 --> get_group_role_mapping model = 57
DEBUG - 2020-01-10 12:41:55 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:41:55 --> Final output sent to browser
DEBUG - 2020-01-10 12:41:55 --> Total execution time: 0.3000
INFO - 2020-01-10 12:42:12 --> Config Class Initialized
INFO - 2020-01-10 12:42:12 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:42:12 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:42:12 --> Utf8 Class Initialized
INFO - 2020-01-10 12:42:12 --> URI Class Initialized
INFO - 2020-01-10 12:42:12 --> Router Class Initialized
INFO - 2020-01-10 12:42:12 --> Output Class Initialized
INFO - 2020-01-10 12:42:12 --> Security Class Initialized
DEBUG - 2020-01-10 12:42:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:42:12 --> Input Class Initialized
INFO - 2020-01-10 12:42:12 --> Language Class Initialized
INFO - 2020-01-10 12:42:12 --> Loader Class Initialized
INFO - 2020-01-10 12:42:12 --> Helper loaded: html_helper
INFO - 2020-01-10 12:42:12 --> Helper loaded: url_helper
INFO - 2020-01-10 12:42:12 --> Helper loaded: form_helper
INFO - 2020-01-10 12:42:12 --> Database Driver Class Initialized
INFO - 2020-01-10 12:42:12 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:42:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:42:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:42:12 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:42:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:42:12 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:42:12 --> Controller Class Initialized
DEBUG - 2020-01-10 12:42:12 --> Create_User constructer got called..
INFO - 2020-01-10 12:42:12 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:42:12 --> get_group_role_mapping model = 52
DEBUG - 2020-01-10 12:42:12 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:42:12 --> Final output sent to browser
DEBUG - 2020-01-10 12:42:12 --> Total execution time: 0.2825
INFO - 2020-01-10 12:42:13 --> Config Class Initialized
INFO - 2020-01-10 12:42:13 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:42:13 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:42:13 --> Utf8 Class Initialized
INFO - 2020-01-10 12:42:13 --> URI Class Initialized
INFO - 2020-01-10 12:42:13 --> Router Class Initialized
INFO - 2020-01-10 12:42:13 --> Output Class Initialized
INFO - 2020-01-10 12:42:13 --> Security Class Initialized
DEBUG - 2020-01-10 12:42:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:42:13 --> Input Class Initialized
INFO - 2020-01-10 12:42:13 --> Language Class Initialized
INFO - 2020-01-10 12:42:13 --> Loader Class Initialized
INFO - 2020-01-10 12:42:13 --> Helper loaded: html_helper
INFO - 2020-01-10 12:42:13 --> Helper loaded: url_helper
INFO - 2020-01-10 12:42:13 --> Helper loaded: form_helper
INFO - 2020-01-10 12:42:13 --> Database Driver Class Initialized
INFO - 2020-01-10 12:42:13 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:42:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:42:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:42:13 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:42:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:42:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:42:13 --> Controller Class Initialized
DEBUG - 2020-01-10 12:42:13 --> Create_User constructer got called..
INFO - 2020-01-10 12:42:13 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:42:13 --> getAllSubGroupData model = 16
DEBUG - 2020-01-10 12:42:13 --> getAllSubGroupData from DB retrived
INFO - 2020-01-10 12:42:13 --> Final output sent to browser
DEBUG - 2020-01-10 12:42:13 --> Total execution time: 0.2450
INFO - 2020-01-10 12:45:36 --> Config Class Initialized
INFO - 2020-01-10 12:45:36 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:45:36 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:45:36 --> Utf8 Class Initialized
INFO - 2020-01-10 12:45:36 --> URI Class Initialized
INFO - 2020-01-10 12:45:36 --> Router Class Initialized
INFO - 2020-01-10 12:45:36 --> Output Class Initialized
INFO - 2020-01-10 12:45:36 --> Security Class Initialized
DEBUG - 2020-01-10 12:45:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:45:36 --> Input Class Initialized
INFO - 2020-01-10 12:45:36 --> Language Class Initialized
INFO - 2020-01-10 12:45:36 --> Loader Class Initialized
INFO - 2020-01-10 12:45:36 --> Helper loaded: html_helper
INFO - 2020-01-10 12:45:36 --> Helper loaded: url_helper
INFO - 2020-01-10 12:45:36 --> Helper loaded: form_helper
INFO - 2020-01-10 12:45:36 --> Database Driver Class Initialized
INFO - 2020-01-10 12:45:36 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:45:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:45:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:45:36 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:45:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:45:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:45:36 --> Controller Class Initialized
DEBUG - 2020-01-10 12:45:36 --> Create_User constructer got called..
INFO - 2020-01-10 12:45:36 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:45:36 --> get_group_role_mapping model = 57
DEBUG - 2020-01-10 12:45:36 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:45:36 --> Final output sent to browser
DEBUG - 2020-01-10 12:45:36 --> Total execution time: 0.3025
INFO - 2020-01-10 12:46:45 --> Config Class Initialized
INFO - 2020-01-10 12:46:45 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:46:45 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:46:45 --> Utf8 Class Initialized
INFO - 2020-01-10 12:46:45 --> URI Class Initialized
INFO - 2020-01-10 12:46:45 --> Router Class Initialized
INFO - 2020-01-10 12:46:45 --> Output Class Initialized
INFO - 2020-01-10 12:46:45 --> Security Class Initialized
DEBUG - 2020-01-10 12:46:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:46:45 --> Input Class Initialized
INFO - 2020-01-10 12:46:45 --> Language Class Initialized
INFO - 2020-01-10 12:46:45 --> Loader Class Initialized
INFO - 2020-01-10 12:46:45 --> Helper loaded: html_helper
INFO - 2020-01-10 12:46:45 --> Helper loaded: url_helper
INFO - 2020-01-10 12:46:45 --> Helper loaded: form_helper
INFO - 2020-01-10 12:46:45 --> Database Driver Class Initialized
INFO - 2020-01-10 12:46:45 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:46:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:46:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:46:45 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:46:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:46:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:46:45 --> Controller Class Initialized
DEBUG - 2020-01-10 12:46:45 --> Create_User constructer got called..
INFO - 2020-01-10 12:46:45 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:46:45 --> get_group_role_mapping model = 43
DEBUG - 2020-01-10 12:46:45 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:46:45 --> Final output sent to browser
DEBUG - 2020-01-10 12:46:45 --> Total execution time: 0.3050
INFO - 2020-01-10 12:46:45 --> Config Class Initialized
INFO - 2020-01-10 12:46:45 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:46:45 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:46:45 --> Utf8 Class Initialized
INFO - 2020-01-10 12:46:45 --> URI Class Initialized
INFO - 2020-01-10 12:46:45 --> Router Class Initialized
INFO - 2020-01-10 12:46:45 --> Output Class Initialized
INFO - 2020-01-10 12:46:45 --> Security Class Initialized
DEBUG - 2020-01-10 12:46:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:46:45 --> Input Class Initialized
INFO - 2020-01-10 12:46:45 --> Language Class Initialized
INFO - 2020-01-10 12:46:45 --> Loader Class Initialized
INFO - 2020-01-10 12:46:45 --> Helper loaded: html_helper
INFO - 2020-01-10 12:46:45 --> Helper loaded: url_helper
INFO - 2020-01-10 12:46:45 --> Helper loaded: form_helper
INFO - 2020-01-10 12:46:46 --> Database Driver Class Initialized
INFO - 2020-01-10 12:46:46 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:46:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:46:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:46:46 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:46:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:46:46 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:46:46 --> Controller Class Initialized
DEBUG - 2020-01-10 12:46:46 --> Create_User constructer got called..
INFO - 2020-01-10 12:46:46 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:46:46 --> getAllSubGroupData model = 15
DEBUG - 2020-01-10 12:46:46 --> getAllSubGroupData from DB retrived
INFO - 2020-01-10 12:46:46 --> Final output sent to browser
DEBUG - 2020-01-10 12:46:46 --> Total execution time: 0.2775
INFO - 2020-01-10 12:46:49 --> Config Class Initialized
INFO - 2020-01-10 12:46:49 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:46:49 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:46:49 --> Utf8 Class Initialized
INFO - 2020-01-10 12:46:49 --> URI Class Initialized
INFO - 2020-01-10 12:46:49 --> Router Class Initialized
INFO - 2020-01-10 12:46:49 --> Output Class Initialized
INFO - 2020-01-10 12:46:49 --> Security Class Initialized
DEBUG - 2020-01-10 12:46:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:46:49 --> Input Class Initialized
INFO - 2020-01-10 12:46:49 --> Language Class Initialized
INFO - 2020-01-10 12:46:49 --> Loader Class Initialized
INFO - 2020-01-10 12:46:49 --> Helper loaded: html_helper
INFO - 2020-01-10 12:46:49 --> Helper loaded: url_helper
INFO - 2020-01-10 12:46:49 --> Helper loaded: form_helper
INFO - 2020-01-10 12:46:49 --> Database Driver Class Initialized
INFO - 2020-01-10 12:46:49 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:46:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:46:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:46:49 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:46:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:46:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:46:49 --> Controller Class Initialized
DEBUG - 2020-01-10 12:46:49 --> Create_User constructer got called..
INFO - 2020-01-10 12:46:49 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:46:49 --> get_group_role_mapping model = 57
DEBUG - 2020-01-10 12:46:49 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:46:49 --> Final output sent to browser
DEBUG - 2020-01-10 12:46:49 --> Total execution time: 0.3050
INFO - 2020-01-10 12:47:48 --> Config Class Initialized
INFO - 2020-01-10 12:47:48 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:47:48 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:47:48 --> Utf8 Class Initialized
INFO - 2020-01-10 12:47:48 --> URI Class Initialized
INFO - 2020-01-10 12:47:48 --> Router Class Initialized
INFO - 2020-01-10 12:47:48 --> Output Class Initialized
INFO - 2020-01-10 12:47:48 --> Security Class Initialized
DEBUG - 2020-01-10 12:47:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:47:48 --> Input Class Initialized
INFO - 2020-01-10 12:47:48 --> Language Class Initialized
INFO - 2020-01-10 12:47:48 --> Loader Class Initialized
INFO - 2020-01-10 12:47:48 --> Helper loaded: html_helper
INFO - 2020-01-10 12:47:48 --> Helper loaded: url_helper
INFO - 2020-01-10 12:47:48 --> Helper loaded: form_helper
INFO - 2020-01-10 12:47:48 --> Database Driver Class Initialized
INFO - 2020-01-10 12:47:48 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:47:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:47:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:47:49 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:47:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:47:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:47:49 --> Controller Class Initialized
DEBUG - 2020-01-10 12:47:49 --> Create_User constructer got called..
INFO - 2020-01-10 12:47:49 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:47:49 --> get_group_role_mapping model = 52
DEBUG - 2020-01-10 12:47:49 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:47:49 --> Final output sent to browser
DEBUG - 2020-01-10 12:47:49 --> Total execution time: 0.2675
INFO - 2020-01-10 12:47:49 --> Config Class Initialized
INFO - 2020-01-10 12:47:49 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:47:49 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:47:49 --> Utf8 Class Initialized
INFO - 2020-01-10 12:47:49 --> URI Class Initialized
INFO - 2020-01-10 12:47:49 --> Router Class Initialized
INFO - 2020-01-10 12:47:49 --> Output Class Initialized
INFO - 2020-01-10 12:47:49 --> Security Class Initialized
DEBUG - 2020-01-10 12:47:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:47:49 --> Input Class Initialized
INFO - 2020-01-10 12:47:49 --> Language Class Initialized
INFO - 2020-01-10 12:47:49 --> Loader Class Initialized
INFO - 2020-01-10 12:47:49 --> Helper loaded: html_helper
INFO - 2020-01-10 12:47:49 --> Helper loaded: url_helper
INFO - 2020-01-10 12:47:49 --> Helper loaded: form_helper
INFO - 2020-01-10 12:47:49 --> Database Driver Class Initialized
INFO - 2020-01-10 12:47:49 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:47:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:47:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:47:49 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:47:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:47:49 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:47:49 --> Controller Class Initialized
DEBUG - 2020-01-10 12:47:49 --> Create_User constructer got called..
INFO - 2020-01-10 12:47:49 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:47:49 --> getAllSubGroupData model = 16
DEBUG - 2020-01-10 12:47:49 --> getAllSubGroupData from DB retrived
INFO - 2020-01-10 12:47:49 --> Final output sent to browser
DEBUG - 2020-01-10 12:47:49 --> Total execution time: 0.2550
INFO - 2020-01-10 12:49:11 --> Config Class Initialized
INFO - 2020-01-10 12:49:11 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:49:11 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:49:11 --> Utf8 Class Initialized
INFO - 2020-01-10 12:49:11 --> URI Class Initialized
INFO - 2020-01-10 12:49:11 --> Router Class Initialized
INFO - 2020-01-10 12:49:11 --> Output Class Initialized
INFO - 2020-01-10 12:49:11 --> Security Class Initialized
DEBUG - 2020-01-10 12:49:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:49:11 --> Input Class Initialized
INFO - 2020-01-10 12:49:11 --> Language Class Initialized
INFO - 2020-01-10 12:49:11 --> Loader Class Initialized
INFO - 2020-01-10 12:49:11 --> Helper loaded: html_helper
INFO - 2020-01-10 12:49:11 --> Helper loaded: url_helper
INFO - 2020-01-10 12:49:11 --> Helper loaded: form_helper
INFO - 2020-01-10 12:49:11 --> Database Driver Class Initialized
INFO - 2020-01-10 12:49:11 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:49:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:49:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:49:11 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:49:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:49:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:49:11 --> Controller Class Initialized
DEBUG - 2020-01-10 12:49:11 --> Create_User constructer got called..
INFO - 2020-01-10 12:49:11 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:49:11 --> getAllSubgroup model
DEBUG - 2020-01-10 12:49:11 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-10 12:49:11 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:49:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2020-01-10 12:49:11 --> Final output sent to browser
DEBUG - 2020-01-10 12:49:11 --> Total execution time: 0.2775
INFO - 2020-01-10 12:49:18 --> Config Class Initialized
INFO - 2020-01-10 12:49:18 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:49:18 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:49:18 --> Utf8 Class Initialized
INFO - 2020-01-10 12:49:18 --> URI Class Initialized
INFO - 2020-01-10 12:49:18 --> Router Class Initialized
INFO - 2020-01-10 12:49:18 --> Output Class Initialized
INFO - 2020-01-10 12:49:18 --> Security Class Initialized
DEBUG - 2020-01-10 12:49:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:49:18 --> Input Class Initialized
INFO - 2020-01-10 12:49:18 --> Language Class Initialized
INFO - 2020-01-10 12:49:18 --> Loader Class Initialized
INFO - 2020-01-10 12:49:18 --> Helper loaded: html_helper
INFO - 2020-01-10 12:49:18 --> Helper loaded: url_helper
INFO - 2020-01-10 12:49:18 --> Helper loaded: form_helper
INFO - 2020-01-10 12:49:18 --> Database Driver Class Initialized
INFO - 2020-01-10 12:49:18 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:49:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:49:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:49:18 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:49:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:49:18 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:49:18 --> Controller Class Initialized
DEBUG - 2020-01-10 12:49:18 --> Create_User constructer got called..
INFO - 2020-01-10 12:49:18 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:49:18 --> get_group_role_mapping model = 57
DEBUG - 2020-01-10 12:49:18 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:49:18 --> Final output sent to browser
DEBUG - 2020-01-10 12:49:18 --> Total execution time: 0.4475
INFO - 2020-01-10 12:49:33 --> Config Class Initialized
INFO - 2020-01-10 12:49:33 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:49:33 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:49:33 --> Utf8 Class Initialized
INFO - 2020-01-10 12:49:33 --> URI Class Initialized
INFO - 2020-01-10 12:49:33 --> Router Class Initialized
INFO - 2020-01-10 12:49:33 --> Output Class Initialized
INFO - 2020-01-10 12:49:33 --> Security Class Initialized
DEBUG - 2020-01-10 12:49:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:49:33 --> Input Class Initialized
INFO - 2020-01-10 12:49:33 --> Language Class Initialized
INFO - 2020-01-10 12:49:33 --> Loader Class Initialized
INFO - 2020-01-10 12:49:33 --> Helper loaded: html_helper
INFO - 2020-01-10 12:49:33 --> Helper loaded: url_helper
INFO - 2020-01-10 12:49:33 --> Helper loaded: form_helper
INFO - 2020-01-10 12:49:33 --> Database Driver Class Initialized
INFO - 2020-01-10 12:49:33 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:49:33 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:49:33 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:49:33 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:49:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:49:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:49:33 --> Controller Class Initialized
DEBUG - 2020-01-10 12:49:33 --> Create_User constructer got called..
INFO - 2020-01-10 12:49:33 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:49:33 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:49:33 --> show_groups from DB
INFO - 2020-01-10 12:49:33 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2020-01-10 12:49:34 --> Final output sent to browser
DEBUG - 2020-01-10 12:49:34 --> Total execution time: 0.2975
INFO - 2020-01-10 12:49:42 --> Config Class Initialized
INFO - 2020-01-10 12:49:42 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:49:42 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:49:42 --> Utf8 Class Initialized
INFO - 2020-01-10 12:49:42 --> URI Class Initialized
INFO - 2020-01-10 12:49:42 --> Router Class Initialized
INFO - 2020-01-10 12:49:42 --> Output Class Initialized
INFO - 2020-01-10 12:49:42 --> Security Class Initialized
DEBUG - 2020-01-10 12:49:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:49:42 --> Input Class Initialized
INFO - 2020-01-10 12:49:42 --> Language Class Initialized
INFO - 2020-01-10 12:49:42 --> Loader Class Initialized
INFO - 2020-01-10 12:49:42 --> Helper loaded: html_helper
INFO - 2020-01-10 12:49:42 --> Helper loaded: url_helper
INFO - 2020-01-10 12:49:42 --> Helper loaded: form_helper
INFO - 2020-01-10 12:49:42 --> Database Driver Class Initialized
INFO - 2020-01-10 12:49:42 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:49:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:49:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:49:42 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:49:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:49:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:49:42 --> Controller Class Initialized
DEBUG - 2020-01-10 12:49:42 --> Create_User constructer got called..
INFO - 2020-01-10 12:49:42 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:49:42 --> Final output sent to browser
DEBUG - 2020-01-10 12:49:42 --> Total execution time: 0.3700
INFO - 2020-01-10 12:49:42 --> Config Class Initialized
INFO - 2020-01-10 12:49:42 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:49:42 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:49:42 --> Utf8 Class Initialized
INFO - 2020-01-10 12:49:42 --> URI Class Initialized
INFO - 2020-01-10 12:49:42 --> Router Class Initialized
INFO - 2020-01-10 12:49:42 --> Output Class Initialized
INFO - 2020-01-10 12:49:42 --> Security Class Initialized
DEBUG - 2020-01-10 12:49:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:49:42 --> Input Class Initialized
INFO - 2020-01-10 12:49:42 --> Language Class Initialized
INFO - 2020-01-10 12:49:42 --> Loader Class Initialized
INFO - 2020-01-10 12:49:43 --> Helper loaded: html_helper
INFO - 2020-01-10 12:49:43 --> Helper loaded: url_helper
INFO - 2020-01-10 12:49:43 --> Helper loaded: form_helper
INFO - 2020-01-10 12:49:43 --> Database Driver Class Initialized
INFO - 2020-01-10 12:49:43 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:49:43 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:49:43 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:49:43 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:49:43 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:49:43 --> Controller Class Initialized
DEBUG - 2020-01-10 12:49:43 --> Create_User constructer got called..
INFO - 2020-01-10 12:49:43 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:49:43 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:49:43 --> show_groups from DB
INFO - 2020-01-10 12:49:43 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showGroup.php
INFO - 2020-01-10 12:49:43 --> Final output sent to browser
DEBUG - 2020-01-10 12:49:43 --> Total execution time: 0.2400
INFO - 2020-01-10 12:49:48 --> Config Class Initialized
INFO - 2020-01-10 12:49:48 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:49:48 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:49:48 --> Utf8 Class Initialized
INFO - 2020-01-10 12:49:48 --> URI Class Initialized
INFO - 2020-01-10 12:49:48 --> Router Class Initialized
INFO - 2020-01-10 12:49:48 --> Output Class Initialized
INFO - 2020-01-10 12:49:48 --> Security Class Initialized
DEBUG - 2020-01-10 12:49:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:49:48 --> Input Class Initialized
INFO - 2020-01-10 12:49:48 --> Language Class Initialized
INFO - 2020-01-10 12:49:48 --> Loader Class Initialized
INFO - 2020-01-10 12:49:48 --> Helper loaded: html_helper
INFO - 2020-01-10 12:49:48 --> Helper loaded: url_helper
INFO - 2020-01-10 12:49:48 --> Helper loaded: form_helper
INFO - 2020-01-10 12:49:48 --> Database Driver Class Initialized
INFO - 2020-01-10 12:49:48 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:49:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:49:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:49:48 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:49:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:49:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:49:48 --> Controller Class Initialized
DEBUG - 2020-01-10 12:49:48 --> Create_User constructer got called..
INFO - 2020-01-10 12:49:48 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:49:48 --> getAllSubgroup model
DEBUG - 2020-01-10 12:49:48 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-10 12:49:48 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:49:48 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showRolesMgt.php
INFO - 2020-01-10 12:49:49 --> Final output sent to browser
DEBUG - 2020-01-10 12:49:49 --> Total execution time: 0.3075
INFO - 2020-01-10 12:49:55 --> Config Class Initialized
INFO - 2020-01-10 12:49:55 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:49:55 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:49:55 --> Utf8 Class Initialized
INFO - 2020-01-10 12:49:55 --> URI Class Initialized
INFO - 2020-01-10 12:49:56 --> Router Class Initialized
INFO - 2020-01-10 12:49:56 --> Output Class Initialized
INFO - 2020-01-10 12:49:56 --> Security Class Initialized
DEBUG - 2020-01-10 12:49:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:49:56 --> Input Class Initialized
INFO - 2020-01-10 12:49:56 --> Language Class Initialized
INFO - 2020-01-10 12:49:56 --> Loader Class Initialized
INFO - 2020-01-10 12:49:56 --> Helper loaded: html_helper
INFO - 2020-01-10 12:49:56 --> Helper loaded: url_helper
INFO - 2020-01-10 12:49:56 --> Helper loaded: form_helper
INFO - 2020-01-10 12:49:56 --> Database Driver Class Initialized
INFO - 2020-01-10 12:49:56 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:49:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:49:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:49:56 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:49:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:49:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:49:56 --> Controller Class Initialized
DEBUG - 2020-01-10 12:49:56 --> Create_User constructer got called..
INFO - 2020-01-10 12:49:56 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:49:56 --> get_group_role_mapping model = 57
DEBUG - 2020-01-10 12:49:56 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:49:56 --> Final output sent to browser
DEBUG - 2020-01-10 12:49:56 --> Total execution time: 0.4325
INFO - 2020-01-10 12:49:56 --> Config Class Initialized
INFO - 2020-01-10 12:49:56 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:49:56 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:49:56 --> Utf8 Class Initialized
INFO - 2020-01-10 12:49:56 --> URI Class Initialized
INFO - 2020-01-10 12:49:56 --> Router Class Initialized
INFO - 2020-01-10 12:49:56 --> Output Class Initialized
INFO - 2020-01-10 12:49:56 --> Security Class Initialized
DEBUG - 2020-01-10 12:49:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:49:57 --> Input Class Initialized
INFO - 2020-01-10 12:49:57 --> Language Class Initialized
INFO - 2020-01-10 12:49:57 --> Loader Class Initialized
INFO - 2020-01-10 12:49:57 --> Helper loaded: html_helper
INFO - 2020-01-10 12:49:57 --> Helper loaded: url_helper
INFO - 2020-01-10 12:49:57 --> Helper loaded: form_helper
INFO - 2020-01-10 12:49:57 --> Database Driver Class Initialized
INFO - 2020-01-10 12:49:57 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:49:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:49:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:49:57 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:49:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:49:57 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:49:57 --> Controller Class Initialized
DEBUG - 2020-01-10 12:49:57 --> Create_User constructer got called..
INFO - 2020-01-10 12:49:57 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:49:57 --> getAllSubGroupData model = 26
DEBUG - 2020-01-10 12:49:57 --> getAllSubGroupData from DB retrived
INFO - 2020-01-10 12:49:57 --> Final output sent to browser
DEBUG - 2020-01-10 12:49:57 --> Total execution time: 0.3300
INFO - 2020-01-10 12:50:14 --> Config Class Initialized
INFO - 2020-01-10 12:50:14 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:50:14 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:50:14 --> Utf8 Class Initialized
INFO - 2020-01-10 12:50:14 --> URI Class Initialized
INFO - 2020-01-10 12:50:15 --> Router Class Initialized
INFO - 2020-01-10 12:50:15 --> Output Class Initialized
INFO - 2020-01-10 12:50:15 --> Security Class Initialized
DEBUG - 2020-01-10 12:50:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:50:15 --> Input Class Initialized
INFO - 2020-01-10 12:50:15 --> Language Class Initialized
INFO - 2020-01-10 12:50:15 --> Loader Class Initialized
INFO - 2020-01-10 12:50:15 --> Helper loaded: html_helper
INFO - 2020-01-10 12:50:15 --> Helper loaded: url_helper
INFO - 2020-01-10 12:50:15 --> Helper loaded: form_helper
INFO - 2020-01-10 12:50:15 --> Database Driver Class Initialized
INFO - 2020-01-10 12:50:15 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:50:15 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:50:15 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:50:15 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:50:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:50:15 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:50:15 --> Controller Class Initialized
DEBUG - 2020-01-10 12:50:15 --> Create_User constructer got called..
INFO - 2020-01-10 12:50:15 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:50:15 --> insert_role_access model
DEBUG - 2020-01-10 12:50:15 --> BEGIN role insertion...
DEBUG - 2020-01-10 12:50:15 --> END role insertion...
DEBUG - 2020-01-10 12:50:15 --> Group inserted
INFO - 2020-01-10 12:50:15 --> insert_role_access model
DEBUG - 2020-01-10 12:50:15 --> BEGIN role insertion...
DEBUG - 2020-01-10 12:50:15 --> END role insertion...
DEBUG - 2020-01-10 12:50:15 --> Group inserted
DEBUG - 2020-01-10 12:50:15 --> insert role result =1
INFO - 2020-01-10 12:50:15 --> Final output sent to browser
DEBUG - 2020-01-10 12:50:15 --> Total execution time: 0.4575
INFO - 2020-01-10 12:50:16 --> Config Class Initialized
INFO - 2020-01-10 12:50:16 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:50:16 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:50:16 --> Utf8 Class Initialized
INFO - 2020-01-10 12:50:16 --> URI Class Initialized
INFO - 2020-01-10 12:50:16 --> Router Class Initialized
INFO - 2020-01-10 12:50:16 --> Output Class Initialized
INFO - 2020-01-10 12:50:16 --> Security Class Initialized
DEBUG - 2020-01-10 12:50:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:50:16 --> Input Class Initialized
INFO - 2020-01-10 12:50:16 --> Language Class Initialized
INFO - 2020-01-10 12:50:16 --> Loader Class Initialized
INFO - 2020-01-10 12:50:16 --> Helper loaded: html_helper
INFO - 2020-01-10 12:50:16 --> Helper loaded: url_helper
INFO - 2020-01-10 12:50:16 --> Helper loaded: form_helper
INFO - 2020-01-10 12:50:16 --> Database Driver Class Initialized
INFO - 2020-01-10 12:50:16 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:50:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:50:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:50:16 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:50:16 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:50:16 --> Controller Class Initialized
DEBUG - 2020-01-10 12:50:16 --> Create_User constructer got called..
INFO - 2020-01-10 12:50:16 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:50:16 --> getAllSubGroupData model = 26
DEBUG - 2020-01-10 12:50:16 --> getAllSubGroupData from DB retrived
INFO - 2020-01-10 12:50:16 --> Final output sent to browser
DEBUG - 2020-01-10 12:50:16 --> Total execution time: 0.5525
INFO - 2020-01-10 12:50:38 --> Config Class Initialized
INFO - 2020-01-10 12:50:38 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:50:39 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:50:39 --> Utf8 Class Initialized
INFO - 2020-01-10 12:50:39 --> URI Class Initialized
INFO - 2020-01-10 12:50:39 --> Router Class Initialized
INFO - 2020-01-10 12:50:39 --> Output Class Initialized
INFO - 2020-01-10 12:50:39 --> Security Class Initialized
DEBUG - 2020-01-10 12:50:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:50:39 --> Input Class Initialized
INFO - 2020-01-10 12:50:39 --> Language Class Initialized
INFO - 2020-01-10 12:50:39 --> Loader Class Initialized
INFO - 2020-01-10 12:50:39 --> Helper loaded: html_helper
INFO - 2020-01-10 12:50:39 --> Helper loaded: url_helper
INFO - 2020-01-10 12:50:39 --> Helper loaded: form_helper
INFO - 2020-01-10 12:50:39 --> Database Driver Class Initialized
INFO - 2020-01-10 12:50:39 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:50:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:50:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:50:39 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:50:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:50:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:50:39 --> Controller Class Initialized
DEBUG - 2020-01-10 12:50:39 --> Create_User constructer got called..
INFO - 2020-01-10 12:50:39 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:50:39 --> getAllSubgroup model
DEBUG - 2020-01-10 12:50:39 --> getAllSubgroup from DB retrived
DEBUG - 2020-01-10 12:50:39 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:50:39 --> getAllSubgroup model
DEBUG - 2020-01-10 12:50:39 --> getAllUIMasterData from DB retrived
INFO - 2020-01-10 12:50:39 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/uiprofile.php
INFO - 2020-01-10 12:50:39 --> Final output sent to browser
DEBUG - 2020-01-10 12:50:39 --> Total execution time: 0.4174
INFO - 2020-01-10 12:50:45 --> Config Class Initialized
INFO - 2020-01-10 12:50:45 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:50:45 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:50:45 --> Utf8 Class Initialized
INFO - 2020-01-10 12:50:45 --> URI Class Initialized
INFO - 2020-01-10 12:50:45 --> Router Class Initialized
INFO - 2020-01-10 12:50:45 --> Output Class Initialized
INFO - 2020-01-10 12:50:45 --> Security Class Initialized
DEBUG - 2020-01-10 12:50:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:50:45 --> Input Class Initialized
INFO - 2020-01-10 12:50:45 --> Language Class Initialized
INFO - 2020-01-10 12:50:45 --> Loader Class Initialized
INFO - 2020-01-10 12:50:45 --> Helper loaded: html_helper
INFO - 2020-01-10 12:50:45 --> Helper loaded: url_helper
INFO - 2020-01-10 12:50:45 --> Helper loaded: form_helper
INFO - 2020-01-10 12:50:45 --> Database Driver Class Initialized
INFO - 2020-01-10 12:50:45 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:50:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:50:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:50:45 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:50:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:50:45 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:50:45 --> Controller Class Initialized
DEBUG - 2020-01-10 12:50:45 --> Create_User constructer got called..
INFO - 2020-01-10 12:50:45 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:50:45 --> get_group_role_mapping model = 57@DEV_OSS_USER
DEBUG - 2020-01-10 12:50:45 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:50:45 --> Final output sent to browser
DEBUG - 2020-01-10 12:50:45 --> Total execution time: 0.5699
INFO - 2020-01-10 12:50:45 --> Config Class Initialized
INFO - 2020-01-10 12:50:45 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:50:45 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:50:45 --> Utf8 Class Initialized
INFO - 2020-01-10 12:50:45 --> URI Class Initialized
INFO - 2020-01-10 12:50:45 --> Router Class Initialized
INFO - 2020-01-10 12:50:45 --> Output Class Initialized
INFO - 2020-01-10 12:50:45 --> Security Class Initialized
DEBUG - 2020-01-10 12:50:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:50:45 --> Input Class Initialized
INFO - 2020-01-10 12:50:45 --> Language Class Initialized
INFO - 2020-01-10 12:50:45 --> Loader Class Initialized
INFO - 2020-01-10 12:50:45 --> Helper loaded: html_helper
INFO - 2020-01-10 12:50:45 --> Helper loaded: url_helper
INFO - 2020-01-10 12:50:45 --> Helper loaded: form_helper
INFO - 2020-01-10 12:50:45 --> Database Driver Class Initialized
INFO - 2020-01-10 12:50:46 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:50:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:50:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:50:46 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:50:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:50:46 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:50:46 --> Controller Class Initialized
DEBUG - 2020-01-10 12:50:46 --> Create_User constructer got called..
INFO - 2020-01-10 12:50:46 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:50:46 --> getAllUIGroupData model = 57
DEBUG - 2020-01-10 12:50:46 --> getAllUIGroupData from DB retrived
INFO - 2020-01-10 12:50:46 --> Final output sent to browser
DEBUG - 2020-01-10 12:50:46 --> Total execution time: 0.2750
INFO - 2020-01-10 12:51:18 --> Config Class Initialized
INFO - 2020-01-10 12:51:18 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:51:18 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:51:18 --> Utf8 Class Initialized
INFO - 2020-01-10 12:51:18 --> URI Class Initialized
INFO - 2020-01-10 12:51:18 --> Router Class Initialized
INFO - 2020-01-10 12:51:18 --> Output Class Initialized
INFO - 2020-01-10 12:51:18 --> Security Class Initialized
DEBUG - 2020-01-10 12:51:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:51:18 --> Input Class Initialized
INFO - 2020-01-10 12:51:18 --> Language Class Initialized
INFO - 2020-01-10 12:51:18 --> Loader Class Initialized
INFO - 2020-01-10 12:51:18 --> Helper loaded: html_helper
INFO - 2020-01-10 12:51:18 --> Helper loaded: url_helper
INFO - 2020-01-10 12:51:18 --> Helper loaded: form_helper
INFO - 2020-01-10 12:51:18 --> Database Driver Class Initialized
INFO - 2020-01-10 12:51:18 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:51:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:51:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:51:18 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:51:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:51:18 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:51:18 --> Controller Class Initialized
DEBUG - 2020-01-10 12:51:18 --> Create_User constructer got called..
INFO - 2020-01-10 12:51:18 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:51:18 --> Pagename - :Dashboard
DEBUG - 2020-01-10 12:51:18 --> link - :Auth/AdLogin/load_dash
DEBUG - 2020-01-10 12:51:18 --> symbol - :fas fa-fw fa-tachometer-alt
INFO - 2020-01-10 12:51:18 --> configarable_sideview model
DEBUG - 2020-01-10 12:51:18 --> BEGIN role insertion...
DEBUG - 2020-01-10 12:51:18 --> END configarable_sideview insertion...
DEBUG - 2020-01-10 12:51:18 --> Group inserted
DEBUG - 2020-01-10 12:51:18 --> Pagename - :Profile
DEBUG - 2020-01-10 12:51:18 --> link - :user/Create_User/showAllProfileData
DEBUG - 2020-01-10 12:51:18 --> symbol - :fas fa-fw fa-chart-area
INFO - 2020-01-10 12:51:18 --> configarable_sideview model
DEBUG - 2020-01-10 12:51:18 --> BEGIN role insertion...
DEBUG - 2020-01-10 12:51:18 --> END configarable_sideview insertion...
DEBUG - 2020-01-10 12:51:18 --> Group inserted
DEBUG - 2020-01-10 12:51:18 --> Pagename - :User Rights
DEBUG - 2020-01-10 12:51:18 --> link - :user/User_Right
DEBUG - 2020-01-10 12:51:18 --> symbol - :fas fa-fw fa-balance-scale
INFO - 2020-01-10 12:51:18 --> configarable_sideview model
DEBUG - 2020-01-10 12:51:18 --> BEGIN role insertion...
DEBUG - 2020-01-10 12:51:18 --> END configarable_sideview insertion...
DEBUG - 2020-01-10 12:51:18 --> Group inserted
DEBUG - 2020-01-10 12:51:18 --> Pagename - :Audit Logs
DEBUG - 2020-01-10 12:51:18 --> link - :user/Authors/audit
DEBUG - 2020-01-10 12:51:18 --> symbol - :fas fa-fw fa-outdent
INFO - 2020-01-10 12:51:18 --> configarable_sideview model
DEBUG - 2020-01-10 12:51:18 --> BEGIN role insertion...
DEBUG - 2020-01-10 12:51:18 --> END configarable_sideview insertion...
DEBUG - 2020-01-10 12:51:18 --> Group inserted
DEBUG - 2020-01-10 12:51:18 --> insert role result =1
ERROR - 2020-01-10 12:51:18 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\oneoss\application\controllers\user\Create_User.php 634
INFO - 2020-01-10 12:51:18 --> Final output sent to browser
DEBUG - 2020-01-10 12:51:18 --> Total execution time: 0.5824
INFO - 2020-01-10 12:51:19 --> Config Class Initialized
INFO - 2020-01-10 12:51:19 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:51:19 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:51:19 --> Utf8 Class Initialized
INFO - 2020-01-10 12:51:19 --> URI Class Initialized
INFO - 2020-01-10 12:51:19 --> Router Class Initialized
INFO - 2020-01-10 12:51:19 --> Output Class Initialized
INFO - 2020-01-10 12:51:19 --> Security Class Initialized
DEBUG - 2020-01-10 12:51:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:51:19 --> Input Class Initialized
INFO - 2020-01-10 12:51:19 --> Language Class Initialized
INFO - 2020-01-10 12:51:19 --> Loader Class Initialized
INFO - 2020-01-10 12:51:19 --> Helper loaded: html_helper
INFO - 2020-01-10 12:51:19 --> Helper loaded: url_helper
INFO - 2020-01-10 12:51:19 --> Helper loaded: form_helper
INFO - 2020-01-10 12:51:19 --> Database Driver Class Initialized
INFO - 2020-01-10 12:51:19 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:51:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:51:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:51:19 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:51:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:51:19 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:51:19 --> Controller Class Initialized
DEBUG - 2020-01-10 12:51:19 --> Create_User constructer got called..
INFO - 2020-01-10 12:51:19 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:51:19 --> getAllUIGroupData model = 57
DEBUG - 2020-01-10 12:51:19 --> getAllUIGroupData from DB retrived
INFO - 2020-01-10 12:51:19 --> Final output sent to browser
DEBUG - 2020-01-10 12:51:19 --> Total execution time: 0.4274
INFO - 2020-01-10 12:51:30 --> Config Class Initialized
INFO - 2020-01-10 12:51:31 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:51:31 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:51:31 --> Utf8 Class Initialized
INFO - 2020-01-10 12:51:31 --> URI Class Initialized
INFO - 2020-01-10 12:51:31 --> Router Class Initialized
INFO - 2020-01-10 12:51:31 --> Output Class Initialized
INFO - 2020-01-10 12:51:31 --> Security Class Initialized
DEBUG - 2020-01-10 12:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:51:31 --> Input Class Initialized
INFO - 2020-01-10 12:51:31 --> Language Class Initialized
INFO - 2020-01-10 12:51:31 --> Loader Class Initialized
INFO - 2020-01-10 12:51:31 --> Helper loaded: html_helper
INFO - 2020-01-10 12:51:31 --> Helper loaded: url_helper
INFO - 2020-01-10 12:51:31 --> Helper loaded: form_helper
INFO - 2020-01-10 12:51:31 --> Database Driver Class Initialized
INFO - 2020-01-10 12:51:31 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:51:31 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:51:31 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:51:31 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:51:31 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:51:31 --> Controller Class Initialized
DEBUG - 2020-01-10 12:51:31 --> Create_User constructer got called..
INFO - 2020-01-10 12:51:31 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/adminPage.php
INFO - 2020-01-10 12:51:31 --> Final output sent to browser
DEBUG - 2020-01-10 12:51:31 --> Total execution time: 0.3450
INFO - 2020-01-10 12:51:33 --> Config Class Initialized
INFO - 2020-01-10 12:51:33 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:51:34 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:51:34 --> Utf8 Class Initialized
INFO - 2020-01-10 12:51:34 --> URI Class Initialized
INFO - 2020-01-10 12:51:34 --> Router Class Initialized
INFO - 2020-01-10 12:51:34 --> Output Class Initialized
INFO - 2020-01-10 12:51:34 --> Security Class Initialized
DEBUG - 2020-01-10 12:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:51:34 --> Input Class Initialized
INFO - 2020-01-10 12:51:34 --> Language Class Initialized
INFO - 2020-01-10 12:51:34 --> Loader Class Initialized
INFO - 2020-01-10 12:51:34 --> Helper loaded: html_helper
INFO - 2020-01-10 12:51:34 --> Helper loaded: url_helper
INFO - 2020-01-10 12:51:34 --> Helper loaded: form_helper
INFO - 2020-01-10 12:51:34 --> Database Driver Class Initialized
INFO - 2020-01-10 12:51:34 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:51:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:51:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:51:34 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:51:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:51:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:51:34 --> Controller Class Initialized
INFO - 2020-01-10 12:51:34 --> Model "Authors_model" initialized
INFO - 2020-01-10 12:51:34 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-10 12:51:34 --> Pagination Class Initialized
INFO - 2020-01-10 12:51:34 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2020-01-10 12:51:34 --> Final output sent to browser
DEBUG - 2020-01-10 12:51:34 --> Total execution time: 0.3725
INFO - 2020-01-10 12:52:12 --> Config Class Initialized
INFO - 2020-01-10 12:52:12 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:52:12 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:52:12 --> Utf8 Class Initialized
INFO - 2020-01-10 12:52:12 --> URI Class Initialized
INFO - 2020-01-10 12:52:12 --> Router Class Initialized
INFO - 2020-01-10 12:52:12 --> Output Class Initialized
INFO - 2020-01-10 12:52:12 --> Security Class Initialized
DEBUG - 2020-01-10 12:52:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:52:12 --> Input Class Initialized
INFO - 2020-01-10 12:52:12 --> Language Class Initialized
INFO - 2020-01-10 12:52:12 --> Loader Class Initialized
INFO - 2020-01-10 12:52:12 --> Helper loaded: html_helper
INFO - 2020-01-10 12:52:12 --> Helper loaded: url_helper
INFO - 2020-01-10 12:52:12 --> Helper loaded: form_helper
INFO - 2020-01-10 12:52:12 --> Database Driver Class Initialized
INFO - 2020-01-10 12:52:12 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:52:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:52:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:52:12 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:52:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:52:12 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:52:12 --> Controller Class Initialized
DEBUG - 2020-01-10 12:52:12 --> Create_User constructer got called..
INFO - 2020-01-10 12:52:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/user/datewiseaudit.php
INFO - 2020-01-10 12:52:12 --> Final output sent to browser
DEBUG - 2020-01-10 12:52:12 --> Total execution time: 0.2350
INFO - 2020-01-10 12:52:22 --> Config Class Initialized
INFO - 2020-01-10 12:52:22 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:52:22 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:52:22 --> Utf8 Class Initialized
INFO - 2020-01-10 12:52:22 --> URI Class Initialized
INFO - 2020-01-10 12:52:22 --> Router Class Initialized
INFO - 2020-01-10 12:52:22 --> Output Class Initialized
INFO - 2020-01-10 12:52:22 --> Security Class Initialized
DEBUG - 2020-01-10 12:52:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:52:22 --> Input Class Initialized
INFO - 2020-01-10 12:52:22 --> Language Class Initialized
INFO - 2020-01-10 12:52:22 --> Loader Class Initialized
INFO - 2020-01-10 12:52:22 --> Helper loaded: html_helper
INFO - 2020-01-10 12:52:22 --> Helper loaded: url_helper
INFO - 2020-01-10 12:52:22 --> Helper loaded: form_helper
INFO - 2020-01-10 12:52:22 --> Database Driver Class Initialized
INFO - 2020-01-10 12:52:22 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:52:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:52:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:52:22 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:52:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:52:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:52:22 --> Controller Class Initialized
DEBUG - 2020-01-10 12:52:22 --> Create_User constructer got called..
INFO - 2020-01-10 12:52:22 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:52:22 --> Final output sent to browser
DEBUG - 2020-01-10 12:52:22 --> Total execution time: 0.3600
INFO - 2020-01-10 12:52:23 --> Config Class Initialized
INFO - 2020-01-10 12:52:23 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:52:23 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:52:23 --> Utf8 Class Initialized
INFO - 2020-01-10 12:52:23 --> URI Class Initialized
INFO - 2020-01-10 12:52:23 --> Router Class Initialized
INFO - 2020-01-10 12:52:23 --> Output Class Initialized
INFO - 2020-01-10 12:52:23 --> Security Class Initialized
DEBUG - 2020-01-10 12:52:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:52:23 --> Input Class Initialized
INFO - 2020-01-10 12:52:23 --> Language Class Initialized
INFO - 2020-01-10 12:52:23 --> Loader Class Initialized
INFO - 2020-01-10 12:52:23 --> Helper loaded: html_helper
INFO - 2020-01-10 12:52:23 --> Helper loaded: url_helper
INFO - 2020-01-10 12:52:23 --> Helper loaded: form_helper
INFO - 2020-01-10 12:52:23 --> Database Driver Class Initialized
INFO - 2020-01-10 12:52:23 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:52:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:52:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:52:23 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:52:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:52:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:52:23 --> Controller Class Initialized
DEBUG - 2020-01-10 12:52:23 --> Create_User constructer got called..
INFO - 2020-01-10 12:52:23 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:52:23 --> Final output sent to browser
DEBUG - 2020-01-10 12:52:23 --> Total execution time: 0.2650
INFO - 2020-01-10 12:52:43 --> Config Class Initialized
INFO - 2020-01-10 12:52:43 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:52:43 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:52:43 --> Utf8 Class Initialized
INFO - 2020-01-10 12:52:43 --> URI Class Initialized
INFO - 2020-01-10 12:52:43 --> Router Class Initialized
INFO - 2020-01-10 12:52:43 --> Output Class Initialized
INFO - 2020-01-10 12:52:43 --> Security Class Initialized
DEBUG - 2020-01-10 12:52:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:52:43 --> Input Class Initialized
INFO - 2020-01-10 12:52:43 --> Language Class Initialized
INFO - 2020-01-10 12:52:44 --> Loader Class Initialized
INFO - 2020-01-10 12:52:44 --> Helper loaded: html_helper
INFO - 2020-01-10 12:52:44 --> Helper loaded: url_helper
INFO - 2020-01-10 12:52:44 --> Helper loaded: form_helper
INFO - 2020-01-10 12:52:44 --> Database Driver Class Initialized
INFO - 2020-01-10 12:52:44 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:52:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:52:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:52:44 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:52:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:52:44 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:52:44 --> Controller Class Initialized
INFO - 2020-01-10 12:52:44 --> Helper loaded: cookie_helper
INFO - 2020-01-10 12:52:44 --> logout() called
DEBUG - 2020-01-10 12:52:44 --> loading model Active_Session
DEBUG - 2020-01-10 12:52:44 --> Session_id = kq2t6q7jlili4rpg08mi31ebdr24qm9l
DEBUG - 2020-01-10 12:52:44 --> email = DevOss
INFO - 2020-01-10 12:52:44 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:52:44 --> calling remove_active_session()
DEBUG - 2020-01-10 12:52:44 --> remove_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:52:44 --> loading view welcome controller ... 
INFO - 2020-01-10 12:52:44 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:52:44 --> Final output sent to browser
DEBUG - 2020-01-10 12:52:44 --> Total execution time: 0.4574
INFO - 2020-01-10 12:53:08 --> Config Class Initialized
INFO - 2020-01-10 12:53:08 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:53:08 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:53:08 --> Utf8 Class Initialized
INFO - 2020-01-10 12:53:08 --> URI Class Initialized
INFO - 2020-01-10 12:53:08 --> Router Class Initialized
INFO - 2020-01-10 12:53:08 --> Output Class Initialized
INFO - 2020-01-10 12:53:08 --> Security Class Initialized
DEBUG - 2020-01-10 12:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:53:08 --> Input Class Initialized
INFO - 2020-01-10 12:53:08 --> Language Class Initialized
INFO - 2020-01-10 12:53:08 --> Loader Class Initialized
INFO - 2020-01-10 12:53:08 --> Helper loaded: html_helper
INFO - 2020-01-10 12:53:08 --> Helper loaded: url_helper
INFO - 2020-01-10 12:53:08 --> Helper loaded: form_helper
INFO - 2020-01-10 12:53:08 --> Database Driver Class Initialized
INFO - 2020-01-10 12:53:08 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:53:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:53:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:53:08 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:53:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:53:08 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:53:08 --> Controller Class Initialized
INFO - 2020-01-10 12:53:08 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:53:08 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:53:08 --> getAuth method got called...
DEBUG - 2020-01-10 12:53:08 --> Username :- DevOss
INFO - 2020-01-10 12:53:08 --> this is db user...
DEBUG - 2020-01-10 12:53:08 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:53:08 --> Password hashing output = $2y$10$FJh8TvLn44n7cBY1ryAbUejUbavwgx9J/8NVJDK4toH74120LeFfG
DEBUG - 2020-01-10 12:53:08 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
DEBUG - 2020-01-10 12:53:09 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2020-01-10 12:53:09 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-10 12:53:09 --> Role Retrive from DB
INFO - 2020-01-10 12:53:09 --> get_group_role_mapping model = 16
DEBUG - 2020-01-10 12:53:09 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-10 12:53:09 --> loading model Active_Session
INFO - 2020-01-10 12:53:09 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:53:09 --> calling insert_active_session()
DEBUG - 2020-01-10 12:53:09 --> insert_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:53:09 --> insert success
DEBUG - 2020-01-10 12:53:09 --> loading Configarable_Login model...
INFO - 2020-01-10 12:53:09 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 12:53:09 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-10 12:53:09 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 12:53:09 --> Array
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

DEBUG - 2020-01-10 12:53:09 --> loading configurable menu with result=Array
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

DEBUG - 2020-01-10 12:53:09 --> loading view public\Dashboard
INFO - 2020-01-10 12:53:09 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 12:53:09 --> Final output sent to browser
DEBUG - 2020-01-10 12:53:09 --> Total execution time: 1.1324
INFO - 2020-01-10 12:53:12 --> Config Class Initialized
INFO - 2020-01-10 12:53:12 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:53:12 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:53:12 --> Utf8 Class Initialized
INFO - 2020-01-10 12:53:12 --> URI Class Initialized
INFO - 2020-01-10 12:53:12 --> Router Class Initialized
INFO - 2020-01-10 12:53:12 --> Output Class Initialized
INFO - 2020-01-10 12:53:12 --> Security Class Initialized
DEBUG - 2020-01-10 12:53:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:53:12 --> Input Class Initialized
INFO - 2020-01-10 12:53:12 --> Language Class Initialized
INFO - 2020-01-10 12:53:12 --> Loader Class Initialized
INFO - 2020-01-10 12:53:12 --> Helper loaded: html_helper
INFO - 2020-01-10 12:53:12 --> Helper loaded: url_helper
INFO - 2020-01-10 12:53:12 --> Helper loaded: form_helper
INFO - 2020-01-10 12:53:12 --> Database Driver Class Initialized
INFO - 2020-01-10 12:53:12 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:53:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:53:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:53:12 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:53:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:53:12 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:53:12 --> Controller Class Initialized
DEBUG - 2020-01-10 12:53:12 --> Create_User constructer got called..
INFO - 2020-01-10 12:53:12 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:53:12 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:53:12 --> show_users from DB
DEBUG - 2020-01-10 12:53:12 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:53:12 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:53:12 --> Final output sent to browser
DEBUG - 2020-01-10 12:53:12 --> Total execution time: 0.3225
INFO - 2020-01-10 12:53:28 --> Config Class Initialized
INFO - 2020-01-10 12:53:28 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:53:28 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:53:28 --> Utf8 Class Initialized
INFO - 2020-01-10 12:53:28 --> URI Class Initialized
INFO - 2020-01-10 12:53:28 --> Router Class Initialized
INFO - 2020-01-10 12:53:28 --> Output Class Initialized
INFO - 2020-01-10 12:53:28 --> Security Class Initialized
DEBUG - 2020-01-10 12:53:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:53:28 --> Input Class Initialized
INFO - 2020-01-10 12:53:28 --> Language Class Initialized
INFO - 2020-01-10 12:53:28 --> Loader Class Initialized
INFO - 2020-01-10 12:53:28 --> Helper loaded: html_helper
INFO - 2020-01-10 12:53:28 --> Helper loaded: url_helper
INFO - 2020-01-10 12:53:28 --> Helper loaded: form_helper
INFO - 2020-01-10 12:53:28 --> Database Driver Class Initialized
INFO - 2020-01-10 12:53:28 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:53:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:53:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:53:28 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:53:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:53:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:53:28 --> Controller Class Initialized
INFO - 2020-01-10 12:53:28 --> Helper loaded: cookie_helper
INFO - 2020-01-10 12:53:28 --> logout() called
DEBUG - 2020-01-10 12:53:28 --> loading model Active_Session
DEBUG - 2020-01-10 12:53:28 --> Session_id = q40vipo8s4aehc0lsfh43sjo3r9pd3s7
DEBUG - 2020-01-10 12:53:28 --> email = DevOss
INFO - 2020-01-10 12:53:28 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:53:28 --> calling remove_active_session()
DEBUG - 2020-01-10 12:53:28 --> remove_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:53:28 --> loading view welcome controller ... 
INFO - 2020-01-10 12:53:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:53:28 --> Final output sent to browser
DEBUG - 2020-01-10 12:53:28 --> Total execution time: 0.4574
INFO - 2020-01-10 12:53:38 --> Config Class Initialized
INFO - 2020-01-10 12:53:38 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:53:38 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:53:38 --> Utf8 Class Initialized
INFO - 2020-01-10 12:53:38 --> URI Class Initialized
INFO - 2020-01-10 12:53:38 --> Router Class Initialized
INFO - 2020-01-10 12:53:38 --> Output Class Initialized
INFO - 2020-01-10 12:53:38 --> Security Class Initialized
DEBUG - 2020-01-10 12:53:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:53:38 --> Input Class Initialized
INFO - 2020-01-10 12:53:38 --> Language Class Initialized
INFO - 2020-01-10 12:53:38 --> Loader Class Initialized
INFO - 2020-01-10 12:53:38 --> Helper loaded: html_helper
INFO - 2020-01-10 12:53:38 --> Helper loaded: url_helper
INFO - 2020-01-10 12:53:38 --> Helper loaded: form_helper
INFO - 2020-01-10 12:53:38 --> Database Driver Class Initialized
INFO - 2020-01-10 12:53:38 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:53:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:53:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:53:38 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:53:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:53:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:53:38 --> Controller Class Initialized
INFO - 2020-01-10 12:53:38 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:53:38 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:53:38 --> getAuth method got called...
DEBUG - 2020-01-10 12:53:38 --> Username :- DEV_OSS_USER
INFO - 2020-01-10 12:53:38 --> this is db user...
DEBUG - 2020-01-10 12:53:38 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:53:38 --> Password hashing output = $2y$10$I64vE.dyQQ17SiwouVzWYOcCmUGJq/MPzglayHWTW3aeuXZN4Mqqy
DEBUG - 2020-01-10 12:53:38 --> Password hash found in db = $2y$10$kwg6jbFNWlI1pWr30A8yReIFgWfrGIq8hXbf1XOs2qeWsnwX6AS2S
INFO - 2020-01-10 12:53:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
DEBUG - 2020-01-10 12:53:38 --> validation result=
INFO - 2020-01-10 12:53:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:53:38 --> Final output sent to browser
DEBUG - 2020-01-10 12:53:38 --> Total execution time: 0.8474
INFO - 2020-01-10 12:53:47 --> Config Class Initialized
INFO - 2020-01-10 12:53:47 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:53:47 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:53:47 --> Utf8 Class Initialized
INFO - 2020-01-10 12:53:47 --> URI Class Initialized
INFO - 2020-01-10 12:53:47 --> Router Class Initialized
INFO - 2020-01-10 12:53:47 --> Output Class Initialized
INFO - 2020-01-10 12:53:47 --> Security Class Initialized
DEBUG - 2020-01-10 12:53:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:53:47 --> Input Class Initialized
INFO - 2020-01-10 12:53:47 --> Language Class Initialized
INFO - 2020-01-10 12:53:47 --> Loader Class Initialized
INFO - 2020-01-10 12:53:47 --> Helper loaded: html_helper
INFO - 2020-01-10 12:53:47 --> Helper loaded: url_helper
INFO - 2020-01-10 12:53:47 --> Helper loaded: form_helper
INFO - 2020-01-10 12:53:47 --> Database Driver Class Initialized
INFO - 2020-01-10 12:53:47 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:53:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:53:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:53:48 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:53:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:53:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:53:48 --> Controller Class Initialized
INFO - 2020-01-10 12:53:48 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:53:48 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:53:48 --> getAuth method got called...
DEBUG - 2020-01-10 12:53:48 --> Username :- DEV_OSS_USER
INFO - 2020-01-10 12:53:48 --> this is db user...
DEBUG - 2020-01-10 12:53:48 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:53:48 --> Password hashing output = $2y$10$J8kv0a5MKOaJDjDZ1TMOrO1t4dPbfFAsrAh/JuYFzMOIC8KuzSikO
DEBUG - 2020-01-10 12:53:48 --> Password hash found in db = $2y$10$kwg6jbFNWlI1pWr30A8yReIFgWfrGIq8hXbf1XOs2qeWsnwX6AS2S
DEBUG - 2020-01-10 12:53:48 --> validation result=Array
(
    [id] => 30
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2020-01-10 12:53:48 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-10 12:53:48 --> Role Retrive from DB
INFO - 2020-01-10 12:53:48 --> get_group_role_mapping model = 16
DEBUG - 2020-01-10 12:53:48 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-10 12:53:48 --> loading model Active_Session
INFO - 2020-01-10 12:53:48 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:53:48 --> calling insert_active_session()
DEBUG - 2020-01-10 12:53:48 --> insert_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:53:48 --> insert success
DEBUG - 2020-01-10 12:53:48 --> loading Configarable_Login model...
INFO - 2020-01-10 12:53:48 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 12:53:48 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-10 12:53:48 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 12:53:48 --> Array
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

DEBUG - 2020-01-10 12:53:48 --> loading configurable menu with result=Array
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

DEBUG - 2020-01-10 12:53:48 --> loading view public\Dashboard
INFO - 2020-01-10 12:53:48 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 12:53:48 --> Final output sent to browser
DEBUG - 2020-01-10 12:53:48 --> Total execution time: 0.7924
INFO - 2020-01-10 12:54:34 --> Config Class Initialized
INFO - 2020-01-10 12:54:34 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:54:34 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:54:34 --> Utf8 Class Initialized
INFO - 2020-01-10 12:54:34 --> URI Class Initialized
INFO - 2020-01-10 12:54:34 --> Router Class Initialized
INFO - 2020-01-10 12:54:34 --> Output Class Initialized
INFO - 2020-01-10 12:54:34 --> Security Class Initialized
DEBUG - 2020-01-10 12:54:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:54:34 --> Input Class Initialized
INFO - 2020-01-10 12:54:34 --> Language Class Initialized
INFO - 2020-01-10 12:54:34 --> Loader Class Initialized
INFO - 2020-01-10 12:54:34 --> Helper loaded: html_helper
INFO - 2020-01-10 12:54:34 --> Helper loaded: url_helper
INFO - 2020-01-10 12:54:34 --> Helper loaded: form_helper
INFO - 2020-01-10 12:54:34 --> Database Driver Class Initialized
INFO - 2020-01-10 12:54:34 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:54:34 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:54:34 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:54:34 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:54:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:54:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:54:34 --> Controller Class Initialized
DEBUG - 2020-01-10 12:54:34 --> Create_User constructer got called..
INFO - 2020-01-10 12:54:34 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:54:34 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:54:34 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-10 12:54:34 --> Final output sent to browser
DEBUG - 2020-01-10 12:54:34 --> Total execution time: 0.3775
INFO - 2020-01-10 12:54:48 --> Config Class Initialized
INFO - 2020-01-10 12:54:48 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:54:48 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:54:48 --> Utf8 Class Initialized
INFO - 2020-01-10 12:54:48 --> URI Class Initialized
INFO - 2020-01-10 12:54:48 --> Router Class Initialized
INFO - 2020-01-10 12:54:48 --> Output Class Initialized
INFO - 2020-01-10 12:54:48 --> Security Class Initialized
DEBUG - 2020-01-10 12:54:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:54:48 --> Input Class Initialized
INFO - 2020-01-10 12:54:48 --> Language Class Initialized
INFO - 2020-01-10 12:54:48 --> Loader Class Initialized
INFO - 2020-01-10 12:54:48 --> Helper loaded: html_helper
INFO - 2020-01-10 12:54:48 --> Helper loaded: url_helper
INFO - 2020-01-10 12:54:48 --> Helper loaded: form_helper
INFO - 2020-01-10 12:54:48 --> Database Driver Class Initialized
INFO - 2020-01-10 12:54:48 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:54:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:54:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:54:48 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:54:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:54:48 --> Controller Class Initialized
DEBUG - 2020-01-10 12:54:48 --> calling constructor page Change_password
DEBUG - 2020-01-10 12:54:48 --> calling user access block = 52
DEBUG - 2020-01-10 12:54:48 --> index page Change_password
DEBUG - 2020-01-10 12:54:48 --> public/User/change_password
INFO - 2020-01-10 12:54:48 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/change_password.php
INFO - 2020-01-10 12:54:48 --> Final output sent to browser
DEBUG - 2020-01-10 12:54:48 --> Total execution time: 0.2725
INFO - 2020-01-10 12:54:50 --> Config Class Initialized
INFO - 2020-01-10 12:54:50 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:54:50 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:54:50 --> Utf8 Class Initialized
INFO - 2020-01-10 12:54:50 --> URI Class Initialized
INFO - 2020-01-10 12:54:50 --> Router Class Initialized
INFO - 2020-01-10 12:54:50 --> Output Class Initialized
INFO - 2020-01-10 12:54:50 --> Security Class Initialized
DEBUG - 2020-01-10 12:54:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:54:50 --> Input Class Initialized
INFO - 2020-01-10 12:54:50 --> Language Class Initialized
INFO - 2020-01-10 12:54:50 --> Loader Class Initialized
INFO - 2020-01-10 12:54:50 --> Helper loaded: html_helper
INFO - 2020-01-10 12:54:50 --> Helper loaded: url_helper
INFO - 2020-01-10 12:54:50 --> Helper loaded: form_helper
INFO - 2020-01-10 12:54:50 --> Database Driver Class Initialized
INFO - 2020-01-10 12:54:50 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:54:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:54:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:54:50 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:54:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:54:50 --> Controller Class Initialized
INFO - 2020-01-10 12:54:50 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2020-01-10 12:54:50 --> Final output sent to browser
DEBUG - 2020-01-10 12:54:50 --> Total execution time: 0.2625
INFO - 2020-01-10 12:54:52 --> Config Class Initialized
INFO - 2020-01-10 12:54:52 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:54:52 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:54:52 --> Utf8 Class Initialized
INFO - 2020-01-10 12:54:52 --> URI Class Initialized
INFO - 2020-01-10 12:54:52 --> Router Class Initialized
INFO - 2020-01-10 12:54:52 --> Output Class Initialized
INFO - 2020-01-10 12:54:52 --> Security Class Initialized
DEBUG - 2020-01-10 12:54:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:54:52 --> Input Class Initialized
INFO - 2020-01-10 12:54:52 --> Language Class Initialized
INFO - 2020-01-10 12:54:52 --> Loader Class Initialized
INFO - 2020-01-10 12:54:52 --> Helper loaded: html_helper
INFO - 2020-01-10 12:54:52 --> Helper loaded: url_helper
INFO - 2020-01-10 12:54:52 --> Helper loaded: form_helper
INFO - 2020-01-10 12:54:52 --> Database Driver Class Initialized
INFO - 2020-01-10 12:54:52 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:54:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:54:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:54:52 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:54:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:54:52 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:54:52 --> Controller Class Initialized
INFO - 2020-01-10 12:54:52 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/WIP.php
INFO - 2020-01-10 12:54:52 --> Final output sent to browser
DEBUG - 2020-01-10 12:54:52 --> Total execution time: 0.3325
INFO - 2020-01-10 12:54:54 --> Config Class Initialized
INFO - 2020-01-10 12:54:54 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:54:54 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:54:54 --> Utf8 Class Initialized
INFO - 2020-01-10 12:54:54 --> URI Class Initialized
INFO - 2020-01-10 12:54:54 --> Router Class Initialized
INFO - 2020-01-10 12:54:54 --> Output Class Initialized
INFO - 2020-01-10 12:54:54 --> Security Class Initialized
DEBUG - 2020-01-10 12:54:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:54:54 --> Input Class Initialized
INFO - 2020-01-10 12:54:54 --> Language Class Initialized
INFO - 2020-01-10 12:54:54 --> Loader Class Initialized
INFO - 2020-01-10 12:54:54 --> Helper loaded: html_helper
INFO - 2020-01-10 12:54:54 --> Helper loaded: url_helper
INFO - 2020-01-10 12:54:54 --> Helper loaded: form_helper
INFO - 2020-01-10 12:54:54 --> Database Driver Class Initialized
INFO - 2020-01-10 12:54:54 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:54:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:54:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:54:54 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:54:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:54:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:54:54 --> Controller Class Initialized
DEBUG - 2020-01-10 12:54:54 --> Create_User constructer got called..
INFO - 2020-01-10 12:54:54 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:54:54 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:54:54 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\CreateUser.php
INFO - 2020-01-10 12:54:54 --> Final output sent to browser
DEBUG - 2020-01-10 12:54:54 --> Total execution time: 0.2400
INFO - 2020-01-10 12:54:56 --> Config Class Initialized
INFO - 2020-01-10 12:54:56 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:54:56 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:54:56 --> Utf8 Class Initialized
INFO - 2020-01-10 12:54:56 --> URI Class Initialized
INFO - 2020-01-10 12:54:56 --> Router Class Initialized
INFO - 2020-01-10 12:54:56 --> Output Class Initialized
INFO - 2020-01-10 12:54:56 --> Security Class Initialized
DEBUG - 2020-01-10 12:54:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:54:56 --> Input Class Initialized
INFO - 2020-01-10 12:54:56 --> Language Class Initialized
INFO - 2020-01-10 12:54:56 --> Loader Class Initialized
INFO - 2020-01-10 12:54:56 --> Helper loaded: html_helper
INFO - 2020-01-10 12:54:56 --> Helper loaded: url_helper
INFO - 2020-01-10 12:54:56 --> Helper loaded: form_helper
INFO - 2020-01-10 12:54:56 --> Database Driver Class Initialized
INFO - 2020-01-10 12:54:56 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:54:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:54:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:54:56 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:54:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:54:56 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:54:56 --> Controller Class Initialized
DEBUG - 2020-01-10 12:54:56 --> Create_User constructer got called..
INFO - 2020-01-10 12:54:56 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/adminPage.php
INFO - 2020-01-10 12:54:56 --> Final output sent to browser
DEBUG - 2020-01-10 12:54:56 --> Total execution time: 0.3100
INFO - 2020-01-10 12:54:59 --> Config Class Initialized
INFO - 2020-01-10 12:54:59 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:54:59 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:54:59 --> Utf8 Class Initialized
INFO - 2020-01-10 12:54:59 --> URI Class Initialized
INFO - 2020-01-10 12:54:59 --> Router Class Initialized
INFO - 2020-01-10 12:54:59 --> Output Class Initialized
INFO - 2020-01-10 12:54:59 --> Security Class Initialized
DEBUG - 2020-01-10 12:54:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:54:59 --> Input Class Initialized
INFO - 2020-01-10 12:54:59 --> Language Class Initialized
INFO - 2020-01-10 12:54:59 --> Loader Class Initialized
INFO - 2020-01-10 12:54:59 --> Helper loaded: html_helper
INFO - 2020-01-10 12:54:59 --> Helper loaded: url_helper
INFO - 2020-01-10 12:54:59 --> Helper loaded: form_helper
INFO - 2020-01-10 12:54:59 --> Database Driver Class Initialized
INFO - 2020-01-10 12:54:59 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:54:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:54:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:54:59 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:54:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:54:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:54:59 --> Controller Class Initialized
INFO - 2020-01-10 12:54:59 --> Model "Authors_model" initialized
INFO - 2020-01-10 12:54:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-10 12:54:59 --> Pagination Class Initialized
INFO - 2020-01-10 12:54:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2020-01-10 12:54:59 --> Final output sent to browser
DEBUG - 2020-01-10 12:54:59 --> Total execution time: 0.2300
INFO - 2020-01-10 12:55:07 --> Config Class Initialized
INFO - 2020-01-10 12:55:07 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:55:07 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:55:07 --> Utf8 Class Initialized
INFO - 2020-01-10 12:55:07 --> URI Class Initialized
INFO - 2020-01-10 12:55:07 --> Router Class Initialized
INFO - 2020-01-10 12:55:07 --> Output Class Initialized
INFO - 2020-01-10 12:55:07 --> Security Class Initialized
DEBUG - 2020-01-10 12:55:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:55:07 --> Input Class Initialized
INFO - 2020-01-10 12:55:07 --> Language Class Initialized
INFO - 2020-01-10 12:55:07 --> Loader Class Initialized
INFO - 2020-01-10 12:55:07 --> Helper loaded: html_helper
INFO - 2020-01-10 12:55:07 --> Helper loaded: url_helper
INFO - 2020-01-10 12:55:07 --> Helper loaded: form_helper
INFO - 2020-01-10 12:55:07 --> Database Driver Class Initialized
INFO - 2020-01-10 12:55:07 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:55:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:55:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:55:07 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:55:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:55:07 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:55:07 --> Controller Class Initialized
INFO - 2020-01-10 12:55:07 --> Helper loaded: cookie_helper
INFO - 2020-01-10 12:55:07 --> logout() called
DEBUG - 2020-01-10 12:55:07 --> loading model Active_Session
DEBUG - 2020-01-10 12:55:07 --> Session_id = 3nh5t45iefr7o6mg0hh3f1l05naicu15
DEBUG - 2020-01-10 12:55:07 --> email = DEV_OSS_USER
INFO - 2020-01-10 12:55:07 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:55:07 --> calling remove_active_session()
DEBUG - 2020-01-10 12:55:07 --> remove_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:55:07 --> loading view welcome controller ... 
INFO - 2020-01-10 12:55:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:55:07 --> Final output sent to browser
DEBUG - 2020-01-10 12:55:07 --> Total execution time: 0.2575
INFO - 2020-01-10 12:55:18 --> Config Class Initialized
INFO - 2020-01-10 12:55:18 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:55:18 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:55:18 --> Utf8 Class Initialized
INFO - 2020-01-10 12:55:18 --> URI Class Initialized
INFO - 2020-01-10 12:55:18 --> Router Class Initialized
INFO - 2020-01-10 12:55:18 --> Output Class Initialized
INFO - 2020-01-10 12:55:18 --> Security Class Initialized
DEBUG - 2020-01-10 12:55:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:55:18 --> Input Class Initialized
INFO - 2020-01-10 12:55:18 --> Language Class Initialized
INFO - 2020-01-10 12:55:18 --> Loader Class Initialized
INFO - 2020-01-10 12:55:18 --> Helper loaded: html_helper
INFO - 2020-01-10 12:55:18 --> Helper loaded: url_helper
INFO - 2020-01-10 12:55:18 --> Helper loaded: form_helper
INFO - 2020-01-10 12:55:18 --> Database Driver Class Initialized
INFO - 2020-01-10 12:55:18 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:55:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:55:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:55:18 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:55:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:55:18 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:55:18 --> Controller Class Initialized
INFO - 2020-01-10 12:55:18 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:55:18 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:55:18 --> getAuth method got called...
DEBUG - 2020-01-10 12:55:18 --> Username :- DevOss
INFO - 2020-01-10 12:55:18 --> this is db user...
DEBUG - 2020-01-10 12:55:18 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:55:18 --> Password hashing output = $2y$10$g4vMQkWuHCf9dNQjAs63/eRudCHDpJ9J2wvBrGPyibhIWRzIT/e4C
DEBUG - 2020-01-10 12:55:18 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
DEBUG - 2020-01-10 12:55:19 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2020-01-10 12:55:19 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-10 12:55:19 --> Role Retrive from DB
INFO - 2020-01-10 12:55:19 --> get_group_role_mapping model = 16
DEBUG - 2020-01-10 12:55:19 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-10 12:55:19 --> loading model Active_Session
INFO - 2020-01-10 12:55:19 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:55:19 --> calling insert_active_session()
DEBUG - 2020-01-10 12:55:19 --> insert_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:55:19 --> insert success
DEBUG - 2020-01-10 12:55:19 --> loading Configarable_Login model...
INFO - 2020-01-10 12:55:19 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 12:55:19 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-10 12:55:19 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 12:55:19 --> Array
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

DEBUG - 2020-01-10 12:55:19 --> loading configurable menu with result=Array
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

DEBUG - 2020-01-10 12:55:19 --> loading view public\Dashboard
INFO - 2020-01-10 12:55:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 12:55:19 --> Final output sent to browser
DEBUG - 2020-01-10 12:55:19 --> Total execution time: 0.9499
INFO - 2020-01-10 12:55:27 --> Config Class Initialized
INFO - 2020-01-10 12:55:27 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:55:27 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:55:27 --> Utf8 Class Initialized
INFO - 2020-01-10 12:55:27 --> URI Class Initialized
INFO - 2020-01-10 12:55:27 --> Router Class Initialized
INFO - 2020-01-10 12:55:27 --> Output Class Initialized
INFO - 2020-01-10 12:55:27 --> Security Class Initialized
DEBUG - 2020-01-10 12:55:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:55:27 --> Input Class Initialized
INFO - 2020-01-10 12:55:27 --> Language Class Initialized
INFO - 2020-01-10 12:55:27 --> Loader Class Initialized
INFO - 2020-01-10 12:55:27 --> Helper loaded: html_helper
INFO - 2020-01-10 12:55:27 --> Helper loaded: url_helper
INFO - 2020-01-10 12:55:27 --> Helper loaded: form_helper
INFO - 2020-01-10 12:55:27 --> Database Driver Class Initialized
INFO - 2020-01-10 12:55:27 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:55:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:55:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:55:27 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:55:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:55:27 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:55:27 --> Controller Class Initialized
DEBUG - 2020-01-10 12:55:27 --> Create_User constructer got called..
INFO - 2020-01-10 12:55:27 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:55:27 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:55:27 --> show_users from DB
DEBUG - 2020-01-10 12:55:27 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:55:27 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:55:27 --> Final output sent to browser
DEBUG - 2020-01-10 12:55:27 --> Total execution time: 0.3125
INFO - 2020-01-10 12:55:39 --> Config Class Initialized
INFO - 2020-01-10 12:55:39 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:55:39 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:55:39 --> Utf8 Class Initialized
INFO - 2020-01-10 12:55:39 --> URI Class Initialized
INFO - 2020-01-10 12:55:39 --> Router Class Initialized
INFO - 2020-01-10 12:55:39 --> Output Class Initialized
INFO - 2020-01-10 12:55:39 --> Security Class Initialized
DEBUG - 2020-01-10 12:55:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:55:39 --> Input Class Initialized
INFO - 2020-01-10 12:55:39 --> Language Class Initialized
INFO - 2020-01-10 12:55:39 --> Loader Class Initialized
INFO - 2020-01-10 12:55:39 --> Helper loaded: html_helper
INFO - 2020-01-10 12:55:39 --> Helper loaded: url_helper
INFO - 2020-01-10 12:55:39 --> Helper loaded: form_helper
INFO - 2020-01-10 12:55:39 --> Database Driver Class Initialized
INFO - 2020-01-10 12:55:39 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:55:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:55:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:55:39 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:55:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:55:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:55:39 --> Controller Class Initialized
INFO - 2020-01-10 12:55:39 --> Helper loaded: cookie_helper
INFO - 2020-01-10 12:55:39 --> logout() called
DEBUG - 2020-01-10 12:55:39 --> loading model Active_Session
DEBUG - 2020-01-10 12:55:39 --> Session_id = 3djc3h7h9b0mikmqhhp9lrohk51psa5h
DEBUG - 2020-01-10 12:55:39 --> email = DevOss
INFO - 2020-01-10 12:55:39 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:55:39 --> calling remove_active_session()
DEBUG - 2020-01-10 12:55:39 --> remove_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:55:40 --> loading view welcome controller ... 
INFO - 2020-01-10 12:55:40 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:55:40 --> Final output sent to browser
DEBUG - 2020-01-10 12:55:40 --> Total execution time: 0.5850
INFO - 2020-01-10 12:55:48 --> Config Class Initialized
INFO - 2020-01-10 12:55:48 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:55:48 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:55:48 --> Utf8 Class Initialized
INFO - 2020-01-10 12:55:48 --> URI Class Initialized
INFO - 2020-01-10 12:55:48 --> Router Class Initialized
INFO - 2020-01-10 12:55:48 --> Output Class Initialized
INFO - 2020-01-10 12:55:48 --> Security Class Initialized
DEBUG - 2020-01-10 12:55:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:55:48 --> Input Class Initialized
INFO - 2020-01-10 12:55:48 --> Language Class Initialized
INFO - 2020-01-10 12:55:48 --> Loader Class Initialized
INFO - 2020-01-10 12:55:48 --> Helper loaded: html_helper
INFO - 2020-01-10 12:55:48 --> Helper loaded: url_helper
INFO - 2020-01-10 12:55:48 --> Helper loaded: form_helper
INFO - 2020-01-10 12:55:48 --> Database Driver Class Initialized
INFO - 2020-01-10 12:55:48 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:55:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:55:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:55:48 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:55:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:55:48 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:55:48 --> Controller Class Initialized
INFO - 2020-01-10 12:55:48 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:55:48 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:55:48 --> getAuth method got called...
DEBUG - 2020-01-10 12:55:48 --> Username :- DEV_OSS_USER1
INFO - 2020-01-10 12:55:48 --> this is db user...
DEBUG - 2020-01-10 12:55:48 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:55:48 --> Password hashing output = $2y$10$XcjGmRU12YUTLCjahmso8ubUhU92g5rwTnE5rkBQzjxAFM9TKRyKC
DEBUG - 2020-01-10 12:55:48 --> Password hash found in db = $2y$10$khkhipwa7IMlEUd3ZEClweNro8XJT8XaqssbmYSMU5SOutdBGBjiK
INFO - 2020-01-10 12:55:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
DEBUG - 2020-01-10 12:55:49 --> validation result=
INFO - 2020-01-10 12:55:49 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:55:49 --> Final output sent to browser
DEBUG - 2020-01-10 12:55:49 --> Total execution time: 1.0825
INFO - 2020-01-10 12:55:58 --> Config Class Initialized
INFO - 2020-01-10 12:55:58 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:55:58 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:55:59 --> Utf8 Class Initialized
INFO - 2020-01-10 12:55:59 --> URI Class Initialized
INFO - 2020-01-10 12:55:59 --> Router Class Initialized
INFO - 2020-01-10 12:55:59 --> Output Class Initialized
INFO - 2020-01-10 12:55:59 --> Security Class Initialized
DEBUG - 2020-01-10 12:55:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:55:59 --> Input Class Initialized
INFO - 2020-01-10 12:55:59 --> Language Class Initialized
INFO - 2020-01-10 12:55:59 --> Loader Class Initialized
INFO - 2020-01-10 12:55:59 --> Helper loaded: html_helper
INFO - 2020-01-10 12:55:59 --> Helper loaded: url_helper
INFO - 2020-01-10 12:55:59 --> Helper loaded: form_helper
INFO - 2020-01-10 12:55:59 --> Database Driver Class Initialized
INFO - 2020-01-10 12:55:59 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:55:59 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:55:59 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:55:59 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:55:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:55:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:55:59 --> Controller Class Initialized
INFO - 2020-01-10 12:55:59 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:55:59 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:55:59 --> getAuth method got called...
DEBUG - 2020-01-10 12:55:59 --> Username :- DEV_OSS_USER1
INFO - 2020-01-10 12:55:59 --> this is db user...
DEBUG - 2020-01-10 12:55:59 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:55:59 --> Password hashing output = $2y$10$HScfXqUld2/rL6ixNfdw1urBdaKrAhber8GNLggLAWgFQzXXhCR4m
DEBUG - 2020-01-10 12:55:59 --> Password hash found in db = $2y$10$khkhipwa7IMlEUd3ZEClweNro8XJT8XaqssbmYSMU5SOutdBGBjiK
INFO - 2020-01-10 12:55:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
DEBUG - 2020-01-10 12:55:59 --> validation result=
INFO - 2020-01-10 12:55:59 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:55:59 --> Final output sent to browser
DEBUG - 2020-01-10 12:55:59 --> Total execution time: 0.8575
INFO - 2020-01-10 12:56:06 --> Config Class Initialized
INFO - 2020-01-10 12:56:06 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:56:06 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:56:06 --> Utf8 Class Initialized
INFO - 2020-01-10 12:56:06 --> URI Class Initialized
INFO - 2020-01-10 12:56:06 --> Router Class Initialized
INFO - 2020-01-10 12:56:06 --> Output Class Initialized
INFO - 2020-01-10 12:56:06 --> Security Class Initialized
DEBUG - 2020-01-10 12:56:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:56:06 --> Input Class Initialized
INFO - 2020-01-10 12:56:06 --> Language Class Initialized
INFO - 2020-01-10 12:56:06 --> Loader Class Initialized
INFO - 2020-01-10 12:56:07 --> Helper loaded: html_helper
INFO - 2020-01-10 12:56:07 --> Helper loaded: url_helper
INFO - 2020-01-10 12:56:07 --> Helper loaded: form_helper
INFO - 2020-01-10 12:56:07 --> Database Driver Class Initialized
INFO - 2020-01-10 12:56:07 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:56:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:56:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:56:07 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:56:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:56:07 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:56:07 --> Controller Class Initialized
INFO - 2020-01-10 12:56:07 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:56:07 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:56:07 --> getAuth method got called...
DEBUG - 2020-01-10 12:56:07 --> Username :- DEV_OSS_USER1
INFO - 2020-01-10 12:56:07 --> this is db user...
DEBUG - 2020-01-10 12:56:07 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:56:07 --> Password hashing output = $2y$10$IYSSLgsfQFIdZ7NPlaG6ou3Hwpvf.VCFsFPtru1Un8mqnHVmzC6Va
DEBUG - 2020-01-10 12:56:07 --> Password hash found in db = $2y$10$khkhipwa7IMlEUd3ZEClweNro8XJT8XaqssbmYSMU5SOutdBGBjiK
INFO - 2020-01-10 12:56:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
DEBUG - 2020-01-10 12:56:07 --> validation result=
INFO - 2020-01-10 12:56:07 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:56:07 --> Final output sent to browser
DEBUG - 2020-01-10 12:56:07 --> Total execution time: 1.0175
INFO - 2020-01-10 12:56:23 --> Config Class Initialized
INFO - 2020-01-10 12:56:23 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:56:23 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:56:23 --> Utf8 Class Initialized
INFO - 2020-01-10 12:56:23 --> URI Class Initialized
INFO - 2020-01-10 12:56:23 --> Router Class Initialized
INFO - 2020-01-10 12:56:23 --> Output Class Initialized
INFO - 2020-01-10 12:56:23 --> Security Class Initialized
DEBUG - 2020-01-10 12:56:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:56:23 --> Input Class Initialized
INFO - 2020-01-10 12:56:23 --> Language Class Initialized
INFO - 2020-01-10 12:56:23 --> Loader Class Initialized
INFO - 2020-01-10 12:56:23 --> Helper loaded: html_helper
INFO - 2020-01-10 12:56:23 --> Helper loaded: url_helper
INFO - 2020-01-10 12:56:23 --> Helper loaded: form_helper
INFO - 2020-01-10 12:56:23 --> Database Driver Class Initialized
INFO - 2020-01-10 12:56:23 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:56:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:56:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:56:23 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:56:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:56:23 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:56:23 --> Controller Class Initialized
INFO - 2020-01-10 12:56:23 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:56:23 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:56:23 --> getAuth method got called...
DEBUG - 2020-01-10 12:56:23 --> Username :- DevOss
INFO - 2020-01-10 12:56:23 --> this is db user...
DEBUG - 2020-01-10 12:56:23 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:56:23 --> Password hashing output = $2y$10$S2/li0DSX/EvWL2ndL73AedoElSyxe4D3G/8iBxBaSyapDTq0KV8K
DEBUG - 2020-01-10 12:56:23 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
INFO - 2020-01-10 12:56:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
DEBUG - 2020-01-10 12:56:24 --> validation result=
INFO - 2020-01-10 12:56:24 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:56:24 --> Final output sent to browser
DEBUG - 2020-01-10 12:56:24 --> Total execution time: 0.8575
INFO - 2020-01-10 12:56:30 --> Config Class Initialized
INFO - 2020-01-10 12:56:30 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:56:30 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:56:30 --> Utf8 Class Initialized
INFO - 2020-01-10 12:56:30 --> URI Class Initialized
INFO - 2020-01-10 12:56:30 --> Router Class Initialized
INFO - 2020-01-10 12:56:31 --> Output Class Initialized
INFO - 2020-01-10 12:56:31 --> Security Class Initialized
DEBUG - 2020-01-10 12:56:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:56:31 --> Input Class Initialized
INFO - 2020-01-10 12:56:31 --> Language Class Initialized
INFO - 2020-01-10 12:56:31 --> Loader Class Initialized
INFO - 2020-01-10 12:56:31 --> Helper loaded: html_helper
INFO - 2020-01-10 12:56:31 --> Helper loaded: url_helper
INFO - 2020-01-10 12:56:31 --> Helper loaded: form_helper
INFO - 2020-01-10 12:56:31 --> Database Driver Class Initialized
INFO - 2020-01-10 12:56:31 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:56:31 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:56:31 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:56:31 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:56:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:56:31 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:56:31 --> Controller Class Initialized
INFO - 2020-01-10 12:56:31 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:56:31 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:56:31 --> getAuth method got called...
DEBUG - 2020-01-10 12:56:31 --> Username :- DevOss
INFO - 2020-01-10 12:56:31 --> this is db user...
DEBUG - 2020-01-10 12:56:31 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:56:31 --> Password hashing output = $2y$10$ytIjwg.AwJYMJLyvHVOo.uB7XuanzElLvJoylTh1zqoFU/J7aLOdu
DEBUG - 2020-01-10 12:56:31 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
INFO - 2020-01-10 12:56:31 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
DEBUG - 2020-01-10 12:56:31 --> validation result=
INFO - 2020-01-10 12:56:31 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:56:31 --> Final output sent to browser
DEBUG - 2020-01-10 12:56:31 --> Total execution time: 0.9725
INFO - 2020-01-10 12:56:41 --> Config Class Initialized
INFO - 2020-01-10 12:56:41 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:56:41 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:56:41 --> Utf8 Class Initialized
INFO - 2020-01-10 12:56:41 --> URI Class Initialized
INFO - 2020-01-10 12:56:41 --> Router Class Initialized
INFO - 2020-01-10 12:56:41 --> Output Class Initialized
INFO - 2020-01-10 12:56:41 --> Security Class Initialized
DEBUG - 2020-01-10 12:56:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:56:41 --> Input Class Initialized
INFO - 2020-01-10 12:56:41 --> Language Class Initialized
INFO - 2020-01-10 12:56:41 --> Loader Class Initialized
INFO - 2020-01-10 12:56:41 --> Helper loaded: html_helper
INFO - 2020-01-10 12:56:41 --> Helper loaded: url_helper
INFO - 2020-01-10 12:56:41 --> Helper loaded: form_helper
INFO - 2020-01-10 12:56:41 --> Database Driver Class Initialized
INFO - 2020-01-10 12:56:41 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:56:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:56:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:56:41 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:56:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:56:41 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:56:41 --> Controller Class Initialized
INFO - 2020-01-10 12:56:41 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:56:41 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:56:41 --> getAuth method got called...
DEBUG - 2020-01-10 12:56:41 --> Username :- DevOss
INFO - 2020-01-10 12:56:41 --> this is db user...
DEBUG - 2020-01-10 12:56:41 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:56:42 --> Password hashing output = $2y$10$yQaDJEPowDrSmoQzY4NcFeP1uMHVOP9cACll8MUp07hPpL0TCzBxi
DEBUG - 2020-01-10 12:56:42 --> Password hash found in db = $2y$10$6qJipyPb3WeOioLBaAdB2e28q48KLAVZ9t6QTq8ikU0E0gfrGo1S2
DEBUG - 2020-01-10 12:56:42 --> validation result=Array
(
    [id] => 9
    [user_group] => 52
    [userType] => DB
    [sub_group] => 16
)

INFO - 2020-01-10 12:56:42 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-10 12:56:42 --> Role Retrive from DB
INFO - 2020-01-10 12:56:42 --> get_group_role_mapping model = 16
DEBUG - 2020-01-10 12:56:42 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-10 12:56:42 --> loading model Active_Session
INFO - 2020-01-10 12:56:42 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:56:42 --> calling insert_active_session()
DEBUG - 2020-01-10 12:56:42 --> insert_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:56:42 --> insert success
DEBUG - 2020-01-10 12:56:42 --> loading Configarable_Login model...
INFO - 2020-01-10 12:56:42 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 12:56:42 --> calling countlastsevendays() method for role=DB_ADMIN_USER
DEBUG - 2020-01-10 12:56:42 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 12:56:42 --> Array
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

DEBUG - 2020-01-10 12:56:42 --> loading configurable menu with result=Array
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

DEBUG - 2020-01-10 12:56:42 --> loading view public\Dashboard
INFO - 2020-01-10 12:56:42 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 12:56:42 --> Final output sent to browser
DEBUG - 2020-01-10 12:56:42 --> Total execution time: 1.1500
INFO - 2020-01-10 12:57:10 --> Config Class Initialized
INFO - 2020-01-10 12:57:10 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:57:10 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:57:10 --> Utf8 Class Initialized
INFO - 2020-01-10 12:57:10 --> URI Class Initialized
INFO - 2020-01-10 12:57:10 --> Router Class Initialized
INFO - 2020-01-10 12:57:10 --> Output Class Initialized
INFO - 2020-01-10 12:57:10 --> Security Class Initialized
DEBUG - 2020-01-10 12:57:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:57:10 --> Input Class Initialized
INFO - 2020-01-10 12:57:10 --> Language Class Initialized
INFO - 2020-01-10 12:57:11 --> Loader Class Initialized
INFO - 2020-01-10 12:57:11 --> Helper loaded: html_helper
INFO - 2020-01-10 12:57:11 --> Helper loaded: url_helper
INFO - 2020-01-10 12:57:11 --> Helper loaded: form_helper
INFO - 2020-01-10 12:57:11 --> Database Driver Class Initialized
INFO - 2020-01-10 12:57:11 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:57:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:57:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:57:11 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:57:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:57:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:57:11 --> Controller Class Initialized
DEBUG - 2020-01-10 12:57:11 --> Create_User constructer got called..
INFO - 2020-01-10 12:57:11 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:57:11 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:57:11 --> show_users from DB
DEBUG - 2020-01-10 12:57:11 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:57:11 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:57:11 --> Final output sent to browser
DEBUG - 2020-01-10 12:57:11 --> Total execution time: 0.3225
INFO - 2020-01-10 12:57:22 --> Config Class Initialized
INFO - 2020-01-10 12:57:22 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:57:22 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:57:22 --> Utf8 Class Initialized
INFO - 2020-01-10 12:57:22 --> URI Class Initialized
INFO - 2020-01-10 12:57:22 --> Router Class Initialized
INFO - 2020-01-10 12:57:22 --> Output Class Initialized
INFO - 2020-01-10 12:57:22 --> Security Class Initialized
DEBUG - 2020-01-10 12:57:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:57:22 --> Input Class Initialized
INFO - 2020-01-10 12:57:22 --> Language Class Initialized
INFO - 2020-01-10 12:57:22 --> Loader Class Initialized
INFO - 2020-01-10 12:57:22 --> Helper loaded: html_helper
INFO - 2020-01-10 12:57:22 --> Helper loaded: url_helper
INFO - 2020-01-10 12:57:22 --> Helper loaded: form_helper
INFO - 2020-01-10 12:57:22 --> Database Driver Class Initialized
INFO - 2020-01-10 12:57:22 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:57:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:57:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:57:22 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:57:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:57:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:57:22 --> Controller Class Initialized
DEBUG - 2020-01-10 12:57:22 --> Create_User constructer got called..
INFO - 2020-01-10 12:57:22 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:57:22 --> loading module
INFO - 2020-01-10 12:57:22 --> User deleted successfully...Abhay
DEBUG - 2020-01-10 12:57:22 --> module run finished .. result = 1
INFO - 2020-01-10 12:57:22 --> Final output sent to browser
DEBUG - 2020-01-10 12:57:22 --> Total execution time: 0.4400
INFO - 2020-01-10 12:57:25 --> Config Class Initialized
INFO - 2020-01-10 12:57:25 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:57:25 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:57:25 --> Utf8 Class Initialized
INFO - 2020-01-10 12:57:25 --> URI Class Initialized
INFO - 2020-01-10 12:57:25 --> Router Class Initialized
INFO - 2020-01-10 12:57:25 --> Output Class Initialized
INFO - 2020-01-10 12:57:25 --> Security Class Initialized
DEBUG - 2020-01-10 12:57:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:57:25 --> Input Class Initialized
INFO - 2020-01-10 12:57:25 --> Language Class Initialized
INFO - 2020-01-10 12:57:25 --> Loader Class Initialized
INFO - 2020-01-10 12:57:25 --> Helper loaded: html_helper
INFO - 2020-01-10 12:57:25 --> Helper loaded: url_helper
INFO - 2020-01-10 12:57:25 --> Helper loaded: form_helper
INFO - 2020-01-10 12:57:25 --> Database Driver Class Initialized
INFO - 2020-01-10 12:57:25 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:57:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:57:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:57:25 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:57:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:57:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:57:25 --> Controller Class Initialized
DEBUG - 2020-01-10 12:57:25 --> Create_User constructer got called..
INFO - 2020-01-10 12:57:25 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:57:25 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:57:25 --> show_users from DB
DEBUG - 2020-01-10 12:57:25 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:57:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:57:25 --> Final output sent to browser
DEBUG - 2020-01-10 12:57:25 --> Total execution time: 0.3575
INFO - 2020-01-10 12:57:39 --> Config Class Initialized
INFO - 2020-01-10 12:57:39 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:57:39 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:57:39 --> Utf8 Class Initialized
INFO - 2020-01-10 12:57:39 --> URI Class Initialized
INFO - 2020-01-10 12:57:39 --> Router Class Initialized
INFO - 2020-01-10 12:57:39 --> Output Class Initialized
INFO - 2020-01-10 12:57:39 --> Security Class Initialized
DEBUG - 2020-01-10 12:57:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:57:39 --> Input Class Initialized
INFO - 2020-01-10 12:57:39 --> Language Class Initialized
INFO - 2020-01-10 12:57:39 --> Loader Class Initialized
INFO - 2020-01-10 12:57:39 --> Helper loaded: html_helper
INFO - 2020-01-10 12:57:39 --> Helper loaded: url_helper
INFO - 2020-01-10 12:57:39 --> Helper loaded: form_helper
INFO - 2020-01-10 12:57:39 --> Database Driver Class Initialized
INFO - 2020-01-10 12:57:39 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:57:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:57:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:57:39 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:57:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:57:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:57:39 --> Controller Class Initialized
DEBUG - 2020-01-10 12:57:39 --> Create_User constructer got called..
INFO - 2020-01-10 12:57:39 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:57:39 --> get_group_role_mapping model = 52
DEBUG - 2020-01-10 12:57:39 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:57:39 --> Final output sent to browser
DEBUG - 2020-01-10 12:57:39 --> Total execution time: 0.2075
INFO - 2020-01-10 12:57:50 --> Config Class Initialized
INFO - 2020-01-10 12:57:50 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:57:50 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:57:50 --> Utf8 Class Initialized
INFO - 2020-01-10 12:57:50 --> URI Class Initialized
INFO - 2020-01-10 12:57:50 --> Router Class Initialized
INFO - 2020-01-10 12:57:50 --> Output Class Initialized
INFO - 2020-01-10 12:57:50 --> Security Class Initialized
DEBUG - 2020-01-10 12:57:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:57:50 --> Input Class Initialized
INFO - 2020-01-10 12:57:50 --> Language Class Initialized
INFO - 2020-01-10 12:57:50 --> Loader Class Initialized
INFO - 2020-01-10 12:57:50 --> Helper loaded: html_helper
INFO - 2020-01-10 12:57:50 --> Helper loaded: url_helper
INFO - 2020-01-10 12:57:50 --> Helper loaded: form_helper
INFO - 2020-01-10 12:57:50 --> Database Driver Class Initialized
INFO - 2020-01-10 12:57:50 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:57:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:57:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:57:50 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:57:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:57:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:57:50 --> Controller Class Initialized
DEBUG - 2020-01-10 12:57:50 --> Create_User constructer got called..
INFO - 2020-01-10 12:57:50 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:57:50 --> get_group_role_mapping model = 57
DEBUG - 2020-01-10 12:57:50 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:57:50 --> Final output sent to browser
DEBUG - 2020-01-10 12:57:50 --> Total execution time: 0.2775
INFO - 2020-01-10 12:57:54 --> Config Class Initialized
INFO - 2020-01-10 12:57:54 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:57:54 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:57:54 --> Utf8 Class Initialized
INFO - 2020-01-10 12:57:54 --> URI Class Initialized
INFO - 2020-01-10 12:57:54 --> Router Class Initialized
INFO - 2020-01-10 12:57:54 --> Output Class Initialized
INFO - 2020-01-10 12:57:54 --> Security Class Initialized
DEBUG - 2020-01-10 12:57:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:57:54 --> Input Class Initialized
INFO - 2020-01-10 12:57:54 --> Language Class Initialized
INFO - 2020-01-10 12:57:54 --> Loader Class Initialized
INFO - 2020-01-10 12:57:54 --> Helper loaded: html_helper
INFO - 2020-01-10 12:57:54 --> Helper loaded: url_helper
INFO - 2020-01-10 12:57:54 --> Helper loaded: form_helper
INFO - 2020-01-10 12:57:54 --> Database Driver Class Initialized
INFO - 2020-01-10 12:57:54 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:57:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:57:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:57:54 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:57:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:57:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:57:54 --> Controller Class Initialized
DEBUG - 2020-01-10 12:57:54 --> Create_User constructer got called..
DEBUG - 2020-01-10 12:57:54 --> function inserUserAj executed....
DEBUG - 2020-01-10 12:57:54 --> form validation function apply....
INFO - 2020-01-10 12:57:55 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2020-01-10 12:57:55 --> form validation SUCCESS.........
DEBUG - 2020-01-10 12:57:55 --> removed html escape character SUCCESS.........
DEBUG - 2020-01-10 12:57:55 --> Received data from post method SUCCESS.........
INFO - 2020-01-10 12:57:55 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:57:55 --> loading module
DEBUG - 2020-01-10 12:57:55 --> modify user function got called....
DEBUG - 2020-01-10 12:57:55 --> Query = UPDATE `tblusers` SET `firstName` = 'Yugal', `lastName` = 'Ingal', `userId` = 'DEV_OSS_USER', `mobileNumber` = '9699675725', `isActive` = '1', `lastUpdationDate` = '2020-01-10 12:57:55', `workGroup_id` = '57', `userType` = 'DB', `domainName` = 'NA', `subGroup` = '26'
WHERE `id` = '30'
DEBUG - 2020-01-10 12:57:55 --> update query executed....1
DEBUG - 2020-01-10 12:57:55 --> module run finished .. result = 1
INFO - 2020-01-10 12:57:55 --> Final output sent to browser
DEBUG - 2020-01-10 12:57:55 --> Total execution time: 0.4500
INFO - 2020-01-10 12:57:57 --> Config Class Initialized
INFO - 2020-01-10 12:57:57 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:57:57 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:57:57 --> Utf8 Class Initialized
INFO - 2020-01-10 12:57:57 --> URI Class Initialized
INFO - 2020-01-10 12:57:57 --> Router Class Initialized
INFO - 2020-01-10 12:57:57 --> Output Class Initialized
INFO - 2020-01-10 12:57:57 --> Security Class Initialized
DEBUG - 2020-01-10 12:57:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:57:57 --> Input Class Initialized
INFO - 2020-01-10 12:57:57 --> Language Class Initialized
INFO - 2020-01-10 12:57:57 --> Loader Class Initialized
INFO - 2020-01-10 12:57:57 --> Helper loaded: html_helper
INFO - 2020-01-10 12:57:57 --> Helper loaded: url_helper
INFO - 2020-01-10 12:57:57 --> Helper loaded: form_helper
INFO - 2020-01-10 12:57:57 --> Database Driver Class Initialized
INFO - 2020-01-10 12:57:58 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:57:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:57:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:57:58 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:57:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:57:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:57:58 --> Controller Class Initialized
DEBUG - 2020-01-10 12:57:58 --> Create_User constructer got called..
INFO - 2020-01-10 12:57:58 --> Model "User_Login_Model" initialized
DEBUG - 2020-01-10 12:57:58 --> showing all user from db tblusers...
DEBUG - 2020-01-10 12:57:58 --> show_users from DB
DEBUG - 2020-01-10 12:57:58 --> group_names() got called form ManageUsers_Model
INFO - 2020-01-10 12:57:58 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showUser.php
INFO - 2020-01-10 12:57:58 --> Final output sent to browser
DEBUG - 2020-01-10 12:57:58 --> Total execution time: 0.4825
INFO - 2020-01-10 12:58:09 --> Config Class Initialized
INFO - 2020-01-10 12:58:09 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:58:09 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:58:09 --> Utf8 Class Initialized
INFO - 2020-01-10 12:58:09 --> URI Class Initialized
INFO - 2020-01-10 12:58:09 --> Router Class Initialized
INFO - 2020-01-10 12:58:09 --> Output Class Initialized
INFO - 2020-01-10 12:58:09 --> Security Class Initialized
DEBUG - 2020-01-10 12:58:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:58:09 --> Input Class Initialized
INFO - 2020-01-10 12:58:09 --> Language Class Initialized
INFO - 2020-01-10 12:58:09 --> Loader Class Initialized
INFO - 2020-01-10 12:58:09 --> Helper loaded: html_helper
INFO - 2020-01-10 12:58:09 --> Helper loaded: url_helper
INFO - 2020-01-10 12:58:09 --> Helper loaded: form_helper
INFO - 2020-01-10 12:58:09 --> Database Driver Class Initialized
INFO - 2020-01-10 12:58:09 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:58:09 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:58:09 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:58:09 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:58:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:58:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:58:09 --> Controller Class Initialized
INFO - 2020-01-10 12:58:09 --> Helper loaded: cookie_helper
INFO - 2020-01-10 12:58:09 --> logout() called
DEBUG - 2020-01-10 12:58:09 --> loading model Active_Session
DEBUG - 2020-01-10 12:58:09 --> Session_id = 36ga3j8oo1gcvurdgpugah19frpp8p4j
DEBUG - 2020-01-10 12:58:09 --> email = DevOss
INFO - 2020-01-10 12:58:09 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:58:09 --> calling remove_active_session()
DEBUG - 2020-01-10 12:58:09 --> remove_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:58:09 --> loading view welcome controller ... 
INFO - 2020-01-10 12:58:09 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:58:09 --> Final output sent to browser
DEBUG - 2020-01-10 12:58:09 --> Total execution time: 0.2425
INFO - 2020-01-10 12:58:18 --> Config Class Initialized
INFO - 2020-01-10 12:58:18 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:58:18 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:58:18 --> Utf8 Class Initialized
INFO - 2020-01-10 12:58:18 --> URI Class Initialized
INFO - 2020-01-10 12:58:18 --> Router Class Initialized
INFO - 2020-01-10 12:58:18 --> Output Class Initialized
INFO - 2020-01-10 12:58:18 --> Security Class Initialized
DEBUG - 2020-01-10 12:58:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:58:18 --> Input Class Initialized
INFO - 2020-01-10 12:58:18 --> Language Class Initialized
INFO - 2020-01-10 12:58:18 --> Loader Class Initialized
INFO - 2020-01-10 12:58:18 --> Helper loaded: html_helper
INFO - 2020-01-10 12:58:18 --> Helper loaded: url_helper
INFO - 2020-01-10 12:58:18 --> Helper loaded: form_helper
INFO - 2020-01-10 12:58:18 --> Database Driver Class Initialized
INFO - 2020-01-10 12:58:18 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:58:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:58:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:58:18 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:58:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:58:18 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:58:18 --> Controller Class Initialized
INFO - 2020-01-10 12:58:18 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2020-01-10 12:58:18 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:58:18 --> getAuth method got called...
DEBUG - 2020-01-10 12:58:18 --> Username :- DEV_OSS_USER
INFO - 2020-01-10 12:58:18 --> this is db user...
DEBUG - 2020-01-10 12:58:18 --> validatelogin() got called form User_Login_Model
DEBUG - 2020-01-10 12:58:19 --> Password hashing output = $2y$10$OmhhFb7mHJzuQoDRYMNYAunAKAbXlNwpXuvOdU3tKBNet9TLZohTW
DEBUG - 2020-01-10 12:58:19 --> Password hash found in db = $2y$10$kwg6jbFNWlI1pWr30A8yReIFgWfrGIq8hXbf1XOs2qeWsnwX6AS2S
DEBUG - 2020-01-10 12:58:19 --> validation result=Array
(
    [id] => 30
    [user_group] => 57
    [userType] => DB
    [sub_group] => 26
)

INFO - 2020-01-10 12:58:19 --> get_role() got called form User_Login_Model
DEBUG - 2020-01-10 12:58:19 --> Role Retrive from DB
INFO - 2020-01-10 12:58:19 --> get_group_role_mapping model = 26
DEBUG - 2020-01-10 12:58:19 --> show_all_profile_data from DB retrived
DEBUG - 2020-01-10 12:58:19 --> loading model Active_Session
INFO - 2020-01-10 12:58:19 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:58:19 --> calling insert_active_session()
DEBUG - 2020-01-10 12:58:19 --> insert_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:58:19 --> insert success
DEBUG - 2020-01-10 12:58:19 --> loading Configarable_Login model...
INFO - 2020-01-10 12:58:19 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 12:58:19 --> calling countlastsevendays() method for role=DEV_OSS_USER
DEBUG - 2020-01-10 12:58:19 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 12:58:19 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 41
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 42
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 43
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [3] => stdClass Object
        (
            [page_id] => 44
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-outdent
        )

)

DEBUG - 2020-01-10 12:58:19 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 41
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 42
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 43
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [3] => stdClass Object
        (
            [page_id] => 44
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-outdent
        )

)

DEBUG - 2020-01-10 12:58:19 --> loading view public\Dashboard
INFO - 2020-01-10 12:58:19 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 12:58:19 --> Final output sent to browser
DEBUG - 2020-01-10 12:58:19 --> Total execution time: 1.0950
INFO - 2020-01-10 12:58:24 --> Config Class Initialized
INFO - 2020-01-10 12:58:24 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:58:24 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:58:24 --> Utf8 Class Initialized
INFO - 2020-01-10 12:58:24 --> URI Class Initialized
INFO - 2020-01-10 12:58:24 --> Router Class Initialized
INFO - 2020-01-10 12:58:24 --> Output Class Initialized
INFO - 2020-01-10 12:58:24 --> Security Class Initialized
DEBUG - 2020-01-10 12:58:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:58:24 --> Input Class Initialized
INFO - 2020-01-10 12:58:24 --> Language Class Initialized
INFO - 2020-01-10 12:58:24 --> Loader Class Initialized
INFO - 2020-01-10 12:58:24 --> Helper loaded: html_helper
INFO - 2020-01-10 12:58:24 --> Helper loaded: url_helper
INFO - 2020-01-10 12:58:24 --> Helper loaded: form_helper
INFO - 2020-01-10 12:58:24 --> Database Driver Class Initialized
INFO - 2020-01-10 12:58:24 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:58:24 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:58:24 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:58:24 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:58:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:58:24 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:58:25 --> Controller Class Initialized
DEBUG - 2020-01-10 12:58:25 --> loading Configarable_Login model...
INFO - 2020-01-10 12:58:25 --> Model "Configarable_Login" initialized
DEBUG - 2020-01-10 12:58:25 --> calling countlastsevendays() method for role=DEV_OSS_USER
DEBUG - 2020-01-10 12:58:25 --> countlastsevendays() got called form Configarable_Login
DEBUG - 2020-01-10 12:58:25 --> Array
(
    [0] => stdClass Object
        (
            [page_id] => 41
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 42
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 43
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [3] => stdClass Object
        (
            [page_id] => 44
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-outdent
        )

)

DEBUG - 2020-01-10 12:58:25 --> loading configurable menu with result=Array
(
    [0] => stdClass Object
        (
            [page_id] => 41
            [page_name] => Dashboard
            [page_link] => Auth/AdLogin/load_dash
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-tachometer-alt
        )

    [1] => stdClass Object
        (
            [page_id] => 42
            [page_name] => Profile
            [page_link] => user/Create_User/showAllProfileData
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-chart-area
        )

    [2] => stdClass Object
        (
            [page_id] => 43
            [page_name] => User Rights
            [page_link] => user/User_Right
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-balance-scale
        )

    [3] => stdClass Object
        (
            [page_id] => 44
            [page_name] => Audit Logs
            [page_link] => user/Authors/audit
            [page_status] => A
            [page_create_ts] => 2020-01-10 17:21:18
            [page_role] => DEV_OSS_USER
            [page_seq] => 
            [page_active] => 
            [symbol] => fas fa-fw fa-outdent
        )

)

DEBUG - 2020-01-10 12:58:25 --> loading view public\Dashboard
INFO - 2020-01-10 12:58:25 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:58:25 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\dash.php
INFO - 2020-01-10 12:58:25 --> Final output sent to browser
DEBUG - 2020-01-10 12:58:25 --> Total execution time: 0.2975
INFO - 2020-01-10 12:58:26 --> Config Class Initialized
INFO - 2020-01-10 12:58:26 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:58:26 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:58:26 --> Utf8 Class Initialized
INFO - 2020-01-10 12:58:26 --> URI Class Initialized
INFO - 2020-01-10 12:58:26 --> Router Class Initialized
INFO - 2020-01-10 12:58:26 --> Output Class Initialized
INFO - 2020-01-10 12:58:26 --> Security Class Initialized
DEBUG - 2020-01-10 12:58:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:58:26 --> Input Class Initialized
INFO - 2020-01-10 12:58:26 --> Language Class Initialized
INFO - 2020-01-10 12:58:26 --> Loader Class Initialized
INFO - 2020-01-10 12:58:26 --> Helper loaded: html_helper
INFO - 2020-01-10 12:58:26 --> Helper loaded: url_helper
INFO - 2020-01-10 12:58:26 --> Helper loaded: form_helper
INFO - 2020-01-10 12:58:26 --> Database Driver Class Initialized
INFO - 2020-01-10 12:58:26 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:58:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:58:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:58:26 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:58:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:58:26 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:58:26 --> Controller Class Initialized
DEBUG - 2020-01-10 12:58:26 --> Create_User constructer got called..
INFO - 2020-01-10 12:58:26 --> Model "User_Login_Model" initialized
INFO - 2020-01-10 12:58:26 --> show all profile data modelDEV_OSS_USER
DEBUG - 2020-01-10 12:58:26 --> show_all_profile_data from DB retrived
INFO - 2020-01-10 12:58:26 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\showProfile.php
INFO - 2020-01-10 12:58:26 --> Final output sent to browser
DEBUG - 2020-01-10 12:58:26 --> Total execution time: 0.2550
INFO - 2020-01-10 12:58:28 --> Config Class Initialized
INFO - 2020-01-10 12:58:28 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:58:28 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:58:28 --> Utf8 Class Initialized
INFO - 2020-01-10 12:58:28 --> URI Class Initialized
INFO - 2020-01-10 12:58:28 --> Router Class Initialized
INFO - 2020-01-10 12:58:28 --> Output Class Initialized
INFO - 2020-01-10 12:58:28 --> Security Class Initialized
DEBUG - 2020-01-10 12:58:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:58:28 --> Input Class Initialized
INFO - 2020-01-10 12:58:28 --> Language Class Initialized
INFO - 2020-01-10 12:58:28 --> Loader Class Initialized
INFO - 2020-01-10 12:58:28 --> Helper loaded: html_helper
INFO - 2020-01-10 12:58:28 --> Helper loaded: url_helper
INFO - 2020-01-10 12:58:28 --> Helper loaded: form_helper
INFO - 2020-01-10 12:58:28 --> Database Driver Class Initialized
INFO - 2020-01-10 12:58:28 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:58:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:58:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:58:28 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:58:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:58:28 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:58:28 --> Controller Class Initialized
DEBUG - 2020-01-10 12:58:28 --> User_Right constructer got called..
INFO - 2020-01-10 12:58:28 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public\User\userRights.php
INFO - 2020-01-10 12:58:28 --> Final output sent to browser
DEBUG - 2020-01-10 12:58:28 --> Total execution time: 0.3200
INFO - 2020-01-10 12:58:38 --> Config Class Initialized
INFO - 2020-01-10 12:58:38 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:58:38 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:58:38 --> Utf8 Class Initialized
INFO - 2020-01-10 12:58:38 --> URI Class Initialized
INFO - 2020-01-10 12:58:38 --> Router Class Initialized
INFO - 2020-01-10 12:58:38 --> Output Class Initialized
INFO - 2020-01-10 12:58:38 --> Security Class Initialized
DEBUG - 2020-01-10 12:58:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:58:38 --> Input Class Initialized
INFO - 2020-01-10 12:58:38 --> Language Class Initialized
INFO - 2020-01-10 12:58:38 --> Loader Class Initialized
INFO - 2020-01-10 12:58:38 --> Helper loaded: html_helper
INFO - 2020-01-10 12:58:38 --> Helper loaded: url_helper
INFO - 2020-01-10 12:58:38 --> Helper loaded: form_helper
INFO - 2020-01-10 12:58:38 --> Database Driver Class Initialized
INFO - 2020-01-10 12:58:38 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:58:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:58:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:58:38 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:58:38 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:58:38 --> Controller Class Initialized
INFO - 2020-01-10 12:58:38 --> Model "Authors_model" initialized
INFO - 2020-01-10 12:58:38 --> Language file loaded: language/english/pagination_lang.php
INFO - 2020-01-10 12:58:38 --> Pagination Class Initialized
INFO - 2020-01-10 12:58:38 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/User/auditLogs.php
INFO - 2020-01-10 12:58:38 --> Final output sent to browser
DEBUG - 2020-01-10 12:58:38 --> Total execution time: 0.2350
INFO - 2020-01-10 12:59:09 --> Config Class Initialized
INFO - 2020-01-10 12:59:09 --> Hooks Class Initialized
DEBUG - 2020-01-10 12:59:09 --> UTF-8 Support Enabled
INFO - 2020-01-10 12:59:09 --> Utf8 Class Initialized
INFO - 2020-01-10 12:59:09 --> URI Class Initialized
INFO - 2020-01-10 12:59:09 --> Router Class Initialized
INFO - 2020-01-10 12:59:09 --> Output Class Initialized
INFO - 2020-01-10 12:59:09 --> Security Class Initialized
DEBUG - 2020-01-10 12:59:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-01-10 12:59:09 --> Input Class Initialized
INFO - 2020-01-10 12:59:09 --> Language Class Initialized
INFO - 2020-01-10 12:59:10 --> Loader Class Initialized
INFO - 2020-01-10 12:59:10 --> Helper loaded: html_helper
INFO - 2020-01-10 12:59:10 --> Helper loaded: url_helper
INFO - 2020-01-10 12:59:10 --> Helper loaded: form_helper
INFO - 2020-01-10 12:59:10 --> Database Driver Class Initialized
INFO - 2020-01-10 12:59:10 --> Form Validation Class Initialized
DEBUG - 2020-01-10 12:59:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2020-01-10 12:59:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2020-01-10 12:59:10 --> Encryption Class Initialized
DEBUG - 2020-01-10 12:59:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-01-10 12:59:10 --> Session: Class initialized using 'files' driver.
INFO - 2020-01-10 12:59:10 --> Controller Class Initialized
INFO - 2020-01-10 12:59:10 --> Helper loaded: cookie_helper
INFO - 2020-01-10 12:59:10 --> logout() called
DEBUG - 2020-01-10 12:59:10 --> loading model Active_Session
DEBUG - 2020-01-10 12:59:10 --> Session_id = j7o744qgslh4v86q06c2u742rstaj41i
DEBUG - 2020-01-10 12:59:10 --> email = DEV_OSS_USER
INFO - 2020-01-10 12:59:10 --> Model "Active_Session" initialized
DEBUG - 2020-01-10 12:59:10 --> calling remove_active_session()
DEBUG - 2020-01-10 12:59:10 --> remove_active_session() got called form Active_Session
DEBUG - 2020-01-10 12:59:10 --> loading view welcome controller ... 
INFO - 2020-01-10 12:59:10 --> File loaded: C:\xampp\htdocs\oneoss\application\views\public/Auth/login.php
INFO - 2020-01-10 12:59:10 --> Final output sent to browser
DEBUG - 2020-01-10 12:59:10 --> Total execution time: 0.3700
