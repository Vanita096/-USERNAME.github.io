<?php

namespace App\Events\Tenant;


use App\Tenant\Models\Tenant;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;


class TenantDatabaseCreated
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Tenant $tenant)
    {
        $this->tenant = $tenant;
    }
}
