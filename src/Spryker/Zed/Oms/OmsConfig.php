<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Oms;

use Spryker\Shared\Oms\OmsConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class OmsConfig extends AbstractBundleConfig
{
    public const DEFAULT_PROCESS_LOCATION = APPLICATION_ROOT_DIR . '/config/Zed/oms';

    /**
     * @var string
     */
    public const EVENT_CANCEL = 'cancel';

    /**
     * @var string
     */
    public const OMS_EVENT_TRIGGER_RESPONSE = 'oms_event_trigger_response';

    /**
     * @api
     *
     * @return string
     */
    public function getProcessDefinitionLocation()
    {
        return $this->get(OmsConstants::PROCESS_LOCATION, static::DEFAULT_PROCESS_LOCATION);
    }

    /**
     * @api
     *
     * @return array<string>
     */
    public function getActiveProcesses()
    {
        return $this->get(OmsConstants::ACTIVE_PROCESSES, []);
    }

    /**
     * @api
     *
     * @return bool
     */
    public function isOmsTransitionLogEnabled(): bool
    {
        return $this->get(OmsConstants::ENABLE_OMS_TRANSITION_LOG, true);
    }

    /**
     * @api
     *
     * @return array<string, mixed>
     */
    public function getGraphDefaults()
    {
        return [
            'fontname' => 'Verdana',
            'labelfontname' => 'Verdana',
            'nodesep' => 0.6,
            'ranksep' => 0.8,
        ];
    }

    /**
     * @api
     *
     * @return array<string>
     */
    public function getStateBlacklist()
    {
        return [];
    }

    /**
     * Specification:
     * - This prefix is used for the auto-generated display name in case of its absence.
     *
     * @api
     *
     * @return string
     */
    public function getFallbackDisplayNamePrefix(): string
    {
        return '';
    }

    /**
     * @api
     *
     * @return string
     */
    public function getStateMachineLockerTimeoutInterval()
    {
        return '1 minutes';
    }

    /**
     * @api
     *
     * @return string
     */
    public function getSubProcessPrefixDelimiter()
    {
        return ' - ';
    }

    /**
     * @api
     *
     * @return string
     */
    public function getInitialStatus()
    {
        return 'new';
    }

    /**
     * Specification:
     * - Defines the query limit of orders for which order items should be checked.
     *
     * @api
     *
     * @return int|null
     */
    public function getCheckTimeoutsQueryLimit(): ?int
    {
        return null;
    }

    /**
     * Specification:
     * - Defines the query limit of orders for which order items should be checked.
     *
     * @api
     *
     * @return int|null
     */
    public function getCheckConditionsQueryLimit(): ?int
    {
        return null;
    }
}
