<?php 
namespace Collgus\GF\Generator;

use Collgus\GF\ClassGenerator;
use Collgus\GF\Content;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

final class FileClassGenerator implements ClassGenerator {
    public function generate(Settings $settings, Content $content): void {
        try {
            $filesystem = new Filesystem();
            echo $content->toString();
        }
        catch (IOExceptionInterface $exception) {
        }
    }
}