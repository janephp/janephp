<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProfileHs20OperatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20Operator::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20Operator::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20Operator();
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
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('domainNames', $data)) {
            $values = [];
            foreach ($data['domainNames'] as $value) {
                $values[] = $value;
            }
            $object->domainNames = $values;
        }
        if (\array_key_exists('friendlyNames', $data)) {
            $values_1 = [];
            foreach ($data['friendlyNames'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20FriendlyName::class, 'json', $context);
            }
            $object->friendlyNames = $values_1;
        }
        if (\array_key_exists('certificate', $data)) {
            $object->certificate = $this->denormalizer->denormalize($data['certificate'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('adviceOfCharges', $data)) {
            $values_2 = [];
            foreach ($data['adviceOfCharges'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20AdviceOfCharge::class, 'json', $context);
            }
            $object->adviceOfCharges = $values_2;
        }
        if (\array_key_exists('operatorIcons', $data)) {
            $values_3 = [];
            foreach ($data['operatorIcons'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20OperatorIcon::class, 'json', $context);
            }
            $object->operatorIcons = $values_3;
        }
        if (\array_key_exists('termsConditions', $data)) {
            $object->termsConditions = $this->denormalizer->denormalize($data['termsConditions'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20TermsConditions::class, 'json', $context);
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->createDateTime = $data['createDateTime'];
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->creatorId = $data['creatorId'];
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->modifierId = $data['modifierId'];
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->creatorUsername = $data['creatorUsername'];
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->modifierUsername = $data['modifierUsername'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        $values = [];
        foreach ($data->domainNames ?? null as $value) {
            $values[] = $value;
        }
        $dataArray['domainNames'] = $values;
        $values_1 = [];
        foreach ($data->friendlyNames ?? null as $value_1) {
            $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['friendlyNames'] = $values_1;
        if (array_key_exists('certificate', get_object_vars($data)) && null !== ($data->certificate ?? null)) {
            $dataArray['certificate'] = ($data->certificate ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->certificate ?? null, 'json', $context));
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('adviceOfCharges', get_object_vars($data)) && null !== ($data->adviceOfCharges ?? null)) {
            $values_2 = [];
            foreach ($data->adviceOfCharges ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['adviceOfCharges'] = $values_2;
        }
        if (array_key_exists('operatorIcons', get_object_vars($data)) && null !== ($data->operatorIcons ?? null)) {
            $values_3 = [];
            foreach ($data->operatorIcons ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['operatorIcons'] = $values_3;
        }
        if (array_key_exists('termsConditions', get_object_vars($data)) && null !== ($data->termsConditions ?? null)) {
            $dataArray['termsConditions'] = ($data->termsConditions ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->termsConditions ?? null, 'json', $context));
        }
        if (array_key_exists('createDateTime', get_object_vars($data)) && null !== ($data->createDateTime ?? null)) {
            $dataArray['createDateTime'] = $data->createDateTime ?? null;
        }
        if (array_key_exists('modifiedDateTime', get_object_vars($data)) && null !== ($data->modifiedDateTime ?? null)) {
            $dataArray['modifiedDateTime'] = $data->modifiedDateTime ?? null;
        }
        if (array_key_exists('creatorId', get_object_vars($data)) && null !== ($data->creatorId ?? null)) {
            $dataArray['creatorId'] = $data->creatorId ?? null;
        }
        if (array_key_exists('modifierId', get_object_vars($data)) && null !== ($data->modifierId ?? null)) {
            $dataArray['modifierId'] = $data->modifierId ?? null;
        }
        if (array_key_exists('creatorUsername', get_object_vars($data)) && null !== ($data->creatorUsername ?? null)) {
            $dataArray['creatorUsername'] = $data->creatorUsername ?? null;
        }
        if (array_key_exists('modifierUsername', get_object_vars($data)) && null !== ($data->modifierUsername ?? null)) {
            $dataArray['modifierUsername'] = $data->modifierUsername ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20Operator::class => false];
    }
}