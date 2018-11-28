<?php

namespace Jane\Benchmark;

use Jane\AutoMapper\AutoMapper;
use Jane\AutoMapper\Compiler\Compiler;
use Jane\AutoMapper\Compiler\FileLoader;
use Jane\AutoMapper\Context;
use Jane\AutoMapper\Tests\Domain\Address;
use Jane\AutoMapper\Tests\Domain\User;
use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PhpBench\Benchmark\Metadata\Annotations\Warmup;

/**
 * @BeforeMethods({"initAutomapper"})
 * @Warmup(1)
 * @Revs(100000)
 * @Iterations(1)
 */
class AutoMapperBenchmark
{
    private $mapper;
    private $context;

    public function initAutomapper()
    {
        $loader = new FileLoader(new Compiler(), __DIR__ . '/../../cache');
        $autoMapper = AutoMapper::create(true, $loader);

        $this->mapper = $autoMapper->getMapper(User::class, 'array');
    }

    public function initData()
    {
        $this->context = new Context();
    }

    public function benchToArray()
    {
        $address = new Address();
        $address->setCity('Toulon');
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        $this->mapper->map($user, new Context());
    }
}
