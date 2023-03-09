<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CommitFilesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\CommitFilesItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CommitFilesItem';
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
        $object = new \Github\Model\CommitFilesItem();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CommitFilesItemConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('filename', $data)) {
            $object->setFilename($data['filename']);
            unset($data['filename']);
        }
        if (\array_key_exists('additions', $data)) {
            $object->setAdditions($data['additions']);
            unset($data['additions']);
        }
        if (\array_key_exists('deletions', $data)) {
            $object->setDeletions($data['deletions']);
            unset($data['deletions']);
        }
        if (\array_key_exists('changes', $data)) {
            $object->setChanges($data['changes']);
            unset($data['changes']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('raw_url', $data)) {
            $object->setRawUrl($data['raw_url']);
            unset($data['raw_url']);
        }
        if (\array_key_exists('blob_url', $data)) {
            $object->setBlobUrl($data['blob_url']);
            unset($data['blob_url']);
        }
        if (\array_key_exists('patch', $data)) {
            $object->setPatch($data['patch']);
            unset($data['patch']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
            unset($data['sha']);
        }
        if (\array_key_exists('contents_url', $data)) {
            $object->setContentsUrl($data['contents_url']);
            unset($data['contents_url']);
        }
        if (\array_key_exists('previous_filename', $data)) {
            $object->setPreviousFilename($data['previous_filename']);
            unset($data['previous_filename']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('filename') && null !== $object->getFilename()) {
            $data['filename'] = $object->getFilename();
        }
        if ($object->isInitialized('additions') && null !== $object->getAdditions()) {
            $data['additions'] = $object->getAdditions();
        }
        if ($object->isInitialized('deletions') && null !== $object->getDeletions()) {
            $data['deletions'] = $object->getDeletions();
        }
        if ($object->isInitialized('changes') && null !== $object->getChanges()) {
            $data['changes'] = $object->getChanges();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('rawUrl') && null !== $object->getRawUrl()) {
            $data['raw_url'] = $object->getRawUrl();
        }
        if ($object->isInitialized('blobUrl') && null !== $object->getBlobUrl()) {
            $data['blob_url'] = $object->getBlobUrl();
        }
        if ($object->isInitialized('patch') && null !== $object->getPatch()) {
            $data['patch'] = $object->getPatch();
        }
        if ($object->isInitialized('sha') && null !== $object->getSha()) {
            $data['sha'] = $object->getSha();
        }
        if ($object->isInitialized('contentsUrl') && null !== $object->getContentsUrl()) {
            $data['contents_url'] = $object->getContentsUrl();
        }
        if ($object->isInitialized('previousFilename') && null !== $object->getPreviousFilename()) {
            $data['previous_filename'] = $object->getPreviousFilename();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CommitFilesItemConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}