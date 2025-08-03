// Navbar
function handleScroll() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.querySelector(".header").classList.add("scrolled");
  } else {
    document.querySelector(".header").classList.remove("scrolled");
  }
}

window.addEventListener("scroll", handleScroll);

// Gallery
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: [
    "<i class='fas fa-chevron-left'></i>",
    "<i class='fas fa-chevron-right'></i>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
    1000: {
      items: 2,
    },
    1200: {
      items: 2,
    },
    1400: {
      items: 3,
    },
  },
});

// Form Validation
function validateForm() {
  var nameInput = document.getElementById("name");
  var checkInDateInput = document.getElementById("check-in-date");
  var checkInTimeInput = document.getElementById("check-in-time");
  var checkOutDateInput = document.getElementById("check-out-date");
  var checkOutTimeInput = document.getElementById("check-out-time");
  var personsInput = document.getElementById("persons");
  var roomSelect = document.getElementById("room");
  var termsCheckbox = document.querySelector('input[name="terms"]');
  var currentDate = new Date();

  // 1. Validate Check-in Date and Time
  var selectedCheckInDate = new Date(
    checkInDateInput.value + "T" + checkInTimeInput.value
  );
  if (selectedCheckInDate < currentDate) {
    alert("Please select a future date and time for check-in.");
    return false;
  }

  // 2. Validate Name
  if (nameInput.value.trim() === "") {
    alert("Please enter your name.");
    return false;
  }

  // 3. Validate Room Selection
  if (roomSelect.value === "") {
    alert("Please select a room type.");
    return false;
  }

  // 4. Validate Number of Persons
  var persons = parseInt(personsInput.value);
  if (persons <= 0 || isNaN(persons)) {
    alert("Please enter a valid number of persons.");
    return false;
  }

  // 5. Validate Terms and Conditions Checkbox
  if (!termsCheckbox.checked) {
    alert("Please accept the terms and conditions.");
    return false;
  }

  // 6. Validate Check-out Date and Time
  var selectedCheckOutDate = new Date(
    checkOutDateInput.value + "T" + checkOutTimeInput.value
  );
  if (
    selectedCheckOutDate <= selectedCheckInDate ||
    selectedCheckOutDate - selectedCheckInDate < 900000 // 900000 milliseconds = 15 minutes
  ) {
    alert("Please select a valid check-out date and time.");
    return false;
  }

  // If all validations pass, the form will be submitted
  return true;
}
