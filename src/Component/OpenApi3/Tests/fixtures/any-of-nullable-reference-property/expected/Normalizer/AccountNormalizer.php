<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Account';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Account';
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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\Account();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('firstname', $data)) {
            $object->setFirstname($data['firstname']);
            unset($data['firstname']);
        }
        if (\array_key_exists('lastname', $data)) {
            $object->setLastname($data['lastname']);
            unset($data['lastname']);
        }
        if (\array_key_exists('countryOfBirth', $data) && $data['countryOfBirth'] !== null) {
            $value = $data['countryOfBirth'];
            if (is_array($data['countryOfBirth'])) {
                $value = $this->denormalizer->denormalize($data['countryOfBirth'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Country', 'json', $context);
            }
            $object->setCountryOfBirth($value);
            unset($data['countryOfBirth']);
        }
        elseif (\array_key_exists('countryOfBirth', $data) && $data['countryOfBirth'] === null) {
            $object->setCountryOfBirth(null);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($this->denormalizer->denormalize($data['country'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Country', 'json', $context));
            unset($data['country']);
        }
        if (\array_key_exists('nationality', $data) && $data['nationality'] !== null) {
            $value_1 = $data['nationality'];
            if (is_array($data['nationality'])) {
                $value_1 = $this->denormalizer->denormalize($data['nationality'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Country', 'json', $context);
            } elseif (is_array($data['nationality']) && $this->isOnlyNumericKeys($data['nationality'])) {
                $values = array();
                foreach ($data['nationality'] as $value_2) {
                    $values[] = $this->denormalizer->denormalize($value_2, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Country', 'json', $context);
                }
                $value_1 = $values;
            }
            $object->setNationality($value_1);
            unset($data['nationality']);
        }
        elseif (\array_key_exists('nationality', $data) && $data['nationality'] === null) {
            $object->setNationality(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($object->isInitialized('firstname') && null !== $object->getFirstname()) {
            $data['firstname'] = $object->getFirstname();
        }
        if ($object->isInitialized('lastname') && null !== $object->getLastname()) {
            $data['lastname'] = $object->getLastname();
        }
        if ($object->isInitialized('countryOfBirth') && null !== $object->getCountryOfBirth()) {
            $value = $object->getCountryOfBirth();
            if (is_object($object->getCountryOfBirth())) {
                $value = $this->normalizer->normalize($object->getCountryOfBirth(), 'json', $context);
            }
            $data['countryOfBirth'] = $value;
        }
        if ($object->isInitialized('country') && null !== $object->getCountry()) {
            $data['country'] = $this->normalizer->normalize($object->getCountry(), 'json', $context);
        }
        if ($object->isInitialized('nationality') && null !== $object->getNationality()) {
            $value_1 = $object->getNationality();
            if (is_object($object->getNationality())) {
                $value_1 = $this->normalizer->normalize($object->getNationality(), 'json', $context);
            } elseif (is_array($object->getNationality())) {
                $values = array();
                foreach ($object->getNationality() as $value_2) {
                    $values[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $value_1 = $values;
            }
            $data['nationality'] = $value_1;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
}