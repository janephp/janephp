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
class BusinessProcessContinuationExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessProcessContinuationException::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessProcessContinuationException::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessProcessContinuationException();
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
        elseif (\array_key_exists('traceId', $data)) {
            $object->traceId = null;
            unset($data['traceId']);
        }
        if (\array_key_exists('traceJobId', $data) && $data['traceJobId'] !== null) {
            $object->traceJobId = $data['traceJobId'];
            unset($data['traceJobId']);
        }
        elseif (\array_key_exists('traceJobId', $data)) {
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
        elseif (\array_key_exists('exceptionMessage', $data)) {
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
        elseif (\array_key_exists('customerId', $data)) {
            $object->customerId = null;
            unset($data['customerId']);
        }
        if (\array_key_exists('customerAlias', $data) && $data['customerAlias'] !== null) {
            $object->customerAlias = $data['customerAlias'];
            unset($data['customerAlias']);
        }
        elseif (\array_key_exists('customerAlias', $data)) {
            $object->customerAlias = null;
            unset($data['customerAlias']);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->userId = $data['userId'];
            unset($data['userId']);
        }
        elseif (\array_key_exists('userId', $data)) {
            $object->userId = null;
            unset($data['userId']);
        }
        if (\array_key_exists('continuationBusinessProcessId', $data) && $data['continuationBusinessProcessId'] !== null) {
            $object->continuationBusinessProcessId = $data['continuationBusinessProcessId'];
            unset($data['continuationBusinessProcessId']);
        }
        elseif (\array_key_exists('continuationBusinessProcessId', $data)) {
            $object->continuationBusinessProcessId = null;
            unset($data['continuationBusinessProcessId']);
        }
        if (\array_key_exists('precedingBusinessProcessId', $data) && $data['precedingBusinessProcessId'] !== null) {
            $object->precedingBusinessProcessId = $data['precedingBusinessProcessId'];
            unset($data['precedingBusinessProcessId']);
        }
        elseif (\array_key_exists('precedingBusinessProcessId', $data)) {
            $object->precedingBusinessProcessId = null;
            unset($data['precedingBusinessProcessId']);
        }
        if (\array_key_exists('precedingBusinessProcessException', $data) && $data['precedingBusinessProcessException'] !== null) {
            $value = $data['precedingBusinessProcessException'];
            if (is_array($data['precedingBusinessProcessException'])) {
                $value = $this->denormalizer->denormalize($data['precedingBusinessProcessException'], \PicturePark\API\Model\PictureparkException::class, 'json', $context);
            }
            $object->precedingBusinessProcessException = $value;
            unset($data['precedingBusinessProcessException']);
        }
        elseif (\array_key_exists('precedingBusinessProcessException', $data)) {
            $object->precedingBusinessProcessException = null;
            unset($data['precedingBusinessProcessException']);
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
        if (array_key_exists('traceLevel', get_object_vars($data)) && null !== ($data->traceLevel ?? null)) {
            $dataArray['traceLevel'] = $data->traceLevel;
        }
        if (array_key_exists('traceId', get_object_vars($data)) && null !== ($data->traceId ?? null)) {
            $dataArray['traceId'] = $data->traceId;
        }
        if (array_key_exists('traceJobId', get_object_vars($data)) && null !== ($data->traceJobId ?? null)) {
            $dataArray['traceJobId'] = $data->traceJobId;
        }
        if (array_key_exists('httpStatusCode', get_object_vars($data)) && null !== ($data->httpStatusCode ?? null)) {
            $dataArray['httpStatusCode'] = $data->httpStatusCode;
        }
        if (array_key_exists('exceptionMessage', get_object_vars($data)) && null !== ($data->exceptionMessage ?? null)) {
            $dataArray['exceptionMessage'] = $data->exceptionMessage;
        }
        $dataArray['kind'] = $data->kind;
        if (array_key_exists('customerId', get_object_vars($data)) && null !== ($data->customerId ?? null)) {
            $dataArray['customerId'] = $data->customerId;
        }
        if (array_key_exists('customerAlias', get_object_vars($data)) && null !== ($data->customerAlias ?? null)) {
            $dataArray['customerAlias'] = $data->customerAlias;
        }
        if (array_key_exists('userId', get_object_vars($data)) && null !== ($data->userId ?? null)) {
            $dataArray['userId'] = $data->userId;
        }
        if (array_key_exists('continuationBusinessProcessId', get_object_vars($data)) && null !== ($data->continuationBusinessProcessId ?? null)) {
            $dataArray['continuationBusinessProcessId'] = $data->continuationBusinessProcessId;
        }
        if (array_key_exists('precedingBusinessProcessId', get_object_vars($data)) && null !== ($data->precedingBusinessProcessId ?? null)) {
            $dataArray['precedingBusinessProcessId'] = $data->precedingBusinessProcessId;
        }
        if (array_key_exists('precedingBusinessProcessException', get_object_vars($data)) && null !== ($data->precedingBusinessProcessException ?? null)) {
            $value = $data->precedingBusinessProcessException;
            if (is_object($data->precedingBusinessProcessException)) {
                $value = new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->precedingBusinessProcessException, 'json', $context));
            }
            $dataArray['precedingBusinessProcessException'] = $value;
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
        return [\PicturePark\API\Model\BusinessProcessContinuationException::class => false];
    }
}