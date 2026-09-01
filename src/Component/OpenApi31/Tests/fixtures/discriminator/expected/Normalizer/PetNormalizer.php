<?php

namespace Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Pet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Pet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Pet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('petType', $data) and 'cat' === $data['petType']) {
            return $this->denormalizer->denormalize($data, 'Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Cat', $format, $context);
        }
        if (array_key_exists('petType', $data) and 'dog' === $data['petType']) {
            return $this->denormalizer->denormalize($data, 'Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Dog', $format, $context);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('petType', $data)) {
            $object->petType = $data['petType'];
            unset($data['petType']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->petType ?? null) and 'cat' === ($data->petType ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->petType ?? null) and 'dog' === ($data->petType ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['name'] = $data->name ?? null;
        $dataArray['petType'] = $data->petType ?? null;
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Pet::class => false];
    }
}