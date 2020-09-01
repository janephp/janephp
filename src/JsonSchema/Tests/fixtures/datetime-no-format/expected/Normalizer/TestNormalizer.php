<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Test';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\Test;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\JsonSchema\Tests\Expected\Model\Test();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate((new \DateTime($data['date']))->getTimezone()->getName() == 'Z' ? (new \DateTime($data['date']))->setTimezone(new \DateTimeZone('GMT')) : new \DateTime($data['date']));
        }
        if (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] !== null) {
            $value = $data['dateOrNull'];
            if (is_string($data['dateOrNull']) and false !== ((new \DateTime($data['dateOrNull']))->getTimezone()->getName() == 'Z' ? (new \DateTime($data['dateOrNull']))->setTimezone(new \DateTimeZone('GMT')) : new \DateTime($data['dateOrNull']))) {
                $value = (new \DateTime($data['dateOrNull']))->getTimezone()->getName() == 'Z' ? (new \DateTime($data['dateOrNull']))->setTimezone(new \DateTimeZone('GMT')) : new \DateTime($data['dateOrNull']);
            } elseif (is_null($data['dateOrNull'])) {
                $value = $data['dateOrNull'];
            }
            $object->setDateOrNull($value);
        }
        elseif (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] === null) {
            $object->setDateOrNull(null);
        }
        if (\array_key_exists('dateOrNullOrInt', $data) && $data['dateOrNullOrInt'] !== null) {
            $value_1 = $data['dateOrNullOrInt'];
            if (is_string($data['dateOrNullOrInt']) and false !== ((new \DateTime($data['dateOrNullOrInt']))->getTimezone()->getName() == 'Z' ? (new \DateTime($data['dateOrNullOrInt']))->setTimezone(new \DateTimeZone('GMT')) : new \DateTime($data['dateOrNullOrInt']))) {
                $value_1 = (new \DateTime($data['dateOrNullOrInt']))->getTimezone()->getName() == 'Z' ? (new \DateTime($data['dateOrNullOrInt']))->setTimezone(new \DateTimeZone('GMT')) : new \DateTime($data['dateOrNullOrInt']);
            } elseif (is_null($data['dateOrNullOrInt'])) {
                $value_1 = $data['dateOrNullOrInt'];
            } elseif (is_int($data['dateOrNullOrInt'])) {
                $value_1 = $data['dateOrNullOrInt'];
            }
            $object->setDateOrNullOrInt($value_1);
        }
        elseif (\array_key_exists('dateOrNullOrInt', $data) && $data['dateOrNullOrInt'] === null) {
            $object->setDateOrNullOrInt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d\\TH:i:sP');
        }
        $value = $object->getDateOrNull();
        if (is_object($object->getDateOrNull())) {
            $value = $object->getDateOrNull()->format('Y-m-d\\TH:i:sP');
        } elseif (is_null($object->getDateOrNull())) {
            $value = $object->getDateOrNull();
        }
        $data['dateOrNull'] = $value;
        $value_1 = $object->getDateOrNullOrInt();
        if (is_object($object->getDateOrNullOrInt())) {
            $value_1 = $object->getDateOrNullOrInt()->format('Y-m-d\\TH:i:sP');
        } elseif (is_null($object->getDateOrNullOrInt())) {
            $value_1 = $object->getDateOrNullOrInt();
        } elseif (is_int($object->getDateOrNullOrInt())) {
            $value_1 = $object->getDateOrNullOrInt();
        }
        $data['dateOrNullOrInt'] = $value_1;
        return $data;
    }
}