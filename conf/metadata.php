<?php
/**
 * Options for the zotero plugin
 *
 * @author Rik Blok <rik.blok@ubc.ca>
 */

ini_set('display_errors',1); 
error_reporting(E_ALL);
 

$meta['username'] = array('string');
$meta['key'] = array('string');
$meta['userid'] = array('string');
$meta['autoupdate'] = array('onoff');
$meta['cachePage'] = array('string');
$meta['authorFormat'] = array('string');
$meta['parentheses'] = array('string');
$meta['pagePrefix'] = array('string');
$meta['titleFormat'] = array('string');
