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
class AppAlertNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppAlert::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppAlert::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppAlert();
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
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('component_name', $data)) {
            $object->setComponentName($data['component_name']);
            unset($data['component_name']);
        }
        if (\array_key_exists('spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['spec'], \Jane\Generated\DigitalOcean\Model\AppAlertSpec::class, 'json', $context));
            unset($data['spec']);
        }
        if (\array_key_exists('emails', $data)) {
            $values = [];
            foreach ($data['emails'] as $value) {
                $values[] = $value;
            }
            $object->setEmails($values);
            unset($data['emails']);
        }
        if (\array_key_exists('slack_webhooks', $data)) {
            $values_1 = [];
            foreach ($data['slack_webhooks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AppAlertSlackWebhook::class, 'json', $context);
            }
            $object->setSlackWebhooks($values_1);
            unset($data['slack_webhooks']);
        }
        if (\array_key_exists('phase', $data)) {
            $object->setPhase($data['phase']);
            unset($data['phase']);
        }
        if (\array_key_exists('progress', $data)) {
            $object->setProgress($this->denormalizer->denormalize($data['progress'], \Jane\Generated\DigitalOcean\Model\AppAlertProgress::class, 'json', $context));
            unset($data['progress']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('componentName') && null !== $data->getComponentName()) {
            $dataArray['component_name'] = $data->getComponentName();
        }
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['spec'] = $this->normalizer->normalize($data->getSpec(), 'json', $context);
        }
        if ($data->isInitialized('emails') && null !== $data->getEmails()) {
            $values = [];
            foreach ($data->getEmails() as $value) {
                $values[] = $value;
            }
            $dataArray['emails'] = $values;
        }
        if ($data->isInitialized('slackWebhooks') && null !== $data->getSlackWebhooks()) {
            $values_1 = [];
            foreach ($data->getSlackWebhooks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['slack_webhooks'] = $values_1;
        }
        if ($data->isInitialized('phase') && null !== $data->getPhase()) {
            $dataArray['phase'] = $data->getPhase();
        }
        if ($data->isInitialized('progress') && null !== $data->getProgress()) {
            $dataArray['progress'] = $this->normalizer->normalize($data->getProgress(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppAlert::class => false];
    }
}