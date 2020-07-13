<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MonitoringPortfoliosPortfolioIdCompaniesIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody();
        if (\array_key_exists('personalReference', $data)) {
            $object->setPersonalReference($data['personalReference']);
        }
        if (\array_key_exists('freeText', $data)) {
            $object->setFreeText($data['freeText']);
        }
        if (\array_key_exists('personalLimit', $data)) {
            $object->setPersonalLimit($data['personalLimit']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPersonalReference()) {
            $data['personalReference'] = $object->getPersonalReference();
        }
        if (null !== $object->getFreeText()) {
            $data['freeText'] = $object->getFreeText();
        }
        if (null !== $object->getPersonalLimit()) {
            $data['personalLimit'] = $object->getPersonalLimit();
        }
        return $data;
    }
}