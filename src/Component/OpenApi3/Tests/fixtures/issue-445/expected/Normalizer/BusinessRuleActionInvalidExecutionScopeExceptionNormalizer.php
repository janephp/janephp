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
    class BusinessRuleActionInvalidExecutionScopeExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleActionInvalidExecutionScopeException';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleActionInvalidExecutionScopeException';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\BusinessRuleActionInvalidExecutionScopeException();
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
            if (\array_key_exists('allowedScopes', $data) && $data['allowedScopes'] !== null) {
                $values = [];
                foreach ($data['allowedScopes'] as $value) {
                    $values[] = $value;
                }
                $object->setAllowedScopes($values);
                unset($data['allowedScopes']);
            }
            elseif (\array_key_exists('allowedScopes', $data) && $data['allowedScopes'] === null) {
                $object->setAllowedScopes(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('allowedScopes') && null !== $object->getAllowedScopes()) {
                $values = [];
                foreach ($object->getAllowedScopes() as $value) {
                    $values[] = $value;
                }
                $data['allowedScopes'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleActionInvalidExecutionScopeException' => false];
        }
    }
} else {
    class BusinessRuleActionInvalidExecutionScopeExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleActionInvalidExecutionScopeException';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleActionInvalidExecutionScopeException';
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
            $object = new \PicturePark\API\Model\BusinessRuleActionInvalidExecutionScopeException();
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
            if (\array_key_exists('allowedScopes', $data) && $data['allowedScopes'] !== null) {
                $values = [];
                foreach ($data['allowedScopes'] as $value) {
                    $values[] = $value;
                }
                $object->setAllowedScopes($values);
                unset($data['allowedScopes']);
            }
            elseif (\array_key_exists('allowedScopes', $data) && $data['allowedScopes'] === null) {
                $object->setAllowedScopes(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('allowedScopes') && null !== $object->getAllowedScopes()) {
                $values = [];
                foreach ($object->getAllowedScopes() as $value) {
                    $values[] = $value;
                }
                $data['allowedScopes'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleActionInvalidExecutionScopeException' => false];
        }
    }
}