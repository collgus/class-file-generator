<?php 
namespace Collgus\GF;

use Collgus\GF\ClassGenerator;

interface Settings {
    public function getGeneratedClassPath(): string;
    public function getDefaultClassGenerator(): ClassGenerator;
}