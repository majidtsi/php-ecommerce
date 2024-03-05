<?php
    $querystring = $_SERVER['QUERY_STRING'] != '' ? '?'.$_SERVER['QUERY_STRING'] : '';
    header('location: public'.$querystring);
    exit;