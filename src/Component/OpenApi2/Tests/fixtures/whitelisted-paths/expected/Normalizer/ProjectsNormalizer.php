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
    class ProjectsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\OpenApi2\Tests\Expected\Model\Projects();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('projects', $data)) {
                $values = [];
                foreach ($data['projects'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Project', 'json', $context);
                }
                $object->setProjects($values);
            }
            if (\array_key_exists('per_page', $data)) {
                $object->setPerPage($data['per_page']);
            }
            if (\array_key_exists('total_pages', $data)) {
                $object->setTotalPages($data['total_pages']);
            }
            if (\array_key_exists('total_entries', $data)) {
                $object->setTotalEntries($data['total_entries']);
            }
            if (\array_key_exists('next_page', $data)) {
                $object->setNextPage($data['next_page']);
            }
            if (\array_key_exists('previous_page', $data)) {
                $object->setPreviousPage($data['previous_page']);
            }
            if (\array_key_exists('page', $data)) {
                $object->setPage($data['page']);
            }
            if (\array_key_exists('links', $data)) {
                $object->setLinks($this->denormalizer->denormalize($data['links'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks', 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getProjects() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['projects'] = $values;
            $data['per_page'] = $object->getPerPage();
            $data['total_pages'] = $object->getTotalPages();
            $data['total_entries'] = $object->getTotalEntries();
            $data['next_page'] = $object->getNextPage();
            $data['previous_page'] = $object->getPreviousPage();
            $data['page'] = $object->getPage();
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects' => false];
        }
    }
} else {
    class ProjectsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects';
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
            $object = new \Jane\OpenApi2\Tests\Expected\Model\Projects();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('projects', $data)) {
                $values = [];
                foreach ($data['projects'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Project', 'json', $context);
                }
                $object->setProjects($values);
            }
            if (\array_key_exists('per_page', $data)) {
                $object->setPerPage($data['per_page']);
            }
            if (\array_key_exists('total_pages', $data)) {
                $object->setTotalPages($data['total_pages']);
            }
            if (\array_key_exists('total_entries', $data)) {
                $object->setTotalEntries($data['total_entries']);
            }
            if (\array_key_exists('next_page', $data)) {
                $object->setNextPage($data['next_page']);
            }
            if (\array_key_exists('previous_page', $data)) {
                $object->setPreviousPage($data['previous_page']);
            }
            if (\array_key_exists('page', $data)) {
                $object->setPage($data['page']);
            }
            if (\array_key_exists('links', $data)) {
                $object->setLinks($this->denormalizer->denormalize($data['links'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks', 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getProjects() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['projects'] = $values;
            $data['per_page'] = $object->getPerPage();
            $data['total_pages'] = $object->getTotalPages();
            $data['total_entries'] = $object->getTotalEntries();
            $data['next_page'] = $object->getNextPage();
            $data['previous_page'] = $object->getPreviousPage();
            $data['page'] = $object->getPage();
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects' => false];
        }
    }
}