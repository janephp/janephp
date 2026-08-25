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
class GbPeopleReportReponseReportDirectorDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetails();
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
        if (\array_key_exists('idType', $data)) {
            $object->setIdType($data['idType']);
            unset($data['idType']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        if (\array_key_exists('middleName', $data)) {
            $object->setMiddleName($data['middleName']);
            unset($data['middleName']);
        }
        if (\array_key_exists('surname', $data)) {
            $object->setSurname($data['surname']);
            unset($data['surname']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetailsAddress::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('gender', $data)) {
            $object->setGender($data['gender']);
            unset($data['gender']);
        }
        if (\array_key_exists('dateOfBirth', $data)) {
            $object->setDateOfBirth($data['dateOfBirth']);
            unset($data['dateOfBirth']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        if (\array_key_exists('directorType', $data)) {
            $object->setDirectorType($data['directorType']);
            unset($data['directorType']);
        }
        if (\array_key_exists('positions', $data)) {
            $values = [];
            foreach ($data['positions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetailsPositionsItem::class, 'json', $context);
            }
            $object->setPositions($values);
            unset($data['positions']);
        }
        if (\array_key_exists('additionalData', $data)) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additionalData'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetailsAdditionalData::class, 'json', $context));
            unset($data['additionalData']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('idType') && null !== $data->getIdType()) {
            $dataArray['idType'] = $data->getIdType();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('middleName') && null !== $data->getMiddleName()) {
            $dataArray['middleName'] = $data->getMiddleName();
        }
        if ($data->isInitialized('surname') && null !== $data->getSurname()) {
            $dataArray['surname'] = $data->getSurname();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $data->getAddress() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getAddress(), 'json', $context));
        }
        if ($data->isInitialized('gender') && null !== $data->getGender()) {
            $dataArray['gender'] = $data->getGender();
        }
        if ($data->isInitialized('dateOfBirth') && null !== $data->getDateOfBirth()) {
            $dataArray['dateOfBirth'] = $data->getDateOfBirth();
        }
        if ($data->isInitialized('country') && null !== $data->getCountry()) {
            $dataArray['country'] = $data->getCountry();
        }
        if ($data->isInitialized('directorType') && null !== $data->getDirectorType()) {
            $dataArray['directorType'] = $data->getDirectorType();
        }
        if ($data->isInitialized('positions') && null !== $data->getPositions()) {
            $values = [];
            foreach ($data->getPositions() as $value) {
                $values[] = $value === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['positions'] = $values;
        }
        if ($data->isInitialized('additionalData') && null !== $data->getAdditionalData()) {
            $dataArray['additionalData'] = $data->getAdditionalData() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getAdditionalData(), 'json', $context));
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
        return [\CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetails::class => false];
    }
}