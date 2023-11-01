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
    class LiveStreamTraceJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\LiveStreamTraceJob';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LiveStreamTraceJob';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\LiveStreamTraceJob();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('traceJobId', $data) && $data['traceJobId'] !== null) {
                $object->setTraceJobId($data['traceJobId']);
            }
            elseif (\array_key_exists('traceJobId', $data) && $data['traceJobId'] === null) {
                $object->setTraceJobId(null);
            }
            if (\array_key_exists('ipAddress', $data) && $data['ipAddress'] !== null) {
                $object->setIpAddress($data['ipAddress']);
            }
            elseif (\array_key_exists('ipAddress', $data) && $data['ipAddress'] === null) {
                $object->setIpAddress(null);
            }
            if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
                $object->setUserId($data['userId']);
            }
            elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
                $object->setUserId(null);
            }
            if (\array_key_exists('apiClientId', $data) && $data['apiClientId'] !== null) {
                $object->setApiClientId($data['apiClientId']);
            }
            elseif (\array_key_exists('apiClientId', $data) && $data['apiClientId'] === null) {
                $object->setApiClientId(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('traceJobId') && null !== $object->getTraceJobId()) {
                $data['traceJobId'] = $object->getTraceJobId();
            }
            if ($object->isInitialized('ipAddress') && null !== $object->getIpAddress()) {
                $data['ipAddress'] = $object->getIpAddress();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['userId'] = $object->getUserId();
            }
            if ($object->isInitialized('apiClientId') && null !== $object->getApiClientId()) {
                $data['apiClientId'] = $object->getApiClientId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\LiveStreamTraceJob' => false];
        }
    }
} else {
    class LiveStreamTraceJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\LiveStreamTraceJob';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LiveStreamTraceJob';
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
            $object = new \PicturePark\API\Model\LiveStreamTraceJob();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('traceJobId', $data) && $data['traceJobId'] !== null) {
                $object->setTraceJobId($data['traceJobId']);
            }
            elseif (\array_key_exists('traceJobId', $data) && $data['traceJobId'] === null) {
                $object->setTraceJobId(null);
            }
            if (\array_key_exists('ipAddress', $data) && $data['ipAddress'] !== null) {
                $object->setIpAddress($data['ipAddress']);
            }
            elseif (\array_key_exists('ipAddress', $data) && $data['ipAddress'] === null) {
                $object->setIpAddress(null);
            }
            if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
                $object->setUserId($data['userId']);
            }
            elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
                $object->setUserId(null);
            }
            if (\array_key_exists('apiClientId', $data) && $data['apiClientId'] !== null) {
                $object->setApiClientId($data['apiClientId']);
            }
            elseif (\array_key_exists('apiClientId', $data) && $data['apiClientId'] === null) {
                $object->setApiClientId(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('traceJobId') && null !== $object->getTraceJobId()) {
                $data['traceJobId'] = $object->getTraceJobId();
            }
            if ($object->isInitialized('ipAddress') && null !== $object->getIpAddress()) {
                $data['ipAddress'] = $object->getIpAddress();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['userId'] = $object->getUserId();
            }
            if ($object->isInitialized('apiClientId') && null !== $object->getApiClientId()) {
                $data['apiClientId'] = $object->getApiClientId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\LiveStreamTraceJob' => false];
        }
    }
}