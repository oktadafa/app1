/** @type {import('tailwindcss').Config} */
export default {
  content: [    "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",],
  theme: {
    extend: {
        colors : {
            'navbar' : '#005F73',
            'body' : '#0A9396'
        },
        fontFamily:{
            'kalam' : ['Kalam']
        }
    },
  },
  plugins: [ require("daisyui")],
}

