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
class RelationTypeTargetDocTypeMismatchExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\RelationTypeTargetDocTypeMismatchException::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\RelationTypeTargetDocTypeMismatchException::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\RelationTypeTargetDocTypeMismatchException();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        }
        if (\array_key_exists('traceJobId', $data) && $data['traceJobId'] !== null) {
            $object->setTraceJobId($data['traceJobId']);
            unset($data['traceJobId']);
        }
        elseif (\array_key_exists('traceJobId', $data) && $data['traceJobId'] === null) {
            $object->setTraceJobId(null);
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
        }
        if (\array_key_exists('customerAlias', $data) && $data['customerAlias'] !== null) {
            $object->setCustomerAlias($data['customerAlias']);
            unset($data['customerAlias']);
        }
        elseif (\array_key_exists('customerAlias', $data) && $data['customerAlias'] === null) {
            $object->setCustomerAlias(null);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        }
        elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('relationType', $data) && $data['relationType'] !== null) {
            $object->setRelationType($data['relationType']);
            unset($data['relationType']);
        }
        elseif (\array_key_exists('relationType', $data) && $data['relationType'] === null) {
            $object->setRelationType(null);
        }
        if (\array_key_exists('targetDocType', $data) && $data['targetDocType'] !== null) {
            $object->setTargetDocType($data['targetDocType']);
            unset($data['targetDocType']);
        }
        elseif (\array_key_exists('targetDocType', $data) && $data['targetDocType'] === null) {
            $object->setTargetDocType(null);
        }
        if (\array_key_exists('expectedTargetDocType', $data) && $data['expectedTargetDocType'] !== null) {
            $object->setExpectedTargetDocType($data['expectedTargetDocType']);
            unset($data['expectedTargetDocType']);
        }
        elseif (\array_key_exists('expectedTargetDocType', $data) && $data['expectedTargetDocType'] === null) {
            $object->setExpectedTargetDocType(null);
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
        if ($data->isInitialized('traceId')) {
            $dataArray['traceId'] = $data->getTraceId();
        }
        if ($data->isInitialized('traceJobId')) {
            $dataArray['traceJobId'] = $data->getTraceJobId();
        }
        if ($data->isInitialized('httpStatusCode') && null !== $data->getHttpStatusCode()) {
            $dataArray['httpStatusCode'] = $data->getHttpStatusCode();
        }
        if ($data->isInitialized('exceptionMessage')) {
            $dataArray['exceptionMessage'] = $data->getExceptionMessage();
        }
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('customerId')) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('customerAlias')) {
            $dataArray['customerAlias'] = $data->getCustomerAlias();
        }
        if ($data->isInitialized('userId')) {
            $dataArray['userId'] = $data->getUserId();
        }
        if ($data->isInitialized('relationType')) {
            $dataArray['relationType'] = $data->getRelationType();
        }
        if ($data->isInitialized('targetDocType')) {
            $dataArray['targetDocType'] = $data->getTargetDocType();
        }
        if ($data->isInitialized('expectedTargetDocType')) {
            $dataArray['expectedTargetDocType'] = $data->getExpectedTargetDocType();
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
        return [\PicturePark\API\Model\RelationTypeTargetDocTypeMismatchException::class => false];
    }
}