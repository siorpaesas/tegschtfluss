/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'ingress': ['coda', 'Helvetica'],
                'sans' : ['Anaheim'],
                'titu' : ['Kite One']
            },
            fontSize: {
                xs: ['10px', '12px'],
                sm: ['12px', '16px'],
                lg: ['20px', '28px'],
                xl: ['28px', '36px'],
            },
        },
    },
    plugins: [],
}

