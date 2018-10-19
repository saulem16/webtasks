let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];
console.log(cars[0].brand);
sum=0;
count=0;
for (let i in cars){
  card =document.createElement('div');
  card.className='card';
  image=document.createElement('img');
  image.width=100;
  brand1=document.createElement('span');
  model1=document.createElement('span');
  icon = document.createElement('img');
  icon.src='https://image.flaticon.com/icons/svg/126/126157.svg';
  icon.width=20;
  icon.className = 'basket';

  image.src=cars[i].image_url;
  brand1.innerHTML=cars[i].brand;
  model1.innerHTML=cars[i].model;
  card.appendChild(image);
  card.appendChild(brand1);
  card.appendChild(model1);
  card.appendChild(icon);
  document.getElementById('cars').appendChild(card);
}
function buy(e) {
  par=e.target.parentNode;
  br=par.querySelector('span').innerHTML;
  pr=0;
  for(var i of cars){
    if(br==i.brand){
      pr=i.price;
    }
  }
  console.log(br);
  if(e.currentTarget.src=='https://image.flaticon.com/icons/svg/126/126157.svg'){
    e.currentTarget.src='https://image.flaticon.com/icons/svg/60/60992.svg';
    sum+=pr;
    count++;
  }
  else {
    e.currentTarget.src='https://image.flaticon.com/icons/svg/126/126157.svg';
    sum-=pr;
    count--;
  }
  document.querySelector('#sum').innerHTML=sum;
  document.querySelector('#items').innerHTML=count;
}
const btn=document.querySelectorAll('.basket');
for(var i of btn){
  i.addEventListener('click', buy);
  console.log(i);
}
