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
class IntegrationPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\IntegrationPermissions';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\IntegrationPermissions';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\IntegrationPermissions();
        if (\array_key_exists('issues', $data)) {
            $object->setIssues($data['issues']);
            unset($data['issues']);
        }
        if (\array_key_exists('checks', $data)) {
            $object->setChecks($data['checks']);
            unset($data['checks']);
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($data['metadata']);
            unset($data['metadata']);
        }
        if (\array_key_exists('contents', $data)) {
            $object->setContents($data['contents']);
            unset($data['contents']);
        }
        if (\array_key_exists('deployments', $data)) {
            $object->setDeployments($data['deployments']);
            unset($data['deployments']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIssues()) {
            $data['issues'] = $object->getIssues();
        }
        if (null !== $object->getChecks()) {
            $data['checks'] = $object->getChecks();
        }
        if (null !== $object->getMetadata()) {
            $data['metadata'] = $object->getMetadata();
        }
        if (null !== $object->getContents()) {
            $data['contents'] = $object->getContents();
        }
        if (null !== $object->getDeployments()) {
            $data['deployments'] = $object->getDeployments();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}