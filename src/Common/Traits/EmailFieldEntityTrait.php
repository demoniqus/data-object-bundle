<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Traits;

use Doctrine\ORM\Mapping as ORM;

trait EmailFieldEntityTrait
{
    #[ORM\Column(length: 150, nullable: true)]
    protected ?string $email = null;
}
