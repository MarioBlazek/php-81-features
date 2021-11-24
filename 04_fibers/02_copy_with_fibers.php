<?php

declare(strict_types=1);

writeToLog('Clearing destination folder...');

foreach (glob(__DIR__ . '/dest/file_*') as $fileName) {
    unlink($fileName);
}


function writeToLog(string $message): void {
    echo $message . "\n";
}
$files = [
    __DIR__ .'/src/file_A.txt' => __DIR__ . '/dest/file_A.txt',
    __DIR__ .'/src/file_B.txt' => __DIR__ . '/dest/file_B.txt',
    __DIR__ .'/src/file_C.txt' => __DIR__ . '/dest/file_C.txt',
    __DIR__ .'/src/file_D.txt' => __DIR__ . '/dest/file_D.txt',
];

$fiber = new Fiber(function(array $files): void {
    foreach($files as $source => $destination) {
        copy($source, $destination);
        Fiber::suspend([$source, $destination]);
    }
});

$copied = $fiber->start($files);
$copiedCount = 1;
$totalCount  = count($files);

while(!$fiber->isTerminated()) {
    $percentage = round($copiedCount / $totalCount, 2) * 100;
    writeToLog("[{$percentage}%]: Copied '{$copied[0]}' to '{$copied[1]}'");
    $copied = $fiber->resume();
    ++$copiedCount;
}

writeToLog('Completed');