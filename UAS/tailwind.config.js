/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}",
            "./**/*.html"],
    theme: {
    extend: {
      colors: {
        custom: {
          'main-color': '#F4FEFF',
          'second-color': '#45BDBF'
        }
      },
    },
  },
  plugins: [],
}

