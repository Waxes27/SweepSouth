#!/bin/bash

npm install
npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
npx tailwindcss init

echo "module.exports = {
  purge: [
     './resources/**/*.blade.php',

     './resources/**/*.js',

     './resources/**/*.vue',

   ],  
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}" > tailwind.config.js

echo "@tailwind base;" >> ./resources/css/app.css
echo "@tailwind components;" >> ./resources/css/app.css
echo "@tailwind utilities;" >> ./resources/css/app.css

npm run dev
echo "add require(tailwindcss to webpack.mix.js)"