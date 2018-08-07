<?php

$pessoas = '[{"nome":"JR","idade":31},{"nome":"FF","idade":12}]';

$data = json_decode($pessoas, true);

var_dump($data);
