<?php

use Collgus\GF\Service\ClearService;
use Collgus\GF\Service\ExecutableService;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

if (!function_exists('collgus_fg_path')) {
    function collgus_fg_path(): string {
        return __DIR__;
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