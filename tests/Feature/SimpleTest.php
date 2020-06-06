<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Category;

class SimpleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFeaturedCategoryDisplay(): void
    {
        //Arrange
        $featuredCategory = factory(Category::class)->create([
            'name' => 'Yamaha',
            'featured' => true
        ]);

        //Act
        $response = $this->graphQL(/** @lang GraphQL */ '
            query GetFeaturedCategory($featured: Boolean!) {
                getFeaturedCategory(featured: $featured) {
                    name
                }
            }
        ', [
            'featured' => true
        ]);
        
        //Assert
        $name = $response->json("data.*.name");
        $this->assertSee($name);
    }
}
