<?php

namespace Jane\OpenApi2\Generator;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\HeaderParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\PathParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\QueryParameterSubSchema;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

trait GeneratorResolveTrait
{
    /** @var DenormalizerInterface */
    protected $denormalizer;

    protected function resolve(Reference $reference, string $class): array
    {
        $result = $reference;

        do {
            $refString = (string) $reference->getMergedUri();
            $result = $result->resolve(function ($data) use ($result, $class) {
                return $this->denormalizer->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            });
        } while ($result instanceof Reference);

        return [$refString, $result];
    }

    protected function resolveParameter(Reference $parameter)
    {
        $result = $parameter;

        return $parameter->resolve(function ($value) use ($result) {
            if (\array_key_exists('in', $value)) {
                switch ($value['in']) {
                    case 'body':
                        return $this->denormalizer->denormalize($value, BodyParameter::class, 'json', [
                            'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                        ]);
                    case 'header':
                        return $this->denormalizer->denormalize($value, HeaderParameterSubSchema::class, 'json', [
                            'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                        ]);
                    case 'formData':
                        return $this->denormalizer->denormalize($value, FormDataParameterSubSchema::class, 'json', [
                            'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                        ]);
                    case 'query':
                        return $this->denormalizer->denormalize($value, QueryParameterSubSchema::class, 'json', [
                            'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                        ]);
                    case 'path':
                        return $this->denormalizer->denormalize($value, PathParameterSubSchema::class, 'json', [
                            'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                        ]);
                }
            }

            return $value;
        });
    }
}
