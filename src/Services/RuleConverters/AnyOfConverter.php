<?php declare(strict_types=1);

namespace Somnambulist\Bundles\ApiBundle\Services\RuleConverters;

use function array_merge;
use function explode;

/**
 * Class AnyOfConverter
 *
 * @package    Somnambulist\Bundles\ApiBundle\Services\RuleConverters
 * @subpackage Somnambulist\Bundles\ApiBundle\Services\RuleConverters\AnyOfConverter
 */
class AnyOfConverter extends AbstractRuleConverter
{
    public function rule(): string
    {
        return 'any_of';
    }

    public function apply(array $schema, string $rule, string $params, array $rules): array
    {
        return array_merge($schema, [
            'enum' => explode(',', $params),
        ]);
    }
}
