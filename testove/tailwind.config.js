const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            center: true,
            padding: {
                //DEFAULT: '1rem',
                //sm: '2rem',
                //lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme)),
            fontFamily: {
                sans: ['DM Sans', 'sans-serif'],
                argandir: ["pp-argandir", "sans-serif"]
            },
            borderRadius: {
                'sm': '0.25rem',
                'md': '0.5rem',
                'lg': '0.75rem',
                'xl': '1rem'
            }
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': '960px',
            'xl': '1280px',
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
