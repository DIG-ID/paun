/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './footer.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    colors: {
      'main-green': '#3D4F48',
      'main-blue': '#0071BA',
      'main-red': '#D12329',
      'bg-color': '#3D4F48',
      'text-color': '#FEFAE0',
      'text-grey': '#FEFAE0',
      'white': '#FFFFFF',
      'black': '#000000',
    },
    fontFamily: {
      sans: ['Roboto Flex', 'sans-serif'],
    },

    extend: {
      letterSpacing: {
        wider: '0.05em',
        widest: '.11em',
      },
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}
