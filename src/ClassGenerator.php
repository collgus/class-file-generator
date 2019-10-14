<?php 
namespace Collgus\GF;

use Collgus\GF\Content;

interface ClassGenerator {
    public function generate(Content $content): void;
}