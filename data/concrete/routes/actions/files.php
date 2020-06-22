<?php

defined('C5_EXECUTE') or die('Access Denied.');

/* @var Concrete\Core\Routing\Router $router */

/*
 * Base path: /ccm/system/file
 * Namespace: Concrete\Controller\Backend\
 */

$router->all('/approve_version', 'File::approveVersion');
$router->all('/delete_version', 'File::deleteVersion');
$router->all('/duplicate', 'File::duplicate');
$router->all('/get_json', 'File::getJSON');
$router->all('/rescan', 'File::rescan');
$router->all('/rescan_multiple', 'File::rescanMultiple');
$router->all('/star', 'File::star');
$router->all('/upload', 'File::upload');
$router->all('/download', 'File::download');
$router->all('/import_incoming', 'File::importIncoming');
$router->all('/import_remote', 'File::importRemote');
$router->all('/thumbnailer', 'File\Thumbnailer::generate');
$router->all('/fetch_incoming_files', 'File::fetchIncomingFiles');
$router->all('/fetch_directories', 'File::fetchDirectories');
$router->all('/create_directory', 'File::createDirectory');

$router->all('/chooser/recent', 'File\Chooser::getRecent');
