export default [
  {
    ignores: [
      'js/tests/vendor/**',
      'js/tests/phantom.js',
      'js/tests/server.js'
    ]
  },
  {
    files: ['js/**/*.js'],
    languageOptions: {
      ecmaVersion: 5,
      sourceType: 'script'
    },
    rules: {
      semi: ['error', 'always'],
      'no-unused-vars': ['warn', { vars: 'all', args: 'after-used', varsIgnorePattern: '^_', argsIgnorePattern: '^_' }],
      'no-var': 'off',
      'prefer-const': 'off'
    }
  },
  {
    rules: {}
  }
];

