<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProjectsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\Projects();
        if (\array_key_exists('projects', $data)) {
            $values = array();
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProjects()) {
            $values = array();
            foreach ($object->getProjects() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['projects'] = $values;
        }
        if (null !== $object->getPerPage()) {
            $data['per_page'] = $object->getPerPage();
        }
        if (null !== $object->getTotalPages()) {
            $data['total_pages'] = $object->getTotalPages();
        }
        if (null !== $object->getTotalEntries()) {
            $data['total_entries'] = $object->getTotalEntries();
        }
        if (null !== $object->getNextPage()) {
            $data['next_page'] = $object->getNextPage();
        }
        if (null !== $object->getPreviousPage()) {
            $data['previous_page'] = $object->getPreviousPage();
        }
        if (null !== $object->getPage()) {
            $data['page'] = $object->getPage();
        }
        if (null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}