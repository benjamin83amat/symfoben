<?php
/**
 * Created by PhpStorm.
 * User: BenjiT7
 * Date: 23/06/2018
 * Time: 18:20
 */

namespace App\Service;


use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Route;

class Greeting
{

    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var string
     */
    private $message;

    public function __construct(LoggerInterface $logger, string $message)
    {
        $this->logger = $logger;
        $this->message = $message;
    }

    public function greet(string $name): string
    {
        $this->logger->info("Greeted $name");
        return "{$this->message} $name";
    }
}