<?php
namespace Collgus\GF\ClassGenerator;

use Collgus\GF\Content;
use Collgus\GF\ClassWriter;
use Throwable;

final class EvalClassGenerator implements ClassWriter {
    public function generate(Content $content): void {
        try {
            eval($content->toString());
        } catch (Throwable $throwable) {
        }
    }
}