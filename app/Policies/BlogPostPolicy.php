<?php

namespace App\Policies;

use App\Models\BlogPost;
use App\Models\User;

class BlogPostPolicy
{
    public function viewAny(?User $user): bool
    {
        return true;
    }

    public function view(?User $user, BlogPost $post): bool
    {
        if ($post->isPublished()) {
            return true;
        }

        return $user?->can('view-unpublished-posts') ?? false;
    }

    public function create(User $user): bool
    {
        return $user->can('manage-content');
    }

    public function update(User $user, BlogPost $post): bool
    {
        return $user->can('manage-content');
    }

    public function delete(User $user, BlogPost $post): bool
    {
        return $user->can('manage-content');
    }
}
