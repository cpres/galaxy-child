//Close overlay code
const overlay = document.querySelector('.video-overlay');
const x = document.querySelector('#close');

x.addEventListener('click', closeOverlay);
function closeOverlay() {
  overlay.style.display = 'block';
  overlay.classList.remove('fade-in');
  overlay.classList.add('fade-out');
};
function works(){
console.log("it verks!");
};