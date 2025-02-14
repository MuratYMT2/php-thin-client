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

use Apache\Ignite\Internal\Utils\ArgumentChecker;
use Apache\Ignite\Exception\ClientException;

/**
 * Class representing an item of GridGain enum type.
 *
 * The item is defined by:
 *   - type Id (mandatory) - Id of the GridGain enum type.
 *   - ordinal (optional) - ordinal of the item in the GridGain enum type.
 *   - name (optional) - name of the item (field name in the GridGain enum type).
 *   - value (optional) - value of the item.
 * Usually, at least one from the optional ordinal, name or value must be specified
 * in order to use an instance of this class in GridGain operations.
 *
 * To distinguish one item from another, the GridGain client analyzes the optional fields in the following order:
 * ordinal, name, value.
 */
class EnumItem
{
    private $typeId;
    private $ordinal;
    private $name;
    private $value;

    /**
     * Public constructor.
     *
     * @param int $typeId Id of the GridGain enum type.
     */
    public function __construct(int $typeId)
    {
        $this->setTypeId($typeId);
        $this->ordinal = null;
        $this->name = null;
        $this->value = null;
    }

    /**
     * Returns Id of the GridGain enum type.
     *
     * @return int Id of the enum type.
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * Updates Id of the GridGain enum type.
     *
     * @param int $typeId new Id of the GridGain enum type.
     *
     * @return EnumItem the same instance of EnumItem.
     */
    public function setTypeId(int $typeId): EnumItem
    {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * Returns ordinal of the item in the GridGain enum type
     * or null if ordinal is not set.
     *
     * @return int|null ordinal of the item in the GridGain enum type or null (if ordinal is not set).
     */
    public function getOrdinal(): ?int
    {
        return $this->ordinal;
    }

    /**
     * Sets or updates ordinal of the item in the GridGain enum type.
     *
     * @param int $ordinal ordinal of the item in the GridGain enum type.
     *
     * @return EnumItem the same instance of EnumItem.
     */
    public function setOrdinal(int $ordinal): EnumItem
    {
        $this->ordinal = $ordinal;
        return $this;
    }

    /**
     * Returns name of the item
     * or null if name is not set.
     *
     * @return string|null name of the item or null (if name is not set).
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets or updates name of the item.
     *
     * @param string $name name of the item.
     *
     * @return EnumItem the same instance of EnumItem.
     *
     * @throws ClientException if error.
     */
    public function setName(string $name): EnumItem
    {
        ArgumentChecker::notEmpty($name, 'name');
        $this->name = $name;
        return $this;
    }

    /**
     * Returns value of the item
     * or null if value is not set.
     *
     * @return int|null value of the item or null (if value is not set).
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * Sets or updates value of the item.
     *
     * @param int $value value of the item.
     *
     * @return EnumItem the same instance of EnumItem.
     */
    public function setValue(int $value): EnumItem
    {
        $this->value = $value;
        return $this;
    }
}
