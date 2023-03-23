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
class ApiOverviewSshKeyFingerprintsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\ApiOverviewSshKeyFingerprints';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ApiOverviewSshKeyFingerprints';
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
        $object = new \Github\Model\ApiOverviewSshKeyFingerprints();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ApiOverviewSshKeyFingerprintsConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('MD5_RSA', $data)) {
            $object->setMD5RSA($data['MD5_RSA']);
            unset($data['MD5_RSA']);
        }
        if (\array_key_exists('MD5_DSA', $data)) {
            $object->setMD5DSA($data['MD5_DSA']);
            unset($data['MD5_DSA']);
        }
        if (\array_key_exists('SHA256_RSA', $data)) {
            $object->setSHA256RSA($data['SHA256_RSA']);
            unset($data['SHA256_RSA']);
        }
        if (\array_key_exists('SHA256_DSA', $data)) {
            $object->setSHA256DSA($data['SHA256_DSA']);
            unset($data['SHA256_DSA']);
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
        if ($object->isInitialized('mD5RSA') && null !== $object->getMD5RSA()) {
            $data['MD5_RSA'] = $object->getMD5RSA();
        }
        if ($object->isInitialized('mD5DSA') && null !== $object->getMD5DSA()) {
            $data['MD5_DSA'] = $object->getMD5DSA();
        }
        if ($object->isInitialized('sHA256RSA') && null !== $object->getSHA256RSA()) {
            $data['SHA256_RSA'] = $object->getSHA256RSA();
        }
        if ($object->isInitialized('sHA256DSA') && null !== $object->getSHA256DSA()) {
            $data['SHA256_DSA'] = $object->getSHA256DSA();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ApiOverviewSshKeyFingerprintsConstraint());
        }
        return $data;
    }
}
