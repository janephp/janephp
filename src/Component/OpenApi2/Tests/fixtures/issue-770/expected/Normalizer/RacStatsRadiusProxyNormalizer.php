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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\RacStatsRadiusProxy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('aaASerIp', $data)) {
            $object->setAaASerIp($data['aaASerIp']);
        }
        if (\array_key_exists('nasType', $data)) {
            $object->setNasType($data['nasType']);
        }
        if (\array_key_exists('numSuccAuth', $data)) {
            $object->setNumSuccAuth($data['numSuccAuth']);
        }
        if (\array_key_exists('numFailAuth', $data)) {
            $object->setNumFailAuth($data['numFailAuth']);
        }
        if (\array_key_exists('numInCompAuth', $data)) {
            $object->setNumInCompAuth($data['numInCompAuth']);
        }
        if (\array_key_exists('numSuccAcct', $data)) {
            $object->setNumSuccAcct($data['numSuccAcct']);
        }
        if (\array_key_exists('numFailAcct', $data)) {
            $object->setNumFailAcct($data['numFailAcct']);
        }
        if (\array_key_exists('numOfAccReqAaa', $data)) {
            $object->setNumOfAccReqAaa($data['numOfAccReqAaa']);
        }
        if (\array_key_exists('numOfAccAcceptAaa', $data)) {
            $object->setNumOfAccAcceptAaa($data['numOfAccAcceptAaa']);
        }
        if (\array_key_exists('numOfAccRejAaa', $data)) {
            $object->setNumOfAccRejAaa($data['numOfAccRejAaa']);
        }
        if (\array_key_exists('numOfAccChallAaa', $data)) {
            $object->setNumOfAccChallAaa($data['numOfAccChallAaa']);
        }
        if (\array_key_exists('numOfAcctReqAaa', $data)) {
            $object->setNumOfAcctReqAaa($data['numOfAcctReqAaa']);
        }
        if (\array_key_exists('numOfAcctRspAaa', $data)) {
            $object->setNumOfAcctRspAaa($data['numOfAcctRspAaa']);
        }
        if (\array_key_exists('numOfCoAReqAaa', $data)) {
            $object->setNumOfCoAReqAaa($data['numOfCoAReqAaa']);
        }
        if (\array_key_exists('numOfCoAResAaa', $data)) {
            $object->setNumOfCoAResAaa($data['numOfCoAResAaa']);
        }
        if (\array_key_exists('numOfCoAFailAaa', $data)) {
            $object->setNumOfCoAFailAaa($data['numOfCoAFailAaa']);
        }
        if (\array_key_exists('numAcsRqRcvdNas', $data)) {
            $object->setNumAcsRqRcvdNas($data['numAcsRqRcvdNas']);
        }
        if (\array_key_exists('numAcsChSntNas', $data)) {
            $object->setNumAcsChSntNas($data['numAcsChSntNas']);
        }
        if (\array_key_exists('numAcsAcpSntNas', $data)) {
            $object->setNumAcsAcpSntNas($data['numAcsAcpSntNas']);
        }
        if (\array_key_exists('numAcsRejSntNas', $data)) {
            $object->setNumAcsRejSntNas($data['numAcsRejSntNas']);
        }
        if (\array_key_exists('numAccRqRcvdNas', $data)) {
            $object->setNumAccRqRcvdNas($data['numAccRqRcvdNas']);
        }
        if (\array_key_exists('numAccRspSntNas', $data)) {
            $object->setNumAccRspSntNas($data['numAccRspSntNas']);
        }
        if (\array_key_exists('numCoaSntNas', $data)) {
            $object->setNumCoaSntNas($data['numCoaSntNas']);
        }
        if (\array_key_exists('numCoaSucRcdNas', $data)) {
            $object->setNumCoaSucRcdNas($data['numCoaSucRcdNas']);
        }
        if (\array_key_exists('numCoaFailRcdNas', $data)) {
            $object->setNumCoaFailRcdNas($data['numCoaFailRcdNas']);
        }
        if (\array_key_exists('numDmSntNas', $data)) {
            $object->setNumDmSntNas($data['numDmSntNas']);
        }
        if (\array_key_exists('numDmSucRcdNas', $data)) {
            $object->setNumDmSucRcdNas($data['numDmSucRcdNas']);
        }
        if (\array_key_exists('numDmFailRcdNas', $data)) {
            $object->setNumDmFailRcdNas($data['numDmFailRcdNas']);
        }
        if (\array_key_exists('numAuthOnlyAAA', $data)) {
            $object->setNumAuthOnlyAAA($data['numAuthOnlyAAA']);
        }
        if (\array_key_exists('numAuthOnlySuccAAA', $data)) {
            $object->setNumAuthOnlySuccAAA($data['numAuthOnlySuccAAA']);
        }
        if (\array_key_exists('numAuthOnlyFailedAAA', $data)) {
            $object->setNumAuthOnlyFailedAAA($data['numAuthOnlyFailedAAA']);
        }
        if (\array_key_exists('recCreateTime', $data)) {
            $object->setRecCreateTime($data['recCreateTime']);
        }
        if (\array_key_exists('recUpdateTime', $data)) {
            $object->setRecUpdateTime($data['recUpdateTime']);
        }
        if (\array_key_exists('cbladeId', $data)) {
            $object->setCbladeId($data['cbladeId']);
        }
        if (\array_key_exists('aaaServiceName', $data)) {
            $object->setAaaServiceName($data['aaaServiceName']);
        }
        if (\array_key_exists('mvnoId', $data)) {
            $object->setMvnoId($data['mvnoId']);
        }
        if (\array_key_exists('numOfDmReqAaa', $data)) {
            $object->setNumOfDmReqAaa($data['numOfDmReqAaa']);
        }
        if (\array_key_exists('numOfDmResAaa', $data)) {
            $object->setNumOfDmResAaa($data['numOfDmResAaa']);
        }
        if (\array_key_exists('numOfDmFailAaa', $data)) {
            $object->setNumOfDmFailAaa($data['numOfDmFailAaa']);
        }
        if (\array_key_exists('numRadSuccAPAcc', $data)) {
            $object->setNumRadSuccAPAcc($data['numRadSuccAPAcc']);
        }
        if (\array_key_exists('numRadFailAPAcc', $data)) {
            $object->setNumRadFailAPAcc($data['numRadFailAPAcc']);
        }
        if (\array_key_exists('numAPAcctReq', $data)) {
            $object->setNumAPAcctReq($data['numAPAcctReq']);
        }
        if (\array_key_exists('numAPAcctRsp', $data)) {
            $object->setNumAPAcctRsp($data['numAPAcctRsp']);
        }
        if (\array_key_exists('numDroppedRateLimitAuth', $data)) {
            $object->setNumDroppedRateLimitAuth($data['numDroppedRateLimitAuth']);
        }
        if (\array_key_exists('numDroppedRateLimitAcct', $data)) {
            $object->setNumDroppedRateLimitAcct($data['numDroppedRateLimitAcct']);
        }
        if (\array_key_exists('cbladeName', $data)) {
            $object->setCbladeName($data['cbladeName']);
        }
        if (\array_key_exists('mvnoName', $data)) {
            $object->setMvnoName($data['mvnoName']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('aaASerIp') && null !== $data->getAaASerIp()) {
            $dataArray['aaASerIp'] = $data->getAaASerIp();
        }
        if ($data->isInitialized('nasType') && null !== $data->getNasType()) {
            $dataArray['nasType'] = $data->getNasType();
        }
        if ($data->isInitialized('numSuccAuth') && null !== $data->getNumSuccAuth()) {
            $dataArray['numSuccAuth'] = $data->getNumSuccAuth();
        }
        if ($data->isInitialized('numFailAuth') && null !== $data->getNumFailAuth()) {
            $dataArray['numFailAuth'] = $data->getNumFailAuth();
        }
        if ($data->isInitialized('numInCompAuth') && null !== $data->getNumInCompAuth()) {
            $dataArray['numInCompAuth'] = $data->getNumInCompAuth();
        }
        if ($data->isInitialized('numSuccAcct') && null !== $data->getNumSuccAcct()) {
            $dataArray['numSuccAcct'] = $data->getNumSuccAcct();
        }
        if ($data->isInitialized('numFailAcct') && null !== $data->getNumFailAcct()) {
            $dataArray['numFailAcct'] = $data->getNumFailAcct();
        }
        if ($data->isInitialized('numOfAccReqAaa') && null !== $data->getNumOfAccReqAaa()) {
            $dataArray['numOfAccReqAaa'] = $data->getNumOfAccReqAaa();
        }
        if ($data->isInitialized('numOfAccAcceptAaa') && null !== $data->getNumOfAccAcceptAaa()) {
            $dataArray['numOfAccAcceptAaa'] = $data->getNumOfAccAcceptAaa();
        }
        if ($data->isInitialized('numOfAccRejAaa') && null !== $data->getNumOfAccRejAaa()) {
            $dataArray['numOfAccRejAaa'] = $data->getNumOfAccRejAaa();
        }
        if ($data->isInitialized('numOfAccChallAaa') && null !== $data->getNumOfAccChallAaa()) {
            $dataArray['numOfAccChallAaa'] = $data->getNumOfAccChallAaa();
        }
        if ($data->isInitialized('numOfAcctReqAaa') && null !== $data->getNumOfAcctReqAaa()) {
            $dataArray['numOfAcctReqAaa'] = $data->getNumOfAcctReqAaa();
        }
        if ($data->isInitialized('numOfAcctRspAaa') && null !== $data->getNumOfAcctRspAaa()) {
            $dataArray['numOfAcctRspAaa'] = $data->getNumOfAcctRspAaa();
        }
        if ($data->isInitialized('numOfCoAReqAaa') && null !== $data->getNumOfCoAReqAaa()) {
            $dataArray['numOfCoAReqAaa'] = $data->getNumOfCoAReqAaa();
        }
        if ($data->isInitialized('numOfCoAResAaa') && null !== $data->getNumOfCoAResAaa()) {
            $dataArray['numOfCoAResAaa'] = $data->getNumOfCoAResAaa();
        }
        if ($data->isInitialized('numOfCoAFailAaa') && null !== $data->getNumOfCoAFailAaa()) {
            $dataArray['numOfCoAFailAaa'] = $data->getNumOfCoAFailAaa();
        }
        if ($data->isInitialized('numAcsRqRcvdNas') && null !== $data->getNumAcsRqRcvdNas()) {
            $dataArray['numAcsRqRcvdNas'] = $data->getNumAcsRqRcvdNas();
        }
        if ($data->isInitialized('numAcsChSntNas') && null !== $data->getNumAcsChSntNas()) {
            $dataArray['numAcsChSntNas'] = $data->getNumAcsChSntNas();
        }
        if ($data->isInitialized('numAcsAcpSntNas') && null !== $data->getNumAcsAcpSntNas()) {
            $dataArray['numAcsAcpSntNas'] = $data->getNumAcsAcpSntNas();
        }
        if ($data->isInitialized('numAcsRejSntNas') && null !== $data->getNumAcsRejSntNas()) {
            $dataArray['numAcsRejSntNas'] = $data->getNumAcsRejSntNas();
        }
        if ($data->isInitialized('numAccRqRcvdNas') && null !== $data->getNumAccRqRcvdNas()) {
            $dataArray['numAccRqRcvdNas'] = $data->getNumAccRqRcvdNas();
        }
        if ($data->isInitialized('numAccRspSntNas') && null !== $data->getNumAccRspSntNas()) {
            $dataArray['numAccRspSntNas'] = $data->getNumAccRspSntNas();
        }
        if ($data->isInitialized('numCoaSntNas') && null !== $data->getNumCoaSntNas()) {
            $dataArray['numCoaSntNas'] = $data->getNumCoaSntNas();
        }
        if ($data->isInitialized('numCoaSucRcdNas') && null !== $data->getNumCoaSucRcdNas()) {
            $dataArray['numCoaSucRcdNas'] = $data->getNumCoaSucRcdNas();
        }
        if ($data->isInitialized('numCoaFailRcdNas') && null !== $data->getNumCoaFailRcdNas()) {
            $dataArray['numCoaFailRcdNas'] = $data->getNumCoaFailRcdNas();
        }
        if ($data->isInitialized('numDmSntNas') && null !== $data->getNumDmSntNas()) {
            $dataArray['numDmSntNas'] = $data->getNumDmSntNas();
        }
        if ($data->isInitialized('numDmSucRcdNas') && null !== $data->getNumDmSucRcdNas()) {
            $dataArray['numDmSucRcdNas'] = $data->getNumDmSucRcdNas();
        }
        if ($data->isInitialized('numDmFailRcdNas') && null !== $data->getNumDmFailRcdNas()) {
            $dataArray['numDmFailRcdNas'] = $data->getNumDmFailRcdNas();
        }
        if ($data->isInitialized('numAuthOnlyAAA') && null !== $data->getNumAuthOnlyAAA()) {
            $dataArray['numAuthOnlyAAA'] = $data->getNumAuthOnlyAAA();
        }
        if ($data->isInitialized('numAuthOnlySuccAAA') && null !== $data->getNumAuthOnlySuccAAA()) {
            $dataArray['numAuthOnlySuccAAA'] = $data->getNumAuthOnlySuccAAA();
        }
        if ($data->isInitialized('numAuthOnlyFailedAAA') && null !== $data->getNumAuthOnlyFailedAAA()) {
            $dataArray['numAuthOnlyFailedAAA'] = $data->getNumAuthOnlyFailedAAA();
        }
        if ($data->isInitialized('recCreateTime') && null !== $data->getRecCreateTime()) {
            $dataArray['recCreateTime'] = $data->getRecCreateTime();
        }
        if ($data->isInitialized('recUpdateTime') && null !== $data->getRecUpdateTime()) {
            $dataArray['recUpdateTime'] = $data->getRecUpdateTime();
        }
        if ($data->isInitialized('cbladeId') && null !== $data->getCbladeId()) {
            $dataArray['cbladeId'] = $data->getCbladeId();
        }
        if ($data->isInitialized('aaaServiceName') && null !== $data->getAaaServiceName()) {
            $dataArray['aaaServiceName'] = $data->getAaaServiceName();
        }
        if ($data->isInitialized('mvnoId') && null !== $data->getMvnoId()) {
            $dataArray['mvnoId'] = $data->getMvnoId();
        }
        if ($data->isInitialized('numOfDmReqAaa') && null !== $data->getNumOfDmReqAaa()) {
            $dataArray['numOfDmReqAaa'] = $data->getNumOfDmReqAaa();
        }
        if ($data->isInitialized('numOfDmResAaa') && null !== $data->getNumOfDmResAaa()) {
            $dataArray['numOfDmResAaa'] = $data->getNumOfDmResAaa();
        }
        if ($data->isInitialized('numOfDmFailAaa') && null !== $data->getNumOfDmFailAaa()) {
            $dataArray['numOfDmFailAaa'] = $data->getNumOfDmFailAaa();
        }
        if ($data->isInitialized('numRadSuccAPAcc') && null !== $data->getNumRadSuccAPAcc()) {
            $dataArray['numRadSuccAPAcc'] = $data->getNumRadSuccAPAcc();
        }
        if ($data->isInitialized('numRadFailAPAcc') && null !== $data->getNumRadFailAPAcc()) {
            $dataArray['numRadFailAPAcc'] = $data->getNumRadFailAPAcc();
        }
        if ($data->isInitialized('numAPAcctReq') && null !== $data->getNumAPAcctReq()) {
            $dataArray['numAPAcctReq'] = $data->getNumAPAcctReq();
        }
        if ($data->isInitialized('numAPAcctRsp') && null !== $data->getNumAPAcctRsp()) {
            $dataArray['numAPAcctRsp'] = $data->getNumAPAcctRsp();
        }
        if ($data->isInitialized('numDroppedRateLimitAuth') && null !== $data->getNumDroppedRateLimitAuth()) {
            $dataArray['numDroppedRateLimitAuth'] = $data->getNumDroppedRateLimitAuth();
        }
        if ($data->isInitialized('numDroppedRateLimitAcct') && null !== $data->getNumDroppedRateLimitAcct()) {
            $dataArray['numDroppedRateLimitAcct'] = $data->getNumDroppedRateLimitAcct();
        }
        if ($data->isInitialized('cbladeName') && null !== $data->getCbladeName()) {
            $dataArray['cbladeName'] = $data->getCbladeName();
        }
        if ($data->isInitialized('mvnoName') && null !== $data->getMvnoName()) {
            $dataArray['mvnoName'] = $data->getMvnoName();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RacStatsRadiusProxy::class => false];
    }
}