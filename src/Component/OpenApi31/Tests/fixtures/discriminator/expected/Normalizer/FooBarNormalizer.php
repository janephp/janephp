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
class FooBarNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\FooBar::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\FooBar::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\FooBar();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('what', $data)) {
            $value = $data['what'];
            if (is_array($data['what']) and (isset($data['what']['type']) and $data['what']['type'] == 'foo')) {
                $value = $this->denormalizer->denormalize($data['what'], \Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Foo::class, 'json', $context);
            } elseif (is_array($data['what']) and (isset($data['what']['type']) and $data['what']['type'] == 'bar')) {
                $value = $this->denormalizer->denormalize($data['what'], \Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Bar::class, 'json', $context);
            }
            $object->setWhat($value);
            unset($data['what']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('what') && null !== $data->getWhat()) {
            $value = $data->getWhat();
            if (is_object($data->getWhat())) {
                $value = $data->getWhat() === null ? null : new \Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\JsonObject($this->normalizer->normalize($data->getWhat(), 'json', $context));
            } elseif (is_object($data->getWhat())) {
                $value = $data->getWhat() === null ? null : new \Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\JsonObject($this->normalizer->normalize($data->getWhat(), 'json', $context));
            }
            $dataArray['what'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\FooBar::class => false];
    }
}