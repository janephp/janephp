<?php

namespace Jane\Component\OpenApiCommon\Naming;

class ExceptionNaming
{
    private $statusNamingMapping = [
        400 => 'BadRequest',
        401 => 'Unauthorized',
        402 => 'PaymentRequired',
        403 => 'Forbidden',
        404 => 'NotFound',
        405 => 'MethodNotAllowed',
        406 => 'NotAcceptable',
        407 => 'ProxyAuthenticationRequired',
        408 => 'RequestTimeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'LengthRequired',
        412 => 'PreconditionFailed',
        413 => 'RequestEntityTooLarge',
        414 => 'RequestUriTooLong',
        415 => 'UnsupportedMediaType',
        416 => 'RequestedRangeNotSatisfiable',
        417 => 'ExpectationFailed',
        418 => 'IAmATeapot',
        421 => 'MisdirectedRequest',
        422 => 'UnprocessableEntity',
        423 => 'Locked',
        424 => 'FailedDependency',
        425 => 'ReservedForWebdavAdvancedCollectionsExpiredProposal',
        426 => 'UpgradeRequired',
        428 => 'PreconditionRequired',
        429 => 'TooManyRequests',
        431 => 'RequestHeaderFieldsTooLarge',
        451 => 'UnavailableForLegalReasons',
        500 => 'InternalServerError',
        501 => 'NotImplemented',
        502 => 'BadGateway',
        503 => 'ServiceUnavailable',
        504 => 'GatewayTimeout',
        505 => 'VersionNotSupported',
        506 => 'VariantAlsoNegotiatesExperimental',
        507 => 'InsufficientStorage',
        508 => 'LoopDetected',
        510 => 'NotExtended',
        511 => 'NetworkAuthenticationRequired',
    ];

    public function generateExceptionName(int $status, ?string $functionName = null): string
    {
        $genericName = (string) $status;
        if (\array_key_exists($status, $this->statusNamingMapping)) {
            $genericName = $this->statusNamingMapping[$status];
        } else {
            $genericName = \sprintf('Custom%s', $genericName);
        }

        $exceptionName = \sprintf('%sException', $genericName);
        if (null === $functionName) {
            return $exceptionName;
        }

        return \sprintf('%s%s', ucfirst($functionName), $exceptionName);
    }
}
