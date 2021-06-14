var images = [
    'book pic.jpg',
    'exam pic.jpeg',
    'exam pic.jpeg',
    '2scholarship pic.jpeg',
    '2 education loan pic.jpeg',
    'education loan.jpeg',
];

var num = 0;
function next(){
    var slider = document.getElementById('slider');
    num++;
    if(num >= images.length) {
        num = 0;
    }
    slider.src =images[num];
}
function prev(){
    var slider = document.getElementById('slider');
    num--;
    if(num < 0) {
        num = images.length-1;
    }
    slider.src =images[num];
}