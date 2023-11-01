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
    class LiveStreamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\LiveStream';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LiveStream';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\LiveStream();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('document', $data) && $data['document'] !== null) {
                $object->setDocument($data['document']);
            }
            elseif (\array_key_exists('document', $data) && $data['document'] === null) {
                $object->setDocument(null);
            }
            if (\array_key_exists('scopeType', $data) && $data['scopeType'] !== null) {
                $object->setScopeType($data['scopeType']);
            }
            elseif (\array_key_exists('scopeType', $data) && $data['scopeType'] === null) {
                $object->setScopeType(null);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
            }
            if (\array_key_exists('traceJob', $data) && $data['traceJob'] !== null) {
                $object->setTraceJob($data['traceJob']);
            }
            elseif (\array_key_exists('traceJob', $data) && $data['traceJob'] === null) {
                $object->setTraceJob(null);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('document') && null !== $object->getDocument()) {
                $data['document'] = $object->getDocument();
            }
            if ($object->isInitialized('scopeType') && null !== $object->getScopeType()) {
                $data['scopeType'] = $object->getScopeType();
            }
            $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
            if ($object->isInitialized('traceJob') && null !== $object->getTraceJob()) {
                $data['traceJob'] = $object->getTraceJob();
            }
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\LiveStream' => false];
        }
    }
} else {
    class LiveStreamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\LiveStream';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LiveStream';
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
            $object = new \PicturePark\API\Model\LiveStream();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('document', $data) && $data['document'] !== null) {
                $object->setDocument($data['document']);
            }
            elseif (\array_key_exists('document', $data) && $data['document'] === null) {
                $object->setDocument(null);
            }
            if (\array_key_exists('scopeType', $data) && $data['scopeType'] !== null) {
                $object->setScopeType($data['scopeType']);
            }
            elseif (\array_key_exists('scopeType', $data) && $data['scopeType'] === null) {
                $object->setScopeType(null);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
            }
            if (\array_key_exists('traceJob', $data) && $data['traceJob'] !== null) {
                $object->setTraceJob($data['traceJob']);
            }
            elseif (\array_key_exists('traceJob', $data) && $data['traceJob'] === null) {
                $object->setTraceJob(null);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('document') && null !== $object->getDocument()) {
                $data['document'] = $object->getDocument();
            }
            if ($object->isInitialized('scopeType') && null !== $object->getScopeType()) {
                $data['scopeType'] = $object->getScopeType();
            }
            $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
            if ($object->isInitialized('traceJob') && null !== $object->getTraceJob()) {
                $data['traceJob'] = $object->getTraceJob();
            }
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\LiveStream' => false];
        }
    }
}