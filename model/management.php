<?php


interface Management extends mysql_db
{
  #mysql_db::something() for use mysql;
  function getby($search=null, $info=null, $specific=false);
  function save($database, $object);
  function search($info, $parameter);
  function edit($id, $object);
}



?>
