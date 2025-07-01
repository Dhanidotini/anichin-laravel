/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: '#6d28d9',
                secondary: '#4c1d95',
                accent: '#8b5cf6',
                dark: '#1e1b4b',
                light: '#f5f3ff'
            }
        }
    },
    plugins: [],
}
