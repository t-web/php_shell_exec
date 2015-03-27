<?php

$stdout_lines = array();
$last = exec('ls', $stdout_lines, $ret);
var_dump(compact('last', 'stdout_lines', 'ret'));
echo PHP_EOL;

// stderr doesn't cought
$stdout_lines = array();
$last = exec('cat /dev/nofile', $stdout_lines, $ret);
var_dump(compact('last', 'stdout_lines', 'ret'));
echo PHP_EOL;

// stderr will be cought
$stdout_lines = array();
$last = exec('cat /dev/nofile 2>&1', $stdout_lines, $ret);
var_dump(compact('last', 'stdout_lines', 'ret'));
echo PHP_EOL;
