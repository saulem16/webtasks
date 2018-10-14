function makeL(sr)
{
  document.getElementsByTagName('img')[0].src = sr.target.src;
}
document.querySelectorAll('img')[1].addEventListener('click',makeL);
document.querySelectorAll('img')[2].addEventListener('click',makeL);
document.querySelectorAll('img')[3].addEventListener('click',makeL);
document.querySelectorAll('img')[4].addEventListener('click',makeL);
document.querySelectorAll('img')[5].addEventListener('click',makeL );

