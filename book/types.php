<?php

include 'functions.php';

debug(is_bool(false));
debug(is_integer(4));
debug(is_float(4.4));
debug(is_string(""));
debug(is_object((object) ['property' => 'Here we go']));

$file = fopen("functions.php","r");
debug(is_resource($file));

debug(is_array(array()));
debug(is_null(null));