<?php

use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Filesystem\Filesystem;

class HelperFunctionTest extends TestCase {
    /** 
     * @var Finder
     */
    private $finder;
    private $filesystem;

    protected function setUp(): void {
        $this->finder = new Finder();
        $this->filesystem = new Filesystem();
    }
    public function testCollgusClear() {
        collgus_clear();
        $fileNameTest = "filetest.txt";
        $this->filesystem->touch(collgus_fg_path(['generated-classes', $fileNameTest]));
        $this->finder->files()->in(collgus_fg_path(['generated-classes']));
        $this->assertEquals(1, $this->finder->count());
        collgus_clear();
        $this->assertEquals(0, $this->finder->count());
    }
}