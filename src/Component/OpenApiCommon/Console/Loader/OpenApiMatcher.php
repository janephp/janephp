<?php

namespace Jane\Component\OpenApiCommon\Console\Loader;

use Jane\Component\OpenApi2\JaneOpenApi as OpenApi2Base;
use Jane\Component\OpenApi3\JaneOpenApi as OpenApi3Base;
use Jane\Component\OpenApiCommon\Exception\CouldNotParseException;
use Jane\Component\OpenApiCommon\Exception\OpenApiVersionSupportException;

class OpenApiMatcher
{
    private $schemaParsers = [];

    public function match(string $origin): string
    {
        [$openApiClass, $openApi2Message] = $this->isOpenApi2($origin);

        if (null === $openApiClass) {
            [$openApiClass, $openApi3Message] = $this->isOpenApi3($origin);
        }

        if (null === $openApiClass) {
            if (null !== $openApi2Message || null !== $openApi3Message) {
                throw new CouldNotParseException(\sprintf("Could not parse schema in OpenApi v2 nor v3 format:\n- OpenApi v2 error: \"%s\"\n- OpenApi v3: \"%s\"\n", (string) $openApi2Message, (string) $openApi3Message));
            } else {
                throw new OpenApiVersionSupportException('Only OpenApi v2 / v3 specifications are supported, use an external tool to convert your api files.');
            }
        }

        return $openApiClass;
    }

    private function isOpenApi2(string $origin): array
    {
        $class = null;
        $message = null;

        if (class_exists(OpenApi2Base::class)) {
            if (!\array_key_exists(OpenApi2Base::class, $this->schemaParsers)) {
                $openApi2Serializer = OpenApi2Base::buildSerializer();
                $this->schemaParsers[OpenApi2Base::class] = new \Jane\Component\OpenApi2\SchemaParser\SchemaParser($openApi2Serializer);
            }

            try {
                $this->schemaParsers[OpenApi2Base::class]->parseSchema($origin);
                $class = OpenApi2Base::class;
            } catch (CouldNotParseException $e) {
                $message = $e->getMessage();
            } catch (OpenApiVersionSupportException $e) {
                // We don't need this exception, we will trigger another one if needed ~
            }
        }

        return [$class, $message];
    }

    private function isOpenApi3(string $origin): array
    {
        $class = null;
        $message = null;

        if (class_exists(OpenApi3Base::class)) {
            if (!\array_key_exists(OpenApi3Base::class, $this->schemaParsers)) {
                $openApi3Serializer = OpenApi3Base::buildSerializer();
                $this->schemaParsers[OpenApi3Base::class] = new \Jane\Component\OpenApi3\SchemaParser\SchemaParser($openApi3Serializer);
            }

            try {
                $this->schemaParsers[OpenApi3Base::class]->parseSchema($origin);
                $class = OpenApi3Base::class;
            } catch (CouldNotParseException $e) {
                $message = $e->getMessage();
            } catch (OpenApiVersionSupportException $e) {
                // We don't need this exception, we will trigger another one if needed ~
            }
        }

        return [$class, $message];
    }
}
