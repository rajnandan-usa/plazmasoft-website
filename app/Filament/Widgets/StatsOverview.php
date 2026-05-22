<?php

namespace App\Filament\Widgets;

use App\Models\ContactSubmission;
use App\Models\BlogPost;
use App\Models\NewsletterSubscriber;
use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $newThisWeek = ContactSubmission::where('created_at', '>=', now()->startOfWeek())->count();

        return [
            Stat::make('New submissions this week', $newThisWeek)
                ->description('Contact form leads')
                ->color('warning')
                ->icon('heroicon-o-envelope'),

            Stat::make('Published projects', Project::where('is_published', true)->count())
                ->description('Live in portfolio')
                ->color('success')
                ->icon('heroicon-o-briefcase'),

            Stat::make('Blog posts', BlogPost::where('is_published', true)->count())
                ->description('Published articles')
                ->color('info')
                ->icon('heroicon-o-document-text'),

            Stat::make('Newsletter subscribers', NewsletterSubscriber::where('is_confirmed', true)->count())
                ->description('Confirmed subscribers')
                ->color('primary')
                ->icon('heroicon-o-users'),
        ];
    }
}
