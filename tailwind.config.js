const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "gradient-red": "#edaef9ff",
                "gradient-blue": "#81b1faff",
                instagram: "#F77737",
            },
        },
    },

    plugins: [require("@tailwindcss/forms"), require("daisyui")],
};
