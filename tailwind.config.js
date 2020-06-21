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
        'gold': '#FFAC00',
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
