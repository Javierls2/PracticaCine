/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './app/vista/*.{html,php}',
    './app/vista/templates/*.{html,php}'
  ],
  theme: {
    extend: {
      maxWidth: {
        'screen-2xl': '1600px',
        'screen-xl': '1500px',
      },
      backgroundImage: {
        //'header': "url('/assets/images/background-top.png')",
      },
      colors: {
        //darkblue: '#172755',
      }
    },
    theme: {
      fontFamily: {
        //'roboto': ['Roboto', 'Arial', 'sans-serif'],
      }      
    }
  },
  plugins: [
   
  ],
}

