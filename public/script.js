let change_theme = document.getElementById('change_themes');
let colors = document.getElementById('colors');
let close = document.querySelector('#close');
let main = document.querySelector('main');
let body = document.querySelector('body');
//change theme button
// function changeThemeEvent(){
    change_theme.addEventListener('click',(e)=>{
        if(colors.style.display = 'none'){
            colors.style.display = 'block'
        }
        // console.log(colors)
    e.preventDefault();
    e.stopPropagation()

},false);
// }

//close
colors.firstElementChild.addEventListener('click',(e)=>{
    colors.style.display='none';

    if(colors.style.display = 'block'){
        colors.style.display = 'none'
    }
    // removeEventListener('click',changeThemeEvent);

    // console.log(e.target.parentElement);
    e.preventDefault();
    e.stopPropagation()

},false);

function blurTheme(){
    colors.style.display='none';

    if(colors.style.display = 'block'){
        colors.style.display = 'none'
    }
}
document.body.addEventListener('click', blurTheme, true);
let color = document.querySelectorAll('#color');
color.forEach((elem)=>{
    // if(!(elem.classList.contains('color-tick'))){
    //     elem.classList.add('color-tick');
    // }
    // else elem.classList.remove('color-tick');

    elem.addEventListener('click',(e)=>{
        //     elem.classList.remove('color-tick');
        //     if(!(elem.classList.contains('color-tick'))){
        //         elem.classList.add('color-tick');
        //     }
        //     elem.classList.remove('color-tick');
        //     if(!(e.target.classList.contains('color-tick'))){
        //     e.target.classList.add('color-tick');
        //     let bg = e.target.style.backgroundColor;
        //     main.style.backgroundColor = bg;
        // }else{
        //     e.target.classList.remove('color-tick');
        // }
        // e.target.classList.add('color-tick');
            let bg = e.target.style.backgroundColor;
            main.style.backgroundColor = bg;
        })
})
