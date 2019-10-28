<?php 
namespace Collgus\GF\Service;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Filesystem\Filesystem;

class ClearService implements ExecutableService {
    /** 
     * @var Filesystem $filestystem
     */
    private $filesystem;
    /** 
     * @var Finder $finder
     */
    private $finder;

    public function  __construct(Filesystem $filesystem, Finder $finder) {
        $this->filesystem = $filesystem;
        $this->finder = $finder;
    }
    public function exec(): void {
        $files = $this->finder->files()->in(collgus_fg_path(["generated-classes"]));
        /** 
         * @var SplFileInfo $file
         */
        if ($files->hasResults()) {
            foreach ($files as $file) {
                $this->filesystem->remove(collgus_fg_path(["generated-classes", $file->getFilename()]));
            }
        }
    }
}