<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ruleCode', $data)) {
            $object->ruleCode = $data['ruleCode'];
            unset($data['ruleCode']);
        }
        if (\array_key_exists('isActive', $data)) {
            $object->isActive = $data['isActive'];
            unset($data['isActive']);
        }
        if (\array_key_exists('param0', $data)) {
            $object->param0 = $data['param0'];
            unset($data['param0']);
        }
        if (\array_key_exists('param1', $data)) {
            $object->param1 = $data['param1'];
            unset($data['param1']);
        }
        if (\array_key_exists('param2...', $data)) {
            $object->param2 = $data['param2...'];
            unset($data['param2...']);
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
        $dataArray['ruleCode'] = $data->ruleCode ?? null;
        $dataArray['isActive'] = $data->isActive ?? null;
        if (array_key_exists('param0', get_object_vars($data)) && null !== ($data->param0 ?? null)) {
            $dataArray['param0'] = $data->param0 ?? null;
        }
        if (array_key_exists('param1', get_object_vars($data)) && null !== ($data->param1 ?? null)) {
            $dataArray['param1'] = $data->param1 ?? null;
        }
        if (array_key_exists('param2', get_object_vars($data)) && null !== ($data->param2 ?? null)) {
            $dataArray['param2...'] = $data->param2 ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem::class => false];
    }
}