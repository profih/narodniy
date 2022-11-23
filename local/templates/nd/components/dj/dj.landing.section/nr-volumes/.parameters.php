<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arTemplateParameters = array();
$arTemplateParameters['IMAGE_20VOL'] = array(
    "NAME" => 'Куб 20 литров',
    "TYPE" => "FILE",
    "FD_TARGET" => "F",
    "FD_EXT" => array('png', 'jpg', 'jpeg', 'gif'),
    "FD_UPLOAD" => true,
    "FD_USE_MEDIALIB" => true,
    "FD_MEDIALIB_TYPES" => Array('image')
);

$arTemplateParameters['IMAGE_30VOL'] = array(
    "NAME" => 'Куб 30 литров',
    "TYPE" => "FILE",
    "FD_TARGET" => "F",
    "FD_EXT" => array('png', 'jpg', 'jpeg', 'gif'),
    "FD_UPLOAD" => true,
    "FD_USE_MEDIALIB" => true,
    "FD_MEDIALIB_TYPES" => Array('image')
);