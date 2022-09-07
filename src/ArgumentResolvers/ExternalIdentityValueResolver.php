<?php declare(strict_types=1);

namespace Somnambulist\Bundles\ApiBundle\ArgumentResolvers;

use Somnambulist\Components\Models\Types\Identity\ExternalIdentity;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class ExternalIdentityValueResolver implements ArgumentValueResolverInterface
{
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        return
            null !== $request->get('provider')
            &&
            null !== $request->get('identity')
            &&
            ExternalIdentity::class === $argument->getType()
        ;
    }

    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        yield new ExternalIdentity($request->get('provider'), $request->get('identity'));
    }
}
