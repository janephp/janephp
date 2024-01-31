<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class CompactTweetFieldsAttachmentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFieldsAttachments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('media_keys', $data)) {
                $values = [];
                foreach ($data['media_keys'] as $value) {
                    $values[] = $value;
                }
                $object->setMediaKeys($values);
                unset($data['media_keys']);
            }
            if (\array_key_exists('poll_ids', $data)) {
                $values_1 = [];
                foreach ($data['poll_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setPollIds($values_1);
                unset($data['poll_ids']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('mediaKeys') && null !== $object->getMediaKeys()) {
                $values = [];
                foreach ($object->getMediaKeys() as $value) {
                    $values[] = $value;
                }
                $data['media_keys'] = $values;
            }
            if ($object->isInitialized('pollIds') && null !== $object->getPollIds()) {
                $values_1 = [];
                foreach ($object->getPollIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['poll_ids'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments' => false];
        }
    }
} else {
    class CompactTweetFieldsAttachmentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments';
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
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFieldsAttachments();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('media_keys', $data)) {
                $values = [];
                foreach ($data['media_keys'] as $value) {
                    $values[] = $value;
                }
                $object->setMediaKeys($values);
                unset($data['media_keys']);
            }
            if (\array_key_exists('poll_ids', $data)) {
                $values_1 = [];
                foreach ($data['poll_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setPollIds($values_1);
                unset($data['poll_ids']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('mediaKeys') && null !== $object->getMediaKeys()) {
                $values = [];
                foreach ($object->getMediaKeys() as $value) {
                    $values[] = $value;
                }
                $data['media_keys'] = $values;
            }
            if ($object->isInitialized('pollIds') && null !== $object->getPollIds()) {
                $values_1 = [];
                foreach ($object->getPollIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['poll_ids'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments' => false];
        }
    }
}