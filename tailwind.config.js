/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    darkMode: "class",
    variants: {
        backgroundColor: ["responsive", "hover", "focus", "active", "disabled"],
        textColor: ["responsive", "hover", "focus", "active", "disabled"],
    },
};
