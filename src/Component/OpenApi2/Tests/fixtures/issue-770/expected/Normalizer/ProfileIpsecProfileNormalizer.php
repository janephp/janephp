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
class ProfileIpsecProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpsecProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpsecProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpsecProfile();
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
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('serverAddr', $data)) {
            $object->setServerAddr($data['serverAddr']);
        }
        if (\array_key_exists('authType', $data)) {
            $object->setAuthType($data['authType']);
        }
        if (\array_key_exists('tunnelMode', $data)) {
            $object->setTunnelMode($data['tunnelMode']);
        }
        if (\array_key_exists('preSharedKey', $data)) {
            $object->setPreSharedKey($data['preSharedKey']);
        }
        if (\array_key_exists('ikeSecurityAssociation', $data)) {
            $object->setIkeSecurityAssociation($this->denormalizer->denormalize($data['ikeSecurityAssociation'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIkeSecurityAssociationContent::class, 'json', $context));
        }
        if (\array_key_exists('espSecurityAssociation', $data)) {
            $object->setEspSecurityAssociation($this->denormalizer->denormalize($data['espSecurityAssociation'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileEspSecurityAssociationContent::class, 'json', $context));
        }
        if (\array_key_exists('ikeRekeyTime', $data)) {
            $object->setIkeRekeyTime($data['ikeRekeyTime']);
        }
        if (\array_key_exists('ikeRekeyTimeUnit', $data)) {
            $object->setIkeRekeyTimeUnit($data['ikeRekeyTimeUnit']);
        }
        if (\array_key_exists('espRekeyTime', $data)) {
            $object->setEspRekeyTime($data['espRekeyTime']);
        }
        if (\array_key_exists('espRekeyTimeUnit', $data)) {
            $object->setEspRekeyTimeUnit($data['espRekeyTimeUnit']);
        }
        if (\array_key_exists('cmProtocolOption', $data)) {
            $object->setCmProtocolOption($this->denormalizer->denormalize($data['cmProtocolOption'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCmProtocolOptionContent::class, 'json', $context));
        }
        if (\array_key_exists('advancedOption', $data)) {
            $object->setAdvancedOption($this->denormalizer->denormalize($data['advancedOption'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAdvancedOptionContent::class, 'json', $context));
        }
        if (\array_key_exists('ipMode', $data)) {
            $object->setIpMode($data['ipMode']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->setCreateDateTime($data['createDateTime']);
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->setModifiedDateTime($data['modifiedDateTime']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->setModifierId($data['modifierId']);
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->setCreatorUsername($data['creatorUsername']);
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->setModifierUsername($data['modifierUsername']);
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
        if ($data->isInitialized('serverAddr') && null !== $data->getServerAddr()) {
            $dataArray['serverAddr'] = $data->getServerAddr();
        }
        if ($data->isInitialized('authType') && null !== $data->getAuthType()) {
            $dataArray['authType'] = $data->getAuthType();
        }
        if ($data->isInitialized('tunnelMode') && null !== $data->getTunnelMode()) {
            $dataArray['tunnelMode'] = $data->getTunnelMode();
        }
        if ($data->isInitialized('preSharedKey') && null !== $data->getPreSharedKey()) {
            $dataArray['preSharedKey'] = $data->getPreSharedKey();
        }
        if ($data->isInitialized('ikeSecurityAssociation') && null !== $data->getIkeSecurityAssociation()) {
            $dataArray['ikeSecurityAssociation'] = $this->normalizer->normalize($data->getIkeSecurityAssociation(), 'json', $context);
        }
        if ($data->isInitialized('espSecurityAssociation') && null !== $data->getEspSecurityAssociation()) {
            $dataArray['espSecurityAssociation'] = $this->normalizer->normalize($data->getEspSecurityAssociation(), 'json', $context);
        }
        if ($data->isInitialized('ikeRekeyTime') && null !== $data->getIkeRekeyTime()) {
            $dataArray['ikeRekeyTime'] = $data->getIkeRekeyTime();
        }
        if ($data->isInitialized('ikeRekeyTimeUnit') && null !== $data->getIkeRekeyTimeUnit()) {
            $dataArray['ikeRekeyTimeUnit'] = $data->getIkeRekeyTimeUnit();
        }
        if ($data->isInitialized('espRekeyTime') && null !== $data->getEspRekeyTime()) {
            $dataArray['espRekeyTime'] = $data->getEspRekeyTime();
        }
        if ($data->isInitialized('espRekeyTimeUnit') && null !== $data->getEspRekeyTimeUnit()) {
            $dataArray['espRekeyTimeUnit'] = $data->getEspRekeyTimeUnit();
        }
        if ($data->isInitialized('cmProtocolOption') && null !== $data->getCmProtocolOption()) {
            $dataArray['cmProtocolOption'] = $this->normalizer->normalize($data->getCmProtocolOption(), 'json', $context);
        }
        if ($data->isInitialized('advancedOption') && null !== $data->getAdvancedOption()) {
            $dataArray['advancedOption'] = $this->normalizer->normalize($data->getAdvancedOption(), 'json', $context);
        }
        if ($data->isInitialized('ipMode') && null !== $data->getIpMode()) {
            $dataArray['ipMode'] = $data->getIpMode();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('createDateTime') && null !== $data->getCreateDateTime()) {
            $dataArray['createDateTime'] = $data->getCreateDateTime();
        }
        if ($data->isInitialized('modifiedDateTime') && null !== $data->getModifiedDateTime()) {
            $dataArray['modifiedDateTime'] = $data->getModifiedDateTime();
        }
        if ($data->isInitialized('creatorId') && null !== $data->getCreatorId()) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('modifierId') && null !== $data->getModifierId()) {
            $dataArray['modifierId'] = $data->getModifierId();
        }
        if ($data->isInitialized('creatorUsername') && null !== $data->getCreatorUsername()) {
            $dataArray['creatorUsername'] = $data->getCreatorUsername();
        }
        if ($data->isInitialized('modifierUsername') && null !== $data->getModifierUsername()) {
            $dataArray['modifierUsername'] = $data->getModifierUsername();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpsecProfile::class => false];
    }
}
