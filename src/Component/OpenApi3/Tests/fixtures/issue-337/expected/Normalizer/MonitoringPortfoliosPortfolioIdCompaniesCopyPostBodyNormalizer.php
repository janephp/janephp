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
class MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody';
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
        $object = new \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('portfolios', $data)) {
            $values = array();
            foreach ($data['portfolios'] as $value) {
                $values[] = $value;
            }
            $object->setPortfolios($values);
            unset($data['portfolios']);
        }
        if (\array_key_exists('companies', $data)) {
            $values_1 = array();
            foreach ($data['companies'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem', 'json', $context);
            }
            $object->setCompanies($values_1);
            unset($data['companies']);
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
        if ($object->isInitialized('portfolios') && null !== $object->getPortfolios()) {
            $values = array();
            foreach ($object->getPortfolios() as $value) {
                $values[] = $value;
            }
            $data['portfolios'] = $values;
        }
        if ($object->isInitialized('companies') && null !== $object->getCompanies()) {
            $values_1 = array();
            foreach ($object->getCompanies() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['companies'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
}