<?php

namespace Jane\Component\OpenApiCommon\Console\Loader;

use Jane\Component\OpenApi2\JaneOpenApi as OpenApi2Base;
use Jane\Component\OpenApi3\JaneOpenApi as OpenApi3Base;
use Jane\Component\OpenApi31\JaneOpenApi as OpenApi31Base;
use Jane\Component\OpenApiCommon\Exception\CouldNotParseException;
use Jane\Component\OpenApiCommon\Exception\OpenApiVersionSupportException;
use Jane\Component\OpenApiCommon\SchemaParser\SchemaParser;

class OpenApiMatcher
{
    /** @var array<class-string, SchemaParser> */
    private array $schemaParsers = [];

    public function match(string $origin): string
    {
        $openApi3Message = null;
        $openApi31Message = null;
        [$openApiClass, $openApi2Message] = $this->isOpenApi2($origin);

        if (null === $openApiClass) {
            [$openApiClass, $openApi31Message] = $this->isOpenApi31($origin);
        }

        if (null === $openApiClass) {
            [$openApiClass, $openApi3Message] = $this->isOpenApi3($origin);
        }

        if (null === $openApiClass) {
            if (null !== $openApi2Message || null !== $openApi3Message || null !== $openApi31Message) {
                throw new CouldNotParseException(\sprintf("Could not parse schema in OpenApi v2, v3 nor v3.1 format:\n- OpenApi v2 error: \"%s\"\n- OpenApi v3 error: \"%s\"\n- OpenApi v3.1 error: \"%s\"\n", $openApi2Message, $openApi3Message, $openApi31Message));
            } else {
                throw new OpenApiVersionSupportException('Only OpenApi v2 / v3 / v3.1 specifications are supported, use an external tool to convert your api files.');
            }
        }

        return $openApiClass;
    }

    /**
     * @return array{0: class-string|null, 1: string|null}
     */
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

    /**
     * @return array{0: class-string|null, 1: string|null}
     */
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

    /**
     * @return array{0: class-string|null, 1: string|null}
     */
    private function isOpenApi31(string $origin): array
    {
        $class = null;
        $message = null;

        if (class_exists(OpenApi31Base::class)) {
            if (!\array_key_exists(OpenApi31Base::class, $this->schemaParsers)) {
                $openApi31Serializer = OpenApi31Base::buildSerializer();
                $this->schemaParsers[OpenApi31Base::class] = new \Jane\Component\OpenApi31\SchemaParser\SchemaParser($openApi31Serializer);
            }

            try {
                $this->schemaParsers[OpenApi31Base::class]->parseSchema($origin);
                $class = OpenApi31Base::class;
            } catch (CouldNotParseException $e) {
                $message = $e->getMessage();
            } catch (OpenApiVersionSupportException $e) {
                // We don't need this exception, we will trigger another one if needed ~
            }
        }

        return [$class, $message];
    }
}
