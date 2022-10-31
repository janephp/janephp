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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow();
        if (\array_key_exists('netCashFlowFromOperations', $data) && \is_int($data['netCashFlowFromOperations'])) {
            $data['netCashFlowFromOperations'] = (double) $data['netCashFlowFromOperations'];
        }
        if (\array_key_exists('netCashFlowBeforeFinancing', $data) && \is_int($data['netCashFlowBeforeFinancing'])) {
            $data['netCashFlowBeforeFinancing'] = (double) $data['netCashFlowBeforeFinancing'];
        }
        if (\array_key_exists('netCashFlowFromFinancing', $data) && \is_int($data['netCashFlowFromFinancing'])) {
            $data['netCashFlowFromFinancing'] = (double) $data['netCashFlowFromFinancing'];
        }
        if (\array_key_exists('increaseInCash', $data) && \is_int($data['increaseInCash'])) {
            $data['increaseInCash'] = (double) $data['increaseInCash'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('netCashFlowFromOperations', $data)) {
            $object->setNetCashFlowFromOperations($data['netCashFlowFromOperations']);
            unset($data['netCashFlowFromOperations']);
        }
        if (\array_key_exists('netCashFlowBeforeFinancing', $data)) {
            $object->setNetCashFlowBeforeFinancing($data['netCashFlowBeforeFinancing']);
            unset($data['netCashFlowBeforeFinancing']);
        }
        if (\array_key_exists('netCashFlowFromFinancing', $data)) {
            $object->setNetCashFlowFromFinancing($data['netCashFlowFromFinancing']);
            unset($data['netCashFlowFromFinancing']);
        }
        if (\array_key_exists('increaseInCash', $data)) {
            $object->setIncreaseInCash($data['increaseInCash']);
            unset($data['increaseInCash']);
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
        if ($object->isInitialized('netCashFlowFromOperations') && null !== $object->getNetCashFlowFromOperations()) {
            $data['netCashFlowFromOperations'] = $object->getNetCashFlowFromOperations();
        }
        if ($object->isInitialized('netCashFlowBeforeFinancing') && null !== $object->getNetCashFlowBeforeFinancing()) {
            $data['netCashFlowBeforeFinancing'] = $object->getNetCashFlowBeforeFinancing();
        }
        if ($object->isInitialized('netCashFlowFromFinancing') && null !== $object->getNetCashFlowFromFinancing()) {
            $data['netCashFlowFromFinancing'] = $object->getNetCashFlowFromFinancing();
        }
        if ($object->isInitialized('increaseInCash') && null !== $object->getIncreaseInCash()) {
            $data['increaseInCash'] = $object->getIncreaseInCash();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}