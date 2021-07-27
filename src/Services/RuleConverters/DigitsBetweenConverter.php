<?php declare(strict_types=1);

namespace Somnambulist\Bundles\ApiBundle\Services\RuleConverters;

use function explode;

/**
 * Class DigitsBetweenConverter
 *
 * @package    Somnambulist\Bundles\ApiBundle\Services\RuleConverters
 * @subpackage Somnambulist\Bundles\ApiBundle\Services\RuleConverters\DigitsBetweenConverter
 */
class DigitsBetweenConverter extends BetweenConverter
{
    public function rule(): string
    {
        return 'digits_between';
    }

    public function apply(array $schema, string $rule, string $params, array $rules): array
    {
        return parent::apply($schema, $rule, $params, $rules);
    }
}
