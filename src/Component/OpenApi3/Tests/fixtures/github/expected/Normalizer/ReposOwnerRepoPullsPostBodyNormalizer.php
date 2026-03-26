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
class ReposOwnerRepoPullsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoPullsPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoPullsPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoPullsPostBody();
        if (\array_key_exists('maintainer_can_modify', $data) && \is_int($data['maintainer_can_modify'])) {
            $data['maintainer_can_modify'] = (bool) $data['maintainer_can_modify'];
        }
        if (\array_key_exists('draft', $data) && \is_int($data['draft'])) {
            $data['draft'] = (bool) $data['draft'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoPullsPostBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('head', $data)) {
            $object->setHead($data['head']);
            unset($data['head']);
        }
        if (\array_key_exists('base', $data)) {
            $object->setBase($data['base']);
            unset($data['base']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('maintainer_can_modify', $data)) {
            $object->setMaintainerCanModify($data['maintainer_can_modify']);
            unset($data['maintainer_can_modify']);
        }
        if (\array_key_exists('draft', $data)) {
            $object->setDraft($data['draft']);
            unset($data['draft']);
        }
        if (\array_key_exists('issue', $data)) {
            $object->setIssue($data['issue']);
            unset($data['issue']);
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
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        $dataArray['head'] = $data->getHead();
        $dataArray['base'] = $data->getBase();
        if ($data->isInitialized('body') && null !== $data->getBody()) {
            $dataArray['body'] = $data->getBody();
        }
        if ($data->isInitialized('maintainerCanModify') && null !== $data->getMaintainerCanModify()) {
            $dataArray['maintainer_can_modify'] = $data->getMaintainerCanModify();
        }
        if ($data->isInitialized('draft') && null !== $data->getDraft()) {
            $dataArray['draft'] = $data->getDraft();
        }
        if ($data->isInitialized('issue') && null !== $data->getIssue()) {
            $dataArray['issue'] = $data->getIssue();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoPullsPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoPullsPostBody::class => false];
    }
}