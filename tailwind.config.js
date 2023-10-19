/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    colors: {
      transparent: "transparent",
      current: "currentColor",
      white: "#ffffff",
      black: "#000000",
      red: {
        500: "#D0011B",
        600: "#DB4437",
      },
      blue: {
        600: "#3B5998",
      },
      green: {
        50: "#E5F4DD",
        100: "#39FF14",
        400: "#30C301",
        500: "#4BD304",
        600: "#3AA700",
        700: "#349301",
        900: "#006400",
      },
      gray: {
        50: "#F5F5F7",
        80: "#BDBDBD",
        100: "#f5f5f9",
        200: "#E3E4EB",
        250: "#EBEBF0",
        300: "#D2D2D7",
        400: "#CAC4D0",
        500: "#C7C8D9",
        700: "#555770",
        750: "#858585",
        800: "#87878C",
        900: "#1B212C",
        950: "#1D1D1F",
      },
      dark: {
        200: "#8E90A6",
        700: "#17171b",
      },
    },
    extend: {
      width: {
        "360px": "360px",
      },
      height: {
        "50vh": "50vh",
        "70vh": "70vh",
      },
      minHeight: {
        "74px": "74px",
      },
      maxHeight: {
        "60vh": "60vh",
        "2/4": "50%",
        "3/4": "75%",
      },
      minWidth: {
        "170px": "170px",
      },
      maxWidth: {},
      backgroundImage: {
        "banner-linear":
          "linear-gradient(180deg, rgba(19, 19, 19, 0) 0%, #131313 41.67%)",
        "fav-def": "url('assets/icons/fav-def.png?v=1.00')",
        "fav-def-no-shadow": "url('assets/icons/fav-def-no-shadow.png?v=1.00')",
        "fav-hov": "url('assets/icons/fav-hover.png?v=1.00')",
        "fav-active": "url('assets/icons/fav-active.png?v=1.00')",
        "angle-up": "url('assets/icons/angle-up-solid.svg')",
        "angle-down": "url('assets/icons/angle-down-solid.svg')",
      },
    },
  },
  plugins: [],
};
