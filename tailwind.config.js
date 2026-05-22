import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            colors: {
                brand: {
                    50:  '#fff7ed',
                    100: '#ffedd5',
                    200: '#fed7aa',
                    300: '#fdba74',
                    400: '#fb923c',
                    500: '#f97316',
                    600: '#ea580c',
                    700: '#c2410c',
                    800: '#9a3412',
                    900: '#7c2d12',
                    950: '#431407',
                },
            },
            fontFamily: {
                display: ['Space Grotesk', ...defaultTheme.fontFamily.sans],
                sans:    ['Inter', ...defaultTheme.fontFamily.sans],
                mono:    ['JetBrains Mono', ...defaultTheme.fontFamily.mono],
            },
            boxShadow: {
                'card':       '0 2px 8px 0 rgba(0,0,0,0.06), 0 1px 2px 0 rgba(0,0,0,0.04)',
                'card-hover': '0 8px 24px 0 rgba(0,0,0,0.10), 0 2px 6px 0 rgba(0,0,0,0.06)',
                'glow':       '0 0 20px 0 rgba(251,146,60,0.40)',
                'glow-lg':    '0 0 50px 0 rgba(251,146,60,0.55)',
                'glow-sm':    '0 0 12px 0 rgba(251,146,60,0.22)',
                'lift':       '0 24px 60px -12px rgba(0,0,0,0.20), 0 4px 8px -2px rgba(0,0,0,0.08)',
            },
            animation: {
                'fade-in':    'fadeIn 0.4s ease-out both',
                'fade-up':    'fadeUp 0.6s ease-out both',
                'slide-up':   'slideUp 0.5s ease-out both',
                'slide-down': 'slideDown 0.3s ease-out both',
                'float':      'float 6s ease-in-out infinite',
                'float-slow': 'float 9s ease-in-out 1.5s infinite',
                'pulse-glow': 'pulseGlow 2.5s ease-in-out infinite',
                'marquee':    'marquee 34s linear infinite',
            },
            keyframes: {
                fadeIn:    { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
                fadeUp:    { '0%': { opacity: '0', transform: 'translateY(24px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                slideUp:   { '0%': { opacity: '0', transform: 'translateY(16px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                slideDown: { '0%': { opacity: '0', transform: 'translateY(-8px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%':      { transform: 'translateY(-14px)' },
                },
                pulseGlow: {
                    '0%, 100%': { boxShadow: '0 0 20px rgba(251,146,60,0.40)' },
                    '50%':      { boxShadow: '0 0 50px rgba(251,146,60,0.70), 0 0 80px rgba(251,146,60,0.25)' },
                },
                marquee: {
                    '0%':   { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-50%)' },
                },
            },
        },
    },

    plugins: [forms],
};
