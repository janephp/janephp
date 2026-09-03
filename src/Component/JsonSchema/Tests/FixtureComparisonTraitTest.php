<?php

namespace Jane\Component\JsonSchema\Tests;

use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Filesystem\Filesystem;

class FixtureComparisonTraitTest extends TestCase
{
    use FixtureComparisonTrait;

    private string $testDirectory;

    protected function setUp(): void
    {
        $this->testDirectory = sys_get_temp_dir() . \DIRECTORY_SEPARATOR . uniqid('jane-fixture-comparison-test-', true);
        mkdir($this->testDirectory . \DIRECTORY_SEPARATOR . 'generated', 0o777, true);
    }

    protected function tearDown(): void
    {
        (new Filesystem())->remove($this->testDirectory);
    }

    public function testDirectoryModeFailsWhenGeneratedFileIsNotValidPhp(): void
    {
        // Identical on both sides: pure content comparison would pass.
        $brokenPhp = "<?php\n\nclass Broken\n{\n    public function oops(\n}\n";
        $this->writeFile('generated/Model/Broken.php', $brokenPhp);
        mkdir($this->testDirectory . \DIRECTORY_SEPARATOR . 'expected' . \DIRECTORY_SEPARATOR . 'Model', 0o777, true);
        $this->writeFile('expected/Model/Broken.php', $brokenPhp);

        try {
            $this->assertFixtureMatchesGenerated($this->testDirectory);
        } catch (AssertionFailedError $failure) {
            $this->assertStringContainsString('Model/Broken.php', $failure->getMessage());
            $this->assertStringContainsString('Syntax error', $failure->getMessage());

            return;
        }

        $this->fail('Expected the syntax gate to reject a generated file that does not parse.');
    }

    public function testManifestModeFailsWhenGeneratedFileIsNotValidPhp(): void
    {
        $brokenPhp = "<?php\n\nreturn [1 =>;\n";
        $this->writeFile('generated/Client.php', $brokenPhp);
        $this->writeFile('expected.manifest.json', json_encode([
            'algorithm' => 'sha256',
            'files' => ['Client.php' => hash('sha256', $brokenPhp)],
        ]));

        try {
            $this->assertFixtureMatchesGenerated($this->testDirectory);
        } catch (AssertionFailedError $failure) {
            $this->assertStringContainsString('Client.php', $failure->getMessage());
            $this->assertStringContainsString('Syntax error', $failure->getMessage());

            return;
        }

        $this->fail('Expected the syntax gate to reject a generated file that does not parse.');
    }

    public function testKnownInvalidMarkerTurnsParseFailureIntoPass(): void
    {
        $brokenPhp = "<?php\n\nclass Broken\n{\n    public function oops(\n}\n";
        $this->writeFile('generated/Model/Broken.php', $brokenPhp);
        $this->writeFile('expected/Model/Broken.php', $brokenPhp);
        $this->writeFile('.known-invalid-php', "Tracked in https://github.com/janephp/janephp/issues/0\n");

        $this->assertFixtureMatchesGenerated($this->testDirectory);
    }

    public function testKnownInvalidMarkerFailsOnceOutputParsesAgain(): void
    {
        $validPhp = "<?php\n\nclass Fine\n{\n}\n";
        $this->writeFile('generated/Model/Fine.php', $validPhp);
        $this->writeFile('expected/Model/Fine.php', $validPhp);
        $this->writeFile('.known-invalid-php', "Tracked in https://github.com/janephp/janephp/issues/0\n");

        try {
            $this->assertFixtureMatchesGenerated($this->testDirectory);
        } catch (AssertionFailedError $failure) {
            $this->assertStringContainsString('.known-invalid-php', $failure->getMessage());

            return;
        }

        $this->fail('Expected a stale .known-invalid-php marker to fail the fixture once its output parses again.');
    }

    public function testPassesWhenGeneratedFilesAreValidPhp(): void
    {
        $validPhp = "<?php\n\nclass Fine\n{\n}\n";
        $this->writeFile('generated/Model/Fine.php', $validPhp);
        $this->writeFile('generated/.gitignore', "*\n");
        mkdir($this->testDirectory . \DIRECTORY_SEPARATOR . 'expected' . \DIRECTORY_SEPARATOR . 'Model', 0o777, true);
        $this->writeFile('expected/Model/Fine.php', $validPhp);
        $this->writeFile('expected/.gitignore', "*\n");

        $this->assertFixtureMatchesGenerated($this->testDirectory);
    }

    public function testDirectoryModeFailsWhenACommittedRuntimeFileIsNoLongerGenerated(): void
    {
        $validPhp = "<?php\n\nclass Fine\n{\n}\n";
        $this->writeFile('generated/Model/Fine.php', $validPhp);
        $this->writeFile('expected/Model/Fine.php', $validPhp);
        $this->writeFile('expected/Runtime/Client/Stale.php', $validPhp);

        try {
            $this->assertFixtureMatchesGenerated($this->testDirectory);
        } catch (AssertionFailedError $failure) {
            $this->assertStringContainsString('Runtime/', $failure->getMessage());
            $this->assertStringContainsString('Stale.php', $failure->getMessage());

            return;
        }

        $this->fail('Expected a committed Runtime file that is no longer generated to fail the fixture.');
    }

    public function testDirectoryModeFailsWhenAGeneratedRuntimeFileIsNotCommitted(): void
    {
        $validPhp = "<?php\n\nclass Fine\n{\n}\n";
        $this->writeFile('generated/Model/Fine.php', $validPhp);
        $this->writeFile('generated/Runtime/Client/Fresh.php', $validPhp);
        $this->writeFile('expected/Model/Fine.php', $validPhp);

        try {
            $this->assertFixtureMatchesGenerated($this->testDirectory);
        } catch (AssertionFailedError $failure) {
            $this->assertStringContainsString('Runtime/', $failure->getMessage());
            $this->assertStringContainsString('Fresh.php', $failure->getMessage());

            return;
        }

        $this->fail('Expected a generated Runtime file missing from expected/ to fail the fixture.');
    }

    public function testRuntimeFileContentsAreStillSkipped(): void
    {
        $validPhp = "<?php\n\nclass Fine\n{\n}\n";
        $this->writeFile('generated/Model/Fine.php', $validPhp);
        $this->writeFile('generated/Runtime/Normalizer/Helper.php', "<?php\n\nclass HelperA\n{\n}\n");
        $this->writeFile('expected/Model/Fine.php', $validPhp);
        // Same file, different content: asserted centrally by the
        // runtime-boilerplate fixture, not here.
        $this->writeFile('expected/Runtime/Normalizer/Helper.php', "<?php\n\nclass HelperB\n{\n}\n");

        $this->assertFixtureMatchesGenerated($this->testDirectory);
    }

    private function writeFile(string $relativePath, string $content): void
    {
        $absolutePath = $this->testDirectory . \DIRECTORY_SEPARATOR . str_replace('/', \DIRECTORY_SEPARATOR, $relativePath);

        if (!is_dir(\dirname($absolutePath))) {
            mkdir(\dirname($absolutePath), 0o777, true);
        }

        file_put_contents($absolutePath, $content);
    }
}
