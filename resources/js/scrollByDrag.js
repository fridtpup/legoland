const scrollContainer = document.querySelector(".attractionList");
const btnBack = document.querySelector('#backBtn');
const btnNext = document.querySelector('#nextBtn');
let backBtn = document.getElementById('backBtn');
let nextBtn = document.getElementById('nextBtn');
let pos = { top: 0, y: 0};


const mouseDownHandler = function (e) {
    scrollContainer.style.cursor = 'grabbing';
    
    pos = {
        top: scrollContainer.scrollTop,
        y: e.clientY,
    };
        
    document.addEventListener('mousemove', mouseMoveHandler);
    document.addEventListener('mouseup', mouseUpHandler);
}

const mouseMoveHandler = function (e) {
    const dy = e.clientY - pos.y;

    scrollContainer.scrollTop = pos.top - dy;
}

const mouseUpHandler = function () {
    scrollContainer.style.cursor = 'grab';

    document.removeEventListener('mousemove', mouseMoveHandler);
    document.removeEventListener('mouseup', mouseUpHandler);
}

scrollContainer.addEventListener('mousedown', mouseDownHandler)

btnNext.addEventListener('click', function () {
    scrollContainer.scrollTop += 355
})

btnBack.addEventListener('click', function () {
    scrollContainer.scrollTop -= 355
})