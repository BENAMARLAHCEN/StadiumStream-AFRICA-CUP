<?php

use Carbon\Carbon;


$carbon = new Carbon('-2 years');

printf('%s',$carbon->diffForHumans());

