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
        primary: {
          50: '#F0F7FF', // Nusana Background
          100: '#E0F0FF',
          200: '#BAE0FF',
          300: '#7CC4FF',
          400: '#36A8FF',
          500: '#00A1FF', // Nusana Light Blue
          600: '#095EB9', // Nusana Dark Blue
          700: '#0069D9',
          800: '#004C9E',
          900: '#003366',
        },
        nusana: {
          light: '#00A1FF',
          dark: '#095EB9',
          bg: '#F0F7FF',
        }
      },
      fontFamily: {
        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
      },
      container: {
        center: true,
        padding: '2rem',
      },
    },
  },
  plugins: [],
}
