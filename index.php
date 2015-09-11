<?php

// NewRelic Application Monitoring
if (extension_loaded('newrelic')) {
  newrelic_set_appname("GN WP Update Server");
}

// Get started with wp-update-server
require __DIR__ . '/loader.php';
$server = new Wpup_UpdateServer();
$server->handleRequest();
