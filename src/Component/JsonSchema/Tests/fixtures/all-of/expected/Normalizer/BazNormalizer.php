<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BazNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Baz';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Baz;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Baz();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('foo', $data)) {
                $object->setFoo($data['foo']);
            }
            if (\array_key_exists('Bar', $data)) {
                $object->setBar($this->denormalizer->denormalize($data['Bar'], 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Bar', 'json', $context));
            }
            if (\array_key_exists('Baz', $data)) {
                $object->setBaz($this->denormalizer->denormalize($data['Baz'], 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\BazBaz', 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('foo') && null !== $object->getFoo()) {
                $data['foo'] = $object->getFoo();
            }
            if ($object->isInitialized('bar') && null !== $object->getBar()) {
                $data['Bar'] = $this->normalizer->normalize($object->getBar(), 'json', $context);
            }
            if ($object->isInitialized('baz') && null !== $object->getBaz()) {
                $data['Baz'] = $this->normalizer->normalize($object->getBaz(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Baz' => false];
        }
    }
} else {
    class BazNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Baz';
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Baz;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Baz();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('foo', $data)) {
                $object->setFoo($data['foo']);
            }
            if (\array_key_exists('Bar', $data)) {
                $object->setBar($this->denormalizer->denormalize($data['Bar'], 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Bar', 'json', $context));
            }
            if (\array_key_exists('Baz', $data)) {
                $object->setBaz($this->denormalizer->denormalize($data['Baz'], 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\BazBaz', 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('foo') && null !== $object->getFoo()) {
                $data['foo'] = $object->getFoo();
            }
            if ($object->isInitialized('bar') && null !== $object->getBar()) {
                $data['Bar'] = $this->normalizer->normalize($object->getBar(), 'json', $context);
            }
            if ($object->isInitialized('baz') && null !== $object->getBaz()) {
                $data['Baz'] = $this->normalizer->normalize($object->getBaz(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Baz' => false];
        }
    }
}