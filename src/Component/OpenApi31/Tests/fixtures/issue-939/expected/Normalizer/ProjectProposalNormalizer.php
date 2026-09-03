<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue939\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Issue939\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Issue939\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProjectProposalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Issue939\Model\ProjectProposal::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Issue939\Model\ProjectProposal::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Issue939\Model\ProjectProposal();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Issue939\Validator\ProjectProposalConstraint());
        }
        if (\array_key_exists('users', $data) && $data['users'] !== null) {
            $value = $data['users'];
            if (is_array($data['users'])) {
                $value = $this->denormalizer->denormalize($data['users'], \Jane\Component\OpenApi31\Tests\Expected\Issue939\Model\User::class, 'json', $context);
            } elseif (is_null($data['users'])) {
                $value = $data['users'];
            }
            $object->users = $value;
            unset($data['users']);
        }
        elseif (\array_key_exists('users', $data) && $data['users'] === null) {
            $object->users = null;
            unset($data['users']);
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
        if (array_key_exists('users', get_object_vars($data)) && null !== ($data->users ?? null)) {
            $value = $data->users ?? null;
            if (is_object($data->users ?? null)) {
                $value = ($data->users ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Issue939\Runtime\JsonObject($this->normalizer->normalize($data->users ?? null, 'json', $context));
            } elseif (is_null($data->users ?? null)) {
                $value = $data->users ?? null;
            }
            $dataArray['users'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Issue939\Validator\ProjectProposalConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Issue939\Model\ProjectProposal::class => false];
    }
}