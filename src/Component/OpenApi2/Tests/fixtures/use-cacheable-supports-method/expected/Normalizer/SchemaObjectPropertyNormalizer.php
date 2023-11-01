<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SchemaObjectPropertyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\SchemaObjectProperty';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\SchemaObjectProperty';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi2\Tests\Expected\Model\SchemaObjectProperty();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('stringProperty', $data)) {
                $object->setStringProperty($data['stringProperty']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('stringProperty') && null !== $object->getStringProperty()) {
                $data['stringProperty'] = $object->getStringProperty();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\SchemaObjectProperty' => true];
        }
        public function hasCacheableSupportsMethod() : bool
        {
            return true;
        }
    }
} else {
    class SchemaObjectPropertyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\SchemaObjectProperty';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\SchemaObjectProperty';
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
            $object = new \Jane\Component\OpenApi2\Tests\Expected\Model\SchemaObjectProperty();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('stringProperty', $data)) {
                $object->setStringProperty($data['stringProperty']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('stringProperty') && null !== $object->getStringProperty()) {
                $data['stringProperty'] = $object->getStringProperty();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\SchemaObjectProperty' => true];
        }
        public function hasCacheableSupportsMethod() : bool
        {
            return true;
        }
    }
}