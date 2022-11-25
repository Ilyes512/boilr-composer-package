<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff;
use SlevomatCodingStandard\Sniffs\Classes\ClassStructureSniff;
use SlevomatCodingStandard\Sniffs\Functions\StaticClosureSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSniff;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->import(__DIR__ . '/vendor/ilyes512/code-style/ecs.php');

    $ecsConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/ecs.php',
    ]);

    $ecsConfig->skip([
        StaticClosureSniff::class . '.ClosureNotStatic' => [__DIR__ . '/tests'],
        ClassStructureSniff::class . '.IncorrectGroupOrder' => [__DIR__ . '/tests'],
        UnusedParameterSniff::class . '.UnusedParameter' => [__DIR__ . '/tests'],
        ParameterTypeHintSniff::class . '.MissingNativeTypeHint' => [__DIR__ . '/tests/Feature/TestCase.php'],
        LineLengthSniff::class . '.MaxExceeded' => [__DIR__ . '/tests'],
    ]);
};
