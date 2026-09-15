<?php

namespace Tests\Feature;

use Tests\TestCase;

class BookingFlowTest extends TestCase
{
    public function test_room_capacity_is_enforced(): void
    {
        $response = $this->post('/booking/guest-details', [
            'room' => 'Ocean View Villa',
            'check_in' => now()->addDay()->format('Y-m-d'),
            'check_out' => now()->addDays(3)->format('Y-m-d'),
            'guests' => 4,
        ]);

        $response->assertSessionHasErrors('guests');
    }

    public function test_valid_room_selection_moves_to_guest_details(): void
    {
        $response = $this->post('/booking/guest-details', [
            'room' => 'Ocean View Villa',
            'check_in' => now()->addDay()->format('Y-m-d'),
            'check_out' => now()->addDays(3)->format('Y-m-d'),
            'guests' => 2,
        ]);

        $response->assertRedirectToRoute('guest-details');
        $this->assertSame(3, session('booking.capacity'));
    }
}
