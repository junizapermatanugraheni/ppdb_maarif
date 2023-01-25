const { Container } = require('postcss');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'green-say' : '#01762f',
      },
      lineHeight: {
        'extra-loose': '2.5',
        '12': '3rem',
      },
      container: {
        center: true,
      },
    },
  },
  plugins: [],
}