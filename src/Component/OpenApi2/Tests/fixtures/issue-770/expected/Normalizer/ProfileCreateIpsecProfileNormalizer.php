<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProfileCreateIpsecProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateIpsecProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateIpsecProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateIpsecProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ikeRekeyTime', $data) && \is_int($data['ikeRekeyTime'])) {
            $data['ikeRekeyTime'] = (float) $data['ikeRekeyTime'];
        }
        if (\array_key_exists('espRekeyTime', $data) && \is_int($data['espRekeyTime'])) {
            $data['espRekeyTime'] = (float) $data['espRekeyTime'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('serverAddr', $data)) {
            $object->serverAddr = $data['serverAddr'];
        }
        if (\array_key_exists('authType', $data)) {
            $object->authType = $data['authType'];
        }
        if (\array_key_exists('tunnelMode', $data)) {
            $object->tunnelMode = $data['tunnelMode'];
        }
        if (\array_key_exists('preSharedKey', $data)) {
            $object->preSharedKey = $data['preSharedKey'];
        }
        if (\array_key_exists('ikeSecurityAssociation', $data)) {
            $object->ikeSecurityAssociation = $this->denormalizer->denormalize($data['ikeSecurityAssociation'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileIkeSecurityAssociationContent::class, 'json', $context);
        }
        if (\array_key_exists('espSecurityAssociation', $data)) {
            $object->espSecurityAssociation = $this->denormalizer->denormalize($data['espSecurityAssociation'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileEspSecurityAssociationContent::class, 'json', $context);
        }
        if (\array_key_exists('ikeRekeyTime', $data)) {
            $object->ikeRekeyTime = $data['ikeRekeyTime'];
        }
        if (\array_key_exists('ikeRekeyTimeUnit', $data)) {
            $object->ikeRekeyTimeUnit = $data['ikeRekeyTimeUnit'];
        }
        if (\array_key_exists('espRekeyTime', $data)) {
            $object->espRekeyTime = $data['espRekeyTime'];
        }
        if (\array_key_exists('espRekeyTimeUnit', $data)) {
            $object->espRekeyTimeUnit = $data['espRekeyTimeUnit'];
        }
        if (\array_key_exists('cmProtocolOption', $data)) {
            $object->cmProtocolOption = $this->denormalizer->denormalize($data['cmProtocolOption'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCmProtocolOptionContent::class, 'json', $context);
        }
        if (\array_key_exists('advancedOption', $data)) {
            $object->advancedOption = $this->denormalizer->denormalize($data['advancedOption'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAdvancedOptionContent::class, 'json', $context);
        }
        if (\array_key_exists('ipMode', $data)) {
            $object->ipMode = $data['ipMode'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id;
        }
        $dataArray['name'] = $data->name;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (array_key_exists('serverAddr', get_object_vars($data)) && null !== ($data->serverAddr ?? null)) {
            $dataArray['serverAddr'] = $data->serverAddr;
        }
        if (array_key_exists('authType', get_object_vars($data)) && null !== ($data->authType ?? null)) {
            $dataArray['authType'] = $data->authType;
        }
        if (array_key_exists('tunnelMode', get_object_vars($data)) && null !== ($data->tunnelMode ?? null)) {
            $dataArray['tunnelMode'] = $data->tunnelMode;
        }
        if (array_key_exists('preSharedKey', get_object_vars($data)) && null !== ($data->preSharedKey ?? null)) {
            $dataArray['preSharedKey'] = $data->preSharedKey;
        }
        if (array_key_exists('ikeSecurityAssociation', get_object_vars($data)) && null !== ($data->ikeSecurityAssociation ?? null)) {
            $normalized = $this->normalizer->normalize($data->ikeSecurityAssociation, 'json', $context);
            $dataArray['ikeSecurityAssociation'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('espSecurityAssociation', get_object_vars($data)) && null !== ($data->espSecurityAssociation ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->espSecurityAssociation, 'json', $context);
            $dataArray['espSecurityAssociation'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $dataArray['ikeRekeyTime'] = $data->ikeRekeyTime;
        if (array_key_exists('ikeRekeyTimeUnit', get_object_vars($data)) && null !== ($data->ikeRekeyTimeUnit ?? null)) {
            $dataArray['ikeRekeyTimeUnit'] = $data->ikeRekeyTimeUnit;
        }
        $dataArray['espRekeyTime'] = $data->espRekeyTime;
        if (array_key_exists('espRekeyTimeUnit', get_object_vars($data)) && null !== ($data->espRekeyTimeUnit ?? null)) {
            $dataArray['espRekeyTimeUnit'] = $data->espRekeyTimeUnit;
        }
        if (array_key_exists('cmProtocolOption', get_object_vars($data)) && null !== ($data->cmProtocolOption ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->cmProtocolOption, 'json', $context);
            $dataArray['cmProtocolOption'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('advancedOption', get_object_vars($data)) && null !== ($data->advancedOption ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->advancedOption, 'json', $context);
            $dataArray['advancedOption'] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        $dataArray['ipMode'] = $data->ipMode;
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateIpsecProfile::class => false];
    }
}