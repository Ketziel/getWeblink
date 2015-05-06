<?php
$resource = $modx->getObject('modResource', $modx->getOption('resource', $scriptProperties, ""));
$output =  '<a href="'.$resource->get('content').'"'.$resource->get('link_attributes').'>'.$resource->get('pagetitle').'</a>';
return $output;