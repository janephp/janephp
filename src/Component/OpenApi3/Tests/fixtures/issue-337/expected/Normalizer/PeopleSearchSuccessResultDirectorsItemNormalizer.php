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
            $object->setPeopleId($data['peopleId']);
            unset($data['peopleId']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemCompany::class, 'json', $context));
            unset($data['company']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemAddress::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('dateOfLatestChange', $data)) {
            $object->setDateOfLatestChange($data['dateOfLatestChange']);
            unset($data['dateOfLatestChange']);
        }
        if (\array_key_exists('dateOfBirth', $data)) {
            $object->setDateOfBirth($data['dateOfBirth']);
            unset($data['dateOfBirth']);
        }
        if (\array_key_exists('localDirectorNumber', $data)) {
            $object->setLocalDirectorNumber($data['localDirectorNumber']);
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
        if ($data->isInitialized('peopleId') && null !== $data->getPeopleId()) {
            $dataArray['peopleId'] = $data->getPeopleId();
        }
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('lastName') && null !== $data->getLastName()) {
            $dataArray['lastName'] = $data->getLastName();
        }
        if ($data->isInitialized('country') && null !== $data->getCountry()) {
            $dataArray['country'] = $data->getCountry();
        }
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getCompany(), 'json', $context));
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $data->getAddress() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getAddress(), 'json', $context));
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('dateOfLatestChange') && null !== $data->getDateOfLatestChange()) {
            $dataArray['dateOfLatestChange'] = $data->getDateOfLatestChange();
        }
        if ($data->isInitialized('dateOfBirth') && null !== $data->getDateOfBirth()) {
            $dataArray['dateOfBirth'] = $data->getDateOfBirth();
        }
        if ($data->isInitialized('localDirectorNumber') && null !== $data->getLocalDirectorNumber()) {
            $dataArray['localDirectorNumber'] = $data->getLocalDirectorNumber();
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