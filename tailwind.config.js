/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.jsx",
    ],
  theme: {
    extend: {},
    fontFamily: {
      "roboto":['"Roboto"','sans-serif']
    },
  },
  plugins: [],
}
