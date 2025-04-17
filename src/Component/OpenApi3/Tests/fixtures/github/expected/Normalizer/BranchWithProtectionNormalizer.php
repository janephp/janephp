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
class BranchWithProtectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\BranchWithProtection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\BranchWithProtection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\BranchWithProtection();
        if (\array_key_exists('protected', $data) && \is_int($data['protected'])) {
            $data['protected'] = (bool) $data['protected'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\BranchWithProtectionConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('commit', $data)) {
            $object->setCommit($this->denormalizer->denormalize($data['commit'], \Github\Model\Commit::class, 'json', $context));
            unset($data['commit']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], \Github\Model\BranchWithProtectionLinks::class, 'json', $context));
            unset($data['_links']);
        }
        if (\array_key_exists('protected', $data)) {
            $object->setProtected($data['protected']);
            unset($data['protected']);
        }
        if (\array_key_exists('protection', $data)) {
            $object->setProtection($this->denormalizer->denormalize($data['protection'], \Github\Model\BranchProtection::class, 'json', $context));
            unset($data['protection']);
        }
        if (\array_key_exists('protection_url', $data)) {
            $object->setProtectionUrl($data['protection_url']);
            unset($data['protection_url']);
        }
        if (\array_key_exists('pattern', $data)) {
            $object->setPattern($data['pattern']);
            unset($data['pattern']);
        }
        if (\array_key_exists('required_approving_review_count', $data)) {
            $object->setRequiredApprovingReviewCount($data['required_approving_review_count']);
            unset($data['required_approving_review_count']);
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
        $dataArray['name'] = $data->getName();
        $dataArray['commit'] = $this->normalizer->normalize($data->getCommit(), 'json', $context);
        $dataArray['_links'] = $this->normalizer->normalize($data->getLinks(), 'json', $context);
        $dataArray['protected'] = $data->getProtected();
        $dataArray['protection'] = $this->normalizer->normalize($data->getProtection(), 'json', $context);
        $dataArray['protection_url'] = $data->getProtectionUrl();
        if ($data->isInitialized('pattern') && null !== $data->getPattern()) {
            $dataArray['pattern'] = $data->getPattern();
        }
        if ($data->isInitialized('requiredApprovingReviewCount') && null !== $data->getRequiredApprovingReviewCount()) {
            $dataArray['required_approving_review_count'] = $data->getRequiredApprovingReviewCount();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\BranchWithProtectionConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\BranchWithProtection::class => false];
    }
}