<?php

namespace Tests\Feature;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogPostAuthorizationTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_can_view_published_post(): void
    {
        $post = BlogPost::factory()->create();

        $this->get(route('blog.show', $post))->assertOk();
    }

    public function test_guest_cannot_view_unpublished_post(): void
    {
        $post = BlogPost::factory()->unpublished()->create();

        $this->get(route('blog.show', $post))->assertNotFound();
    }

    public function test_admin_can_view_unpublished_post(): void
    {
        $admin = User::factory()->admin()->create();
        $post = BlogPost::factory()->unpublished()->create();

        $this->actingAs($admin)
            ->get(route('blog.show', $post))
            ->assertOk();
    }

    public function test_non_admin_cannot_view_unpublished_post(): void
    {
        $user = User::factory()->create();
        $post = BlogPost::factory()->unpublished()->create();

        $this->actingAs($user)
            ->get(route('blog.show', $post))
            ->assertNotFound();
    }

    public function test_guest_cannot_view_scheduled_post(): void
    {
        $post = BlogPost::factory()->scheduled()->create();

        $this->get(route('blog.show', $post))->assertNotFound();
    }

    public function test_manage_content_gate_is_limited_to_admins(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create();

        $this->assertTrue($admin->can('manage-content'));
        $this->assertFalse($user->can('manage-content'));
    }
}
