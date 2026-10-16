public function test_home_page_is_accessible(): void
{
    $response = $this->get('/');

    $response->assertSuccessful();
}
