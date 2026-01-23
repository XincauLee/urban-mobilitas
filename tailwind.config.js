/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        // TAMBAHKAN BARIS INI:
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                oxford: "#002147",
                gold: "#C5A059",
                "paper-white": "#F9F9F7",
            },
            fontFamily: {
                serif: ["Playfair Display", "serif"],
                sans: ["Manrope", "sans-serif"],
            },
        },
    },
    plugins: [],
};
