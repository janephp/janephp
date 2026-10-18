<?php

namespace Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UserCollectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Model\UserCollection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Model\UserCollection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Model\UserCollection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('value', $data)) {
            $values = [];
            foreach ($data['value'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Model\User::class, 'json', $context);
            }
            $object->value = $values;
            unset($data['value']);
        }
        if (\array_key_exists('@odata.nextLink', $data) && $data['@odata.nextLink'] !== null) {
            $value_1 = $data['@odata.nextLink'];
            if (is_string($data['@odata.nextLink'])) {
                $value_1 = $data['@odata.nextLink'];
            } elseif (is_null($data['@odata.nextLink'])) {
                $value_1 = $data['@odata.nextLink'];
            }
            $object->odataNextLink = $value_1;
            unset($data['@odata.nextLink']);
        }
        elseif (\array_key_exists('@odata.nextLink', $data)) {
            $object->odataNextLink = null;
            unset($data['@odata.nextLink']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('value', get_object_vars($data)) && null !== ($data->value ?? null)) {
            $values = [];
            foreach ($data->value as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['value'] = $values;
        }
        if (array_key_exists('odataNextLink', get_object_vars($data)) && null !== ($data->odataNextLink ?? null)) {
            $value_1 = $data->odataNextLink;
            if (is_string($data->odataNextLink)) {
                $value_1 = $data->odataNextLink;
            } elseif (is_null($data->odataNextLink)) {
                $value_1 = $data->odataNextLink;
            }
            $dataArray['@odata.nextLink'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Model\UserCollection::class => false];
    }
}