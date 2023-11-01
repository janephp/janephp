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
    class LiveStreamMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\LiveStreamMessage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LiveStreamMessage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\LiveStreamMessage();
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
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
                unset($data['timestamp']);
            }
            if (\array_key_exists('scope', $data) && $data['scope'] !== null) {
                $object->setScope($data['scope']);
                unset($data['scope']);
            }
            elseif (\array_key_exists('scope', $data) && $data['scope'] === null) {
                $object->setScope(null);
            }
            if (\array_key_exists('documentChange', $data) && $data['documentChange'] !== null) {
                $object->setDocumentChange($data['documentChange']);
                unset($data['documentChange']);
            }
            elseif (\array_key_exists('documentChange', $data) && $data['documentChange'] === null) {
                $object->setDocumentChange(null);
            }
            if (\array_key_exists('applicationEvent', $data) && $data['applicationEvent'] !== null) {
                $object->setApplicationEvent($data['applicationEvent']);
                unset($data['applicationEvent']);
            }
            elseif (\array_key_exists('applicationEvent', $data) && $data['applicationEvent'] === null) {
                $object->setApplicationEvent(null);
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
            if ($object->isInitialized('customerId') && null !== $object->getCustomerId()) {
                $data['customerId'] = $object->getCustomerId();
            }
            if ($object->isInitialized('customerAlias') && null !== $object->getCustomerAlias()) {
                $data['customerAlias'] = $object->getCustomerAlias();
            }
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['scope'] = $object->getScope();
            }
            if ($object->isInitialized('documentChange') && null !== $object->getDocumentChange()) {
                $data['documentChange'] = $object->getDocumentChange();
            }
            if ($object->isInitialized('applicationEvent') && null !== $object->getApplicationEvent()) {
                $data['applicationEvent'] = $object->getApplicationEvent();
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
            return ['PicturePark\\API\\Model\\LiveStreamMessage' => false];
        }
    }
} else {
    class LiveStreamMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\LiveStreamMessage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LiveStreamMessage';
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
            $object = new \PicturePark\API\Model\LiveStreamMessage();
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
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
                unset($data['timestamp']);
            }
            if (\array_key_exists('scope', $data) && $data['scope'] !== null) {
                $object->setScope($data['scope']);
                unset($data['scope']);
            }
            elseif (\array_key_exists('scope', $data) && $data['scope'] === null) {
                $object->setScope(null);
            }
            if (\array_key_exists('documentChange', $data) && $data['documentChange'] !== null) {
                $object->setDocumentChange($data['documentChange']);
                unset($data['documentChange']);
            }
            elseif (\array_key_exists('documentChange', $data) && $data['documentChange'] === null) {
                $object->setDocumentChange(null);
            }
            if (\array_key_exists('applicationEvent', $data) && $data['applicationEvent'] !== null) {
                $object->setApplicationEvent($data['applicationEvent']);
                unset($data['applicationEvent']);
            }
            elseif (\array_key_exists('applicationEvent', $data) && $data['applicationEvent'] === null) {
                $object->setApplicationEvent(null);
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
            if ($object->isInitialized('customerId') && null !== $object->getCustomerId()) {
                $data['customerId'] = $object->getCustomerId();
            }
            if ($object->isInitialized('customerAlias') && null !== $object->getCustomerAlias()) {
                $data['customerAlias'] = $object->getCustomerAlias();
            }
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['scope'] = $object->getScope();
            }
            if ($object->isInitialized('documentChange') && null !== $object->getDocumentChange()) {
                $data['documentChange'] = $object->getDocumentChange();
            }
            if ($object->isInitialized('applicationEvent') && null !== $object->getApplicationEvent()) {
                $data['applicationEvent'] = $object->getApplicationEvent();
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
            return ['PicturePark\\API\\Model\\LiveStreamMessage' => false];
        }
    }
}