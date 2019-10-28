<?php 
namespace Collgus\GF\Settings;

use Collgus\GF\ClassGenerator;

interface Settings {
    public function getGeneratedClassPath(): string;
    public function getClassGenerator(): ClassGenerator;
}