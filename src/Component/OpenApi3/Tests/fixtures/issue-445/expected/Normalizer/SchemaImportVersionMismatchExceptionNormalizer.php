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
class SchemaImportVersionMismatchExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SchemaImportVersionMismatchException::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SchemaImportVersionMismatchException::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\SchemaImportVersionMismatchException();
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
        if (\array_key_exists('providedVersion', $data) && $data['providedVersion'] !== null) {
            $object->setProvidedVersion($data['providedVersion']);
            unset($data['providedVersion']);
        }
        elseif (\array_key_exists('providedVersion', $data) && $data['providedVersion'] === null) {
            $object->setProvidedVersion(null);
            unset($data['providedVersion']);
        }
        if (\array_key_exists('expectedVersion', $data) && $data['expectedVersion'] !== null) {
            $object->setExpectedVersion($data['expectedVersion']);
            unset($data['expectedVersion']);
        }
        elseif (\array_key_exists('expectedVersion', $data) && $data['expectedVersion'] === null) {
            $object->setExpectedVersion(null);
            unset($data['expectedVersion']);
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
        if ($data->isInitialized('providedVersion') && null !== $data->getProvidedVersion()) {
            $dataArray['providedVersion'] = $data->getProvidedVersion();
        }
        if ($data->isInitialized('expectedVersion') && null !== $data->getExpectedVersion()) {
            $dataArray['expectedVersion'] = $data->getExpectedVersion();
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
        return [\PicturePark\API\Model\SchemaImportVersionMismatchException::class => false];
    }
}