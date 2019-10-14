<?php 
namespace Collgus\GF\ClassGenerator;

use Collgus\GF\ClassGenerator;
use Collgus\GF\Content;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

final class FileClassGenerator implements ClassGenerator {
    public function generate(Content $content): void {
        try {
            $filesystem = new Filesystem();
        }
        catch (IOExceptionInterface $exception) {
        }
    }
}