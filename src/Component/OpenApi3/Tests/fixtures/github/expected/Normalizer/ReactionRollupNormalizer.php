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
class ReactionRollupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReactionRollup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReactionRollup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ReactionRollup();
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
            $this->validate($data, new \Github\Validator\ReactionRollupConstraint());
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('total_count', $data)) {
            $object->setTotalCount($data['total_count']);
            unset($data['total_count']);
        }
        if (\array_key_exists('+1', $data)) {
            $object->set1($data['+1']);
            unset($data['+1']);
        }
        if (\array_key_exists('-1', $data)) {
            $object->set12($data['-1']);
            unset($data['-1']);
        }
        if (\array_key_exists('laugh', $data)) {
            $object->setLaugh($data['laugh']);
            unset($data['laugh']);
        }
        if (\array_key_exists('confused', $data)) {
            $object->setConfused($data['confused']);
            unset($data['confused']);
        }
        if (\array_key_exists('heart', $data)) {
            $object->setHeart($data['heart']);
            unset($data['heart']);
        }
        if (\array_key_exists('hooray', $data)) {
            $object->setHooray($data['hooray']);
            unset($data['hooray']);
        }
        if (\array_key_exists('eyes', $data)) {
            $object->setEyes($data['eyes']);
            unset($data['eyes']);
        }
        if (\array_key_exists('rocket', $data)) {
            $object->setRocket($data['rocket']);
            unset($data['rocket']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['total_count'] = $data->getTotalCount();
        $dataArray['+1'] = $data->get1();
        $dataArray['-1'] = $data->get12();
        $dataArray['laugh'] = $data->getLaugh();
        $dataArray['confused'] = $data->getConfused();
        $dataArray['heart'] = $data->getHeart();
        $dataArray['hooray'] = $data->getHooray();
        $dataArray['eyes'] = $data->getEyes();
        $dataArray['rocket'] = $data->getRocket();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReactionRollupConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReactionRollup::class => false];
    }
}