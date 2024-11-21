
document.querySelector('.menu-toggle').addEventListener('click', function () {
    document.querySelector('.nav-links').classList.toggle('active');
});


// document.querySelectorAll('.nav-links ul li a.').forEach(item => {
//     item.addEventListener('click', function() {
//       document.querySelectorAll('.nav-links ul li a').forEach(link => link.classList.remove('active'));
//       this.classList.add('active');
//     });
//   });

$(document).ready(function() {
  $('.menu-toggle').click(function() {
    $('.hidden-menu').slideToggle("slow");
    // Alternative animation for example
    // slideToggle("fast");
  });
});