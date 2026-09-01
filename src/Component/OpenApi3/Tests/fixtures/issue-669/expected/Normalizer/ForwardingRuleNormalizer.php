<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ForwardingRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ForwardingRule::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ForwardingRule::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ForwardingRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('tls_passthrough', $data) && \is_int($data['tls_passthrough'])) {
            $data['tls_passthrough'] = (bool) $data['tls_passthrough'];
        }
        if (\array_key_exists('entry_protocol', $data)) {
            $object->entryProtocol = $data['entry_protocol'];
            unset($data['entry_protocol']);
        }
        if (\array_key_exists('entry_port', $data)) {
            $object->entryPort = $data['entry_port'];
            unset($data['entry_port']);
        }
        if (\array_key_exists('target_protocol', $data)) {
            $object->targetProtocol = $data['target_protocol'];
            unset($data['target_protocol']);
        }
        if (\array_key_exists('target_port', $data)) {
            $object->targetPort = $data['target_port'];
            unset($data['target_port']);
        }
        if (\array_key_exists('certificate_id', $data)) {
            $object->certificateId = $data['certificate_id'];
            unset($data['certificate_id']);
        }
        if (\array_key_exists('tls_passthrough', $data)) {
            $object->tlsPassthrough = $data['tls_passthrough'];
            unset($data['tls_passthrough']);
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
        $dataArray['entry_protocol'] = $data->entryProtocol ?? null;
        $dataArray['entry_port'] = $data->entryPort ?? null;
        $dataArray['target_protocol'] = $data->targetProtocol ?? null;
        $dataArray['target_port'] = $data->targetPort ?? null;
        if (array_key_exists('certificateId', get_object_vars($data)) && null !== ($data->certificateId ?? null)) {
            $dataArray['certificate_id'] = $data->certificateId ?? null;
        }
        if (array_key_exists('tlsPassthrough', get_object_vars($data)) && null !== ($data->tlsPassthrough ?? null)) {
            $dataArray['tls_passthrough'] = $data->tlsPassthrough ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ForwardingRule::class => false];
    }
}