<?php
/*
 * Copyright 2019 GridGain Systems, Inc. and Contributors.
 *
 * Licensed under the GridGain Community Edition License (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.gridgain.com/products/software/community-edition/gridgain-community-edition-license
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Apache\Ignite\Data;

use \DateTime;

/**
 * Class representing GridGain Date type
 * (number of milliseconds elapsed since January 1, 1970, 00:00:00 UTC).
 */
class Date
{
    private $millis;

    /**
     * Public constructor.
     *
     * @param float $millis integer number of milliseconds elapsed since January 1, 1970, 00:00:00 UTC.
     */
    public function __construct(float $millis)
    {
        $this->millis = $millis;
    }

    /**
     * Creates Date instance from DateTime instance.
     *
     * @param DateTime $dateTime DateTime instance.
     *
     * @return Date new Date instance.
     */
    public static function fromDateTime(DateTime $dateTime)
    {
        $millis = intval($dateTime->format('u') / 1000);
        return new Date($dateTime->getTimestamp() * 1000 + $millis);
    }

    /**
     * Returns the date value as DateTime instance.
     *
     * @return DateTime new DateTime instance.
     */
    public function toDateTime(): DateTime
    {
        return DateTime::createFromFormat('U.u', number_format($this->getMillis() / 1000, 6, '.', ''));
    }

    /**
     * Returns the date value as number of milliseconds elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @return float number of milliseconds elapsed since January 1, 1970, 00:00:00 UTC.
     */
    public function getMillis(): float
    {
        return $this->millis;
    }

    /**
     * Returns the date value as number of seconds elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @return float number of seconds elapsed since January 1, 1970, 00:00:00 UTC.
     */
    public function getSeconds(): float
    {
        return $this->millis / 1000;
    }
}
