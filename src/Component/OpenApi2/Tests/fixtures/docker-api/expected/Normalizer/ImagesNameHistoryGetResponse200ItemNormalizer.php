<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ImagesNameHistoryGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\ImagesNameHistoryGetResponse200Item';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ImagesNameHistoryGetResponse200Item';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\ImagesNameHistoryGetResponse200Item();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImagesNameHistoryGetResponse200ItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
            }
            if (\array_key_exists('CreatedBy', $data)) {
                $object->setCreatedBy($data['CreatedBy']);
            }
            if (\array_key_exists('Tags', $data)) {
                $values = [];
                foreach ($data['Tags'] as $value) {
                    $values[] = $value;
                }
                $object->setTags($values);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('Comment', $data)) {
                $object->setComment($data['Comment']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Id'] = $object->getId();
            $data['Created'] = $object->getCreated();
            $data['CreatedBy'] = $object->getCreatedBy();
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data['Tags'] = $values;
            $data['Size'] = $object->getSize();
            $data['Comment'] = $object->getComment();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImagesNameHistoryGetResponse200ItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\ImagesNameHistoryGetResponse200Item' => false];
        }
    }
} else {
    class ImagesNameHistoryGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\ImagesNameHistoryGetResponse200Item';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ImagesNameHistoryGetResponse200Item';
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
            $object = new \Docker\Api\Model\ImagesNameHistoryGetResponse200Item();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImagesNameHistoryGetResponse200ItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
            }
            if (\array_key_exists('CreatedBy', $data)) {
                $object->setCreatedBy($data['CreatedBy']);
            }
            if (\array_key_exists('Tags', $data)) {
                $values = [];
                foreach ($data['Tags'] as $value) {
                    $values[] = $value;
                }
                $object->setTags($values);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('Comment', $data)) {
                $object->setComment($data['Comment']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Id'] = $object->getId();
            $data['Created'] = $object->getCreated();
            $data['CreatedBy'] = $object->getCreatedBy();
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data['Tags'] = $values;
            $data['Size'] = $object->getSize();
            $data['Comment'] = $object->getComment();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImagesNameHistoryGetResponse200ItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\ImagesNameHistoryGetResponse200Item' => false];
        }
    }
}