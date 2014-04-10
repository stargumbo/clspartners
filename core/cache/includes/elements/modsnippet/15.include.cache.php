<?php
function elements_modsnippet_15($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
$id = $modx->getOption('id',$scriptProperties,1);
$context = $modx->getOption('context',$scriptProperties,'');
$args = $modx->getOption('args',$scriptProperties,'');
$scheme = $modx->getOption('scheme',$scriptProperties,'full');
 
return $modx->makeUrl($id,$context,$args,$scheme);
}
