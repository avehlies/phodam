<?php

// This file is part of Phodam
// Copyright (c) Andrew Vehlies <avehlies@gmail.com>
// Licensed under the MIT license. See LICENSE file in the project root.
// SPDX-License-Identifier: MIT

declare(strict_types=1);

namespace Phodam\Tests\Fixtures;

use Phodam\Provider\TypeProviderInterface;

class SampleTypeProvider implements TypeProviderInterface
{
    public function create(array $overrides = [])
    {
        return [];
    }
}