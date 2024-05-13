function showDetailsButton(element){
    var button = element.querySelector('.details-button');
    button.style.opacity = '1';
}

function hideDetailsButton(element){
    var button = element.querySelector('.details-button');
    button.style.opacity = '0';
}

function redirectToPage(){
    window.location.href = '/code/rent.html';
}