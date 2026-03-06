/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: ["./resources/**/*.{blade.php, php, js, vue}"],
    theme: {
        extend: {
            fontFamily: {
                serif: ["Playfair Display", "serif"],
                sans: ["Inter", "sans-serif"],
                vibes: ["Great Vibes", "cursive"],
            },
            colors: {
                // Legacy aliases so existing classes keep working
                primary: "rgb(var(--xprt-navy) / <alpha-value>)",
                secondary: "rgb(var(--xprt-gold) / <alpha-value>)",
                accent: "rgb(var(--xprt-rose) / <alpha-value>)",
                dark: "rgb(var(--xprt-surface-dark) / <alpha-value>)",
                light: "rgb(var(--xprt-surface-light) / <alpha-value>)",
                brand: {
                    navy: "rgb(var(--xprt-navy) / <alpha-value>)",
                    gold: "rgb(var(--xprt-gold) / <alpha-value>)",
                    goldText: "rgb(var(--xprt-gold-text) / <alpha-value>)",
                    rose: "rgb(var(--xprt-rose) / <alpha-value>)",
                    bg: "rgb(var(--xprt-bg) / <alpha-value>)",
                    text: "rgb(var(--xprt-text) / <alpha-value>)",
                    surfaceDark:
                        "rgb(var(--xprt-surface-dark) / <alpha-value>)",
                    surfaceLight:
                        "rgb(var(--xprt-surface-light) / <alpha-value>)",
                },
            },
            borderRadius: {
                xl: "var(--radius)",
            },
        },
    },
    plugins: [],
};
