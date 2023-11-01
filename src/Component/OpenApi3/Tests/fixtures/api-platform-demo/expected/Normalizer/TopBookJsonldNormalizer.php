<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ApiPlatform\Demo\Runtime\Normalizer\CheckArray;
use ApiPlatform\Demo\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class TopBookJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\TopBookJsonld';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\TopBookJsonld';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ApiPlatform\Demo\Model\TopBookJsonld();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('@context', $data)) {
                $object->setContext($data['@context']);
                unset($data['@context']);
            }
            if (\array_key_exists('@id', $data)) {
                $object->setId($data['@id']);
                unset($data['@id']);
            }
            if (\array_key_exists('@type', $data)) {
                $object->setType($data['@type']);
                unset($data['@type']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId2($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('author', $data)) {
                $object->setAuthor($data['author']);
                unset($data['author']);
            }
            if (\array_key_exists('part', $data)) {
                $object->setPart($data['part']);
                unset($data['part']);
            }
            if (\array_key_exists('place', $data)) {
                $object->setPlace($data['place']);
                unset($data['place']);
            }
            if (\array_key_exists('borrowCount', $data)) {
                $object->setBorrowCount($data['borrowCount']);
                unset($data['borrowCount']);
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
            if ($object->isInitialized('id2') && null !== $object->getId2()) {
                $data['id'] = $object->getId2();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $object->getAuthor();
            }
            if ($object->isInitialized('part') && null !== $object->getPart()) {
                $data['part'] = $object->getPart();
            }
            if ($object->isInitialized('place') && null !== $object->getPlace()) {
                $data['place'] = $object->getPlace();
            }
            if ($object->isInitialized('borrowCount') && null !== $object->getBorrowCount()) {
                $data['borrowCount'] = $object->getBorrowCount();
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
            return ['ApiPlatform\\Demo\\Model\\TopBookJsonld' => false];
        }
    }
} else {
    class TopBookJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\TopBookJsonld';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\TopBookJsonld';
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
            $object = new \ApiPlatform\Demo\Model\TopBookJsonld();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('@context', $data)) {
                $object->setContext($data['@context']);
                unset($data['@context']);
            }
            if (\array_key_exists('@id', $data)) {
                $object->setId($data['@id']);
                unset($data['@id']);
            }
            if (\array_key_exists('@type', $data)) {
                $object->setType($data['@type']);
                unset($data['@type']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId2($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('author', $data)) {
                $object->setAuthor($data['author']);
                unset($data['author']);
            }
            if (\array_key_exists('part', $data)) {
                $object->setPart($data['part']);
                unset($data['part']);
            }
            if (\array_key_exists('place', $data)) {
                $object->setPlace($data['place']);
                unset($data['place']);
            }
            if (\array_key_exists('borrowCount', $data)) {
                $object->setBorrowCount($data['borrowCount']);
                unset($data['borrowCount']);
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
            if ($object->isInitialized('id2') && null !== $object->getId2()) {
                $data['id'] = $object->getId2();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $object->getAuthor();
            }
            if ($object->isInitialized('part') && null !== $object->getPart()) {
                $data['part'] = $object->getPart();
            }
            if ($object->isInitialized('place') && null !== $object->getPlace()) {
                $data['place'] = $object->getPlace();
            }
            if ($object->isInitialized('borrowCount') && null !== $object->getBorrowCount()) {
                $data['borrowCount'] = $object->getBorrowCount();
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
            return ['ApiPlatform\\Demo\\Model\\TopBookJsonld' => false];
        }
    }
}