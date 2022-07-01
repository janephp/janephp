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
class BranchWithProtectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\BranchWithProtection';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\BranchWithProtection';
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
        $object = new \Github\Model\BranchWithProtection();
        $validator = new \Github\Validator\BranchWithProtectionValidator();
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
            $object->setCommit($this->denormalizer->denormalize($data['commit'], 'Github\\Model\\Commit', 'json', $context));
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\BranchWithProtectionLinks', 'json', $context));
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
        if (\array_key_exists('pattern', $data)) {
            $object->setPattern($data['pattern']);
        }
        if (\array_key_exists('required_approving_review_count', $data)) {
            $object->setRequiredApprovingReviewCount($data['required_approving_review_count']);
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
        $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        $data['protected'] = $object->getProtected();
        $data['protection'] = $this->normalizer->normalize($object->getProtection(), 'json', $context);
        $data['protection_url'] = $object->getProtectionUrl();
        if (null !== $object->getPattern()) {
            $data['pattern'] = $object->getPattern();
        }
        if (null !== $object->getRequiredApprovingReviewCount()) {
            $data['required_approving_review_count'] = $object->getRequiredApprovingReviewCount();
        }
        $validator = new \Github\Validator\BranchWithProtectionValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}