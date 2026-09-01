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
class SystemSmsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSms::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSms::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSms();
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
            $object->id = $data['id'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('serverType', $data)) {
            $object->serverType = $data['serverType'];
        }
        if (\array_key_exists('enabled', $data)) {
            $object->enabled = $data['enabled'];
        }
        if (\array_key_exists('serverName', $data)) {
            $object->serverName = $data['serverName'];
        }
        if (\array_key_exists('accountSid', $data)) {
            $object->accountSid = $data['accountSid'];
        }
        if (\array_key_exists('authToken', $data)) {
            $object->authToken = $data['authToken'];
        }
        if (\array_key_exists('from', $data)) {
            $object->from = $data['from'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('serverType', get_object_vars($data)) && null !== ($data->serverType ?? null)) {
            $dataArray['serverType'] = $data->serverType ?? null;
        }
        if (array_key_exists('enabled', get_object_vars($data)) && null !== ($data->enabled ?? null)) {
            $dataArray['enabled'] = $data->enabled ?? null;
        }
        if (array_key_exists('serverName', get_object_vars($data)) && null !== ($data->serverName ?? null)) {
            $dataArray['serverName'] = $data->serverName ?? null;
        }
        if (array_key_exists('accountSid', get_object_vars($data)) && null !== ($data->accountSid ?? null)) {
            $dataArray['accountSid'] = $data->accountSid ?? null;
        }
        if (array_key_exists('authToken', get_object_vars($data)) && null !== ($data->authToken ?? null)) {
            $dataArray['authToken'] = $data->authToken ?? null;
        }
        if (array_key_exists('from', get_object_vars($data)) && null !== ($data->from ?? null)) {
            $dataArray['from'] = $data->from ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSms::class => false];
    }
}