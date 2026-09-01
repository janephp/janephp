<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Account::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Account::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Account();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('firstname', $data)) {
            $object->firstname = $data['firstname'];
            unset($data['firstname']);
        }
        if (\array_key_exists('lastname', $data)) {
            $object->lastname = $data['lastname'];
            unset($data['lastname']);
        }
        if (\array_key_exists('countryOfBirth', $data) && $data['countryOfBirth'] !== null) {
            $value = $data['countryOfBirth'];
            if (is_array($data['countryOfBirth'])) {
                $value = $this->denormalizer->denormalize($data['countryOfBirth'], \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Country::class, 'json', $context);
            }
            $object->countryOfBirth = $value;
            unset($data['countryOfBirth']);
        }
        elseif (\array_key_exists('countryOfBirth', $data) && $data['countryOfBirth'] === null) {
            $object->countryOfBirth = null;
            unset($data['countryOfBirth']);
        }
        if (\array_key_exists('country', $data)) {
            $object->country = $this->denormalizer->denormalize($data['country'], \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Country::class, 'json', $context);
            unset($data['country']);
        }
        if (\array_key_exists('nationality', $data) && $data['nationality'] !== null) {
            $value_1 = $data['nationality'];
            if (is_array($data['nationality'])) {
                $value_1 = $this->denormalizer->denormalize($data['nationality'], \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Country::class, 'json', $context);
            } elseif (is_array($data['nationality']) && $this->isOnlyNumericKeys($data['nationality'])) {
                $values = [];
                foreach ($data['nationality'] as $value_2) {
                    $values[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Country::class, 'json', $context);
                }
                $value_1 = $values;
            }
            $object->nationality = $value_1;
            unset($data['nationality']);
        }
        elseif (\array_key_exists('nationality', $data) && $data['nationality'] === null) {
            $object->nationality = null;
            unset($data['nationality']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('firstname', get_object_vars($data)) && null !== ($data->firstname ?? null)) {
            $dataArray['firstname'] = $data->firstname ?? null;
        }
        if (array_key_exists('lastname', get_object_vars($data)) && null !== ($data->lastname ?? null)) {
            $dataArray['lastname'] = $data->lastname ?? null;
        }
        if (array_key_exists('countryOfBirth', get_object_vars($data)) && null !== ($data->countryOfBirth ?? null)) {
            $value = $data->countryOfBirth ?? null;
            if (is_object($data->countryOfBirth ?? null)) {
                $value = ($data->countryOfBirth ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\JsonObject($this->normalizer->normalize($data->countryOfBirth ?? null, 'json', $context));
            }
            $dataArray['countryOfBirth'] = $value;
        }
        if (array_key_exists('country', get_object_vars($data)) && null !== ($data->country ?? null)) {
            $dataArray['country'] = ($data->country ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\JsonObject($this->normalizer->normalize($data->country ?? null, 'json', $context));
        }
        if (array_key_exists('nationality', get_object_vars($data)) && null !== ($data->nationality ?? null)) {
            $value_1 = $data->nationality ?? null;
            if (is_object($data->nationality ?? null)) {
                $value_1 = ($data->nationality ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\JsonObject($this->normalizer->normalize($data->nationality ?? null, 'json', $context));
            } elseif (is_array($data->nationality ?? null)) {
                $values = [];
                foreach ($data->nationality ?? null as $value_2) {
                    $values[] = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
                }
                $value_1 = $values;
            }
            $dataArray['nationality'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model\Account::class => false];
    }
}