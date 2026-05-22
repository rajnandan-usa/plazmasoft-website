<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Cache;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Settings';
    protected static ?string $title = 'Site Settings';
    protected static ?int $navigationSort = 99;
    protected static string $view = 'filament.pages.manage-settings';

    public array $data = [];

    public function mount(): void
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $this->form->fill($settings);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Settings')->tabs([

                    Tabs\Tab::make('General')->schema([
                        TextInput::make('site_name')->label('Site Name')->required(),
                        TextInput::make('site_tagline')->label('Tagline'),
                        TextInput::make('legal_name')->label('Legal Name'),
                        TextInput::make('founded_year')->label('Founded Year'),
                        TextInput::make('team_size')->label('Team Size Display'),
                        TextInput::make('hq_office')->label('Headquarters (mumbai or patna)'),
                    ]),

                    Tabs\Tab::make('Contact')->schema([
                        TextInput::make('phone_primary')->label('Primary Phone')->tel(),
                        TextInput::make('phone_secondary')->label('Secondary Phone')->tel(),
                        TextInput::make('whatsapp_number')->label('WhatsApp Number'),
                        TextInput::make('email_sales')->label('Sales Email')->email(),
                        TextInput::make('email_support')->label('Support Email')->email(),
                        TextInput::make('working_hours')->label('Working Hours'),
                        Section::make('Mumbai Office')->schema([
                            TextInput::make('office_mumbai_label')->label('Label'),
                            Textarea::make('office_mumbai_address')->label('Address')->rows(2),
                            TextInput::make('office_mumbai_phone')->label('Phone')->tel(),
                            TextInput::make('office_mumbai_map_embed')->label('Map Embed URL'),
                            Toggle::make('office_mumbai_is_active')->label('Show on site'),
                        ]),
                        Section::make('Patna Office')->schema([
                            TextInput::make('office_patna_label')->label('Label'),
                            Textarea::make('office_patna_address')->label('Address')->rows(2),
                            TextInput::make('office_patna_phone')->label('Phone')->tel(),
                            TextInput::make('office_patna_map_embed')->label('Map Embed URL'),
                            Toggle::make('office_patna_is_active')->label('Show on site'),
                        ]),
                    ]),

                    Tabs\Tab::make('Social')->schema([
                        TextInput::make('linkedin_url')->label('LinkedIn URL')->url(),
                        TextInput::make('github_url')->label('GitHub URL')->url(),
                        TextInput::make('instagram_url')->label('Instagram URL')->url(),
                        TextInput::make('facebook_url')->label('Facebook URL')->url(),
                        TextInput::make('twitter_url')->label('Twitter / X URL')->url(),
                        TextInput::make('youtube_url')->label('YouTube URL')->url(),
                    ]),

                    Tabs\Tab::make('Stats')->schema([
                        TextInput::make('years_experience')->label('Years Experience')->numeric(),
                        TextInput::make('projects_delivered')->label('Projects Delivered')->numeric(),
                        TextInput::make('happy_clients')->label('Happy Clients')->numeric(),
                        TextInput::make('industries_served')->label('Industries Served')->numeric(),
                    ]),

                    Tabs\Tab::make('SEO')->schema([
                        TextInput::make('default_meta_title')->label('Default Meta Title'),
                        Textarea::make('default_meta_description')->label('Default Meta Description')->rows(3),
                        TextInput::make('google_analytics_id')->label('Google Analytics 4 ID'),
                        TextInput::make('google_tag_manager_id')->label('Google Tag Manager ID'),
                        TextInput::make('facebook_pixel_id')->label('Facebook Pixel ID'),
                    ]),

                    Tabs\Tab::make('CTA')->schema([
                        TextInput::make('hero_cta_primary_label')->label('Hero Primary CTA Text'),
                        TextInput::make('hero_cta_secondary_label')->label('Hero Secondary CTA Text'),
                        TextInput::make('footer_cta_heading')->label('Footer CTA Heading'),
                        TextInput::make('footer_cta_subtext')->label('Footer CTA Subtext'),
                    ]),

                ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        foreach ($data as $key => $value) {
            Setting::where('key', $key)->update(['value' => (string) $value]);
            Cache::forget("setting.$key");
        }

        Cache::forget('all_public_settings');

        Notification::make()
            ->title('Settings saved.')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Settings')
                ->action('save')
                ->color('primary'),
        ];
    }
}
