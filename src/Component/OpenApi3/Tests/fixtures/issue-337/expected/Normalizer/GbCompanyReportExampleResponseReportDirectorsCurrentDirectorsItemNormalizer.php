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
class GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem();
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
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('title', $data)) {
            $object->title = $data['title'];
            unset($data['title']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->firstName = $data['firstName'];
            unset($data['firstName']);
        }
        if (\array_key_exists('surname', $data)) {
            $object->surname = $data['surname'];
            unset($data['surname']);
        }
        if (\array_key_exists('address', $data)) {
            $object->address = $this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddress::class, 'json', $context);
            unset($data['address']);
        }
        if (\array_key_exists('gender', $data)) {
            $object->gender = $data['gender'];
            unset($data['gender']);
        }
        if (\array_key_exists('dateOfBirth', $data)) {
            $object->dateOfBirth = $data['dateOfBirth'];
            unset($data['dateOfBirth']);
        }
        if (\array_key_exists('directorType', $data)) {
            $object->directorType = $data['directorType'];
            unset($data['directorType']);
        }
        if (\array_key_exists('positions', $data)) {
            $values = [];
            foreach ($data['positions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItem::class, 'json', $context);
            }
            $object->positions = $values;
            unset($data['positions']);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title ?? null;
        }
        if (array_key_exists('firstName', get_object_vars($data)) && null !== ($data->firstName ?? null)) {
            $dataArray['firstName'] = $data->firstName ?? null;
        }
        if (array_key_exists('surname', get_object_vars($data)) && null !== ($data->surname ?? null)) {
            $dataArray['surname'] = $data->surname ?? null;
        }
        if (array_key_exists('address', get_object_vars($data)) && null !== ($data->address ?? null)) {
            $dataArray['address'] = ($data->address ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->address ?? null, 'json', $context));
        }
        if (array_key_exists('gender', get_object_vars($data)) && null !== ($data->gender ?? null)) {
            $dataArray['gender'] = $data->gender ?? null;
        }
        if (array_key_exists('dateOfBirth', get_object_vars($data)) && null !== ($data->dateOfBirth ?? null)) {
            $dataArray['dateOfBirth'] = $data->dateOfBirth ?? null;
        }
        if (array_key_exists('directorType', get_object_vars($data)) && null !== ($data->directorType ?? null)) {
            $dataArray['directorType'] = $data->directorType ?? null;
        }
        if (array_key_exists('positions', get_object_vars($data)) && null !== ($data->positions ?? null)) {
            $values = [];
            foreach ($data->positions ?? null as $value) {
                $values[] = $value === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['positions'] = $values;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class => false];
    }
}