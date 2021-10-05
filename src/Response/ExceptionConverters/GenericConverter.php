<?php declare(strict_types=1);

namespace Somnambulist\Bundles\ApiBundle\Response\ExceptionConverters;

use Somnambulist\Bundles\ApiBundle\Response\ExceptionConverterInterface;
use Throwable;

/**
 * Class GenericConverter
 *
 * @package    Somnambulist\Bundles\ApiBundle\Response\ExceptionConverters
 * @subpackage Somnambulist\Bundles\ApiBundle\Response\ExceptionConverters\GenericConverter
 */
final class GenericConverter implements ExceptionConverterInterface
{
    public function convert(Throwable $e): array
    {
        return [
            'data' => [
                'message' => $e->getMessage(),
            ],
            'code' => $e->getCode() && $e->getCode() >= 400 && $e->getCode() < 500 ? $e->getCode() : 400,
        ];
    }
}
