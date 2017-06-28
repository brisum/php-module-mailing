<?php

namespace Brisum\Mailing\Entity;

class StateEvent
{
    const TABLE = BSM_MAILING_DB_PREFIX . 'state_event';

    protected $connection = BSM_MAILING_DB_CONNECTION;
    protected $table = self::TABLE;
    protected $primaryKey = 'event_name';
    public $timestamps = false;

    protected $fillable = [
        'event_name',
        'update_at',
    ];
}
