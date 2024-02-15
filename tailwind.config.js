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
<<<<<<< HEAD
        colors:{
            colorText:'#fff',
            colorPrimary: '#FFFFEC',
            colorSecondary:'#F1E4C3',
            colorThird:'#C6A969',
            colorgreen:'#597E52',
            colorBg:'#04152d',
=======
        colors: {
            colorText: '#fff',
            colorPrimary: '#FFFFEC',
            colorSecondary: '#F1E4C3',
            colorThird: '#C6A969',
            colorgreen: '#597E52',
            colorBg: '#04152d',
            colorchoco: '#D2B48C',
>>>>>>> f33fa90ab6eddb8b857d38c5c6f78f0ac5ada7d3
        },
        extend: {
            backgroundImage:{
                hero: "url('/assets/heroimg.jpg')"
            },
            fontFamily: {
<<<<<<< HEAD
                sans: ['Figtree', ...defaultTheme.fontFamily.sans], 
                josefin: ["'Josefin Sans', sans serif"],
=======
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                julius: ["Julius Sans One"],
                josefin: ["'Josefin Sans', 'sans serif'"],
>>>>>>> f33fa90ab6eddb8b857d38c5c6f78f0ac5ada7d3
            },
        },
    },
    
    plugins: [
        require('preline/plugin'),
        forms],
};
