<?php
namespace Application\Model;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Pessoa {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $pes_nome;

    // getters/setters
}