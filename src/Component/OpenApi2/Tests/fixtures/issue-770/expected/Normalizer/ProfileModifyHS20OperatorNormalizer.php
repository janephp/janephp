<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProfileModifyHS20OperatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyHS20Operator::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyHS20Operator::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyHS20Operator();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('domainNames', $data)) {
            $values = [];
            foreach ($data['domainNames'] as $value) {
                $values[] = $value;
            }
            $object->setDomainNames($values);
        }
        if (\array_key_exists('friendlyNames', $data)) {
            $values_1 = [];
            foreach ($data['friendlyNames'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20FriendlyName::class, 'json', $context);
            }
            $object->setFriendlyNames($values_1);
        }
        if (\array_key_exists('certificate', $data)) {
            $object->setCertificate($this->denormalizer->denormalize($data['certificate'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('adviceOfCharges', $data)) {
            $values_2 = [];
            foreach ($data['adviceOfCharges'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20AdviceOfCharge::class, 'json', $context);
            }
            $object->setAdviceOfCharges($values_2);
        }
        if (\array_key_exists('operatorIcons', $data)) {
            $values_3 = [];
            foreach ($data['operatorIcons'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20OperatorIcon::class, 'json', $context);
            }
            $object->setOperatorIcons($values_3);
        }
        if (\array_key_exists('termsConditions', $data)) {
            $object->setTermsConditions($this->denormalizer->denormalize($data['termsConditions'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20TermsConditions::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('domainNames') && null !== $data->getDomainNames()) {
            $values = [];
            foreach ($data->getDomainNames() as $value) {
                $values[] = $value;
            }
            $dataArray['domainNames'] = $values;
        }
        if ($data->isInitialized('friendlyNames') && null !== $data->getFriendlyNames()) {
            $values_1 = [];
            foreach ($data->getFriendlyNames() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['friendlyNames'] = $values_1;
        }
        if ($data->isInitialized('certificate') && null !== $data->getCertificate()) {
            $dataArray['certificate'] = $this->normalizer->normalize($data->getCertificate(), 'json', $context);
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('adviceOfCharges') && null !== $data->getAdviceOfCharges()) {
            $values_2 = [];
            foreach ($data->getAdviceOfCharges() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['adviceOfCharges'] = $values_2;
        }
        if ($data->isInitialized('operatorIcons') && null !== $data->getOperatorIcons()) {
            $values_3 = [];
            foreach ($data->getOperatorIcons() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['operatorIcons'] = $values_3;
        }
        if ($data->isInitialized('termsConditions') && null !== $data->getTermsConditions()) {
            $dataArray['termsConditions'] = $this->normalizer->normalize($data->getTermsConditions(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyHS20Operator::class => false];
    }
}