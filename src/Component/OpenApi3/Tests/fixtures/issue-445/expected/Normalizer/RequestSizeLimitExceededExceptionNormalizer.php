<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class RequestSizeLimitExceededExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\RequestSizeLimitExceededException';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\RequestSizeLimitExceededException';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\RequestSizeLimitExceededException();
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
            if (\array_key_exists('argumentName', $data) && $data['argumentName'] !== null) {
                $object->setArgumentName($data['argumentName']);
                unset($data['argumentName']);
            }
            elseif (\array_key_exists('argumentName', $data) && $data['argumentName'] === null) {
                $object->setArgumentName(null);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            }
            if (\array_key_exists('requestedAmount', $data)) {
                $object->setRequestedAmount($data['requestedAmount']);
                unset($data['requestedAmount']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('traceLevel') && null !== $object->getTraceLevel()) {
                $data['traceLevel'] = $object->getTraceLevel();
            }
            if ($object->isInitialized('traceId') && null !== $object->getTraceId()) {
                $data['traceId'] = $object->getTraceId();
            }
            if ($object->isInitialized('traceJobId') && null !== $object->getTraceJobId()) {
                $data['traceJobId'] = $object->getTraceJobId();
            }
            if ($object->isInitialized('httpStatusCode') && null !== $object->getHttpStatusCode()) {
                $data['httpStatusCode'] = $object->getHttpStatusCode();
            }
            if ($object->isInitialized('exceptionMessage') && null !== $object->getExceptionMessage()) {
                $data['exceptionMessage'] = $object->getExceptionMessage();
            }
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('customerId') && null !== $object->getCustomerId()) {
                $data['customerId'] = $object->getCustomerId();
            }
            if ($object->isInitialized('customerAlias') && null !== $object->getCustomerAlias()) {
                $data['customerAlias'] = $object->getCustomerAlias();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['userId'] = $object->getUserId();
            }
            if ($object->isInitialized('argumentName') && null !== $object->getArgumentName()) {
                $data['argumentName'] = $object->getArgumentName();
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('requestedAmount') && null !== $object->getRequestedAmount()) {
                $data['requestedAmount'] = $object->getRequestedAmount();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\RequestSizeLimitExceededException' => false];
        }
    }
} else {
    class RequestSizeLimitExceededExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\RequestSizeLimitExceededException';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\RequestSizeLimitExceededException';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\RequestSizeLimitExceededException();
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
            if (\array_key_exists('argumentName', $data) && $data['argumentName'] !== null) {
                $object->setArgumentName($data['argumentName']);
                unset($data['argumentName']);
            }
            elseif (\array_key_exists('argumentName', $data) && $data['argumentName'] === null) {
                $object->setArgumentName(null);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            }
            if (\array_key_exists('requestedAmount', $data)) {
                $object->setRequestedAmount($data['requestedAmount']);
                unset($data['requestedAmount']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('traceLevel') && null !== $object->getTraceLevel()) {
                $data['traceLevel'] = $object->getTraceLevel();
            }
            if ($object->isInitialized('traceId') && null !== $object->getTraceId()) {
                $data['traceId'] = $object->getTraceId();
            }
            if ($object->isInitialized('traceJobId') && null !== $object->getTraceJobId()) {
                $data['traceJobId'] = $object->getTraceJobId();
            }
            if ($object->isInitialized('httpStatusCode') && null !== $object->getHttpStatusCode()) {
                $data['httpStatusCode'] = $object->getHttpStatusCode();
            }
            if ($object->isInitialized('exceptionMessage') && null !== $object->getExceptionMessage()) {
                $data['exceptionMessage'] = $object->getExceptionMessage();
            }
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('customerId') && null !== $object->getCustomerId()) {
                $data['customerId'] = $object->getCustomerId();
            }
            if ($object->isInitialized('customerAlias') && null !== $object->getCustomerAlias()) {
                $data['customerAlias'] = $object->getCustomerAlias();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['userId'] = $object->getUserId();
            }
            if ($object->isInitialized('argumentName') && null !== $object->getArgumentName()) {
                $data['argumentName'] = $object->getArgumentName();
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('requestedAmount') && null !== $object->getRequestedAmount()) {
                $data['requestedAmount'] = $object->getRequestedAmount();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\RequestSizeLimitExceededException' => false];
        }
    }
}