<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arTemplateParameters = array();
$arTemplateParameters['IMAGE_DIST'] = array(
    "NAME" => 'Народный без узла',
    "TYPE" => "FILE",
    "FD_TARGET" => "F",
    "FD_EXT" => array('png', 'jpg', 'jpeg', 'gif'),
    "FD_UPLOAD" => true,
    "FD_USE_MEDIALIB" => true,
    "FD_MEDIALIB_TYPES" => Array('image')
);
$arTemplateParameters['IMAGE_DIST_KNOT'] = array(
    "NAME" => 'Народный с узлом',
    "TYPE" => "FILE",
    "FD_TARGET" => "F",
    "FD_EXT" => array('png', 'jpg', 'jpeg', 'gif'),
    "FD_UPLOAD" => true,
    "FD_USE_MEDIALIB" => true,
    "FD_MEDIALIB_TYPES" => Array('image')
);
