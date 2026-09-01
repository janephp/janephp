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
class AppIngressSpecRuleRoutingRedirectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingRedirect::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingRedirect::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingRedirect();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('uri', $data)) {
            $object->uri = $data['uri'];
            unset($data['uri']);
        }
        if (\array_key_exists('authority', $data)) {
            $object->authority = $data['authority'];
            unset($data['authority']);
        }
        if (\array_key_exists('port', $data)) {
            $object->port = $data['port'];
            unset($data['port']);
        }
        if (\array_key_exists('scheme', $data)) {
            $object->scheme = $data['scheme'];
            unset($data['scheme']);
        }
        if (\array_key_exists('redirect_code', $data)) {
            $object->redirectCode = $data['redirect_code'];
            unset($data['redirect_code']);
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
        if (array_key_exists('uri', get_object_vars($data)) && null !== ($data->uri ?? null)) {
            $dataArray['uri'] = $data->uri ?? null;
        }
        if (array_key_exists('authority', get_object_vars($data)) && null !== ($data->authority ?? null)) {
            $dataArray['authority'] = $data->authority ?? null;
        }
        if (array_key_exists('port', get_object_vars($data)) && null !== ($data->port ?? null)) {
            $dataArray['port'] = $data->port ?? null;
        }
        if (array_key_exists('scheme', get_object_vars($data)) && null !== ($data->scheme ?? null)) {
            $dataArray['scheme'] = $data->scheme ?? null;
        }
        if (array_key_exists('redirectCode', get_object_vars($data)) && null !== ($data->redirectCode ?? null)) {
            $dataArray['redirect_code'] = $data->redirectCode ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingRedirect::class => false];
    }
}