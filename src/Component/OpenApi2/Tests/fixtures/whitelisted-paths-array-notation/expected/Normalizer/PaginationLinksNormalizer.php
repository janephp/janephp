<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class PaginationLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\OpenApi2\Tests\Expected\Model\PaginationLinks();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('first', $data)) {
                $object->setFirst($data['first']);
            }
            if (\array_key_exists('last', $data)) {
                $object->setLast($data['last']);
            }
            if (\array_key_exists('previous', $data)) {
                $object->setPrevious($data['previous']);
            }
            if (\array_key_exists('next', $data)) {
                $object->setNext($data['next']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['first'] = $object->getFirst();
            $data['last'] = $object->getLast();
            if ($object->isInitialized('previous') && null !== $object->getPrevious()) {
                $data['previous'] = $object->getPrevious();
            }
            if ($object->isInitialized('next') && null !== $object->getNext()) {
                $data['next'] = $object->getNext();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks' => false];
        }
    }
} else {
    class PaginationLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks';
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
            $object = new \Jane\OpenApi2\Tests\Expected\Model\PaginationLinks();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('first', $data)) {
                $object->setFirst($data['first']);
            }
            if (\array_key_exists('last', $data)) {
                $object->setLast($data['last']);
            }
            if (\array_key_exists('previous', $data)) {
                $object->setPrevious($data['previous']);
            }
            if (\array_key_exists('next', $data)) {
                $object->setNext($data['next']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['first'] = $object->getFirst();
            $data['last'] = $object->getLast();
            if ($object->isInitialized('previous') && null !== $object->getPrevious()) {
                $data['previous'] = $object->getPrevious();
            }
            if ($object->isInitialized('next') && null !== $object->getNext()) {
                $data['next'] = $object->getNext();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks' => false];
        }
    }
}