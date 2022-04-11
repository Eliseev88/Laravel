<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_index()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_category()
    {
        $response = $this->get('/category');

        $response->assertStatus(Response::HTTP_OK);
    }

    public function test_news_create()
    {
        $response = $this->get(route('admin.create_news'));

        $response->assertStatus(Response::HTTP_OK);
    }

    public function test_news_store()
    {
        $data = [
            'title' => 'Test title',
            'description' => 'Some test description'
        ];
        $response = $this->post(route('admin.news_store'), $data);

        $response->assertStatus(200);
    }

}
