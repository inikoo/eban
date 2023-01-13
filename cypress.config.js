const { defineConfig } = require("cypress");

module.exports = defineConfig({
  projectId: "69za3z",

  e2e: {
    setupNodeEvents(on, config) {
      // implement node event listeners here
    },
  },

  component: {
    devServer: {
      framework: "vue",
      bundler: "vite",
    },
  },
});
