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

namespace Apache\Ignite\Cache;

/**
 * A cache entry (key-value pair).
 */
class CacheEntry
{
    private $key;
    private $value;

    /**
     * Public constructor.
     *
     * @param mixed $key key corresponding to this entry.
     * @param mixed $value value associated with the key.
     */
    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * Returns the key corresponding to this entry.
     *
     * @return mixed the key corresponding to this entry.
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Returns the value corresponding to this entry.
     *
     * @return mixed the value corresponding to this entry.
     */
    public function getValue()
    {
        return $this->value;
    }
}
