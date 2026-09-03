<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PaginatedResourceMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PaginatedResourceMeta::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PaginatedResourceMeta::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PaginatedResourceMeta();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator\PaginatedResourceMetaConstraint());
        }
        if (\array_key_exists('limit', $data)) {
            $object->limit = $data['limit'];
            unset($data['limit']);
        }
        if (\array_key_exists('offset', $data)) {
            $object->offset = $data['offset'];
            unset($data['offset']);
        }
        if (\array_key_exists('total', $data)) {
            $object->total = $data['total'];
            unset($data['total']);
        }
        if (\array_key_exists('next', $data) && $data['next'] !== null) {
            $value = $data['next'];
            if (is_string($data['next'])) {
                $value = $data['next'];
            } elseif (is_null($data['next'])) {
                $value = $data['next'];
            }
            $object->next = $value;
            unset($data['next']);
        }
        elseif (\array_key_exists('next', $data) && $data['next'] === null) {
            $object->next = null;
            unset($data['next']);
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
        if (array_key_exists('limit', get_object_vars($data)) && null !== ($data->limit ?? null)) {
            $dataArray['limit'] = $data->limit ?? null;
        }
        if (array_key_exists('offset', get_object_vars($data)) && null !== ($data->offset ?? null)) {
            $dataArray['offset'] = $data->offset ?? null;
        }
        if (array_key_exists('total', get_object_vars($data)) && null !== ($data->total ?? null)) {
            $dataArray['total'] = $data->total ?? null;
        }
        if (array_key_exists('next', get_object_vars($data)) && null !== ($data->next ?? null)) {
            $value = $data->next ?? null;
            if (is_string($data->next ?? null)) {
                $value = $data->next ?? null;
            } elseif (is_null($data->next ?? null)) {
                $value = $data->next ?? null;
            }
            $dataArray['next'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator\PaginatedResourceMetaConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PaginatedResourceMeta::class => false];
    }
}