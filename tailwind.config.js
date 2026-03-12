import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import flowbitePlugin from 'flowbite/plugin'; // Importe o plugin aqui

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // Adicione as cores que você tentou usar no textarea aqui:
            colors: {
                brand: '#3b82f6', // ajuste para sua cor
                heading: '#111827',
                'neutral-secondary-medium': '#f9fafb',
                'default-medium': '#d1d5db',
            },
            borderRadius: {
                'base': '8px',
            }
        },
    },

    plugins: [
        forms,
        flowbitePlugin // Use a variável importada em vez de require
    ],
};
