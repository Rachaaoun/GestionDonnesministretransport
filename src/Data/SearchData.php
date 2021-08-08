<?php
namespace App\Data;

use App\Entity\Session;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SearchData
{

    /**
     * @var string
     */
    public $q = '';

    /**
     * @var Session[]
     */
    public $sessions=[];

    /**
     * @var string
     */
    public $qproprietaireaccord='';


    public function getQ(): ?string
    {
        return $this->q;
    }

}


