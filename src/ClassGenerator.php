<?php 
namespace Collgus\GF;

use Collgus\GF\Content;
use Collgus\GF\Settings\Settings;

interface ClassGenerator {
    public function generate(Settings $settings, Content $content): void;
}