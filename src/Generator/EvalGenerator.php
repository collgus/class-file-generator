<?php
namespace Collgus\GF\Generator;

use Throwable;
use Collgus\GF\Content;
use Collgus\GF\Settings;
use Collgus\GF\Generator;

final class EvalGenerator implements Generator {
    public function generate(Settings $settings, Content $content): void {
        try {
            eval($content->toString());
        } catch (Throwable $throwable) {
        }
    }
}