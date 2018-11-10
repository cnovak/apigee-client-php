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

namespace Apigee\Edge\Api\Docstore\Entity;

/**
 * Collection object in Docstore.
 */
class Collection extends \Apigee\Edge\Api\Docstore\Entity\DocstoreObject
{
    protected $kind = 'Collection';
    protected $contents = [];

    public function getContents(): array
    {
        return $this->contents;
    }

    public function setContents($contents): void
    {
        $this->contents = $contents;
    }
}