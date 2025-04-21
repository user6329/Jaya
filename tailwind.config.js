/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./resources/css/**/*.css",
  ],
  theme: {
    extend: {
      colors: {
        jaya: {
          beige: '#e7dcc5',
          camel: '#b28764',
          cuero: '#4a2e1e',
          obscuro: '#2d1d12',
          dorado: '#a68c5d',
        },
      },
      fontFamily: {
        serif: ['"Playfair Display"', 'serif'],
        sans: ['Inter', 'sans-serif'], // o 'Lato'
      },
    },
  },
  plugins: [],
}


