const containernav = document.querySelector('.rotate-container');
const words = containernav.querySelectorAll('.rotate-word');
const tl = new TimelineMax({ repeat: -1 });
const inVars = { opacity: 1, y: 50 };
const outVars = { opacity: 0, y: 100 };

words.forEach(word => {
    tl.to(word, 1.5, inVars);
    tl.to(word, 1.5, outVars);
});