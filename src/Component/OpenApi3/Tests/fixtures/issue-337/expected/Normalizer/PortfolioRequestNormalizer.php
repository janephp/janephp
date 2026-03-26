<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PortfolioRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\PortfolioRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\PortfolioRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\PortfolioRequest();
        if (\array_key_exists('isDefault', $data) && \is_int($data['isDefault'])) {
            $data['isDefault'] = (bool) $data['isDefault'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('isDefault', $data)) {
            $object->setIsDefault($data['isDefault']);
            unset($data['isDefault']);
        }
        if (\array_key_exists('emails', $data)) {
            $object->setEmails($this->denormalizer->denormalize($data['emails'], \CreditSafe\API\Model\PortfolioRequestEmails::class, 'json', $context));
            unset($data['emails']);
        }
        if (\array_key_exists('emailSubject', $data)) {
            $object->setEmailSubject($data['emailSubject']);
            unset($data['emailSubject']);
        }
        if (\array_key_exists('emailLanguage', $data)) {
            $object->setEmailLanguage($data['emailLanguage']);
            unset($data['emailLanguage']);
        }
        if (\array_key_exists('frequency', $data)) {
            $object->setFrequency($data['frequency']);
            unset($data['frequency']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['isDefault'] = $data->getIsDefault();
        if ($data->isInitialized('emails') && null !== $data->getEmails()) {
            $dataArray['emails'] = $this->normalizer->normalize($data->getEmails(), 'json', $context);
        }
        if ($data->isInitialized('emailSubject') && null !== $data->getEmailSubject()) {
            $dataArray['emailSubject'] = $data->getEmailSubject();
        }
        if ($data->isInitialized('emailLanguage') && null !== $data->getEmailLanguage()) {
            $dataArray['emailLanguage'] = $data->getEmailLanguage();
        }
        if ($data->isInitialized('frequency') && null !== $data->getFrequency()) {
            $dataArray['frequency'] = $data->getFrequency();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\PortfolioRequest::class => false];
    }
}