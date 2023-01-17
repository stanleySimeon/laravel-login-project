/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
        },
        extend: {},
    },
    plugins: [],
}
