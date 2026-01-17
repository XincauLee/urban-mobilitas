/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                // Warna ini WAJIB ada agar sesuai desain
                oxford: "#002147",
                gold: "#C5A059",
                "paper-white": "#F9F9F7",
            },
            fontFamily: {
                // Font ini WAJIB ada agar terlihat elegan
                serif: ["Playfair Display", "serif"],
                sans: ["Manrope", "sans-serif"],
            },
        },
    },
    plugins: [],
};
