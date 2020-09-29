<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PortfolioRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\PortfolioRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\PortfolioRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\PortfolioRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('isDefault', $data)) {
            $object->setIsDefault($data['isDefault']);
        }
        if (\array_key_exists('emails', $data)) {
            $object->setEmails($this->denormalizer->denormalize($data['emails'], 'CreditSafe\\API\\Model\\PortfolioRequestEmails', 'json', $context));
        }
        if (\array_key_exists('emailSubject', $data)) {
            $object->setEmailSubject($data['emailSubject']);
        }
        if (\array_key_exists('emailLanguage', $data)) {
            $object->setEmailLanguage($data['emailLanguage']);
        }
        if (\array_key_exists('frequency', $data)) {
            $object->setFrequency($data['frequency']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['name'] = $object->getName();
        $data['isDefault'] = $object->getIsDefault();
        if (null !== $object->getEmails()) {
            $data['emails'] = $this->normalizer->normalize($object->getEmails(), 'json', $context);
        }
        if (null !== $object->getEmailSubject()) {
            $data['emailSubject'] = $object->getEmailSubject();
        }
        if (null !== $object->getEmailLanguage()) {
            $data['emailLanguage'] = $object->getEmailLanguage();
        }
        if (null !== $object->getFrequency()) {
            $data['frequency'] = $object->getFrequency();
        }
        return $data;
    }
}