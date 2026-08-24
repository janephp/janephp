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
class AccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\Account::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\Account::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\Account();
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
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('firstname', $data)) {
            $object->setFirstname($data['firstname']);
            unset($data['firstname']);
        }
        if (\array_key_exists('lastname', $data)) {
            $object->setLastname($data['lastname']);
            unset($data['lastname']);
        }
        if (\array_key_exists('countryOfBirth', $data) && $data['countryOfBirth'] !== null) {
            $value = $data['countryOfBirth'];
            if (is_array($data['countryOfBirth'])) {
                $value = $this->denormalizer->denormalize($data['countryOfBirth'], \Jane\Component\OpenApi3\Tests\Expected\Model\Country::class, 'json', $context);
            }
            $object->setCountryOfBirth($value);
            unset($data['countryOfBirth']);
        }
        elseif (\array_key_exists('countryOfBirth', $data) && $data['countryOfBirth'] === null) {
            $object->setCountryOfBirth(null);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($this->denormalizer->denormalize($data['country'], \Jane\Component\OpenApi3\Tests\Expected\Model\Country::class, 'json', $context));
            unset($data['country']);
        }
        if (\array_key_exists('nationality', $data) && $data['nationality'] !== null) {
            $value_1 = $data['nationality'];
            if (is_array($data['nationality'])) {
                $value_1 = $this->denormalizer->denormalize($data['nationality'], \Jane\Component\OpenApi3\Tests\Expected\Model\Country::class, 'json', $context);
            } elseif (is_array($data['nationality']) && $this->isOnlyNumericKeys($data['nationality'])) {
                $values = [];
                foreach ($data['nationality'] as $value_2) {
                    $values[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\Country::class, 'json', $context);
                }
                $value_1 = $values;
            }
            $object->setNationality($value_1);
            unset($data['nationality']);
        }
        elseif (\array_key_exists('nationality', $data) && $data['nationality'] === null) {
            $object->setNationality(null);
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
        if ($data->isInitialized('firstname') && null !== $data->getFirstname()) {
            $dataArray['firstname'] = $data->getFirstname();
        }
        if ($data->isInitialized('lastname') && null !== $data->getLastname()) {
            $dataArray['lastname'] = $data->getLastname();
        }
        if ($data->isInitialized('countryOfBirth') && null !== $data->getCountryOfBirth()) {
            $value = $data->getCountryOfBirth();
            if (is_object($data->getCountryOfBirth())) {
                $value = $data->getCountryOfBirth() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getCountryOfBirth(), 'json', $context));
            }
            $dataArray['countryOfBirth'] = $value;
        }
        if ($data->isInitialized('country') && null !== $data->getCountry()) {
            $dataArray['country'] = $data->getCountry() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getCountry(), 'json', $context));
        }
        if ($data->isInitialized('nationality') && null !== $data->getNationality()) {
            $value_1 = $data->getNationality();
            if (is_object($data->getNationality())) {
                $value_1 = $data->getNationality() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getNationality(), 'json', $context));
            } elseif (is_array($data->getNationality())) {
                $values = [];
                foreach ($data->getNationality() as $value_2) {
                    $values[] = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
                }
                $value_1 = $values;
            }
            $dataArray['nationality'] = $value_1;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\Account::class => false];
    }
}