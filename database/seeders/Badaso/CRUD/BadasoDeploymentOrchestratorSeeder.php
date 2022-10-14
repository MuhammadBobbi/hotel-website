<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        
        
        
        
        $this->seed(UserCRUDDataDeleted::class);
        $this->seed(BookingCRUDDataDeleted::class);
        
        
        
        
        
        
        
        
        $this->seed(RoomCRUDDataDeleted::class);
        
        
        
        
        $this->seed(CheckoutCRUDDataDeleted::class);
        
        
        
        
        
        
        
        
        $this->seed(RoomCRUDDataTypeAdded::class);
        $this->seed(RoomCRUDDataRowAdded::class);
        
        
        
        
        $this->seed(BookingsCRUDDataDeleted::class);
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        $this->seed(BookingCRUDDataTypeAdded::class);
        $this->seed(BookingCRUDDataRowAdded::class);
        
        
        $this->seed(CheckoutCRUDDataTypeAdded::class);
        $this->seed(CheckoutCRUDDataRowAdded::class);
        
        
        $this->seed(UnsettingCRUDDataDeleted::class);
        $this->seed(UnsettingCRUDDataTypeAdded::class);
        $this->seed(UnsettingCRUDDataRowAdded::class);
    }
}
