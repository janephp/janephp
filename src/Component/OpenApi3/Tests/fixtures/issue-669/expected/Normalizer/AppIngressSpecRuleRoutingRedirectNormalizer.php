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
            $object->setUri($data['uri']);
            unset($data['uri']);
        }
        if (\array_key_exists('authority', $data)) {
            $object->setAuthority($data['authority']);
            unset($data['authority']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
            unset($data['port']);
        }
        if (\array_key_exists('scheme', $data)) {
            $object->setScheme($data['scheme']);
            unset($data['scheme']);
        }
        if (\array_key_exists('redirect_code', $data)) {
            $object->setRedirectCode($data['redirect_code']);
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
        if ($data->isInitialized('uri') && null !== $data->getUri()) {
            $dataArray['uri'] = $data->getUri();
        }
        if ($data->isInitialized('authority') && null !== $data->getAuthority()) {
            $dataArray['authority'] = $data->getAuthority();
        }
        if ($data->isInitialized('port') && null !== $data->getPort()) {
            $dataArray['port'] = $data->getPort();
        }
        if ($data->isInitialized('scheme') && null !== $data->getScheme()) {
            $dataArray['scheme'] = $data->getScheme();
        }
        if ($data->isInitialized('redirectCode') && null !== $data->getRedirectCode()) {
            $dataArray['redirect_code'] = $data->getRedirectCode();
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
        return [\Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingRedirect::class => false];
    }
}