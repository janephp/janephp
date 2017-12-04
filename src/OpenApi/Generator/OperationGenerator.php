<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\Model\Response;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi\Generator\Parameter\BodyParameterGenerator;
use Jane\OpenApi\Generator\Parameter\FormDataParameterGenerator;
use Jane\OpenApi\Generator\Parameter\HeaderParameterGenerator;
use Jane\OpenApi\Generator\Parameter\PathParameterGenerator;
use Jane\OpenApi\Generator\Parameter\QueryParameterGenerator;
use Jane\OpenApi\Operation\Operation;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Scalar;
use PhpParser\Comment;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class OperationGenerator
{
    use OutputGeneratorTrait;
    use InputGeneratorTrait;

    /**
     * @var DenormalizerInterface
     */
    protected $denormalizer;

    public function __construct(DenormalizerInterface $denormalizer, BodyParameterGenerator $bodyParameterGenerator, FormDataParameterGenerator $formDataParameterGenerator, HeaderParameterGenerator $headerParameterGenerator, PathParameterGenerator $pathParameterGenerator, QueryParameterGenerator $queryParameterGenerator)
    {
        $this->denormalizer = $denormalizer;
        $this->bodyParameterGenerator = $bodyParameterGenerator;
        $this->formDataParameterGenerator = $formDataParameterGenerator;
        $this->headerParameterGenerator = $headerParameterGenerator;
        $this->pathParameterGenerator = $pathParameterGenerator;
        $this->queryParameterGenerator = $queryParameterGenerator;
    }

    public function generateSync($name, Operation $operation, Context $context)
    {
        list($queryParamDocumentation, , ) = $this->createQueryParamStatements($operation);
        list($documentationParameters, $parameters) = $this->createParameters($operation, $queryParamDocumentation, $context);
        list($statements, $outputTypes) = $this->getOperationStatements(
            $name,
            $operation,
            $context,
            // $response = $this->httpClient->sendRequest($request);
            new Expr\Assign(new Expr\Variable('response'), new Expr\MethodCall(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'httpClient'),
                'sendRequest',
                [new Arg(new Expr\Variable('request'))]
            ))
        );

        $documentation = array_merge(
            [
                '/**',
                sprintf(' * %s', $operation->getOperation()->getDescription()),
                ' *',
            ],
            $documentationParameters,
            [
                ' *',
                ' * @return ' . implode('|', $outputTypes),
                ' */',
            ]
        );

        return new Stmt\ClassMethod($name, [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => $parameters,
            'stmts' => $statements,
        ], [
            'comments' => [new Comment\Doc(implode("\n", $documentation))],
        ]);
    }

    public function generateAsync($name, Operation $operation, Context $context)
    {
        list($queryParamDocumentation, , ) = $this->createQueryParamStatements($operation);
        list($documentationParameters, $parameters) = $this->createParameters($operation, $queryParamDocumentation, $context);
        list($statements, $outputTypes) = $this->getOperationStatements(
            $name,
            $operation,
            $context,
            // $response = yield $this->httpClient->sendAsyncRequest($request);
            new Expr\Assign(new Expr\Variable('response'), new Expr\Yield_(new Expr\MethodCall(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'httpClient'),
                'sendAsyncRequest',
                [new Arg(new Expr\Variable('request'))]
            )))
        );

        $documentation = array_merge(
            [
                '/**',
                sprintf(' * %s', $operation->getOperation()->getDescription()),
                ' *',
            ],
            $documentationParameters,
            [
                ' *',
                ' * @return \Amp\Promise<' . implode('|', $outputTypes).'>',
                ' */',
            ]
        );

        $vars = [];

        /** @var Param $parameter */
        foreach ($parameters as $parameter) {
            $vars[] = new Expr\Variable($parameter->name);
        }

        return new Stmt\ClassMethod($name, [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => $parameters,
            'stmts' => [
                 new Stmt\Return_(
                     new Expr\FuncCall(new Name('\Amp\call'), array_merge([
                         new Expr\Closure([
                             'stmts' => $statements,
                             'params' => $parameters,
                         ]),
                     ], $vars))
                 )
            ],
        ], [
            'comments' => [new Comment\Doc(implode("\n", $documentation))],
        ]);
    }

    protected function getOperationStatements($name, Operation $operation, Context $context, Expr $getResponse)
    {
        // Input
        list(, $queryParamStatements, $queryParamVariable) = $this->createQueryParamStatements($operation);
        list($urlStatements, $urlVariable) = $this->createUrlStatements($operation, $queryParamVariable);
        list($bodyStatements, $bodyVariable) = $this->createBodyStatements($operation, $queryParamVariable, $context);
        list($headerStatements, $headerVariable) = $this->createHeaderStatements($operation, $queryParamVariable);

        $statements = array_merge($queryParamStatements, $urlStatements, $headerStatements, $bodyStatements, [
            // $request = $this->messageFactory->createRequest('method', $url, $headers, $body);
            new Expr\Assign(new Expr\Variable('request'), new Expr\MethodCall(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'messageFactory'),
                'createRequest',
                [
                    new Arg(new Scalar\String_($operation->getMethod())),
                    new Arg($urlVariable),
                    new Arg($headerVariable),
                    new Arg($bodyVariable),
                ]
            )),
            $getResponse,
        ]);

        // Output
        $outputStatements = [];
        $outputTypes = ['\\Psr\\Http\\Message\\ResponseInterface'];

        if ($operation->getOperation()->getResponses()) {
            foreach ($operation->getOperation()->getResponses() as $status => $response) {
                if ($response instanceof Reference) {
                    list(, $response) = $this->resolve($response, Response::class);
                }

                list($outputType, $ifStatus) = $this->createResponseDenormalizationStatement(
                    $status,
                    $response->getSchema(),
                    $context,
                    $operation->getReference() . '/responses/' . $status
                );

                if (null !== $outputType) {
                    if (!in_array($outputType, $outputTypes)) {
                        $outputTypes[] = $outputType;
                    }

                    $outputStatements[] = $ifStatus;
                }
            }
        }

        if (!empty($outputStatements)) {
            $statements[] = new Stmt\If_(
                new Expr\BinaryOp\Equal(new Expr\ConstFetch(new Name('self::FETCH_OBJECT')), new Expr\Variable('fetch')),
                [
                    'stmts' => $outputStatements,
                ]
            );
        }

        // return $response
        $statements[] = new Stmt\Return_(new Expr\Variable('response'));

        return [$statements, $outputTypes];
    }

    /**
     * @return DenormalizerInterface
     */
    protected function getDenormalizer()
    {
        return $this->denormalizer;
    }
}
