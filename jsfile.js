
   
  // fixed header
  const body = document.querySelector("body");
  const navbar = document.querySelector(".navbar");
  const menu = document.querySelector(".menu-list");
  const menuBtn = document.querySelector(".menu-btn");
  const cancelBtn = document.querySelector(".cancel-btn");
  menuBtn.onclick = ()=>{
    menu.classList.add("active");
    menuBtn.classList.add("hide");
    body.classList.add("disabledScroll");
  }
  cancelBtn.onclick = ()=>{
    menu.classList.remove("active");
    menuBtn.classList.remove("hide");
    body.classList.remove("disabledScroll");
  }

  window.onscroll = ()=>{
    this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
  }

  function animateValue(id, start, end, duration) {
  if (start === end) return;
  var range = end - start;
  var current = start;
  var increment = end > start? 1 : +1;
  var stepTime = Math.abs(Math.floor(duration / range));
  var obj = document.getElementById(id);
  var timer = setInterval(function() {
      current += increment;
      obj.innerHTML = current;
      if (current == end) {
          clearInterval(timer);
      }
  }, stepTime);
}

animateValue("awards", 0, 12, 7000);
animateValue("projects", 0, 50, 7000);
animateValue("clients", 0, 200, 7000);
animateValue("shoots", 0, 1200, 4400);  

//selecting all required elements
    const filterItem = document.querySelector(".items");
    const filterImg = document.querySelectorAll(".image");

    window.onload = ()=>{
      filterItem.onclick =(selectedItem)=>{
        if (selectedItem.target.classList.contains("item")) {
          filterItem.querySelector(".active").classList.remove("active");
          selectedItem.target.classList.add("active");
          let filterName =selectedItem.target.getAttribute("data-name");
          filterImg.forEach((image)=>{
            let filterImages = image.getAttribute("data-name");
            if((filterImages == filterName) || (filterName== "all")){
              image.classList.remove("hide");
              image.classList.add("show");
            }
            else{
              image.classList.add("hide");
              image.classList.remove("show");
            }
          })
        }
      }
      for (let index =0; index < filterImg.length; index++){
        filterImg[index].setAttribute("onclick","preview(this)");
      }
    }

    //selecting  all required elements
    const previewBox = document.querySelector(".preview-box"),
    previewImg = previewBox.querySelector("img"),
    closeIcon = previewBox.querySelector(".icon");

    // preview function
    function preview(element){
      let selectedPrevImg = element.querySelector("img").src;
      previewImg.src = selectedPrevImg;
      previewBox.classList.add("show");
      closeIcon.onclick = ()=>{
        previewBox.classList.remove("show");
      }
    }
  $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});