<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 10.02.16
 * Time: 22:32
 */

namespace Save\SiteBundle\Helper;
use Doctrine\ORM\EntityManager;

/**
 * Class AbstractEntityHelper
 * @package Save\SiteBundle\Helper
 */
abstract class AbstractEntityHelper extends \Twig_Extension
{
    /** @var EntityManager */
    protected $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;
    }
}