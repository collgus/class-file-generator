<?php
namespace Collgus\GF\ClassGenerator;

use Collgus\GF\ClassGenerator;
use Collgus\GF\Content;
use Throwable;

final class EvalClassGenerator implements ClassGenerator {
    public function generate(Content $content): void {
        try {
            eval($content->toString());
        } catch (Throwable $throwable) {
        }
    }
}