<?php
namespace model;
interface Management
{
  
  function getby($search=null, $info=null, $specific=false);
  function save();
  function search($info, $parameter);
  function edit($id, $object);
}



