
const nav = document.querySelector('.nav');
const navLinks = nav.querySelectorAll('a');

window.addEventListener('scroll', () => {
  if (window.scrollY > nav.offsetHeight + 150) {
    nav.classList.add('active');
  } else {
    nav.classList.remove('active');
  }
});

navLinks.forEach((link) => {
  link.addEventListener('click', function(event) {
    event.preventDefault();

    navLinks.forEach((link) => {
      link.classList.remove('text-gray-800');
      link.classList.remove('font-bold'); // Remove the 'font-bold' class from all links
    });

    this.classList.add('text-gray-800');
    this.classList.add('font-bold');
  });
});


const textId=document.getElementById('text');
const text="Welcome To My Blog Website"
let index=1;
let speed=330/2;

writeText();
function writeText(){

    textId.innerText=text.slice(0,index);

    index++;

    if(index>text.length){
        index=1;
    }

    setTimeout(writeText,speed);

}

