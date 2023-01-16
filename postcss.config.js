module.exports = {
  plugins: {
    tailwindcss: {
        content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.css",
            "./resources/**/*.vue",
        ],
    },
    autoprefixer: {
        grid: true,
    },
  },
}
