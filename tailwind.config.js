import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/homepage.blade.php',
    ],

    theme: {
        colors: {
            colorText: '#fff',
            colorPrimary: '#FFFFEC',
            colorSecondary: '#F1E4C3',
            colorThird: '#C6A969',
            colorgreen: '#597E52',
            colorBg: '#04152d',
            colorchoco: '#D2B48C',
        },
        extend: {
            backgroundImage:{
                hero: "url('/assets/heroimg.jpg')"
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                julius: ["Julius Sans One"],
                josefin: ["'Josefin Sans', 'sans serif'"],
            },
        },
    },
    
    plugins: [forms],
};
