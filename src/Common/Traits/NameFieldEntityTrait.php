<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Traits;

use Doctrine\ORM\Mapping as ORM;

trait NameFieldEntityTrait
{
    #[ORM\Column(length: 255, nullable: true)]
    protected ?string $name = null;
}
