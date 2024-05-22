/** @type {import('tailwindcss').Config} */
export default {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        primary: 'poppins',
      },
      colors: {
        utama: '#000000',
        kedua: '#120f0e',
        ketiga: '#1b1715',
      }
    },
  },
  variants: {
    extend: {
      display: ['group-focus'],
    },
  },
  plugins: [],
}

