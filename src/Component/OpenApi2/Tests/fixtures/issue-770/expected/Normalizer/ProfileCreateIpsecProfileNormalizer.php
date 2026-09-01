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
            $dataArray['id'] = $data->id ?? null;
        }
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('serverAddr', get_object_vars($data)) && null !== ($data->serverAddr ?? null)) {
            $dataArray['serverAddr'] = $data->serverAddr ?? null;
        }
        if (array_key_exists('authType', get_object_vars($data)) && null !== ($data->authType ?? null)) {
            $dataArray['authType'] = $data->authType ?? null;
        }
        if (array_key_exists('tunnelMode', get_object_vars($data)) && null !== ($data->tunnelMode ?? null)) {
            $dataArray['tunnelMode'] = $data->tunnelMode ?? null;
        }
        if (array_key_exists('preSharedKey', get_object_vars($data)) && null !== ($data->preSharedKey ?? null)) {
            $dataArray['preSharedKey'] = $data->preSharedKey ?? null;
        }
        if (array_key_exists('ikeSecurityAssociation', get_object_vars($data)) && null !== ($data->ikeSecurityAssociation ?? null)) {
            $dataArray['ikeSecurityAssociation'] = ($data->ikeSecurityAssociation ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ikeSecurityAssociation ?? null, 'json', $context));
        }
        if (array_key_exists('espSecurityAssociation', get_object_vars($data)) && null !== ($data->espSecurityAssociation ?? null)) {
            $dataArray['espSecurityAssociation'] = ($data->espSecurityAssociation ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->espSecurityAssociation ?? null, 'json', $context));
        }
        $dataArray['ikeRekeyTime'] = $data->ikeRekeyTime ?? null;
        if (array_key_exists('ikeRekeyTimeUnit', get_object_vars($data)) && null !== ($data->ikeRekeyTimeUnit ?? null)) {
            $dataArray['ikeRekeyTimeUnit'] = $data->ikeRekeyTimeUnit ?? null;
        }
        $dataArray['espRekeyTime'] = $data->espRekeyTime ?? null;
        if (array_key_exists('espRekeyTimeUnit', get_object_vars($data)) && null !== ($data->espRekeyTimeUnit ?? null)) {
            $dataArray['espRekeyTimeUnit'] = $data->espRekeyTimeUnit ?? null;
        }
        if (array_key_exists('cmProtocolOption', get_object_vars($data)) && null !== ($data->cmProtocolOption ?? null)) {
            $dataArray['cmProtocolOption'] = ($data->cmProtocolOption ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->cmProtocolOption ?? null, 'json', $context));
        }
        if (array_key_exists('advancedOption', get_object_vars($data)) && null !== ($data->advancedOption ?? null)) {
            $dataArray['advancedOption'] = ($data->advancedOption ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->advancedOption ?? null, 'json', $context));
        }
        $dataArray['ipMode'] = $data->ipMode ?? null;
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateIpsecProfile::class => false];
    }
}