module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    fontFamily: {
      display: ['EBGaramond','Gilroy', 'sans-serif'],
      body: ['EBGaramond','Graphik', 'sans-serif'],
    },
    extend: {
      colors: {
        'pink': '#ec008b',
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
