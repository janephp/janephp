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
    class SearchReindexCompletedEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SearchReindexCompletedEvent';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SearchReindexCompletedEvent';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\SearchReindexCompletedEvent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
                unset($data['timestamp']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('searchIndex', $data)) {
                $object->setSearchIndex($data['searchIndex']);
                unset($data['searchIndex']);
            }
            if (\array_key_exists('items', $data)) {
                $object->setItems($data['items']);
                unset($data['items']);
            }
            if (\array_key_exists('duration', $data)) {
                $object->setDuration($data['duration']);
                unset($data['duration']);
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
            $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('searchIndex') && null !== $object->getSearchIndex()) {
                $data['searchIndex'] = $object->getSearchIndex();
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $data['items'] = $object->getItems();
            }
            if ($object->isInitialized('duration') && null !== $object->getDuration()) {
                $data['duration'] = $object->getDuration();
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
            return ['PicturePark\\API\\Model\\SearchReindexCompletedEvent' => false];
        }
    }
} else {
    class SearchReindexCompletedEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SearchReindexCompletedEvent';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SearchReindexCompletedEvent';
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
            $object = new \PicturePark\API\Model\SearchReindexCompletedEvent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
                unset($data['timestamp']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('searchIndex', $data)) {
                $object->setSearchIndex($data['searchIndex']);
                unset($data['searchIndex']);
            }
            if (\array_key_exists('items', $data)) {
                $object->setItems($data['items']);
                unset($data['items']);
            }
            if (\array_key_exists('duration', $data)) {
                $object->setDuration($data['duration']);
                unset($data['duration']);
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
            $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('searchIndex') && null !== $object->getSearchIndex()) {
                $data['searchIndex'] = $object->getSearchIndex();
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $data['items'] = $object->getItems();
            }
            if ($object->isInitialized('duration') && null !== $object->getDuration()) {
                $data['duration'] = $object->getDuration();
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
            return ['PicturePark\\API\\Model\\SearchReindexCompletedEvent' => false];
        }
    }
}