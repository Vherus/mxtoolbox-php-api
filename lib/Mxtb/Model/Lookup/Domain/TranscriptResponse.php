<?php declare(strict_types = 1);

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Darien Livermore <daz.livermore@hotmail.com>
 * @version dev
 */

namespace Mxtb\Model\Lookup\Domain;

class TranscriptResponse
{
    /**
     * @var string|null
     */
    private $timeStamp;
	
    /**
     * @var string|null
     */
    private $depth;
	
    /**
     * @var string|null
     */
    private $serverName;
	
    /**
     * @var string|null
     */
    private $serverIP;
	
    /**
     * @var string|null
     */
    private $authoritative;
	
    /**
     * @var string|null
     */
    private $elapsedTime;
	
    /**
     * @var string|null
     */
    private $result;
	
    /**
     * @var string|null
     */
    private $question;
	
    /**
     * @var string|null
     */
    private $answers;
	
    /**
     * @return string|null
     */
    public function getTimeStamp() : string
    {
        return $this->timeStamp;
    }

    /**
     * @param string|null $timeStamp
     * @return TranscriptResponse
     */
    public function setTimeStamp(string $timeStamp = null) : TranscriptResponse
    {
        $this->timeStamp = $timeStamp;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getDepth() : string
    {
        return $this->depth;
    }

    /**
     * @param string|null $depth
     * @return TranscriptResponse
     */
    public function setDepth(string $depth = null) : TranscriptResponse
    {
        $this->depth = $depth;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getServerName() : string
    {
        return $this->serverName;
    }

    /**
     * @param string|null $serverName
     * @return  TranscriptResponse
     */
    public function setServerName(string $serverName = null) : TranscriptResponse
    {
        $this->serverName = $serverName;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getServerIP() : string
    {
        return $this->serverIP;
    }

    /**
     * @param string|null $serverIP
     * @return TranscriptResponse
     */
    public function setServerIP(string $serverIP = null) : TranscriptResponse
    {
        $this->serverIP = $serverIP;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getAuthoritative() : string
    {
        return $this->authoritative;
    }

    /**
     * @param string|null $authoritative
     * @return TranscriptResponse
     */
    public function setAuthoritative(string $authoritative = null) : TranscriptResponse
    {
        $this->authoritative = $authoritative;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getElapsedTime() : string
    {
        return $this->elapsedTime;
    }

    /**
     * @param string|null $elapsedTime
     * @return TranscriptResponse
     */
    public function setElapsedTime(string $elapsedTime = null) : TranscriptResponse
    {
        $this->elapsedTime = $elapsedTime;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getResult() : string
    {
        return $this->result;
    }

    /**
     * @param string|null $result
     * @return TranscriptResponse
     */
    public function setResult(string $result = null) : TranscriptResponse
    {
        $this->result = $result;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getQuestion() : string
    {
        return $this->question;
    }

    /**
     * @param string|null $question
     * @return TranscriptResponse
     */
    public function setQuestion(string $question = null) : TranscriptResponse
    {
        $this->question = $question;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getAnswers() : string
    {
        return $this->answers;
    }

    /**
     * @param string|null $answers
     * @return TranscriptResponse
     */
    public function setAnswers(string $answers = null) : TranscriptResponse
    {
        $this->answers = $answers;
        return $this;
    }
}