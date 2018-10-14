function determinant() {
  let d=0;
  let a11=document.querySelector('#s11').value;
  let a12=document.querySelector('#s12').value;
  let a13=document.querySelector('#s13').value;
  let a21=document.querySelector('#s21').value;
  let a22=document.querySelector('#s22').value;
  let a23=document.querySelector('#s23').value;
  let a31=document.querySelector('#s31').value;
  let a32=document.querySelector('#s32').value;
  let a33=document.querySelector('#s33').value;
  d=a11*(a22*a33-a23*a32)-a12*(a21*a33-a23*a31)+a13*(a21*a32-a22*a31);

  document.getElementById('result').innerText=d;
}
var  b=document.querySelector('button');
b.addEventListener('click' , determinant);
