<?php

namespace Tests\Feature;

use Tests\TestCase;

class InquiryTest extends TestCase
{
    /**
     * Test that the landing page renders correctly with flavors and branding.
     */
    public function test_landing_page_renders_flavors_and_brand(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Doce & Fresco');
        $response->assertSee('Laranja Dourada');
    }

    /**
     * Test inquiry form submission with valid data.
     */
    public function test_inquiry_form_submission(): void
    {
        $response = $this->post('/inquire', [
            'name' => 'Test Client',
            'email' => 'client@primestackdigital.com',
            'phone' => '+264811234567',
            'inquiryType' => 'wholesale',
            'message' => 'Interested in commercial distribution partnership.',
        ]);

        $response->assertSessionHas('success');
    }
}
