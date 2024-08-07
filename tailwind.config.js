/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [

      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        colors:{
                 'btn': '#834b96',
                 'btn-light':'#f0eefe',
                 'dark':'#373848',
                 'blue': '#5f4bdb',
                 'star': '#ff841e',
                 'bg': '#f9f9fa',
                 'blue-l':'#e8e9fe',
                 'green':'#3ecd65',
                 'green-l':'#e9ffef',
                 'btn-orange':'#EB9422',

        }
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }

