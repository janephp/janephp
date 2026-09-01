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
class RacStatsRadiusProxyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\RacStatsRadiusProxy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\RacStatsRadiusProxy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\RacStatsRadiusProxy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('aaASerIp', $data)) {
            $object->aaASerIp = $data['aaASerIp'];
        }
        if (\array_key_exists('nasType', $data)) {
            $object->nasType = $data['nasType'];
        }
        if (\array_key_exists('numSuccAuth', $data)) {
            $object->numSuccAuth = $data['numSuccAuth'];
        }
        if (\array_key_exists('numFailAuth', $data)) {
            $object->numFailAuth = $data['numFailAuth'];
        }
        if (\array_key_exists('numInCompAuth', $data)) {
            $object->numInCompAuth = $data['numInCompAuth'];
        }
        if (\array_key_exists('numSuccAcct', $data)) {
            $object->numSuccAcct = $data['numSuccAcct'];
        }
        if (\array_key_exists('numFailAcct', $data)) {
            $object->numFailAcct = $data['numFailAcct'];
        }
        if (\array_key_exists('numOfAccReqAaa', $data)) {
            $object->numOfAccReqAaa = $data['numOfAccReqAaa'];
        }
        if (\array_key_exists('numOfAccAcceptAaa', $data)) {
            $object->numOfAccAcceptAaa = $data['numOfAccAcceptAaa'];
        }
        if (\array_key_exists('numOfAccRejAaa', $data)) {
            $object->numOfAccRejAaa = $data['numOfAccRejAaa'];
        }
        if (\array_key_exists('numOfAccChallAaa', $data)) {
            $object->numOfAccChallAaa = $data['numOfAccChallAaa'];
        }
        if (\array_key_exists('numOfAcctReqAaa', $data)) {
            $object->numOfAcctReqAaa = $data['numOfAcctReqAaa'];
        }
        if (\array_key_exists('numOfAcctRspAaa', $data)) {
            $object->numOfAcctRspAaa = $data['numOfAcctRspAaa'];
        }
        if (\array_key_exists('numOfCoAReqAaa', $data)) {
            $object->numOfCoAReqAaa = $data['numOfCoAReqAaa'];
        }
        if (\array_key_exists('numOfCoAResAaa', $data)) {
            $object->numOfCoAResAaa = $data['numOfCoAResAaa'];
        }
        if (\array_key_exists('numOfCoAFailAaa', $data)) {
            $object->numOfCoAFailAaa = $data['numOfCoAFailAaa'];
        }
        if (\array_key_exists('numAcsRqRcvdNas', $data)) {
            $object->numAcsRqRcvdNas = $data['numAcsRqRcvdNas'];
        }
        if (\array_key_exists('numAcsChSntNas', $data)) {
            $object->numAcsChSntNas = $data['numAcsChSntNas'];
        }
        if (\array_key_exists('numAcsAcpSntNas', $data)) {
            $object->numAcsAcpSntNas = $data['numAcsAcpSntNas'];
        }
        if (\array_key_exists('numAcsRejSntNas', $data)) {
            $object->numAcsRejSntNas = $data['numAcsRejSntNas'];
        }
        if (\array_key_exists('numAccRqRcvdNas', $data)) {
            $object->numAccRqRcvdNas = $data['numAccRqRcvdNas'];
        }
        if (\array_key_exists('numAccRspSntNas', $data)) {
            $object->numAccRspSntNas = $data['numAccRspSntNas'];
        }
        if (\array_key_exists('numCoaSntNas', $data)) {
            $object->numCoaSntNas = $data['numCoaSntNas'];
        }
        if (\array_key_exists('numCoaSucRcdNas', $data)) {
            $object->numCoaSucRcdNas = $data['numCoaSucRcdNas'];
        }
        if (\array_key_exists('numCoaFailRcdNas', $data)) {
            $object->numCoaFailRcdNas = $data['numCoaFailRcdNas'];
        }
        if (\array_key_exists('numDmSntNas', $data)) {
            $object->numDmSntNas = $data['numDmSntNas'];
        }
        if (\array_key_exists('numDmSucRcdNas', $data)) {
            $object->numDmSucRcdNas = $data['numDmSucRcdNas'];
        }
        if (\array_key_exists('numDmFailRcdNas', $data)) {
            $object->numDmFailRcdNas = $data['numDmFailRcdNas'];
        }
        if (\array_key_exists('numAuthOnlyAAA', $data)) {
            $object->numAuthOnlyAAA = $data['numAuthOnlyAAA'];
        }
        if (\array_key_exists('numAuthOnlySuccAAA', $data)) {
            $object->numAuthOnlySuccAAA = $data['numAuthOnlySuccAAA'];
        }
        if (\array_key_exists('numAuthOnlyFailedAAA', $data)) {
            $object->numAuthOnlyFailedAAA = $data['numAuthOnlyFailedAAA'];
        }
        if (\array_key_exists('recCreateTime', $data)) {
            $object->recCreateTime = $data['recCreateTime'];
        }
        if (\array_key_exists('recUpdateTime', $data)) {
            $object->recUpdateTime = $data['recUpdateTime'];
        }
        if (\array_key_exists('cbladeId', $data)) {
            $object->cbladeId = $data['cbladeId'];
        }
        if (\array_key_exists('aaaServiceName', $data)) {
            $object->aaaServiceName = $data['aaaServiceName'];
        }
        if (\array_key_exists('mvnoId', $data)) {
            $object->mvnoId = $data['mvnoId'];
        }
        if (\array_key_exists('numOfDmReqAaa', $data)) {
            $object->numOfDmReqAaa = $data['numOfDmReqAaa'];
        }
        if (\array_key_exists('numOfDmResAaa', $data)) {
            $object->numOfDmResAaa = $data['numOfDmResAaa'];
        }
        if (\array_key_exists('numOfDmFailAaa', $data)) {
            $object->numOfDmFailAaa = $data['numOfDmFailAaa'];
        }
        if (\array_key_exists('numRadSuccAPAcc', $data)) {
            $object->numRadSuccAPAcc = $data['numRadSuccAPAcc'];
        }
        if (\array_key_exists('numRadFailAPAcc', $data)) {
            $object->numRadFailAPAcc = $data['numRadFailAPAcc'];
        }
        if (\array_key_exists('numAPAcctReq', $data)) {
            $object->numAPAcctReq = $data['numAPAcctReq'];
        }
        if (\array_key_exists('numAPAcctRsp', $data)) {
            $object->numAPAcctRsp = $data['numAPAcctRsp'];
        }
        if (\array_key_exists('numDroppedRateLimitAuth', $data)) {
            $object->numDroppedRateLimitAuth = $data['numDroppedRateLimitAuth'];
        }
        if (\array_key_exists('numDroppedRateLimitAcct', $data)) {
            $object->numDroppedRateLimitAcct = $data['numDroppedRateLimitAcct'];
        }
        if (\array_key_exists('cbladeName', $data)) {
            $object->cbladeName = $data['cbladeName'];
        }
        if (\array_key_exists('mvnoName', $data)) {
            $object->mvnoName = $data['mvnoName'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('aaASerIp', get_object_vars($data)) && null !== ($data->aaASerIp ?? null)) {
            $dataArray['aaASerIp'] = $data->aaASerIp ?? null;
        }
        if (array_key_exists('nasType', get_object_vars($data)) && null !== ($data->nasType ?? null)) {
            $dataArray['nasType'] = $data->nasType ?? null;
        }
        if (array_key_exists('numSuccAuth', get_object_vars($data)) && null !== ($data->numSuccAuth ?? null)) {
            $dataArray['numSuccAuth'] = $data->numSuccAuth ?? null;
        }
        if (array_key_exists('numFailAuth', get_object_vars($data)) && null !== ($data->numFailAuth ?? null)) {
            $dataArray['numFailAuth'] = $data->numFailAuth ?? null;
        }
        if (array_key_exists('numInCompAuth', get_object_vars($data)) && null !== ($data->numInCompAuth ?? null)) {
            $dataArray['numInCompAuth'] = $data->numInCompAuth ?? null;
        }
        if (array_key_exists('numSuccAcct', get_object_vars($data)) && null !== ($data->numSuccAcct ?? null)) {
            $dataArray['numSuccAcct'] = $data->numSuccAcct ?? null;
        }
        if (array_key_exists('numFailAcct', get_object_vars($data)) && null !== ($data->numFailAcct ?? null)) {
            $dataArray['numFailAcct'] = $data->numFailAcct ?? null;
        }
        if (array_key_exists('numOfAccReqAaa', get_object_vars($data)) && null !== ($data->numOfAccReqAaa ?? null)) {
            $dataArray['numOfAccReqAaa'] = $data->numOfAccReqAaa ?? null;
        }
        if (array_key_exists('numOfAccAcceptAaa', get_object_vars($data)) && null !== ($data->numOfAccAcceptAaa ?? null)) {
            $dataArray['numOfAccAcceptAaa'] = $data->numOfAccAcceptAaa ?? null;
        }
        if (array_key_exists('numOfAccRejAaa', get_object_vars($data)) && null !== ($data->numOfAccRejAaa ?? null)) {
            $dataArray['numOfAccRejAaa'] = $data->numOfAccRejAaa ?? null;
        }
        if (array_key_exists('numOfAccChallAaa', get_object_vars($data)) && null !== ($data->numOfAccChallAaa ?? null)) {
            $dataArray['numOfAccChallAaa'] = $data->numOfAccChallAaa ?? null;
        }
        if (array_key_exists('numOfAcctReqAaa', get_object_vars($data)) && null !== ($data->numOfAcctReqAaa ?? null)) {
            $dataArray['numOfAcctReqAaa'] = $data->numOfAcctReqAaa ?? null;
        }
        if (array_key_exists('numOfAcctRspAaa', get_object_vars($data)) && null !== ($data->numOfAcctRspAaa ?? null)) {
            $dataArray['numOfAcctRspAaa'] = $data->numOfAcctRspAaa ?? null;
        }
        if (array_key_exists('numOfCoAReqAaa', get_object_vars($data)) && null !== ($data->numOfCoAReqAaa ?? null)) {
            $dataArray['numOfCoAReqAaa'] = $data->numOfCoAReqAaa ?? null;
        }
        if (array_key_exists('numOfCoAResAaa', get_object_vars($data)) && null !== ($data->numOfCoAResAaa ?? null)) {
            $dataArray['numOfCoAResAaa'] = $data->numOfCoAResAaa ?? null;
        }
        if (array_key_exists('numOfCoAFailAaa', get_object_vars($data)) && null !== ($data->numOfCoAFailAaa ?? null)) {
            $dataArray['numOfCoAFailAaa'] = $data->numOfCoAFailAaa ?? null;
        }
        if (array_key_exists('numAcsRqRcvdNas', get_object_vars($data)) && null !== ($data->numAcsRqRcvdNas ?? null)) {
            $dataArray['numAcsRqRcvdNas'] = $data->numAcsRqRcvdNas ?? null;
        }
        if (array_key_exists('numAcsChSntNas', get_object_vars($data)) && null !== ($data->numAcsChSntNas ?? null)) {
            $dataArray['numAcsChSntNas'] = $data->numAcsChSntNas ?? null;
        }
        if (array_key_exists('numAcsAcpSntNas', get_object_vars($data)) && null !== ($data->numAcsAcpSntNas ?? null)) {
            $dataArray['numAcsAcpSntNas'] = $data->numAcsAcpSntNas ?? null;
        }
        if (array_key_exists('numAcsRejSntNas', get_object_vars($data)) && null !== ($data->numAcsRejSntNas ?? null)) {
            $dataArray['numAcsRejSntNas'] = $data->numAcsRejSntNas ?? null;
        }
        if (array_key_exists('numAccRqRcvdNas', get_object_vars($data)) && null !== ($data->numAccRqRcvdNas ?? null)) {
            $dataArray['numAccRqRcvdNas'] = $data->numAccRqRcvdNas ?? null;
        }
        if (array_key_exists('numAccRspSntNas', get_object_vars($data)) && null !== ($data->numAccRspSntNas ?? null)) {
            $dataArray['numAccRspSntNas'] = $data->numAccRspSntNas ?? null;
        }
        if (array_key_exists('numCoaSntNas', get_object_vars($data)) && null !== ($data->numCoaSntNas ?? null)) {
            $dataArray['numCoaSntNas'] = $data->numCoaSntNas ?? null;
        }
        if (array_key_exists('numCoaSucRcdNas', get_object_vars($data)) && null !== ($data->numCoaSucRcdNas ?? null)) {
            $dataArray['numCoaSucRcdNas'] = $data->numCoaSucRcdNas ?? null;
        }
        if (array_key_exists('numCoaFailRcdNas', get_object_vars($data)) && null !== ($data->numCoaFailRcdNas ?? null)) {
            $dataArray['numCoaFailRcdNas'] = $data->numCoaFailRcdNas ?? null;
        }
        if (array_key_exists('numDmSntNas', get_object_vars($data)) && null !== ($data->numDmSntNas ?? null)) {
            $dataArray['numDmSntNas'] = $data->numDmSntNas ?? null;
        }
        if (array_key_exists('numDmSucRcdNas', get_object_vars($data)) && null !== ($data->numDmSucRcdNas ?? null)) {
            $dataArray['numDmSucRcdNas'] = $data->numDmSucRcdNas ?? null;
        }
        if (array_key_exists('numDmFailRcdNas', get_object_vars($data)) && null !== ($data->numDmFailRcdNas ?? null)) {
            $dataArray['numDmFailRcdNas'] = $data->numDmFailRcdNas ?? null;
        }
        if (array_key_exists('numAuthOnlyAAA', get_object_vars($data)) && null !== ($data->numAuthOnlyAAA ?? null)) {
            $dataArray['numAuthOnlyAAA'] = $data->numAuthOnlyAAA ?? null;
        }
        if (array_key_exists('numAuthOnlySuccAAA', get_object_vars($data)) && null !== ($data->numAuthOnlySuccAAA ?? null)) {
            $dataArray['numAuthOnlySuccAAA'] = $data->numAuthOnlySuccAAA ?? null;
        }
        if (array_key_exists('numAuthOnlyFailedAAA', get_object_vars($data)) && null !== ($data->numAuthOnlyFailedAAA ?? null)) {
            $dataArray['numAuthOnlyFailedAAA'] = $data->numAuthOnlyFailedAAA ?? null;
        }
        if (array_key_exists('recCreateTime', get_object_vars($data)) && null !== ($data->recCreateTime ?? null)) {
            $dataArray['recCreateTime'] = $data->recCreateTime ?? null;
        }
        if (array_key_exists('recUpdateTime', get_object_vars($data)) && null !== ($data->recUpdateTime ?? null)) {
            $dataArray['recUpdateTime'] = $data->recUpdateTime ?? null;
        }
        if (array_key_exists('cbladeId', get_object_vars($data)) && null !== ($data->cbladeId ?? null)) {
            $dataArray['cbladeId'] = $data->cbladeId ?? null;
        }
        if (array_key_exists('aaaServiceName', get_object_vars($data)) && null !== ($data->aaaServiceName ?? null)) {
            $dataArray['aaaServiceName'] = $data->aaaServiceName ?? null;
        }
        if (array_key_exists('mvnoId', get_object_vars($data)) && null !== ($data->mvnoId ?? null)) {
            $dataArray['mvnoId'] = $data->mvnoId ?? null;
        }
        if (array_key_exists('numOfDmReqAaa', get_object_vars($data)) && null !== ($data->numOfDmReqAaa ?? null)) {
            $dataArray['numOfDmReqAaa'] = $data->numOfDmReqAaa ?? null;
        }
        if (array_key_exists('numOfDmResAaa', get_object_vars($data)) && null !== ($data->numOfDmResAaa ?? null)) {
            $dataArray['numOfDmResAaa'] = $data->numOfDmResAaa ?? null;
        }
        if (array_key_exists('numOfDmFailAaa', get_object_vars($data)) && null !== ($data->numOfDmFailAaa ?? null)) {
            $dataArray['numOfDmFailAaa'] = $data->numOfDmFailAaa ?? null;
        }
        if (array_key_exists('numRadSuccAPAcc', get_object_vars($data)) && null !== ($data->numRadSuccAPAcc ?? null)) {
            $dataArray['numRadSuccAPAcc'] = $data->numRadSuccAPAcc ?? null;
        }
        if (array_key_exists('numRadFailAPAcc', get_object_vars($data)) && null !== ($data->numRadFailAPAcc ?? null)) {
            $dataArray['numRadFailAPAcc'] = $data->numRadFailAPAcc ?? null;
        }
        if (array_key_exists('numAPAcctReq', get_object_vars($data)) && null !== ($data->numAPAcctReq ?? null)) {
            $dataArray['numAPAcctReq'] = $data->numAPAcctReq ?? null;
        }
        if (array_key_exists('numAPAcctRsp', get_object_vars($data)) && null !== ($data->numAPAcctRsp ?? null)) {
            $dataArray['numAPAcctRsp'] = $data->numAPAcctRsp ?? null;
        }
        if (array_key_exists('numDroppedRateLimitAuth', get_object_vars($data)) && null !== ($data->numDroppedRateLimitAuth ?? null)) {
            $dataArray['numDroppedRateLimitAuth'] = $data->numDroppedRateLimitAuth ?? null;
        }
        if (array_key_exists('numDroppedRateLimitAcct', get_object_vars($data)) && null !== ($data->numDroppedRateLimitAcct ?? null)) {
            $dataArray['numDroppedRateLimitAcct'] = $data->numDroppedRateLimitAcct ?? null;
        }
        if (array_key_exists('cbladeName', get_object_vars($data)) && null !== ($data->cbladeName ?? null)) {
            $dataArray['cbladeName'] = $data->cbladeName ?? null;
        }
        if (array_key_exists('mvnoName', get_object_vars($data)) && null !== ($data->mvnoName ?? null)) {
            $dataArray['mvnoName'] = $data->mvnoName ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RacStatsRadiusProxy::class => false];
    }
}