<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;

class ProfileComposer
{
    /**
     * 新しいプロフィールコンポーザの生成
     */
    public function __construct(
        protected UserRepository $users,
    ) {}

    /**
     * データをビューと結合
     */
    public function compose(View $view): void
    {
        $view->with('count', $this->users->count());
    }
}
