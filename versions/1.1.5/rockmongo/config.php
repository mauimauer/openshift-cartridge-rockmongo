<?php
/**
 * RockMongo configuration
 *
 * Defining default options and server configuration
 * @package rockmongo
 */
 
$MONGO = array();
$MONGO["features"]["log_query"] = "off";//log queries
$MONGO["features"]["theme"] = "default";//theme
$MONGO["features"]["plugins"] = "on";//plugins

$i = 0;

/**
* Configuration of MongoDB servers
* 
* @see more details at http://code.google.com/p/rock-php/wiki/configuration
*/
$MONGO["servers"][$i]["mongo_name"] = "Localhost";//mongo server name
$MONGO["servers"][$i]["mongo_host"] = getenv('OPENSHIFT_MONGODB_DB_HOST'); //mongo host
$MONGO["servers"][$i]["mongo_port"] = getenv('OPENSHIFT_MONGODB_DB_PORT'); //mongo port
$MONGO["servers"][$i]["mongo_timeout"] = 30;//mongo connection timeout
$MONGO["servers"][$i]["mongo_auth"] = true;//enable mongo authentication?

$MONGO["servers"][$i]["control_auth"] = false;//enable control users, works only if mongo_auth=false
$MONGO["servers"][$i]["control_users"]["admin"] = "admin";//one of control users [USERNAME]=PASSWORD, works only if mongo_auth=false

$MONGO["servers"][$i]["ui_only_dbs"] = "";//databases to display
$MONGO["servers"][$i]["ui_hide_dbs"] = "";//databases to hide
$MONGO["servers"][$i]["ui_hide_collections"] = "";//collections to hide
$MONGO["servers"][$i]["ui_hide_system_collections"] = false;//if hide the system collections
$i ++;

?>
