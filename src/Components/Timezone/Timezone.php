<?php

namespace InnStudio\Prober\Components\Timezone;

use InnStudio\Prober\Components\Events\EventsApi;

final class Timezone
{
    public function __construct()
    {
        EventsApi::on('init', function ($action) {
            if ( ! \ini_get('date.timezone')) {
                date_default_timezone_set('PRC');
            }

            return $action;
        }, 1);
    }
}
