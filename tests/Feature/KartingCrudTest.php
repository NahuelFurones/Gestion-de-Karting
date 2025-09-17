<?php
namespace Tests\Feature;

use App\Models\Karting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class KartingCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_karting_valid_data()
    {
        $response = $this->post(route('kartings.store'), [
            'name' => 'Mi Karting',
            'location' => 'CABA',
            'capacity' => 20,
            'price_per_hour' => 1500.50,
            'open_time' => '09:00',
            'close_time' => '21:00',
            'is_active' => true,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('kartings', ['name' => 'Mi Karting']);
    }
}
