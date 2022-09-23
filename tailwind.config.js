/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./application/views/**/*.{html,js,php}"],
	theme: {
		extend: {
			colors: {
				Blue: "#0369CA",
				Red: "#F90000",
			},
		},
	},
	plugins: [],
};
