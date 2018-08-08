<?php

function ola()
{
  $param = func_get_args();

  return $param;
}

var_dump(ola("Bom dia"));
