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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancialsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('contingentLiabilities', $data)) {
            $object->setContingentLiabilities($data['contingentLiabilities']);
        }
        if (\array_key_exists('bankOverdraftAndLTL', $data)) {
            $object->setBankOverdraftAndLTL($data['bankOverdraftAndLTL']);
        }
        if (\array_key_exists('workingCapital', $data)) {
            $object->setWorkingCapital($data['workingCapital']);
        }
        if (\array_key_exists('capitalEmployed', $data)) {
            $object->setCapitalEmployed($data['capitalEmployed']);
        }
        if (\array_key_exists('netWorth', $data)) {
            $object->setNetWorth($data['netWorth']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getContingentLiabilities()) {
            $data['contingentLiabilities'] = $object->getContingentLiabilities();
        }
        if (null !== $object->getBankOverdraftAndLTL()) {
            $data['bankOverdraftAndLTL'] = $object->getBankOverdraftAndLTL();
        }
        if (null !== $object->getWorkingCapital()) {
            $data['workingCapital'] = $object->getWorkingCapital();
        }
        if (null !== $object->getCapitalEmployed()) {
            $data['capitalEmployed'] = $object->getCapitalEmployed();
        }
        if (null !== $object->getNetWorth()) {
            $data['netWorth'] = $object->getNetWorth();
        }
        return $data;
    }
}