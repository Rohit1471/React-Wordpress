/** @type {import('tailwindcss').Config} */
export default {
  mode: 'jit',
  content: [
    './public/**/*.html',
    './src/**/*.{js,jsx,ts,tsx,vue}',
  ],
  theme: {
    extend: {
      colors: {
        primary:"#8543ff",
        secondary:"#e35038",
        tertiary:"#232968",
      },
      fontSize: {
        'h1': ['1.5rem', {
          lineHeight: '2rem',
          letterSpacing: '-0.01em',
          fontWeight: '700',
        }],
        'h2': ['1.3rem', {
          lineHeight: '2.25rem',
          letterSpacing: '-0.02em',
          fontWeight: '600',
        }],
        'h3': ['1.2rem', {
          lineHeight: '2.25rem',
          letterSpacing: '-0.02em',
          fontWeight: '500',
        }],
        'h4': ['1.1rem', {
          lineHeight: '2.25rem',
          letterSpacing: '-0.02em',
          fontWeight: '400',
        }],
        'h5': ['1rem', {
          lineHeight: '2.25rem',
          letterSpacing: '-0.02em',
          fontWeight: '400',
        }],
        'h6': ['0.8rem', {
          lineHeight: '2.25rem',
          letterSpacing: '-0.02em',
          fontWeight: '400',
        }],
        'body': ['0.6rem', {
          lineHeight: '2.25rem',
          letterSpacing: '-0.02em',
          fontWeight: '400',
        }],
      }
    },
  },
  plugins: [],
}

