const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './_pages/**/*.blade.php',
        './resources/views/**/*.blade.php',
        './vendor/hyde/framework/resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                lemon: '#FFDF33',
                skyblue: '#A2D2FF',
                sand: '#FEFCE8',
                charcoal: '#27272A',
            },
            fontFamily: {
                serif: ['Fraunces', ...defaultTheme.fontFamily.serif],
                sans: ['"DM Sans"', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                retro: '4px 4px 0px 0px rgba(39, 39, 42, 1)',
            },
            typography: {
                DEFAULT: {
                    css: {
                        lineHeight: '1.5em',
                        maxWidth: '96ch',
                        color: '#27272A',
                        h2: {
                            marginBottom: '0.75em',
                            marginTop: '1.5em',
                        },
                        a: {
                            color: '#27272A',
                            fontWeight: 'unset',
                            textDecoration: 'underline',
                            textDecorationColor: '#FFDF33',
                            textDecorationThickness: '4px',
                            textUnderlineOffset: '2px',
                            transitionProperty: 'background-color',
                            transitionDuration: '150ms',
                            '&:hover': {
                                backgroundColor: '#FFDF33',
                            },
                        },
                        blockquote: {
                            backgroundColor: '#A2D2FF33',
                            borderLeftColor: '#27272A',
                            borderLeftWidth: '4px',
                            color: 'unset',
                            fontWeight: 500,
                            fontStyle: 'unset',
                            lineHeight: '1.25em',
                            paddingLeft: '0.75em',
                            paddingTop: '.25em',
                            paddingBottom: '.25em',
                            marginTop: '1em',
                            marginBottom: '1em',
                            p: {
                                paddingRight: '.25em',
                                marginTop: '.25em',
                                marginBottom: '.25em',
                            },
                            'p::before': {
                                content: 'unset',
                            },
                            'p::after': {
                                content: 'unset',
                            },
                        },
                        'code:not(pre code)': {
                            font: 'unset',
                            backgroundColor: '#A2D2FF40',
                            paddingLeft: '4px',
                            paddingRight: '4px',
                            marginLeft: '-2px',
                            marginRight: '1px',
                            borderRadius: '4px',
                            maxWidth: '80vw',
                            overflowX: 'auto',
                            verticalAlign: 'top',
                            wordBreak: 'break-all'
                        },
                        'code::before': {
                            content: 'unset',
                        },
                        'code::after': {
                            content: 'unset',
                        },
                        pre: {
                            backgroundColor: '#27272A',
                            borderRadius: '0.75rem',
                            marginTop: '1rem',
                            marginBottom: '1rem',
                            overflowX: 'auto',
                            code: {
                                fontFamily: "'Fira Code Regular', Consolas, Monospace, 'Courier New'",
                            },
                        },
                        img: {
                            borderRadius: '1rem',
                            borderWidth: '2px',
                            borderColor: '#27272A',
                        },
                    },
                },
            },
        },
    },

    plugins: [
        require('@tailwindcss/typography')
    ],
};
