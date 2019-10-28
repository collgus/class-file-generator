<?php

use Collgus\GF\Service\ClearService;
use Collgus\GF\Service\ExecutableService;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

if (!function_exists('collgus_fg_path')) {
    function collgus_fg_path(array $paths = null): string {
        $resultPath = __DIR__;
        if (is_array($paths)) {
            $resultPath = join(DIRECTORY_SEPARATOR, array_merge([$resultPath], $paths));
        }
        return $resultPath;
    }
}

if (!function_exists('collgus_exec')) {
    function collgus_exec(ExecutableService $execService): void {
        $execService->exec();
    }
}
if (!function_exists('collgus_clear')) {
    function collgus_clear(): void {
        collgus_exec(new ClearService(new Filesystem(), new Finder()));
    }
}