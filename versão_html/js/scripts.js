const html = document.querySelector('html')
const checkbox = document.querySelector('input[name=theme]')

const getStyle = (element, style) =>
  window.getComputedStyle(element).getPropertyValue(style)

const initialColors = {
  bg: getStyle(html, '--bg'),
  bgContainer: getStyle(html, '--bg-container'),
  colorHeader: getStyle(html, '--color-header'),
  h2Color: getStyle(html, '--h2-color'),

  bgInput: getStyle(html, '--bg-input'),
  bdInput: getStyle(html, '--bd-input'),
  bdButton: getStyle(html, '--bd-button'),
  bgLin: getStyle(html, ' --bg-lin'),
  buttonCalc: getStyle(html, '--button-calc'),
}

const darkMode = {
  bg: '#3f3f44',
  bgContainer: '#2c2c31',
  colorHeader: '#000000',
  h2Color: '#ffffff',
  bgInput: '#3f3f44',
  bdInput: '#2c2c31',
  bdButton: '#ffffff',
  bgLin: '#2c2c31',
  buttonCalc: '#0F4A63 ',

 
  
}

const transformKey = key => '--' + key.replace(/([A-Z])/, '-$1').toLowerCase()

const changeColors = colors => {
  Object.keys(colors).map(key =>
    html.style.setProperty(transformKey(key), colors[key])
  )
}

checkbox.addEventListener('change', ({ target }) => {
  target.checked ? changeColors(darkMode) : changeColors(initialColors)
})
