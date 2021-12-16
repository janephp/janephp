<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportShareCapitalStructureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportShareCapitalStructure';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportShareCapitalStructure';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('issuedShareCapital', $data)) {
            $object->setIssuedShareCapital($this->denormalizer->denormalize($data['issuedShareCapital'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital', 'json', $context));
        }
        if (\array_key_exists('numberOfSharesIssued', $data)) {
            $object->setNumberOfSharesIssued($data['numberOfSharesIssued']);
        }
        if (\array_key_exists('shareHolders', $data)) {
            $values = array();
            foreach ($data['shareHolders'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem', 'json', $context);
            }
            $object->setShareHolders($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIssuedShareCapital()) {
            $data['issuedShareCapital'] = $this->normalizer->normalize($object->getIssuedShareCapital(), 'json', $context);
        }
        if (null !== $object->getNumberOfSharesIssued()) {
            $data['numberOfSharesIssued'] = $object->getNumberOfSharesIssued();
        }
        if (null !== $object->getShareHolders()) {
            $values = array();
            foreach ($object->getShareHolders() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['shareHolders'] = $values;
        }
        return $data;
    }
}