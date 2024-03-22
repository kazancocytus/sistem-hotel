import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/homepage.blade.php',
        'node_modules/preline/dist/*.js',
    ],

    theme: {
        colors: {
            colorText: '#fff',
            colorPrimary: '#FFFFEC',
            colorSecondary: '#F1E4C3',
            colorThird: '#C6A969',
            colorgreen: '#597E52',
            colorBg: '#04152d',
            colordanger: '#dc2626',
            colorsucceshover: '#16a34a',
            colorcancelhover: '#B91C1C',
            colorchoco: '#D2B48C',
            color1: '#556B2F',
            color2: '#8A9A5B',
            color3: '#A9BA9D',
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
    
    plugins: [
        require('preline/plugin'),
        forms],
};
 