<?php

require './class/Ajax.php';
require './class/Box.php';


$ajax = new Ajax();
$action = $ajax->getInputVar('action');
switch($action){
  case 'get_box_text':
    $boxId = $ajax->getInputVar('box_id');
    $box = new Box();
    $response = $box->getBoxText($boxId) ;
    $ajax->setResponse($response) ;
    break;
}

