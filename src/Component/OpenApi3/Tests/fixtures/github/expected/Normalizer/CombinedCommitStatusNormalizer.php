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
class CombinedCommitStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CombinedCommitStatus::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CombinedCommitStatus::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\CombinedCommitStatus();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CombinedCommitStatusConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('statuses', $data)) {
            $values = [];
            foreach ($data['statuses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\SimpleCommitStatus::class, 'json', $context);
            }
            $object->setStatuses($values);
            unset($data['statuses']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
            unset($data['sha']);
        }
        if (\array_key_exists('total_count', $data)) {
            $object->setTotalCount($data['total_count']);
            unset($data['total_count']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], \Github\Model\MinimalRepository::class, 'json', $context));
            unset($data['repository']);
        }
        if (\array_key_exists('commit_url', $data)) {
            $object->setCommitUrl($data['commit_url']);
            unset($data['commit_url']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['state'] = $data->getState();
        $values = [];
        foreach ($data->getStatuses() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['statuses'] = $values;
        $dataArray['sha'] = $data->getSha();
        $dataArray['total_count'] = $data->getTotalCount();
        $dataArray['repository'] = $this->normalizer->normalize($data->getRepository(), 'json', $context);
        $dataArray['commit_url'] = $data->getCommitUrl();
        $dataArray['url'] = $data->getUrl();
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\CombinedCommitStatusConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CombinedCommitStatus::class => false];
    }
}