
<?php
namespace Collgus\GF\Settings;

use Collgus\GF\ClassGenerator;
use Collgus\GF\Settings as CollgusSettings;
use Collgus\GF\Generator\FileClassGenerator;

class Settings implements CollgusSettings {
    public function getGeneratedClassPath(): string {
        return collgus_fg_path(["generated-classes"]);
    }
    public function getClassGenerator(): ClassGenerator {
        return new FileClassGenerator();
    }
}