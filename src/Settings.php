<?php 
namespace Collgus\GF;

use Collgus\GF\ClassGenerator\FileClassGenerator;
use Collgus\GF\Settings\Settings as CollgusSettings;

class Settings implements CollgusSettings {
    public function getGeneratedClassPath(): string {
        return collgus_fg_path(["generated-classes"]);
    }
    public function getClassGenerator(): ClassGenerator {
        return new FileClassGenerator();
    }
}