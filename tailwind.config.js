module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#14b8a6',
        secondary: '#64748b',
        dark: '#0f172a',
        smoot: '#decc90',
        fresh:'#cdd698'
        
      },
      screens: {
        '2xl' : '1320px'
      },
    },
  },
  plugins: [],
}
