<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportDirectorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportDirectors';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportDirectors';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectors();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('currentDirectors', $data)) {
            $values = array();
            foreach ($data['currentDirectors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem', 'json', $context);
            }
            $object->setCurrentDirectors($values);
            unset($data['currentDirectors']);
        }
        if (\array_key_exists('previousDirectors', $data)) {
            $values_1 = array();
            foreach ($data['previousDirectors'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem', 'json', $context);
            }
            $object->setPreviousDirectors($values_1);
            unset($data['previousDirectors']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($object->isInitialized('currentDirectors') && null !== $object->getCurrentDirectors()) {
            $values = array();
            foreach ($object->getCurrentDirectors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['currentDirectors'] = $values;
        }
        if ($object->isInitialized('previousDirectors') && null !== $object->getPreviousDirectors()) {
            $values_1 = array();
            foreach ($object->getPreviousDirectors() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['previousDirectors'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
}