<?php

// This file is part of Phodam
// Copyright (c) Andrew Vehlies <avehlies@gmail.com>
// Licensed under the MIT license. See LICENSE file in the project root.
// SPDX-License-Identifier: MIT

declare(strict_types=1);

namespace Phodam\Tests\Phodam\Provider\Builtin;

use Phodam\Provider\Primitive\DefaultIntTypeProvider;
use Phodam\Tests\Phodam\PhodamTestCase;

/**
 * @coversDefaultClass \Phodam\Provider\Primitive\DefaultIntTypeProvider
 */
class DefaultIntTypeProviderTest extends PhodamTestCase
{
    private DefaultIntTypeProvider $provider;

    public function setUp(): void
    {
        $this->provider = new DefaultIntTypeProvider();
    }

    /**
     * @covers ::create
     */
    public function testCreate()
    {
        for ($i = 0; $i < 10; $i++) {
            $value = $this->provider->create();
            $this->assertIsInt($value);
        }
    }
}