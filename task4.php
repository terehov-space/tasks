<?php

$jsonString = '{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008 ,2009,2010]}';

$array = json_decode($jsonString, true);

print_r($array);