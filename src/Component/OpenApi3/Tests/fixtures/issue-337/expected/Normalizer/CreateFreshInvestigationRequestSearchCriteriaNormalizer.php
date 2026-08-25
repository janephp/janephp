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
class CreateFreshInvestigationRequestSearchCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\CreateFreshInvestigationRequestSearchCriteria::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\CreateFreshInvestigationRequestSearchCriteria::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\CreateFreshInvestigationRequestSearchCriteria();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('additionalInfo', $data)) {
            $object->setAdditionalInfo($data['additionalInfo']);
            unset($data['additionalInfo']);
        }
        if (\array_key_exists('telephoneNumber', $data)) {
            $object->setTelephoneNumber($data['telephoneNumber']);
            unset($data['telephoneNumber']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\CreateFreshInvestigationRequestSearchCriteriaAddress::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('regNo', $data)) {
            $object->setRegNo($data['regNo']);
            unset($data['regNo']);
        }
        if (\array_key_exists('vatNo', $data)) {
            $object->setVatNo($data['vatNo']);
            unset($data['vatNo']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('additionalInfo') && null !== $data->getAdditionalInfo()) {
            $dataArray['additionalInfo'] = $data->getAdditionalInfo();
        }
        if ($data->isInitialized('telephoneNumber') && null !== $data->getTelephoneNumber()) {
            $dataArray['telephoneNumber'] = $data->getTelephoneNumber();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $data->getAddress() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getAddress(), 'json', $context));
        }
        if ($data->isInitialized('regNo') && null !== $data->getRegNo()) {
            $dataArray['regNo'] = $data->getRegNo();
        }
        if ($data->isInitialized('vatNo') && null !== $data->getVatNo()) {
            $dataArray['vatNo'] = $data->getVatNo();
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
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
        return [\CreditSafe\API\Model\CreateFreshInvestigationRequestSearchCriteria::class => false];
    }
}