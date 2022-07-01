<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\Service';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\Service';
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
        $object = new \Docker\Api\Model\Service();
        $validator = new \Docker\Api\Validator\ServiceValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
        }
        if (\array_key_exists('Version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['Version'], 'Docker\\Api\\Model\\ObjectVersion', 'json', $context));
        }
        if (\array_key_exists('CreatedAt', $data)) {
            $object->setCreatedAt($data['CreatedAt']);
        }
        if (\array_key_exists('UpdatedAt', $data)) {
            $object->setUpdatedAt($data['UpdatedAt']);
        }
        if (\array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Docker\\Api\\Model\\ServiceSpec', 'json', $context));
        }
        if (\array_key_exists('Endpoint', $data)) {
            $object->setEndpoint($this->denormalizer->denormalize($data['Endpoint'], 'Docker\\Api\\Model\\ServiceEndpoint', 'json', $context));
        }
        if (\array_key_exists('UpdateStatus', $data)) {
            $object->setUpdateStatus($this->denormalizer->denormalize($data['UpdateStatus'], 'Docker\\Api\\Model\\ServiceUpdateStatus', 'json', $context));
        }
        if (\array_key_exists('ServiceStatus', $data)) {
            $object->setServiceStatus($this->denormalizer->denormalize($data['ServiceStatus'], 'Docker\\Api\\Model\\ServiceServiceStatus', 'json', $context));
        }
        if (\array_key_exists('JobStatus', $data)) {
            $object->setJobStatus($this->denormalizer->denormalize($data['JobStatus'], 'Docker\\Api\\Model\\ServiceJobStatus', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if (null !== $object->getVersion()) {
            $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data['CreatedAt'] = $object->getCreatedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['UpdatedAt'] = $object->getUpdatedAt();
        }
        if (null !== $object->getSpec()) {
            $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if (null !== $object->getEndpoint()) {
            $data['Endpoint'] = $this->normalizer->normalize($object->getEndpoint(), 'json', $context);
        }
        if (null !== $object->getUpdateStatus()) {
            $data['UpdateStatus'] = $this->normalizer->normalize($object->getUpdateStatus(), 'json', $context);
        }
        if (null !== $object->getServiceStatus()) {
            $data['ServiceStatus'] = $this->normalizer->normalize($object->getServiceStatus(), 'json', $context);
        }
        if (null !== $object->getJobStatus()) {
            $data['JobStatus'] = $this->normalizer->normalize($object->getJobStatus(), 'json', $context);
        }
        $validator = new \Docker\Api\Validator\ServiceValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}