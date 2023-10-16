/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: ["./resources/**/*.{blade.php, php, js}"],
    theme: {
        extend: {
            fontFamily: {
                serif: ["Playfair Display", "serif"],
                sans: ["Inter", "sans-serif"],
                vibes: ["Great Vibes", "sans"],
            },
            backgroundColor: {
                primary: "var(--color-primary)",
                secondary: "var(--color-secondary)",
                accent: "var(--color-accent)",
                dark: "var(--bg-dark)",
                light: "var(--bg-light)",
            },
            textColor: {
                primary: "var(--color-primary)",
                secondary: "var(--color-secondary)",
                accent: "var(--color-accent)",
                dark: "var(--text-dark)",
                light: "var(--text-light)",
            },
            borderColor: {
                primary: "var(--color-primary)",
                secondary: "var(--color-secondary)",
                accent: "var(--color-accent)",
                dark: "#var(--text-dark)",
                light: "var(--text-light)",
            },
            gradientColorStops: {
                primary: "var(--color-primary)",
                secondary: "var(--color-secondary)",
            },
        },
    },
    plugins: [],
};
