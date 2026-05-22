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
                'card':      '0 2px 8px 0 rgba(0,0,0,0.06), 0 1px 2px 0 rgba(0,0,0,0.04)',
                'card-hover':'0 8px 24px 0 rgba(0,0,0,0.10), 0 2px 6px 0 rgba(0,0,0,0.06)',
                'glow':      '0 0 20px 0 rgba(251,146,60,0.35)',
            },
            animation: {
                'fade-in':    'fadeIn 0.4s ease-out',
                'slide-up':   'slideUp 0.5s ease-out',
                'slide-down': 'slideDown 0.3s ease-out',
            },
            keyframes: {
                fadeIn:    { '0%': { opacity: '0' },               '100%': { opacity: '1' } },
                slideUp:   { '0%': { opacity: '0', transform: 'translateY(16px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                slideDown: { '0%': { opacity: '0', transform: 'translateY(-8px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
            },
        },
    },

    plugins: [forms],
};
