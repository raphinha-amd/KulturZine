<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\EventCategory;
use App\Models\Gallery;
use App\Models\MemberMonthlyDue;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use App\Models\Zine;
use App\Models\ZineCategory;
use App\Policies\EventCategoryPolicy;
use App\Policies\EventPolicy;
use App\Policies\GalleryPolicy;
use App\Policies\MemberMonthlyDuePolicy;
use App\Policies\PostCategoryPolicy;
use App\Policies\PostPolicy;
use App\Policies\UserPolicy;
use App\Policies\ZineCategoryPolicy;
use App\Policies\ZinePolicy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(User::class, UserPolicy::class);
        Gate::policy(Post::class, PostPolicy::class);
        Gate::policy(Zine::class, ZinePolicy::class);
        Gate::policy(Event::class, EventPolicy::class);
        Gate::policy(EventCategory::class, EventCategoryPolicy::class);
        Gate::policy(PostCategory::class, PostCategoryPolicy::class);
        Gate::policy(ZineCategory::class, ZineCategoryPolicy::class);
        Gate::policy(Gallery::class, GalleryPolicy::class);
        Gate::policy(MemberMonthlyDue::class, MemberMonthlyDuePolicy::class);

        Model::unguard();
        Paginator::useTailwind();
    }
}
