<?php

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi\JsonSchema\Model\Schema;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

trait GuesserResolverTrait
{
    /** @var DenormalizerInterface */
    protected $serializer;

    /**
     * Resolve a reference with a denormalizer.
     */
    public function resolve(Reference $reference, string $class): object
    {
        $result = $reference;

        while ($result instanceof Reference) {
            $result = $result->resolve(function ($data) use ($result, $class) {
                return $this->serializer->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            });
        }

        if ($result instanceof Reference || $result instanceof Schema) {
            $result->setTitle($reference->getTitle() ?? $result->getTitle());
            $result->setMultipleOf($reference->getMultipleOf() ?? $result->getMultipleOf());
            $result->setMaximum($reference->getMaximum() ?? $result->getMaximum());
            $result->setExclusiveMaximum($reference->getExclusiveMaximum() ?? $result->getExclusiveMaximum());
            $result->setMinimum($reference->getMinimum() ?? $result->getMinimum());
            $result->setExclusiveMinimum($reference->getExclusiveMinimum() ?? $result->getExclusiveMinimum());
            $result->setMaxLength($reference->getMaxLength() ?? $result->getMaxLength());
            $result->setMinLength($reference->getMinLength() ?? $result->getMinLength());
            $result->setPattern($reference->getPattern() ?? $result->getPattern());
            $result->setMaxItems($reference->getMaxItems() ?? $result->getMaxItems());
            $result->setMinItems($reference->getMinItems() ?? $result->getMinItems());
            $result->setUniqueItems($reference->getUniqueItems() ?? $result->getUniqueItems());
            $result->setType($reference->getType() ?? $result->getType());
            $result->setDescription($reference->getDescription() ?? $result->getDescription());
            $result->setFormat($reference->getFormat() ?? $result->getFormat());
            $result->setNullable($reference->getNullable() ?? $result->getNullable());
            $result->setReadOnly($reference->getReadOnly() ?? $result->getReadOnly());
            $result->setWriteOnly($reference->getWriteOnly() ?? $result->getWriteOnly());
            $result->setDeprecated($reference->getDeprecated() ?? $result->getDeprecated());
        }

        return $result;
    }
}
