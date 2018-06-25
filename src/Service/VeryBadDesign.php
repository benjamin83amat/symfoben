<?php
/**
 * Created by PhpStorm.
 * User: BenjiT7
 * Date: 23/06/2018
 * Time: 20:58
 */

namespace App\Service;


use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class VeryBadDesign implements ContainerAwareInterface
{

    /**
     * @required
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $container->get('app.greeting');
    }
}