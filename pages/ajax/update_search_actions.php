<?php

include "../../include/db.php";

include "../../include/authenticate.php";

$order_by=getvalescaped("order_by",'');
$sort=getvalescaped("sort","DESC");
$search=getvalescaped("search","");
$restypes=getvalescaped('restypes','');
$archive=getvalescaped('archive','');
$daylimit=getvalescaped('daylimit','');
$offset=getvalescaped('offset','');
$collection=getvalescaped('collection','');
$resources_count=getvalescaped('resources_count','');

$collection_data=get_collection($collection);

render_actions($collection_data,true,false,$collection);