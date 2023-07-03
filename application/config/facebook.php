<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
|  Facebook API Configuration
| -------------------------------------------------------------------
|
| To get an facebook web //devloped by Pakainfo.comapp details We have for make a Facebook app
| at Facebook developers panel (https://developers.facebook.com)
|	//devloped by Pakainfo.com
|  Config facebook_app_id               Datatype : string   put your Facebook web-application ID.
|  Config facebook_app_secret           Datatype : string   put your Facebook web-application Secret.
|  Config facebook_login_type           Datatype : string   Set user Login type. (web, js, canvas)
|  Config facebook_login_redirect_url   Datatype : string   URL for redirect back for after user Login. (do not include base URL)
|  Config facebook_logout_redirect_url  Datatype : string   URL for redirect back for after logout. (do not include base URL)
|  Config facebook_permissions          Datatype : array    put your required permissions.
|  Config facebook_graph_version        Datatype : string   Specify Facebook Graph version. Eg v2.6
|  Config facebook_auth_on_load         Datatype : boolean  Set for TRUE for check for valid access token on every page load.
*/
$config['facebook_app_id']              = '889885245690689';
$config['facebook_app_secret']          = '6c3ef71f7348e129386c73d576b76fe3';
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'fb_controller/login';
$config['facebook_logout_redirect_url'] = 'fb_controller/logout';
$config['facebook_permissions']         = array('email');
$config['facebook_graph_version']       = 'v2.6';
$config['facebook_auth_on_load']        = TRUE;
