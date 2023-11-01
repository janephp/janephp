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
    class NodeInfoMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\NodeInfoMessage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\NodeInfoMessage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\NodeInfoMessage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('retries', $data)) {
                $object->setRetries($data['retries']);
                unset($data['retries']);
            }
            if (\array_key_exists('priority', $data)) {
                $object->setPriority($data['priority']);
                unset($data['priority']);
            }
            if (\array_key_exists('deduplicate', $data)) {
                $object->setDeduplicate($data['deduplicate']);
                unset($data['deduplicate']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('nodeId', $data) && $data['nodeId'] !== null) {
                $object->setNodeId($data['nodeId']);
                unset($data['nodeId']);
            }
            elseif (\array_key_exists('nodeId', $data) && $data['nodeId'] === null) {
                $object->setNodeId(null);
            }
            if (\array_key_exists('hostName', $data) && $data['hostName'] !== null) {
                $object->setHostName($data['hostName']);
                unset($data['hostName']);
            }
            elseif (\array_key_exists('hostName', $data) && $data['hostName'] === null) {
                $object->setHostName(null);
            }
            if (\array_key_exists('lastResponseTime', $data)) {
                $object->setLastResponseTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastResponseTime']));
                unset($data['lastResponseTime']);
            }
            if (\array_key_exists('serviceName', $data) && $data['serviceName'] !== null) {
                $object->setServiceName($data['serviceName']);
                unset($data['serviceName']);
            }
            elseif (\array_key_exists('serviceName', $data) && $data['serviceName'] === null) {
                $object->setServiceName(null);
            }
            if (\array_key_exists('fileVersion', $data) && $data['fileVersion'] !== null) {
                $object->setFileVersion($data['fileVersion']);
                unset($data['fileVersion']);
            }
            elseif (\array_key_exists('fileVersion', $data) && $data['fileVersion'] === null) {
                $object->setFileVersion(null);
            }
            if (\array_key_exists('productVersion', $data) && $data['productVersion'] !== null) {
                $object->setProductVersion($data['productVersion']);
                unset($data['productVersion']);
            }
            elseif (\array_key_exists('productVersion', $data) && $data['productVersion'] === null) {
                $object->setProductVersion(null);
            }
            if (\array_key_exists('release', $data) && $data['release'] !== null) {
                $object->setRelease($data['release']);
                unset($data['release']);
            }
            elseif (\array_key_exists('release', $data) && $data['release'] === null) {
                $object->setRelease(null);
            }
            if (\array_key_exists('logLevel', $data) && $data['logLevel'] !== null) {
                $object->setLogLevel($data['logLevel']);
                unset($data['logLevel']);
            }
            elseif (\array_key_exists('logLevel', $data) && $data['logLevel'] === null) {
                $object->setLogLevel(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['retries'] = $object->getRetries();
            $data['priority'] = $object->getPriority();
            $data['deduplicate'] = $object->getDeduplicate();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('nodeId') && null !== $object->getNodeId()) {
                $data['nodeId'] = $object->getNodeId();
            }
            if ($object->isInitialized('hostName') && null !== $object->getHostName()) {
                $data['hostName'] = $object->getHostName();
            }
            if ($object->isInitialized('lastResponseTime') && null !== $object->getLastResponseTime()) {
                $data['lastResponseTime'] = $object->getLastResponseTime()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('serviceName') && null !== $object->getServiceName()) {
                $data['serviceName'] = $object->getServiceName();
            }
            if ($object->isInitialized('fileVersion') && null !== $object->getFileVersion()) {
                $data['fileVersion'] = $object->getFileVersion();
            }
            if ($object->isInitialized('productVersion') && null !== $object->getProductVersion()) {
                $data['productVersion'] = $object->getProductVersion();
            }
            if ($object->isInitialized('release') && null !== $object->getRelease()) {
                $data['release'] = $object->getRelease();
            }
            if ($object->isInitialized('logLevel') && null !== $object->getLogLevel()) {
                $data['logLevel'] = $object->getLogLevel();
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
            return ['PicturePark\\API\\Model\\NodeInfoMessage' => false];
        }
    }
} else {
    class NodeInfoMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\NodeInfoMessage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\NodeInfoMessage';
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
            $object = new \PicturePark\API\Model\NodeInfoMessage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('retries', $data)) {
                $object->setRetries($data['retries']);
                unset($data['retries']);
            }
            if (\array_key_exists('priority', $data)) {
                $object->setPriority($data['priority']);
                unset($data['priority']);
            }
            if (\array_key_exists('deduplicate', $data)) {
                $object->setDeduplicate($data['deduplicate']);
                unset($data['deduplicate']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('nodeId', $data) && $data['nodeId'] !== null) {
                $object->setNodeId($data['nodeId']);
                unset($data['nodeId']);
            }
            elseif (\array_key_exists('nodeId', $data) && $data['nodeId'] === null) {
                $object->setNodeId(null);
            }
            if (\array_key_exists('hostName', $data) && $data['hostName'] !== null) {
                $object->setHostName($data['hostName']);
                unset($data['hostName']);
            }
            elseif (\array_key_exists('hostName', $data) && $data['hostName'] === null) {
                $object->setHostName(null);
            }
            if (\array_key_exists('lastResponseTime', $data)) {
                $object->setLastResponseTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastResponseTime']));
                unset($data['lastResponseTime']);
            }
            if (\array_key_exists('serviceName', $data) && $data['serviceName'] !== null) {
                $object->setServiceName($data['serviceName']);
                unset($data['serviceName']);
            }
            elseif (\array_key_exists('serviceName', $data) && $data['serviceName'] === null) {
                $object->setServiceName(null);
            }
            if (\array_key_exists('fileVersion', $data) && $data['fileVersion'] !== null) {
                $object->setFileVersion($data['fileVersion']);
                unset($data['fileVersion']);
            }
            elseif (\array_key_exists('fileVersion', $data) && $data['fileVersion'] === null) {
                $object->setFileVersion(null);
            }
            if (\array_key_exists('productVersion', $data) && $data['productVersion'] !== null) {
                $object->setProductVersion($data['productVersion']);
                unset($data['productVersion']);
            }
            elseif (\array_key_exists('productVersion', $data) && $data['productVersion'] === null) {
                $object->setProductVersion(null);
            }
            if (\array_key_exists('release', $data) && $data['release'] !== null) {
                $object->setRelease($data['release']);
                unset($data['release']);
            }
            elseif (\array_key_exists('release', $data) && $data['release'] === null) {
                $object->setRelease(null);
            }
            if (\array_key_exists('logLevel', $data) && $data['logLevel'] !== null) {
                $object->setLogLevel($data['logLevel']);
                unset($data['logLevel']);
            }
            elseif (\array_key_exists('logLevel', $data) && $data['logLevel'] === null) {
                $object->setLogLevel(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['retries'] = $object->getRetries();
            $data['priority'] = $object->getPriority();
            $data['deduplicate'] = $object->getDeduplicate();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('nodeId') && null !== $object->getNodeId()) {
                $data['nodeId'] = $object->getNodeId();
            }
            if ($object->isInitialized('hostName') && null !== $object->getHostName()) {
                $data['hostName'] = $object->getHostName();
            }
            if ($object->isInitialized('lastResponseTime') && null !== $object->getLastResponseTime()) {
                $data['lastResponseTime'] = $object->getLastResponseTime()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('serviceName') && null !== $object->getServiceName()) {
                $data['serviceName'] = $object->getServiceName();
            }
            if ($object->isInitialized('fileVersion') && null !== $object->getFileVersion()) {
                $data['fileVersion'] = $object->getFileVersion();
            }
            if ($object->isInitialized('productVersion') && null !== $object->getProductVersion()) {
                $data['productVersion'] = $object->getProductVersion();
            }
            if ($object->isInitialized('release') && null !== $object->getRelease()) {
                $data['release'] = $object->getRelease();
            }
            if ($object->isInitialized('logLevel') && null !== $object->getLogLevel()) {
                $data['logLevel'] = $object->getLogLevel();
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
            return ['PicturePark\\API\\Model\\NodeInfoMessage' => false];
        }
    }
}