module.exports = {
  future: {
    defaultLineHeights: true,
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true
  },
  experimental: {
    additionalBreakpoint: true,
    extendedFontSizeScale: true,
    extendedSpacingScale: true,
  },
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
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography')
    ]
}
