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
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Comment;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

abstract class OperationGenerator
{
    use OutputGeneratorTrait;
    use InputGeneratorTrait;

    /**
     * @var DenormalizerInterface
     */
    protected $denormalizer;

    protected $exceptionGenerator;

    public function __construct(
        DenormalizerInterface $denormalizer,
        BodyParameterGenerator $bodyParameterGenerator,
        FormDataParameterGenerator $formDataParameterGenerator,
        HeaderParameterGenerator $headerParameterGenerator,
        PathParameterGenerator $pathParameterGenerator,
        QueryParameterGenerator $queryParameterGenerator,
        ExceptionGenerator $exceptionGenerator
    ) {
        $this->denormalizer = $denormalizer;
        $this->bodyParameterGenerator = $bodyParameterGenerator;
        $this->formDataParameterGenerator = $formDataParameterGenerator;
        $this->headerParameterGenerator = $headerParameterGenerator;
        $this->pathParameterGenerator = $pathParameterGenerator;
        $this->queryParameterGenerator = $queryParameterGenerator;
        $this->exceptionGenerator = $exceptionGenerator;
    }

    abstract protected function getAssignResponseStatement(): Expr;

    abstract protected function getReturnTypesForDoc($outputTypes): string;

    abstract protected function getResponseClass(): string;

    abstract protected function getCreateRequestStatements(string $method, Expr\Variable $urlVariable, Expr\Variable $headerVariable, Expr\Variable $bodyVariable): array;

    public function createOperation($name, Operation $operation, Context $context): Stmt\ClassMethod
    {
        list($queryParamDocumentation, $queryParamStatements, $queryParamVariable) = $this->createQueryParamStatements($operation);
        list($urlStatements, $urlVariable) = $this->createUrlStatements($operation, $queryParamVariable);
        list($bodyStatements, $bodyVariable) = $this->createBodyStatements($operation, $queryParamVariable, $context);
        list($headerStatements, $headerVariable) = $this->createHeaderStatements($operation, $queryParamVariable);
        list($documentationParameters, $parameters) = $this->createParameters($operation, $queryParamDocumentation, $context);

        $statements = array_merge(
            $queryParamStatements,
            $urlStatements,
            $headerStatements,
            $bodyStatements,
            $this->getCreateRequestStatements($operation->getMethod(), $urlVariable, $headerVariable, $bodyVariable),
            [
                $this->getAssignResponseStatement(),
            ]
        );

        // Output
        $outputStatements = [];
        $outputTypes = ['\\' . $this->getResponseClass()];
        $throwTypes = [];

        if ($operation->getOperation()->getResponses()) {
            foreach ($operation->getOperation()->getResponses() as $status => $response) {
                if ($response instanceof Reference) {
                    list(, $response) = $this->resolve($response, Response::class);
                }

                /* @var Response $response */

                list($outputType, $throwType, $ifStatus) = $this->createResponseDenormalizationStatement(
                    $name,
                    $status,
                    $response->getSchema(),
                    $context,
                    $operation->getReference() . '/responses/' . $status,
                    $response->getDescription()
                );

                if (null !== $outputType || null !== $throwType) {
                    if (null !== $outputType && !in_array($outputType, $outputTypes)) {
                        $outputTypes[] = $outputType;
                    }

                    if (null !== $throwType && !in_array($throwType, $throwTypes)) {
                        $throwTypes[] = $throwType;
                    }

                    $outputStatements[] = $ifStatus;
                }
            }
        }

        if (!empty($outputStatements)) {
            $statements[] = new Stmt\If_(
                new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('self::FETCH_OBJECT')), new Expr\Variable('fetch')),
                [
                    'stmts' => $outputStatements,
                ]
            );
        }

        // return $response
        $statements[] = new Stmt\Return_(new Expr\Variable('response'));

        $documentation = array_merge(
            [
                '/**',
                sprintf(' * %s', $operation->getOperation()->getDescription()),
                ' *',
            ],
            $documentationParameters,
            array_map(function ($type) {
                return ' * @throws ' . $type;
            }, $throwTypes),
            [
                ' *',
                ' * @return ' . $this->getReturnTypesForDoc($outputTypes), //implode('|', $outputTypes),
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

    /**
     * @return DenormalizerInterface
     */
    protected function getDenormalizer()
    {
        return $this->denormalizer;
    }
}
