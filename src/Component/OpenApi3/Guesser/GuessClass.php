<?php

namespace Jane\Component\OpenApi3\Guesser;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\JsonSchema\Model\Parameter;
use Jane\Component\OpenApiCommon\Guesser\GuessClass as BaseGuessClass;

class GuessClass extends BaseGuessClass
{
    public function resolveParameter(Reference $parameter)
    {
        $result = $parameter;

        return $parameter->resolve(function ($value) use ($result) {
            return $this->denormalizer->denormalize($value, Parameter::class, 'json', [
                'document-origin' => (string) $result->getMergedUri()->withFragment(''),
            ]);
        });
    }
}
