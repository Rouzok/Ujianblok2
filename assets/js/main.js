const navBtn = document.querySelector("#menu");
const menuBar = document.querySelector('[role="menubar"]');

navBtn.addEventListener("click", () => {
	const isExpanded = JSON.parse(navBtn.getAttribute("aria-expanded"));
	navBtn.setAttribute("aria-expanded", !isExpanded);
	menuBar.classList.toggle("hidden");
	menuBar.classList.toggle("flex");
});

const wrap1 = document.getElementById("wrapHover1");
const hoverNav1 = document.getElementById("hoverNav1");
const ulNav1 = document.getElementById("ulNav1");

const wrap2 = document.getElementById("wrapHover2");
const hoverNav2 = document.getElementById("hoverNav2");
const ulNav2 = document.getElementById("ulNav2");

// hoverNav.onmouseover = function () {
// 	ulNav.classList.remove("hidden");
// 	hoverNav.firstElementChild.classList.remove("rotate-0");
// 	hoverNav.firstElementChild.classList.add("rotate-90");
// 	if (
// 		!ulNav2.classList.contains("hidden") &&
// 		hoverNav2.firstElementChild.classList.contains("rotate-90")
// 	) {
// 		ulNav2.classList.add("hidden");
// 		hoverNav2.firstElementChild.classList.remove("rotate-90");
// 	}
// };

// ulNav.onmouseleave = function () {
// 	ulNav.classList.add("hidden");
// 	hoverNav.firstElementChild.classList.remove("rotate-90");
// 	hoverNav.firstElementChild.classList.add("rotate-0");
// };

// hoverNav2.onmouseover = function () {
// 	ulNav2.classList.remove("hidden");
// 	hoverNav2.firstElementChild.classList.remove("rotate-0");
// 	hoverNav2.firstElementChild.classList.add("rotate-90");
// 	if (
// 		!ulNav.classList.contains("hidden") &&
// 		hoverNav.firstElementChild.classList.contains("rotate-90")
// 	) {
// 		ulNav.classList.add("hidden");
// 		hoverNav.firstElementChild.classList.remove("rotate-90");
// 	}
// };

// ulNav2.onmouseleave = function () {
// 	ulNav2.classList.add("hidden");
// 	hoverNav2.firstElementChild.classList.remove("rotate-90");
// 	hoverNav2.firstElementChild.classList.add("rotate-0");
// };

// wrap1
wrap1.onmouseover = function () {
	ulNav1.classList.remove("hidden");
	hoverNav1.firstElementChild.classList.toggle("rotate-90");
};
wrap1.onmouseleave = function () {
	ulNav1.classList.add("hidden");
	hoverNav1.firstElementChild.classList.toggle("rotate-90");
};

// wrap2
wrap2.onmouseover = function () {
	ulNav2.classList.remove("hidden");
	hoverNav2.firstElementChild.classList.toggle("rotate-90");
};
wrap2.onmouseleave = function () {
	ulNav2.classList.add("hidden");
	hoverNav2.firstElementChild.classList.toggle("rotate-90");
};
