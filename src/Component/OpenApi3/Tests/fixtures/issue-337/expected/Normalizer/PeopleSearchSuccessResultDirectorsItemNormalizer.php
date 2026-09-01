<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PeopleSearchSuccessResultDirectorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('peopleId', $data)) {
            $object->peopleId = $data['peopleId'];
            unset($data['peopleId']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->firstName = $data['firstName'];
            unset($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->lastName = $data['lastName'];
            unset($data['lastName']);
        }
        if (\array_key_exists('country', $data)) {
            $object->country = $data['country'];
            unset($data['country']);
        }
        if (\array_key_exists('company', $data)) {
            $object->company = $this->denormalizer->denormalize($data['company'], \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemCompany::class, 'json', $context);
            unset($data['company']);
        }
        if (\array_key_exists('address', $data)) {
            $object->address = $this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemAddress::class, 'json', $context);
            unset($data['address']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('dateOfLatestChange', $data)) {
            $object->dateOfLatestChange = $data['dateOfLatestChange'];
            unset($data['dateOfLatestChange']);
        }
        if (\array_key_exists('dateOfBirth', $data)) {
            $object->dateOfBirth = $data['dateOfBirth'];
            unset($data['dateOfBirth']);
        }
        if (\array_key_exists('localDirectorNumber', $data)) {
            $object->localDirectorNumber = $data['localDirectorNumber'];
            unset($data['localDirectorNumber']);
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
        if (array_key_exists('peopleId', get_object_vars($data)) && null !== ($data->peopleId ?? null)) {
            $dataArray['peopleId'] = $data->peopleId ?? null;
        }
        if (array_key_exists('firstName', get_object_vars($data)) && null !== ($data->firstName ?? null)) {
            $dataArray['firstName'] = $data->firstName ?? null;
        }
        if (array_key_exists('lastName', get_object_vars($data)) && null !== ($data->lastName ?? null)) {
            $dataArray['lastName'] = $data->lastName ?? null;
        }
        if (array_key_exists('country', get_object_vars($data)) && null !== ($data->country ?? null)) {
            $dataArray['country'] = $data->country ?? null;
        }
        if (array_key_exists('company', get_object_vars($data)) && null !== ($data->company ?? null)) {
            $dataArray['company'] = ($data->company ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->company ?? null, 'json', $context));
        }
        if (array_key_exists('address', get_object_vars($data)) && null !== ($data->address ?? null)) {
            $dataArray['address'] = ($data->address ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->address ?? null, 'json', $context));
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('dateOfLatestChange', get_object_vars($data)) && null !== ($data->dateOfLatestChange ?? null)) {
            $dataArray['dateOfLatestChange'] = $data->dateOfLatestChange ?? null;
        }
        if (array_key_exists('dateOfBirth', get_object_vars($data)) && null !== ($data->dateOfBirth ?? null)) {
            $dataArray['dateOfBirth'] = $data->dateOfBirth ?? null;
        }
        if (array_key_exists('localDirectorNumber', get_object_vars($data)) && null !== ($data->localDirectorNumber ?? null)) {
            $dataArray['localDirectorNumber'] = $data->localDirectorNumber ?? null;
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
        return [\CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class => false];
    }
}