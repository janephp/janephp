<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue963\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Issue963\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Issue963\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MemberDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Issue963\Model\MemberDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Issue963\Model\MemberDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Issue963\Model\MemberDetails();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Issue963\Validator\MemberDetailsConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('firstname', $data)) {
            $object->firstname = $data['firstname'];
            unset($data['firstname']);
        }
        if (\array_key_exists('lastname', $data)) {
            $object->lastname = $data['lastname'];
            unset($data['lastname']);
        }
        if (\array_key_exists('surname', $data)) {
            $object->surname = $data['surname'];
            unset($data['surname']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('email', $data)) {
            $object->email = $data['email'];
            unset($data['email']);
        }
        if (\array_key_exists('role', $data)) {
            $object->role = $data['role'];
            unset($data['role']);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('firstname', get_object_vars($data)) && null !== ($data->firstname ?? null)) {
            $dataArray['firstname'] = $data->firstname ?? null;
        }
        if (array_key_exists('lastname', get_object_vars($data)) && null !== ($data->lastname ?? null)) {
            $dataArray['lastname'] = $data->lastname ?? null;
        }
        if (array_key_exists('surname', get_object_vars($data)) && null !== ($data->surname ?? null)) {
            $dataArray['surname'] = $data->surname ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('email', get_object_vars($data)) && null !== ($data->email ?? null)) {
            $dataArray['email'] = $data->email ?? null;
        }
        if (array_key_exists('role', get_object_vars($data)) && null !== ($data->role ?? null)) {
            $dataArray['role'] = $data->role ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Issue963\Validator\MemberDetailsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Issue963\Model\MemberDetails::class => false];
    }
}