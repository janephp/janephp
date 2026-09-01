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
class ProfileCmProtocolOptionContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCmProtocolOptionContent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCmProtocolOptionContent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCmProtocolOptionContent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('cmpDhcpOpt43Subcode', $data) && \is_int($data['cmpDhcpOpt43Subcode'])) {
            $data['cmpDhcpOpt43Subcode'] = (float) $data['cmpDhcpOpt43Subcode'];
        }
        if (\array_key_exists('cmpDhcpOpt43SubcodeRecipient', $data) && \is_int($data['cmpDhcpOpt43SubcodeRecipient'])) {
            $data['cmpDhcpOpt43SubcodeRecipient'] = (float) $data['cmpDhcpOpt43SubcodeRecipient'];
        }
        if (\array_key_exists('cmpDhcpOpt43Subcode', $data)) {
            $object->cmpDhcpOpt43Subcode = $data['cmpDhcpOpt43Subcode'];
        }
        if (\array_key_exists('cmpServerAddr', $data)) {
            $object->cmpServerAddr = $data['cmpServerAddr'];
        }
        if (\array_key_exists('cmpServerPath', $data)) {
            $object->cmpServerPath = $data['cmpServerPath'];
        }
        if (\array_key_exists('cmpDhcpOpt43SubcodeRecipient', $data)) {
            $object->cmpDhcpOpt43SubcodeRecipient = $data['cmpDhcpOpt43SubcodeRecipient'];
        }
        if (\array_key_exists('cmpRecipient', $data)) {
            $object->cmpRecipient = $data['cmpRecipient'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['cmpDhcpOpt43Subcode'] = $data->cmpDhcpOpt43Subcode ?? null;
        if (array_key_exists('cmpServerAddr', get_object_vars($data)) && null !== ($data->cmpServerAddr ?? null)) {
            $dataArray['cmpServerAddr'] = $data->cmpServerAddr ?? null;
        }
        if (array_key_exists('cmpServerPath', get_object_vars($data)) && null !== ($data->cmpServerPath ?? null)) {
            $dataArray['cmpServerPath'] = $data->cmpServerPath ?? null;
        }
        if (array_key_exists('cmpDhcpOpt43SubcodeRecipient', get_object_vars($data)) && null !== ($data->cmpDhcpOpt43SubcodeRecipient ?? null)) {
            $dataArray['cmpDhcpOpt43SubcodeRecipient'] = $data->cmpDhcpOpt43SubcodeRecipient ?? null;
        }
        if (array_key_exists('cmpRecipient', get_object_vars($data)) && null !== ($data->cmpRecipient ?? null)) {
            $dataArray['cmpRecipient'] = $data->cmpRecipient ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCmProtocolOptionContent::class => false];
    }
}