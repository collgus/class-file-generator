<?php
namespace Collgus\GF\Settings;

use Collgus\GF\Generator;
use Collgus\GF\Generator\FileGenerator;
use Collgus\GF\Settings as CollgusSettings;

class Settings implements CollgusSettings {
    public function getGeneratedClassPath(): string {
        return collgus_fg_path(["generated-classes"]);
    }
    public function getDefaultClassGenerator(): Generator {
        return new FileGenerator();
    }
}