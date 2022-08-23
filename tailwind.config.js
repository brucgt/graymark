/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './templates/**/*.php',
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'primary-green': '#A8D93A',
        'secondary-dark': '#156E5C',
      },
      fontFamily: {
        'compact': ['Oswald', 'sans-serif'],
        'broad': ['Raleway', 'sans-serif'],
      }
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
