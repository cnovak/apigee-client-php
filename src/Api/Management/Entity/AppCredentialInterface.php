<?php

/*
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Apigee\Edge\Api\Management\Entity;

use Apigee\Edge\Entity\EntityInterface;
use Apigee\Edge\Entity\Property\AttributesPropertyInterface;
use Apigee\Edge\Entity\Property\ScopesPropertyInterface;
use Apigee\Edge\Entity\Property\StatusPropertyInterface;

/**
 * Interface AppCredentialInterface.
 */
interface AppCredentialInterface extends
    AttributesPropertyInterface,
    EntityInterface,
    ScopesPropertyInterface,
    StatusPropertyInterface
{
    /**
     * Get list of API products included in this credential with their statuses.
     *
     * @return \Apigee\Edge\Structure\CredentialProductInterface[]|array
     *   Array of credential products or an empty array.
     */
    public function getApiProducts(): array;

    /**
     * @return string
     */
    public function getConsumerKey(): string;

    /**
     * @return string
     */
    public function getConsumerSecret(): string;

    /**
     * @return null|\DateTimeImmutable
     */
    public function getExpiresAt(): ?\DateTimeImmutable;

    /**
     * @return null|\DateTimeImmutable
     */
    public function getIssuedAt(): ?\DateTimeImmutable;
}
