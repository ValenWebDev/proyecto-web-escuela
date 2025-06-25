var carouselImages = document.querySelectorAll(".carousel img");
var previousBtn = document.querySelector(".carousel-btn.previous");
var nextBtn = document.querySelector(".carousel-btn.next");
var currentImageIndex = 0;

function showImage(index) {
  carouselImages.forEach(function (image) {
    image.classList.remove("active");
  });
  carouselImages[index].classList.add("active");
}

previousBtn.addEventListener("click", function () {
  currentImageIndex =
    (currentImageIndex - 1 + carouselImages.length) % carouselImages.length;
  showImage(currentImageIndex);
});

nextBtn.addEventListener("click", function () {
  currentImageIndex = (currentImageIndex + 1) % carouselImages.length;
  showImage(currentImageIndex);
});

setInterval(function () {
  currentImageIndex = (currentImageIndex + 1) % carouselImages.length;
  showImage(currentImageIndex);
}, 5000);