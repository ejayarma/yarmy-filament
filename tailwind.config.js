/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ['Nunito', 'sans-serif'],
            display: ['Nunito', 'sans-serif'],
            body: ['Nunito', 'sans-serif']
            },
        extend: {},
    },
    plugins: [],
}

