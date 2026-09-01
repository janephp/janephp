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
class MailRecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\MailRecipient::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\MailRecipient::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\MailRecipient();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('userEmail', $data)) {
            $value = $data['userEmail'];
            if (is_array($data['userEmail']) and \array_key_exists('emailAddress', $data['userEmail'])) {
                $value = $this->denormalizer->denormalize($data['userEmail'], \PicturePark\API\Model\UserEmail::class, 'json', $context);
            }
            $object->userEmail = $value;
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
        $value = $data->userEmail ?? null;
        if (is_object($data->userEmail ?? null)) {
            $value = ($data->userEmail ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->userEmail ?? null, 'json', $context));
        }
        $dataArray['userEmail'] = $value;
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
        return [\PicturePark\API\Model\MailRecipient::class => false];
    }
}