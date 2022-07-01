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
class ShortBranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ShortBranch';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ShortBranch';
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
        $object = new \Github\Model\ShortBranch();
        $validator = new \Github\Validator\ShortBranchValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('commit', $data)) {
            $object->setCommit($this->denormalizer->denormalize($data['commit'], 'Github\\Model\\ShortBranchCommit', 'json', $context));
        }
        if (\array_key_exists('protected', $data)) {
            $object->setProtected($data['protected']);
        }
        if (\array_key_exists('protection', $data)) {
            $object->setProtection($this->denormalizer->denormalize($data['protection'], 'Github\\Model\\BranchProtection', 'json', $context));
        }
        if (\array_key_exists('protection_url', $data)) {
            $object->setProtectionUrl($data['protection_url']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['name'] = $object->getName();
        $data['commit'] = $this->normalizer->normalize($object->getCommit(), 'json', $context);
        $data['protected'] = $object->getProtected();
        if (null !== $object->getProtection()) {
            $data['protection'] = $this->normalizer->normalize($object->getProtection(), 'json', $context);
        }
        if (null !== $object->getProtectionUrl()) {
            $data['protection_url'] = $object->getProtectionUrl();
        }
        $validator = new \Github\Validator\ShortBranchValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}