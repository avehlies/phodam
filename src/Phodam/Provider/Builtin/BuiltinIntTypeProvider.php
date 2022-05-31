<?php

// This file is part of Phodam
// Copyright (c) Andrew Vehlies <avehlies@gmail.com>
// Licensed under the MIT license. See LICENSE file in the project root.
// SPDX-License-Identifier: MIT

declare(strict_types=1);

namespace Phodam\Provider\Builtin;

use Phodam\Provider\ProviderInterface;

class BuiltinIntTypeProvider implements ProviderInterface
{
    public function create(array $overrides = [], array $config = []): int
    {
        return rand(-10000, 10000);
    }
}
