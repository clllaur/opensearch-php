<?php

declare(strict_types=1);

/**
 * SPDX-License-Identifier: Apache-2.0
 *
 * The OpenSearch Contributors require contributions made to
 * this file be licensed under the Apache-2.0 license or a
 * compatible open source license.
 *
 * Modifications Copyright OpenSearch Contributors. See
 * GitHub history for details.
 */

namespace OpenSearch\Endpoints;

use OpenSearch\Endpoints\AbstractEndpoint;

/**
 * Class OpenPointInTime
 * Elasticsearch API name open_point_in_time
 *
 */
class OpenPointInTime extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_pit";
        }
        return "/_pit";
    }

    public function getParamWhitelist(): array
    {
        return [
            'preference',
            'routing',
            'ignore_unavailable',
            'expand_wildcards',
            'keep_alive'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}