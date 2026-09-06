<?php

namespace Jane\Component\OpenApiCommon\Tests\Generator\Runtime\data\Client;

use PHPUnit\Framework\TestCase;

// The real, namespace-less runtime template is exercised directly: it is the
// exact file copied into generated clients.
if (!class_exists('FormEncoder', false)) {
    require_once __DIR__ . '/../../../../../Generator/Runtime/Client/FormEncoder.php';
}

final class FormEncoderTest extends TestCase
{
    public function testDecodesAQueryStringIntoAnArray(): void
    {
        self::assertSame(['a' => '1', 'b' => ['x', 'y']], (new \FormEncoder())->decode('a=1&b[]=x&b[]=y', 'form'));
    }

    public function testDecodesAnEmptyStringIntoAnEmptyArray(): void
    {
        self::assertSame([], (new \FormEncoder())->decode('', 'form'));
    }

    public function testEncodesAnArrayIntoAQueryString(): void
    {
        self::assertSame('a=1&b%5B0%5D=x', (new \FormEncoder())->encode(['a' => 1, 'b' => ['x']], 'form'));
    }
}
