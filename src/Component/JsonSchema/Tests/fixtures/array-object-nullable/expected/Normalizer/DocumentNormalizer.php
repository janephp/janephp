<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\Document::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Document;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Document();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attributes', $data) && $data['attributes'] !== null) {
            $value = $data['attributes'];
            if (is_array($data['attributes']) && $this->isOnlyNumericKeys($data['attributes'])) {
                $values = [];
                foreach ($data['attributes'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, \Jane\Component\JsonSchema\Tests\Expected\Model\Attributes::class, 'json', $context);
                }
                $value = $values;
            } elseif (is_null($data['attributes'])) {
                $value = $data['attributes'];
            }
            $object->setAttributes($value);
        }
        elseif (\array_key_exists('attributes', $data) && $data['attributes'] === null) {
            $object->setAttributes(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('attributes') && null !== $data->getAttributes()) {
            $value = $data->getAttributes();
            if (is_array($data->getAttributes())) {
                $values = [];
                foreach ($data->getAttributes() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (is_null($data->getAttributes())) {
                $value = $data->getAttributes();
            }
            $dataArray['attributes'] = $value;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\Document::class => false];
    }
}