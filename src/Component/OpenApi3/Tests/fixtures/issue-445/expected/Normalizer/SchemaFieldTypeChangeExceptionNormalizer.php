<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SchemaFieldTypeChangeExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SchemaFieldTypeChangeException::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SchemaFieldTypeChangeException::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\SchemaFieldTypeChangeException();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('traceLevel', $data)) {
            $object->traceLevel = $data['traceLevel'];
            unset($data['traceLevel']);
        }
        if (\array_key_exists('traceId', $data) && $data['traceId'] !== null) {
            $object->traceId = $data['traceId'];
            unset($data['traceId']);
        }
        elseif (\array_key_exists('traceId', $data) && $data['traceId'] === null) {
            $object->traceId = null;
            unset($data['traceId']);
        }
        if (\array_key_exists('traceJobId', $data) && $data['traceJobId'] !== null) {
            $object->traceJobId = $data['traceJobId'];
            unset($data['traceJobId']);
        }
        elseif (\array_key_exists('traceJobId', $data) && $data['traceJobId'] === null) {
            $object->traceJobId = null;
            unset($data['traceJobId']);
        }
        if (\array_key_exists('httpStatusCode', $data)) {
            $object->httpStatusCode = $data['httpStatusCode'];
            unset($data['httpStatusCode']);
        }
        if (\array_key_exists('exceptionMessage', $data) && $data['exceptionMessage'] !== null) {
            $object->exceptionMessage = $data['exceptionMessage'];
            unset($data['exceptionMessage']);
        }
        elseif (\array_key_exists('exceptionMessage', $data) && $data['exceptionMessage'] === null) {
            $object->exceptionMessage = null;
            unset($data['exceptionMessage']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->customerId = $data['customerId'];
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->customerId = null;
            unset($data['customerId']);
        }
        if (\array_key_exists('customerAlias', $data) && $data['customerAlias'] !== null) {
            $object->customerAlias = $data['customerAlias'];
            unset($data['customerAlias']);
        }
        elseif (\array_key_exists('customerAlias', $data) && $data['customerAlias'] === null) {
            $object->customerAlias = null;
            unset($data['customerAlias']);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->userId = $data['userId'];
            unset($data['userId']);
        }
        elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->userId = null;
            unset($data['userId']);
        }
        if (\array_key_exists('schemaId', $data) && $data['schemaId'] !== null) {
            $object->schemaId = $data['schemaId'];
            unset($data['schemaId']);
        }
        elseif (\array_key_exists('schemaId', $data) && $data['schemaId'] === null) {
            $object->schemaId = null;
            unset($data['schemaId']);
        }
        if (\array_key_exists('fieldId', $data) && $data['fieldId'] !== null) {
            $object->fieldId = $data['fieldId'];
            unset($data['fieldId']);
        }
        elseif (\array_key_exists('fieldId', $data) && $data['fieldId'] === null) {
            $object->fieldId = null;
            unset($data['fieldId']);
        }
        if (\array_key_exists('oldTypeName', $data) && $data['oldTypeName'] !== null) {
            $object->oldTypeName = $data['oldTypeName'];
            unset($data['oldTypeName']);
        }
        elseif (\array_key_exists('oldTypeName', $data) && $data['oldTypeName'] === null) {
            $object->oldTypeName = null;
            unset($data['oldTypeName']);
        }
        if (\array_key_exists('newTypeName', $data) && $data['newTypeName'] !== null) {
            $object->newTypeName = $data['newTypeName'];
            unset($data['newTypeName']);
        }
        elseif (\array_key_exists('newTypeName', $data) && $data['newTypeName'] === null) {
            $object->newTypeName = null;
            unset($data['newTypeName']);
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
        if (array_key_exists('traceLevel', get_object_vars($data)) && null !== ($data->traceLevel ?? null)) {
            $dataArray['traceLevel'] = $data->traceLevel ?? null;
        }
        if (array_key_exists('traceId', get_object_vars($data)) && null !== ($data->traceId ?? null)) {
            $dataArray['traceId'] = $data->traceId ?? null;
        }
        if (array_key_exists('traceJobId', get_object_vars($data)) && null !== ($data->traceJobId ?? null)) {
            $dataArray['traceJobId'] = $data->traceJobId ?? null;
        }
        if (array_key_exists('httpStatusCode', get_object_vars($data)) && null !== ($data->httpStatusCode ?? null)) {
            $dataArray['httpStatusCode'] = $data->httpStatusCode ?? null;
        }
        if (array_key_exists('exceptionMessage', get_object_vars($data)) && null !== ($data->exceptionMessage ?? null)) {
            $dataArray['exceptionMessage'] = $data->exceptionMessage ?? null;
        }
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('customerId', get_object_vars($data)) && null !== ($data->customerId ?? null)) {
            $dataArray['customerId'] = $data->customerId ?? null;
        }
        if (array_key_exists('customerAlias', get_object_vars($data)) && null !== ($data->customerAlias ?? null)) {
            $dataArray['customerAlias'] = $data->customerAlias ?? null;
        }
        if (array_key_exists('userId', get_object_vars($data)) && null !== ($data->userId ?? null)) {
            $dataArray['userId'] = $data->userId ?? null;
        }
        if (array_key_exists('schemaId', get_object_vars($data)) && null !== ($data->schemaId ?? null)) {
            $dataArray['schemaId'] = $data->schemaId ?? null;
        }
        if (array_key_exists('fieldId', get_object_vars($data)) && null !== ($data->fieldId ?? null)) {
            $dataArray['fieldId'] = $data->fieldId ?? null;
        }
        if (array_key_exists('oldTypeName', get_object_vars($data)) && null !== ($data->oldTypeName ?? null)) {
            $dataArray['oldTypeName'] = $data->oldTypeName ?? null;
        }
        if (array_key_exists('newTypeName', get_object_vars($data)) && null !== ($data->newTypeName ?? null)) {
            $dataArray['newTypeName'] = $data->newTypeName ?? null;
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
        return [\PicturePark\API\Model\SchemaFieldTypeChangeException::class => false];
    }
}