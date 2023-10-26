var zoombody = document.getElementById('zoombody')

var percentage = 1
var percentageAdd = 0.1

var zoomin_button = document.querySelector('#zoomin')
zoomin_button.addEventListener('click', function(){
    if (percentage <= 1.8)     {
        zoombody.style.zoom = percentage + percentageAdd
        percentage = percentage + percentageAdd
    }
})

var zoomout_button = document.querySelector('#zoomout')
zoomout_button.addEventListener('click', () => {
  if (percentage > 0.7)     {
    zoombody.style.zoom = percentage - percentageAdd
    percentage = percentage - percentageAdd
}
})

resetBtn.addEventListener("click", function () {
    percentage = 1    
    zoombody.style.zoom = percentage
})