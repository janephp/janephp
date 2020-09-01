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
        if (\array_key_exists('date', $data)) {
            $object->setDate(\DateTime::createFromFormat('d.m.Y', $data['date'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] !== null) {
            $value = $data['dateOrNull'];
            if (is_string($data['dateOrNull']) and false !== \DateTime::createFromFormat('d.m.Y', $data['dateOrNull'])->setTime(0, 0, 0)) {
                $value = \DateTime::createFromFormat('d.m.Y', $data['dateOrNull'])->setTime(0, 0, 0);
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
            if (is_string($data['dateOrNullOrInt']) and false !== \DateTime::createFromFormat('d.m.Y', $data['dateOrNullOrInt'])->setTime(0, 0, 0)) {
                $value_1 = \DateTime::createFromFormat('d.m.Y', $data['dateOrNullOrInt'])->setTime(0, 0, 0);
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
            $data['date'] = $object->getDate()->format('d.m.Y');
        }
        if (null !== $object->getDateOrNull()) {
            $value = $object->getDateOrNull();
            if (is_object($object->getDateOrNull())) {
                $value = $object->getDateOrNull()->format('d.m.Y');
            } elseif (is_null($object->getDateOrNull())) {
                $value = $object->getDateOrNull();
            }
            $data['dateOrNull'] = $value;
        }
        if (null !== $object->getDateOrNullOrInt()) {
            $value_1 = $object->getDateOrNullOrInt();
            if (is_object($object->getDateOrNullOrInt())) {
                $value_1 = $object->getDateOrNullOrInt()->format('d.m.Y');
            } elseif (is_null($object->getDateOrNullOrInt())) {
                $value_1 = $object->getDateOrNullOrInt();
            } elseif (is_int($object->getDateOrNullOrInt())) {
                $value_1 = $object->getDateOrNullOrInt();
            }
            $data['dateOrNullOrInt'] = $value_1;
        }
        return $data;
    }
}