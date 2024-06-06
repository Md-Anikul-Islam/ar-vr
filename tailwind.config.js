/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                primary: "#c4161b",
            },
            fontFamily: {
                tiroBangla: ["Tiro Bangla", "sans-serif"],
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
