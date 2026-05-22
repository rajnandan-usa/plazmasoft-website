<?php

namespace App\Console\Commands;

use App\Models\BlogPost;
use App\Models\Project;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature   = 'sitemap:generate';
    protected $description = 'Generate public/sitemap.xml';

    public function handle(): int
    {
        $sitemap = Sitemap::create();

        foreach ([
            ['/', 'daily', '1.0'],
            ['/about', 'monthly', '0.8'],
            ['/services', 'monthly', '0.8'],
            ['/solutions', 'monthly', '0.8'],
            ['/portfolio', 'weekly', '0.9'],
            ['/blog', 'daily', '0.8'],
            ['/contact', 'monthly', '0.7'],
            ['/privacy-policy', 'yearly', '0.3'],
            ['/terms-of-service', 'yearly', '0.3'],
        ] as [$path, $freq, $priority]) {
            $sitemap->add(
                Url::create(url($path))
                    ->setChangeFrequency($freq)
                    ->setPriority((float) $priority)
            );
        }

        $serviceSlugs = Service::where('is_published', true)->pluck('slug')->toArray();
        if (empty($serviceSlugs)) {
            $serviceSlugs = ['web-app-development', 'mobile-app-development', 'ai-integration', 'ui-ux-development', 'mvp-development'];
        }
        foreach ($serviceSlugs as $slug) {
            $sitemap->add(Url::create(url('/services/' . $slug))->setChangeFrequency('monthly')->setPriority(0.7));
        }

        $solutionSlugs = Solution::where('is_published', true)->pluck('slug')->toArray();
        if (empty($solutionSlugs)) {
            $solutionSlugs = ['fintech-development', 'fleet-management', 'ai-property-visualization', 'agritech-development'];
        }
        foreach ($solutionSlugs as $slug) {
            $sitemap->add(Url::create(url('/solutions/' . $slug))->setChangeFrequency('monthly')->setPriority(0.7));
        }

        Project::where('is_published', true)->each(function ($project) use ($sitemap) {
            $sitemap->add(
                Url::create(url('/portfolio/' . $project->slug))
                    ->setLastModificationDate($project->updated_at)
                    ->setChangeFrequency('monthly')
                    ->setPriority(0.8)
            );
        });

        BlogPost::where('is_published', true)->each(function ($post) use ($sitemap) {
            $sitemap->add(
                Url::create(url('/blog/' . $post->slug))
                    ->setLastModificationDate($post->updated_at)
                    ->setChangeFrequency('weekly')
                    ->setPriority(0.7)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap written to public/sitemap.xml');

        return self::SUCCESS;
    }
}
