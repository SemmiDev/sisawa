/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {},
    },
    daisyui: {
        themes: [
            {
                light: {
                    ...require("daisyui/src/theming/themes")["light"],
                    // primary: "blue",
                    secondary: "#FF6C22",
                    accent: "#DE81FF",
                    ".btn": {
                        "border-radius": "1rem",
                    },
                    ".btn-circle": {
                        "border-radius": "9999px",
                    },
                    ".btn-secondary": {
                        color: "#120616",
                    },
                    ".btn-warning": {
                        color: "#120616",
                    },
                    ".btn-success": {
                        color: "#120616",
                        "background-color": "#88D32E",
                        "border-color": "#88D32E",
                    },
                    ".btn-error": {
                        color: "#120616",
                        "background-color": "#F7ADAD",
                        "border-color": "#F7ADAD",
                    },
                    ".btn-slate": {
                        "background-color": "#A6BB8D",
                        "border-color": "#A6BB8D",
                    },
                },
            },
        ],
    },
    plugins: [require("daisyui")],
};
