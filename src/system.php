<?php

ob_start();
$last = system('ls', $ret);
$stdout = ob_get_clean();
var_dump(compact('last', 'stdout', 'ret'));
echo PHP_EOL;

// stderr doesn't cought
ob_start();
$last = system('cat /dev/nofile', $ret);
$stdout = ob_get_clean();
var_dump(compact('last', 'stdout', 'ret'));
echo PHP_EOL;

// stderr will be cought
ob_start();
$last = system('cat /dev/nofile 2>&1', $ret);
$stdout = ob_get_clean();
var_dump(compact('last', 'stdout', 'ret'));
echo PHP_EOL;
