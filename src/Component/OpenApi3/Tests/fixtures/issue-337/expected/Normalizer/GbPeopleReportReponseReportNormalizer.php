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
class GbPeopleReportReponseReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbPeopleReportReponseReport::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbPeopleReportReponseReport::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('directorId', $data)) {
            $object->directorId = $data['directorId'];
            unset($data['directorId']);
        }
        if (\array_key_exists('directorSummary', $data)) {
            $object->directorSummary = $this->denormalizer->denormalize($data['directorSummary'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorSummary::class, 'json', $context);
            unset($data['directorSummary']);
        }
        if (\array_key_exists('directorDetails', $data)) {
            $object->directorDetails = $this->denormalizer->denormalize($data['directorDetails'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetails::class, 'json', $context);
            unset($data['directorDetails']);
        }
        if (\array_key_exists('otherAddresses', $data)) {
            $values = [];
            foreach ($data['otherAddresses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbPeopleReportReponseReportOtherAddressesItem::class, 'json', $context);
            }
            $object->otherAddresses = $values;
            unset($data['otherAddresses']);
        }
        if (\array_key_exists('directorships', $data)) {
            $object->directorships = $this->denormalizer->denormalize($data['directorships'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorships::class, 'json', $context);
            unset($data['directorships']);
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
        if (array_key_exists('directorId', get_object_vars($data)) && null !== ($data->directorId ?? null)) {
            $dataArray['directorId'] = $data->directorId;
        }
        if (array_key_exists('directorSummary', get_object_vars($data)) && null !== ($data->directorSummary ?? null)) {
            $normalized = $this->normalizer->normalize($data->directorSummary, 'json', $context);
            $dataArray['directorSummary'] = \is_iterable($normalized) ? new \CreditSafe\API\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('directorDetails', get_object_vars($data)) && null !== ($data->directorDetails ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->directorDetails, 'json', $context);
            $dataArray['directorDetails'] = \is_iterable($normalized_1) ? new \CreditSafe\API\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('otherAddresses', get_object_vars($data)) && null !== ($data->otherAddresses ?? null)) {
            $values = [];
            foreach ($data->otherAddresses as $value) {
                $normalized_2 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized_2) ? new \CreditSafe\API\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['otherAddresses'] = $values;
        }
        if (array_key_exists('directorships', get_object_vars($data)) && null !== ($data->directorships ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->directorships, 'json', $context);
            $dataArray['directorships'] = \is_iterable($normalized_3) ? new \CreditSafe\API\Runtime\JsonObject($normalized_3) : $normalized_3;
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
        return [\CreditSafe\API\Model\GbPeopleReportReponseReport::class => false];
    }
}