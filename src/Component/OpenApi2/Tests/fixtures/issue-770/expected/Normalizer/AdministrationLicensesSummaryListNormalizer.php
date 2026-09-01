<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AdministrationLicensesSummaryListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesSummaryList::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesSummaryList::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesSummaryList();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('hasMore', $data) && \is_int($data['hasMore'])) {
            $data['hasMore'] = (bool) $data['hasMore'];
        }
        if (\array_key_exists('totalCount', $data)) {
            $object->totalCount = $data['totalCount'];
        }
        if (\array_key_exists('hasMore', $data)) {
            $object->hasMore = $data['hasMore'];
        }
        if (\array_key_exists('firstIndex', $data)) {
            $object->firstIndex = $data['firstIndex'];
        }
        if (\array_key_exists('list', $data)) {
            $values = [];
            foreach ($data['list'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesSummary::class, 'json', $context);
            }
            $object->list = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('totalCount', get_object_vars($data)) && null !== ($data->totalCount ?? null)) {
            $dataArray['totalCount'] = $data->totalCount ?? null;
        }
        if (array_key_exists('hasMore', get_object_vars($data)) && null !== ($data->hasMore ?? null)) {
            $dataArray['hasMore'] = $data->hasMore ?? null;
        }
        if (array_key_exists('firstIndex', get_object_vars($data)) && null !== ($data->firstIndex ?? null)) {
            $dataArray['firstIndex'] = $data->firstIndex ?? null;
        }
        if (array_key_exists('list', get_object_vars($data)) && null !== ($data->list ?? null)) {
            $values = [];
            foreach ($data->list ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['list'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesSummaryList::class => false];
    }
}