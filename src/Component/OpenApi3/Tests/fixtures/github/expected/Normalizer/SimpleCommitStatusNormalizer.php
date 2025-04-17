<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SimpleCommitStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\SimpleCommitStatus::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\SimpleCommitStatus::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\SimpleCommitStatus();
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\SimpleCommitStatusConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
            unset($data['context']);
        }
        if (\array_key_exists('target_url', $data)) {
            $object->setTargetUrl($data['target_url']);
            unset($data['target_url']);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $object->setRequired($data['required']);
            unset($data['required']);
        }
        elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
        }
        if (\array_key_exists('avatar_url', $data) && $data['avatar_url'] !== null) {
            $object->setAvatarUrl($data['avatar_url']);
            unset($data['avatar_url']);
        }
        elseif (\array_key_exists('avatar_url', $data) && $data['avatar_url'] === null) {
            $object->setAvatarUrl(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
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
        $dataArray['description'] = $data->getDescription();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['state'] = $data->getState();
        $dataArray['context'] = $data->getContext();
        $dataArray['target_url'] = $data->getTargetUrl();
        if ($data->isInitialized('required') && null !== $data->getRequired()) {
            $dataArray['required'] = $data->getRequired();
        }
        $dataArray['avatar_url'] = $data->getAvatarUrl();
        $dataArray['url'] = $data->getUrl();
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\SimpleCommitStatusConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\SimpleCommitStatus::class => false];
    }
}