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

namespace Apigee\Edge\Tests\Api\Monetization\Controller;

use Apigee\Edge\Api\Monetization\Controller\DeveloperController;
use Apigee\Edge\ClientInterface;
use Apigee\Edge\Tests\Api\Monetization\EntitySerializer\DeveloperEntitySerializerValidator;
use Apigee\Edge\Tests\Test\Controller\EntityControllerTester;
use Apigee\Edge\Tests\Test\Controller\EntityControllerTesterInterface;
use Apigee\Edge\Tests\Test\EntitySerializer\EntitySerializerValidatorInterface;

/**
 * Class DeveloperControllerTest.
 *
 * @group controller
 * @group monetization
 */
class DeveloperControllerTest extends LegalEntityControllerTestBase
{
    /**
     * @inheritdoc
     */
    protected function entitySerializerValidator(): EntitySerializerValidatorInterface
    {
        static $validator;
        if (null === $validator) {
            $validator = new DeveloperEntitySerializerValidator($this->entitySerializer());
        }

        return $validator;
    }

    protected static function entityController(ClientInterface $client = null): EntityControllerTesterInterface
    {
        $client = $client ?? static::defaultAPIClient();

        return new EntityControllerTester(new DeveloperController(static::defaultTestOrganization($client), $client));
    }

    /**
     * @inheritdoc
     */
    protected function getTestEntityId(): string
    {
        return 'phpunit@example.com';
    }
}
