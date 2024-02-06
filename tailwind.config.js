import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors:{
            colorText:'#fff',
            colorPrimary: '#FFFFEC',
            colorSecondary:'#F1E4C3',
            colorThird:'#C6A969',
            colorgreen:'#597E52',
            colorBg:'#04152d',
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans], 
                josefin: ["'Josefin Sans', sans serif"],
            },
        },
    },

    plugins: [forms],
};
