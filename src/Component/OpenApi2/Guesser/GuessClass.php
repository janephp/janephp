<?php

namespace Jane\Component\OpenApi2\Guesser;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\Component\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\HeaderParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\PathParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\QueryParameterSubSchema;
use Jane\Component\OpenApiCommon\Guesser\GuessClass as BaseGuessClass;

class GuessClass extends BaseGuessClass
{
    public function resolveParameter(Reference $parameter)
    {
        $result = $parameter;

        return $parameter->resolve(function ($value) use ($result) {
            if (\array_key_exists('in', $value)) {
                $classToDenormalize = match ($value['in']) {
                    'body' => BodyParameter::class,
                    'header' => HeaderParameterSubSchema::class,
                    'formData' => FormDataParameterSubSchema::class,
                    'query' => QueryParameterSubSchema::class,
                    'path' => PathParameterSubSchema::class,
                };

                return $this->denormalizer->denormalize($value, $classToDenormalize, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            }

            return $value;
        });
    }
}
