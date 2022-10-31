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
class MonitoringPortfoliosPortfolioIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdPatchBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdPatchBody';
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
        $object = new \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdPatchBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('emails', $data)) {
            $values = array();
            foreach ($data['emails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdPatchBodyEmailsItem', 'json', $context);
            }
            $object->setEmails($values);
            unset($data['emails']);
        }
        if (\array_key_exists('emailLanguage', $data)) {
            $object->setEmailLanguage($data['emailLanguage']);
            unset($data['emailLanguage']);
        }
        if (\array_key_exists('emailSubject', $data)) {
            $object->setEmailSubject($data['emailSubject']);
            unset($data['emailSubject']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('emails') && null !== $object->getEmails()) {
            $values = array();
            foreach ($object->getEmails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['emails'] = $values;
        }
        if ($object->isInitialized('emailLanguage') && null !== $object->getEmailLanguage()) {
            $data['emailLanguage'] = $object->getEmailLanguage();
        }
        if ($object->isInitialized('emailSubject') && null !== $object->getEmailSubject()) {
            $data['emailSubject'] = $object->getEmailSubject();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}