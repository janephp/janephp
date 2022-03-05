<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DiffEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\DiffEntry';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\DiffEntry';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\DiffEntry();
        $validator = new \Github\Validator\DiffEntryValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
        }
        if (\array_key_exists('filename', $data)) {
            $object->setFilename($data['filename']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('additions', $data)) {
            $object->setAdditions($data['additions']);
        }
        if (\array_key_exists('deletions', $data)) {
            $object->setDeletions($data['deletions']);
        }
        if (\array_key_exists('changes', $data)) {
            $object->setChanges($data['changes']);
        }
        if (\array_key_exists('blob_url', $data)) {
            $object->setBlobUrl($data['blob_url']);
        }
        if (\array_key_exists('raw_url', $data)) {
            $object->setRawUrl($data['raw_url']);
        }
        if (\array_key_exists('contents_url', $data)) {
            $object->setContentsUrl($data['contents_url']);
        }
        if (\array_key_exists('patch', $data)) {
            $object->setPatch($data['patch']);
        }
        if (\array_key_exists('previous_filename', $data)) {
            $object->setPreviousFilename($data['previous_filename']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['sha'] = $object->getSha();
        $data['filename'] = $object->getFilename();
        $data['status'] = $object->getStatus();
        $data['additions'] = $object->getAdditions();
        $data['deletions'] = $object->getDeletions();
        $data['changes'] = $object->getChanges();
        $data['blob_url'] = $object->getBlobUrl();
        $data['raw_url'] = $object->getRawUrl();
        $data['contents_url'] = $object->getContentsUrl();
        if (null !== $object->getPatch()) {
            $data['patch'] = $object->getPatch();
        }
        if (null !== $object->getPreviousFilename()) {
            $data['previous_filename'] = $object->getPreviousFilename();
        }
        $validator = new \Github\Validator\DiffEntryValidator();
        $validator->validate($data);
        return $data;
    }
}