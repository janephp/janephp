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
class PortfolioRequestEmailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\PortfolioRequestEmails';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\PortfolioRequestEmails';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\PortfolioRequestEmails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
        }
        if (\array_key_exists('emailAddress', $data)) {
            $object->setEmailAddress($data['emailAddress']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        if (null !== $object->getEmailAddress()) {
            $data['emailAddress'] = $object->getEmailAddress();
        }
        return $data;
    }
}