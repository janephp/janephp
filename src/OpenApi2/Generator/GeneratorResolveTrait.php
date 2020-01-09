<?php

namespace Jane\OpenApi2\Generator;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Model\BodyParameter;
use Jane\OpenApi2\Model\FormDataParameterSubSchema;
use Jane\OpenApi2\Model\HeaderParameterSubSchema;
use Jane\OpenApi2\Model\PathParameterSubSchema;
use Jane\OpenApi2\Model\QueryParameterSubSchema;
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
        return $parameter->resolve(function ($value) {
            if (isset($value->{'in'}) and 'body' === $value->{'in'}) {
                return $this->denormalizer->denormalize($value, BodyParameter::class);
            }
            if (isset($value->{'in'}) and 'header' === $value->{'in'}) {
                return $this->denormalizer->denormalize($value, HeaderParameterSubSchema::class);
            }
            if (isset($value->{'in'}) and 'formData' === $value->{'in'}) {
                return $this->denormalizer->denormalize($value, FormDataParameterSubSchema::class);
            }
            if (isset($value->{'in'}) and 'query' === $value->{'in'}) {
                return $this->denormalizer->denormalize($value, QueryParameterSubSchema::class);
            }
            if (isset($value->{'in'}) and 'path' === $value->{'in'}) {
                return $this->denormalizer->denormalize($value, PathParameterSubSchema::class);
            }

            return $value;
        });
    }
}
