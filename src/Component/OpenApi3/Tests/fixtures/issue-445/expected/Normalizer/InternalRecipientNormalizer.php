<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InternalRecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\InternalRecipient::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\InternalRecipient::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\InternalRecipient();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('recipient', $data)) {
            $value = $data['recipient'];
            if (is_array($data['recipient']) and \array_key_exists('emailAddress', $data['recipient']) and \array_key_exists('isDeleted', $data['recipient'])) {
                $value = $this->denormalizer->denormalize($data['recipient'], \PicturePark\API\Model\User::class, 'json', $context);
            }
            $object->recipient = $value;
        }
        if (\array_key_exists('token', $data) && $data['token'] !== null) {
            $object->token = $data['token'];
        }
        elseif (\array_key_exists('token', $data) && $data['token'] === null) {
            $object->token = null;
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->url = $data['url'];
        }
        elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->url = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->recipient ?? null;
        if (is_object($data->recipient ?? null)) {
            $value = ($data->recipient ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->recipient ?? null, 'json', $context));
        }
        $dataArray['recipient'] = $value;
        if (array_key_exists('token', get_object_vars($data)) && null !== ($data->token ?? null)) {
            $dataArray['token'] = $data->token ?? null;
        }
        if (array_key_exists('url', get_object_vars($data)) && null !== ($data->url ?? null)) {
            $dataArray['url'] = $data->url ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\InternalRecipient::class => false];
    }
}