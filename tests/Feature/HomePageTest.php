public function test_home_page_is_accessible(): void
{
    $response = $this->get('/');

    $response->assertStatus(404); // Forzamos el fallo para la evidencia
}
