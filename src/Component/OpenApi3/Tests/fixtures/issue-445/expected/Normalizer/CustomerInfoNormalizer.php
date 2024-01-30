<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CustomerInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\CustomerInfo';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\CustomerInfo';
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
        $object = new \PicturePark\API\Model\CustomerInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('customerAlias', $data)) {
            $object->setCustomerAlias($data['customerAlias']);
        }
        if (\array_key_exists('identityServerUrl', $data)) {
            $object->setIdentityServerUrl($data['identityServerUrl']);
        }
        if (\array_key_exists('apiUrl', $data)) {
            $object->setApiUrl($data['apiUrl']);
        }
        if (\array_key_exists('enableQueryDetails', $data)) {
            $object->setEnableQueryDetails($data['enableQueryDetails']);
        }
        if (\array_key_exists('languageConfiguration', $data)) {
            $object->setLanguageConfiguration($data['languageConfiguration']);
        }
        if (\array_key_exists('languages', $data)) {
            $values = array();
            foreach ($data['languages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\Language', 'json', $context);
            }
            $object->setLanguages($values);
        }
        if (\array_key_exists('outputFormats', $data)) {
            $values_1 = array();
            foreach ($data['outputFormats'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\OutputFormatInfo', 'json', $context);
            }
            $object->setOutputFormats($values_1);
        }
        if (\array_key_exists('boostValues', $data)) {
            $values_2 = array();
            foreach ($data['boostValues'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBoostValues($values_2);
        }
        if (\array_key_exists('apps', $data) && $data['apps'] !== null) {
            $values_3 = array();
            foreach ($data['apps'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\CustomerApp', 'json', $context);
            }
            $object->setApps($values_3);
        }
        elseif (\array_key_exists('apps', $data) && $data['apps'] === null) {
            $object->setApps(null);
        }
        if (\array_key_exists('modificationDate', $data)) {
            $object->setModificationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modificationDate']));
        }
        if (\array_key_exists('baseUrl', $data)) {
            $object->setBaseUrl($data['baseUrl']);
        }
        if (\array_key_exists('logosUrl', $data)) {
            $object->setLogosUrl($data['logosUrl']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['customerId'] = $object->getCustomerId();
        $data['name'] = $object->getName();
        $data['customerAlias'] = $object->getCustomerAlias();
        $data['identityServerUrl'] = $object->getIdentityServerUrl();
        $data['apiUrl'] = $object->getApiUrl();
        $data['enableQueryDetails'] = $object->getEnableQueryDetails();
        $data['languageConfiguration'] = $object->getLanguageConfiguration();
        $values = array();
        foreach ($object->getLanguages() as $value) {
            $values[] = $value == null ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['languages'] = $values;
        $values_1 = array();
        foreach ($object->getOutputFormats() as $value_1) {
            $values_1[] = $value_1 == null ? null : new \ArrayObject($this->normalizer->normalize($value_1, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['outputFormats'] = $values_1;
        $values_2 = array();
        foreach ($object->getBoostValues() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['boostValues'] = $values_2;
        if ($object->isInitialized('apps') && null !== $object->getApps()) {
            $values_3 = array();
            foreach ($object->getApps() as $value_3) {
                $values_3[] = $value_3 == null ? null : new \ArrayObject($this->normalizer->normalize($value_3, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['apps'] = $values_3;
        }
        $data['modificationDate'] = $object->getModificationDate()->format('Y-m-d\\TH:i:sP');
        $data['baseUrl'] = $object->getBaseUrl();
        $data['logosUrl'] = $object->getLogosUrl();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\CustomerInfo' => false);
    }
}