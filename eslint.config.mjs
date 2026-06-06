import { defineConfig } from "eslint/config";

export default defineConfig([
  {
    files: ["assets_yuino/js/**/*.js"],
    languageOptions: {
      globals: {
        window: "readonly",
        document: "readonly",
        jQuery: "readonly",
      },
      sourceType: "module",
    },
    rules: {
      "no-var": "error",
      "prefer-const": "warn",
      "semi": ["error", "always"],
      "no-unused-vars": "warn",
      "eqeqeq": ["error", "always"],
    },
  },
]);
