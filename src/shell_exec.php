<?php

$stdout = shell_exec('ls');
var_dump(compact('stdout'));
echo PHP_EOL;

// stderr doesn't cought
$stdout = shell_exec('cat /dev/nofile');
var_dump(compact('stdout'));
echo PHP_EOL;

// stderr will be cought
$stdout = shell_exec('cat /dev/nofile 2>&1');
var_dump(compact('stdout'));
echo PHP_EOL;
