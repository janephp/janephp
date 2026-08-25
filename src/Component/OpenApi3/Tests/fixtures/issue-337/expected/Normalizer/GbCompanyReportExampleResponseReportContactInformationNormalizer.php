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
class GbCompanyReportExampleResponseReportContactInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('mainAddress', $data)) {
            $object->setMainAddress($this->denormalizer->denormalize($data['mainAddress'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformationMainAddress::class, 'json', $context));
            unset($data['mainAddress']);
        }
        if (\array_key_exists('otherAddresses', $data)) {
            $values = [];
            foreach ($data['otherAddresses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformationOtherAddressesItem::class, 'json', $context);
            }
            $object->setOtherAddresses($values);
            unset($data['otherAddresses']);
        }
        if (\array_key_exists('websites', $data)) {
            $values_1 = [];
            foreach ($data['websites'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWebsites($values_1);
            unset($data['websites']);
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
        if ($data->isInitialized('mainAddress') && null !== $data->getMainAddress()) {
            $dataArray['mainAddress'] = $data->getMainAddress() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getMainAddress(), 'json', $context));
        }
        if ($data->isInitialized('otherAddresses') && null !== $data->getOtherAddresses()) {
            $values = [];
            foreach ($data->getOtherAddresses() as $value) {
                $values[] = $value === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['otherAddresses'] = $values;
        }
        if ($data->isInitialized('websites') && null !== $data->getWebsites()) {
            $values_1 = [];
            foreach ($data->getWebsites() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['websites'] = $values_1;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformation::class => false];
    }
}