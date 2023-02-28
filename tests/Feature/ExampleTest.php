<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        //Realiza una solicitud  tipo get
        $response = $this->get('/');

        //Verifica si el contenido de la vista contiente la cadena de texto
        $response->assertSee('Laravel');

        //Verifica si el contenido de la vista contiente el arreglo enviado
        $response->assertSeeTextInOrder(['Laravel','Documentation']);



        //Comprueba que la respuesta sea un 200
        $response->assertStatus(200);
    }
    public function test_the_about_route_retruns_a_successful_response(): void
    {
        $response = $this->get('/about');
        $response->assertSee('About');
        $response->assertStatus(200);
    }
}
