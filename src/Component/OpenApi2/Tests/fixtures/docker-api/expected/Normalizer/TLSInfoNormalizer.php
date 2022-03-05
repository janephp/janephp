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
class TLSInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\Api\\Model\\TLSInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\TLSInfo';
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
        $object = new \Docker\Api\Model\TLSInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TrustRoot', $data)) {
            $object->setTrustRoot($data['TrustRoot']);
        }
        if (\array_key_exists('CertIssuerSubject', $data)) {
            $object->setCertIssuerSubject($data['CertIssuerSubject']);
        }
        if (\array_key_exists('CertIssuerPublicKey', $data)) {
            $object->setCertIssuerPublicKey($data['CertIssuerPublicKey']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTrustRoot()) {
            $data['TrustRoot'] = $object->getTrustRoot();
        }
        if (null !== $object->getCertIssuerSubject()) {
            $data['CertIssuerSubject'] = $object->getCertIssuerSubject();
        }
        if (null !== $object->getCertIssuerPublicKey()) {
            $data['CertIssuerPublicKey'] = $object->getCertIssuerPublicKey();
        }
        return $data;
    }
}