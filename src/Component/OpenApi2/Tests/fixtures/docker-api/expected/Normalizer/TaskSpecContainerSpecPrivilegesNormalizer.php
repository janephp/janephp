<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\TaskSpecContainerSpecPrivileges::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\TaskSpecContainerSpecPrivileges::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\TaskSpecContainerSpecPrivileges();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\TaskSpecContainerSpecPrivilegesConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CredentialSpec', $data)) {
            $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], \Docker\Api\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class, 'json', $context));
        }
        if (\array_key_exists('SELinuxContext', $data)) {
            $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], \Docker\Api\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('credentialSpec') && null !== $data->getCredentialSpec()) {
            $dataArray['CredentialSpec'] = $this->normalizer->normalize($data->getCredentialSpec(), 'json', $context);
        }
        if ($data->isInitialized('sELinuxContext') && null !== $data->getSELinuxContext()) {
            $dataArray['SELinuxContext'] = $this->normalizer->normalize($data->getSELinuxContext(), 'json', $context);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\TaskSpecContainerSpecPrivilegesConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\TaskSpecContainerSpecPrivileges::class => false];
    }
}