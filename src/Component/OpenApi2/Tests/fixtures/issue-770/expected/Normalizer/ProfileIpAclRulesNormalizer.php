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
class ProfileIpAclRulesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('uplinkRateLimitingMbps', $data) && \is_int($data['uplinkRateLimitingMbps'])) {
            $data['uplinkRateLimitingMbps'] = (float) $data['uplinkRateLimitingMbps'];
        }
        if (\array_key_exists('downlinkRateLimitingMbps', $data) && \is_int($data['downlinkRateLimitingMbps'])) {
            $data['downlinkRateLimitingMbps'] = (float) $data['downlinkRateLimitingMbps'];
        }
        if (\array_key_exists('uplinkRateLimitingEnabled', $data) && \is_int($data['uplinkRateLimitingEnabled'])) {
            $data['uplinkRateLimitingEnabled'] = (bool) $data['uplinkRateLimitingEnabled'];
        }
        if (\array_key_exists('downlinkRateLimitingEnabled', $data) && \is_int($data['downlinkRateLimitingEnabled'])) {
            $data['downlinkRateLimitingEnabled'] = (bool) $data['downlinkRateLimitingEnabled'];
        }
        if (\array_key_exists('enableSourceIpSubnet', $data) && \is_int($data['enableSourceIpSubnet'])) {
            $data['enableSourceIpSubnet'] = (bool) $data['enableSourceIpSubnet'];
        }
        if (\array_key_exists('enableSourceV6Prefix', $data) && \is_int($data['enableSourceV6Prefix'])) {
            $data['enableSourceV6Prefix'] = (bool) $data['enableSourceV6Prefix'];
        }
        if (\array_key_exists('enableDestinationIpSubnet', $data) && \is_int($data['enableDestinationIpSubnet'])) {
            $data['enableDestinationIpSubnet'] = (bool) $data['enableDestinationIpSubnet'];
        }
        if (\array_key_exists('enableDestinationV6Prefix', $data) && \is_int($data['enableDestinationV6Prefix'])) {
            $data['enableDestinationV6Prefix'] = (bool) $data['enableDestinationV6Prefix'];
        }
        if (\array_key_exists('enableSourcePortRange', $data) && \is_int($data['enableSourcePortRange'])) {
            $data['enableSourcePortRange'] = (bool) $data['enableSourcePortRange'];
        }
        if (\array_key_exists('enableDestinationPortRange', $data) && \is_int($data['enableDestinationPortRange'])) {
            $data['enableDestinationPortRange'] = (bool) $data['enableDestinationPortRange'];
        }
        if (\array_key_exists('priority', $data)) {
            $object->priority = $data['priority'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('uplinkRateLimitingEnabled', $data)) {
            $object->uplinkRateLimitingEnabled = $data['uplinkRateLimitingEnabled'];
        }
        if (\array_key_exists('uplinkRateLimitingMbps', $data)) {
            $object->uplinkRateLimitingMbps = $data['uplinkRateLimitingMbps'];
        }
        if (\array_key_exists('downlinkRateLimitingEnabled', $data)) {
            $object->downlinkRateLimitingEnabled = $data['downlinkRateLimitingEnabled'];
        }
        if (\array_key_exists('downlinkRateLimitingMbps', $data)) {
            $object->downlinkRateLimitingMbps = $data['downlinkRateLimitingMbps'];
        }
        if (\array_key_exists('ipType', $data)) {
            $object->ipType = $data['ipType'];
        }
        if (\array_key_exists('enableSourceIpSubnet', $data)) {
            $object->enableSourceIpSubnet = $data['enableSourceIpSubnet'];
        }
        if (\array_key_exists('sourceIp', $data)) {
            $object->sourceIp = $data['sourceIp'];
        }
        if (\array_key_exists('sourceIpMask', $data)) {
            $object->sourceIpMask = $data['sourceIpMask'];
        }
        if (\array_key_exists('enableSourceV6Prefix', $data)) {
            $object->enableSourceV6Prefix = $data['enableSourceV6Prefix'];
        }
        if (\array_key_exists('sourceIpV6', $data)) {
            $object->sourceIpV6 = $data['sourceIpV6'];
        }
        if (\array_key_exists('enableDestinationIpSubnet', $data)) {
            $object->enableDestinationIpSubnet = $data['enableDestinationIpSubnet'];
        }
        if (\array_key_exists('destinationIp', $data)) {
            $object->destinationIp = $data['destinationIp'];
        }
        if (\array_key_exists('destinationIpMask', $data)) {
            $object->destinationIpMask = $data['destinationIpMask'];
        }
        if (\array_key_exists('enableDestinationV6Prefix', $data)) {
            $object->enableDestinationV6Prefix = $data['enableDestinationV6Prefix'];
        }
        if (\array_key_exists('destinationIpV6', $data)) {
            $object->destinationIpV6 = $data['destinationIpV6'];
        }
        if (\array_key_exists('enableSourcePortRange', $data)) {
            $object->enableSourcePortRange = $data['enableSourcePortRange'];
        }
        if (\array_key_exists('sourceMinPort', $data)) {
            $object->sourceMinPort = $data['sourceMinPort'];
        }
        if (\array_key_exists('sourceMaxPort', $data)) {
            $object->sourceMaxPort = $data['sourceMaxPort'];
        }
        if (\array_key_exists('enableDestinationPortRange', $data)) {
            $object->enableDestinationPortRange = $data['enableDestinationPortRange'];
        }
        if (\array_key_exists('destinationMinPort', $data)) {
            $object->destinationMinPort = $data['destinationMinPort'];
        }
        if (\array_key_exists('destinationMaxPort', $data)) {
            $object->destinationMaxPort = $data['destinationMaxPort'];
        }
        if (\array_key_exists('protocol', $data)) {
            $object->protocol = $data['protocol'];
        }
        if (\array_key_exists('customProtocol', $data)) {
            $object->customProtocol = $data['customProtocol'];
        }
        if (\array_key_exists('action', $data)) {
            $object->action = $data['action'];
        }
        if (\array_key_exists('direction', $data)) {
            $object->direction = $data['direction'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('priority', get_object_vars($data)) && null !== ($data->priority ?? null)) {
            $dataArray['priority'] = $data->priority ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('uplinkRateLimitingEnabled', get_object_vars($data)) && null !== ($data->uplinkRateLimitingEnabled ?? null)) {
            $dataArray['uplinkRateLimitingEnabled'] = $data->uplinkRateLimitingEnabled ?? null;
        }
        if (array_key_exists('uplinkRateLimitingMbps', get_object_vars($data)) && null !== ($data->uplinkRateLimitingMbps ?? null)) {
            $dataArray['uplinkRateLimitingMbps'] = $data->uplinkRateLimitingMbps ?? null;
        }
        if (array_key_exists('downlinkRateLimitingEnabled', get_object_vars($data)) && null !== ($data->downlinkRateLimitingEnabled ?? null)) {
            $dataArray['downlinkRateLimitingEnabled'] = $data->downlinkRateLimitingEnabled ?? null;
        }
        if (array_key_exists('downlinkRateLimitingMbps', get_object_vars($data)) && null !== ($data->downlinkRateLimitingMbps ?? null)) {
            $dataArray['downlinkRateLimitingMbps'] = $data->downlinkRateLimitingMbps ?? null;
        }
        if (array_key_exists('ipType', get_object_vars($data)) && null !== ($data->ipType ?? null)) {
            $dataArray['ipType'] = $data->ipType ?? null;
        }
        if (array_key_exists('enableSourceIpSubnet', get_object_vars($data)) && null !== ($data->enableSourceIpSubnet ?? null)) {
            $dataArray['enableSourceIpSubnet'] = $data->enableSourceIpSubnet ?? null;
        }
        if (array_key_exists('sourceIp', get_object_vars($data)) && null !== ($data->sourceIp ?? null)) {
            $dataArray['sourceIp'] = $data->sourceIp ?? null;
        }
        if (array_key_exists('sourceIpMask', get_object_vars($data)) && null !== ($data->sourceIpMask ?? null)) {
            $dataArray['sourceIpMask'] = $data->sourceIpMask ?? null;
        }
        if (array_key_exists('enableSourceV6Prefix', get_object_vars($data)) && null !== ($data->enableSourceV6Prefix ?? null)) {
            $dataArray['enableSourceV6Prefix'] = $data->enableSourceV6Prefix ?? null;
        }
        if (array_key_exists('sourceIpV6', get_object_vars($data)) && null !== ($data->sourceIpV6 ?? null)) {
            $dataArray['sourceIpV6'] = $data->sourceIpV6 ?? null;
        }
        if (array_key_exists('enableDestinationIpSubnet', get_object_vars($data)) && null !== ($data->enableDestinationIpSubnet ?? null)) {
            $dataArray['enableDestinationIpSubnet'] = $data->enableDestinationIpSubnet ?? null;
        }
        if (array_key_exists('destinationIp', get_object_vars($data)) && null !== ($data->destinationIp ?? null)) {
            $dataArray['destinationIp'] = $data->destinationIp ?? null;
        }
        if (array_key_exists('destinationIpMask', get_object_vars($data)) && null !== ($data->destinationIpMask ?? null)) {
            $dataArray['destinationIpMask'] = $data->destinationIpMask ?? null;
        }
        if (array_key_exists('enableDestinationV6Prefix', get_object_vars($data)) && null !== ($data->enableDestinationV6Prefix ?? null)) {
            $dataArray['enableDestinationV6Prefix'] = $data->enableDestinationV6Prefix ?? null;
        }
        if (array_key_exists('destinationIpV6', get_object_vars($data)) && null !== ($data->destinationIpV6 ?? null)) {
            $dataArray['destinationIpV6'] = $data->destinationIpV6 ?? null;
        }
        if (array_key_exists('enableSourcePortRange', get_object_vars($data)) && null !== ($data->enableSourcePortRange ?? null)) {
            $dataArray['enableSourcePortRange'] = $data->enableSourcePortRange ?? null;
        }
        if (array_key_exists('sourceMinPort', get_object_vars($data)) && null !== ($data->sourceMinPort ?? null)) {
            $dataArray['sourceMinPort'] = $data->sourceMinPort ?? null;
        }
        if (array_key_exists('sourceMaxPort', get_object_vars($data)) && null !== ($data->sourceMaxPort ?? null)) {
            $dataArray['sourceMaxPort'] = $data->sourceMaxPort ?? null;
        }
        if (array_key_exists('enableDestinationPortRange', get_object_vars($data)) && null !== ($data->enableDestinationPortRange ?? null)) {
            $dataArray['enableDestinationPortRange'] = $data->enableDestinationPortRange ?? null;
        }
        if (array_key_exists('destinationMinPort', get_object_vars($data)) && null !== ($data->destinationMinPort ?? null)) {
            $dataArray['destinationMinPort'] = $data->destinationMinPort ?? null;
        }
        if (array_key_exists('destinationMaxPort', get_object_vars($data)) && null !== ($data->destinationMaxPort ?? null)) {
            $dataArray['destinationMaxPort'] = $data->destinationMaxPort ?? null;
        }
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $dataArray['protocol'] = $data->protocol ?? null;
        }
        if (array_key_exists('customProtocol', get_object_vars($data)) && null !== ($data->customProtocol ?? null)) {
            $dataArray['customProtocol'] = $data->customProtocol ?? null;
        }
        if (array_key_exists('action', get_object_vars($data)) && null !== ($data->action ?? null)) {
            $dataArray['action'] = $data->action ?? null;
        }
        if (array_key_exists('direction', get_object_vars($data)) && null !== ($data->direction ?? null)) {
            $dataArray['direction'] = $data->direction ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules::class => false];
    }
}