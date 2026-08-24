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
class SchemaFieldNumberRangeExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SchemaFieldNumberRangeException::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SchemaFieldNumberRangeException::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\SchemaFieldNumberRangeException();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('minValue', $data) && \is_int($data['minValue'])) {
            $data['minValue'] = (float) $data['minValue'];
        }
        if (\array_key_exists('maxValue', $data) && \is_int($data['maxValue'])) {
            $data['maxValue'] = (float) $data['maxValue'];
        }
        if (\array_key_exists('traceLevel', $data)) {
            $object->setTraceLevel($data['traceLevel']);
            unset($data['traceLevel']);
        }
        if (\array_key_exists('traceId', $data) && $data['traceId'] !== null) {
            $object->setTraceId($data['traceId']);
            unset($data['traceId']);
        }
        elseif (\array_key_exists('traceId', $data) && $data['traceId'] === null) {
            $object->setTraceId(null);
            unset($data['traceId']);
        }
        if (\array_key_exists('traceJobId', $data) && $data['traceJobId'] !== null) {
            $object->setTraceJobId($data['traceJobId']);
            unset($data['traceJobId']);
        }
        elseif (\array_key_exists('traceJobId', $data) && $data['traceJobId'] === null) {
            $object->setTraceJobId(null);
            unset($data['traceJobId']);
        }
        if (\array_key_exists('httpStatusCode', $data)) {
            $object->setHttpStatusCode($data['httpStatusCode']);
            unset($data['httpStatusCode']);
        }
        if (\array_key_exists('exceptionMessage', $data) && $data['exceptionMessage'] !== null) {
            $object->setExceptionMessage($data['exceptionMessage']);
            unset($data['exceptionMessage']);
        }
        elseif (\array_key_exists('exceptionMessage', $data) && $data['exceptionMessage'] === null) {
            $object->setExceptionMessage(null);
            unset($data['exceptionMessage']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
            unset($data['customerId']);
        }
        if (\array_key_exists('customerAlias', $data) && $data['customerAlias'] !== null) {
            $object->setCustomerAlias($data['customerAlias']);
            unset($data['customerAlias']);
        }
        elseif (\array_key_exists('customerAlias', $data) && $data['customerAlias'] === null) {
            $object->setCustomerAlias(null);
            unset($data['customerAlias']);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        }
        elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->setUserId(null);
            unset($data['userId']);
        }
        if (\array_key_exists('fieldId', $data) && $data['fieldId'] !== null) {
            $object->setFieldId($data['fieldId']);
            unset($data['fieldId']);
        }
        elseif (\array_key_exists('fieldId', $data) && $data['fieldId'] === null) {
            $object->setFieldId(null);
            unset($data['fieldId']);
        }
        if (\array_key_exists('propertyName', $data) && $data['propertyName'] !== null) {
            $object->setPropertyName($data['propertyName']);
            unset($data['propertyName']);
        }
        elseif (\array_key_exists('propertyName', $data) && $data['propertyName'] === null) {
            $object->setPropertyName(null);
            unset($data['propertyName']);
        }
        if (\array_key_exists('minValue', $data)) {
            $object->setMinValue($data['minValue']);
            unset($data['minValue']);
        }
        if (\array_key_exists('maxValue', $data)) {
            $object->setMaxValue($data['maxValue']);
            unset($data['maxValue']);
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
        if ($data->isInitialized('traceLevel') && null !== $data->getTraceLevel()) {
            $dataArray['traceLevel'] = $data->getTraceLevel();
        }
        if ($data->isInitialized('traceId') && null !== $data->getTraceId()) {
            $dataArray['traceId'] = $data->getTraceId();
        }
        if ($data->isInitialized('traceJobId') && null !== $data->getTraceJobId()) {
            $dataArray['traceJobId'] = $data->getTraceJobId();
        }
        if ($data->isInitialized('httpStatusCode') && null !== $data->getHttpStatusCode()) {
            $dataArray['httpStatusCode'] = $data->getHttpStatusCode();
        }
        if ($data->isInitialized('exceptionMessage') && null !== $data->getExceptionMessage()) {
            $dataArray['exceptionMessage'] = $data->getExceptionMessage();
        }
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('customerId') && null !== $data->getCustomerId()) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('customerAlias') && null !== $data->getCustomerAlias()) {
            $dataArray['customerAlias'] = $data->getCustomerAlias();
        }
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
            $dataArray['userId'] = $data->getUserId();
        }
        if ($data->isInitialized('fieldId') && null !== $data->getFieldId()) {
            $dataArray['fieldId'] = $data->getFieldId();
        }
        if ($data->isInitialized('propertyName') && null !== $data->getPropertyName()) {
            $dataArray['propertyName'] = $data->getPropertyName();
        }
        if ($data->isInitialized('minValue') && null !== $data->getMinValue()) {
            $dataArray['minValue'] = $data->getMinValue();
        }
        if ($data->isInitialized('maxValue') && null !== $data->getMaxValue()) {
            $dataArray['maxValue'] = $data->getMaxValue();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SchemaFieldNumberRangeException::class => false];
    }
}