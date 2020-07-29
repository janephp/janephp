<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReposOwnerRepoImportPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ReposOwnerRepoImportPutBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoImportPutBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoImportPutBody();
        if (\array_key_exists('vcs_url', $data)) {
            $object->setVcsUrl($data['vcs_url']);
        }
        if (\array_key_exists('vcs', $data)) {
            $object->setVcs($data['vcs']);
        }
        if (\array_key_exists('vcs_username', $data)) {
            $object->setVcsUsername($data['vcs_username']);
        }
        if (\array_key_exists('vcs_password', $data)) {
            $object->setVcsPassword($data['vcs_password']);
        }
        if (\array_key_exists('tfvc_project', $data)) {
            $object->setTfvcProject($data['tfvc_project']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getVcsUrl()) {
            $data['vcs_url'] = $object->getVcsUrl();
        }
        if (null !== $object->getVcs()) {
            $data['vcs'] = $object->getVcs();
        }
        if (null !== $object->getVcsUsername()) {
            $data['vcs_username'] = $object->getVcsUsername();
        }
        if (null !== $object->getVcsPassword()) {
            $data['vcs_password'] = $object->getVcsPassword();
        }
        if (null !== $object->getTfvcProject()) {
            $data['tfvc_project'] = $object->getTfvcProject();
        }
        return $data;
    }
}