<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AppInstallationsInstallationIdAccessTokensPostBodyPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBodyPermissions';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBodyPermissions';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\AppInstallationsInstallationIdAccessTokensPostBodyPermissions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contents', $data)) {
            $object->setContents($data['contents']);
        }
        if (\array_key_exists('issues', $data)) {
            $object->setIssues($data['issues']);
        }
        if (\array_key_exists('deployments', $data)) {
            $object->setDeployments($data['deployments']);
        }
        if (\array_key_exists('single_file', $data)) {
            $object->setSingleFile($data['single_file']);
        }
        if (\array_key_exists('def_not_a_repo', $data)) {
            $object->setDefNotARepo($data['def_not_a_repo']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getContents()) {
            $data['contents'] = $object->getContents();
        }
        if (null !== $object->getIssues()) {
            $data['issues'] = $object->getIssues();
        }
        if (null !== $object->getDeployments()) {
            $data['deployments'] = $object->getDeployments();
        }
        if (null !== $object->getSingleFile()) {
            $data['single_file'] = $object->getSingleFile();
        }
        if (null !== $object->getDefNotARepo()) {
            $data['def_not_a_repo'] = $object->getDefNotARepo();
        }
        return $data;
    }
}