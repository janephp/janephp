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
class AppIngressSpecRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppIngressSpecRule::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppIngressSpecRule::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppIngressSpecRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('match', $data)) {
            $object->setMatch($this->denormalizer->denormalize($data['match'], \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleMatch::class, 'json', $context));
            unset($data['match']);
        }
        if (\array_key_exists('cors', $data)) {
            $object->setCors($this->denormalizer->denormalize($data['cors'], \Jane\Generated\DigitalOcean\Model\AppsCorsPolicy::class, 'json', $context));
            unset($data['cors']);
        }
        if (\array_key_exists('component', $data)) {
            $object->setComponent($this->denormalizer->denormalize($data['component'], \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingComponent::class, 'json', $context));
            unset($data['component']);
        }
        if (\array_key_exists('redirect', $data)) {
            $object->setRedirect($this->denormalizer->denormalize($data['redirect'], \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingRedirect::class, 'json', $context));
            unset($data['redirect']);
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
        if ($data->isInitialized('match') && null !== $data->getMatch()) {
            $dataArray['match'] = $this->normalizer->normalize($data->getMatch(), 'json', $context);
        }
        if ($data->isInitialized('cors') && null !== $data->getCors()) {
            $dataArray['cors'] = $this->normalizer->normalize($data->getCors(), 'json', $context);
        }
        if ($data->isInitialized('component') && null !== $data->getComponent()) {
            $dataArray['component'] = $this->normalizer->normalize($data->getComponent(), 'json', $context);
        }
        if ($data->isInitialized('redirect') && null !== $data->getRedirect()) {
            $dataArray['redirect'] = $this->normalizer->normalize($data->getRedirect(), 'json', $context);
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
        return [\Jane\Generated\DigitalOcean\Model\AppIngressSpecRule::class => false];
    }
}