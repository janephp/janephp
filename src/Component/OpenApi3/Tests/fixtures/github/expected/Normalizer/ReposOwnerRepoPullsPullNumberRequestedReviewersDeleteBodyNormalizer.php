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
class ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBodyConstraint());
        }
        if (\array_key_exists('reviewers', $data)) {
            $values = [];
            foreach ($data['reviewers'] as $value) {
                $values[] = $value;
            }
            $object->setReviewers($values);
            unset($data['reviewers']);
        }
        if (\array_key_exists('team_reviewers', $data)) {
            $values_1 = [];
            foreach ($data['team_reviewers'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTeamReviewers($values_1);
            unset($data['team_reviewers']);
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
        if ($data->isInitialized('reviewers') && null !== $data->getReviewers()) {
            $values = [];
            foreach ($data->getReviewers() as $value) {
                $values[] = $value;
            }
            $dataArray['reviewers'] = $values;
        }
        if ($data->isInitialized('teamReviewers') && null !== $data->getTeamReviewers()) {
            $values_1 = [];
            foreach ($data->getTeamReviewers() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['team_reviewers'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody::class => false];
    }
}