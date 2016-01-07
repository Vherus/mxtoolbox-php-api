<?php declare(strict_types = 1);

namespace Mxtb\Model\Lookup;

class TranscriptResponse
{
    /**
     * @var string
     */
    private $timeStamp;
	
    /**
     * @var string
     */
    private $depth;
	
    /**
     * @var string
     */
    private $serverName;
	
    /**
     * @var string
     */
    private $serverIP;
	
    /**
     * @var string
     */
    private $authoritative;
	
    /**
     * @var string
     */
    private $elapsedTime;
	
    /**
     * @var string
     */
    private $result;
	
    /**
     * @var string
     */
    private $question;
	
    /**
     * @var string
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
     */
    public function setTimeStamp(string $timeStamp) : TranscriptResponse
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
     */
    public function setDepth(string $depth) : TranscriptResponse
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
     */
    public function setServerName(string $serverName) : TranscriptResponse
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
     */
    public function setServerIP(string $serverIP) : TranscriptResponse
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
     * @param string|null $timeStamp
     */
    public function setAuthoritative(string $authoritative) : TranscriptResponse
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
     * @param string|null $timeStamp
     */
    public function setElapsedTime(string $elapsedTime) : TranscriptResponse
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
     * @param string|null $timeStamp
     */
    public function setResult(string $result) : TranscriptResponse
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
     * @param string|null $timeStamp
     */
    public function setQuestion(string $question) : TranscriptResponse
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
     * @param string|null $timeStamp
     */
    public function setAnswers(string $answers) : TranscriptResponse
    {
        $this->answers = $answers;
        return $this;
    }
}