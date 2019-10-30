<?php 
namespace Collgus\GF\Generator;

use Collgus\GF\Content;
use Collgus\GF\Settings;
use Collgus\GF\Generator;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

final class FileGenerator implements Generator {
    public function generate(Settings $settings, Content $content): void {
        try {
            $filesystem = new Filesystem();
            echo $content->toString();
        }
        catch (IOExceptionInterface $exception) {
        }
    }
}