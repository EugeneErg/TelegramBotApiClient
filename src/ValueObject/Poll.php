<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\Entity\Message\AbstractMessageEntity;

class Poll
{
    const TYPE_REGULAR = 'regular';
    const TYPE_QUIZ = 'quiz';

    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $question;
    /**
     * @var PollOption[]
     */
    private $options;
    /**
     * @var int
     */
    private $totalVoterCount;
    /**
     * @var bool
     */
    private $isClosed;
    /**
     * @var bool
     */
    private $isAnonymous;
    /**
     * @var string
     */
    private $type;
    /**
     * @var bool
     */
    private $allowsMultipleAnswers;
    /**
     * @var int|null
     */
    private $correctOptionId;
    /**
     * @var string|null
     */
    private $explanation;
    /**
     * @var AbstractMessageEntity[]
     */
    private $explanationEntities;
    /**
     * @var int|null
     */
    private $openPeriod;
    /**
     * @var DateTimeInterface|null
     */
    private $closeDate;

    /**
     * Poll constructor.
     * @param string $id
     * @param string $question
     * @param PollOption[] $options
     * @param int $totalVoterCount
     * @param bool $isClosed
     * @param bool $isAnonymous
     * @param string $type
     * @param bool $allowsMultipleAnswers
     * @param int|null $correctOptionId
     * @param string|null $explanation
     * @param AbstractMessageEntity[] $explanationEntities
     * @param int|null $openPeriod
     * @param DateTimeInterface|null $closeDate
     */
    public function __construct(
        string $id,
        string $question,
        array $options,
        int $totalVoterCount,
        bool $isClosed,
        bool $isAnonymous,
        string $type,
        bool $allowsMultipleAnswers,
        int $correctOptionId = null,
        string $explanation = null,
        array $explanationEntities = [],
        int $openPeriod = null,
        DateTimeInterface $closeDate = null
    ) {
/*

question	String	Yes	Poll question, 1-255 characters
options	Array of String	Yes	A JSON-serialized list of answer options, 2-10 strings 1-100 characters each

is_anonymous	Boolean	Optional	True, if the poll needs to be anonymous, defaults to True
type	String	Optional	Poll type, “quiz” or “regular”, defaults to “regular”
allows_multiple_answers	Boolean	Optional	True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False
is_closed	Boolean	Optional	Pass True, if the poll needs to be immediately closed. This can be useful for poll preview.

correct_option_id	Integer	Optional	0-based identifier of the correct answer option, required for polls in quiz mode
explanation	String	Optional	Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
explanation_parse_mode	String	Optional	Mode for parsing entities in the explanation. See formatting options for more details.
open_period	Integer	Optional	Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date.
close_date	Integer	Optional	Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with open_period.

*/
        $this->id = $id;
        $this->question = $question;
        $this->options = $options;
        $this->totalVoterCount = $totalVoterCount;
        $this->isClosed = $isClosed;
        $this->isAnonymous = $isAnonymous;
        $this->type = $type;
        $this->allowsMultipleAnswers = $allowsMultipleAnswers;
        $this->correctOptionId = $correctOptionId;
        $this->explanation = $explanation;
        $this->explanationEntities = $explanationEntities;
        $this->openPeriod = $openPeriod;
        $this->closeDate = $closeDate;
    }
}
