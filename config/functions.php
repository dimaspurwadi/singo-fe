<?php

function clean($v, $r = '')
{
	$v = str_replace(array("'","''"),array("`","``"),strip_tags(trim($v)));
	return ($v == '') ? $r : $v;
}

function ex_empty($v, $m = '')
{
	if ($v == '')
	{
		throw new Exception($m);
	}
}

function ex_error($v, $m = '')
{
	if ($v != '1')
	{
		throw new Exception($m);
	}
}
?>