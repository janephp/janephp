<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\Transformer\CallbackTransformer;
use PHPUnit\Framework\TestCase;

class CallbackTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testCallbackTransform()
    {
        $transformer = new CallbackTransformer('test');
        $function = $this->createTransformerFunction($transformer);
        $class = new class() {
            public $callbacks;

            public function __construct()
            {
                $this->callbacks['test'] = function ($input) {
                    return 'output';
                };
            }
        };

        $transform = \Closure::bind($function, $class);

        $output = $transform('input');

        self::assertEquals('output', $output);
    }
}
