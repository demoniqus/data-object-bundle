<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Traits;

use Doctrine\ORM\Mapping as ORM;

trait IdFieldEntityTrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
}
