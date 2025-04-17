<?php

namespace Jane\Component\OpenApi3\Tests\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Client\Runtime\Normalizer\CheckArray;
<<<<<<< HEAD
use Jane\Component\OpenApi3\Tests\Client\Runtime\Normalizer\ValidatorTrait;
||||||| 47d94227b
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
=======
use Jane\Component\OpenApi3\Tests\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
>>>>>>> origin/next
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
<<<<<<< HEAD
class SimpleResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
||||||| 47d94227b
class SimpleResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
=======
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SimpleResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
>>>>>>> origin/next
    {
<<<<<<< HEAD
        return $type === \Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
||||||| 47d94227b
        return $type === 'Jane\\Component\\OpenApi3\\Tests\\Client\\Model\\SimpleResponse';
    }
    public function supportsNormalization($data, $format = null, $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Client\\Model\\SimpleResponse';
    }
    public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
=======
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse::class;
>>>>>>> origin/next
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('foo', $data)) {
                $object->setFoo($data['foo']);
                unset($data['foo']);
            }
            if (\array_key_exists('baz', $data)) {
                $object->setBaz($data['baz']);
                unset($data['baz']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
<<<<<<< HEAD
        if (\array_key_exists('foo', $data)) {
            $object->setFoo($data['foo']);
            unset($data['foo']);
||||||| 47d94227b
        if (\array_key_exists('foo', $data)) {
            $object->setFoo($data['foo']);
=======
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('foo') && null !== $object->getFoo()) {
                $data['foo'] = $object->getFoo();
            }
            if ($object->isInitialized('baz') && null !== $object->getBaz()) {
                $data['baz'] = $object->getBaz();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
>>>>>>> origin/next
        }
<<<<<<< HEAD
        if (\array_key_exists('baz', $data)) {
            $object->setBaz($data['baz']);
            unset($data['baz']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
||||||| 47d94227b
        if (\array_key_exists('baz', $data)) {
            $object->setBaz($data['baz']);
=======
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse::class => false];
>>>>>>> origin/next
        }
    }
<<<<<<< HEAD
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
||||||| 47d94227b
    public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
=======
} else {
    class SimpleResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
>>>>>>> origin/next
    {
<<<<<<< HEAD
        $dataArray = [];
        if ($data->isInitialized('foo') && null !== $data->getFoo()) {
            $dataArray['foo'] = $data->getFoo();
||||||| 47d94227b
        $data = [];
        if (null !== $object->getFoo()) {
            $data['foo'] = $object->getFoo();
=======
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse::class;
>>>>>>> origin/next
        }
<<<<<<< HEAD
        if ($data->isInitialized('baz') && null !== $data->getBaz()) {
            $dataArray['baz'] = $data->getBaz();
||||||| 47d94227b
        if (null !== $object->getBaz()) {
            $data['baz'] = $object->getBaz();
=======
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse::class;
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
            $object = new \Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('foo', $data)) {
                $object->setFoo($data['foo']);
                unset($data['foo']);
            }
            if (\array_key_exists('baz', $data)) {
                $object->setBaz($data['baz']);
                unset($data['baz']);
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
            if ($object->isInitialized('foo') && null !== $object->getFoo()) {
                $data['foo'] = $object->getFoo();
            }
            if ($object->isInitialized('baz') && null !== $object->getBaz()) {
                $data['baz'] = $object->getBaz();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse::class => false];
>>>>>>> origin/next
        }
<<<<<<< HEAD
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Client\Model\SimpleResponse::class => false];
||||||| 47d94227b
        return $data;
=======
>>>>>>> origin/next
    }
}