<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BazNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Model\Baz::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Model\Baz::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Model\Baz();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('label', $data)) {
            $object->label = $data['label'];
            unset($data['label']);
        }
        if (\array_key_exists('sub', $data)) {
            $object->sub = $this->denormalizer->denormalize($data['sub'], \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Model\SubBaz::class, 'json', $context);
            unset($data['sub']);
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
        if (array_key_exists('label', get_object_vars($data)) && null !== ($data->label ?? null)) {
            $dataArray['label'] = $data->label ?? null;
        }
        if (array_key_exists('sub', get_object_vars($data)) && null !== ($data->sub ?? null)) {
            $dataArray['sub'] = ($data->sub ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Runtime\JsonObject($this->normalizer->normalize($data->sub ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Model\Baz::class => false];
    }
}