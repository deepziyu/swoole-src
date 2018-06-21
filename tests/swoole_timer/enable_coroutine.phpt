--TEST--
enable_coroutine: enable_coroutine setting
--SKIPIF--
<?php require __DIR__ . '/../include/skipif.inc'; ?>
--FILE--
<?php
require_once __DIR__ . '/../include/bootstrap.php';
swoole_async_set([
    'enable_coroutine' => false
]);
swoole_timer_after(1, function () {
    $uid = Co::getuid();
    echo "#{$uid}\n";
});
?>
--EXPECT--
#-1