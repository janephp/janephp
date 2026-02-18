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
class RedisDatabaseExceededExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\RedisDatabaseExceededException::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\RedisDatabaseExceededException::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\RedisDatabaseExceededException();
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
        if (\array_key_exists('customerCount', $data)) {
            $object->setCustomerCount($data['customerCount']);
            unset($data['customerCount']);
        }
        if (\array_key_exists('maxCount', $data)) {
            $object->setMaxCount($data['maxCount']);
            unset($data['maxCount']);
        }
        if (\array_key_exists('startIndex', $data)) {
            $object->setStartIndex($data['startIndex']);
            unset($data['startIndex']);
        }
        if (\array_key_exists('redisDatabaseCount', $data)) {
            $object->setRedisDatabaseCount($data['redisDatabaseCount']);
            unset($data['redisDatabaseCount']);
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
        if ($data->isInitialized('customerCount') && null !== $data->getCustomerCount()) {
            $dataArray['customerCount'] = $data->getCustomerCount();
        }
        if ($data->isInitialized('maxCount') && null !== $data->getMaxCount()) {
            $dataArray['maxCount'] = $data->getMaxCount();
        }
        if ($data->isInitialized('startIndex') && null !== $data->getStartIndex()) {
            $dataArray['startIndex'] = $data->getStartIndex();
        }
        if ($data->isInitialized('redisDatabaseCount') && null !== $data->getRedisDatabaseCount()) {
            $dataArray['redisDatabaseCount'] = $data->getRedisDatabaseCount();
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
        return [\PicturePark\API\Model\RedisDatabaseExceededException::class => false];
    }
}