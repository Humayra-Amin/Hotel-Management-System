
document.addEventListener("scroll", (event) => {
  let lastKnownScrollPosition = window.scrollY;
  let headerEl = document.querySelector('#top-navbar');
  
  if(lastKnownScrollPosition > headerEl.offsetHeight){
      headerEl.classList.add('sticky-header')
  }else{
      headerEl.classList.remove('sticky-header')
  }

});


// $(function(){
//   $('.carousal') .carousal({
//     interval: 1000* 5 // 1000 x 1= 1 second
//   });
// });
