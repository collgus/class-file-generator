<?php
namespace Collgus\GF\Generator;

use Collgus\GF\ClassGenerator;
use Collgus\GF\Content;
use Throwable;

final class EvalGenerator implements ClassGenerator {
    public function generate(Settings $settings, Content $content): void {
        try {
            eval($content->toString());
        } catch (Throwable $throwable) {
        }
    }
}