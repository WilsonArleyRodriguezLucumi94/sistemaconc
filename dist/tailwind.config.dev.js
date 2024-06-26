"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;

var _defaultTheme = _interopRequireDefault(require("tailwindcss/defaultTheme"));

var _forms = _interopRequireDefault(require("@tailwindcss/forms"));

var _typography = _interopRequireDefault(require("@tailwindcss/typography"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

/** @type {import('tailwindcss').Config} */
var _default = {
  content: ['./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php', './vendor/laravel/jetstream/**/*.blade.php', './storage/framework/views/*.php', './resources/views/**/*.blade.php'],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree'].concat(_toConsumableArray(_defaultTheme["default"].fontFamily.sans))
      }
    }
  },
  plugins: [_forms["default"], _typography["default"]]
};
exports["default"] = _default;
//# sourceMappingURL=tailwind.config.dev.js.map
