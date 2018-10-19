function  onClick(e) {
  text=e.target.parentNode;
  text.setAttribute('data-status','done');
}
const  buttons=document.querySelectorAll('button');
for (const button of buttons) {
  button.addEventListener('click', onClick);
}
