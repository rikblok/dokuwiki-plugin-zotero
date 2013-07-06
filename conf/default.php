<?php
/**
 * Default settings for the zotero plugin
 *
 * @author Rik Blok <rik.blok@ubc.ca>
 */

ini_set('display_errors',1); 
error_reporting(E_ALL);
 

$conf['username'] = 'YOURUSERNAME'; 
$conf['key'] = 'YOURZOTEROKEY';
$conf['userid'] = 'YOURUSERID';
$conf['autoupdate'] = 1;
$conf['cachePage'] = 'zotero:sources';
$conf['authorFormat'] = 'LASTNAME, FIRSTNAME';
$conf['parentheses'] = '[,]';
$conf['pagePrefix'] = 'p.';
$conf['titleFormat'] = 'AUTHOR: TITLE (DATE)';
