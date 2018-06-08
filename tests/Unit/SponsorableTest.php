<?php

namespace Tests\Unit;

use Exception;
use Tests\TestCase;
use App\Sponsorable;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SponsorableTest extends TestCase
{
	use RefreshDatabase;

    /** @test */
    public function finding_a_sponsorable_by_slug()
    {
        $sponsorable = factory(Sponsorable::class)->create(['slug' => 'syg']);
        $foundSponsorable = Sponsorable::findOrFailBySlug('syg');
        $this->assertTrue( $foundSponsorable->is($sponsorable) );
    }

    /** @test */
    public function an_exception_is_throw_if_a_sponsorable_cannot_be_found_by_slug()
    {
        $this->expectException(ModelNotFoundException::class);
        Sponsorable::findOrFailBySlug('bad-slug');
    }
}
