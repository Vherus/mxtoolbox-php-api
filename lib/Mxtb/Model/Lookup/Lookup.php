<?php declare(strict_types = 1);

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

namespace Mxtb\Model\Lookup;

class Lookup
{
    /**
     * @var string
     */
    private $uid;

    /**
     * @var string
     */
    private $command;

    /**
     * @var bool
     */
    private $isTransitioned;

    /**
     * @var string
     */
    private $commandArgument;

    /**
     * @var string
     */
    private $timeRecorded;

    /**
     * @var string|null
     */
    private $reportingNameServer;

    /**
     * @var string
     */
    private $timeToComplete;

    /**
     * @var string
     */
    private $relatedIP;

    /**
     * @var bool
     */
    private $isEndpoint;

    /**
     * @var bool
     */
    private $hasSubscriptions;

    /**
     * @var AbstractResponse[]
     */
    private $failed;

    /**
     * @var AbstractResponse[]
     */
    private $warnings;

    /**
     * @var AbstractResponse[]
     */
    private $passed;

    private $errors;

    private $information;

    private $multiInformation;

    /**
     * @var bool
     */
    private $isBruteForce;

    private $transcript;

    /**
     * @var int
     */
    private $mxRep;

    private $emailServiceProvider;

    private $relatedLookups;
}