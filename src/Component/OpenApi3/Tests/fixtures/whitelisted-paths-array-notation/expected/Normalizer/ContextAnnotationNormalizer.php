<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\CheckArray;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContextAnnotationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ContextAnnotation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ContextAnnotation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ContextAnnotation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('domain', $data)) {
            $object->domain = $this->denormalizer->denormalize($data['domain'], \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ContextAnnotationDomainFields::class, 'json', $context);
            unset($data['domain']);
        }
        if (\array_key_exists('entity', $data)) {
            $object->entity = $this->denormalizer->denormalize($data['entity'], \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ContextAnnotationEntityFields::class, 'json', $context);
            unset($data['entity']);
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
        $normalized = $data->domain === null ? null : $this->normalizer->normalize($data->domain, 'json', $context);
        $dataArray['domain'] = \is_iterable($normalized) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized) : $normalized;
        $normalized_1 = $data->entity === null ? null : $this->normalizer->normalize($data->entity, 'json', $context);
        $dataArray['entity'] = \is_iterable($normalized_1) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_1) : $normalized_1;
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ContextAnnotation::class => false];
    }
}