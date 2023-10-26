// let body = document.querySelector('body')
// let whiteBtn = document.querySelector('.whiteBtn');
// let darkBtn = document.querySelector('.darkBtn');

// function changeTheme (string) {
//     let theme = string;

//     if (theme == "darkTheme") {
//         body.classList.add('dark')    
//         whiteBtn.classList.remove('remove');
//         darkBtn.classList.add('remove');
//     } else  {
//         body.classList.remove('dark')    
//         whiteBtn.classList.add('remove');
//         darkBtn.classList.remove('remove');
//     }
// }
  
const body = document.querySelector('body')

const darkBtn = document.querySelector('.darkBtn');
const whiteBtn = document.querySelector('.whiteBtn');

let darkMode = localStorage.getItem("dark-mode");

const enableDarkMode = () => {
  body.classList.add("dark");
  body.classList.remove("contraste");
        
  whiteBtn.classList.remove('remove');
  darkBtn.classList.add('remove');

  localStorage.setItem("dark-mode", "enabled");
};

const disableDarkMode = () => {
  body.classList.remove("dark");
  body.classList.remove("contraste");

  whiteBtn.classList.add('remove');
  darkBtn.classList.remove('remove');

  localStorage.setItem("dark-mode", "disabled");
};

if (darkMode === "enabled") {
  enableDarkMode(); // set state of darkMode on page load
}

darkBtn.addEventListener("click", function () {
  darkMode = localStorage.getItem("dark-mode"); // update darkMode when clicked
  if (darkMode === "disabled") {
    enableDarkMode();
  } else {
    disableDarkMode();
  }
});

whiteBtn.addEventListener("click", function () {
    darkMode = localStorage.getItem("dark-mode"); // update darkMode when clicked
    if (darkMode === "disabled") {
      enableDarkMode();
    } else {
      disableDarkMode();
    }
  });

  function changeTheme (string) {
    let theme = string;

    if (theme == "contraste") {
        body.classList.add('contraste')    
        
        body.classList.remove('dark')    
        
        whiteBtn.classList.add('remove');
        darkBtn.classList.remove('remove'); 
    } else  {
        body.classList.remove('contraste')    
    }
}

const resetBtn = document.querySelector('.reset')

resetBtn.addEventListener("click", function () {
  darkMode = localStorage.getItem("dark-mode"); 
    if (darkMode === "enable") {
      enableDarkMode();
    } else {
      disableDarkMode();
    }
})