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
    class FooBarNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FooBar';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FooBar';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\FooBar();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('what', $data)) {
                $value = $data['what'];
                if (is_array($data['what']) and (isset($data['what']['type']) and $data['what']['type'] == '#/components/schemas/Foo')) {
                    $value = $this->denormalizer->denormalize($data['what'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Foo', 'json', $context);
                } elseif (is_array($data['what']) and (isset($data['what']['type']) and $data['what']['type'] == '#/components/schemas/Bar')) {
                    $value = $this->denormalizer->denormalize($data['what'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Bar', 'json', $context);
                }
                $object->setWhat($value);
                unset($data['what']);
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
            if ($object->isInitialized('what') && null !== $object->getWhat()) {
                $value = $object->getWhat();
                if (is_object($object->getWhat())) {
                    $value = $this->normalizer->normalize($object->getWhat(), 'json', $context);
                } elseif (is_object($object->getWhat())) {
                    $value = $this->normalizer->normalize($object->getWhat(), 'json', $context);
                }
                $data['what'] = $value;
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
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FooBar' => false];
        }
    }
} else {
    class FooBarNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FooBar';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FooBar';
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
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\FooBar();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('what', $data)) {
                $value = $data['what'];
                if (is_array($data['what']) and (isset($data['what']['type']) and $data['what']['type'] == '#/components/schemas/Foo')) {
                    $value = $this->denormalizer->denormalize($data['what'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Foo', 'json', $context);
                } elseif (is_array($data['what']) and (isset($data['what']['type']) and $data['what']['type'] == '#/components/schemas/Bar')) {
                    $value = $this->denormalizer->denormalize($data['what'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Bar', 'json', $context);
                }
                $object->setWhat($value);
                unset($data['what']);
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
            if ($object->isInitialized('what') && null !== $object->getWhat()) {
                $value = $object->getWhat();
                if (is_object($object->getWhat())) {
                    $value = $this->normalizer->normalize($object->getWhat(), 'json', $context);
                } elseif (is_object($object->getWhat())) {
                    $value = $this->normalizer->normalize($object->getWhat(), 'json', $context);
                }
                $data['what'] = $value;
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
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FooBar' => false];
        }
    }
}